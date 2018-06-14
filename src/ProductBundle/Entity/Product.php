<?php

namespace ProductBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ProductBundle\Entity\Options;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\ProductRepository")
 */
class Product
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="premiere_at", type="datetime", nullable=true)
     */
    private $premiereAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Product
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    /**
     * Set premiereAt
     *
     * @param \DateTime $premiereAt
     *
     * @return Product
     */
    public function setPremiereAt($premiereAt)
    {
        $this->premiereAt = $premiereAt;

        return $this;
    }

    /**
     * Get premiereAt
     *
     * @return \DateTime
     */
    public function getPremiereAt()
    {
        return $this->premiereAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Product
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime("now");
    }

    /**
     * Gets triggered every time on update

     * @ORM\PreUpdate
     */
    public function onPreUpdated()
    {
        $this->updatedAt = new \DateTime("now");
    }

    /**
     * One Product to Many Options
     * @OneTomany(targetEntity="Options", mappedBy="product")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * Set Product
     *
     * @param \ProductBundle\Entity\Product $product
     *
     * @return Product
     */
    public function setProduct(\ProductBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \ProductBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
    }
}

