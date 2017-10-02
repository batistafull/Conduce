<?php include 'conexion.php';

mysqli_query($con, "INSERT INTO conduce(CODIGOP, FACTURA, CLIENTE, 
								DIRECCION,TELEFONO,PRODUCTO,CANTIDAD,PRECIO,ITBIS)
				 				VALUE('$_GET[codigop]','$_GET[factura]','$_GET[cliente]','$_GET[direccion]','$_GET[telefono]','$_GET[producto]','$_GET[cantidad]','$_GET[precio]','$_GET[itbis]')");

$raw = array("statu" => "Ok");

$rawdata[] = $raw;
echo json_encode($rawdata);

 ?>