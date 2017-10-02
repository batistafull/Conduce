<?php include 'conexion.php';

if(isset($_GET['single']) && $_GET['single'] == "yes"){
   $datos = mysqli_query($con, "SELECT * FROM conduce WHERE FACTURA='$_GET[factura]'");
   }else{
   	$datos = mysqli_query($con, "SELECT * FROM conduce GROUP BY FACTURA");
   	}
   $rowdata = array();
   while($row=mysqli_fetch_assoc($datos))
   {
   		$rowdata[] = $row;
   }
echo json_encode($rowdata);

 ?>