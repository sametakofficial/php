-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2021, 16:22:07
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hatabot`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hata`
--

CREATE TABLE `hata` (
  `hata_id` int(11) NOT NULL,
  `hata_turu` text NOT NULL,
  `hata_baslik` text NOT NULL,
  `hata_cikti` text NOT NULL,
  `hata_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hata_aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hata`
--

INSERT INTO `hata` (`hata_id`, `hata_turu`, `hata_baslik`, `hata_cikti`, `hata_tarih`, `hata_aciklama`) VALUES
(1, 'python', 'İndex Error', 'IndexError: list index out of range', '2021-12-25 23:28:40', 'index error olma sebepleri:\r\nnoktalı virgülü unutmanız\r\ntırnağı kapatmamanız\r\nparantez hatası'),
(2, 'Python', 'SSDAD', 'SSDAD', '2021-12-26 13:42:30', 'ASDASDA'),
(3, 'Python', 'syntax error', 'syntax error', '2021-12-26 14:20:26', 'syntax error yazım hatasıdır yazımınıza dilkkat ediniz');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hata`
--
ALTER TABLE `hata`
  ADD PRIMARY KEY (`hata_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hata`
--
ALTER TABLE `hata`
  MODIFY `hata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
