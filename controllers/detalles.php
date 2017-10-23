<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.php");
	}

	//print_r($_POST);
	$id = mysqli_real_escape_string($link, $_POST['id']);
	$id2 = mysqli_real_escape_string($link, $_POST['id2']);
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

			$user = $row["usuario"];
			$q2 = "SELECT * FROM `boletos` WHERE id = '$id2'"; 
			echo "Evento: " . "<br>";
			if($result2 = mysqli_query($link, $q2)){	

				while($row2 = mysqli_fetch_assoc($result2)){
					
					echo "-Serial: " . $row2["serial"] . "<br>";
					echo "Nombre del Evento: " . $row2["evento"] . "<br>";
					echo "Fecha: " . $row2["fecha"] . "<br>";
					echo "Ubicacion: " . $row2["ubicacion"] . "<br>"."<br>";
				}	
				echo "<br>";		
			}	
		}
	}

	mysqli_close($link);
 ?>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="/styles/estilo.css">
    </head>
    <body></body>
</html>