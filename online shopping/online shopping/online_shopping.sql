-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 02:48 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE IF NOT EXISTS `booking_tb` (
  `bid` int(100) NOT NULL AUTO_INCREMENT,
  `sid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `quality` varchar(1000) NOT NULL,
  `price` int(100) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `cid` int(100) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `booking_tb`
--

INSERT INTO `booking_tb` (`bid`, `sid`, `pid`, `quality`, `price`, `status`, `cid`) VALUES
(1, 4, 1, '1', 1500, 'approved', 1),
(2, 4, 1, '1', 1500, 'approved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE IF NOT EXISTS `customer_tb` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`cid`, `name`, `address`, `phone`, `gender`, `email`, `username`, `password`, `status`) VALUES
(1, 'anu', 'kannur', 123456, 'Female', 'anu@gmail.com', 'anu123', '123anu', 'approved'),
(3, 'manu', 'kannur', 456321, 'male', 'manu@gmail.com', 'manu123', '123manu', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE IF NOT EXISTS `product_tb` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quality` varchar(1000) NOT NULL,
  `price` int(100) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `sid` varchar(1000) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`pid`, `pname`, `description`, `quality`, `price`, `picture`, `sid`) VALUES
(1, 'anu', 'good', '9', 1500, '2.jpg', '4'),
(2, 'manu', 'good', '10', 2000, '4.jpg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `seller_tb`
--

CREATE TABLE IF NOT EXISTS `seller_tb` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `seller_tb`
--

INSERT INTO `seller_tb` (`cid`, `name`, `address`, `phone`, `email`, `username`, `password`, `status`, `description`) VALUES
(4, 'anu', 'kannur', 123456, 'aa@gmail.com', 'anu@gmail.com', 'anu123', 'approved', 'good'),
(5, 'manu', 'kannur', 456321, 'manu@gmail.com', 'manu123', '123manu', 'approved', 'good'),
(6, 'abi', 'kochi', 123456, 'abi@gmail.com', 'abi123', '123abi', 'approved', 'good');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
