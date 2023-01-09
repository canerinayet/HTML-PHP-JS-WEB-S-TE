<?php

$urun_adi=$_POST["urun_adı"];
$urun_fiyat=$_POST["urun_fiyat"];
$uye_adi=$_POST["uye_adi"];


try {
    $db = new PDO("mysql:host=localhost;dbname=deneme", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}
$query = $db->query("SELECT * FROM urunler", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          print $row['urun_adı']."<br>".$row['urun_fiyat'];
     }
}