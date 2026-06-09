CREATE DATABASE sistema_simples_m1; --cria o Banco de dados

USE sistema_simples_m1;--chama o banco de dados

CREATE TABLE usuarios (--cria uma tabela
    id INT AUTO_INCREMENT PRIMARY KEY,--colunas da tabela
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');--insere um valor na tabela