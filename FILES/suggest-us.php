

<?php 
  session_start();
  if(isset($_SESSION['log']))
  {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $con = mysqli_connect("localhost","root","","movieproject");
    $nm = $_POST['name'];
    $email = $_POST['email'];
    $mes = $_POST['message'];
   try{
    $res = mysqli_query($con,"insert into contact (name,email,message) values ('$nm','$email','$mes') ");
    }catch(PDOException $e){
      echo $e->getMessage();
      die();
    }

    echo"subbmitted successfully";
    header('location:index.php');
  }
  }
  else
  {
      header('location:login.php');
  }
?>
