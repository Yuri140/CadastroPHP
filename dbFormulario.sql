drop database if exists dbFormulario;
create database dbFormulario;
use dbFormulario;
 
CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  lastname varchar(60) NOT NULL,
  email varchar(100) NOT NULL,
  cpf varchar(14) NOT NULL,
  gender char(1) NOT NULL,
  username varchar(30) NOT NULL,
  password varchar(20) NOT NULL,
  PRIMARY KEY (id)
);