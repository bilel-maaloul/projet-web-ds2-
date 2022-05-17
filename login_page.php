  
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_page.css">
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
    
    <form   action="" method="POST" >
   
   
         
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="user_name">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
  </div>

  <input type="submit" class="btn" value="log in" name="login"> <br>
</form>
<p >if you don't have an account <a href="sign_page.php" >sign in</a> </p>
<br> <br> <br>
<div class="a">
<?php 
include('back_end/connexion.php');
if(isset($_POST['login'])){
    if(empty($_POST['user_name']) || empty($_POST["password"]))
    echo ' <p style="color: #4caf50 ;font-size: 20px; "  > you have to write the user_name and the password  </p>' ;
    else  {
      $response = $db->query('select * from users WHERE  user_name="'.$_POST['user_name'].'"' );
       	$data =$response->fetch();
         if($data== false)
         echo ' <p style="color: #4caf50 ;font-size: 20px; "  > wrong password or the user does not exist   </p>' ;
         else
         {
         if ($data['password'] == $_POST['password'])
         {
        setcookie('user_name',$_POST['user_name'],time()+24*3600);
        Header("Location:user_profile.php");
         }
         else 
         echo ' <p style="color: #4caf50 ;font-size: 20px; "  > wrong password or the user does not exist   </p>' ;
        }

        
          
}
}
?>
</div> 


  
   </div>
   <br>
   
    
  </body>

  </html>
  
  
  