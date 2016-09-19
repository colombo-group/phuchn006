-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 03:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `pk_user_id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(11) NOT NULL DEFAULT '0',
  `quyen` int(11) NOT NULL DEFAULT '0',
  `ngay_tham_gia` date NOT NULL,
  `nguoi_gioi_thieu` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`pk_user_id`, `fullname`, `name`, `email`, `phone`, `img`, `password`, `description`, `ngaysinh`, `gioitinh`, `quyen`, `ngay_tham_gia`, `nguoi_gioi_thieu`) VALUES
(17, 'hoang ngoc phuc abc 123', 'phucuet', 'phuc.uet@gmail.com', '098233232', 'public/images/1473924291book1.png', '202cb962ac59075b964b07152d234b70', '								phucabc\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			', '2015-09-07', 1, 1, '2016-09-14', ''),
(37, '1', '1', '1@gmail', '11122222222', 'public/images/1474215758i3.png', '202cb962ac59075b964b07152d234b70', '																				123					\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			', '2016-09-01', 1, 2, '2016-09-17', ''),
(47, 'f', 'ff', 'f@gmail.com', '34343333333', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '					\r\n			', '2016-09-22', 0, 1, '2016-09-17', '2'),
(48, '123', '123', '3@gmail.com', '1333333333', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '													\r\n				\r\n				\r\n			', '2016-09-30', 0, 0, '2016-09-18', '1'),
(49, '1234', '1234', '1234@gmail', '44444444444', 'public/images/1474290906video.png', '202cb962ac59075b964b07152d234b70', '					\r\n			', '2016-09-07', 0, 0, '2016-09-18', '21'),
(50, '0', '0', '0@gmail', '43434343434', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '					\r\n			', '2016-09-25', 1, 0, '2016-09-19', '0'),
(51, '1', '12', '2@gmail', '0973695777', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', 0, 1, '2016-09-19', '123'),
(52, '123', '13', '123@gmail.com', '11111111111', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', 0, 0, '2016-09-19', '123'),
(53, '-', '-', '-@gmail', '11111111112', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', 0, 0, '2016-09-19', '1'),
(54, '00', '00', '00@gmail', '0000000000', 'public/images/1474290966bg_slide.png', '202cb962ac59075b964b07152d234b70', '					\r\n			', '2016-09-14', 0, 0, '2016-09-19', '1'),
(55, 'hhh', 'hhh', 'hhh@gmail', '55555555555', 'public/images/1.jpg', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', 0, 0, '2016-09-19', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
