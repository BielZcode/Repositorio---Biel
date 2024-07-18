<?php
session_start();

// Destruir todas as variáveis de sessão
session_unset();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login ou outra página após o logout
header('Location: carregando?redirect=botsphere'); // botsphere logout
exit;
?>
