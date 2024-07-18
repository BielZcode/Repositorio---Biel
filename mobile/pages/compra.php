<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icon-page.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="description" content="Descubra o BotSphere, a plataforma de hospedagem profissional para seus bots. Escalabilidade, desempenho e segurança garantidos para seus projetos de automação.">
    <title>Cart | BotSphere</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/themes/layout-dark.css">
    <link rel="stylesheet" href="../src/app/navbar/navbar.component.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">BOT SPHERE</a>
                <ul class="nav-links">
                    <li><a id="planos" href="#planos">Planos</a></li>
                    <li><a id="recursos" href="#recursos">Recursos</a></li>
                    <li><a id="infos" href="#Informações">Informações</a></li>
                    <li><a id="home" onclick="redirect()" href="#home">BotSphere</a></li>
                    <li><a href="suporte">Suporte</a></li>
                    <li id="txt-login"><a href="carregando?redirect=login">Entrar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="card-menu carder">
        <div class="carder color-style">
            <div class="carder-cards">
                <div class="row">
                    <div class="text">
                        <h1>Voçe Escolheu o Plano de Hospedagem <?php echo $palno; ?></h1>
                    </div>
                    <div class="items">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
