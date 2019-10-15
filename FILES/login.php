<?php
    session_start();
    if(isset($_SESSION['log']) and $_SESSION['log']=='11')
        header('location:adminindex.php');
    else if(isset($_SESSION['log']) and $_SESSION['log']!='11')
        header('location:index.php');
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Vnox | LogIn</title>
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
</style>

<?php
        
      if(isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['Login']) && isset($_POST['vercode1']) ){
                if ($_POST['vercode1'] != $_SESSION['vercode'] OR $_SESSION['vercode']=='')  {
                    echo '<center><h2 style="color:red;">Invalid Captcha</h2></center>';
                }
                else{
               $auname=$_POST['uname'];
               $apass=$_POST['pass'];
               $uname= stripcslashes($auname);
               $pass= stripcslashes($apass);
                           
               $con= mysqli_connect("localhost", "root", "", "movieproject");
               $res= mysqli_query($con, "select * from users where username='$uname' and password='$pass'") or die("Failed to query database".mysqli_error());
               $row= mysqli_fetch_array($res);
               if($row['username'] == $uname && $row['password'] == $pass){
                        session_start();
                        //setcookie('log1', $auname);
                        $_SESSION['log']=$row['id'];
                        if($auname == 'admin' and $apass == 'admin12345')
                            header('location:adminindex.php');
                        else
                            header('location:index.php');
                        
      }
            else {
                       echo '<center><h2 style="color:red;">Invalid Username or Password</h2></center>';
                }
               }}
               
      
      
?>


<body id="page2">
    
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="index.php">Vnox <span>World</span></a></div>
          
          <ul>
              <li><a href="search.php"title="Goto Search Movie"><img src="images/search.png"></li>
            <li><a href="index.php" title="home"><img src="images/icon1.png" alt="" /></a></li>
            <?php
                
                if(isset($_SESSION['log']))
                {
                    echo '<li><a href="account.php" title="account"><img src="images/icon2.png" alt="" /></a></li>';
                }
                else
                {
                    echo '<li><a href="login.php" title="account"><img src="images/login.png" alt="" /></a></li>';
                }
            ?>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            <li><a href="about-us.php">About-Us</a></li>
            <li><a href="account.php">Account</a></li>
            <?php
               if(isset($_SESSION['log'])){
                  echo '<li class="last"><a href="logout.php" class="active">Logout</a></li>';
               }
               else {
                 echo '<li class="last"><a href="login.php" class="active">Login</a></li>';
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
                   <div class="content">
                        <h3>Login <span>Details</span></h3>
                        <form action="login.php" method="POST">
                            <table border="0">   
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">User Name:</td>
                                    <td><input type="text" name="uname"></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">Password:</td>
                                    <td><input type="password" name="pass"></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">Enter code as shown:</td>
                                    <td><img src="captcha.php"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="text" name="vercode1"></td>
                                </tr>
                            </table>
                            <div class="wrapper"> <input style=" border:1px solid #3a3a3a; background-color: #000; color: #858585;" type="submit" name="Login" value="Login"> </div>
                            <div class="wrapper"><a style="color: #858585;" href="register.php">New User</a></div>
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