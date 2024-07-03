-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2024 at 12:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama`, `umur`, `alamat`) VALUES
(1, 'John Doe', 25, 'Jl. Merpati No. 123'),
(2, 'Jane Smith', 30, 'Jl. Kenari No. 45'),
(3, 'Michael Brown', 22, 'Jl. Kutilang No. 10'),
(4, 'Agis', 28, 'Jl. Cendrawasih No. 56'),
(5, 'William Johnson', 35, 'Jl. Rajawali No. 78'),
(6, 'Olivia Wilson', 29, 'Jl. Elang No. 33'),
(7, 'James Jones', 32, 'Jl. Kakatua No. 47'),
(8, 'Sophia Miller', 27, 'Jl. Beo No. 12'),
(9, 'Benjamin Taylor', 31, 'Jl. Pelikan No. 90'),
(10, 'Mia Anderson', 24, 'Jl. Kakaktua No. 56'),
(11, 'Alexander Thomas', 26, 'Jl. Angsa No. 14'),
(12, 'Charlotte Jackson', 34, 'Jl. Flamingo No. 67'),
(13, 'Daniel White', 23, 'Jl. Kolibri No. 89'),
(14, 'Amelia Harris', 30, 'Jl. Puyuh No. 44'),
(15, 'Henry Martin', 28, 'Jl. Sikatan No. 21'),
(16, 'Isabella Lee', 33, 'Jl. Tengkek No. 11'),
(17, 'Lucas Garcia', 27, 'Jl. Trulek No. 25'),
(18, 'Ava Martinez', 32, 'Jl. Merak No. 48'),
(19, 'Mason Robinson', 25, 'Jl. Branjangan No. 17'),
(20, 'Ella Clark', 29, 'Jl. Cucak No. 5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'idrisefendi', 'idris123', 'IDRIS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
