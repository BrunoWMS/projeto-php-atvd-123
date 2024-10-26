<?php
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "bd_locadora"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM tb_veiculos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Veículo deletado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
