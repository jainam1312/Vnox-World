
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
    input[type=date]{
        width:293px;
  padding:1px 0 1px 3px;
  background:#000;
  border:1px solid #3a3a3a;
  color:#fff;
  
    }     
</style>
<?php
  $mid = $_GET['mid'];
  $con = mysqli_connect("localhost","root","","movieproject");
  $res = mysqli_query($con,"select * from movies where mid = $mid");
  $row = mysqli_fetch_array($res);
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
            <li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>       </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="book.php" class="active">Booking</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
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
                        <h3>Booking <span>Details</span></h3>
                        <form action="web/seat.php" method="POST">
                            <table border="0">
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Movie:</td>
                                    <td><input type="text" name="mid" style="color:#858585;" value="<?php echo $row['movietitle'];?>" readonly></td>
                                </tr>

                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Name:</td>
                                    <td><input type="text" name="name" required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">Total Seats:</td>
                                    <td><input type="text" name="seat" required></td>
                                </tr>
                                <tr>
                                  <td>Date:</td>
                                  <td><input  type="date" name="date" value="date" required></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td>Show Time:</td>
                                    <td><input required type="radio" name="time" value="9AM"> 9AM <input type="radio" name="time" value="1PM"> 1PM <input type="radio" name="time" value="5PM"> 5PM <input type="radio" name="time" value="9PM"> 9PM</td>
                                </tr>   
                                
                            </table>
                            <div class="wrapper"> <input style=" border:1px solid #3a3a3a; background-color: #000; color: #858585;" type="submit" value="Book"> </div>
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