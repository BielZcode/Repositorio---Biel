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
<body style="height: 200vh;">
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">BOT SPHERE</a>
                <ul class="nav-links">
                    <li><a id="planos" href="#planos">Planos</a></li>
                    <li><a id="recursos" href="#recursos">Recursos</a></li>
                    <li><a id="infos" href="#Informações">Informações</a></li>
                    <li><a id="home" onclick="redirect()" href="#home">BotSphere</a></li>
                    <li><a href="carregando?redirect=suporte">Suporte</a></li>
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
                    <h1>Tudo o que você precisa para criar um Bot</h1>
                    <p>Melhor Hospedagem de Bots </p>
                    <div class="text">
                        <span><i class="bi bi-check"></i>Suporte Marcado<i style="font-size: 18px;color: #000;margin-left: 5px;" class="bi bi-question-circle"></i></span>
                        <span><i class="bi bi-check"></i>Mensagens Personalizada<i style="font-size: 18px;color: #000;margin-left: 5px;" class="bi bi-question-circle"></i></span>
                        <span><i class="bi bi-check"></i>Vendas, Minigame, Grupo E etc</span>
                        <h3>R$</h3>
                        <span1>10,99/<h2>mês*</h2></span1>
                        <button id="plano" href="#planos">Comece Agora</button>
                        <p><i class="bi bi-shield-check"></i>30 dias para pedir reembolso</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <section class="hero">
            <div class="container">
                <h1 style="margin-top: 250px;">Hospedagem Bot Rápida e Segura</h1>
                <p>Descubra nossos planos de hospedagem de Bots e leve seu Bot para o próximo nível.</p>
                <p id="planoss">30 dias para pedir reembolso</p>
            </div>
        </section>
    <form action="carregando?redirect=compraplano" method="post">
        <section class="card-menu">
            <div class="stat-items">
                <div class="items">
                    <h1>Básico</h1>
                    <p>Ideal Para Iniciantes</p>
                    <h3>R$</h3>
                    <span>6,99/<h2 style="text-align: left;margin-left: 109px;">mês*</h2></span>
                    <p>*Estimativa de gasto mensal durante 48 meses. O plano é pago de forma integral.</p>
                    <input type="hidden" name="plano_id" value="1">
                    <input value="Escolha Plano" type="submit">
                </div>
            </div>
            <div class="stat-items">
                <div class="items">
                    <h1>Premium</h1>
                    <p>Perfeito Para Vendas</p>
                    <h3>R$</h3>
                    <span>10,99/<h2>mês*</h2></span>
                    <p>*Estimativa de gasto mensal durante 48 meses. O plano é pago de forma integral.</p>
                    <input type="hidden" name="plano_id" value="2">
                    <input value="Escolha Plano" type="submit">
                </div>
            </div>
            <div class="stat-items">
                <div class="items2">
                    <h4>RECOMENDADO</h4>
                </div>
                <div class="items3">
                    <h1>Profissional</h1>
                    <p>Mais Potência e Mais Recursos</p>
                    <h3>R$</h3>
                    <span>14,99/<h2>mês*</h2></span>
                    <p>*Estimativa de gasto mensal durante 48 meses. O plano é pago de forma integral.</p>
                    <input type="hidden" name="plano_id" value="3">
                    <input value="Escolha Plano" type="submit">
                </div>
            </div>
            <div class="stat-items">
                <div class="items">
                    <h1>Avançado</h1>
                    <p>Melhor opção para Grandes Vendas</p>
                    <h3>R$</h3>
                    <span>39,99/<h2>mês*</h2></span>
                    <p>*Estimativa de gasto mensal durante 48 meses. O plano é pago de forma integral.</p>
                    <input type="hidden" name="plano_id" value="4">
                    <input value="Escolha Plano" type="submit">
                </div>
            </div>
        </section>
    </form>
    </form>
    <header class="header">
        <div class="divbar">
            <h1>INFORMAÇÔES</h1>
            <div></div>
        </div>
        <div class="carder">
            <div class="stat-item">
                <div class="img">
                        <img src="assets/img/planos_icon.svg" alt="icone">
                    </div>
                <div class="item" id="info">
                    <h1>Informações do Site</h1>
                    <div class="text">
                        <span><i class="bi bi-check"></i>Painel de Controle Incluso</span>
                        <span><i class="bi bi-check"></i>Criadores @BielZcode Telegram</span>
                        <span><i class="bi bi-check"></i>Bot Em python e PhP</span>
                        <span><i class="bi bi-check"></i>Script Editavel</span>
                        <span><i class="bi bi-robot"></i><a href="inclusos" style="color: #8624ad;text-decoration: none;">Ver todas Informações</a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header2">
        <div class="carder2">
            <div class="stat-item2">
                <div class="img2">
                        <img src="assets/img/bot_chat.svg" alt="icone">
                    </div>
                <div class="item2" id="inclusos">
                    <h1>Inclusos No Plano</h1>
                    <div class="text2">
                        <span><i class="bi bi-check"></i>Segurança Contra Invasão ou Modificação</span>
                        <span><i class="bi bi-check"></i>Chame o Suporte se Tiver com Problemas</span>
                        <span><i class="bi bi-check"></i>Tenha Quantos bot que Voçe Quiser</span>
                        <span><i class="bi bi-check"></i>Mensagens Personalizadas</span>
                        <span><i class="bi bi-check"></i>Ativo Por 24 Horas</span>
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
</body>
</html>
