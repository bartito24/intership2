<?php
include_once('menu.php');
include_once ('../../modelo/mdl_cuaderno.php');
$objeto=new mdl_cuaderno();
$datos=$objeto->listar();
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Cuaderno</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Cuaderno</li>
            <li class="breadcrumb-item active"><a href="#">Tabla Cuaderno</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <center><a class="btn btn-secondary" href="crear_cuaderno.php">Crear Cuaderno</a></center>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            <th>Num</th>
                            <th>fecha_registro</th>
                            <th>fecha</th>
                            <th>decripcion</th>
                            <th>numero_semana</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $num=1;
                        while($row=mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td hidden>".$row['id_cuadernillo']."</td>";
                            echo "<td>".$row['fecha_registro']."</td>";
                            echo "<td>".$row['fecha']."</td>";
                            echo "<td>".$row['decripcion']."</td>";
                            echo "<td>".$row['numero_semana']."</td>";
                            $id_cuadernillo=$row['id_cuadernillo'];
                            $fecha_registro=$row['fecha_registro'];
                            $fecha=$row['fecha'];
                            $decripcion=$row['decripcion'];
                            $numero_semana=$row['numero_semana'];
                            echo "<td><a class='btn btn-danger col-md-5' href='../../enrutador/enr_cuaderno.php?id_cuadernillo=".$id_cuadernillo."'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                            <a class=' btn btn-success col-md-5' href='modificar_cuaderno.php?id_cuadernillo=".$id_cuadernillo."&fecha_registro=".$fecha_registro."'><i class='fa fa-cog' aria-hidden='true'></i></a></td>";
                            echo "</tr>";
                            $num+=1;
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->

<!-- The javascript plugin to display page loading on top-->
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>