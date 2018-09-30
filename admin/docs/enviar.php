<?php

$nombre="Fundacion Infocal";
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
    $mensaje="codigo de verificacion";
    $contenido="Nombre: ".$nombre."\nCodigo: ".$codigo."\nMensaje: ".$mensaje;
    $_SESSION['variable']=$codigo;
    mail($correo,"verificacion",$contenido);
    header("location:gracias.html");

    /*eval(gzinflate(base64_decode('
    s7fjsrEvyCjg5cpITUxJLdJQyslPTizJzM+zSi9K
    TM5MLNbLKMnNUdK05uWyB6kFAA==
    ')));*/

}
else
{
    echo "el correo no existe en la base de datos";
    header("location:page-login.php");
}
mysqli_close($conexion);

?>