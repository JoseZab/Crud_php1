<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
        <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Emprendimiento JDM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
        
            <li class="nav-item">
            <a class="nav-link " href="index.php">Productos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="index.php">Servicios</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="index.php">Proyectos</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
        </div>
    </div>
    </nav>
<br>
<div class="container">
        <h1 class="text-center" style="background-color: black; color:white">EDITAR PRODUCTOS</h1>
    </div>
    </div>
    <br>
    <form class="container" action="../CRUD/EditarDatos.php" method="POST">
        <?php 
        include_once ('../config/Conexion.php');
        $sql = "SELECT * FROM productos WHERE IdProducto = ".$_REQUEST['Id'];
        $resultado = $conexion->query($sql);

        $row =$resultado->fetch_assoc();

        ?>
        <input type="Hidden" class ="form-control" name="Id" value = "<?php echo $row['IdProducto'];?>">
      
        <!--TRAER DATOS CATEGORIAS-->
        <label>Categorias</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Categorias">
            <option selected disabled>--Seleccione Categorias--</option>
            <?php
             
             include ("../config/Conexion.php");

             $sql1 = "SELECT * FROM categoria WHERE Id=".$row['CategoriaId'];
             $resultado1 = $conexion->query($sql1);

             $row1 = $resultado1->fetch_assoc();

             echo "<option selected value='".$row1['Id']."'>".$row1['nombre']."</option>";

             $sql2 = "SELECT * FROM categoria";
             $resultado2 = $conexion->query($sql2);

             while ($Fila = $resultado2->fetch_array()) {
                 echo "<option value='".$Fila['Id']."'>".$Fila['nombre']."</option>";
             }
         ?>   
           
          
        </select>
        <label>Marcas</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Marcas">
            <option selected disabled>--Seleccione marcas--</option>
              <?php
                include ("../config/Conexion.php");

                $sql3 = "SELECT * FROM marcas WHERE Id=".$row['MarcaId'];
                $resultado3 = $conexion->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['Id']."'>".$row3['NombreMarca']."</option>";

                $sql4 = "SELECT * FROM Marcas";
                $resultado4 = $conexion->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['Id']."'>".$Fila['NombreMarca']."</option>";
                }
            ?>  
            
        </select>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="Precio" value="<?php echo $row['Precio']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="Descripcion"
                value="<?php echo $row['DescripcionProducto']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" value="<?php echo $row['Nombre']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>