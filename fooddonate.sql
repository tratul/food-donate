-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 07:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddonate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, 'Md. Mahmudul', 'Bhuiyan', 'mahmudulhasan661@gmail.com', '9094818322', ''),
(2, 'Hasan', 'admin', 'mahmudulhasan@gmail.com', '9094818322', '1234'),
(4, 'tazim', 'zarif', '34w@gmail.com', '01234567234', 'Hasan7bn@');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `body` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `ownid` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `del` int(100) NOT NULL,
  `assign` varchar(100) COLLATE utf32_unicode_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `ownid`, `del`, `assign`) VALUES
(1, 'Kacci in Sultan\'s Dyne', 'gcvgh vyuhjbhb kj', '1', 0, 'false'),
(2, 'Over Rice in Food Kachari', 'hgcv gh vjh ', '1', 0, 'false'),
(3, 'Kacci in Sultan\'s Dyne', 'gcvgh vyuhjbhb kj', '1', 0, 'false'),
(4, 'Over Rice in Food Kachari', 'hgcv gh vjh ', '1', 0, 'false'),
(5, 'weeaet', 'rfyhtujteuut', '1', 0, 'false'),
(6, 'Hello World', 'Hello world Hello world Hello world Hello world Hello world\r\nHello world Hello world Hello world Hello world Hello world hello world Hello world Hello world Hello world Hello world hello world Hello world Hello world Hello world Hello world', '3', 0, 'false'),
(7, 'efesadf', 'sdfvgsdfgvsdrfv', '2', 0, 'false'),
(8, 'dgvdxfc', 'drfgyfhdfn', '1', 1, 'false'),
(9, 'efga', 'sdvsdv sdv sdv ', '1', 0, 'false'),
(10, 'tghxfd', 'fhbfxdhn', '2', 0, 'false'),
(11, 'dfgvxdf', 'fxgbfxdgbhf', '2', 0, 'false'),
(12, 'ABCD', 'The CSS margin properties are used to create space around elements, outside of any defined borders.\r\nWith CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and', '7', 0, 'false'),
(13, 'bfc chicken fry', 'The CSS margin properties are used to create space around elements, outside of any defined borders.\r\nWith CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and', '7', 0, 'false'),
(14, 'street 11', 'Update a web page without reloading the page\r\nRequest data from a server - after the page has loaded\r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background', '7', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `postaction`
--

CREATE TABLE `postaction` (
  `id` int(100) NOT NULL,
  `ownerName` varchar(100) NOT NULL,
  `volunteerName` varchar(100) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL DEFAULT 'true',
  `postid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postaction`
--

INSERT INTO `postaction` (`id`, `ownerName`, `volunteerName`, `postTitle`, `action`, `postid`) VALUES
(1, 'Hasan', 'niti', 'dfgvxdf', 'false', 0),
(2, 'Hasan', 'niti', 'tghxfd', 'false', 0),
(3, 'jakeya', 'niti', 'street 11', 'false', 0),
(4, '', '', 'efga', 'false', 0),
(5, '', '', 'dgvdxfc', 'false', 0),
(6, '', '', 'Hello World', 'false', 0),
(7, '', '', 'efesadf', 'false', 0),
(8, 'Md. Mahmudul Hasan Bhuiyan', 'niti', 'weeaet', 'false', 0),
(9, 'Md. Mahmudul Hasan Bhuiyan', 'niti', 'Over Rice in Food Kachari', 'false', 0),
(10, 'Md. Mahmudul Hasan Bhuiyan', 'niti', 'Over Rice in Food Kachari', 'false', 2),
(11, 'jakeya', 'niti', 'street 11', 'false', 14),
(12, 'jakeya', 'niti', 'street 11', 'false', 14),
(13, 'jakeya', 'niti', 'bfc chicken fry', 'false', 13);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `area` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `approve` varchar(100) COLLATE utf32_unicode_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `area`, `user_type`, `phone`, `password`, `approve`) VALUES
(1, 'Md. Mahmudul Hasan Bhuiyan', 'mahmudulhasan661@gmail.com', 'Bashundhara', 'owner', '9094818322', '123', 'true'),
(2, 'Hasan', 'mahmudulhasan@gmail.com', 'Bashundhara R/A', 'owner', '9094818322', '456', 'true'),
(3, 'Bhuiyan', 'mahmudulhasan661@gmail.com', 'Mirpur', 'volunteer', '9094818322', '1234', 'false'),
(5, 'najia', '34w@gmail.com', 'dhanmondi', 'owner', '01234567234', '900', 'false'),
(6, 'niti', '34w@gmail.com', 'mirpur', 'volunteer', '01234567234', '123', 'true'),
(7, 'jakeya', 'kkk@gmail.com', 'mirpur', 'owner', '222', '123', 'false'),
(8, 'hinata', 'ytedy@gmail.com', 'leafvillage', 'volunteer', '74565', '890', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postaction`
--
ALTER TABLE `postaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `postaction`
--
ALTER TABLE `postaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
