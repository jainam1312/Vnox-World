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
<style>
    input[type=text]{
         width:293px;
	       padding:1px 0 1px 3px;
	       background:#000;
	       border:1px solid #3a3a3a;
	       color:#fff;
    }
    input[type=textarea]{
         width:293px;
	       padding:1px 0 1px 3px;
	       background:#000;
	       border:1px solid #3a3a3a;
	       color:#fff;
              
               height: 100px;
               width:293px;
    }
   
</style>


     




<body id="page2">
    
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="index.php">Vnox <span>World</span></a></div>
          
          <ul>
            <li><a href="adminindex.php" title="home"><img src="images/icon1.gif" alt="" /></a></li>
            
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="adminindex.php">Movies</a></li>
            <li><a href="shows.php">Shows</a></li>
            <li><a href="suggestion.php">Suggestions</a></li>
            <li><a href="users.php">Users</a></li>
                <?php
               if(isset($_SESSION['log'])){
                  echo '<li class="last"><a href="logout.php">Logout</a></li>';
               }
               else {
                 echo '<li class="last" class="active"><a href="login.php">Login</a></li>';
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
                        <?php
                            $con= mysqli_connect("localhost", "root", "", "movieproject");
                            $sql = "select * from movies where mid= '".$_GET['mid']."'";
                            $res=mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($res);
                        ?>
                        <h3>Movie <span>Details</span></h3>
                        <form action="updatemovie.php" method="POST" enctype="multipart/form-data">
                            <table border="0">   
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Movie Title:</td>
                                    <td><input type="text" name="movietitle" value='<?php echo $row['movietitle'] ?>'></td>
                                </tr>
                                <tr style="height:30px;">
                                    <td style="width: 100px;">Genre:</td>
                                    <td><input type="text" name="genre" value='<?php echo $row['genre'] ?>'></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Storyline:</td>
                                    <td><input type="textarea" name="storyline" value='<?php echo $row['storyline'] ?>'></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Release date:</td>
                                    <td><input type="date" name="release_date" value='<?php echo $row['release_date'] ?>'></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Booking opens on:</td>
                                    <td><input type="date" name="booking_open_date" value='<?php echo $row['booking_open_date'] ?>'></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Poster:</td>
                                    <td><input type="file" name="poster"></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Trailer:</td>
                                    <td><input type="text" name="trailer_link" placeholder="Paste trailer link here" value='<?php echo $row['trailer_link'] ?>'></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Status:</td>
                                    <td><select name="status" selected='<?php if($row['status'] == 0){ echo "Ongoing"; }else{ echo "Upcoming"; } ?>'><option>Ongoing</option>
                                            <option>Upcoming</option></select></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Language:</td>
                                    <td><?php $row['language'] ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Rating:</td>
                                    <td><input type="number" min="0" max="1 0" step="0.1" name="rating" placeholder="Must be between 0-10" value='<?php echo $row['rating'] ?>'></td>
                                    
                                </tr>
                                <input type='hidden' name='mid' value=<?php echo $row['mid'] ?>> 
                                <br>Ratings will be considered only for Ongoing movies.
                                                               
                            </table><br><br>
                                    <center><input type='submit' name='updatemovie' value='Update'></center>
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

