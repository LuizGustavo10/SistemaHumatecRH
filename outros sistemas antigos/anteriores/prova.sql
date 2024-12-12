CREATE TABLE usuario (
 id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
 nome VARCHAR(45),
 senha VARCHAR(45)
);

INSERT INTO usuario (nome, senha) VALUES
('João', '123'),
('Vinicius', '321');

CREATE TABLE cidade(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45),
    cep VARCHAR(15),
    estado VARCHAR(15)
);

INSERT INTO cidade(nome, cep, estado) VALUES
('Nova Londrina', '87970-000', 'PR'),
('Marilena', '87960-000', 'PR');

CREATE TABLE funcionario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    cpf VARCHAR(15),
    celular VARCHAR(15)
    endereco VARCHAR(255),
    email VARCHAR(255),
    cargo VARCHAR(255),
    salario VARCHAR(50),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES  cidade(id)
);

INSERT INTO funcionario(nome, cpf, celular, endereco, email, cargo, salario, cidade_id) VALUES
('Thomas', '123.123.123-12','(44)98888-8888', 'Rua Silva 22', 'thomas@gmail.com', 'Programador', '3000', 2);

CREATE TABLE cliente(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    cpf VARCHAR(15),
    celular VARCHAR(15),
    endereco VARCHAR(255),
    email VARCHAR(255),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES  cidade(id)
);

INSERT INTO cliente(nome, cpf, celular, endereco, email, cidade_id) VALUES
('José', '111.111.111-11', '4491111-1111', 'Rua Alameda 11', 'jose@gmail.com', 1)

CREATE TABLE venda (
 	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    obs VARCHAR(255),
    valor_total INT,
    quantidade_total INT,
    data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
    cliente_id INT,
    funcionario_id INT,
    FOREIGN KEY (cliente_id) REFERENCES cliente(id),
    FOREIGN KEY (funcionario_id) REFERENCES funcionario(id)
);

INSERT INTO venda(obs, valor_total, quantidade_total, cliente_id, funcionario_id)
VALUES ('orçamento', 50, 10, 1, 1);

CREATE TABLE produto(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    preco DECIMAL(10,2),
    estoque INT,
    custo INT,
    lucro INT
);

INSERT INTO produto (nome, preco, estoque, custo, lucro) VALUES
('Mouse', 20.00, 10, 5, 15),
('Teclado', 40.00, 2, 10, 30);

CREATE TABLE item_venda(
id INT AUTO_INCREMENT PRIMARY KEY,
quantidade INT,
valor DECIMAL(10,2),
venda_id INT,
produto_id INT,
FOREIGN KEY (venda_id) REFERENCES venda(id),
FOREIGN KEY (produto_id) REFERENCES produto(id)
);

INSERT INTO item_venda(quantidade, valor, venda_id, produto_id) VALUES
(2, 40, 1, 1),
(3, 150,1, 2);

CREATE TABLE item_venda(
id INT AUTO_INCREMENT PRIMARY KEY,
quantidade INT,
valor DECIMAL(10,2),
venda_id INT,
produto_id INT,
FOREIGN KEY (venda_id) REFERENCES venda(id),
FOREIGN KEY (produto_id) REFERENCES produto(id)
);

INSERT INTO item_venda(quantidade, valor, venda_id, produto_id) VALUES
(2, 40, 1, 1),
(3, 150,1, 2);