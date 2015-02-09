<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="fk_adresse_ville_idx", columns={"ville_id"})})
 * @ORM\Entity
 */
class Adresse
{
    /**
     * @var string
     *
     * @ORM\Column(name="adresse_1", type="string", length=255, nullable=false)
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_2", type="string", length=255, nullable=true)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_3", type="string", length=45, nullable=true)
     */
    private $adresse3;

    /**
     * @var integer
     *
     * @ORM\Column(name="adresse_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adresseId;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="ville_id")
     * })
     */
    private $ville;



    /**
     * Set adresse1
     *
     * @param string $adresse1
     * @return Adresse
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string 
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     * @return Adresse
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string 
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set adresse3
     *
     * @param string $adresse3
     * @return Adresse
     */
    public function setAdresse3($adresse3)
    {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * Get adresse3
     *
     * @return string 
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }

    /**
     * Get adresseId
     *
     * @return integer 
     */
    public function getAdresseId()
    {
        return $this->adresseId;
    }

    /**
     * Set ville
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Ville $ville
     * @return Adresse
     */
    public function setVille(\Joachim\Bundle\MatchBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }

    function __toString()
    {
        return $this->adresse1 . ', ' . $this->ville;
    }


}
