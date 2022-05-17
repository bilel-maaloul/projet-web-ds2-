<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gym factory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">

        <a href="index.php" class="logo"> <span>GYM</span> FACTORY </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#features">features</a>
            <a href="price.php">pricing</a>
            <a href="trainers.html">trainers</a>
          
            <?php
            error_reporting (E_ALL ^ E_NOTICE);
            
            if ($_COOKIE['user_name']==null)
            echo
           ' <a href="login_page.php" style=" background: rgba(0, 255, 64, 0.616);">login </a>';
           else 
           echo   ' <a href="user_profile.php" style=" background: rgba(0, 255, 64, 0.616);">'.$_COOKIE['user_name'].' </a>';
            
            ?>
            
        </nav>
    </header>
    <section class="home" id="home">

        <div class="swiper home-slider">
    
            <div class="swiper-wrapper">
    
                <div class="swiper-slide slide" style="background: url(img/hulk.jpeg) no-repeat;">
                    <div class="content">
                        <span>make your own body </span>
                        <h3>become the hulk inside you</h3>
                        <a href="trainers.html" class="btn">get started</a>
                    </div>
                </div>

            </div>
    
            <div class="swiper-pagination"></div>
    
        </div>

 
    </section>
    <section class="about" id="about">

        <div class="image">
            <img src="img/hulk3.jpg" alt="">
        </div>
    
        <div class="content">
            <span>about us</span>
            <h3 class="title">Every day is a chance to become better</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quia accusamus dicta inventore nobis obcaecati vero odio, id dolorum. Consequatur ex, aperiam deserunt nostrum perferendis illum unde ipsa? Consequatur, distinctio?</p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>body and mind</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>healthy life</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>strategies</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>workout</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
                </div>
            </div>
            <a href="#" class="btn">read more</a>
        </div>
    
    </section>
    <section class="features" id="features">

        <h1 class="heading"> <span>gym features</span> </h1>
    
        <div class="box-container">
    
    
            <div class="box second">
                <div class="image">
                    <img src="img/Mark-Ruffalo-hulk2.jpg" alt="">
                </div>
                <div class="content">
                    <img src="img/icon-2.png" alt="">
                    <h3>gym for men</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="img/she hulk.jpg" alt="">
                </div>
                <div class="content">
                    <img src="img/icon-3.png" alt="">
                    <h3>gym for women</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
    
        </div>
    
    </section>
    
   
  
</body>
</html>