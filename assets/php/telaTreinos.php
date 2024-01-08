<?php
require_once("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/telaTreinos.css">
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
            <div class="workout-table">
                <table border="1">
                    <tr>
                        <th class="cabecalho">Dias</th>
                        <th class="cabecalho">Músculos</th>
                        <th class="cabecalho" colspan="8">Exercícios</th>
                    </tr>
                    <!-- Abre  linhas para 1 Dia -->
                    <tr>
                        <td class="grupo1" rowspan="3">Segunda</td>
                        <?php

                        $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario and dia='2'";
                        //echo $sql; die();
                        

                        $consulta = $conn->query($sql);
                        while ($exibir = $consulta->fetch_assoc()) {
                            ?>

                            <td class="grupo1">
                                <?php echo $exibir["grupo"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex1"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex2"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex3"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex4"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex5"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex6"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex7"]; ?>
                            </td>
                        </tr>
                        <?php
                        } //fim do while
                        ?>

                    <!-- Abre  linhas para 2 Dia -->
                    <tr>
                        <td class="grupo2" rowspan="3">Terça</td>
                        <?php

                        $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario and dia='3'";
                        //echo $sql; die();
                        

                        $consulta = $conn->query($sql);
                        while ($exibir = $consulta->fetch_assoc()) {
                            ?>

                            <td class="grupo2">
                                <?php echo $exibir["grupo"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex1"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex2"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex3"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex4"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex5"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex6"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex7"]; ?>
                            </td>
                        </tr>
                        <?php
                        } //fim do while
                        ?>

                    <!-- Abre  linhas para 3 Dia -->
                    <tr>
                        <td class="grupo1" rowspan="3">Quarta</td>
                        <?php

                        $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario and dia='4'";
                        //echo $sql; die();
                        

                        $consulta = $conn->query($sql);
                        while ($exibir = $consulta->fetch_assoc()) {
                            ?>

                            <td class="grupo1">
                                <?php echo $exibir["grupo"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex1"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex2"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex3"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex4"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex5"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex6"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex7"]; ?>
                            </td>
                        </tr>
                        <?php
                        } //fim do while
                        ?>

                    <!-- Abre  linhas para 4 Dia -->
                    <tr>
                        <td class="grupo2" rowspan="3">Quinta</td>
                        <?php

                        $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario and dia='5'";
                        //echo $sql; die();
                        

                        $consulta = $conn->query($sql);
                        while ($exibir = $consulta->fetch_assoc()) {
                            ?>

                            <td class="grupo2">
                                <?php echo $exibir["grupo"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex1"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex2"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex3"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex4"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex5"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex6"]; ?>
                            </td>
                            <td class="grupo2">
                                <?php echo $exibir["ex7"]; ?>
                            </td>
                        </tr>
                        <?php
                        } //fim do while
                        ?>

                    <!-- Abre  linhas para 5 Dia -->
                    <tr>
                        <td class="grupo1" rowspan="3">Sexta</td>
                        <?php

                        $sql = "SELECT * FROM treino WHERE idUsuario = $idUsuario and dia='6'";
                        //echo $sql; die();
                        

                        $consulta = $conn->query($sql);
                        while ($exibir = $consulta->fetch_assoc()) {
                            ?>

                            <td class="grupo1">
                                <?php echo $exibir["grupo"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex1"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex2"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex3"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex4"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex5"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex6"]; ?>
                            </td>
                            <td class="grupo1">
                                <?php echo $exibir["ex7"]; ?>
                            </td>
                        </tr>
                        <?php
                        } //fim do while
                        ?>
                </table>
            </div>
        </div>
    </section>

    <script src="../js/telaTreinos.js"></script>

</body>

</html>