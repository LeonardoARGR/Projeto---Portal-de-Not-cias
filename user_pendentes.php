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
                    <img class="img-fluid rounded" src="src/user.jpg">
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
                <div class="col-9 user-content"></div>
                </div>
            </div>
        </div>
    </body>
</html>

