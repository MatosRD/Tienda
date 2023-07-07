<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slider.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>
<body>


<?php
include 'cone.php';
?>

<div class="cont_1">
        <nav class="navi">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <div class="sub_menu" > 
            <ul><li><a href="inicio.php" class="uno" style="animation: none;">INICIO</a></li></ul>
            <ul><li><a href="tenis.php">TENIS</a></li></ul>
            <ul><li><a href="#">ROPA</a></li></ul>
            <ul><li><a href="#">SOBRE NOSOTROS</a></li></ul>
            <ul><li><a href="detacado.php">NOVEDADES </a> </li></ul>
            <ul><li><a href="carrito0.1.php"><i class="fa-solid fa-cart-shopping"></i>
        
            <?php
            $cont = "SELECT * From carrito";
            $eje_cont = mysqli_query($conex, $cont);
            $contar = mysqli_num_rows($eje_cont);
            echo '<div class="contar"> '.$contar.' </div>';
            ?>
        
            </a></li></ul>
            </div>  
            <div></div>
        </nav>
    </div>

<form action="" method="post" >

<?php

$imprimir = "SELECT * FROM carrito ";
$imp = mysqli_query($conex, $imprimir);

$total = 0;

if(mysqli_num_rows($imp) > 0 ){
    while($fila = mysqli_fetch_assoc($imp)){
        
        
    $descripcion_carrito =  $fila['descricion_carrito']; 
    $nombre_carrito = $fila['nombre_carrito']; 
    $precio_carrito  = $fila['precio_carrito'];
    $total += $precio_carrito;   
        
echo '<div class="for_table">';
echo '<table  >';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Articulo</th>';
            echo '<th>Descripcion</th>';
            echo '<th>Precio</th>';
            echo '<th>Foto</th>';
            
        echo '</tr>';
    echo '</thead> ';
    echo '<tbody>';

        
        
        echo '<tr>';    
            echo '<td>'; echo $descripcion_carrito; echo '</td>';
            echo '<td>'; echo $nombre_carrito; echo '</td>';
            echo '<td>'; echo '$'.$precio_carrito.' RD' ; echo '</td>';
            
            echo '<td>';  
            ?>
            <img style="max-height: 100px" src="data:image/jpg;base64,<?php echo "".base64_encode($fila['img_car']); ?>" >   
            <?php 
            echo '</td>';  
           
          
        
        echo '</tbody>';
        echo '</table>';

        echo '<td>'; echo" <a href='eliminar.php?id=".$fila['id_carrito']." '><i class='fa-solid fa-trash-can'></i></a>"; echo '</td>';

    echo '</div>';
    }
}





?>


<div class="pg">
    <div class="pg_1">

<h2>Sub Total: $<?php echo $total;?> RD  <br><b> <span style="color:red" > Total:</span> $<?php echo $total;?> RD </b></h2>
</div>
</div>





</body>
</html>