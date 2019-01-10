<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="title_fi", type="string", length=1000)
     */
    private $titleFi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year_fi", type="datetime")
     */
    private $yearFi;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_fi", type="string", length=1000)
     */
    private $descFi;

    /**
     * @var string
     *
     * @ORM\Column(name="image_fi", type="string", length=255)
     */
    private $imageFi;

    /**
     * @var string
     *
     * @ORM\Column(name="serie_fi_fk", type="string", length=255)
     */
    private $serieFiFk;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_fi_fk", type="string", length=255)
     */
    private $prodFiFk;

    /**
     * @var string
     *
     * @ORM\Column(name="act_fi_fk", type="string", length=255)
     */
    private $actFiFk;

    /**
     * @var string
     *
     * @ORM\Column(name="livre_fi_fk", type="string", length=255)
     */
    private $livreFiFk;


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
     * @return Film
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
     * Set yearFi
     *
     * @param \DateTime $yearFi
     *
     * @return Film
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
     * Set descFi
     *
     * @param string $descFi
     *
     * @return Film
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
     * Set imageFi
     *
     * @param string $imageFi
     *
     * @return Film
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
     * Set serieFiFk
     *
     * @param string $serieFiFk
     *
     * @return Film
     */
    public function setSerieFiFk($serieFiFk)
    {
        $this->serieFiFk = $serieFiFk;

        return $this;
    }

    /**
     * Get serieFiFk
     *
     * @return string
     */
    public function getSerieFiFk()
    {
        return $this->serieFiFk;
    }

    /**
     * Set prodFiFk
     *
     * @param string $prodFiFk
     *
     * @return Film
     */
    public function setProdFiFk($prodFiFk)
    {
        $this->prodFiFk = $prodFiFk;

        return $this;
    }

    /**
     * Get prodFiFk
     *
     * @return string
     */
    public function getProdFiFk()
    {
        return $this->prodFiFk;
    }

    /**
     * Set actFiFk
     *
     * @param string $actFiFk
     *
     * @return Film
     */
    public function setActFiFk($actFiFk)
    {
        $this->actFiFk = $actFiFk;

        return $this;
    }

    /**
     * Get actFiFk
     *
     * @return string
     */
    public function getActFiFk()
    {
        return $this->actFiFk;
    }

    /**
     * Set livreFiFk
     *
     * @param string $livreFiFk
     *
     * @return Film
     */
    public function setLivreFiFk($livreFiFk)
    {
        $this->livreFiFk = $livreFiFk;

        return $this;
    }

    /**
     * Get livreFiFk
     *
     * @return string
     */
    public function getLivreFiFk()
    {
        return $this->livreFiFk;
    }
}

