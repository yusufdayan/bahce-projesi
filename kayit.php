<?php
include 'baglan.php'; // Bağlantı lazım ama ust_kisim'i sonra çağıracağız

$mesaj = "";

if(isset($_POST['kayit'])) {
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $ekle = mysqli_query($baglanti, "INSERT INTO uyeler (ad_soyad, email, sifre) VALUES ('$ad', '$email', '$sifre')");

    if($ekle) {
        // Başarılıysa direkt giriş sayfasına yönlendir
        header("Location: giris.php");
        exit;
    } else {
        $mesaj = "<p style='color:red;'>Bir hata oluştu!</p>";
    }
}
?>

<?php include 'ust_kisim.php'; ?>

<div style="width:40%; margin:50px auto; background:white; padding:30px; border:1px solid #ddd; text-align:center;">
    <h2>📝 Yeni Üye Kaydı</h2>
    
    <?php echo $mesaj; ?>

    <form method="post">
        <input type="text" name="ad" placeholder="Adınız Soyadınız" required style="width:90%; padding:10px; margin:10px 0;"><br>
        <input type="email" name="email" placeholder="E-Posta Adresiniz" required style="width:90%; padding:10px; margin:10px 0;"><br>
        <input type="password" name="sifre" placeholder="Şifre Belirleyin" required style="width:90%; padding:10px; margin:10px 0;"><br>
        
        <button type="submit" name="kayit" style="background:#2980b9; color:white; border:none; padding:10px 20px; cursor:pointer;">KAYIT OL</button>
    </form>
</div>

</div>
</body>
</html>