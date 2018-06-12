<?php

namespace FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ean
 *
 * @ORM\Table(name="ean")
 * @ORM\Entity(repositoryClass="FeedBundle\Repository\EanRepository")
 */
class Ean
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
     * @var int
     *
     * @ORM\Column(name="eastend_id", type="integer", nullable=true)
     */
    private $eastendId;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=255, nullable=true)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255, nullable=true)
     */
    private $size;


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
     * Set eastendId
     *
     * @param integer $eastendId
     *
     * @return Ean
     */
    public function setEastendId($eastendId)
    {
        $this->eastendId = $eastendId;

        return $this;
    }

    /**
     * Get eastendId
     *
     * @return int
     */
    public function getEastendId()
    {
        return $this->eastendId;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Ean
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
     * Set size
     *
     * @param string $size
     *
     * @return Ean
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }
}

