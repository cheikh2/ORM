<?php
//namespace src\controller;

use libs\system\Controller;
use src\model\MoralDb;

class MoralController extends Controller
{
    public function add(){
        return $this->view->load("moral/add");
    }

    public function getAll(){
        $moraldao = new MoralDb;
        $moral = $moraldao->findAll();
        return $this->view->load("moral/getAll", $moral);
    }

    public function delete($id){
        echo $id;
    }
}
