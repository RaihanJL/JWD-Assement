-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2024 pada 06.30
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
-- Database: `toko_indonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_gerai`
--

CREATE TABLE `nama_gerai` (
  `ID_Gerai` varchar(5) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Telepon` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nama_gerai`
--

INSERT INTO `nama_gerai` (`ID_Gerai`, `Nama`, `Alamat`, `Kota`, `Telepon`) VALUES
('G1', 'Gerai Dago', 'Jl. Ir Hj Djuanda 115', 'Bandung', '0227206678'),
('G2', 'Gerai Soekarno Hatta', 'Jl. Soekarno Hatta 21', 'Bandung', '0227507283'),
('G3', 'Gerai Gatot Subroto', 'Jl. Gatot SUbroto 15', 'Bandung', '0227497644');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `ID` varchar(10) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Stok` int(100) NOT NULL,
  `Supplier` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`ID`, `Kategori`, `Nama_Barang`, `Harga`, `Stok`, `Supplier`) VALUES
('BR1001', 'Makanan', 'Krupuk Ikan', '25.000', 60, 'PD Idola Snack'),
('BR1002', 'Makanan', 'Keripik Singkong', '15.000', 60, 'PD Idola Snack'),
('BR2001', 'Kosmetik', 'Sabun Herbal', '10.000', 40, 'Herborist'),
('BR2002', 'Kosmetik', 'Masker Spirulina', '17.000', 40, 'Herborist'),
('BR3001', 'Aksesoris', 'Jam Tangan Kayu Pria', '320.000', 15, 'Indocraft'),
('BR3002', 'Aksesoris', 'Jam Tangan Kayu Wanita', '270.000', 20, 'Indocraft'),
('BR3003', 'Aksesoris', 'Kalung Etnik', '175.000', 10, 'Indocraft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_supplier`
--

CREATE TABLE `tabel_supplier` (
  `ID_Supplier` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Telepon` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_supplier`
--

INSERT INTO `tabel_supplier` (`ID_Supplier`, `Nama`, `Alamat`, `Kota`, `Telepon`) VALUES
('SP01', 'PD Idola Snack', 'Jl.Kud - Sukadami', 'Bekasi', '08569372549'),
('SP02', 'Herborist', 'JL Daab Nigit Km.11', 'Jakarta', '021-5436811'),
('SP03', 'Indocraft', 'JL Raya Mas No.47', 'Bali', '0361-973091');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nama_gerai`
--
ALTER TABLE `nama_gerai`
  ADD PRIMARY KEY (`ID_Gerai`);

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabel_supplier`
--
ALTER TABLE `tabel_supplier`
  ADD PRIMARY KEY (`ID_Supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
