<?php include 'conexion.php';

mysqli_query($con, "UPDATE productos SET DESCR='$_GET[descr]' WHERE CODIGOP='$_GET[codigop]'")or die("No".mysqli_error($con));

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>