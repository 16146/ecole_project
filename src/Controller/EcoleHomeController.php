<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Classes;
use App\Entity\Students;


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
        ['liste_students'=>$liste_students
        ]);
        
        /*findByname_class($id);*/
    }
}
