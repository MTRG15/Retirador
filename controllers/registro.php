<?php

	//print_r($_POST);
	if(!isset($_POST["reg-boton"])){
		header("Location: ../index.html");
	}

	require_once("../db/connect.php");

	$user = $_POST["reg-user"];
	//echo "$user";

	//Primero verifico que el usuario no este registrado;
	$q = "SELECT * FROM `usuarios` WHERE usuario = '$user'";
	if($result = mysqli_query($link, $q)){		
		$rows = mysqli_num_rows($result);
		if($rows == 0){ //El usuaio no esta registrado entonces lo agrego a la tabla

			//echo "Nadaaa";
			//mysqli_real_escape_string sirve para llevar al $post  una variable validad para el SQL
			$n = mysqli_real_escape_string($link, $_POST['reg-nombre']);
			$a = mysqli_real_escape_string($link, $_POST['reg-apellido']);
			$c = mysqli_real_escape_string($link, $_POST['reg-cedula']);
			$d = mysqli_real_escape_string($link, $_POST['reg-direccion']);
			$s = mysqli_real_escape_string($link, $_POST['reg-sexo']); 
			$t = mysqli_real_escape_string($link, $_POST['reg-telefono']); 
			$e = mysqli_real_escape_string($link, $_POST['reg-correo']);
			$u = mysqli_real_escape_string($link, $_POST['reg-user']);
			$p = mysqli_real_escape_string($link, $_POST['reg-password']);
			$query = "INSERT INTO `usuarios` (`nombres`, `apellidos`, `cedula`, `direccion`, `sexo`, `telefono`, `email`, `usuario`, `password`)VALUES('$n','$a', '$c', '$d', '$s', '$t', '$e', '$u', '$p');";

			$result2 = mysqli_query($link, $query);
			if($result2){
				echo "Added";
			}else{
				echo "Failed";
			}
		}else{
			echo "Usuario  - $user -  registrado <br>";
			echo "<a href='../index.html'>Regresar al formulario</a>";
		}
	}
	



	mysqli_close($link);
	
?>