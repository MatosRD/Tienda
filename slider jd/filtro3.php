
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slider.css">
    <title>Document</title>
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


    <div class="busqueda">
    <i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="   Buscar" >
    </div>

    

    <div class="encabezado">
        <h2> comprar zapatilla a tu medida, <br> Elige el tuyo  </h2>
        <h4> Hombre - Mujere - Niño</h4>  
    </div>    

    <div class="catalogo_0"> 
        <div class="catalogo_01" >
            <h5>Busqueda</h5>
            <h5>Sexo</h5>
            <a href=""><button>Hombre</button></a> 
            <a href="mujeres.php"><button>Mujeres</button></a> 
            <a href="ninos.php"><button>Ninos</button></a> 
            <div class="space"></div>
            <hr></hr>
            <h5>Precio</h5>
            <a href=""><button>RD0 - RD1K</button></a> 
            <a href="filtro.php"><button>RD1K - RD1,5K</button></a> 
            <a href="filtro2.php"><button>RD1,5K - RD2K</button></a> 
            <a href="filtro3.php"><button>RD2K - RD2,5K</button></a> 
            <a href="filtro4.php"><button>RD2,5K - RD3K</button></a> 
            <a href="filtro5.php"><button>RD3K - RD3,5K</button></a>
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

    
$as = "SELECT * FROM ninos WHERE precio  >=  '2000 ' and precio <= '2500'";
$ad = mysqli_query($conexion, $as);
if(mysqli_num_rows($ad) > 0 ){
    while($one = mysqli_fetch_assoc($ad)){ ?>
        <div class="cont_catalogo"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($one['imagen']); ?>" >
        <?php
            echo'<div class="nombre">';    echo $one['nombre']; echo'</div>';
            echo'<div class="descripcion">';  echo $one['descripcion']; echo'</div>';
            echo'<div class="precio">';  echo '$'.$one['precio'].' RD'; echo'</div>';
            echo " <a href='carrito.php?id=".$one['id_producto']." ' > Carrito </a>";
            echo'</div>  ';
    }

}


$as = "SELECT * FROM mujeres WHERE precio  >=  '2000 ' and precio <= '2500'";
$ad = mysqli_query($conexion, $as);
if(mysqli_num_rows($ad) > 0 ){
    while($one = mysqli_fetch_assoc($ad)){ ?>
        <div class="filtro_1"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($one['imagen']); ?>" >
        <?php
            echo'<div class="nombre">';    echo $one['nombre']; echo'</div>';
            echo'<div class="descripcion">';  echo $one['descripcion']; echo'</div>';
            echo'<div class="precio">';  echo '$'.$one['precio'].' RD'; echo'</div>';
            echo " <a href='carrito.php?id=".$one
            ['id_producto']." ' > Carrito </a>";
            echo'</div>  ';
    }

}




$as = "SELECT * FROM producto WHERE precio  >=  '2000 ' and precio <= '2500'";
$ad = mysqli_query($conexion, $as);
if(mysqli_num_rows($ad) > 0 ){
    while($one = mysqli_fetch_assoc($ad)){ ?>
        <div class="filtro_1"><img style="max-height: 300px" src="data:image/jpg;base64,<?php echo "".base64_encode($one['imagen']); ?>" >
        <?php
            echo'<div class="nombre">';    echo $one['nombre']; echo'</div>';
            echo'<div class="descripcion">';  echo $one['descripcion']; echo'</div>';
            echo'<div class="precio">';  echo '$'.$one['precio'].' RD'; echo'</div>';
            echo " <a href='carrito.php?id=".$one['id_producto']." ' > Carrito </a>";
            echo'</div>  ';
    }

}

   

    ?>
    

   
    </div>
    </div>
    


</body>
</html>