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
            
        
    </body>
</html>

<?php
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'portal_bd';
    $conexao = mysqli_connect($host, $user, $pass, $base);

    if(isset($_GET['id'])) {
        $resultadoQueryMySQL = mysqli_query($conexao, "select titulo, conteudo, id_imagem, id_autor from noticia");
        $escrever = mysqli_fetch_array($resultadoQueryMySQL);
        $resultadoQueryMySQL = mysqli_query($conexao, "select nome from usuario where id = '".$escrever["id_autor"]."'");
        $autor = mysqli_fetch_array($resultadoQueryMySQL);



        echo '<div class="titulo-noticia">'.htmlspecialchars($escrever['titulo']).'</div>';
        echo '<div><img src="src/placeholder.png" class="capa-noticia"></div>';
        echo '<div class="autor-noticia">Escrito por '.htmlspecialchars($autor['nome']).'</div>';
        echo '<div class="conteudo-noticia">'.nl2br(htmlspecialchars_decode($escrever["conteudo"])).'</div>';
    }


    

    echo '</div>';

    mysqli_close($conexao);

?>