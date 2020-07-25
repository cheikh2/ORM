<?php
namespace src\model;

use libs\system\Model;

class MoralDb extends Model
{
    public function findAll(){
        return $this->entityManager
                    ->createQuery("SELECT m FROM Moral m")
                    ->getResult();
    }

    public function insert($moral){
        $this->entityManager->persist($moral);
        $this->entityManager->flush();
    }
}
