<?php include 'conexion.php';

mysqli_query($con, "INSERT INTO cliente(CODIGOC, NOMBRE) VALUE('$_GET[codigoc]','$_GET[nombre]')");

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>