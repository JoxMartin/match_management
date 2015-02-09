<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="fk_equipe_club1_idx", columns={"club_id"}), @ORM\Index(name="fk_equipe_niveau1_idx", columns={"niveau_id"})})
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", nullable=true)
     */
    private $genre;

    /**
     * @var integer
     *
     * @ORM\Column(name="equipe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $equipeId;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Niveau
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="niveau_id", referencedColumnName="niveau_id")
     * })
     */
    private $niveau;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Club
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="club_id", referencedColumnName="club_id")
     * })
     */
    private $club;



    /**
     * Set genre
     *
     * @param string $genre
     * @return Equipe
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Get equipeId
     *
     * @return integer 
     */
    public function getEquipeId()
    {
        return $this->equipeId;
    }

    /**
     * Set niveau
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Niveau $niveau
     * @return Equipe
     */
    public function setNiveau(\Joachim\Bundle\MatchBundle\Entity\Niveau $niveau = null)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Niveau 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set club
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Club $club
     * @return Equipe
     */
    public function setClub(\Joachim\Bundle\MatchBundle\Entity\Club $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Club 
     */
    public function getClub()
    {
        return $this->club;
    }

    function __toString()
    {
        return $this->club . ' - ' . $this->niveau . ' - ' . $this->genre;
    }


}
