<?php

class AlmacenModel extends Model
{
    private $table = 'almacen';
    public $id_titular;
    public $disponibilidad;
    public $nombre_almacen;
    
    public function linker()
    {
        return $this->db;
    }

    public function almacenes()
    {
        $sql = 'SELECT id, id_titular, disponibilidad, nombre_almacen FROM '.$this->table;
        $stmt = $this->db->prepare($sql);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, 'Almacen');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function almacen($id)
    {
        $sql = 'SELECT a.id, a.nombre_almacen, t.nombre, t.apellido, t.ci
                FROM almacen AS a, titular AS t 
                WHERE a.id = ? AND a.id_titular = t.id';
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function horario_almacen($id)
    {
        $sql = 'SELECT ac.apertura, ac.cierre, d.dia
                FROM apertura_cierre AS ac, dia AS d
                WHERE ac.id_almacen = ? AND ac.id_dia = d.id';
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
