
<?php 
session_start();

if (isset($_SESSION['Id_Usuario']) && isset($_SESSION['nombre'])) {

 ?>
<?php 
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM garrafon";
    $query=mysqli_query($con,$sql);
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Garrofones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                    
                                    <input type="text" class="form-control mb-3" name="costo" placeholder="Costp">
                                    <input type="text" class="form-control mb-3" name="precio_venta" placeholder="Precio Venta">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                                    <input type="text" class="form-control mb-3" name="caducidad" placeholder="Dia/Mes/Año">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../logout.php" class="btn btn-danger">Salir</a>
                                </form>

                        </div>

                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>ID_Garrafon</th>
                                        <th>Costo</th>
                                        <th>Precio Venta</th>
                                        <th>Color</th>
                                        <th>Caducidad</th>
                                        <th>Cantidad</th>
                                        <th>Operaciones</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['Id_Garrafon']?></th>
                                                <th><?php  echo $row['costo']?></th>
                                                <th><?php  echo $row['precio_venta']?></th>
                                                <th><?php  echo $row['color']?></th>
                                                <th><?php  echo $row['caducidad']?></th>  
                                                <th><?php  echo $row['cantidad']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['Id_Garrafon'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Id_Garrafon'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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