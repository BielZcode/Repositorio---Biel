<?php
session_start();
include 'pages/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['senha'];
    
    // Verifica se o login já está registrado
    $sql = "SELECT id FROM usuarios WHERE login = ?";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        $_SESSION['error'] = 'Erro ao preparar a consulta SQL: ' . $conn->error;
        header("Location: registro");
        exit();
    }
    
    $stmt->bind_param("s", $login);
    if (!$stmt->execute()) {
        $_SESSION['error'] = 'Erro ao executar a consulta SQL: ' . $stmt->error;
        header("Location: registro");
        exit();
    }
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        // Login já registrado
        $_SESSION['error'] = "Login já está em uso.";
        header("Location: registro");
        exit();
    } else {
        // Insere o novo usuário no banco de dados com senha criptografada em MD5
        $hashed_password = md5($password); // Usando MD5 para criptografar a senha
        
        $sql = "INSERT INTO usuarios (login, senha) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        
        if (!$stmt) {
            $_SESSION['error'] = 'Erro ao preparar a consulta SQL: ' . $conn->error;
            header("Location: registro");
            exit();
        }
        
        $stmt->bind_param("ss", $login, $hashed_password);
        
        if ($stmt->execute()) {
            // Registro bem-sucedido
            $_SESSION['success'] = "Conta criada com sucesso!";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Erro ao registrar. Tente novamente. Erro: " . $stmt->error;
            header("Location: registro");
            exit();
        }
    }
    
    $stmt->close();
    $conn->close();
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
    <title>BotSphere - Registro</title>
</head>
<body>
    <div class="card-login">
        <div class="login">
            <h1>INSIRA SUAS CREDENCIAIS PARA REGISTRAR</h1>
            <form id="loginForm" method="POST" action="registro">
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="Login" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Registrar">
                <a href="index.php" style="text-decoration: none;">Já tem uma conta? Faça login</a>
            </form>
        </div>
    </div>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var error = '<?php echo isset($_SESSION['error']) ? $_SESSION['error'] : ''; ?>';
            var success = '<?php echo isset($_SESSION['success']) ? $_SESSION['success'] : ''; ?>';
            
            if (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: error,
                });
                <?php unset($_SESSION['error']); ?>
            }

            if (success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: success,
                });
                <?php unset($_SESSION['success']); ?>
            }
        });
    </script>
    <script src="assets/js/icons/script.js"></script>
</body>
</html>
