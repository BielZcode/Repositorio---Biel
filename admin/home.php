<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <!-- Themes CSS -->
    <link rel="stylesheet" href="../assets/css/themes/theme-dark.css">
    <link rel="stylesheet" href="../assets/css/themes/stats-items.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.2/dist/sweetalert2.all.min.js"></script>

    <!-- JoinAds -->
    <script id="join-ads-load" data-post-id="123" type="text/javascript" src="https://script.joinads.me/ads_8851.js" defer></script>

    <title>BotSphere - Home</title>
</head>
<body>
    <header>
        <!-- menu-horizontal -->
        <div class="navbar" id="navbar">
            <a href="home">Home</a>
            <a href="sobre">Sobre</a>
            <a href="servicos">Serviços</a>
            <a href="contato">Contato</a>
            <div class="icon-user">
                <img src="../assets/img/icon-user.png" onclick="toggleVisibility()" alt="logo">
            </div>
        </div>
    </header>
    <!-- Nav Perfil -->
    <nav id="text" class="hidden">
        <ul>
            <li><a style="margin-top: 15px;margin-bottom: 25px;" href="editarconta.php">Conta</a></li>
            <div></div>
            <li><a href="../logout.php">Sair</a></li>
        </ul>
    </nav>
    <!-- Elementos do Site -->
    <section class="card-menu">
        
    </section>

    </section>
    <script src="../assets/js/script.js"></script>
</body>
</html>

<style>
    #text {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        #text.show {
            display: block;
            opacity: 1;
        }
</style>
