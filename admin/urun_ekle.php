<?php
include '../baglan.php';
session_start();
// Admin değilse giriş sayfasına at
if(!isset($_SESSION['admin_id'])) { header("Location: giris.php"); exit; }

if(isset($_POST['urun_kaydet'])) {
    $ad = $_POST['ad'];
    $fiyat = $_POST['fiyat'];
    $kat_id = $_POST['kategori'];
    $aciklama = $_POST['aciklama'];

    // Resim Yükleme İşlemi
    $resim_adi = "yok.jpg"; // Varsayılan resim
    if(isset($_FILES['resim']['name']) && $_FILES['resim']['name'] != '') {
        $resim_adi = $_FILES['resim']['name'];
        // Resmi ana klasördeki 'resimler' klasörüne atıyoruz
        move_uploaded_file($_FILES['resim']['tmp_name'], "../resimler/" . $resim_adi);
    }

    // Veritabanına Kayıt
    $ekle = mysqli_query($baglanti, "INSERT INTO urunler (kategori_id, urun_adi, fiyat, aciklama, resim) VALUES ('$kat_id', '$ad', '$fiyat', '$aciklama', '$resim_adi')");

    if($ekle) {
        header("Location: index.php"); // Başarılıysa listeye dön
        exit;
    } else {
        echo "Hata: " . mysqli_error($baglanti);
    }
} // <--- İŞTE EKSİK OLAN PARANTEZ BUYDU
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ürün Ekle</title>
    <style>
        form { width: 50%; border: 1px solid #ccc; padding: 20px; margin: 20px 0; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; background: green; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Yeni Ürün Ekle</h2>
    <a href="index.php">< Geri Dön</a>

    <form method="post" enctype="multipart/form-data">
        
        <label>Ürün Kategorisi:</label>
        <select name="kategori">
            <?php
            // Kategorileri çekip listeye koyuyoruz ki seçebilelim
            $kats = mysqli_query($baglanti, "SELECT * FROM kategoriler");
            while($k = mysqli_fetch_assoc($kats)) {
                echo "<option value='".$k['id']."'>".$k['kategori_adi']."</option>";
            }
            ?>
        </select>

        <label>Ürün Adı:</label>
        <input type="text" name="ad" required>

        <label>Fiyatı (TL):</label>
        <input type="number" name="fiyat" step="0.01" required>

        <label>Açıklama:</label>
        <textarea name="aciklama" rows="5"></textarea>

        <label>Ürün Resmi:</label>
        <input type="file" name="resim">

        <button type="submit" name="urun_kaydet">KAYDET</button>
    </form>

</body>
</html>