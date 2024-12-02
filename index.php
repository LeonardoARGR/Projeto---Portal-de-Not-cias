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
                <div class="col-4">
                </div>
                <div class="col-4 text-center">
                    <div class="titulo-site">Mundo em Foco</div>
                </div>
                <div class="col-4 text-end">
                    <a href="check_user.php"><img class="icone-user" src="src/user.png"></a>
                </div>
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

    $resultadoQueryMySQL = mysqli_query($conexao, "select id, titulo, id_imagem, CONCAT(SUBSTRING(conteudo, 1, 300), '...') AS conteudo_resumido, status from noticia");

    while($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
        if($escrever['status'] == 'Aprovada') {
            echo '<div class="icone-noticia">';
                echo '<div class="row w-100">';
                    if($escrever['id_imagem'] == 0){
                        echo '<div class="col-12">';
                    }else {
                        $imgSql = mysqli_query($conexao, 'SELECT caminho FROM imagem WHERE id = '.$escrever['id_imagem'].'');
                        $caminho = mysqli_fetch_array($imgSql);
                        echo '<div class="col-4 d-flex align-items-center justify-content-center">';
                            echo '<img class="img-noticia" src="'.$caminho['caminho'].'">';
                        echo '</div>';
                        echo '<div class="col-8">';
                    }
                        echo '<h3>'.$escrever['titulo'].'</h3>';
                        echo '<p>'.$escrever['conteudo_resumido'].'</p>';
                        echo '<a href="noticia.php?id='.$escrever['id'].'"><h4>Ler matéria</h4></a>';
                    echo '</div>';
                    
                echo '</div>';
            echo '</div>';
        }
    }

    echo '</div>';

    mysqli_close($conexao);

?>