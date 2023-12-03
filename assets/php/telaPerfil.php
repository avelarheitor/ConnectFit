<?php
    include_once("conexao.php");
    session_start();

    if (isset($_POST["nomeUsuario"])){
        $idUsuario = $_GET["idUsuario"];
        $nomeUsuario = $_POST["nomeUsuario"];
        $emailUsuario = $_POST["emailUsuario"];
        $telUsuario = $_POST["telUsuario"];
        $enderecoUsuario = $_POST["enderecoUsuario"];
        $idadeUsuario = $_POST["idadeUsuario"];
        $tipoFicha = $_POST["tipoFicha"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/telaPerfil.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Tela Perfil</title>
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
                        <a href="#">
                            <i class='bx bx-phone icon' ></i>
                            <span class="text nav-text">Fale Conosco</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottm-content">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Sair</span>
                    </a>
                </li>

            </div>
        </div>
    </nav>

    <section class="home">
        <header>
            <h1>Meu Perfil</h1>
          </header>
        
          <div class="profile-container">
            <div class="profile-picture">
                <img src="../images/profilePic.jpeg" alt="Minha Foto">
            </div>

            <div class="profile-control">
                <label for="nome">Nome:</label>
                <input disabled type="text" id="nome" value="<?php echo $usuario["nomeUsuario"] ?>">
            </div>
            
            <div class="profile-control">
                <label for="email">Email:</label>
                <input disabled type="text" id="email" value="<?php echo $usuario["emailUsuario"] ?>">
            </div>

            <div class="profile-control">
                <label for="tipoFicha">Telefone:</label>
                <input disabled type="text" id="tipoFicha" value="<?php echo $usuario["telUsuario"] ?>">
            </div>
            
            <div class="profile-control">
                <label for="idade">Idade:</label>
                <input disabled type="text" id="idade" value="<?php echo $usuario["idadeUsuario"] ?>">
            </div>
        
            <div class="profile-control">
                <label for="localizacao">Localização:</label>
                <input disabled type="text" id="localizacao" value="<?php echo $usuario["enderecoUsuario"] ?>">
            </div>
            
            <div class="profile-control">
                <label for="tipoFicha">Tipo de Ficha:</label>
                <input disabled type="text" id="tipoFicha" value="<?php echo $usuario["tipoFicha"] ?>">
            </div>
      
          </div>    
    </section>

    <script src="../js/paginaInicialUsuarios.js"></script>

</body>
</html>