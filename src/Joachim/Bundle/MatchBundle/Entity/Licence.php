<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licence
 *
 * @ORM\Table(name="licence", indexes={@ORM\Index(name="fk_licence_licencie1_idx", columns={"licencie_id"}), @ORM\Index(name="fk_licence_club1_idx", columns={"club_id"}), @ORM\Index(name="fk_licence_saison1_idx", columns={"saison_id"})})
 * @ORM\Entity
 */
class Licence
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="licence_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $licenceId;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Saison
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Saison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="saison_id", referencedColumnName="saison_id")
     * })
     */
    private $saison;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Licencie
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Licencie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="licencie_id", referencedColumnName="licencie_id")
     * })
     */
    private $licencie;

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
     * Set type
     *
     * @param string $type
     * @return Licence
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get licenceId
     *
     * @return integer 
     */
    public function getLicenceId()
    {
        return $this->licenceId;
    }

    /**
     * Set saison
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Saison $saison
     * @return Licence
     */
    public function setSaison(\Joachim\Bundle\MatchBundle\Entity\Saison $saison = null)
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Saison 
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * Set licencie
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Licencie $licencie
     * @return Licence
     */
    public function setLicencie(\Joachim\Bundle\MatchBundle\Entity\Licencie $licencie = null)
    {
        $this->licencie = $licencie;

        return $this;
    }

    /**
     * Get licencie
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Licencie 
     */
    public function getLicencie()
    {
        return $this->licencie;
    }

    /**
     * Set club
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Club $club
     * @return Licence
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
}
