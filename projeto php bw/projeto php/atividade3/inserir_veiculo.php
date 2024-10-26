<?php
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "bd_locadora"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];

$sql = "INSERT INTO tb_veiculos (modelo, placa, ano, preco) VALUES ('$modelo', '$placa', $ano, $preco)";

if ($conn->query($sql) === TRUE) {
    echo "Veículo cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
