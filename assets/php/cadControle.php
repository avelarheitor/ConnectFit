<?php
include_once('conexao.php');

$nomeUsuario = $_POST['m-nome'];
$emailUsuario = $_POST['m-email'];
$senhaUsuario = $_POST['m-senha'];
$idadeUsuario = $_POST['m-idade'];
$pesoUsuario = $_POST['m-peso'];
$fichaUsuario = $_POST['m-ficha'];

$sql = "INSERT INTO usuario (nomeUsuario, emailUsuario, senhaUsuario, idadeUsuario, pesoUsuario, tipoFicha)
            VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario', '$idadeUsuario', '$pesoUsuario', '$fichaUsuario')";

if ($conn->query($sql) === TRUE) {
    ?>
    <?php
    header("Location: ../php/telaUsuarios.php");
} else {
    ?>
    <script>
        alert("Erro ao tentar realizar cadastro");
        window.history.back();
    </script>
    <?php
}
?>