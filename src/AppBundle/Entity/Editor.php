<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editor
 *
 * @ORM\Table(name="editor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EditorRepository")
 */
class Editor
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
     * @ORM\Column(name="title_ed", type="string", length=255)
     */
    private $titleEd;


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
     * Set titleEd
     *
     * @param string $titleEd
     *
     * @return Editor
     */
    public function setTitleEd($titleEd)
    {
        $this->titleEd = $titleEd;

        return $this;
    }

    /**
     * Get titleEd
     *
     * @return string
     */
    public function getTitleEd()
    {
        return $this->titleEd;
    }
}

