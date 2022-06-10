CREATE DATABASE db_escola;

USE db_escola;

CREATE TABLE tb_professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE tb_aluno (
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES ("Alexandre", "alexandre@email.com", "12345678901");

INSERT INTO tb_professor (nome, email, cpf)
VALUES ("Maria", "maria@email.com", "12345678902");

SELECT * FROM tb_professor;