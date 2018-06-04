<?php

require('../../env.php');
require('../../core/DB.php');
require('../../core/Model.php');


class AlmacenTest extends \PHPUnit_Framework_TestCase
{


    private function model($model)
    {
        require_once('../../models/'.$model.'.php');
        return new $model();
    } 

    private function parseHora($hora)
    {

    	list($horas, $minutos) = explode(":",$hora);
    	$tiempo = ((int)$horas)*60 + ((int)$minutos);
    	return $tiempo;
    }

    private function DatosHorario()
    {
        //$this->assertTrue(true);
        $almacenes = $this->model('AlmacenModel');
        $misAlmacenes = $almacenes->almacenes();
        $res = array();
        foreach($misAlmacenes as $indice => $almacen)
        {
        	$horario = $almacenes->horario_almacen($almacen['id']);
	        foreach($horario as $ind => $dia)
	        {
	        	$horario[$ind]['apertura'] = $this->parseHora($dia['apertura']);
	        	$horario[$ind]['cierre'] = $this->parseHora($dia['cierre']);
	        	$horario[$ind]['id'] = $almacen['id'];
	        }
	        array_push($res, $horario);
	    }
        return $res;
    }
    //test historia 1
    public function testHorarios()
    {
    	$horaPermitida = array();
    	$horaPermitida['lunes'] = array($this->parseHora("8:30"),$this->parseHora("20:30"));
    	$horaPermitida['martes'] = array($this->parseHora("8:30"),$this->parseHora("20:30"));
    	$horaPermitida['miercoles'] = array($this->parseHora("8:30"),$this->parseHora("20:30"));
    	$horaPermitida['jueves'] = array($this->parseHora("8:30"),$this->parseHora("20:30"));
    	$horaPermitida['viernes'] = array($this->parseHora("8:30"),$this->parseHora("20:30"));
    	$horaPermitida['sabado'] = array($this->parseHora("9:00"),$this->parseHora("13:00"));
    	$horario = $this->DatosHorario();
        foreach($horario as $almacen)
        {
        	foreach($almacen as $dia)
        	{
        		//condicion 1
        		$this->assertTrue($dia['apertura'] != $dia['cierre']);
        		//condicion 2
        		$this->assertTrue($dia['apertura'] >= $horaPermitida[$dia['dia']][0] || $dia['cierre'] <= $horaPermitida[$dia['dia']][1]);
        		//condicion 3
        		$this->assertTrue($dia['apertura'] < $dia['cierre']);
        	}
        }
    }

	private function idTitulares()
	{
		$db = DB::instance()->getConnection();
        $sql = 'SELECT id FROM titular';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //test historia 2
    public function testTitulares()
    {
    	$tit = $this->idTitulares();
        $almacenes = $this->model('AlmacenModel');
        $misAlmacenes = $almacenes->almacenes();
        $existeTitular = array();
        foreach($misAlmacenes as $almacen)
        {
        	//condicion 1
        	$this->assertTrue($almacen['id_titular'] != NULL);	
	    	//condicion 2
        	$verif = false;
        	foreach($tit as  $id)
	    	{
	    		if($id['id'] == $almacen['id_titular'])
	    		{
	    			$verif = true;
	    			break;
	    		}
	    	}
	    	$this->assertTrue($verif);
	    	//condicion 3
	    	$this->assertTrue(!isset($existeTitular[$almacen['id']]));
	    	$existeTitular[$almacen['id']] = true;
        }
    	
    }	
}
