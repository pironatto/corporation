<?php 

namespace app\core;
use app\views;

Class Controller{

    public $dados;
    

    public function __construct()
    {
        $this->dados = array();
       
    }

    public function CarregarTemplate($nomeView, $dadosModel = array()){
        $this->dados = $dadosModel;
        require("../app/views/template.php");
    }

    public function CarregarView($nomeView, $dadosModel = array()){
        extract($dadosModel);
        require("../app/views/$nomeView.php");

    }

}


?>