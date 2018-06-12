<?php

namespace FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eastend
 *
 * @ORM\Table(name="eastend")
 * @ORM\Entity(repositoryClass="FeedBundle\Repository\EastendRepository")
 */
class Eastend
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=600, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="categories", type="string", length=255, nullable=true)
     */
    private $categories;

    /**
     * @var string
     *
     * @ORM\Column(name="netPrice", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $netPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="string", length=255, nullable=true)
     */
    private $properties;

    /**
     * @var string
     *
     * @ORM\Column(name="variants", type="string", length=255, nullable=true)
     */
    private $variants;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="string", length=255, nullable=true)
     */
    private $images;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Eastend
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Eastend
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Eastend
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Eastend
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set categories
     *
     * @param string $categories
     *
     * @return Eastend
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set netPrice
     *
     * @param string $netPrice
     *
     * @return Eastend
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * Get netPrice
     *
     * @return string
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * Set properties
     *
     * @param string $properties
     *
     * @return Eastend
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * Get properties
     *
     * @return string
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set variants
     *
     * @param string $variants
     *
     * @return Eastend
     */
    public function setVaraints($variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * Get variants
     *
     * @return string
     */
    public function getVaraints()
    {
        return $this->variants;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return Eastend
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }
}

