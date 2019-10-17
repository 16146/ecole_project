<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Classes ;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ClassFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
		$classe = new Classes();
        $classe->setTeacher("Mr. Adleran Azhlor");
        $classe->setNameClass("Classe Aldebaran");
        $manager->persist($classe);

        $classe = new Classes();
        $classe->setTeacher("Mr. Jonas Zayn ");
        $classe->setNameClass("Classe Terre");
        $manager->persist($classe);

        $classe = new Classes();
        $classe->setTeacher("X. Arctri Nrenk");
        $classe->setNameClass("Classe TRAPPIST-1");
        $manager->persist($classe);

        $classe = new Classes();
        $classe->setTeacher("Mme. Zleon Meon");
        $classe->setNameClass("Classe Mu Leonis");
        $manager->persist($classe);

        $classe = new Classes();
        $classe->setTeacher("Mme. Kanar Vinorar");
        $classe->setNameClass("Classe Mars");
        $manager->persist($classe);
        

		$manager->flush();
		
	}
	
}
