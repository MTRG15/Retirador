<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.html");
	}

	//print_r($_POST);
	$id = mysqli_real_escape_string($link, $_POST['id']);
	//echo "$id2";
	

	$q = "SELECT * FROM `usuarios` WHERE id = '$id'"; //Me traigo el usuario

	if($result = mysqli_query($link, $q)){		
		
		while($row = mysqli_fetch_assoc($result)){ //Todas sus filas
			echo "Detalles del registro del usuario: " . $row["usuario"] ."<br>" ."<br>";
			echo "Nombres: " . $row["nombres"] . "<br>";
			echo "Apellidos: " . $row["apellidos"] . "<br>";
			echo "Cedula: ". $row["cedula"] . " <br>";
			echo "Direccion: ". $row["direccion"] . " <br>";
			echo "Sexo: ". $row["sexo"] . " <br>";
			echo "Telefono: ". $row["telefono"] . " <br>";
			echo "Correo: ". $row["email"] . " <br>";
			echo "<br>";
		}
	}

	mysqli_close($link);


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    
	<br>
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