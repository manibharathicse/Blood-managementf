-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 02:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodtable`
--

CREATE TABLE `bloodtable` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(34) NOT NULL,
  `bgroup` varchar(6) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `latitude` varchar(40) DEFAULT NULL,
  `longitude` varchar(60) DEFAULT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodtable`
--

INSERT INTO `bloodtable` (`name`, `email`, `contact`, `bgroup`, `address`, `latitude`, `longitude`, `image`) VALUES
('kishorekumar', 'kishorekumarj99@gmail.com', '9486498946', 'O+', 'high school road', '80.2707184', '13.082680199999999', 0x696d67342e676966),
('salmansyed', 'muktharenergy2014@gmail.com', '7538833875', 'B+', 'karur', '14', '11', ''),
('ramkumar', 'ramkumarcse76@gmail.com', '7305892998', 'O+', 'karur', '78.0483126', '11.0545453', ''),
('mohan', 'pmohans2017@gmail.com', '8489887201', 'B+', 'thuraiyur', '78.0487126', '11.054706099999999', 0x646f776e6c6f61642e706e67),
('hariharan', 'hari16061999@gmail.com', '7010455912', 'A+', 'karur', '78.04899329999999', '11.0547509', ''),
('nithish', 'nithishnith30@gmail.com', '111111', 'O-', 'dfdfdf', '80.2707184', '13.082680199999999', ''),
('dfdfjij', 'dfdfdf', '34343434', 'A+', 'dfdfdffd', '78.04898210000002', '11.0547041', 0x6e6577312e706e67),
('dfdfdfdf', 'dfdf', 'dfdfdfdfd', 'O+', 'dfdf', '2222', '11', ''),
('saravanan', 'sarwanmano06@gmail.com', '8940819180', 'A+', 'karur', '78.04864359999999', '11.0547351', 0x6e6577312e706e67),
('sjdhsd', 'sdsd', '3434', 'O-', 'wwewe', '80.2707184', '13.082680199999999', ''),
('Viky', 'viky8883@gmail.com', '8883313351', 'A-', 'dharapuram', '78.0484532', '11.054740299999999', ''),
('', '', '', '', NULL, NULL, NULL, 0x696d61676520312e6a706567),
('', '', '', '', NULL, NULL, NULL, 0x66616365626f6f6b322e706e67),
('arjun', 'arjun@gmail.com', '3434343434', 'A+', 'karur', '78.03380779999999', '11.0833566', 0x646f776e6c6f61642e706e67),
('santhosh', 'santhoshmano99@gmail.com', '8838278933', 'A+', 'dindigul', '78.0482785', '11.0544777', ''),
('sam', 'dfd@gmail.com', '9393939393', 'O-', 'dfdf', '78.0480639', '', ''),
('sasi', 'dfdf@gmail.com', '98989898989', 'A+', 'karur', '78.0480639', '', ''),
('jkjk', 'jkkkdf', '89797979797', 'O+', 'dfdfdf', '4344', '', ''),
('jkjk', 'jkkkdf', '89797979797', 'O+', 'dfdfdf', '4344', '', ''),
('jkjk', 'jkkkdf', '89797979797', 'O+', 'dfdfdf', '4344', '', ''),
('raju', 'dff', '343434', 'AB-', '3434', '3434', '', ''),
('pavi', 'pavi@gmail.com', '9789486060', 'O+', 'nkl', 'nkl', '', 0x646f776e6c6f61642e706e67),
('ramesh', 'raju@', '8989898989', 'O+', 'karur', '80.2707184', '', ''),
('kabali', 'dfdf@', '3434343434', 'AB-', 'df', '80.2707184', '', ''),
('admin', 'dmin', 'admin', 'O+', 'd', '80.2707184', '13.082680199999999', ''),
('admin1', 'admin1', 'admin1', 'B+', 'admin1', '80.2707184', '13.082680199999999', ''),
('a.arul dass', '123@gmail.com', '9791570234', 'B+', 'mkce', '78.04828530000002', '11.0548462', ''),
('mathi', 'mathi@xx.com', '9999999', 'O+', 'skjf kjashf', '80.2707184', '13.082680199999999', ''),
('dfdf', 'dfdff', 'dfdf', 'O+', 'fddf', '78.00656', '11.10732', ''),
('kishorekumar', 'kishorekumarj999@gmail.com', '9445695285', 'O+', 'velur', '', '', 0x696d67342e676966),
('ANJUKA.G', 'anjukagee@gmail.com', '6381211516', 'O+', 'Door no:8,velayudhap', '78.0480639', '11.0533725', ''),
('kishorekumars', 'dfdf@gmail.com', '9445695285', 'O+', 'dfdf', '', '', ''),
('ramkumar', 'ramkumar@gmail.com', '9999999999', 'O+', 'karur', '11.127122499999999', '78.6568942', ''),
('ramkumar', 'ramkumar@gmail.com', '9999999999', 'O+', 'karur', '11.127122499999999', '78.6568942', ''),
('ramkumar', 'ramkumar@gmail.com', '9999999999', 'O+', 'karur', '11.127122499999999', '78.6568942', ''),
('anu', 'anu@gmail.com', '1111111111', 'B+', 'velur', '11.127122499999999', '78.6568942', ''),
('fff1212', 'dfdfdf@gmail.com', 'dfdf', 'B+', 'karur', '11.127122499999999', '78.6568942', ''),
('tutorialspoint', 'jk2kishorekumar@gmail.com', '9486498946', 'AB-', 'karur', '11.127122499999999', '78.6568942', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
