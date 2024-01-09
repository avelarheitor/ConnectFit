<?php
include_once("conexao.php");

if (isset($_GET["idUsuario"])) {
    $idUsuario = $_GET["idUsuario"];

    $sql = "DELETE FROM usuario WHERE idUsuario = $idUsuario";
    $sql1 = "DELETE FROM treino WHERE idUsuario = $idUsuario";

    if ($conn->query($sql) && $conn->query($sql1) === TRUE) {
        ?>

        <script>
            window.location = "telaUsuarios.php";
        </script>

        <?php

    } else {
        ?>
        <script>
            alert("Erro ao excluir o registro.");
            window.location = "telaUsuarios.php";
        </script>

        <?php
    }
}
?>