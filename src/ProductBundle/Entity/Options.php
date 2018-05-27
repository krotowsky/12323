<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_pol", type="string", length=255, nullable=true)
     */
    private $namePol;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_pol", type="string", length=255, nullable=true)
     */
    private $brandPol;

    /**
     * @var int
     *
     * @ORM\Column(name="size_id", type="integer", nullable=true)
     */
    private $sizeId;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="depth", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $depth;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vat;

    /**
     * @var int
     *
     * @ORM\Column(name="color_id", type="integer", nullable=true)
     */
    private $colorId;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=255, nullable=true)
     */
    private $ean;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_digital", type="boolean", nullable=true)
     */
    private $isDigital;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_new", type="boolean", nullable=true)
     */
    private $isNew;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_bestseller", type="boolean", nullable=true)
     */
    private $isBestseller;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_preorder_allowed", type="boolean", nullable=true)
     */
    private $isPreorderAllowed;


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
     * Set namePol
     *
     * @param string $namePol
     *
     * @return Options
     */
    public function setNamePol($namePol)
    {
        $this->namePol = $namePol;

        return $this;
    }

    /**
     * Get namePol
     *
     * @return string
     */
    public function getNamePol()
    {
        return $this->namePol;
    }

    /**
     * Set brandPol
     *
     * @param string $brandPol
     *
     * @return Options
     */
    public function setBrandPol($brandPol)
    {
        $this->brandPol = $brandPol;

        return $this;
    }

    /**
     * Get brandPol
     *
     * @return string
     */
    public function getBrandPol()
    {
        return $this->brandPol;
    }

    /**
     * Set sizeId
     *
     * @param integer $sizeId
     *
     * @return Options
     */
    public function setSizeId($sizeId)
    {
        $this->sizeId = $sizeId;

        return $this;
    }

    /**
     * Get sizeId
     *
     * @return int
     */
    public function getSizeId()
    {
        return $this->sizeId;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return Options
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Options
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set depth
     *
     * @param string $depth
     *
     * @return Options
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Options
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set vat
     *
     * @param string $vat
     *
     * @return Options
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set colorId
     *
     * @param integer $colorId
     *
     * @return Options
     */
    public function setColorId($colorId)
    {
        $this->colorId = $colorId;

        return $this;
    }

    /**
     * Get colorId
     *
     * @return int
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Options
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set isDigital
     *
     * @param boolean $isDigital
     *
     * @return Options
     */
    public function setIsDigital($isDigital)
    {
        $this->isDigital = $isDigital;

        return $this;
    }

    /**
     * Get isDigital
     *
     * @return bool
     */
    public function getIsDigital()
    {
        return $this->isDigital;
    }

    /**
     * Set isNew
     *
     * @param boolean $isNew
     *
     * @return Options
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Get isNew
     *
     * @return bool
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Set isBestseller
     *
     * @param boolean $isBestseller
     *
     * @return Options
     */
    public function setIsBestseller($isBestseller)
    {
        $this->isBestseller = $isBestseller;

        return $this;
    }

    /**
     * Get isBestseller
     *
     * @return bool
     */
    public function getIsBestseller()
    {
        return $this->isBestseller;
    }

    /**
     * Set isPreorderAllowed
     *
     * @param boolean $isPreorderAllowed
     *
     * @return Options
     */
    public function setIsPreorderAllowed($isPreorderAllowed)
    {
        $this->isPreorderAllowed = $isPreorderAllowed;

        return $this;
    }

    /**
     * Get isPreorderAllowed
     *
     * @return bool
     */
    public function getIsPreorderAllowed()
    {
        return $this->isPreorderAllowed;
    }
}

