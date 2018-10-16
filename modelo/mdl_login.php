<?php
session_start();
require("conexion.php");
class mdl_login{
	public $usuario;
	public $clave;
	public $id_per;
    public $rol;

    public $obj_con;

	function __construct(){
	
	$this->usuario="";
	$this->clave="";
	$this->id_per=0;
    $this->rol=0;

        $this->obj_con=new conexion();
	}

    public function set($atributo, $valor){
        $this->$atributo=$valor;
    }

    public function insertar(){
        $sql="INSERT INTO usuario (usuario,clave,persona_id_persona,activousuario,fechacreacion) VALUES ('$this->usuario','$this->clave','$this->id_per',1,NOW());";
        $this->obj_con->sin_retorno($sql);
        $sql2="select * from usuario as u join persona p on u.persona_id_persona = p.id_persona
  join rol r on p.rol = r.id_rol join privilegios p2 on r.id_rol = p2.rol_id_rol join funcionalidad f
    on p2.funcionalidad_id_funcionalidad = f.id_funcionalidad where u.usuario='$this->usuario'";
        $r=$this->obj_con->con_retorno($sql2);





	}
public function listar(){
        $sql="select * from usuario ORDER BY id_usuario ;";
        return $this->obj_con->con_retorno($sql);
}
    public function buscar_correo(){
        $sql="select * from persona where id_persona=(select max(id_persona) from persona);";
        return $this->obj_con->con_retorno($sql);
    }
    public function validar($u,$c){
        $sql="select * from usuario WHERE usuario ='$u' AND clave='$c';";
        if($contenido=$this->obj_con->con_retorno($sql)){
            $sql="select * from persona
  join usuario u on persona.id_persona = u.persona_id_persona
  join rol r on persona.rol = r.id_rol
  join privilegios p on r.id_rol = p.rol_id_rol
  join funcionalidad f on p.funcionalidad_id_funcionalidad = f.id_funcionalidad
  join empleado e on persona.id_persona = e.persona_id_persona
  where u.usuario='$u'";
           $log= $this->obj_con->con_retorno($sql);
           $da=mysqli_fetch_assoc($log);
            $_SESSION['usuario']=$da['usuario'];
            $_SESSION['rol']=$da['nombrerol'];
            $_SESSION['nombre']=$da['nombre'];
            $_SESSION['papellido']=$da['papellido'];
            $_SESSION['sapellido']=$da['sapellido'];
            $_SESSION['ci']=$da['ci'];
            $_SESSION['telefono']=$da['telefono'];
            $_SESSION['direccion']=$da['direccion'];
            $_SESSION['privilegio']=$da['id_funcionalidad'];
            $_SESSION['cargo']=$da['cargo'];
            return $contenido;
        }

    }
}