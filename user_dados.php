<?php
    session_start(['login']);
    if(($_COOKIE['user_email']) == null && ($_COOKIE['user_senha']) == null) { //não permite entrar sem login
        header('Location: entrar.php');
        exit();
    }elseif(($_SESSION['logado']) == '0') { //não permite entrar pelo navegador
        header('Location: entrar.php');
        exit();
    }
?>

<html>
    <head>
        <title>Portal</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row row-container">
                <div class="col-3 user-menu">
                    <?php
                        if(!isset($_COOKIE['user_imagem'])) {
                            echo '<img class="img-fluid rounded" src="src/user.png">';
                        }else {
                            echo '<img class="img-fluid rounded" src="'.$_COOKIE['user_imagem'].'">';
                        }
                    ?>
                    <a href="user_dados.php">Meus Dados</a>
                    <?php
                        if(($_COOKIE['user_tipo']) == "autor") {
                            echo '<a href="user_materias.php">Minhas notícias</a>';
                            echo '<a href="user_escrever.php">Escrever notícia</a>';
                        }elseif(($_COOKIE['user_tipo']) == "revisor") {
                            echo '<a href="user_materias.php">Minhas notícias</a>';
                            echo '<a href="user_escrever.php">Escrever notícia</a>';
                            echo '<a href="user_pendentes.php">Notícias pendentes</a>';
                        }
                    ?>

                    <a href="index.php">Voltar ao site</a>
                </div>
                <div class="col-9 user-content">
                    <div class="title">Meus Dados</div>
                    <form action="alterarNome.php" method="post" class="dados-div">
                        <div class="mb-3 input-div">
                            <?php
                                echo '<input type="text" name="novo_nome" class="form-control" placeholder="'.$_COOKIE['user_nome'].'" required>';
                            ?>
                        </div>
                        <input type="submit" class="btn btn-outline-secondary btn-alterar" value="Alterar nome" onclick="return confirm('Você tem certeza?');">
                    </form>
                    <form action="alterarEmail.php" method="post" class="dados-div">
                        <div class="mb-3 input-div">
                            <?php
                                echo '<input type="email" name="novo_email" class="form-control" placeholder="'.$_COOKIE['user_email'].'" required>';
                            ?>
                        </div>
                        <input type="submit" class="btn btn-outline-secondary btn-alterar" value="Alterar email" onclick="return confirm('Você tem certeza?');">
                    </form>
                    <form action="alterarSenha.php" method="post" class="dados-div">
                        <div class="mb-3 input-div">
                            <?php
                                echo '<input type="password" name="nova_senha" class="form-control" placeholder="'.$_COOKIE['user_senha'].'" required>';
                            ?>
                        </div>
                        <input type="submit" class="btn btn-outline-secondary btn-alterar" value="Alterar senha" onclick="return confirm('Você tem certeza?');">
                    </form>
                    <form action="alterarFoto.php" enctype="multipart/form-data" method="post" class="dados-div">
                        <div class="mb-3 input-div">
                            <input type="file" name="nova_imagem" class="form-control" id="imagem" accept=".png, .jpg, .jpeg">
                        </div>
                        <input type="submit" class="btn btn-outline-secondary btn-alterar" value="Alterar imagem" onclick="return confirm('Você tem certeza?');">
                    </form>
                    <?php
                        $tipo = $_COOKIE['user_tipo'];
                        if($tipo != 'revisor') {
                            echo '<form action="alterarTipo.php" method="post" class="dados-div">';
                                echo '<div class="mb-3 input-div">';
                                    echo '<input type="text" name="codigo" class="form-control" placeholder="Inserir código de escritor ou revisor">';
                                echo '</div>';
                                echo '<input type="submit" class="btn btn-outline-secondary btn-alterar" value="Enviar código">';
                            echo '</form>';
                        }
                    ?>
                    <br>
                    <form action="sair.php" method="post" class="dados-div">
                        <input type="submit" class="btn btn-outline-secondary btn-danger btn-alterar" value="Sair da conta" onclick="return confirm('Você tem certeza?');">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

