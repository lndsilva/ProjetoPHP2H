drop database dbPessoa;

create database dbPessoa;


use dbPessoa;

CREATE TABLE Pessoa(
codigo int not null auto_increment,
nome VARCHAR(100),
sobrenome VARCHAR(100),
idade INT,
primary key(codigo));

INSERT INTO `pessoa` (`nome`, `sobrenome`, `idade`) VALUES
('Maria', 'Joaquina', 45),
('João', 'Antônio Miranda', 50),
('Renato', 'Casa Grande', 30),
('Jesus', 'Lopes da Fonseca', 33),
('Agustino', 'Junior da Silva', 30),
('Patricia', 'Albuquerque', 35),
('Mirian', 'Delgado', 20),
('Olavo', 'Fontoura Lima', 35),
('Maria', 'Fernanda Pires', 25);