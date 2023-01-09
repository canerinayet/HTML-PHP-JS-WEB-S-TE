<?php

$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
$bag=mysqli_connect("localhost","root","","deneme");
   // $kon=mysqli_query($bag,"select * from uye where kadi='$kadi' and sifre='$sifre'");
   $sql = "SELECT * FROM uye";
   $result = $bag->query($sql);
   foreach ($result as $user) {
       $kadi = $user["kadi"];
       $sifre = $user["sifre"];}
    if ($kadi==$kadi && $sifre==$sifre) { 

        if(mysqli_num_rows($result)>0){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user["kadi"]; 
                
            header("Location:urunler.php");

        } else {
            
            header("Location:index.html");
        }}
?>