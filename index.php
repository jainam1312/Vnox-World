<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Vnox World</title>
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

<body id="page1">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="index.php">Vnox <span>World</span></a></div>
          <ul>
            <li><a href="index.php" title="home"><img src="images/icon1-act.gif" alt="" /></a></li>
            <li><a href="contact-us.php" title="contact-us"><img src="images/icon2.gif" alt="" /></a></li>
          </ul>
        </div>  
        <div class="row-2">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            <li><a href="contact-us.php">Contact-Us</a></li>
            <li><a href="about-us.php">About-Us</a></li>
            <?php
            	 if(isset($_SESSION['log'])){
            	   	echo '<li class="last"><a href="logout.php">$_SESSION["log"]</a></li>';
         		   }
         		   else {
        			   echo '<li class="last"><a href="login.php"$_SESSION["log"]</a></li>';
         		   }
               echo $_SESSION["log"];
         	  ?>
          </ul>
        </div>
      </div>
      <div id="content">
        <div id="slogan">
          <div class="image png"></div>
          <div class="inside">
            <h2>FREE POPCORN on <span>First Time Booking</span></h2>
            <p>Book Your favourite Show with 2 or more tickets and get POPCORN absolutely FREE . </p>
          </div>
        </div>

        <?php
            $con = mysqli_connect("localhost","root","","movieproject");
            $res = mysqli_query($con,"select * from movies where status = 0");
            $numResults = mysqli_num_rows($res);
		        $counter = 0;
        ?>
        
        <div class="content" style="padding: 0 !important">
          <h3>Ongoing <span>Movies</span></h3>
          
          <ul class="movies"> 

            <?php while($row = mysqli_fetch_array($res)) {  if( ($counter+1)%3 != 0)	{?>
            	
            		<li>
              	 		<?php echo "<h4>".strtoupper($row['movietitle'])."</h4>";?>
               			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poster']).' " height="300px" width="200px" style="margin: 0;"/>';  ?>
               			<?php echo "<h3>Rating $row[rating]"."/10</h3>";?>
               			<?php echo "<p>$row[storyline]</p>";?>

               			<div class="wrapper"><a href="book.php?mid=<?php echo $row['mid'];?>" class="link2"><span><span>Book Now</span></span></a> &nbsp; &nbsp; <a href="<?php echo $row['trailer_link']?>" class="link2" target="_blank"><span> <span> See Trailer</span> </span></a> </div>
            		</li>
            		&nbsp;
        		<?php } else {?>

        			<li class="last">
             	 		<?php echo "<h4>".strtoupper($row['movietitle'])."</h4>"; ?>
              			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poster']).' " height="300px" width="200px" style="margin: 0;" />';  ?>
              			<?php echo "<h3>Rating $row[rating]"."/10</h3>";?>
              			<?php echo "<p>$row[storyline]</p>";?>
              			<div class="wrapper"><a href="book.php?mid=<?php echo $row['mid'];?>" class="link2"><span><span>Book Now</span></span></a> &nbsp; &nbsp; <a href="<?php echo $row['trailer_link']?>" class="link2" target="_blank"><span> <span> See Trailer</span> </span></a> </div>
            		</li>
           			<li class="clear">&nbsp;</li>
            	<?php } ?>
           	
            <?php $counter++; } ?>
            
          </ul>
        </div>
      </div>
      <!--<div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
              <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>