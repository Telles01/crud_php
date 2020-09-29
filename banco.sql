/*Apaga a base de dados*/
drop database crud;

/*cria uma base de dados*/
create database crud;

/*conecta a uma base de dados existente*/
use crud;

create table cliente(
    cod int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    cpf char(11),
    sexo char(1)
);

insert into cliente values(null,'David','david@gmail.com','12345678910','M');

select * from cliente;

use crud;

create table usuario(
    cod int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    login varchar(50) unique,
    senha char(32),
    perfil enum('adm','user')    
);

insert into usuario values(null,'David','david@gmail.com','dborges',md5('123'),'adm');
insert into usuario values(null,'Pedro','pedro@gmail.com','pedro',md5('abc'),'user');

select * from usuario;
