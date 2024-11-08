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
</head>
<body>
<div class="video-container">
        
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
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle" id="menuToggle">
            <span>☰</span>
        </div>    
    </div>
    <div class="card">
        <h1>Glossário</h1>
        <img src="../imagens/glossario.jpg" alt="photo1"> 
        <div class="search-bar">
        <label for="searchTerm">Buscar termo:</label>
        <input type="text" id="searchInput" placeholder="Digite o termo..." />
    <button onclick="buscarTermo()">Buscar</button>
    <button class="back-to-top" onclick="scrollToTop()">↑ Topo</button>

    </div>
        <h2>Significado dos termos</h2>
            <div class="grupo-alfa" id="grupoA">
                <h3>A</h3>
                <ul>
                    <li class="termo" data-term="Abolicionismo"><strong>Abolicionismo</strong></li>
                </ul>
                <div class="descricao" id="Abolicionismo">
                    <p>O Abolicionismo foi um movimento contra a escravidão, que se espalhou especialmente no século XIX.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Alquimia"><strong>Alquimia</strong></li>
                </ul>
                <div class="descricao" id="Alquimia">
                    <p>A Alquimia foi uma prática que combinava elementos de filosofia, medicina, química e espiritualidade.</p>
                </div>
                <ul>
                <li class="termo" data-term="Autoritarismo"><strong>Autoritarismo</strong></li>
                </ul>
                <div class="descricao" id="Autoritarismo">
                    <p>A história do Brasil tem uma forte característica autoritária, presente desde o governo de D. Pedro I, passando por diversas ditaduras.</p>
                </div>

            </div>

            <div class="grupo-alfa" id="grupoB">
                <h3>B</h3>
                <ul>
                    <li class="termo" data-term="Barroco"><strong>Barroco</strong></li>
                </ul>
                <div class="descricao" id="Barroco">
                    <p>O Barroco foi um movimento artístico que marcou o período da Idade Moderna, destacando-se pela ornamentação e expressividade.</p>
                </div>
            </div>

            <div class="grupo-alfa" id="grupoC">
                <h3>C</h3>
                <ul>
                    <li class="termo" data-term="Colonialismo"><strong>Colonialismo</strong></li>
                </ul>
                <div class="descricao" id="Colonialismo">
                    <p>O Colonialismo foi um sistema de controle territorial e exploração econômica, principalmente das Américas, Ásia e África.</p>
                </div>
                <ul>
                <ul>
                  <li class="termo" data-term="Cerâmica"><strong>Cerâmica</strong></li>
                </ul>
                <div class="descricao" id="Cerâmica">
                    <p>Surge no período Mesolítico, com a produção de utensílios de barro que facilitavam o armazenamento de alimentos e líquidos. No Neolítico, as técnicas de cerâmica se aperfeiçoaram, tornando-se uma prática comum.</p>
                </div>
                <ul>
                <li class="termo" data-term="Capitalismo"><strong>Capitalismo</strong></li>
                </ul>
                <div class="descricao" id="Capitalismo">
                    <p>Sistema econômico que se consolidou com a Revolução Industrial, caracterizado pela propriedade privada e pela busca do lucro.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Constituição de 1988"><strong>Constituição</strong> de 1988</li>
                </ul>
                <div class="descricao" id="Constituição de 1988">
                    <p>Conhecida como Constituição Cidadã, foi um marco na redemocratização do Brasil após a Ditadura Militar.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Corpos de um país"><strong>Corpos de um país</strong></li>
                </ul>
                <div class="descricao" id="Corpos de um país">
                    <p>Refere-se à maneira como o Estado se organiza, desvinculando-se da Igreja e de outras crenças.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Coronelismo"><strong>Coronelismo</strong></li>
                </ul>
                <div class="descricao" id="Coronelismo">
                    <p>Sistema político caracterizado pelo controle de políticos locais sobre a população rural.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>D</h3>
                <ul>
                    <li class="termo" data-term="Declaração dos Direitos do Homem e do Cidadão"><strong>Declaração dos Direitos do Homem e do Cidadão</strong></li>
                </ul>
                <div class="descricao" id="Declaração dos Direitos do Homem e do Cidadão">
                    <p>Documento fundamental da Revolução Francesa que estabeleceu direitos e liberdades individuais.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Democracia representativa"><strong>Democracia representativa</strong></li>
                </ul>
                <div class="descricao" id="Democracia representativa">
                    <p>Sistema de governo estabelecido na França após a Revolução Francesa, baseado na representação popular.</p>
                </div>
                <ul>
                    <li class="termo" data-term="D. Pedro II"><strong>D. Pedro II</strong></li>
                </ul>
                <div class="descricao" id="D. Pedro II">
                    <p>Segundo imperador do Brasil, que estabilizou o país e governou durante o período de maior crescimento econômico.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>E</h3>
                <ul>
                <li class="termo" data-term="Expansão Marítima"><strong>Expansão Marítima</strong></li>
                </ul>
                <div class="descricao" id="Expansão Marítima">
                  <p>Processo de navegações e descobertas iniciado no século XV por Portugal e Espanha. Motivado pela busca de riquezas, expansão territorial, difusão do cristianismo e desejo de aventura. Impulsionado pela criação da Escola de Sagres, que aprimorou a navegação com instrumentos como bússola e astrolábio.</p>
                </div>
                <ul>
                <li class="termo" data-term="Estado"><strong>Estado</strong></li>
                </ul>
                <div class="descricao" id="Estado">
                    <p>A entidade política que se tornou desvinculada da Igreja e de outras crenças, consolidando seu poder na Era Contemporânea.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>F</h3>
                <ul>
                <li class="termo" data-term="Feudalismo"><strong>Feudalismo</strong></li>
                </ul>
                <div class="descricao" id="Feudalismo">
                <p>Sistema social e econômico dominante na Europa Ocidental durante a Idade Média, baseado na posse de terras pelos senhores feudais e no trabalho servil.</p>
            </div>
            <ul>
                <li class="termo" data-term="França na Revolução Francesa"><strong>França na Revolução Francesa</strong></li>
            </ul>
            <div class="descricao" id="França na Revolução Francesa">
                <p>A Revolução Francesa ocorreu entre 1789 e 1799, marcando o fim do absolutismo e promovendo mudanças sociais e políticas.</p>
            </div>


                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>G</h3>
                <ul>
                    <li class="termo" data-term="Guerra Fria"><strong>Guerra Fria</strong></li>
                </ul>
                <div class="descricao" id="Guerra Fria">
                    <p>Conflito ideológico e político entre os blocos capitalista e socialista que se intensificou no século XX.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Guerras Mundiais"><strong>Guerras Mundiais</strong></li>
                </ul>
                <div class="descricao" id="Guerras Mundiais">
                    <p>Conflitos globais que ocorreram no século XX, impactando profundamente a história contemporânea.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>H</h3>
                <ul>
                <li class="termo" data-term="Hinduísmo"><strong>Hinduísmo</strong></li>
                </ul>
                <div class="descricao" id="Hinduísmo">
                    <p>Originado das tradições védicas, com registros antigos nos Vedas. É uma das religiões mais antigas, com início por volta de 3000 a.C. na região do atual Irã, influenciando diversas crenças e práticas.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Humanismo"><strong>Humanismo</strong></li>
                </ul>
                <div class="descricao" id="Humanismo">
                    <p>Movimento intelectual do Renascimento que celebrava o potencial humano e buscava inspiração nos clássicos.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>I</h3>
                <ul>
                    <li class="termo" data-term="Iluminismo"><strong>Iluminismo</strong></li>
                </ul>
                <div class="descricao" id="Iluminismo">
                    <p>Movimento intelectual que influenciou a Revolução Francesa e promoveu a razão e os direitos humanos.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>J</h3>
                <ul>
                <li class="termo" data-term="Judaísmo"><strong>Judaísmo</strong></li>
                </ul>
                <div class="descricao" id="Judaísmo">
                    <p>Religião monoteísta originada entre os Israelitas no Mediterrâneo Oriental. Surgiu em meio às civilizações da Mesopotâmia, com os Israelitas se considerando descendentes de Jacó.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>M</h3>
                <ul>
                <li class="termo" data-term="Micrólitos"><strong>Micrólitos</strong></li>
                </ul>
                <div class="descricao" id="Micrólitos">
                    <p>Pequenas lascas de pedra criadas no período Mesolítico, usadas em ferramentas como lanças e utensílios menores.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Movimento revolucionário"><strong>Movimento revolucionário</strong></li>
                </ul>
                <div class="descricao" id="Movimento revolucionário">
                    <p>Refere-se aos processos de mudança radical, como a Revolução Francesa e outras revoluções importantes.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>P</h3>
                <ul>
                    <li class="termo" data-term="Período de transição"><strong>Período de transição</strong></li>
                </ul>
                <div class="descricao" id="Período de transição">
                    <p>Refere-se à passagem de uma era para outra, como da Idade Média para a Idade Moderna.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Poder autoritário"><strong>Poder autoritário</strong></li>
                </ul>
                <div class="descricao" id="Poder autoritário">
                    <p>Características de regimes políticos que centralizam o poder e restringem as liberdades civis.</p>
                </div>

                
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>R</h3>
                <ul>
                <li class="termo" data-term="Renascimento"><strong>Renascimento</strong></li>
                </ul>
                <div class="descricao" id="Renascimento">
                 <p>Movimento cultural entre os séculos XIV e XVII que marcou a transição da Idade Média para a Idade Moderna. Focado na redescoberta das artes e ciências da antiguidade clássica, destacou-se pelo desenvolvimento artístico, científico e literário, impulsionando novas visões de mundo.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Revolução Científica"><strong>Revolução Científica</strong></li>
                </ul>
                <div class="descricao" id="Revolução Científica">
                    <p>Período de transformação intelectual e metodológica que ocorreu entre os séculos XVI e XVIII, promovendo o uso do método científico.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Revolução Francesa"><strong>Revolução Francesa</strong></li>
                </ul>
                <div class="descricao" id="Revolução Francesa">
                    <p>Ciclo de mudanças radicais na França entre 1789 e 1799, que levou ao fim do absolutismo e à promoção de direitos sociais.</p>
                </div>

          
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>S</h3>
                <ul>
                    <li class="termo" data-term="Sociedade burguesa"><strong>Sociedade burguesa</strong></li>
                </ul>
                <div class="descricao" id="Sociedade burguesa">
                    <p>Classe social que emergiu com o crescimento do comércio e da economia capitalista durante a Baixa Idade Média.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Sistema capitalista"><strong>Sistema capitalista</strong></li>
                </ul>
                <div class="descricao" id="Sistema capitalista">
                    <p>Sistema econômico que se consolidou com a Revolução Industrial, caracterizado pela propriedade privada e pela busca do lucro.</p>
                </div>
            </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>T</h3>
                <ul>
                <li class="termo" data-term="Tecelagem"><strong>Tecelagem</strong></li>
                </ul>
                <div class="descricao" id="Tecelagem">
                    <p>Atividade surgida no Neolítico, facilitando a confecção de roupas e outros itens a partir de fibras naturais, como parte da evolução técnica e cultural.</p>
                </div>
                <ul>
                    <li class="termo" data-term="Transição para a Idade Moderna"><strong>Transição para a Idade Moderna</strong></li>
                </ul>
                <div class="descricao" id="Transição para a Idade Moderna">
                    <p>Refere-se às mudanças sociais, políticas e econômicas que marcaram a passagem da Idade Média para a Idade Moderna.</p>
                </div>
            <div class="grupo-alfa" id="grupoC">
                <h3>Z</h3>
                <ul>
                <li class="termo" data-term="Zoroastrismo"><strong>Zoroastrismo</strong></li>
                </ul>
                <div class="descricao" id="Zoroastrismo">
                 <p>Uma das primeiras religiões monoteístas, iniciada na Pérsia por volta do século VI a.C. Baseada nos ensinamentos do profeta Zaratustra, ou Zoroastro, ela propõe uma luta entre o bem e o mal.</p>
                </div>                    
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
            const backToTopButton = document.querySelector('.back-to-top');
            if (document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        };

        
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' 
            });
        }
    
}
</script>
</body>
</html>