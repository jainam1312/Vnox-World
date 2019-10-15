<?php

    try{
        
        $con= mysqli_connect("localhost", "root", "", "movieproject");
        $name=$_POST['uname'];
        $gender=$_POST['gender'];
        $dob=$_POST['date'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $res= mysqli_query($con, "insert into users(username,password,firstname,lastname,gender,dob,email) values ('$name','$pass','$fname','$lname','$gender','$dob','$email')");
    }catch(PDOException $e){
	echo $e->getMessage();
	die();
    }
    header('location:index.php');
?>
