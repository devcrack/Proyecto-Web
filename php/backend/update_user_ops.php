<?php
/**
 * Created by PhpStorm.
 * User: Aurelio
 * Date: 28/03/2017
 * Time: 05:51 AM
 */
$name = $_POST['txtNom'];
$edad = $_POST['txtEdad'];
$dir = $_POST['txtDir'];
$tel = $_POST['txtTel'];
$nuser = $_POST['txt_user'];

if(sizeof($_FILES) > 0) {
    $f = $_FILES['image-file']['tmp_name'];
    $size = $_FILES['image-file']['size'];
    $type_f = $_FILES['image-file']['type'];

    if($f != "none")
    {
        $fp = ($f, "rb");
        $content = fread($fp, $size);
        $content = addslashes($content);

        fclose($fp);

        $qry = "insert into users(nombre,edad, direccion, tel, n_user,foto) VALUES  ('".$name ."'".$edad. "'".$dir."'".$tel."'".$nuser."');")";

        $qry = "insert into users(foto)VALUES('".$content."') where nombre =".$name;
        $conection = mysqli_connect("localhost", "root", "") or die ("No es posible conecatar al servidor de BD");

        mysqli_select_db($conection,"marillac") or die ("No fue posible abrir la base de datos");
        mysqli_query($conection,$qry);
        mysqli_close($connection);
    }
}

?>

ME QUE DE EN LA SUBIDA DE LA FOTOGRAFIA CAWN
