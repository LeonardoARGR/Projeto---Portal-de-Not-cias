<?php
// Inicia a sessão
session_start();

// Percorre todos os cookies e os remove
foreach ($_COOKIE as $cookie_name => $cookie_value) {
    setcookie($cookie_name, '', time() - 3600, '/');
}

// Destrói todas as variáveis de sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona para a página de login ou outra página
header('Location: index.php');
exit();
?>