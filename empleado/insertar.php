<?php
include("../conexion.php");
$con=conectar();

$Id_Empleado=$_POST['Id_Empleado'];
$curp=$_POST['curp'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO empleado VALUES('$Id_Empleado','$curp','$nombres','$apellidos','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>