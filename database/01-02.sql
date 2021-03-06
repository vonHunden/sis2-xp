--
DROP DATABASE IF EXISTS sis2_xp;
CREATE DATABASE IF NOT EXISTS sis2_xp;
USE sis2_xp;
--
--
CREATE TABLE dia
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    dia VARCHAR(15) NOT NULL
);

CREATE TABLE titular
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    ci INTEGER UNSIGNED,
    nombre VARCHAR(120) NOT NULL,
    apellido VARCHAR(120) NOT NULL
);

CREATE TABLE almacen 
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_titular INTEGER UNSIGNED,
    disponibilidad TINYINT UNSIGNED,
    nombre_almacen VARCHAR(120) NOT NULL,
    existencias INTEGER,
    capacidad INTEGER
);

CREATE TABLE apertura_cierre
(
    id_almacen INTEGER UNSIGNED,
    id_dia INTEGER UNSIGNED,
    apertura VARCHAR(10) NOT NULL,
    cierre VARCHAR(10) NOT NULL
);
