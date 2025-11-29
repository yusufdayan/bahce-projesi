<?php 
include 'ust_kisim.php'; 

// Linkten gelen kategori ID'sini alıyoruz
if(isset($_GET['id'])) {
    $kat_id = $_GET['id'];
} else {
    // ID gelmediyse anasayfaya at
    header("Location: index.php");
    exit;
}

// 1. Önce hangi kategoride olduğumuzu bulup adını yazdıralım
$kategori_sor = mysqli_query($baglanti, "SELECT * FROM kategoriler WHERE id='$kat_id'");
$kategori = mysqli_fetch_assoc($kategori_sor);
?>

<h2>📂 <?php echo $kategori['kategori_adi']; ?> Kategorisi</h2>
<hr>

<?php
// 2. Sadece BU kategoriye ait ürünleri çekiyoruz (WHERE kategori_id = $kat_id)
$urun_sor = mysqli_query($baglanti, "SELECT * FROM urunler WHERE kategori_id='$kat_id'");

// Eğer bu kategoride hiç ürün yoksa uyaralım
if(mysqli_num_rows($urun_sor) == 0) {
    echo "<div style='padding:20px; background:#fff; border:1px solid #ddd;'>
            Bu kategoride henüz ürün eklenmemiş dostum. 
            <br><a href='index.php'>Diğer ürünlere bak</a>
          </div>";
}

// Ürünleri listele (Anasayfa ile aynı mantık)
while($urun = mysqli_fetch_assoc($urun_sor)) {
?>
    <div class="urun-kutu">
        <img src="resimler/<?php echo $urun['resim']; ?>" width="100%" height="150" style="object-fit:cover;">
        
        <h3><?php echo $urun['urun_adi']; ?></h3>
        <p style="color:red; font-size:18px;"><?php echo $urun['fiyat']; ?> TL</p>
        
        <a href="urun_detay.php?id=<?php echo $urun['id']; ?>" class="btn">İncele</a>
        <a href="sepet_ekle.php?id=<?php echo $urun['id']; ?>" class="btn" style="background:#e67e22;">Sepete At</a>
    </div>
<?php } ?>

</div> </body>
</html>