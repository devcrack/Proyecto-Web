<?php
session_start();
$msg = "";
if(isset($_GET['txtNombre'])) //se pasaro los valores del form
{
    //se pasaron ambos valores
    if($_GET['txtNombre']!="" && $_GET['txtPwd']!="")
    {
        $conn = mysqli_connect("localhost","root","") or die ("No fue posible conectarse al servidor de BD");
        mysqli_select_db($conn, "marillac")or die("No fue posible conectar a la BD");
        $query = "select iduser, name from users where n_user ='" . $_GET['txtNombre'] . "' and pass = '" . $_GET['txtPwd'] . "'";
        $rs = mysqli_query($conn, $query);
        if(mysqli_num_rows($rs) > 0) {
            $datos = mysqli_fetch_object($rs);
            $_SESSION['idU'] = $datos->iduser;
            $_SESSION['Nombre'] = $datos->name;
            header("location:http://localhost/Marillac_Web/a_home.php?user=".$datos->name);
        }
        else  {
            $msg = "Los datos usuario/contraseña no son correctos";
        }
    }
    //no se pasaron ambos valores
    else {
        $msg = "Faltaron datos para la autenticación, usuario/contraseña son necesarios";
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
	    </div>
    </nav>
    <!-- Cl -->
	<!-- you can substitue the span of reauth email for a input with the email and
	     include the remember me checkbox-->
    <div class="container">
        <div class="card card-container">
            <h1>Autenticarse</h1><br>
            <!-- <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" /> -->
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
<!--                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>-->
                <input type="text"  class="form-control " placeholder="Usuario" required autofocus name ="txtNombre">
                <input type="password"  class="form-control" placeholder="Contraseña" required autofocus name="txtPwd">
<!--                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>-->
                <!-- <div id="remember" class="checkbox">
			 <label>
                         <input type="checkbox" value="remember-me"> Remember me
			 </label>
			 </div> -->
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <a href="index.html"><span class="glyphicon glyphicon-home" style="color:rgb(255, 145, 162);"> REGRESAR</span></a>
            </form><!-- /form -->
		<!-- <a href="#" class="forgot-password">
                     Forgot the password?
		     </a> -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
