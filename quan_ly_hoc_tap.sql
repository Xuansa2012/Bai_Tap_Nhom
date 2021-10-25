-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quan_ly_hoc_tap`
--

-- --------------------------------------------------------

--
-- Table structure for table `btl`
--

CREATE TABLE IF NOT EXISTS `btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_de_tai` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` date DEFAULT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `btvn`
--

CREATE TABLE IF NOT EXISTS `btvn` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_kt` datetime NOT NULL,
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_btvn`
--

CREATE TABLE IF NOT EXISTS `ct_btvn` (
`stt` int(11) NOT NULL,
  `cau_hoi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `de_bai` text COLLATE utf8_unicode_ci NOT NULL,
  `dap_an` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_de`
--

CREATE TABLE IF NOT EXISTS `loai_de` (
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ld` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luutru`
--

CREATE TABLE IF NOT EXISTS `luutru` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luutru_btl`
--

CREATE TABLE IF NOT EXISTS `luutru_btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `siso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tai_khoan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_pl` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nd`, `anh`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `ma_pl`) VALUES
('admin', NULL, 'admin123', 'admin123', 'admin', '10/23/2021', 'nữ', 'Hà Nội', 'admin@gmail.com', '0379738717', 'admin'),
('sv1', NULL, 'sv1', 'sv1', 'Lan', '12/20/2001', 'nữ', 'Lào cai', 'lengxuansa2012@gmail.com', '0379738717', 'sv');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE IF NOT EXISTS `nhom` (
  `ten_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`ma_nhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE IF NOT EXISTS `phanloai` (
  `ma_pl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`ma_pl`, `ten_pl`) VALUES
('admin', 'admin'),
('gv', 'Giáo viên'),
('sv', 'Sinh Viên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `btl`
--
ALTER TABLE `btl`
 ADD PRIMARY KEY (`ma_btl`);

--
-- Indexes for table `btvn`
--
ALTER TABLE `btvn`
 ADD PRIMARY KEY (`ma_bt`), ADD KEY `bt_ibfk_1` (`ma_ld`);

--
-- Indexes for table `ct_btvn`
--
ALTER TABLE `ct_btvn`
 ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `loai_de`
--
ALTER TABLE `loai_de`
 ADD PRIMARY KEY (`ma_ld`);

--
-- Indexes for table `luutru`
--
ALTER TABLE `luutru`
 ADD PRIMARY KEY (`ma_bt`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
 ADD PRIMARY KEY (`ma_mon_hoc`), ADD KEY `monhoc_ibfk_1` (`ma_nd`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
 ADD PRIMARY KEY (`ma_nd`), ADD KEY `nguoidung_ibfk_1` (`ma_pl`);

--
-- Indexes for table `nhom`
--
ALTER TABLE `nhom`
 ADD PRIMARY KEY (`ma_nhom`), ADD KEY `nhom_ibfk_1` (`ma_nd`);

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
 ADD PRIMARY KEY (`ma_pl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct_btvn`
--
ALTER TABLE `ct_btvn`
MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhom`
--
ALTER TABLE `nhom`
MODIFY `ma_nhom` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `btvn`
--
ALTER TABLE `btvn`
ADD CONSTRAINT `bt_ibfk_1` FOREIGN KEY (`ma_ld`) REFERENCES `loai_de` (`ma_ld`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`ma_pl`) REFERENCES `phanloai` (`ma_pl`);

--
-- Constraints for table `nhom`
--
ALTER TABLE `nhom`
ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
