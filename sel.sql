-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 01:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sel`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `subject`, `message`) VALUES
('', '', '', ''),
('Dinda', 'aas@gmail', 'Assalamualaikum', '3esw4dd'),
('ammar', 'ammar@gmail', 'toha', ''),
('a', 'ammar@gmails', 'sssssssssssssssssssssssssss', ''),
('dindaarahayuu', 'dinda17ti@mahasiswa.pcr.ac.id', 'dindaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa'),
('dksl', 'dindarahayu16@YAHOO.COM', 'dw', 'ss'),
('impianku', 'impianku@gmail.com', 'impian terindah', 'kamu'),
('appap', 'papapa@gmail', 'papap', ''),
('mama', 'syantik@gmail.com', 'mamam', 'dindaaar'),
('Muhammad Toha Al Aziz', 'toha28@gmail.com', 'Assalamualaikum', 'ini pesan dari toha untuk kakak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
