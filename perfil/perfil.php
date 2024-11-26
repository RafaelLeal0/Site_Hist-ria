<?php
session_start();

$host = 'localhost'; 
$dbname = 'historia_db'; 
$username = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

if (!isset($_SESSION['email_sessao']) || !isset($_SESSION['tipo_sessao'])) {
    header("Location: ../index.php");
    exit();
}

$email_usuario = $_SESSION['email_sessao'];
$tipo_usuario = $_SESSION['tipo_sessao'];

if (!isset($_SESSION['nome'])) {
    $_SESSION['nome'] = 'Usuário';
    $_SESSION['email'] = 'exemplo@gmail.com';
    $_SESSION['senha'] = '123456';
    $_SESSION['foto'] = 'img_perfil_padrao.png';
}

$usuario_nome = $_SESSION['nome']; 
$usuario_email = $_SESSION['email'];
$usuario_tipo = $_SESSION['tipo_sessao'];
$foto_atual = $_SESSION['foto'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $novo_email = $_POST['email'];
    $nova_senha = $_POST['senha'];
    $foto_atualizada = null;

    if (!empty($nova_senha)) {
        $nova_senha = password_hash($nova_senha, PASSWORD_DEFAULT);
    }

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $nomeArquivo = uniqid() . '.' . $extensao;

        $destino = __DIR__ . '/uploads/' . $nomeArquivo;

        if (!is_dir(__DIR__ . '/uploads/')) {
            mkdir(__DIR__ . '/uploads/', 0777, true);
        }

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $destino)) {
            $_SESSION['foto'] = 'uploads/' . $nomeArquivo;
            $foto_atualizada = 'uploads/' . $nomeArquivo;
        } else {
            echo "Erro ao salvar o arquivo.";
        }
    }

    $sql = "UPDATE usuarios SET email = :email, senha = :senha, foto = :foto WHERE email = :email_usuario";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':email', $novo_email);
    $stmt->bindParam(':senha', $nova_senha);
    $stmt->bindParam(':foto', $foto_atualizada);
    $stmt->bindParam(':email_usuario', $email_usuario);

    if ($stmt->execute()) {
        $_SESSION['email_sessao'] = $novo_email; 
        $_SESSION['foto'] = $foto_atualizada; 

        header("Location: perfil.php?sucesso=true");
        exit();
    } else {
        echo "Erro ao atualizar os dados.";
    }
}

$sucesso = isset($_GET['sucesso']) && $_GET['sucesso'] == 'true';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="perfil.css">
    <script>
        window.onload = function() {
            <?php if ($sucesso) { ?>
                var alertBox = document.getElementById('alert');
                alertBox.classList.add('show');

                setTimeout(function() {
                    alertBox.classList.remove('show');
                }, 5000);
            <?php } ?>
        }
    </script>
</head>
<body>
    <!-- Caixa de alerta -->
    <div id="alert" class="alert">
        Alterações realizadas com sucesso!
        <button onclick="document.getElementById('alert').classList.remove('show')">X</button>
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

        <div class="profile-container">
            <div class="profile-card">
                <div class="profile-avatar">
                    <img src="<?php echo htmlspecialchars($_SESSION['foto']); ?>" alt="Foto de Perfil">
                </div>
                <h2>Olá, <?php echo htmlspecialchars($usuario_nome); ?>!</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="email">Troque seu email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email_sessao']); ?>"  placeholder="Coloque seu novo email">

                    <label for="senha">Troque sua senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Coloque sua nova senha">

                    <label for="foto">Troque sua foto de perfil</label>
                    <input type="file" id="foto" name="foto" accept="image/*">

                    <button type="submit">Confirmar alterações</button>
                </form>
            </div>
        </div>
    </div>
    <script src="perfil.js"></script>
</body>
</html>
