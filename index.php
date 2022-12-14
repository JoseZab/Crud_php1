<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JDM Emprendimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white">LISTADO DE PRODUCTOS</h1>
    </div>
    <br>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
                </tr>
                </tr>
                </tr>
            </thead>
            <tbody>
                <?php
                require("config/Conexion.php");

                $sql = $conexion->query("SELECT * FROM productos 
                INNER JOIN categorias ON productos.CategoriaId = categorias.Id
                INNER JOIN marcas ON productos.MarcaId=marcas.Id
            ");
            while ($resultado =$sql->fetch_assoc()) {
             ?>
              <tr>
                    <th scope="row"><?php echo $resultado['IdProducto']?></th>
                    <th scope="row"><?php echo $resultado['nombre']?></th>
                    <th scope="row"><?php echo $resultado['NombreMarca']?></th>
                    <th scope="row"><?php echo $resultado['Precio']?></th>
                    <th scope="row"><?php echo $resultado['DescripcionProducto']?></th>
                    <th scope="row"><?php echo $resultado['Estado']?></th>
                    <th>
                        <a href="" class="btn btn-warning">Editar</a>
                        <a href="" class="btn btn-danger"  >Eliminar</a>
                    </th>
                    
                </tr>
             <?php  
            }
                ?>
               

            </tbody>
        </table>
        <div class="container" >
            <a href="Formularios/AgregarForm.php" class="btn btn-success">Agregar Producto</a>
        </div>
    </div>

</body>

</html>