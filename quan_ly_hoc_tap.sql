-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 11:48 AM
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
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_de_tai` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` int(11) NOT NULL,
  `thoi_gian` date DEFAULT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `btl`
--

INSERT INTO `btl` (`ma_btl`, `ten_de_tai`, `ma_nhom`, `thoi_gian`, `ma_mon_hoc`) VALUES
('D1', 'Thiết Kế giao diện trang web cho nhà hàng', 1, '2021-11-22', 'M1'),
('D2', 'Thiết Kế giao diện trang web cho quản lí sinh viên', 2, '2021-11-26', 'M1'),
('D3', 'Thiết Kế giao diện trang web bán sách', 3, '2021-11-29', 'M1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btvn`
--

CREATE TABLE `btvn` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_kt` datetime NOT NULL,
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `btvn`
--

INSERT INTO `btvn` (`ma_bt`, `ten_bt`, `ma_mon_hoc`, `thoigian_kt`, `ma_ld`) VALUES
('B1', 'Thiết kế csdl cho trang web quản lý sinh viên', 'M1', '2021-11-20 00:00:00', 'L1'),
('B2', 'Thiết kế trang web theo mẫu', 'M1', '2021-11-22 00:00:00', 'L1'),
('B3', 'Kiểm tra giữa kì', 'M1', '2021-11-10 00:00:00', 'L2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_btvn`
--

CREATE TABLE `ct_btvn` (
  `stt` int(11) NOT NULL,
  `cau_hoi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `de_bai` text COLLATE utf8_unicode_ci NOT NULL,
  `dap_an` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_btvn`
--

INSERT INTO `ct_btvn` (`stt`, `cau_hoi`, `ma_bt`, `de_bai`, `dap_an`) VALUES
(1, '1', 'B3', 'Truyền dữ liệu theo phương thức GET là gì?', 'D'),
(2, '2', 'B3', 'Truyền dữ liệu theo phương thức POST là gì?', 'A'),
(3, '3', 'B3', 'Các phương thức truyền nhận dữ liệu?', 'C');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_de`
--

CREATE TABLE `loai_de` (
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ld` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_de`
--

INSERT INTO `loai_de` (`ma_ld`, `ten_ld`) VALUES
('L1', 'Tự luận'),
('L2', 'Trắc nghiệm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutru`
--

CREATE TABLE `luutru` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `luutru`
--

INSERT INTO `luutru` (`ma_bt`, `ma_nd`, `bai_lam`, `thoi_gian_nop`, `diem`) VALUES
('B1', 'sv1', 'Thiết kế csdl cho trang web quản lý sinh viên', '2021-11-19 00:00:00', 9),
('B2', 'sv2', 'Thiết kế csdl cho trang web quản lý sinh viên', '2021-11-19 00:00:00', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutru_btl`
--

CREATE TABLE `luutru_btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` int(11) NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `luutru_btl`
--

INSERT INTO `luutru_btl` (`ma_btl`, `ma_nhom`, `bai_lam`, `thoi_gian_nop`, `diem`) VALUES
('D1', 1, 'Thiết kế giao diện trang web cho nhà hàng', '2021-11-20 00:00:00', 8),
('D2', 2, 'Thiết kế giao diện trang web cho quản lý sinh viên', '2021-11-24 00:00:00', 10),
('D3', 3, 'Thiết kế giao diện trang web bán sách', '2021-11-28 00:00:00', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `siso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`ma_mon_hoc`, `ten_mon_hoc`, `ma_nd`, `siso`) VALUES
('M1', 'Công Nghệ Web', 'gv2', 74),
('M2', 'Trí tuệ nhân tạo', 'gv2', 76);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
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
--

INSERT INTO `nguoidung` (`ma_nd`, `anh`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `ma_pl`) VALUES
('admin', NULL, 'admin123', 'admin123', 'admin123', 'Nguyễn Văn An', '3/1/1986', 'nam', 'Hà Nội', 'annv@.tlu.', 'admin'),
('gv1', NULL, 'Nguyễn Văn Nam', 'gv1', 'Nguyễn Văn Nam', '12/1/1983', 'nam', 'Hà Nội', 'namnv@tlu.edu.vn', '097564331', 'gv'),
('sv1', NULL, 'Nguyễn Thị Lan', 'sv1', 'Nguyễn Thị Lan', '28/2/2000', 'nữ', 'Hà Nam', 'lannt@tlu.edu.vn', '096745313', 'sv'),
('sv2', NULL, 'Nguyễn Hồng Thu', 'sv2', 'Nguyễn Hồng Thu', '2/3/2000', 'nữ', 'Bắc Giang', 'thutn@tlu.edu.vn', '0963789432', 'sv'),
('sv3', NULL, 'Đặng Hồng Đức', 'sv3', 'Đặng Hồng Đức', '4/12/2000', 'nam', 'Tuyên Quang', 'duchd@tlu.edu.vn', '067773456', 'sv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `ten_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhom`
--

INSERT INTO `nhom` (`ten_nhom`, `ma_nd`, `ma_nhom`) VALUES
('Nhóm 1', 'sv1', 1),
('Nhóm 2', 'sv2', 2),
('Nhóm 3', 'sv3', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
--

CREATE TABLE `phanloai` (
  `ma_pl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanloai`
--

INSERT INTO `phanloai` (`ma_pl`, `ten_pl`) VALUES
('admin', 'admin'),
('gv', 'Giảng viên'),
('sv', 'Sinh viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `btl`
--
ALTER TABLE `btl`
  ADD PRIMARY KEY (`ma_btl`),
  ADD KEY `btl_ibfk_1` (`ma_nhom`),
  ADD KEY `btl_ibfk_2` (`ma_mon_hoc`);

--
-- Chỉ mục cho bảng `btvn`
--
ALTER TABLE `btvn`
  ADD PRIMARY KEY (`ma_bt`),
  ADD KEY `btvn_ibfk_1` (`ma_mon_hoc`),
  ADD KEY `btvn_ibfk_2` (`ma_ld`);

--
-- Chỉ mục cho bảng `ct_btvn`
--
ALTER TABLE `ct_btvn`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `ct_btvn_ibfk_1` (`ma_bt`);

--
-- Chỉ mục cho bảng `loai_de`
--
ALTER TABLE `loai_de`
  ADD PRIMARY KEY (`ma_ld`);

--
-- Chỉ mục cho bảng `luutru`
--
ALTER TABLE `luutru`
  ADD PRIMARY KEY (`ma_bt`),
  ADD KEY `luutru_ibfk_2` (`ma_nd`);

--
-- Chỉ mục cho bảng `luutru_btl`
--
ALTER TABLE `luutru_btl`
  ADD KEY `luutru_btl_ibfk_1` (`ma_btl`),
  ADD KEY `luutru_btl_ibfk_2` (`ma_nhom`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`ma_mon_hoc`),
  ADD KEY `monhoc_ibfk_1` (`ma_nd`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nd`),
  ADD KEY `nguoidung_ibfk_1` (`ma_pl`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`ma_nhom`),
  ADD KEY `nhom_ibfk_1` (`ma_nd`);

--
-- Chỉ mục cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`ma_pl`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_btvn`
--
ALTER TABLE `ct_btvn`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `btl`
--
ALTER TABLE `btl`
  ADD CONSTRAINT `btl_ibfk_1` FOREIGN KEY (`ma_nhom`) REFERENCES `nhom` (`ma_nhom`),
  ADD CONSTRAINT `btl_ibfk_2` FOREIGN KEY (`ma_mon_hoc`) REFERENCES `monhoc` (`ma_mon_hoc`);

--
-- Các ràng buộc cho bảng `btvn`
--
ALTER TABLE `btvn`
  ADD CONSTRAINT `bt_ibfk_1` FOREIGN KEY (`ma_ld`) REFERENCES `loai_de` (`ma_ld`),
  ADD CONSTRAINT `btvn_ibfk_1` FOREIGN KEY (`ma_mon_hoc`) REFERENCES `monhoc` (`ma_mon_hoc`),
  ADD CONSTRAINT `btvn_ibfk_2` FOREIGN KEY (`ma_ld`) REFERENCES `loai_de` (`ma_ld`);

--
-- Các ràng buộc cho bảng `ct_btvn`
--
ALTER TABLE `ct_btvn`
  ADD CONSTRAINT `ct_btvn_ibfk_1` FOREIGN KEY (`ma_bt`) REFERENCES `btvn` (`ma_bt`);

--
-- Các ràng buộc cho bảng `luutru_btl`
--
ALTER TABLE `luutru_btl`
  ADD CONSTRAINT `luutru_btl_ibfk_1` FOREIGN KEY (`ma_btl`) REFERENCES `btl` (`ma_btl`),
  ADD CONSTRAINT `luutru_btl_ibfk_2` FOREIGN KEY (`ma_nhom`) REFERENCES `nhom` (`ma_nhom`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`ma_pl`) REFERENCES `phanloai` (`ma_pl`);

--
-- Các ràng buộc cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
