<?php
    $post[0] = [ "0", "<b>Don't Starve</b><br>El científico llevado al extremo en un ambiente hostil<br>2X/1X/201X" ];
    $post[1] = [ "1", "<b>Bioshock Infinite Comic</b><br>El último avance en la popular historia<br>2X/1X/201X" ];
    $post[2] = [ "2", "<b>Transistor</b><br>La historia de un paraíso distópico en un mundo tecnológico<br> 2X/1X/201X" ];
    $post[3] = [ "3", "<b>Mr. Robot</b><br>El mayor nergasmo del momento<br> 2X/1X/201X" ];
    
 shuffle($post);
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <title>Registro de Eventos Unet</title>
        <link rel="stylesheet" type="text/css" href="styles/estilo.css">
</head>
<body>

    <h1>Eventos UNET</h1>
    <div class="form-content login">
        <h2>Ingreso</h2>
        <form name="ini" method="post" action="controllers/iniciar.php">
            <input type="text" name="ini-user" class="campo" placeholder="Nombre de Usuario">
            <input type="text" name="ini-password" class="campo" placeholder="Contraseña">
            <input type="submit" name="ini-boton" class="campo" value="Iniciar Sesion">
        </form>
    </div>
    <br>
    <div class="form-content registro">
    <h2>Registro</h2>
    <form name="reg" method="post" action="controllers/registro.php">
    <table>
        <tr><th>Nombres:</th>       <td><input  name="reg-nombre"    type="text"     placeholder="Gerifruncio Maizeno"></td></tr>
        <tr><th>Apellidos:</th>     <td><input  name="reg-apellido"  type="text"     placeholder="De La Consolacion"></td></tr>
        <tr><th>Cedula:</th>        <td><input  name="reg-cedula"    type="number"   placeholder="123456"></td></tr>
        <tr><th>Direccion:</th>     <td><input  name="reg-direccion" type="text"     placeholder="Junto a Merceria Paquita"></td></tr>
        <tr><th>Sexo:</th>          <td><select name="reg-sexo" id="sex-select"> 
                                    <option value="none">-Seleccione-</option> 
                                    <option value="masculino">Masculino</option> 
                                    <option value="femenino">Femenino</option> 
                                    <option value="otro">Helicoptero</option></select></td></tr>
        <tr><th>Telefono:</th>      <td><input  name="reg-telefono"  type="number"   placeholder="08001235555"></td></tr>
        <tr><th>Correo:</th>        <td><input  name="reg-correo"   type="text"     placeholder="malindranio@gmail.com"></td></tr>
        <tr><th>Usuario:</th>       <td><input  name="reg-user"      type="text"     placeholder="p3tr0m1n0"></td></tr>
        <tr><th>Contraseña:</th>    <td><input  name="reg-password"  type="password" placeholder="chanchan"></td></tr>
    </table>
    <input name="reg-boton" type="submit" class="campo" value="Registrarse">
    </form>
    </div>
    
    <?php 
        for($i = 0; $i<4 ; $i++){ ?>
    <div class="form-content post">
        <h3>Tendencias</h3>
        <table>
            <tr> 
            <td class="poster-container"> <img class="poster" src="styles/imagenes/poster<?php echo $post[$i][0] ?>.png"> </td>
            <td>
                <p><?php echo $post[$i][1] ?></p> 
            </td>
            </tr>
        </table>
        
    </div>
    <?php } ?>
     
    
</body>

</html>