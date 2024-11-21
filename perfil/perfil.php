<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: ../index.php");
    exit();
}

$email_usuario = $_SESSION['email_sessao'];
$tipo_usuario = $_SESSION['tipo_sessao'];

function verificarPermissao($tipo_necessario) {
    global $tipo_usuario;
    if ($tipo_usuario !== $tipo_necessario) {
        header("Location: ../acesso-negado.php");
        exit();
    }
}

if (!isset($_SESSION['email'])) {
    $_SESSION['nome'] = 'Usuário'; 
    $_SESSION['email'] = 'exemplo@gmail.com'; 
    $_SESSION['senha'] = '123456'; 
    $_SESSION['foto'] = ''; 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    }

    if (isset($_POST['senha'])) {
        $_SESSION['senha'] = $_POST['senha'];
    }

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $fotoNome = 'uploads/' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $fotoNome);
        $_SESSION['foto'] = $fotoNome;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
<div class="container">
        <nav class="sidebar" id="sidebar">
            <ul>
                <li><a href="../inicio/inicio.php">Início</a></li>
                <li><a href="../primitiva/primitiva.php">História Primitiva</a></li>
                <li><a href="../antiga/antiga.php">História Antiga</a></li>
                <li><a href="../media/media.php">Idade Média</a></li>
                <li><a href="../moderna/moderna.php">Idade Moderna</a></li>
                <li><a href="../contemp/contemp.php">Idade Contemporânea</a></li>
                <li><a href="../glossario/glossario.php">Glossário</a></li>
                <li class="colaboradores"><a href="../colabo/colabo.php">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img id="logo" src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div> 
    <div class="profile-container">
        <div class="profile-card">
            <div class="profile-avatar">
                <img src="img_perfil_padrao.png" alt="Foto de Perfil">
            </div>
            <h2>Olá! Nome</h2>
            <form action="update-profile.php" method="POST" enctype="multipart/form-data">
                <label for="email">Troque seu email</label>
                <input type="email" id="email" name="email" placeholder="Coloque seu novo email" required>

                <label for="senha">Troque sua senha</label>
                <input type="password" id="senha" name="senha" placeholder="Coloque sua nova senha" required>

                <label for="foto">Troque sua foto de perfil</label>
                <input type="file" id="foto" name="foto">

                <button type="submit">Confirmar alterações</button>
            </form>
        </div>
    </div>
    <script src="perfil.js"></script>
</body>
</html>
