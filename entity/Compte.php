<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="Compte")
 */
class Compte
{

    /** @Id @Column(type='="integer") @GeneratedValue*/
    private $id;
    /**@Column(type='="string") **/
    private $numAgence;
    /**@Column(type='="string") **/
    private $rib;
    /**@Column(type='="integer") **/
    private $montant;
    /**@Column(type='="string") **/
    private $numCompte;
    /**@Column(type='="date") **/
    private $dateDebut;
    /**@Column(type='="date") **/
    private $dateFin;
    
    private $typeCompte;
    private $moral;
    private $physique;

    public function __construct()
    {
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
