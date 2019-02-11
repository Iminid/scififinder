<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Series
 *
 * @ORM\Table(name="series")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeriesRepository")
 */
class Series
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
     * @ORM\Column(name="title_ser", type="string", length=255)
     */
    private $titleSer;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_ser", type="text")
     */
    private $descSer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year_ser", type="datetime")
     */
    private $yearSer;

    /**
     * @var string
     *
     * @ORM\Column(name="image_ser", type="string", length=50)
     */
    private $imageSer;


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
     * Set titleSer
     *
     * @param string $titleSer
     *
     * @return Series
     */
    public function setTitleSer($titleSer)
    {
        $this->titleSer = $titleSer;

        return $this;
    }

    /**
     * Get titleSer
     *
     * @return string
     */
    public function getTitleSer()
    {
        return $this->titleSer;
    }

    /**
     * Set descSer
     *
     * @param string $descSer
     *
     * @return Series
     */
    public function setDescSer($descSer)
    {
        $this->descSer = $descSer;

        return $this;
    }

    /**
     * Get descSer
     *
     * @return string
     */
    public function getDescSer()
    {
        return $this->descSer;
    }

    /**
     * Set yearSer
     *
     * @param \DateTime $yearSer
     *
     * @return Series
     */
    public function setYearSer($yearSer)
    {
        $this->yearSer = $yearSer;

        return $this;
    }

    /**
     * Get yearSer
     *
     * @return \DateTime
     */
    public function getYearSer()
    {
        return $this->yearSer;
    }

    /**
     * Set imageSer
     *
     * @param string $imageSer
     *
     * @return Series
     */
    public function setImageSer($imageSer)
    {
        $this->imageSer = $imageSer;

        return $this;
    }

    /**
     * Get imageSer
     *
     * @return string
     */
    public function getImageSer()
    {
        return $this->imageSer;
    }
}

