<?php
session_start();
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
$year = date('Y');
 function getValue($key){
    if (!isset($_POST[$key])) {
        $data = "";
     }
     else {
        $data = trim($_POST[$key]);
        $data = htmlspecialchars($data);
     }
     return $data;
 }

function sqlRegistration(){
   return "INSERT INTO members
           (username, password)
           VALUES
           (?, ?)";
}

$msg = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      try{
                   
        
          $username = $_POST["usr"];
          $password = $_POST["pwd"];

          //check if username already exists
          $sql = "SELECT COUNT(*) AS num FROM members WHERE username= :username";
          $stmt = $pdo->prepare($sql);
          $stmt->bindValue(':username', $username);
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          if($row['num'] > 0){
            $msg =  "<p>Username already exists, please try a different one.</p>";
          }
          else{
                $pwdHash = password_hash($password, PASSWORD_BCRYPT);
                $pdoStatement = $pdo->prepare(sqlRegistration());
                $pdoStatement->bindValue(1, $username);
                $pdoStatement->bindValue(2, $pwdHash);
                $pdoStatement->execute();
                
                header("Location: login.php");
          }
      }
      catch(PDOException $e){
         echo $e->getMessage();
     }
   }


?>

    <!-- HTML rendered as is. Note the PHP drop-ins, i.e. PHP tags. -->
 <!DOCTYPE html>
 <html>
     <head>
         <title>New user registration</title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     </head>

     <body class="w3-sand">
     <div class="w3-bar w3-deep-purple" >
            <h1 style="text-align:center">SIUE Real Estate club</h1>
        </div>
        <div class="w3-bar w3-black" >
            <a href="index.php" class="w3-bar-item w3-button">Home</a> &nbsp;
            <a href="schedule.php" class="w3-bar-item w3-button">Upcoming events</a> &nbsp;
            <a href="about.php" class="w3-bar-item w3-button">Our team</a>
            <a href="https://www.instagram.com/re.club.siue/" class="w3-bar-item w3-button"><img src="instagram_icon.png" alt="instagram icon." width="30" height="23"></a>
            
            <a href="register.php" class="w3-bar-item w3-button w3-right" >Login</a>

        </div>
         <header class="w3-container"><h1>New member account registration</h1></header>
         <form class="w3-panel w3-border" action="new_account.php" method="POST">

                <p>
                    <input class="w3-input w3-border" name="usr" placeholder="username">
                </p>

                <p>
                    <input class="w3-input w3-border" type="password" name="pwd" placeholder="password" required>
                </p>
                <p>
                    <?php echo $msg?>
                </p>
                <p>
                    <button class="w3-button w3-black w3-round">Create Account</button>
                </p>
                <p>Already have an Account?
                <a href='login.php'>Log in</a></p>
                </p>
            </form>
        

         <footer class="w3-panel w3-center w3-text-gray w3-small">
             &copy; <?php echo $year; ?> Jimmy Tran
        </footer>
     </body>
 </html>