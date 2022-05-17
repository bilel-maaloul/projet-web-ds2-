<!DOCTYPE html>
<html>
<head>
	<title>Profile Card</title>
    <link rel="stylesheet" href="style.css">
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
 <link rel="stylesheet" href="user_profile.css">
 
</head>

<body class="bg-dark">


    <header class="header" >

        <a href="index.php" class="logo"> <span>GYM</span> FACTORY </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="price.php">pricing</a>
            <a href="trainers.html">trainers</a>
			<a href="log_out.php"  style=" background: rgba(0, 255, 64, 0.616);">log_out</a>
            
        </nav>
		
    </header>


	<?php
include('back_end/connexion.php');


$nom= $_COOKIE['user_name'];


	$response = $db->query('select * from users WHERE  user_name="'.$nom.'"' );
	$data =$response->fetch()


	

	?>
	
    
	<div id="user" class="container " style="margin-top: 100px ;">
     	<div class="row d-flex justify-content-center">
            <div class="col-xl-12 mt-5 pt-5 ">
             	<div class="row z-depth-1">
                 	<div class="col-xl-12 bg-transparent   ">
        		        <div  class=" text-center text-dark  green  ">
                		    <i class="fas fa-user fa-7x mt-5"></i>
                    		<h2 class="font-weight-bold align-items-xl-end"></h2>
							<?php if($data['user_type']=='a') echo
                    		'<p>'.'admin'.'</p>';
							else 
							echo
                    		'<p>'.'client'.'</p>'  ?><i class="far fa-edit fa-2x mb-4 green"></i>
                		</div>
            		</div>
            		<div  class="col-xl-12 bg-white rounded-right black text-white ">
                    	<h3 class="mt-3 text-center text-white">Information</h3>
                    	<hr class="green">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bolder">Email:</p>
								<?php 
                           	echo	'<h6 class=" text-muted">'.$data['email'].'</h6>';
								   ?>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Phone:</p>
								<?php 
                           	echo 	'<h6 class="text-muted">'.$data['phone_number'].'</h6>';
								   ?>
                        	</div>
                    	</div>
                    		
                    		<hr class="green">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">user_name</p>
								   <?php 
                          	 echo 	'<h6 class="text-muted">'.$data['user_name'].'</h6>'
									?>
                        	</div>
                        	<div class="col-sm-6">
							<?php if ($data['user_type']=='c') 
							{
                                $request = 'select * from subscriptions where user_name="'.$nom.'"';
							$response = $db->query($request);
							$sub =$response->fetch();
						
							echo  '<p class="font-weight-bold">subscription</p>';
                            if ($sub== false)
							echo 	'<h6 class="text-muted">not subscribed </h6>';
							
							else 
                            {
                            if($sub['subscription_type']== 'premuim plan')
                            echo  	 	'<h6 class="text-muted"> type : '.$sub['subscription_type'].'</h6>';
                            else 
                            echo   	'<h6 class="text-muted"> type : '.$sub['subscription_type'].'</h6>';
                            }
                        }
							else 
							{
							
							echo  '<p class="font-weight-bold">clients</p>';
                            
							
							$request = 'select * from users where user_type="c" ';
							$response = $db->query($request);
							while($data =$response->fetch())
						  echo	"<a href='user_profile_clients.php?name=".$data["user_name"].
						  "' style='  font-size: 1.7rem;  color:rgba(0, 255, 64, 0.616) ; '>". $data["user_name"]."<br></a>";
						
							}

							?>
                        	</div>
                    	</div>
                	   	<hr class="green">
                	    
              		</div>
             	</div>
            </div>
        </div>
	</div>
	<br> 
	<?php
		

	?>
    
</body>
</html>
