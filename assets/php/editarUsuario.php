<?php
include_once("conexao.php");

if (isset($_POST["nomeUsuario"])) {
  $idUsuario = $_GET["idUsuario"];
  $nomeUsuario = $_POST["nomeUsuario"];
  $emailUsuario = $_POST["emailUsuario"];
  $telUsuario = $_POST["telUsuario"];
  $enderecoUsuario = $_POST["enderecoUsuario"];
  $idadeUsuario = $_POST["idadeUsuario"];
  $tipoFicha = $_POST["tipoFicha"];
  $pesoUsuario = $_POST["pesoUsuario"];
  $alturaUsuario = $_POST["alturaUsuario"];
  $imcUsuario = $_POST["imcUsuario"];
  $perGUsuario = $_POST["perGUsuario"];
  $masGUsuario = $_POST["masGUsuario"];
  $massaUsuario = $_POST["massaUsuario"];
  $massaLivreUsuario = $_POST["massaLivreUsuario"];
  $idadeMetUsuario = $_POST["idadeMetUsuario"];

  $sql = "UPDATE usuario

              SET nomeUsuario = '$nomeUsuario',
              emailUsuario = '$emailUsuario',
              telUsuario = '$telUsuario',
              enderecoUsuario = '$enderecoUsuario',
              idadeUsuario = '$idadeUsuario',
              tipoFicha = '$tipoFicha',
              pesoUsuario = '$pesoUsuario',
              alturaUsuario = '$alturaUsuario',
              imcUsuario = '$imcUsuario',
              perGUsuario = '$perGUsuario',
              masGUsuario = '$masGUsuario',
              massaUsuario = '$massaUsuario',
              massaLivreUsuario = '$massaLivreUsuario',
              idadeMetUsuario = '$idadeMetUsuario'

              WHERE idUsuario = $idUsuario";

              

  if ($conn->query($sql) === TRUE) {
  ?>
    <script>
      window.location = "telaUsuarios.php";
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Erro ao alterar o registro...");
      window.history.back();
    </script>
<?php
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/editarUsuario.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Editar Usuário</title>
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
    <h1>Editar informações</h1>
    <div class="edit-card">
      <form action="editarUsuario.php?idUsuario=<?php echo $idUsuario?>" method="POST">
        <div class="user-details">
          <div class="form-item">
            <label for="nomeUsuario" class="form-label">Nome</label>
            <input type="text" class="form-element" id="nomeUsuario" name="nomeUsuario" value="<?php echo $usuario["nomeUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-element" id="email" name="emailUsuario" value="<?php echo $usuario["emailUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="celular" class="form-label">Telefone</label>
            <input type="tel" class="form-element" id="celular" name="telUsuario" value="<?php echo $usuario["telUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-element" id="endereco" name="enderecoUsuario" value="<?php echo $usuario["enderecoUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-element" id="idade" name="idadeUsuario" value="<?php echo $usuario["idadeUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="ficha" class="form-label">Tipo de Ficha</label>
            <input type="text" class="form-element" id="ficha" name="tipoFicha" value="<?php echo $usuario["tipoFicha"] ?>" required>
          </div>

          <div class="form-item">
            <label for="peso" class="form-label">Peso (Kg)</label>
            <input type="text" class="form-element" id="peso" name="pesoUsuario" value="<?php echo $usuario["pesoUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="altura" class="form-label">Altura (cm)</label>
            <input type="text" class="form-element" id="altura" name="alturaUsuario" value="<?php echo $usuario["alturaUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="imc" class="form-label">IMC</label>
            <input type="text" class="form-element" id="imc" name="imcUsuario" value="<?php echo $usuario["imcUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="perGordura" class="form-label">Percentual de Gordura (%)</label>
            <input type="text" class="form-element" id="perGordura" name="perGUsuario" value="<?php echo $usuario["perGUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="masGordura" class="form-label">Massa de Gordura (Kg)</label>
            <input type="text" class="form-element" id="masGordura" name="masGUsuario" value="<?php echo $usuario["masGUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="massa" class="form-label">Massa Magra (Kg)</label>
            <input type="text" class="form-element" id="massa" name="massaUsuario" value="<?php echo $usuario["massaUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="massaLivre" class="form-label">Massa Livre de Gordura</label>
            <input type="text" class="form-element" id="massaLivre" name="massaLivreUsuario" value="<?php echo $usuario["massaLivreUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="idadeMet" class="form-label">Idade Metabólica (anos)</label>
            <input type="number" class="form-element" id="idadeMet" name="idadeMetUsuario" value="<?php echo $usuario["idadeMetUsuario"] ?>" required>
          </div>


        </div>
    </div>

    

    <div class="flex">
      <button type="submit"  value="Editar">Salvar</button>
    </div>
    </form>
    <div class="flex">
    <a href="tabelaMedidas.php?idUsuario=<?php echo $idUsuario ?>"><button>Tabela de Medidas</button></a>
    </div>
  </div>
</body>

</html>