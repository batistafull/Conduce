<?php include 'conexion.php';

mysqli_query($con, "DELETE FROM productos WHERE CODIGOP='$_GET[codigop]'")or die("No".mysqli_error($con));

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>