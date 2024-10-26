<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Veículo</title>
</head>
<body>
    <h2>Cadastrar Veículo</h2>
    <form action="inserir_veiculo.php" method="post">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
        <br><br>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" required>
        <br><br>
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br><br>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
