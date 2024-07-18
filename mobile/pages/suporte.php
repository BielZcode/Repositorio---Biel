<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-page.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="description" content="Descubra o BotSphere, a plataforma de hospedagem profissional para seus bots. Escalabilidade, desempenho e segurança garantidos para seus projetos de automação.">
    <title>Hospede seus bots de forma fácil e segura. BotSphere</title>
    <link rel="stylesheet" href="src/app/navbar/navbar.component.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body style="height: 50vh;">
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">BOT SPHERE</a>
                <ul class="nav-links">
                    <li><a id="planos" href="carregando?redirect=login">Planos</a></li>
                    <li><a id="recursos" href="../carregando?redirect=login">Recursos</a></li>
                    <li><a id="infos" href="#Informações">Informações</a></li>
                    <li><a id="home" onclick="redirect()" href="#home">BotSphere</a></li>
                    <li><a href="suporte">Suporte</a></li>
                    <li id="txt-login"><a href="carregando?redirect=login">Entrar</a></li>
                </ul>
            </div>
        </nav>
    <header class="header" id="homes">
        <div class="carder">
            <div class="stat-item">
                <div class="img">
                        <img src="assets/img/menu-icone.svg" alt="icone">
                    </div>
                <div class="item">
                    <h1>Suporte do Site</h1>
                    <div class="text">
                        <span><i class="bi bi-check"></i>Vagas para Suporte</span>
                        <span><i class="bi bi-check"></i>Contratando Ate xx/xx/xxxx</span>
                        <span><i class="bi bi-check"></i>Link: https://web.telegram.org/a/#7011883350</span>
                        <span><i class="bi bi-check"></i>Suporte Principal Disponivel So da Manhã ou de Noite</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        document.getElementById('planos').addEventListener('click', function() {
            document.getElementById('planoss').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('recursos').addEventListener('click', function() {
            document.getElementById('inclusos').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('home').addEventListener('click', function() {
            document.getElementById('homes').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('infos').addEventListener('click', function() {
            document.getElementById('info').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>
