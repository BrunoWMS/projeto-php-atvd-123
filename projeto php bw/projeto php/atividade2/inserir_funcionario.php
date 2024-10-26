<?php
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "bd_funcionarios"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$salario = $_POST['salario'];
$sexo = $_POST['sexo'];
$cargo = $_POST['cargo'];

$sql = "INSERT INTO tb_funcionarios (nome, data_nascimento, salario, sexo, cargo) VALUES ('$nome', '$data_nascimento', $salario, '$sexo', '$cargo')";

if ($conn->query($sql) === TRUE) {
    echo "Funcionário cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
