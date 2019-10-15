

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About Us</title>
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
          <div class="fleft"><a href="index.php">VNOX <span>World</span></a></div>
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
            ?>     </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><a href="upcoming.php">Upcoming-Movies</a></li>
            
            <li><a href="about-us.php" class="active">About-Us</a></li>
            <li><a href="account.php">Account</a></li>
             <?php
                
            	 if(isset($_SESSION['log'])){
                         
            	   	echo '<li class="last"><a href="logout.php">Logout</a></li>';
         		   }
         		   else {
        			   echo '<li class="last"><a href="login.php">Login</a></li>';
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
                <h3>About <span>Us</span></h3>
                <p class="p1"><b>To be the leader in the cinema exhibition industry, in every aspect right from the quality and choice of cinema to the varied services offered and eventually the highest market share.</b></p>
                <p>VNOX Leisure Limited is the diversification venture of the VNOX Group into entertainment. VNOX Leisure Limited is the diversification venture of the INOX Group into entertainment. INOX Leisure’s mission is to be the leader in the cinema exhibition industry, in every aspect right from the quality and choice of cinema to the varied services offered and eventually the highest market share.<br>

VNOX has traversed its own path by bringing in a professional and service-oriented approach to the cinema exhibition sector. With strong financial backing, impeccable track record and strong corporate ethos, VNOX has established a strong presence in the cinema exhibition industry in a very short span.<br>

It must be noted that VNOX was chosen post a nationwide tender to design, construct and operate the prestigious multiplex in Goa. Since the launch of the multiplex in 2004, VNOX is the venue of the prestigious International Film Festival of India (IFFI) every year.<br>

Since its inception in 1999, VNOX has been active in exploring acquisition and / or expansion opportunities on continuous basis with a view to consolidate its position in the multiplex industry. VNOX kicked off the consolidation phase in the multiplex industry by acquiring Calcutta Cine Pvt. Ltd. (CCPL) in 2007. This was followed by the acquisition of Fame India Limited, another multiplex cinema theatre Company having nationwide presence in May 2013. In August 2014, VNOX acquired a third multiplex chain Satyam Cineplexes Ltd., thereby strengthening its presence to be a significant player in the Indian multiplex space and redefine the movie going experience in India.<br>

VNOX currently operates 136 multiplexes and 557 screens in 67 cities and will continue its expansion into places like Gwalior, Bhubaneswar, Salem and New Delhi while adding new properties in Delhi NCR, Mumbai, Bhubaneswar and Hyderabad among others.<br>

A pioneer in adopting latest technologies, VNOX recently launched India’s first LASERPLEX at Cr2 mall in Nariman Point and India’s first 7-Star experience in R-City mall at Ghatkopar West as well as in Nariman Point. Both these multiplexes additionally houses INSIGNIA, INOX’s signature experience, which is the last word in luxury cinema entertainment. With INSIGNIA, guests enjoy a gourmet menu curated by master Chef Vicky Ratnani, butler-on-call and service by staff dressed in designer uniforms by Arjun Khanna, among other features. In addition to the well-known food and beverage outlet, REFUEL, which serves a variety of cinema foods, a café, called UNWIND, dishes out an array of finger-licking fresh and local food.  A fun zone for tiny tots, called KIDDLES is set up in the lobby where young children can spend time playing games and engaging in creative activities before the movie in key multiplexes.<br>

VNOX Leisure’s mission is to be the leader in the cinema exhibition industry, in every aspect right from the quality and choice of cinema to the varied services offered and eventually the highest market share.<br>

</p>
              </div>
            </div>
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
          <h3>Suggestion <span>Form</span></h3>
          <form action="suggest-us.php" id="contacts-form" method="POST">
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
                <label>Suggestion:</label>
                <textarea cols="1" rows="1" name='message'></textarea>
              </div>
                <center><input type="submit" value="Submit Your Message"></center>
            </fieldset>
          </form>
        </div>
      </div>
        <div class="content">
          <h3>Our <span>Team</span></h3>
          <ul class="movies">
            <li>Thakkar Sachin D.<br>
              ID:17ceuog044<br>
              Batch:D4<br>
              Roll-No:151<br></li>
            <li>Trivedi Jainam M.<br>
              ID:17ceuos065<br>
              Batch:D4<br>
              Roll-No:153<br></li>
            <li class="last">Vaghasiya Harsh H.<br>
              ID:17ceuos053<br>
              Batch:D4<br>
              Roll-No:156<br></li>
          </ul>
          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div> 
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>