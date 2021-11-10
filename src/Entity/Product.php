<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="products")
 * */
class Product
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
    public $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    public $code;

    /**
     * @ORM\Column(type="integer")
     */
    public $price;

    /**
     * @ORM\Column(type="string")
     */
    public $description;

    /**
     * @ORM\Column(type="string")
     */
    public $dimension;

    /**
     * @ORM\Column(type="string")
     */
    public $color;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId($id) : Product
    {
        $this->id = $id;
        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName($name): Product
    {
        $this->name = $name;
        return $this;
    }

    public function getCode() : string
    {
        return $this->code;
    }

    public function setCode($code): Product
    {
        $this->code = $code;
        return $this;
    }

    public function getPrice() : int
    {
        return $this->price;
    }

    public function setPrice($price): Product
    {
        $this->price = $price;
        return $this;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setDescription($description): Product
    {
        $this->description = $description;
        return $this;
    }

    public function getDimension() : string
    {
        return $this->dimension;
    }

    public function setDimension($dimension): Product
    {
        $this->dimension = $dimension;
        return $this;
    }

    public function getColor() : string
    {
        return $this->color;
    }

    public function setColor($color): Product
    {
        $this->color = $color;
        return $this;
    }

}