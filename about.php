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
      <title>About</title>
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
      </header>

      <main class="w3-panel w3-sand">
      
      <div class="w3-panel w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               President
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="miguel.jfif" alt="inrto photo" >
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
               Miguel Estep
            </h2>
            <h3>
                <a href="mailto:mestep@siue.edu">mestep@siue.edu</a>
            </h3>
        </div><br><br>

        <div class="w3-panel w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               Vice President
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="larae.jfif" alt="inrto photo" >
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
               Larae Bigard
            </h2>
            <h3>
                <a href="mailto:lbigard@siue.edu">lbigard@siue.edu</a>
            </h3>
        </div><br><br>

        <div class="w3-panel w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               Treasurer/Secretary
            </h1></u>
        </div>
        <div class="w3-panel w3-sand" style="text-align:center;">
            <img src="Jimmy.jfif" alt="inrto photo" >
        </div>
        <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
               Jimmy Tran
            </h2>
            <h3>
                <a href="mailto:hutran@siue.edu">hutran@siue.edu</a>
            </h3>
        </div><br><br>
</main>
<footer class="w3-sand">
         <p>
            &copy; 2022 Jimmy Tran 
         </p>
      </footer>
</body>