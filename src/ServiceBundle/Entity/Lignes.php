<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignes
 *
 * @ORM\Table(name="lignes", indexes={@ORM\Index(name="I_FK_LIGNES_PANIERS", columns={"ID_PANIER"}), @ORM\Index(name="I_FK_LIGNES_ARTICLES", columns={"ID_ARTICLE"})})
 * @ORM\Entity
 */
class Lignes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LIGNE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigne;

    /**
     * @var integer
     *
     * @ORM\Column(name="QUANTITE", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \ServiceBundle\Entity\Articles
     *
     * @ORM\ManyToOne(targetEntity="ServiceBundle\Entity\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ARTICLE", referencedColumnName="ID_ARTICLE")
     * })
     */
    private $idArticle;

    /**
     * @var \ServiceBundle\Entity\Paniers
     *
     * @ORM\ManyToOne(targetEntity="ServiceBundle\Entity\Paniers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PANIER", referencedColumnName="ID_PANIER")
     * })
     */
    private $idPanier;



    /**
     * Get idLigne
     *
     * @return integer
     */
    public function getIdLigne()
    {
        return $this->idLigne;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Lignes
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idArticle
     *
     * @param \ServiceBundle\Entity\Articles $idArticle
     *
     * @return Lignes
     */
    public function setIdArticle(\ServiceBundle\Entity\Articles $idArticle = null)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return \ServiceBundle\Entity\Articles
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idPanier
     *
     * @param \ServiceBundle\Entity\Paniers $idPanier
     *
     * @return Lignes
     */
    public function setIdPanier(\ServiceBundle\Entity\Paniers $idPanier = null)
    {
        $this->idPanier = $idPanier;

        return $this;
    }

    /**
     * Get idPanier
     *
     * @return \ServiceBundle\Entity\Paniers
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }
}
