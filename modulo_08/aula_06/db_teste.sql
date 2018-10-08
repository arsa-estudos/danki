CREATE TABLE `db_teste`.`clientes` 
( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `nome` VARCHAR(255) NOT NULL , 
    `cargo` INT NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

insert into clientes (id, nome, cargo)
values (null, 'Lucas Matheus', '2');