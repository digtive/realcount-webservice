-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2019 pada 07.15
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digtive_rcapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rcapp_pengguna`
--

CREATE TABLE `rcapp_pengguna` (
  `pengguna_id` varchar(255) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rcapp_petugas`
--

CREATE TABLE `rcapp_petugas` (
  `petugas_id` varchar(255) NOT NULL,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_telepon` varchar(20) NOT NULL,
  `petugas_alamat` text NOT NULL,
  `petugas_jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `petugas_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rcapp_tps`
--

CREATE TABLE `rcapp_tps` (
  `tps_id` varchar(255) NOT NULL,
  `tps_total_dpt` int(11) NOT NULL,
  `tps_suara_sah` int(11) NOT NULL,
  `tps_suara_tidaksah` int(11) NOT NULL,
  `tps_suara_calon` text NOT NULL,
  `tps_pengguna_hakpilih` int(11) NOT NULL,
  `tps_status_validasi` enum('111','222','999','') NOT NULL,
  `tps_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `wilayah_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rcapp_wilayah`
--

CREATE TABLE `rcapp_wilayah` (
  `wilayah_id` varchar(255) NOT NULL,
  `wilayah_kode` varchar(255) NOT NULL,
  `wilayah_nama` varchar(255) NOT NULL,
  `kecamatan_id` varchar(255) NOT NULL,
  `kabupaten_id` varchar(255) NOT NULL,
  `provinsi_id` varchar(255) NOT NULL,
  `wilayah_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rcapp_pengguna`
--
ALTER TABLE `rcapp_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `rcapp_petugas`
--
ALTER TABLE `rcapp_petugas`
  ADD PRIMARY KEY (`petugas_id`),
  ADD KEY `pengguna_realtion` (`pengguna_id`);

--
-- Indeks untuk tabel `rcapp_tps`
--
ALTER TABLE `rcapp_tps`
  ADD PRIMARY KEY (`tps_id`),
  ADD KEY `relation to wilayah` (`wilayah_id`);

--
-- Indeks untuk tabel `rcapp_wilayah`
--
ALTER TABLE `rcapp_wilayah`
  ADD PRIMARY KEY (`wilayah_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rcapp_petugas`
--
ALTER TABLE `rcapp_petugas`
  ADD CONSTRAINT `pengguna_realtion` FOREIGN KEY (`pengguna_id`) REFERENCES `rcapp_pengguna` (`pengguna_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rcapp_tps`
--
ALTER TABLE `rcapp_tps`
  ADD CONSTRAINT `relation to wilayah` FOREIGN KEY (`wilayah_id`) REFERENCES `rcapp_wilayah` (`wilayah_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
