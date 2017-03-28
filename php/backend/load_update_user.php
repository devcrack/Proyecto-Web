<?php
/**
 * Created by PhpStorm.
 * User: Aurelio
 * Date: 28/03/2017
 * Time: 04:27 AM
 */


$name = $_GET['user'];

$conn = mysqli_connect("localhost","root","") or die ("No fue posible conectarse al servidor de BD");

mysqli_select_db($conn, "marillac")or die("No fue posible conectar a la BD");

$query = "select nombre, edad, direccion,tel,n_user,pass,role, foto from users where nombre ='" . $name. "'";
$rs = mysqli_query($conn, $query);
if(mysqli_num_rows($rs) > 0) {
    $datos = mysqli_fetch_object($rs);
    header(
        "location:http://localhost/Marillac_Web/php/update_profile_user.php?name=" . urlencode($datos->nombre) .
        "&edad=" . urlencode($datos->edad) .
        "&dir=" . urlencode($datos->direccion) .
        "&tel=" . urlencode($datos->tel) .
        "&user=" . urlencode($datos->n_user));
}

?>

