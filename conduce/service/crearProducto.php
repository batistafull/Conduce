<?php include 'conexion.php';

mysqli_query($con, "INSERT INTO productos(CODIGOP, DESCR) VALUE('$_GET[codigop]','$_GET[descr]')");

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>