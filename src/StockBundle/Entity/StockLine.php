<?php

namespace StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockLine
 *
 * @ORM\Table(name="stock_line")
 * @ORM\Entity(repositoryClass="StockBundle\Repository\StockLineRepository")
 */
class StockLine
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
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_header_id", type="integer")
     */
    private $orderHeaderId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_line_id", type="integer", nullable=true)
     */
    private $orderLineId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reserved_at", type="datetime", nullable=true)
     */
    private $reservedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var int
     *
     * @ORM\Column(name="supplier_contract_id", type="integer")
     */
    private $supplierContractId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_reserved", type="boolean")
     */
    private $isReserved;


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
     * Set productId
     *
     * @param integer $productId
     *
     * @return StockLine
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set orderHeaderId
     *
     * @param integer $orderHeaderId
     *
     * @return StockLine
     */
    public function setOrderHeaderId($orderHeaderId)
    {
        $this->orderHeaderId = $orderHeaderId;

        return $this;
    }

    /**
     * Get orderHeaderId
     *
     * @return int
     */
    public function getOrderHeaderId()
    {
        return $this->orderHeaderId;
    }

    /**
     * Set orderLineId
     *
     * @param integer $orderLineId
     *
     * @return StockLine
     */
    public function setOrderLineId($orderLineId)
    {
        $this->orderLineId = $orderLineId;

        return $this;
    }

    /**
     * Get orderLineId
     *
     * @return int
     */
    public function getOrderLineId()
    {
        return $this->orderLineId;
    }

    /**
     * Set reservedAt
     *
     * @param \DateTime $reservedAt
     *
     * @return StockLine
     */
    public function setReservedAt($reservedAt)
    {
        $this->reservedAt = $reservedAt;

        return $this;
    }

    /**
     * Get reservedAt
     *
     * @return \DateTime
     */
    public function getReservedAt()
    {
        return $this->reservedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return StockLine
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
     * Set supplierContractId
     *
     * @param integer $supplierContractId
     *
     * @return StockLine
     */
    public function setSupplierContractId($supplierContractId)
    {
        $this->supplierContractId = $supplierContractId;

        return $this;
    }

    /**
     * Get supplierContractId
     *
     * @return int
     */
    public function getSupplierContractId()
    {
        return $this->supplierContractId;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return StockLine
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isReserved
     *
     * @param boolean $isReserved
     *
     * @return StockLine
     */
    public function setIsReserved($isReserved)
    {
        $this->isReserved = $isReserved;

        return $this;
    }

    /**
     * Get isReserved
     *
     * @return bool
     */
    public function getIsReserved()
    {
        return $this->isReserved;
    }
}

