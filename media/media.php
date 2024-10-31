<?php
session_start();

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
    <div class="container">
        <nav class="sidebar" id="sidebar">
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">História Primitiva</a></li>
                <li><a href="#">História Antiga</a></li>
                <li><a href="#">Idade Média</a></li>
                <li><a href="#">Idade Moderna</a></li>
                <li><a href="#">Idade Contemporânea</a></li>
                <li class="colaboradores"><a href="#">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div>
        <main class="content">
            <div class="overlay">
                <h1>Idade Média</h1>
            </div>
            <h2 class="texto">
                A Idade Média é o nome do período da história localizado entre os anos 476 e 1453. A nomeação “Idade Média” é utilizada pelos historiadores
                dentro de uma periodização que engloba quatro idades: Antiga, Média, Moderna e Contemporânea. <br> <br>
                "A Idade Média iniciou-se com a desagregação do Império Romano do Ocidente, no século V. Isso deu início a um processo de mescla da cultura latina, oriunda dos romanos, e da cultura germânica, oriunda dos povos que invadiram e instalaram-se nas terras que pertenciam a Roma, na Europa Ocidental. <br> <br>
                Desse período destacam-se o processo de ruralização que a Europa viveu entre os séculos V e X; o fortalecimento da Igreja Católica; a estruturação do sistema feudal, não apenas economicamente mas também política e socialmente. A partir do século XI, o renascimento urbano e comercial abre caminho para a crise do século XIV, que determina o fim da Idade Média."
            </h2> 
            <br> <br>
            <h2 class="texto2">
                "Como mencionado, a Idade Média é assim chamada dentro de uma periodização, estipulada pelos historiadores, que a determina entre os anos de 476 e 1453. O que estipula o início da Idade Média é a destituição de Rômulo Augusto do trono romano, em 476, e o que estipula seu fim é a conquista de Constantinopla pelos otomanos, em 1453."
            </h2>
        </main>   
    </div>
</body>
</html>