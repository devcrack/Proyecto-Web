<?php
//Verificar la existencia de los valores en el formulario
if(!isset($_GET['txtNombre']) || !isset($_GET['txtUsuario']) || !isset($_GET['txtPwd1']))
    header("location:http://localhost//Marillac_Web/signup.php?err=1");
if($_GET["txtNombre"] == "" || $_GET["txtUsuario"] == "" || $_GET['txtPwd1'] == "")
    header("location:http://localhost/Marillac_Web/signup.php?err=2");
if($_GET['txtPwd1']!=$_GET['txtPwd2'])
    header("location:http://localhost/Marillac_Web/signup.php?err=3");
//se inserta el registro en la BD
$conection = mysqli_connect("localhost", "root", "") or die ("No es posible conecatar al servidor de BD");
mysqli_select_db($conection,"marillac") or die ("No fue posible abrir la base de datos");
$qry = "insert into users(nombre, direccion, tel, edad, n_user, role, pass) values (
'" . $_GET['txtNombre'] . "', 
'" . $_GET['txtDireccion'] ."' ,
'" . $_GET['txtTelefono'] ."' ,
'" . $_GET['txtEdad'] ."' ,
'" . $_GET['txtUsuario'] ."' ,
'" . $_GET['tip_usr'] ."' ,
'" . $_GET['txtPwd1'] ."')";


//echo $qry = "insert into usuarios (name, pass, role, user) values ('" . $_GET['txtNombre'] . "',
//'" . $_GET['txtPwd1']."' ,
//'" . $_GET['tip_usr']."' ,
//'" . $_GET['txtUsuario']."')";

/* Ejecutar la consulta para dar de alta al usuario */
//mysql_query($qry) or die ("No fue posible insertar los datos del usuario. " . mysql_error());
mysqli_query($conection,$qry);// or die ("No fue posible insertar los datos del usuario. " . mysql_error());



header("location:http://localhost/Marillac_Web/signup.php?err=4");
?>

