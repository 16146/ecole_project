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
     * @Rest\Delete("/api/classes/{id}")
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
        return new JsonResponse(
            [
               'message' => 'Class deleted', 
               'HTTP'=>Response::HTTP_NO_CONTENT
            ]);
    }
    /**
     * @Rest\Delete("/api/students/{id}")
     */
    public function APIdeleteStudent($id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $delete=$entityManager->getRepository(Students::class)->find($id);
        if ($delete)
        {$entityManager->remove($delete);
        $entityManager->flush();}

        return new JsonResponse(
         [
            'status' => 'No more student of this id', 
            'HTTP'=>Response::HTTP_NO_CONTENT
         ]
    );
        
        
    }
    /**
     * @Rest\Get("/api/classes")
     */
    public function APIclasses()
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array (new ObjectNormalizer());
        $serializer =  new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $classes=$em->getRepository('App:Classes')->findAll();

        $jsonContent = $serializer->serialize($classes, 'json');
        $response = new JsonResponse();
        $response->setContent($jsonContent);
        return $response;
        
    }
    /**
     * @Rest\Post("/api/classes/{id}")
     */
    public function APIclass($id)
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array (new ObjectNormalizer());
        $serializer =  new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $classe=$em->getRepository('App:Classes')->find($id);

        $jsonContent = $serializer->serialize($classe, 'json');
        $response = new JsonResponse();
        $response->setContent($jsonContent);
        return $response;
        
    }
    /**
     * @Rest\Post("/api/classes/{id}/students")
     */
    public function APIstudents($id)
    {
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
        $response->setContent($jsonContent);
        return $response;
        
    }
    /**
     * @Rest\Post("/api/newclass")
     */
    public function APIaddClass(Request $request)
    {
        $data = json_decode($request->getContent(),true);
        $class=new Classes();
        $form = $this->createForm(ClassesType::class, $class);

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
        $doctrine->persist($class);
        $doctrine->flush();

        return new JsonResponse(
            [
                'status' => 'Class added',
                'HTTP'=>JsonResponse::HTTP_CREATED
            ]
            
        );

    }
    /**
     * @Rest\Post("/api/newstudent")
     */
    public function APIaddStudent(Request $request)
    {
        $data = json_decode($request->getContent(),true);
        $student=new Students();
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

        return new JsonResponse(
            [
                'status' => 'Student added',
                'HTTP'=>JsonResponse::HTTP_CREATED
            ]
            
        );

    }
    /* Exemple de JSON
    {
	"teacher": "Mr krkr",
	"name_class" : "Trjkekj"
        }*/
}
