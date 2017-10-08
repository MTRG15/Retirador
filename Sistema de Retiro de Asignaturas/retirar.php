<html>

    <head>
        <meta charset="utf-8">
        <title>Confimarción de Retiro de Materia</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
        
    </head>

    <body class="retiro">
    
<?php
    $NOMBRE = $_REQUEST['nombre'];
    $APELLIDO = $_REQUEST['apellido'];
    $CEDULA = $_REQUEST['cedula'];
    $CARRERA = $_REQUEST['carrera'];
    $SEMESTRE = $_REQUEST['semestre'];
    $ASIGNATURA = $_REQUEST['asignatura'];
    $CODIGO = $_REQUEST['codigo'];
    $UNIDADES = $_REQUEST['unidades'];
    $MOTIVO = $_REQUEST['motivo'];

?>
    <h1><img src="css/Logo2.png" class="logo1">Retiro de Materia Exitoso</h1>
    <fieldset class="recibido">
        <p>Los datos han sido procesados correctamente, esperamos que su semestre y su vida se vean aliviados sin la presión psicológica de <?= $ASIGNATURA ?> </p>
        <table>
            <tr> <th>Nombre:</th> <td><?= $NOMBRE ?></td>     <th>Asignatura:</th> <td><?= $ASIGNATURA ?></td> </tr>
            <tr> <th>Apellido:</th> <td><?= $APELLIDO ?></td> <th>Código:</th> <td><?= $CODIGO ?></td> </tr>
            <tr> <th>Cédula:</th> <td><?= $CEDULA ?></td>     <th>Unidades:</th> <td><?= $UNIDADES ?></td> </tr>
            <tr> <th>Carrera:</th> <td><?= $CARRERA ?></td>   <th>Motivo:</th> <td><?= $MOTIVO ?></td></tr>
            <tr> <th>Semestre:</th> <td><?= $SEMESTRE ?></td> </tr>
        </table>
    </fieldset>
    
</body>
</html>
