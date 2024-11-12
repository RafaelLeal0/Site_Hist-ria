<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email_digital = $_POST['email'];
    $senha_digital = md5($_POST['senha']);

    $query = "SELECT * FROM usuarios WHERE email = '$email_digital' AND senha = '$senha_digital'";
    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        $usuario_logado = $result->fetch_assoc();
        $_SESSION['email_sessao'] = $usuario_logado['email'];
        $_SESSION['tipo_sessao'] = $usuario_logado['tipo'];
        header("Location: ./inicio/inicio.php");  
        exit();
    } else {
        $_SESSION['login_erro'] = "Usuário ou senha incorretos";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal da História</title>
    <link rel="stylesheet" href="./login/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h1>BEM-VINDO AO SEU PORTAL DA HISTÓRIA</h1>
            <p>Para continuar conectado, adicione seus dados para ficar por dentro das publicações!</p>
        </div>
        <div class="right-section">
            <h2>Entre em sua conta</h2>
            <form method="POST" action="index.php"> 
                <div class="input-container">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-container">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit" name="login">Entrar</button>
            </form>
            <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
    </div>
    <?php if (isset($_SESSION['login_erro'])): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro de Login',
                text: '<?php echo $_SESSION['login_erro']; ?>',
                confirmButtonText: 'Tentar novamente'
            });
        </script>
        <?php unset($_SESSION['login_erro']); ?>
    <?php endif; ?>
    
</body>
</html>
