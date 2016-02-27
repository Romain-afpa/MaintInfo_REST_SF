<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shopusers
 *
 * @ORM\Table(name="shopusers")
 * @ORM\Entity
 */
class Shopusers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SHOPUSER", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShopuser;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTIFIANT", type="string", length=60, nullable=false)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTDEPASSE", type="string", length=60, nullable=false)
     */
    private $motdepasse;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=60, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=60, nullable=true)
     */
    private $email;



    /**
     * Get idShopuser
     *
     * @return integer
     */
    public function getIdShopuser()
    {
        return $this->idShopuser;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Shopusers
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set motdepasse
     *
     * @param string $motdepasse
     *
     * @return Shopusers
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Shopusers
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
     * Set email
     *
     * @param string $email
     *
     * @return Shopusers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
