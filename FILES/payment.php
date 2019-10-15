<?php 
  error_reporting(0);
?>
<?php
session_start();
if(!isset($_SESSION['log']))
   {
        header('location:login.php');
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Payment Getway</title>
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


<!--<script type="text/javascript" language="Javascript">window.open('payment.php');</script>-->

</head>
<style>
    .aa{
        width:293px;
	padding:1px 0 1px 3px;
	background:#000;
	border:1px solid #3a3a3a;
	color:#fff;
    }
    #cno {
        width:16em;
	padding:1px 0 1px 3px;
	background:#000;
	border:1px solid #3a3a3a;
	color:#fff;
    }
</style>
<body id="page2">
<!-- START PAGE SOURCE -->
<?php /*
      echo $_POST['seats']."<br>";
      echo $_POST['total']."<br>";
      echo $_POST['mid']."<br>";
      echo $_POST['uid']."<br>";
      echo $_POST['date']."<br>";
*/ ?>
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">VNOX <span>World</span></a></div>
          
        </div>
        <div class="row-2">
          <ul>
            <li><label>Home</label></li>
            
            <li><label>Upcoming-Movies</label></li>
            <li><label  class="active">Booking</label></li>
            
            <li><label>Account</label></li>
             <?php
                
                          
                          if(!isset($_SESSION['log'])){
        			   echo '<li class="last"><a href="login.php">Login</a></li>';
         		   }
                           else
                           {
                               echo '<li class="last"><a href="logout.php" >Logout</a></li>';
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
                       <?php if(isset($_POST['errmsg']))
                       {
                           echo 'Error :'. $_POST['errmsg'];
                       }
                       ?>
                       <h3>Credit Card <span>Info</span></h3>
                        <form  action="preceived.php" method="POST">
                          <?php echo '<b>Selected Seats: </b>'.$_POST['seats']?>
                          <?php echo '<br><br><b>Total Amouunt: </b>'.$_POST['total']?>
          <input type="hidden" value="<?php echo $_POST['seats']?>" name="seats">
          <input type="hidden" value="<?php echo $_POST['total']?>" name="total">
          <input type="hidden" value="<?php echo $_POST['mid']?>" name="mid">
          <input type="hidden" value="<?php echo $_POST['date']?>" name="date">
          <input type="hidden" value="<?php echo $_POST['time'];?>" name="time">
              <input type="hidden" value="<?php echo $_POST['uid'];?>" name="uid">
                            <table border="0">
                                <br>
                                <tr style="height: 30px;">
                                    <td style="width: 150px;">Name on Credit Card:</td>
                                    <td><input class="aa" type="text" name="nc" required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">Card Number:</td>
                                    <td><input name="cno" type="number" class="aa" size="16" placeholder="xxxxxxxxxxxxxxxx" name="seat" min='0000000000000000' max='9999999999999999' required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td>Expiration:</td>
                                    <td><input style="background:#000;
	border:1px solid #3a3a3a;
        color:#fff;"  size="2" name="cm" type="number" min='00' max='12' placeholder="xx" required/>&nbsp;<input style="background:#000;
	border:1px solid #3a3a3a;
	color:#fff;"size="4" name="cy" min='<?php echo date("Y"); ?>' max='9999' type="text" placeholder="xxxx" required></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">CVV:</td>
                                    <td><input class="aa" name="cv" type="number" size="3" min='000' max='999' name="cvv" placeholder="xxx" required></td>
                                </tr>
                            </table>
                           
                  <center><div class="wrapper"> <input style=" border:1px solid #3a3a3a; background-color: #000; color: #858585;" type="submit" value="PayNow" name="submit"> </div></center>
                  <center><a href="index.php">Cancel</a></center>
                             
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