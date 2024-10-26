CREATE DATABASE bd_funcionarios;
USE bd_funcionarios;

CREATE TABLE tb_funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    sexo ENUM('Masculino', 'Feminino', 'Prefiro não dizer') NOT NULL,
    cargo VARCHAR(100) NOT NULL
);
