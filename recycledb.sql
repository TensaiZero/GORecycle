-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 12:45 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recycledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `exp` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `armor` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `fiber` int(11) NOT NULL,
  `metal` int(11) NOT NULL,
  `resin` int(11) NOT NULL,
  `crystal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `password`, `email`, `exp`, `level`, `hp`, `armor`, `attack`, `stamina`, `fiber`, `metal`, `resin`, `crystal`) VALUES
(1, 'rvsalazar', 'recycle', 'ecerobinsalazar@gmail.com', 3025, 12, 240, 24, 12, 24, 1250, 500, 340, 762),
(2, 'krig', 'kriggy', 'krig@gmail.com', 15, 1, 50, 2, 1, 2, 50, 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `credits` int(11) NOT NULL,
  `class` varchar(45) NOT NULL,
  `glass_green` int(11) NOT NULL,
  `glass_brown` int(11) NOT NULL,
  `glass_clear` int(11) NOT NULL,
  `metal_alum` int(11) NOT NULL,
  `metal_iron` int(11) NOT NULL,
  `resin_hdpe` int(11) NOT NULL,
  `resin_ldpe` int(11) NOT NULL,
  `resin_pvc` int(11) NOT NULL,
  `fiber_hq` int(11) NOT NULL,
  `fiber_lq` int(11) NOT NULL,
  `fiber_carton` int(11) NOT NULL,
  `fiber_coated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id`, `username`, `password`, `email`, `credits`, `class`, `glass_green`, `glass_brown`, `glass_clear`, `metal_alum`, `metal_iron`, `resin_hdpe`, `resin_ldpe`, `resin_pvc`, `fiber_hq`, `fiber_lq`, `fiber_carton`, `fiber_coated`) VALUES
(1, 'recyclestore', 'recyclenow', 'recyclergame@gmail.com', 15000, '', 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `mass` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `purchaser` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `shop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
