<?php
include 'ust_kisim.php';

// Linkten gelen id'yi alalım (index.php?id=5 gibi)
$id = $_GET['id'];

// O id'ye sahip ürünü veritabanından bul
$sor = mysqli_query($baglanti, "SELECT * FROM urunler WHERE id='$id'");
$urun = mysqli_fetch_assoc($sor);

// Eğer böyle bir ürün yoksa (Kullanıcı linkle oynadıysa)
if(!$urun) {
    echo "Böyle bir ürün bulunamadı dostum.";
    exit;
}
?>

<div style="margin-top:20px;">
    <div style="float:left; width:40%;">
        <img src="resimler/<?php echo $urun['resim']; ?>" width="90%" style="border:5px solid #fff; box-shadow:0 0 10px #ccc;">
    </div>

    <div style="float:right; width:55%;">
        <h1 style="margin-top:0;"><?php echo $urun['urun_adi']; ?></h1>
        <h2 style="color:#27ae60;"><?php echo $urun['fiyat']; ?> TL</h2>
        <p><?php echo $urun['aciklama']; ?></p>
        
        <br><br>
        <a href="sepet_ekle.php?id=<?php echo $urun['id']; ?>" 
           style="background:orange; color:white; padding:15px 30px; text-decoration:none; font-size:20px; font-weight:bold; border-radius:5px;">
           SEPETE EKLE 🛒
        </a>
        
        <br><br><br>
        <a href="index.php">< Geri Dön</a>
    </div>
    
    <div style="clear:both;"></div> </div>

</div> </body>
</html>