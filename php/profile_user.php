<?php
/**
 * Se cargan los DATOS GENERALES del Usuario para simplemente ser Mostrados.
 * User: Aurelio
 * Date: 27/03/2017
 * Time: 03:16 PM
 */
$name = $_GET['name'];
$edad = $_GET['edad'];
$dir = $_GET['dir'];
$tel = $_GET['tel'];
$n_user = $_GET['user'];
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
                    <h3><?php echo $name ?></h3>
                    
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li> <a href="#"> <span class="glyphicon glyphicon-user"></span> </a></li>
                        <li>
                            <a href= "./backend/load_update_user.php?user=<?php echo $name."\""?>>
                                <span class="glyphicon glyphicon-cog"> </span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Dar_Alta_Us">
                                <span class="glyphicon glyphicon-floppy-saved"> </span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Dar_Baja_Us">
                                <span class="glyphicon glyphicon-floppy-remove">
                                </span>
                            </a>
                        </li>
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
                    <li class="active"><a href="#home" data-toggle="tab">Informacion de Perfil de Usuario</a></li>
                </ul>
                <div class="tab-content">
                    <form class= "form-signin">
<!--                        <div class="imageupload panel panel-default">-->
<!--                            <div class="panel-heading clearfix"> <h4 class="panel-title pull-left">Subir Imagen de Perfil</h4> </div>-->
<!--                            <div class= "file-tab panel-body">-->
<!--                                <label class = "btn btn-default btn-file"> <span>Browse</span> <input type="file" name="image-file"> </label>-->
<!--                                <button type = "button" class="btn btn-default">Remove</button>-->
<!--                            </div>-->
<!--                        </div>-->
                        <label></label>
                        <h2><?php echo $name?></h2>
<!--                        <label>--><?php //echo $name?><!--</label><br/>-->
                        <h4>Edad: <?php echo $edad?></h4>
                        <h4>Direccion: <?php echo $dir?></h4>
                        <h4>Telefono: <?php echo $tel?></h4>
                        <h4>Usuario: <?php echo $n_user?></h4>
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



