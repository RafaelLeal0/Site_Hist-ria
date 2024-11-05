<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Moderna</title>
    <link rel="stylesheet" href="glossario.css">
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
                <li class="colaboradores"><a href="../colabo/colabo.php">Colaboradores</a></li>
                <img src="../login/logo.png" alt="logo">
            </ul>
        </nav>

        <div class="menu-toggle-custom" id="menuToggleCustom">
            <span>☰</span>
        </div>
    </div>

    <div class="glossario-container">
        <button id="prev">◀</button>
        <div id="carousel">
            <!-- Os itens do carrossel serão gerados por PHP -->
            <?php
                $termos = ["Renascimento", "Iluminismo", "Revolução Industrial", "Colonialismo"];
                foreach ($termos as $termo) {
                    echo "<div class='term-item' data-term='$termo'>$termo</div>";
                }
            ?>
        </div>
        <button id="next">▶</button>
    </div>

    <div class="conteudo" id="conteudo">
        <p>
            A Idade Moderna foi marcada pelo Renascimento, um movimento cultural e artístico.
            Outro destaque foi o Iluminismo, que influenciou o desenvolvimento das sociedades.
            A Revolução Industrial e o Colonialismo também tiveram impacto global.
        </p>
    </div>

    <script src="glossario.js"></script>
</body>
</html>
