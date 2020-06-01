<?php 

session_start();
require 'connection.php';
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
        <link rel="stylesheet" href="css/contact.css" type="text/css">
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

        <?php

          if($_SERVER["REQUEST_METHOD"] == "POST")
           {
                $item_id=$_GET['id'];
                $user_id=$_SESSION['id'];
                $feedbackname = $_POST['feedbackname'];
                $feedbacksurname = $_POST['feedbacksurname'];
                $feedbackemail = $_POST['feedbackemail'];
                $feedbackmessage = $_POST['feedbackmessage'];

                $sql = "insert into feedback(Name, Surname, Email, Message) 
                    values('$feedbackname','$feedbacksurname', '$feedbackemail','$feedbackmessage')";

                $results = mysqli_query($conn, $sql);

                 if(!$results)
                {
                    die("Failed!");
                }
                else
                {
                    header('Location: contact.php?mess=success');
                }

                $conn->close();

                /*
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                  $task = $_POST['task'];
                  $date = date('l dS F\, Y');
                  $ddate = date('l dS F\, Y', strtotime($_POST['ddate']));
                  echo $date;
                  echo $ddate; 

                  $sql = "INSERT INTO todo(t_name, t_date, t_ddate) 
                    VALUES('$task','$date','$ddate');";

                  $results = mysqli_query($conn, $sql); 
                  if(!$results)
                  {
                    die("Failed!");
                  }
                  else
                  {
                    header("Location: index.php?task_added");
                  }
                }
                */

  /*
                if (mysqli_query($con, $sql)) {
                  echo "New record created successfully";
                } 
                else 
                {
                  echo "Error: " . $sql . "<br>" . $con->error;
                }

                $con->close();

  */


                /*
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $message = $_POST['message'];

                $sql = "insert into form(name, surname, message) 
                            values('$name','$surname','$message')";

                if (mysqli_query($con, $sql)) {
                    echo "New record created successfully !";
                    } 
                    else
                    {
                        echo "Error: " . $sql . "" . mysqli_error($con);
                     }
                     mysqli_close($con);
                
                
                $results = mysqli_query($con, $sql);   
                if(!$results)
                {
                    die("Failed!");
                }
                else
                {
                    echo "Successfully Sent Message!";
                    header('Location: contact.php?mess=success');
                }

                $conn->close();
                */
            }
        
        ?>

        <div class="wrapper"> 
            <!-- Two columns -->
            <div class="row">
              <div class="column" id="column1" onclick="openTab('b1');">
                <h1>Contact</h1>
              </div>

              <div class="column" id="column2" onclick="openTab('b2');">
                <h1>Location</h1>
              </div>
            </div>

            <!-- Full-width columns: (hidden by default) -->
            <div id="b1" class="containerTab" style="display:none;">
              <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
              <p><b>Feedback:</b></p>
              <form action="contact.php" method="post">
                <input type="text" name="feedbackname" placeholder="Your Name" required>
                <input type="text" name="feedbacksurname" placeholder="Your Surname" required>
                <input type="email" name="feedbackemail" placeholder="Your E-Mail" required>
                <textarea rows=5 name="feedbackmessage" placeholder="Write To Us...." required></textarea>
                <input type="submit" value="Send" class="btnSend">  
              </form>
            </div>

            <div id="b2" class="containerTab" style="display:none;">
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <p><b>Physical Address:</b></p>
                <ul>
                    <li><b>Tel:</b> (041) 055 6721</li>
                </ul>
            <div class="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.637543469859!2d18.44652591521168!3d-33.924727034365496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5d9854044ed9%3A0x6a0ebf49da5aabab!2sCodeSpace!5e0!3m2!1sen!2sza!4v1585823472004!5m2!1sen!2sza" frameborder="1" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            </div>
        </div>
            <!--Contact for Script starts here-->
            <script>
                function openTab(tabName) {
                  var i, x;
                  x = document.getElementsByClassName("containerTab");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                  }
                  document.getElementById(tabName).style.display = "block";
                }
            </script>
            <!--Contact form Script ends here-->

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