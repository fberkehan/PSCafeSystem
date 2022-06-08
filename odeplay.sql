-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Haz 2022, 23:16:24
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odeplay`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `koltuklar`
--

DROP TABLE IF EXISTS `koltuklar`;
CREATE TABLE IF NOT EXISTS `koltuklar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `koltukTipi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `koltukSira` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `koltukFiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `koltuklar`
--

INSERT INTO `koltuklar` (`id`, `koltukTipi`, `koltukSira`, `koltukFiyat`, `durum`) VALUES
(1, 'VIP', 'A1', '50', ''),
(2, 'VIP', 'A2', '50', ''),
(3, 'VIP', 'A3', '50', ''),
(4, 'NORMAL', 'A4', '25', ''),
(5, 'NORMAL', 'A5', '25', ''),
(6, 'NORMAL', 'A6', '25', ''),
(7, 'NORMAL', 'A7', '25', ''),
(8, 'NORMAL', 'B1', '25', ''),
(9, 'NORMAL', 'B2', '25', ''),
(10, 'NORMAL', 'B3', '25', ''),
(11, 'NORMAL', 'B4', '25', ''),
(12, 'NORMAL', 'B5', '25', ''),
(13, 'NORMAL', 'B6', '25', ''),
(14, 'NORMAL', 'B7', '25', ''),
(15, 'NORMAL', 'C1', '25', ''),
(16, 'NORMAL', 'C2', '25', ''),
(17, 'NORMAL', 'C3', '25', ''),
(18, 'NORMAL', 'C4', '25', ''),
(19, 'NORMAL', 'C5', '25', ''),
(20, 'NORMAL', 'C6', '25', ''),
(21, 'NORMAL', 'C7', '25', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kAdi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tcKimlik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bakiye` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `uyeTipi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `isim`, `soyisim`, `email`, `telefon`, `kAdi`, `sifre`, `tcKimlik`, `bakiye`, `uyeTipi`, `durum`) VALUES
(32, 'admin', 'admin', 'admin@admin.com', '000000000000000000', 'admin', 'admin', '0000000000000000000', '1000', 'Normal', ' ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
