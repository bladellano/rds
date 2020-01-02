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

$app->get('/cursos',function (){
        require_once("view/cursos.php");   
    }
);

$app->get('/metodos-avaliativos',function (){
        require_once("view/metodos-avaliativos.php");   
    }
);

$app->get('/matriz-curricular',function (){
        require_once("view/matriz-curricular.php");   
    }
);

$app->get('/acoes-sociais-externas',function (){
        require_once("view/acoes-sociais-externas.php");   
    }
);

$app->get('/direitos-deveres-seus-alunos-professores',function (){
        require_once("view/direitos-deveres-seus-alunos-professores.php");   
    }
);

$app->get('/eventos-sociais-promovidos-pelo-colegio',function (){
        require_once("view/eventos-sociais-promovidos-pelo-colegio.php");   
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
