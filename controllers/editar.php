<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.html");
	}
	if(isset($_POST['botone'])){
		//echo "eshooo";
		$s = mysqli_real_escape_string($link, $_POST['reg-serial']);
		$n = mysqli_real_escape_string($link, $_POST['reg-nombreE']);
		$f = mysqli_real_escape_string($link, $_POST['reg-fecha']);
		$u = mysqli_real_escape_string($link, $_POST['reg-ubicacion']);
		$id = mysqli_real_escape_string($link, $_POST['id']);
		//echo "id "."$id";
		$q = "UPDATE `boletos` SET `serial`='$s', `evento`='$n', `fecha` = '$f', `ubicacion` = '$u' WHERE `id`='$id'";

		
		$result = mysqli_query($link, $q);
			//header("Location: menu_admin.php");

		header("Location: menu_admin.php");	
			


	}else{
		$id = mysqli_real_escape_string($link, $_POST['id']);
		$id2 = mysqli_real_escape_string($link, $_POST['id2']);

		$q = "SELECT * FROM `boletos` WHERE id = '$id2'"; //Me traigo el evento

		if($result = mysqli_query($link, $q)){		
			
			while($row = mysqli_fetch_assoc($result)){ //Todas sus filas
				$s = $row["serial"];
				$n = $row["evento"];
				$f = $row["fecha"];
				$u = $row["ubicacion"];
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
 </head>
 <body>
 	<h1>Editando evento</h1>
    <div id="edit">
	    <form name="regB" method="post" action="">
	    <table>
	        <tr><th>Serial:</th>       <td><input  name="reg-serial"    type="number"     placeholder="<?= $s ?>"></td></tr>
	        <tr><th>Nombre:</th>     <td><input  name="reg-nombreE"  type="text"     placeholder="<?= $n ?>"></td></tr>
	        <tr><th>Fecha:</th>        <td><input  name="reg-fecha"    type="text" placeholder="<?= $f ?>"></td></tr>
	        <tr><th>Ubicacion:</th> <td><input  name="reg-ubicacion" type="text"     placeholder="<?= $u ?>"></td></tr>
	    </table>
	    <input name="id" type="hidden" value="<?= isset($_POST['botone'])? '' : $id2 ?>">
	    <input name="botone" type="submit" value="Editar Boleto">
	    </form>
    </div>
    <?php
    	if(isset($_SESSION['admin'])){ //Si es un admin puede regresar a su menu
    		if($_SESSION['admin']==1){
    			echo "<a href='menu_admin.php'><input type='button' value='Regresar al Menu'></input></a>";
    		}
    	}
    ?>
	<a href="cerrar.php"><input type="button" value="Cerrar Sesion"></input></a>
 </body>
 </html>

