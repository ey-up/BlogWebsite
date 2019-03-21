-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Mar 2019, 19:15:39
-- Sunucu sürümü: 10.3.13-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `id5783308_myblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kontrol`
--

CREATE TABLE `kontrol` (
  `kontrol_id` int(11) NOT NULL,
  `kontrol_hit` int(11) NOT NULL DEFAULT 0,
  `kontrol_adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kontrol`
--

INSERT INTO `kontrol` (`kontrol_id`, `kontrol_hit`, `kontrol_adi`) VALUES
(1, 6, 'Anasayfa'),
(2, 0, 'Hakkimda'),
(3, 2, 'Blog'),
(4, 0, 'bildir'),
(5, 0, 'iletisim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE `konular` (
  `konu_id` int(11) NOT NULL,
  `konu_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `konu_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `konu_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `konu_kategori` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `konu_hit` int(11) NOT NULL DEFAULT 0,
  `konu_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `konu_yedek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_baslik`, `konu_aciklama`, `konu_tarih`, `konu_kategori`, `konu_hit`, `konu_resim`, `konu_yedek`) VALUES
(2, 'Çılgın westbrook taraftarı costurdu', 'Lorem Ipsum Nedir?\r\nLorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.\r\n<br> <br>\r\nYinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.', '2018-06-23 19:55:08', 'Basketbol-Nba', 0, 'photo//athletes-ball-basketball-1080882.jpg', 0),
(4, 'Curry range nasıl atılır?', '', '2018-06-23 19:55:11', 'Basketbol-taktiklerim', 0, 'photo//athletes-ball-basketball-1080882.jpg', 0),
(5, 'Lorem ipsum nasıl yazılır?', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', '2018-06-23 20:33:12', 'Lorem ipsum\r\n', 0, 'photo//athletes-ball-basketball-1080882.jpg', 0),
(10, 'Nba\'de neler oluyor?', ' taraftar artıkaftar artık <b> Lebrooon </b>', '2018-06-25 13:34:24', 'Basketbol', 0, 'photo//athletes-ball-basketball-1080882.jpg', 0),
(11, 'Çılgın westbrook taraftarı costurdu', 'Lorem Ipsum Nedir?\r\nLorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.\r\n<br> <br>\r\n\r\nYinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.', '2018-06-23 19:55:08', 'Basketbol-Nba', 0, 'photo//athletes-ball-basketball-1080882.jpg', 0),
(12, 'Manganın şarkıları', '', '2018-06-29 13:39:31', 'Müzüüük', 0, 'photo//basketball-black-and-white-court-350771.jpg', 0),
(13, 'Deneme', '2019\'da buralar yeşillenecek', '2018-06-29 13:41:43', 'Üniversite', 0, 'photo//basketball-basketball-court-beach-305244.jpg', 0),
(14, 'Zaman yönetimi\r\n', '2020\'de buralar yeşillenecek', '2018-06-29 13:42:43', 'Hayat', 0, 'photo//ball-basketball-beach-305243.jpg', 0),
(15, 'ss', 'Merlin\'in Sakalı!!', '2018-06-29 13:47:23', 'series', 0, 'photo//business-code-coding-943096.jpg', 0),
(16, 'Yazılım-bilgisayar mühendisliği', '', '2018-06-29 14:03:01', 'Boş iş', 0, 'photo//analogue-business-close-up-117729.jpg', 0),
(17, 'Lonzo ball gibi şut at !', 'Lorem ipsum. ', '2018-06-29 14:04:38', 'Futbol ', 0, 'photo//basketball-game-ocean-69773.jpg', 0),
(18, 'FF', '', '2018-06-29 14:08:05', 's', 0, 'photo//pexels-photo-248515.png', 0),
(999, 'Reis Lebron', '<b> Selam bu bir deneme </b>\r\n\r\n', '2018-06-23 19:52:34', 'Basketbol', 0, 'photo//athletes-ball-basketball-1080882.jpg', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kontrol`
--
ALTER TABLE `kontrol`
  ADD PRIMARY KEY (`kontrol_id`);

--
-- Tablo için indeksler `konular`
--
ALTER TABLE `konular`
  ADD PRIMARY KEY (`konu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kontrol`
--
ALTER TABLE `kontrol`
  MODIFY `kontrol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `konular`
--
ALTER TABLE `konular`
  MODIFY `konu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
