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
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">BOT SPHERE</a>
                <ul class="nav-links">
                    <li><a href="painel">Inicio</a></li>
                    <li><a href="hospedagem">Hospedagem</a></li>
                    <li><a href="email">E-mails</a></li>
                    <li><a href="bots">Bots</a></li>
                    <li><a href="vendas">Vendas</a></li>
                    <li><a href="suporte">Suporte</a></li>
                    <li id="txt-login"><img class="image" src="../assets/img/icon-user.png" alt="logo"></li>
                </ul>
            </div>
        </nav>
    </header>
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
                <h1>Bem vindo</h1>
                <p>Painel AstroNET em desenvolvimento</p>
            </header>
            <section class="stats">
                <div style="height: 50px;"class="stat-item">
                    <p> <?php echo $clientesOnline; ?>/<?php echo $numReven; ?> <a style="color: rgb(57, 218, 138);"> Onlines</a></p>
                    <span style="color: rgb(130, 141, 153);">Revendedores / Meus Onlines</span>
                </div>
                <div  style="height: 65px;" class="stat-item">
                    <p> Validade:</p>
                    <a style="color: rgb(57, 218, 138)">21/06/2030</a>
                    <p>Versão <a style="color: rgb(57, 218, 138)">0.0.1</a></p>
                </div>
                <div style="height: 69px;" class="stat-item">
                <p> 0 <a style="color: rgb(57, 218, 138)">Revendedores</a></p>
					<span style="color: rgb(130, 141, 153);">Revendedores do Admin</span>
                </div>
				<div style="height: 69px;" class="stat-item">
					<p> <?php  echo $row["total_clientes"]; ?> <a style="font-size: 15;color: rgb(57, 218, 138)">Global</a></p>
					<span style="color: rgb(130, 141, 153);">Todos Usuarios</span>
				</div>
            </section>
            <section class="stats">
                <div class="stat-item">
                    <p> 
                    <?php echo $numUsuarios; ?>
                    <a style="color: rgb(57, 218, 138)">Usuarios</a></p>
                    <span style="color: rgb(130, 141, 153);">Seus Usuarios</span>
                </div>
                <div class="stat-item">
                    <p> 0 <a style="color: rgb(57, 218, 138)">Servidores</a></p>
                    <span style="color: rgb(130, 141, 153);">Total de Servidores</span>
                </div>
                <div class="stat-item">
                    <p> 0 <a style="color: rgb(57, 218, 138)">Revendedores</a></p>
                    <span style="color: rgb(130, 141, 153);">Revendedores do Painel</span>
                </div>
				<div class="stat-item">
					<p> 0,00<a style="color: rgb(57, 218, 138)">R$</a></p>
					<span style="color: rgb(130, 141, 153);">Total Vendido</span>
				</div>
                <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                                
            </section>
            <style>
                @media screen and (max-width: 600px){
                    .btn-warning{
                    color: #fff;
                    display: flex;
                    cursor: pointer;
                    border-color: #fc960f;
                    background-color: #FDAC41;
                    border: 0 solid transparent;
                    font-size: 1rem;
                    border-radius: 0.267r;
                    right: -100px;
                    }#sidebar {
                        position: fixed;
                        top: 0;
                        left: -300px; /* Esconde o sidebar à esquerda */
                        width: 300px;
                        height: 100%;
                        background-color: #fff; /* Cor de fundo do sidebar */
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra para o sidebar */
                        transition: left 0.3s ease; /* Transição suave para o efeito de abertura/fechamento */
                    }

                    #sidebar.active {
                        left: 0; /* Mostra o sidebar quando estiver ativo */
                    }

                    .menu-icon {
                        position: fixed;
                        top: 20px;
                        left: 20px;
                        z-index: 1001; /* Coloca o ícone do menu acima do sidebar */
                        cursor: pointer;
                    }

                    .nav ul {
                        list-style: none;
                        padding: 0;
                    }

                    .nav ul li {
                        padding: 10px 15px;
                        border-bottom: 1px solid #eee; /* Linha separadora entre itens do menu */
                    }

                    .nav ul li a {
                        text-decoration: none;
                        color: #333;
                        display: block;
                    }

                    .submenu ul {
                        display: none; /* Submenus inicialmente escondidos */
                        background-color: #f9f9f9; /* Cor de fundo do submenu */
                    }

                    .submenu.active ul {
                        display: block; /* Mostra o submenu quando estiver ativo */
                    }

                }
                @media only screen and (min-width: 800px){
                    .btn-warning{
                    right: -540px;
                    color: #fff;
                    display: flex;
                    cursor: pointer;
                    border-color: #fc960f;
                    background-color: #FDAC41;
                    border: 0 solid transparent;
                    font-size: 1rem;
                    border-radius: 0.267r;
                    }
            }
            </style>
            <section style="margin: 1rem 0;color: rgb(130, 141, 153);display: block;width: 100%;border: 1px solid #DFE3E7;border-color: #464d5c;text-align: column;font-family: inherit;font-size: 18px;padding: 8px;border-radius: 0.267rem;border-color: black;border: 1px solid #5A8DEE;" class="servers">
                <h2 style="font-size: 19px;">Link De Compra</h2>
                <table>
                    <thead>
                        <th>
                            <h1 style="color: rgb(130, 141, 153);font-size: 15px;">Use esses Links para seus clientes comprarem seus produtos.</h1>
                        </th>
                        </thead>
                            <table>
                            <h8 style="margin: 1rem 0;color: rgb(130, 141, 153);border-color: #5A8DEE !important;display: block;width: 98.8%;text-align: center;top: 50%;width: 100%;border-top: 1px solid #DFE3E7;align-itemns: center;">Para Novos Revendedores</h8>
                            </table>
                                <thead>
                                    <th>
                                        <input type="text" style="margin: 1rem 0;color: rgb(130, 141, 153);display: block;width: 98.8%;border: 1px solid #DFE3E7;border-color: #464d5c;text-align: column;font-family: inherit;font-size: 18px;padding: 8px;border-radius: 0.267rem;border-color: black;background: #565656;cursor: text;" value="https://painelastronet.online/admin/revenda.php?token=" readonly>
                                    </th>
                                </thead>
                            </table>
                            <th>
                        </th>
                        </thead>
                            <table>
                            <h8 style="margin: 1rem 0;color: rgb(130, 141, 153);border-color: #5A8DEE !important;display: block;width: 98.8%;text-align: center;top: 50%;width: 100%;border-top: 1px solid #DFE3E7;align-itemns: center;">Link Bot Vendas</h8>
                            </table>
                                <thead>
                                    <th>
                                        <input type="text" style="margin: 1rem 0;color: rgb(130, 141, 153);display: block;width: 98.8%;border: 1px solid #DFE3E7;border-color: #464d5c;text-align: column;font-family: inherit;font-size: 18px;padding: 8px;border-radius: 0.267rem;border-color: black;background: #565656;cursor: text;" value="https://painelastronet.online/admin/revenda.php?token=" readonly>
                                    </th>
                                </thead>
                            </table>
                            </th>
                        </thead>
                            <table>
                            <h8 style="margin: 1rem 0;color: rgb(130, 141, 153);border-color: #5A8DEE !important;display: block;width: 98.8%;text-align: center;top: 50%;width: 100%;border-top: 1px solid #DFE3E7;align-itemns: center;">Link Teste Automatico</h8>
                            </table>
                                <thead>
                                    <th>
                                        <input type="text" style="margin: 1rem 0;color: rgb(130, 141, 153);display: block;width: 98.8%;border: 1px solid #DFE3E7;border-color: #464d5c;text-align: column;font-family: inherit;font-size: 18px;padding: 8px;border-radius: 0.267rem;border-color: black;background: #565656;cursor: text;" value="https://painelastronet.online/admin/revenda.php?token=" readonly>
                                    </th>
                                </thead>
                            </table>
                            </thead>
                                <thead>
                                    <th>
                                        <form method="post">
                                        <input style="border-radius: 0.267rem;" name="gerar_token" type="submit" class="btn-warning" value="Gerar Novo Link">
                                        </form>
                                        <tbody>

                                        </tbody>
                                    </th>
                                </thead>
                                </thead>
                            <table>
                            <h8 style="margin: 1rem 0;color: rgb(130, 141, 153);border-color: rgb(57, 218, 138)!important;display: block;width: 98.8%;text-align: center;top: 50%;width: 100%;border-top: 1px solid #DFE3E7;align-itemns: center;">Id da Categoria Para Compra Automatica</h8>
                            </table>
                                <thead>
                                    <th>
                                        <input type="text" style="margin: 1rem 0;color: rgb(130, 141, 153);display: block;width: 98.8%;border: 1px solid #DFE3E7;border-color: #464d5c;text-align: column;font-family: inherit;font-size: 18px;padding: 8px;border-radius: 0.267rem;border-color: black;background: #565656;cursor: text;" value="1">
                                    </th>
                                </thead>
                                <thead>
                                    <th>
                                        <form action="" method="post">
                                        <input style="border: 2px solid #5A8DEF;border: 0 solid transparent;transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;border-radius: 0.267rem;" style=""type="submit" class="btn-warning" value="Salvar Categoria">
                                        </form>
                                    </th>
                                </thead>
                            </table>
                            </thead>
                            </table>
                            </form>
                            <section class="content">
                            <h2>Lista de Servidores</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>CATEGORIA</th>
                                        <th>IP</th>
                                        <th>TAMANHO</th>
                                        <th>ONLINES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Server data will be injected here -->
                                </tbody>
                            </table>
                        </section>
                    <tbody>
                
                    </tbody>
                </table>
            </section>
        </main>
    </div>
    <script src="../assets/js/home.js"></script>
</body>
</html>
<style>
    /* Navbar */
.navbar {
    background-color: #ffffff;
    color: #fff;
    padding: 1rem 0;
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    text-align: center;
    align-items: center;
    position: fixed;
    width: 188vh;
    margin-top: -20px;
    background-color: #fff;
    border-bottom: 0.1px solid #000;
}

.navbar .logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #000000;
    text-decoration: none;
    margin-left: 30px;
}

.nav-links {
    list-style: none;
    display: flex;
}

#txt-login {
    border-radius: 10px;
    height: 54px;
    width: 85px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 20px;
    margin-top: -10px;
}

.nav-links li {
    margin-right: 1rem;
}

.nav-links li a {
    color: #000000;
    text-decoration: none;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}
</style>

<div class="navbar2">
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Informação da Conta</a></li>
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Segurança</a></li>
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Compartilhamento de Conta</a></li>
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Atividades de Conta</a></li>
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Migrar Site</a></li>
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Ajuda</a></li>
                        <li><a href="../logout.php"><i class="bi bi-box-arrow-left"></i>Idioma <?php echo $linguage; ?></a></li>
                        </div>