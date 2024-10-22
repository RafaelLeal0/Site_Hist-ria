<?php
include'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $stmt = $connection->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['usuario'] = $user['tipo'];
        header("Location: ./inicio/inicio.php");
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
                window.onload = function() {
                Swal.fire({
                    icon: 'error',
                    title: 'E-mail ou senha inválidos!',
                    text: 'Tente novamente!',
                });
                }
            </script>";
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
