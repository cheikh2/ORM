<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="Compte")
 */
class Moral{

    /** @Id @Column(type='="integer") @GeneratedValue*/
    private $id;
    /**@Column(type='="string") **/ 
    private $nomEmpl;
    /**@Column(type='="string") **/
    private $ninea;
    /**@Column(type='="string") **/
    private $rc;
    /**@Column(type='="string") **/
    private $raisonSocial;
    /**@Column(type='="string") **/
    private $adressEmpl;

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

        return $this;
    }


    public function getNomEmpl()
    {
        return $this->nomEmpl;
    }


    public function setNomEmpl($nomEmpl)
    {
        $this->nomEmpl = $nomEmpl;

        return $this;
    }

    public function getNinea()
    {
        return $this->ninea;
    }

    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }
 
    public function getRc()
    {
        return $this->rc;
    }

    public function setRc($rc)
    {
        $this->rc = $rc;

        return $this;
    }

    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }
 
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    public function getAdressEmpl()
    {
        return $this->adressEmpl;
    }

    public function setAdressEmpl($adressEmpl)
    {
        $this->adressEmpl = $adressEmpl;

        return $this;
    }
}