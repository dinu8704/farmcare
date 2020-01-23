-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 27, 2019 at 09:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `passwordconfirm` varchar(40) NOT NULL,
  `img1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `mobile`, `email`, `password`, `passwordconfirm`, `img1`) VALUES
(9, 'dinu', '7262005530', 'dinu@gmail.com', '123', '123', 'dinu2.png');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `username`, `password`) VALUES
(1, 'suraj', 'suraj123');

-- --------------------------------------------------------

--
-- Table structure for table `squery`
--

CREATE TABLE `squery` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `service` varchar(50) NOT NULL,
  `acre` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `squery`
--

INSERT INTO `squery` (`id`, `name`, `mobile`, `address`, `service`, `acre`, `message`) VALUES
(1, 'd', 'd', 'ddd@gmail.com', 'Adrak', '3-5 Acre', 'df'),
(2, 'sai', '232332323', 'mundwadi', 'Adrak', '0-1 Acre', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `stable`
--

CREATE TABLE `stable` (
  `id` int(10) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `date1` varchar(20) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `farname` varchar(40) NOT NULL,
  `faraddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stable`
--

INSERT INTO `stable` (`id`, `img1`, `img2`, `date1`, `date2`, `desc`, `farname`, `faraddress`) VALUES
(5, 'adrak4.jpg', 'adrak4.jpg', '12 oct 2019', '10 dev 2019', 'using many product but how to use and growth plant .the i was suggest you also suraj rajput is best advaice .', 'suraj Rajput', 'At. post. mundwadi tq. kannad dist. aurangabad'),
(6, 'chilli.png', 'chilli3.jpg', '12.11.2019', '12.12.2019', 'halch halktna to dada pagla dokhyachch manus na rao.', 'pandurang sandu', 'kay mahit kude rahtat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `squery`
--
ALTER TABLE `squery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stable`
--
ALTER TABLE `stable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `squery`
--
ALTER TABLE `squery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stable`
--
ALTER TABLE `stable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
