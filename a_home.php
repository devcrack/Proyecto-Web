<?php
/**
 * Created by PhpStorm.
 * User: devcrack
 * Date: 22/03/17
 * Time: 11:30 AM
 */
//session_start();
$name=$_GET['user'];
?>
<!DOCTYPE>
<html>
<head>
    <title>Home</title>
    <link rel ="stylesheet" href="./css/bootstrap.css">
    <link rel ="stylesheet" href="./css/home_styles.css">
    <link rel ="stylesheet" href="css/login_styles.css">
    <link rel ="stylesheet" href="css/bootstrap-imageupload.css">
    <script type="text/javascript" language="javascript">
        function user_profile()
        {
            var name_user = <?php echo json_encode($name);?>;

            alert(name_user);
//Creando objeto AJAX
            ajax_function();
            xmlhttp.open("GET", "./getusr_data.php?nme_us=" +name_user,true );
            xmlhttp.send();
        }

        function user_modification()
        {
            var name_user = <?php echo json_encode($name);?>;
            alert("SE ESTA MODIFICANDO EL USUARIO" + name_user);
//Creando objeto AJAX
            ajax_function();
            xmlhttp.open("GET", "./php/update_user.php?nme_us=" +name_user,true );
            xmlhttp.send();
        }

        function ajax_function()
        {
            if(window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
//la respuesta está completa y el motor esta listo
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    document.getElementById("el_chido").innerHTML = xmlhttp.responseText;
            }
        }
    </script>
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
                        <li> <a data-toggle="tab" onclick="user_profile()" href="#information"> <span class="glyphicon glyphicon-user"></span> </a> </li>
                        <li> <a data-toggle="tab" onclick="user_modification()" href="#settings" > <span class="glyphicon glyphicon-cog"> </span> </a> </li>
                        <li> <a data-toggle="tab" href="#Dar_Alta_Us"> <span class="glyphicon glyphicon-floppy-saved"> </span>  </a> </li>
                        <li> <a data-toggle="tab" href="#Dar_Baja_Us"> <span class="glyphicon glyphicon-floppy-remove"> </span> </a> </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="php/login.php"><span class="glyphicon glyphicon-log-out"></span> Salir </a></li>
                    </ul>
                </div><!-- navbar-collapse -->
            </div>
        </nav>
    </div>
    <div class ="row top-buffer">
        <div class = "col-sm-12" id="el_chido">
            <p>Corresponsabilidad social y educacion<br> para un mundo sin violencia.</p>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>









