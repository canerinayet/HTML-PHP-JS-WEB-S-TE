<?php
session_start();
ob_start(); 
error_reporting(0);
if($_SESSION["SAYISI"]==""){
$_SESSION["SAYISI"]=1;
}
$sayisi=$_SESSION["SAYISI"]+1; 
if($_POST["urun_id"]){
    $_SESSION["sepet"]["id"][$sayisi]=$_POST["urun_id"];
    $_SESSION["SAYISI"]=$sayisi;
}
 
try {
    $db = new PDO("mysql:host=localhost;dbname=deneme", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}

 ?>



<div class="card-body pt-0">

<?php 
$nettoplam=0;
foreach ($_SESSION["sepet"]["id"] as $id) {
    $row = $db->query("SELECT * FROM urunler WHERE urun_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);

    $nettoplam=$row['urun_fiyat']+$nettoplam;
 
   ?>


                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid" src="resim/<?php echo $row['urun_resim']; ?>" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col-auto"><p class="mb-0"><b><?php echo $row['urun_adı']; ?></b></p>
                                               </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">1</p></div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b><?php echo $row['urun_fiyat']; ?></b></p></div>
                                </div>
                                <hr class="my-2">
                               <?php   } ?>
 
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p class="mb-1"><b>Toplam Ttuar</b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b><?php echo $nettoplam; ?></b></p></div>
                                        </div>
                                     

                                </div>
                             
                            </div>