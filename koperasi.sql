-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Okt 2016 pada 04.13
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `petugas` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `no_ktp`, `no_kk`, `nama_ibu`, `alamat`, `rt`, `rw`, `kecamatan`, `kelurahan`, `kota`, `tanggal_input`, `petugas`, `status`) VALUES
(12, 'batyu', 'cimahi', '2013-11-30', 'Pria', '1241251825127418', '1294128741295719', 'nuri', 'gelo', 124, 122, 'banget', 'banget', 'bandung', '2015-10-30', 'geger', 'Lancar'),
(13, 'sempurna', 'cimahi', '2013-09-29', 'Pria', '1254378989786754', '1324358649576765', 'gasepti', 'koit', 123, 412, 'gilu', 'fredom', 'bandung', '2015-10-30', 'huty', 'Macet'),
(9, 'cau', 'hutan', '2015-10-13', 'Pria', '5437489657467456', '5374377896579547', 'cau', 'osafiokasnik', 214, 532, 'NJADNAIUVYUF', 'TYCTYVY', 'bandung', '2015-10-29', 'arif', 'Lancar'),
(10, 'nico', 'jakarta', '2015-10-28', 'Pria', '8765434567891242', '1240921741267461', 'supri', 'kresna dalam', 214, 123, 'bima', 'pasri', 'bandung', '2015-10-30', 'arif', 'Lancar'),
(11, 'alex', 'bandung', '2015-10-11', 'Pria', '8675184129471298', '1892461204192846', 'yuni', 'gerong', 24, 421, 'gerong', 'juni', 'bandung', '2015-10-30', 'geger', 'Lancar'),
(8, 'thomas', 'bandung', '2014-12-31', 'Pria', '6576789327642537', '2938675964788235', 'hutir', 'kiaracondong ', 21, 43, 'renginang', 'baidu', 'bandung', '2016-04-19', 'heri', 'Lancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `block` enum('N','Y') NOT NULL,
  `id_session` varchar(99) NOT NULL,
  `nama_unit` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`, `block`, `id_session`, `nama_unit`) VALUES
(8, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'N', '3ov8a3p0hvlr9vb17d7qmr6bh3', 'pusat'),
(9, 'rita', 'rita', '2794d223f90059c9f705c73a99384085', 'cibaduyut', 'N', 'fr4el6n4bj7a9ih5k8dk384rc3', 'cibaduyut'),
(11, 'sudin', 'sudin', '202cb962ac59075b964b07152d234b70', 'cimahi', 'N', 'qo9p56d446uk60adkchrrtudj4', 'cimahi'),
(13, 'haha', 'haha', '202cb962ac59075b964b07152d234b70', 'padalarang', 'N', 'o7r75kl2g1ujirh6jopob95kh2', 'padalarang'),
(14, 'thomas', 'thomas', 'ef6e65efc188e7dffd7335b646a85a21', 'cibaduyut', 'N', '9ebbf66r4cme18vok2249sbop5', 'cibaduyut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resort`
--

CREATE TABLE IF NOT EXISTS `resort` (
  `petugas` varchar(20) NOT NULL,
  `id_unit` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resort`
--

INSERT INTO `resort` (`petugas`, `id_unit`) VALUES
('arif', 'cbd'),
('geger', 'cmh'),
('heri', 'cbd'),
('huty', 'cmh'),
('janjun', 'pdl'),
('junjun', 'pdl'),
('tuyul', 'cbd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id_unit` char(4) NOT NULL,
  `nama_unit` varchar(20) NOT NULL,
  `nama_pimpinan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`, `nama_pimpinan`) VALUES
('cbd', 'cibaduyut', 'spongebob'),
('cmh', 'cimahi', 'sutanto'),
('pdl', 'padalarang', 'jony'),
('bdg', 'bandung', 'thomas'),
('jkt', 'jakartaa', 'udin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resort`
--
ALTER TABLE `resort`
 ADD PRIMARY KEY (`petugas`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
 ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
