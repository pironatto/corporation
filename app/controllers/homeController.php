<?php

namespace app\controllers;

use app\core\Controller;
use user;

require_once('../app/models/user.php');

class homeController extends Controller
{
public function index(){

    //CHAMAR UMA MODEL
   $n = new user();
   $dados = $n->getUsers();
   
 
    //CHAMARA A VIEW 
    $this->CarregarTemplate('home/index',$dados);  

    //FAZER A JUNÇÃO DO BACK COM FRONT END    
   
}

public function erro(){
    $this->CarregarTemplate('home/erro');
}


}
