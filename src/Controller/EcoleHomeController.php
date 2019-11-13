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
    */
    public function newClass(Request $request, ObjectManager $manager)
    {
        $newClasse = new Classes();
        $form = $this->createFormBuilder($newClasse)
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
            $manager->persist($newClasse);
            $manager->flush();
            return $this->redirectToRoute('classes');

        }
        return $this->render('ecole_home/newClass.html.twig',
    [
        'formClasse'=>$form->createView()
    ]);
        
    }
    /**
	*@Route("/home/classes/{id}/students/new_student/", name="newStudent")
    */
    public function newStudent(Request $request, ObjectManager $manager, $id)
    {

        $newStudent = new Students();
        $form = $this->createFormBuilder($newStudent)
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
            $newStudent->setNameClass($id);
            $manager->persist($newStudent);
            $manager->flush();
            return $this->redirectToRoute('students',['id'=>$id]);

        }
        return $this->render('ecole_home/newStudent.html.twig', [
            'name_of_class'=>$id,
            'formStudent'=>$form->createView()
        ]);
        
    }
}
