<?php
$msg="";

/* if(isset($_GET['err']))
 * {
 *     if ($_GET['err']=="1") $msg="Los datos no fueron pasados via formulario";
 *     if ($_GET['err']=="2") $msg="Los datos están incompletos";
 *     if ($_GET['err']=="3") $msg="Las contraseñas no coinciden";
 *     if ($_GET['err']=="4") $msg="El usuario fue registrado correctamente";
 * }*/

if(isset($_GET['err']))
{
    switch($_GET['err'])
    {
 	case "1" :
 	$msg="Los datos no fueron pasados via formulario";
 	break;
 	case "2":
 	$msg="Los datos están incompletos";
 	break;
 	case "3":
 	$msg="Las contraseñas no coinciden";
 	break;
 	case "4":
 	$msg="El usuario fue registrado correctamente";
 	break;
    }
}
?>
<!DOCTYPE>
<html>
    <head>
	<title>Login Marillac</title>
	<link rel ="stylesheet" href="css/bootstrap.css">	
	<link rel ="stylesheet" href="css/login_styles.css">
    </head>
    <body>
	<!-- This belongs to horizontal bar in top part -->
	<nav class="navbar navbar-inverse navbar-fixed-top own_bar " role="navigation">
	    <div class="container">
		<div class="navbar-header">
		    <a class="navbar-brand" href="#">Marillac</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php"><span class="glyphicon glyphicon-home"> REGRESAR</span></a></li>
			<li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
		    </ul>
		</div>
	    </div>
	</nav>
	<!-- Cl -->
	<!-- you can substitue the span of reauth email for a input with the email and
	     include the remember me checkbox-->
	<div class="container">
            <div class="card card-container">
		<h1>Darse de Alta</h1><br>
		<!-- <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" /> -->
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" method="get" action="signup_backend.php">
                    <span id="reauth-email" class="reauth-email"></span>
		    <div class ="row">
			<div class ="col-xs-12">
			    <select class="form-control" name="tip_usr">
				<option>Beneficiario</option>
				<option>Instructor</option>
				<option>Piscologo</option>
			    </select>
			</div>			
		    </div>
		    <br/>
            <input type="text"  class="form-control " placeholder="Nombre" required autofocus name ="txtNombre">
            <input type="text"  class="form-control " placeholder="Edad" required autofocus name ="txtEdad">
            <input type="text"  class="form-control " placeholder="Direccion" required autofocus name ="txtDireccion">
            <input type="text"  class="form-control " placeholder="Telefono" required autofocus name ="txtTelefono">
		    <input type="text"  class="form-control" placeholder="Usuario" required autofocus name="txtUsuario">
		    <input type="password"  class="form-control" placeholder="Contraseña" required autofocus name="txtPwd1">		    
		    <input type="password"  class="form-control" placeholder="Confirmar la Contraseña" required autofocus name="txtPwd2">
		    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Darse de Alta</button>
		</form>
		<a href="index.html"><span class="glyphicon glyphicon-home" style="color:rgb(255, 145, 162);"> REGRESAR</span></a>
            </div>
	</div>
	<?php
	if($msg!="") echo "<p>$msg</p>";
	?>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>
