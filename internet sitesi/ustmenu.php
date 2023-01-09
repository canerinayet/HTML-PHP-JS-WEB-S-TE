<?php 
session_start();

if(isset($_GET['logout'])) {
   session_destroy();
   header("Refresh: 0; url=index.php");
}
 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
     Hoşgeldin, <?php echo $_SESSION['username']; ?>
     <h3 >  
      <a href="index.php?logout" onMouseOver="style.color='red'" onMouseOut="style.color='blue'" >Çıkış Yap  </a> 
    </h3> <?php}