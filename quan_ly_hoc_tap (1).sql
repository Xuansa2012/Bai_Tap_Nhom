-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2021 lúc 04:47 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_hoc_tap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl`
--

CREATE TABLE `btl` (
  `ma_mon_hoc` int(100) NOT NULL,
  `ma_btl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_btl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `btl`
--

INSERT INTO `btl` (`ma_mon_hoc`, `ma_btl`, `ten_btl`, `ma_nhom`) VALUES
(0, '12', 'Thiết kế giao diện web nhà hàng', 'nhom1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btvn`
--

CREATE TABLE `btvn` (
  `ma_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_bd` datetime NOT NULL,
  `thoigian_kt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutru_btl`
--

CREATE TABLE `luutru_btl` (
  `ma_btl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutru_btvn`
--

CREATE TABLE `luutru_btvn` (
  `ma_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_nop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `ma_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
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
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nd`, `anh`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `ma_pl`) VALUES
('admin', NULL, 'admin123', 'admin123', 'Admin', '10/23/2021', 'nữ', 'Hà Nội', 'admin@gmail.com', '0379738717', 'admin'),
('gv1', NULL, 'gv1', 'gv1', 'Nguyễn Văn Nam', '5/8/1996', 'Nam', 'Hà Nội', 'nvnam@gmail.com', '063522438', 'gv'),
('sv1', NULL, 'sv1', 'sv1', 'lèng xuân sa ', '12/20/2001', 'nữ', 'Lào Cai', 'lengxuansa2012@gmail.com', '0379738717', 'sv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `ma_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_vien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
--

CREATE TABLE `phanloai` (
  `ma_pl` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanloai`
--

INSERT INTO `phanloai` (`ma_pl`, `ten_pl`) VALUES
('admin', 'admin'),
('gv', 'giáo viên'),
('sv', 'sinh viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nd`),
  ADD KEY `ma_pl` (`ma_pl`);

--
-- Chỉ mục cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`ma_pl`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`ma_pl`) REFERENCES `phanloai` (`ma_pl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
