<?php 

	session_start(); //Reanudando session	
	if(!isset($_SESSION['user'])){
		header("Location: ../index.php");
	}
	//echo "comprando";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
    <title>Compra de Boletos</title>
 </head>
 <body>
 	<h1>Registrar Boleto</h1>
    <div id="reg-boleto" class="form-content mensaje">
    <form name="regB" method="post" action="compra_exitosa.php">
    <table>
        <tr><th>Serial:</th>       <td><input  name="reg-serial"    type="number"     placeholder="2678432"></td></tr>
        <tr><th>Nombre:</th>     <td><input  name="reg-nombreE"  type="text"     placeholder="Wacken Open Air"></td></tr>
        <tr><th>Fecha:</th>        <td><input  name="reg-fecha"    type="text" placeholder="dd/mm/aaaa"></td></tr>
        <tr><th>Ubicacion:</th> <td><input  name="reg-ubicacion" type="text"     placeholder="Altos/Medios/VIP/Platino"></td></tr>
    </table>
    <input name="boton-boleto" type="submit" value="Registrar Boleto">
    </form>
    </div>
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