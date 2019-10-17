<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\StudentsRepository")
 */
class Students
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_class;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $student_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $student_firstname;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStudent(): ?string
    {
        return $this->id_student;
    }

    public function setIdStudent(string $id_student): self
    {
        $this->id_student = $id_student;

        return $this;
    }

    public function getNameClass(): ?string
    {
        return $this->name_class;
    }

    public function setNameClass(string $name_class): self
    {
        $this->name_class = $name_class;

        return $this;
    }

    public function getStudentName(): ?string
    {
        return $this->student_name;
    }

    public function setStudentName(string $student_name): self
    {
        $this->student_name = $student_name;

        return $this;
    }

    public function getStudentFirstname(): ?string
    {
        return $this->student_firstname;
    }

    public function setStudentFirstname(string $student_firstname): self
    {
        $this->student_firstname = $student_firstname;

        return $this;
    }
}
