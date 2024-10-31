<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: /Site_Hist-ria-1/Inicio/login.php"); // Ajuste o caminho conforme necessário
    exit();
}

$usuario_nome = $_SESSION['usuario'];
$usuario_tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'Desconhecido';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História Antiga</title>
    <link rel="stylesheet" href="antiga.css">
</head>
<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="egitoantigo.mp4" type="video/mp4">
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
                <li class="colaboradores"><a href="../colabo/colabo.html">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div>

        <div class="content">
            <div class="card">
            <h1>História Antiga</h1>
                <img src="imghist1.jpg" alt="História Antiga">
                <div class="text-content">
                    <h2>Civilizações da Antiguidade</h2>
                    <p>A história antiga abrange um período que se estende desde o surgimento da escrita, por volta de 3500 a.C., até a queda do Império Romano no Ocidente em 476 d.C. Durante esse período, diversas civilizações floresceram, como os egípcios, sumérios, gregos e romanos, cada uma deixando um legado cultural e tecnológico.</p>
                    <h2><br>Surgimento das primeiras civilizações</h2>
                    <p>A transição da pré-história para a história é marcada pela invenção da escrita, que permitiu o registro de eventos e ideias. As primeiras civilizações surgiram em regiões conhecidas como “berços da civilização”.</p>
                    <p><br><p id="meso">Mesopotâmia (atual Iraque):</p><br> Conhecida como "Terra entre rios" (Tigre e Eufrates), foi o local de uma das primeiras civilizações urbanas. Os sumérios criaram as primeiras cidades-estados, como Ur e Uruk, por volta de 3000 a.C. Inventaram a escrita cuneiforme.</p>
                    <p><br><p id="meso">Egito Antigo:</p><br> Civilização que se desenvolveu ao longo do rio Nilo. Conhecida pelas pirâmides, faraós e pela escrita hieroglífica. O Egito era altamente centralizado e governado por um faraó que era considerado divino.</p>
                    <p><br><p id="meso">Civilização do Vale do Indo (atual Índia/Paquistão): </p><br> Uma das mais avançadas em termos de urbanismo e planejamento. Cidades como Harappa e Mohenjo-Daro tinham sistemas de saneamento e organização sofisticados.</p>
                    <p><br><p id="meso">China Antiga:</p><br> A civilização chinesa começou às margens do rio Amarelo, com a Dinastia Xia e Shang. A China antiga desenvolveu um sistema de escrita ideográfico que é a base dos caracteres chineses atuais.</p>
                </div>
                <div class="text-content">
                <img src="judaismo.jpg" alt="História Antiga">
                    <h2><br>Religião e Filosofia</h2>
                    <p><br>A história antiga foi marcada pelo surgimento de várias religiões e sistemas filosóficos que moldaram a cultura humana:</p>
                    <p><br><p id="meso">Hinduísmo:</p><br>O Hinduísmo surgiu a partir das tradições védicas por volta de 3000 a.C. As escrituras sagradas dos Vedas vêm dos povos arianos que habitaram a região do atual Irã. Os escritos dos Vedas estabeleceram um conjunto de crenças que originaram o Hinduísmo Védico, no qual havia o culto aos deuses das tribos.</p>
                    <p><br><p id="meso">Religião egípcia e mitologias gregas e romanas:</p><br> Este conjunto de crenças foi praticado no antigo Egito desde o período pré-dinástico, cerca de 3000 a.C., até o surgimento do cristianismo. Inicialmente, era uma religião politeísta por crer em várias divindades, como forças da natureza.</p>
                    <p><br><p id="meso"> Zoroastrismo:</p><br>Essa crença é baseada no monoteísmo e teve início na antiga Pérsia por volta do século VI a.C. Atribui-se ao profeta Zaratustra chamado pelos gregos como Zoroastro a criação dessa doutrina que é intitulada em alusão a ele.</p>
                    <p><br><p id="meso"> Judaísmo:</p><br> O Judaísmo é uma religião monoteísta que surgiu com os Israelitas no Mediterrâneo Oriental (Levante do Sul) dentro do contexto das civilizações ribeirinhas da Mesopotâmia. Os Israelitas eram uma das tribos nômades da região, assim chamados por se considerarem descendentes de Jacó, que mudou seu nome para Israel.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="antiga.js"></script>
</body>
</html>
