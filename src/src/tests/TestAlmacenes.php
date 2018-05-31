<?php

require('./src/.env.php');
require('./src/core/DB.php');
require('./src/core/Model.php');
    

class TestAlmacenes extends \PHPUnit_Framework_TestCase
{
    private function model($model)
    {
        require_once('./src/models/'.$model.'.php');
        return new $model();
    }
        
    public function testAlmacenesVacio()
    {
        $almacenes = $this->model('AlmacenesDesocupadosModel');
        $res = $almacenes->verificarExisteAlmacenes();
        $this->assertEquals(FALSE, $res);
    }
    public function testAlmacenesExiste()
    {
        $almacenes = $this->model('AlmacenesDesocupadosModel');
        $a = (object) ['idAlmacen'=>1, 'id_titular'=>1, 'nombre_almacen'=>'A123', 'existencias'=>0, 'capacidad'=>100];
        $res = $almacenes->verificarExisteAlmacenes([$a]);
        $this->assertEquals(TRUE, $res);
    }
    public function testAlmacenesDesocupados()
    {
        $almacenes = $this->model('AlmacenesDesocupadosModel');
        $a = (object) ['idAlmacen'=>1, 'id_titular'=>1, 'nombre_almacen'=>'A123', 'existencias'=>0, 'capacidad'=>100];
        $b = (object) ['idAlmacen'=>2, 'id_titular'=>5, 'nombre_almacen'=>'B123', 'existencias'=>0, 'capacidad'=>200];
        $res = $almacenes->verificarAlmacenesDesocupados([$a, $b]);
        $this->assertEquals(2, count($res));
    }
    public function testAlmacenesDesocupadosFalse()
    {
        $almacenes = $this->model('AlmacenesDesocupadosModel');
        $a = (object) ['idAlmacen'=>1, 'id_titular'=>1, 'nombre_almacen'=>'A123', 'existencias'=>0, 'capacidad'=>100];
        $b = (object) ['idAlmacen'=>2, 'id_titular'=>5, 'nombre_almacen'=>'B123', 'existencias'=>50, 'capacidad'=>200];
        $res = $almacenes->verificarAlmacenesDesocupados([$a, $b]);
        $this->assertEquals(1, count($res));
    }
}

    /*public function testPushAndPop()
    {
        if (file_exists('./src/models/AlmacenesDesocupadosModel.php')) {
            echo "ready";
        }
        else{echo "error";}
        $almacenes = $this->model('AlmacenesDesocupadosModel');
        $a = $almacenes->verificarAlmacenes();
        array_push($a, 'foo');
        $this->assertSame('foo', $a[count($a)-1]);
        $this->assertSame(1, count($a));

        $this->assertSame('foo', array_pop($a));
        $this->assertSame(0, count($a));
    }*/