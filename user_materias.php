<?php
    session_start(['login']);
    if(($_COOKIE['user_email']) == null && ($_COOKIE['user_senha']) == null) { //não permite entrar sem login
        header('Location: entrar.php');
        exit();
    }elseif(($_SESSION['logado']) == '0') { //não permite entrar pelo navegador
        header('Location: entrar.php');
        exit();
    }

    if($_COOKIE['user_tipo'] == 'leitor') {
        header('Location: user_dados.php');
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
        echo '<div class="container icone-noticia">';
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
                        echo '<div class="status">'.$escrever['status'].'</div>';
                        echo '<a href="noticia_autor.php?id='.$escrever['id'].'"><h4>Ler matéria</h4></a>';
                        echo '<form method="POST" action="deletarNoticia.php">';
                            echo '<input type="hidden" name="id" value="'.$escrever['id'].'">';
                            echo '<button type="submit" class="btn btn-danger" onclick="return confirm(\'Você tem certeza?\');">Deletar</button>';
                        echo '</form>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';

    mysqli_close($conexao);

?>
