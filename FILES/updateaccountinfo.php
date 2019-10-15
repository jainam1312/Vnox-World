<?php
     session_start();
      if(isset($_POST['updateaccount']) && isset($_POST['pass']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])){
               $pass=$_POST['pass'];
               $fname=$_POST['fname'];
               $lname=$_POST['lname'];
               $email=$_POST['email'];
               $id = $_SESSION['log'];
               
               $passregex="/^[A-Za-z0-9]{10}$/";
               $emailregex="/^[a-z0-9]+@[a-zA-Z]+\.com$/";
               
               if(preg_match($passregex,$pass) && preg_match($emailregex,$email))
               {
                           
               $con= mysqli_connect("localhost", "root", "", "movieproject");
               $res= mysqli_query($con, "update users set password='$pass',firstname='$fname',lastname='$lname',email='$email' where id='$id'");
               
               
                        
               header('location:index.php');
               }
               else
               {
                   echo "Update failed!!!Enter Valid Inputs!!!";
      }}
      
                                          
                                    else{
                                        echo '<b style ="color:red"> *update failed;</b>';
                                    }
      
      
?>