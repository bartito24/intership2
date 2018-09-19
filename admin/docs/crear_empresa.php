
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('index.php');
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Empresa</h1>
            <p>Registro Empresas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Empresas</li>
            <li class="breadcrumb-item"><a href="#">Registro Empresa</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <center><h3 class="tile-title">Nueva Empresa</h3></center>
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_empresa.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label><div class="col-md-6"><input type="text" name="nombre" id="nombre" class="form-control" value="" required autofocus onkeypress="return letras(event);"></div></div>
                            <div class="form-group row"><label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion:</label><div class="col-md-6"><input type="text" name="direccion" id="direccion" class="form-control" value="" required></div></div>
                            <div class="form-group row"><label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono:</label><div class="col-md-6"><input type="text" name="telefono" id="telefono" class="form-control" value="" required autofocus onkeypress="return numeros(event);"></div></div>

                             <!--<div  class="form-group row"><label for="modalidad" class="col-md-4 col-form-label text-md-right">Modalidad:</label><div class="col-md-6">
                                             <select class="custom-select" name="modalidad"  id="modalidad">
                                                <option>Semestral</option>
                                                <option>Anualizado</option>
                                             </select>
                                         </div>
                             </div>-->

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
