
CREATE TABLE `pruebas_tecweb`.`usuarios` ( `idUsuario` INT NOT NULL , `Usuario` VARCHAR(200) NOT NULL , `Password` INT NOT NULL , `Nombre` INT NOT NULL , `Rol` INT NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `marillac`.`usuarios` ( `id` INT NOT NULL , `user` VARCHAR(200) NOT NULL , `pass` VARCHAR(200) NOT NULL , `name` INT(200) NOT NULL , `role` INT(100) NOT NULL ) ENGINE = InnoDB;

INSERT INTO `usuarios` (`id`, `user`, `pass`, `name`, `role`) VALUES (NULL, 'devcrack', 'linuxvista', 'Eren Hernandez', 'administrador');
