<?php
include('connectdb.php')

?>
<?php
//retriving existing vistors
$query="SELECT * FROM user_activity";
$result=mysqli_query($conn,$query);
$vistor_ip=$_SERVER['REMOTE_ADDR'];
//Checking Unique
$query="SELECT * FROM user_activity WHERE ip_address='$vistor_ip'";
$result=mysqli_query($conn,$query);
//inserting to the unique user table  
$totalvistors=mysqli_num_rows($result);
if($totalvistors<1){
    $query="INSERT INTO user_activity(ip_address) VALUES('$vistor_ip')";
$result=mysqli_query($conn,$query);
}

?>
<html>
<h4>Vistor Count</h4> <?php echo $totalvistors ?>



</html>