<?php
// Inicia a sessão
session_start();

// Remove todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Impede o armazenamento em cache para evitar o uso da seta de "voltar"
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

// Redireciona o usuário para a página inicial ou de login
header("Location: index.php");
exit();
?>
