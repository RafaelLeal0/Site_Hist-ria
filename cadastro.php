<?php
include 'conexao.php';

if(isset($_POST['cadastro'])){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $tipo = $_POST['tipo'];

    $stmt = $connection->prepare("INSERT INTO usuarios (email, senha, tipo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $senha, $tipo);
    
    if($stmt->execute()){
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./cadastro/cadastro.css">
</head>
<body>
    <div class="section">
        <h2>Cadastre-se</h2>
        <form method="POST" action="cadastro.php">
            <div class="input-container">
                <label for="email">E-mail:</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="password">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <div class="input-container">
                <label for="tipo">Tipo de usuário:</label>
                <select name="tipo" required>
                    <option value="administrador">Administrador</option>
                    <option value="aluno">Aluno</option>
                </select>
            </div>
            <button type="submit" name="cadastro">Cadastrar</button>
        </form>
    </div>
</body>
</html>
