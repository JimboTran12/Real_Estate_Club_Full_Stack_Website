<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    die;
}

  $msg = "";
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
     
     
     

    
     if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST["newEventName"]) && isset($_POST["newEventDate"])) {
         ;
                $sql= "INSERT INTO events (event_name, event_date) VALUES (? , ?);";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $_POST["newEventName"]);
                $stmt->bindValue(2, $_POST["newEventDate"]);
                $stmt->execute();
     
     $msg = "DONE";
    }
      }


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
      <div class="w3-container w3-sand" style="text-align:center;">
            <u><h1 style="font-family:garamond; text-align:center" >
               <?php echo $msg; ?> <br>
               Add event:
            </h1></u>
            <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
            <form action="event_add.php" method="POST">
            <label>Event name:</label>
                    <input class="w3-input w3-border w3-light-gray" type="text" name="newEventName" placeholder="enter event name" required>
                </p>
                <p>
                    <label>Event date:</label>
                    <input class="w3-input w3-border w3-light-gray" type="text" name="newEventDate" placeholder="enter event date yyyy-mm-dd" required>
                </p>
            
<br>
<button class="w3-button w3-black w3-block w3-round">Add event</button>
</form> <br>
<form action="admin.php" method="POST">
<button class="w3-button w3-black w3-block w3-round">Go back</button>
</form>


            </h2>
        </div>
    </body>
    </html>

    