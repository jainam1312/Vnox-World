
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Cinema World | About Us</title>
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
<style>
    input[type=text]{
        width:293px;
	padding:1px 0 1px 3px;
	background:#000;
	border:1px solid #3a3a3a;
	color:#fff;
    }     
    input[type=password]{
        width:293px;
	padding:1px 0 1px 3px;
	background:#000;
	border:1px solid #3a3a3a;
	color:#fff;
    }     
    input[type=date]{
        width:293px;
	padding:1px 0 1px 3px;
	background:#000;
	border:1px solid #3a3a3a;
	color:#fff;
    }
     input[type=email]{
        width:293px;
	padding:1px 0 1px 3px;
	background:#000;
	border:1px solid #3a3a3a;
	color:#fff;}
</style>
<body id="page2">
    
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Vnox <span>World</span></a></div>
          <ul>
            <li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>       </ul>
        </div>
              </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                   <div class="content">
                       
                        <h3>User <span>Details</span></h3>
                        <?php
                            if(isset($_POST['register'])){
                                if(isset($_POST['uname']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['pass']) && isset($_POST['repass']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['email']) ){
                                    if($_POST['pass'] == $_POST['repass']){
                                        $con= mysqli_connect("localhost", "root", "", "movieproject");
                                        $name=$_POST['uname'];
                                        $gender=$_POST['gender'];
                                        $dob=$_POST['date'];
                                        $fname=$_POST['fname'];
                                        $lname=$_POST['lname'];
                                        $pass=$_POST['pass'];
                                        $email=$_POST['email'];
                                        $res= mysqli_query($con, "insert into users(username,password,firstname,lastname,gender,dob,email) values ('$name','$pass','$fname','$lname','$gender','$dob','$email')");
                                    
                                        header('location:index.php');
                                    }
                                    else{
                                        echo '<b style ="color:red"> *Password not matching</b>';
                                    }
                                }
                                else{
                                    echo '<b style ="color:red"> *Please provide all details</b>';
                                }
                            }
                        ?>
                        <form action="register.php" method="POST">
                            *Required Field
                            <table border="0">   
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">*User Name:</td>
                                    <td><input type="text" name="uname" required></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">*First Name:</td>
                                    <td><input type="text" name="fname" required></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">*Last Name:</td>
                                    <td><input type="text" name="lname" required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">*Password:</td>
                                    <td><input type="password" name="pass" required></td>
                                </tr>
                                <tr style="height: 30px;">
                                <td> *Re-Enter Password:</td>
                                <td><input type="password" name="repass" required></td>
             </tr>
             <tr style="height: 30px;">
              <td> <label for="gender">*Gender</label></td>
              <td><input type="radio" name="gender" value="male" > Male
                <input type="radio" name="gender" value="female"> Female</td>
         
             </tr>
             <tr style="height: 30px;">
                 <td>
                   *Date of Birth:  
                 </td>
                 <td><input type="date" name="date" required></td>
             </tr>                       
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">*Email:</td>
                                    <td><input type="email" name="email" required></td>
                                </tr>
                                
                            </table>
                            <div class="wrapper"> <input style=" border:1px solid     #3a3a3a; background-color: #000; color: #858585;" type="submit" name="register" value="register   "> </div>
                                      </form>
        </div>
                  
              </div>
            </div>
       		</div>
        </div>
        
      </div>
    </div> 
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->

</body>
</html>