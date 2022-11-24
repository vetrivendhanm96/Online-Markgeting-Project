-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 08:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passin`
--

-- --------------------------------------------------------

--
-- Table structure for table `passout`
--

CREATE TABLE `passout` (
  `userid` varchar(15) NOT NULL,
  `password2` varchar(10) NOT NULL,
  `dspid` varchar(15) NOT NULL,
  `dsppasswd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passout`
--

INSERT INTO `passout` (`userid`, `password2`, `dspid`, `dsppasswd`) VALUES
('USR-00', 'vetri', '', ''),
('USR-01', 'murugan', '', ''),
('USR-02', 'tamil', '', ''),
('', '', 'DSP-11', '12345'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
