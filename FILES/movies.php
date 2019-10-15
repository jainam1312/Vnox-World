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
<?php 
	$con = mysqli_connect("localhost","root","","movieproject");
	$res = mysqli_query($con,"select * from movies");
	$row = mysqli_fetch_array($res);
?>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="index.html">VNOX <span>World</span></a></div>
          <ul>
            <li><a href="index.php" title="home"><img src="images/icon1-act.gif" alt="" /></a></li>
            <li><a href="contact-us.php" title="contact-us"><img src="images/icon2.gif" alt="" /></a></li>
          </ul>
        </div>  
        <div class="row-2">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php" class="active">Ongoing-Shows</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            <li><a href="contact-us.php">Contact-Us</a></li>
            <li class="last"><a href="about-us.php">About-Us</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div id="slogan">
          <div class="image png"></div>
          <div class="inside">
            <h2>Get 50% Off on <span>First Time Booking</span></h2>
            <p>Book Your favourite Show with Vnox world and get 50% Off.Valid for minimum order of Rs. 500</p>
          </div>
        </div>
      <!--  <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3>Welcome to <b>VNOX</b> <span>World</span></h3>
                <p>Felitsed vel inte vivamus ant sed sapientesque ero id auctor tincidunt. Enimin ulla mi et nibh turien augue habitudin platea sed orci. Intedonec quis sed condis donec urna lacilis leo quismodo wisi quis.</p>
                <div class="img-box1"><img src="images/1page-img1.jpg" alt="" />Fauctororci cursuspendrerisque ipsum elit congue nibh proin nulla eu urna et. Tordolorem metus fringilla sem facinia sapien in in malesuada vitae quismodo. Ipsumut tellentegest nunc pede id sem gravida natis justo maecenas eu. </div>
                <p>Doneccursus et amet a mattitor condisse laoreet accum wisis sapibulum orci. Cursuscondimentum dolorem pulvinare lacus amet commod tincidunt tellus quisque donec natibus.</p>
              </div>
            </div>
          </div>
        </div> -->
        <div class="content">
          <h3>Trending <span>Movies</span></h3>
          
          <ul class="movies"> 
            
            <li>
               <?php echo "<h4>$row[movietitle]</h4>"; ?>
               <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poster']).' " height="300px" />';  ?>
               <p>Near death, Carol Danvers was transformed into a powerful warrior for the Kree. Now, returning to Earth years later, she must remember her past in order to to prevent a full invasion by shapeshifting aliens, the Skrulls.</p>
               <div class="wrapper"><a href="book.php" class="link2"><span><span>Book Now</span></span></a></div>
            </li>
            
            <li>
              <h4>Prince of Percia: Sands of Time</h4>
              <img src="images/1page-img3.jpg" alt="" />
              <p>Dolorem malesuada anterdum quis vitae. Cursustellentesque enim justo vestasse vitae trices phasellus leo sociis leo magnisl. Malestibulusnatis. </p>
              <div class="wrapper"><a href="book.php" class="link2"><span><span>Book Now</span></span></a></div>
            </li>
            
            <li class="last">
              <h4>The Twilight Saga: Eclipse</h4>
              <img src="images/1page-img4.jpg" alt="" />
              <p>Quisque felit odio ut nunc convallis semper sente ris feugiat. Odionam leo phasellentum id vitantesque nunc tor quisque a maecenatibus pellus.</p>
              <div class="wrapper"><a href="book.php" class="link2"><span><span>Book Now</span></span></a></div>
            </li>
            
            <li class="clear">&nbsp;</li>
          
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