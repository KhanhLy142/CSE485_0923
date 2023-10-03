-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 08:57 PM
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
(1, 'Hành khúc ngày và đêm', 'Hành khúc ngày và đêm', 1, '123', 'Anh đang mùa hành quân, pháo lăn dài chiến dịch. Bồi hồi đêm xuất kích chờ nghe tiếng pháo ran.', 35, '0000-00-00 00:00:00', 'images/songs/Hanhkhucngayvadem.jpg'),
(2, 'Cô gái mở đường', 'Cô gái mở đường', 1, '123', 'Đi dưới trời khuya sao đêm lấp lánh. Tiếng hát ai vang động cây rừng.', 36, '0000-00-00 00:00:00', 'images/songs/cogaimoduong.jpg'),
(3, 'Màu hoa đỏ', 'Màu hoa đỏ', 1, 'Dòng tên anh khắc vào đá núi. Mây ngàn hoá bóng cây che.', 'Dòng tên anh khắc vào đá núi. Mây ngàn hoá bóng cây che.', 37, '0000-00-00 00:00:00', 'images/songs/mauhoado.png'),
(4, 'Đất nước tình yêu', 'Đất nước tình yêu', 1, 'Ôi Việt Nam đất nước tình yêu. Bên luỹ tre xanh xây nhiều công trình.', 'Ôi Việt Nam đất nước tình yêu. Bên luỹ tre xanh xây nhiều công trình.', 38, '0000-00-00 00:00:00', 'images/songs/datnuoctinhyeu.jpg'),
(5, 'Nối lại tình xưa', 'Nối lại tình xưa\r\n', 2, 'Về đây bên nhau, ta nối lại tình xưa. Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm.', 'Về đây bên nhau, ta nối lại tình xưa. Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm.', 39, '0000-00-00 00:00:00', 'images/songs/noilaitinhxua.jpg'),
(6, 'Tình nhỏ mau quên', 'Tình nhỏ mau quên', 2, 'Rồi ngày vui qua mau, anh gửi lại em lời chào. Gửi lại em một mối tình hồng, tình nồng hai đứa yêu nhau.', 'Rồi ngày vui qua mau, anh gửi lại em lời chào. Gửi lại em một mối tình hồng, tình nồng hai đứa yêu nhau.', 41, '0000-00-00 00:00:00', 'images/songs/tinhnhomauquen.jpg'),
(7, 'Vùng lá me bay', 'Vùng lá me bay', 2, 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình. Ngày đó quen nhau vương chút tình trên tóc mây.', 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình. Ngày đó quen nhau vương chút tình trên tóc mây.', 40, '0000-00-00 00:00:00', 'images/songs/vunglamebay.jpg'),
(8, 'Chuyến đi của Thanh Xuân', 'Chuyến đi của Thanh Xuân', 3, 'Đi đi đi và đừng nghĩ suy. Thanh xuân vẫy chào ta cứ đi.', 'Đi đi đi và đừng nghĩ suy. Thanh xuân vẫy chào ta cứ đi.', 43, '0000-00-00 00:00:00', 'images/songs/chuyendicuathanhxuan.jpg'),
(9, 'Mặt mộc', 'Mặt mộc', 3, 'Môi cười xinh như hoa đáng yêu thật thà. Cứ êm đềm thương nhau qua bao nắng mưa.', 'Môi cười xinh như hoa đáng yêu thật thà. Cứ êm đềm thương nhau qua bao nắng mưa.', 44, '0000-00-00 00:00:00', 'images/songs/matmoc.jpg'),
(10, 'Đâu ai dám hứa', 'Đâu ai dám hứa', 3, 'Chiều dần buông tan trường anh đến để chờ nàng thơ đi học ra. Thì ra em đang ngồi trên chiếc xe đạp của ai không phải anh.', 'Chiều dần buông tan trường anh đến để chờ nàng thơ đi học ra. Thì ra em đang ngồi trên chiếc xe đạp của ai không phải anh.', 48, '0000-00-00 00:00:00', 'images/songs/dauaidamhua.jpg'),
(11, 'Đi để trở về', 'Đi để trở về', 3, 'Tôi đang ở một nơi rất xa. Nơi không có khói bụi thành phố. Ở một nơi đẹp như mơ.', 'Tôi đang ở một nơi rất xa. Nơi không có khói bụi thành phố. Ở một nơi đẹp như mơ.', 49, '0000-00-00 00:00:00', 'images/songs/didetrove.jpg'),
(12, 'Khi cơn mưa dần phai', 'Khi cơn mưa dần phai', 4, 'Ở phía trước từng đoạn đường anh đi. Rồi sẽ có ai thay em nắm tay anh.', 'Ở phía trước từng đoạn đường anh đi. Rồi sẽ có ai thay em nắm tay anh.', 42, '0000-00-00 00:00:00', 'images/songs/khiconmuadanphai.jpg'),
(13, 'Một ngày chẳng nắng', 'Một ngày chẳng nắng', 4, 'Một ngày chẳng nắng, chẳng mưa, chẳng gì. Ngồi lại một chút, tai phone thầm thì. Chuyện kể về chú voi con lầm lì ngay tại Bản Đôn.', 'Một ngày chẳng nắng, chẳng mưa, chẳng gì. Ngồi lại một chút, tai phone thầm thì. Chuyện kể về chú voi con lầm lì ngay tại Bản Đôn.', 45, '0000-00-00 00:00:00', 'images/songs/motngaychangnang.jpg'),
(14, 'Xin đừng nhấc máy', 'Xin đừng nhấc máy', 4, 'Anh biết là em nói là không muốn gặp anh nữa. Anh chỉ gọi để hỏi, cơm hôm nay ăn chưa?', 'Anh biết là em nói là không muốn gặp anh nữa. Anh chỉ gọi để hỏi, cơm hôm nay ăn chưa?', 46, '0000-00-00 00:00:00', 'images/songs/xindungnhacmay.jpg'),
(15, 'Tình bạn diệu kỳ', 'Tình bạn diệu kỳ', 4, 'Ta đã ở bên nhau. Những năm tháng nhọc nhằn. You make me feel like... I got everything', 'Ta đã ở bên nhau. Những năm tháng nhọc nhằn. You make me feel like... I got everything', 47, '0000-00-00 00:00:00', 'images/songs/tinhbandieuky.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `FullName`, `Email`, `Mobile`, `Password`) VALUES
(1, 'Lydie Shilito', 'lshilito0@craigslist.org', 497, 0),
(2, 'Frankie Coston', 'fcoston1@clickbank.net', 502, 0),
(3, 'Andree Eggle', 'aeggle2@bbb.org', 259, 0),
(4, 'Marlow Syer', 'msyer3@house.gov', 542, 0),
(5, 'Ulri Seifenmacher', 'fenmacher4@craigslist.org', 645, 0),
(6, 'Laurice Kynton', 'lkynton5@google.pl', 600, 0),
(7, 'Gradey Simonassi', 'gsimonassi6@1und1.de', 394, 0),
(8, 'Isis Smallpeace', 'ismallpeace7@hatena.ne.jp', 870, 0),
(9, 'Delainey Greenham', 'dgreenham8@oracle.com', 978, 0),
(10, 'Maryjo Labusch', 'mlabusch9@hubpages.com', 306, 0),
(11, 'Ellene Lowman', 'elowman0@t-online.de', 383, 0),
(12, 'Florida Richardes', 'frichardes1@behance.net', 873, 0),
(13, 'Keary Bonnet', 'kbonnet2@timesonline.co.uk', 691, 0),
(14, 'Hermann Challenger', 'hchallenger3@g.co', 356, 0),
(15, 'Juli Bramsen', 'jbramsen4@hao123.com', 260, 0),
(16, 'Simone Dowgill', 'sdowgill5@dailymail.co.uk', 207, 0),
(17, 'Reinald Luckin', 'rluckin6@ihg.com', 460, 0),
(18, 'Juan Neeves', 'jneeves7@state.gov', 335, 0),
(19, 'Wittie Danilov', 'wdanilov8@opera.com', 843, 0),
(20, 'Patty Mandrake', 'pmandrake9@typepad.com', 222, 0);

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
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

