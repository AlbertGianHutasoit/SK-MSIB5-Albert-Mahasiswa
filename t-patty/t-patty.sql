-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2023 pada 02.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t-patty`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Burger'),
(2, 'Pelengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_produksi` int(11) DEFAULT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `harga` double(10,2) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_produksi`, `nama_produk`, `deskripsi_produk`, `harga`, `gambar`) VALUES
(1, 1, 2, 'Black T Patty', 'Burger dengan sensasi gosong', 100000.00, './images/file_sql/f8.png'),
(2, 1, 1, 'Hot Patty', 'Burger dengan sensasi pedas', 70000.00, './images/file_sql/f2.png'),
(3, 2, 1, 'Minuman Soda', 'Minuman Soda dengan rasa lemon', 20000.00, './images/file_sql/f3.png'),
(4, 2, 1, 'Kentang Goreng', 'Kentang digoreng', 35000.00, './images/file_sql/f5.png'),
(7, 1, 2, 'Patty Full Keju', 'Makani keju itu sampe muntah', 50000.00, './images/file_sql/b-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu_produksi`
--

CREATE TABLE `waktu_produksi` (
  `id` int(11) NOT NULL,
  `waktu_produksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `waktu_produksi`
--

INSERT INTO `waktu_produksi` (`id`, `waktu_produksi`) VALUES
(1, '< 20 menit'),
(2, '> 20 menit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_kategori` (`id_kategori`),
  ADD KEY `FK_produksi` (`id_produksi`);

--
-- Indeks untuk tabel `waktu_produksi`
--
ALTER TABLE `waktu_produksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT untuk tabel `waktu_produksi`
--
ALTER TABLE `waktu_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `FK_produksi` FOREIGN KEY (`id_produksi`) REFERENCES `waktu_produksi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
