<?php

namespace ProductBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Options
 *
 * @ORM\Table(name="options")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\OptionsRepository")
 */
class Options
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="option_name", type="string", length=255, nullable=true)
     */
    private $optionName;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * Get ProductId
     *
     * @return int
     */
    public function getProductId(){
        return $this->productId;
    }

    /**
     * Set ProductId
     *
     * @param string $productId
     *
     * @return string
     */
    public function setProductId($productId){
        $this->productId = $productId;
        return $this;
    }


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
     * Set name
     *
     * @param string $optionName
     *
     * @return Options
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return string
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Many Option to one Product
     * @ManyToOne(targetEntity="Product", inversedBy="product")
     */
    private $product;

    public function __construct() {
        $this->features = new ArrayCollection();
    }

//    public function __toString()
//    {
//        return $this->getOptionName();
//    }
}

