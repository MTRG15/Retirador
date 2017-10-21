<?php 
	if(!isset($_POST["ini-boton"])){
		header("Location: ../index.html");
	}

	require_once("../db/connect.php");

	$user = $_POST["ini-user"];
	$pass = $_POST["ini-password"];

	$es = 0;

	$q = "SELECT * FROM `usuarios` WHERE usuario = '$user' AND password = '$pass'";
	if($result = mysqli_query($link, $q)){		
		$rows = mysqli_num_rows($result);
		if($rows == 0){ //El usuaio no esta registrado entonces lo agrego a la tabla
			echo "Combinacion de usuario y contraseña invalida <br>";
			echo "<a href='../index.html'>Regresar al formulario</a>";
		}else{ //Si puede iniciar sesion
			session_start();
			$_SESSION["user"] = $user;
			echo "Iniciando sesion";
			$es = 1;
		}
	}
	
	if($es == 1){
		$adm = '1';
		$q = "SELECT * FROM `usuarios` WHERE usuario = '$user' AND password = '$pass' AND admin = '$adm'";
		if($result = mysqli_query($link, $q)){		
			$rows = mysqli_num_rows($result);
			if($rows == 0){ //El usuaio no es administrador
				//echo "NO";
				$_SESSION['admin']==0;
				header("Location: compra.php");
				//echo "<a href='../index.html'>Regresar al formulario</a>";
			}else{ //El usuario es adminitrador
				//echo "SI";
				$_SESSION['admin']=1;
				header("Location: menu_admin.php");
				//echo "<a href='../index.html'>Regresar al formulario</a>";
			}
		}
	}




	mysqli_close($link);
 ?>