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
    <title>Idade Moderna</title>
    <link rel="stylesheet" href="moderna.css">
</head>
<body>
    <div class="video-container">
      <img src="idade-moderna.jpg" alt="idade-moderna">
        <div class="overlay"></div>
        <div class="text-overlay">
            <h1>IDADE MODERNA</h1>
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
            <?php if ($tipo_usuario === 'administrador') : ?>
            <button id="addTopicBtn" class="add-topic-btn">+</button>
            <?php endif; ?>
            <div class="card">
                <div class="topic">
                    <div class="text-content">
                        <h2>O que é a Idade Moderna?</h2>
                        <p><br>Dentro da periodização clássica utilizada na História, a Idade Moderna é um dos períodos da história humana e sucedeu a Idade Média e antecedeu a Idade Contemporânea. Cronologicamente, a Idade Moderna começou com a conquista de Constantinopla pelos otomanos em 1453 e se encerrou com a tomada da Bastilha em 1789.</p>
                        <p><br>A Idade Média iniciou-se com a desagregação do Império Romano do Ocidente, no século V. Isso deu início a um processo de mescla da cultura latina, oriunda dos romanos, e da cultura germânica, oriunda dos povos que invadiram e instalaram-se nas terras que pertenciam a Roma, na Europa Ocidental.</p>
                    </div>
                    <img src="constantinopla.jpg" alt="Idade Moderna">
                </div>
                
                <div class="topic">
                    <div class="text-content">
                        <h2>Renascimento</h2>
                        <p><br>O Renascimento foi um movimento cultural que marcou a transição da Idade Média para a Idade Moderna, caracterizado pelo ressurgimento das artes, ciências e cultura clássica.</p>
                        <p><br>Inspirado nos valores da Antiguidade Clássica e gerado pelas modificações econômicas e sociais ocorridas na Baixa Idade Média, o Renascimento reformulou a vida medieval e deu início à Idade Moderna.</p>
                        <p><br>O termo Renascimento foi criado no século XVI para descrever o movimento artístico que surgiu um século antes. Posteriormente, esse conceito acabou incorporando também as mudanças sociais e políticas do período, embora sua ideia apresente contestações hoje em dia.</p>
                        <p><br>Afinal, o surgimento do Renascimento ocorreu nas próprias cidades medievais, desenvolvidas dentro do longo processo de retomada das rotas de comércio entre a Europa e o Oriente. Destacam-se principalmente as cidades situadas na Península Itálica, como Veneza, Gênova, Florença e Roma, centros de grande importância para o Renascimento Cultural.</p>
                    </div>
                    <img src="renascimento.jpg" alt="Idade Moderna">
                </div>
                
                <div class="topic">
                    <div class="text-content">  
                        <h2>A Revolução Científica</h2>
                        <p><br>A Revolução Científica foi um período de intensa transformação intelectual e metodológica ocorrido entre os séculos XVI e XVIII, na Europa Ocidental. Suas causas incluíam o desejo de entender a natureza de forma mais precisa, a <strong>valorização do método científico</strong> e o questionamento das autoridades tradicionais."</p>
                        <p><br>Seus objetivos eram promover o avanço do conhecimento, eliminar superstições e dogmas, e explorar novas fronteiras do saber. Durante esse período, houve descobertas fundamentais, como o heliocentrismo, as leis do movimento de Newton, avanços na astronomia e na anatomia, entre outras.</p>
                        <p><br>Durante a Revolução Científica, houve uma mudança gradual do pensamento baseado na autoridade e na tradição para um <strong>método mais sistemático de investigação,</strong> por meio observação, experimentação e formulação de hipóteses testáveis. Esse método tornou-se fundamental para o progresso científico.</p>
                        <p><br>As ideias de Aristóteles, que haviam dominado o pensamento ocidental por séculos, começaram a ser questionadas e substituídas por <strong>novas teorias e conceitos.</strong> Por exemplo, a visão geocêntrica do Universo, defendida por Aristóteles e Ptolomeu, foi gradualmente substituída pela teoria heliocêntrica, de Copérnico e Galileu.</p>

                    </div>
                    <img src="rev-cientif.jpg" alt="Idade Moderna">
                </div>

                <div class="topic">
                    <div class="text-content">  
                        <h2>Expansão Marítima</h2>
                        <p><br>A expansão marítima europeia foi o período compreendido entre os séculos XV e XVIII, quando alguns povos europeus partiram para explorar o oceano que os rodeava.</p>
                        <p><br>Estas viagens estão inseridas no contexto da Revolução Comercial e resultaram no encontro de culturas diferentes, na exploração colonial dos territórios chamados pelos europeus do Novo Mundo e na interligação dos continentes.</p>
                        <p><br>As primeiras grandes navegações dos europeus permitiram a superação das barreiras comerciais da Idade Média, o desenvolvimento da economia mercantil e o fortalecimento da burguesia.</p>
                        <p><br>A necessidade do europeu lançar-se ao mar resultou de uma série de fatores sociais, políticos, econômicos e tecnológicos.</p>
                        <p><br>A Europa saía da crise do século XIV e as monarquias nacionais eram levadas a novos desafios que resultaram na expansão para outros territórios.</p>

                    </div>
                    <img src="expans-marit.jpg" alt="Idade Média">
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

</body>
</html>
