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
    <title>Glossario</title>
    <link rel="stylesheet" href="glossario.css">
    <script src="glossario.js"></script>
</head>
<body>
<div class="video-container"></div>
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
            <img src="../login/logo.png" alt="logo">
        </ul>
    </nav>

    <div class="menu-toggle" id="menuToggle">
        <span>☰</span>
    </div>    
</div>

    <div class="card">
        <h1 id="ir_topo">Glossário</h1>
        <img src="../imagens/glossario.jpg" alt="photo1"> 
        <div class="search-bar">
            <label for="searchTerm">Buscar termo:</label>
            <input type="text" id="searchInput" placeholder="Digite o termo" />
            <button onclick="buscarTermo()">Buscar</button>
        </div>
    <h2>Significado dos termos</h2>

    <div class="div_alfabeto" id="alfabeto">
            
    <!-- section A -->
     <section id="sectionA">
         <h3>A</h3>
         <ul>
             <li class="termos"><strong>Abolicionismo</strong></li>
             <div class="descrição" id="Abolicionismo">
                 <p>O abolicionismo foi um movimento contra a escravidão, que se espalhou especialmente no século XIX.</p>
             </div>
 
             <li class="termos"><strong>Alquimia</strong></li>
             <div class="descrição" id="Alquimia">
                 <p>A alquimia foi uma prática que combinava elementos de filosofia, medicina, química e espiritualidade.</p>
             </div>
 
             <li class="termos"><strong>Autoritarismo</strong></li>
             <div class="descrição" id="Autoritarismo">
                 <p>A história do Brasil tem uma forte característica autoritária, presente desde o governo de D. Pedro I, passando por diversas ditaduras.</p>
             </div>
         </ul>
     </section>

    <!-- section B -->
     <section id="sectionB">
         <h3>B</h3>
         <ul>
             <li class="termos"><strong>Barroco</strong></li>
             <div class="descrição" id="Barroco">
                 <p>O Barroco foi um movimento artístico que marcou o período da Idade Moderna, destacando-se pela ornamentação e expressividade.</p>
             </div>
         </ul>    
     </section>

    <!-- section C -->
     <section id="sectionC">
         <h3>C</h3>
         <ul>
             <li class="termos"><strong>Colonialismo</strong></li>
             <div class="descrição" id="Colonialismo">
                 <p>O Colonialismo foi um sistema de controle territorial e exploração econômica, principalmente das Américas, Ásia e África.</p>
             </div>
 
             <li class="termos"><strong>Cerâmica</strong></li>
             <div class="descrição" id="Cerâmica">
                 <p>Surge no período Mesolítico, com a produção de utensílios de barro que facilitavam o armazenamento de alimentos e líquidos. No Neolítico, as técnicas de cerâmica se aperfeiçoaram, tornando-se uma prática comum.</p>
             </div>
 
             <li class="termos"><strong>Capitalismo</strong></li>
             <div class="descrição" id="Capitalismo">
                 <p>Sistema econômico que se consolidou com a Revolução Industrial, caracterizado pela propriedade privada e pela busca do lucro.</p>
             </div>
 
             <li class="termos"><strong>Constituição de 1988</strong></li>
             <div class="descrição" id="Constituição de 1988">
                 <p>Conhecida como Constituição Cidadã, foi um marco na redemocratização do Brasil após a Ditadura Militar.</p>
             </div>
 
             <li class="termos"><strong>Corpos de um país</strong></li>
             <div class="descrição" id="Corpos de um país">
                 <p>Refere-se à maneira como o Estado se organiza, desvinculando-se da Igreja e de outras crenças.</p>
             </div>
 
             <li class="termos"><strong>Coronelismo</strong></li>
             <div class="descrição" id="Coronelismo">
                 <p>Sistema político caracterizado pelo controle de políticos locais sobre a população rural.</p>
             </div>
         </ul>
     </section>

    <!-- section D -->
     <section id="sectionD">
         <h3>D</h3>
         <ul>
             <li class="termos"><strong>ColoniaDeclaração dos Direitos do Homem e do Cidadãolismo</strong></li>
             <div class="descrição" id="Declaração dos Direitos do Homem e do Cidadão">
                 <p>Documento fundamental da Revolução Francesa que estabeleceu direitos e liberdades individuais.</p>
             </div>
 
             <li class="termos"><strong>Democracia representativa</strong></li>
             <div class="descrição" id="Democracia representativa">
                 <p>Sistema de governo estabelecido na França após a Revolução Francesa, baseado na representação popular.</p>
             </div>
 
             <li class="termos"><strong>D. Pedro II</strong></li>
             <div class="descrição" id="D. Pedro II">
                 <p>Segundo imperador do Brasil, que estabilizou o país e governou durante o período de maior crescimento econômico.</p>
             </div>
         </ul>
     </section>

     <!-- section E -->
     <section id="sectionE">
         <h3>E</h3>
         <ul>
             <li class="termos"><strong>Expansão Marítima</strong></li>
             <div class="descrição" id="Expansão Marítima">
                 <p>Processo de navegações e descobertas iniciado no século XV por Portugal e Espanha. Motivado pela busca de riquezas, expansão territorial, difusão do cristianismo e desejo de aventura. Impulsionado pela criação da Escola de Sagres, que aprimorou a navegação com instrumentos como bússola e astrolábio.</p>
             </div>
 
             <li class="termos"><strong>Estado</strong></li>
             <div class="descrição" id="Estado">
                 <p>A entidade política que se tornou desvinculada da Igreja e de outras crenças, consolidando seu poder na Era Contemporânea.</p>
             </div>
         </ul>
     </section>

     <!-- section F -->
     <section id="sectionF">
         <h3>F</h3>
         <ul>
             <li class="termos"><strong>Feudalismo</strong></li>
             <div class="descrição" id="Feudalismo">
                 <p>Sistema social e econômico dominante na Europa Ocidental durante a Idade Média, baseado na posse de terras pelos senhores feudais e no trabalho servil.</p>
             </div>
 
             <li class="termos"><strong>França na Revolução Francesa</strong></li>
             <div class="descrição" id="França na Revolução Francesa">
                 <p>A Revolução Francesa ocorreu entre 1789 e 1799, marcando o fim do absolutismo e promovendo mudanças sociais e políticas.</p>
             </div>
         </ul>
     </section>

     <!-- section G -->
     <section id="sectionG">
         <h3>G</h3>
         <ul>
             <li class="termos"><strong>Guerra Fria</strong></li>
             <div class="descrição" id="Guerra Fria">
                 <p>Conflito ideológico e político entre os blocos capitalista e socialista que se intensificou no século XX.</p>
             </div>
 
             <li class="termos"><strong>Guerras Mundiais</strong></li>
             <div class="descrição" id="Guerras Mundiais">
                 <p>Conflitos globais que ocorreram no século XX, impactando profundamente a história contemporânea.</p>
             </div>
         </ul>
     </section>

     <!-- section H -->
     <section id="sectionH">
         <h3>H</h3>
         <ul>
             <li class="termos"><strong>Hinduísmo</strong></li>
             <div class="descrição" id="Hinduísmo">
                 <p>Originado das tradições védicas, com registros antigos nos Vedas. É uma das religiões mais antigas, com início por volta de 3000 a.C. na região do atual Irã, influenciando diversas crenças e práticas.</p>
             </div>
 
             <li class="termos"><strong>Humanismo</strong></li>
             <div class="descrição" id="Humanismo">
                 <p>Movimento intelectual do Renascimento que celebrava o potencial humano e buscava inspiração nos clássicos.</p>
             </div>
         </ul>
     </section>

     <!-- section I -->
     <section id="sectionI">
         <h3>I</h3>
         <ul>
             <li class="termos"><strong>Iluminismo</strong></li>
             <div class="descrição" id="Iluminismo">
                 <p>Movimento intelectual que influenciou a Revolução Francesa e promoveu a razão e os direitos humanos.</p>
             </div>
         </ul>
     </section>

     <!-- section J -->
     <section id="sectionJ">
         <h3>J</h3>
         <ul>
             <li class="termos"><strong>Judaísmo</strong></li>
             <div class="descrição" id="Judaísmo">
                 <p>Religião monoteísta originada entre os Israelitas no Mediterrâneo Oriental. Surgiu em meio às civilizações da Mesopotâmia, com os Israelitas se considerando descendentes de Jacó.</p>
             </div>
         </ul>
     </section>

     <!-- section K -->
     <section id="sectionK">
         <h3>K</h3>
         <ul>
             <li class="termos"><strong>K</strong></li>
             <div class="descrição" id="K">
                 <p>K</p>
             </div>
         </ul>
     </section>

     <!-- section L -->
     <section id="sectionL">
         <h3>L</h3>
         <ul>
             <li class="termos"><strong>L</strong></li>
             <div class="descrição" id="L">
                 <p>L</p>
             </div>
         </ul>
     </section>

     <!-- section M -->
     <section id="sectionM">
         <h3>M</h3>
         <ul>
             <li class="termos"><strong>Micrólitos</strong></li>
             <div class="descrição" id="Micrólitos">
                 <p>Pequenas lascas de pedra criadas no período Mesolítico, usadas em ferramentas como lanças e utensílios menores.</p>
             </div>
 
             <li class="termos"><strong>Movimento revolucionário</strong></li>
             <div class="descrição" id="Movimento revolucionário">
                 <p>Refere-se aos processos de mudança radical, como a Revolução Francesa e outras revoluções importantes.</p>
             </div>
         </ul>
     </section>

     <!-- section N -->
     <section id="sectionN">
         <h3>N</h3>
         <ul>
             <li class="termos"><strong>N</strong></li>
             <div class="descrição" id="N">
                 <p>N</p>
             </div>
         </ul>
     </section>

     <!-- section O -->
     <section id="sectionO">
         <h3>O</h3>
         <ul>
             <li class="termos"><strong>O</strong></li>
             <div class="descrição" id="O">
                 <p>O</p>
             </div>
         </ul>
     </section>

     <!-- section P -->
     <section id="sectionP">
         <h3>P</h3>
         <ul>
             <li class="termos"><strong>Período de transição</strong></li>
             <div class="descrição" id="Período de transição">
                 <p>Refere-se à passagem de uma era para outra, como da Idade Média para a Idade Moderna.</p>
             </div>
 
             <li class="termos"><strong>Poder autoritário</strong></li>
             <div class="descrição" id="Poder autoritário">
                 <p>Características de regimes políticos que centralizam o poder e restringem as liberdades civis.</p>
             </div>
         </ul>
     </section>

     <!-- section Q -->
     <section id="sectionQ">
         <h3>Q</h3>
         <ul>
             <li class="termos"><strong>Q</strong></li>
             <div class="descrição" id="Q">
                 <p>Q</p>
             </div>
         </ul>
     </section>

     <!-- section R -->
     <section id="sectionR">
         <h3>R</h3>
         <ul>
             <li class="termos"><strong>Renascimento</strong></li>
             <div class="descrição" id="Renascimento">
                 <p>Movimento cultural entre os séculos XIV e XVII que marcou a transição da Idade Média para a Idade Moderna. Focado na redescoberta das artes e ciências da antiguidade clássica, destacou-se pelo desenvolvimento artístico, científico e literário, impulsionando novas visões de mundo.</p>
             </div>
 
             <li class="termos"><strong>Revolução Científica</strong></li>
             <div class="descrição" id="Revolução Científica">
                 <p>Período de transformação intelectual e metodológica que ocorreu entre os séculos XVI e XVIII, promovendo o uso do método científico.</p>
             </div>
 
             <li class="termos"><strong>Revolução Francesa</strong></li>
             <div class="descrição" id="Revolução Francesa">
                 <p>Ciclo de mudanças radicais na França entre 1789 e 1799, que levou ao fim do absolutismo e à promoção de direitos sociais.</p>
             </div>
         </ul>
     </section>

     <!-- section S -->
     <section id="sectionS">
         <h3>S</h3>
         <ul>
             <li class="termos"><strong>Sociedade burguesa</strong></li>
             <div class="descrição" id="Sociedade burguesa">
                 <p>Classe social que emergiu com o crescimento do comércio e da economia capitalista durante a Baixa Idade Média.</p>
             </div>
 
             <li class="termos"><strong>Sistema capitalista</strong></li>
             <div class="descrição" id="Sistema capitalista">
                 <p>Sistema econômico que se consolidou com a Revolução Industrial, caracterizado pela propriedade privada e pela busca do lucro.</p>
             </div>
         </ul>
     </section>

     <!-- section T -->
     <section id="sectionT">
         <h3>T</h3>
         <ul>
             <li class="termos"><strong>Tecelagem</strong></li>
             <div class="descrição" id="Tecelagem">
                 <p>Atividade surgida no Neolítico, facilitando a confecção de roupas e outros itens a partir de fibras naturais, como parte da evolução técnica e cultural.</p>
             </div>
 
             <li class="termos"><strong>Transição para a Idade Moderna</strong></li>
             <div class="descrição" id="Transição para a Idade Moderna">
                 <p>Refere-se às mudanças sociais, políticas e econômicas que marcaram a passagem da Idade Média para a Idade Moderna.</p>
             </div>
         </ul>
     </section>

     <!-- section U -->
     <section id="sectionU">
         <h3>U</h3>
         <ul>
             <li class="termos"><strong>U</strong></li>
             <div class="descrição" id="U">
                 <p>U</p>
             </div>
         </ul>
     </section>

     <!-- section V -->
     <section id="sectionV">
         <h3>V</h3>
         <ul>
             <li class="termos"><strong>V</strong></li>
             <div class="descrição" id="V">
                 <p>V</p>
             </div>
         </ul>
     </section>

     <!-- section W -->
     <section id="sectionW">
         <h3>W</h3>
         <ul>
             <li class="termos"><strong>W</strong></li>
             <div class="descrição" id="W">
                 <p>W</p>
             </div>
         </ul>
     </section>

     <!-- section X -->
     <section id="sectionX">
         <h3>X</h3>
         <ul>
             <li class="termos"><strong>X</strong></li>
             <div class="descrição" id="X">
                 <p>X</p>
             </div>
         </ul>
     </section>

     <!-- section Y -->
     <section id="sectionY">
         <h3>Y</h3>
         <ul>
             <li class="termos"><strong>Y</strong></li>
             <div class="descrição" id="Y">
                 <p>Y</p>
             </div>
         </ul>
     </section>

     <!-- section Z -->
     <section id="sectionZ">
         <h3>Z</h3>
         <ul>
             <li class="termos"><strong>Zoroastrismo</strong></li>
             <div class="descrição" id="Zoroastrismo">
                 <p>Uma das primeiras religiões monoteístas, iniciada na Pérsia por volta do século VI a.C. Baseada nos ensinamentos do profeta Zaratustra, ou Zoroastro, ela propõe uma luta entre o bem e o mal.</p>
             </div>
         </ul>
     </section>
    </div>

<script>
    document.getElementById('menuToggle').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    });

    function buscarTermo() {
        const termoPesquisa = document.getElementById('searchInput').value.trim().toLowerCase();
        const termos = document.querySelectorAll('.termo'); 
        let encontrado = false;

        termos.forEach((termo) => {
            const termoTexto = termo.textContent.trim().toLowerCase();
            
            if (termoTexto === termoPesquisa) {
                termo.scrollIntoView({ behavior: 'smooth', block: 'center' });
                termo.style.backgroundColor = 'black'; 
                encontrado = true;

                setTimeout(() => {
                    termo.style.backgroundColor = '';
                }, 1500);
            }
        });

        if (!encontrado) {
            alert("Termo não encontrado no glossário.");
        }
        window.onscroll = function() {
            const backToTopButton = document.querySelector(".back-to-top");
            if (window.scrollY > 200) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        }
    }

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

<footer>
        <a href="#ir_topo">
        <button class="Btn">
  <svg height="1.2em" class="arrow" viewBox="0 0 512 512"><path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"></path></svg>
</button>
        </a>
    </footer>

</body>
</html>