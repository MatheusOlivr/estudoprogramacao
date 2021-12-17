<?php
    function errorHandler($code,$message,$file,$line)
    {
        $error = 
        [
            "code" => $code,
            "message" => $message,
            "line" => $line,
            "file" => $file
        ];
        echo "<h2>Algo deu errado, pois ocorreu o seguinte erro:</h2>";
        echo "<pre>";
        echo "<hr>";
        echo "LOG DO ERRO:</br>";
        foreach($error as $key => $value)
        {
            echo $key.": ".$value."</br>";
        }
        echo "</pre>";
        echo "<hr>";
    }
    set_error_handler("errorHandler");
    echo 50/0;
?>
