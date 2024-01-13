-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2023 at 05:19 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbbikelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelanceadminlogin`
--

CREATE TABLE IF NOT EXISTS `tblbikelanceadminlogin` (
  `admin_loginid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_loginid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblbikelanceadminlogin`
--

INSERT INTO `tblbikelanceadminlogin` (`admin_loginid`, `admin_username`, `admin_password`) VALUES
(1, 'anandhu', '1234'),
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancebike`
--

CREATE TABLE IF NOT EXISTS `tblbikelancebike` (
  `bike_id` int(11) NOT NULL AUTO_INCREMENT,
  `bike_registrationnumber` varchar(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `bike_year` int(11) NOT NULL,
  `bike_images` varchar(50) NOT NULL,
  PRIMARY KEY (`bike_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tblbikelancebike`
--

INSERT INTO `tblbikelancebike` (`bike_id`, `bike_registrationnumber`, `model_id`, `bike_year`, `bike_images`) VALUES
(1, 'KL11B1109', 1, 2005, 'dio1.jpg'),
(3, 'KL44A2045', 4, 2005, 'activa.jpg'),
(4, 'KL44F917', 3, 2002, 'Yamaha_Rx_100.jpg'),
(5, 'KL17R1648', 2, 2017, 'RE-Hunter-350-exhaust.jpg'),
(6, 'KL32G1517', 5, 2015, 're500.jpg'),
(7, 'KL17A7311', 6, 2022, 'fatboy.jpg'),
(8, 'KL32E7643', 8, 2020, 'aprilia-sr-160.jpg'),
(9, 'KL44A1517', 8, 2019, 'ktm.jpg'),
(10, 'KL31J4445', 9, 2017, 'hondacb300f-.jpg'),
(11, 'KL17A3298', 10, 2022, 'splendor.jpg'),
(12, 'KL61A6543', 10, 2019, 'bajajplatina.jpg'),
(13, 'KL44A4325', 12, 2022, 'enfield-meteor-350.JPG'),
(14, 'KL22AC2125', 13, 2020, 'avengercruise.jpg'),
(15, 'KL10F2047', 3, 2005, 'Yamaha_Rx_100.jpg'),
(16, 'KL10A2081', 4, 2006, 'activa.jpg'),
(17, 'KL10305', 8, 2007, 'ktm.jpg'),
(18, 'KL10202', 2, 2002, 're500.jpg'),
(19, 'KL10S222', 10, 2012, 'splendor.jpg'),
(20, 'KL10D2032', 7, 2006, 'aprilia-sr-160.jpg'),
(21, 'KL23D2342', 11, 2006, 'bajajplatina.jpg'),
(22, 'KL24D3344', 29, 2015, 'harleydavidson.jpg'),
(23, 'KL10S2037', 14, 2002, 'scooter.jpg'),
(24, 'KL45G2136', 15, 2010, 'wego.jpg'),
(25, 'KL44R4432', 16, 2015, 'splendor.jpg'),
(26, 'KL17C1298', 17, 2014, 'destini.jpg'),
(27, 'KL68A0357', 18, 2016, 'fascino.jpg'),
(28, 'KL06G1825', 19, 2018, 'ray.jpg'),
(29, 'KL44A4566', 20, 2019, 'apachea rtr160.jpg'),
(30, 'KL32F7654', 22, 2015, 'shine.jpg'),
(31, 'KL69B3421', 23, 2016, 'unicorn.jpg'),
(32, 'KL44E9087', 24, 2017, 'passionpro.jpg'),
(33, 'KL65D5643', 25, 2016, 'glamour.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancebikemodel`
--

CREATE TABLE IF NOT EXISTS `tblbikelancebikemodel` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `bike_modelname` varchar(20) NOT NULL,
  `type_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `bike_modelcc` varchar(10) NOT NULL,
  `bike_modelimages` varchar(50) NOT NULL,
  `bike_rentamount` int(11) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tblbikelancebikemodel`
--

INSERT INTO `tblbikelancebikemodel` (`model_id`, `bike_modelname`, `type_id`, `company_id`, `bike_modelcc`, `bike_modelimages`, `bike_rentamount`) VALUES
(1, 'dio', 1, 2, '90', 'dio1.jpg', 250),
(2, 'RE 350', 3, 9, '350', 'enfield-meteor-350.JPG', 500),
(3, 'RX100', 5, 5, '100', 'Yamaha_Rx_100.jpg', 400),
(4, 'activa', 1, 2, '90', 'activa.jpg', 250),
(5, 'RE 550', 3, 9, '500', 'RE-Hunter-350-exhaust.jpg', 600),
(6, 'Fatboy', 4, 5, '1000', 'fatboy.jpg', 800),
(7, 'aprilia', 1, 1, '160', 'aprilia-sr-160.jpg', 300),
(8, 'Duke 350', 3, 11, '350', 'ktm.jpg', 800),
(9, 'CB 300F', 3, 2, '300', 'hondacb300f-.jpg', 400),
(10, 'splendor', 5, 3, '100', 'casual.jpg', 300),
(11, 'platina', 5, 6, '90', 'bajajplatina.jpg', 300),
(12, 'Meteor 350', 4, 9, '350', 'enfield-meteor-350.JPG', 700),
(13, 'Avenger Cruise', 4, 6, '220', 'avengercruise.jpg', 800),
(29, 'Harley', 3, 10, '1200', 'harleydavidson.jpg', 5500),
(14, 'Chetak', 1, 1, '200', 'scooter.jpg', 400),
(15, 'Wego', 1, 1, '125', 'wego.jpg', 250),
(16, 'Maestro', 1, 3, '125', 'maestro.jpg', 250),
(17, 'Destini', 1, 3, '125', 'destini.jpg', 200),
(18, 'Fascino', 1, 5, '125', 'fascino.jpg', 300),
(19, 'Ray', 1, 5, '125', 'ray.jpg', 200),
(20, 'Apache RTR ', 5, 1, '160', 'apachea rtr160.jpg', 400),
(22, 'Shine', 5, 2, '124', 'shine.jpg', 400),
(23, 'Unicorn', 5, 2, '160', 'unicorn.jpg', 400),
(24, 'Passion pro', 5, 3, '110', 'passionpro.jpg', 300),
(25, 'Glamour', 5, 3, '124', 'glamour.jpg', 300),
(26, 'Xtreme', 5, 3, '163', 'Extreme.jpg', 400),
(27, 'CT', 5, 6, '102', 'bajajCT.jpg', 250),
(28, 'Discover', 5, 6, '125', 'discover.jpg', 300),
(30, 'R15V4', 3, 5, '155', 'R15.jpg', 2000),
(31, 'Iron883', 4, 10, '883', 'iron883.jpg', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancebiketype`
--

CREATE TABLE IF NOT EXISTS `tblbikelancebiketype` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `bike_typename` varchar(20) NOT NULL,
  `bike_typediscription` varchar(50) NOT NULL,
  `type_img` varchar(255) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblbikelancebiketype`
--

INSERT INTO `tblbikelancebiketype` (`type_id`, `bike_typename`, `bike_typediscription`, `type_img`) VALUES
(1, 'scooter', 'scooter', 'scooter.jpg'),
(3, 'super bike', 'new bikes', 'superbike.jpg'),
(4, 'cruiser', 'it is cruiser model', 'cruiser.jpg'),
(5, 'Casual', 'Ordinary bikes', 'casual.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancecompany`
--

CREATE TABLE IF NOT EXISTS `tblbikelancecompany` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `bike_companyname` varchar(20) NOT NULL,
  `bike_companyopeningdate` date NOT NULL,
  `bike_companylocation` varchar(30) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tblbikelancecompany`
--

INSERT INTO `tblbikelancecompany` (`company_id`, `bike_companyname`, `bike_companyopeningdate`, `bike_companylocation`) VALUES
(1, 'TVS', '2020-06-17', 'Chennai'),
(2, 'honda', '2022-08-21', 'MUMBAI'),
(3, 'hero', '2022-08-25', 'Bombay'),
(5, 'yamaha', '2022-08-11', 'BombaY'),
(6, 'bajaj', '2022-08-13', 'delhi'),
(9, 'RE', '2022-08-08', 'Chennai'),
(10, 'harley davidson', '1952-03-20', 'America'),
(11, 'KTM', '1934-06-25', 'Upper Austria');

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancecustomer`
--

CREATE TABLE IF NOT EXISTS `tblbikelancecustomer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(20) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_phonenumber` bigint(20) NOT NULL,
  `customer_licencenumber` varchar(20) NOT NULL,
  `customer_aadharnumber` bigint(11) NOT NULL,
  `customer_password` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tblbikelancecustomer`
--

INSERT INTO `tblbikelancecustomer` (`customer_id`, `customer_name`, `customer_address`, `customer_email`, `customer_gender`, `customer_phonenumber`, `customer_licencenumber`, `customer_aadharnumber`, `customer_password`) VALUES
(1, 'alen thomas', 'polachira', 'alen@gmail.com', 'male', 8592960728, 'kl17244', 237590, '4321'),
(2, 'anandhu', 'pappadiyil', 'anandhu@gmail.com', 'male', 9567143976, 'kl1724', 237590, '123'),
(3, 'blaise', 'vazhayil', 'blaise@gmail.com', 'male', 125784525, 'kl1724', 23759058, '1235'),
(4, 'Arun Raj', 'dfg', 'arunrajagopalan1999@gmail.com', 'Male', 8921757957, '1234567', 1234567, '123'),
(6, 'Sujith PB', 'qwer', 'Sujith', 'Male', 9887665677, '1234567', 12345678, '123'),
(17, 'Alby Sunny ', 'Moolayil H', 'annabenchy27@gmail.com', '2', 8086717940, 'KL17777', 623456222222, 'bikelance27#@0'),
(20, 'Alphonsa Jose', 'Malekudiyil', 'christinejoe067@gmail.com', '2', 6282428571, 'KL33377', 623456223332, 'bikelance22#@0'),
(24, 'Anna Benchy', 'Vettickattu h', 'jokxy2000@gmail.com', '2', 8086717940, 'KL45733', 623456111222, 'bikelance25#@0'),
(28, 'george', 'thodupuzha', 'georgebenny2002@gmail.com', '1', 9645042636, 'KL43522', 233445634567, 'bikelance29#@0'),
(30, 'george', 'thodupuzha', 'anandhusahadevan24@gmail.com', '1', 9645042636, 'KL43522', 233445634567, 'bikelance31#@0'),
(35, 'George Hentry', 'Karimannor', 'annabenchy27@gmail.com', '1', 7510771559, 'KL43777', 777445634777, 'bikelance21#@0'),
(37, 'Christine Joe', 'Kurunji', 'christinejoe067@gmail.com', '2', 7510771559, 'KL4377222223345', 777445634555, 'bikelance22#@0');

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancerent`
--

CREATE TABLE IF NOT EXISTS `tblbikelancerent` (
  `rent_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `bike_registrationnumber` int(11) NOT NULL,
  `bike_currentkm` int(11) NOT NULL,
  `bike_rentdate` date NOT NULL,
  `advanceamount` int(11) NOT NULL,
  `bike_renttodate` date NOT NULL,
  `rentstatus` varchar(255) NOT NULL,
  `rentreturndate` date NOT NULL,
  `rentamount` int(11) NOT NULL,
  PRIMARY KEY (`rent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblbikelancerent`
--

INSERT INTO `tblbikelancerent` (`rent_id`, `request_id`, `bike_id`, `bike_registrationnumber`, `bike_currentkm`, `bike_rentdate`, `advanceamount`, `bike_renttodate`, `rentstatus`, `rentreturndate`, `rentamount`) VALUES
(2, 1, 6, 2147483647, 1000, '2022-09-30', 1500, '2022-09-30', 'Rent Completed', '2022-09-30', 13500),
(3, 2, 10, 0, 100000, '2022-09-30', 1800, '2022-10-10', 'Rent Completed', '2022-09-30', 1200),
(4, 4, 4, 1234, 345, '2022-09-30', 456, '2022-10-10', 'Rent Completed', '2022-10-01', 144),
(5, 5, 11, 12345, 1800, '2022-10-01', 1000, '2022-10-13', 'Rent Completed', '2022-10-01', 1700),
(6, 6, 1, 0, 150, '2022-10-06', 200, '2022-10-15', 'Rent Completed', '2022-10-06', 1550),
(7, 8, 10, 0, 100, '2022-10-06', 1000, '2022-10-23', 'On Rent', '0000-00-00', 0),
(8, 9, 7, 0, 300, '2022-10-10', 500, '2022-10-20', 'Rent Completed', '2022-10-10', 250),
(9, 12, 1, 0, 210, '2022-10-17', 1000, '2022-10-24', 'Rent Completed', '2022-10-17', 1000),
(10, 14, 0, 0, 1000, '2022-11-04', 200, '2022-11-24', 'On Rent', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblbikelancerequest`
--

CREATE TABLE IF NOT EXISTS `tblbikelancerequest` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `bike_requestdate` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bike_requestfromdate` date NOT NULL,
  `bike_requesttodate` date NOT NULL,
  `bike_status` varchar(20) NOT NULL,
  `bike_purpose` varchar(50) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `rentamount` int(11) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tblbikelancerequest`
--

INSERT INTO `tblbikelancerequest` (`request_id`, `bike_requestdate`, `customer_id`, `bike_requestfromdate`, `bike_requesttodate`, `bike_status`, `bike_purpose`, `bike_id`, `rentamount`) VALUES
(1, '2022-09-30', 6, '2022-10-01', '2022-10-09', 'Rent Completed', 'bn', 6, 12000),
(2, '2022-09-30', 6, '2022-10-01', '2022-10-10', 'Rent Completed', 'Party', 10, 2700),
(3, '2022-09-30', 6, '2022-12-01', '2022-12-10', 'Accepted', 'Trip', 10, 2700),
(4, '2022-09-30', 6, '2022-10-01', '2022-10-10', 'Rent Completed', 'Trip', 4, 2700),
(5, '2022-10-01', 5, '2022-10-03', '2022-10-13', 'Rent Completed', 'bnm', 11, 3000),
(6, '2022-10-06', 4, '2022-10-13', '2022-10-15', 'Rent Completed', '', 1, 500),
(7, '2022-10-06', 4, '2022-10-13', '2022-10-27', 'Pending', 'vbn', 11, 4200),
(8, '2022-10-06', 4, '2022-10-13', '2022-10-23', 'On Rent', '', 10, 3000),
(9, '2022-10-10', 4, '2022-10-11', '2022-10-19', 'Rent Completed', 'Tour', 7, 1200),
(10, '2022-10-16', 4, '2022-10-18', '2022-10-25', 'Rejected', 'Daily use', 1, 1750),
(11, '2022-10-17', 4, '2022-10-18', '2022-10-25', 'Pending', 'trip', 8, 280000),
(12, '2022-10-17', 2, '2022-10-17', '2022-10-24', 'Rent Completed', 'rent', 1, 1750),
(13, '2022-10-31', 2, '2022-10-25', '2022-10-26', 'Accepted', 'abc', 5, 600),
(14, '2022-11-01', 2, '2022-11-17', '2022-11-24', 'On Rent', 'trip', 10, 2100),
(15, '2022-11-02', 2, '2022-11-03', '2022-11-10', 'Pending', 'trip', 4, 1750),
(16, '2022-11-02', 2, '2022-11-09', '2022-11-16', 'Pending', 'Ride', 2, 3500),
(17, '2022-11-04', 2, '2022-11-11', '2022-11-13', 'Pending', 'Trip', 4, 500),
(18, '2022-11-04', 1, '2022-11-05', '2022-11-08', 'Pending', 'Trip', 8, 2400),
(19, '2022-11-04', 1, '2022-11-09', '2022-11-16', 'Pending', 'Trip', 14, 2800),
(20, '2022-11-04', 2, '2022-11-05', '2022-11-06', 'Pending', 'Trip', 1, 250);
