<?php 
session_start();

if (isset($_SESSION['Id_Usuario']) && isset($_SESSION['nombre'])) {

 ?>
<?php 
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Datos Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <a href="../logout.php" class="btn btn-danger">Salir</a>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                               
                                <th>Id_Empleado</th> <input type="text" class="form-control mb-3" name="Id_Empleado" placeholder="Id Empleado">
                                <th>Curp</th> <input type="text" class="form-control mb-3" name="curp" placeholder="Curp">
                                <th>Nombres</th>    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                <th>Apellidos</th>    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                <th>Telefono</th>    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../menu.php" class="btn btn-info">Regresar</a>
                            
                                </form>

                        </div>

                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id_Empleado</th>
                                        <th>Curp</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Operaciones</th>
                                      
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Id_Empleado']?></th>
                                                <th><?php  echo $row['curp']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['Telefono']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['Id_Empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Id_Empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>

<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>