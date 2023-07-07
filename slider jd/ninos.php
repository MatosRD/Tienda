<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slider.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php

include 'conexion.php';
include 'cone.php';
?>
    
    <div class="cont_1">
        <nav class="navi">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <div class="sub_menu" > 
            <ul><li><a href="inicio.php" class="uno" style="animation: none;">INICIO</a></li></ul>
            <ul><li><a href="#">TENIS</a></li></ul>
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

    <form action=""  method="post">
    <div class="busqueda">
    <i class="fa-solid fa-magnifying-glass"></i><input type="text" id="buu" name="buscar" placeholder="     Buscar"  >
    </div>
    </form>
    

    <div class="encabezado">
        <h2> comprar zapatilla a tu medida, <br> Elige el tuyo  </h2>
        <h4> Hombre - Mujere -    <button>Niños</button> </h4>  
    </div>    

    <div class="catalogo_1"> 
        <div class="catalogo_2" >
            <h5>Busqueda</h5>
            <h5>Sexo</h5>
            <a href="tenis.php"><button>Hombre</button></a> 
            <a href="mujeres.php"><button>Mujeres</button></a> 
            <a href=""><button>Ninos</button></a> 
            <div class="space"></div>
            <hr></hr>
            <h5>Precio</h5>
            <a href=""><button>RD0 - RD1,000</button></a> 
            <a href="filtro.php" > <button>RD1,000 - RD1,500</button></a> 
            <a href="filtro2.php" ><button> RD1,500 - RD2,000</button></a> 
            <a href="filtro3.php"><button>RD2,000 - RD2,500</button></a> 
            <a href="filtro4.php"><button>RD2,500 - RD3,000</button></a> 
            <a href="filtro5.php"><button>RD3,000 - RD3,500</button></a> 
            <div class="space"></div>
            <hr></hr>
            <h5>Color</h5>
            <a href="color.php"><button>Negro <div id="negro" ></div></button></a> 
            <a href="color_1.php"><button>Blanco <div id="blanco" ></div></button></a> 
            <a href="color_2.php"><button>Rosado   <div id="rosa" ></div></button></a> 
            <a href="color_3.php"><button>Azul <div id="azul" ></div> </button></a> 
            <br>
            <div class="space"></div>
            
        </div>
             <div class="catalogo" > 
    <?php

    $buscar_n= "SELECT * FROM ninos";
    $realizar_n = mysqli_query($conexion, $buscar_n);
    
    if(mysqli_num_rows($realizar_n) > 0 ){
        
        
        while($fila_n = mysqli_fetch_assoc($realizar_n)){?>
            <div class="cont_catalogo"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($fila_n['imagen']); ?>" > 
            <?php  echo'<div class="nombre">';    echo $fila_n['nombre']; echo'</div>';
            echo'<div class="descripcion">';  echo $fila_n['descripcion']; echo'</div>';
            echo'<div class="precio">';  echo '$'.$fila_n['precio'].' RD'; echo'</div>';
            echo " <a href='carrito_n.php?id=".$fila_n['id_producto']." ' > Carrito </a>";
            echo'</div>  ';
        }
    }



    if(!empty(["buu"])){
        if(!empty($_POST['buscar'])){
            $buscar_v = $_POST['buscar'];

            $buscar_b = "SELECT * FROM ninos WHERE nombre = '$buscar_v' ";
            $sql = mysqli_query($conexion, $buscar_b);

           if(mysqli_num_rows($sql) > 0 ){
            echo '<style>.catalogo_1 .catalogo .cont_catalogo{
                display: none;
                }
                .catalogo_1 .catalogo_2{
                 width: 200px;
                }
                </style>';
            while($fila_n = mysqli_fetch_assoc($sql)){?>
                <div class="cont_catalogo_n"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($fila_n['imagen']); ?>" > 
                <?php  echo'<div class="nombre_n">';    echo $fila_n['nombre']; echo'</div>';
                echo'<div class="descripcion_n">';  echo $fila_n['descripcion']; echo'</div>';
                echo'<div class="precio_n">';  echo '$'.$fila_n['precio'].' RD'; echo'</div>';
                echo " <a href='carrito_n.php?id=".$fila_n['id_producto']." ' > Carrito </a>";
                echo'</div>  ';
            }
            }






            $buscar_z = "SELECT * FROM mujeres WHERE nombre = '$buscar_v' ";
            $sql_n = mysqli_query($conexion, $buscar_z);
           if(mysqli_num_rows($sql_n) > 0 ){
            echo '<style>.catalogo_1 .catalogo .cont_catalogo{
                display: none;
                }
                .catalogo_1 .catalogo_2{
                 width: 200px;
                }
                </style>';
            while($fila_n = mysqli_fetch_assoc($sql_n)){?>
                <div class="cont_catalogo_n"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($fila_n['imagen']); ?>" > 
                <?php  echo'<div class="nombre_n">';    echo $fila_n['nombre']; echo'</div>';
                echo'<div class="descripcion_n">';  echo $fila_n['descripcion']; echo'</div>';
                echo'<div class="precio_n">';  echo '$'.$fila_n['precio'].' RD'; echo'</div>';
                echo " <a href='carrito_n.php?id=".$fila_n['id_producto']." ' > Carrito </a>";
                echo'</div>  ';
                }
            } 




            
            $buscar_h = "SELECT * FROM producto WHERE nombre = '$buscar_v' ";
            $sql_h = mysqli_query($conexion, $buscar_h);
           if(mysqli_num_rows($sql_h) > 0 ){

            echo '<style>.catalogo_1 .catalogo .cont_catalogo{
                display: none;
                }
                .catalogo_1 .catalogo_2{
                 width: 200px;
                }
                </style>';
            while($fila_h = mysqli_fetch_assoc($sql_h)){?>
                <div class="cont_catalogo_n"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($fila_h['imagen']); ?>" > 
                <?php  echo'<div class="nombre_n">';    echo $fila_h['nombre']; echo'</div>';
                echo'<div class="descripcion_n">';  echo $fila_h['descripcion']; echo'</div>';
                echo'<div class="precio_n">';  echo '$'.$fila_h['precio'].' RD'; echo'</div>';
                echo " <a href='carrito_n.php?id=".$fila_h['id_producto']." ' > Carrito </a>";
                echo'</div>  ';
                }
            } 
           
        }
    }



    ?>
    
    

    </div>
    </div>
    

   
   


  






</body>
</html>