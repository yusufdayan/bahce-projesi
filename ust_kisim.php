<?php
include 'baglan.php'; // Bağlantıyı çağırdık
// Eğer oturum daha önce başlatılmamışsa başlat, yoksa elleme
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Bahçe Dünyası</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #2ecc71; color: white; padding: 15px; }
        .menu { display: flex; gap: 20px; background: #333; padding: 10px; }
        .menu a { color: white; text-decoration: none; font-weight: bold; }
        .menu a:hover { color: #2ecc71; }
        .container { width: 80%; margin: 20px auto; background: white; padding: 20px; min-height: 400px; }
        .urun-kutu { border: 1px solid #ddd; padding: 10px; width: 22%; display: inline-block; margin: 1%; text-align: center; }
        .btn { background: #27ae60; color: white; padding: 5px 10px; text-decoration: none; display: inline-block; margin-top: 5px;}
    </style>
</head>
<body>

<header>
    <h1>🌿 Bahçe Dünyası</h1>
    <div style="float:right; margin-top:-30px;">
        <?php if(isset($_SESSION['uye_id'])): ?>
            Hoşgeldin, <?php echo $_SESSION['uye_ad']; ?> | <a href="cikis.php" style="color:white;">Çıkış</a>
        <?php else: ?>
            <a href="giris.php" style="color:white;">Üye Girişi</a>
        <?php endif; ?>
        | <a href="sepet.php" style="color:white;">Sepetim</a>
    </div>
</header>

<div class="menu">
    <a href="index.php">Anasayfa</a>
    <?php
    // Kategorileri veritabanından çekiyoruz
    $kategori_sor = mysqli_query($baglanti, "SELECT * FROM kategoriler WHERE ust_id = 0");
    while($kat = mysqli_fetch_assoc($kategori_sor)) {
        echo '<a href="kategori.php?id='.$kat['id'].'">'.$kat['kategori_adi'].'</a>';
    }
    ?>
</div>

<div class="container">