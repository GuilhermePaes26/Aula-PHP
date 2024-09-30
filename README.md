# Consulta de Carros

projeto que fornece uma interface para gerenciar informações de carros.

## Tecnologias Usadas

- PHP
- MySQL
- HTML/CSS

### Pré-requisitos

- Um servidor local (como XAMPP, WAMP ou MAMP).
- PHP e MySQL instalados.

Para rodar a aplicação você deve criar uma banco de dados em seu computador, com o nome "carros"
e nele rodar os seguintes comandos: 

## A partir daqui
CREATE DATABASE carros;
USE carros;

create table carros (
	id_car char(4) primary key not null,
    mont_car varchar(30) not null,
    nome_car varchar (30) not null
);
 
insert into carros values (0001, "Ford", "Gt40"),
(0002, "Ford", "Silverado"),
(0003, "Fiat", "Uno"),
(0004, "Fiat", "Freemont"),
(0005, "General Motors", "Corsa"),
(0006, "General Motors", "Celta"),
(0007, "Toyota", "Corolla"),
(0008, "Toyota", "  Hilux");