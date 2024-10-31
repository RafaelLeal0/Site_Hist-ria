<?php
session_start();

$usuario_nome = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Visitante';
$usuario_tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'Desconhecido';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Moderna</title>
    <link rel="stylesheet" href="moderna.css">
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
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle-custom" id="menuToggleCustom">
            <span>☰</span>
        </div>

        <div class="moderna-section-custom">

            <div class="period">
                <div class="period-background">
                    <h1 class="moderna-title">Idade Moderna</h1>
                    <img src="../imagens/renascimento.jpg" alt="Renascimento" class="period-image">
                    <div class="period-content">
                        <h2 class="period-title">Renascimento</h2>
                        <p class="period-description">
                            O Renascimento foi um movimento cultural que marcou a transição da Idade Média para a Idade Moderna, caracterizado pelo ressurgimento das artes, ciências e cultura clássica.
                        </p>
                        <ul>
                            <li>Valorização do conhecimento científico.</li>
                            <li>Avanços nas artes plásticas e arquitetura.</li>
                            <li>Desenvolvimento do humanismo.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period-background">
                    <img src="../imagens/revolucao_cientifica.jpg" alt="Revolução Científica" class="period-image">
                    <div class="period-content">
                        <h2 class="period-title">Revolução Científica</h2>
                        <p class="period-description">
                            A Revolução Científica foi um período de avanços significativos nas ciências, mudando a forma como entendemos o mundo ao nosso redor.
                        </p>
                        <p>
                            Com figuras como Copérnico, Galileu e Newton, novas ideias sobre astronomia, física e biologia foram desenvolvidas, influenciando profundamente a sociedade.
                        </p>
                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period-background">
                    <img src="../imagens/expansao_maritima.jpg" alt="Expansão Marítima" class="period-image">
                    <div class="period-content">
                        <h2 class="period-title">Expansão Marítima</h2>
                        <p class="period-description">
                            As Grandes Navegações europeias dos séculos XV e XVI resultaram na exploração e colonização de novos territórios.
                        </p>
                        <p>
                            Essas expedições abriram rotas comerciais e possibilitaram a troca de culturas e mercadorias.
                        </p>
                    </div>
                </div>
            </div>

            <div class="curiosidades-section">
                <h2 class="curiosidades-title">Curiosidades e Resumo para Provas</h2>
                <p>Aqui estão alguns pontos importantes para estudar sobre a Idade Moderna:</p>
                <ul>
                    <li>O Renascimento influenciou a arte e a ciência, trazendo novas formas de pensar e questionar.</li>
                    <li>A Revolução Científica desenvolveu o método científico e mudou a visão do universo.</li>
                    <li>A Expansão Marítima ampliou o comércio global e deu início ao período colonial europeu.</li>
                    <li>A Reforma Protestante, iniciada por Martinho Lutero, teve grande impacto na Igreja e na sociedade.</li>
                </ul>
                <p>Boa sorte nos estudos!</p>
            </div>

        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
