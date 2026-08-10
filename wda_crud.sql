SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET NAMES utf8;

CREATE DATABASE wda_crud;
USE wda_crud;

CREATE TABLE IF NOT EXISTS customers (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(255) NOT NULL,
  cpf_cnpj varchar(14) NOT NULL,
  birthdate date NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13) NOT NULL,
  mobile int(13) NOT NULL,
  ie int(11) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

INSERT INTO `customers` (`name`, `cpf_cnpj`, `birthdate`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES ('Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555', '123456', 
'2016-05-24 00:00:00', '2016-05-24 00:00:00');