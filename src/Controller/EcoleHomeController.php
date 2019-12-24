<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Classes;
use App\Entity\Students;
use Symfony\Component\Form\Extension\Core\Type\{TextType,PasswordType,TextareaType,SubmitType};



class EcoleHomeController extends AbstractController
{    
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
       
        return $this->render('ecole_home/home.html.twig', [
            'controller_name' => 'EcoleHomeController'
        ]);
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->redirectToRoute('classes');
    }

	/**
	*@Route("/home/classes", name="classes")
	*/
    public function classes()
    {
        $repo_classes=$this->getDoctrine()->getRepository(Classes::class);
        $liste_classes=$repo_classes->findAll();
        return $this->render('ecole_home/classes.html.twig',
        ['liste_classes'=>$liste_classes
        ]);
    }

    /**
	*@Route("/home/classes/{id}", name="students")
    */
    public function students($id)
    {
        $repo_students=$this->getDoctrine()->getRepository(Students::class);
        $liste_students=$repo_students->findBy(['name_class' => $id]);
        return $this->render('ecole_home/students.html.twig',
        ['liste_students'=>$liste_students,
        'name_class' => $id
        ]);
        
    }
    /**
	*@Route("/home/students/delete/{id1,id2}", name="deleteStudent")
    */
    public function deleteStudent(Request $request)
    {
        $id1 = $request->query->get('id1');
        $id2 = $request->query->get('id2');
        $entityManager=$this->getDoctrine()->getManager();
        $delete=$entityManager->getRepository(Students::class)->find($id1);
        $entityManager->remove($delete);
        $entityManager->flush();
        $response = $this->redirectToRoute('students',['id'=>$id2]);
        return $response;
    }
    /**
    *@Route("/home/classes/delete/{id}", name="deleteClass")
    */
    public function deleteClass($id)
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

        return $this->redirectToRoute('classes');
    }

    /**
    *@Route("/home/new_class", name="newClass")
    *@Route("/home/editClass/{id}", name="editClass")
    */
    public function newClass(Classes $classe = null, 
            Request $request, ObjectManager $manager, $id=null)
    {
        if ($id)
        {
            $entityManager=$this->getDoctrine()->getManager();
            $em=$entityManager->getRepository(Classes::class)->find($id);
            $nameClass=$em->getNameClass();
        }
        
        $routeEdit=true; 
        if(!$classe)
        {
            $classe = new Classes();
            $routeEdit=false; 
        }
        $form = $this->createFormBuilder($classe)
                ->add('teacher',TextType::class, [
                    'attr' => [
                        'placeholder'=>"Entrez ici..."
                    ]
                ])
                ->add('name_class',TextType::class, [
                    'attr'=> [
                        'placeholder'=>"Entrez ici..."
                    ]
                ])
                ->add('save', SubmitType::class,
                ['label'=>'Enregistrer'])
                ->getForm();
      
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
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
            $manager->persist($classe);
            $manager->flush();
            return $this->redirectToRoute('classes');

        }
        return $this->render('ecole_home/newClass.html.twig',
    [
        'formClasse'=>$form->createView(),
        'editMode'=>$classe->getId() !== null
    ]);
        
    }
    /**
    *@Route("/home/classes/{id1}/students/new_student/", name="newStudent")
    *@Route("/home/editStudent/{id}", name="editStudent")
    */
    public function newStudent(Students $student = null,
        Request $request, ObjectManager $manager, $id1=null)
    {   
        if(!$student)
        {
            $student = new Students();
        }
        if(!$id1)
        {
            $id1 = $student->getNameClass() ;
        }
        $form = $this->createFormBuilder($student)
                ->add('student_name',TextType::class, [
                    'attr' => [
                        'placeholder'=>"Entrez ici..."
                    ]
                ])
                ->add('student_firstname',TextType::class, [
                    'attr'=> [
                        'placeholder'=>"Entrez ici..."
                    ]
                ])
                ->add('save', SubmitType::class,
                ['label'=>'Enregistrer'])
                ->getForm();
        

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $student->setNameClass($id1);
            $manager->persist($student);
            $manager->flush();
            return $this->redirectToRoute('students',['id'=>$id1]);

        }
        return $this->render('ecole_home/newStudent.html.twig', [
            'name_of_class'=>$id1,
            'formStudent'=>$form->createView(),
            'editMode'=>$student->getId() !== null
        ]);
        
    }
}
