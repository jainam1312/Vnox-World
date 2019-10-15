<?php
     session_start();
     $id = $_SESSION['log'];
               
    
                           
               $con= mysqli_connect("localhost", "root", "", "movieproject");
               $res= mysqli_query($con, "delete from users where id='$id'");
               
               unset($_SESSION['log']);
               session_destroy();
               header('location:index.php');
?>