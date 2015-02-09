<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur")
 * @ORM\Entity
 */
class Joueur
{
    /**
     * @var string
     *
     * @ORM\Column(name="numero_licence", type="string", length=20, nullable=false)
     */
    private $numeroLicence;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", nullable=true)
     */
    private $genre;

    /**
     * @var integer
     *
     * @ORM\Column(name="licencie_id", type="integer")
     * @ORM\Id
     */
    private $licencieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="club_id", type="integer")
     */
    private $clubId;





    /**
     * Get numeroLicence
     *
     * @return string
     */
    public function getNumeroLicence()
    {
        return $this->numeroLicence;
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
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
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

    function __toString()
    {
        return $this->nom . ' ' . $this->prenom;
    }


}
