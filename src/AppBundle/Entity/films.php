<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * films
 *
 * @ORM\Table(name="films")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\filmsRepository")
 */
class films
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
     * @ORM\Column(name="desc_fi", type="string", length=1500)
     */
    private $descFi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year_fi", type="datetime")
     */
    private $yearFi;

    /**
     * @var string
     *
     * @ORM\Column(name="image_fi", type="string", length=255)
     */
    private $imageFi;

    /**
     * @var string
     *
     * @ORM\Column(name="prod", type="string", length=255, nullable=true)
     */
    private $prod;

    /**
     * @var string
     *
     * @ORM\Column(name="person", type="string", length=255, nullable=true)
     */
    private $person;


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
     * @return films
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
     * @return films
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
     * Set yearFi
     *
     * @param \DateTime $yearFi
     *
     * @return films
     */
    public function setYearFi($yearFi)
    {
        $this->yearFi = $yearFi;

        return $this;
    }

    /**
     * Get yearFi
     *
     * @return \DateTime
     */
    public function getYearFi()
    {
        return $this->yearFi;
    }

    /**
     * Set imageFi
     *
     * @param string $imageFi
     *
     * @return films
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

    /**
     * Set prod
     *
     * @param string $prod
     *
     * @return films
     */
    public function setProd($prod)
    {
        $this->prod = $prod;

        return $this;
    }

    /**
     * Get prod
     *
     * @return string
     */
    public function getProd()
    {
        return $this->prod;
    }

    /**
     * Set person
     *
     * @param string $person
     *
     * @return films
     */
    public function setPerson($person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return string
     */
    public function getPerson()
    {
        return $this->person;
    }
}

