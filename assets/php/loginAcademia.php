<?php
include("conexao.php");

if (isset($_POST['cnpj']) && isset($_POST['senha'])) {
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];
}

$sql = "SELECT * FROM academia WHERE cnpj = '$cnpj' AND
    senhaAcademia = '$senha'";

$resultado = $conn->query($sql);

if ($resultado->num_rows == 1) {

    $usuario = $resultado->fetch_assoc();

    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['nome'] = $usuario['nomeAcademia'];

    header("Location: telaUsuarios.php");
} else {
    echo "Falha ao logar! Email ou Senha incorretos!";
}
