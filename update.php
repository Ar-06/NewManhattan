<?php
include ('connection.php');

$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM pedidos WHERE Id = '$id'";
$query = mysqli_query ($con, $sql);
$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <form class="col-md-6 col-lg-4 p-3" action="edit.php" method="POST">
            <h3 class="text-center text-secondary"></h3>
            <h1>Editar Pedido</h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">Id</label>
                <input type="hidden" class="form-control" name="id" value="<?=$row['Id']?>">
            </div>
            <div class="mb-3">
                <label for="Plato" class="form-label">Plato</label>
                <input type="text" class="form-control" name="plato" value ="<?=$row['Plato']?>">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="<?=$row['Precio']?>">
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <input type="text" class="form-control" name="contenido" id="contenido" value="<?=$row['Contenido']?>">
            </div>
            <div class="mb-3 btn-center">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>