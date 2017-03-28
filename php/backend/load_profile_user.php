<?php
/**
 * Obtiene los parametros necesarios de la base de datos para mandarlos a la pagina que carga el perfil de usuario, esto determinando
 * si el usuario tiene foto de perfil o no, ya que si tiene es una diferente vista, por obvias razones.
 * User: Aurelio
 * Date: 27/03/2017
 * Time: 03:57 PM
 */

$name=$_GET['user'];

$conn = mysqli_connect("localhost","root","") or die ("No fue posible conectarse al servidor de BD");

mysqli_select_db($conn, "marillac")or die("No fue posible conectar a la BD");

$query = "select nombre, edad, direccion,tel,n_user,pass,role, foto from users where nombre ='" . $name. "'";
$rs = mysqli_query($conn, $query);
if(mysqli_num_rows($rs) > 0) {
    $datos = mysqli_fetch_object($rs);
    if($datos->foto == null) {
        header(
            "location:http://localhost/Marillac_Web/php/profile_user.php?name=" . urlencode($datos->nombre) .
            "&edad=" . urlencode($datos->edad) .
            "&dir=" . urlencode($datos->direccion) .
            "&tel=" . urlencode($datos->tel) .
            "&user=" . urlencode($datos->n_user));
    }
    else {

    }
}
?>

