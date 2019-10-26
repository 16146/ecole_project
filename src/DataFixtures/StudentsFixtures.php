<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Students ;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker;
class StudentsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();


        for ($i = 0; $i < 10; $i++) {
            $student = new Students();
            $student->setNameClass("Classe Aldebaran");
            $student->setStudentName($faker->lastName);
            $student->setStudentFirstname($faker->firstName);
            $manager->persist($student);
        }
        for ($i = 0; $i < 10; $i++) {
            $student = new Students();
            $student->setNameClass("Classe Terre");
            $student->setStudentName($faker->lastName);
            $student->setStudentFirstname($faker->firstName);
            $manager->persist($student);
        }
        for ($i = 0; $i < 10; $i++) {
            $student = new Students();
            $student->setNameClass("Classe TRAPPIST-1");
            $student->setStudentName($faker->lastName);
            $student->setStudentFirstname($faker->firstName);
            $manager->persist($student);
        }
        for ($i = 0; $i < 10; $i++) {
            $student = new Students();
            $student->setNameClass("Classe Mu Leonis");
            $student->setStudentName($faker->lastName);
            $student->setStudentFirstname($faker->firstName);
            $manager->persist($student);
        }
        for ($i = 0; $i < 10; $i++) {
            $student = new Students();
            $student->setNameClass("Classe Mars");
            $student->setStudentName($faker->lastName);
            $student->setStudentFirstname($faker->firstName);
            $manager->persist($student);
        }
		$manager->flush();
		
	}
	
}
