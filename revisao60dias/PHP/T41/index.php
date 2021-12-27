<form enctype="multipart/form-data" method = "POST">
    <label for = "urlInput">DIGITE AQUI A URL DA IMAGEM:</label>
    <br>
    <input type = "text" name = "urlInput">
    </br>
    <button>Baixar Imagem</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $url = $_POST["urlInput"];
        $urlContent = file_get_contents($url);
        echo $urlContent;
        $getInfoUrl = parse_url($url);
        $filename = "download".DIRECTORY_SEPARATOR.basename($getInfoUrl["path"]);
        $image = fopen($filename,"w+");
        fwrite($image,$urlContent);
        fclose($image);
        if (file_exists($filename))
        {
            echo "Imagem baixada com sucesso";
        }
        else
        {
            echo "Não foi possivél fazer o download da imagem";
        }
    }
?>