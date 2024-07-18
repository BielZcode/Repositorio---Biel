<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);

include('pages/conexao.php'); // Inclua seu script de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Hash da senha

    $query = "SELECT id, email FROM users WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $user['login'];
        $_SESSION['user_id'] = $user['id'];
        header('Location: painel'); // Redireciona para a página de dashboard
        exit;
    } else {
        $_SESSION['error'] = 'Usuário ou senha incorretos!';
        header('Location: login.php'); // Redireciona de volta para a página de login
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-page.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Faça login na BotSphere</title>
</head>
<body style="overflow: hidden;">
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="nav">
                    <a href="botsphere" class="logo">BOT SPHERE</a>
                </div>
            </div>
        </nav>
    </header>
    <section class="login-section">
        <div class="container">
            <div class="login-form">
                <h2>Login - BotSphere</h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                    <button style="margin-bottom: 20px;" type="submit" class="btn btn-primary">Entrar</button>
                    <a href="esqueci_page" style="text-decoration: none;">Esqueceu a Senha?</a>
                    <p class="signup-link">Ainda não é membro?<a href="carregando?redirect=botsphere">Escolha um plano de Hospedagem</a> e comece agora!</p>
                </form>
            </div>
        </div>
    </section>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var error = '<?php echo $error; ?>';
            if (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: error,
                });
            }
        });
    </script>
    <script src="assets/js/icons/script.js"></script>
</body>
</html>
