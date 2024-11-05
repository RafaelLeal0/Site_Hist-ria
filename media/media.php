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
    <div class="card">
        <h2>Feudalismo</h2>
        <img src="feudalismo.jpg" alt="photo1">
        <h1>Sobre</h1>  
        <h3>O feudalismo foi a forma de organização social e econômica instituída na Europa Ocidental entre os séculos V a XV, durante a Idade Média. Baseava-se em grandes propriedades de terra, chamadas de feudos, que pertenciam aos senhores feudais, e a mão de obra era servil.</h3>
        <h3> Com a queda do Império Romano do Ocidente e a invasão dos povos bárbaros entre os séculos IV e V, a Europa atravessou um período de ruralização, isto é, os moradores da cidade se deslocaram para o campo, fugindo da instabilidade provocada pela movimentação dos bárbaros.</h3>                         
    </div> 
    <div class="card">
        <h2 class="titulo1">Alta Idade Média</h2>
        <img src="feudalismo.jpg" alt="photo1">
        <h1>Sobre</h1>  
        <h3>De maneira geral, a Alta Idade Média é caracterizada pelas invasões bárbaras ao Império Romano, que provocaram sua fragmentação política e territorial. Os constantes conflitos provocaram o declínio das cidades e o crescente povoamento de áreas rurais que dariam origem, alguns séculos depois, aos feudos.</h3>
        <h3>Esse processo resultou em novos modelos de sociedade, no fim de uma estrutura política centralizada, e no fortalecimento da Igreja Católica, que era uma grande proprietária de terras.</h3>                         
    </div>
    <div class="card">
        <h2 class="titulo2">Baixa Idade Média</h2>
        <img src="feudalismo.jpg" alt="photo1">
        <h1>Sobre</h1>  
        <h3>A Baixa Idade Média, por sua vez, se estendeu dos séculos XI ao XV, e representou o período de decadência da sociedade feudal na Europa Ocidental.</h3>
        <h3>Nesse momento, há um renascimento urbano, ou seja, das cidades, baseado principalmente no crescimento comercial e marcado pela ascensão da burguesia, camada social ligada ao comércio. É também um período de centralização política, consolidado pelo enfraquecimento dos feudos e pela formação dos Estados nacionais.</h3>                         
    </div>
    <div class="card">
        <h2 class="titulo3">As Invasões Bárbaras</h2>
        <img src="feudalismo.jpg" alt="photo1">
        <h1>Sobre</h1>  
        <h3>As mudanças na Europa se iniciam, principalmente, à partir da crise do Império Romano e das invasões bárbaras. O termo bárbaro era utilizado genericamente para denominar povos, em geral de características tribais e quase nômades, que não compartilhavam a cultura greco-romana. Essa denominação incluía, por exemplo, povos germânicos como os godos, vândalos, francos, entre outros.</h3>
        <h3>Alguns desses bárbaros estabeleceram acordos com o Império e chegaram a lutar pelo exército romano como mercenários, ou seja, mediante pagamento, estabelecendo um contato relativamente pacífico. A presença dos bárbaros em regiões do Império proporcionou, inclusive, um intercâmbio cultural nas áreas de contato entre os povos, fazendo com que bárbaros e romanos incorporassem elementos culturais uns dos outros.</h3>                         
    </div>
</body>
</html>