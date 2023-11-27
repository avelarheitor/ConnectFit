<?php
include_once("conexao.php");

if (isset($_GET["idUsuario"])) {
    $idUsuario = $_GET["idUsuario"];

    $sql = "DELETE FROM usuario WHERE idUsuario = $idUsuario";

    if ($conn->query($sql) === TRUE) {
?>

        <script>
            alert("Registro excluído com sucesso.");
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