-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 01:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `itemNumber` int(10) NOT NULL,
  `itemQuantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`itemNumber`, `itemQuantity`) VALUES
(0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `cnic` char(10) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `name_onCard` varchar(200) NOT NULL,
  `cardno` char(19) NOT NULL,
  `exp_month` varchar(20) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Delivary_number` int(11) NOT NULL,
  `Customer_name` varchar(50) NOT NULL,
  `Customer_address` varchar(50) NOT NULL,
  `Customer_mobilenumber` int(11) NOT NULL,
  `Details_of Delivary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Delivary_number`, `Customer_name`, `Customer_address`, `Customer_mobilenumber`, `Details_of Delivary`) VALUES
(1, 'NImal Perera', '250/C,Theldeniya,Kandy', 712235621, '30 Exersise books (single rule)\r\n50 Exersise books (Squre rules)\r\n100 pens\r\n120 pencils\r\n60 colur boxes\r\n40 clay\r\n30 drawing books\r\n'),
(2, 'Ashinka Ekanayake', '150/B,kelaniya,colombo', 702215462, '10 pens\r\n24 pencils\r\n15 exsercise books(single rule)\r\n15 exercise books(squre rules)\r\n2 colure books\r\n5 drawing books\r\n2 clay\r\n'),
(3, 'R.M.D.P Rathnayake', '100/1 Pilimathalawa,Kandy', 772356145, '1 exersice books\r\n2 pens\r\n4 pencils\r\n1 colur boox\r\n1 drawing book\r\n1 clay'),
(4, 'B.N Jayasinghe', '100/2,polgamula,Peradeniya', 762235954, '25 books\r\n12 pens\r\n10 pensils\r\n2 colur boxes\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_no` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Feedback_type` varchar(11) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_no`, `Name`, `Email`, `Feedback_type`, `Description`) VALUES
(1, 'Kamal', 'Kamal@gmail.com', 'Comments', 'Good service'),
(2, 'Amal', 'amal@gmail.com', 'Suggestions', 'Make the delivery more quicker'),
(3, 'Nimal', 'Nimal@gmail.com', 'Questions', 'Why is the cost of pens so high');

-- --------------------------------------------------------

--
-- Table structure for table `giftvouchers`
--

CREATE TABLE `giftvouchers` (
  `name` varchar(256) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `address` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(12) NOT NULL,
  `mobile` int(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giftvouchers`
--

INSERT INTO `giftvouchers` (`name`, `nic`, `address`, `price`, `type`, `mobile`, `id`) VALUES
('Mary', '956787690v', 'Kandy', 1000, 'Silver', 756787678, 1),
('nethmi', '978987678v', 'Colombo', 1500, 'platinum', 709988987, 3),
('nethmi', '978987678v', 'Colombo', 1500, 'platinum', 709988987, 4),
('Tharidu', '200012345656', 'Kurunagala', 500, 'Gold', 756787678, 6);

-- --------------------------------------------------------

--
-- Table structure for table `spodetails`
--

CREATE TABLE `spodetails` (
  `snic` char(10) NOT NULL,
  `sname` varchar(150) DEFAULT NULL,
  `tp_no` char(10) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `book_name` varchar(150) DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `Item_no` text NOT NULL,
  `Item_description` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`Item_no`, `Item_description`, `Price`) VALUES
('S0001', 'Red pen', 20),
('S0002', 'Blue pen', 20),
('S0003', 'Black pen', 20),
('S0004', 'Pink highlighter', 110),
('S0005', 'Blue highlighter', 110),
('S0006', 'Orange highlighter', 110),
('S0007', 'Yellow highlighter', 110),
('S0008', 'Red highlighter', 110),
('S0009', 'Pencil', 10),
('S0010', 'Pencil sharpener', 25),
('S0011', 'Colour pencils', 200),
('S0012', 'Normal marker pen', 110),
('S0013', 'Permanent marker pen', 60),
('S0014', 'CR Book', 50),
('S0015', 'Note Book', 40),
('S0016', 'Maths Book', 80),
('S0017', 'Wooden ruler', 50),
('S0018', 'Plastic ruler', 20),
('S0019', 'Metal ruler', 100),
('S0020', 'Glue stick', 90),
('S0021', 'Super glue', 130),
('S0022', 'Binder gum', 330),
('S0023', 'Plastic file', 200),
('S0024', 'Cardboard file', 120),
('S0025', 'Clear file', 330);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `itemNo` int(8) NOT NULL,
  `bookName` varchar(50) NOT NULL,
  `authorName` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `genre` varchar(20) NOT NULL,
  `quantityAvailable` int(3) NOT NULL,
  `discount` int(2) NOT NULL,
  `isbn` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`itemNo`, `bookName`, `authorName`, `price`, `genre`, `quantityAvailable`, `discount`, `isbn`) VALUES
(1, 'Athakin Ammaya, Athakin Meramaya', 'P.B.Jayasekara', 500, 'Novel', 100, 10, 9789560000000),
(2, 'Kanda Uda Gindara', 'Jackson Anthony', 500, 'Novel', 100, 10, 9789560000000),
(3, 'Kumara Kobei', 'Shamel Jayakody', 500, 'Novel', 100, 10, 9786250000000),
(4, 'Thi Ha Tha', 'Surath De Mel', 500, 'Novel', 100, 10, 9789550000000),
(5, 'Nimnage Ithihasaya', 'Kawshalya Kumarasinghe', 500, 'Novel', 100, 10, 9789550000000),
(6, 'Nishkranthiya', 'Sunethra Rajakaruna', 500, 'Novel', 100, 10, 9789550000000),
(7, 'Panhinda', 'Sagara Wijesena', 500, 'Novel', 100, 10, 9789550000000),
(8, 'Petha', 'Eric Ilayaparachchi', 500, 'Novel', 100, 10, 9789550000000),
(9, 'Pol Matta', 'Premakeerthi Ranathunga', 500, 'Novel', 100, 10, 99789600000000),
(10, 'Balan Pura Siri Neth Wasa', 'Rupa Shriyani Ekanayaka', 500, 'Novel', 100, 10, 9789560000000),
(11, 'Rathu Iri Adina Atha', 'Liyanage Amarakeerthi', 500, 'Novel', 100, 10, 9786250000000),
(12, 'Rudu Ron Sunu', 'Keerthi Welisarage', 500, 'Novel', 100, 10, 9789550000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIC` varchar(12) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIC`, `User_name`, `Name`, `Mobile_Number`, `E-mail`, `Address`, `password`) VALUES
('2000', 'ayesha23', 'Ayesha', 715487562, '223ayesga@gmail.com', 'Colombo', 'diughte'),
('2001', 'Dinu12', 'Dinusha', 752026134, '999dinusha@gmail.com', 'Kandy', 'dinghare');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`itemNumber`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`cnic`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Delivary_number`),
  ADD UNIQUE KEY `Customer_name` (`Customer_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_no`);

--
-- Indexes for table `giftvouchers`
--
ALTER TABLE `giftvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spodetails`
--
ALTER TABLE `spodetails`
  ADD PRIMARY KEY (`snic`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`Item_no`(5));

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `Delivary_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `giftvouchers`
--
ALTER TABLE `giftvouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
