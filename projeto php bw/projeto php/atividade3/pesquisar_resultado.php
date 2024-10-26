<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "bd_locadora"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$placa = $_POST['placa'];
$sql = "SELECT * FROM tb_veiculos WHERE placa='$placa'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Modelo: " . $row["modelo"]. " - Placa: " . $row["placa"]. " - Ano: " . $row["ano"]. " - Preço: " . $row["preco"]. "<br>";
        echo "<a href='editar_veiculo.php?id=" . $row["id"] . "'>Editar</a> | ";
        echo "<a href='deletar_veiculo.php?id=" . $row["id"] . "'>Deletar</a><br>";
    }
} else {
    echo "Nenhum veículo encontrado.";
}

$conn->close();
?>
