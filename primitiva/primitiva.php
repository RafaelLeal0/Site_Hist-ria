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
    <title>História Primitiva</title>
    <link rel="stylesheet" href="primitivo.css">

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
                <li><a href="../glossario/glossario.php">Glossario</a></li>
                <li class="colaboradores"><a href="../colabo/colabo.php">Colaboradores</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle-custom" id="menuToggleCustom">
            <span>☰</span>
        </div>

        <div class="prehistoria-section-custom">


            <div class="period">
                <div class="period-background">
                    <h1 class="prehistoria-title">Pré-História</h1>
                    <img src="../imagens/primitivo.jpg" alt="Paleolítico" class="period-image">
                    <div class="period-content">
                    <h2 class="period-title">Paleolítico</h2>
<p><br>O <strong>Paleolítico</strong>, também conhecido como <strong>Período da Pedra Lascada</strong>, é marcado pelo uso de pedras para criar lanças e objetos cortantes. Ele é dividido em três fases: <strong>Inferior</strong>, <strong>Médio</strong> e <strong>Superior</strong>.</p>

<p><br><strong>Paleolítico Inferior (2,5 milhões a 250 mil anos a.C.)</strong><br>
<br>O período mais antigo da <strong>Pré-História</strong>. Os primeiros hominídeos usavam pedras lascadas para fabricar ferramentas. A <strong>caça</strong> era essencial, aproveitando-se a carne para alimentação e a pele para se aquecer. Nesse período, houve a primeira <strong>divisão de trabalho</strong>: os homens caçavam e protegiam, enquanto as mulheres cuidavam das crianças e coletavam vegetais e frutos.</p>

<p><br><strong>Paleolítico Médio (250 mil a 50 mil anos a.C.)</strong><br>
<br>Durante o Paleolítico Médio, surgiram mudanças significativas, como a <strong>descoberta e o uso do fogo</strong> para iluminação, proteção e preparação de alimentos. Também começaram as primeiras <strong>práticas religiosas</strong>, especialmente nos <strong>ritos de sepultamento</strong>, com objetos e vestes que sugerem crenças sobre a morte.</p>

<p><br><strong>Paleolítico Superior (50 mil a 12 mil anos a.C.)</strong><br>
<br>Com o <strong>conhecimento acumulado</strong>, os hominídeos melhoraram suas técnicas de caça, construindo armadilhas para capturar animais maiores. As intensas <strong>mudanças climáticas</strong> da época, como a glaciação, incentivaram os grupos a permanecer mais tempo nas cavernas, onde o fogo lhes fornecia luz e aquecimento. Foi também quando a <strong>pintura rupestre</strong> tornou-se comum.</p>

                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period-background">
                    <img src="../imagens/mesolitico.jpg" alt="Mesolítico" class="period-image mesolitico">
                    <div class="period-content">
                    <h2 class="period-title">Mesolítico</h2>
<p class="period-description">
    O <strong>Mesolítico</strong>, que ocorreu aproximadamente entre <strong>13.000 a.C. e 9.000 a.C.</strong>, é uma fase de transição entre o Paleolítico e o Neolítico. Este período é caracterizado pela <strong>mudança de hábitos de vida</strong>, em que as sociedades de caçadores-coletores começaram a se adaptar a um ambiente em transformação, decorrente do fim da última Idade do Gelo.
</p>
<p class="period-description">
    Durante o Mesolítico, as comunidades começaram a desenvolver <strong>novas técnicas de caça e coleta</strong>, utilizando ferramentas de pedra mais avançadas, como <strong>micrólitos</strong> (pequenas lascas de pedra) que podiam ser acopladas a hastes para criar lanças e outros utensílios.
</p>
<p class="period-description">
    Além disso, é neste período que se observa o início da <strong>domesticação de animais</strong>, como cães, e o começo da <strong>produção de cerâmica e tecidos</strong>. A vida social tornou-se mais complexa, com a formação de grupos mais estáveis e as primeiras evidências de <strong>assentamentos permanentes</strong>, embora ainda baseados na caça e coleta.
</p>

                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period-background">
                    <img src="../imagens/neolitico.jpg" alt="Neolítico" class="period-image">
                    <div class="period-content">
                    <h2 class="period-title">Neolítico</h2>
<p class="period-description">
    O <strong>Neolítico</strong>, a última fase da Pré-História, ocorreu aproximadamente entre <strong>10.000 a.C. e 3.000 a.C.</strong> Este período é marcado pela <strong>Revolução Neolítica</strong>, que trouxe mudanças significativas na forma de vida dos seres humanos, principalmente com a invenção da <strong>agricultura</strong> e a <strong>domesticação de animais</strong>.
</p>
<p class="period-description">
    As comunidades neolíticas começaram a cultivar <strong>cereais</strong>, como trigo e cevada, e a domesticar animais, como ovelhas, cabras e porcos. Isso resultou em um estilo de vida <strong>sedentário</strong>, permitindo o desenvolvimento de aldeias e, eventualmente, cidades.
</p>
<p class="period-description">
    Com o aumento da <strong>produção de alimentos</strong>, a população cresceu e as sociedades se tornaram mais complexas. O surgimento da <strong>propriedade privada</strong> e a especialização do trabalho levaram ao desenvolvimento de <strong>ofícios</strong>, comércio e, por fim, à formação de estruturas sociais hierárquicas.
</p>
<p class="period-description">
    O Neolítico também é conhecido pelo avanço nas <strong>técnicas de construção</strong> e na invenção da <strong>cerâmica</strong> e da <strong>tecelagem</strong>. Os seres humanos começaram a criar artefatos e obras de arte que refletiam sua vida cotidiana e crenças espirituais. A <strong>escrita</strong> também surgiu no final do Neolítico, dando início à história registrada.
</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
