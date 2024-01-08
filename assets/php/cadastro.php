<?php
include_once('conexao.php');

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];
$telUsuario = $_POST['telUsuario'];

$sql = "INSERT INTO usuario (nomeUsuario, emailUsuario, senhaUsuario, telUsuario)
    VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario', '$telUsuario')";

if ($conn->query($sql) === TRUE) {
    ?>
    <?php
    header("Location: ../html/loginUsuario.html");
} else {
    ?>
    <script>
        alert("Erro ao tentar realizar cadastro");
        window.history.back();
    </script>
    <?php
}

$conn->close();
?>