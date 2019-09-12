<?php 
  error_reporting(0);
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
</head>
<style>
    .aa{
        width:293px;
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
          <ul>
            <li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>       </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="book.php" class="active">Booking</a></li>
            <li><a href="contact-us.html">Contact-Us</a></li>
            <li class="last" ><a href="about-us.html">About-Us</a></li>
            
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
                       <h3>Credit Card <span>Info</span></h3>
                        <form  action="preceived.php" method="POST">
                          <?php echo $_POST['seats']?>
                          <?php echo $_POST['total']?>
          <input type="hidden" value="<?php echo $_POST['seats']?>" name="seats">
          <input type="hidden" value="<?php echo $_POST['total']?>" name="total">
          <input type="hidden" value="<?php echo $_POST['mid']?>" name="mid">
          <input type="hidden" value="<?php echo $_POST['date']?>" name="date">
          <input type="hidden" value="<?php echo $_POST['time'];?>" name="time">
          <input type="hidden" value="<?php echo $_POST['uid'];?>" name="uid">
                            <table border="0">
                                <tr style="height: 30px;">
                                    <td style="width: 150px;">Name on Credit Card:</td>
                                    <td><input class="aa" type="text" name="nc" required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">Card Number:</td>
                                    <td><input class="aa" type="text" placeholder="xxxxxxxxxxxxxxxx" name="seat" required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td>Expiration:</td>
                                    <td><input style="background:#000;
	border:1px solid #3a3a3a;
        color:#fff;" size="2" type="text" placeholder="xx" required/>&nbsp;<input style="background:#000;
	border:1px solid #3a3a3a;
	color:#fff;"size="4" type="text" placeholder="xxxx" required></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">CVV:</td>
                                    <td><input class="aa" type="text" name="cvv" placeholder="xxx" required></td>
                                </tr>
                            </table>
                           
                                    <div class="wrapper"> <input style=" border:1px solid #3a3a3a; background-color: #000; color: #858585;" type="submit" value="PayNow" name="submit"> </div>
                             
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