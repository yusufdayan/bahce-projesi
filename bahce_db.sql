-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Kas 2025, 11:39:50
-- Sunucu sürümü: 8.4.7
-- PHP Sürümü: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bahce_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ust_id` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `kategori_adi`, `ust_id`) VALUES
(1, 'Mobilya', 0),
(2, 'Aydınlatma', 0),
(3, 'Alet Edevat', 0),
(4, 'Sulama Sistemleri', 0),
(5, 'Saksı ve Aksesuarlar', 0),
(6, 'Bitki ve Tohum', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori_id` int NOT NULL,
  `urun_adi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyat` decimal(10,2) NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'yok.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `urun_adi`, `fiyat`, `aciklama`, `resim`) VALUES
(1, 1, 'bahçe masası', 1500.00, 'plastik bahçe masası ', 'https-istikbal-mncdn-com-mnresize-1280-720-img-image-tr-58pard0000000-2.jpg'),
(2, 2, 'bahçe tipi aydınlatma 60cm', 789.00, 'aydınlatma', '617qR0I4gdL._AC_UF1000,1000_QL80_.jpg'),
(3, 5, 'klasik saksı', 200.00, '14 lt', 'serinova-villa-saksi-14-lt-no-8-4eaa0c.webp'),
(4, 3, 'üçlü küçük alet seti', 1200.00, 'kürek kazma tırpan', 'roney-3lu-kucuk-bahce-aletleri-seti--da144.webp'),
(5, 4, 'fıskiye', 350.00, 'bahçe sulama gereçi', '1_org_zoom.webp'),
(6, 6, 'çim tohumu', 150.00, 'ekilebilir çim tohumu', 'bahche-10.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yetki` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad_soyad`, `email`, `sifre`, `yetki`) VALUES
(1, 'Site Sahibi', 'admin@admin.com', '1234', 1),
(2, 'yusuf dayan', 'yusufdayan@gmail.com', '1234', 0),
(3, 'derviş eren oban', 'dervisoban@gmail.com', '1234', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
