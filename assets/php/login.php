<?php
include("conexao.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}

$sql = "SELECT * FROM usuario WHERE emailUsuario = '$email' AND
    senhaUsuario = '$senha'";

$resultado = $conn->query($sql);

if ($resultado->num_rows == 1) {

    $usuario = $resultado->fetch_assoc();

    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['nome'] = $usuario['nomeUsuario'];

    header("Location: ../php/paginaInicialUsuario.php");
} else {
    echo "Falha ao logar! Email ou Senha incorretos!";
}
