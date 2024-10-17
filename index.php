<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "SELECT * FROM usuarios WHERE nome_usuario = ? AND senha_usuario = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $user, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario_logado = $result->fetch_assoc();
        $_SESSION['usuario_sessao'] = $usuario_logado['username'];
        $_SESSION['tipo_sessao'] = $usuario_logado['type'];
        
        header("Location: ./inicio/incio.html");
        exit();
    } else {
        echo "Usuário ou senha incorretos";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal da História</title>
    <link rel="stylesheet" href="./login/login.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h1>BEM-VINDO AO SEU PORTAL DA HISTÓRIA</h1>
            <p>Para continuar conectado, adicione seus dados para ficar por dentro das publicações!</p>
        </div>
        <div class="right-section">
            <h2>Crie uma conta</h2>
            <form method="POST" action=""> 
                <div class="input-container">
                    <input type="text" name="user" placeholder="Nome" required>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
