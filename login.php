<?php 
session_start(); 
include "conexion.php";
    $con=conectar();

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Nombre de Usuario vacio");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Contraseña vacia");
	    exit();
	}else{
		$sql = "SELECT * FROM usuario WHERE nombre='$uname' AND clave='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['nombre'] === $uname && $row['clave'] === $pass) {
            	$_SESSION['nombre'] = $row['nombre'];
            	$_SESSION['Id_Usuario'] = $row['Id_Usuario'];
            	header("Location:menu.php");
				
		        exit();
            }else{
				header("Location: index.php?error=Usuario o Contraseña Incorrecta");
		        exit();
			}
		}else{
			header("Location: index.php?error=Usuario o Contraseña Incorrecta");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}