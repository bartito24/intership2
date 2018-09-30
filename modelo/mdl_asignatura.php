<?php 
require("conexion.php");

class mdl_asignatura
{
	public $idAsignatura;
	public $nombre;
	public $observaciones;
	public $idEstudiante;
	public $idCarrera;
	public $conec;


	function __construct()
	{
	$this->idAsignatura=0;
	$this->nombre="";
	$this->observaciones="";
	$this->idEstudiante=0;
	$this->idCarrera=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into asignatura (idAsignatura,nombre,observaciones,idEstudiante, idCarrera)
		values('$this->idAsignatura',
		'$this->nombre','$this->observaciones','$this->idEstudiante','$this->idCarrera')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM asignatura ORDER BY nombre ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from asignatura where idAsignatura='$this->idAsignatura'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from asignatura where idAsignatura='$this->idAsignatura' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE asignatura SET nombre='$this->nombre',observaciones='$this->observaciones',idEstudiante='$this->idEstudiante', idCarrera='$this->idCarrera' where idAsignatura='$this->idAsignatura'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_asignatura.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM asignatura ORDER BY nombre ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>