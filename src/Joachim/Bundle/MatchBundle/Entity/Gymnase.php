<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gymnase
 *
 * @ORM\Table(name="gymnase", indexes={@ORM\Index(name="fk_gymnase_adresse1_idx", columns={"adresse_id"})})
 * @ORM\Entity
 */
class Gymnase
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="gymnase_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gymnaseId;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Adresse
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse_id", referencedColumnName="adresse_id")
     * })
     */
    private $adresse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Joachim\Bundle\MatchBundle\Entity\Club", mappedBy="gymnaseGymnase")
     */
    private $clubClub;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clubClub = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     * @return Gymnase
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get gymnaseId
     *
     * @return integer 
     */
    public function getGymnaseId()
    {
        return $this->gymnaseId;
    }

    /**
     * Set adresse
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Adresse $adresse
     * @return Gymnase
     */
    public function setAdresse(\Joachim\Bundle\MatchBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Adresse 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add clubClub
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Club $clubClub
     * @return Gymnase
     */
    public function addClubClub(\Joachim\Bundle\MatchBundle\Entity\Club $clubClub)
    {
        $this->clubClub[] = $clubClub;

        return $this;
    }

    /**
     * Remove clubClub
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Club $clubClub
     */
    public function removeClubClub(\Joachim\Bundle\MatchBundle\Entity\Club $clubClub)
    {
        $this->clubClub->removeElement($clubClub);
    }

    /**
     * Get clubClub
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClubClub()
    {
        return $this->clubClub;
    }


    function __toString()
    {
        return $this->nom;
    }
}
