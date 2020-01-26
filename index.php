<?php

require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/',function () {
        require_once("view/index.php");
    }
);

$app->get('/instituicao', function (){
        require_once("view/instituicao.php");   
    }
);

$app->get('/educacional',function (){
        require_once("view/educacional.php");   
    }
);

$app->get('/social',function (){
        require_once("view/social.php");   
    }
);

$app->get('/vida-rosa-de-saron',function (){
        require_once("view/vida-rosa-de-saron.php");   
    }
);
$app->get('/unidades',function (){
        require_once("view/unidades.php");   
    }
);

$app->get('/imprensa',function (){
        require_once("view/imprensa.php");   
    }
);

$app->get(
    '/proposta-pedagogica',
    function (){
        require_once("view/proposta-pedagogica.php");   
    }
);

$app->get(
    '/produtos',
    function (){
       $sql = new Sql(); 
       $data = $sql->select("SELECT * FROM tb_usuarios");
       echo json_encode($data);
   }
);

$app->run();
