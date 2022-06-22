/*fabricante*/

USE `tienda`;
DROP procedure IF EXISTS `sp_insertarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_insertarFabricante` (
in nombreI varchar(100)
)
BEGIN
INSERT INTO fabricante (nombre) VALUE (nombreI);
END$$

DELIMITER ;

/*productos*/
USE `tienda`;
DROP procedure IF EXISTS `sp_insertarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE 'sp_insertarProducto' (
in nomProductoI varchar(100),
in preProductoI double,
in codProductoI int
)
BEGIN
INSERT INTO producto (nombre,precio,codigo_fabricante) VALUE (nomProductoI, preProductoI,codProductoI);
END$$

DELIMITER ;

/*usuarios*/
USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_insertarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_insertarUsuario(
in nombreI varchar(100),
in apellidoPaternoI varchar(100),
in apellidoMaternoI varchar(100),
in telefonoI varchar(10),
in correoI varchar(100),
in usuarioI varchar(100),
in contrasenaI varchar(100)
)
BEGIN
INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, telefono, correo, usuario, contraseña) 
    VALUE (nombreI, apellidoPaternoI,apellidoMaternoI,telefonoI,correoI , usuarioI,contrasenaI);
END$$

DELIMITER ;


/*actualizar fab*/
USE `tienda`;
DROP procedure IF EXISTS `sp_editarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarFabricante (
	in nombreU varchar(100),
    in codigoU int
)
BEGIN
	UPDATE fabricante SET nombre = nombreU WHERE codigo = codigoU;
END$$

DELIMITER ;


/*llamar fab*/

USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_mostrarFabricante` ()
BEGIN
SELECT * FROM fabricante;
END$$

DELIMITER ;

/*Eliminar productos*/
USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_eliminarProducto` (
in codigoI int
)
BEGIN
DELETE FROM producto WHERE codigo = codigoI;
END$$

DELIMITER ;

/*EDITAR PRODUCTO*/
USE `tienda`;
DROP procedure IF EXISTS `sp_editarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_editarProducto` (
in nombreU varchar (100),
in precioU double,
in fabricanteU int,
in codigoProU int
)
BEGIN
UPDATE producto SET nombre=nombreU, precio=precioU,
codigo_fabricante=fabricanteU WHERE codigo = codigoProU;
END$$

DELIMITER ;

/*Mostrar Usuarios*/
USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarUsuarios`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_mostrarUsuarios` ()
BEGIN
SELECT * FROM usuarios;
END$$

DELIMITER ;

/*Eliminar usuarios*/
USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarUsuarios`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_eliminarUsuarios`  (
in codigoU int
)
BEGIN
DELETE FROM usuarios WHERE codigo = codigoU;
END$$

DELIMITER ;

/*editar usuarios*/
USE `tienda`;
DROP procedure IF EXISTS `sp_editarUsuarios`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_editarUsuarios`;
;

DELIMITER $$
USE `tienda`$$
CREATE  PROCEDURE `sp_editarUsuarios`(
in nombreU varchar(100),
in apellidoPaU varchar(100),
in apellidoMaU varchar(100),
in telefonoU varchar (100),
in correoU varchar (100),
in usuarioU varchar(100),
in contraU varchar(100),
in codigoU int
)
BEGIN
UPDATE usuarios SET nombre=nombreU, apellido_paterno=apellidoPaU,
apellido_materno=apellidoMaU,telefono=telefonoU, correo=correoU,
usuario=usuarioU,contraseña=contraU WHERE codigo = codigoU;
END$$

DELIMITER ;




--eliminar fabricante--
USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_eliminarFabricante (
in codigoD int 
)
BEGIN
	DELETE FROM fabricante WHERE codigo = codigoD;
END$$

DELIMITER ;


