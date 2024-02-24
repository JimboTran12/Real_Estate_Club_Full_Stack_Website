<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    die;
}


    function getDSN(){
        $dsn = "mysql:host=localhost;port=8889;dbname=reclub";
        return $dsn;
     }
     function getUsername(){
        return 'root';
     }
     function getPassword(){
        return 'root';
     }   
     function getPDO(){ 
        return new PDO(getDSN(), getUsername(), getPassword());
     }
     $pdo = getPDO();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT event_name, event_date, event_id FROM events";
     $statement = $pdo->query($sql);


?>
<!DOCTYPE html>


<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Register</title>
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
        </div>
      </header>
    </body>
    </html>