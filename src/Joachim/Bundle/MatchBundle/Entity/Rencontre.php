<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rencontre
 *
 * @ORM\Table(name="rencontre", indexes={@ORM\Index(name="fk_match_gymnase1_idx", columns={"gymnase_id"}), @ORM\Index(name="fk_match_equipe1_idx", columns={"equipe_recevante"}), @ORM\Index(name="fk_match_equipe2_idx", columns={"equipe_visiteuse"}), @ORM\Index(name="fk_match_licencie1_idx", columns={"arbitre_id"}), @ORM\Index(name="fk_match_licencie2_idx", columns={"second_id"}), @ORM\Index(name="fk_match_licencie3_idx", columns={"marqueur_id"})})
 * @ORM\Entity
 */
class Rencontre
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_match", type="datetime", nullable=false)
     */
    private $dateMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="match_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matchId;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Licencie
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Licencie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="second_id", referencedColumnName="licencie_id")
     * })
     */
    private $second;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Licencie
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Licencie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marqueur_id", referencedColumnName="licencie_id")
     * })
     */
    private $marqueur;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Licencie
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Licencie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arbitre_id", referencedColumnName="licencie_id")
     * })
     */
    private $arbitre;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Gymnase
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Gymnase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gymnase_id", referencedColumnName="gymnase_id")
     * })
     */
    private $gymnase;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe_visiteuse", referencedColumnName="equipe_id")
     * })
     */
    private $equipeVisiteuse;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe_recevante", referencedColumnName="equipe_id")
     * })
     */
    private $equipeRecevante;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;



    /**
     * Set dateMatch
     *
     * @param \DateTime $dateMatch
     * @return Rencontre
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    /**
     * Get dateMatch
     *
     * @return \DateTime 
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * Get matchId
     *
     * @return integer 
     */
    public function getMatchId()
    {
        return $this->matchId;
    }

    /**
     * Set second
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Licencie $second
     * @return Rencontre
     */
    public function setSecond(\Joachim\Bundle\MatchBundle\Entity\Licencie $second = null)
    {
        $this->second = $second;

        return $this;
    }

    /**
     * Get second
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Licencie 
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Set marqueur
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Licencie $marqueur
     * @return Rencontre
     */
    public function setMarqueur(\Joachim\Bundle\MatchBundle\Entity\Licencie $marqueur = null)
    {
        $this->marqueur = $marqueur;

        return $this;
    }

    /**
     * Get marqueur
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Licencie 
     */
    public function getMarqueur()
    {
        return $this->marqueur;
    }

    /**
     * Set arbitre
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Licencie $arbitre
     * @return Rencontre
     */
    public function setArbitre(\Joachim\Bundle\MatchBundle\Entity\Licencie $arbitre = null)
    {
        $this->arbitre = $arbitre;

        return $this;
    }

    /**
     * Get arbitre
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Licencie 
     */
    public function getArbitre()
    {
        return $this->arbitre;
    }

    /**
     * Set gymnase
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Gymnase $gymnase
     * @return Rencontre
     */
    public function setGymnase(\Joachim\Bundle\MatchBundle\Entity\Gymnase $gymnase = null)
    {
        $this->gymnase = $gymnase;

        return $this;
    }

    /**
     * Get gymnase
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Gymnase 
     */
    public function getGymnase()
    {
        return $this->gymnase;
    }

    /**
     * Set equipeVisiteuse
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Equipe $equipeVisiteuse
     * @return Rencontre
     */
    public function setEquipeVisiteuse(\Joachim\Bundle\MatchBundle\Entity\Equipe $equipeVisiteuse = null)
    {
        $this->equipeVisiteuse = $equipeVisiteuse;

        return $this;
    }

    /**
     * Get equipeVisiteuse
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Equipe 
     */
    public function getEquipeVisiteuse()
    {
        return $this->equipeVisiteuse;
    }

    /**
     * Set equipeRecevante
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Equipe $equipeRecevante
     * @return Rencontre
     */
    public function setEquipeRecevante(\Joachim\Bundle\MatchBundle\Entity\Equipe $equipeRecevante = null)
    {
        $this->equipeRecevante = $equipeRecevante;

        return $this;
    }

    /**
     * Get equipeRecevante
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Equipe 
     */
    public function getEquipeRecevante()
    {
        return $this->equipeRecevante;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return \Joachim\Bundle\MatchBundle\Entity\Equipe
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

}
