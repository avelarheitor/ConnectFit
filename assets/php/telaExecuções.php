<?php
require_once("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/telaExecuções.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Página Inicial</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../images/logo.png" alt="Usuário">
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
            <h2>Vídeos de Execuções</h2>

            <div class="videos-container">
                <!-- links dos vídeos do YouTube abaixo -->
                <div class="video">
                    <iframe width="1583" height="604" src="https://www.youtube.com/embed/VIKn2Pf1Wmg"
                        title="AGACHAMENTO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="1583" height="604" src="https://www.youtube.com/embed/g-AIMWjnuiU"
                        title="ABDOMINAL SUPRA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="1583" height="604" src="https://www.youtube.com/embed/mk71cw4uNJ4"
                        title="ELEVAÇÃO LATERAL COM HALTERES" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/mk3nIJ2nYE4"
                        title="TRÍCEPS NA BARRA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/23M1mnnhsek"
                        title="SUPINO RETO NA BARRA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/rw54MmASnAY" title="LEG 45º"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/0SKxwk0gBHU"
                        title="CADEIRA ABDUTORA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/4p7J5qmVgSU"
                        title="CADEIRA EXTENSORA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/b5RkrNs_EGM"
                        title="Puxada frente supinada" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/-QGC1cL6ETE"
                        title="Tríceps pulley corda" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/e53vSzibkO0"
                        title="Remada curvada pronada barra" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/qbVOIdt1SU4"
                        title="Elevação frontal anilha rotação 90" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/Od9914tc8sg"
                        title="Crucifixo polia baixa" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/uh0oZorifmM"
                        title="Desenvolvimento máquina" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/8ZJ2EfAr1Eo"
                        title="Pulley tríceps barra v" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/7lc8Ow4vIwA"
                        title="Remada baixa fechada triângulo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/wUT3hmnzq3c"
                        title="Crucifixo invertido máquina" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/AX1-0IxL11g"
                        title="Remada polia alta corda" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/m6IIorkQe8E"
                        title="Levantamento Terra Sumô" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe width="363" height="645" src="https://www.youtube.com/embed/MC5hF4JDLm4"
                        title="Abdominal infra solo/banco" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/telaTreinos.js"></script>

</body>

</html>