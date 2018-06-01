--
--
INSERT INTO dia
(dia)
VALUES
('lunes'),
('martes'),
('miercoles'),
('jueves'),
('viernes'),
('sabado'),
('domingo');

INSERT INTO titular
(ci, nombre, apellido)
VALUES
(12345678, 'Alfredo', 'Rada'),
(23456789, 'Americo', 'Lozada'),
(13579753, 'Deneve', 'Hilton'),
(24680975, 'Lucio', 'Gonzales'),
(21325476, 'Claudia', 'Garcia'),
(98125629, 'Jhon', 'Travolta');

-- disponibilidad con valor 1 significa que esta rejentado, 0 lo contrario
-- id_titular con valor 0 significa no rejentado
INSERT INTO almacen 
(id_titular, disponibilidad, nombre_almacen)
VALUES
(1, 1, 'I'),
(2, 1, 'II'),
(3, 1, 'III'),
(4, 1, 'IV'),
(5, 1, 'V'),
(6, 1, 'VI'),
(0, 0, 'VII'),
(0, 0, 'VIII'),
(0, 0, 'IX'),
(0, 0, 'X');

INSERT INTO apertura_cierre
(id_almacen, id_dia, apertura, cierre)
VALUES
-- Para almacen 1(I)
(1, 1, '8:30', '20:30'),
(1, 2, '8:30', '20:30'),
(1, 3, '8:30', '20:30'),
(1, 4, '8:30', '20:30'),
(1, 5, '8:30', '20:30'),
(1, 6, '9:00', '13:00'),
-- Para almacen 2(II)
(2, 1, '8:30', '20:30'),
(2, 2, '8:30', '20:30'),
(2, 3, '8:30', '20:30'),
(2, 4, '8:30', '20:30'),
(2, 5, '8:30', '20:30'),
(2, 6, '9:00', '13:00'),
-- Para almacen 3(III)
(3, 1, '8:30', '20:30'),
(3, 2, '8:30', '20:30'),
(3, 3, '8:30', '20:30'),
(3, 4, '8:30', '20:30'),
(3, 5, '8:30', '20:30'),
(3, 6, '9:00', '13:00'),
-- Para almacen 4(IV)
(4, 1, '8:30', '20:30'),
(4, 2, '8:30', '20:30'),
(4, 3, '8:30', '20:30'),
(4, 4, '8:30', '20:30'),
(4, 5, '8:30', '20:30'),
(4, 6, '9:00', '13:00'),
-- Para almacen 5(V)
(5, 1, '8:30', '20:30'),
(5, 2, '8:30', '20:30'),
(5, 3, '8:30', '20:30'),
(5, 4, '8:30', '20:30'),
(5, 5, '8:30', '20:30'),
(5, 6, '9:00', '13:00'),
-- Para almacen 6(VI)
(6, 1, '8:30', '20:30'),
(6, 2, '8:30', '20:30'),
(6, 3, '8:30', '20:30'),
(6, 4, '8:30', '20:30'),
(6, 5, '8:30', '20:30'),
(6, 6, '9:00', '13:00');
-- Para almacen 7(VII)
--(7, 1, '8:30', '20:30'),
--(7, 2, '8:30', '20:30'),
--(7, 3, '8:30', '20:30'),
--(7, 4, '8:30', '20:30'),
--(7, 5, '8:30', '20:30'),
--(7, 6, '9:00', '13:00'),
-- Para almacen 8(VIII)
--(8, 1, '8:30', '20:30'),
--(8, 2, '8:30', '20:30'),
--(8, 3, '8:30', '20:30'),
--(8, 4, '8:30', '20:30'),
--(8, 5, '8:30', '20:30'),
--(8, 6, '9:00', '13:00'),
-- Para almacen 9(IX)
--(9, 1, '8:30', '20:30'),
--(9, 2, '8:30', '20:30'),
--(9, 3, '8:30', '20:30'),
--(9, 4, '8:30', '20:30'),
--(9, 5, '8:30', '20:30'),
--(9, 6, '9:00', '13:00'),
-- Para almacen 10(X)
--(10, 1, '8:30', '20:30'),
--(10, 2, '8:30', '20:30'),
--(10, 3, '8:30', '20:30'),
--(10, 4, '8:30', '20:30'),
--(10, 5, '8:30', '20:30'),
--(10, 6, '9:00', '13:00'),