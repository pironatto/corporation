<?php


require_once('database.php');

class user
{
    private $con;

    public function __construct()
    {
        $this->con = database::conexao();
    }

    public function getUsers(){
        $dados = array();
        $cmd = $this->con->query("SELECT * from users");
        $dados = $cmd->fetchall();
        return $dados;
    }

}
