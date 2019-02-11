<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Films
 *
 * @ORM\Table(name="films")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmsRepository")
 */
class Films
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
     * @ORM\Column(name="title_fi", type="string", length=255)
     */
    private $titleFi;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_fi", type="text")
     */
    private $descFi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fi", type="datetime")
     */
    private $dateFi;

    /**
     * @var string
     *
     * @ORM\Column(name="image_fi", type="string", length=100)
     */
    private $imageFi;


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
     * Set titleFi
     *
     * @param string $titleFi
     *
     * @return Films
     */
    public function setTitleFi($titleFi)
    {
        $this->titleFi = $titleFi;

        return $this;
    }

    /**
     * Get titleFi
     *
     * @return string
     */
    public function getTitleFi()
    {
        return $this->titleFi;
    }

    /**
     * Set descFi
     *
     * @param string $descFi
     *
     * @return Films
     */
    public function setDescFi($descFi)
    {
        $this->descFi = $descFi;

        return $this;
    }

    /**
     * Get descFi
     *
     * @return string
     */
    public function getDescFi()
    {
        return $this->descFi;
    }

    /**
     * Set dateFi
     *
     * @param \DateTime $dateFi
     *
     * @return Films
     */
    public function setDateFi($dateFi)
    {
        $this->dateFi = $dateFi;

        return $this;
    }

    /**
     * Get dateFi
     *
     * @return \DateTime
     */
    public function getDateFi()
    {
        return $this->dateFi;
    }

    /**
     * Set imageFi
     *
     * @param string $imageFi
     *
     * @return Films
     */
    public function setImageFi($imageFi)
    {
        $this->imageFi = $imageFi;

        return $this;
    }

    /**
     * Get imageFi
     *
     * @return string
     */
    public function getImageFi()
    {
        return $this->imageFi;
    }
}

