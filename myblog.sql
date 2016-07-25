-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 07:58 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_username` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_username`, `username`, `email`, `password`) VALUES
(1, 'tomibudis', 'tomibudis@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `db_post`
--

CREATE TABLE IF NOT EXISTS `db_post` (
  `id_post` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `comment` text NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_post`
--

INSERT INTO `db_post` (`id_post`, `judul`, `tag`, `descr`, `comment`, `tanggal`, `gambar`) VALUES
(91, 'joss', 'ini jadi', '<font face="Arial Black">ksodfasdfka</font>', '', '11-Jun-2016', 'assets/images/tumblr_static_890ec9nfsbcw80ks8w0go0oks.jpg'),
(92, 'asdfasdf', 'asdfasdf', 'asdfasdf', '', '11-Jun-2016', 'assets/images/INDUSTY.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `komentar`, `judul`) VALUES
(0, 'budi', 'ini redunansi data', 'joss\r\n'),
(1, 'asdf', 'asdf', '1'),
(64, 'adasdfafd', 'adf', '64'),
(68, 'Tomi budi', 'makin jos aja', '68'),
(69, 'jono', 'bla bla bla', 'succes artikel'),
(72, 'susilo', 'ini harus keluar', 'joss'),
(73, 'asdf', 'ini makin joss', 'ini post yang harus keluar'),
(75, 'sdfasd', 'sd', 'joss'),
(76, 'tomibdu', 'ini baru masuk database', 'asdfasdf'),
(77, 'jono', 'ini baru masuk database', 'asdfasdf'),
(78, 'ea', 'sdfsd', 'asdfasdf'),
(79, 'fasd', 'asdfas', 'asdfasdf'),
(80, 'asdfaasdf', 'asdfsdf', 'asdfasdf'),
(81, 'asdfas', 'fsdf', 'asdfasdf'),
(83, 'asdf', 'sdfad', 'joss'),
(84, 'tomi', 'wuih keren', 'joss'),
(85, 'panji', 'Where you can specify which id should be viewed or select in specific table. You can also select which join portion either left, right, outer, inner, left outer, and right outer on the third parameter of join method.', 'joss'),
(86, 'dawam', 'sudah berhasil tara', 'Malioboro'),
(87, 'susilo ', 'bagus kak gmbarnya :)', 'Malioboro');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=581 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `isi_pesan`, `tanggal`) VALUES
(577, 'fdfs', 'sdfsd', 'asdfasdf', '11-Jun-2016'),
(579, 'asdfaasdf', 'tommysanjaya852@yahoo.co.id', 'kkkm', '11-Jun-2016'),
(580, 'asdf', 'tomibudis', '', '11-Jun-2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_username`);

--
-- Indexes for table `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_username` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `db_post`
--
ALTER TABLE `db_post`
  MODIFY `id_post` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=581;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
