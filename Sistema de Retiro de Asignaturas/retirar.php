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
    
    <fieldset class="recibido">
        <div class="datos-estudiante">
            <p>Nombre: <?= $NOMBRE ?></p>    
            <p>Apellido: <?= $APELLIDO ?></p>
            <p>Cédula: <?= $CEDULA ?></p>
            <p>Carrera: <?= $CARRERA ?></p>
            <p>Semestre: <?= $SEMESTRE ?></p>
        </div>
        <div ckass="datos-estudiante">
            <p>Asignatura: <?= $ASIGNATURA ?></p>
            <p>Código: <?= $CODIGO ?></p>
            <p>Unidades: <?= $UNIDADES ?></p>
            <p>Motivo: <?= $MOTIVO ?></p>
        </div>
    </fieldset>
    
</body>
</html>
