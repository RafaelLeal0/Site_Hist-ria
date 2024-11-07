<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
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
    <title>História Antiga</title>
    <link rel="stylesheet" href="antiga.css">
</head>
<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="egitoantigo.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="text-overlay">
            <h1>História Antiga</h1>
        </div>
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
        
        <div class="content">
            <div class="card">
                <div class="topic">
                    <div class="text-content">
                        <h2>Civilizações da Antiguidade</h2>
                        <p>A história antiga abrange um período que se estende desde o surgimento da escrita, por volta de 3500 a.C., até a queda do Império Romano no Ocidente em 476 d.C. Durante esse período, diversas civilizações floresceram, como os egípcios, sumérios, gregos e romanos, cada uma deixando um legado cultural e tecnológico.</p>
                    </div>
                    <img src="../imagens/imghist1.jpg" alt="História Antiga">
                </div>
                
                <div class="topic">
                    <div class="text-content">
                        <h2>Surgimento das primeiras civilizações</h2>
                        <p><br><strong>Mesopotâmia (atual Iraque):</strong> Conhecida como "Terra entre rios" (Tigre e Eufrates), foi o local de uma das primeiras civilizações urbanas. Os sumérios criaram as primeiras cidades-estados, como Ur e Uruk, por volta de 3000 a.C. Inventaram a escrita cuneiforme.</p>
                        <p><br><strong>Egito Antigo:</strong> Civilização que se desenvolveu ao longo do rio Nilo. Conhecida pelas pirâmides, faraós e pela escrita hieroglífica. O Egito era altamente centralizado e governado por um faraó que era considerado divino.</p>
                        <p><br><strong>Civilização do Vale do Indo (atual Índia/Paquistão):</strong> Uma das mais avançadas em termos de urbanismo e planejamento. Cidades como Harappa e Mohenjo-Daro tinham sistemas de saneamento e organização sofisticados.</p>
                        <p><br><strong>China Antiga:</strong> A civilização chinesa começou às margens do rio Amarelo, com a Dinastia Xia e Shang. A China antiga desenvolveu um sistema de escrita ideográfico que é a base dos caracteres chineses atuais.</p>
                    </div>
                    <img src="primeiracivilizacao.jpg" alt="História Antiga">
                </div>
                
                <div class="topic">
                    <div class="text-content">  
                        <h2>Religião e Filosofia</h2>
                        <p><br><strong>Hinduísmo:</strong> O Hinduísmo surgiu a partir das tradições védicas por volta de 3000 a.C. As escrituras sagradas dos Vedas vêm dos povos arianos que habitaram a região do atual Irã. Os escritos dos Vedas estabeleceram um conjunto de crenças que originaram o Hinduísmo Védico, no qual havia o culto aos deuses das tribos.</p>
                        <p><br><strong>Religião egípcia e mitologias gregas e romanas:</strong> Este conjunto de crenças foi praticado no antigo Egito desde o período pré-dinástico, cerca de 3000 a.C., até o surgimento do cristianismo. Inicialmente, era uma religião politeísta por crer em várias divindades, como forças da natureza.</p>
                        <p><br><strong>Zoroastrismo:</strong> Essa crença é baseada no monoteísmo e teve início na antiga Pérsia por volta do século VI a.C. Atribui-se ao profeta Zaratustra chamado pelos gregos como Zoroastro a criação dessa doutrina que é intitulada em alusão a ele.</p>
                        <p><br><strong>Judaísmo:</strong> O Judaísmo é uma religião monoteísta que surgiu com os Israelitas no Mediterrâneo Oriental (Levante do Sul) dentro do contexto das civilizações ribeirinhas da Mesopotâmia.</p>
                    </div>
                    <img src="../imagens/judaismo.jpg" alt="Religião e Filosofia">
                </div>
            </div>
        </div>
    </div>

    <script src="antiga.js"></script>
</body>
</html>
