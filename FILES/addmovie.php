<?php
session_start();
if(!isset($_SESSION['log']) or $_SESSION['log']!='11')
   {
        header('location:login.php');
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Vnox | Addmovie</title>
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
    <script type="text/javascript">
$(document).ready(function () {
    $('#submit').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must select at least one language.");
        return false;
      }

    });
});

</script>



    <?php
    if (isset($_POST['movietitle']) && !empty($_POST['lan']) && isset($_POST['genre']) && isset($_POST['addmovie']) && isset($_FILES['poster']) && isset($_POST['release_date']) && isset($_POST['booking_open_date']) && isset($_POST['status']) && isset($_POST['trailer_link']) && isset($_POST['storyline']) && isset($_POST['rating'])) {
        $movietitle = $_POST['movietitle'];
        $genre = $_POST['genre'];
        $rating = $_POST['rating'];
        $release_date = $_POST['release_date'];
        $booking_open_date = $_POST['booking_open_date'];
        $storyline = $_POST['storyline'];
        $trailer_link = $_POST['trailer_link'];
        $lans=$_POST['lan'];

        if ($_POST['status'] == "Ongoing") {
            $status = 0;
        } else
            $status = 1;


        $con = mysqli_connect("localhost", "root", "", "movieproject");




//if (!file_exists('upload')) 
//{
//   mkdir('upload', 0777, true);
//}

        if (!empty($_FILES["poster"]["name"])) {
            $target_location = "./tmp/" . basename($_FILES["poster"]["name"]);

            if (!(move_uploaded_file($_FILES["poster"]["tmp_name"], $target_location)))
                echo "Error: " . $_FILES["poster"]["error"] . "<br>";
            else {
                //echo basename($target_location); 
                $ext = pathinfo($target_location, PATHINFO_EXTENSION);
                //echo ($ext);
                $new = "./images/" . $movietitle . "." . $ext;
                //echo $new;
                rename($target_location, $new);
                foreach($lans as $lansel){
                $sql = "insert into movies(movietitle,genre,storyline,rating,release_date,booking_open_date,trailer_link,status,poster,language) values ('$movietitle','$genre','$storyline','$rating','$release_date','$booking_open_date','$trailer_link','$status','$new','$lansel')";
                if(!mysqli_query($con, $sql)){
                    echo mysqli_error($con);
                }
               // echo "<script type=\"javascript\">alert($sql);</script>";
                }
            
                
                    header('location:adminindex.php');
                
                
            }
        }
    }
    
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
                                <li><a href="adminindex.php" title="home"><img src="images/icon1.png" alt="" /></a></li>
                                <?php
                
                if(isset($_SESSION['log']))
                {
                    echo '<li><a href="users.php" title="Users"><img src="images/icon2.png" alt="" /></a></li>';
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
                                <li><a href="suggestion.php">Suggestions</a></li>
                                <li><a href="users.php">Users</a></li>
<?php
if (isset($_SESSION['log'])) {
    echo '<li class="last"><a href="logout.php">logout</a></li>';
} else {
    echo '<li class="last" class="active"><a href="login.php">login</a></li>';
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
                                            <h3>Movie <span>Details</span></h3>
                                            
                                          
                                            <form action="addmovie.php" method="POST" enctype="multipart/form-data">
                                                <table border="0">   
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Movie Title:</td>
                                                        <td><input type="text" name="movietitle" required></td>
                                                    </tr>
                                                    <tr style="height:30px;">
                                                        <td style="width: 100px;">Genre:</td>
                                                        <td><input type="text" name="genre" required></td>
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Storyline:</td>
                                                        <td><input type="textarea" name="storyline" required></td>
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Release date:</td>
                                                        <td><input type="date" name="release_date" required></td>
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Booking opens on:</td>
                                                        <td><input type="date" name="booking_open_date" min='<?php echo date("Y-m-d"); ?>' required></td>
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Poster:</td>
                                                        <td><input type="file" name="poster" id="poster" required></td>
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Trailer:</td>
                                                        <td><input type="text" name="trailer_link" placeholder="Paste trailer link here" required></td>
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Status:</td>
                                                        
                                                        <td><select name="status" required><option>Ongoing</option>
                                                                <option>Upcoming</option></select></td>
                                                        
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Language:</td>
                                                        <td><input type="checkbox" name="lan[]" value="Hindi">Hindi</td>
                                                        <td><input type="checkbox" name="lan[]" value="English">English</td>
                                                    </tr>
                                                        
                                                        
                                                    </tr>
                                                    <tr style="height: 30px;">
                                                        <td style="width: 100px;">Rating:</td>
                                                        <td><input type="number" step="0.01" min="0" max="10" name="rating" placeholder="Must be between 0-10" required></td>

                                                    </tr>
                                                    <br>Ratings will be considered only for Ongoing movies.

                                                </table><br><br>
                                                        <center><div class="wrapper"> <input style=" border:2px solid #FFF; background-color: #000; color: #858585;" type="submit" name="addmovie" id="submit" value="Add"> </div></center>
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
                                                        <script type="text/javascript"> Cufon.now();</script>
                                                        <!-- END PAGE SOURCE -->
                                                        </body>
                                                        </html>
