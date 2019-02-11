<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="firstname_per", type="string", length=255)
     */
    private $firstnamePer;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname_per", type="string", length=255)
     */
    private $lastnamePer;


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
     * Set firstnamePer
     *
     * @param string $firstnamePer
     *
     * @return Person
     */
    public function setFirstnamePer($firstnamePer)
    {
        $this->firstnamePer = $firstnamePer;

        return $this;
    }

    /**
     * Get firstnamePer
     *
     * @return string
     */
    public function getFirstnamePer()
    {
        return $this->firstnamePer;
    }

    /**
     * Set lastnamePer
     *
     * @param string $lastnamePer
     *
     * @return Person
     */
    public function setLastnamePer($lastnamePer)
    {
        $this->lastnamePer = $lastnamePer;

        return $this;
    }

    /**
     * Get lastnamePer
     *
     * @return string
     */
    public function getLastnamePer()
    {
        return $this->lastnamePer;
    }
}

