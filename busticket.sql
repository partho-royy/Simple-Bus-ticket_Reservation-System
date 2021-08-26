-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 06:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `tripid` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `transaction`, `sid`, `tripid`, `date`, `amount`, `status`) VALUES
(8, '65623265623323', '2', '1 ', '', '', ''),
(9, '65623265623323', '2', '1 ', '', '', ''),
(10, '65623265623323', '2', '1 ', '', '', ''),
(11, '65623265623323', '2', '1 ', '', '', ''),
(12, '256523323323232', '2', '1 ', '2019-07-31 ', '1800', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `fare` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `tripid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `seat`, `fare`, `sid`, `status`, `date`, `time`, `tripid`) VALUES
(178, 'A2', '600 ', '1 ', 1, '2019-07-24 ', '10am ', '1'),
(179, 'A3', '600 ', '1 ', 1, '2019-07-24 ', '10am ', '1'),
(237, 'B2', '600 ', '2 ', 1, '2019-07-11 ', '10am ', '1'),
(238, 'B4', '600 ', '2 ', 1, '2019-07-11 ', '10am ', '1'),
(239, 'D3', '600 ', '2 ', 1, '2019-07-11 ', '10am ', '1'),
(240, 'A2', '600 ', '2 ', 1, '2019-07-31 ', '10am ', '1'),
(241, 'C3', '600 ', '2 ', 1, '2019-07-31 ', '10am ', '1'),
(242, 'C1', '600 ', '2 ', 1, '2019-07-31 ', '10am ', '1'),
(243, 'E3', '600 ', '2 ', 0, '2019-07-31 ', '10am ', '1'),
(244, 'F2', '600 ', '2 ', 0, '2019-07-31 ', '10am ', '1'),
(245, 'F4', '600 ', '2 ', 0, '2019-07-31 ', '10am ', '1'),
(247, 'A3', '200 ', '6 ', 0, '2019-08-16 ', '2pm ', '3'),
(248, 'B3', '200 ', '6 ', 0, '2019-08-16 ', '2pm ', '3'),
(252, 'C3', '200 ', '6 ', 0, '2019-08-15 ', '2pm ', '3'),
(253, 'B3', '200 ', '6 ', 0, '2019-08-15 ', '2pm ', '3'),
(254, 'C3', '200 ', '6 ', 0, '2019-08-14 ', '2pm ', '3'),
(255, 'B3', '200 ', '6 ', 0, '2019-08-14 ', '2pm ', '3'),
(256, 'G2', '200 ', '6 ', 0, '2019-08-14 ', '2pm ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `one` varchar(255) NOT NULL,
  `two` varchar(255) NOT NULL,
  `three` varchar(255) NOT NULL,
  `four` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `one`, `two`, `three`, `four`) VALUES
(1, 'A1', 'A2', 'A3', 'A4'),
(2, 'B1', 'B2', 'B3', 'B4'),
(3, 'C1', 'C2', 'C3', 'C4'),
(4, 'D1', 'D2', 'D3', 'D4'),
(5, 'E1', 'E2', 'E3', 'E4'),
(6, 'F1', 'F2', 'F3', 'F4'),
(7, 'G1', 'G2', 'G3', 'G4'),
(8, 'H1', 'H2', 'H3', 'H4'),
(9, 'I1', 'I2', 'I3', 'I4'),
(10, 'J1', 'J2', 'J3', 'J4');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `too` varchar(255) NOT NULL,
  `fare` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `fromm`, `too`, `fare`, `time`) VALUES
(3, 'Dinajpur', 'Rajshahi', '200', '2pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'tunna', 'email@email.com', 'tunna', '01798562356'),
(2, 'mamun', 'mamun@gmail.com', 'mamun', '8801785656565'),
(3, 'new testing', 'test@gmail.com', 'Asdfg123', '8801125866565'),
(4, 'new testing', 'test@gmail.com', 'Asdfg123', '8801125866565'),
(5, 'new testing', 'test@gmail.com', 'Asdfg123', '8801125866565'),
(6, 'Single', 'test2@gmail.com', 'Asdfg123', '8801795005235');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
