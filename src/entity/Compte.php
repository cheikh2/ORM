<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Compte")
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $numAgence;

    /**
     * @ORM\Column(type="string")
     */
    private $numCompte;

    /**
     * @ORM\Column(type="string")
     */
    private $rib;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
     */
    private $typeCompte;

     /**
     * @ORM\ManyToOne(targetEntity="Moral", inversedBy="comptes")
     */
    private $moral;

    /**
     * @ORM\ManyToOne(targetEntity="Physique", inversedBy="comptes")
     */
    private $physique;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->typeCompte = new ArrayCollection();
        $this->moral = new ArrayCollection();
        $this->physique = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumAgence()
    {
        return $this->numAgence;
    }

    public function setNumAgence($numAgence)
    {
        $this->numAgence = $numAgence;
    }

    public function getNumCompte()
    {
        return $this->numCompte;
    }

    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;
    }

    public function getRib()
    {
        return $this->rib;
    }

    public function setRib($rib)
    {
        $this->rib = $rib;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }
    public function getMoral()
    {
        return $this->moral;
    }
    public function setMoral($moral)
    {
        $this->moral = $moral;
    }

    public function getPhysique()
    {
        return $this->physique;
    }
    public function setPhysique($physique)
    {
        $this->physique = $physique;
    }
}
