<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario_nome = $_SESSION['usuario'];
$usuario_tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'Desconhecido';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Contemporânea</title>
    <link rel="stylesheet" href="contemp.css">
</head>
<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="torre.mp4" type="video/mp4">
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
                <li class="colaboradores"><a href="../colabo/colabo.html">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle-custom" id="menuToggleCustom">
            <span>☰</span>
        </div>

        
        <div class="content">
            <div class="card">
            <h1>Idade Contemporânea</h1>
                <img src="../imagens/idadecontenporanea.jpg" alt="Idade Contemporânea">
                <div class="text-content">
                <h2>O que foi a Idade Contemporânea?</h2>
                <p>Idade Contemporânea é uma divisão cronológica da história, compreendendo o período entre o início da Revolução Francesa, com a Queda da Bastilha, em 14 julho de 1789, até os dias atuais. A Idade Contemporânea representa principalmente o período de consolidação do capitalismo como o modo de produção e sua expansão por todo o globo terrestre entre os séculos XVIII e XXI.</p>
                </div>
                <div class="text-content">
                <img src="../imagens/revolucaofrancesa.jpg" alt="Revolução Francesa">
                <h5>Lamartine em frente à Câmara Municipal de Paris rejeita a bandeira vermelha de 1848, por Henri Félix</h5>
                <h2>Revolução Francesa</h2>
                <p>No final do século XVIII, a França era um país agrário, com a produção marcada por permanência do modelo feudal. Entre outras coisas, isso significava que a nobreza detinha privilégios econômicos, como isenção de impostos, enquanto que os camponeses pagavam tributos que remontavam ao período medieval.</p>
                <p>O principal motivo é mesmo o fato de terem sido os historiadores europeus a fazerem a divisão cronológica do que eles consideravam ser a história da humanidade. Ainda assim, a Revolução Francesa, de fato, representou transformações profundas na sociedade europeia da época e teve consequências em outros continentes, como a influência nos processos de independência das colônias das Américas espanhola, portuguesa e francesa. Se quiser saber mais sobre a revolução e sua importância</p>
                </div>
            </div>
        </div>
    </div>
<script src="contemp.js"></script>
</body>
</html>