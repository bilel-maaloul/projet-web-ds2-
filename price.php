<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM FACTORY : prices </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="header">
        <a href="index.php" class="logo"> <span>GYM</span> FACTORY </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="trainers.html">trainers</a>
        </nav>

    
    </header>
    <br><br>
    <section class="pricing" id="pricing">

    
        <div class="plan basic">
            <h3>basic plan</h3>
            <div class="price"><span>DT</span>70<span>/mo</span></div>
           <div class="list">
            <p> <i class="fas fa-check"></i> personal training </p>
            <p> <i class="fas fa-check"></i> cardio exercise </p>
            <p> <i class="fas fa-check"></i> weight lifting </p>
            <p> <i class="fas fa-check"></i> diet plans </p>
            <p> <i class="fas fa-check"></i> overall results </p>
           </div>
           <form action="" method="post">
           <input type="submit" class = "btn" value="get started" name="starting">
           </form>
        </div>

        <?php 
          error_reporting (E_ALL ^ E_NOTICE);
        include('back_end/connexion.php');
        if(isset($_POST['starting']) ){
        if ( $_COOKIE['user_name'] == null)
        echo '<script>alert("you should log in first")</script>';
        else 
        {
        $nom= $_COOKIE['user_name'];
        $response = $db->query('select * from subscriptions WHERE  user_name="'.$nom.'"' );
        $data =$response->fetch();
        if ($data ==false)
        {
        $request = $db->prepare('insert into subscriptions (user_name, subscription_type)
        values(?, ?)');
    $request->execute(array($_COOKIE['user_name'],'basic plan'));
    echo '<script>alert("subscribing was successful")</script>';
    
        }
         else 
         echo  '<script>alert("user already subscribed")</script>';
        } }
        else
        {
        if(isset($_POST['starting_premuim']) ){
            if ( $_COOKIE['user_name'] == null)
            echo '<script>alert("you should log in first")</script>';
            else 
            {
            $nom= $_COOKIE['user_name'];
            $response = $db->query('select * from subscriptions WHERE  user_name="'.$nom.'"' );
            $data =$response->fetch();
            if ($data ==false)
            {
            $request = $db->prepare('insert into subscriptions (user_name, subscription_type)
            values(?, ?)');
        $request->execute(array($_COOKIE['user_name'],'premuim plan'));
        echo '<script>alert("subscribing was successful")</script>';
        
            }
             else 
             echo  '<script>alert("user already subscribed")</script>';
            } } }
       



      

        ?>
        
    
        <div class="plan">
            <h3>premium plan</h3>
            <div class="price"><span>DT</span>120<span>/mo</span></div>
           <div class="list">
            <p> <i class="fas fa-check"></i> personal training </p>
            <p> <i class="fas fa-check"></i> cardio exercise </p>
            <p> <i class="fas fa-check"></i> weight lifting </p>
            <p> <i class="fas fa-check"></i> diet plans </p>
            <p> <i class="fas fa-check"></i> overall results </p>
           </div>
           <form action="" method="post">
           <input type="submit" class = "btn" value="get started" name="starting_premuim">
           </form>
         
        </div>
    
    </section>
    
</body>
</html>