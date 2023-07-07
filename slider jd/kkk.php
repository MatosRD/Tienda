<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
</head>
<body>




   


    
<?php

?>

<script>
function test(){
$.ajax({url:"filtro.php", success:function(result){
$("#jj").text(result);}
})
}

</script>

<button onclick="test()"> Click </button>


<div  id="jj"></div>

<script>
function test_1(){
$.ajax({url:"filtro.php", success:function(result){
$("#jjj").text(result);}
})
}

</script>

<input type="checkbox" onclick="test_1()" > 


<div  id="jjj"></div>



</body>
</html>