-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 06:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f','o','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
(1, 'Sourov ', 'Kumar Mondal', 'm', 'sourovmondal100@gmail.com', '12345', 1716945816),
(2, 'Sourov ', 'Kumar Mondal', 'm', 'sourovmondal100@gmail.com', '12345', 1716945816),
(3, 'Rasidul', 'Haque', 'm', 'rasidul15-1640@diu.edu.bd', '098765', 1735115169),
(4, 'Rasidul', 'Haque', 'm', 'rasidul15-1640@diu.edu.bd', '098765', 1735115169),
(5, 'Rasidul', 'Haque', 'm', 'rasidul15-1640@diu.edu.bd', '098765', 1735115169),
(6, 'MD Abu', 'Seum', 'm', 'abu15-1693@diu.edu.bd', '0123456', 1705115450),
(7, 'MD Abu', 'Seum', 'm', 'abu15-1693@diu.edu.bd', '0123456', 1705115450),
(8, 'Hridoy ', 'Hasan', 'm', 'ridoy15-1695@diu.edu.bd', '234567', 1840406070),
(9, 'Abdul Karim Khan', 'Karim Khan', 'm', 'karim15-1306@diu.edu.bd', '8664322', 1840202010),
(10, 'Abdul ', 'Karim Khan', 'm', 'karim15-1306@diu.edu.bd', '12456', 1840202010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
