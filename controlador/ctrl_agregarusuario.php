<?php
require("../modelo/mdl_agregarusuario.php");
if($_GET['id_persona']){
    $borrar=new ctrlUsuario();
    $borrar->eliminar($_GET['id_persona']);
}
class ctrlUsuario
{  public $obj_mod;
	
	function __construct()
	{
		$this->obj_mod=new mdlusuario();
	}

	public function insertar_persona($n)
	{	switch ($n['rol']) {
		case '1':
				$this->obj_mod->set("nombre", $n["nombre"]);
				$this->obj_mod->set("papellido", $n["papellido"]);
				$this->obj_mod->set("sapellido", $n["sapellido"]);
				$this->obj_mod->set("ci", $n["ci"]);
				$this->obj_mod->set("telefono", $n["telefono"]);
				$this->obj_mod->set("direccion", $n["direccion"]);
				$this->obj_mod->set("email", $n["email"]);
				$this->obj_mod->set("rol", $n["rol"]);
				$this->obj_mod->insertar_administrador();
			echo "<script> window.location.href='../admin/docs/agregar_usuario.php';</script>";
			break;
		case '2':
				$this->obj_mod->set("nombre", $n["nombre"]);
				$this->obj_mod->set("papellido", $n["papellido"]);
				$this->obj_mod->set("sapellido", $n["sapellido"]);
				$this->obj_mod->set("ci", $n["ci"]);
				$this->obj_mod->set("telefono", $n["telefono"]);
				$this->obj_mod->set("direccion", $n["direccion"]);
				$this->obj_mod->set("email", $n["email"]);
				$this->obj_mod->set("rol", $n["rol"]);
				$this->obj_mod->set("cargo", $n["cargo"]);
				$this->obj_mod->insertar_personal();
			echo "<script> window.location.href='../admin/docs/agregar_usuario.php';</script>";
		 	break;

		case '3':
				$this->obj_mod->set("nombre", $n["nombre"]);
				$this->obj_mod->set("papellido", $n["papellido"]);
				$this->obj_mod->set("sapellido", $n["sapellido"]);
				$this->obj_mod->set("ci", $n["ci"]);
				$this->obj_mod->set("telefono", $n["telefono"]);
				$this->obj_mod->set("direccion", $n["direccion"]);
				$this->obj_mod->set("email", $n["email"]);
				$this->obj_mod->set("rol", $n["rol"]);
				$this->obj_mod->insertar_estudiante();
			echo "<script> window.location.href='../admin/docs/agregar_usuario.php';</script>";
		 	break;	
		
		default:
			# code...
			break;
	}
	
	}
    public function asignar($n)
    {
        $valor=$this->obj_mod->buscar_rol($n['nombre']);
        $nombre=mysqli_fetch_assoc($valor);

        $this->obj_mod->asignar($nombre["id_rol"],$n["id_persona"]);
        echo "<script> window.location.href='../admin/docs/table-personas.php';</script>";
    }
	public function listar()
	{
	return $this->obj_mod->listar();
	}

	public function buscar($dato)
	{
	$this->obj_mod->set("id_persona", $dato);
    return $this->obj_mod->buscar();
	}
public function eliminar ($v){
	    $this->obj_mod->eliminar($v);
    echo "<script> window.location.href='../admin/docs/table-personas.php';</script>";
}
	public function modificar($p)
	{
	$this->obj_mod->set("id_persona", $p["id_persona"]);
	$this->obj_mod->set("nombre", $p["nombre"]);
	$this->obj_mod->set("papellido", $p["papellido"]);
	$this->obj_mod->set("sapellido", $p["sapellido"]);
	$this->obj_mod->set("ci", $p["ci"]);
	$this->obj_mod->set("telefono", $p["telefono"]);
	$this->obj_mod->set("direccion", $p["direccion"]);
	$this->obj_mod->set("rol", $p["rol"]);
	return $this->obj_mod->modificar();
	        echo "<script> window.location.href='../vista/vst_roles_usuarios.php;</script>";

	}
}