<?php 
    require 'vendor/autoload.php';
    $app = new \Slim\Slim();
    $app->get('/hello/:name', function ($name) {
        echo "Hello, " . $name;
    });
    $app->get("/",function(){
        echo "Eu sou a página inicial";
    });
    $app->get("/home/:name",function($name)
    	{
    		echo "<h3>Ola ".$name."</h3>";
    		echo "<h3>Seja bem vindo a home</h3>";
    	});
    $app->run();
?>