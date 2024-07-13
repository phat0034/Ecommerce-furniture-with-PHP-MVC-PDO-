-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 08:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcmt` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhh` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcmt`, `idkh`, `idhh`, `noidung`, `ngaytao`) VALUES
(1, 6, 1, 'Test 1', '2024-05-30'),
(3, 6, 1, 'abc', '2024-05-30'),
(4, 6, 2, 'đẹp quá !!!!', '2024-05-30'),
(5, 5, 1, 'Aỏ thật đấy\r\n', '2024-05-31'),
(6, 5, 2, 'tuyệt cà là vời ', '2024-05-31'),
(7, 5, 1, 'món này xấu', '2024-06-02'),
(8, 6, 1, 'xau qua 12931293712cop5j12cn5u12521cqwhtio', '2024-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhh` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhh`, `idmau`, `dongia`, `giamgia`) VALUES
(1, 2, 4500000, 15000000),
(1, 3, 15000000, 0),
(1, 4, 11000000, 0),
(1, 5, 12000000, 0),
(2, 1, 23000000, 22500000),
(2, 2, 23000000, 22500000),
(2, 3, 23000000, 22500000),
(2, 5, 23000000, 22500000),
(2, 6, 23000000, 22500000),
(3, 1, 1600000, 0),
(4, 2, 3600000, 0),
(4, 9, 4000000, 3200000),
(5, 1, 1300000, 0),
(6, 2, 2350000, 0),
(7, 1, 1950000, 0),
(7, 3, 1950000, 0),
(7, 9, 1950000, 0),
(8, 2, 550000, 0),
(9, 3, 650000, 0),
(10, 1, 350000, 0),
(11, 2, 650000, 0),
(13, 1, 650000, 0),
(14, 1, 550000, 0),
(14, 2, 550000, 0),
(14, 5, 550000, 0),
(14, 6, 550000, 0),
(15, 9, 850000, 0),
(16, 2, 765000, 0),
(16, 4, 765000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `idhd` int(11) NOT NULL,
  `idhh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`idhd`, `idhh`, `soluongmua`, `mausac`, `thanhtien`) VALUES
(30, 1, 0, '[value-4]', 0),
(102, 1, 20, 'Grey', 300000000),
(103, 1, 20, 'Grey', 300000000),
(104, 1, 20, 'Grey', 300000000),
(105, 1, 20, 'Grey', 300000000),
(106, 1, 20, 'Grey', 300000000),
(107, 1, 2, 'Red', 22000000),
(108, 1, 2, 'Red', 22000000),
(109, 1, 1, 'Black', 12000000),
(110, 1, 1, 'Black', 12000000),
(111, 1, 1, 'Black', 12000000),
(111, 2, 1, 'Grey', 23000000),
(111, 2, 1, 'White', 23000000),
(112, 1, 1, 'Red', 11000000),
(112, 1, 1, 'Blue', 12000000),
(112, 1, 1, 'Black', 12000000),
(112, 2, 1, 'Black', 23000000),
(112, 2, 1, 'Blue', 23000000),
(112, 2, 1, 'Green', 23000000),
(113, 1, 2, 'Grey', 30000000),
(113, 1, 1, 'Red', 11000000),
(113, 1, 1, 'Blue', 12000000),
(113, 1, 1, 'Black', 4500000),
(114, 2, 30, 'Green', 690000000);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `idhh` int(11) NOT NULL,
  `tenhh` varchar(255) NOT NULL,
  `maloai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `ngaytao` date NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`idhh`, `tenhh`, `maloai`, `soluong`, `mota`, `ngaytao`, `soluotxem`, `hinh`) VALUES
(1, 'Sofa Đơn', 1, 25, 'Sofa đơn là một loại ghế nhỏ, tiện dụng và thoải mái cho một người ngồi. Với kích thước nhỏ gọn, nó phù hợp cho không gian sống nhỏ hoặc phòng riêng tư. Sofa đơn có thiết kế đơn giản, phù hợp với nhiều phòng khách, phòng ngủ hoặc phòng làm việc. Nó cung cấp một nơi ngồi thoải mái để đọc sách, xem phim hoặc thư giãn sau một ngày làm việc căng thẳng. Với sự đa dạng về thiết kế và chất liệu, sofa đơn có thể tuỳ chỉnh để phù hợp với phong cách trang trí và màu sắc của không gian. Nó là một lựa chọn thông minh để tạo điểm nhấn và bổ sung không gian ngồi riêng tư trong ngôi nhà của bạn. ', '2024-05-13', 0, 'sofa\\sofa1seater\\'),
(2, 'Sofa Đôi', 1, 25, 'Sofa đôi phù hợp với tất cả phong cách ', '2024-05-13', 0, 'sofa\\sofa2seater\\'),
(3, 'Bồn rửa tay nhỏ', 6, 25, 'Bồn rửa tay nhỏ phù hợp với tất cả phong cách', '0000-00-00', 0, 'bồn rửa tay/Bồnrửataynhỏ/'),
(4, 'Bồn rửa tay to', 6, 25, 'Bồn rửa tay lớn phù hợp với tất cả phong cách', '0000-00-00', 0, 'bồn rửa tay/Bồnrửatayto/'),
(5, 'Bàn học nhỏ', 3, 45, 'Bàn học tiện lợi nhỏ gọn', '0000-00-00', 0, 'bàn/Bànhọcnhỏ/'),
(6, 'Bồn rửa tay to hiện đại', 6, 25, 'Bồn rửa tay to, thiết kế phong hiện đại', '0000-00-00', 0, 'bồn rửa tay/Bồnrửataytohiệnđại/'),
(7, 'Bồn rửa tay trung phong cách', 6, 15, 'Bồn rửa tay trung, thiết kế phong hiện đại', '0000-00-00', 0, 'bồn rửa tay/Bồnrửataytrungphongcách/'),
(8, 'Đèn 3 bóng', 7, 100, 'Đèn trang trí 3 bóng siêu đẹp và hiện đại', '0000-00-00', 0, 'đèn/Đèn3bóng/'),
(9, 'Đèn chùm', 7, 75, 'Đèn chùm 3 bóng siêu đẹp và hiện đại', '0000-00-00', 0, 'đèn/Đènchùm/'),
(10, 'Đèn đọc sách', 7, 60, 'Đèn đọc sách bảo vệ mắt  siêu đẹp và hiện đại', '0000-00-00', 0, 'đèn/Đènđọcsách/'),
(11, 'Đèn ngủ', 7, 60, 'Đèn ngủ  siêu đẹp và hiện đại', '0000-00-00', 0, 'đèn/Đènngủ/'),
(13, 'Đèn ngủ sang trọng', 7, 60, 'Đèn ngủ cổ điển siêu đẹp và hiện đại', '0000-00-00', 0, 'đèn/Đènngủsangtrọng/'),
(14, 'Ghế tựa 4 chân đơn giản', 2, 60, 'Ghế ngồi tiện lợi nhỏ gọn', '0000-00-00', 0, 'ghế/Ghếtựa4chânđơngiản/'),
(15, 'Ghế tựa 4 chân chất liệu gỗ', 2, 120, 'Ghế tựa 4 chân chất liệu gỗ sang trọng quý phái', '0000-00-00', 0, 'ghế/Ghếtựa4chânchấtliệugỗ/'),
(16, 'Ghế tựa đơn giản', 2, 300, 'Ghế ngồi tiện lợi nhỏ gọn', '0000-00-00', 0, 'ghế/Ghếtựađơngiản/');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `idkh`, `ngaydat`, `tongtien`, `trangthai`) VALUES
(84, 6, '2024-05-28', 0, 0),
(100, 6, '2024-05-30', 0, 1),
(101, 6, '2024-05-30', 470000000, 0),
(102, 6, '2024-05-30', 0, 0),
(103, 6, '2024-05-30', 0, 0),
(104, 6, '2024-05-30', 0, 0),
(105, 6, '2024-05-30', 0, 0),
(106, 6, '2024-05-30', 0, 0),
(107, 5, '2024-05-31', 0, 0),
(108, 5, '2024-05-31', 0, 0),
(109, 5, '2024-06-02', 0, 0),
(110, 5, '2024-06-02', 0, 0),
(111, 6, '2024-06-02', 58000000, 0),
(112, 6, '2024-06-05', 104000000, 0),
(113, 14, '2024-06-08', 57500000, 0),
(114, 14, '2024-06-20', 690000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `username`, `password`, `email`, `diachi`, `sodienthoai`, `role`) VALUES
(4, 'test003', 'abfe0bee82a1ed49eaf0543545781507', 'cf.log.bro36@gmail.com', 'test003', '0825757989', 0),
(5, 'test004', '04c4b17b25879b73a33565a7c97554f6', 'cf.log.bro36@gmail.com', 'test004', '0825757989', 1),
(6, 'test005', '84fcca8d1caffc657e72cd2f4ec324cd', 'cf.log.bro36@gmail.com', '123 abc', '0825757989', 1),
(14, 'admin1', '10ef34acc6692f8fff55574e120b855a', 'cf.log.bro36@gmail.com', '120 trịnh đình thảo, quận tân phú, tp hcm', '1234567890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
(1, 'Sofa'),
(2, 'Ghế'),
(3, 'Bàn'),
(4, 'Giường'),
(5, 'Kệ'),
(6, 'Bồn rửa tay'),
(7, 'Đèn');

-- --------------------------------------------------------

--
-- Table structure for table `mausac`
--

CREATE TABLE `mausac` (
  `idmau` int(11) NOT NULL,
  `tenmau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mausac`
--

INSERT INTO `mausac` (`idmau`, `tenmau`) VALUES
(1, 'White'),
(2, 'Black'),
(3, 'Grey'),
(4, 'Red'),
(5, 'Blue'),
(6, 'Green'),
(7, 'Purple'),
(8, 'Yellow'),
(9, 'Brown');

-- --------------------------------------------------------

--
-- Table structure for table `supportservice`
--

CREATE TABLE `supportservice` (
  `idht` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngaytao` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportservice`
--

INSERT INTO `supportservice` (`idht`, `tenkh`, `sdt`, `email`, `noidung`, `ngaytao`, `trangthai`) VALUES
(3, 'Nguyễn Minh Phát', '0825757989', 'cf.log.bro36@gmail.com', '123', '2024-06-04', 1),
(4, 'Nguyễn Minh B', '0825757982', 'cf.log.bro36@gmail.com', 'toi can lien he ', '2024-06-05', 1),
(5, 'Nguyễn Minh Phát', '0825757989', 'cf.log.bro36@gmail.com', 'tôi cần hỗ trợ', '2024-06-10', 0),
(6, 'Nguyễn Minh Phát', '1234567890', 'cf.log.bro36@gmail.com', 'tôi cần trợ giúp', '2024-06-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `idwl` int(11) NOT NULL,
  `idhh` int(11) NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`idwl`, `idhh`, `idkh`) VALUES
(10, 1, 0),
(11, 1, 0),
(17, 1, 5),
(18, 1, 6),
(20, 8, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcmt`);

--
-- Indexes for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhh`,`idmau`),
  ADD KEY `idmau` (`idmau`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD KEY `idhh` (`idhh`,`idhd`) USING BTREE;

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`idhh`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `idkh` (`idkh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`idmau`);

--
-- Indexes for table `supportservice`
--
ALTER TABLE `supportservice`
  ADD PRIMARY KEY (`idht`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`idwl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `idhh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mausac`
--
ALTER TABLE `mausac`
  MODIFY `idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supportservice`
--
ALTER TABLE `supportservice`
  MODIFY `idht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `idwl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD CONSTRAINT `cthanghoa_ibfk_1` FOREIGN KEY (`idhh`) REFERENCES `hanghoa` (`idhh`),
  ADD CONSTRAINT `cthanghoa_ibfk_2` FOREIGN KEY (`idmau`) REFERENCES `mausac` (`idmau`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`idkh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
