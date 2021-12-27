<form method = "POST">
    <label for = "inputFileName">DIGITE AQUI O NOME DO ARQUIVO QUE DESEJA APAGAR:</label>
    <br>
    <input type = "text" name = "inputFileName">
    </br>
    <button>APAGAR ARQUIVO</button>
</form>
<?php
    function deleteFile($fileName)
    {
        if (file_exists($fileName))
        {
            unlink($fileName);
            echo "o Arquivo [".$fileName."] foi deletado com sucesso";
        }
        else
        {
            echo "Esse arquivo não existe nesse diretório";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $fileName = $_POST["inputFileName"];
        deleteFile($fileName);
    }
?>