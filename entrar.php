<html>
    <head>
        <title>Portal</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid login-container">
            <div class="row row-container">
                <div class="col-4 red-col">
                    <div class="title">Bem vindo!</div>
                    <div class="text">Não tem uma conta?&nbsp<a href="criar.php">Crie aqui!</a></div>
                </div>
                <div class="col-8 white-col">
                    <div class="title">Entrar na conta</div>
                    <div id="dados" class="container">
                        <form action="realizarLogin.php" method="post" class="form-div">
                            <div class="mb-3 input-div">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3 input-div">
                                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                            </div>
                            <input type="submit" class="btn btn-outline-secondary btn_login" value="Entrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>