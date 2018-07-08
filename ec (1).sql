-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 08:17 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec`
--

-- --------------------------------------------------------

--
-- Table structure for table `compose`
--

CREATE TABLE `compose` (
  `Name` varchar(50) NOT NULL,
  `Fromusername` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compose`
--

INSERT INTO `compose` (`Name`, `Fromusername`, `Message`, `time`) VALUES
('Prasanthini', '', 'hiii', '2018-02-21 22:11:18'),
('Prasanthini', 'Seenivasan', 'hello Prasanthini', '2018-02-22 22:12:06'),
('Meena', 'Seenivasan', 'gud nyt....', '2018-02-22 23:16:51'),
('Selvarani', 'Prasanthini', 'Gud eve aunty..!!!', '2018-02-23 19:52:52'),
('Rakkesh', 'Prasanthini', 'helloooooo...', '2018-02-23 21:05:43'),
('Rakkesh', 'Prasanthini', 'Hi', '2018-02-23 22:13:00'),
('Rakkesh', 'Prasanthini', 'hi', '2018-02-23 22:50:17'),
('Rakkesh', 'Prasanthini', 'gi\r\n', '2018-02-23 23:01:10'),
('Rakkesh', 'Prasanthini', 'hgdd', '2018-02-23 23:35:57'),
('Rakkesh', 'Prasanthini', 'Prasanthini', '2018-02-23 23:36:30'),
('Rakkesh', 'Prasanthini', 'Gud ni8..!!', '2018-02-23 23:43:13'),
('Prasanthini', 'Nimmy', 'Gud Ni8..!!', '2018-02-23 23:57:48'),
('Prasanthini', 'Prasanthini', 'gm', '2018-02-24 00:54:49'),
('Seenivasan', 'Prasanthini', 'hii dad!!!', '2018-02-24 23:31:27'),
('Gautham', 'Prasanthini', 'hello Gautham...!!', '2018-02-25 23:31:05'),
('Prasanthini', 'Nimmy', 'Thoongalayaaa..!!!', '2018-02-26 00:22:20'),
('Prasanthini', 'Harini', 'hiii', '2018-02-27 16:39:40'),
('Prasanthini', 'Diya', 'gud nyt prasanthini...', '2018-02-27 23:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `ecsignup`
--

CREATE TABLE `ecsignup` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecsignup`
--

INSERT INTO `ecsignup` (`Name`, `Email`, `Password`, `Confirm_password`) VALUES
('seenumeenu42@gmail.com', 'ammu', 'ammu', 'Prasanthini'),
('seenu@gmail.com', 'seenu', 'seenu', 'Seenivasan');

-- --------------------------------------------------------

--
-- Table structure for table `ecsignupp`
--

CREATE TABLE `ecsignupp` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecsignupp`
--

INSERT INTO `ecsignupp` (`Name`, `Email`, `Password`, `Confirm_password`, `Birthday`, `Gender`, `Mobile`, `Location`) VALUES
('Prasanna', 'prasanna@gmail.com', 'aju', 'aju', '0000-00-00', '', 0, ''),
('Prasanthini', 'ammu@gmail.com', 'ammu', 'ammu', '0000-00-00', '', 0, ''),
('Seenivasan', 'seenu@gmail.com', 'seenu', 'seenu', '0000-00-00', '', 0, ''),
('Meena', 'meenu@gmail.com', 'meenu', 'meenu', '1999-08-02', 'female', 9715203456, 'Madurai'),
('Selvarani', 'selva@gmail.com', 'selva', 'selva', '1998-08-17', 'Female', 9487547613, 'Enga veedu'),
('Rakkesh', 'rakki@gmail.com', 'rakki', 'rakki', '1991-06-14', 'Male', 9876540000, 'Chennai'),
('Aishu', 'aishu@gmail.com', 'aishu', 'aishu', '1999-03-12', '', 9988776655, 'Chennai'),
('Aishu', 'aishu@gmail.com', 'aishu', 'aishu', '1999-11-12', 'female', 9900778866, 'Madurai'),
('Gautham', 'gautham@gmail.com', 'gautham', 'gautham', '1999-03-11', 'Male', 9944552211, 'Chennai'),
('Nimmy', 'nimmy@gmail.com', 'nimmy', 'minny', '1998-08-02', 'Male', 9487813680, 'Villapuram'),
('Minny', 'minny@gmail.com', 'minny', 'minny', '02-08-1998', 'Male', 9487813680, 'Madurai'),
('Harini', 'harini@gmail.com', 'harini', 'harini', '24-05-1999', 'Female', 9988776652, 'Madurai'),
('Diya', 'diya@gmail.com', 'diya', 'diya', '11-03-1999', 'Female', 8778972592, 'Madurai');

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `fromusername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`username`, `password`) VALUES
('Nimmy', 'nimmy');

-- --------------------------------------------------------

--
-- Table structure for table `signupp`
--

CREATE TABLE `signupp` (
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupp`
--

INSERT INTO `signupp` (`username`, `email`, `password`) VALUES
('', '', ''),
('', 'seenumeenu42@gmail.com', 'nimmy'),
('', 'aswini@gmail.com', 'aswini'),
('', 'deepshi@gmaiil.com', 'deepu'),
('', 'devi@gmail.com', 'aju'),
('', 'seenumeenu42@gmail.com', 'seenu'),
('', 'seenumeenu42@gmail.com', 'seenu'),
('Prasanna', 'prasanna@gmail.com', 'aju');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
