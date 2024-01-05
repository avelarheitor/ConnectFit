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

    //verifica se o usuario possui possui ficha
    $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario";
    $consulta = $conn->query($sql);
    $treino = $consulta->fetch_assoc();
    $total = mysqli_num_rows($consulta); 
    if($total == 0){
        for($dia = 2; $dia<7;$dia++){
            for($i=1; $i<4; $i++){
                $sql = "INSERT INTO treino(idUsuario, dia, grupo)
                VALUES (".$idUsuario.", '$dia', 'Grupo ".$i."')";
                $conn->query($sql);
            }
        }
    }
  }
  ?>



  <div class="container">
    <div class="workout-table">
                <table border="1">
                    <tr>
                        <th class="cabecalho">Dias</th>
                        <th class="cabecalho">Músculos</th>
                        <th class="cabecalho" colspan="9">Exercícios</th>
                    </tr>
                    <!-- Abre  linhas para 1 Dia -->
                    <tr>
                        <td class="grupo1" rowspan="3">Segunda</td>
                    <?php 
                      $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario and dia='2'";
                      $consulta = $conn->query($sql);
                      while ($exibir = $consulta->fetch_assoc())
                      {
                    ?>
                        
                        <td class="grupo1"><?php echo $exibir["grupo"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex1"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex2"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex3"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex4"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex5"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex6"];?></td>
                        <td class="grupo1"><?php echo $exibir["ex7"];?></td>
                        <td class="grupo1"><button onclick = "openModal1(2, '<?php echo $exibir['grupo'] ?>',
                                                                            '<?php echo $exibir['ex1'] ?>',
                                                                            '<?php echo $exibir['ex2'] ?>',
                                                                            '<?php echo $exibir['ex3'] ?>',
                                                                            '<?php echo $exibir['ex4'] ?>',
                                                                            '<?php echo $exibir['ex5'] ?>',
                                                                            '<?php echo $exibir['ex6'] ?>',
                                                                            '<?php echo $exibir['ex7'] ?>'
                                                                             )" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
                    </tr>
                    <?php 
                      }//fim do while
                    ?>
                    <!-- tr>
                        <td class="grupo1" rowspan="3">Segunda</td>
                        <td class="grupo1">Grupo 1</td>
                        <td class="grupo1">Exercício 1</td>
                        <td class="grupo1">Exercício 2</td>
                        <td class="grupo1">Exercício 3</td>
                        <td class="grupo1">Exercício 4</td>
                        <td class="grupo1">Exercício 5</td>
                        <td class="grupo1">Exercício 6</td>
                        <td class="grupo1">Exercício 7</td>
                        <td class="grupo1"><button onclick = "openModal1(2)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(2)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(2)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
                    </tr -->
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
                        <td class="grupo2"><button onclick = "openModal1(3)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo2"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo2"><button onclick = "openModal1(3)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo2"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo2"><button onclick = "openModal1(3)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo2"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(4)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(4)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(4)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo2"><button onclick = "openModal1(5)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo2"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo2"><button onclick = "openModal1(5)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo2"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo2"><button onclick = "openModal1(5)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo2"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(6)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(6)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
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
                        <td class="grupo1"><button onclick = "openModal1(6)" type="button" class="btn btn-primary">Editar</button></td>
                        <td class="grupo1"><button type="button" class="btn btn-primary">Salvar</button></td>
                    </tr>
                </table>
            </div>
            <div class="modal-container">
                <div class="modal">
                <form action="insertTreino.php" method="post">
                    <input id="idUsuario" type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>" />
                    <label for="grupo">Grupo Muscular</label>
                    <input id="grupo" type="text" name="grupo" required />
            
                    <input type="hidden" id="_dia" name="_dia" />
                    <input type="hidden" id="grupoAnt" name="grupoAnt" />

                    <label for="ex1">Exercício 1</label>
                    <input type="text" id="ex1" name="ex1" required />

                    <label for="ex2">Exercício 2</label>
                    <input type="text" id="ex2" name="ex2" required />

                    <label for="ex3">Exercício 3</label>
                    <input type="text" id="ex3" name="ex3" required />

                    <label for="ex4">Exercício 4</label>
                    <input type="text" id="ex4" name="ex4" required />

                    <label for="ex5">Exercício 5</label>
                    <input type="text" id="ex5" name="ex5" required />

                    <label for="ex6">Exercício 6</label>
                    <input type="text" id="ex6" name="ex6" required />

                    <label for="ex7">Exercício 7</label>
                    <input type="text" id="ex7" name="ex7" required />

                    <button id="btnSalvar">Salvar</button>
                </form>
                </div>
            </div>
  </div>

    <script src="../js/insertTreino.js"></script>
</body>

</html>