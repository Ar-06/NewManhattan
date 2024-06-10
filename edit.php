<?php

include('connection.php');
$con = connection();

$id = $_POST['id'];
$plato = $_POST['plato'];
$precio = $_POST['precio'];
$contenido = $_POST['contenido'];


$sql = "UPDATE pedidos SET Plato='$plato', Precio='$precio', Contenido='$contenido' WHERE Id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>