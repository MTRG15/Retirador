<?php
$NOMBRE=$_REQUEST['nombre'];
$CARRERA=$_REQUEST['carrera'];
$MOTIVO=$_REQUEST['motivo'];
echo <<<TEXT
<p>Nombre <b>$NOMBRE</b></p>
<p>Carrera <b>$CARRERA</b></p>
<p>Motivo <b>$MOTIVO</b></p>
TEXT;
?>