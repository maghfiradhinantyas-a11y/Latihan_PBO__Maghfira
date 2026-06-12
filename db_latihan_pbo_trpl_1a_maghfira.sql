-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 03:30 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_trpl 1a_maghfira`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(10) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(100) DEFAULT NULL,
  `bantal_selimut_pack` int DEFAULT NULL,
  `layanan_butler` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Avatar 3', '2026-07-01 13:00:00', 2, 50000.00, 'Regular', 'Dolby 7.1', 'Row G', NULL, NULL, NULL, NULL),
(2, 'Avatar 3', '2026-07-01 16:00:00', 1, 50000.00, 'Regular', 'Dolby 7.1', 'Row F', NULL, NULL, NULL, NULL),
(3, 'The Batman II', '2026-07-02 14:15:00', 4, 45000.00, 'Regular', 'Stereo', 'Row C', NULL, NULL, NULL, NULL),
(4, 'The Batman II', '2026-07-02 19:30:00', 2, 55000.00, 'Regular', 'Dolby 7.1', 'Row E', NULL, NULL, NULL, NULL),
(5, 'Detektif Conan', '2026-07-03 11:00:00', 1, 40000.00, 'Regular', 'Stereo', 'Row H', NULL, NULL, NULL, NULL),
(6, 'Avengers: Secret', '2026-07-04 12:00:00', 3, 50000.00, 'Regular', 'Dolby 7.1', 'Row D', NULL, NULL, NULL, NULL),
(7, 'Avengers: Secret', '2026-07-04 15:30:00', 2, 50000.00, 'Regular', 'Dolby 7.1', 'Row E', NULL, NULL, NULL, NULL),
(8, 'Avatar 3 (3D)', '2026-07-01 14:00:00', 2, 95000.00, 'IMAX', 'IMAX 12-Ch', 'Row K', 'KM-3D-091', '4D Shake & Wind', NULL, NULL),
(9, 'Avatar 3 (3D)', '2026-07-01 18:30:00', 2, 95000.00, 'IMAX', 'IMAX 12-Ch', 'Row J', 'KM-3D-092', '4D Shake & Wind', NULL, NULL),
(10, 'Avengers: Secret', '2026-07-04 13:00:00', 1, 85000.00, 'IMAX', 'IMAX 6-Ch', 'Row L', NULL, 'Standard Vibration', NULL, NULL),
(11, 'Avengers: Secret', '2026-07-04 17:00:00', 4, 85000.00, 'IMAX', 'IMAX 6-Ch', 'Row K', NULL, 'Standard Vibration', NULL, NULL),
(12, 'Interstellar Rerelease', '2026-07-05 20:00:00', 2, 80000.00, 'IMAX', 'IMAX 12-Ch', 'Row M', NULL, 'Heavy Rumble', NULL, NULL),
(13, 'Top Gun: Maverick', '2026-07-06 15:00:00', 2, 80000.00, 'IMAX', 'IMAX 12-Ch', 'Row J', NULL, 'Pitch & Roll Effect', NULL, NULL),
(14, 'Dune: Part Three', '2026-07-07 19:00:00', 3, 90000.00, 'IMAX', 'IMAX 12-Ch', 'Row L', NULL, '4D Full Motion', NULL, NULL),
(15, 'The Batman II', '2026-07-02 21:00:00', 2, 150000.00, 'Velvet', NULL, 'Row A', NULL, NULL, 2, 1),
(16, 'The Batman II', '2026-07-02 23:45:00', 2, 150000.00, 'Velvet', NULL, 'Row B', NULL, NULL, 2, 1),
(17, 'Dune: Part Three', '2026-07-07 16:30:00', 2, 175000.00, 'Velvet', NULL, 'Row A', NULL, NULL, 2, 1),
(18, 'Dune: Part Three', '2026-07-07 20:30:00', 2, 175000.00, 'Velvet', NULL, 'Row C', NULL, NULL, 2, 1),
(19, 'KKN di Desa Penari 2', '2026-07-08 19:00:00', 2, 120000.00, 'Velvet', NULL, 'Row B', NULL, NULL, 2, 0),
(20, 'KKN di Desa Penari 2', '2026-07-08 21:30:00', 2, 120000.00, 'Velvet', NULL, 'Row A', NULL, NULL, 2, 1),
(21, 'Avatar 3', '2026-07-01 20:00:00', 2, 200000.00, 'Velvet', NULL, 'Row B', NULL, NULL, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
