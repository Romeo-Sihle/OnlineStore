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
        <!--Font awsome Icon Script-->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!--Font Awsom Icon CDN for social Sticky navbar--> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--W3Schools JQuery-->
        <script src="jquery-3.5.1.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>      

           <?php
              require 'header.php';
           ?>
       
      
        <!-- 
        //Social Stickky Nav Bar
        <div class="icon-bars">
          <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
          <a href="https://twitter.com/explore" class="twitter"><i class="fa fa-twitter"></i></a> 
          <a href="https://www.instagram.com/" class="fa fa-instagram"></a> 
          <a href="https://za.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> 
        </div>
        //Social Stickky Nav Bar ends here

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      -->
      
          <div class="wrapper">
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1><b>Mercedes Benz </b><img src="img/logos/logo2sml.jpg" width=200 height=50></h1> 
                       <h1>The Best Or Nothing...</h1>
                       <p><b><u>Free Mac Book Pro + Beats By Dre Headsets</u></b> <br> And A Flat <b>10% OFF on all AMG brands!</b></p>
                       <a href="products.php" class="btn btn-danger">Acquire Vehicle</a>
                       <br><br>
                        <a href="#category">
                          <p>See More</p>
                           <span class="glyphicon glyphicon-chevron-down"></span>
                         </a>
                   </div>

                   </center>
               </div>
           </div>
         
           <div id="category">
           <div class="container">
            <center>
                <h1><b>AMG Edition 1 Special.</b></h1>
            </center>
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/gallery/img5.jpg" alt="Sedan" width="300" height=300/>
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Sedan and Coupe'</p>
                                </div>
                           </center>
                       </div>
                   </div>

         

                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/gallery/glc3.jpg" alt="SUV" width="300" height=300/>
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">SUV And Pick-up Trucks</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/gallery/sls4.jpg" alt="Supper Car" width="300" height=300/>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Supper Cars</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
         </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="contact.php">Mercedes Benz AMG. South Africa. Cape Town</a> .All Rights Reserved.</p>
                   <p>CEO: Mr R.Mnxulwa</p>
               </center>
               </div>
           </footer>
        </div>

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