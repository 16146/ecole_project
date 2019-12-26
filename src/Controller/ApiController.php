<?php

namespace App\Controller;

use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Classes;
use App\Entity\Students;
use Symfony\Component\Form\Extension\Core\Type\{TextType,PasswordType,TextareaType,SubmitType};
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use App\Form\ClassesType;
use App\Form\StudentsType;


class ApiController extends AbstractController
{    
    /**
     * @Route("api/classes",name="api_classes", methods={"GET", "OPTIONS"})
     */
    public function APIclasses(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
        {
            $response= new Response();
            $response->headers->set('Content-Type', 'application/text');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
            return $response;   
        }
        $encoders = array(new JsonEncoder());
        $normalizers = array (new ObjectNormalizer());
        $serializer =  new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $classes=$em->getRepository('App:Classes')->findAll();

        $jsonContent = $serializer->serialize($classes, 'json');

        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
        $response->setContent($jsonContent);
        return $response;
        
    }
    /**
     * @Route("api/classes",name="api_add_classes", methods={"PUT", "OPTIONS"})
     * @Route("api/classes/{id}/edit", name="api_edit_class", methods={"POST", "OPTIONS"})
     * @param int $id id de la classe, mode Edit
     */
    public function APIaddClass(Classes $class = null, Request $request, $id=null)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
        {
            $response= new Response();
            $response->headers->set('Content-Type', 'application/text');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
            return $response;   
        }
        $editMode=true; 
        //Si aucune classe à modifier n'est fournie -> edit Mode = false
        if(!$class)
        {
            $class = new Classes();
            $editMode=false; 
        }
        if ($editMode==true)
        {
            $entityManager=$this->getDoctrine()->getManager();
            //Enregistre dans $em la classe de l'id fournie en edit Mode
            $em=$entityManager->getRepository(Classes::class)->find($id);
            //Cette variable $nameClass est nécessaire pour modifier tous les étudiants
            //qui sont liés à cet nom de classe
            $nameClass=$em->getNameClass();
        }
        //Création du formulaire
        $data = json_decode($request->getContent(),true);
        $form = $this->createForm(ClassesType::class, $class);
        $form->submit($data);
        
        if (false === $form->isValid()) {
            $response=new JsonResponse(
                [
                    'status' => 'error',
                    'errors' => $this->formErrorSerializer->convertFormToArray($form),
                ],
                JsonResponse::HTTP_BAD_REQUEST
            );
            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type',true);
            return $response;
        }


        if($editMode==true)
        {
            //Permet d'obtenir tous les élèves liés à $nameClass (old) 
            //et remplacer leur champ 'name_class' par $newNameOfClass (new)
            $newNameOfClass=$form->getData()->getNameClass();

            $entityManager=$this->getDoctrine()->getManager();
            $students=$entityManager->getRepository(Students::class)->findBy(['name_class' => $nameClass]);
            foreach ($students as $student) {
                $student->setNameClass($newNameOfClass);
                $entityManager->persist($student);
                $entityManager->flush();
            }
        }
        $doctrine=$this->getDoctrine()->getManager();
        $doctrine->persist($class);
        $doctrine->flush();

        $response=new JsonResponse(
            [
                'status' => 'Class added',
                'HTTP'=>JsonResponse::HTTP_CREATED
            ]  
        );
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type',true);
        return $response;

    }
    /**
     * @Route("/api/classes/{id}",name="api_deleteClass", methods={"DELETE", "OPTIONS"})
     * @param int $id id de la classe
     */
    public function APIdeleteClass($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
        {
            $response= new Response();
            $response->headers->set('Content-Type', 'application/text');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
            return $response;   
        }
        $name_class = $this->getDoctrine()->getManager();
        $name_class=$name_class->getRepository('App:Classes')->find($id)->getNameClass();

        //Supprime d'abord tous les élèves liés à cette classe
        $entityManager=$this->getDoctrine()->getManager();
        $deletes=$entityManager->getRepository(Students::class)->findBy(['name_class' => $name_class]);
        foreach ($deletes as $delete) {
            $entityManager->remove($delete);
            $entityManager->flush();
        }

        $deletes=$entityManager->getRepository(Classes::class)->findBy(['name_class' => $name_class]);

        foreach ($deletes as $delete) {
            $entityManager->remove($delete);
            $entityManager->flush();
        }
    
        $response= new JsonResponse(
            [
               'message' => 'Class deleted', 
               'HTTP'=>Response::HTTP_NO_CONTENT
            ]);
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
        return $response;
    }

    /**
     * @Route("api/students/{id}",name="api_students", methods={"GET", "OPTIONS"})
     * @param int $id id de la classe dont on veut observer les élèves
     */
    public function APIstudents($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
        {
            $response= new Response();
            $response->headers->set('Content-Type', 'application/text');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
            return $response;   
        }
        $encoders = array(new JsonEncoder());
        $normalizers = array (new ObjectNormalizer());
        $serializer =  new Serializer($normalizers, $encoders);

        //D'abord le nom de la classe lié à l'id va être recherché
        $name_class = $this->getDoctrine()->getManager();
        $name_class=$name_class->getRepository('App:Classes')->find($id)->getNameClass();

        //Ensuite, on enregistre tous les étudiants dans la liste students
        $em = $this->getDoctrine()->getManager();
        $students=$em->getRepository('App:Students')->findBy(['name_class'=>$name_class]);


        $jsonContent = $serializer->serialize($students, 'json');
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
        $response->setContent($jsonContent);
        return $response;   
    }

    /**
     * @Route("api/students",name="api_add_students", methods={"PUT", "OPTIONS"})
     * @Route("api/students/{id}/edit", name="api_edit_student", methods={"POST", "OPTIONS"})
     * @param int $id , id de l'étudiant, mode Edit
     */
    public function APIaddStudent(Students $student = null, Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
        {
            $response= new Response();
            $response->headers->set('Content-Type', 'application/text');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
            return $response;   
        }

        $data = json_decode($request->getContent(),true);
        //Si un étudiant n'a pas été reçu, il faut en créer un nouveau (editMode=false)
        if(!$student)
        {
            $student = new Students();
        }
        $form = $this->createForm(StudentsType::class, $student);
        $form->submit($data);

        if (false === $form->isValid()) {
            return new JsonResponse(
                [
                    'status' => 'error',
                    'errors' => $this->formErrorSerializer->convertFormToArray($form),
                ],
                JsonResponse::HTTP_BAD_REQUEST
            );
        }
        $doctrine=$this->getDoctrine()->getManager();
        $doctrine->persist($student);
        $doctrine->flush();

        $response = new JsonResponse(
            [
                'status' => 'Student added',
                'HTTP'=>JsonResponse::HTTP_CREATED
            ]
        );
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
        return $response;

    }
        /**
     * @Route("api/students/{id}",name="api_delete_students", methods={"DELETE", "OPTIONS"})
     * @param int $id , id de l'étudiant
     */
    public function APIdeleteStudent($id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $delete=$entityManager->getRepository(Students::class)->find($id);
        if ($delete)
        {
            $entityManager->remove($delete);
        $entityManager->flush();}

        $response = new JsonResponse(
            [
                'status' => 'No more student of this id', 
                'HTTP'=>Response::HTTP_NO_CONTENT
            ]
        );
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type', true);
        return $response;
    }
}
