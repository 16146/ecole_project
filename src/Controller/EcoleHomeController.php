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

//Controlleur principal qui gère toutes les fonctionnalités sauf login (voir SecurityController.php)

class EcoleHomeController extends AbstractController
{    
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
       //Redirige directement sur la page avec le bouton de connexion
        return $this->render('ecole_home/home.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        //Si la connexion est établie, cela redirige vers les données
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
    *@Route("/home/classes/{name_class}", name="students")
    *@param string $name_class nom de la classe
    */
    public function students($name_class)
    {
        $repo_students=$this->getDoctrine()->getRepository(Students::class);
        $liste_students=$repo_students->findBy(['name_class' => $name_class]);
        return $this->render('ecole_home/students.html.twig',
        ['liste_students'=>$liste_students,
        'name_class' => $name_class
        ]);
    }

    /**
    *@Route("/home/students/delete/{id,name_class}", name="deleteStudent")
    *@param string $name_class nom de la classe, utilisé pour rediriger à la fin
    *@param int $id id de l'étudiant
    */
    public function deleteStudent(Request $request)
    {
        $id = $request->query->get('id');
        $name_class = $request->query->get('name_class');
        $entityManager=$this->getDoctrine()->getManager();
        $delete=$entityManager->getRepository(Students::class)->find($id);
        $entityManager->remove($delete);
        $entityManager->flush();
        $response = $this->redirectToRoute('students',['name_class'=>$name_class]);
        return $response;
    }

    /**
    *@Route("/home/classes/delete/{name_class}", name="deleteClass")
    *@param string $name_class nom de la classe, 
    * les classes qui ont le même nom seront toutes supprimées 
    */
    public function deleteClass($name_class)
    {
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
        return $this->redirectToRoute('classes');
    }

    /**
    *@Route("/home/new_class", name="newClass")
    *@Route("/home/editClass/{id}", name="editClass")
    *@param int $id id de la classe, mode Edit de symfony
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
                    'attr' => ['placeholder'=>"Entrez ici..."]])
                ->add('name_class',TextType::class, [
                    'attr'=> ['placeholder'=>"Entrez ici..."]])
                ->add('save', SubmitType::class,[
                    'label'=>'Enregistrer'])
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
        return $this->render('ecole_home/newClass.html.twig',[
        'formClasse'=>$form->createView(),
        'editMode'=>$classe->getId() !== null
        ]);
    }

    /**
    *@Route("/home/classes/{nameClass}/students/new_student/", name="newStudent")
    *@param string $nameClass nom de la classe
    *@Route("/home/editStudent/{id}", name="editStudent")
    *@param int $id id de l'étudiant, mode Edit de Symfony
    */
    public function newStudent(Students $student = null,
        Request $request, ObjectManager $manager, $nameClass=null)
    {   
        if(!$student)
        {
            $student = new Students();
        }
        if(!$nameClass)
        {
            $nameClass = $student->getNameClass() ;
        }
        $form = $this->createFormBuilder($student)
                ->add('student_name',TextType::class, [
                    'attr' => ['placeholder'=>"Entrez ici..."]])
                ->add('student_firstname',TextType::class, [
                    'attr'=> ['placeholder'=>"Entrez ici..."]])
                ->add('save', SubmitType::class,[
                    'label'=>'Enregistrer'])
                ->getForm();
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $student->setNameClass($nameClass);
            $manager->persist($student);
            $manager->flush();
            return $this->redirectToRoute('students', ['name_class'=>$nameClass]);
        }
        //editMode est une variable permettant d'indiquer à la vue si c'est le mode edit
        return $this->render('ecole_home/newStudent.html.twig', [
            'name_of_class'=>$nameClass,
            'formStudent'=>$form->createView(),
            'editMode'=>$student->getId() !== null
        ]);
    }
}
