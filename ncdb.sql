-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 09:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `height` double NOT NULL,
  `sex` varchar(10) NOT NULL,
  `ms` varchar(10) NOT NULL,
  `ecolour` varchar(15) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `jname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `name`, `age`, `dob`, `height`, `sex`, `ms`, `ecolour`, `bg`, `dname`, `jname`) VALUES
(1010101010, 'Abir Ahmed', 20, '1998-07-07', 5.4, 'Male', 'Unmarried', 'Black', 'B+', 'Jessor', 'Software Engineer'),
(1010101011, 'Nafis Iqbal', 25, '1994-01-11', 5.3, 'Male', 'Married', 'Blue', 'A+', 'Chittagong', 'Software Developer'),
(1010101012, 'Tasnim Habeeba', 28, '1991-07-07', 5.2, 'Female', 'Married', 'Black', 'AB+', 'Comilla', 'Lecturer'),
(1010101013, 'Mohammad Arafat ', 35, '1988-09-09', 5.5, 'Male', 'Married', 'Brown', 'AB-', 'Dhaka', 'Lecturer'),
(1010101014, 'Sifat Hossain', 30, '1989-01-01', 6, 'Male', 'Unmarried', 'green', 'O+', 'Dhaka', 'Executive Officer'),
(1010101015, 'Afrin Sultana', 50, '1978-11-26', 5.3, 'Female', 'Married', 'Black', 'AB+', 'Rangpur', 'Professor'),
(1010101016, 'Nafisa Haque', 30, '1988-09-09', 5.5, 'Female', 'Unmarried', 'Black', 'A+', 'Rajshahi', 'Pilot'),
(1010101017, 'Afnan Hossain', 36, '1985-02-02', 6, 'Male', 'Married', 'Blue', 'B+', 'Dhaka', 'Doctor'),
(1010101018, 'Afra Nawar', 22, '1996-11-11', 5.4, 'Female', 'Unmarried', 'Blue', 'AB-', 'Khulna', 'SQA Engineer'),
(1010101019, 'Naheed Hasan', 45, '1983-05-05', 5.8, 'Male', 'Married', 'Black', 'AB+', 'Sylhet', 'Doctor'),
(1010101020, 'Mohammad Ibrahim', 26, '1992-02-10', 5.8, 'Male', 'Unmarried', 'Black', 'A+', 'Dhaka', 'Web Developer'),
(1010101021, 'Zayn Islam', 24, '1994-05-05', 6.1, 'Male', 'Unmarried', 'Black', 'B+', 'Barisal', 'Software Engineer'),
(1010101022, 'Zeshaan Shahriar', 23, '1995-02-07', 5.6, 'Male', 'Unmarried', 'Blue', 'AB+', 'Dhaka', 'SQA Engineer'),
(1010101023, 'Ayaan Ahmed', 25, '1994-01-01', 6.1, 'Male', 'Unmarried', 'Black', 'B+', 'Chittagong', 'Lecturer'),
(1010101024, 'Ayaat Khan', 24, '1995-07-02', 5.4, 'Female', 'Unmarried', 'Blue', 'A+', 'Dhaka', 'SQA Engineer'),
(1710140300, 'Sadman Alam Reshad', 21, '1998-01-11', 5.8, 'Male', 'Unmarried', 'Brown', 'A+', 'Uttara', 'Junior Lecturer'),
(1111111111, 'Shah Alam Topu', 55, '1969-04-12', 5.9, 'Male', 'Married', 'Black', 'AB+', 'Uttara', 'LCD Manager'),
(1111111112, 'Afsana Sultana', 47, '1971-01-10', 5, 'Female', 'Married', 'Brown', '0+', 'Uttara', 'Housewife'),
(1714204201, 'Akil Tahsin', 22, '1997-04-24', 5.8, 'Male', 'Married', 'Black', 'A+', 'Dhanmondi', 'Movie Director'),
(1716969691, 'Nishat S. Brinty', 21, '1998-03-12', 5.6, 'Female', 'Married', 'Brown', 'B+', 'Mohammadpur', 'Lead Actress'),
(1700000001, 'Anika Salsabil', 22, '1997-09-11', 5.6, 'Female', 'Married', 'Black', 'A+', 'Khilgaon', 'Entrepreneur'),
(1700000002, 'Nafis Shahrear Shopnil', 22, '1997-02-03', 5.6, 'Male', 'Married', 'Black', 'O+', 'Gulshan', 'Entrepreneur'),
(1000000001, 'Sajid Sadi', 25, '1996-07-02', 5.7, 'Male', 'Unmarried', 'Hazel', 'O-', 'Nakhalpara', 'Market Analyst'),
(2147483647, 'Eman Noor', 22, '1997-05-26', 5.2, 'Female', 'Married', 'Black', 'AB+', 'Gulshan', 'Beauty Pageant'),
(2121212121, 'Yashwant Alvee', 23, '1996-07-02', 6, 'Male', 'Married', 'Black', 'B+', 'Gulshan', 'Market Analyst'),
(2147483647, 'Fabiha Priyoti', 21, '1998-03-15', 5.6, 'Female', 'Unmarried', 'Hazel', 'A+', 'Mohammadpur', 'Housewife'),
(1710102100, 'Jannat-E-Noor', 21, '1997-12-08', 5.6, 'Female', 'Unmarried', 'Brown', 'B+', 'Dakhshinkhan', 'Astronaut');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `name` varchar(50) NOT NULL,
  `pcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`name`, `pcode`) VALUES
('Dhaka', 1236),
('Chittagong', 4377),
('Jessor', 7406),
('Rajshahi', 6270),
('Comilla', 3570),
('Khulna', 9240),
('Rangpur', 5402),
('Sylhet', 3120),
('Barisal', 8240),
('Uttara', 1230),
('Mohakhali', 1212),
('Banani', 1213),
('Mohammadpur', 1207),
('Gulshan', 1214),
('Khilgaon', 1219),
('Nakhalpara', 1215),
('Dhanmondi', 1209),
('Dakhshinkhan', 1233);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `child` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`child`, `father`, `mother`) VALUES
('1710140300', '1111111111', '1111111112'),
('1010101010', '1010101019', '1010101015');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `rank` varchar(50) NOT NULL,
  `cn` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`rank`, `cn`, `salary`) VALUES
('Software Engineer', 'Kaz Software', 45000),
('Junior Lecturer', 'BRAC University', 20000),
('Software Developer', 'Kaz Software', 60000),
('Lecturer', 'BRAC University', 30000),
('Executive Officer', 'U.S. Bangla', 500000),
('Professor', 'BRAC University', 50000),
('Pilot', 'U.S. Bangla', 100000),
('Doctor', 'Ibn Sina Diagnostics Center', 200000),
('SQA Engineer', 'Kaz Software', 40000),
('Web Developer', 'Google Inc.', 50000),
('LCD Manager', 'Butterfly Marketing LTD.', 30000),
('Housewife', 'Home', 0),
('Movie Director', 'Wait For It Productions', 70000),
('Lead Actress', 'Wait For It Productions', 60000),
('Entrepreneur', 'Tea Stream', 40000),
('Market Analyst', 'Bangladesh Stock Exchange', 45000),
('Beauty Pageant', 'Forbes Magazine', 70000),
('Astronaut', 'NASA', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `spouse`
--

CREATE TABLE `spouse` (
  `hid` int(10) NOT NULL,
  `wid` int(10) NOT NULL,
  `md` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spouse`
--

INSERT INTO `spouse` (`hid`, `wid`, `md`) VALUES
(1010101013, 1010101012, '2015-02-14'),
(1111111111, 1111111112, '1995-08-12'),
(1714204201, 1716969691, '2020-02-14'),
(1700000002, 1700000001, '2019-11-04'),
(2121212121, 2147483647, '2018-12-12'),
(1010101019, 1010101015, '1992-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('fba', 'trueadmin'),
('sadman', '17101403'),
('jannat', '17101021'),
('rumana', '17301027');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `cn` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `cn`, `cid`) VALUES
(212223, 'Toyota', 1010101014),
(111213, 'BMW', 1010101016),
(252526, 'Hyundai', 1010101019),
(313236, 'Mitsubishi', 1010101015),
(282923, 'Mazda', 1010101013),
(555659, 'Mazda', 1010101023),
(465384, 'Toyota', 2121212121);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
