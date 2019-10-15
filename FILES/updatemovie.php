<?php
      if(isset($_POST['mid']) && isset($_POST['movietitle']) && isset($_POST['genre']) && isset($_POST['updatemovie']) && isset($_POST['release_date']) && isset($_POST['booking_open_date']) && isset($_POST['status']) && isset($_POST['trailer_link']) && isset($_POST['storyline']) && isset($_POST['rating'])){
               $movietitle=$_POST['movietitle'];
               $genre=$_POST['genre'];
               $rating=$_POST['rating'];
               $release_date=$_POST['release_date'];
               $booking_open_date=$_POST['booking_open_date'];
               $storyline=$_POST['storyline'];
               $trailer_link=$_POST['trailer_link'];
               $mid = $_POST['mid'];
               
                if($_POST['status'] == "Ongoing")
               {
                   $status = 0;
               }
               else
                   $status = 1;
                           
               $con= mysqli_connect("localhost", "root", "", "movieproject");
               
                
               $sql = "update movies set movietitle='$movietitle',genre='$genre',storyline='$storyline',rating='$rating',release_date='$release_date',booking_open_date='$booking_open_date',trailer_link='$trailer_link',status='$status' where mid='$mid'";
               
               if(mysqli_query($con, $sql)){
                     header('location:adminindex.php');
                }else{
                    echo mysqli_error($con);
                }
            }
        
    
                        
              
                                    
                                    else{
                                        echo '<b style ="color:red"> *update failed;</b>';
                                    }
      
      
?>