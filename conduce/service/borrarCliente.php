<?php include 'conexion.php';

mysqli_query($con, "DELETE FROM cliente WHERE CODIGOC='$_GET[codigoc]'")or die("No".mysqli_error($con));

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>