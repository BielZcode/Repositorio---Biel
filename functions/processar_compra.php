<?php
session_start(); // Para obter o ID do usuário logado
$user_id = $_SESSION['user_id']; // Supondo que você armazena o ID do usuário na sessão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plano_id = $_POST['plano_id'];

    // Conectar ao banco de dados
    $conn = new mysqli("localhost", "root", "", "seu_banco_de_dados");

    // Obter informações do plano
    $stmt = $conn->prepare("SELECT * FROM planos WHERE id = ?");
    $stmt->bind_param("i", $plano_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $plano = $result->fetch_assoc();

    if ($plano) {
        $valor = $plano['preco'];
        $data_pagamento = date("Y-m-d H:i:s");

        // Inserir o pagamento no banco de dados
        $stmt = $conn->prepare("INSERT INTO pagamentos (user_id, plano_id, data_pagamento, valor) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisd", $user_id, $plano_id, $data_pagamento, $valor);

        if ($stmt->execute()) {
            echo "Pagamento realizado com sucesso!";
        } else {
            echo "Erro ao processar o pagamento.";
        }
    } else {
        echo "Plano inválido.";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-page.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="description" content="Descubra o BotSphere, a plataforma de hospedagem profissional para seus bots. Escalabilidade, desempenho e segurança garantidos para seus projetos de automação.">
    <title>Hospede seus bots de forma fácil e segura. BotSphere</title>
    <link rel="stylesheet" href="styles.css">
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
                    <li><a href="suporte">Suporte</a></li>
                    <li id="txt-login"><a href="carregando?redirect=login?=">Entrar</a></li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
