-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 04:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcoments`
--

CREATE TABLE `tcoments` (
  `id` int(25) NOT NULL,
  `comment` text NOT NULL,
  `postid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcoments`
--

INSERT INTO `tcoments` (`id`, `comment`, `postid`) VALUES
(1, 'ah masa', 1),
(2, 'serius ?', 1),
(3, 'bonbin mana ?', 1),
(4, 'serius kadal ? diserang apanya ?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tposts`
--

CREATE TABLE `tposts` (
  `id` int(25) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `create` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tposts`
--

INSERT INTO `tposts` (`id`, `title`, `content`, `create`) VALUES
(1, 'Wanita itu diserang kadal saat berkunjung ke kebun binatang', 'Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa.Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa.Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa.Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa.Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa. Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa. Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa. Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa. Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa. Wanita itu diserang kadal saat berkunjung ke kebun binatang namun dia tidak apa-apa. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tusers`
--

CREATE TABLE `tusers` (
  `id` int(25) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tusers`
--

INSERT INTO `tusers` (`id`, `username`) VALUES
(1, 'Hesa Suryana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcoments`
--
ALTER TABLE `tcoments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tposts`
--
ALTER TABLE `tposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tusers`
--
ALTER TABLE `tusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcoments`
--
ALTER TABLE `tcoments`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tposts`
--
ALTER TABLE `tposts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tusers`
--
ALTER TABLE `tusers`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
