<?php
include_once('conexao.php');

$idUsuario = $_POST['idUsuario'];
$grupoAnt = $_POST['grupoAnt'];
$dia = $_POST['_dia'];
$grupo = $_POST['grupo'];
$ex1 = $_POST['ex1'];
$ex2 = $_POST['ex2'];
$ex3 = $_POST['ex3'];
$ex4 = $_POST['ex4'];
$ex5 = $_POST['ex5'];
$ex6 = $_POST['ex6'];
$ex7 = $_POST['ex7'];

$sql = "UPDATE treino

              SET 
              dia = '$dia',
              grupo = '$grupo',
              ex1 = '$ex1',
              ex2 = '$ex2',
              ex3 = '$ex3',
              ex4 = '$ex4',
              ex5 = '$ex5',
              ex6 = '$ex6',
              ex7 = '$ex7'

              WHERE idUsuario = $idUsuario and dia=$dia and grupo = '$grupoAnt'";
echo $sql;
if ($conn->query($sql) === TRUE) {
?>
<?php

    header("Location: ../php/fichaTreino.php?idUsuario=$idUsuario");
} else {
?>
    <script>
        alert("Erro ao tentar realizar cadastro");
        window.history.back();
    </script>
<?php
}
?>