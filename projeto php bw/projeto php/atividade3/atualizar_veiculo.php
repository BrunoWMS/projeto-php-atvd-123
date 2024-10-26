<?php
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "bd_locadora"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_POST['id'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];

$sql = "UPDATE tb_veiculos SET modelo='$modelo', placa='$placa', ano=$ano, preco=$preco WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Veículo atualizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
