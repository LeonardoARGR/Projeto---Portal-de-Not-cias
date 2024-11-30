<?php
    session_start(['login']);
    $_SESSION['logado'] = 0; //variável de session em 0, o que indica que o usuário não fez login

    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'portal_bd';
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    mysqli_query($conexao, 'insert into usuario(nome, email, senha, tipo) values("'.$nome.'","'.$email.'","'.$senha.'","leitor");');
    
    $sql = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";

    $resultadoQueryMySQL = mysqli_query($conexao, $sql);
    $usuario = mysqli_fetch_array($resultadoQueryMySQL);
    
    $id = $usuario['id'];
    $tipo = $usuario['tipo'];

    if(mysqli_num_rows($resultadoQueryMySQL) > 0) {
        // Definindo cookies com 1 dia de validade
        $_SESSION['logado'] = 1;
        setcookie('user_email', $email, time() + (86400), '/'); // 86400 segundos = 1 dia
        setcookie('user_senha', $senha, time() + (86400), '/');
        setcookie('user_id', $id, time() + (86400), '/');
        setcookie('user_tipo', $tipo, time() + (86400), '/');

        header('Location: user_dados.php');
        exit();
    }else {
        echo "Acesso negado";
    }

    mysqli_close($conexao);

?>