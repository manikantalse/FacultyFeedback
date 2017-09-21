-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 04:29 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(4) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `section` varchar(5) NOT NULL,
  `teaching` int(4) NOT NULL,
  `class_maintenance` int(4) NOT NULL,
  `doubt_clarification` int(4) NOT NULL,
  `english_fluency` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `id` int(5) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `roll_number`, `email`, `password`) VALUES
(1, '165u1a0501', NULL, 'mypass'),
(2, '165u1a0502', NULL, 'mypass'),
(3, '165u1a0503', NULL, 'mypass'),
(4, '165u1a0504', NULL, 'mypass'),
(5, '165u1a0505', NULL, 'mypass'),
(6, '165u1a0506', NULL, 'mypass'),
(7, '165u1a0507', NULL, 'mypass'),
(8, '165u1a0508', NULL, 'mypass'),
(9, '165u1a0509', NULL, 'mypass'),
(10, '165u1a0510', NULL, 'mypass'),
(11, '165u1a0511', NULL, 'mypass'),
(12, '165u1a0512', NULL, 'mypass'),
(13, '165u1a0513', NULL, 'mypass'),
(14, '165u1a0514', NULL, 'mypass'),
(15, '165u1a0515', NULL, 'mypass'),
(16, '165u1a0516', NULL, 'mypass'),
(17, '165u1a0517', NULL, 'mypass'),
(18, '165u1a0518', NULL, 'mypass'),
(19, '165u1a0519', NULL, 'mypass'),
(20, '165u1a0520', NULL, 'mypass'),
(21, '165u1a0521', NULL, 'mypass'),
(22, '165u1a0522', NULL, 'mypass'),
(23, '165u1a0523', NULL, 'mypass'),
(24, '165u1a0524', NULL, 'mypass'),
(25, '165u1a0525', NULL, 'mypass'),
(26, '165u1a0526', NULL, 'mypass'),
(27, '165u1a0527', NULL, 'mypass'),
(28, '165u1a0528', NULL, 'mypass'),
(29, '165u1a0529', NULL, 'mypass'),
(30, '165u1a0530', NULL, 'mypass'),
(31, '165u1a0531', NULL, 'mypass'),
(32, '165u1a0532', NULL, 'mypass'),
(33, '165u1a0533', NULL, 'mypass'),
(34, '165u1a0534', NULL, 'mypass'),
(35, '165u1a0535', NULL, 'mypass'),
(36, '165u1a0536', NULL, 'mypass'),
(37, '165u1a0537', NULL, 'mypass'),
(38, '165u1a0538', NULL, 'mypass'),
(39, '165u1a0539', NULL, 'mypass'),
(40, '165u1a0540', NULL, 'mypass'),
(41, '165u1a0541', NULL, 'mypass'),
(42, '165u1a0542', NULL, 'mypass'),
(43, '165u1a0543', NULL, 'mypass'),
(44, '165u1a0544', NULL, 'mypass'),
(45, '165u1a0545', NULL, 'mypass'),
(46, '165u1a0546', NULL, 'mypass'),
(47, '165u1a0547', NULL, 'mypass'),
(48, '165u1a0548', NULL, 'mypass'),
(49, '165u1a0549', NULL, 'mypass'),
(50, '165u1a0550', NULL, 'mypass'),
(51, '165u1a0551', NULL, 'mypass'),
(52, '165u1a0552', NULL, 'mypass'),
(53, '165u1a0553', NULL, 'mypass'),
(54, '165u1a0554', NULL, 'mypass'),
(55, '165u1a0555', NULL, 'mypass'),
(56, '165u1a0556', NULL, 'mypass'),
(57, '165u1a0557', NULL, 'mypass'),
(58, '165u1a0558', NULL, 'mypass'),
(59, '165u1a0559', NULL, 'mypass'),
(60, '165u1a0560', NULL, 'mypass'),
(61, '165u1a0561', NULL, 'mypass'),
(62, '165u1a0562', NULL, 'mypass'),
(63, '165u1a0563', NULL, 'mypass'),
(64, '165u1a0564', NULL, 'mypass'),
(65, '165u1a0565', NULL, 'mypass'),
(66, '165u1a0566', NULL, 'mypass'),
(67, '165u1a0567', NULL, 'mypass'),
(68, '165u1a0568', NULL, 'mypass'),
(69, '165u1a0569', NULL, 'mypass'),
(70, '165u1a0570', NULL, 'mypass'),
(71, '165u1a0571', NULL, 'mypass'),
(72, '165u1a0572', NULL, 'mypass'),
(73, '165u1a0573', NULL, 'mypass'),
(74, '165u1a0574', NULL, 'mypass'),
(75, '165u1a0575', NULL, 'mypass'),
(76, '165u1a0576', NULL, 'mypass'),
(77, '165u1a0577', NULL, 'mypass'),
(78, '165u1a0578', NULL, 'mypass'),
(79, '165u1a0579', NULL, 'mypass'),
(80, '165u1a0580', NULL, 'mypass'),
(81, '165u1a0581', NULL, 'mypass'),
(82, '165u1a0582', NULL, 'mypass'),
(83, '165u1a0583', NULL, 'mypass'),
(84, '165u1a0584', NULL, 'mypass'),
(85, '165u1a0585', NULL, 'mypass'),
(86, '165u1a0586', NULL, 'mypass'),
(87, '165u1a0587', NULL, 'mypass'),
(88, '165u1a0588', NULL, 'mypass'),
(89, '165u1a0589', NULL, 'mypass'),
(90, '165u1a0590', NULL, 'mypass'),
(91, '165u1a0591', NULL, 'mypass'),
(92, '165u1a0592', NULL, 'mypass'),
(93, '165u1a0593', NULL, 'mypass'),
(94, '165u1a0594', NULL, 'mypass'),
(95, '165u1a0595', NULL, 'mypass'),
(96, '165u1a0596', NULL, 'mypass'),
(97, '165u1a0597', NULL, 'mypass'),
(98, '165u1a0598', NULL, 'mypass'),
(99, '165u1a0599', NULL, 'mypass'),
(100, '165u1a05A0', NULL, 'mypass'),
(101, '165u1a05A1', NULL, 'mypass'),
(102, '165u1a05A2', NULL, 'mypass'),
(103, '165u1a05A3', NULL, 'mypass'),
(104, '165u1a05A4', NULL, 'mypass'),
(105, '165u1a05A5', NULL, 'mypass'),
(106, '165u1a05A6', NULL, 'mypass'),
(107, '165u1a05A7', NULL, 'mypass'),
(108, '165u1a05A8', NULL, 'mypass'),
(109, '165u1a05A9', NULL, 'mypass'),
(110, '165u1a05B0', NULL, 'mypass'),
(111, '165u1a05B1', NULL, 'mypass'),
(112, '165u1a05B2', NULL, 'mypass'),
(113, '165u1a05B3', NULL, 'mypass');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(4) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `branch`, `subject`, `faculty`) VALUES
(1, 'cse', 'OOPS', 'Mr. G.Dayakar'),
(2, 'cse', 'DSC++', 'Mrs. G.Swathi'),
(3, 'cse', 'MFCS', 'Mrs. B.Swathi'),
(4, 'cse', 'DLD', 'Mr.N.Yadagiri'),
(5, 'cse', 'M-IV', 'Mrs. D. Rupa Lakshmi'),
(6, 'cse', 'EST', 'Ms. Lidiya Sunayana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_number` (`roll_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;
--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
