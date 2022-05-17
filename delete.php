<?php 
include('back_end/connexion.php');




	 if ($response = $db->query('delete from users WHERE  user_name="'.$_COOKIE['delete'].'"' ) ==true)
     {
   
    $response_2 = $db->query('delete from subscriptions WHERE  user_name="'.$_COOKIE['delete'].'"' );
    Header("Location:user_profile.php");
     }
     else 
     die('<script>alert("error ")</script>');

     
     
     

?>