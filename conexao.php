<?php

$host = "localhost";
$database = "historia_db";
$password = "";
$user = "root";

// Corrigido para mysqli_connect
$connection = mysqli_connect($host, $user, $password, $database);

// Verifica se a conexão foi bem-sucedida
if (!$connection) {
    // Corrigido para mysqli_connect_error
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

?>
