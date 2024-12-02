<?php
    session_start();
    // Verifica se o usuário está logado e se tem permissão para postar
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 1 || !isset($_COOKIE['user_senha'])) {
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
        $nova_senha = $_POST['nova_senha'];
        //Atualiza o nome
        $sql = 'UPDATE usuario SET senha = "'.$nova_senha.'" WHERE id = '.$id.'';
        mysqli_query($conexao, $sql);
        setcookie('user_senha', $nova_senha, time() + (86400), '/');

        mysqli_close($conexao);
        header('Location: user_dados.php');
    }else {
        header('Location: index.php');
    }



?>