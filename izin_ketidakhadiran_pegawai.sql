-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2024 at 03:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izin_ketidakhadiran_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketidakhadiran`
--

CREATE TABLE `ketidakhadiran` (
  `izin_id` int NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `finger_print_id` varchar(20) NOT NULL,
  `tgl_mulai_izin` date NOT NULL,
  `durasi_izin_hari` varchar(20) NOT NULL,
  `durasi_izin_jam` varchar(20) NOT NULL,
  `durasi_izin_menit` varchar(20) NOT NULL,
  `nama_pengusul` varchar(255) NOT NULL,
  `tgl_usul` date NOT NULL,
  `ttd_pengusul` varchar(255) NOT NULL,
  `putusan` varchar(50) NOT NULL,
  `tgl_disetujui` date NOT NULL,
  `ttd_atasan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `surat_keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ketidakhadiran`
--

INSERT INTO `ketidakhadiran` (`izin_id`, `nama_dosen`, `keperluan`, `finger_print_id`, `tgl_mulai_izin`, `durasi_izin_hari`, `durasi_izin_jam`, `durasi_izin_menit`, `nama_pengusul`, `tgl_usul`, `ttd_pengusul`, `putusan`, `tgl_disetujui`, `ttd_atasan`, `catatan`, `surat_keterangan`) VALUES
(3, 'Nale', 'Istri hamilan', '212121', '2022-10-20', '5', '12', '56', 'Samid', '2022-10-01', '32312', 'Dizinkan', '2022-10-05', 'ini ttd', 'Maaf', 'Ada'),
(4, 'Alen', 'Orang Tua meninggal', '90909', '2021-10-20', '3', '9', '53', 'Samid', '2021-10-01', '78787', 'Dizinkan', '2021-10-05', 'ini ttd', 'Saya sedih', 'Ada'),
(5, 'Larry', 'Sakit', '69696', '2020-10-20', '15', '2', '8', 'Darno', '2020-10-01', '117711', 'Tidak Dizinkan', '2020-10-05', 'ini ttd', 'Tolong kaki saya sakit', 'Tidak Ada'),
(6, 'Sarah', 'Cuti', '12345', '2023-05-10', '10', '1', '30', 'Budi', '2023-05-01', '998877', 'Dizinkan', '2023-05-05', 'ttd Sarah', 'Liburan keluarga', 'Ada'),
(7, 'Bambang', 'Sakit', '11223', '2024-08-15', '5', '3', '45', 'Indah', '2024-08-10', '223344', 'Dizinkan', '2024-08-12', 'ttd Bambang', 'Demam tinggi', 'Tidak Ada'),
(8, 'Wati', 'Izin Acara Keluarga', '44556', '2023-11-25', '3', '2', '10', 'Rizal', '2023-11-20', '556677', 'Dizinkan', '2023-11-23', 'ttd Wati', 'Pernikahan anak', 'Ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketidakhadiran`
--
ALTER TABLE `ketidakhadiran`
  ADD PRIMARY KEY (`izin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ketidakhadiran`
--
ALTER TABLE `ketidakhadiran`
  MODIFY `izin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
