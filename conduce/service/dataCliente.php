<?php include 'conexion.php';


   if(isset($_GET['single']) && $_GET['single'] == "yes"){
   	$datos = mysqli_query($con, "SELECT * FROM cliente WHERE CODIGOC='$_GET[codigoc]'");
   }else{
   $datos = mysqli_query($con, "SELECT * FROM cliente ORDER BY NOMBRE ASC");
    }
   $rowdata = array();
   while($row=mysqli_fetch_assoc($datos)){
   		$rowdata[] = $row;
   }
echo json_encode($rowdata);

 ?>