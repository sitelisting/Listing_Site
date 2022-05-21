<?php 
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="user_homepage.css">
      <title>Listing Site</title>
   </head>
   <body>
      <div class="main">
         <div class="navbar">
            <img src="list.png" class="menu-icon" onclick="myMenu()">
            <div class="icon">
               <h1 class="logo">ListingSite</h1>
            </div>
            <div class="menu">
               <ul id="menuList">
                  <li><a href="listedjobs.php">LIST</a></li>
                  <li><a href="about.php">ABOUT</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
                  <li><a href="jobs.php">POST</a></li>
                  <li><a href="profile.php"><?php echo htmlspecialchars($name); ?></a></li>
               
               </ul>
            </div>
         </div>
         <div class="home">
            <h1>WELCOME TO ListingSite</h1>
            <p>Are you graduated and you are looking for a job?</p>
            <p>Find jobs listed on our site!</p>
            <div class="jobs">
               <ul>
                  <li><a href="">ACCOUNTING & FINANCE</a></li>
                  <li><a href="">BUSINESS ANALIST</a></li>
                  <li><a href="">IT & ENGINEERING</a></li>
                  <li><a href="">HUMAN RESSOURCES(HR)</a></li>
               </ul>
            </div>
         </div>
      </div>
      <footer id="footer">
         <p>
         <h3>Useful links:</h3>
         </p>
         <a href="jobs.php">Listed Jobs</a><br><br>
         <a href="about.php">About Us</a>
         <br>
         <br>
         <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>        
         <p id="follow">Follow us !</p><br>
         <!-- social media links -->
         <div class="Sicon">
         <a class="social-icon"href="https://twitter.com/listingsite">
            <ion-icon name="logo-twitter"></ion-icon>
         </a>
         <a class="social-icon"href="https://instagram.com/ListingSite">
            <ion-icon name="logo-instagram"></ion-icon>
         </a>
         <a class="social-icon"href="https://facebook.com/ListingSite">
            <ion-icon name="logo-facebook"></ion-icon>
         </a>
         </div>
      </footer>
      <script>
         var menuList= document.getElementById('menuList');
         menuList.style.maxHeight= "0px";
         function myMenu(){
            if( menuList.style.maxHeight== "0px"){
               menuList.style.maxHeight= "150px";
            }
            else{
               menuList.style.maxHeight= "0px";
            }
         }
      </script>
   </body>
</html>