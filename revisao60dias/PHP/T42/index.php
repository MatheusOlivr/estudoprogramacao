<form method = "POST">
    <label for = "inputFileName">DIGITE AQUI O NOME DO ARQUIVO QUE DESEJA MOVER:</label>
    <br>
    <input type = "text" name = "inputFileName">
    </br>
    <button>MOVER ARQUIVO</button>
</form>
<?php
    function moveFile($fileName)
    {
        global $dirAtual;
        global $dirDestino;
        $filenameAtual = $dirAtual.DIRECTORY_SEPARATOR.$fileName;
        $filenameDestino = $dirDestino.DIRECTORY_SEPARATOR.$fileName;
        if (file_exists($filenameAtual))
        {
            rename($filenameAtual,$filenameDestino);
            echo "o Arquivo [".$fileName."] foi movido com sucesso do diretório ".$dirAtual." para o diretório ".$dirDestino;
        }
        else
        {
            echo "Esse arquivo não existe nesse diretório";
        }
    }
    $dirAtual = "atual";
    $dirDestino = "destino";
    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $fileName = $_POST["inputFileName"];
        moveFile($fileName);
    }
    echo "<pre>";
    echo "diretório atual";
    print_r(scandir($dirAtual));
    echo "</pre>";
    echo "<pre>";
    echo "diretório Destino";
    print_r(scandir($dirDestino));
    echo "</pre>";
?>