<?php
require("../controlador/ctrl_documento.php");
$obj=new ctrl_documento();

if (isset($_POST["agregar"]))
{
		$obj_ctrl->insertar_documento($_POST);
?>
		<script type="text/javascript">
			window.location.href="../admin/docs/listar_documento.php";
		</script>
<?php		

}elseif (isset($_GET["id_documentacion"])) 
	{
		$obj_ctrl->eliminar($_GET["id_documentacion"]);

?>
		<script type="text/javascript">
			window.location.href="../admin/docs/listar_documento.php";

		</script>
<?php
	}	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		<script type="text/javascript">
			window.location.href="../admin/docs/listar_documento.php";

		</script>
<?php
	}

?>