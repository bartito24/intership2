<?php
include_once("index.php");

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Visitas</h1>
            <p>Registro de visitas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><h3>Visitas</h3></center>
                    </div>
                    <form action="../../enrutador/enr_tramite.php" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-2"><label class="col-form-label text-md-right" for="nombre">Nombre</label></div>
                                <div class="col-md-4"><input class="form-control" type="text" required name="nombre" id="nombre" placeholder="Nombre del Tramite"></div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <button class="btn btn-success" type="submit" name="action">Finalizar
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-get-started" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
