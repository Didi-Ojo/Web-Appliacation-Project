-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2016 at 11:43 PM
-- Server version: 5.5.9-log
-- PHP Version: 5.4.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ojoa_project334`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Name`, `Email`, `Username`, `Password`) VALUES
('Administrator', 'admin@uwindsor@gmail.com', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `athletes`
--

CREATE TABLE IF NOT EXISTS `athletes` (
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Sport` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Gold` int(11) NOT NULL,
  `Silver` int(11) NOT NULL,
  `Bronze` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `athletes`
--

INSERT INTO `athletes` (`Name`, `Age`, `Sport`, `Gold`, `Silver`, `Bronze`) VALUES
('Andre De Grasse', 21, 'Track', 0, 1, 2),
('Chad le Clos', 24, 'Swimming', 0, 2, 0),
('Katie Ledecky', 19, 'Swimming', 4, 1, 0),
('Michael Phelps', 31, 'Swimming', 5, 1, 0),
('Simone Biles', 19, 'Gymnastics', 4, 0, 1),
('Usain Bolt', 29, 'Track', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Name`, `Email`, `Username`, `Password`) VALUES
('Satya Bolisetti', 'bolise1@uwindsor.ca', 'bolise1', '1234'),
('login', 'login@gmail.com', 'login', 'password'),
('Ayodotun Ojo', 'ojoa@uwindsor.ca', 'ojoa', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
