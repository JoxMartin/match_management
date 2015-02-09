<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licencie
 *
 * @ORM\Table(name="licencie", uniqueConstraints={@ORM\UniqueConstraint(name="numero_licence_UNIQUE", columns={"numero_licence"})})
 * @ORM\Entity
 */
class Licencie
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $licencieId;



    /**
     * Set numeroLicence
     *
     * @param string $numeroLicence
     * @return Licencie
     */
    public function setNumeroLicence($numeroLicence)
    {
        $this->numeroLicence = $numeroLicence;

        return $this;
    }

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
     * Set nom
     *
     * @param string $nom
     * @return Licencie
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
     * Set prenom
     *
     * @param string $prenom
     * @return Licencie
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Licencie
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Licencie
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
     * Get licencieId
     *
     * @return integer 
     */
    public function getLicencieId()
    {
        return $this->licencieId;
    }

    function __toString()
    {
        return $this->nom . ' ' . $this->prenom;
    }


}
