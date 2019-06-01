-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 06:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appId` int(50) NOT NULL,
  `did` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `Userid` varchar(50) NOT NULL,
  `scheduleId` varchar(50) NOT NULL,
  `appSymptom` varchar(20) NOT NULL,
  `userStatus` varchar(50) NOT NULL,
  `doctorStatus` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `did`, `id`, `Userid`, `scheduleId`, `appSymptom`, `userStatus`, `doctorStatus`, `status`) VALUES
(20, '1', '37', '461 ', '55', 'fever', '1', '1', 'COMPLETE'),
(21, '2', '38', '460', '55', 'wew', '1', '1', 'COMPLETE'),
(22, '4', '41', '459 ', '56', 'nnnnnnnnn', '1', '1', 'COMPLETE'),
(23, '5', '44', '463 ', '58', 'headache and body pa', '1', '1', 'COMPLETE'),
(24, '1', '37', '464 ', '55', 'werwe', '1', '1', 'COMPLETE'),
(25, '1', '37', '470 ', '55', 'fbednc', '1', '1', 'ONGOING'),
(26, '1', '37', '471 ', '55', 'gemrhf', '1', '1', 'ONGOING'),
(27, '1', '57', '461 ', '65', 'gfgf', '1', '1', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bid` int(20) NOT NULL,
  `Userid` int(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bid`, `Userid`, `amount`) VALUES
(1, 461, 8970);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bid` int(20) NOT NULL,
  `checkdetails_id` int(20) NOT NULL,
  `Userid` int(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bid`, `checkdetails_id`, `Userid`, `amount`) VALUES
(9, 162, 461, 515),
(37, 167, 464, 512);

-- --------------------------------------------------------

--
-- Table structure for table `checkup_details`
--

CREATE TABLE `checkup_details` (
  `checkdetails_id` int(11) NOT NULL,
  `Userid` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `did` varchar(20) NOT NULL,
  `findings` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkup_details`
--

INSERT INTO `checkup_details` (`checkdetails_id`, `Userid`, `id`, `did`, `findings`, `date`, `status`, `amount`) VALUES
(162, '461', '37', '1', 'sdfsadg', '2019-05-15 18:30:00.000000', 'COMPLETE', 0),
(163, '460', '38', '2', 'dsfasdg', '2019-05-28 18:30:00.000000', 'COMPLETE', 0),
(164, '459', '41', '4', 'qeaea', '2019-05-22 18:30:00.000000', 'COMPLETE', 0),
(165, '463', '44', '5', 'eferhyt', '2019-05-21 18:30:00.000000', 'COMPLETE', 0),
(167, '464', '37', '1', 'hghgj', '2019-05-29 04:06:26.329983', 'COMPLETE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(10) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `department`) VALUES
(1, 'cardiology'),
(2, 'Nephrology'),
(3, 'Neurology'),
(4, 'Pysiotherapy'),
(5, 'Gynecology'),
(6, 'Orthopaedics'),
(7, 'Radiotherapy'),
(8, 'Urology');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `District_id` int(10) NOT NULL,
  `District_name` varchar(20) NOT NULL,
  `State_id` int(10) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`District_id`, `District_name`, `State_id`, `Status`) VALUES
(1, 'kottayam', 1, 1),
(2, 'pathanamthitta', 1, 1),
(3, 'mettupalayam', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `Photo` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `State_id` varchar(11) NOT NULL,
  `District_id` varchar(11) NOT NULL,
  `DOJ` varchar(50) NOT NULL,
  `consultancyfees` varchar(100) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `yoe` varchar(50) NOT NULL,
  `did` varchar(11) NOT NULL,
  `status` int(20) NOT NULL,
  `status1` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `login_id`, `name`, `DOB`, `address`, `phonenumber`, `Photo`, `gender`, `State_id`, `District_id`, `DOJ`, `consultancyfees`, `Qualification`, `yoe`, `did`, `status`, `status1`) VALUES
(37, 208, 'libinThomas ', '1970-09-08', 'puthuparampil', '09878675645', 'd4.jpg', 'female', '1', '2', '2019-05-08', '500', 'MBBS', '2', '1', 1, 1),
(38, 209, 'Vargheese Cheriyan', '1970-09-08', 'kottackal', '9878675645', 'd18.jpg', 'male', '1', '2', '2019-05-16', '500', 'MBBS', '8', '2', 1, 1),
(41, 215, 'kiran cheriyan', '1970-09-08', 'bethel', '9878675645', 'd3.jpg', 'Male', '1', '1', '2019-05-06', '200', 'MBBS', '2', '4', 1, 1),
(42, 216, 'Ammu Chandy', '1970-09-08', 'koyikeril', '9878675645', 'd5.jpg', 'Female', '1', '1', '2019-05-07', '700', 'MDS', '4', '3', 1, 1),
(45, 220, 'bibin', '1970-09-08', 'manayathumalil', '9878675645', 'p4.jpg', 'male', '2', '3', '2019-05-23', '800', 'BDS', '3', '6', 1, 0),
(47, 222, 'Reshma R', '1970-09-08', 'thadathel', '9878675623', 'p2.jpg', 'male', '2', '3', '2019-05-24', '500', 'MBBS', '2', '7', 1, 1),
(57, 228, 'jeslin george', '1970-09-08', 'qwert', '9878675645', 'd5.jpg', 'female', '1', '1', '2019-05-14', '400', 'MBBS', '2', '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE `doctorschedule` (
  `scheduleId` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `scheduleDay` varchar(20) NOT NULL,
  `scheduleDate` date NOT NULL,
  `starttime` varchar(20) NOT NULL,
  `endTime` varchar(20) NOT NULL,
  `bookAvail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`scheduleId`, `id`, `scheduleDay`, `scheduleDate`, `starttime`, `endTime`, `bookAvail`) VALUES
(55, 37, 'monday', '2019-04-01', '02:00am', '02:10 am', 'notavail'),
(56, 41, 'wednesday', '2015-05-12', '09:00 am', '09:15 am', 'available'),
(57, 41, 'Thursday', '2019-05-14', '01:05', '01:10', 'available'),
(58, 44, 'monday', '2015-05-12', '09:00 am', '09:15 am', 'available'),
(59, 44, 'Monday', '2019-05-10', '01:05 pm', '01:10pm', 'available'),
(60, 37, 'monday', '2015-05-12', '09:00 am', '09:15 am', 'available'),
(61, 42, 'monday', '2015-05-12', '09:00 am', '09:15 am', 'available'),
(62, 45, 'wednesday', '2015-05-30', '02:00 am', '2:20 am', 'available'),
(63, 47, 'Thursday', '2015-05-12', '10:00 am', '10:20am', 'available'),
(64, 47, 'Friday', '2019-05-14', '11:00 am', '11:10am', 'available'),
(65, 57, 'Tuesday', '2019-05-12', '09:00 am', '09:15 am', 'notavail');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `lid` int(10) NOT NULL,
  `id` int(20) NOT NULL,
  `did` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`lid`, `id`, `did`, `reason`, `status`) VALUES
(4, 37, '1', 'eagzzxc', 'APPROVED'),
(5, 37, '1', 'sdfgzcx', 'APPROVED'),
(6, 37, '1', 'rwfwef', 'APPROVED'),
(7, 37, '1', 'WEFWF', 'APPROVED'),
(8, 47, '1', '3e1rfweqfsdfsd', 'APPROVED'),
(9, 47, '1', 'wrwef', 'REJECT'),
(10, 37, '1', '', 'REJECT'),
(11, 37, '1', '', 'REJECT'),
(12, 37, '1', '', 'REJECT'),
(13, 37, '1', '', 'REJECT'),
(14, 37, '1', '', 'REJECT'),
(15, 37, '1', '', 'REJECT'),
(16, 37, '1', '', 'REJECT'),
(17, 37, '1', '', 'REJECT'),
(18, 37, '1', 'fddfd', 'REJECT'),
(19, 37, '1', 'cggf', 'REJECT'),
(20, 37, '1', '', 'REJECT'),
(21, 37, '1', '', 'REJECT'),
(22, 37, '1', '', 'REJECT'),
(23, 37, '1', '', 'REJECT'),
(24, 37, '1', '', 'REJECT'),
(25, 37, '1', '', 'REJECT'),
(26, 37, '1', '', 'REJECT'),
(27, 37, '1', '', 'REJECT'),
(28, 37, '1', '', 'REJECT'),
(29, 37, '1', '', 'REJECT'),
(30, 37, '1', '', 'REJECT'),
(31, 37, '1', '', 'REJECT'),
(32, 37, '1', '', 'REJECT'),
(33, 37, '1', '', 'REJECT'),
(34, 37, '1', '', 'REJECT'),
(35, 37, '1', '', 'REJECT'),
(36, 37, '1', '', 'REJECT'),
(37, 37, '1', '', 'REJECT');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin@gmail.com', 'admin@123', 1, 1),
(183, 'anitha@gmail.com', 'Anitha@1234', 2, 1),
(190, 'farhana@gmail.com', 'Jeslin@123', 2, 1),
(192, 'Reji@gmail.com', 'Reji@1234', 2, 1),
(196, 'nissy@gmail.com', 'Nisy@123', 2, 1),
(197, 'anju@gmail.com', 'Anju@123', 2, 1),
(198, 'vidhya@gmail.com', 'Vidhya@12345', 4, 1),
(199, 'chippya@gmail.com', 'Chippy@1234', 2, 1),
(203, 'aparna@gmail.com', 'Aparna@123', 2, 1),
(204, 'surya@gmail.com', 'Surya@123', 2, 1),
(205, 'neethu@gmail.com', 'Neethu@123', 2, 1),
(206, 'thomas@gmail.com', 'Thomas@11', 3, 1),
(207, 'jes@gmail.com', 'Jes@11', 3, 1),
(208, 'Libin@gmail.com', 'Libin@1234', 3, 1),
(209, 'varheese@gmail.com', 'Vargheese@123', 3, 1),
(215, 'kiran123@gmail.com', 'Kiran@12345', 3, 1),
(216, 'ammu@gmail.com', 'Ammu@12345', 3, 1),
(217, 'sam@gmail.com', 'Sam@12', 3, 1),
(218, 'noel@gmail.com', 'Noel@12', 2, 1),
(219, 'tinu@gmail.com', 'Tin@12', 3, 1),
(220, 'bibin@gmail.com', 'Bibib@12', 3, 1),
(221, 'reshma@gmail.com', 'Reshma@1234', 3, 1),
(222, 'reshma12@gmail.com', 'Reshma@12345', 3, 1),
(223, 'riya123@gmail.com', 'Riya@12345', 2, 1),
(225, 'Jeslin123@gmail.com', 'Jeslin@12345678', 2, 1),
(226, 'jeslinmgeorge@mca.aj', 'Jeslinm@1234', 2, 0),
(227, 'jomy@gmail.com', 'Jomy@12345', 2, 0),
(228, 'jeslinmg@gmail.com', 'Jeslin@123456', 2, 0),
(229, 'George@gmail.com', 'George@123', 2, 1),
(230, 'Jomy123@gmail.com', 'Jomy@1234567', 2, 0),
(231, 'sinu@gmail.com', 'Sinu@123', 2, 1),
(232, 'renjith@gmail.com', 'Renjith@123', 2, 1),
(233, 'shibin@gmail.com', 'Shibin@1234', 2, 1),
(234, 'anna@gmail.com', 'Anna@1234', 2, 0),
(235, 'jessy@gmail.com', 'Jessy@123', 2, 1),
(236, 'Amrutha@gmail.com', 'Amrutha@123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medid` int(10) NOT NULL,
  `medname` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `onhand` varchar(20) NOT NULL,
  `prescription` varchar(20) NOT NULL,
  `mfgdate` varchar(20) NOT NULL,
  `expdate` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medid`, `medname`, `quantity`, `onhand`, `prescription`, `mfgdate`, `expdate`, `price`) VALUES
(1, 'ACE', '93', '1', 'reduce blood pressur', '2010-04-03', '2015-04-02', '2'),
(2, 'Levothyroxine sodium', '94', '1', ' reduce ', '2010-09-12', '2015-04-02', '2'),
(3, 'acetaminophen', '85', '1', 'reduces fever', '2010-09-23', '2015-04-02', '2'),
(4, 'Alprazolam', '95', '1', ' treating anxiety, p', '2010-09-06', '2015-04-02', '3'),
(5, 'Amoxicillin', '97', '1', 'urinary tract infect', '2012-09-09', '2015-09-20', '2'),
(6, 'Atenolol', '89', '1', 'reduces the force of', '2010-09-06', '2015-04-02', '3'),
(7, 'Lisinopril', '189', '1', 'lower blood pressure', '2013-09-07', '2020-08-06', '3'),
(8, 'lithium', '85', '1', 'treatment of bipolar', '2010-09-06', '2015-04-02', '2'),
(9, 'Meloxicam ', '67', '1', 'treatment of inflamm', '2009-08-09', '2020-08-06', '3'),
(10, 'crocin', '88', '1', 'fever', '2010-09-09', '2020-08-09', '2'),
(11, 'paracetamol', '86', '1', 'fever', '2019-04-10', '2019-04-18', '4'),
(12, 'antacid', '300', '1', 'gas', '2019-04-10', '2019-04-18', '4'),
(13, 'avil', '293', '1', 'alergy', '2019-04-10', '2019-04-18', '4'),
(14, 'ranitidin', '294', '1', 'acidity', '2019-04-11', '2019-04-02', '4'),
(15, 'carmeticide', '300', '1', 'gas', '2019-04-11', '2019-04-02', '4'),
(20, 'paracetamol', '200', '1', 'fever', '2019-04-01', '2019-04-27', '4');

-- --------------------------------------------------------

--
-- Table structure for table `medquantity`
--

CREATE TABLE `medquantity` (
  `quanityId` int(11) NOT NULL,
  `checkdetails_id` int(11) NOT NULL,
  `Userid` int(20) NOT NULL,
  `medid` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medquantity`
--

INSERT INTO `medquantity` (`quanityId`, `checkdetails_id`, `Userid`, `medid`, `quantity`, `type`, `duration`) VALUES
(51, 153, 455, 3, 2, '', ''),
(52, 153, 455, 5, 3, '', ''),
(53, 154, 461, 8, 4, '', ''),
(54, 154, 461, 8, 5, '', ''),
(55, -1, -1, -1, 1, '', ''),
(56, 0, 0, 0, 0, '$type', '$duration'),
(57, 156, 460, 3, 3, 'Syrup', '1-0-1'),
(58, 156, 460, 7, 7, 'Syrup', '0-0-1'),
(59, 162, 461, 10, 12, 'Syrup', '1-0-1'),
(60, 162, 461, 7, 4, 'Tablet', '1-1-1'),
(61, 163, 460, 6, 7, 'Tablet', '1-0-1'),
(62, 163, 460, 4, 5, 'Tablet', '1-0-1'),
(63, 164, 459, 14, 6, 'Tablet', '1-1-1'),
(64, 164, 459, 9, 4, 'Syrup', '0-0-1'),
(65, 165, 463, 3, 4, 'Tablet', '1-0-1'),
(66, 165, 463, 13, 1, 'Tablet', '1-1-1'),
(67, 167, 464, 9, 6, 'Tablet', '1-1-1'),
(68, -1, -1, -1, 1, '', ''),
(69, -1, -1, -1, 1, '', ''),
(70, -1, -1, -1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(20) NOT NULL,
  `fullname` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL,
  `cardtype` varchar(10) NOT NULL,
  `nameoncard` varchar(10) NOT NULL,
  `creditcardnumber` int(20) NOT NULL,
  `expmonth` varchar(20) NOT NULL,
  `expyear` varchar(20) NOT NULL,
  `cvv` int(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `fullname`, `address`, `cardtype`, `nameoncard`, `creditcardnumber`, `expmonth`, `expyear`, `cvv`, `amount`) VALUES
(1, 'Neethu', 'manayathum', 'visa', 'bvbnv', 1234, 'April', '2019-05-07', 234, 515),
(2, 'Neethu', 'manayathum', 'visa', 'bvbnv', 1234, 'April', '2019-05-07', 234, 515),
(3, 'Neethu', 'manayathum', 'Master car', 'jeslin geo', 1234, 'January', '2019-05-21', 98, 515),
(4, 'Neethu', 'manayathum', 'Master car', 'libin', 1234, 'January', '2019-05-08', 234, 515),
(5, 'Neethu', 'manayathum', 'Master car', 'libin', 1234, 'January', '2019-05-08', 234, 515),
(6, 'Neethu', 'manayathum', 'Master car', 'libin', 1234, 'January', '2019-05-08', 234, 515),
(7, 'Neethu', 'manayathum', 'Master car', 'libin', 1234, 'January', '2019-05-08', 234, 515),
(8, '$a', '$c', '$k', '$e', 0, '$g', '$h', 0, 0),
(9, 'Neethu', 'manayathum', 'Rupay', 'jomy', 1234, 'January', '2019-05-07', 234, 515),
(10, 'Neethu', 'manayathum', 'Master car', 'jomy', 2345, 'May', '2019-05-07', 98, 515),
(11, 'Neethu', 'manayathum', 'Master car', 'jomy', 2345, 'May', '2019-05-07', 98, 515),
(12, 'Neethu', 'manayathum', 'Master car', 'jomy', 2345, 'May', '2019-05-07', 98, 515),
(13, 'Neethu', 'manayathum', 'Master car', 'jomy', 2345, 'May', '2019-05-07', 98, 515);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `state_id` int(20) NOT NULL,
  `District_id` int(10) NOT NULL,
  `DOJ` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `yoe` int(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `name`, `birth`, `address`, `phonenumber`, `Photo`, `gender`, `state_id`, `District_id`, `DOJ`, `qualification`, `yoe`, `email`) VALUES
(3, 'rithu', '2019-03-11', 'asdfdfghhj', '9745529554', 'd9.jpg', 'female', 0, 3, '2019-03-21', 'Bpharm', 2, 'rithu@gmail.com'),
(5, 'Nissy Abraham', '2019-04-04', 'manayathumalil', '9878675645', '3324-190x190.jpg', 'female', 2, 3, '2019-04-10', 'Degree', 5, 'nissy@gmail.com'),
(7, 'Riya Cheriyan', '2019-04-12', 'manayathumalil', '9878675645', 'dricon.jpg', 'female', 1, 2, '2019-04-09', 'Degree', 3, 'riya@gmail.com'),
(8, 'Gince Thomas', '1992-08-05', 'puthaenveetil', '9496808005', 'd4.jpg', 'male', 2, 3, '2015-06-09', 'MBBS', 4, 'Gince@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `salaryd`
--

CREATE TABLE `salaryd` (
  `sid` int(50) NOT NULL,
  `id` int(20) NOT NULL,
  `basicpay` int(50) NOT NULL,
  `dearnessallowance` int(50) NOT NULL,
  `conveyanceallowance` int(50) NOT NULL,
  `medicalallowance` int(50) NOT NULL,
  `houserentallowance` int(50) NOT NULL,
  `foodallowance` int(50) NOT NULL,
  `professionaltax` int(50) NOT NULL,
  `providentfund` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salaryd`
--

INSERT INTO `salaryd` (`sid`, `id`, `basicpay`, `dearnessallowance`, `conveyanceallowance`, `medicalallowance`, `houserentallowance`, `foodallowance`, `professionaltax`, `providentfund`) VALUES
(1, 37, 10000, 5000, 2000, 1500, 2000, 600, 200, 1200),
(2, 38, 20000, 1000, 1000, 2000, 2000, 1500, 200, 500),
(4, 41, 20000, 500, 1000, 2000, 2000, 1500, 200, 1200),
(6, 42, 20000, 500, 1000, 2000, 2000, 1500, 200, 1200),
(7, 47, 20000, 500, 1000, 2000, 2000, 1500, 200, 500),
(10, 47, 20000, 500, 1000, 2000, 2000, 1500, 200, 500),
(11, 47, 20000, 500, 1000, 2000, 2000, 1500, 200, 500),
(12, 43, 20000, 5000, 1000, 2000, 2000, 1500, 200, 500),
(13, 43, 20000, 5000, 1000, 2000, 2000, 1500, 200, 500);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_id` int(20) NOT NULL,
  `Statename` varchar(20) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_id`, `Statename`, `Status`) VALUES
(1, 'kerala', 1),
(2, 'thamilnadu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `otpid` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `otp` int(20) NOT NULL,
  `status` int(20) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`otpid`, `email`, `otp`, `status`, `count`) VALUES
(1, 'jeslinmg@gmail.com', 526060, 1, 3),
(2, 'jeslinmg@gmail.com', 452353, 1, 3),
(3, 'jeslinmg@gmail.com', 610149, 1, 3),
(4, 'jeslinmg@gmail.com', 546066, 1, 3),
(5, 'jeslinmg@gmail.com', 470903, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `uniqueid`
--

CREATE TABLE `uniqueid` (
  `keyid` int(10) NOT NULL,
  `keystring` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uniqueid`
--

INSERT INTO `uniqueid` (`keyid`, `keystring`, `status`) VALUES
(1, 'fdfdg582', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `Userid` int(20) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `State_id` int(10) NOT NULL,
  `District_id` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`Userid`, `login_id`, `name`, `DOB`, `address`, `phonenumber`, `Photo`, `gender`, `State_id`, `District_id`, `status`) VALUES
(450, 183, 'Anitha v', '1970-09-08', 'qwert', '9878675645', 'user2.jpg', 'Female', 1, 2, 1),
(451, 190, 'jeslin', '1970-09-08', 'RANNY', '9976543234', 'jes.png.png', 'Female', 1, 2, 1),
(452, 192, 'Reji Thomas', '1970-09-08', 'manayathumalil', '9878675645', 'd18.jpg', 'Male', 1, 2, 1),
(453, 196, 'Nissy Sunny', '1970-09-08', 'manayathumalil', '9994455223', 'images (3).jpg', 'Female', 1, 2, 1),
(454, 197, 'Anju Benny', '1970-09-08', 'manayathumalil', '9878675645', 'images (4).jpg', 'Female', 2, 3, 1),
(455, 199, 'Chippy Prasad', '1970-09-08', 'manayathumalil', '9878675645', 'images (9).jpg', 'GENDER', 1, 1, 1),
(459, 203, 'Aparna Santhosh', '1970-09-08', 'manayathumalil', '9878675645', 'images (4).jpg', 'Female', 1, 2, 1),
(460, 204, 'surya ', '1970-09-08', 'manayathumalil', '9878675645', 'images (4).jpg', 'Female', 1, 2, 1),
(461, 205, 'Neethu', '1970-09-08', 'manayathumalil', '9947802826', 'images (7).jpg', 'Female', 1, 2, 1),
(462, 210, 'Kiran vargheese', '1970-09-08', 'qwert', '9878675645', 'd11.jpg', 'Male', 1, 1, 1),
(463, 218, 'noel', '1970-09-08', 'Erumedayil', '9495437320', 'd18.jpg', 'Male', 1, 2, 1),
(464, 223, 'Riya', '1970-09-08', 'vadakkeparambil', '9544103818', 'user1.jpg', 'female', 1, 2, 1),
(467, 229, 'George Mathew', '1970-09-08', 'manayathumalil', '9878675645', 'user1.jpg', 'male', 2, 3, 1),
(469, 231, 'sinu', '1970-09-08', 'manayathumalil', '9988776655', '	\r\nuser1.jpg', 'GENDER', 2, 3, 1),
(470, 232, 'Renjith Babu', '1970-09-08', 'manayathumalil', '9878675645', 'images (8).jpg', 'female', 1, 2, 1),
(471, 233, 'shbin Thomas', '1970-09-08', 'arikinethu', '9878675645', 'images (1).jpg', 'male', 1, 1, 1),
(472, 234, 'Anna Vargheeses', '1970-09-08', 'thekattil', '9856453455', 'images (5).jpg', 'female', 1, 1, 0),
(473, 235, 'jessy varghhese', '2019-05-15', 'koovapally', '9878675645', 'e2.jpg', 'female', 1, 1, 1),
(474, 236, 'AmruthaDavid', '2019-05-14', 'manayathumalil', '9878675645', 'images (4).jpg', 'female', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `usertypeid` int(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`usertypeid`, `usertype`, `status`) VALUES
(1, 'admin', 1),
(2, 'user', 1),
(3, 'doctor', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `checkup_details`
--
ALTER TABLE `checkup_details`
  ADD PRIMARY KEY (`checkdetails_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`District_id`),
  ADD KEY `State_id` (`State_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medid`);

--
-- Indexes for table `medquantity`
--
ALTER TABLE `medquantity`
  ADD PRIMARY KEY (`quanityId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryd`
--
ALTER TABLE `salaryd`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`otpid`);

--
-- Indexes for table `uniqueid`
--
ALTER TABLE `uniqueid`
  ADD PRIMARY KEY (`keyid`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`usertypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `checkup_details`
--
ALTER TABLE `checkup_details`
  MODIFY `checkdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `District_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  MODIFY `scheduleId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `lid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `medquantity`
--
ALTER TABLE `medquantity`
  MODIFY `quanityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salaryd`
--
ALTER TABLE `salaryd`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `otpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uniqueid`
--
ALTER TABLE `uniqueid`
  MODIFY `keyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `Userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `usertypeid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
