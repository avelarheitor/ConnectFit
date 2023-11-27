<?php
include_once("conexao.php");

if (isset($_POST["nomeUsuario"])) {
  $idUsuario = $_GET["idUsuario"];
  $ombroMed = $_POST["ombroMed"];
  $peitoMed = $_POST["peitoMed"];
  $bicepsEsqMed = $_POST["bicepsEsqMed"];
  $bicepsDirMed = $_POST["bicepsDirMed"];
  $antebracoEsqMed = $_POST["antebracoEsqMed"];
  $antebracoDirMed = $_POST["antebracoDirMed"];
  $abdomenMed = $_POST["abdomenMed"];
  $quadrilMed = $_POST["quadrlMed"];
  $coxaEsqMed = $_POST["coxaEsqMed"];
  $coxaDirMed = $_POST["coxaDirMed"];
  $pantuEsqMed = $_POST["pantuEsqMed"];
  $pantuDirMed = $_POST["pantuDirMed"];
  $cinturaMed = $_POST["cinturaMed"];

  $sql = "UPDATE usuario

              SET ombroMed = '$ombroMed',
              peitoMed = '$peitoMed',
              bicepsEsqMed = '$bicepsEsqMed',
              bicepsDirMed = '$bicepsDirMed',
              antebracoEsqMed = '$antebracoEsqMed',
              antebracoDirMed = '$antebracoDirMed',
              abdomenMed = '$abdomenMed',
              quadrilMed = '$quadrilMed',
              coxaEsqMed = '$coxaEsqMed',
              coxaDirMed = '$coxaDirMed',
              pantuEsqMed = '$pantuEsqMed',
              pantuDirMed = '$pantuDirMed',
              cinturaMed = '$cinturaMed'

              WHERE idUsuario = $idUsuario";

              

  if ($conn->query($sql) === TRUE) {
?>
    <script>
      alert("Alteração feita com sucesso!");
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
            <label for="ombroMed" class="form-label">Ombro (cm)</label>
            <input type="text" class="form-element" id="ombroMed" name="ombroMed" value="<?php echo $usuario["ombroMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="peitoMed" class="form-label">Peito (cm)</label>
            <input type="text" class="form-element" id="peitoMed" name="peitoMed" value="<?php echo $usuario["peitoMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="bicepsEsqMed" class="form-label">Bíceps Esquerdo (cm)</label>
            <input type="text" class="form-element" id="bicepsEsqMed" name="bicepsEsqMed" value="<?php echo $usuario["bicepsEsqMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="bicepsDirMed" class="form-label">Bíceps Direito (cm)</label>
            <input type="text" class="form-element" id="bicepsDirMed" name="bicepsDirMed" value="<?php echo $usuario["bicepsDirMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="antebracoEsqMed" class="form-label">Antebraço Esquerdo</label>
            <input type="text" class="form-element" id="antebracoEsqMed" name="antebracoEsqMed" value="<?php echo $usuario["antebracoEsqMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="antebracoDirMed" class="form-label">Antebraço Direito</label>
            <input type="text" class="form-element" id="antebracoDirMed" name="antebracoDirMed" value="<?php echo $usuario["antebracoDirMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="abdomenMed" class="form-label">Abdomen (cm)</label>
            <input type="text" class="form-element" id="abdomenMed" name="abdomenMed" value="<?php echo $usuario["abdomenMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="quadrilMed" class="form-label">Quadril (cm)</label>
            <input type="text" class="form-element" id="quadrilMed" name="quadrilMed" value="<?php echo $usuario["quadrilMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="coxaEsqMed" class="form-label">Coxa Esquerda (cm)</label>
            <input type="text" class="form-element" id="coxaEsqMed" name="coxaEsqMed" value="<?php echo $usuario["coxaEsqMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="coxaDirMed" class="form-label">Coxa Direita (cm)</label>
            <input type="text" class="form-element" id="coxaDirMed" name="coxaDirMed" value="<?php echo $usuario["coxaDirMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="pantuEsqMed" class="form-label">Panturrilha Esquerda (cm)</label>
            <input type="text" class="form-element" id="pantuEsqMed" name="pantuEsqMed" value="<?php echo $usuario["pantuEsqMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="pantuDirMed" class="form-label">Panturrilha Direita (cm)</label>
            <input type="text" class="form-element" id="pantuDirMed" name="pantuDirMed" value="<?php echo $usuario["pantuDirMed"] ?>" required>
          </div>

          <div class="form-item">
            <label for="cinturaMed" class="form-label">Cintura (cm)</label>
            <input type="text" class="form-element" id="cinturaMed" name="cinturaMed" value="<?php echo $usuario["cinturaMed"] ?>" required>
          </div>


        </div>
    </div>

    <div class="flex">
      <button type="submit"  value="Editar">Salvar</button>
    </div>
    </form>
  </div>
</body>

</html>