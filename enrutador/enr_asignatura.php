<?php 

require("../controlador/ctrl_asignatura.php");
$obj_ctrl=new ctrl_asignatura();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_asignatura.php";

					</script>
			<?php 		

}elseif (isset($_GET["idAsignatura"])) 
	{
		$obj_ctrl->eliminar($_GET["idAsignatura"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_asignatura.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_asignatura.php";

		</script>
    <?php
	}

?>