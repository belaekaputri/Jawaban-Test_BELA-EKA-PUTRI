-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 07:44 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` varchar(12) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `postId` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `postId`) VALUES
('C1', 'Sangat Menarik', 'P1'),
('C2', 'Tidak sesuai dengan namanya', 'P1'),
('C4', 'terima kasih', 'P2'),
('C3', 'sangat bermanfaat', 'P2'),
('C5', 'Akan dicoba', 'P3'),
('C6', 'Terima kasih resepnya', 'P3');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` varchar(12) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `createdBy` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `createdBy`) VALUES
('P1', 'Black Forest', 'Jangan terkecoh dengan namanya, hutan ini tidak seperti kue black forest dengan buah ceri di atasnya. Hutan hijau ini terhampar seluas 7.500 kilometer persegi terletak di barat daya Jerman tepatnya di Baden-Württemberg, Jerman. Destinasi hutan terindah di dunia ini menyimpan banyak keindahan alam, mulai dari pemandangan air terjun, perkampungan, hingga kastil. Namun, sesuai dengan nama Black Forest, hutan akan menjadi ‘hitam’ karena pepohonan yang tinggi akan menutupi cahaya matahari mulai dari jam 2 siang sampai jam 8 pagi.\r\n\r\n\r\n\r\n', 'A1'),
('P2', '6 Tips Foto Pemandangan', 'Bersihkan Lensa Kamera Ponsel,\r\nMematikan Lampu Flash,\r\nMengatur Fokus dan Gelap dan Terang Gambar, \r\nThe Rule of Thirds,\r\nMenghindari Fitur Zoom,\r\nPerhatikan Sudut Pandang.', 'A2'),
('P3', 'Cara Membuat Kue nastar', 'Siapkan wadah bersih dan mixer. Tuang mentega, margarin, dan gula halus ke dalam wadah. Kocok.  Tambahkan kuning telur secara bertahap, kocok hingga rata. Lama waktu mengocok kuning telur maksimal dua menit. Masukkan bahan kering yang sudah diayak secara bertahap. Aduk-aduk dengan spatula. Tutup dengan plastic wrap, simpan di dalam kulkas selama 10-15 menit. Ambil sebagian adonan dari kulkas, bentuk bulat, isi dengan selai nanas. Tutup dan rapikan.Siapkan loyang dan tata nastar keju di atas loyang. Panggang sekitar 25-30 menit sampai matang. Keluarkan dari oven, olesi nastar dengan campuran bahan olesan. Beri taburan keju parut. Panggang lagi selama 5 menit. Keluarkan dari oven dan angin-anginkan. Masukkan ke stoples kue kering dan masukkan naster keju yang sudah dingin ke dalamnya.', 'A3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
('A1', 'Traveloka'),
('A2', 'bobo'),
('A3', 'Kompas');
