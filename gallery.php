<?php
session_start();
//This is an Off-check php script that restrict you from serving the index page without Login authentication 
  if(!isset($_SESSION['email']))
  {
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logos/logo3.jpg" />
        <title>Mercedes Benz AMG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <!--Font awsome Icon Script-->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- load Galleria -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/galleria.min.js"></script>
        <script src="galleria/galleria-1.6.1.min.js"></script>
        <!-- load jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
        
        <!-- External CSS --> 
        <link rel="stylesheet" href="css/gallery.css" type="text/css">
    </head>
      
    

    <body>
          <div>
           <?php
             require "header.php";
           ?>
        
           <center>
            <button id="hide" class="hideshow">Hide</button>
            <button id="show" class="hideshow">Show</button>
            <br>
            <div class="wrap">
             <div class="jumbotron jumbotron-fluid">
              <h2 class="heading">Mercedes Benz AMG Gallery</h2>
              <div class="container">

                <!--Included Galleria-->
                <div class="galleria">
                    <img src="img/gallery/img1.jpg"
                         data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">

                    <img src="img/gallery/img2.jpg"
                         data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">
              
                    <img src="img/gallery/img3.jpg"
                         data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">

                    <img src="img/gallery/img4.jpg" style="width:100%"
                         data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">

                    <img src="img/gallery/img5.jpg" style="width:100%" data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">

                    <img src="img/gallery/img6.jpg" style="width:100%" data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">

                    <img src="img/gallery/img7.jpg" style="width:100%" data-title="Mercedes Benz C63s AMG Sedan" style="width:100%">

                    <img src="img/gallery/e631.jpg" style="width:100%" data-title="Mercedes Benz E63 AMG Sedan" style="width:100%">

                    <img src="img/gallery/e63coupe1.jpg" style="width:100%" data-title="Mercedes Benz E63s AMG Coupe'" style="width:100%">

                    <img src="img/gallery/e63coupeint1.jpg" style="width:100%" data-title="Mercedes Benz E63s AMG Coupe' Interior Design" style="width:100%">

                    <img src="img/gallery/e632int.jpg" style="width:100%" data-title="Mercedes Benz E63s AMG Coupe' Interior Design">

                    <img src="img/gallery/e63int3.jpg" style="width:100%" data-title="Mercedes Benz E63s AMG Coupe' Interior Design">

                    <img src="img/gallery/sls1.jpg" style="width:100%" data-title="Mercedes Benz SLS AMG Coupe'">

                    <img src="img/gallery/sls2.jpg" style="width:100%" data-title="Mercedes Benz SLS AMG Coupe'">

                    <img src="img/gallery/sls3.jpg" style="width:100%" data-title="Mercedes Benz SLSs GT AMG Coupe'">

                    <img src="img/gallery/a451.jpg" style="width:100%" data-title="Mercedes Benz A54 AMG">

                    <img src="img/gallery/a452.jpg" style="width:100%" data-title="Mercedes Benz A54 AMG">

                    <img src="img/gallery/a453.jpg" style="width:100%" data-title="Mercedes Benz A54 AMG">

                    <img src="img/gallery/a45int1.jpg" style="width:100%" data-title="Mercedes Benz A54 AMG Interior Design">

                    <img src="img/gallery/a45int2.jpg" style="width:100%" data-title="Mercedes Benz A54 AMG Interior Design">

                    <img src="img/gallery/a45int3.jpg" style="width:100%" data-title="Mercedes Benz A54 AMG Interior Design">

                    <img src="img/gallery/glc1.jpg" style="width:100%" data-title="Mercedes Benz GLC63 AMG">

                    <img src="img/gallery/glc2.jpg" style="width:100%" data-title="Mercedes Benz GLC63 AMG">

                    <img src="img/gallery/glc3.jpg" style="width:100%" data-title="Mercedes Benz GLC63 AMG">

                    <img src="img/gallery/glc3.png" style="width:100%"  data-title="Mercedes Benz GLC63 AMG Edition 1">

                    <img src="img/gallery/gt631.jpg" style="width:100%" data-title="Mercedes Benz GT63 AMG Coupe'">

                    <img src="img/gallery/gt632.jpg" style="width:100%" data-title="Mercedes Benz GT63 AMG Coupe'">

                    <img src="img/gallery/gt3.jpg" style="width:100%" data-title="Mercedes Benz GT63 AMG Coupe'">

                    <img src="img/gallery/gt634.jpg" style="width:100%" data-title="Mercedes Benz GT63 AMG Coupe'">

                    <img src="img/gallery/gt63int1.jpeg" style="width:100%" data-title="Mercedes Benz GT63 AMG Coupe Interior Design">

                    <img src="img/gallery/a45andcla.jpg" style="width:100%" data-title="Mercedes Benz A45 And CLA AMG">

                    <img src="img/gallery/a45int4.jpg" style="width:100%" data-title="Mercedes Benz A45 AMG Interior Design">

                    <img src="img/gallery/c63coupe1.jpg" style="width:100%" data-title="Mercedes Benz C63s AMG Coupe">

                    <img src="img/gallery/c63coupe2.jpg" style="width:100%" data-title="Mercedes Benz C63 AMG Coupe">

                    <img src="img/gallery/c63coupe3.jpg" style="width:100%" data-title="Mercedes Benz C63 AMG Coupe">

                    <img src="img/gallery/c63coupe4.jpg" style="width:100%" data-title="Mercedes Benz C63 AMG Coupe">

                    <img src="img/gallery/c63int1.jpg" style="width:100%" data-title="Mercedes Benz C63 AMG Coupe Interio Design">

                    <img src="img/gallery/GLA1.jpg" style="width:100%" data-title="Mercedes Benz GLA AMG Edition 1">

                    <img src="img/gallery/glc63int1.jpg" style="width:100%" data-title="Mercedes Benz GLC63 AMG Coupe Interior Design">

                    <img src="img/gallery/g63int2.jpg" style="width:100%" data-title="Mercedes Benz GLC63 AMG Coupe Interior Design">

                    <img src="img/gallery/xclass1.jpg" style="width:100%" data-title="Mercedes Benz X-Class Pick-Up">

                    <img src="img/gallery/xclass2.jpg" style="width:100%" data-title="Mercedes Benz X-Class Pick-Up">

                    <img src="img/gallery/xclassint2.jpg" style="width:100%" data-title="Mercedes Benz X-Class Pick-Up Interior Design">

                    <img src="img/gallery/cla.jpg" style="width:100%" data-title="Mercedes Benz CLA AMG">

                    <img src="img/gallery/cla1.jpg" style="width:100%" data-title="Mercedes Benz CLA AMG">

                    <img src="img/gallery/glcpickup.jpg" style="width:100%" data-title="Mercedes Benz GLC AMG Pick-Up Edition 1">

                <a href="https://www.youtube.com/watch?v=YNB7F5mq_d0">
                    <span class="video">Mercedes Benz C63s AMG Edition1 V8 BiTurbo Start-Up Exhust Sound.</span>
                </a>

                <a href="https://www.youtube.com/watch?v=cKYprkALUOw&t=2s">
                    <span class="video">Mercedes Benz C63s AMG Edition1 Drive Review.</span>
                </a>

              </div>
            </div>
          </div>
        </div>
        </center>
      </div>

        <script>
            $(document).ready(function(){
              $("#hide").click(function(){
                $(".wrap").hide(900);
              });
              $("#show").click(function(){
                $(".wrap").show(900);
              });
            });
        </script>
        
        <script>
        $(function() {
            // Load the Twelve theme
            Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/themes/twelve/galleria.twelve.min.js');

            // Initialize Galleria
            Galleria.run('.galleria');
        });
        </script>

        <!--Hide Show Javascript CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>