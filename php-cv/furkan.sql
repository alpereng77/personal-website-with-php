-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Haz 2022, 14:13:42
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `furkan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `web_ismi` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ismi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kisacakendimiz` text COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `scholar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`web_ismi`, `baslik`, `hakkimizda`, `kullanici_ismi`, `kisacakendimiz`, `twitter`, `scholar`, `linkedin`, `google`, `instagram`) VALUES
('Furkan Ä±ÅŸÄ±k', 'HakkÄ±mda', '<div style=\"text-align: justify;\">\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum \r\n\r\nfurkan Ä±ÅŸÄ±k 2022\r\n</div>', 'furkan Ä±ÅŸÄ±k', 'BartÄ±n Ãœniversitesi\r\n<br>\r\nBPR\r\n<br>\r\nAÄŸdacÄ±<br>\r\n', 'https://twitter.com/Furkhan7723', '', '', '', 'https://www.instagram.com/furkhan.isik/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildiri`
--

CREATE TABLE `bildiri` (
  `makale_id` int(11) NOT NULL,
  `makale_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `yazar_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_abstract` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_keywords` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE `makale` (
  `makale_id` int(11) NOT NULL,
  `makale_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `yazar_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_abstract` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_keywords` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`makale_id`, `makale_adi`, `yazar_adi`, `dergi_adi`, `makale_abstract`, `makale_keywords`) VALUES
(31, 'Tema', 'Furkan IÅŸÄ±k', 'Yalova BLD', '', 'Ã‡evre');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `panel`
--

CREATE TABLE `panel` (
  `kullaniciadi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `panel`
--

INSERT INTO `panel` (`kullaniciadi`, `sifre`) VALUES
('furkan', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bildiri`
--
ALTER TABLE `bildiri`
  ADD PRIMARY KEY (`makale_id`);

--
-- Tablo için indeksler `makale`
--
ALTER TABLE `makale`
  ADD PRIMARY KEY (`makale_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bildiri`
--
ALTER TABLE `bildiri`
  MODIFY `makale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `makale`
--
ALTER TABLE `makale`
  MODIFY `makale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
