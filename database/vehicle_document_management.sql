-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 25, 2023 at 07:09 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `vehicle_document_management`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `password` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `name`, `password`) VALUES 
('002', 'spoorti ', '2003'),
('003', 'sushma dalawai', '4567'),
('004', 'bhumika jambagi', 'bhumika@alt'),
('005', 'sumanth patil', '9019'),
('006', 'sagar pasannavar', '6363'),
('007', 'indumati M G ', '4242'),
('008', 'K N Prajna ', '0236'),
('009', 'Komal bolishetti ', '5701'),
('010', 'Anvita savalagi ', 'anvita123'),
('010', 'Anvita savalagi ', 'anvita123'),
('234', 'jimin', '3445'),
('987', 'suga', '878'),
('987', 'suga', '878');

-- --------------------------------------------------------

-- 
-- Table structure for table `driving_licence`
-- 

CREATE TABLE `driving_licence` (
  `licence_number` varchar(50) default NULL,
  `owner_name` varchar(50) default NULL,
  `mobile_number` varchar(50) default NULL,
  `email_id` varchar(50) default NULL,
  `date_of_birth` varchar(50) default NULL,
  `type_of_licence` varchar(50) default NULL,
  `type_of_vehicle` varchar(50) default NULL,
  `date_of_expire` varchar(50) default NULL,
  `date_of_recived` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `driving_licence`
-- 

INSERT INTO `driving_licence` (`licence_number`, `owner_name`, `mobile_number`, `email_id`, `date_of_birth`, `type_of_licence`, `type_of_vehicle`, `date_of_expire`, `date_of_recived`) VALUES 
('8406-722-81-600-0', 'john', '9113840605', 'john@gmail.com', '10/1/1999', 'learning licence', 'bike', '2/6/2020', '1/5/2015'),
('99-999-999', 'janice', '7985487585', 'janice@yahoo.com', '8/4/1975', 'permanant licence', 'jet', '8/5/2023', '3/1/2019'),
('A123-456-789-123', 'avery', '8088847208', 'joseph@yahoo.com', '15/8/1957', 'permanant licence', 'car', '15/8/2022', '15/8/2018'),
('WDLABCD456DG', 'suzy', '9019951907', 'sample@yahoo.com', '1/6/1997', 'temporary licence', 'sedan', '8/12/2020', '8/12/2015'),
('WHO**CL99095', 'kelvin', '7760331615', 'leonard@gamil.com', '25/12/2001', 'permanant', 'jet', '26/5/2022', '29/7/2017'),
('JK-0102002', 'sinchana', '8748785948', 'sinchu@gmail.com', '23/6/2010', 'permanant licence', 'electric car', '14/12/2025', '18/10/2002'),
('20130003278', 'sakshi', '8762245331', 'patil@gmail.com', '12/20/1987', 'learning licence', 'scooty', '22/9/2033', '23/9/2013'),
('987-654-321', 'michelle', '9916335707', 'mm@gmail.com', '31/10/2003', 'permamant licence', 'electric scooter', '31/10/2026', '3/7/2022'),
('B000009', 'spoorti', '8746991259', 'spasannavar@gmail.com', '30/9/2003', 'permamant licence', 'car', '29/9/2025', '4/6/2018'),
('8780-57781776', 'rishab', '8765845659', 'hemgiri@gmail.com', '12/9/2003', 'learning licence', 'suv', '9/12/2030', '2/7/2016'),
('56645', 'harish reddy', '6746009923', 'reddyh@gmail.com', '1/1/2000', 'learning', 'car', '8/10/2025', '5/6/2019'),
('4545', 'suresh', '09916335707', 'spoorti2003@gmai.com', '2023-03-25', 'Temporary Licence', 'jet', '2023-03-30', '2023-03-08');

-- --------------------------------------------------------

-- 
-- Table structure for table `insurance`
-- 

CREATE TABLE `insurance` (
  `vehicle_number` varchar(50) default NULL,
  `owner` varchar(50) default NULL,
  `vehicle_name` varchar(50) default NULL,
  `amount_for_vehicle` varchar(50) default NULL,
  `date_of_expire` varchar(50) default NULL,
  `date_d` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `insurance`
-- 

INSERT INTO `insurance` (`vehicle_number`, `owner`, `vehicle_name`, `amount_for_vehicle`, `date_of_expire`, `date_d`) VALUES 
('2321', 'dhruva', 'off-roader', '50,000', '5/11/2028', '3/2/2021'),
('6363', 'satwik', 'airboat', '3,50,000', '8/5/2009', '7/9/2005'),
('5480', 'spoorti', 'car', '7,00,000', '25/12/2027', '16/6/2019'),
('8970', 'pranav', 'aeroplane', '20,00,000', '5/6/2030', '13/2/2008'),
('2003', 'aman', 'sportsbike', '5,00,000', '14/5/2025', '6/9/2020'),
('7795', 'abhishek', 'ferry', '1,00,000', '10/4/2025', '3/3/2016'),
('3848', 'vikas', 'sedan', '4,50,000', '18/8/2009', '8/5/2003'),
('5538', 'hrishi', 'suv', '7,30,000', '15/4/2013', '15/3/2007'),
('234', 'jimin', 'bike', '23,555', '2/3/2323', '2/3/1212'),
('234', 'jhope', 'bike', '23,555', '2/3/2323', '2/3/1212'),
('234', 'rm', 'bike', '23,555', '2/3/2323', '2/3/1212'),
('56QT56', 'jimin', 'aeroplane', '900,000', '5/6/2032', '9/8/2020');

-- --------------------------------------------------------

-- 
-- Table structure for table `table_`
-- 

CREATE TABLE `table_` (
  `name` varchar(100) default NULL,
  `mobile_number` varchar(100) default NULL,
  `city` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `password` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `table_`
-- 

INSERT INTO `table_` (`name`, `mobile_number`, `city`, `address`, `password`) VALUES 
('jiminee', '08765845659', 'busan', 'korea,jdf', 'spoorti'),
('jiminee', '08765845659', 'busan', 'korea,jdf', 'spoorti'),
('jiminee', '08765845659', 'busan', 'korea,jdf', 'spoorti'),
('jiminee', '09019951907', 'bijapur', 'korea,jdf', 'jiminshii'),
('jiminee', '09019951907', 'bijapur', 'korea,jdf', 'jiminshii'),
('', '', '', '', ''),
('', '', '', '', ''),
('suga', '08765845659', 'busan', 'korea,jdf', 'jiminshii'),
('suga', '08765845659', 'busan', 'korea,jdf', 'jiminshii'),
('jiminee', '09019951907', 'busan', 'korea,jdf', 'spoorti'),
('jiminee', '09019951907', 'busan', 'korea,jdf', 'pune'),
('jiminee', '09019951907', 'busan', 'korea,jdf', 'pune'),
('jiminee', '09019951907', 'busan', 'korea,jdf', 'pune');

-- --------------------------------------------------------

-- 
-- Table structure for table `vehicle_document`
-- 

CREATE TABLE `vehicle_document` (
  `vehicle_number` varchar(50) default NULL,
  `user_name` varchar(50) default NULL,
  `vehicle_name` varchar(50) default NULL,
  `mobile_number` varchar(50) default NULL,
  `date_of_expire` varchar(50) default NULL,
  `date_of_manufacture` varchar(50) default NULL,
  `postal_address` varchar(50) default NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `vehicle_document`
-- 

INSERT INTO `vehicle_document` (`vehicle_number`, `user_name`, `vehicle_name`, `mobile_number`, `date_of_expire`, `date_of_manufacture`, `postal_address`, `password`) VALUES 
('7271', 'mahantagouda', 'BIKE', '9916335707', '20/12/2030', '5/5/2010', 'indi road,bijapur', 'mahan2003'),
('6360', 'pratiksha', 'cruiser', '8762245331', '30/5/2040', '23/9/2005', 'vidyagiri,dharwad', 'pvp7'),
('8096', 'adarsh', ' school bus', '7022474406', '26/1/2035', '7/2/2010', 'ganesh nagar,vijaypur', '7271'),
('4387', 'samarth', 'BRTS', '9900762010', '6/11/2045', '10/5/2012', 'sukoon colony,vijayur', 'sam1975'),
('HX75409QT', 'ronith', 'helicopter', '9901232010', '19/8/2038', '29/9/2015', 'jubliee circle,pune', '5480'),
('6745WN', 'kirankumar', 'jeepcompass', '9901244583', '22/4/2047', '30/5/2023', '678 cleaveland ave', 'wH0129'),
('VD9648KU', 'sankeet', 'limousine', '85543244583', '11/9/2027', '20/1/2009', '500 rollong hills lane,winchester', 'CA7453'),
('GF448KU', 'sushila', 'float plane', '85543244583', '19/3/2032', '19/3/2017', '433 sayre street,anderson', 'BTS304'),
('FG8472', 'manjunath', 'airship', '8352719392', '3/7/2018', '8/1/2039', '1331 E airport freeway,irving', 'H7484'),
('234', 'jimin', 'bike', '09019951907', '6/12/2003', '6/12/2009', 'M.G.Road,Bangalore', 'JP6263'),
('09090', 'jin', 'car', '08746991259', '4/5/2012', '4/5/2020', 'shivaji circle,bijapur', '3847UYG'),
('234', 'namjoon', 'bike', '09916335707', '9/8/2001', '9/8/2011', 'inamandar colony,bijapur', '56IF738');
