<?php
namespace libs\system;

class Model{

    protected $entityManager;

    public function __construct()
    {
        require_once "boostrap.php";
        $this->entityManager = $entityManager;
    }
}