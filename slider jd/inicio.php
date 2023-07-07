<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slider.css">
    
    <link rel="stylesheet" type="text/css" href="glider.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>




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
        </div>  
        <div></div>
    </nav>
</div>

<div class="portada">
    <div class="port_1" >
        
    </div>
</div>
<h1>El mundo corre a tu arededor, cual es tu excusa</h1>
<div class="ten">
    <p>Nike, Inc.​ es una empresa multinacional estadounidense dedicada al diseño, desarrollo,  fabricación y comercialización de equipamiento deportivo: balones, calzado, ropa, equipo, accesorios y otros artículos deportivos</p>
</div>
<div class="max-po">
    <button><a href="detacado.php">Novedades detacado</a></button>
    <button><a href="">Ropa deportivas</a></button>
    
</div>


<div class="post">
    <img src="asa.png" alt="">
</div>


<div  class="conteiner">
    <div  class="prev" ><i class="fa-solid fa-circle-chevron-left"></i></div>
<div class="slider">
    <img src="albun1.webp" alt="">
    <img src="albun2.webp" alt="">
    <img src="albun 3.webp" alt="">
    <img src="albun4.webp" alt="">
    <img src="albun5.webp" alt="">
    <img src="albun6.webp" alt="">
    <img src="albun7.webp" alt="">
    <img src="albun 9.webp" alt="">
</div>
 <div class="next" ><i class="fa-solid fa-circle-chevron-right"></i></div>
</div>

<h2>Descubre tu estilo</h2>
<div class="misto">
    <div class="mujer" >
        <img src="mujeres.jpg" alt="">
        <h1>Mujeres</h1>
    </div>
    <div class="niño" >
        <img src="niños.jpg" alt="">
        <h1>Niños</h1>
    </div>
    <div class="hombre" >
        <img src="hobre.jpg" alt="">
        <h1>Hombres</h1>
    </div>
</div>


<h3 >Tenis deportivos</h3>
<div class="cont_tenis">
    
    <div class="tenis">
    <a href="tenis.php"><img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/b0455ba7-4d42-4e6f-910e-8487d3898fb9/calzado-de-entrenamiento-in-season-tr-13-d5hnRN.png" alt=""></a>
        <p>Nike us</p>
        <h2>2,100</h2>
        <p>zapatilla running para asfalto</p>
    </div>
    <div class="tenis"> 
    <a href="tenis.php"><img src="https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_3.0/w_300,c_limit/4a96ced4-1d0a-4d3d-9c43-fe3eb14ea30b/calzado-de-running-en-carretera-extraancho-pegasus-40-MCGW9h.png" alt=""></a>
        <p>JD Sports Blog</p>
        <h2>2,000</h2>
        <p>zapatilla running para asfalto</p>
    </div>
    <div class="tenis">
    <a href="tenis.php"><img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/268e5f54-aee3-4c21-a7df-fa8c2067694a/calzado-de-running-en-carretera-invincible-3-Xrd0px.png" alt=""></a>
        <p>JD Sports</p>
        <h2>2,200</h2>
        <p>zapatilla running para asfalto</p>
    </div>
</div>


</body>

<script>

const prev = document.querySelector('.prev')
const next = document.querySelector('.next')
const slider = document.querySelector('.slider')

prev.addEventListener('click', () =>  {
    slider.scrollLeft -= 300
 })

    next.addEventListener('click', () =>  {
    slider.scrollLeft += 300    

})


</script>
</html>