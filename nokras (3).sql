-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 07:41 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nokras`
--

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `branch` varchar(30) NOT NULL,
  `halltype` varchar(40) NOT NULL,
  `capacity` int(20) NOT NULL,
  `reserve` varchar(80) NOT NULL,
  `cash` int(20) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `email`, `message`) VALUES
(1, 'irungujohnkimani@gmail.com', 'i want to book 7 rooms is it possible?'),
(2, 'johnturinjoma@gmail.com', 'i cancelled my booking can i reserve again?'),
(3, 'benkagio@gmail.com', 'i forgot to confirm my booking in time will be charged?'),
(4, 'shaddytyga@gmail.com', 'thanks very much for good services i enjoyed my stay...');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `customer_id` int(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `boardtype` varchar(255) NOT NULL,
  `no_rooms` varchar(255) NOT NULL,
  `adult` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'not confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`customer_id`, `branch`, `firstname`, `lastname`, `email`, `contact`, `roomtype`, `boardtype`, `no_rooms`, `adult`, `children`, `datein`, `dateout`, `status`) VALUES
(1513, 'muranga', 'kim', 'here', 'shaddytyga@gmail.com', 720719576, 'executive', 'half_board                      ', '1', 3, 1, '2018-07-31', '2018-08-04', 'confirmed'),
(1627, 'muranga', 'kim', 'kimani', 'johnturinjoma@gmail.com', 714003566, 'vip', 'half_board                      ', '1', 2, 2, '2018-08-10', '2018-08-13', 'Checked In'),
(1868, 'riverine', 'chela', 'here', 'mercychela@gmail.com', 712978679, 'duluxe', 'half_board                      ', '1', 0, 0, '2018-08-05', '2018-08-09', 'Checked Out');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `branch` varchar(20) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `amount` int(255) NOT NULL,
  `image` longblob NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`branch`, `room_no`, `roomtype`, `amount`, `image`, `description`) VALUES
('riverine', 'DRS01', 'duluxe', 13000, 0x6e6f6b72617331302e6a7067, 'Our Deluxe rooms are comfortable and convenience of our customers. Total comfort to create a homely atmosphere, our personalized service is popular with local travelers and international tourists'),
('muranga', 'ERS02', 'executive', 15000, 0x6e6f6b726173392e6a7067, 'Enjoy the luxury of our spacious Executive suites that features a sitting area with modern furniture, a workstation area, equipped with refrigerator, complimentary WiFi, a flat screen TV and a tea/coffee tray.'),
('muranga', 'VR01', 'vip', 17500, 0x6e6f6b726173352e6a7067, 'This is where you get to enjoy your stay at most. Our one and only VIP Suite is furnished with a King size bed, sitting area with sophisticated leather seats');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `roomtype` (`roomtype`),
  ADD KEY `email` (`email`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`),
  ADD KEY `roomtype` (`roomtype`),
  ADD KEY `branch` (`branch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`roomtype`) REFERENCES `reservations` (`roomtype`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
