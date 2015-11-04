-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2015 at 04:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ngo`
--

CREATE TABLE IF NOT EXISTS `admin_ngo` (
  `admin_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ph_num` int(15) NOT NULL,
  `admin_pic` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_add`
--

CREATE TABLE IF NOT EXISTS `ngo_add` (
  `ngoid` varchar(20) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin_code` int(6) NOT NULL,
  `add_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_detail`
--

CREATE TABLE IF NOT EXISTS `ngo_detail` (
  `ngo_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ngo_add` varchar(50) NOT NULL,
  `ph_number` int(15) NOT NULL,
  `ngo_type` varchar(30) NOT NULL,
  `ngo_logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pt_cat`
--

CREATE TABLE IF NOT EXISTS `pt_cat` (
  `pid` varchar(20) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pt_list`
--

CREATE TABLE IF NOT EXISTS `pt_list` (
  `pt_num` varchar(20) NOT NULL,
  `pt_about` varchar(1000) DEFAULT NULL,
  `pt_type` varchar(10) NOT NULL,
  `ngo_id` varchar(20) NOT NULL,
  `pt_pic` blob,
  `pt_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ngo`
--
ALTER TABLE `admin_ngo`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ngo_add`
--
ALTER TABLE `ngo_add`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `ngo_detail`
--
ALTER TABLE `ngo_detail`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `pt_cat`
--
ALTER TABLE `pt_cat`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pt_list`
--
ALTER TABLE `pt_list`
  ADD PRIMARY KEY (`pt_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
