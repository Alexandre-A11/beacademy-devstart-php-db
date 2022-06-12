CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
    name VARCHAR(50) NOT NULL
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

CREATE TABLE tb_client (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tb_category (name, description) 
VALUES 
('Informática', 'Produtos de informática e acessórios para computadores.'),
("Escritório", "Produtos e acessórios para escritório."),
("Eletrônicos", "Produtos e acessórios eletrônicos.");

INSERT INTO tb_product (name, description, photo, price, category_id, quantity, created_at)
VALUES
("Teclado Mecânico Gamer Corsair K95", "Estrutura em alumínio anodizado com um conjunto de 104/105 blocos de tecla de PBT por injeção dupla.","https://www.corsair.com/corsairmedia/sys_master/productcontent/k68-spill-resistant-keyboard-Content-22.jpg", 903.90, 1, 10, "2022-06-12 10:58:43"),
("Kindle 10a. geração", "Conheça o novo Kindle, agora com iluminação embutida ajustável.", "https://m.media-amazon.com/images/I/61X0ISBpD-L._AC_SL1000_.jpg", 350.00, 1, 37, "2022-06-12 10:59:25"),
("Echo Dot (3ª Geração)", "O Echo Dot é o nosso smart speaker de maior sucesso.", "https://m.media-amazon.com/images/I/51SYrUFOIVL._AC_SL1000_.jpg", 250.00, 1, 67, "2022-06-12 11:05:33"),
("Headphone Fone de Ouvido Havit HV-H2002d", "Gaming Headphone Havit HV-H2002d", "https://m.media-amazon.com/images/I/414VCtINXwL._AC_.jpg", 235.00, 1, 22, "2022-06-12 11:07:22"),
("Raspberry Pi 4 Computer Model B 4 Gb RAM", "A Raspberry Pi 4B inclui um alto-desempenho 64-bit processador quad-core ", "https://m.media-amazon.com/images/I/71MEi5TC7IL._AC_SL1500_.jpg", 999.90, 1, 3, "2022-06-12 11:09:15")


UPDATE tb_product SET photo = "https://m.media-amazon.com/images/I/61WohGtw2tL._AC_SL1200_.jpg" WHERE id = 16;