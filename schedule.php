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
      <title>Schedule</title>
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
        <div class="w3-bar w3-black" >
            <a href="index.php" class="w3-bar-item w3-button">Home</a> &nbsp;
            <a href="schedule.php" class="w3-bar-item w3-button">Upcoming events</a> &nbsp;
            <a href="about.php" class="w3-bar-item w3-button">Our team</a>
            <a href="https://www.instagram.com/re.club.siue/" class="w3-bar-item w3-button"><img src="instagram_icon.png" alt="instagram icon." width="30" height="23"></a>
            
            

        </div>
        </div>
      </header>
      
      <main class="w3-panel w3-sand">
      <div class="w3-panel w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               Keelys Property Tour: December 8th
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="event1.png" alt="inrto photo" >
        </div>
        <form action="register.php" method="POST" style="text-align:center;" class="w3-panel w3-sand">
            <button class="w3-button w3-black"  name="event" value="Keely's Property Tour">Register</button>
        </form><br><br>

        <div class="w3-panel w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               RE license guide: December 9th
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="event2.png" alt="inrto photo" >
        </div>
        <form action="register.php" method="POST" style="text-align:center;" class="w3-panel w3-sand">
            <button class="w3-button w3-black"  name="event" value="Keely's Property Tour">Register</button>
        </form><br><br>

        <div class="w3-panel w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               Northpoint Property Tour + Lunch: December 10th
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="event3.png" alt="inrto photo" >
        </div>
        <form action="register.php" method="POST" style="text-align:center;" class="w3-panel w3-sand">
            <button class="w3-button w3-black"  name="event" value="Keely's Property Tour">Register</button>
        </form>
       
      </main>
      <footter>
      <p>
            &copy; 2022 Jimmy Tran 
         </p>
</footer>

</body>