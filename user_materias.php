

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
                <div class="col-9 user-content">
                    <div class="title">Minhas notícias</div>
    </body>
</html>

<?php
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'portal_bd';
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $resultadoQueryMySQL = mysqli_query($conexao, "select id, titulo, id_imagem, status, CONCAT(SUBSTRING(conteudo, 1, 300), '...') AS conteudo_resumido from noticia WHERE id_autor = '".$_COOKIE['user_id']."'");

    while($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
        echo '<div class="icone-noticia">';
            echo '<div class="row">';
                if($escrever['id_imagem'] == NULL){
                    echo '<div class="col-4">';
                        echo '<img class="img-noticia" src="src/placeholder.png">';
                        echo '<div class="status">'.$escrever['status'].'</div>';
                    echo '</div>';
                    
                }else {
                    echo '<div class="col-4">';
                        echo '<img class="img-noticia" src="'.$escrever['id_imagem'].'">';
                        echo '<div class="status">'.$escrever['status'].'</div>';
                    echo '</div>';
                }
                echo '<div class="col-8">';
                        echo '<h3>'.$escrever['titulo'].'</h3>';
                        echo '<p>'.$escrever['conteudo_resumido'].'</p>';
                        echo '<a href="noticia_autor.php?id='.$escrever['id'].'"><h4>Ler matéria</h4></a>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';

    mysqli_close($conexao);

?>
