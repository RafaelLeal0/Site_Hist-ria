<?php

$host = "localhost";
$database = "historia_db";
$password = "";
$user = "root";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

?>
