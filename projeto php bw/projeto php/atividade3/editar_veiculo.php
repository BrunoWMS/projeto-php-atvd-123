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

$id = $_GET['id'];
$sql = "SELECT * FROM tb_veiculos WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Veículo</title>
</head>
<body>
    <h2>Editar Veículo</h2>
    <form action="atualizar_veiculo.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?php echo $row['modelo']; ?>" required>
        <br><br>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" value="<?php echo $row['placa']; ?>" required>
        <br><br>
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" value="<?php echo $row['ano']; ?>" required>
        <br><br>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" value="<?php echo $row['preco']; ?>" step="0.01" required>
        <br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
