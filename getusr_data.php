<?php
/**
 * Created by PhpStorm.
 * User: devcrack
 * Date: 23/03/17
 * Time: 03:57 PM
 */
$nme_user = $_GET['nme_us'];
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"marillac");
$queries = "select * from usuarios where name = " . "'".$nme_user . "'";
$result = mysqli_query($connection, $queries);

while ($row  = mysqli_fetch_array($result))
{
    echo " <h1 style='font-weight: bold'>Perfil de Usuario<h1><br/>";
//Para mostrar la imagen de perfil
    //echo " <div class='col-xs-12'> <img src='./img/instructor1.jpg' class='img-circle img-fluid'> </div>";
    echo " <h3><span style='font-weight: bold'>Nombre:</span> " .$row['name']."</h3>";
    echo " <h3><span style='font-weight: bold'>Edad:</span> " .$row['edad']."</h3>";
    echo " <h3><span style='font-weight: bold'>Direccion:</span> " .$row['direccion']."</h3>";
    echo " <h3><span style='font-weight: bold'>Telefono:</span> " .$row['telefono']."</h3>";
    echo " <h3><span style='font-weight: bold'>Usuario:</span> " .$row['n_user']."</h3>";
    echo " <h3><span style='font-weight: bold'>Constrasenia:</span> " .$row['pass']."</h3>";
}




//
//echo "<table border=1>
//		<tr>
//			<th>Id</th>
//			<th>Nombre</th>
//			<th>Edad</th>
//			<th>Usuario</th>
//			<th>Contrase�a</th>
//			<th>Rol</th>
//			<th>Telefono</th>
//			<th>Direcion</th>
//		</tr>";
//while ($row  = mysqli_fetch_array($result))
//{
//    echo "<tr>";
//    echo "<td>". $row['iduser'] ."</td>";
//    echo "<td>". $row['name'] ."</td>";
//    echo "<td>". $row['edad'] ."</td>";
//    echo "<td>". $row['n_user'] ."</td>";
//    echo "<td>". $row['pass'] ."</td>";
//    echo "<td>". $row['role'] ."</td>";
//    echo "<td>". $row['telefono'] ."</td>";
//    echo "<td>". $row['direccion'] ."</td>";
//    echo "</tr>";
//}
//echo "</table>";
mysqli_close($connection);
?>