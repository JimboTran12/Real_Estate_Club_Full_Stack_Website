<?php
session_start();
if(!isset($_SESSION["username"])){
        header("Location: login.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Real estate club home page</title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="icon" href="club_logo.png">
   </head>
   
   </head>
   <body class = "w3-sand">
      <header>
        <div class="w3-bar w3-deep-purple" >
            <h1 style="text-align:center">SIUE Real Estate club</h1>
        </div>
        <div class="w3-bar w3-black" >
            <a href="index.php" class="w3-bar-item w3-button">Home</a> &nbsp;
            <a href="schedule.php" class="w3-bar-item w3-button">Upcoming events</a> &nbsp;
            <a href="about.php" class="w3-bar-item w3-button">Our team</a>
            <a href="https://www.instagram.com/re.club.siue/" class="w3-bar-item w3-button"><img src="instagram_icon.png" alt="instagram icon." width="30" height="23"></a>
            <a href="login.php" class="w3-bar-item w3-button w3-right" > Admin Login</a>

        </div>
      </header>
      
      <main class="w3-panel w3-sand">
        
         
         <div class=" w3-container w3-sand" style="text-align:center;">
            <div class="w3-panel">
            <img src="intro_photo_2.png" alt="inrto photo" >
        </div></div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               Who are we?
            </h1></u>
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <img src="first_photo.png" alt="inrto photo" >
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
               We are a group of college students of Southern Illinois University Edwardsvile who are interested in the field of Real Estate. Together, we hold social and profesional events that helps networking between other students who share the same interest.
            </h2>
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               What do we do?
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="second_photo.png" alt="inrto photo" >
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;" >
            <img src="thirst_photo.png" alt="inrto photo" width="800" height="500" >
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
               During the school semester, we have company visits and developement/construction tours hosted by real estate companirs in the Greater Saint Louis area. We also have guest speakers coming on campus to educate us on a bunch of topics relating to real estate, such as investment, becoming a real estate agent, insights on their expererience working in the real estate field, and so on. We also host social events like TopGolf to help the members in the club getting to know each oher a little better.
            </h2>
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               How to be a club member?
            </h1></u>
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
               It takes nothing for you to be a member in the club! All you have to do is to be a student in SIUE! You can check and register for our upcoming events by clicking the button below
            </h2>
        </div>
        <form action="schedule.php" method="POST" style="text-align:center;" >
            <button class="w3-button w3-black">Our upcoming events</button>
</form>
       
      </main>
      
      <footer class="w3-sand">
         <p>
            &copy; 2022 Jimmy Tran 
         </p>
      </footer>      
        
   </body>
</html>
