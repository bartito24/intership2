<?php
require("../controlador/ctrl_requisitos.php");
$obj=new ctrl_requisitos();

if (isset($_POST["asignar"])) {
    $obj->insertar_requisitos($_POST);
                 ?>
					<script type="text/javascript">
						window.location.href="../admin/docs/listar_requisito.php";

					</script>
			    <?php 	
}elseif (isset($_GET['id_requisitos'])){
    $obj->eliminar($_GET['id_requisitos']);
    echo "<script> window.location.href='../admin/docs/listar_requisito.php';</script>";

}	
	elseif (isset($_POST['modificar'])){
    $obj->modificar($_POST);
    echo "<script> window.location.href='../admin/docs/listar_requisito.php';</script>";
} 

?>

