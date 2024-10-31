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
                <li class="colaboradores"><a href="../colabo/colabo.html">Colaboradores</a></li>
                <li><a href="./logout.php"></a>Logout(Desconectar)</li>
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
                    <img src="../imagens/paleolitico.jpg" alt="Paleolítico" class="period-image">
                    <div class="period-content">
                        <h2 class="period-title">Paleolítico</h2>
                        <p class="period-description">
                            O Paleolítico, ou Idade da Pedra Lascada, é o período mais longo da história humana, abrangendo aproximadamente 3 milhões de anos até cerca de 10.000 a.C.
                        </p>
                        <p>Durante este tempo, os seres humanos eram nômades e dependiam da caça e da coleta para sobreviver.</p>
                        <ul>
                            <li><strong>Paleolítico Inferior:</strong> Produção de ferramentas de pedra, uso do fogo.</li>
                            <li><strong>Paleolítico Médio:</strong> Presença do Homo Neandertal e desenvolvimento de rituais funerários.</li>
                            <li><strong>Paleolítico Superior:</strong> Aumento da arte rupestre e das ferramentas.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period-background">
                    <img src="../imagens/mesolitico.jpg" alt="Mesolítico" class="period-image mesolitico">
                    <div class="period-content">
                        <h2 class="period-title">Mesolítico</h2>
                        <p class="period-description">
                            O Mesolítico, que ocorreu aproximadamente entre 13.000 a.C. e 9.000 a.C., é uma fase de transição entre o Paleolítico e o Neolítico. Este período é caracterizado pela mudança de hábitos de vida, em que as sociedades de caçadores-coletores começaram a se adaptar a um ambiente em mudança, decorrente do fim da última Idade do Gelo.
                        </p>
                        <p class="period-description">
                            Durante o Mesolítico, as comunidades começaram a desenvolver novas técnicas de caça e coleta, utilizando ferramentas de pedra mais avançadas, como micrólitos (pequenas lascas de pedra) que podiam ser acopladas a hastes para criar lanças e outros utensílios. 
                        </p>
                        <p class="period-description">
                            Além disso, é neste período que se observa o início da domesticação de animais, como cães, e o começo da produção de cerâmica e tecidos. A vida social tornou-se mais complexa, com a formação de grupos mais estáveis e a primeira evidência de assentamentos permanentes, embora ainda baseados na caça e coleta.
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
                            O Neolítico, a última fase da Pré-História, ocorreu aproximadamente entre 10.000 a.C. e 3.000 a.C. Este período é marcado pela Revolução Neolítica, que trouxe mudanças significativas na forma de vida dos seres humanos, principalmente com a invenção da agricultura e a domesticação de animais.
                        </p>
                        <p class="period-description">
                            As comunidades neolíticas começaram a cultivar cereais, como trigo e cevada, e a domesticar animais, como ovelhas, cabras e porcos. Isso resultou em um estilo de vida sedentário, permitindo o desenvolvimento de aldeias e, eventualmente, cidades. 
                        </p>
                        <p class="period-description">
                            Com o aumento da produção de alimentos, a população cresceu e as sociedades se tornaram mais complexas. O surgimento da propriedade privada e a especialização do trabalho levaram ao desenvolvimento de ofícios, comércio e, por fim, à formação de estruturas sociais hierárquicas.
                        </p>
                        <p class="period-description">
                            O Neolítico também é conhecido pelo avanço nas técnicas de construção e na invenção da cerâmica e da tecelagem. Os seres humanos começaram a criar artefatos e obras de arte que refletiam sua vida cotidiana e crenças espirituais. A escrita também surgiu no final do Neolítico, dando início à história registrada.
                        </p>
                    </div>
                </div>
            </div>

            <div class="curiosidades-section">
                <h2 class="curiosidades-title">Curiosidades e Resumo para Provas</h2>
                <p>
                    A Pré-História é um período fascinante e repleto de curiosidades. Aqui estão alguns pontos importantes que podem ser úteis para suas provas:
                </p>
                <ul>
                    <li>A arte rupestre encontrada em cavernas é um dos primeiros indícios de expressão artística e comunicação visual. Os desenhos de animais e figuras humanas refletem as crenças e a vida cotidiana dos nossos ancestrais.</li>
                    <li>Os Homo sapiens coexistiram com outras espécies, como o Homo neandertal, durante o Paleolítico, e há evidências de interações entre eles, incluindo cruzamentos genéticos.</li>
                    <li>A domesticação de animais, que começou no Mesolítico, foi crucial para o desenvolvimento de sociedades agrícolas e a transição para um modo de vida sedentário.</li>
                    <li>O termo "Neolítico" deriva do grego "neo" (novo) e "lithos" (pedra), referindo-se ao uso de ferramentas de pedra polida, que eram mais eficientes do que as ferramentas de pedra lascada do Paleolítico.</li>
                    <li>A invenção da agricultura permitiu o crescimento populacional e o surgimento de aldeias, que eventualmente evoluíram para cidades e civilizações mais complexas.</li>
                    <li>As primeiras cidades da história, como Jericó e Çatalhöyük, surgiram no final do Neolítico, marcando o início da Idade dos Metais e da História Antiga.</li>
                </ul>
                <p>Estude bem e boa sorte nas suas provas!</p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>