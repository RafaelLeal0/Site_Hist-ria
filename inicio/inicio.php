<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: index.php"); 
    exit();
}

$usuario_nome = $_SESSION['usuario'] ?? 'Visitante';
$usuario_tipo = $_SESSION['tipo_sessao']; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História</title>
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="video_inicio.mp4" type="video/mp4">
        </video>
    </div>
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
        
        <main class="content">
            <div class="overlay"></div>
            <div class="content-text">
                <h2>Bem-vindo(a), <?php echo htmlspecialchars($usuario_tipo); ?>!</h2>
                
                <h1>CONHEÇA MAIS SOBRE A HISTÓRIA</h1>
                <a href="../saibamais/saibamais.php" class="button">SAIBA MAIS</a>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
