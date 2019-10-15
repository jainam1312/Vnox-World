<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
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

<body id="page2">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="index.pph">Vnox <span>World</span></a></div>
          <ul>
            <li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="contact-us.php"><img src="images/icon2.gif" alt="" /></a></li>       </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
              	<?php

                  require "PHPMailer-master/src/PHPMailer.php";
                  require "PHPMailer-master/src/OAuth.php";
                  require "PHPMailer-master/src/SMTP.php";
                  require "PHPMailer-master/src/POP3.php";
                  require "PHPMailer-master/src/Exception.php";
              		
                  if(isset($_POST['submit']))
                    { 
                        $cardno = '/^[0-9]{16}$/';
                        $cardyear = '/^[0-9]{4}$/';
                        $cvv='/^[0-9]{3}$/';
                        $cardmonth = '/^[0-9]{2}$/';
                        $cardname = '/^[A-Z]+\s[A-Z]+$/';
                        $cno = $_POST['cno'];
                        $cy = $_POST['cy'];
                        $cv = $_POST['cv'];
                        $cm = $_POST['cm'];
                        $cname = $_POST['nc'];
                        $uid = $_POST['uid'];
                         $mid = $_POST['mid'];
                         $date = $_POST['date'];
                         $time = $_POST['time'];
                         $seats = $_POST['seats'];
                         $total = $_POST['total'];
                        //if(preg_match($cardno,$cno) && preg_match($cardyear,$cy) && preg_match($cvv, $cv) && preg_match($cardmonth, $cm) && preg_match($cardname, $cname))
                        //{
                         
                         
                       $con = mysqli_connect("localhost","root","","movieproject");
                       $s = mysqli_escape_string($con,$seats);             
                       $query="insert into booked_seat(mid,uid,showdate,time,seats,total) values($mid,$uid,'$date','$time','$s',$total)";
                       
                       $res = mysqli_query($con,$query) or die(mysqli_error($con));
                       
                       $q2="select * from users where id = ".$uid;


                       $res2 = mysqli_query($con,$q2);
                       $row = mysqli_fetch_array($res2);
                       $name = $row['firstname']." ".$row['lastname'];
                       echo "Name :<b> ".$row['firstname']." ".$row['lastname']."</b><br><br>";
                       $email = $row['email'];
                       $q2="select * from movies where mid = '".$mid."'";
                       $res = mysqli_query($con,$q2);
                       $row = mysqli_fetch_array($res);
                       $mt = $row['movietitle'];
                               
                       echo "Movie :<b> ".$row['movietitle']."</b><br><br>";
                       echo "Language:<b> ".$row['language']."</b><br><br>";
                       echo "Time :<b> ".$time."</b><br><br>";
                       echo "Date :<b> ".$date."</b><br><br>";
                       echo "Seats :<b> ".$seats."</b><br><br>";
                       echo "Total :<b> ".$total."</b><br><br>";

                       $mess = '
                              <table>
                                <tr>
                                <td>Username:</td>
                                <td>'.$name.'</td>
                                </tr>

                                <tr>
                                <td>Movietitle:</td>
                                <td>'.$mt.'</td>
                                </tr>
                                
                                <tr>
                                <td>Language:</td>
                                <td>'.$row['language'].'</td>
                                </tr>

                                <tr>
                                <td>Time:</td>
                                <td>'.$time.'</td>
                                </tr>

                                <tr>
                                <td>Date:</td>
                                <td>'.$date.'</td>
                                </tr>

                                <tr>
                                <td>Seats:</td>
                                <td>'.$seats.'</td>
                                </tr>

                                <tr>
                                <td>Total:</td>
                                <td>'.$total.'</td>
                                </tr>
                              </table>
                       ';
                    
                       $mail = new PHPMailer(true);
                       $mail->isSMTP();
                       $mail->Host = 'smtp.gmail.com';
                       $mail->SMTPAuth = true;
                       $mail->Username = ''; //enter mail here
                       $mail->Password = ''; //enter password here
                       $mail->SMTPSecure = 'tls';
                       $mail->SMTPOptions = array(
                                                    'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                    )
                                            );
                       $mail->Port = 587;

                       $mail->setFrom('vnoxworld@gmail.com', 'VnoxWorld');
                       $mail->addReplyTo('vnoxworld@gmail.com', 'VnoxWorld');
                       $mail->addAddress($email);   // Add a recipient

                       $mail->isHTML(true);
                       
                       $mail->Subject = "Ticket confirm";
                       $mail->Body = $mess;

                       if($mail->send()){
                          echo "<br>Your booking made successfully.<br>We have received Payment.<br>Thanks for booking feedback.<br>An Email will send to your email address shortly..<br>";
                       }
                       else
                          echo "<br>Email will be sent after few moments !!!! Sorry for late";
                        }
                        else {
                            
                            echo 'Invalid Entries for Card details.';
                            echo 'Try to book again';
                          }
                        
                     ?>
                <br><br>
                <a href="index.php">Go to Home Page</a>
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