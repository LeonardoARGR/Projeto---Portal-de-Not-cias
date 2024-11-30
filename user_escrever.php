<html>
    <head>
        <title>Portal</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row menu-bar">
                <a href="user_materias.php">Voltar</a>
            </div>
        </div>
        <div class="container-fluid main-container">
            <form action="postarNoticia.php" method="post" class="escrever-form">
                
                <input class="titulo-form" placeholder="Título" type="text" name="nome" required>
                <input type="file" name="imagem" id="imagem" accept="image/*">
                <textarea class="conteudo-form" placeholder="Escreva aqui..." name="descricao"></textarea required>
                
                <input class="btn btn-outline-secondary btn-form" type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>

