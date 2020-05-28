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
        <!-- load jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
        <!--Font Awsom Icon CDN for social Sticky navbar--> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--W3Schools JQuery-->
        <script src="jquery-3.5.1.min.js"></script>
        <!-- External CSS --> 
        <link rel="stylesheet" href="css/upcomming.css" type="text/css">
    </head>


    <body>

        <?php
            require "header.php";
        ?>

         <!--Social Stickky Nav Bar-->
        <div class="icon-bars">
          <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
          <a href="https://twitter.com/explore" class="twitter"><i class="fa fa-twitter"></i></a> 
          <a href="https://www.instagram.com/" class="fa fa-instagram"></a> 
          <a href="https://za.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> 
        </div>
        <!--Social Stickky Nav Bar ends here-->

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="wrapper">
        <!--Image Grid View starts here-->
        <!-- Header -->
        <div class="header" id="myHeader">
          <h1>Up comming AMGs 2020</h1>
          <p><b>Select Column View...</b></p>
          <button class="btn" onclick="one()">1</button>
          <button class="btn active" onclick="two()">2</button>
          <button class="btn" onclick="four()">4</button>
        </div>

        <!-- Photo Grid -->
        <div class="row"> 
          <div class="column">
            <img src="img/gallery/img1.jpg" style="width:100%">
            <img src="img/gallery/img2.jpg" style="width:100%">
            <img src="img/gallery/img3.jpg" style="width:100%">
            <img src="img/gallery/img4.jpg" style="width:100%">
            <img src="img/gallery/img5.jpg" style="width:100%">
            <img src="img/gallery/img6.jpg" style="width:100%">
            <img src="img/gallery/img7.jpg" style="width:100%">
            <img src="img/gallery/e631.jpg" style="width:100%">
            <img src="img/gallery/e63coupe1.jpg" style="width:100%">
            <img src="img/gallery/e63coupeint1.jpg" style="width:100%">
            <img src="img/gallery/e632int.jpg" style="width:100%">
            <img src="img/gallery/e63int3.jpg" style="width:100%">
            <img src="img/gallery/sls1.jpg" style="width:100%">
            <img src="img/gallery/sls2.jpg" style="width:100%">
            <img src="img/gallery/sls3.jpg" style="width:100%">
          </div>
          
          <div class="column">
            <img src="img/gallery/a451.jpg" style="width:100%">
            <img src="img/gallery/a452.jpg" style="width:100%">
            <img src="img/gallery/a453.jpg" style="width:100%">
            <img src="img/gallery/a45int1.jpg" style="width:100%">
            <img src="img/gallery/a45int2.jpg" style="width:100%">
            <img src="img/gallery/a45int3.jpg" style="width:100%">
            <img src="img/gallery/glc1.jpg" style="width:100%">
            <img src="img/gallery/glc2.jpg" style="width:100%">
            <img src="img/gallery/glc3.jpg" style="width:100%">
            <img src="img/gallery/glc3.png" style="width:100%">
            <img src="img/gallery/gt631.jpg" style="width:100%">
            <img src="img/gallery/gt632.jpg" style="width:100%">
            <img src="img/gallery/gt3.jpg" style="width:100%">
            <img src="img/gallery/gt634.jpg" style="width:100%">
            <img src="img/gallery/gt63int1.jpeg" style="width:100%">
          </div> 

          <div class="column">
            <img src="img/gallery/a45andcla.jpg" style="width:100%">
            <img src="img/gallery/a45int4.jpg" style="width:100%">
            <img src="img/gallery/c63coupe1.jpg" style="width:100%">
            <img src="img/gallery/c63coupe2.jpg" style="width:100%">
            <img src="img/gallery/c63coupe3.jpg" style="width:100%">
            <img src="img/gallery/c63coupe4.jpg" style="width:100%">
            <img src="img/gallery/c63int1.jpg" style="width:100%">
            <img src="img/gallery/GLA1.jpg" style="width:100%">
            <img src="img/gallery/glc63int1.jpg" style="width:100%">
            <img src="img/gallery/g63int2.jpg" style="width:100%">
            <img src="img/gallery/xclass1.jpg" style="width:100%">
            <img src="img/gallery/xclass2.jpg" style="width:100%">
            <img src="img/gallery/xclassint2.jpg" style="width:100%">
            <img src="img/gallery/cla.jpg" style="width:100%">
            <img src="img/gallery/cla1.jpg" style="width:100%">
            <img src="img/gallery/glcpickup.jpg" style="width:100%">
          </div>

          <div class="column">
            <img src="img/gallery/c63int2.jpg" style="width:100%">
            <img src="img/gallery/c63int8.jpg" style="width:100%">
            <img src="img/gallery/c63int9.jpg" style="width:100%">
            <img src="img/gallery/c63int10.jpg" style="width:100%">
            <img src="img/gallery/c63int12.jpg" style="width:100%">
            <img src="img/gallery/cla2.jpeg" style="width:100%">
            <img src="img/gallery/cla3.jpg" style="width:100%">
            <img src="img/gallery/G631.jpg" style="width:100%">
            <img src="img/gallery/g632.jpg" style="width:100%">
            <img src="img/gallery/g63int3.jpg" style="width:100%">
            <img src="img/gallery/g63int1.jpg" style="width:100%">
            <img src="img/gallery/sls4.jpg" style="width:100%">
            <img src="img/gallery/xclass3.jpg" style="width:100%">
            <img src="img/gallery/xclassheavy.jpg" style="width:100%">
            <img src="img/gallery/xclassint1.jpg" style="width:100%">
            <img src="img/gallery/formula1.jpg" style="width:100%">
          </div>
        </div>
    </div>

        <!--Image Grid View script ends here-->
        <script>
            // Get the elements with class="column"
            var elements = document.getElementsByClassName("column");

            // Declare a loop variable
            var i;

            // Full-width images
            function one() {
                for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "100%";  // IE10
                elements[i].style.flex = "100%";
              }
            }

            // Two images side by side
            function two() {
              for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "50%";  // IE10
                elements[i].style.flex = "50%";
              }
            }

            // Four images side by side
            function four() {
              for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "25%";  // IE10
                elements[i].style.flex = "25%";
              }
            }

            // Add active class to the current button (highlight it)
            var header = document.getElementById("myHeader");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
            </script>
        <!--Image Grid View script Ends here-->

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


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>

</html>