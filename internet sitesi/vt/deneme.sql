-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 May 2022, 11:40:07
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adı` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `urun_resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adı`, `urun_fiyat`, `urun_resim`) VALUES
(1, 'Html5 Full Ders Paketi', '120', 'html.png'),
(2, 'JavaScript Ders Paketi', '170', 'js.png'),
(3, 'Php Full Ders Paketi', '220', 'php.png'),
(4, 'C++ Temel Ders Eğitimi', '120', 'c++.png'),
(5, 'C# Temel Ders Paketi', '180', 'Csharp.png'),
(6, 'Temelden Python Eğitimi', '120', 'python.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `id` int(11) NOT NULL,
  `kadi` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tcno` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `kadi`, `tel`, `mail`, `sifre`, `tcno`) VALUES
(47, 'canercan625', '0505 049 75', 'ckalim8899@gmai', '123456', '16142883036'),
(48, 'canercan962', '0505 049 75', 'sdsds@gmail.com', '123456', '16142883036'),
(49, 'canercan962', 'asdas', 'asdad', '123456', '16142883031');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD UNIQUE KEY `urun_id` (`urun_id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
