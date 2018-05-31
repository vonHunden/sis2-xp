<?php

class AlmacenesDesocupadosModel extends Model
{
    private $table = 'almacen';
    public $id;
    
    public function linker()
    {
        return $this->db;
    }
    public function almacenes()
    {
        $sql = 'SELECT idAlmacen, id_titular, nombre_almacen, capacidad, existencias FROM '.$this->table;
        try {
            $almacenes = $this->db->query($sql)->fetchAll(
                PDO::FETCH_CLASS,
                'Almacenes'
            );
            if ($this->verificarExisteAlmacenes($almacenes)){
                return $this->verificarAlmacenesDesocupados($almacenes);
            }
            return [];
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function verificarExisteAlmacenes($almacenes = []){
        if (count($almacenes) == 0)
            return FALSE;
        return TRUE;
    }
    public function verificarAlmacenesDesocupados($almacenes){
        $miLista = [];
        if ($this->verificarExisteAlmacenes($almacenes)){
            foreach ($almacenes as $row){
                if ($row->existencias == 0){
                    array_push($miLista, $row);
                }
            }
            return $miLista;
        }
    }
}
