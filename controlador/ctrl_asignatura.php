<?php 
require("../modelo/mdl_asignatura.php");


class ctrl_asignatura
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_asignatura();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idAsignatura",$p["idAsignatura"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("observaciones",$p["observaciones"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idAsignatura",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idAsignatura",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idAsignatura",$p["idAsignatura"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("observaciones",$p["observaciones"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);

	$this->objeto_modelo->modificar();
}

}

?>