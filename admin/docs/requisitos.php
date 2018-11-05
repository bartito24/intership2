<?php include_once "menu.php";

?>
<?php include_once "menu.php";

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>Requisitos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Requisitos</a></li>
            <li class="breadcrumb-item active"><a href="#">Requisitos</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <center><div class="tile-title" style=" font-family: Georgia, 'Times New Roman', serif;"><B>Crear Requisitos</B></div></center>
                <div class="tile-body">
                    <form action="../../enrutador/enr_requisitos.php" method="post">
                        
                        <div class="form-group row">
                            <div class="col-md-2" style=" font-family: Georgia, 'Times New Roman', serif;"><label class="col-form-label text-md-right" for="nombrerequisito">Nombre Requisito</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="nombrerequisito" id="nombrerequisito" value=""></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2" style=" font-family: Georgia, 'Times New Roman', serif;"><label class="col-form-label text-md-right" for="numpasantia">Num Pasantias</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="numpasantia" id="numpasantia" value=""></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2" style=" font-family: Georgia, 'Times New Roman', serif;"><label class="col-form-label text-md-right" for="descripcionre">Descripcion</label></div>
                            <div class="col-md-10"><input class="form-control" type="text" name="descripcionre" id="descripcionre" value=""></div>
                        </div>

                        <div class="tile-footer row">
                            <div class="col-md-3">
                                <button class="btn btn-success" type="submit" name="asignar">Registrar</button>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger" href="#">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>