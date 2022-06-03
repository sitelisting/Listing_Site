<?php
include('connectdb.php');
if(isset($_SESSION['status'])) {//tracking each user ip /session the correct way 
    // echo "<script> alert('no luck')</script>";
   
 }else{
    $ip = $_SERVER['REMOTE_ADDR'];  
    $query = "INSERT INTO `user_hits` (`Id`, `IP`,`Date`) VALUES (NULL,'$ip',NULL)";
    $result = mysqli_query($conn,$query);
    // $_SESSION['status']=true;
    // echo "<script> alert('Inserted')</script>";
 }

?>
