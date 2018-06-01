CREATE TABLE people
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    ci VARCHAR(8),
    day VARCHAR(15) NOT NULL,
    hour VARCHAR(5) NOT NULL
);

<<<<<<< HEAD
CREATE TABLE producto
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_categoria INTEGER UNSIGNED,
    nombre_producto  varchar(50)  NOT NULL,
    peso varchar(10)  NOT NULL
);

CREATE TABLE categoria 
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name_categoria VARCHAR(20)
);


INSERT INTO `categoria`(`name_categoria`) VALUES ('electronica');

INSERT INTO `producto`(`id_categoria`, `nombre_producto`, `peso`) 
VALUES (1,'cargador laptop','1'),
(1,'camara','1'),
(1,'tester','0.5');


INSERT INTO `producto`(`id_categoria`, `nombre_producto`, `peso`) 
VALUES (2,'cable utp cat5','3'),
(2,'switch','1.5'),
(2,'router','1');

INSERT INTO `producto`(`id_categoria`, `nombre_producto`, `peso`)
VALUES (3,'juego de tronos','0.1'),
(3,'flash','0.1'),
(3,'git','0.5');
=======
CREATE TABLE almacen
(
    idAlmacen INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_titular INTEGER,
    nombre_almacen VARCHAR(50),
    existencias INTEGER,
    capacidad INTEGER
);
INSERT INTO `sis2-xp`.`almacen` (`idAlmacen`, `id_titular`, `nombre_almacen`, `existencias`, `capacidad`) VALUES ('1', '1', 'A12', '0', '100');
INSERT INTO `sis2-xp`.`almacen` (`idAlmacen`, `id_titular`, `nombre_almacen`, `existencias`, `capacidad`) VALUES ('2', '1', 'B32', '40', '150');
INSERT INTO `sis2-xp`.`almacen` (`idAlmacen`, `id_titular`, `nombre_almacen`, `existencias`, `capacidad`) VALUES ('3', '1', 'C45', '0', '100');
>>>>>>> 042a48dd28235665cdfd029229871e675153822d
