<?php
require("../controlador/ctrl_documento.php");
$obj=new ctrl_documentos();

if (isset($_POST["insertar"])) {
    $obj->insertar_documentos($_POST);
}