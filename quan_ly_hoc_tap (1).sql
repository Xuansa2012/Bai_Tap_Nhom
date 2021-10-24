-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 07:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_ly_hoc_tap`
--

-- --------------------------------------------------------

--
-- Table structure for table `btl`
--

CREATE TABLE `btl` (
  `ma_dt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_dt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nhom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `btl`
--

INSERT INTO `btl` (`ma_dt`, `ten_dt`, `ten_nhom`) VALUES
('12', 'Thiết kế giao diện web nhà hàng', 'nhom1');

-- --------------------------------------------------------

--
-- Table structure for table `btvn`
--

CREATE TABLE `btvn` (
  `ma_btvn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_mh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_btvn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` datetime NOT NULL,
  `time_finish` datetime NOT NULL,
  `phat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `btvn`
--

INSERT INTO `btvn` (`ma_btvn`, `ma_mh`, `ten_btvn`, `time_start`, `time_finish`, `phat`) VALUES
('1', 'mh1', 'Thiết kế giao diện web nhà hàng', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-1d');

-- --------------------------------------------------------

--
-- Table structure for table `luutru`
--

CREATE TABLE `luutru` (
  `ma_btvn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) NOT NULL,
  `time_nop` datetime NOT NULL,
  `nguoithamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luutru`
--

INSERT INTO `luutru` (`ma_btvn`, `diem`, `time_nop`, `nguoithamgia`) VALUES
('1', 7, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `ma_mh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_mh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_gv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`ma_mh`, `ten_mh`, `ma_gv`) VALUES
('mh1', 'Công nghệ web', 'gv1');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tai_khoan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ho_ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_pl` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nd`, `anh`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `ma_pl`) VALUES
('admin', NULL, 'admin123', 'admin123', 'Admin', '10/23/2021', 'nữ', 'Hà Nội', 'admin@gmail.com', '0379738717', 'admin'),
('gv1', NULL, 'gv1', 'gv1', 'Nguyễn Văn Nam', '5/8/1996', 'Nam', 'Hà Nội', 'nvnam@gmail.com', '063522438', 'gv'),
('sv1', NULL, 'sv1', 'sv1', 'lèng xuân sa ', '12/20/2001', 'nữ', 'Lào Cai', 'lengxuansa2012@gmail.com', '0379738717', 'sv');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE `nhom` (
  `ma_nhom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nhom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenthanhvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`ma_nhom`, `ten_nhom`, `tenthanhvien`) VALUES
('n1', 'nhom1', 'Vũ Thị Thủy');

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE `phanloai` (
  `ma_pl` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`ma_pl`, `ten_pl`) VALUES
('admin', 'admin'),
('gv', 'giáo viên'),
('sv', 'sinh viên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nd`),
  ADD KEY `ma_pl` (`ma_pl`);

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`ma_pl`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`ma_pl`) REFERENCES `phanloai` (`ma_pl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
