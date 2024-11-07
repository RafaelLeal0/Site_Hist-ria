<?php
session_start();
include 'conexao.php'; 
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT nome, tipo FROM Clientes WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    var_dump($row); 
    exit(); 
    
    $_SESSION['usuario'] = $row['nome'];
    $_SESSION['tipo_sessao'] = $row['tipo']; 
    $_SESSION['email_sessao'] = $email; 
    header("Location: historia.php"); 
} else {
    echo "Usuário ou senha inválidos.";
}

$stmt->close();
$conn->close();
?>
