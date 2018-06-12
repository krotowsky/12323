<?php

namespace FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="FeedBundle\Repository\ImagesRepository")
 */
class Images
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
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="eastend_id", type="integer", nullable=true)
     */
    private $eastendId;


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
     * Set url
     *
     * @param string $url
     *
     * @return Images
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set eastendId
     *
     * @param integer $eastendId
     *
     * @return Images
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
}

