--SELECT a.id, a.nombre_almacen, t.nombre, t.apellido
--FROM almacen AS a, titular AS t, apertura_cierre AS ac
--WHERE 1 = ac.id_almacen AND t.id = a.id_titular; 

--SELECT a.id, a.nombre_almacen, t.nombre, t.apellido, t.ci, ac.apertura, ac.cierre
--FROM almacen AS a, titular AS t, apertura_cierre AS ac
--WHERE a.id = 1 AND a.id_titular = t.id AND ac.id_almacen = a.id;

SELECT a.id, a.nombre_almacen, t.nombre, t.apellido, t.ci
FROM almacen AS a, titular AS t
WHERE a.id = 1 AND a.id_titular = t.id;
