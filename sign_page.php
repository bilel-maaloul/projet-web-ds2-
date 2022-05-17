<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_page.css">
  
    <title>Document</title>
</head>
<body>
  <header class="header">

      <a href="index.php" class="logo"> <span>GYM</span> FACTORY </a>
  
      <div id="menu-btn" class="fas fa-bars"></div>
  
      <nav class="navbar">
          <a href="index.php">home</a>
          <a href="price.php">pricing</a>
          <a href="trainers.html">trainers</a>
          
      </nav>
  </header>
  

  <form action='' method="post">
  
<div class="login-box">
<h1>sign in </h1>
<div class="textbox">
  <i class="fas fa-user"></i>
  <input type="text" placeholder="username" name="user_name">
</div>
<div class="textbox">
    <i class="fas fa-mail-bulk"></i>
    <input type="text" placeholder="email" name="email">
  </div>

  <div class="textbox">
    <i class="fas fa-phone"></i>
    <input type="text" placeholder="phone number" name="phone_number">
  </div>
  

<div class="textbox">
  <i class="fas fa-lock"></i>
  <input type="password" placeholder="password" name="password">
</div>

<div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="repeat Password">
  </div>
  
<input type="submit" class="btn" value="sign in" name="signin"> <br>
</form>
<p >if you already have an account <a href="login_page.php" >log in </a> </p>
<?php


$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "gym";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $db = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}


 
if(isset($_POST['signin']))
{
  if(empty($_POST['user_name']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['phone_number']))
   {
  echo ' <p style="color: #4caf50 ;font-size: 20px; "  > you have to fill all the blanks  </p>' ;
 }
  else{
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $password= $_POST['password'];
  
  $sql = "INSERT INTO users (user_name, email, phone_number, password) VALUES (:user_name, :email,:phone_number,:password)";
  
  $stmt = $db->prepare($sql);
  
  
  if ($stmt->execute(['user_name' => $user_name, 'email' => $email, 'phone_number' => $phone_number , 'password'=>$password])== true)
  echo '<script>alert("your account was created successufly ")</script>';
  else
  die('<script>alert("verify your input or the user already exist ")</script>');
  
  

 
  
  }
 }






?>

</div>
</body>
</html>