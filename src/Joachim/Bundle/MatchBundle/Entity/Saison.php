<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity
 */
class Saison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="debut", type="integer", nullable=false)
     */
    private $debut;

    /**
     * @var integer
     *
     * @ORM\Column(name="fin", type="integer", nullable=false)
     */
    private $fin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="saison_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $saisonId;



    /**
     * Set debut
     *
     * @param integer $debut
     * @return Saison
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return integer 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param integer $fin
     * @return Saison
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return integer 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Saison
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Get saisonId
     *
     * @return integer 
     */
    public function getSaisonId()
    {
        return $this->saisonId;
    }

    function __toString()
    {
        return $this->debut . '/' . $this->fin;
    }


}
