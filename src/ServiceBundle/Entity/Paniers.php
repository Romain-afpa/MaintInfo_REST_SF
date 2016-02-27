<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paniers
 *
 * @ORM\Table(name="paniers", indexes={@ORM\Index(name="I_FK_PANIERS_SHOPUSERS", columns={"ID_SHOPUSER"})})
 * @ORM\Entity
 */
class Paniers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PANIER", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanier;

    /**
     * @var string
     *
     * @ORM\Column(name="DATEPANIER", type="string", length=16, nullable=false)
     */
    private $datepanier;

    /**
     * @var string
     *
     * @ORM\Column(name="SESSIONID", type="string", length=255, nullable=false)
     */
    private $sessionid;

    /**
     * @var \ServiceBundle\Entity\Shopusers
     *
     * @ORM\ManyToOne(targetEntity="ServiceBundle\Entity\Shopusers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SHOPUSER", referencedColumnName="ID_SHOPUSER")
     * })
     */
    private $idShopuser;



    /**
     * Get idPanier
     *
     * @return integer
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * Set datepanier
     *
     * @param string $datepanier
     *
     * @return Paniers
     */
    public function setDatepanier($datepanier)
    {
        $this->datepanier = $datepanier;

        return $this;
    }

    /**
     * Get datepanier
     *
     * @return string
     */
    public function getDatepanier()
    {
        return $this->datepanier;
    }

    /**
     * Set sessionid
     *
     * @param string $sessionid
     *
     * @return Paniers
     */
    public function setSessionid($sessionid)
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * Get sessionid
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set idShopuser
     *
     * @param \ServiceBundle\Entity\Shopusers $idShopuser
     *
     * @return Paniers
     */
    public function setIdShopuser(\ServiceBundle\Entity\Shopusers $idShopuser = null)
    {
        $this->idShopuser = $idShopuser;

        return $this;
    }

    /**
     * Get idShopuser
     *
     * @return \ServiceBundle\Entity\Shopusers
     */
    public function getIdShopuser()
    {
        return $this->idShopuser;
    }
}
