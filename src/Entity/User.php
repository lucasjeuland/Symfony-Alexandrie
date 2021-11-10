<?php

namespace App\Entity;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="users")
 * */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $username;

    /**
     * @ORM\Column(type="string")
     */
    public $email;

    /**
     * @ORM\Column(type="string")
     */
    public $passwordHash;

    /**
     * @ORM\Column(type="string", columnDefinition="enum('admin', 'customer')")
     */
    public $userType;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    public $createdAt;


    public function getId() : int
    {
        return $this->id;
    }

    public function setId($id) : User
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function setUsername($username): User
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail($email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getPasswordHash() : string
    {
        return $this->passwordHash;
    }

    public function setPasswordHash($passwordHash): User
    {
        $this->passwordHash = $passwordHash;
        return $this;
    }

    public function getUserType() : string
    {
        return $this->userType;
    }

    public function setUserType($userType): User
    {
        $this->userType = $userType;
        return $this;
    }

    public function getCreatedAt() : datetime
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): User
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}