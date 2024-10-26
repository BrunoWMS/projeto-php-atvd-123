<?php
$servername = "localhost"; 
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "bd_senai_at1"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano_publicacao = $_POST['ano_publicacao'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO tb_livros (titulo, autor, ano_publicacao, categoria) VALUES ('$titulo', '$autor', $ano_publicacao, '$categoria')";

if ($conn->query($sql) === TRUE) {
    echo "Livro cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
