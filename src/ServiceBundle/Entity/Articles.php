<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ARTICLE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="DESART", type="string", length=60, nullable=true)
     */
    private $desart;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOCKART", type="integer", nullable=true)
     */
    private $stockart;

    /**
     * @var integer
     *
     * @ORM\Column(name="SEUILMIN", type="integer", nullable=true)
     */
    private $seuilmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENCOMMANDE", type="integer", nullable=true)
     */
    private $encommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENREPA", type="integer", nullable=true)
     */
    private $enrepa;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIXART", type="float", precision=13, scale=2, nullable=true)
     */
    private $prixart;

    /**
     * @var integer
     *
     * @ORM\Column(name="DELAIREAPPRO", type="integer", nullable=true)
     */
    private $delaireappro;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONSOMOY", type="integer", nullable=true)
     */
    private $consomoy;

    /**
     * @var string
     *
     * @ORM\Column(name="FABRIQUANT", type="string", length=60, nullable=true)
     */
    private $fabriquant;



    /**
     * Get idArticle
     *
     * @return integer
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set desart
     *
     * @param string $desart
     *
     * @return Articles
     */
    public function setDesart($desart)
    {
        $this->desart = $desart;

        return $this;
    }

    /**
     * Get desart
     *
     * @return string
     */
    public function getDesart()
    {
        return $this->desart;
    }

    /**
     * Set stockart
     *
     * @param integer $stockart
     *
     * @return Articles
     */
    public function setStockart($stockart)
    {
        $this->stockart = $stockart;

        return $this;
    }

    /**
     * Get stockart
     *
     * @return integer
     */
    public function getStockart()
    {
        return $this->stockart;
    }

    /**
     * Set seuilmin
     *
     * @param integer $seuilmin
     *
     * @return Articles
     */
    public function setSeuilmin($seuilmin)
    {
        $this->seuilmin = $seuilmin;

        return $this;
    }

    /**
     * Get seuilmin
     *
     * @return integer
     */
    public function getSeuilmin()
    {
        return $this->seuilmin;
    }

    /**
     * Set encommande
     *
     * @param integer $encommande
     *
     * @return Articles
     */
    public function setEncommande($encommande)
    {
        $this->encommande = $encommande;

        return $this;
    }

    /**
     * Get encommande
     *
     * @return integer
     */
    public function getEncommande()
    {
        return $this->encommande;
    }

    /**
     * Set enrepa
     *
     * @param integer $enrepa
     *
     * @return Articles
     */
    public function setEnrepa($enrepa)
    {
        $this->enrepa = $enrepa;

        return $this;
    }

    /**
     * Get enrepa
     *
     * @return integer
     */
    public function getEnrepa()
    {
        return $this->enrepa;
    }

    /**
     * Set prixart
     *
     * @param float $prixart
     *
     * @return Articles
     */
    public function setPrixart($prixart)
    {
        $this->prixart = $prixart;

        return $this;
    }

    /**
     * Get prixart
     *
     * @return float
     */
    public function getPrixart()
    {
        return $this->prixart;
    }

    /**
     * Set delaireappro
     *
     * @param integer $delaireappro
     *
     * @return Articles
     */
    public function setDelaireappro($delaireappro)
    {
        $this->delaireappro = $delaireappro;

        return $this;
    }

    /**
     * Get delaireappro
     *
     * @return integer
     */
    public function getDelaireappro()
    {
        return $this->delaireappro;
    }

    /**
     * Set consomoy
     *
     * @param integer $consomoy
     *
     * @return Articles
     */
    public function setConsomoy($consomoy)
    {
        $this->consomoy = $consomoy;

        return $this;
    }

    /**
     * Get consomoy
     *
     * @return integer
     */
    public function getConsomoy()
    {
        return $this->consomoy;
    }

    /**
     * Set fabriquant
     *
     * @param string $fabriquant
     *
     * @return Articles
     */
    public function setFabriquant($fabriquant)
    {
        $this->fabriquant = $fabriquant;

        return $this;
    }

    /**
     * Get fabriquant
     *
     * @return string
     */
    public function getFabriquant()
    {
        return $this->fabriquant;
    }
}
