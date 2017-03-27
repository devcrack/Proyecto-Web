<?php
/**
 * Created by PhpStorm.
 * User: Aurelio
 * Date: 26/03/2017
 * Time: 08:01 PM
 */
$name =$_GET['user'];
?>

<!DOCTYPE>
<html>
<head>
    <title>Home</title>
    <link rel ="stylesheet" href="../css/bootstrap.css">
    <link rel ="stylesheet" href="../css/home_styles.css">
    <link rel ="stylesheet" href="../css/login_styles.css">
    <link rel ="stylesheet" href="../css/bootstrap-imageupload.css">
</head>
<body>
<!--Inician elementos para la barra de navegacion-->
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-inverse navbar-fixed-top own" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3>
                        <h3><?php echo $name ?></h3>
                    </h3>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li> <a data-toggle="tab" onclick="user_profile()" href="#information"> <span class="glyphicon glyphicon-user"></span> </a> </li>
                        <li> <a data-toggle="tab" onclick="user_modification()" href="#settings" > <span class="glyphicon glyphicon-cog"> </span> </a> </li>
                        <li> <a data-toggle="tab" href="#Dar_Alta_Us"> <span class="glyphicon glyphicon-floppy-saved"> </span>  </a> </li>
                        <li> <a data-toggle="tab" href="#Dar_Baja_Us"> <span class="glyphicon glyphicon-floppy-remove"> </span> </a> </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./login.php"><span class="glyphicon glyphicon-log-out"></span> Salir </a></li>
                    </ul>
                </div><!-- navbar-collapse -->
            </div>
        </nav>
    </div>
    <div class ="row top-buffer">
        <div class = "col-sm-12" id="el_chido">
            <div class="card card-container-update" >
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Actualizar Perfil de Usuario</a></li>
                </ul>
                <div class="tab-content">
                    <form class= "form-signin">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix"> <h3 class="panel-title pull-left">Subir Imagen de Perfil</h3> </div>
                            <div class= "file-tab panel-body">
                                <label class = "btn btn-default btn-file"> <span>Browse</span> <input type="file" name="image-file"> </label>
                                <button type = "button" class="btn btn-default">Remove</button>
                            </div>
                        </div>
                        <label>Nombre</label>
                        <input type="text" value="jsmith" class= "form-control">
                        <label>Edad</label>
                        <input type="text" value="John" class= "form-control">
                        <label>Direccion</label>
                        <input type="text" value="John" class= "form-control">
                        <label>Telefono</label>
                        <input type="text" value="John" class= "form-control">
                        <label>Usuario</label>
                        <input type="text" value="John" class= "form-control">
                        <label>Tipo Usuario</label>
                        <input type="text" value="John" class= "form-control">
                        <label>Constrase&ntilde;a</label>
                        <input type="password" class= "form-control">
                        <label>Confirmar Constrase&ntilde;a</label>
                        <input type="password" class= "form-control">
                        <div> <button class="btn btn-primary">Actualizar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

