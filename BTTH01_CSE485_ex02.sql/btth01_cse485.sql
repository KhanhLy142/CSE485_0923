-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 08:49 PM
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
-- Database: `btth01_cse485`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ngayviet` datetime NOT NULL,
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'abc', 'Hành khúc ngày và đêm', 1, '123', 'Anh đang mùa hành quân, pháo lăn dài chiến dịch. Bồi hồi đêm xuất kích chờ nghe tiếng pháo ran.', 35, '0000-00-00 00:00:00', '[456'),
(2, 'abc', 'Cô gái mở đường', 1, '123', 'Đi dưới trời khuya sao đêm lấp lánh. Tiếng hát ai vang động cây rừng.', 36, '0000-00-00 00:00:00', '[456'),
(3, 'abc', 'Màu hoa đỏ', 1, '123', 'Dòng tên anh khắc vào đá núi. Mây ngàn hoá bóng cây che.', 37, '0000-00-00 00:00:00', '[456'),
(4, 'abc', 'Đất nước tình yêu', 1, '123', 'Ôi Việt Nam đất nước tình yêu. Bên luỹ tre xanh xây nhiều công trình.', 38, '0000-00-00 00:00:00', '[456'),
(5, 'abc', 'Nối lại tình xưa', 2, '123', 'Về đây bên nhau, ta nối lại tình xưa. Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm.', 39, '0000-00-00 00:00:00', '[456'),
(6, 'abc', 'Tình nhỏ mau quên', 2, '123', 'Rồi ngày vui qua mau, anh gửi lại em lời chào. Gửi lại em một mối tình hồng, tình nồng hai đứa yêu nhau.', 41, '0000-00-00 00:00:00', '[456'),
(7, 'abc', 'Vùng lá me bay', 2, '123', 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình. Ngày đó quen nhau vương chút tình trên tóc mây.', 40, '0000-00-00 00:00:00', '[456'),
(8, 'abc', 'Chuyến đi của Thanh Xuân', 3, '123', 'Đi đi đi và đừng nghĩ suy. Thanh xuân vẫy chào ta cứ đi.', 43, '0000-00-00 00:00:00', '[456'),
(9, 'abc', 'Mặt mộc', 3, '123', 'Môi cười xinh như hoa đáng yêu thật thà. Cứ êm đềm thương nhau qua bao nắng mưa.', 44, '0000-00-00 00:00:00', '[456'),
(10, 'abc', 'Đâu ai dám hứa', 3, '123', 'Chiều dần buông tan trường anh đến để chờ nàng thơ đi học ra. Thì ra em đang ngồi trên chiếc xe đạp của ai không phải anh.', 48, '0000-00-00 00:00:00', '[456'),
(11, 'abc', 'Đi để trở về', 3, '123', 'Tôi đang ở một nơi rất xa. Nơi không có khói bụi thành phố. Ở một nơi đẹp như mơ.', 49, '0000-00-00 00:00:00', '[456'),
(12, 'abc', 'Khi cơn mưa dần phai', 4, '123', 'Ở phía trước từng đoạn đường anh đi. Rồi sẽ có ai thay em nắm tay anh.', 42, '0000-00-00 00:00:00', '[456'),
(13, 'abc', 'Một ngày chẳng nắng', 4, '123', 'Một ngày chẳng nắng, chẳng mưa, chẳng gì. Ngồi lại một chút, tai phone thầm thì. Chuyện kể về chú voi con lầm lì ngay tại Bản Đôn.', 45, '0000-00-00 00:00:00', '[456'),
(14, 'abc', 'Xin đừng nhấc máy', 4, '123', 'Anh biết là em nói là không muốn gặp anh nữa. Anh chỉ gọi để hỏi, cơm hôm nay ăn chưa?', 46, '0000-00-00 00:00:00', '[456'),
(15, 'abc', 'Tình bạn diệu kỳ', 4, '123', '', 47, '0000-00-00 00:00:00', '[456');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(35, 'Phan Huỳnh Điểu', 'abc'),
(36, 'Xuân Giao', 'abc'),
(37, 'Thuận Yến', 'abc'),
(38, 'Trần Lệ Giang', 'abc'),
(39, 'Vinh Sử', 'abc'),
(40, 'Anh Việt Thanh', 'abc'),
(41, 'Hàn Châu', 'abc'),
(42, 'Tez', 'abc'),
(43, 'Khắc Hưng', 'abc'),
(44, 'Phạm Nguyên Ngọc', 'abc'),
(45, 'Pháo', 'abc'),
(46, 'B Ray', 'abc'),
(47, 'Lăng LD', 'abc'),
(48, 'Czee', 'abc'),
(49, 'Soobin Hoàng Sơn', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
(1, 'Nhạc cách mạng'),
(2, 'Nhạc trữ tình'),
(3, 'Nhạc trẻ'),
(4, 'Nhạc rap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tgia` (`ma_tgia`),
  ADD KEY `ma_tloai` (`ma_tloai`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ma_bviet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `ma_tgia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ma_tloai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `ma_tgia` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`),
  ADD CONSTRAINT `ma_tloai` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
