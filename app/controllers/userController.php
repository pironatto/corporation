<?php 

namespace app\controllers;

use app\core\Controller;

class userController extends Controller{

  

public function login(){
    $this->CarregarTemplate('user/login');
    
    
}

public function cadastro(){
    $this->CarregarTemplate('user/cadastro');
    
}


}


?>