<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/telaUsuarios.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Tela de Controle de Alunos</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <span>Controle de Alunos</span>
            <button onclick="openModal()" id="new">Cadastrar</i></button>
        </div>

        <?php

        $sql = "SELECT * 
            FROM usuario
            order by nomeUsuario";

        $dadosUsuario = $conn->query($sql);

        if ($dadosUsuario->num_rows >= 0) {
        ?>
            <div class="divTable">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Peso</th>
                            <th>Tipo de Ficha</th>
                            <th class="acao">Editar</th>
                            <th class="acao">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
            </div>
            <?php
            while ($exibir = $dadosUsuario->fetch_assoc()) {
                //teste
            ?>
                <tr>
                    <td><?php echo $exibir["idUsuario"] ?></td>
                    <td><?php echo $exibir["nomeUsuario"] ?></td>
                    <td><?php echo $exibir["idadeUsuario"] ?></td>
                    <td><?php echo $exibir["pesoUsuario"] ?></td>
                    <td><?php echo $exibir["tipoFicha"] ?></td>
                    <td class="acao"><a href="editarUsuario.php?idUsuario=<?php echo $exibir['idUsuario'] ?>"><button><i class='bx bx-edit'></i></button></a></td>
                    <td class="acao"><button onclick="confirmarExclusao(
                    '<?php echo $exibir['idUsuario'] ?>', 
                    '<?php echo $exibir['nomeUsuario'] ?>')"><i class='bx bx-trash'></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>

            </table>

        <?php

        }

        ?>

        <div class="modal-container">
            <div class="modal">
                <form action="cadControle.php" method="post">
                    <label for="m-nome">Nome</label>
                    <input id="m-nome" type="text" name="m-nome" required />

                    <label for="m-email">Email</label>
                    <input type="text" id="m-email" name="m-email" required />

                    <label for="m-senha">Senha</label>
                    <input type="password" id="m-senha" name="m-senha" required />

                    <label for="m-idade">Idade</label>
                    <input type="number" id="m-idade" name="m-idade" required />

                    <label for="m-peso">Peso</label>
                    <input type="number" id="m-peso" name="m-peso" required />

                    <label for="m-ficha">Tipo de Ficha</label>
                    <input type="text" id="m-ficha" name="m-ficha" required />

                    <button id="btnSalvar">Salvar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/telaUsuarios.js"></script>
</body>

</html>