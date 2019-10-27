<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
}
