<?php

include 'cone.php';

$id_e = $_GET['id'];

$eliminar = "DELETE FROM carrito WHERE id_carrito = '".$id_e."' ";
$eje_eliminar = mysqli_query($conex, $eliminar);
header("location: carrito0.1.php");

?>