CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(100) NOT NULL
);

CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    price FLOAT(5,2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tb_category (name, description) 
VALUES 
('Informática', 'Produtos de informática e acessórios para computadores.'),
("Escritório", "Produtos de escritório e acessórios para escritório."),
("Eletrônicos", "Produtos de eletrônicos e acessórios para eletrônicos.");

INSERT INTO tb_product (name, description, photo, price, category_id, quantity, created_at)
VALUES
("Teclado Mecânico Gamer Corsair K95", "Estrutura em alumínio anodizado com um conjunto de 104/105 blocos de tecla de PBT por injeção dupla, construída para durar uma vida inteira de jogos. ","https://images-na.ssl-images-amazon.com/images/G/32/apparel/rcxgs/tile._CB483369971_.gif", 1403,90)