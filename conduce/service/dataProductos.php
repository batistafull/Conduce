 <?php include 'conexion.php';


   if(isset($_GET['single']) && $_GET['single'] == "yes"){
   	$datos = mysqli_query($con, "SELECT * FROM productos WHERE CODIGOP='$_GET[codigop]'");
   }else{
   $datos = mysqli_query($con, "SELECT * FROM productos ORDER BY DESCR ASC");
    }


   $rowdata = array();
   while($row=mysqli_fetch_assoc($datos)){
   		$rowdata[] = $row;
   }
echo json_encode($rowdata);

 ?>