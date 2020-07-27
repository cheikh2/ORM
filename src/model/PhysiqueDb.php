<?php
namespace src\model;

use libs\system\Model;

class PhysiqueDb extends Model
{
    public function findAll(){
        return $this->entityManager
                    ->createQuery("SELECT p FROM Physique p")
                    ->getResult();
    }

    // public function getMoral($id){
    //     return $this->entityManager
    //                 ->createQuery("SELECT m FROM Moral WHERE id=>$id")
    //                 ->getResult();
    // }

    public function insert($physique){
        $this->entityManager->persist($$physique);
        $this->entityManager->flush();
    }
}
