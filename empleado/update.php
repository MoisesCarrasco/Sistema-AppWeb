<?php

include("../conexion.php");
$con=conectar();
$Id_Empleado=$_POST['Id_Empleado'];
$curp=$_POST['curp'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE empleado SET  curp='$curp',nombres='$nombres',apellidos='$apellidos',Telefono='$Telefono' WHERE Id_Empleado='$Id_Empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:empleado.php");
    }
?>