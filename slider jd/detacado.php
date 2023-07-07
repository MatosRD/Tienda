<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slider.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="jquery/jquery-3.3.1.min.js" ></script>
    <script> src="https://code.jquery.com/jquery-3.3.1.js" </script>
    <title>Document</title>
</head>
<body  id="vid">
    

    <video src="y2mate.com - NIKE VAPORMAX_1080p.mp4"  id="macpro" ></video>

    
</body>

<script>


        $(window).scroll(function(){
            let pixel = $(window).scrollTop()

            console.log( pixel )

            macpro.currentTime = pixel/1500
        })

      
        
 

</script>

</html>