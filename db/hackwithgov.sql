-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Nov 2015 pada 16.50
-- Versi Server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackwithgov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `id_belanja`
--

CREATE TABLE IF NOT EXISTS `id_belanja` (
  `thisid_id_belanja` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_belanja` varchar(69) NOT NULL,
  PRIMARY KEY (`thisid_id_belanja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `id_belanja`
--

INSERT INTO `id_belanja` (`thisid_id_belanja`, `nama_jenis_belanja`) VALUES
(1, 'Belanja harian'),
(2, 'belanja_2'),
(3, 'Investasi'),
(4, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota_keluarga`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota_keluarga` (
  `thisid_anggota_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `nama_anggota_keluarga` varchar(60) NOT NULL,
  `usia` int(11) NOT NULL,
  PRIMARY KEY (`thisid_anggota_keluarga`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_belanja`
--

CREATE TABLE IF NOT EXISTS `tbl_belanja` (
  `thisid_belanja` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `id_belanja` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jumlah` double NOT NULL,
  PRIMARY KEY (`thisid_belanja`),
  KEY `username` (`username`,`id_belanja`),
  KEY `id_belanja` (`id_belanja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tbl_belanja`
--

INSERT INTO `tbl_belanja` (`thisid_belanja`, `username`, `id_belanja`, `tanggal`, `jumlah`) VALUES
(1, 'istribijak', 1, '2015-11-13', 100000),
(2, 'istribijak', 2, '2015-11-16', 9000),
(3, 'istribijak', 1, '2015-10-02', 60000),
(4, 'istribijak', 2, '2015-10-08', 30000),
(5, 'istribijak', 1, '24 Desember 2015', 3000000),
(6, 'istribijak', 2, '5000000', 13),
(7, 'istribijak', 2, '3000000', 17),
(8, 'istribijak', 2, '600000', 13),
(11, 'istribijak', 3, '29 November 2015', 800000),
(12, 'istribijak', 3, '29 November 2015', 1000000),
(13, 'istribijak', 4, '25 Desember 2015', 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cicilan`
--

CREATE TABLE IF NOT EXISTS `tbl_cicilan` (
  `thisid_cicilan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `id_cicilan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` double NOT NULL,
  PRIMARY KEY (`thisid_cicilan`),
  KEY `username` (`username`,`id_cicilan`),
  KEY `id_cicilan` (`id_cicilan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_cicilan`
--

INSERT INTO `tbl_cicilan` (`thisid_cicilan`, `username`, `id_cicilan`, `tanggal`, `jumlah`) VALUES
(1, 'istribijak', 1, '2015-11-10', 20000),
(2, 'istribijak', 2, '2015-11-12', 230000),
(3, 'istribijak', 1, '2015-10-20', 40000),
(4, 'istribijak', 2, '2015-10-25', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_id_income`
--

CREATE TABLE IF NOT EXISTS `tbl_id_income` (
  `thisid_id_income` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_income` varchar(60) NOT NULL,
  PRIMARY KEY (`thisid_id_income`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_id_income`
--

INSERT INTO `tbl_id_income` (`thisid_id_income`, `nama_jenis_income`) VALUES
(1, 'income_1'),
(2, 'income_2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_income`
--

CREATE TABLE IF NOT EXISTS `tbl_income` (
  `thisid_income` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `id_income` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `bulan` date NOT NULL,
  PRIMARY KEY (`thisid_income`),
  KEY `username` (`username`,`id_income`),
  KEY `id_income` (`id_income`),
  KEY `id_income_2` (`id_income`),
  KEY `id_income_3` (`id_income`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_income`
--

INSERT INTO `tbl_income` (`thisid_income`, `username`, `id_income`, `jumlah`, `bulan`) VALUES
(1, 'istribijak', 1, 2000000, '2015-11-12'),
(2, 'istribijak', 1, 1000000, '2015-11-20'),
(3, 'istribijak', 1, 2300000, '2015-10-12'),
(4, 'istribijak', 2, 500000, '2015-10-21'),
(5, 'istribijak', 1, 3000000, '0000-00-00'),
(6, 'istribijak', 1, 4000000, '0000-00-00'),
(7, 'istribijak', 1, 3000000, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usia` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`username`, `password`, `nama_ibu`, `email`, `usia`) VALUES
('istribijak', 'c71262264694304043602b62b0211c7b', 'istribijak', 'istribijak@istribijak.com', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `thisid_id_cicilan`
--

CREATE TABLE IF NOT EXISTS `thisid_id_cicilan` (
  `thisid_id_cicilan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_cicilan` varchar(60) NOT NULL,
  PRIMARY KEY (`thisid_id_cicilan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `thisid_id_cicilan`
--

INSERT INTO `thisid_id_cicilan` (`thisid_id_cicilan`, `nama_jenis_cicilan`) VALUES
(1, 'cicilan_1'),
(2, 'cicilan_2');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_anggota_keluarga`
--
ALTER TABLE `tbl_anggota_keluarga`
  ADD CONSTRAINT `tbl_anggota_keluarga_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  ADD CONSTRAINT `tbl_belanja_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_belanja_ibfk_2` FOREIGN KEY (`id_belanja`) REFERENCES `id_belanja` (`thisid_id_belanja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_cicilan`
--
ALTER TABLE `tbl_cicilan`
  ADD CONSTRAINT `tbl_cicilan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cicilan_ibfk_2` FOREIGN KEY (`id_cicilan`) REFERENCES `thisid_id_cicilan` (`thisid_id_cicilan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_income`
--
ALTER TABLE `tbl_income`
  ADD CONSTRAINT `tbl_income_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_income_ibfk_2` FOREIGN KEY (`id_income`) REFERENCES `tbl_id_income` (`thisid_id_income`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
