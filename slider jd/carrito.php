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





$id_f = $_GET['id'];

$insert_f = "SELECT * FROM producto WHERE id_producto ='$id_f'";

$ejecut = mysqli_query($conexion, $insert_f);

$filas = mysqli_fetch_assoc($ejecut);
    
    $nombre_f = $filas['nombre'];
    $pago_f = $filas['precio'];
    $descripcion = $filas['descripcion'];
    $imagensub  = $filas['imagen'];

    
    $binarioimg = $imagensub ;
    $binarioimg = mysqli_escape_string($conex, $binarioimg);

    $carr = "SELECT * FROM carrito where nombre_carrito = '$nombre_f' ";
    $ejecut_2 = mysqli_query($conex, $carr);
    $INSER = "INSERT INTO carrito (id_carrito_producto, descricion_carrito ,nombre_carrito, precio_carrito, img_car) VALUES ('$id_f', '$nombre_f', '$descripcion', '$pago_f','$binarioimg') ";


if(mysqli_num_rows($ejecut_2)  == 0){
    $enviar = mysqli_query($conex, $INSER );

    header("location: tenis.php");
    
}else{
    echo 'ya elegiste este alticulo';
}
 


$insert_m = "SELECT * FROM mujeres WHERE id_producto ='$id_f'";

$ejecut_m = mysqli_query($conexion, $insert_m);

$filas_m = mysqli_fetch_assoc($ejecut);
    
    $nombre_m = $filas_m['nombre'];
    $pago_m = $filas_m['precio'];
    $descripcion_m = $filas_m['descripcion'];
    $imagensub_m  = $filas_m['imagen'];

    
    $binarioimg_m = $imagensub ;
    $binarioimg_m = mysqli_escape_string($conex, $binarioimg_m);

    $carr_m = "SELECT * FROM carrito where nombre_carrito = '$nombre_f' ";
    $ejecut_2m = mysqli_query($conex, $carr_m);
    $INSER_m = "INSERT INTO carrito (id_carrito_producto, descricion_carrito ,nombre_carrito, precio_carrito, img_car) VALUES ('$id_f', '$nombre_m', '$descripcion', '$pago_f','$binarioimg') ";


if(mysqli_num_rows($ejecut_2m)  == 0){
    $enviar = mysqli_query($conex, $INSER_m );

    header("location: tenis.php");
    
}else{
    echo 'ya elegiste este alticulo';
}


?>



</body>
</html>

    
