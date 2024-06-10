<?php


include ('connection.php');
$con = connection();


$id = null;
$plato = $_POST['plato'];
$precio = $_POST['precio'];
$contenido = $_POST['contenido'];


$sql = "INSERT INTO pedidos VALUES ('$id','$plato','$precio','$contenido')";
$query = mysqli_query($con,$sql);



if($query){
    Header("Location: index.php");
};


?>