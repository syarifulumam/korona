-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 04:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korona`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `tanggal`, `url`, `konten`, `thumbnail`) VALUES
(1, 'Siapa saja yang beresiko terinfeksi Covid-19?', 'Senin, 11 April 2020', 'siapa-saja-yang-beresiko-terinfeksi-covid', '<p class=\"text-dark\">Orang yang tinggal atau bepergian di daerah di mana virus COVID-19\r\n						bersirkulasi sangat mungkin\r\n						berisiko terinfeksi. Mereka yang terinfeksi adalah orang-orang yang dalam 14 hari sebelum muncul\r\n						gejala melakukan perjalanan dari negara terjangkit, atau yang kontak erat, seperti anggota\r\n						keluarga, rekan kerja atau tenaga medis yang merawat pasien sebelum mereka tahu pasien tersebut\r\n						terinfeksi COVID-19.\r\n\r\n						Petugas kesehatan yang merawat pasien yang terinfeksi COVID-19 berisiko lebih tinggi dan harus\r\n						konsisten melindungi diri mereka sendiri dengan prosedur pencegahan dan pengendalian infeksi\r\n						yang tepat.</p>\r\n					<p class=\"text-dark\">Lorem ipsum dolor sit amet consectetur adipisicing\r\n						elit. Esse distinctio\r\n						odio consequatur\r\n						perspiciatis corrupti quod ex, voluptatum sed eius illo minus temporibus incidunt accusamus!\r\n						Nihil quisquam labore quae aspernatur recusandae.</p>', 'thubnail1.jpg'),
(2, 'Apakah sudah ada vaksin atau obat untuk COVID-19?', 'Selasa, 12 April 2020', 'apakah-sudah-ada-vaksin-covid', '<p class=\"text-dark\">Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji\r\n						coba.</p>\r\n					<p class=\"text-dark\">Lorem ipsum dolor sit amet consectetur adipisicing\r\n						elit. Esse distinctio\r\n						odio consequatur\r\n						perspiciatis corrupti quod ex, voluptatum sed eius illo minus temporibus incidunt accusamus!\r\n						Nihil quisquam labore quae aspernatur recusandae.</p>', 'thubnail2.jpg'),
(3, 'Bagaimana mengantisipasi penularan COVID-19?', 'Kamis, 15 April 2020', 'bagaimana-mengantisipasi-penularan-covid', '<p class=\"text-dark\">Hingga saat ini, belum ada vaksin untuk mencegah penularan COVID-19 tetapi Anda\r\n						dapat melakukan\r\n						tindakan pencegahan agar tidak tertular. Diantaranya dengan :\r\n\r\n						Menjaga kesehatan dan kebugaran agar sistem imunitas/kekebalan tubuh meningkat\r\n					</p>\r\n					<p class=\"text-dark\">\r\n						Mencuci tangan menggunakan sabun dan air mengalir atau menggunakan alkohol 70-80% handrub sesuai\r\n						langkah-langkah mencuci tangan yang benar. Mencuci tangan sampai bersih merupakan salah satu\r\n						tindakan yang mudah dan murah. Dan, sebagian besar penyebaran penyakit akibat virus dan bakteri\r\n						bersumber dari tangan. Karena itu, menjaga kebersihan tangan adalah hal yang sangat penting.\r\n					</p>\r\n					<p class=\"text-dark\">\r\n						Ketika batuk dan bersin, upayakan menjaga agar lingkungan Anda tidak tertular. Tutup hidung dan\r\n						mulut Anda dengan tisu atau dengan lipatan siku tangan bagian dalam (bukan dengan telapak\r\n						tangan) dan gunakan masker. </p>\r\n					<p class=\"text-dark\">\r\n						Hindari kontak dengan orang lain atau bepergian ke tempat umum. </p>\r\n					<p class=\"text-dark\">\r\n						Hindari menyentuh mata, hidung dan mulut (segitiga wajah). Tangan menyentuh banyak hal yang\r\n						dapat terkontaminasi virus. Jika kita menyentuh mata, hidung dan mulut dengan tangan yang\r\n						terkontaminasi, maka virus dapat dengan mudah masuk ke tubuh kita. </p>\r\n					<p class=\"text-dark\">\r\n						Gunakan masker penutup mulut dan hidung ketika Anda berada di luar rumah.\r\n						Buang tisu dan masker yang sudah digunakan ke tempat sampah dengan benar, lalu cucilah tangan\r\n						Anda.</p>\r\n					<p class=\"text-dark\">Lorem ipsum dolor sit amet consectetur adipisicing\r\n						elit. Esse distinctio\r\n						odio consequatur\r\n						perspiciatis corrupti quod ex, voluptatum sed eius illo minus temporibus incidunt accusamus!\r\n						Nihil quisquam labore quae aspernatur recusandae.</p>', 'thubnail3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `website`, `foto`) VALUES
(1, 'DKI Jakarta', 'https://corona.jakarta.go.id/id', ''),
(2, 'Jawa Barat', 'https://pikobar.jabarprov.go.id/', ''),
(3, 'Jawa Timur', 'https://infocovid19.jatimprov.go.id/', ''),
(4, 'Banten', 'https://infocorona.bantenprov.go.id/', 'banten.png'),
(5, 'Sulawesi Selatan', 'https://covid19.sulselprov.go.id/', ''),
(6, 'Jawa Tengah', 'https://corona.jatengprov.go.id/', ''),
(7, 'Bali', 'https://infocorona.baliprov.go.id/', 'bali2.png'),
(8, 'Sumatera Utara', 'http://covid19.sumutprov.go.id/', ''),
(9, 'Papua', 'https://www.papua.go.id/', ''),
(10, 'Kalimantan Timur', 'https://covid19.kaltimprov.go.id/', ''),
(11, 'Sumatera Barat', 'https://corona.sumbarprov.go.id/', '');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `id_rujukan` int(11) NOT NULL,
  `id_provinsi` int(100) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id_rujukan`, `id_provinsi`, `nama_rs`, `alamat`, `nomor`) VALUES
(1, 1, 'RSPI Sulianti Saroso', 'Jl.Baru Sunter Permai Raya, Jakarta Utara', '(021) 650 6559, 0821 1266 2622'),
(2, 1, 'RSUP Persahabatan', 'Jl.Persahabatan Raya No. 1, Jakarta Timur', ' (021) 489 1708, (021) 4786 9945'),
(3, 1, 'RSUP Fatmawati', 'Jl. RS Fatmawati Cilandak, Jakarta Selatan', '(021) 750 1524'),
(4, 4, 'RSUD Kab. Tangerang', 'Jl. Jend. Ahmad Yani No.9, Sukaasih, Kec. Tangerang, Kota Tangerang, Banten 15111', '(021) 5523507'),
(5, 4, 'RSUD Kota Tangerang', 'Jl. Jend. Ahmad Yani, RT.005/RW.003, Klp. Indah, Kec. Tangerang, Kota Tangerang, Banten 15117', '(021) 29720200'),
(6, 7, 'RSUP Sanglah', '(0361) 227911 – 15', '(0361) 227911 – 15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`id_rujukan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `id_rujukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
