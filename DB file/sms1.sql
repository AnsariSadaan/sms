-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2020 at 02:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'Segment&123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rollno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcont` varchar(13) NOT NULL,
  `standard` int(11) NOT NULL,
  `images` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `images`) VALUES
(1, 4, 'sadaan ansari', 'mumbai', '7045623244', 4, '20171205_003412.jpg'),
(2, 13, 'aman', 'mumbai', '737593659', 12, '20170917_163908.jpg'),
(4, 13, 'sohail', 'mumbai', '', 11, NULL),
(5, 14, 'zoeb', 'mumbai', '7303143193', 9, 'Saijat 20171210_222958.jpg'),
(6, 18, 'shezad', 'mumbai', '1830802797', 10, '20171209_155752.jpg'),
(7, 7, 'affan', 'uttar pardesh', '9029472321', 10, NULL),
(8, 9, 'adnan', 'turkey', '1234512345', 12, '20170917_163918.jpg'),
(9, 4, 'zayn', 'up', '123456889', 5, 'app.png'),
(11, 17, 'shamim', 'bhopal', '264284581', 12, 'IMG-20170816-WA0051.jpg'),
(10, 7, 'zaid', 'dubai', '2626646554', 10, 'IMG_0227.JPG'),
(12, 17, 'shamim', 'bhopal', '264284581', 12, 'IMG-20170816-WA0051.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
