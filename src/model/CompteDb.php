<?php
namespace src\model;

use libs\system\Model;

class CompteDb extends Model
{
    public function findAll(){
        return $this->entityManager
                    ->createQuery("SELECT c FROM Compte c")
                    ->getResult();
    }

    public function insert($compte){
        $this->entityManager->persist($compte);
        $this->entityManager->flush();
    }
}
