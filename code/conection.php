<?php
    $usuario = 'root';
    $senha = '';
    $database = 'db_tcc';
    $host = 'localhost';
    $conn = mysqli_connect($host, $usuario, $senha, $database);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
?>
