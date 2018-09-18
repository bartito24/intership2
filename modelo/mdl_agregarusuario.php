<?php 
require("conexion.php");
class mdlusuario
{
	private $id_persona;
	public $nombre;
	public $papellido;
	public $sapellido;
	public $ci;
	public $telefono;
	public $direccion;
	public $email;
	public $obj_con;
	public $rol;
	public $cargo;
	function __construct()
	{
		
	$this->id_persona=0;
	$this->nombre="";
	$this->papellido="";
	$this->sapellido="";
	$this->ci=0;
	$this->telefono=0;
	$this->direccion="";
	$this->email="";
	$this->rol=0;
	$this->cargo="";
	$this->obj_con=new conexion();
	}

	public function set($atributo, $valor)
	{
		$this->$atributo=$valor;

	}

	public function insertar_administrador()
	{
		//echo $this->nombre;
		$sql="insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email,rol,activo) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email', '$this->rol',1);";
		$this->obj_con->sin_retorno($sql);
		$sql1="select * from persona where ci='$this->ci'";
		$numeropersona=$this->obj_con->con_retorno($sql1);
		$num=mysqli_fetch_assoc($numeropersona);
		$sql2="insert into empleado(persona_id_persona,cargo,activoempleado) values('$num[id_persona]',administrador,'1')";
		$this->obj_con->sin_retorno($sql2);
	}

	public function insertar_personal()
	{
		//echo $this->nombre;
		$sql="insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email,rol,activo) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email','$this->rol',1);";
		$this->obj_con->sin_retorno($sql);
		$sql1="select * from persona where ci='$this->ci'";
		$numeropersona=$this->obj_con->con_retorno($sql1);
		$num=mysqli_fetch_assoc($numeropersona);
		$sql2="insert into empleado(persona_id_persona,cargo,activoempleado) values('$num[id_persona]','$this->cargo','1')";
		$this->obj_con->sin_retorno($sql2);
	}

		public function insertar_estudiante()
	{
		//echo $this->nombre;
		$sql="insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email,rol,activo) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email','$this->rol',1);";
		$this->obj_con->sin_retorno($sql);
		$sql1="select * from persona where ci='$this->ci'";
		$numeropersona=$this->obj_con->con_retorno($sql1);
		$num=mysqli_fetch_assoc($numeropersona);
		$sql2="insert into estudiante(activoestudiante,persona_id_persona) values('1','$num[id_persona]')";
		$this->obj_con->sin_retorno($sql2);
	}
	public function listar()
	{
			$sql="select * from persona;";
	return $this->obj_con->con_retorno($sql);
	}

	public function buscar(){
		$sql="select * from persona where id_persona='$this->id_persona';";
		return $this->obj_con->con_retorno($sql);
	}
	public  function buscar_rol($no){
	    $sql="select id_rol from rol WHERE nombrerol='$no'";
        return $this->obj_con->con_retorno($sql);
    }
public function asignar($n,$i){
	    $sql="update persona set rol='$n' WHERE id_persona='$i';";
    $this->obj_con->sin_retorno($sql);
}
	public function modificar(){
		$sql="UPDATE persona SET nombre='$this->nombre', papellido='$this->papellido', sapellido='$this->sapellido', ci='$this->ci',telefono='$this->telefono',direccion='$this->direccion', rol='$this->rol' where id_persona='$this->id_persona';";
		//print_r($sql);
		return $this->obj_con->con_retorno($sql);
	}
	public function eliminar($v){
	    $sql="delete from persona WHERE id_persona=$v;";
	    $this->obj_con->sin_retorno($sql);
    }
public function buscar_nombre_rol ()
	{
		$sql="select * from rol where nombrerol='estudio'";
		 $this->obj_con->con_retorno($sql);
	}
}


?>