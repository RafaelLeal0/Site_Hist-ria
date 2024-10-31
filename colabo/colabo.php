<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: ../index.php");
    exit();
}

$usuario_nome = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Visitante';
$usuario_tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'Desconhecido';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História Primitiva</title>
    <link rel="stylesheet" href="colabo.css">

</head>

<body>

    <div class="video-container">
        <video autoplay muted loop>
            <source src="historiantiga.mp4" type="video/mp4">
        </video>
    </div>

    <div class="sidebar-container">
        <nav class="sidebar-custom" id="sidebarCustom">
            <ul>
                <li><a href="../inicio/inicio.php">Início</a></li>
                <li><a href="../primitiva/primitiva.php">História Primitiva</a></li>
                <li><a href="../antiga/antiga.php">História Antiga</a></li>
                <li><a href="../media/media.php">Idade Média</a></li>
                <li><a href="../moderna/moderna.php">Idade Moderna</a></li>
                <li><a href="../contemp/contemp.php">Idade Contemporânea</a></li>
                <li class="colaboradores"><a href="../colabo/colabo.php">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle-custom" id="menuToggleCustom">
            <span>☰</span>
        </div>

        <div class="membros-container">
    <h1 class="titulo">Membros do Projeto</h1>
    <div class="fotos-container">
        <img src="../imagens/murilo.jpg" alt="Murilo" class="foto-membro">
        <img src="../imagens/rafael.jpg" alt="Rafael Leal" class="foto-membro">
        <img src="../imagens/samuel.jpg" alt="Samuel Boaz" class="foto-membro">
        <img src="../imagens/andrey.jpg" alt="Andrey" class="foto-membro">
        <img src="../imagens/julia.jpg" alt="Julia" class="foto-membro">
    </div>
</div>
    </div>

    <script src="script.js"></script>

</body>
</html>