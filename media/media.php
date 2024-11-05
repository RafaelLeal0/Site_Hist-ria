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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Média</title>
    <link rel="stylesheet" href="media.css">
</head>
<body>
<div class="video-container">
        <video autoplay muted loop>
            <source src="idademedia-comp.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <nav class="sidebar" id="sidebar">
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">História Primitiva</a></li>
                <li><a href="#">História Antiga</a></li>
                <li><a href="#">Idade Média</a></li>
                <li><a href="#">Idade Moderna</a></li>
                <li><a href="#">Idade Contemporânea</a></li>
                <li class="colaboradores"><a href="../colabo.php">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div>    
    </div>
    <div class="card">
        <h2>Idade Média</h2>
        <img src="idade-media.jpg" alt="photo1">
        <h1>Sobre</h1>  
        <h3>A Idade Média é o nome do período da história localizado entre os anos 476 e 1453. A nomeação “Idade Média” é utilizada pelos historiadores
            dentro de uma periodização que engloba quatro idades: Antiga, Média, Moderna e Contemporânea. 
            "A Idade Média iniciou-se com a desagregação do Império Romano do Ocidente, no século V. Isso deu início a um processo de mescla da cultura latina, oriunda dos romanos, e da cultura germânica, oriunda dos povos que invadiram e instalaram-se nas terras que pertenciam a Roma, na Europa Ocidental.</h3>                    
    </div>
</body>
</html>