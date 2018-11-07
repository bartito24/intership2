<?php include_once "menu.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Cuaderno</h1>
            <p>Modificación de Cuaderno</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="listar_roles.php">Modificar Cuaderno</a></li>
            <li class="breadcrumb-item active"><a href="modal-modificar-rol.php">Modificar</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-title">Modificacion de Cuaderno</div>
                <div class="tile-body">
                    <form action="../../enrutador/enr_cuaderno.php" method="post">
                        <div class="form-group row">

                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_cuadernillo">id_cuadernillo</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="id_cuadernillo" id="id_cuadernillo" value="<?php echo $_GET['id_cuadernillo'];?>"></div>

                            <div class="col-md-2"><label class="col-form-label text-md-right" for="fecha_registro">fecha_registro</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="fecha_registro" id="fecha_registro" value="<?php echo $_GET['fecha_registro'];?>"></div>

                            <div class="col-md-2"><label class="col-form-label text-md-right" for="fecha">fecha</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="fecha" id="fecha" value="<?php echo $_GET['fecha'];?>"></div>

                            <div class="col-md-2"><label class="col-form-label text-md-right" for="decripcion">decripcion</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="decripcion" id="decripcion" value="<?php echo $_GET['decripcion'];?>"></div>

                            <div  class="form-group row"><label for="numero_semana" class="col-md-4 col-form-label text-md-right">numero_semana:</label><div class="col-md-6">
                                             <select class="custom-select" value="<?php echo $_GET['numero_semana'];?>" name="numero_semana"  id="numero_semana">
                                                <option>Semana 1</option>
                                                <option>Semana 2</option>
                                                <option>Semana 3</option>
                                                <option>Semana 4</option>
                                                <option>Semana 5</option>
                                                <option>Semana 6</option>
                                             </select>
                                         </div>
                             </div>

                            <div class="col-md-2"><label class="col-form-label text-md-right" for="id_estudiante">id_estudiante</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="id_estudiante" id="id_estudiante" value="<?php echo $_GET['id_estudiante'];?>"></div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"><label class="col-form-label text-md-right" hidden for="id_estudiante"> id_estudiante</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" hidden name="id_estudiante" id="id_carrera" value="<?php echo $_GET['id_estudiante'];?>"></div>
                        </div>

                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="modificar">Modificar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="listar_roles.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>