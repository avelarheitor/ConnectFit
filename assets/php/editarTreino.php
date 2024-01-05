<?php
include_once("conexao.php");              
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/telaUsuarios.css">
    <title>Editar Treino</title>
</head>
<body>
    <form action="insertTreino.php" method="POST">
        <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $_GET['idUsuario'] ?>" required>
        <input type="hidden" id="dia" name="dia" value="<?php echo $_GET['dia'] ?>" required>
        <label for="grupo">Grupo Muscular</label>
        <input type="text" id="grupo" name="grupo" value="" required>
        <label for="ex1">Exercício 1</label>
        <input type="text" id="ex1" name="ex1" value="" required>
        <label for="ex2">Exercício 2</label>
        <input type="text" id="ex2" name="ex2" value="" required>
        <label for="ex3">Exercício 3</label>
        <input type="text" id="ex3" name="ex3" value="" required>
        <label for="ex4">Exercício 4</label>
        <input type="text" id="ex4" name="ex4" value="" required>
        <label for="ex5">Exercício 5</label>
        <input type="text" id="ex5" name="ex5" value="" required>
        <label for="ex6">Exercício 6</label>
        <input type="text" id="ex6" name="ex6" value="" required>
        <label for="ex7">Exercício 7</label>
        <input type="text" id="ex7" name="ex7" value="" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>