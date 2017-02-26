-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2017 at 10:35 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id_cv` int(11) NOT NULL,
  `Username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Quest` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Time_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Time_add2` varchar(20) NOT NULL,
  `status` varchar(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id_cv`, `Username`, `phone`, `Mail`, `Quest`, `Time_add`, `Time_add2`, `status`) VALUES
(21, 'ebgeb', '', '', 'nrdyndry', '2017-02-26 16:04:33', '', '1'),
(22, 'ihuihu', '', '', 'hbjnlkl', '2017-02-26 16:09:00', '2017/02/25', '1'),
(23, 'vghbkhbj', '', '', 'dcdcdc', '2017-02-26 16:20:07', '', '1'),
(24, 'cdwcwdccdw', '', '', '23d23d23', '2017-02-26 16:20:11', '', '1'),
(25, 'bhbkj', '', '', '76969698', '2017-02-26 16:21:27', '', '1'),
(26, 'bybg', '', '', '976978', '2017-02-26 16:23:06', '', '1'),
(27, 'yuihhuuiho', '', '', '77777', '2017-02-26 16:25:14', '', '1'),
(28, 'yuihhuuiho', '', '', '77777', '2017-02-26 16:25:19', '', '1'),
(29, 'b kbuhkub', '', '', 'jhnnnjj', '2017-02-26 16:25:32', '', '1'),
(30, 'khbjljnl', '', '', 'ybjknlkm', '2017-02-26 16:28:56', '', '1'),
(31, 'bhbjvhgvhf', '', '', 'h khbkhiuol', '2017-02-26 16:29:04', '', '1'),
(33, 'wrgey', '', '', 'tjfgkjbl', '2017-02-26 17:20:49', '', '1'),
(34, 'hhrtj', '', '', 'ykugkhjk', '2017-02-26 17:21:21', '', '0'),
(35, 'fsben', '', '', 'ehtjfhjgh', '2017-02-26 17:26:43', '2017/02/26', '0'),
(36, 'fsben', '', '', 'ehtjfhjgh', '2017-02-26 20:16:09', '2017/02/26', '1'),
(37, 'sfdf', '', '', 'sfhbdgnfm', '2017-02-26 20:24:59', '2017/02/26', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_cv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
