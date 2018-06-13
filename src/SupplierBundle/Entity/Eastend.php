<?php

namespace SupplierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eastend
 *
 * @ORM\Table(name="eastend")
 * @ORM\Entity(repositoryClass="SupplierBundle\Repository\EastendRepository")
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="product_source_url", type="string", length=255, nullable=true)
     */
    private $productSourceUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="product_update_url", type="string", length=255, nullable=true)
     */
    private $productUpdateUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="ftp_credentials", type="string", length=255, nullable=true)
     */
    private $ftpCredentials;

    /**
     * @var string
     *
     * @ORM\Column(name="crontab", type="string", length=255, nullable=true)
     */
    private $crontab;

    /**
     * @var int
     *
     * @ORM\Column(name="supplier_id", type="integer")
     */
    private $supplierId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     *  @ORM\Column(name="active_from", type="datetime", nullable=true)
     */
    private $activeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="active_to", type="datetime", nullable=true)
     */
    private $activeTo;


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
     * Set productSourceUrl
     *
     * @param string $productSourceUrl
     *
     * @return Eastend
     */
    public function setProductSourceUrl($productSourceUrl)
    {
        $this->productSourceUrl = $productSourceUrl;

        return $this;
    }

    /**
     * Get productSourceUrl
     *
     * @return string
     */
    public function getProductSourceUrl()
    {
        return $this->productSourceUrl;
    }

    /**
     * Set productUpdateUrl
     *
     * @param string $productUpdateUrl
     *
     * @return Eastend
     */
    public function setProductUpdateUrl($productUpdateUrl)
    {
        $this->productUpdateUrl = $productUpdateUrl;

        return $this;
    }

    /**
     * Get productUpdateUrl
     *
     * @return string
     */
    public function getProductUpdateUrl()
    {
        return $this->productUpdateUrl;
    }

    /**
     * Set ftpCredentials
     *
     * @param string $ftpCredentials
     *
     * @return Eastend
     */
    public function setFtpCredentials($ftpCredentials)
    {
        $this->ftpCredentials = $ftpCredentials;

        return $this;
    }

    /**
     * Get ftpCredentials
     *
     * @return string
     */
    public function getFtpCredentials()
    {
        return $this->ftpCredentials;
    }

    /**
     * Set crontab
     *
     * @param string $crontab
     *
     * @return Eastend
     */
    public function setCrontab($crontab)
    {
        $this->crontab = $crontab;

        return $this;
    }

    /**
     * Get crontab
     *
     * @return string
     */
    public function getCrontab()
    {
        return $this->crontab;
    }

    /**
     * Set supplierId
     *
     * @param integer $supplierId
     *
     * @return Eastend
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * Get supplierId
     *
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Eastend
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
     * Set activeFrom
     *
     * @param \DateTime $activeFrom
     *
     * @return Eastend
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;

        return $this;
    }

    /**
     * Get activeFrom
     *
     * @return \DateTime
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * Set activeTo
     *
     * @param \DateTime $activeTo
     *
     * @return Eastend
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;

        return $this;
    }

    /**
     * Get activeTo
     *
     * @return \DateTime
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }
}

