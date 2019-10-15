
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
        <div class="row-2">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="movies.php">Ongoing-Shows</a></li>
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            <li><a href="contact-us.html" class="active">Contact-Us</a></li>
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
              	<?php
              		if($_POST['name'] != null && $_POST['email'] != null && $_POST['a'] !=null)
                        {
                           
                                     echo 'We have received your feedback. Thanks for providing feedback.<br>';
                                     echo 'Click <a href="index.html">here </a> to go to home page';
                                
                            
                        }
                        else
                        {
                            echo "Please provide details.<br>";
                            echo 'Click <a href="contact-us.html">here </a> to provide information.';
                        }
               ?>
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