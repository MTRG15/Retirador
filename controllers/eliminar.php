<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.html");
	}

	$id = mysqli_real_escape_string($link, $_POST['id2']); //Id del evento a eliminar
	echo "$id";
	
	$q = "DELETE FROM boletos WHERE id = '$id'";

	$result = mysqli_query($link, $q);

	//header("Location: menu_admin.php");	
			
	mysqli_close($link);
 ?>

