<?php
session_start();

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: ../index.php");
    exit();
}

$email_usuario = $_SESSION['email_sessao'];
$tipo_usuario = $_SESSION['tipo_sessao'];

function verificarPermissao($tipo_necessario) {
    global $tipo_usuario;
    if ($tipo_usuario !== $tipo_necessario) {
        header("Location: ../acesso-negado.php");
        exit();
    }
}
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
      <img src="pre-historia.jpeg" alt="primitiva">
        <div class="overlay"></div>
        <div class="text-overlay">
            <h1>PRÉ HISTÓRIA</h1>
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
                <li><a href="../logout.php" id="logout">Logout</a></li>
                <img id="logo" src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div>    

        <div class="content">
            <?php if ($tipo_usuario === 'administrador') : ?>
            <button id="addTopicBtn" class="add-topic-btn">+</button>
            <?php endif; ?>
            <div class="card">
                <div class="topic">
                    <div class="text-content">
                        <h2>O que foi a Pré História?</h2>
                        <p><br>A Pré-História é como conhecemos o período que acompanha a evolução humana a partir do momento que os hominídeos começaram a usar ferramentas de pedra. Encerrou-se com o surgimento da escrita, que aconteceu entre 3.500 a.C. e 3.000 a.C.</p>
                        <p><br>A Pré-História é, basicamente, dividida entre <strong>Paleolítico, Mesolítico</strong> (período intermediário) e <strong>Neolítico.</strong> Nesses períodos, acompanhamos o desenvolvimento dos hominídeos com a elaboração de novas ferramentas, além do surgimento do homo sapiens sapiens, há cerca de 300 mil anos.</p>
                    </div>
                    <img src="pre-historia.jpg" alt="pré-história">
                </div>
                
                <div class="topic">
                    <div class="text-content">
                        <h2>Paleolítico</h2>
                        <p><br>O período Paleolítico é conhecido também como <strong>Idade da Pedra Lascada</strong> e esse nome faz referência aos objetos que eram utilizados pelo homem para sua sobrevivência, que eram produzidos exatamente de pedra lascada. Esse período estendeu-se de <strong>3 milhões de anos atrás a 10.000 a.C.</strong> e foi subdividido em três fases que são <strong>Paleolítico Inferior, Médio e Superior.</strong></p>
                        <p><br>Cada um desses períodos possui as suas particularidades e veremos um breve resumo de cada uma delas, começando pelo <strong>Paleolítico Inferior</strong>. Esse período começa a ser contado exatamente quando os hominídeos começaram a ter a habilidade de produzir as primeiras ferramentas para sua sobrevivência.</p>
                        <p><br>Essas ferramentas foram obra do homo habilis e do homo erectus (o primeiro hominídeo a ficar numa posição totalmente ereta). Essa fase estendeu-se de <strong>3 milhões de anos atrás a 250 mil anos atrás</strong>.</p>                    </div>
                    <img src="paleolitico.jpg" alt="primitiva">
                </div>
                
                <div class="topic">
                    <div class="text-content">  
                        <h2>Mesolítico</h2>
                        <p><br>O Mesolítico é uma <strong>fase intermediária</strong> entre o Paleolítico e o Neolítico que aconteceu em determinadas partes do mundo. Os especialistas em Pré-História destacam que o Mesolítico aconteceu, sobretudo, em locais onde houve <strong>glaciações intensas</strong>. Aconteceu na <strong>Europa</strong> e em partes da <strong>Ásia</strong> e estendeu-se, aproximadamente, entre 13.000 a.C. e 9.000 a.C.</p>
                        <p><br>Esse período marcou a decadência dos agrupamentos humanos que viviam exclusivamente da caça em detrimento daqueles que eram caçadores e coletores. Ficou marcado também pelo <strong>desenvolvimento da olaria</strong> (produção de cerâmica) e da técnica para <strong>produção de tecidos</strong>. Considera-se o fim desse período o momento em que a agricultura foi desenvolvida.</p>
                        <p><br>Por ser um período de transição, o Mesolítico marca as inúmeras transformações ocorridas na forma de viver dos hominídeos e na formação da <strong>Terra</strong>. Nesse período, <strong>o planeta sofreu alterações climáticas e geológicas</strong> que propiciaram um ambiente favorável para que os homens saíssem das cavernas e exercessem atividades na natureza. Com o fim do período glacial, quando a temperatura era baixa, o ambiente se tornou mais ameno.</p>
                        <p><br>Com o clima favorável, não havia mais a necessidade de os grupos humanos se deslocarem de um lugar para outro para se proteger das intempéries naturais. Isso favoreceu o <strong>início da sedentarização</strong> desses grupos, ou seja, a permanência em um único lugar para viver, o que seria comum no Neolítico, período que sucedeu o Mesolítico.</p>

                    </div>
                    <img src="mesolítico.jpg" alt="primitiva">
                </div>

                <div class="topic">
                    <div class="text-content">  
                        <h2>Neolítico</h2>
                        <p><br>O Neolítico é a <strong>última fase</strong> do período pré-histórico e estendeu-se de <strong>10.000 a.C. até 3.000 a.C</strong>. Essas datas (que são aproximativas) assinalam dois marcos importantes para a história do desenvolvimento humano. Primeiro, houve o <strong>surgimento da agricultura</strong>, um importante marco para a sobrevivência do homem e, por fim, houve o <strong>desenvolvimento da escrita.</strong></p>
                        <p><br>Com o desenvolvimento da agricultura, o homem conseguiu mudar radicalmente o seu estilo de vida, uma vez que a agricultura permitia o homem fixar-se em um só local (<strong>sedentarização</strong> do homem), sobrevivendo de tudo o que ele produzia. O domínio da agricultura também levou o homem a desmatar a floresta e desenvolver campos de plantio.</p>
                        <p><br>Junto do desenvolvimento da agricultura veio também a <strong>domesticação dos animais</strong>, que auxiliava o homem no transporte de carga, na agricultura, como animal de tração, servia de alimento e até mesmo como meio de transporte. Todas essas novidades, que possibilitaram a sedentarização humana, resultaram na formação de enormes agrupamentos humanos que, com o tempo e conforme cresciam, tornaram-se as <strong>primeiras cidades do mundo</strong>.</p>
                        <p><br>O Neolítico também ficou marcado pelo desenvolvimento da <strong>arquitetura</strong>, o que permitia o homem construir casas de pedra e construções megalíticas. Essas últimas, até hoje, não tiveram sua finalidade muito bem esclarecidas pela arqueologia. A olaria surgiu em muitos lugares e foi aprimorada em outros.</p>
                        <p><br>O fim do período Neolítico ficou marcado pelo desenvolvimento da <strong>metalurgia</strong>, isto é, a capacidade de produzir ferramentas a partir da fundição de metal e pelo desenvolvimento da primeira forma de escrita da humanidade, a <strong>escrita cuneiforme</strong>.</p>

                    </div>
                    <img src="neolitico.jpg" alt="primitiva">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="addTopicModal">
    <h2>Adicionar Novo Tópico</h2>
    <form id="addTopicForm" enctype="multipart/form-data" action="./add_topic.php" method="POST">
        <label for="topicTitle">Título:</label>
        <input type="text" id="topicTitle" name="topicTitle" required>
        
        <label for="topicText">Texto:</label>
        <textarea id="topicText" name="topicText" rows="5" required></textarea>
        
        <label for="topicImage">Imagem:</label>
        <input type="file" id="topicImage" name="topicImage" accept="image/*" required>
        
        <button type="submit">Adicionar</button>
    </form>
</div>
<div class="modal-overlay" id="modalOverlay"></div>

    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</body>
</html>
