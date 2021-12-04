<?php
include("../conexion.php");
$con=conectar();

$Id_Cliente=$_POST['Id_Cliente'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$calle=$_POST['calle'];
$numero=$_POST['numero'];
$colonia=$_POST['colonia'];
$municipio=$_POST['Municipio'];


$sql="INSERT INTO cliente VALUES('$Id_Cliente','$nombres','$apellidos','$telefono','$calle','$numero','$colonia','$municipio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>