<?php
include_once('menu.php');
include_once ('../../modelo/mdl_asignatura.php');
$objeto=new mdl_asignatura();
$datos=$objeto->listar();
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> asignaturas</h1>
            <p>Listado de asignaturas registrados en el sistema</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">asignaturas</li>
            <li class="breadcrumb-item active"><a href="#">Tabla asignaturas</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <center><a class="btn btn-secondary" href="crear_asignatura.php">Crear asignatura</a></center>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="thead-dark">
                        <tr>
                            <th>id_asignatura</th>
                            <th>nombreasignatura</th>
                            <th>nivel</th>
                            <th>descripcionasig</th>
                            <th>activoasignatura</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $num=1;
                        while($row=mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td hidden>".$row['id_asignatura']."</td>";
                            echo "<td>".$row['nombreasignatura']."</td>";
                            echo "<td>".$row['nivel']."</td>";
                            echo "<td>".$row['descripcionasig']."</td>";
                            $id_asignatura=$row['id_asignatura'];
                            $nombre=$row['nombreasignatura'];
                            $nivel=$row['nivel'];
                            $descripcionasig=$row['descripcionasig'];
                            $num+=1;
                            echo "<td><a class='btn btn-danger col-md-5' href='../../enrutador/enr_asignatura.php?id_carrera=".$id_asignatura."'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                            <a class=' btn btn-success col-md-5' href='modificar_asignatura.php?id_asignatura=".$id_asignatura."&nombre=".$nombre."&nivel=".$nivel."&descripcionasig=".$descripcionasig."'><i class='fa fa-cog' aria-hidden='true'></i></a></td>";
                            echo "</tr>";
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