<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfoStudentsRepository")
 */
class InfoStudents
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
    private $name_student;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname_student;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthday;

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

    public function getNameStudent(): ?string
    {
        return $this->name_student;
    }

    public function setNameStudent(string $name_student): self
    {
        $this->name_student = $name_student;

        return $this;
    }

    public function getFirstnameStudent(): ?string
    {
        return $this->firstname_student;
    }

    public function setFirstnameStudent(string $firstname_student): self
    {
        $this->firstname_student = $firstname_student;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }
}
