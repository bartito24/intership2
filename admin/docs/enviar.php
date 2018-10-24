<?php

$nombre="Fundación Infocal";
$correo=$_POST["correo"];

$conexion=mysqli_connect("localhost","root","","mydb");
$consulta="SELECT * FROM persona WHERE email='$correo'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0)
{
    session_start();
    $codigo=mt_rand(2000,90000);
    $_SESSION['correo']=$correo;
    $mensaje="Código de verificación";
    $contenido="Nombre: ".$nombre."\nCódigo: ".$codigo."\nMensaje: ".$mensaje;
    $_SESSION['variable']=$codigo;
    mail($correo,"verificacion",$contenido);
    header("location:gracias.php");

    /*eval(gzinflate(base64_decode('
    s7fjsrEvyCjg5cpITUxJLdJQyslPTizJzM+zSi9K
    TM5MLNbLKMnNUdK05uWyB6kFAA==
    ')));*/

}
else
{
    echo "El correo no existe en la base de datos";
    header("location:page-login.php");
}
mysqli_close($conexion);

?>