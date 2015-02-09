<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club", indexes={@ORM\Index(name="fk_club_adresse1_idx", columns={"adresse_id"})})
 * @ORM\Entity
 */
class Club
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
     * @ORM\Column(name="club_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clubId;

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
     * @ORM\ManyToMany(targetEntity="Joachim\Bundle\MatchBundle\Entity\Gymnase", inversedBy="clubClub")
     * @ORM\JoinTable(name="club_has_gymnase",
     *   joinColumns={
     *     @ORM\JoinColumn(name="club_club_id", referencedColumnName="club_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="gymnase_gymnase_id", referencedColumnName="gymnase_id")
     *   }
     * )
     */
    private $gymnaseGymnase;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gymnaseGymnase = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     * @return Club
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
     * Get clubId
     *
     * @return integer 
     */
    public function getClubId()
    {
        return $this->clubId;
    }

    /**
     * Set adresse
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Adresse $adresse
     * @return Club
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
     * Add gymnaseGymnase
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Gymnase $gymnaseGymnase
     * @return Club
     */
    public function addGymnaseGymnase(\Joachim\Bundle\MatchBundle\Entity\Gymnase $gymnaseGymnase)
    {
        $this->gymnaseGymnase[] = $gymnaseGymnase;

        return $this;
    }

    /**
     * Remove gymnaseGymnase
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Gymnase $gymnaseGymnase
     */
    public function removeGymnaseGymnase(\Joachim\Bundle\MatchBundle\Entity\Gymnase $gymnaseGymnase)
    {
        $this->gymnaseGymnase->removeElement($gymnaseGymnase);
    }

    /**
     * Get gymnaseGymnase
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGymnaseGymnase()
    {
        return $this->gymnaseGymnase;
    }

    function __toString()
    {
        return $this->nom;
    }


}
