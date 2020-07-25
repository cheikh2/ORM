<?php
//namespace src\controller;
require_once "src/entity/Moral.php";

use libs\system\Controller;
use src\model\MoralDb;
//use src\entity\Moral;

class MoralController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        if (isset($_POST['ajouter'])) {
            extract($_POST);
            $moral = new Moral();
            $moral->setNomEmpl($nomEmpl);
            $moral->setNinea($ninea);
            $moral->setRc($rc);
            $moral->setRaisonSocial($raisonSocial);
            $moral->setAdressEmpl($adressEmpl);

            $moraldao = new MoralDb;
            $moraldao->insert($moral);

            header('Location:getAll');

        }
        return $this->view->load("moral/add");
    }

    public function getAll()
    {
        $moraldao = new MoralDb;
        $moral = $moraldao->findAll();
        return $this->view->load("moral/getAll", $moral);
    }

    public function delete($id)
    {
        echo $id;
    }
}
