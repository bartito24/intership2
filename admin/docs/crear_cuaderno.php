
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('menu.php');
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Cuaderno</h1>
            <p>Registro Cuaderno</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Cuaderno</li>
            <li class="breadcrumb-item"><a href="#">Registro Cuaderno</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <center><h3 class="tile-title">Nueva Cuaderno</h3></center>
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_cuaderno.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="id_cuadernillo" class="col-md-4 col-form-label text-md-right">id_cuadernillo:</label>
                            <div class="col-md-6"><input type="text" name="id_cuadernillo" id="id_cuadernillo" class="form-control" value="" required autofocus onkeypress="return sololetras(event);"></div></div>
                            
                             <div class="form-group row"><label for="fecha_registro" class="col-md-4 col-form-label text-md-right">fecha_registro:</label>
                            <div class="col-md-6"><input type="date" name="fecha_registro" id="fecha_registro" class="form-control" value="" required autofocus onkeypress="return sololetras(event);"></div></div>
                            
                            <div class="form-group row"><label for="fecha" class="col-md-4 col-form-label text-md-right">fecha:</label>
                            <div class="col-md-6"><input type="datetime" name="fecha" id="fecha" class="form-control" value="" required autofocus onkeypress="return sololetras(event);"></div></div>
                            
                            <div class="form-group row"><label for="decripcion" class="col-md-4 col-form-label text-md-right">decripcion:</label>
                            <div class="col-md-6"><input type="text" name="decripcion" id="decripcion" class="form-control" value="" required autofocus onkeypress="return sololetras(event);"></div></div>

                             <div  class="form-group row"><label for="numero_semana" class="col-md-4 col-form-label text-md-right">numero_semana:</label><div class="col-md-6">
                                             <select class="custom-select" name="numero_semana"  id="numero_semana">
                                                <option>Semana 1</option>
                                                <option>Semana 2</option>
                                                <option>Semana 3</option>
                                                <option>Semana 4</option>
                                                <option>Semana 5</option>
                                                <option>Semana 6</option>
                                             </select>
                                         </div>
                             </div>
                             <div class="form-group row"><label for="id_estudiante" class="col-md-4 col-form-label text-md-right">id_estudiante:</label>
                            <div class="col-md-6"><input type="text" name="id_estudiante" id="id_estudiante" class="form-control" value="" required autofocus onkeypress="return sololetras(event);"></div></div>

                             
                            <div class="form-group row" style="text-align:center"><div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> Registrar
                                    </button>
                                </div>
                                <div class ="col-md-4"><button type="reset" class="btn btn-dark">
                                        <span class="glyphicon glyphicon-pencil"></span>Limpiar
                                    </button></div>
                                <div class ="col-md-4"><a class="btn btn-danger" href="index.php">Cancelar
                                    </a></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>
