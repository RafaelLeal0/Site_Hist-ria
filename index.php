<?php
include'conexao.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $stmt = $connection->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['usuario'] = $user['tipo'];
        header("Location: inicio.php");
    } else {
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
        <script>
            swal({
                title: 'Erro!',
                text: 'E-mail ou senha incorretos.',
                icon: 'error',
                button: 'Tentar novamente',
            });
        </script>
        <script>
            window.location.href = 'index.php';
        </script>
        ";
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
</body>
</html>
