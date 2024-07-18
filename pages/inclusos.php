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
<body style="">
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">BOT SPHERE</a>
                <ul class="nav-links">
                    <li><a id="planos" href="botshere">Planos</a></li>
                    <li><a id="recursos" href="botshere">Recursos</a></li>
                    <li><a id="infos" href="botshere">Informações</a></li>
                    <li><a id="home" onclick="redirect()" href="botshere">BotSphere</a></li>
                    <li><a href="carregando?redirect=suporte">Suporte</a></li>
                    <li id="txt-login"><a href="carregando?redirect=login">Entrar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <header class="header2" style="height: 224vh;">
        <div class="carder2">
            <div class="stat-item2">
                <div class="img2">
                        <img src="assets/img/bot_chat.svg" alt="icone">
                    </div>
                <div class="item2" id="inclusos">
                    <h1>Plano Basico</h1>
                    <div class="text2">
                        <span><i class="bi bi-check"></i>Segurança Contra Invasão ou Modificação</span>
                        <span><i class="bi bi-check"></i>Chame o Suporte se Tiver com Problemas</span>
                        <span><i class="bi bi-check"></i>Tenha Quantos bot que Voçe Quiser</span>
                        <span><i class="bi bi-check"></i>Mensagens Personalizadas</span>
                        <span><i class="bi bi-check"></i>Ativo Por 24 Horas</span>
                        <span><i class="bi bi-check"></i>Apenas 1 Bots python e php</span>
                        <span><i class="bi bi-check"></i>vendas basica</span>
                    </div>
                    <h1>Plano Premium</h1>
                    <div class="text2">
                        <span><i class="bi bi-check"></i>Segurança Contra Invasão ou Modificação</span>
                        <span><i class="bi bi-check"></i>Chame o Suporte se Tiver com Problemas</span>
                        <span><i class="bi bi-check"></i>Tenha Quantos bot que Voçe Quiser</span>
                        <span><i class="bi bi-check"></i>Mensagens Personalizadas</span>
                        <span><i class="bi bi-check"></i>Ativo Por 24 Horas</span>
                        <span><i class="bi bi-check"></i>apenas 4 Bots python e php</span>
                        <span><i class="bi bi-check"></i>Venda Mais Facil de Configurar</span>
                    </div>
                    <h1>Plano Profissonal</h1>
                    <div class="text2">
                        <span><i class="bi bi-check"></i>Segurança Contra Invasão ou Modificação</span>
                        <span><i class="bi bi-check"></i>Chame o Suporte se Tiver com Problemas</span>
                        <span><i class="bi bi-check"></i>Tenha Quantos bot que Voçe Quiser</span>
                        <span><i class="bi bi-check"></i>Mensagens Personalizadas</span>
                        <span><i class="bi bi-check"></i>Ativo Por 24 Horas</span>
                        <span><i class="bi bi-check"></i>Apens 15 Bots python e php</span>
                        <span><i class="bi bi-check"></i>Venda Profissonal e Configuracão sem Codigo</span>
                    </div>
                    <h1>Plano Avançado</h1>
                    <div class="text2">
                        <span><i class="bi bi-check"></i>Segurança Contra Invasão ou Modificação</span>
                        <span><i class="bi bi-check"></i>Chame o Suporte se Tiver com Problemas</span>
                        <span><i class="bi bi-check"></i>Tenha Quantos bot que Voçe Quiser</span>
                        <span><i class="bi bi-check"></i>Mensagens Personalizadas</span>
                        <span><i class="bi bi-check"></i>Ativo Por 24 Horas</span>
                        <span><i class="bi bi-check"></i>Apenas Bots 30 Bots python e php</span>
                        <span><i class="bi bi-check"></i>Venda Avançado muito mais Facil de Vender Com Bots Em php e Python Recomendada php</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        document.getElementById('planos').addEventListener('click', function() {
            document.getElementById('planoss').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('plano').addEventListener('click', function() {
            document.getElementById('planoss').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('home').addEventListener('click', function() {
            document.getElementById('homes').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('recursos').addEventListener('click', function() {
            document.getElementById('inclusos').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('infos').addEventListener('click', function() {
            document.getElementById('info').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <script>
        // Função para detectar se o dispositivo é móvel
        function isMobile() {
            return /Mobi|Android/i.test(navigator.userAgent);
        }

        // Redirecionar se for um dispositivo móvel
        if (isMobile()) {
            window.location.href = "carregando?redirect=mobile/index.php"; // Substitua "pagina-movel.html" pela URL da página móvel
        }
    </script>
</body>
</html>
