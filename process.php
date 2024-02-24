<!DOCTYPE html>
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
 
error_reporting(E_ALL);
ini_set('display_errors', '1');


$year = date('Y');
$msg="";

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    die;
}

function getValue($key) {
    if (isset($_POST[$key])) {
        return trim(htmlspecialchars($_POST[$key]));
    }
    else {
        return "";
    }
}



function sqlEventRegistration(){
    return "INSERT INTO event_attendances
            (event_id, first_name, last_name, email)
            VALUES
            (?, ?, ?, ?)";
 }



    
    $pdoStatement = $pdo->prepare(sqlEventRegistration());
    $pdoStatement->bindValue(1, getValue("eventID"));
    $pdoStatement->bindValue(2, getValue("firstName"));
    $pdoStatement->bindValue(3, getValue("lastName"));
    $pdoStatement->bindValue(4, getValue("email"));
    $pdoStatement->execute();

    $firstName = getValue("firstName");
    $lastName = getValue("lastName");
    $eventID = getValue("eventID");
    $sql2 = "SELECT event_name FROM events WHERE event_id = $eventID";
    $statement2 = $pdo->query($sql2);
    $row2 = $statement2->fetch();
    $msg = "$firstName $lastName is now registered for $row2[0]";

?>
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
            <a href="index.php" class="w3-bar-item w3-button">Home</a> &nbsp;
            <a href="schedule.php" class="w3-bar-item w3-button">Upcoming events</a> &nbsp;
            <a href="about.php" class="w3-bar-item w3-button">Our team</a>
            <a href="https://www.instagram.com/re.club.siue/" class="w3-bar-item w3-button"><img src="instagram_icon.png" alt="instagram icon." width="30" height="23"></a>
        </div>
      </header>
      <main>
      <div class="w3-container w3-sand" style="text-align:center;">
            <h2 style="font-family:garamond; text-align:center" >
              <?php echo $msg; ?>;
            </h2>
</div>
<form action="index.php" method="POST" style="text-align:center;" >
            <button class="w3-button w3-black">Home</button>
</form>

</main>

</body>