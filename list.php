<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Listedjobs</title>
   <link rel="stylesheet" href="listedjobs.css">
</head>
<body>

<?php

include("connectdb.php");

$sql="SELECT * FROM createjobs";

$result= mysqli_query($conn, $sql );
if(mysqli_num_rows($result) > 0){
   while($row= mysqli_fetch_assoc($result)){
      ?>
      <link rel="stylesheet" href="listedjobs.css">
      <table class="table"> 
         <thead>
            <tr>
               <th>Category</th>
               <th>Company Name</th>
               <th>Position</th>
               <th>Job Contact</th>
               <th>More Info and Apply</th>
           </tr>
         </thead>
         <tbody>
            <tr>
               <th><?php echo $row['Job_Category'] ?></th>
               <th><?php echo $row['Company_Name'] ?></th>
               <th><?php echo $row['Job_Position'] ?></th>
               <th><?php echo $row['Company_Number'].'<br>' .$row['Company_Email']?></th>
               <th><a  style='color:white;' href="<?php echo $row['Job_Link'] ?>">Click Here</a></th>
            </tr>
      </tbody>
      </table>
    

      <script src="app.js"></script>
     
<?php       
   }
}
else{
   echo "<h2 style='color:white;'>There aren't any jobs listed currenty.</h2>";
} 

?> 

</body>
</html>
<?php

   mysqli_close($conn);
?>