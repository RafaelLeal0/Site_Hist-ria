<?php
session_start();

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'administrador') {

    $titulo = $_POST['topicTitle'] ?? '';
    $texto = $_POST['topicText'] ?? '';
    $imagem = $_FILES['topicImage'] ?? null;

    if ($imagem && $imagem['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'imagens/';
        $imagePath = $uploadDir . basename($imagem['name']);

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($imagem['tmp_name'], $imagePath)) {
            $conexao = new mysqli("localhost", "root", "", "seu_banco");

            if ($conexao->connect_error) {
                die("Erro de conexão: " . $conexao->connect_error);
            }

            $stmt = $conexao->prepare("INSERT INTO topicos (titulo, texto, imagem) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $titulo, $texto, $imagePath);

            if ($stmt->execute()) {
                echo json_encode(["success" => true]);
            } else {
                echo json_encode(["success" => false, "error" => "Erro ao salvar no banco de dados: " . $stmt->error]);
            }

            $stmt->close();
            $conexao->close();
        } else {
            echo json_encode(["success" => false, "error" => "Erro ao mover a imagem para o diretório."]);
        }
    } else {
        echo json_encode(["success" => false, "error" => "Erro no upload da imagem. Código do erro: " . $imagem['error']]);
    }
} else {
    echo json_encode(["success" => false, "error" => "Acesso não autorizado."]);
}
?>
