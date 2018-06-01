<?php

require('./src/.env.php');
require('./src/core/DB.php');
require('./src/core/Model.php');
    

class TestRegistrar extends \PHPUnit_Framework_TestCase
{
    private function model($model)
    {
        require_once('./src/models/'.$model.'.php');
        return new $model();
    }
        
    public function testRegistrarVacio()
    {
        $Registrar = $this->model('RegistrarEntradaModel');
        $res = $Registrar->verificarSalidaRegistrar();
        $this->assertEquals(FALSE, $res);
    }
    public function testRegistrarSalida()
    {
        $Registrar = $this->model('RegistrarEntradaModel');
        $a = (object) ['idEmpleado'=>1, 'id_fecha'=>1, 'nombre_Empleado'=>'A123', 'salidancias'=>0, 'capacidad'=>100];
        $res = $Registrar->verificarSalidaRegistrar([$a]);
        $this->assertEquals(TRUE, $res);
    }
    public function testRegistrarEntrada()
    {
        $Registrar = $this->model('RegistrarEntradaModel');
        $a = (object) ['idEmpleado'=>1, 'id_fecha'=>1, 'nombre_Empleado'=>'A123', 'salidancias'=>0, 'capacidad'=>100];
        $b = (object) ['idEmpleado'=>2, 'id_fecha'=>5, 'nombre_Empleado'=>'B123', 'salidancias'=>0, 'capacidad'=>200];
        $res = $Registrar->verificarRegistrarEntrada([$a, $b]);
        $this->assertEquals(2, count($res));
    }
    public function testRegistrarEntradaFalse()
    {
        $Registrar = $this->model('RegistrarEntradaModel');
        $a = (object) ['idEmpleado'=>1, 'id_fecha'=>1, 'nombre_Empleado'=>'A123', 'salidancias'=>0, 'capacidad'=>100];
        $b = (object) ['idEmpleado'=>2, 'id_fecha'=>5, 'nombre_Empleado'=>'B123', 'salidancias'=>50, 'capacidad'=>200];
        $res = $Registrar->verificarRegistrarEntrada([$a, $b]);
        $this->assertEquals(1, count($res));
    }
}

