 <?php
  include_once('index.php');
  include_once ('../../modelo/conexion.php');
  $con= new conexion();
  $sql="select * from tramite_plantilla join necesita n on tramite_plantilla.idTramite_plantilla = n.Tramite_plantilla_idTramite_plantilla
join requisito_plantilla rp on n.Requisito_plantilla_id_Requisitoplantilla = rp.id_Requisitoplantilla
join procede p on tramite_plantilla.idTramite_plantilla = p.tramite_plantilla_idTramite_plantilla
join paso_plantilla plantilla on p.paso_plantilla_id_Pasoplantilla = plantilla.id_Pasoplantilla where activotramite=1";
  $datos=$con->con_retorno($sql);
 ?>
 <main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Tramites</h1>
            <p>Informacion de los tramites</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Pagina informativa</a></li>
            <li class="breadcrumb-item active"><a href="#">Pagina informativa</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-10">
        <div class="form-group">
            <div class="card">
                <div class="card-header">
                    <h3>Tramites Disponibles </h3>
                </div>
                <div class="card-body">
                    <?php
                    while ($row= mysqli_fetch_assoc($datos)){
                        echo "<div class='form-group row'>
                    <div class='col-md-12'><button class='btn btn-success col-md-5'>$row[nombretramite]</button>
                        </div>
                        </div>";
                    }
                    ?>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
     </div>
     
</main>