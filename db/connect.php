<?php 
	//Conexion para la base de datos
	defined('DB_HOST') or define ('DB_HOST', 'localhost');
	defined('DB_USER') or define ('DB_USER', 'root');
	defined('DB_PASS') or define ('DB_PASS', '');
	defined('DB_NAME') or define ('DB_NAME', 'sistemadeboletos'); //Nombre en minuscula

	//Si voy a crear la base de datos desde aqui no le coloco nombre porque aun no existe, luego si el DB_NAME
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

	if($link == false){
		die("ERROR".mysqli_connect_error());
	}

	//$query = "CREATE DATABASE sistemadeboletos"; // Para crear la base de datos la primera vez
	/*$query = "CREATE TABLE `usuarios` ( `id` INT NOT NULL AUTO_INCREMENT, `nombres` VARCHAR(255) NOT NULL ,  `apellidos` VARCHAR(255) NOT NULL, `cedula` INT NOT NULL , `direccion` VARCHAR(255) NOT NULL , `sexo` VARCHAR(255) NOT NULL , `telefono` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `usuario` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL, `admin` BOOLEAN NOT NUL, PRIMARY KEY (`id`)) ENGINE = MyISAM";
	//Creando la tabla de usuarios
	mysqli_query($link, $query);/*
	*/


	/*$query = "CREATE TABLE `boletos` ( `id` INT NOT NULL AUTO_INCREMENT, `serial` INT NOT NULL ,  `evento` VARCHAR(255) NOT NULL, `fecha` VARCHAR(255) NOT NULL, `ubicacion` VARCHAR(255) NOT NULL, `usuario` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM";*/
	//Creando la tabla de boletos
	//mysqli_query($link, $query);
 ?>