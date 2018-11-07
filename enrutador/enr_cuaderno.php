<?php 

require("../controlador/ctrl_cuaderno.php");
$obj_ctrl=new ctrl_cuaderno();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_cuaderno.php";

					</script>
			<?php 		

}elseif (isset($_GET["idCuaderno"])) 
	{
		$obj_ctrl->eliminar($_GET["idCuaderno"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_cuaderno.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_cuaderno.php";

		</script>
    <?php
	}

?>