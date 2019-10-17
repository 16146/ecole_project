<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


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
		return $this->render('ecole_home/classes.html.twig');
	}
}
