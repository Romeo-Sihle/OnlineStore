<?php
    session_start();
    //This is an Off-check php script that restrict you from serving the index page without Login authentication 
      if(!isset($_SESSION['email']))
      {
        header("Location: login.php");
      }

    require 'check_if_added.php';
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

         <!--Social Stickky Nav Bar
            <div class="icon-bars">
              <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
              <a href="https://twitter.com/explore" class="twitter"><i class="fa fa-twitter"></i></a> 
              <a href="https://www.instagram.com/" class="fa fa-instagram"></a> 
              <a href="https://za.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> 
            </div>
            Social Stickky Nav Bar ends here

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        -->

        <div>
            <?php
                require 'header.php';
            ?>

           

            <div class="container">
                <div class="wellcome">
                <div class="jumbotron">
                    <h1>Welcome to Mercedes Benz AMG!</h1>
                    <p>We Have New 2020 AMG Sedans, SUV's, Pick-Up Trucks And Super Cars.</p>
                </div>
            </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/cla1.jpg" alt="CLA 45">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz CLA45 AMG</h3>
                                    <p>Price: R 860 600.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/gt631.jpg" alt="GT63">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz GT63 AMG</h3>
                                    <p>Price: R 1 660 900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/img1.jpg" alt="C63 Sedan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz C63s AMG</h3>
                                    <p>Price: R 1 200 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/c63coupe2.jpg" alt="C63s AMG Coupe'">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz C63s AMG Coupe'</h3>
                                    <p>Price: R 1 800 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/xclass1.jpg" alt="xclass">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz X-Class</h3>
                                    <p>Price: R 513 200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/glcpickup.jpg" alt="GLC Pick Up">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz GLC Pick-Up AMG</h3>
                                    <p>Price: R 580 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/glc3.jpg" alt="GLC63">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz GLC63s Coupe' AMG 4-Matic + </h3>
                                    <p>Price: R 4 800 990.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/g632.jpg" alt="G63">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz G63 AMG </h3>
                                    <p>Price: R 5 280 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/e631.jpg" alt="E63 AMG">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz E63s AMG </h3>
                                    <p>Price: R 3 200 402.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/e63coupe1.jpg" alt="E63s Coupe">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz E63s Coupe' AMG </h3>
                                    <p>Price: R 3 320 900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/sls2.jpg" alt="SLS">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz SLS Coupe' AMG </h3>
                                    <p>Price: R 4 900 090.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/gallery/sls4.jpg" alt="SLSs AMG">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mercedes Benz SLSs Coupe' AMG 4-Matic+</h3>
                                    <p>Price: R 5 987 995.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Aqcuire Vehicle</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Aqcuire Vehicle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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
