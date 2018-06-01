CREATE TABLE people
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    ci VARCHAR(8),
    day VARCHAR(15) NOT NULL,
    hour VARCHAR(5) NOT NULL
);

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
