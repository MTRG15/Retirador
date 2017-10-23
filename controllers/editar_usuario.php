<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.php");
	}
	if(isset($_POST['botone'])){
		//echo "eshooo";
		$n = mysqli_real_escape_string($link, $_POST['reg-nombre']);
		$a = mysqli_real_escape_string($link, $_POST['reg-apellido']);
		$c = mysqli_real_escape_string($link, $_POST['reg-cedula']);
		$d = mysqli_real_escape_string($link, $_POST['reg-direccion']);
		$s = mysqli_real_escape_string($link, $_POST['reg-sexo']);
		$t = mysqli_real_escape_string($link, $_POST['reg-telefono']);
		$co = mysqli_real_escape_string($link, $_POST['reg-correo']);
		$u = mysqli_real_escape_string($link, $_POST['reg-user']);
		$p = mysqli_real_escape_string($link, $_POST['reg-password']);
		$id = mysqli_real_escape_string($link, $_POST['id']);
		//echo "id "."$id";
		$q = "UPDATE `usuarios` SET `nombres`='$n', `apellidos`='$a', `cedula` = '$c', `direccion` = '$d', `sexo` = '$s' , `telefono` = '$t', `email` = '$co' , `usuario` = '$u', `password` = '$p'   WHERE `id`='$id'";

		
		$result = mysqli_query($link, $q);

		header("Location: menu_admin.php");	
			


	}else{
		$id = mysqli_real_escape_string($link, $_POST['id']);


		$q = "SELECT * FROM `usuarios` WHERE `id` = '$id'"; //Me traigo el usuario

		if($result = mysqli_query($link, $q)){		
			
			while($row = mysqli_fetch_assoc($result)){ //Todas sus filas
				$n = $row["nombres"];
				$a = $row["apellidos"];
				$c = $row["cedula"];
				$d = $row["direccion"];
				$s = $row["sexo"];
				$t = $row["telefono"];
				$co = $row["email"];
				$u = $row["usuario"];
				$p = $row["password"];
			}
		}


	}
	
	mysqli_close($link);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>Edicion</title>
      <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
 </head>
 <body>
 	<h1>Editando Usuario</h1>
    <div id="edit" class="form-content mensaje">
	    <form name="regB" method="post" action="">
	    <table>
	        <tr><th>Nombres:</th>       <td><input  name="reg-nombre"    type="text"     placeholder="<?= $n ?>"></td></tr>
	        <tr><th>Apellidos:</th>     <td><input  name="reg-apellido"  type="text"     placeholder="<?= $a ?>"></td></tr>
	        <tr><th>Cedula:</th>        <td><input  name="reg-cedula"    type="number"   placeholder="<?= $c ?>"></td></tr>
	        <tr><th>Direccion:</th>     <td><input  name="reg-direccion" type="text"     placeholder="<?= $d ?>"></td></tr>
	        <tr><th>Sexo:</th>          <td><select name="reg-sexo"> 
	                                    <option value="none">-Seleccione-</option> 
	                                    <option value="masculino">Masculino</option> 
	                                    <option value="femenino">Femenino</option> 
	                                    <option value="otro">Helicoptero</option></select></td></tr>
	        <tr><th>Telefono:</th>      <td><input  name="reg-telefono"  type="number"   placeholder="<?= $t ?>"></td></tr>
	        <tr><th>Correo:</th>        <td><input  name="reg-correo"   type="text"     placeholder="<?= $co ?>"></td></tr>
	        <tr><th>Usuario:</th>       <td><input  name="reg-user"      type="text"     placeholder="<?= $u ?>"></td></tr>
	        <tr><th>Contraseña:</th>    <td><input  name="reg-password"  type="password" placeholder="<?= $p ?>"></td></tr>
	    </table>
	    <input name="id" type="hidden" value="<?= isset($_POST['botone'])? '' : $id ?>">
	    <input name="botone" type="submit" value="Editar Usuario">
	    </form>
    
    <?php
    	if(isset($_SESSION['admin'])){ //Si es un admin puede regresar a su menu
    		if($_SESSION['admin']==1){
    			echo "<a href='menu_admin.php'><input type='button' value='Regresar al Menu'></input></a>";
    		}
    	}
    ?>
	<a href="cerrar.php"><input type="button" value="Cerrar Sesion"></input></a>
     </div>
 </body>
 </html>