<?php include 'ust_kisim.php'; ?>

<h2>Vitrin Ürünleri</h2>
<hr>

<?php
// Rastgele 10 ürün getirelim
$urun_sor = mysqli_query($baglanti, "SELECT * FROM urunler ORDER BY id DESC LIMIT 10");

// Eğer hiç ürün yoksa
if(mysqli_num_rows($urun_sor) == 0) {
    echo "<p>Henüz siteye ürün eklenmedi dostum.</p>";
}

// Ürünleri döngüye sokup ekrana basıyoruz
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