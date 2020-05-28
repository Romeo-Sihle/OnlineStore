<?php 
session_start();
//This is an Off-check php script that restrict you from serving the index page without Login authentication 
  if(!isset($_SESSION['email']))
  {
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="img/logos/logo3.jpg" />
    <title>Mercedes Benz AMG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    
    <!--W3Schools JQuery-->
    <script src="jquery-3.5.1.min.js"></script>
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

    <!--Font awsome Icon Script-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Latest compiled and minified javascript-->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/about.css" type="text/css">
    
  </head>

  <body>
    <?php
      require 'header.php';
    ?>

      
  <div class="about">
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Mercedes-Benz is a German global automobile marque and a division of Daimler AG. Mercedes-Benz is known for luxury vehicles, vans, trucks, buses, coaches and ambulances.<!-- The headquarters is in Stuttgart, Baden-Württemberg. The name first appeared in 1926 under Daimler-Benz. In 2018, Mercedes-Benz was the largest seller of premium vehicles in the world, having sold 2.31 million passenger cars.

        
          Mercedes-Benz origins' come from Daimler-Motoren-Gesellschaft's 1901 Mercedes and Karl Benz's 1886 Benz Patent-Motorwagen, which is widely regarded as the first internal combustion engine in a self-propelled automobile. The fuel was not gasoline, it was a much more volatile petroleum spirit with several names including ligrane/ligrain/ligroin. This was used as a degreaser, spot remover, paint thinner, etc. and was so quick to burn or explode, it was not stored inside. The slogan for the brand is "the best or nothing".
        -->
          
        </p>
      </div>
    </div>
  </div> 
    <!--Carousel starts here-->
    <div class="carouselSlider">
      <h2>Our Team</h2>
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/background/romeo.jpg" class="team" style="width:100%">
          <div class="text">Mr R.Mnxulwa
            <br>
            <p>CEO: Of Mercedes Benz AMG.</p>
          </div>
          
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/background/Karlbenz.jpg" class="team" style="width:100%">
          <div class="text">Mr K.Benz<br>
            <p>Founder: Of Mercedes Benz.</p>
          </div>
          
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/background/damlier.jpg" class="team" style="width:100%">
          <div class="text">Mr C.Damler
            <br>
              <p>COO: Of Mercedes Benz.</p>
          </div>
          
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
      </div>

        <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
          }
        </script>
    <!--Carousel ends here-->

    <!--Scroll to top button script starts here-->
            <script>
                //Get the button
                var mybutton = document.getElementById("myBtn");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                  } else {
                    mybutton.style.display = "none";
                  }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
                }
            </script>
            <!--Scroll to top button script ends here-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>