-- Criando banco de dados
create database db_Mercado;

-- acessando o banco de dados

use db_Mercado;

-- criando tabelas no banco de dados

create table tbFuncionarios(
codFunc int,
nomeFunc varchar(100),
emailFunc varchar(100),
telCel char(13));

-- inserindo registros nos campos da tabela

insert into tbFuncionarios(codFunc,nomeFunc,emailFunc,telCel)
	values(1,'Antonio Miranda','antonio.miranda@hotmail.com','11-95555-5555');

-- visualizando os registros dos campos da tabela

select * from tbFuncionarios;
