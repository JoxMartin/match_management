<?php

namespace Joachim\Bundle\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feuille
 *
 * @ORM\Table(name="feuille", indexes={@ORM\Index(name="fk_feuille_match1_idx", columns={"match_id"})})
 * @ORM\Entity
 */
class Feuille
{
    /**
     * @var string
     *
     * @ORM\Column(name="composition", type="text", length=65535, nullable=false)
     */
    private $composition;

    /**
     * @var string
     *
     * @ORM\Column(name="set_1", type="text", length=65535, nullable=false)
     */
    private $set1;

    /**
     * @var string
     *
     * @ORM\Column(name="set_2", type="text", length=65535, nullable=false)
     */
    private $set2;

    /**
     * @var string
     *
     * @ORM\Column(name="set_3", type="text", length=65535, nullable=true)
     */
    private $set3;

    /**
     * @var string
     *
     * @ORM\Column(name="set_4", type="text", length=65535, nullable=true)
     */
    private $set4;

    /**
     * @var string
     *
     * @ORM\Column(name="set_5", type="text", length=65535, nullable=true)
     */
    private $set5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation_arbitre", type="boolean", nullable=false)
     */
    private $validationArbitre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation_second", type="boolean", nullable=false)
     */
    private $validationSecond;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation_marqueur", type="boolean", nullable=false)
     */
    private $validationMarqueur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation_capitaine_equipe_recevante", type="boolean", nullable=false)
     */
    private $validationCapitaineEquipeRecevante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation_capitaine_equipe_visiteuse", type="boolean", nullable=false)
     */
    private $validationCapitaineEquipeVisiteuse;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text", length=65535, nullable=true)
     */
    private $remarques;

    /**
     * @var integer
     *
     * @ORM\Column(name="feuille_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $feuilleId;

    /**
     * @var \Joachim\Bundle\MatchBundle\Entity\Rencontre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Joachim\Bundle\MatchBundle\Entity\Rencontre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="match_id", referencedColumnName="match_id")
     * })
     */
    private $match;



    /**
     * Set composition
     *
     * @param string $composition
     * @return Feuille
     */
    public function setComposition($composition)
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * Get composition
     *
     * @return string 
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Set set1
     *
     * @param string $set1
     * @return Feuille
     */
    public function setSet1($set1)
    {
        $this->set1 = $set1;

        return $this;
    }

    /**
     * Get set1
     *
     * @return string 
     */
    public function getSet1()
    {
        return $this->set1;
    }

    /**
     * Set set2
     *
     * @param string $set2
     * @return Feuille
     */
    public function setSet2($set2)
    {
        $this->set2 = $set2;

        return $this;
    }

    /**
     * Get set2
     *
     * @return string 
     */
    public function getSet2()
    {
        return $this->set2;
    }

    /**
     * Set set3
     *
     * @param string $set3
     * @return Feuille
     */
    public function setSet3($set3)
    {
        $this->set3 = $set3;

        return $this;
    }

    /**
     * Get set3
     *
     * @return string 
     */
    public function getSet3()
    {
        return $this->set3;
    }

    /**
     * Set set4
     *
     * @param string $set4
     * @return Feuille
     */
    public function setSet4($set4)
    {
        $this->set4 = $set4;

        return $this;
    }

    /**
     * Get set4
     *
     * @return string 
     */
    public function getSet4()
    {
        return $this->set4;
    }

    /**
     * Set set5
     *
     * @param string $set5
     * @return Feuille
     */
    public function setSet5($set5)
    {
        $this->set5 = $set5;

        return $this;
    }

    /**
     * Get set5
     *
     * @return string 
     */
    public function getSet5()
    {
        return $this->set5;
    }

    /**
     * Set validationArbitre
     *
     * @param boolean $validationArbitre
     * @return Feuille
     */
    public function setValidationArbitre($validationArbitre)
    {
        $this->validationArbitre = $validationArbitre;

        return $this;
    }

    /**
     * Get validationArbitre
     *
     * @return boolean 
     */
    public function getValidationArbitre()
    {
        return $this->validationArbitre;
    }

    /**
     * Set validationSecond
     *
     * @param boolean $validationSecond
     * @return Feuille
     */
    public function setValidationSecond($validationSecond)
    {
        $this->validationSecond = $validationSecond;

        return $this;
    }

    /**
     * Get validationSecond
     *
     * @return boolean 
     */
    public function getValidationSecond()
    {
        return $this->validationSecond;
    }

    /**
     * Set validationMarqueur
     *
     * @param boolean $validationMarqueur
     * @return Feuille
     */
    public function setValidationMarqueur($validationMarqueur)
    {
        $this->validationMarqueur = $validationMarqueur;

        return $this;
    }

    /**
     * Get validationMarqueur
     *
     * @return boolean 
     */
    public function getValidationMarqueur()
    {
        return $this->validationMarqueur;
    }

    /**
     * Set validationCapitaineEquipeRecevante
     *
     * @param boolean $validationCapitaineEquipeRecevante
     * @return Feuille
     */
    public function setValidationCapitaineEquipeRecevante($validationCapitaineEquipeRecevante)
    {
        $this->validationCapitaineEquipeRecevante = $validationCapitaineEquipeRecevante;

        return $this;
    }

    /**
     * Get validationCapitaineEquipeRecevante
     *
     * @return boolean 
     */
    public function getValidationCapitaineEquipeRecevante()
    {
        return $this->validationCapitaineEquipeRecevante;
    }

    /**
     * Set validationCapitaineEquipeVisiteuse
     *
     * @param boolean $validationCapitaineEquipeVisiteuse
     * @return Feuille
     */
    public function setValidationCapitaineEquipeVisiteuse($validationCapitaineEquipeVisiteuse)
    {
        $this->validationCapitaineEquipeVisiteuse = $validationCapitaineEquipeVisiteuse;

        return $this;
    }

    /**
     * Get validationCapitaineEquipeVisiteuse
     *
     * @return boolean 
     */
    public function getValidationCapitaineEquipeVisiteuse()
    {
        return $this->validationCapitaineEquipeVisiteuse;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Feuille
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set feuilleId
     *
     * @param integer $feuilleId
     * @return Feuille
     */
    public function setFeuilleId($feuilleId)
    {
        $this->feuilleId = $feuilleId;

        return $this;
    }

    /**
     * Get feuilleId
     *
     * @return integer 
     */
    public function getFeuilleId()
    {
        return $this->feuilleId;
    }

    /**
     * Set match
     *
     * @param \Joachim\Bundle\MatchBundle\Entity\Rencontre $match
     * @return Feuille
     */
    public function setMatch(\Joachim\Bundle\MatchBundle\Entity\Rencontre $match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return \Joachim\Bundle\MatchBundle\Entity\Rencontre 
     */
    public function getMatch()
    {
        return $this->match;
    }
}
