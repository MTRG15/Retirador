<?php 
	require_once("../db/connect.php");
	session_start();
	
	if(!isset($_SESSION['user'])){
		header("Location: ../index.html");
	}

	$usuario = $_SESSION['user'];
	$serial = $_POST['reg-serial'];
	$nombreE = $_POST['reg-nombreE'];
	$fecha = $_POST['reg-fecha'];
	$ubicacion = $_POST['reg-ubicacion'];
	//echo "$usuario";

	$reg = 0;
	//Primero verifico que el serial no este registrado
	$q = "SELECT * FROM `boletos` WHERE `serial` = '$serial'";
	if($result = mysqli_query($link, $q)){		
		$rows = mysqli_num_rows($result);
		if($rows == 0){ //El uboleto no esta registrado entonces lo agrego a la tabla

			//mysqli_real_escape_string sirve para llevar al $post  una variable validad para el SQL
			$s = mysqli_real_escape_string($link, $_POST['reg-serial']);
			$n = mysqli_real_escape_string($link, $_POST['reg-nombreE']);
			$f = mysqli_real_escape_string($link, $_POST['reg-fecha']);
			$u = mysqli_real_escape_string($link, $_POST['reg-ubicacion']);
			$us = mysqli_real_escape_string($link, $_SESSION['user']); 

			$query = "INSERT INTO `boletos` (`serial`, `evento`, `fecha`, `ubicacion`, `usuario`)VALUES('$s','$n', '$f', '$u', '$us');";

			$result2 = mysqli_query($link, $query);
			if($result2){
				echo "Added";
				$reg = 1;
			}else{
				echo "Failed";
				$reg = 0;
			}
		}else{
			echo "El boleto  - $serial -  ya se encuentra registrado <br>";
			$reg = 0;
			//echo "<a href='compra.php'>Regresar al registro</a>";
		}
	}
	

	mysqli_close($link);

 ?>

 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>Confimarción de Compra de Boleto</title>
        
    </head>

    <body class="compra_e">
    <?php if($reg==1){ ?>	
	    <fieldset class="recibido">
	    	
	        <p>Los datos de su boleta: <?= $serial ?> han sido agregados. </p>
	        <table>
	            <tr> <th>Serial:</th> <td><?= $serial ?></td>     
	            <tr> <th>Evento:</th> <td><?= $nombreE ?></td> 
	            <tr> <th>Fecha:</th> <td><?= $fecha ?></td>     
	            <tr> <th>Ubicacion:</th> <td><?= $ubicacion ?></td>   
	        </table>
	        
	    </fieldset>
	<?php } ?>

	<a href="compra.php"><input type="button" value="Registrar otro boleto"></input></a>
	<a href="cerrar.php"><input type="button" value="Cerrar Sesion"></input></a>
	</body>
</html>