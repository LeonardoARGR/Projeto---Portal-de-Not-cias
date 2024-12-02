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
                <a href="user_dados.php" class="btn-voltar">Voltar</a>
            </div>
        </div>
        <div class="container-fluid main-container">
            <form action="postarNoticia.php" method="post" enctype="multipart/form-data" class="escrever-form">
                
                <input class="titulo-form" placeholder="Título" type="text" name="titulo" required>
                <textarea class="conteudo-form" placeholder="Escreva aqui..." name="conteudo"></textarea required>

                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="file" name="imagem" id="imagem" accept="image/*">
                    </div>
                    <div class="col-6">
                        <input class="btn btn-outline-secondary btn-form" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

