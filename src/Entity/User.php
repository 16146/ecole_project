<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
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
    private $_username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return (string) $this->_username;
    }

    public function setUsername(string $_username): self
    {
        $this->_username = $_username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->_password;
    }

    public function setPassword(string $_password): self
    {
        $this->_password = $_password;

        return $this;
    }
    public function eraseCredentials(){

    }
    public function getSalt( ){

    }

    public function getRoles()
    {
        return['ROLE_USER'];
    }
}
