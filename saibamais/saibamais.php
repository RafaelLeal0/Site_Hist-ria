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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saiba Mais</title>
    <link rel="stylesheet" href="saibamais.css">
</head>
<body>

    <div class="container">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="videosaibamais.mp4" type="video/mp4">
            </video>
        </div>
        <nav class="sidebar" id="sidebar">
            <ul>
                <li><a href="../inicio/inicio.php">Início</a></li>
                <li><a href="../primitiva/primitiva.php">História Primitiva</a></li>
                <li><a href="../antiga/antiga.php">História Antiga</a></li>
                <li><a href="../media/media.php">Idade Média</a></li>
                <li><a href="../moderna/moderna.php">Idade Moderna</a></li>
                <li><a href="../contemp/contemp.php">Idade Contemporânea</a></li>
                <li><a href="../glossario/glossario.php">Glossario</a></li>
                <li class="colaboradores"><a href="../colabo/colabo.php">Colaboradores</a></li>
                <li><a href="../logout.php" id="logout">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>
    
        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div>
    
        <div class="new-section">
            <div class="section-container">
                <h2><a href="../primitiva/primitiva.php">História Primitiva</a></h2>
            </div>
        </div>
        <div class="new-section2">
            <div class="section-container">
                <h2><a href="../antiga/antiga.php">História Antiga</a></h2>
            </div>
        </div>
    
        <div class="new-section3">
            <div class="section-container">
                <h2><a href="../media/media.php">Idade Média</a></h2>
            </div>
        </div>
    
        <div class="new-section4">
            <div class="section-container">
                <h2><a href="../moderna/moderna.php">Idade Moderna</a></h2>
            </div>
        </div>
    
        <div class="new-section5">
            <div class="section-container">
                <h2><a href="../contemp/contemp.php">Idade Contemporânea</a></h2>
            </div>
        </div>
        <footer class="footer-placeholder"></footer>

        <script src="saibamais.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

</body>
</html>