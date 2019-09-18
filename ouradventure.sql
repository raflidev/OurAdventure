-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 04:02 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ouradventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'root', 'toor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `name_member` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `name_member`) VALUES
(1, 'Rafli'),
(2, 'Ali'),
(3, 'Raka'),
(5, 'Rizal'),
(6, 'Tegar'),
(7, 'Adha'),
(8, 'Adit'),
(9, 'Janu'),
(11, 'Arie'),
(12, 'Rifqi'),
(13, 'Naufal'),
(14, 'Samuel');

-- --------------------------------------------------------

--
-- Table structure for table `moneybox`
--

CREATE TABLE `moneybox` (
  `id_moneybox` int(11) NOT NULL,
  `id_member` int(5) NOT NULL,
  `money` int(6) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moneybox`
--

INSERT INTO `moneybox` (`id_moneybox`, `id_member`, `money`, `time`) VALUES
(1, 2, 20000, '2019-07-25 10:38:22'),
(2, 11, 50000, '2019-07-25 10:47:36'),
(5, 6, 200000, '2019-07-25 11:23:39'),
(6, 8, 30000, '2019-07-25 15:43:47'),
(7, 7, 5000, '2019-07-25 20:46:14'),
(8, 12, 5000, '2019-07-25 20:55:29'),
(9, 13, 2000, '2019-07-25 20:55:55'),
(10, 9, 10000, '2019-07-25 20:56:10'),
(11, 14, 5000, '2019-07-25 20:56:43'),
(12, 2, 10000, '2019-07-25 20:57:02'),
(13, 12, 5000, '2019-07-26 07:12:08'),
(14, 2, 20000, '2019-07-26 10:19:09'),
(15, 13, 2000, '2019-07-26 10:19:28'),
(16, 8, 10000, '2019-07-26 10:19:45'),
(17, 14, 5000, '2019-07-26 10:19:57'),
(18, 7, 15000, '2019-07-26 10:20:13'),
(19, 9, 10000, '2019-07-26 10:20:34'),
(20, 6, 10000, '2019-07-26 10:20:54'),
(21, 11, 7000, '2019-07-26 10:21:09'),
(22, 1, 2000, '2019-07-27 21:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `name_plan` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `moneybox`
--
ALTER TABLE `moneybox`
  ADD PRIMARY KEY (`id_moneybox`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `moneybox`
--
ALTER TABLE `moneybox`
  MODIFY `id_moneybox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
