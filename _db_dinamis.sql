-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2015 at 09:17 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dinamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

CREATE TABLE IF NOT EXISTS `t_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `tgl` text NOT NULL,
  `judul` text NOT NULL,
  `des` longtext NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `t_info`
--

INSERT INTO `t_info` (`id`, `user`, `tgl`, `judul`, `des`, `img`) VALUES
(55, 'uzumaki', '15-09-18', 'Patria Palace Hotel Blitar', 'Patria Palace Hotel Blitar\r\nJalan Mastrip  No. 56, 66112  Blitar, Indonesia\r\n\r\nTerletak di daerah Blitar yang bersejarah, Patria Palace Hotel berjarak 3 menit jalan kaki dari stasiun pusat kota. Hotel ini menyediakan layanan meja depan 24 jam dan meenawarkan sebuah restoran. Semua kamar ber-AC-nya memiliki kamar mandi pribadi. Wi-Fi gratis tersedia di seluruh area bangunan.', 'img_info/Patria Palace Hotel Blitar 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`) VALUES
(1, 'uzumaki', 'uzumaki'),
(2, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
