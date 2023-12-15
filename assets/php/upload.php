<?php 
    if(isset($_POST["upload"])) {
        $file = $_FILES["file"];

        $folder = "uploads";

        $permite = array("tif","jpg","png","jpeg");

        $maxSize = 1024 * 1024 * 5;

        $name = $file["name"];
        $type = $file["type"];
        $size = $file["size"];
        $tmp = $file["tmp_name"];

        $extensao = @end(explode(".", $file["name"]));

        $novoNome = rand() . ".$extensao";

        if (!in_array($extensao, $permite)){
            $msg = "<b>name</b>" . "Erro: tipo de arquivo não permitido!";
        }else if ($size > $maxSize) {
            $msg = "<b>name</b>". "Tamanho maior que o permitido!";
        }else{
            if(move_uploaded_file($tmp, $folder."/".$novoNome)){
                include_once("conexao.php");

                $sql = "INSERT INTO usuario (nomeFoto, extFoto)
                        VALUES ('novoNome', '$extensao')";

                echo $sql;
        }
    }
}   
?>