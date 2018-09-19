<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="../../js/validacion.js"></script>
    <?php include_once('index.php');
    include_once('../../modelo/mdl_rol.php');
    $obj=new mdl_rol();
    $datos=$obj->listar();
    ?>
</head>
<body>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Usuarios</h1>
            <p>Registro Personas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Usuarios</li>
            <li class="breadcrumb-item"><a href="#">Registro Persona</a></li>
        </ul>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <center><h3 class="tile-title">Registrar Persona</h3></center>
                    <div class="tile-body">
                        <form name="f1" action="../../enrutador/enr_agregarusuario.php" method="post" autocomplete="off" required>
                            <div class="form-group row"><label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre: <b>*</b></label><div class="col-md-6"><input type="text" name="nombre" id="nombre" class="form-control" value="" required autofocus onkeypress="return letras(event);"></div></div>
                            <div class="form-group row"><label for="papellido" class="col-md-4 col-form-label text-md-right" >Primer Apellido: <b>*</b></label><div class="col-md-6"><input type="text" name="papellido" id="papellido" class="form-control" value="" required onkeypress="return letras(event);"></div></div>
                            <div class="form-group row"><label for="sapellido" class="col-md-4 col-form-label text-md-right" >Segundo Apellido: </label><div class="col-md-6"><input type="text" name="sapellido" id="sapellido" value="" required class="form-control" onkeypress="return letras(event);"></div></div>
                            <div class="form-group row"><label for="ci" class="col-md-4 col-form-label text-md-right">DNI:  <b>*</b></label><div class="col-md-6"><input type="text" name="ci" id="ci" value="" required class="form-control"></div></div>
                            <div class="form-group row"><label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono: <b>*</b></label><div class="col-md-6"><input type="tel" name="telefono" id="telefono" class="form-control" value="" required onpaste="return false" onkeypress="return numeros(event);"></div></div>
                            <div class="form-group row"><label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion: <b>*</b></label><div class="col-md-6"><input type="text" name="direccion" id="direccion" value="" required class="form-control" ></div></div>
                            <div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">Email: <b>*</b></label><div class="col-md-6"><input  type="email" name="email" id="email" value="" required class="form-control"></div></div>
                             <div class="form-group row"><label for="rol" class="col-md-4 col-form-label text-md-right">Rol: <b>*</b></label><div class="col-md-6">
                                             <select class="custom-select" name="rol" id="rol" onchange ="labores()">
                                                 <?php
                                                 while ($row=mysqli_fetch_assoc($datos)){
                                                     echo "<option value='$row[id_rol]'>".$row['nombrerol']."</option>";
                                                  }
                                                 ?>
                                             </select>
                                         </div>
                             </div>

                               <div id="pru" class="form-group row" style="display: none"><label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo</label><div class="col-md-6">
                                             <select class="custom-select" name="cargo"  id="cargo">
                                                <option>Secretaria</option>
                                                <option>Responsable</option>
                                             </select>
                                         </div>
                             </div>


                           <div class="form-group row" style="text-align:center"><div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-primary" name="Registrar">
                                        <span class="glyphicon glyphicon-log-in"></span> registrar
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

<script>
    function labores()
    {
        var lab=document.getElementById("rol").value;
        if (lab==2) {
        var cargo=document.getElementById("pru").style.display='';}
        else
        {
            var cargo=document.getElementById("pru").style.display='none';
        }
    }
</script>