-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 09:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sua_21ct4`
--

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `id` int(254) NOT NULL,
  `sott` int(255) NOT NULL,
  `masua` char(5) NOT NULL,
  `tensua` varchar(30) NOT NULL,
  `hangsua` varchar(30) NOT NULL,
  `loaisua` varchar(50) NOT NULL,
  `trongluong` text NOT NULL,
  `dongia` varchar(30) NOT NULL,
  `loiich` varchar(150) NOT NULL,
  `thanhphandinhduong` varchar(150) NOT NULL,
  `hinhanh` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sua`
--

INSERT INTO `sua` (`id`, `sott`, `masua`, `tensua`, `hangsua`, `loaisua`, `trongluong`, `dongia`, `loiich`, `thanhphandinhduong`, `hinhanh`) VALUES
(1, 1, 'dl1', 'sua bo', 'Vinamilk', 'sữa tươi', '170 gram', '3.600 VNĐ', 'khong co', 'khong co', ''),
(2, 2, 'dl1', '', 'Vinamilk', '0', '190 gram', '3.600 VNĐ', 'khong co', 'khong co', ''),
(3, 3, 'dl1', '', 'Vinamilk', '0', '190 gram', '3.600 VNĐ', 'khong co', 'khong co', ''),
(4, 4, 'dl1', '', 'Vinamilk', '0', '190 gram', '3.600 VNĐ', 'khong co', 'khong co', ''),
(5, 5, 'dl1', '', 'Vinamilk', '0', '190 gram', '3.600 VNĐ', 'khong co', 'khong co', ''),
(6, 6, 'dl1', '', 'Vinamilk', '0', '190 gram', '3.600 VNĐ', 'khong co', 'khong co', ''),
(7, 7, 'dl1', '', 'Vinamilk', '0', '190 gram', '3.600 VNĐ', 'khong co', 'khong co', '');

-- --------------------------------------------------------

--
-- Table structure for table `themmoi`
--

CREATE TABLE `themmoi` (
  `id` int(11) NOT NULL,
  `masua` char(5) NOT NULL,
  `mahang` char(5) NOT NULL,
  `loiich` varchar(255) NOT NULL,
  `thanhphandinhduong` varchar(255) NOT NULL,
  `hinhanh` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `themmoi`
--

INSERT INTO `themmoi` (`id`, `masua`, `mahang`, `loiich`, `thanhphandinhduong`, `hinhanh`) VALUES
(1, 'UTF88', 'DL', 'khong co', 'khong co', '');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinhs`
--

CREATE TABLE `thongtinhs` (
  `id` int(255) NOT NULL,
  `mahs` varchar(10) NOT NULL,
  `tenhangsua` varchar(30) NOT NULL,
  `diachi` text NOT NULL,
  `dienthoai` int(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thongtinhs`
--

INSERT INTO `thongtinhs` (`id`, `mahs`, `tenhangsua`, `diachi`, `dienthoai`, `email`) VALUES
(1, 'VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', 8794561, 'vinamilk@vnm.com'),
(2, 'NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', 32195117, 'nutifood@ntf.com'),
(3, 'AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', 8741258, 'abbott@ab.com'),
(4, 'DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', 5789321, 'daisy@ds.com'),
(5, 'DL', 'Dutch Lady', 'Khu công nghiệp Biên Hoà - Đồng Nai', 69514785, 'dutchlady@dl.com'),
(6, 'DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', 6925847, 'dumex@dm.com'),
(7, 'MJ', 'Mead Jonhson', 'Công ty nhập khẩu Việt Nam', 69254183, 'meadjonhson@mj.com');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachhang`
--

CREATE TABLE `thongtinkhachhang` (
  `id` int(11) NOT NULL,
  `makh` varchar(10) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` int(30) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thongtinkhachhang`
--

INSERT INTO `thongtinkhachhang` (`id`, `makh`, `tenkh`, `gioitinh`, `diachi`, `sodienthoai`, `email`) VALUES
(1, 'KH001', 'Khuất Thuỳ Phương', ' Nữ', 'A21 Nguyễn Oanh Quận Gò Vấp', 9625861, 'ktphuong@gamil.com'),
(2, 'KH002', 'Đỗ Lâm Thiên', 'Nam', '157 Lê Hồng Phong Quận 10', 36952147, 'dlthien@gmail.com'),
(3, 'KH003', 'Nguyễn Hữu Thiện', 'Nam', '182 Núi Thành Quận Hải Châu', 3692635, 'nhthien@gmail.com'),
(4, 'KH004', 'Nguyễn Thị Tuyết Mơ', 'Nữ', '79 Thái Văn Lung', 2695847, 'nttmo@gmail.com'),
(5, 'KH005', 'Nguyễn Thị Cẩm Nhung', 'Nữ', '79 Trần Hưng Đạo TP.Tuy Hoà', 26958741, 'ntcnhung@gmail.com'),
(6, 'KH006', 'Nguyễn Kiến Thi', 'Nam', '357 Lê Hồng Phong Q.10', 3696542, 'nkthi@gmail.com'),
(7, 'KH007', 'Nguyễn Anh Tuấn', ' Nam ', '69 Trần Hưng Đạo TP.Tuy Hoà', 59635814, 'natuan@gmail.com'),
(8, 'KH008', 'Võ Đào Nguyên Giáp', ' Nam ', 'Phú Yên', 387885366, 'vdngiap@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themmoi`
--
ALTER TABLE `themmoi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `mahang` (`mahang`);

--
-- Indexes for table `thongtinhs`
--
ALTER TABLE `thongtinhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `themmoi`
--
ALTER TABLE `themmoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `themmoi`
--
ALTER TABLE `themmoi`
  ADD CONSTRAINT `themmoi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sua` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
