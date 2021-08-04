<?php

namespace app\core;

class Route
{

     public function __construct()
     {
          $this->Run();
     }

     //RODAR O PROJETO
     public function Run()
     {
          $id = array();         

          //VERIFICA SE O ENDEREÇO ESTÁ PREENCHIDO
          if (isset($_GET['pag'])) {
               $url = $_GET['pag'];
          }
          //VERIFICA SE O ENDEREÇO TEM INFORMAÇÃO APÓS DOMINIO (CONTROLLER)
          if (!empty($url)) {
               $url = explode('/', $url);
               $controller = $url[0].'Controller';
               array_shift($url);

               //SEPARA O ACTION
               if (isset($url[0]) && !empty($url[0])) {
                    $action = $url[0];
                    array_shift($url);
               }
               //SE O ENDEREÇO SÓ TEM O CONTROLLER (NÃO TEM ACTION)
               else {
                    $action = 'index';
               }

               //VERIFICA SE O ENDEREÇO TAMBEM TEM ID   
               if (count($url) > 0) {
                    $id = $url[0];
               }
                
      
          }

          //SE NÃO TIVER INFORMAÇÃO DE CONTROLLER
          else {
              $controller = 'homeController';
              $action = 'index';
          }
        
          //RELACIONA O CONTROLLER COM A PASTA DE CONTROLLERS 
          $controller = 'app\\controllers\\'. $controller;

          //VERIFICA SE O CAMINHO DIGITADO NAO EXISTE
          $caminho = $controller.'.php';
            
         if(!file_exists($caminho)&& !method_exists($controller,$action)){
          $controller = 'app\\controllers\\homeController';
          $action = 'erro';
          
            
         }

         //INSTANCIA O CONTROLLER E A ACTION
          $ctr = new $controller();
          $ctr->$action();
           

             

        
     }
}
