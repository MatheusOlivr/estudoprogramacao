<?php 
    require 'vendor/autoload.php';
    $app = new \Slim\Slim();
    $app->get('/hello/:name', function ($name) {
        echo "Hello, " . $name;
    });
    $app->get("/",function(){
        echo "eu sou a página inicial";
    });
    $app->get("/criador",function(){
        echo "<h2>PÁGINA DO CRIADOR:<h/2><br>";
        echo "<b>Criador: MatheusOlivr</b><br>";
    });
    $app->run();
?>