<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	

	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.php");
	}

	$id = mysqli_real_escape_string($link, $_POST['id']); //Id del evento a eliminar
	echo "$id";
	
	$q = "DELETE FROM usuarios WHERE id = '$id'";

	$result = mysqli_query($link, $q);

	//header("Location: menu_admin.php");	
			
	mysqli_close($link);


 ?>