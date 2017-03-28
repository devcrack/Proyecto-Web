<?php
/**
 * Created by PhpStorm.
 * User: Aurelio
 * Date: 26/03/2017
 * Time: 12:59 PM
 */
$name=$_GET['user'];
?>
<!DOCTYPE>
<html>
<head>
    <title>Home</title>
    <link rel ="stylesheet" href="../css/bootstrap.css">
    <link rel ="stylesheet" href="../css/home_styles.css">
    <link rel ="stylesheet" href="../css/bootstrap-imageupload.css">
    <script type="text/javascript">
    function user_profile_sumonner () {
        $.ajax
        (
            {
                type : "POST",
                data : { name_user:<?php echo json_encode($name);?> },
                url  : "./profile_user.php",              // <=== CALL THE PHP FUNCTION HERE.
                success: function ( response ) { alert( response ); }
            }
        );
    }
    </script>
</head>
<body>
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
                <li> <a href= "backend/load_profile_user.php?user=<?php echo $name."\""?>> <span class = "glyphicon glyphicon-user"></span> </a> </li>
                <li> <a  href="./backend/load_update_user.php?user=<?php echo $name."\""?> > <span class="glyphicon glyphicon-cog"> </span> </a> </li>
                <li> <a  href="#"> <span class="glyphicon glyphicon-floppy-saved"> </span>  </a> </li>
                <li> <a data-toggle="tab" href="#Dar_Baja_Us"> <span class="glyphicon glyphicon-floppy-remove"> </span> </a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-out tags-color"></span> Salir </a></li>
            </ul>
        </div><!-- navbar-collapse -->
    </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="../img/main_background.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Bienvenido</h1>
                    <p>Explore entre las diferentes opciones del Menu.</p>
                    <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>


