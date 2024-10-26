<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo ao Dashboard</h2>
    <a href="cadastrar_veiculo.php">Cadastrar Veículo</a><br>
    <a href="pesquisar_veiculo.php">Pesquisar Veículo</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
