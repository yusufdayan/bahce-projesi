<?php
// Önce işlemleri yapıyoruz (HTML başlamadan)
session_start();
include 'baglan.php';

$mesaj = "";

if(isset($_POST['giris'])) {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $sor = mysqli_query($baglanti, "SELECT * FROM uyeler WHERE email='$email' AND sifre='$sifre'");

    if(mysqli_num_rows($sor) > 0) {
        $kullanici = mysqli_fetch_assoc($sor);
        $_SESSION['uye_id'] = $kullanici['id'];
        $_SESSION['uye_ad'] = $kullanici['ad_soyad'];
        
        header("Location: index.php"); // Direkt anasayfaya at
        exit;
    } else {
        $mesaj = "<div style='background:red; color:white; padding:10px;'>Hatalı e-posta veya şifre!</div>";
    }
}
?>

<?php include 'ust_kisim.php'; ?>

<div style="width:40%; margin:50px auto; background:white; padding:30px; border:1px solid #ddd; text-align:center;">
    <h2>🔑 Üye Girişi</h2>
    
    <?php echo $mesaj; ?>
    
    <form method="post">
        <input type="email" name="email" placeholder="E-Posta Adresiniz" required style="width:90%; padding:10px; margin:10px 0;"><br>
        <input type="password" name="sifre" placeholder="Şifreniz" required style="width:90%; padding:10px; margin:10px 0;"><br>
        
        <button type="submit" name="giris" style="background:#27ae60; color:white; border:none; padding:10px 20px; cursor:pointer;">GİRİŞ YAP</button>
    </form>
    
    <br>
    <p>Hesabın yok mu? <a href="kayit.php">Hemen Kayıt Ol</a></p>
</div>

</div>
</body>
</html>