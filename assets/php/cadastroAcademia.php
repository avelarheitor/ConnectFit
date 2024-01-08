<?php
include_once('conexao.php');

$nomeAcademia = $_POST['nomeAcademia'];
$emailAcademia = $_POST['emailAcademia'];
$cnpj = $_POST['cnpj'];
$senhaAcademia = $_POST['senhaAcademia'];
$telAcademia = $_POST['telAcademia'];

$sql = "INSERT INTO academia (nomeAcademia, emailAcademia, cnpj, senhaAcademia, telAcademia)
    VALUES ('$nomeAcademia', '$emailAcademia', '$cnpj', '$senhaAcademia', '$telAcademia')";

if ($conn->query($sql) === TRUE) {
    ?>
    <?php

    header("Location: ../html/loginAcademia.html");
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