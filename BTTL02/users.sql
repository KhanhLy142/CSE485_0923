-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 10:56 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `DateOfBirth` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `Email`, `Mobile`, `DateOfBirth`) VALUES
(1, 'Tadeo MacPike', 'tmacpike0@phpbb.com', 787, '0000-00-00 00:00:00'),
(2, 'Trevor Ballam', 'tballam1@weather.com', 818, '0000-00-00 00:00:00'),
(3, 'Erin Monelli', 'emonelli2@deviantart.com', 321, '0000-00-00 00:00:00'),
(4, 'Arney Partlett', 'apartlett3@smugmug.com', 402, '0000-00-00 00:00:00'),
(5, 'Toddie Cunrado', 'tcunrado4@ed.gov', 467, '0000-00-00 00:00:00'),
(6, 'Dorena Pfeffer', 'dpfeffer5@cbsnews.com', 139, '0000-00-00 00:00:00'),
(7, 'Gwyn Harkness', 'gharkness6@comcast.net', 618, '0000-00-00 00:00:00'),
(8, 'Vikki Aldiss', 'valdiss7@mail.ru', 213, '0000-00-00 00:00:00'),
(9, 'Isa Aluard', 'ialuard8@plala.or.jp', 426, '0000-00-00 00:00:00'),
(10, 'Clywd Lincke', 'clincke9@barnesandnoble.com', 206, '0000-00-00 00:00:00'),
(11, 'Harmonie Galletly', 'hgalletlya@163.com', 870, '0000-00-00 00:00:00'),
(12, 'Rosabelle Bunting', 'rbuntingb@blogger.com', 650, '0000-00-00 00:00:00'),
(13, 'Nollie Cabrera', 'ncabrerac@mapy.cz', 370, '0000-00-00 00:00:00'),
(14, 'Adelle Bolstridge', 'abolstridged@imageshack.us', 984, '0000-00-00 00:00:00'),
(15, 'Towney Trouncer', 'ttrouncere@twitpic.com', 973, '0000-00-00 00:00:00'),
(16, 'Hubie Habert', 'hhabertf@mozilla.org', 218, '0000-00-00 00:00:00'),
(17, 'Mikol Patriskson', 'mpatrisksong@cnet.com', 887, '0000-00-00 00:00:00'),
(18, 'Denney Stelfax', 'dstelfaxh@hhs.gov', 374, '0000-00-00 00:00:00'),
(19, 'Sheffield Rainbird', 'srainbirdi@shutterfly.com', 921, '0000-00-00 00:00:00'),
(20, 'Mordy Pregel', 'mpregelj@1und1.de', 820, '0000-00-00 00:00:00'),
(21, 'Nikolaos Bohlsen', 'nbohlsenk@cyberchimps.com', 805, '0000-00-00 00:00:00'),
(22, 'Amalee Langmuir', 'alangmuirl@shutterfly.com', 234, '0000-00-00 00:00:00'),
(23, 'Yule Fasey', 'yfaseym@icq.com', 832, '0000-00-00 00:00:00'),
(24, 'Olive Shekle', 'osheklen@icq.com', 524, '0000-00-00 00:00:00'),
(25, 'Tadeo MacPike', 'tmacpike0@phpbb.com', 787, '0000-00-00 00:00:00'),
(26, 'Trevor Ballam', 'tballam1@weather.com', 818, '0000-00-00 00:00:00'),
(27, 'Erin Monelli', 'emonelli2@deviantart.com', 321, '0000-00-00 00:00:00'),
(28, 'Arney Partlett', 'apartlett3@smugmug.com', 402, '0000-00-00 00:00:00'),
(29, 'Toddie Cunrado', 'tcunrado4@ed.gov', 467, '0000-00-00 00:00:00'),
(30, 'Dorena Pfeffer', 'dpfeffer5@cbsnews.com', 139, '0000-00-00 00:00:00'),
(31, 'Gwyn Harkness', 'gharkness6@comcast.net', 618, '0000-00-00 00:00:00'),
(32, 'Vikki Aldiss', 'valdiss7@mail.ru', 213, '0000-00-00 00:00:00'),
(33, 'Isa Aluard', 'ialuard8@plala.or.jp', 426, '0000-00-00 00:00:00'),
(34, 'Clywd Lincke', 'clincke9@barnesandnoble.com', 206, '0000-00-00 00:00:00'),
(35, 'Harmonie Galletly', 'hgalletlya@163.com', 870, '0000-00-00 00:00:00'),
(36, 'Rosabelle Bunting', 'rbuntingb@blogger.com', 650, '0000-00-00 00:00:00'),
(37, 'Nollie Cabrera', 'ncabrerac@mapy.cz', 370, '0000-00-00 00:00:00'),
(38, 'Adelle Bolstridge', 'abolstridged@imageshack.us', 984, '0000-00-00 00:00:00'),
(39, 'Towney Trouncer', 'ttrouncere@twitpic.com', 973, '0000-00-00 00:00:00'),
(40, 'Hubie Habert', 'hhabertf@mozilla.org', 218, '0000-00-00 00:00:00'),
(41, 'Mikol Patriskson', 'mpatrisksong@cnet.com', 887, '0000-00-00 00:00:00'),
(42, 'Denney Stelfax', 'dstelfaxh@hhs.gov', 374, '0000-00-00 00:00:00'),
(43, 'Sheffield Rainbird', 'srainbirdi@shutterfly.com', 921, '0000-00-00 00:00:00'),
(44, 'Mordy Pregel', 'mpregelj@1und1.de', 820, '0000-00-00 00:00:00'),
(45, 'Nikolaos Bohlsen', 'nbohlsenk@cyberchimps.com', 805, '0000-00-00 00:00:00'),
(46, 'Amalee Langmuir', 'alangmuirl@shutterfly.com', 234, '0000-00-00 00:00:00'),
(47, 'Yule Fasey', 'yfaseym@icq.com', 832, '0000-00-00 00:00:00'),
(48, 'Olive Shekle', 'osheklen@icq.com', 524, '0000-00-00 00:00:00'),
(49, 'Hildagard Yepiskopov', 'hyepiskopovo@cafepress.com', 509, '0000-00-00 00:00:00'),
(50, 'Maressa Antrobus', 'mantrobusp@paypal.com', 949, '0000-00-00 00:00:00'),
(51, 'Ferris Haughin', 'fhaughinq@mapy.cz', 939, '0000-00-00 00:00:00'),
(52, 'Garret Yanshin', 'gyanshinr@linkedin.com', 539, '0000-00-00 00:00:00'),
(53, 'Monro Hinkens', 'mhinkenss@tiny.cc', 567, '0000-00-00 00:00:00'),
(54, 'Lewiss Jerdon', 'ljerdont@walmart.com', 930, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
