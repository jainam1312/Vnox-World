<?php
    session_start();
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
    input[type=password]{
        width:293px;
	      padding:1px 0 1px 3px;
	      background:#000;
	      border:1px solid #3a3a3a;
	      color:#fff;
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
              <li><a href="adminindex.php" title="home"><img src="images/icon1.png" alt="" /></a></li>
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
              <li><a href="adminindex.php">Movies</a></li>
            <li><a href="shows.php">Shows</a></li>
            <li><a href="suggestion.php" class="active">Suggestions</a></li>
            <li><a href="users.php">Users</a></li>
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
     <?php
        if(!isset($_SESSION['log']))
        {
            header('location:login.php');
        }
        else{
        $con= mysqli_connect("localhost", "root", "", "movieproject");
        $sql = "select * from showtime where sid=3";
        $res = mysqli_query($con, $sql);
        
        
     ?>
      <div id="content">
        <div class="line-hor"></div>
          <div class="box">
            <div class="border-right">
              <div class="border-left">
                <div class="inner">
                   <div class="content">
                        <h3>Movie <span>Shows:</span></h3>
                        <h3>Screen <span>3:</span></h3>
                        
                       <?php while( $row = mysqli_fetch_array($res))
                       {
                        ?>   
                                <form action="updateshow.php" method="POST">
                                    <input type="hidden" name="sid" value="3">
                                    <?php
                                        if ($row['time'] == "9AM")
                                            echo '<input type="hidden" name="showid" value="9">';
                                        else if ($row['time'] == "1PM")
                                            echo '<input type="hidden" name="showid" value="10">';
                                        else if ($row['time'] == "5PM")
                                            echo '<input type="hidden" name="showid" value="11">';
                                        else if ($row['time'] == "9PM")
                                            echo '<input type="hidden" name="showid" value="12">';
                                    ?>    
                                     
                                <table border="0">
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Time:</td>
                                    <td><b><?php echo $row['time']?></b>&nbsp;
                                    <td style="width: 100px;">Running Movie:</td><td>
                                    <?php       $sql5 = "select * from showtime natural join movies where sid=3 and time='".$row['time']."'";
                                                $res5 = mysqli_query($con,$sql5);
                                                $row6 = mysqli_fetch_array($res5)  or die( mysqli_error($con));;
                                                echo $row6['movietitle']?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Price1:</td>
                                    <td><b><input type="text" name="price1" value='<?php echo $row['price1'] ?>'></b></td></tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Price2:</td>
                                    <td><b><input type="text" name="price2" value='<?php echo $row['price2'] ?>'></b></td></tr>
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">Price3:</td>
                                    <td><b><input type="text" name="price3"  value='<?php echo $row['price3'] ?>'></b></td></tr>
                                
                                <tr style="height: 30px;">
                                    <td style="width: 100px;">New Movie:</td>
                                    <td><select name="newmovie">
                                         
                                        <?php
                                            
                                            $sql3 = "select * from movies where status = 0";
                                            $res3 = mysqli_query($con,$sql3);
                                            while($row2 = mysqli_fetch_array($res3))
                                            {
                                                echo '<option value='.$row2['mid'].'>'.$row2['movietitle'].'</option>';
                                            }
                                            ?></select></td>
                                </tr>
                                <tr>
                                    <td>  <input type='submit' name='updateshow.php' value='Update'></td>
                                 </tr>
                                 <br><br><p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                               
                                </table>
                                                      
                                
                                    
                                </form>
                            
                       <?php } ?>       
                              
                              
                           
                            
                    </div>
              </div>
            </div>
       		</div>
        </div>
      </div>
        <?php } ?>
    </div> 
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>

