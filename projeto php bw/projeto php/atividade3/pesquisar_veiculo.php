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
    <title>Pesquisar Veículo</title>
</head>
<body>
    <h2>Pesquisar Veículo</h2>
    <form action="pesquisar_resultado.php" method="post">
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" required>
        <input type="submit" value="Pesquisar">
    </form>
</body>
</html>
