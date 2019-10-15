
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>VNOX World</title>
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
  
    }     input[type=number]{
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
 
  $res3 = mysqli_query($con,"select * from showtime where mid = $mid");
  
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
                session_start();
                if(isset($_SESSION['log']))
                {
                    echo '<li><a href="account.php" title="account"><img src="images/icon2.png" alt="" /></a></li>';
                }
                else
                {
                    echo '<li><a href="login.php" title="account"><img src="images/login.png" alt="" /></a></li>';
                }
                ?></ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            <li><a href="book.php" class="active">Booking</a></li>
            
            <li><a href="account.php">Account</a></li>
             <?php
                
                          
                          if(!isset($_SESSION['log'])){
        			   echo '<li class="last"><a href="login.php">Login</a></li>';
         		   }
                           else
                           {
                               echo '<li class="last"><a href="logout.php">Logout</a></li>';
                           }
                        	  ?>
          </ul>
        </div>
      </div>
       <?php
        if(!isset($_SESSION['log']))
        {
            header('location:login.php');
        }
        
        else{
        $con= mysqli_connect("localhost", "root", "", "movieproject");
        $sql2 = "select * from users where id=".$_SESSION['log'];
        $res2= mysqli_query($con, $sql2);
        
        $row2 = mysqli_fetch_array($res2);}
     ?>     

      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                   <div class="content">
                        <h3>Booking <span>Details</span></h3>
                        <form action="web/seat.php" method="POST">
                            <input type="hidden" name="mid" value="<?php echo $mid; ?>">
                                
                                <table border="0">
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Movie:</td>
                                    <td><input type="text" name="movietitle" style="color:#858585;" value="<?php echo $row['movietitle'];?>" readonly></td>
                                </tr>
                                

                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Name:</td>
                                    <td><input type="text" name="name" style="color:#858585;" value="<?php echo $row2['username']; ?>" readonly></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Language:</td>
                                    <td><input type="text" name="lan" style="color:#858585;" value="<?php echo $row['language'];?>" readonly></td>
                                </tr>
                                <?php if(strtotime($row['booking_open_date']) > strtotime(date("Y-m-d"))){?>
                                <tr>
                                  <td>Date:</td>
                                  <td><input  type="date" name="date" value="date" min='<?php echo $row['booking_open_date']; ?>' required></td>
                                </tr>
                                <?php }else{?>
                                <tr>
                                  <td>Date:</td>
                                  <td><input  type="date" name="date" value="date" min='<?php echo date("Y-m-d"); ?>' required></td>
                                </tr>
                                
                                    
                                 
                                    <input type="hidden" name="movieselected" value="yes">
                                </table><br>
                            <?php } ?>
                                
                                    Show Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                    <?php while($row3 = mysqli_fetch_array($res3)){
                                    
                                     echo  "<input required type='radio' name='time' value=".$row3['time'].">".$row3['time']."-Screen[".$row3['sid']."]";
                                     ?>
                                    <?php
                                     echo  " <input type='hidden' name='sid' value=".$row3['sid'].">";
                                     }?><br><br>
                                         <center> <div class="wrapper"> <input style=" border:1px solid #3a3a3a; background-color: #000; color: #858585;" type="submit" value="Book"> </div></center>
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