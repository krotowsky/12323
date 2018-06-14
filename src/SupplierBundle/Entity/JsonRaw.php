<?php

namespace SupplierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsonRaw
 *
 * @ORM\Table(name="json_raw")
 * @ORM\Entity(repositoryClass="SupplierBundle\Repository\JsonRawRepository")
 */
class JsonRaw
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
     * @ORM\Column(name="supplier_id", type="integer")
     */
    private $supplierId;

    /**
     * @var array
     *
     * @ORM\Column(name="json", type="json_array", nullable=true)
     */
    private $json;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var int
     *
     * @ORM\Column(name="is_processed", type="integer")
     */
    private $isProcessed;


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
     * Set supplierId
     *
     * @param integer $supplierId
     *
     * @return JsonRaw
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
     * Set json
     *
     * @param array $json
     *
     * @return JsonRaw
     */
    public function setJson($json)
    {
        $this->json = $json;

        return $this;
    }

    /**
     * Get json
     *
     * @return array
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return JsonRaw
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
     * Set IsProcessed
     *
     * @param integer $idProcessed
     *
     * @return JsonRaw
     */
    public function setIsPrcessed($idProcessed)
    {
        $this->isProcessed = $idProcessed;

        return $this;
    }

    /**
     * Get IsProcessed
     *
     * @return int
     */
    public function getIsPrcessed()
    {
        return $this->isProcessed;
    }
}

