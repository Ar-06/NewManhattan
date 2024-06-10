<?php
include ('connection.php');

$con = connection();


$sql = "SELECT * FROM pedidos";
$query = mysqli_query ($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant NewManhattan</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <center>
    <h1>Restaurant System</h1>
    </center>
  

    <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <form class="col-md-6 col-lg-4 p-3" action="insert.php" method="POST">
            <h3 class="text-center text-secondary"></h3>
            <div class="mb-3">
                <label for="Plato" class="form-label">Plato</label>
                <input type="text" class="form-control" name="plato" id="plato">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <input type="text" class="form-control" name="contenido" id="contenido">
            </div>
            <div class="mb-3 btn-center">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            </div>
        </form>
        <div class="col-8 p-4">
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Plato</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Contenido</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=$row['Id']?></td>
                        <td><?=$row['Plato']?></td>
                        <td><?=$row['Precio']?></td>
                        <td><?=$row['Contenido']?></td>
                        <td>
                            <a href="update.php?id=<?=$row['Id']?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="delete.php?id=<?=$row['Id']?>" class="btn btn-small btn-danger"><i class="fa fa-solid fa-trash"></i></a>  
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

</body>
</html>