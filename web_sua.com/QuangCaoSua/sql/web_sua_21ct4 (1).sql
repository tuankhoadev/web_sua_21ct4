-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 09:58 PM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `hoten`, `email`, `sodienthoai`, `diachi`, `matkhau`) VALUES
(1, 'tuan khoa', 'tuankhoa@gmail.com', 338133849, 'binh dinh', '$2y$10$FSXd83LmRO6TgUdnvYgdg.nkZtLE4ZeI5W/u53Adwcz1fmnQ5Orgy');

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `id` int(11) NOT NULL,
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

INSERT INTO `sua` (`id`, `masua`, `tensua`, `hangsua`, `loaisua`, `trongluong`, `dongia`, `loiich`, `thanhphandinhduong`, `hinhanh`) VALUES
(1, 'abb2', 'sữa', 'Abbott', 'sữa tươi', '2000 gram', '250000 VND', 'không có', 'không có', ''),
(2, 'dl1', 'Sữa Tươi', 'Dutch Lady', 'sữa tươi', '180 gram', '3.600 VNĐ', 'khong co', 'không có', ''),
(3, 'dl2', 'Sữa đặc', 'Dutch Lady', 'sữa tươi', '1000 gram', '72.000 VNĐ', 'không có', 'không có', ''),
(4, 'vnm1', 'Sữa Tươi', 'Vinamilk', 'sữa tươi', '180 gram', '55.000 VNĐ', 'khong co', 'không có', ''),
(5, 'vnm2', 'Sữa Chua ND', 'Vinamilk', 'sữa tươi', '150 gram', '3.600 VNĐ', 'khong co', 'không có', ''),
(6, 'vnm3', 'Sữa Đặc', 'Vinamilk', 'sữa tươi', '500 gram', '25.000 VNĐ', 'không có', 'không có', ''),
(7, 'vnm4', 'Sữa Đặc', 'Vinamilk', 'sữa tươi', '500 gram', '30.000 VNĐ', 'khong co', 'khong co', ''),
(8, 'abb1', 'Sữa bột', 'Abbott', 'sữa tươi', '1000 gram', '250.000 VND ', 'không có', 'không có', ''),
(9, 'dmex1', 'sữa bột', 'Dumex', 'sữa tươi', '1000 gram', '250000 VND', 'không có', 'không có', ''),
(10, 'dmex2', 'sữa hộp', 'Dumex', 'sữa tươi', '500 gram', '65.000 VND', 'không có', 'không có', ''),
(11, 'ntf1', 'Sữa Bột', 'Nutifood', 'sữa tươi', '1000 gram', '155.000 VND', 'không có', 'không có', ''),
(12, 'ntf2', 'Sữa Chai', 'Nutifood', 'sữa tươi', '350 ml', '15.000 VND', 'không có', 'không có', ''),
(13, 'ntf3', 'sữa tươi', 'Nutifood', 'sữa tươi', '250 ml', '10.000 VND', 'không có', 'không có', '');

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
(0, 'KH155', 'Giáp Huỳnh Tuấn Khoa', ' Nam ', '59 vo van dung', 55524666, 'tuankhoa11062003@gmail.com'),
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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sua`
--
ALTER TABLE `sua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
