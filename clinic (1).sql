-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 07:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

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
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `cid` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactno` int(15) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `locations` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(10) NOT NULL,
  `dname` varchar(255) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `contactno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `portfolio` varchar(255) NOT NULL,
  `nmcno` int(10) DEFAULT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `rtopic` varchar(255) DEFAULT NULL,
  `rdetails` varchar(255) DEFAULT NULL,
  `experince` varchar(255) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `specialist`, `contactno`, `email`, `portfolio`, `nmcno`, `hospital`, `rtopic`, `rdetails`, `experince`, `fdate`, `todate`) VALUES
(2, 'Dr. Ramesh Bayak', 'hjgsf', 0, 'rameshasmi66@gmail.com', 'djmfs', 5564, 'Civil Hospital', 'asdfg', 'sdfghjk', '2 year', '2019-08-22', '2019-08-31'),
(3, 'Dr. Ramesh Bayak', 'hjgsf', 0, 'rameshasmi66@gmail.com', 'djmfs', 5564, 'Civil Hospital', 'asdfg', 'sdfghjk', '2 year', '2019-08-22', '2019-08-31'),
(4, 'Dr. Ramesh Bayak', 'hjgsf', 0, 'rameshasmi66@gmail.com', 'djmfs', 5564, 'Civil Hospital', 'asdfg', 'sdfghjk', '2 year', '2019-08-22', '2019-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE `doctorinfo` (
  `cid` int(10) DEFAULT NULL,
  `dname` varchar(255) DEFAULT NULL,
  `did` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `cid` int(10) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `contents` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`cid`, `services`, `contents`) VALUES
(NULL, 'USG', 'sjhff'),
(NULL, 'SSSSSSSSSSSSSSSSS', 'bbbb'),
(NULL, 'Lab', 'jjj'),
(NULL, 'lkjh', 'ghj'),
(NULL, 'lkjh', 'ghj'),
(NULL, 'lkjh', 'ghj'),
(NULL, 'lkjh', 'ghj'),
(NULL, 'USG', '4'),
(NULL, 'USG', '4'),
(NULL, 'USG', '4'),
(NULL, 'USG', '4'),
(NULL, 'ECG', '4'),
(NULL, 'ECG', '4'),
(NULL, 'ECG', '4'),
(NULL, 'ECG', '4'),
(NULL, 'Lab', 'acs'),
(NULL, 'Lab', 'csa'),
(NULL, 'Lab', 'sdd'),
(NULL, 'Lab', 'sdd'),
(NULL, 'Lab', 'acs'),
(NULL, 'Lab', 'csa'),
(NULL, 'Lab', 'sdd'),
(NULL, 'Lab', 'sdd'),
(NULL, 'Lab', 'acs'),
(NULL, 'Lab', 'csa'),
(NULL, 'Lab', 'sdd'),
(NULL, 'Lab', 'sdd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `cid_2` (`cid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD KEY `cid` (`cid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD CONSTRAINT `doctorinfo_ibfk_2` FOREIGN KEY (`did`) REFERENCES `doctor` (`did`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
