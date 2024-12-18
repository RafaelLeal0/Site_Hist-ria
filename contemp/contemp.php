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
    <title>História Antiga</title>
    <link rel="stylesheet" href="contemp.css">
</head>
<body>
    <div class="video-container">
        <img src="../imagens/revolucaofrancesa.jpg" alt="Egipício">
        <div class="overlay"></div>
        <div class="text-overlay">
            <h1>IDADE CONTEMPORÂNEA</h1>
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
                    <h2>O que foi a Idade Contemporânea?</h2>
                    <p> A <strong>Era Contemporânea</strong> é um período histórico que começou com a <strong>Revolução Francesa</strong> e se estende até os tempos atuais. É uma fase marcada por <strong>transformações</strong> significativas.</p> 
                    <p><br>O <strong>Estado</strong> passou a ser finalmente desvinculado da <strong>Igreja</strong> e de outras crenças. Além disso, ocorreram várias <strong>revoluções</strong>, incluindo a <strong>Revolução Industrial</strong>, que consolidou a <strong>burguesia</strong> como uma força econômica e política, estabelecendo uma nova ordem mundial: o sistema <strong>capitalista</strong>. Com esse sistema, iniciou-se a disputa de classes, que no século XX resultou na <strong>Guerra Fria</strong> e no embate entre <strong>capitalistas</strong> e <strong>socialistas</strong>. O <strong>avanço tecnológico</strong> também caracteriza a Era Contemporânea, assim como o número de conflitos (como as <strong>Primeira</strong> e <strong>Segunda Guerras Mundiais</strong>, entre outros).</p>
                    <p><br>O <strong>Brasil</strong> ingressou nesse período ainda como colônia e, desde então, transformou-se em uma <strong>monarquia</strong> e, depois, em uma <strong>república</strong>. Em todos esses governos, observamos um forte traço <strong>autoritário</strong> nas práticas de gestão do país, situação que foi modificada com a <strong>Constituição de 1988</strong>, após a <strong>Ditadura Militar</strong> e o processo de <strong>redemocratização</strong>.</p>
                </div>
                    <img id="image" src="../imagens/idadecontenporanea.jpg" alt="História Antiga">
                </div>
                <div class="topic">
                    <div class="text-content">
                    <h2><br>Revolução Francesa</h2>
                    <p><br>A <strong>Revolução Francesa</strong> foi um ciclo de mudanças radicais que ocorreu na <strong>França</strong> entre <strong>1789 e 1799</strong>, marcando o fim do <strong>absolutismo</strong> no país. Esse movimento revolucionário, além de seu caráter <strong>burguês</strong>, contou com uma forte participação popular e alcançou um elevado grau de radicalismo, dado que a situação do povo francês era <strong>precária</strong> em função da <strong>crise</strong> pela qual o país passava.</p> 
                    <p><br>Essa revolução foi um marco na história da humanidade, pois deu início a um processo que levou à <strong>universalização</strong> dos <strong>direitos sociais</strong> e das <strong>liberdades individuais</strong> por meio da <strong>Declaração dos Direitos do Homem e do Cidadão</strong>. Além disso, abriu espaço para a consolidação de um <strong>sistema republicano</strong> baseado na <strong>representatividade popular</strong>, hoje conhecido como <strong>democracia representativa</strong>. A Revolução Francesa só foi viabilizada pela difusão dos <strong>ideais iluministas</strong>.</p>
                </div>
                    <img id="image" src="../imagens/revolucaofrancesa1.jpg" alt="Surgimento das Civilizações">
                </div>
                <div class="topic">
                    <div class="text-content">  
                    <h2><br>Idade Contemporânea no Brasil</h2>
                    <p>
                        <br>Com tantas mudanças ocorrendo ao redor do mundo na <strong>Idade Contemporânea</strong>, no <strong>Brasil</strong> não foi diferente. Quando esse período começou, ainda estávamos sob o regime <strong>colonial</strong>, ou seja, éramos uma colônia portuguesa voltada para a <strong>exploração</strong>, e sequer havia entre os brasileiros um sentimento de <strong>nação</strong> unificada. Muitos anos e acontecimentos depois, passamos pela <strong>independência</strong> e nos tornamos uma <strong>monarquia</strong>.
                    </p>
                    <p>
                        <br>Governaram <strong>D. Pedro I</strong> e <strong>D. Pedro II</strong>, que conseguiram estabilizar o país, combatendo os movimentos de <strong>separatismo</strong>. No final do <strong>século XIX</strong>, o Brasil se transformou em uma <strong>república</strong>, porém com uma democracia muito restrita, já que a política continuou nas mãos apenas dos mais ricos. No contexto atual, o poder foi controlado por <strong>latifundiários</strong>, que mantiveram pessoas escravizadas por um longo tempo na história. A <strong>abolição da escravatura</strong> no Brasil foi a mais tardia das Américas, ocorrendo quase no século XX.
                    </p>
                    <p>
                        <br>Observamos também uma forte característica <strong>autoritária</strong> em nosso país, desde o governo de D. Pedro I, passando pelo <strong>coronelismo</strong> e por diversas ditaduras. Um marco para tentar romper com esse histórico político, após a <strong>redemocratização</strong> com o fim da <strong>Ditadura Militar</strong>, foi a <strong>Constituição de 1988</strong>, conhecida como <strong>Constituição Cidadã</strong>, que permanece em vigor até hoje.
                    </p></div>
                    <img id="image" src="../imagens/brasil.jpg" alt="Religião e Filosofia">
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

    <script src="contemp.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
