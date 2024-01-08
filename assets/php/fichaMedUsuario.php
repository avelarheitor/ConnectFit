<?php
require_once("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/fichaUsuario.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Ficha de Medidas</title>
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

  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="../images/logo.png" alt="">
        </span>

        <div class="text header-text">
          <span class="name">Connect Fit</span>
          <span class="profession">
            <?php echo $_SESSION['nome'] ?>
          </span>
        </div>
      </div>

      <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
      <div class="menu">
        <li class="search-box">
          <i class='bx bx-search icon'></i>
          <input type="text" placeholder="Procurar...">
        </li>
        <ul class="menu-links">
          <li class="nav-link">
            <a href="paginaInicialUsuario.php?idUsuario=<?php echo $_SESSION['id'] ?>">
              <i class='bx bx-home-alt-2 icon'></i>
              <span class="text nav-text">Início</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="telaPerfil.php?idUsuario=<?php echo $_SESSION['id'] ?>">
              <i class='bx bx-user icon'></i>
              <span class="text nav-text">Meu Perfil</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="fichaUsuario.php?idUsuario=<?php echo $_SESSION['id'] ?>">
              <i class='bx bx-receipt icon'></i>
              <span class="text nav-text">Minha Ficha</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="telaTreinos.php?idUsuario=<?php echo $_SESSION['id'] ?>">
              <i class='bx bx-dumbbell icon'></i>
              <span class="text nav-text">Treinos</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="telaExecuções.php?idUsuario=<?php echo $_SESSION['id'] ?>">
              <i class='bx bx-video icon'></i>
              <span class="text nav-text">Execuções</span>

            </a>
          </li>
          <li class="nav-link">
            <a href="https://wa.me/5531983453723?text=ola%21+estou+com+d%C3%BAvidas+">
              <i class='bx bx-phone icon'></i>
              <span class="text nav-text">Fale Conosco</span>
            </a>
          </li>

        </ul>
      </div>

      <div class="bottm-content">
        <li class="nav-link">
          <a href="../html/index.html">
            <i class='bx bx-log-out icon'></i>
            <span class="text nav-text">Sair</span>
          </a>
        </li>

      </div>
    </div>
  </nav>

  <section class="home">
    <div class="container">
      <h1>Editar informações</h1>
      <div class="edit-card">
        <form action="editarUsuario.php?idUsuario=<?php echo $idUsuario ?>" method="POST">
          <div class="user-details">
            <div class="form-item">
              <label for="ombroMed" class="form-label">Ombro (cm)</label>
              <input disabled type="text" class="form-element" id="ombroMed" name="ombroMed"
                value="<?php echo $usuario["ombroMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="peitoMed" class="form-label">Peito (cm)</label>
              <input disabled type="text" class="form-element" id="peitoMed" name="peitoMed"
                value="<?php echo $usuario["peitoMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="bicepsEsqMed" class="form-label">Bíceps Esquerdo (cm)</label>
              <input disabled type="text" class="form-element" id="bicepsEsqMed" name="bicepsEsqMed"
                value="<?php echo $usuario["bicepsEsqMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="bicepsDirMed" class="form-label">Bíceps Direito (cm)</label>
              <input disabled type="text" class="form-element" id="bicepsDirMed" name="bicepsDirMed"
                value="<?php echo $usuario["bicepsDirMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="antebracoEsqMed" class="form-label">Antebraço Esquerdo (cm)</label>
              <input disabled type="text" class="form-element" id="antebracoEsqMed" name="antebracoEsqMed"
                value="<?php echo $usuario["antebracoEsqMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="antebracoDirMed" class="form-label">Antebraço Direito (cm)</label>
              <input disabled type="text" class="form-element" id="antebracoDirMed" name="antebracoDirMed"
                value="<?php echo $usuario["antebracoDirMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="abdomenMed" class="form-label">Abdomen (cm)</label>
              <input disabled type="text" class="form-element" id="abdomenMed" name="abdomenMed"
                value="<?php echo $usuario["abdomenMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="quadrilMed" class="form-label">Quadril (cm)</label>
              <input disabled type="text" class="form-element" id="quadrilMed" name="quadrilMed"
                value="<?php echo $usuario["quadrilMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="coxaEsqMed" class="form-label">Coxa Esquerda (cm)</label>
              <input disabled type="text" class="form-element" id="coxaEsqMed" name="coxaEsqMed"
                value="<?php echo $usuario["coxaEsqMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="coxaDirMed" class="form-label">Coxa Direita (cm)</label>
              <input disabled type="text" class="form-element" id="coxaDirMed" name="coxaDirMed"
                value="<?php echo $usuario["coxaDirMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="pantuEsqMed" class="form-label">Panturrilha Esquerda (cm)</label>
              <input disabled type="text" class="form-element" id="pantuEsqMed" name="pantuEsqMed"
                value="<?php echo $usuario["pantuEsqMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="pantuDirMed" class="form-label">Panturrilha Direita (cm)</label>
              <input disabled type="text" class="form-element" id="pantuDirMed" name="pantuDirMed"
                value="<?php echo $usuario["pantuDirMed"] ?>" required>
            </div>

            <div class="form-item">
              <label for="cinturaMed" class="form-label">Cintura (cm)</label>
              <input disabled type="text" class="form-element" id="cinturaMed" name="cinturaMed"
                value="<?php echo $usuario["cinturaMed"] ?>" required>
            </div>

          </div>
      </div>

      </form>
      <div class="flex">
        <a href="fichaUsuario.php?idUsuario=<?php echo $idUsuario ?>"><button>Voltar</button></a>
      </div>
    </div>
  </section>

  <script src="../js/paginaInicialUsuarios.js"></script>

</body>

</html>