<?php include 'conexion.php';

mysqli_query($con, "UPDATE cliente SET NOMBRE='$_GET[nombre]' WHERE CODIGOC='$_GET[codigoc]'")or die("No".mysqli_error($con));

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>