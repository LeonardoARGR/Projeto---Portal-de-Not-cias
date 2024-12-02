<?php
    session_start();
    // Verifica se o usuário está logado e se tem permissão para excluir
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 1 || !isset($_COOKIE['user_tipo']) || $_COOKIE['user_tipo'] != 'autor' && $_COOKIE['user_tipo'] != 'revisor') {
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

        $id = (int) $_POST['id']; // Garante que é um número inteiro

        // Exclui a notícia da tabela
        $sql = "DELETE FROM noticia WHERE id = $id";
        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
        header('Location: user_materias.php');
        
    }else {
        header('Location: index.php');
    }


?>