<?php
    session_start();
    // Verifica se o usuário está logado e se tem permissão para postar
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 1 || !isset($_COOKIE['user_nome'])) {
        header('Location: index.php');
        exit();
    }
    //Verifica se os dados do formuário foram enviados
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $base = 'portal_bd';
        $conexao = mysqli_connect($host, $user, $pass, $base);

        $id = $_COOKIE['user_id'];
        $codigo = $_POST['codigo'];
        //Atualiza o tipo
        if($codigo == "AUTH2024KEY!@#456") {
            $sql = 'UPDATE usuario SET tipo = "autor" WHERE id = '.$id.'';
            mysqli_query($conexao, $sql);
            setcookie('user_tipo', "autor", time() + (86400), '/');
        }elseif($codigo == "REVIEW2024PASS$%^789") {
            $sql = 'UPDATE usuario SET tipo = "revisor" WHERE id = '.$id.'';
            mysqli_query($conexao, $sql);
            setcookie('user_tipo', "revisor", time() + (86400), '/');
        }
        mysqli_close($conexao);
        header(header: 'Location: user_dados.php');
    }else {
        header('Location: index.php');
    }
?>