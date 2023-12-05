<?php
    require_once("conexao.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fichaUsuario.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Página Inicial</title>
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
                    <span class="profession"><?php echo $_SESSION['nome'] ?></span>
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
                        <a href="../html/treinos.html">
                            <i class='bx bx-dumbbell icon'></i>
                            <span class="text nav-text">Treinos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../html/execucoes.html">
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
      <form action="editarUsuario.php?idUsuario=<?php echo $idUsuario?>" method="POST">
        <div class="user-details">
          <div class="form-item">
            <label for="nomeUsuario" class="form-label">Nome</label>
            <input disabled type="text" class="form-element" id="nomeUsuario" name="nomeUsuario" value="<?php echo $usuario["nomeUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="email" class="form-label">Email</label>
            <input disabled type="email" class="form-element" id="email" name="emailUsuario" value="<?php echo $usuario["emailUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="celular" class="form-label">Telefone</label>
            <input disabled type="tel" class="form-element" id="celular" name="telUsuario" value="<?php echo $usuario["telUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="endereco" class="form-label">Endereço</label>
            <input disabled type="text" class="form-element" id="endereco" name="enderecoUsuario" value="<?php echo $usuario["enderecoUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="idade" class="form-label">Idade</label>
            <input disabled type="number" class="form-element" id="idade" name="idadeUsuario" value="<?php echo $usuario["idadeUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="ficha" class="form-label">Tipo de Ficha</label>
            <input disabled type="text" class="form-element" id="ficha" name="tipoFicha" value="<?php echo $usuario["tipoFicha"] ?>" required>
          </div>

          <div class="form-item">
            <label for="peso" class="form-label">Peso (Kg)</label>
            <input disabled type="text" class="form-element" id="peso" name="pesoUsuario" value="<?php echo $usuario["pesoUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="altura" class="form-label">Altura (cm)</label>
            <input disabled type="text" class="form-element" id="altura" name="alturaUsuario" value="<?php echo $usuario["alturaUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="imc" class="form-label">IMC</label>
            <input disabled type="text" class="form-element" id="imc" name="imcUsuario" value="<?php echo $usuario["imcUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="perGordura" class="form-label">Percentual de Gordura (%)</label>
            <input disabled type="text" class="form-element" id="perGordura" name="perGUsuario" value="<?php echo $usuario["perGUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="masGordura" class="form-label">Massa de Gordura (Kg)</label>
            <input disabled type="text" class="form-element" id="masGordura" name="masGUsuario" value="<?php echo $usuario["masGUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="massa" class="form-label">Massa Magra (Kg)</label>
            <input disabled type="text" class="form-element" id="massa" name="massaUsuario" value="<?php echo $usuario["massaUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="massaLivre" class="form-label">Massa Livre de Gordura</label>
            <input disabled type="text" class="form-element" id="massaLivre" name="massaLivreUsuario" value="<?php echo $usuario["massaLivreUsuario"] ?>" required>
          </div>

          <div class="form-item">
            <label for="idadeMet" class="form-label">Idade Metabólica (anos)</label>
            <input disabled type="number" class="form-element" id="idadeMet" name="idadeMetUsuario" value="<?php echo $usuario["idadeMetUsuario"] ?>" required>
          </div>

        </div>
    </div>

    </form>
    <div class="flex">
    <a href="fichaMedUsuario.php?idUsuario=<?php echo $idUsuario ?>"><button>Tabela de Medidas</button></a>
    </div>
  </div>
    </section>

    <script src="../js/paginaInicialUsuarios.js"></script>

</body>

</html>