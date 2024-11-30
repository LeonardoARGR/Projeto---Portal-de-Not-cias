<?php
    session_start(['login']);
    if(($_COOKIE['user_email']) == null && ($_COOKIE['user_senha']) == null) { //não permite entrar sem login
        header('Location: entrar.php');
    }elseif(($_SESSION['logado']) == '0') { //não permite entrar pelo navegador
        header('Location: entrar.php');
    }else{
        header('Location: user_dados.php');
    }
?>