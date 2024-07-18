<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-page.jpg" type="image/x-icon">
    <title>Carregando - BotSphere</title>
    <link rel="stylesheet" href="src/app/loading.component.css">
    <script src="assets/js/loading.js"></script>
</head>
<body>
    <div class="loading-screen">
        <div class="logo-container">
            <div class="spinner"></div>
        </div>
    </div>
</body>
<style>
        /* Reset básico */
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body, html {
        height: 100%;
        font-family: Arial, sans-serif;
    }
    
    .loading-screen {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        background-color: #fff;
        position: relative;
    }
    
    .logo-container {
        position: relative;
        width: 150px;
        height: 150px;
    }
    
    .logo {
        width: 50%;
        height: 50%;
    }
    
    .spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100px;
        height: 100px;
        border: 8px solid transparent;
        border-top-color: #00f;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        transform: translate(-50%, -50%);
    }
    
    @keyframes spin {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }
        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
</style>