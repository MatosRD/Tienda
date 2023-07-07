<?php

include 'cone.php';

$tt = 0;

if(!empty(['ctt'])){
    if(!empty($_POST["id_car"])){
        $contar = $_POST['id_car'];
        $tt += $contar; 
    }

}

?>