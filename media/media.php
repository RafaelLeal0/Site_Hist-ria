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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Média</title>
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <div class="video-container">
      <img src="idade-media.jpg" alt="idade-media">
        <div class="overlay"></div>
        <div class="text-overlay">
            <h1>IDADE MÉDIA</h1>
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
    </div>
    <div class="content">
            <div class="card">
                <div class="topic">
                    <div class="text-content">
                        <h2>O que foi?</h2>
                        <p><br>A Idade Média é o nome do período da história localizado entre os anos 476 e 1453. A nomeação “Idade Média” é utilizada pelos historiadores dentro de uma periodização que engloba quatro idades: Antiga, Média, Moderna e Contemporânea. Quando nos referimos à Idade Média, geralmente referimo-nos a assuntos relacionados, direta ou indiretamente, com a Europa. </p>
                        <p><br>A Idade Média iniciou-se com a desagregação do Império Romano do Ocidente, no século V. Isso deu início a um processo de mescla da cultura latina, oriunda dos romanos, e da cultura germânica, oriunda dos povos que invadiram e instalaram-se nas terras que pertenciam a Roma, na Europa Ocidental.</p>
                    </div>
                    <img src="foto1.jpg" alt="Idade Média">
                </div>
                
                <div class="topic">
                    <div class="text-content">
                        <h2>Feudalismo</h2>
                        <p><br>O feudalismo é o termo que usamos para toda organização social, política, cultural, ideológica e econômica que existiu na Europa durante a Idade Média. Esse conceito explica a estruturação da sociedade da Europa Ocidental, e a organização que ele representa existiu, na sua forma clássica, entre os séculos XI e XIII, aproximadamente.</p>
                        <p><br>Do século V ao século X, o feudalismo estava em processo de estruturação, uma vez que as relações políticas características da vassalagem estavam em formação, o poder da Igreja Católica estabelecia-se aos poucos, e a ruralização e feudalização da Europa desenvolviam-se.</p>
                        <p><br>Do século XI ao século XIII, o feudalismo estava no seu auge, sobretudo nas regiões que hoje correspondem à Alemanha, à França, e ao norte da Itália e da Inglaterra.<strong> A partir do século XIV, o sistema feudal entra em decadência</strong>, uma vez que a Europa urbanizava-se e o comércio ganhava importância.</p>
                        <p><br>No aspecto econômico, podemos dizer que o feudalismo era um sistema baseado na produção agrícola e na exploração servil dos camponeses. Com o fim do Império Romano, a Europa Ocidental ruralizou-se e as pessoas empobrecidas passaram a estabelecer-se nas cercanias de grandes propriedades rurais, à procura de comida e proteção. Dessa situação criou-se a relação de dependência entre o senhor feudal e o camponês.</p>
                    </div>
                    <img src="feudalismo.jpg" alt="Idade Média">
                </div>
                
                <div class="topic">
                    <div class="text-content">  
                        <h2>Alta Idade Média</h2>
                        <p><br>A Alta Idade Média foi um período de instabilidade e insegurança generalizada, que se estendeu do século V ao século X. Nesse período destacaram-se:</p>
                        <br><ul><li><strong>Os Reinos Germânicos</strong> – os germânicos eram povos estabelecidos ao longo das fronteiras do Império Romano. Os romanos os chamavam de "bárbaros", por serem estrangeiros e não falarem o latim. Os germanos formaram vários Reinos Germânicos no território romano;</li></ul>                        <br><ul><li><strong>O Reino Cristão dos Francos</strong> – o reino dos francos constituiu o reino mais poderoso da Europa Ocidental;</li></ul>
                        <br><ul><li><strong>A Igreja e o Sacro Império</strong> – A Igreja Católica Medieval teve importante papel na sociedade. Foi nessa época que começou a organizar-se, visando zelar pela homogeneidade dos princípios da religião cristã e promover a conversão dos pagãos.</li></ul>
                        <br><ul><li><strong>O Sistema Feudal</strong> – o feudalismo começou a se formar no século V, na Europa Ocidental, com a crise do Império Romano.</li></ul>
                        <br><ul><li><strong>O Império Bizantino</strong> – estabelecido em Constantinopla, o Império Bizantino sobreviveu a invasões bárbaras e perdurou por todo o período medieval.</li></ul>
                        <br><ul><li><strong>Os Árabes e o Islamismo</strong> – no Oriente Médio, na península arábica, nasceu em 630 o Islão, como resultado das Guerras Santas empreendidas por Maomé. Lentamente, o Islamismo se expandiu por um extenso território, conquistando terras da Ásia, África e Europa.</li></ul>

                    </div>
                    <img src="alta-idade-media.jpg" alt="Idade Média">
                </div>

                <div class="topic">
                    <div class="text-content">  
                        <h2>Baixa Idade Média</h2>
                        <p><br>A Baixa Idade Média é o período que vai do século XI ao século XV. Destacaram-se nessa época:</p>
                        <br><ul><li><strong>Crise do Feudalismo;</strong></li></ul>
                        <br><ul><li><strong>As cruzadas e a expansão das sociedades cristãs;</strong></li></ul>
                        <br><ul><li><strong>O ressurgimento urbano na Europa;</</strong></li></ul>      
                        <br><ul><li><strong>O renascimento comercial europeu;</strong></li></ul>      
                        <br><ul><li><strong>A formação das monarquias nacionais europeias;</strong></li></ul>      
                        <br><ul><li><strong>A cultura medieval;</strong></li></ul>      
                        <br><ul><li><strong>Peste Negra;</strong></li></ul>      
                        <p><br>Durante a Baixa Idade Média, com a expansão dos turcos-otomanos no século XIV, tomando os Bálcãs e a Ásia Menor, o Império Bizantino acabou reduzido à cidade de Constantinopla.</p>
                        <p><br>A Queda, em 1453, foi um fato histórico que marcou o fim da Idade Média na Europa. A conquista da capital bizantina pelo Império Otomano sob o comando do sultão Maomé II, marcou o fim do Império Romano no Ocidente.</p>
                    </div>
                    <img src="baixa-idade-media.jpg" alt="Idade Média">
                </div>
            </div>
        </div>
    </div>
    <script src="media.js"></script>
</body>
</html>