<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);

include('pages/conexao.php'); // Inclua seu script de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE login = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($senha, $row['senha'])) {
            $_SESSION['login'] = $login;
            $_SESSION['user_id'] = $row['id'];

            // Incrementar o contador de sessões
            $user_id = $row['id'];
            $query = "INSERT INTO user_sessions (user_id, total_sessions)
                      VALUES (?, 1) 
                      ON DUPLICATE KEY UPDATE total_sessions = total_sessions + 1, last_login = CURRENT_TIMESTAMP";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();

            header('Location: pages/home.php'); // Redireciona para a página de dashboard
            exit;
        } else {
            $_SESSION['error'] = 'Usuário ou senha incorretos!';
            header('Location: index.php'); // Redireciona de volta para a página de login
            exit;
        }
    } else {
        $_SESSION['error'] = 'Usuário ou senha incorretos!';
        header('Location: index.php'); // Redireciona de volta para a página de login
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>BotSphere - Login</title>
</head>
<body>
    <div class="card-login">
        <div class="login">
            <h1>INSIRA SUAS CREDENCIAIS</h1>
            <form id="loginForm" method="POST" action="index.php">
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="Login">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="Entrar">
                <a href="registro" style="text-decoration: none;">Ou Registre-se</a>
            </form>
        </div>
    </div>
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
