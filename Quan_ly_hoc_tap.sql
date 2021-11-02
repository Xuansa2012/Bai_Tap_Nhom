-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 06:20 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40101 SET NAMES utf8 */;

--
-- Cơ sở dữ liệu: `quan_ly_hoc_tap`
-- Database: `quan_ly_hoc_tap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl`
-- Table structure for table `btl`
--


CREATE TABLE IF NOT EXISTS `btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_de_tai` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` date DEFAULT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--Thêm dl cho bảng btl
Insert into `btl`( `ma_btl`,`ten_de_tai`, `ma_nhom`,`,thoi_gian`,`ma_mon_hoc`) VALUES
(`D1`,`Thiết kế giao diện web`,`N1`,`16/10/2021`,`M1`)
(`D2`,`Thiết kế giao diện web nhà hàng`,`N2`,`16/10/2021`,`M2`)
(`D3`,`Thiết kế giao diện web khách sạn`,`N3`,`16/10/2021`,`M3`);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btvn`
-- Table structure for table `btvn`
--


CREATE TABLE IF NOT EXISTS `btvn` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_bd` datetime NOT NULL,
  `thoigian_kt` datetime NOT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--Thêm dl cho bảng btvn
Insert into `btvn`( `ma_bt`,`ten_bt`, `thoigian_bd`,`,thoigian_kt`,`ma_mon_hoc`,`ma_ld`) VALUES
(`B1`,`Tìm kiếm theo chiều rộng`,`1/10/2021`,`16/10/2021`,`M1`,`LD1`),
(`B2`,`Tìm kiếm theo chiều sâu`,`2/10/2021`,`16/10/2021`,`M2`,`LD2`),
(`B3`,`Tìm kiếm theo chiều sâu hạn chế`,`7/10/2021`,`16/10/2021`,`M3`,`LD3`);
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutru`
-- Table structure for table `ct_btvn`
--


CREATE TABLE IF NOT EXISTS `ct_btvn` (
`stt` int(11) NOT NULL,
  `cau_hoi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `de_bai` text COLLATE utf8_unicode_ci NOT NULL,
  `dap_an` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--Thêm dl cho bảng ct_btvn
Insert into `ct_btvn`( `stt`,`cau_hỏi`, `ma_bt`,`,de_bai`,`dap_an`) VALUES
(`1`,`Câu 1`,`B1`,`Thiết kế`,``),
(`2`,`Câu 2`,`B2`,`Vẽ cây trò chơi`,``),
(`3`,`Câu 3`,`B3`,`Chuẩn hóa`,``);

-- --------------------------------------------------------

--
-- Table structure for table `loai_de`
--

CREATE TABLE IF NOT EXISTS `loai_de` (
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ld` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
Insert into `loai_de`(`ma_ld`,`ten_ld`) VALUES
(`LD1`,`Đề lẻ`)
(`LD2`,`Đề chẵn`);- --------------------------------------------------------

--
-- Table structure for table `luutru`
--

CREATE TABLE IF NOT EXISTS `luutru` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
 Insert into `luutru` (`ma_bt`,`ma_nd`,  `bai_lam`,`thoi_gian_nop`,`diem`) VALUES
 (`B1`,`admin`,`BL1`,``10/10/2021``,`9`)
 (`B2`,`sv1`,`BL2`,``10/10/2021``,`10`);
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
-- Table structure for table `luutru_btl`
--


CREATE TABLE IF NOT EXISTS `luutru_btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
Insert into `luutru_btl` (`ma_btl`,`ma_nhom`,  `bai_lam`,`thoi_gian_nop`,`diem`) VALUES
 (`D1`,`N1`,`BL1`,`10/10/2021`,`9`)
 (`D2`,`N2`,`BL2`,`10/10/2021`,`10`);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(100) COLLATE utf8_unicode_ci NOT NULL
  
  `siso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
(Insert into `monhoc` (`ma_mon_hoc`,`ten_mon_hoc`,  `ma_nd`,`siso`) VALUES
 (`M1`,`Công nghệ web`,`sv1`,`79`)
 (`M2`,`Trí tuện nhân tạo`,`sv1`,`50`);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
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
-- Đang đổ dữ liệu cho bảng `nguoidung`
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nd`, `anh`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `ma_pl`) VALUES
('admin', NULL, 'admin123', 'admin123', 'Admin', '10/23/2021', 'nữ', 'Hà Nội', 'admin@gmail.com', '0379738717', 'admin'),
('gv1', NULL, 'gv1', 'gv1', 'Nguyễn Văn Nam', '5/8/1996', 'Nam', 'Hà Nội', 'nvnam@gmail.com', '063522438', 'gv'),
('sv1', NULL, 'sv1', 'sv1', 'lèng xuân sa ', '12/20/2001', 'nữ', 'Lào Cai', 'lengxuansa2012@gmail.com', '0379738717', 'sv');
('admin', NULL, 'admin123', 'admin123', 'admin', '10/23/2021', 'nữ', 'Hà Nội', 'admin@gmail.com', '0379738717', 'admin'),
('sv1', NULL, 'sv1', 'sv1', 'Lan', '12/20/2001', 'nữ', 'Lào cai', 'lengxuansa2012@gmail.com', '0379738717', 'sv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
-- Table structure for table `nhom`
--


CREATE TABLE IF NOT EXISTS `nhom` (
  `ma_nhom` int(11) NOT NULL
  `ten_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_vien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
  `ma_nd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
Insert into `nhom` (`ma_nhom`,`ten_nhom`, `thanh_vien`,`ma_nd`) VALUES
(`N1`,`Nhóm 1`,`Vũ Thị Thủy`,`sv1`),
(`N2`,`Nhóm 2`,`Lèng Xuân Sa`,`sv1`)

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
-- Table structure for table `phanloai`
--


CREATE TABLE IF NOT EXISTS `phanloai` (
  `ma_pl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Đang đổ dữ liệu cho bảng `phanloai`
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`ma_pl`, `ten_pl`) VALUES
('admin', 'admin'),
('gv', 'giáo viên'),
('sv', 'sinh viên');
('gv', 'Giáo viên'),
('sv', 'Sinh Viên');

--
-- Indexes for dumped tables
--

--
-- Chỉ mục cho các bảng đã đổ
-- Indexes for table `btl`
--
ALTER TABLE `btl`
 ADD PRIMARY KEY (`ma_btl`);

--
-- Chỉ mục cho bảng `nguoidung`
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
  ADD PRIMARY KEY (`ma_nd`),
  ADD KEY `ma_pl` (`ma_pl`);
 ADD PRIMARY KEY (`ma_nd`), ADD KEY `nguoidung_ibfk_1` (`ma_pl`);

--
-- Indexes for table `nhom`
--
ALTER TABLE `nhom`
 ADD PRIMARY KEY (`ma_nhom`), ADD KEY `nhom_ibfk_1` (`ma_nd`);

--
-- Chỉ mục cho bảng `phanloai`
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`ma_pl`);
 ADD PRIMARY KEY (`ma_pl`);

--
-- Các ràng buộc cho các bảng đã đổ
-- AUTO_INCREMENT for dumped tables
--

--
-- Các ràng buộc cho bảng `nguoidung`
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
COMMIT;
ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`ma_pl`) REFERENCES `phanloai` (`ma_pl`);

--
-- Constraints for table `nhom`
--
ALTER TABLE `nhom`
ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;