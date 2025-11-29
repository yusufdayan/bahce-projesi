<?php
session_start();
// Güvenlik önlemi: Giriş yapmamışsa at dışarı
if(!isset($_SESSION['admin_id'])) {
    header("Location: giris.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yönetim Paneli</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .menu { background: #eee; padding: 10px; margin-bottom: 20px; border-bottom: 2px solid #333; }
        .menu a { margin-right: 15px; text-decoration: none; color: #333; font-weight: bold; }
        .kutu { border: 1px solid #ccc; padding: 20px; display: inline-block; width: 200px; text-align: center; }
    </style>
</head>
<body>

    <div class="menu">
        <span>PANEL YÖNETİMİ</span> | 
        <a href="index.php">Anasayfa</a>
        <a href="urun_ekle.php">Ürün Ekle</a>
        <a href="../index.php" target="_blank">Siteye Git</a>
        <a href="cikis.php" style="color:red; float:right;">Çıkış Yap</a>
    </div>

    <h1>Hoşgeldin Başkan</h1>
    <p>Buradan siteni yönetebilirsin. Ürün eklemek için yukarıdaki menüyü kullan.</p>

    <div class="kutu">
        <h3>Hızlı İşlem</h3>
        <a href="urun_ekle.php">Yeni Ürün Ekle +</a>
    </div>

</body>
</html>