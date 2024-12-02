<?php
// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Configurações do banco de dados
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $base = 'portal_bd';
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $id_noticia = $_POST['id'];
    $acao = $_POST['acao'];

    // Define o novo status com base na ação
    if ($acao === 'aprovar') {
        $status = 'Aprovada';
    } elseif ($acao === 'rejeitar') {
        $status = 'Rejeitada';
    } else {
        die('Ação inválida.');
    }

    // Atualiza o status da notícia no banco
    $sql = "UPDATE noticia SET status = '".$status."' WHERE id = ".$id_noticia;
    mysqli_query($conexao, $sql);

    header('Location: user_pendentes.php');
    mysqli_close($conexao);
} else {
    echo "Requisição inválida.";
}