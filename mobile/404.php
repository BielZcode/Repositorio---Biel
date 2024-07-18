<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found - BotSphere</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <p>Oops! Página não encontrada.</p>
        <a href="/">Voltar para a página inicial</a>
    </div>
</body>
</html>
<style>
    body {
    background-color: #1f1f1f;
    color: #fff;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.error-container {
    text-align: center;
}

h1 {
    font-size: 10rem;
    margin: 0;
}

p {
    font-size: 2rem;
}

a {
    color: #fff;
    text-decoration: none;
    border-bottom: 1px dashed #fff;
    padding-bottom: 2px;
    transition: border-bottom 0.3s ease;
}

a:hover {
    border-bottom-color: transparent;
}
</style>