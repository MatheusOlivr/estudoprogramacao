<form enctype="multipart/form-data" method = "POST">
    <input type = "file" name = "fileInput">
    </br>
    <button>Fazer Upload</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $file = $_FILES['fileInput'];
        if ($file["error"])
        {
            echo "Ocorreu algum erro ao carregar o arquivo";
        }
        else
        {
            if (move_uploaded_file($file["tmp_name"],"upload".DIRECTORY_SEPARATOR.$file["name"]))
            {
                echo "O upload do arquivo ".$file["name"]." ocorreu com sucesso";
            }
            else
            {
                echo "Ocorreu algum erro fazer o upload do arquivo".$file["name"];
            }
        }
    }
?>