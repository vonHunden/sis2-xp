<?php

require('./src/env.php');
require('./src/core/DB.php');
require('./src/core/Model.php');
    

class TestRegisterPorteria extends PHPUnit\Framework\TestCase
{
    private function model($model)
    {
        require_once('./src/models/'.$model.'.php');
        //require_once('../models/'.$model.'.php');
        return new $model();
    }
	/*
    public function testRegistrarVacio()
    {
        $Registrar = $this->model('RegisterModel');
        $res = $Registrar->add();
        $this->assertEquals(FALSE, $res);
	}
	*/
    public function testIngreso()
    {
		$register = $this->model('RegisterModel');
		$register->name = 'maria';
		$register->ci = '7991234';
		$register->day = 'lunes';
		$register->hour = '15:30';
        $res = $register->add();
        $this->assertEquals(TRUE, $res);
	}

	public function testIngreso2()
    {
		$register = $this->model('RegisterModel');
		$register->name = 2;
		$register->ci = '7991234';
		$register->day = 'lunes';
		$register->hour = '15:30';
        $res = $register->add();
        $this->assertEquals(FALSE, $res);
	}
	/*
    public function testRegistrarEntradaFalse()
    {
		$Registrar = $this->model('RegisterModel');
        $a = (object) ['idEmpleado'=>1, 'id_fecha'=>1, 'nombre_Empleado'=>'A123', 'salidancias'=>0, 'capacidad'=>100];
        $b = (object) ['idEmpleado'=>2, 'id_fecha'=>5, 'nombre_Empleado'=>'B123', 'salidancias'=>50, 'capacidad'=>200];
        $res = $Registrar->verificarRegistrarEntrada([$a, $b]);
        $this->assertEquals(1, count($res));
	}
	*/
}


