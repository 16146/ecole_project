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
     * @Route("api/classes",name="add_api_classes", methods={"PUT", "OPTIONS"})
     * @Route("api/classes/{id}/edit", name="api_editClass", methods={"POST", "OPTIONS"})
     */
    public function APIaddClass(Classes $class = null, Request $request, $id=null)
    {
        if ($id)
        {
            $entityManager=$this->getDoctrine()->getManager();
            $em=$entityManager->getRepository(Classes::class)->find($id);
            $nameClass=$em->getNameClass();
        }
        $routeEdit=true; 
        if(!$class)
        {
            $class = new Classes();
            $routeEdit=false; 
        }
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
            $response->headers->set('Content-Type', 'application/text');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type',true);
            return $response;
            
        }
        $newForm = $form->getData();
        $newNameOfClass=$newForm->getNameClass();

        if($routeEdit==true)
        {
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
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE, OPTIONS");
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type',true);
        return $response;

    }
    /**
     * @Route("/api/classes/{id}",name="api_deleteClass", methods={"DELETE", "OPTIONS"})
     */
    public function APIdeleteClass($id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $deletes=$entityManager->getRepository(Students::class)->findBy(['name_class' => $id]);
        foreach ($deletes as $delete) {
            $entityManager->remove($delete);
            $entityManager->flush();
        }

        $deletes=$entityManager->getRepository(Classes::class)->findBy(['name_class' => $id]);
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

        $name_class = $this->getDoctrine()->getManager();
        $name_class=$name_class->getRepository('App:Classes')->find($id);

        $em = $this->getDoctrine()->getManager();
        $students=$em->getRepository('App:Students')->findBy(['name_class'=>$name_class]);
        $var=$name_class->getNameClass();

        if ($var)
        {
            $em = $this->getDoctrine()->getManager();
            $students=$em->getRepository('App:Students')->findBy(['name_class'=>$var]);
        }

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
     * *@Route("api/students/{id}/edit", name="api_editStudent", methods={"POST", "OPTIONS"})
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
    /* Exemple de JSON
    {
	"teacher": "Mr krkr",
	"name_class" : "Trjkekj"
        }*/
}
