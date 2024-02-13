create schema rei;
use rei;

create table usuarios(
  id int NOT NULL AUTO_INCREMENT,
  cnpj varchar(90),
  nome varchar(60),
  PRIMARY KEY (id)
);
    
  select * from usuarios;
  
-- DELETE FROM `rei`.`usuarios` WHERE (`id` = '1');
-- DROP DATABASE `rei`;
