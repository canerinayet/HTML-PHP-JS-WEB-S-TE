<!DOCTYPE html>
<html lang="en">

<?php error_reporting(0);
if($_GET["islem"]=="sepetitemizle")
{
    session_start();
    session_destroy();
    
}
?>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="buton.css">
    <link rel="stylesheet" href="sepet.css">
    

    
    

    
    <title>Yazılım</title>


</head>

<body>
    
<?php   session_start(); error_reporting(0); 
$girisadi=$_SESSION['username'];
$pieces = explode(" ", $girisadi);

?> 
    <script src="./app.js"></script>

    <div class="main">
        <div class="navbar">
            
                <div class="icon">
                    <h2 class="logo">YAZILIM</h2>
                </div>

            <div class="menu">
                
                <ul>
                    <li><a href="index.html">ANASAYFA</a></li>
                    <li><a href="hakkımızda.html">HAKKIMIZDA</a></li>
                    <li><a href="urunler.php">ÜRÜNLER</a></li>
                    <li><a href="iletisim.html">İLETİŞİM</a></li>
                    <li id="girenadi1" style=" margin-left: 70px;color:#ff7200" >HoşGeldiniz:</li> 
                    <li id="girenadi1" style="margin-left: 10px;color:#ff7200"><?php echo $pieces[0]?></li> 
                    <span class="btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-basket-shopping"
                        style="float:right;margin-top: 10px; margin-right: 10px;  "></i></span>
                        
                        
                       
                   
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" > 
                        
  <div class="offcanvas-header">
  
  <div id='sonuc' style="width: 100%;height: 560px;
    overflow: auto;"></div>

  </div>
<a href="urunler.php?islem=sepetitemizle"><button type="button" style="background-color: #ff7200; color:white;" onclick="sil()"> Sepeti temizle</button></a><br>
<button type="button" style="background-color: #ff7200; color:white;" > Sepeti Onayla</button>
  <div class="offcanvas-body">
  
  
  
  </div>
</div>
                   
                </ul>
                
              
           
            </div>

           

            <br></br><br><br>

            <!-- ürünler bölümü -->

            <div class="row">


            <?php

            

try {
    $db = new PDO("mysql:host=localhost;dbname=deneme", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}


            $query = $db->query("SELECT * FROM urunler", PDO::FETCH_ASSOC);
            if ( $query->rowCount() ){
                 foreach( $query as $row ){
                     ?>

<input type="hidden"   name="<?php echo $row['urun_id']; ?>urun_id" value="<?php echo $row['urun_id'] ; ?>" id="<?php echo $row['urun_id']; ?>urun_id" /> 


                <div class="four columns">
                    <div class="card" style="height: 100%;">
                        <img style="height: 100%;width: 100%;" src="resim/<?php echo $row['urun_resim']; ?>" class="course-image u-full-width">
                        <div class="info-card">
                            <h4><?php echo $row['urun_adı']; ?></h4>
                           
                            <img src="img/stars.png" class="u-stars">
                            <p class="price">300<span class="u-pull-right "></span></p>
                            <p class="prices"> <span class="u-pull-right "> <?php echo $row['urun_fiyat']; ?> </span></p>
                            <input type="text" style="display:none;" value="HTML5 Full Ders Paketi" name="urun1"></input>
 	 <a  value="ürün adı" class="u-full-width button-primary button input add-to-cart"  id="<?php echo $row['urun_id']; ?>gonder">Sepete Ekle </a> 

                        </div>
                    </div>
                    <!--.card-->
                </div>

                <script type="text/javascript">
	$(document).ready(function(){

		$("#<?php echo $row['urun_id']; ?>gonder").click(function(){
		var urun_id = $('#<?php echo $row['urun_id']; ?>urun_id').val(); 
        alert("Ürün Sepetinize Eklendi");
		$.post("ornek2.php",{urun_id:urun_id },function(gonderVeri){
            console.log(gonderVeri);
                               $('#sonuc').html(gonderVeri);

                 });
			});
});

</script>
<?php } } ?>

              

                </div>

            </div>
           

</div>









</body>

</html>