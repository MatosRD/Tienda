<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
include 'conexion.php';
include 'cone.php';





$id_n = $_GET['id'];


$insert_n = "SELECT * FROM ninos WHERE id_producto ='$id_n'";

$ejecut_n = mysqli_query($conexion, $insert_n);

$filas_n = mysqli_fetch_assoc($ejecut_n);
    
    $nombre_n = $filas_n['nombre'];
    $pago_n = $filas_n['precio'];
    $descripcion_n = $filas_n['descripcion'];
    $imagensub_n  = $filas_n['imagen'];

    
    $binarioimg_n = $imagensub_n ;
    $binarioimg_n = mysqli_escape_string($conex, $binarioimg_n);

    $carr_n = "SELECT * FROM carrito where nombre_carrito = '$nombre_n' ";
    $ejecut_2n = mysqli_query($conex, $carr_n);
    $INSER_n = "INSERT INTO carrito (id_carrito_producto, descricion_carrito ,nombre_carrito, precio_carrito, img_car) VALUES ('$id_n', '$nombre_n', '$descripcion_n', '$pago_n','$binarioimg_n') ";


if(mysqli_num_rows($ejecut_2n)  == 0){
    $enviar = mysqli_query($conex, $INSER_n );

    header("location: ninos.php");
    
}else{
    echo 'ya elegiste este alticulo';
}


?>