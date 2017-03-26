<?php
/**
 * Created by PhpStorm.
 * User: devcrack
 * Date: 24/03/17
 * Time: 02:24 AM
 */
$nme_user = $_GET['nme_us'];
$connection = mysqli_connect("localhost","root","");

mysqli_select_db($connection,"marillac");

$queries = "select * from usuarios where name = " . "'".$nme_user . "'";
$result = mysqli_query($connection, $queries);

while ($row  = mysqli_fetch_array($result)) {
    echo" 
 <div class='card card-container-update' >
    <ul class='nav nav-tabs'>
       <li class='active'><a href=\"#home\" data-toggle=\"tab\">Actualizar Perfil de Usuario</a></li>
    </ul>
    <div class='tab-content'>
      <form class= 'form-signin'>
         <div class='imageupload panel panel-default'>
            <div class='panel-heading clearfix'>
               <h3 class='panel-title pull-left'>Subir Imagen de Perfil</h3>
            </div>
            <div class=\"file-tab panel-body\">
               <label class='btn btn-default btn-file'>
                  <span>Browse</span>
                     <!-- The file is stored here. -->
                     <input type=\"file\" name=\"image-file\">
                  </label>
               <button type=\"button\" class=\"btn btn-default\">Remove</button>
            </div>
         </div>
         <label>Nombre</label>
         <input type=\"text\" value=\"jsmith\" class= 'form-control'>
         <label>Edad</label>
		 <input type='text' value='John' class= 'form-control'>
		 <label>Direccion</label>
		 <input type='text' value='John' class= 'form-control'>
		 <label>Telefono</label>
		 <input type='text' value='John' class= 'form-control'>
		 <label>Usuario</label>
		 <input type='text' value='John' class= 'form-control'>
		 <label>Tipo Usuario</label>
		 <input type='text' value='John' class= 'form-control'>
		 <label>Constrase&ntilde;a</label>
		 <input type='password' class= 'form-control'>
		 <label>Confirmar Constrase&ntilde;a</label>
		 <input type='password' class= 'form-control'>
         <div>
            <button class='btn btn-primary'>Actualizar</button>
         </div>
       </form>
    </div>    
 </div>
 ";
}
?>






<!--<div class="well">-->
<!--    <ul class="nav nav-tabs">-->
<!--        <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>-->
<!--        <li><a href="#profile" data-toggle="tab">Password</a></li>-->
<!--    </ul>-->
<!--    <div id="myTabContent" class="tab-content">-->
<!--        <div class="tab-pane active in" id="home">-->
<!--            <form id="tab">-->
<!--                <label>Username</label>-->
<!--                <input type="text" value="jsmith" class="input-xlarge">-->
<!--                <label>First Name</label>-->
<!--                <input type="text" value="John" class="input-xlarge">-->
<!--                <label>Last Name</label>-->
<!--                <input type="text" value="Smith" class="input-xlarge">-->
<!--                <label>Email</label>-->
<!--                <input type="text" value="jsmith@yourcompany.com" class="input-xlarge">-->
<!--                <label>Address</label>-->
<!--                <textarea value="Smith" rows="3" class="input-xlarge">2817 S 49th Apt 314 San Jose, CA 95101-->
<!--		</textarea>-->

