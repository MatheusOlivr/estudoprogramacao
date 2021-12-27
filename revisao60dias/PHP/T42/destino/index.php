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
            echo "o Arquivo [".$fileName."] foi movido com sucesso do diretório";
        }
        else
        {
            echo "Esse arquivo não existe nesse diretório";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $fileName = $_POST["inputFileName"];
        $dirAtual = "atual";
        $dirDestino = "destino";
        moveFile($fileName);
    }
    else
    {
        print_r(scandir($dirAtual));
    }
?>