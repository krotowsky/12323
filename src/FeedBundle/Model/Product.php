<?php

namespace FeedBundle\Model;


class Product
{
    private $id;
    private $brand;
    private $name;
    private $description;
    private $type;
    private $color;
    private $categories;
    private $gender;
    private $images;
    private $variants;
    private $netPrice;
    private $properties;
    private $ean;
    private $size;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getColor()
    {
        return $this->type;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages($images)
    {
        $this->images = $images;
    }

    public function getVariants()
    {
        return $this->variants;
    }

    public function setVariants($variants)
    {
        $this->variants = $variants;
    }

    public function getNetPrice()
    {
        return $this->netPrice;
    }

    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    public function getEan()
    {
        return $this->ean;
    }

    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }


}