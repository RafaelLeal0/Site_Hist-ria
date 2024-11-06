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

            <source src="barcos.mp4" type="video/mp4">

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
                        <p><br><strong>Renascimento artístico</strong><br>
Durante o Renascimento, surgiram grandes nomes, como <strong>Leonardo da Vinci</strong>, que foi matemático, físico, inventor, entre outros talentos. É o exemplo do "homem universal", com obras-primas como a <em>Mona Lisa</em> e <em>A Última Ceia</em>. <strong>Rafael Sanzio</strong> destacou-se por retratar sentimentos delicados em suas pinturas, como na <em>Madona do Prado</em>. <strong>Michelangelo</strong> foi um dos maiores escultores e pintores da época, com obras como <em>Pietá</em>, <em>David</em> e os afrescos da Capela Sistina.</p>

<p><br><strong>Humanismo renascentista</strong><br>
O Humanismo celebrou o potencial humano e sua capacidade de compreender e transformar a natureza. Surgido na Península Itálica, buscava inspiração em pensadores antigos, como Platão e Aristóteles. Esse movimento impulsionou reflexões religiosas e deu margem a novas vertentes cristãs, como o protestantismo, além de promover o estudo das línguas clássicas, como o latim e o grego.</p>

<p><br><strong>Renascimento literário</strong><br>
O período renascentista também trouxe à tona grandes nomes da literatura. <strong>Dante Alighieri</strong> escreveu a <em>Divina Comédia</em>, enquanto <strong>Maquiavel</strong> apresentou a ciência política em <em>O Príncipe</em>. <strong>Shakespeare</strong> explorou os dilemas humanos em tragédias como <em>Romeu e Julieta</em>. Outros grandes autores incluem <strong>Miguel de Cervantes</strong>, com <em>Dom Quixote</em>, e <strong>Luís de Camões</strong>, com <em>Os Lusíadas</em>.</p>

<p><br><strong>Renascimento científico</strong><br>
O Renascimento foi marcado por avanços científicos. <strong>Nicolau Copérnico</strong> desafiou a teoria geocêntrica, propondo que a Terra gira em torno do Sol. <strong>Galileu Galilei</strong> descobriu os anéis de Saturno e satélites de Júpiter, mas foi pressionado pela Igreja. Na medicina, surgiram descobertas sobre a circulação sanguínea e anatomia.</p>

<p><br><strong>Renascimento comercial</strong><br>
O aumento do comércio na Baixa Idade Média foi essencial para as inovações renascentistas. As feiras itinerantes evoluíram para os burgos, de onde surgiram os burgueses. A necessidade de troca monetária deu origem aos primeiros bancos e mudou a maneira de valorizar produtos pela quantidade de dinheiro.</p>

                    </div>
                </div>
            </div>

            <div class="period">
                <div class="period-background">
                    <img src="../imagens/revolucao_cientifica.jpg" alt="Revolução Científica" class="period-image">
                    <div class="period-content">
                        <h2 class="period-title">Revolução Científica</h2>
                        <p class="period-description">
                         A Revolução Científica foi um período de intensa transformação intelectual e metodológica ocorrido entre os séculos XVI e XVIII, na Europa Ocidental. Suas causas incluíam o desejo de entender a natureza de forma mais precisa, a valorização do método científico e o questionamento das autoridades tradicionais.</p>
                        <p>
                        Os objetivos da <strong>Revolução Científica</strong> não eram claramente definidos ou organizados como os de um movimento social ou político; em vez disso, refletiam um conjunto de aspirações <strong>intelectuais</strong>, práticas e <strong>filosóficas</strong> que motivaram os estudiosos e pensadores da época.</p>

<p><br>Um dos principais propósitos dessa revolução era compreender e descrever os fenômenos naturais de maneira mais <strong>exata</strong> e <strong>metódica</strong>. Os estudiosos buscavam entender as leis que governam o <strong>Universo</strong> e as regularidades observáveis na natureza.</p>

<p><br>Esses cientistas procuravam criar teorias sólidas que pudessem descrever e prever os fenômenos naturais com consistência. Isso incluía o desenvolvimento de modelos <strong>matemáticos</strong>, <strong>leis físicas</strong> e teorias que fossem passíveis de testes <strong>empíricos</strong>.</p>

<p><br>A Revolução Científica incentivou o uso do <strong>método científico</strong> como uma ferramenta essencial para explorar e entender o mundo natural. Esse método envolvia a formulação de <strong>hipóteses</strong> passíveis de teste, a realização de <strong>experimentos</strong> controlados e a análise sistemática dos dados.</p>

<p><br>Outro objetivo era superar as <strong>superstições</strong> e <strong>dogmas</strong> da época. Muitos pensadores estavam comprometidos em desafiar crenças supersticiosas e dogmas religiosos que prevaleceram no pensamento medieval, buscando substituir essas explicações por interpretações baseadas em <strong>observação</strong> e <strong>raciocínio</strong>.</p>

<p><br>Alguns cientistas encaravam a busca pelo conhecimento científico como uma forma de impulsionar o <strong>progresso humano</strong> e aprimorar as condições de vida. Eles acreditavam que o avanço na <strong>ciência</strong> e na <strong>tecnologia</strong> poderia gerar uma sociedade mais <strong>próspera</strong>, <strong>saudável</strong> e <strong>justa</strong>. A Revolução Científica também foi motivada pelo desejo de explorar novas <strong>fronteiras</strong> do saber, expandindo os limites do entendimento humano sobre o Universo e os seres vivos.</p>
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
                        A partir do século XV, sob a liderança de portugueses e espanhóis, os europeus começam um processo de intensa globalização, a chamada Expansão Marítima. Este fato também ficou conhecido como as Grandes Navegações e tinha como principais objetivos: a obtenção de riquezas (atividades comerciais) tanto pela exploração da terra (minerais e vegetais) quanto pela submissão de outros seres humanos ao trabalho escravo (indígenas e africanos), pela pretensão de expansão territorial, pela difusão do cristianismo (catolicismo) para outras civilizações e também pelo desejo de aventura e pela tentativa de superar os perigos do mar (real e imaginário).</p>
                        <p>
                        <br>Os textos sobre a <strong>Expansão Marítima Europeia</strong> frequentemente retratam os mares como repletos de perigos, e os navegadores, como inexperientes e sem precisão. Isso gera a impressão de que os europeus, ao se aventurarem pelo mar, estavam perdidos e sem recursos tecnológicos. Um exemplo famoso é o relato de que os portugueses chegaram ao Brasil por engano, tentando alcançar as Índias.</p>

<p><br>Essas ideias (como a “terra quadrada”, monstros marinhos e zonas tórridas) derivam de crenças comuns na Europa do século XV, influenciadas pela <strong>Igreja Católica</strong>, que dominava o pensamento natural e espiritual e impunha censura, inclusive sobre filósofos antigos. No entanto, com o renascimento urbano e comercial, surgiu um novo entendimento do mundo, e o infante D. Henrique, em Portugal, fundou a famosa <strong>Escola de Sagres</strong>. Esse centro de estudos reuniu navegadores e estudiosos que aprimoraram instrumentos como a bússola e o astrolábio, além de desenvolver mapas e embarcações, como as <strong>caravelas</strong>, que facilitavam a navegação.</p>

<p><br>Ao compararmos mapas anteriores à Escola de Sagres, percebemos diferenças claras: antigos mapas incluíam ilustrações de monstros e anjos, refletindo crenças medievais sobre os oceanos. Além dos perigos reais (tempestades, doenças e fome), os navegadores enfrentavam medos imaginários, como o temor de monstros e de um “abismo” no fim do mar. Contudo, as inovações da Escola de Sagres ofereceram uma nova perspectiva e confiança para a <strong>Expansão Marítima Europeia</strong>.</p>

<p><br>A ideia de que os portugueses chegaram ao continente americano “por acaso” parece ser um exagero dos feitos portugueses, pois há registros de outros navegadores, como Américo Vespúcio e Vicente Pinzón, que passaram pelo Brasil antes de Pedro Álvares Cabral, ainda que sem reivindicar a terra. Esses exploradores possivelmente conheciam a rota, e, com a ajuda de instrumentos de navegação, como a bússola e o astrolábio, os portugueses certamente sabiam onde estavam.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
