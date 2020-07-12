<?php
namespace src\controller;

use libs\system\Controller;

class MoralController extends Controller
{
    public function add(){
        return $this->view->load("moral/add");
    }
}
