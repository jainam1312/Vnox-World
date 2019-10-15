<?php
    session_start();
    if(!isset($_SESSION['log']))
    {
        header('location:login.php');
    }
    if(isset($_POST['showid']))
        echo "yes";
    if(isset($_POST['sid']) && isset($_POST['price1']) && isset($_POST['price2']) && isset($_POST['price3']) && isset($_POST['showid']) && isset($_POST['newmovie'])){
        $sid = $_POST['sid'];
        $price1 = $_POST['price1'];
        $price2 = $_POST['price2'];
        $price3 = $_POST['price3'];
        $showid = $_POST['showid'];
        $newmovie = $_POST['newmovie'];
        
        $con= mysqli_connect("localhost", "root", "", "movieproject");
               
                
               $sql = "update showtime set sid='$sid',price1='$price1',price2='$price2',price3='$price3',mid='$newmovie[0]' where showid='$showid'";
               
               if(mysqli_query($con, $sql)){
                     header('location:adminindex.php');
                }else{
                    echo mysqli_error($con);
                }
    }else echo 'fail';?>