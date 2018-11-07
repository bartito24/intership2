<?php 
require("conexion.php");

class mdl_cuaderno
{
	public $idCuaderno;
	public $idEstudiante;
	public $fecha;
	public $observacion;
	public $conec;


	function __construct()
	{
	$this->idCuaderno=0;
	$this->idEstudiante=0;
	$this->fecha="";
	$this->observacion="";
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into cuaderno (idCuaderno,idEstudiante, fecha, observacion)
		values('$this->idCuaderno',
		'$this->idEstudiante','$this->fecha', '$this->observacion')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM cuaderno ORDER BY fecha ASC";
			return $this->conec->con_retorno($sql);
	}
     
   
	public function eliminar()
	{
		$sql="delete from cuaderno where idCuaderno='$this->idCuaderno'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from cuaderno where idCuaderno='$this->idCuaderno' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE cuaderno SET idEstudiante='$this->idEstudiante',fecha='$this->fecha' , observacion='$this->observacion' where idCuaderno='$this->idCuaderno'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_cuaderno.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM cuaderno ORDER BY fecha ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>