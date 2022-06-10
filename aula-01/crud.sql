USE db_escola;

INSERT INTO tb_professor (nome, email, cpf)
VALUES ("Karen", "karen@email.com", "12345678903");

INSERT INTO tb_professor (nome, email, cpf)
VALUES 
("Luana", "luana@email.com", "12345678904"),
("Larissa", "larissa@email.com", "12345678905"),
("Leticia", "leticia@email.com", "12345678906");

DELETE FROM tb_professor WHERE id = 7;

UPDATE tb_professor SET nome = "Lari" WHERE cpf = 12345678905;

SELECT * FROM tb_professor;
SELECT * FROM tb_professor WHERE id=5;

SELECT nome, cpf FROM tb_professor;


