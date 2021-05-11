-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 12:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
drop database cycletech;
create database cycletech;
use cycletech;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cycletech`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicycle`
--

CREATE TABLE `bicycle` (
  `BikeID` int(11) NOT NULL,
  `Make` varchar(40) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `Color` text,
  `Terminal` varchar(40) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Lat` float(10,6) NOT NULL,
  `Lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycle`
--

INSERT INTO `bicycle` (`BikeID`, `Make`, `Model`, `Color`, `Terminal`, `Status`, `Lat`, `Lng`) VALUES
(131, 'Dodge', 'Ram 2500 Club', 'Indigo', 'Alexei', 'Servicing', 42.961285, 46.978828),(132, 'Honda', 'Accord', 'Red', 'Kata', 'Available', 46.247555, -60.236275),(133, 'Toyota', 'Highlander', 'Khaki', 'Osborn', 'Available', 16.902201, 121.761909),(134, 'Nissan', '300ZX', 'Crimson', 'Kata', 'Broken', 40.716351, 19.750238),(135, 'Mitsubishi', 'Montero Sport', 'Teal', 'Osborn', 'Servicing', -7.331200, 107.970299),(136, 'Chevrolet', 'Silverado 1500', 'Yellow', 'Toinette', 'Available', -8.987736, -78.614182),
(137, 'Pontiac', 'Vibe', 'Pink', 'Toinette', 'Pending', -1.259553, 104.100502),(138, 'Buick', 'Century', 'Turquoise', 'Sheridan', 'Pending', 38.981461, 139.934113),(139, 'Pontiac', 'Vibe', 'Red', 'Kata', 'Servicing', -7.952289, 112.658600),
(140, 'Lincoln', 'Town Car', 'Khaki', 'Osborn', 'In-use', 24.908293, 102.650208),(141, 'GMC', 'Jimmy', 'Red', 'Toinette', 'Available', 5.174447, 7.714515),(142, 'Lincoln', 'Town Car', 'Khaki', 'Osborn', 'In-use', 37.594311, 127.129562),
(143, 'Chevrolet', 'Malibu', 'Indigo', 'Kata', 'Broken', 45.137409, 3.812874),(144, 'Honda', 'Passport', 'Pink', 'Alexei', 'Broken', 33.158058, 69.312782),(145, 'Kia', 'Optima', 'Goldenrod', 'Alexei', 'Available', 42.044575, -8.438853),
(146, 'Isuzu', 'Rodeo', 'Orange', 'Sheridan', 'Broken', 35.937103, 116.470306),(147, 'Lexus', 'GX', 'Yellow', 'Sheridan', 'In-use', 57.711761, 12.907595),(148, 'GMC', '2500', 'Aquamarine', 'Toinette', 'In-use', 22.613405, 113.190872),
(149, 'Pontiac', 'Grand Prix', 'Orange', 'Toinette', 'Servicing', 35.657482, 50.976208),(150, 'Chevrolet', 'Corvette', 'Blue', 'Sheridan', 'Broken', 37.114895, 114.839317),(151, 'Infiniti', 'M', 'Red', 'Toinette', 'In-use', -7.893728, 110.143471),
(152, 'Kia', 'Sedona', 'Aquamarine', 'Alexei', 'Available', -7.982219, 111.478264),(153, 'Chrysler', 'Concorde', 'Crimson', 'Kata', 'Available', 34.007828, 71.935501),(154, 'Mercury', 'Mystique', 'Maroon', 'Osborn', 'Servicing', 14.367966, 121.050453),
(155, 'Pontiac', 'GTO', 'Violet', 'Kata', 'Available', -19.223652, -45.005692),(156, 'GMC', 'Sierra', 'Puce', 'Alexei', 'Available', 9.474580, -70.734680),(157, 'Mercedes-Benz', 'SL-Class', 'Indigo', 'Kata', 'Servicing', 28.185387, 113.032539),
(158, 'Cadillac', 'Fleetwood', 'Orange', 'Alexei', 'Servicing', 45.898769, 20.232574),(159, 'Honda', 'Odyssey', 'Turquoise', 'Kata', 'In-use', -27.692301, 23.036751),(160, 'Subaru', 'XT', 'Purple', 'Sheridan', 'Available', -3.509546, 135.752090),
(161, 'Volvo', 'XC90', 'Violet', 'Alexei', 'Available', 58.537212, 15.013175),(162, 'Chevrolet', 'Caprice', 'Mauv', 'Osborn', 'Broken', -25.116905, -49.507641),(163, 'Mitsubishi', 'Mirage', 'Pink', 'Sheridan', 'In-use', 36.733627, 137.142639),
(164, 'Saab', '9-3', 'Fuscia', 'Alexei', 'Servicing', 22.496347, -79.546295),(165, 'Hyundai', 'Elantra', 'Maroon', 'Sheridan', 'Available', 13.961920, 100.546112),(166, 'Jaguar', 'S-Type', 'Indigo', 'Toinette', 'Pending', 38.577484, 23.641737),
(167, 'Chevrolet', 'Express 3500', 'Turquoise', 'Sheridan', 'Servicing', 23.106401, 113.459747),(168, 'Audi', 'A4', 'Teal', 'Toinette', 'Broken', 30.406008, 110.971573),(169, 'Volkswagen', 'CC', 'Aquamarine', 'Kata', 'Broken', 49.870964, 20.313225),
(170, 'Lamborghini', 'Murciélago', 'Teal', 'Sheridan', 'Servicing', 39.286842, -7.422906),(171, 'Buick', 'Regal', 'Fuscia', 'Sheridan', 'Servicing', 37.938194, 126.587791),(172, 'Volkswagen', 'Eurovan', 'Indigo', 'Osborn', 'Servicing', 42.803833, -1.689433),
(173, 'Volkswagen', 'Golf', 'Puce', 'Sheridan', 'Servicing', 15.639810, 43.556332),(174, 'Infiniti', 'Q', 'Pink', 'Alexei', 'Available', -14.762721, 50.221249),(175, 'Buick', 'Regal', 'Crimson', 'Toinette', 'Broken', 13.781294, 100.519142),
(176, 'Mazda', 'CX-5', 'Crimson', 'Kata', 'Pending', 37.934692, 21.144997),(177, 'Lincoln', 'MKX', 'Indigo', 'Osborn', 'Pending', 39.982719, 117.078293),(178, 'Honda', 'S2000', 'Purple', 'Kata', 'Broken', -6.621522, 106.807510),
(179, 'Chevrolet', 'Venture', 'Fuscia', 'Kata', 'Servicing', -41.316700, -72.983299),(180, 'GMC', 'Sierra 2500', 'Puce', 'Toinette', 'Pending', 28.739864, 106.720978),(181, 'Nissan', 'Xterra', 'Crimson', 'Alexei', 'Pending', 7.027766, -74.692963),
(182, 'Toyota', 'Tundra', 'Aquamarine', 'Alexei', 'Servicing', -8.307567, 114.981354),(183, 'Suzuki', 'Reno', 'Indigo', 'Osborn', 'Pending', 50.101513, 1.857301),(184, 'Honda', 'Civic', 'Purple', 'Alexei', 'Available', 1.487114, 110.342606),
(185, 'Dodge', 'Grand Caravan', 'Maroon', 'Sheridan', 'Broken', 13.642717, 100.271233),(186, 'Buick', 'Riviera', 'Orange', 'Kata', 'Pending', -7.058798, 108.662102),(187, 'Buick', 'Century', 'Blue', 'Kata', 'Pending', 32.749592, -117.104622),
(188, 'Pontiac', 'Grand Prix', 'Orange', 'Toinette', 'Pending', 32.840218, 117.229370),(189, 'Dodge', 'Ram', 'Red', 'Alexei', 'Pending', 53.300491, -6.263460),(190, 'MINI', 'Cooper', 'Goldenrod', 'Osborn', 'In-use', -19.572281, -65.755005),
(191, 'MINI', 'Cooper Clubman', 'Pink', 'Kata', 'Available', 46.619961, 104.565857),(192, 'Chevrolet', 'Tahoe', 'Goldenrod', 'Sheridan', 'In-use', 29.330042, 119.334785),(193, 'Buick', 'Rendezvous', 'Violet', 'Toinette', 'Broken', -18.478592, -47.197868),
(194, 'Mitsubishi', 'Galant', 'Purple', 'Osborn', 'Broken', 64.763321, 21.063148),(195, 'Mitsubishi', 'GTO', 'Khaki', 'Alexei', 'Pending', 44.748859, 19.690788),(196, 'Infiniti', 'M', 'Orange', 'Toinette', 'Pending', 44.584110, 14.857393),
(197, 'Pontiac', 'G3', 'Indigo', 'Kata', 'Servicing', 54.884083, 47.516174),(198, 'Subaru', 'Tribeca', 'Fuscia', 'Osborn', 'Available', 39.302811, 99.275841),(199, 'Pontiac', 'Bonneville', 'Fuscia', 'Sheridan', 'Pending', 49.847412, 19.205750),
(200, 'Mitsubishi', 'GTO', 'Aquamarine', 'Kata', 'Servicing', 53.411682, 58.986004),(201, 'Chevrolet', 'S10', 'Maroon', 'Sheridan', 'Pending', 14.870054, 120.762253),(202, 'Lincoln', 'Navigator', 'Crimson', 'Toinette', 'Available', 48.173576, 91.767815),
(203, 'Porsche', '911', 'Red', 'Toinette', 'Servicing', -28.292456, -49.937588),(204, 'Subaru', 'Outback', 'Crimson', 'Sheridan', 'Available', -29.028292, -53.954155),(205, 'Mitsubishi', 'Eclipse', 'Purple', 'Alexei', 'In-use', 26.873650, 115.102493),
(206, 'Dodge', 'Ram Van 2500', 'Pink', 'Toinette', 'In-use', 37.303242, 139.375107),(207, 'GMC', 'Safari', 'Green', 'Osborn', 'Pending', 58.424965, 29.367710),(208, 'Audi', 'TT', 'Aquamarine', 'Kata', 'In-use', 34.272118, 108.084732),
(209, 'Buick', 'Regal', 'Maroon', 'Kata', 'Available', 31.630613, 118.421211),(210, 'GMC', 'Yukon XL 2500', 'Orange', 'Alexei', 'Available', -30.111456, 28.678980),(211, 'Mercedes-Benz', 'CLK-Class', 'Fuscia', 'Osborn', 'Broken', 32.652161, 130.675613),
(212, 'Acura', 'Integra', 'Khaki', 'Sheridan', 'Pending', 7.450901, 126.577263),(213, 'Ford', 'E350', 'Aquamarine', 'Sheridan', 'Broken', 50.904022, 17.843092),(214, 'Ford', 'Focus', 'Aquamarine', 'Kata', 'Available', 30.184908, 121.227928),
(215, 'Mercury', 'Tracer', 'Turquoise', 'Alexei', 'In-use', 48.735992, 24.856077),(216, 'Mercedes-Benz', '400E', 'Mauv', 'Toinette', 'Available', 7.670336, 123.004395),(217, 'Volvo', '850', 'Green', 'Alexei', 'Pending', 29.003994, 92.564018),
(218, 'Audi', 'A6', 'Orange', 'Osborn', 'Servicing', 49.892174, 2.300066),(219, 'Ford', 'Thunderbird', 'Khaki', 'Sheridan', 'In-use', 5.892605, 95.323761),(220, 'Lexus', 'LS', 'Green', 'Osborn', 'Broken', 17.105679, 120.455734),
(221, 'Toyota', 'TundraMax', 'Khaki', 'Toinette', 'Available', 43.479485, -79.655823),(222, 'Buick', 'Century', 'Yellow', 'Osborn', 'In-use', 58.962929, 16.414553),(223, 'Mercedes-Benz', 'CLS-Class', 'Red', 'Osborn', 'Pending', 38.580002, -121.489998),
(224, 'Nissan', '350Z', 'Crimson', 'Sheridan', 'Available', 32.271336, 121.293442),(225, 'Lincoln', 'Continental', 'Yellow', 'Alexei', 'Pending', 55.216030, 56.139629),(226, 'Nissan', 'NX', 'Purple', 'Kata', 'Available', 22.469576, 111.895241),
(227, 'Ford', 'Probe', 'Aquamarine', 'Kata', 'In-use', 24.466675, 112.626495),(228, 'Ford', 'Aspire', 'Goldenrod', 'Osborn', 'Available', 33.420635, 72.001732),(229, 'Isuzu', 'Amigo', 'Red', 'Sheridan', 'Available', 11.620901, -85.079185),
(230, 'Dodge', 'Dakota', 'Orange', 'Toinette', 'Servicing', -34.580219, -58.535194);

-- --------------------------------------------------------

--
-- Stand-in structure for view `complaintview`
-- (See below for the actual view)
--
CREATE TABLE `complaintview` (
`idClient` int(11)
,`Email` varchar(40)
,`receiptID` int(11)
,`Complaint` varchar(40)
,`PickUpTime` datetime
,`DropOffTime` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `customercomplaint`
--

CREATE TABLE `customercomplaint` (
  `receiptID` int(11) NOT NULL,
  `Complaint` varchar(40) NOT NULL,
  CDate datetime  DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customercomplaint`
--

INSERT INTO `customercomplaint` (`receiptID`, `Complaint`) VALUES
(164, 'Smithopsis crassicaudata'),
(162, 'Macropus fuliginosus'),
(169, 'Alligator mississippiensis'),
(166, 'Otocyon megalotis'),
(161, 'Connochaetus taurinus'),
(165, 'Alopochen aegyptiacus'),
(168, 'Ara chloroptera'),
(169, 'Varanus sp.'),
(164, 'Rana sp.'),
(161, 'Centrocercus urophasianus'),
(161, 'Heloderma horridum'),
(161, 'Mellivora capensis'),
(164, 'Phoenicopterus chilensis'),
(164, 'Lamprotornis nitens'),
(161, 'Macropus agilis'),
(166, 'Mazama americana'),
(163, 'Plegadis ridgwayi'),
(162, 'Cordylus giganteus'),
(170, 'Lama guanicoe'),
(164, 'Bradypus tridactylus');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customerreceipt`
-- (See below for the actual view)
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `IdClient` int(11) NOT NULL,
  `FName` varchar(40) NOT NULL,
  `LName` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`IdClient`, `FName`, `LName`, `Email`, `PhoneNumber`, `Address`, `Password`, `Type`) VALUES
(36, 'Eloïse', 'Worswick', 'jworswick0@webeden.co.uk', 2147483647, '95116 Kim Way', 'klr9xi', 'normal'),
(37, 'Märta', 'Scatchard', 'jscatchard1@liveinternet.ru', 2147483647, '13141 Columbus Plaza', 'XQ0Tdp', 'normal'),
(38, 'Lài', 'Pendry', 'ISM@ISM.com', 2147483647, '3 School Parkway', 'password', 'admin'),
(39, 'Eliès', 'Rontree', 'lrontree3@buzzfeed.com', 2147483647, '0 Ryan Street', 'ys6451JJJMD', 'normal'),
(40, 'Océane', 'Muddicliffe', 'tmuddicliffe4@wired.com', 2147483647, '8153 Cascade Place', 'yPM7HTCEf', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receiptID` int(11) NOT NULL,
  `MemberId` int(11) NOT NULL,
  `PickUpTime` datetime NOT NULL,
  `DropOffTime` datetime NOT NULL,
  `AmountPaid` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receiptID`, `MemberId`, `PickUpTime`, `DropOffTime`, `AmountPaid`) VALUES
(161, 36, '2019-03-20 18:52:38', '2019-03-21 06:37:40', '38'),(162, 37, '2019-03-21 05:38:58', '2019-03-23 07:40:18', '11'),(163, 39, '2019-03-23 07:15:13', '2019-03-22 12:36:40', '85'),
(164, 36, '2019-03-20 08:09:38', '2019-03-22 20:39:59', '91'),(165, 36, '2019-03-19 19:39:41', '2019-03-21 01:39:10', '87'),(166, 38, '2019-03-22 01:06:36', '2019-03-21 05:06:54', '92'),
(167, 38, '2019-03-19 09:28:39', '2019-03-21 22:26:36', '39'),(168, 36, '2019-03-22 07:42:59', '2019-03-20 02:03:38', '30'),(169, 39, '2019-03-22 04:55:52', '2019-03-19 17:40:08', '28'),
(170, 39, '2019-03-20 11:02:36', '2019-03-19 08:56:40', '56'),(171, 37, '2019-03-22 12:18:16', '2019-03-22 03:10:39', '22'),(172, 38, '2019-03-19 14:03:40', '2019-03-20 10:25:29', '59'),
(173, 38, '2019-03-21 00:15:53', '2019-03-23 11:13:21', '39'),(174, 36, '2019-03-19 09:24:26', '2019-03-23 09:10:04', '30'),(175, 39, '2019-03-20 22:40:01', '2019-03-19 00:52:36', '71'),
(176, 37, '2019-03-20 19:09:28', '2019-03-21 19:40:10', '66'),(177, 36, '2019-03-19 08:54:38', '2019-03-23 03:15:14', '29'),(178, 40, '2019-03-22 12:09:11', '2019-03-20 20:42:03', '40'),
(179, 37, '2019-03-21 18:44:29', '2019-03-20 01:11:36', '24'),(180, 36, '2019-03-22 03:37:58', '2019-03-21 09:23:18', '44'),(181, 37, '2019-03-20 22:16:15', '2019-03-20 10:40:40', '71'),
(182, 38, '2019-03-19 12:40:25', '2019-03-22 22:43:55', '84'),(183, 39, '2019-03-19 13:38:38', '2019-03-21 09:38:16', '54'),(184, 40, '2019-03-19 22:22:45', '2019-03-19 06:39:38', '37'),
(185, 39, '2019-03-19 17:22:40', '2019-03-22 21:12:20', '54'),(186, 40, '2019-03-22 16:00:44', '2019-03-20 23:01:16', '36'),(187, 40, '2019-03-22 22:27:59', '2019-03-22 06:08:30', '37'),
(188, 39, '2019-03-23 01:04:41', '2019-03-22 02:16:17', '36'),(189, 38, '2019-03-22 11:16:38', '2019-03-21 20:52:44', '37'),(190, 39, '2019-03-20 10:26:54', '2019-03-21 04:16:09', '22'),
(191, 37, '2019-03-20 04:02:40', '2019-03-21 15:03:06', '10'),(192, 38, '2019-03-19 20:24:21', '2019-03-19 01:45:25', '38'),(193, 40, '2019-03-19 18:25:12', '2019-03-20 12:19:02', '28'),
(194, 39, '2019-03-22 04:51:10', '2019-03-21 17:14:19', '95'),(195, 37, '2019-03-23 01:38:27', '2019-03-21 09:18:38', '88'),(196, 36, '2019-03-22 22:06:16', '2019-03-22 16:25:18', '44'),
(197, 36, '2019-03-19 01:40:03', '2019-03-23 04:12:29', '40'),(198, 36, '2019-03-22 15:17:10', '2019-03-22 12:43:59', '41'),(199, 39, '2019-03-22 00:04:10', '2019-03-21 09:57:24', '38'),
(200, 39, '2019-03-20 09:05:17', '2019-03-23 21:37:37', '45'),(201, 38, '2019-03-22 09:39:58', '2019-03-20 01:36:00', '55'),(202, 37, '2019-03-20 07:20:57', '2019-03-20 15:45:43', '82'),
(203, 38, '2019-03-22 07:00:08', '2019-03-22 12:21:13', '96'),(204, 36, '2019-03-21 21:39:40', '2019-03-20 11:08:17', '76'),(205, 37, '2019-03-19 21:18:01', '2019-03-21 09:39:17', '91'),
(206, 39, '2019-03-23 08:13:16', '2019-03-23 19:37:38', '76'),(207, 39, '2019-03-19 07:37:56', '2019-03-23 22:57:38', '83'),(208, 38, '2019-03-19 08:29:44', '2019-03-20 04:04:39', '40'),
(209, 38, '2019-03-23 07:24:25', '2019-03-23 21:37:01', '37'),(210, 39, '2019-03-19 23:37:39', '2019-03-22 10:51:04', '28'),(211, 38, '2019-03-21 01:36:30', '2019-03-20 11:37:55', '73'),
(212, 36, '2019-03-19 07:06:38', '2019-03-21 11:11:01', '99'),(213, 37, '2019-03-22 07:11:23', '2019-03-22 11:58:08', '66'),(214, 38, '2019-03-21 19:37:44', '2019-03-19 09:53:17', '74'),
(215, 36, '2019-03-21 13:38:11', '2019-03-21 16:06:41', '41'),(216, 36, '2019-03-19 03:56:39', '2019-03-19 01:53:12', '82'),(217, 39, '2019-03-23 22:58:53', '2019-03-21 06:16:39', '65'),
(218, 38, '2019-03-22 18:56:19', '2019-03-21 04:12:41', '86'),(219, 36, '2019-03-19 11:26:40', '2019-03-23 19:56:56', '88'),(220, 39, '2019-03-19 12:24:41', '2019-03-21 00:26:36', '26'),
(221, 38, '2019-03-22 02:58:36', '2019-03-22 06:44:05', '25'),(222, 36, '2019-03-20 23:23:22', '2019-03-23 00:00:28', '38'),(223, 38, '2019-03-19 03:04:04', '2019-03-19 18:29:28', '42'),
(224, 37, '2019-03-22 09:41:40', '2019-03-21 00:18:29', '38'),(225, 37, '2019-03-20 11:30:03', '2019-03-20 15:17:09', '89'),(226, 39, '2019-03-23 12:43:29', '2019-03-22 15:05:18', '87'),
(227, 38, '2019-03-23 22:24:00', '2019-03-23 11:40:17', '77'),(228, 39, '2019-03-22 08:51:36', '2019-03-21 02:26:25', '57'),(229, 40, '2019-03-19 23:36:39', '2019-03-19 02:37:38', '88'),
(230, 40, '2019-03-22 10:38:11', '2019-03-22 00:10:38', '69'),(231, 39, '2019-03-19 18:39:40', '2019-03-21 12:45:12', '37'),(232, 37, '2019-03-21 21:53:40', '2019-03-23 10:55:36', '63'),
(233, 36, '2019-03-20 19:44:40', '2019-03-20 05:39:39', '59'),(234, 38, '2019-03-21 03:52:36', '2019-03-21 20:16:41', '38'),(235, 39, '2019-03-20 17:30:15', '2019-03-20 09:01:26', '37'),
(236, 40, '2019-03-21 18:20:16', '2019-03-22 12:24:30', '74'),(237, 39, '2019-03-22 14:13:40', '2019-03-19 22:38:37', '72'),(238, 39, '2019-03-21 02:39:37', '2019-03-22 06:56:01', '74'),
(239, 39, '2019-03-19 17:12:52', '2019-03-21 00:03:36', '43'),(240, 36, '2019-03-23 11:22:56', '2019-03-19 02:04:26', '24'),(241, 40, '2019-03-21 02:13:16', '2019-03-19 00:38:38', '36'),
(242, 40, '2019-03-22 05:57:58', '2019-03-21 13:11:40', '26'),(243, 39, '2019-03-21 05:39:05', '2019-03-23 02:03:58', '68'),(244, 36, '2019-03-21 10:24:18', '2019-03-21 21:18:04', '53'),
(245, 38, '2019-03-22 13:39:10', '2019-03-19 13:39:00', '12'),(246, 37, '2019-03-21 10:26:03', '2019-03-20 15:23:36', '29'),(247, 37, '2019-03-22 04:08:18', '2019-03-19 16:42:58', '25'),
(248, 37, '2019-03-23 06:06:23', '2019-03-23 16:54:18', '44'),(249, 36, '2019-03-23 22:07:40', '2019-03-23 01:44:52', '36'),(250, 37, '2019-03-19 02:18:43', '2019-03-19 03:07:02', '40'),
(251, 40, '2019-03-21 03:12:13', '2019-03-23 13:22:37', '36'),(252, 37, '2019-03-21 05:53:23', '2019-03-22 21:25:13', '67'),(253, 38, '2019-03-22 08:06:40', '2019-03-22 15:40:28', '22'),
(254, 38, '2019-03-19 19:59:28', '2019-03-19 22:07:44', '57'),(255, 39, '2019-03-19 21:39:52', '2019-03-19 16:40:39', '18'),(256, 38, '2019-03-19 14:45:20', '2019-03-20 21:30:01', '93'),
(257, 39, '2019-03-22 15:04:11', '2019-03-20 14:41:05', '23'),(258, 39, '2019-03-19 20:17:36', '2019-03-20 02:39:02', '80'),(259, 37, '2019-03-20 12:18:37', '2019-03-21 09:37:21', '100'),(260, 40, '2019-03-23 15:51:18', '2019-03-22 21:40:37', '40');

-- --------------------------------------------------------

--
-- Table structure for table `receiptbikes`
--

CREATE TABLE `receiptbikes` (
  `BikeID` int(11) NOT NULL,
  `receiptID` int(11) NOT NULL,
  `pickUpTerminal` int(11) DEFAULT NULL,
  `dropOffTerminal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receiptbikes`
--

INSERT INTO `receiptbikes` (`BikeID`, `receiptID`, `pickUpTerminal`, `dropOffTerminal`) VALUES
(131, 164, 1, 1),(131, 187, 5, 5),(131, 189, 5, 1),(131, 194, 3, 3),(131, 198, 4, 2),(131, 213, 3, 1),(131, 216, 3, 1),(131, 224, 2, 3),(131, 232, 4, 2),(131, 242, 3, 5),(131, 254, 1, 2),(132, 182, 2, 5),(132, 210, 1, 2),(132, 237, 3, 3),(132, 257, 2, 3),(133, 198, 3, 2),(133, 212, 4, 4),(133, 218, 5, 5),(133, 249, 4, 5),(134, 184, 3, 1),(134, 191, 3, 1),(134, 220, 2, 2),(134, 225, 5, 5),(134, 226, 1, 2),(134, 240, 1, 3),(134, 246, 5, 1),(134, 259, 1, 2),(135, 161, 2, 1),(135, 175, 5, 3),(135, 185, 1, 5),(135, 190, 3, 5),(135, 198, 5, 2),(135, 225, 3, 4),(135, 230, 2, 3),(135, 234, 2, 1),(135, 240, 5, 4),(135, 245, 5, 2),(135, 248, 5, 2),(136, 177, 5, 5),(136, 179, 4, 5),(136, 202, 5, 1),(136, 220, 2, 2),(136, 229, 5, 5),(136, 230, 4, 5),(137, 164, 2, 3),(137, 167, 1, 2),(137, 172, 1, 4),(137, 191, 4, 2),(137, 212, 3, 5),(137, 219, 2, 5),(137, 244, 2, 1),(138, 163, 1, 2),(138, 183, 2, 3),(138, 230, 3, 2),(139, 164, 4, 1),(139, 174, 5, 3),(139, 184, 2, 3),(139, 199, 2, 4),(139, 229, 4, 3),(139, 232, 4, 5),(139, 235, 4, 3),(139, 248, 5, 2),(140, 181, 2, 2),(140, 186, 2, 2),(140, 201, 2, 2),(140, 204, 4, 3),(141, 194, 1, 1),(141, 201, 4, 3),(141, 206, 2, 4),(141, 228, 2, 3),(141, 231, 3, 3),(141, 239, 5, 3),(141, 246, 1, 1),(141, 248, 5, 2),(141, 255, 5, 5),(142, 187, 4, 4),(142, 208, 2, 3),(142, 221, 5, 2),(142, 235, 1, 3),(142, 240, 5, 3),(142, 243, 2, 1),(142, 249, 1, 2),(142, 253, 5, 4),(143, 171, 5, 3),(143, 192, 3, 5),(143, 193, 1, 4),(143, 233, 2, 4),(143, 237, 4, 2),(143, 243, 2, 3),(143, 260, 5, 1),(144, 175, 1, 3),(144, 176, 4, 1),(144, 195, 1, 4),(144, 207, 1, 1),(144, 214, 2, 5),(144, 217, 5, 4),(144, 239, 5, 4),(144, 240, 4, 5),(144, 242, 2, 1),(145, 163, 2, 5),(145, 178, 1, 2),(145, 181, 5, 1),(145, 200, 1, 1),(145, 256, 3, 4),(146, 213, 4, 3),(146, 257, 3, 4),(147, 165, 5, 4),(147, 215, 4, 2),(147, 220, 3, 5),(147, 221, 3, 3),(147, 247, 4, 2),(148, 171, 4, 2),(148, 183, 2, 3),(148, 188, 4, 1),(148, 205, 5, 1),(149, 166, 1, 4),(149, 175, 5, 2),(149, 256, 2, 3),(150, 200, 2, 4),(150, 214, 5, 2),(150, 220, 4, 4),(150, 226, 1, 3),(150, 247, 2, 4),(150, 252, 5, 4),(150, 259, 5, 5),(151, 177, 3, 2),(151, 222, 4, 3),(151, 224, 1, 4),(151, 240, 2, 5),(152, 162, 1, 4),(152, 229, 2, 5),(152, 231, 2, 3),(152, 240, 1, 4),(152, 259, 5, 4),(153, 166, 5, 1),(153, 178, 5, 3),(153, 197, 3, 2),(153, 205, 5, 2),(153, 208, 5, 3),(153, 211, 5, 3),(153, 214, 1, 1),(154, 167, 2, 2),(154, 180, 5, 4),(154, 203, 1, 4),(154, 219, 2, 5),(154, 222, 1, 4),(154, 249, 5, 2),(155, 198, 3, 3),(155, 223, 1, 4),(155, 238, 2, 4),(155, 249, 4, 3),(156, 165, 1, 1),(156, 177, 2, 5),(156, 180, 1, 3),(156, 181, 4, 5),(156, 216, 5, 1),(156, 255, 5, 5),(156, 256, 5, 1),(157, 179, 2, 5),(157, 191, 5, 1),(157, 200, 2, 4),(157, 202, 4, 5),(157, 230, 2, 5),(158, 163, 5, 2),(158, 174, 5, 3),(158, 183, 3, 3),(158, 192, 3, 5),(158, 200, 2, 4),(158, 205, 1, 1),(158, 234, 4, 2),(158, 251, 4, 4),(158, 255, 3, 5),(159, 178, 3, 4),(159, 193, 4, 4),(159, 229, 4, 3),(159, 244, 1, 3),(160, 165, 1, 4),(160, 183, 3, 2),(160, 205, 4, 2),(160, 206, 2, 3),(160, 225, 2, 2),(160, 242, 3, 2),(160, 251, 3, 3),(160, 255, 2, 1),(161, 170, 2, 4),(161, 188, 2, 3),(161, 206, 4, 3),(161, 216, 4, 1),(161, 219, 1, 3),(161, 224, 3, 1),(161, 228, 5, 2),(162, 170, 5, 1),(162, 202, 5, 5),(162, 216, 1, 4),(162, 234, 3, 2),(162, 239, 3, 2),(162, 248, 4, 5),(163, 194, 2, 4),(163, 233, 4, 1),(163, 235, 1, 3),(163, 246, 3, 4),(163, 256, 5, 4),(164, 173, 3, 2),(164, 175, 4, 2),(164, 197, 5, 1),(164, 241, 2, 4),(164, 251, 5, 2),(165, 190, 4, 2),(165, 192, 2, 4),(165, 193, 1, 3),(165, 195, 3, 3),(165, 198, 5, 4),(165, 209, 4, 3),(165, 226, 5, 1),(165, 232, 3, 1),(165, 250, 2, 2),(166, 226, 3, 4),(166, 231, 2, 2),(166, 237, 4, 5),(166, 251, 4, 5),(167, 161, 2, 2),(167, 169, 5, 2),(167, 197, 5, 1),(167, 202, 1, 5),(167, 209, 5, 3),(167, 210, 1, 1),(167, 230, 2, 1),(167, 245, 3, 5),(167, 246, 3, 5),(168, 164, 3, 3),(168, 177, 5, 3),(168, 205, 1, 4),(168, 243, 3, 4),(169, 162, 2, 1),(169, 168, 5, 2),(169, 185, 2, 5),(169, 187, 1, 5),(169, 196, 2, 4),(169, 212, 2, 2),(169, 247, 1, 5),(169, 257, 1, 1),(170, 181, 5, 3),(170, 214, 2, 1),(171, 172, 1, 1),(171, 181, 5, 2),(171, 182, 5, 1),(171, 194, 1, 4),(171, 212, 4, 3),(171, 221, 1, 2),(171, 226, 5, 4),(171, 229, 3, 1),(171, 241, 5, 1),(171, 247, 3, 5),(172, 162, 2, 1),(172, 163, 3, 3),(172, 169, 1, 2),(172, 177, 5, 1),(172, 223, 4, 2),(172, 234, 2, 3),(172, 244, 5, 1),(173, 226, 1, 3),(173, 232, 1, 2),(173, 235, 4, 5),(173, 238, 1, 1),(173, 244, 1, 3),(174, 161, 1, 4),(174, 168, 3, 5),(174, 178, 3, 4),(174, 185, 5, 5),(174, 186, 4, 3),(174, 209, 4, 3),(174, 227, 5, 3),(174, 232, 2, 4),(174, 242, 5, 4),(174, 258, 2, 3),(175, 172, 4, 1),(175, 201, 1, 1),(175, 205, 2, 1),(175, 211, 2, 2),(175, 230, 4, 3),(175, 236, 2, 5),(175, 249, 2, 4),(176, 173, 2, 5),(176, 197, 5, 1),(176, 236, 2, 5),(177, 171, 5, 4),(177, 180, 2, 4),(177, 212, 2, 5),(177, 213, 5, 3),(177, 222, 1, 4),(177, 224, 3, 5),(177, 234, 4, 2),(177, 242, 2, 3),(177, 243, 3, 3),(178, 192, 1, 2),(178, 201, 4, 4),(178, 231, 2, 4),(178, 234, 1, 3),(178, 236, 5, 4),(178, 256, 3, 4),(179, 167, 3, 1),(179, 174, 5, 5),(179, 185, 5, 1),(179, 238, 5, 4),(180, 192, 1, 1),(180, 199, 2, 1),(180, 210, 5, 2),(180, 213, 3, 4),(180, 234, 3, 4),(180, 239, 4, 1),(180, 240, 4, 3),(180, 247, 5, 1),(181, 178, 2, 3),(181, 186, 2, 3),(181, 213, 3, 4),(181, 218, 3, 1),(181, 221, 1, 1),(181, 234, 1, 1),(181, 235, 1, 3),(181, 241, 2, 1),(181, 258, 1, 2),(182, 166, 3, 4),(182, 190, 4, 2),(182, 193, 5, 4),(182, 235, 4, 5),(182, 253, 2, 5),(182, 254, 4, 1),(183, 165, 5, 2),(183, 170, 5, 2),(183, 174, 2, 2),(183, 179, 1, 5),(183, 193, 3, 2),(183, 222, 4, 5),(183, 250, 1, 1),(183, 253, 5, 3),(183, 256, 4, 4),(184, 174, 5, 3),(184, 197, 3, 5),(184, 203, 1, 4),(184, 208, 1, 1),(184, 215, 5, 5),(184, 220, 5, 4),(184, 258, 4, 3),(184, 259, 1, 1),(184, 260, 5, 5),(185, 186, 2, 2),(186, 161, 2, 4),(186, 197, 3, 2),(186, 225, 5, 4),(186, 249, 3, 4),(186, 251, 4, 1),(187, 162, 4, 2),(187, 173, 1, 1),(187, 179, 3, 1),(187, 215, 4, 2),(187, 224, 5, 1),(187, 254, 2, 1),(188, 167, 4, 3),(188, 179, 5, 5),(188, 199, 1, 4),(188, 204, 3, 5),(188, 208, 1, 2),(188, 212, 1, 4),(189, 166, 1, 3),(190, 164, 4, 1),(190, 181, 5, 4),(190, 186, 1, 1),(190, 205, 4, 2),(190, 251, 1, 2),(191, 175, 4, 2),(191, 196, 3, 5),(191, 204, 5, 1),(192, 163, 2, 3),(192, 191, 1, 3),(192, 196, 3, 2),(192, 197, 5, 5),(192, 239, 5, 2),(192, 243, 3, 1),(193, 162, 5, 3),(193, 163, 5, 4),(193, 195, 4, 1),(193, 228, 3, 2),(194, 164, 3, 3),(194, 198, 3, 2),(194, 209, 5, 2),(194, 224, 4, 3),(194, 225, 3, 3),(194, 244, 5, 3),(195, 161, 5, 2),(195, 164, 2, 2),(195, 165, 3, 5),(195, 166, 5, 5),(195, 208, 3, 5),(195, 223, 4, 4),(195, 227, 1, 4),(195, 240, 4, 2),(195, 250, 5, 4),(195, 260, 2, 5),(196, 168, 2, 2),(196, 200, 1, 1),(196, 202, 4, 1),(196, 254, 4, 4),(197, 186, 3, 1),(197, 188, 3, 4),(197, 194, 1, 2),(197, 196, 1, 1),(197, 218, 2, 3),(197, 228, 3, 1),(197, 247, 2, 5),(198, 165, 5, 5),(198, 173, 3, 4),(198, 179, 1, 5),(198, 190, 5, 5),(198, 197, 1, 2),(198, 221, 4, 5),(198, 236, 5, 2),(198, 245, 2, 3),(199, 174, 1, 2),(199, 197, 4, 4),(199, 228, 1, 1),(199, 235, 5, 4),(199, 253, 5, 5),(199, 255, 2, 4),(200, 181, 3, 3),(200, 199, 1, 3),(200, 233, 3, 5),(200, 252, 4, 2),(201, 196, 4, 4),(201, 237, 3, 3),(201, 238, 5, 4),(201, 249, 5, 4),(201, 250, 1, 3),(202, 170, 1, 5),(202, 183, 3, 5),(202, 241, 5, 3),(203, 204, 4, 3),(203, 207, 2, 1),(203, 216, 2, 2),(203, 235, 3, 5),(203, 240, 3, 3),(204, 183, 3, 3),(204, 199, 1, 2),(204, 201, 4, 5),(204, 205, 5, 3),(204, 234, 5, 5),(204, 255, 4, 5),(204, 257, 5, 4),(205, 163, 5, 1),(205, 165, 4, 2),(205, 176, 4, 5),(205, 181, 1, 3),(205, 194, 2, 5),(205, 217, 3, 4),(205, 239, 2, 1),(205, 248, 2, 1),(205, 259, 2, 1),(206, 164, 1, 3),(206, 167, 2, 3),(206, 190, 3, 5),(206, 229, 5, 4),(206, 231, 3, 2),(206, 236, 4, 2),(206, 243, 2, 1),(206, 255, 1, 5),(207, 170, 1, 2),(207, 173, 3, 5),(207, 179, 3, 3),(207, 181, 3, 1),(207, 182, 3, 5),(207, 210, 3, 1),(207, 212, 5, 4),(207, 220, 3, 4),(207, 226, 4, 2),(207, 258, 5, 4),(208, 166, 3, 1),(208, 173, 5, 3),(208, 176, 2, 5),(208, 179, 4, 3),(208, 207, 1, 3),(208, 244, 3, 1),(209, 172, 2, 5),(209, 174, 5, 5),(209, 206, 3, 2),(209, 208, 2, 1),(209, 247, 3, 1),(209, 252, 4, 5),(210, 184, 1, 1),(210, 186, 3, 3),(210, 204, 4, 3),(210, 239, 4, 4),(210, 241, 4, 3),(210, 249, 3, 4),(210, 254, 3, 4),(211, 170, 5, 5),(211, 179, 3, 2),(211, 195, 1, 3),(211, 225, 3, 2),(211, 231, 5, 5),(211, 253, 5, 3),(211, 256, 2, 1),(212, 169, 4, 2),(212, 208, 4, 1),(212, 219, 1, 2),(212, 226, 1, 2),(212, 235, 2, 4),(212, 240, 1, 2),(212, 245, 2, 3),(212, 251, 5, 1),(213, 217, 4, 2),(213, 227, 1, 2),(213, 238, 4, 3),(213, 249, 4, 3),(214, 166, 5, 4),(214, 171, 2, 5),(214, 201, 3, 2),(214, 226, 5, 1),(214, 252, 3, 3),(214, 258, 1, 1),(215, 179, 5, 3),(215, 204, 4, 3),(215, 207, 3, 3),(215, 249, 3, 3),(216, 169, 5, 4),(216, 177, 3, 5),(216, 186, 5, 4),(216, 252, 4, 1),(217, 166, 5, 4),(217, 172, 2, 3),(217, 188, 1, 1),(217, 221, 3, 4),(217, 223, 3, 5),(217, 227, 5, 2),(217, 242, 2, 1),(217, 251, 3, 3),(217, 254, 3, 2),(218, 169, 5, 3),(218, 176, 2, 4),(218, 179, 5, 3),(218, 198, 2, 4),(218, 209, 4, 1),(218, 234, 1, 2),(218, 239, 3, 5),(218, 245, 3, 2),(219, 164, 3, 4),(219, 177, 1, 3),(219, 211, 2, 5),(219, 219, 4, 4),(219, 224, 2, 4),(219, 234, 1, 4),(219, 238, 3, 1),(219, 244, 3, 1),(220, 164, 1, 1),(220, 175, 2, 2),(220, 192, 3, 3),(220, 198, 2, 5),(220, 221, 5, 1),(220, 245, 2, 1),(220, 249, 3, 3),(220, 251, 2, 3),(220, 255, 4, 1),(221, 185, 5, 1),(221, 189, 2, 3),(221, 194, 5, 1),(221, 199, 3, 4),(221, 206, 2, 4),(221, 214, 4, 1),(221, 225, 3, 2),(221, 248, 3, 3),(221, 255, 5, 1),(222, 181, 1, 3),(222, 186, 1, 4),(222, 194, 3, 3),(222, 197, 2, 3),(222, 198, 4, 5),(222, 224, 2, 4),(222, 246, 2, 5),(222, 252, 5, 5),(223, 209, 2, 1),(223, 210, 2, 2),(223, 235, 1, 4),(223, 256, 3, 2),(224, 179, 1, 3),(224, 197, 4, 5),(224, 205, 1, 1),(224, 219, 5, 3),(224, 232, 5, 5),(224, 238, 3, 5),(224, 240, 3, 2),(225, 175, 5, 3),(225, 192, 4, 4),(225, 210, 3, 4),(225, 212, 4, 2),(225, 236, 3, 1),(225, 242, 3, 1),(226, 188, 2, 5),(226, 198, 2, 1),(226, 213, 2, 5),(226, 218, 2, 2),(226, 242, 2, 1),(226, 255, 1, 2),(227, 164, 4, 2),(227, 166, 1, 2),(227, 171, 5, 4),(227, 257, 4, 5),(228, 184, 5, 4),(228, 193, 5, 4),(228, 213, 1, 4),(228, 223, 1, 2),(228, 230, 4, 4),(228, 235, 4, 1),(229, 179, 2, 1),(229, 181, 2, 1),(229, 198, 1, 4),(229, 208, 1, 2),(229, 210, 2, 1),(229, 221, 5, 1),(229, 239, 3, 5),(230, 211, 5, 1),(230, 214, 5, 5),(230, 228, 2, 3),(230, 230, 4, 4),(230, 231, 2, 5),(230, 246, 5, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rem`
-- (See below for the actual view)
--
CREATE TABLE `rem` (
`IdNumber` int(11)
,`Terminal` varchar(40)
,`NumOfBicycle` bigint(21)
,`lat` float(10,6)
,`lng` float(10,6)
,`MaxStorageCapacity` int(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `Name` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `ListOfAssests` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `IdNumber` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `MaxStorageCapacity` int(3) NOT NULL,
  `Lat` float(10,6) NOT NULL,
  `Lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`IdNumber`, `Name`, `MaxStorageCapacity`, `Lat`, `Lng`) VALUES
(1, 'Alexei', 7, 55.279240, 25.197418),
(2, 'Kata', 42, 55.416492, 25.129395),
(3, 'Toinette', 20, 55.200272, 25.118813),
(4, 'Sheridan', 14, 55.185352, 25.141348),
(5, 'Osborn', 43, 55.138779, 25.113110);

-- --------------------------------------------------------

--
-- Table structure for table `terminalinfo`
--

CREATE TABLE `terminalinfo` (
  `IdNumber_Terminal` int(11) DEFAULT NULL,
  `NumOfBicycle` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `complaintview`
--
DROP TABLE IF EXISTS `complaintview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `complaintview`  AS  select `a`.`IdClient` AS `idClient`,`a`.`Email` AS `Email`,`c`.`receiptID` AS `receiptID`,`c`.`Complaint` AS `Complaint`,`b`.`PickUpTime` AS `PickUpTime`,`b`.`DropOffTime` AS `DropOffTime` from ((`member` `a` join `receipt` `b`) join `customercomplaint` `c`) where ((`c`.`receiptID` = `b`.`receiptID`) and (`a`.`IdClient` = `b`.`MemberId`)) group by `b`.`DropOffTime` desc ;

-- --------------------------------------------------------

--
-- Structure for view `customerreceipt`

-- --------------------------------------------------------

--
-- Structure for view `rem`
--
DROP TABLE IF EXISTS `rem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rem`  AS  select `t`.`IdNumber` AS `IdNumber`,`b`.`Terminal` AS `Terminal`,count(`b`.`BikeID`) AS `NumOfBicycle`,`t`.`Lat` AS `lat`,`t`.`Lng` AS `lng`,`t`.`MaxStorageCapacity` AS `MaxStorageCapacity` from (`terminal` `t` join `bicycle` `b`) where (`t`.`Name` = `b`.`Terminal`) group by `b`.`Terminal` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicycle`
--
ALTER TABLE `bicycle`
  ADD PRIMARY KEY (`BikeID`);

--
-- Indexes for table `customercomplaint`
--
ALTER TABLE `customercomplaint`
  ADD KEY `receiptID` (`receiptID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`IdClient`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receiptID`),
  ADD KEY `MemberId` (`MemberId`);

--
-- Indexes for table `receiptbikes`
--
ALTER TABLE `receiptbikes`
  ADD PRIMARY KEY (`BikeID`,`receiptID`),
  ADD KEY `receiptID` (`receiptID`),
  ADD KEY `receiptbikes_ibfk_3` (`pickUpTerminal`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `terminalinfo`
--
ALTER TABLE `terminalinfo`
  ADD KEY `IdNumber_Terminal` (`IdNumber_Terminal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bicycle`
--
ALTER TABLE `bicycle`
  MODIFY `BikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receiptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `IdNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customercomplaint`
--
ALTER TABLE `customercomplaint`
  ADD CONSTRAINT `customercomplaint_ibfk_1` FOREIGN KEY (`receiptID`) REFERENCES `receipt` (`receiptID`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`MemberId`) REFERENCES `member` (`IdClient`);

--
-- Constraints for table `receiptbikes`
--
ALTER TABLE `receiptbikes`
  ADD CONSTRAINT `receiptbikes_ibfk_1` FOREIGN KEY (`receiptID`) REFERENCES `receipt` (`receiptID`),
  ADD CONSTRAINT `receiptbikes_ibfk_2` FOREIGN KEY (`BikeID`) REFERENCES `bicycle` (`BikeID`),
  ADD CONSTRAINT `receiptbikes_ibfk_3` FOREIGN KEY (`pickUpTerminal`) REFERENCES `terminal` (`IdNumber`);
  
--
-- Constraints for table `terminalinfo`
--
ALTER TABLE `terminalinfo`
  ADD CONSTRAINT `terminalinfo_ibfk_1` FOREIGN KEY (`IdNumber_Terminal`) REFERENCES `terminal` (`IdNumber`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
alter table bicycle add column Price float (10,6);
update bicycle set price=bikeid/200;
 
DROP TABLE IF EXISTS CustomerReceipt;
 CREATE VIEW CustomerReceipt AS 
select b.receiptID ,b.MemberId, count(a.BikeID) as bikeCount , b.PickUpTime , b.DropOffTime  , 
TIMESTAMPDIFF(MINUTE,PickUpTime,DropOffTime) as RentalLength ,c.pickUpTerminal , t.name as pickUpTerminalName, c.dropOffTerminal , s.name as dropOffTerminalName , AmountPaid 
from receipt as b, bicycle as a,receiptbikes as c, terminal as t, terminal as s   where b.receiptID=c.receiptID and a.bikeID=c.bikeID and t.IdNumber=c.pickUpTerminal and s.IdNumber=c.dropOffTerminal  GROUP BY b.DropOffTime order by b.receiptid desc;

alter table bicycle add column terminalID int(11);
 update bicycle as a, terminal as b set a.terminalID=b.IdNumber where a.terminal=b.Name;

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost'  WITH GRANT OPTION;
CREATE USER 'admin'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%'  WITH GRANT OPTION;



select b.receiptID ,b.MemberId, count(a.BikeID) as bikeCount , b.PickUpTime , b.DropOffTime  , 
TIMESTAMPDIFF(MINUTE,PickUpTime,DropOffTime) as RentalLength    , AmountPaid 
from receipt as b, bicycle as a,receiptbikes as c, terminal as t, terminal as s   where b.receiptID=c.receiptID and a.bikeID=c.bikeID and t.IdNumber=c.pickUpTerminal and s.IdNumber=c.dropOffTerminal  GROUP BY b.DropOffTime order by b.receiptid desc; 

DROP TABLE IF EXISTS ReceiptDetail;
   CREATE VIEW ReceiptDetail AS select distinct rb.MemberId  ,r.BikeID ,r.receiptID, r.pickUpTerminal,t1.Name as source ,r.dropOffTerminal, NULL as destination from receiptbikes as r, terminal as t1, terminal as t2, receipt as rb
    where t1.IdNumber=r.pickUpTerminal and   r.dropOffTerminal Is NULL and rb.receiptID=r.receiptID  
     UNION
    select rb1.MemberId  ,r1.BikeID ,r1.receiptID, r1.pickUpTerminal, t11.Name as source ,r1.dropOffTerminal,  t21.Name as destination from receiptbikes as r1, terminal as t11, terminal as t21, receipt as rb1
    where t11.IdNumber=r1.pickUpTerminal and  t21.IdNumber= r1.dropOffTerminal  and rb1.receiptID=r1.receiptID  order by receiptID;
update bicycle set Lng=(55.22+rand()/10.0)     , Lat=(25.1+rand()/10.0);
    

   
COMMIT;