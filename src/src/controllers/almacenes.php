<?php

class Almacenes extends Controller
{
    public function desocupados()
    {
        $almacen = $this->model('AlmacenesDesocupadosModel'); 
        $almacenes = $almacen->almacenes();
        return $this->view('almacenes/desocupados', ['almacenes' => $almacenes]);
    }
}