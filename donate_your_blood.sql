-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 09:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_your_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `publish_date` date NOT NULL DEFAULT current_timestamp(),
  `needed_date` date NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`user_id`, `name`, `title`, `blood_type`, `publish_date`, `needed_date`, `details`) VALUES
(24, 'abha', 'asdasd', 'B+', '2023-02-03', '0000-00-00', 'asdasd'),
(24, 'abha', 'asdasd', 'B+', '2023-02-03', '2023-02-16', 'asdsad'),
(30, 'Arman mahy', 'dfgsd', 'A+', '2023-02-03', '2023-02-02', 'fghjfghj'),
(31, 'piyal ahmed', 'need blood', 'A+', '2023-02-04', '2023-02-10', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `user_id` int(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `oname` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `cdate` date NOT NULL,
  `clocation` varchar(50) NOT NULL,
  `cdes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`user_id`, `cname`, `oname`, `contact`, `cdate`, `clocation`, `cdes`) VALUES
(15, 'qqq', 'qqqqqqqqq', 222, '2023-02-23', 'mirpurasd', 'adsad');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `donor` varchar(191) NOT NULL,
  `available` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `gender`, `dob`, `bloodgroup`, `address`, `contact`, `username`, `password`, `donor`, `available`) VALUES
(15, 'jjj', 'armanmahy@gmail.com', 'M', '2222-12-21', 'O+', 'dhaka', 1214214, 'yyy', 'yyy', 'donor', ''),
(16, 'llll', 'armanmahy@gmail.com', 'F', '2222-12-21', 'O+', 'dhaka', 2147483647, 'mmm', 'mmm', 'YES', ''),
(17, 'ertert', 'haboxo8237@oproom.com', 'M', '3333-11-22', 'B+', 'dhaka', 123456, 'aaaaa', 'asd', 'YES', ''),
(18, 'ghghgh', 'kecale6990@peratron.com', 'F', '2222-12-12', 'O+', 'dhaka', 123123123, 'ggg', 'ggg', 'YES', ''),
(19, 'ppp', 'sekati4668@cuptober.com', 'F', '2222-12-22', 'O+', 'dhaka', 123213, 'yyyy', 'yyyy', 'YES', ''),
(20, '', '', '', '0000-00-00', '', '', 0, '', '', '', 'available'),
(21, '', '', '', '0000-00-00', '', '', 0, '', '', '', 'available'),
(22, 'testcase', 'sekati4668@cuptober.com', 'M', '1999-01-01', 'B+', 'dhaka', 1675324406, 'test01', '123', 'YES', ''),
(23, 'yusha', 'sipix23650@cuptober.com', 'M', '2000-01-01', 'A+', 'dhaka', 1512112121, 'yusha', '123', 'YES', ''),
(24, 'abha', 'haboxo8237@oproom.com', 'F', '2222-12-12', 'O+', 'dhaka', 1123123123, 'abha', '123', 'YES', ''),
(25, 'test', 'armanmahy@gmail.com', 'M', '2023-03-10', 'B+', 'dhaka', 1234564, 'test02', '123', 'YES', ''),
(27, 'parvej', 'sekati4668@cuptober.com', 'M', '2023-02-25', 'O+', 'dhaka', 12313, 'piru', 'piru', 'YES', ''),
(28, 'rifat', 'sekati4668@cuptober.com', 'M', '2023-02-15', 'B+', 'asadas', 123, 'rif', 'rif', 'YES', ''),
(29, 'nnnnn', 'kecale6990@peratron.com', 'M', '2023-02-21', 'B+', 'dhaka', 455454, 'nnn', 'nnn', 'YES', ''),
(30, 'res', 'sipix23650@cuptober.com', 'M', '2023-02-09', 'B+', 'asadas', 123123, 'res', 'res', 'YES', 'available'),
(31, 'piyal ahmed', 'sekati4668@cuptober.com', 'M', '2023-02-16', 'O+', 'dhaka', 1231231, 'piyal', 'piyal', 'YES', 'available'),
(32, 'abcd', 'sekati4668@cuptober.com', 'M', '2023-02-23', 'B+', 'dhaka', 333333, 'abcd', 'abcd', 'YES', 'available'),
(33, 'ttt', 'armanmahy@gmail.com', 'M', '2023-02-14', 'B+', 'dhaka', 22222, 'tt', 'tt', 'YES', ''),
(34, 'qqq', 'qqq@ddd', 'M', '2023-03-23', 'B+', 'qqq', 22222, 'qqq', 'qqq', 'YES', ''),
(35, 'shuva', 'abcd@gmail.com', 'M', '1999-01-01', 'B+', 'dhaka', 2147483647, 'admin', 'admin', 'YES', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`);

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
