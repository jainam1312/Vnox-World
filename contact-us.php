
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Vnox World | Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<?php 
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
?>
<body id="page5">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="index.php">VNOX <span>World</span></a></div>  
          <ul>
            <li><a href="index.php"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="contact-us.php"><img src="images/icon2-act.gif" alt="" /></a></li>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            <li ><a href="contact-us.php" class="active" >Contact-Us</a></li>
            <li ><a href="about-us.php" >About-Us</a></li>
             <?php
               if(isset($_SESSION['log'])){
                  echo '<li class="last"><a href="logout.php">Sign-out</a></li>';
               }
               else {
                 echo '<li class="last"><a href="login.php">Sign-in</a></li>';
               }
            ?>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3>Contact <span>Us</span></h3>
                <div class="address">
                  <div class="fleft"><span>Zip Code:</span>387001<br />
                    <span>Country:</span>INDIA<br />
                    <span>Telephone:</span>+91 9714759598<br />
                    </div>
                  <div class="extra-wrap">
                    If you have any doubt or query regarding online booking, Just contact us with provided numbers or provide your details to below form and submit it. We will try our best to solve your problem.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <h3>Contact <span>Form</span></h3>
          <form action="#" id="contacts-form" method="POST">
            <fieldset>
              <div class="field">
                <label>Your Name:</label>
                <input type="text"  name="name"/>
              </div>
              <div class="field">
                <label>Your E-mail:</label>
                <input type="email" name="email">
              </div>
              <div class="field">
                <label>Your Message:</label>
                <textarea cols="1" rows="1" name='message'></textarea>
              </div>
              <div class="wrapper"> <input type="submit" value="submit Your Message"> </div>
            </fieldset>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
