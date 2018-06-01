CREATE TABLE people
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    ci VARCHAR(8),
    day VARCHAR(15) NOT NULL,
    hour VARCHAR(5) NOT NULL
);

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