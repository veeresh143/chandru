-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2014 at 05:12 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `staff_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(10) default NULL,
  `middle_name` varchar(10) default NULL,
  `last_name` varchar(10) default NULL,
  `date_of_joining_department` date default NULL,
  `date_of_joining_police_station` date default NULL,
  `caste` varchar(10) default NULL,
  `designation` varchar(10) default NULL,
  `experience` int(11) default NULL,
  `line1` varchar(20) default NULL,
  `line2` varchar(20) default NULL,
  `line3` varchar(20) default NULL,
  `district` varchar(10) default NULL,
  `state` varchar(10) default NULL,
  `pincode` int(11) default NULL,
  `phone_no1` int(11) default NULL,
  `phone_no2` int(11) default NULL,
  `mobile` int(11) default NULL,
  `blood_group` varchar(5) default NULL,
  `line11` varchar(10) default NULL,
  `line22` varchar(10) default NULL,
  `line33` varchar(10) default NULL,
  `district1` varchar(10) default NULL,
  `state1` varchar(10) default NULL,
  `pincode1` int(11) default NULL,
  `phone_no11` int(11) default NULL,
  `phone_no22` int(11) default NULL,
  `mobile1` int(11) default NULL,
  PRIMARY KEY  (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `add_staff`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) default NULL,
  `password` varchar(10) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complainant`
--

CREATE TABLE `complainant` (
  `complainant_id` int(11) NOT NULL default '0',
  `name` varchar(10) default NULL,
  `middle_name` varchar(10) default NULL,
  `last_name` varchar(10) default NULL,
  `age` int(11) default NULL,
  `occupation` varchar(15) default NULL,
  `caste` varchar(10) default NULL,
  `nationality` varchar(10) default NULL,
  `address` varchar(30) default NULL,
  PRIMARY KEY  (`complainant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complainant`
--


-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL default '0',
  `type_of_case` varchar(15) default NULL,
  `complaint_against` varchar(15) default NULL,
  `description` varchar(50) default NULL,
  PRIMARY KEY  (`complaint_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--


-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `first_name` varchar(10) default NULL,
  `middle_name` varchar(10) default NULL,
  `last_name` varchar(10) default NULL,
  `date_of_birth` date default NULL,
  `age` int(11) default NULL,
  `gender` varchar(5) default NULL,
  `nationality` varchar(10) default NULL,
  `category` varchar(10) default NULL,
  `line1` varchar(10) default NULL,
  `line2` varchar(10) default NULL,
  `line3` varchar(10) default NULL,
  `district` varchar(10) default NULL,
  `state` varchar(20) default NULL,
  `pincode` int(11) default NULL,
  `phone_no1` int(11) default NULL,
  `phone_no2` int(11) default NULL,
  `mobile` int(11) default NULL,
  `email` varchar(20) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal`
--


-- --------------------------------------------------------

--
-- Table structure for table `duty_allocation`
--

CREATE TABLE `duty_allocation` (
  `first_name` varchar(10) default NULL,
  `area` varchar(20) default NULL,
  `date` date default NULL,
  `time_from` varchar(10) default NULL,
  `time_to` varchar(10) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty_allocation`
--


-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `FIR_ID` int(5) NOT NULL auto_increment,
  `police_station` varchar(15) default NULL,
  `taluk` varchar(10) default NULL,
  `distict` varchar(10) default NULL,
  `crime_no` int(5) default NULL,
  `type_of_case` varchar(15) default NULL,
  `date` date default NULL,
  `section` int(11) default NULL,
  `act` int(11) default NULL,
  `occurance_of_offence_day` date default NULL,
  `time` varchar(10) default NULL,
  `Information_received_at_the_ps` varchar(20) default NULL,
  `reason_for_delay` varchar(20) default NULL,
  `place_of_occurance` varchar(10) default NULL,
  `distance_from_ps` varchar(10) default NULL,
  PRIMARY KEY  (`FIR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `fir`
--


-- --------------------------------------------------------

--
-- Table structure for table `image_data`
--

CREATE TABLE `image_data` (
  `name` varchar(10) default NULL,
  `login_id` varchar(10) default NULL,
  `password` varchar(10) default NULL,
  `image_type` varchar(20) default NULL,
  `image_width` int(11) default NULL,
  `image_height` int(11) default NULL,
  `image_data` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_data`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `username` varchar(10) default NULL,
  `password` varchar(10) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`) VALUES
('staff', 'staff');
