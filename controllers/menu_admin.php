<?php 
	require_once("../db/connect.php");

	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.html");
	}

	
	echo "<h1>Listado de eventos</h1>";

	$q = "SELECT * FROM `usuarios`"; //Me traigo toda la tabla de usuarios
	if($result = mysqli_query($link, $q)){		
		
		while($row = mysqli_fetch_assoc($result)){ //Todas sus filas
			echo $row["nombres"] . " " . $row["apellidos"] . " " . $row["cedula"] . " <br>";
			$user = $row["usuario"];
			$id = $row["id"]; //Mandare el id de el usuario para mostrar detalles

			echo"<form method='post' action='detalles_usuario.php'><input type='submit' name='boton' value='Detalles'><input type='hidden' name='id' value='$id'></form>";
			echo"<form method='post' action='editar_usuario.php'><input type='submit' name='boton' value='Editar'><input type='hidden' name='id' value='$id'></form>";
			echo"<form method='post' action='eliminar_usuario.php'><input type='submit' name='boton' value='Eliminar'><input type='hidden' name='id' value='$id'></form>";
			

			$q2 = "SELECT * FROM `boletos` WHERE usuario = '$user'"; //Luego me traigo todos los eventos registrados por ese user

			if($result2 = mysqli_query($link, $q2)){	
				$regs = mysqli_num_rows($result2); //Numero de filas 
				if($regs == 0){
						echo "---" . "No posee eventos registrados" . " <br>" . "<br>";
						
				} 
				while($row2 = mysqli_fetch_assoc($result2)){
					
					echo "---" . $row2["evento"] . " - " . $row2["ubicacion"] . "   ";
					$id2 = $row2["id"];

					echo"<form method='post' action='detalles.php'><input type='submit' name='boton' value='Detalles'><input type='hidden' name='id' value='$id'><input type='hidden' name='id2' value='$id2'></form>";
					echo"<form method='post' action='editar.php'><input type='submit' name='boton' value='Editar'><input type='hidden' name='id' value='$id'><input type='hidden' name='id2' value='$id2'></form>";
					echo"<form method='post' action='eliminar.php'><input type='submit' name='boton' value='Eliminar'><input type='hidden' name='id' value='$id'><input type='hidden' name='id2' value='$id2'></form>";

					//echo "<a href='detalles.php'><input type='submit' value='Detalles'></input></a>". "  ";
					//echo "<a href='editar.php'><input type='submit' value='Editar'></input></a>". "  ";
					//echo "<a href='eliminar.php'><input type='submit' value='Eliminar'></input></a>". " <br>";
					//echo "</form>";
				}	
				echo "<br>";		
			}	
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
	<a href="compra.php"><input type="button" value="Agregar Registro"></input></a>
	<a href="cerrar.php"><input type="button" value="Cerrar Sesion"></input></a>
</body>
</html>