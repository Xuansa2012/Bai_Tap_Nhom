-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:00 PM
-- Generation Time: Oct 26, 2021 at 04:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

@@ -17,262 +17,303 @@ SET time_zone = "+00:00";
/*!40101 SET NAMES utf8 */;

--
-- Database: `quan_ly_hoc_tap`
-- Database: qlsv
--

-- --------------------------------------------------------

--
-- Table structure for table `btl`
-- Table structure for table btl
--

CREATE TABLE IF NOT EXISTS `btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_de_tai` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` date DEFAULT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL
CREATE TABLE IF NOT EXISTS btl (
  ma_btl varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ten_de_tai varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  ma_nhom int(11) NOT NULL,
  thoi_gian date DEFAULT NULL,
  ma_mon_hoc varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `btvn`
-- Table structure for table btvn
--

CREATE TABLE IF NOT EXISTS `btvn` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_bt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_kt` datetime NOT NULL,
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL
CREATE TABLE IF NOT EXISTS btvn (
  ma_bt varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ten_bt varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ma_mon_hoc varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  thoigian_kt datetime NOT NULL,
  ma_ld varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_btvn`
-- Table structure for table ct_btvn
--

CREATE TABLE IF NOT EXISTS `ct_btvn` (
`stt` int(11) NOT NULL,
  `cau_hoi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `de_bai` text COLLATE utf8_unicode_ci NOT NULL,
  `dap_an` text COLLATE utf8_unicode_ci NOT NULL
CREATE TABLE IF NOT EXISTS ct_btvn (
stt int(11) NOT NULL,
  cau_hoi varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ma_bt varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  de_bai text COLLATE utf8_unicode_ci NOT NULL,
  dap_an text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_de`
-- Table structure for table loai_de
--

CREATE TABLE IF NOT EXISTS `loai_de` (
  `ma_ld` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ld` varchar(100) COLLATE utf8_unicode_ci NOT NULL
CREATE TABLE IF NOT EXISTS loai_de (
  ma_ld varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ten_ld varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luutru`
-- Table structure for table luutru
--

CREATE TABLE IF NOT EXISTS `luutru` (
  `ma_bt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
CREATE TABLE IF NOT EXISTS luutru (
  ma_bt varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ma_nd varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  bai_lam varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  thoi_gian_nop datetime NOT NULL,
  diem int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luutru_btl`
-- Table structure for table luutru_btl
--

CREATE TABLE IF NOT EXISTS `luutru_btl` (
  `ma_btl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nhom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bai_lam` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_nop` datetime NOT NULL,
  `diem` int(11) NOT NULL
CREATE TABLE IF NOT EXISTS luutru_btl (
  ma_btl varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ma_nhom int(11) NOT NULL,
  bai_lam varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  thoi_gian_nop datetime NOT NULL,
  diem int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
-- Table structure for table monhoc
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `ma_mon_hoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `siso` int(11) DEFAULT NULL
CREATE TABLE IF NOT EXISTS monhoc (
  ma_mon_hoc varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ten_mon_hoc varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ma_nd varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  siso int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table monhoc
--

INSERT INTO monhoc (ma_mon_hoc, ten_mon_hoc, ma_nd, siso) VALUES
('1', '', 'gv1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
-- Table structure for table nguoidung
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
CREATE TABLE IF NOT EXISTS nguoidung (
  ma_nd varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  anh varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  tai_khoan varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  mat_khau varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  ho_ten varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  ngay_sinh varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  gioi_tinh varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  dia_chi varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  email varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  sdt varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  ma_pl varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
-- Dumping data for table nguoidung
--

INSERT INTO `nguoidung` (`ma_nd`, `anh`, `tai_khoan`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `ma_pl`) VALUES
('admin', NULL, 'admin123', 'admin123', 'admin', '10/23/2021', 'nữ', 'Hà Nội', 'admin@gmail.com', '0379738717', 'admin'),
('sv1', NULL, 'sv1', 'sv1', 'Lan', '12/20/2001', 'nữ', 'Lào cai', 'lengxuansa2012@gmail.com', '0379738717', 'sv');
INSERT INTO nguoidung (ma_nd, anh, tai_khoan, mat_khau, ho_ten, ngay_sinh, gioi_tinh, dia_chi, email, sdt, ma_pl) VALUES
('gv1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gv'),
('sv1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sv');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
-- Table structure for table nhom
--

CREATE TABLE IF NOT EXISTS `nhom` (
  `ten_nhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`ma_nhom` int(11) NOT NULL
CREATE TABLE IF NOT EXISTS nhom (
  ten_nhom varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ma_nd varchar(100) COLLATE utf8_unicode_ci NOT NULL,
ma_nhom int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
-- Table structure for table phanloai
--

CREATE TABLE IF NOT EXISTS `phanloai` (
  `ma_pl` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
CREATE TABLE IF NOT EXISTS phanloai (
  ma_pl varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  ten_pl varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanloai`
-- Dumping data for table phanloai
--

INSERT INTO `phanloai` (`ma_pl`, `ten_pl`) VALUES
('admin', 'admin'),
('gv', 'Giáo viên'),
('sv', 'Sinh Viên');
INSERT INTO phanloai (ma_pl, ten_pl) VALUES
('gv', 'Giảng viên'),
('sv', 'Sinh viên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `btl`
-- Indexes for table btl
--
ALTER TABLE btl
 ADD PRIMARY KEY (ma_btl), ADD KEY btl_ibfk_1 (ma_nhom), ADD KEY btl_ibfk_2 (ma_mon_hoc);

--
-- Indexes for table btvn
--
ALTER TABLE `btl`
 ADD PRIMARY KEY (`ma_btl`);
ALTER TABLE btvn
 ADD PRIMARY KEY (ma_bt), ADD KEY btvn_ibfk_1 (ma_mon_hoc), ADD KEY btvn_ibfk_2 (ma_ld);

--
-- Indexes for table `btvn`
-- Indexes for table ct_btvn
--
ALTER TABLE `btvn`
 ADD PRIMARY KEY (`ma_bt`), ADD KEY `bt_ibfk_1` (`ma_ld`);
ALTER TABLE ct_btvn
 ADD PRIMARY KEY (stt), ADD KEY ct_btvn_ibfk_1 (ma_bt);

--
-- Indexes for table `ct_btvn`
-- Indexes for table loai_de
--
ALTER TABLE `ct_btvn`
 ADD PRIMARY KEY (`stt`);
ALTER TABLE loai_de
 ADD PRIMARY KEY (ma_ld);

--
-- Indexes for table `loai_de`
-- Indexes for table luutru
--
ALTER TABLE `loai_de`
 ADD PRIMARY KEY (`ma_ld`);
ALTER TABLE luutru
 ADD PRIMARY KEY (ma_bt), ADD KEY luutru_ibfk_2 (ma_nd);

--
-- Indexes for table `luutru`
-- Indexes for table luutru_btl
--
ALTER TABLE `luutru`
 ADD PRIMARY KEY (`ma_bt`);
ALTER TABLE luutru_btl
 ADD KEY luutru_btl_ibfk_1 (ma_btl), ADD KEY luutru_btl_ibfk_2 (ma_nhom);

--
-- Indexes for table `monhoc`
-- Indexes for table monhoc
--
ALTER TABLE `monhoc`
 ADD PRIMARY KEY (`ma_mon_hoc`), ADD KEY `monhoc_ibfk_1` (`ma_nd`);
ALTER TABLE monhoc
 ADD PRIMARY KEY (ma_mon_hoc), ADD KEY monhoc_ibfk_1 (ma_nd);

--
-- Indexes for table `nguoidung`
-- Indexes for table nguoidung
--
ALTER TABLE `nguoidung`
 ADD PRIMARY KEY (`ma_nd`), ADD KEY `nguoidung_ibfk_1` (`ma_pl`);
ALTER TABLE nguoidung
 ADD PRIMARY KEY (ma_nd), ADD KEY nguoidung_ibfk_1 (ma_pl);

--
-- Indexes for table `nhom`
-- Indexes for table nhom
--
ALTER TABLE `nhom`
 ADD PRIMARY KEY (`ma_nhom`), ADD KEY `nhom_ibfk_1` (`ma_nd`);
ALTER TABLE nhom
 ADD PRIMARY KEY (ma_nhom), ADD KEY nhom_ibfk_1 (ma_nd);

--
-- Indexes for table `phanloai`
-- Indexes for table phanloai
--
ALTER TABLE `phanloai`
 ADD PRIMARY KEY (`ma_pl`);
ALTER TABLE phanloai
 ADD PRIMARY KEY (ma_pl);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct_btvn`
-- AUTO_INCREMENT for table ct_btvn
--
ALTER TABLE `ct_btvn`
MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE ct_btvn
MODIFY stt int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhom`
-- AUTO_INCREMENT for table nhom
--
ALTER TABLE `nhom`
MODIFY `ma_nhom` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE nhom
MODIFY ma_nhom int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `btvn`
-- Constraints for table btl
--
ALTER TABLE btl
ADD CONSTRAINT btl_ibfk_1 FOREIGN KEY (ma_nhom) REFERENCES nhom (ma_nhom),
ADD CONSTRAINT btl_ibfk_2 FOREIGN KEY (ma_mon_hoc) REFERENCES monhoc (ma_mon_hoc);

--
-- Constraints for table btvn
--
ALTER TABLE btvn
ADD CONSTRAINT bt_ibfk_1 FOREIGN KEY (ma_ld) REFERENCES loai_de (ma_ld),
ADD CONSTRAINT btvn_ibfk_1 FOREIGN KEY (ma_mon_hoc) REFERENCES monhoc (ma_mon_hoc),
ADD CONSTRAINT btvn_ibfk_2 FOREIGN KEY (ma_ld) REFERENCES loai_de (ma_ld);

--
-- Constraints for table ct_btvn
--
ALTER TABLE ct_btvn
ADD CONSTRAINT ct_btvn_ibfk_1 FOREIGN KEY (ma_bt) REFERENCES btvn (ma_bt);

--
-- Constraints for table luutru
--
ALTER TABLE luutru
ADD CONSTRAINT luutru_ibfk_1 FOREIGN KEY (ma_bt) REFERENCES btvn (ma_bt),
ADD CONSTRAINT luutru_ibfk_2 FOREIGN KEY (ma_nd) REFERENCES nguoidung (ma_nd);

--
-- Constraints for table luutru_btl
--
ALTER TABLE `btvn`
ADD CONSTRAINT `bt_ibfk_1` FOREIGN KEY (`ma_ld`) REFERENCES `loai_de` (`ma_ld`);
ALTER TABLE luutru_btl
ADD CONSTRAINT luutru_btl_ibfk_1 FOREIGN KEY (ma_btl) REFERENCES btl (ma_btl),
ADD CONSTRAINT luutru_btl_ibfk_2 FOREIGN KEY (ma_nhom) REFERENCES nhom (ma_nhom);

--
-- Constraints for table `monhoc`
-- Constraints for table monhoc
--
ALTER TABLE `monhoc`
ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);
ALTER TABLE monhoc
ADD CONSTRAINT monhoc_ibfk_1 FOREIGN KEY (ma_nd) REFERENCES nguoidung (ma_nd);

--
-- Constraints for table `nguoidung`
-- Constraints for table nguoidung
--
ALTER TABLE `nguoidung`
ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`ma_pl`) REFERENCES `phanloai` (`ma_pl`);
ALTER TABLE nguoidung
ADD CONSTRAINT nguoidung_ibfk_1 FOREIGN KEY (ma_pl) REFERENCES phanloai (ma_pl);

--
-- Constraints for table `nhom`
-- Constraints for table nhom
--
ALTER TABLE `nhom`
ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);
ALTER TABLE nhom
ADD CONSTRAINT nhom_ibfk_1 FOREIGN KEY (ma_nd) REFERENCES nguoidung (ma_nd);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;