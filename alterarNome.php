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
        $novo_nome = $_POST['novo_nome'];
        //Atualiza o nome
        $sql = 'UPDATE usuario SET nome = "'.$novo_nome.'" WHERE id = '.$id.'';
        mysqli_query($conexao, $sql);
        setcookie('user_nome', $novo_nome, time() + (86400), '/');

        mysqli_close($conexao);
        header(header: 'Location: user_dados.php');
    }else {
        header('Location: index.php');
    }
?>