-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2021 pada 01.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `construction`
--

CREATE TABLE `construction` (
  `id_construction` varchar(100) NOT NULL,
  `nama_construction` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `construction`
--

INSERT INTO `construction` (`id_construction`, `nama_construction`, `harga`) VALUES
('CNS-1', 'Construction 1', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edgecolour`
--

CREATE TABLE `edgecolour` (
  `id_edgecolour` varchar(100) NOT NULL,
  `nama_edgecolour` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `edgecolour`
--

INSERT INTO `edgecolour` (`id_edgecolour`, `nama_edgecolour`, `harga`) VALUES
('EC-1', 'Edge Colour 1', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `etc`
--

CREATE TABLE `etc` (
  `id_etc` varchar(100) NOT NULL,
  `nama_etc` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `etc`
--

INSERT INTO `etc` (`id_etc`, `nama_etc`, `harga`) VALUES
('ET-1', 'Etc 1', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `heels`
--

CREATE TABLE `heels` (
  `id_heels` varchar(100) NOT NULL,
  `nama_heels` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `heels`
--

INSERT INTO `heels` (`id_heels`, `nama_heels`, `harga`) VALUES
('hls1', 'Heels1', '80000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leather`
--

CREATE TABLE `leather` (
  `id_leather` varchar(100) NOT NULL,
  `nama_leather` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `leather`
--

INSERT INTO `leather` (`id_leather`, `nama_leather`, `harga`) VALUES
('lthr2', 'leather2', '60000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lining`
--

CREATE TABLE `lining` (
  `id_lining` varchar(100) NOT NULL,
  `nama_lining` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lining`
--

INSERT INTO `lining` (`id_lining`, `nama_lining`, `harga`) VALUES
('FLNG', 'Full Lining', '20000'),
('HLNG', 'Half Lining', '15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `id_model` varchar(100) NOT NULL,
  `nama_model` varchar(100) NOT NULL,
  `size_model` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`id_model`, `nama_model`, `size_model`, `harga`) VALUES
('CTS4', 'Carpastus 4', '4', '70000'),
('CTS6', 'Carpatus 6 Inch', '6', '80000'),
('CTS8', 'Carpatus 8 Inch', '8', '90000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `nama_model` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `nama_upper` varchar(100) NOT NULL,
  `nama_lining` varchar(100) NOT NULL,
  `nama_construction` varchar(100) NOT NULL,
  `nama_outsole` varchar(100) NOT NULL,
  `nama_weltcolour` varchar(100) NOT NULL,
  `nama_edgecolour` varchar(100) NOT NULL,
  `nama_weltstite` varchar(100) NOT NULL,
  `nama_toebox` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `nama_heels` varchar(100) NOT NULL,
  `harga` float NOT NULL,
  `bayaran_pegawai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id_order`, `nama`, `address`, `email`, `phone_number`, `instagram`, `nama_model`, `size`, `nama_upper`, `nama_lining`, `nama_construction`, `nama_outsole`, `nama_weltcolour`, `nama_edgecolour`, `nama_weltstite`, `nama_toebox`, `foto`, `order_date`, `nama_heels`, `harga`, `bayaran_pegawai`) VALUES
(47, 'Rizki Ramadhan', 'Bumi Asri Mekar Rahayu Blok 2 E 23', 'rizkiramadhan350@gmail.com', '081563965621', '@rzkrmdhn', 'Carpatus 6 Inch', '35', 'Shell No 6', 'Half Lining', 'Construction 1', 'Half Sole Super Grip Black', 'Welt Colour 1', 'Edge Colour 1', 'Welt Stite 1', 'Toebox 1', 'img9.jpg', '2021-10-05', 'Heels1', 180450, 0),
(55, 'Dudung', 'Rumah dudung masa rumah soni', 'dudung@gmail.com', '12341231', '@dudung', 'Carpatus 6 Inch', '43', 'Shell No 8', 'Half Lining', 'Construction 1', 'Full Sole Super Grip Black', 'Welt Colour 1', 'Edge Colour 1', 'Welt Stite 1', 'Toebox 1', '242633430_282739860099378_8134502029585846057_n.jpg', '2021-10-07', 'Heels1', 1110000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outsole`
--

CREATE TABLE `outsole` (
  `id_outsole` varchar(100) NOT NULL,
  `nama_outsole` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outsole`
--

INSERT INTO `outsole` (`id_outsole`, `nama_outsole`, `harga`) VALUES
('FSSGB', 'Full Sole Super Grip Black', '80000'),
('HSSGB', 'Half Sole Super Grip Black', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `upper` float NOT NULL,
  `finishing` float NOT NULL,
  `umum` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `upper`, `finishing`, `umum`, `total`) VALUES
(1, 'Soni', 20000, 50000, 10000, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `detail`, `foto`, `harga`) VALUES
('img2', 'sepatu 2', 'ini adalah sepatu 2', 'img5.jpg', '500.000'),
('img3', 'sepatu 3', 'ini adalah sepatu 3', 'img6.jpg', '500.000'),
('img5', 'Sepatu 5', 'Ini adalah sepatu ke 5', 'img81.jpg', '600.000'),
('img6', 'Sepatu 6', 'Ini adalah sepatu ke 6', 'img102.jpg', '800000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toebox`
--

CREATE TABLE `toebox` (
  `id_toebox` varchar(100) NOT NULL,
  `nama_toebox` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toebox`
--

INSERT INTO `toebox` (`id_toebox`, `nama_toebox`, `harga`) VALUES
('TB-1', 'Toebox 1', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upper`
--

CREATE TABLE `upper` (
  `id_upper` varchar(100) NOT NULL,
  `nama_upper` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upper`
--

INSERT INTO `upper` (`id_upper`, `nama_upper`, `harga`) VALUES
('SH-6', 'Shell No 6', '15000'),
('SH-8', 'Shell No 8', '90000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Rizki Ramadhan', 'rizkiramadhan350@gmail.com', '$2y$10$RLS5InFP63I1/aI47YWE0uPdLxl5jcSu9vPnuebntVonqf2.JHTLe', 1, 1, 1632239411);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `weltcolour`
--

CREATE TABLE `weltcolour` (
  `id_weltcolour` varchar(100) NOT NULL,
  `nama_weltcolour` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `weltcolour`
--

INSERT INTO `weltcolour` (`id_weltcolour`, `nama_weltcolour`, `harga`) VALUES
('WTC-1', 'Welt Colour 1', '70000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `weltstite`
--

CREATE TABLE `weltstite` (
  `id_weltstite` varchar(100) NOT NULL,
  `nama_weltstite` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `weltstite`
--

INSERT INTO `weltstite` (`id_weltstite`, `nama_weltstite`, `harga`) VALUES
('WS-1', 'Welt Stite 1', 100000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `construction`
--
ALTER TABLE `construction`
  ADD PRIMARY KEY (`id_construction`);

--
-- Indeks untuk tabel `edgecolour`
--
ALTER TABLE `edgecolour`
  ADD PRIMARY KEY (`id_edgecolour`);

--
-- Indeks untuk tabel `etc`
--
ALTER TABLE `etc`
  ADD PRIMARY KEY (`id_etc`);

--
-- Indeks untuk tabel `heels`
--
ALTER TABLE `heels`
  ADD PRIMARY KEY (`id_heels`);

--
-- Indeks untuk tabel `leather`
--
ALTER TABLE `leather`
  ADD PRIMARY KEY (`id_leather`);

--
-- Indeks untuk tabel `lining`
--
ALTER TABLE `lining`
  ADD PRIMARY KEY (`id_lining`);

--
-- Indeks untuk tabel `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id_model`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `outsole`
--
ALTER TABLE `outsole`
  ADD PRIMARY KEY (`id_outsole`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `toebox`
--
ALTER TABLE `toebox`
  ADD PRIMARY KEY (`id_toebox`);

--
-- Indeks untuk tabel `upper`
--
ALTER TABLE `upper`
  ADD PRIMARY KEY (`id_upper`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `weltcolour`
--
ALTER TABLE `weltcolour`
  ADD PRIMARY KEY (`id_weltcolour`);

--
-- Indeks untuk tabel `weltstite`
--
ALTER TABLE `weltstite`
  ADD PRIMARY KEY (`id_weltstite`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
