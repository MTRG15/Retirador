<?php 

	require_once("../db/connect.php");
	session_start(); //Reanudando session	
	if(!isset($_SESSION['user']) || $_SESSION['admin']==0){ //Si no hay sesion o el usuario no es admin 
		header("Location: ../index.php");
	}

	//print_r($_POST);
	$id = mysqli_real_escape_string($link, $_POST['id']);
	//echo "$id2";
	

	$q = "SELECT * FROM `usuarios` WHERE id = '$id'"; //Me traigo el usuario

	if($result = mysqli_query($link, $q)){		?>

		<!DOCTYPE html>
            <html>
            <head>
                <title></title>
                 <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
            </head>
            <body>
        <?php
		while($row = mysqli_fetch_assoc($result)){ //Todas sus filas ?>
                
                <div class="form-content mensaje">
                    <h2>Detalles de Usuario <?php echo $row["usuario"] ?> </h2>
                <table>
                    <tr> <th> Nombres:</th> <td> <?php echo $row["nombres"] ?> </td> </tr>
                    <tr> <th> Apellidos:</th> <td> <?php echo $row["apellidos"] ?> </td> </tr>
                    <tr> <th> Cédula:</th> <td> <?php echo $row["cedula"] ?> </td> </tr>
                    <tr> <th> Direccion:</th> <td> <?php echo $row["direccion"] ?> </td> </tr>
                    <tr> <th> Sexo:</th> <td> <?php echo $row["sexo"] ?> </td> </tr>
                    <tr> <th> Teléfono:</th> <td> <?php echo $row["telefono"] ?> </td> </tr>
                    <tr> <th> Correo:</th> <td> <?php echo $row["email"] ?> </td> </tr>
                </table>
                
		<?php }
	}

	mysqli_close($link);


 ?>


    
	<p>
	<?php
		if(isset($_SESSION['admin'])){ //Si es un admin puede regresar a su menu
	    		if($_SESSION['admin']==1){
	    			echo "<a href='menu_admin.php'><input type='button' value='Regresar al Menu'></input></a>";
	    		}
	    }
    ?>
    </p>
                <p><a href="cerrar.php"><input type="button" value="Cerrar Sesion"></input></a> </p>
                    </div>
</body>
</html>