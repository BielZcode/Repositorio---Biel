<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/themes/home.css">
    <link rel="stylesheet" href="../assets/css/themes/color_style.css">
    <link rel="stylesheet" href="../src/app/navbar/navbar.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="../assets/img/icon-page.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../src/app/css/home.css">
    <title>Painel | BotSphere</title>
</head>
<body style="background--color: #fff;">
    <div class="container">
        <aside class="sidebar" style="background-color: #1c1c1c;">
            <nav class="nav">
                <ul>
					<li><a href="painel"><i class="bi bi-house-door-fill"></i>Página Inicial</a></li>
					<li><a style="font-size: 14px;color: rgb(130, 141, 153);">Hospedagem</a></li>
                    <li class="submenu">
                        <a href="#"><i class="bi bi-pc"></i>Hospedagem<i style="position: relative;right: -27px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                        <li><a href="#">Informação do Plano</a></li>
                        <li><a href="#">Consumo de Recursos</a></li>
                        <li><a href="#">Renovar</a></li>
                        <li><a href="#">Upgrade</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);">Desempenho</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-speedometer2"></i>Desempenho<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Velocidade do Bot</a></li>
                            <li><a href="#">Analise</a></li>
                            <li><a href="#">Bot</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);">Segurança</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-shield-shaded"></i>Segurança<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Detectar Malware</a></li>
                            <li><a href="#">Security Bot</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);">E-mails</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-envelope"></i>E-mails<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Contas de e-mail</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);" href="">Meus Bots</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-robot"></i>Meus Bots<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Lista dos Meus Bots</a></li>
                            <li><a href="#">Adicionar Bot</a></li>
                            <li><a href="#">Ativar Bots</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);" href="">Vendas Total</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-currency-dollar"></i>Vendas Total<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Configurações de Vendas</a></li>
                            <li><a href="#">Criar Venda</a></li>
                            <li><a href="#">Gerenciar Vendas</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);" href="">Arquivos dos Bots</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-folder"></i>Arquivos dos Bots<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Gerenciador de Arquivos</a></li>
                            <li><a href="#">Copias de Segurança</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);" href="">Avançado</a></li>
                    <li class="submenu">
                        <a href="pagamentos.php"><i class="bi bi-gear-fill"></i>Avançado<i style="position: relative;right: -70px;" class="bi bi-chevron-up"></i></a>
                        <ul>
                            <li><a href="#">Log de Atividades</a></li>
                            <li><a href="#">Proteção de Conexão</a></li>
                        </ul>
                    </li>
                    <li><a style="font-size: 14px;color: rgb(130, 141, 153);" href="">Configurações</a></li>
                    <li><a href="conta.php"><i class="bi bi-wrench-adjustable"></i>Conta</a></li>
                    <li><a href="editarconta.php"><i class="bi bi-filter"></i>Editar Painel</a></li>
                    <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Sair</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">    
                <p>Painel de Controle</p>
                <div class="bar"></div>
                <div class="stats">
                    <div class="item">
                        <h1>Gerenciador de Seus Bots</h1>
                    </div>
                </div>
            </header>     
        </main>
    </div>
    <script src="../assets/js/home.js"></script>
</body>
</html>
