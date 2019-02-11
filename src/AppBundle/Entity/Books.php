<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BooksRepository")
 */
class Books
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
     * @ORM\Column(name="title_li", type="string", length=255)
     */
    private $titleLi;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_li", type="text")
     */
    private $descLi;

    /**
     * @var int
     *
     * @ORM\Column(name="page_li", type="integer")
     */
    private $pageLi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year_li", type="datetime")
     */
    private $yearLi;

    /**
     * @var string
     *
     * @ORM\Column(name="image_li", type="string", length=50)
     */
    private $imageLi;


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
     * Set titleLi
     *
     * @param string $titleLi
     *
     * @return Books
     */
    public function setTitleLi($titleLi)
    {
        $this->titleLi = $titleLi;

        return $this;
    }

    /**
     * Get titleLi
     *
     * @return string
     */
    public function getTitleLi()
    {
        return $this->titleLi;
    }

    /**
     * Set descLi
     *
     * @param string $descLi
     *
     * @return Books
     */
    public function setDescLi($descLi)
    {
        $this->descLi = $descLi;

        return $this;
    }

    /**
     * Get descLi
     *
     * @return string
     */
    public function getDescLi()
    {
        return $this->descLi;
    }

    /**
     * Set pageLi
     *
     * @param integer $pageLi
     *
     * @return Books
     */
    public function setPageLi($pageLi)
    {
        $this->pageLi = $pageLi;

        return $this;
    }

    /**
     * Get pageLi
     *
     * @return int
     */
    public function getPageLi()
    {
        return $this->pageLi;
    }

    /**
     * Set yearLi
     *
     * @param \DateTime $yearLi
     *
     * @return Books
     */
    public function setYearLi($yearLi)
    {
        $this->yearLi = $yearLi;

        return $this;
    }

    /**
     * Get yearLi
     *
     * @return \DateTime
     */
    public function getYearLi()
    {
        return $this->yearLi;
    }

    /**
     * Set imageLi
     *
     * @param string $imageLi
     *
     * @return Books
     */
    public function setImageLi($imageLi)
    {
        $this->imageLi = $imageLi;

        return $this;
    }

    /**
     * Get imageLi
     *
     * @return string
     */
    public function getImageLi()
    {
        return $this->imageLi;
    }
}

