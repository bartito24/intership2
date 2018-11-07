<?php 
require("../modelo/mdl_cuaderno.php");


class ctrl_cuaderno
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_cuaderno();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idCuaderno",$p["idCuaderno"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("fecha",$p["fecha"]);
	$this->objeto_modelo->set("observacion",$p["observacion"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idCuaderno",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idCuaderno",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idCuaderno",$p["idCuaderno"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("fecha",$p["fecha"]);
	$this->objeto_modelo->set("observacion",$p["observacion"]);

	$this->objeto_modelo->modificar();
}


}

?>