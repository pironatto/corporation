<?php 


 class database{

    private static $con;

    private function __construct(){   
    }

    public static function conexao(){
           
        if(!isset(self::$con)){

                $dbname = 'teste';
                $host ='localhost';
                $user='root';
                $senha='';

                try {
                    self::$con = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
                } catch (PDOException $e) {
                    echo "Erro na conexão com o banco de dados . $e";
                }
        }

        return self::$con;

    }
   


}

?>