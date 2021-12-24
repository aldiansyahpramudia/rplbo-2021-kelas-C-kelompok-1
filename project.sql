-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2021 pada 16.15
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpengajuan`
--

CREATE TABLE `laporanpengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `no_induk` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_surat` varchar(20) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jenis_pengajuan` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_diajukan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporanpengajuan`
--

INSERT INTO `laporanpengajuan` (`id_pengajuan`, `id`, `nama_pengirim`, `no_induk`, `email`, `jenis_surat`, `perihal`, `keterangan`, `jenis_pengajuan`, `status`, `tgl_diajukan`) VALUES
(11, 16, 'Aldiansyah Pramudia Hasibuan', '123443534', 'aldiansyahaldi32@gmail.com', 'Surat Pindah', 'Pindah Sekolah', 'pindah sekolah', 'Surat Keluar', 'Selesai Diproses', 1640257351),
(12, 17, 'Raka Falih', '34432342', 'rakafalih@gmail.com', 'Cuti', 'Cuti Bulanan', 'Cuti cuti cuti', 'Surat Keluar', 'Diterima', 1640257556),
(13, 17, 'Raka Falih', '23231213', 'rakafalih@gmail.com', 'Legalisir', 'legalisir', 'legalisir', 'Legalisir', 'Ditolak', 1640257733),
(14, 18, 'Vedoza Lisa', '123433434', 'vedoza@gmail.com', 'Permohonan', 'Permohonan', 'Permohonan', 'Surat Keluar', 'Diterima', 1640260665),
(16, 14, 'tes', '123', 'tes@g.b', 'tes', 'tes', 'tes', 'Surat Keluar', 'Sedang Diproses', 1640261058),
(17, 14, 'tes1', 'tes1', 'tes@g.b', 'tes1', 'tes1', 'tes1', 'Surat Keluar', 'Sedang Diproses', 1640261077),
(20, 16, 'tes4', '45543', 'aldiansyahaldi32@gmail.com', 'tes4', 'tes4', 'tes4', 'Surat Keluar', 'Selesai Diproses', 1640261196),
(22, 17, 'tes6', '2342', 'rakafalih@gmail.com', 'tes6', 'tes6', 'tes6', 'Legalisir', 'Selesai Diproses', 1640261292);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `no_suratkeluar` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`no_suratkeluar`, `pengirim`, `jenis_surat`, `perihal`, `tgl_surat`, `tgl_diterima`, `file_surat`) VALUES
('456', 'Aldiansyah Pramudia Hasibuan', 'Cuti', 'Cuti Bulanan', '2021-12-24', '2021-12-25', 'Kelompok_8_-_Fiqih.docx'),
('556', 'Vedoza Lisa', 'Permohonan', 'Permohonan', '2021-12-24', '2021-12-24', 'Kelompok_10_-_Fiqih.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `no_suratmasuk` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`no_suratmasuk`, `pengirim`, `jenis_surat`, `perihal`, `tgl_surat`, `tgl_diterima`, `file_surat`) VALUES
('123', 'PT. INDAH PURA', 'Undangan', 'Undangan beasiswa', '2021-12-23', '2021-12-24', 'Modul_7_Session_dan_Page_Redirection.docx'),
('234', 'PT. JAYA PURA', 'Edaran', 'Edaran Vaksin', '2021-12-23', '2021-12-24', 'Modul_6_CRUD_2_(Create_and_Update)_dan_Relasi_Tabel_Database.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role_id`) VALUES
(11, 'Admin', 'admin@gmail.com', '$2y$10$CeELCQaZzXJTOi5nWG94r.HcJtP6R5VQvvIRZ3S2vSQ5iLa0R78Zy', 'Admin'),
(14, 'Member', 'member@gmail.com', '$2y$10$SdXJqag7sgPJyVzZnVDELOBqrGPonNrcVVzUFZCmQTh.Y6EWSsQ1.', 'Member'),
(15, 'Resepsionis', 'resepsionis@gmail.com', '$2y$10$bt.Y5Iy7Rw8ID5TgUwdwh.23MB4pX1ZI4h44xPa2eXHVPInMeiqli', 'Resepsionis'),
(16, 'Aldiansyah Pramudia Hasibuan', 'aldiansyahaldi32@gmail.com', '$2y$10$NiBkuECxgnRNnQwEk4xCDe6c/Lwd8BPZ9IDsj72ib0oMFQGav6qve', 'Admin'),
(17, 'Raka Falih', 'rakafalih@gmail.com', '$2y$10$U9tzG/CliYrM5cwaPCttG.mEpjH7Y9a91goTziuoHc9SecMvDLlzi', 'Member'),
(18, 'Vedoza Lisa', 'vedoza@gmail.com', '$2y$10$5LjKs4Q7EARAX.aY/.ya1OVAPZdEie..L74OmBwHPTNWlgckiVeee', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporanpengajuan`
--
ALTER TABLE `laporanpengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`no_suratkeluar`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`no_suratmasuk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporanpengajuan`
--
ALTER TABLE `laporanpengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
