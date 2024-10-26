CREATE DATABASE bd_senai_at1;
USE bd_senai_at1;

CREATE TABLE tb_livros (
    id_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    ano_publicacao INT NOT NULL,
    categoria VARCHAR(100)
);
