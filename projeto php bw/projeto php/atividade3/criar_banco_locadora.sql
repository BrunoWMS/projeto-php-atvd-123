CREATE DATABASE bd_locadora;
USE bd_locadora;

CREATE TABLE tb_veiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(255) NOT NULL,
    placa VARCHAR(10) NOT NULL,
    ano INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

CREATE TABLE tb_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);
