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
    </section>

    <script src="../js/telaTreinos.js"></script>

</body>

</html>