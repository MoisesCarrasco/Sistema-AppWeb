<?php
include("../conexion.php");
$con=conectar();
$costo=$_POST['costo'];
$precio=$_POST['precio_venta'];
$color=$_POST['color'];
$caducidad=$_POST['caducidad'];
$cantidad=$_POST['cantidad'];



$sql="INSERT INTO garrafon VALUES('$costo','$precio','$color','$caducidad','$cantidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: garrafon.php");
    
}else {
}
?>