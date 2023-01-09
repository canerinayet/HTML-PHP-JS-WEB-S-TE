<?php

$kadi=$_POST["kadi"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$sifre=$_POST["sifre"];
$tcno=$_POST["tcno"];
$kayitbag=mysqli_connect("localhost","root","","deneme");
    $kayisl=mysqli_query($kayitbag,"insert into uye(kadi,tel,mail,sifre,tcno) values('$kadi','$tel','$mail','$sifre','$tcno')");
    if($kayisl){
        
        header("Location: index.html");
    }else{
        echo "kayitta hata!..";
    }
  

    
?>

       