-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 06:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6774196_makanco`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_lname` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_img` varchar(60) NOT NULL,
  `user_gender` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_img`, `user_gender`) VALUES
(82, 'Mos', 'Tafa', 'Mos1534277642', 'mos@gmail.com', '0', '1ba03', '1534277701_82.png', 'm'),
(81, 'Abdo', 'kandil', 'Abdo1534143420', 'abdo.441@hotmail.com', '0', '1ba03', 'admin.png', '0'),
(80, 'mora', 'eid', 'mora3id', 'marwaenma@gmail.com', '01100023292', '1ea18', '1534138034_80.png', 'f'),
(79, 'Assas', 'Sjshdhd', 'Assas1534116900', 'kdhdh@jbk.com', '0', '1ba03', '1534116960_79.png', '0'),
(78, 'fouda', 'ahmed', 'fouda1534113736', 'gogo@gogo.com', '0', '1ba03', '1534113802_78.png', '0'),
(77, 'HhhhKhalid', 'Msilmany', 'Khalid1534090124', 'khaled.aivr@gmail.com', '8555252110', '1ba03', '1534090595_77.png', 'f'),
(83, 'rtyhrt', 'fghfg', 'rtyhrt1535529918', 'frtthjtr@fgnf.com', '0', '1ba03', '1535529961_83.png', '0'),
(84, 'fgn', 'ghnmt', 'fgn1536764323', 'trgnr@fgghnt.com', '0', '1ba03', 'admin.png', '0'),
(85, 'Ghgghf', 'Ghtgh', 'Ghgghf1536956927', 'kaled.aivr@gmail.com', '0', 'a665b', '1536957093_85.png', '0'),
(86, 'salah', 'khalid', 'salah1537006224', 'GDNRFG@EFGJE.COM', '0', 'a665b', '1537006252_86.png', '0'),
(87, 'vhngh', 'gnfgmf', 'fgnfd1537362953', 'gfghjogo@gogo.com', '0', '1ba03', '1537367351_87.png', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
