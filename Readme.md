# BeAcademy + Paylivre

## PHP e Banco de Dados

-   Projeto CRUD
-   Senhas criptografadas usando Argon2
-   CRUD Clientes

### Comandos Banco de Dados

##### Criar Banco de Dados

```
CREATE DATABASE nome_do_banco;
```

#### Selecionar Banco de Dados

```
USE nome_do_banco;
```

##### Criar Tabela

```
CREATE TABLE nome_da_tabela (
    nome_da_coluna1 tipo_da_coluna1,
    nome_da_coluna2 tipo_da_coluna2,
    nome_da_coluna3 tipo_da_coluna3,
    ...
);
```

##### Inserir Dados

```
INSERT INTO nome_da_tabela (nome_da_coluna1, nome_da_coluna2, nome_da_coluna3, ...)
    VALUES (valor_da_coluna1, valor_da_coluna2, valor_da_coluna3, ...);
```

##### Selecionar Dados

```
SELECT nome_da_coluna1, nome_da_coluna2, nome_da_coluna3, ...
    FROM nome_da_tabela
    WHERE nome_da_coluna1 = valor_da_coluna1
    AND nome_da_coluna2 = valor_da_coluna2
    AND nome_da_coluna3 = valor_da_coluna3
    ...
    ORDER BY nome_da_coluna1, nome_da_coluna2, nome_da_coluna3, ...;
```

##### Atualizar Dados

```
UPDATE nome_da_tabela
    SET nome_da_coluna1 = valor_da_coluna1,
        nome_da_coluna2 = valor_da_coluna2,
        nome_da_coluna3 = valor_da_coluna3,
        ...
    WHERE nome_da_coluna1 = valor_da_coluna1
    AND nome_da_coluna2 = valor_da_coluna2
    AND nome_da_coluna3 = valor_da_coluna3
    ...
    ORDER BY nome_da_coluna1, nome_da_coluna2, nome_da_coluna3, ...;
```

##### Excluir Dados

```
DELETE FROM nome_da_tabela
    WHERE nome_da_coluna1 = valor_da_coluna1
    AND nome_da_coluna2 = valor_da_coluna2
    AND nome_da_coluna3 = valor_da_coluna3
    ...
    ORDER BY nome_da_coluna1, nome_da_coluna2, nome_da_coluna3, ...;
```

##### Excluir Tabela

```
DROP TABLE nome_da_tabela;
```

##### Excluir Banco de Dados

```
DROP DATABASE nome_do_banco;
```

##### Listar Tabelas

```
SHOW TABLES;
```

##### Listar Dados

```
SHOW DATABASES;
```

```
SHOW COLUMNS FROM nome_da_tabela;
```

```
SHOW CREATE TABLE nome_da_tabela;
```

```
SHOW CREATE DATABASE nome_do_banco;
```
