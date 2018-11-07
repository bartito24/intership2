
<?php
require("conexion.php");
class mdl_cuaderno
{
    public $id_cuadernillo;
    public $fecha_registro;
    public $fecha;
    public $decripcion;
    public $numero_semana;
    public $obj_con;

    function __construct()
    {
        $this->id_cuadernillo = 0;
        $this->fecha_registro = "";
        $this->fecha = "";
        $this->decripcion = "";
        $this->numero_semana = 0;
        $this->obj_con = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function insertar()
    {
        $sql = "INSERT INTO cuadernillo (fecha_registro,fecha,decripcion,numero_semana) VALUE ('$this->fecha_registro','$this->fecha','$this->decripcion','$this->numero_semana');";
        $this->obj_con->sin_retorno($sql);
        $sql ="INSERT INTO cuadernillo VALUES ((NOW()))";

        echo "fecha_registro";
    }
    public function modificar()
    {
        $sql="UPDATE cuadernillo SET fecha_registro='$this->fecha_registro',fecha='$this->fecha',decripcion='$this->decripcion',numero_semana='$this->numero_semana' where id_cuadernillo='$this->id_cuadernillo';";
        $this->obj_con->sin_retorno($sql);

    }

    public function listar()
    {
        $sql = "SELECT * FROM cuadernillo where fecha_registro order BY fecha_registro ;";
        return $this->obj_con->con_retorno($sql);
    }
    
    public function listar_dato()
    {
            $sql="select * from cuadernillo where id_cuadernillo='$this->id_cuadernillo' ";
            $resp=$this->conec->con_retorno($sql);
            return $resp;
    }
    public function eliminar($id)
    {

        $sql="delete from cuadernillo where id_cuadernillo='$this->id_cuadernillo'";
        $this->conec->sin_retorno($sql);
    }
}