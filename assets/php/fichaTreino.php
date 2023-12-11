<?php
include_once("conexao.php");              
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/fichaTreino.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Ficha Aluno</title>
</head>

<body>

  <?php
  if (isset($_GET["idUsuario"])) {
    $idUsuario = $_GET["idUsuario"];

    $sql = "SELECT * FROM usuario WHERE idUsuario = $idUsuario";

    $consulta = $conn->query($sql);
    $usuario = $consulta->fetch_assoc();
  }
  ?>



  <div class="container">
    <div class="workout-table">
                <table border="1">
                    <tr>
                        <th class="cabecalho">Dias</th>
                        <th class="cabecalho">Músculos</th>
                        <th class="cabecalho" colspan="8">Exercícios</th>
                    </tr>
                    <tr>
                        <td class="grupo1" rowspan="3">Segunda</td>
                        <td class="grupo1">Grupo 1</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1">Grupo 2</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1">Grupo 3</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo2" rowspan="3">Terça</td>
                        <td class="grupo2">Grupo 1</td>
                        <td class="grupo2">Exercício 1</td>
                        <td class="grupo2">Exercício 2</td>
                        <td class="grupo2">Exercício 3</td>
                        <td class="grupo2">Exercício 4</td>
                        <td class="grupo2">Exercício 5</td>
                        <td class="grupo2">Exercício 6</td>
                        <td class="grupo2">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo2">Grupo 2</td>
                        <td class="grupo2">Exercício 1</td>
                        <td class="grupo2">Exercício 2</td>
                        <td class="grupo2">Exercício 3</td>
                        <td class="grupo2">Exercício 4</td>
                        <td class="grupo2">Exercício 5</td>
                        <td class="grupo2">Exercício 6</td>
                        <td class="grupo2">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo2">Grupo 3</td>
                        <td class="grupo2">Exercício 1</td>
                        <td class="grupo2">Exercício 2</td>
                        <td class="grupo2">Exercício 3</td>
                        <td class="grupo2">Exercício 4</td>
                        <td class="grupo2">Exercício 5</td>
                        <td class="grupo2">Exercício 6</td>
                        <td class="grupo2">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1" rowspan="3">Quarta</td>
                        <td class="grupo1">Grupo 1</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1">Grupo 2</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1">Grupo 3</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo2" rowspan="3">Quinta</td>
                        <td class="grupo2">Grupo 1</td>
                        <td class="grupo2">Exercício 1</td>
                        <td class="grupo2">Exercício 2</td>
                        <td class="grupo2">Exercício 3</td>
                        <td class="grupo2">Exercício 4</td>
                        <td class="grupo2">Exercício 5</td>
                        <td class="grupo2">Exercício 6</td>
                        <td class="grupo2">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo2">Grupo 2</td>
                        <td class="grupo2">Exercício 1</td>
                        <td class="grupo2">Exercício 2</td>
                        <td class="grupo2">Exercício 3</td>
                        <td class="grupo2">Exercício 4</td>
                        <td class="grupo2">Exercício 5</td>
                        <td class="grupo2">Exercício 6</td>
                        <td class="grupo2">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo2">Grupo 3</td>
                        <td class="grupo2">Exercício 1</td>
                        <td class="grupo2">Exercício 2</td>
                        <td class="grupo2">Exercício 3</td>
                        <td class="grupo2">Exercício 4</td>
                        <td class="grupo2">Exercício 5</td>
                        <td class="grupo2">Exercício 6</td>
                        <td class="grupo2">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1" rowspan="3">Sexta</td>
                        <td class="grupo1">Grupo 1</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1">Grupo 2</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                    <tr>
                        <td class="grupo1">Grupo 3</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                    </tr>
                </table>
            </div>
    
  </div>
</body>

</html>