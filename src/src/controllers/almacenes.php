<?php

class Almacenes extends Controller
{
    public function desocupados()
    {
        $almacen = $this->model('AlmacenesDesocupadosModel'); 
        $almacenes = $almacen->almacenes();
        return $this->view('almacenes/desocupados', ['almacenes' => $almacenes]);
    }

    public function index()
    {
        $almacen = $this->model('AlmacenModel');
        $almacenes = $almacen->almacenes();
        return $this->view('almacenes/index', ['almacenes' => $almacenes]);
    }

    public function ver($id)
    {
        $almacen = $this->model('AlmacenModel');
        $detalle = $almacen->almacen($id);
        $horario_almacen = $almacen->horario_almacen($id);
        return $this->view(
            'almacenes/ver',
            [
                'almacen' => $detalle,
                'horario' => $horario_almacen
            ]
        );
    }
}
