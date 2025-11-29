<?php
// Veritabanı bağlantı ayarları
$host = "localhost";
$kullanici = "root";
$sifre = ""; // XAMPP kullanıyorsan genelde boştur
$veritabani = "bahce_db";

// Bağlantıyı oluşturuyoruz
$baglanti = mysqli_connect($host, $kullanici, $sifre, $veritabani);

// Bağlantı hatası varsa ekrana basıp duralım
if (!$baglanti) {
    die("Veritabanı bağlantısı başarısız dostum: " . mysqli_connect_error());
}

// Türkçe karakter sorunu olmasın diye
mysqli_set_charset($baglanti, "utf8");
?>