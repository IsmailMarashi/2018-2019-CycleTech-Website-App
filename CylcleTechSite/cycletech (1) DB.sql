-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 02:29 PM
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
  `Lng` float(10,6) NOT NULL,
  `Price` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bicycle`
--

INSERT INTO `bicycle` (`BikeID`, `Make`, `Model`, `Color`, `Terminal`, `Status`, `Lat`, `Lng`, `Price`) VALUES
(31, 'Dodge', 'Ram 2500 Club', 'Indigo', 'Alexei', 'Servicing', 42.961285, 46.978828, 0.155000),
(32, 'Honda', 'Accord', 'Red', 'Kata', 'Available', 46.247555, -60.236275, 0.160000),
(33, 'Toyota', 'Highlander', 'Khaki', 'Osborn', 'Available', 16.902201, 121.761909, 0.165000),
(34, 'Nissan', '300ZX', 'Crimson', 'Kata', 'Broken', 40.716351, 19.750238, 0.170000),
(35, 'Mitsubishi', 'Montero Sport', 'Teal', 'Osborn', 'Servicing', -7.331200, 107.970299, 0.175000),
(36, 'Chevrolet', 'Silverado 1500', 'Yellow', 'Toinette', 'Available', -8.987736, -78.614182, 0.180000),
(37, 'Pontiac', 'Vibe', 'Pink', 'Toinette', 'Pending', -1.259553, 104.100502, 0.185000),
(38, 'Buick', 'Century', 'Turquoise', 'Sheridan', 'Pending', 38.981461, 139.934113, 0.190000),
(39, 'Pontiac', 'Vibe', 'Red', 'Kata', 'Servicing', -7.952289, 112.658600, 0.195000),
(40, 'Lincoln', 'Town Car', 'Khaki', 'Osborn', 'In-use', 24.908293, 102.650208, 0.200000),
(41, 'GMC', 'Jimmy', 'Red', 'Toinette', 'Available', 5.174447, 7.714515, 0.205000),
(42, 'Lincoln', 'Town Car', 'Khaki', 'Osborn', 'In-use', 37.594311, 127.129562, 0.210000),
(43, 'Chevrolet', 'Malibu', 'Indigo', 'Kata', 'Broken', 45.137409, 3.812874, 0.215000),
(44, 'Honda', 'Passport', 'Pink', 'Alexei', 'Broken', 33.158058, 69.312782, 0.220000),
(45, 'Kia', 'Optima', 'Goldenrod', 'Alexei', 'Available', 42.044575, -8.438853, 0.225000),
(46, 'Isuzu', 'Rodeo', 'Orange', 'Sheridan', 'Broken', 35.937103, 116.470306, 0.230000),
(47, 'Lexus', 'GX', 'Yellow', 'Sheridan', 'In-use', 57.711761, 12.907595, 0.235000),
(48, 'GMC', '2500', 'Aquamarine', 'Toinette', 'In-use', 22.613405, 113.190872, 0.240000),
(49, 'Pontiac', 'Grand Prix', 'Orange', 'Toinette', 'Servicing', 35.657482, 50.976208, 0.245000),
(50, 'Chevrolet', 'Corvette', 'Blue', 'Sheridan', 'Broken', 37.114895, 114.839317, 0.250000),
(51, 'Infiniti', 'M', 'Red', 'Toinette', 'In-use', -7.893728, 110.143471, 0.255000),
(52, 'Kia', 'Sedona', 'Aquamarine', 'Alexei', 'Available', -7.982219, 111.478264, 0.260000),
(53, 'Chrysler', 'Concorde', 'Crimson', 'Kata', 'Available', 34.007828, 71.935501, 0.265000),
(54, 'Mercury', 'Mystique', 'Maroon', 'Osborn', 'Servicing', 14.367966, 121.050453, 0.270000),
(55, 'Pontiac', 'GTO', 'Violet', 'Kata', 'Available', -19.223652, -45.005692, 0.275000),
(56, 'GMC', 'Sierra', 'Puce', 'Alexei', 'Available', 9.474580, -70.734680, 0.280000),
(57, 'Mercedes-Benz', 'SL-Class', 'Indigo', 'Kata', 'Servicing', 28.185387, 113.032539, 0.285000),
(58, 'Cadillac', 'Fleetwood', 'Orange', 'Alexei', 'Servicing', 45.898769, 20.232574, 0.290000),
(59, 'Honda', 'Odyssey', 'Turquoise', 'Kata', 'In-use', -27.692301, 23.036751, 0.295000),
(60, 'Subaru', 'XT', 'Purple', 'Sheridan', 'Available', -3.509546, 135.752090, 0.300000),
(61, 'Volvo', 'XC90', 'Violet', 'Alexei', 'Available', 58.537212, 15.013175, 0.305000),
(62, 'Chevrolet', 'Caprice', 'Mauv', 'Osborn', 'Broken', -25.116905, -49.507641, 0.310000),
(63, 'Mitsubishi', 'Mirage', 'Pink', 'Sheridan', 'In-use', 36.733627, 137.142639, 0.315000),
(64, 'Saab', '9-3', 'Fuscia', 'Alexei', 'Servicing', 22.496347, -79.546295, 0.320000),
(65, 'Hyundai', 'Elantra', 'Maroon', 'Sheridan', 'Available', 13.961920, 100.546112, 0.325000),
(66, 'Jaguar', 'S-Type', 'Indigo', 'Toinette', 'Pending', 38.577484, 23.641737, 0.330000),
(67, 'Chevrolet', 'Express 3500', 'Turquoise', 'Sheridan', 'Servicing', 23.106401, 113.459747, 0.335000),
(68, 'Audi', 'A4', 'Teal', 'Toinette', 'Broken', 30.406008, 110.971573, 0.340000),
(69, 'Volkswagen', 'CC', 'Aquamarine', 'Kata', 'Broken', 49.870964, 20.313225, 0.345000),
(70, 'Lamborghini', 'Murciélago', 'Teal', 'Sheridan', 'Servicing', 39.286842, -7.422906, 0.350000),
(71, 'Buick', 'Regal', 'Fuscia', 'Sheridan', 'Servicing', 37.938194, 126.587791, 0.355000),
(72, 'Volkswagen', 'Eurovan', 'Indigo', 'Osborn', 'Servicing', 42.803833, -1.689433, 0.360000),
(73, 'Volkswagen', 'Golf', 'Puce', 'Sheridan', 'Servicing', 15.639810, 43.556332, 0.365000),
(74, 'Infiniti', 'Q', 'Pink', 'Alexei', 'Available', -14.762721, 50.221249, 0.370000),
(75, 'Buick', 'Regal', 'Crimson', 'Toinette', 'Broken', 13.781294, 100.519142, 0.375000),
(76, 'Mazda', 'CX-5', 'Crimson', 'Kata', 'Pending', 37.934692, 21.144997, 0.380000),
(77, 'Lincoln', 'MKX', 'Indigo', 'Osborn', 'Pending', 39.982719, 117.078293, 0.385000),
(78, 'Honda', 'S2000', 'Purple', 'Kata', 'Broken', -6.621522, 106.807510, 0.390000),
(79, 'Chevrolet', 'Venture', 'Fuscia', 'Kata', 'Servicing', -41.316700, -72.983299, 0.395000),
(80, 'GMC', 'Sierra 2500', 'Puce', 'Toinette', 'Pending', 28.739864, 106.720978, 0.400000),
(81, 'Nissan', 'Xterra', 'Crimson', 'Alexei', 'Pending', 7.027766, -74.692963, 0.405000),
(82, 'Toyota', 'Tundra', 'Aquamarine', 'Alexei', 'Servicing', -8.307567, 114.981354, 0.410000),
(83, 'Suzuki', 'Reno', 'Indigo', 'Osborn', 'Pending', 50.101513, 1.857301, 0.415000),
(84, 'Honda', 'Civic', 'Purple', 'Alexei', 'Available', 1.487114, 110.342606, 0.420000),
(85, 'Dodge', 'Grand Caravan', 'Maroon', 'Sheridan', 'Broken', 13.642717, 100.271233, 0.425000),
(86, 'Buick', 'Riviera', 'Orange', 'Kata', 'Pending', -7.058798, 108.662102, 0.430000),
(87, 'Buick', 'Century', 'Blue', 'Kata', 'Pending', 32.749592, -117.104622, 0.435000),
(88, 'Pontiac', 'Grand Prix', 'Orange', 'Toinette', 'Pending', 32.840218, 117.229370, 0.440000),
(89, 'Dodge', 'Ram', 'Red', 'Alexei', 'Pending', 53.300491, -6.263460, 0.445000),
(90, 'MINI', 'Cooper', 'Goldenrod', 'Osborn', 'In-use', -19.572281, -65.755005, 0.450000),
(91, 'MINI', 'Cooper Clubman', 'Pink', 'Kata', 'Available', 46.619961, 104.565857, 0.455000),
(92, 'Chevrolet', 'Tahoe', 'Goldenrod', 'Sheridan', 'In-use', 29.330042, 119.334785, 0.460000),
(93, 'Buick', 'Rendezvous', 'Violet', 'Toinette', 'Broken', -18.478592, -47.197868, 0.465000),
(94, 'Mitsubishi', 'Galant', 'Purple', 'Osborn', 'Broken', 64.763321, 21.063148, 0.470000),
(95, 'Mitsubishi', 'GTO', 'Khaki', 'Alexei', 'Pending', 44.748859, 19.690788, 0.475000),
(96, 'Infiniti', 'M', 'Orange', 'Toinette', 'Pending', 44.584110, 14.857393, 0.480000),
(97, 'Pontiac', 'G3', 'Indigo', 'Kata', 'Servicing', 54.884083, 47.516174, 0.485000),
(98, 'Subaru', 'Tribeca', 'Fuscia', 'Osborn', 'Available', 39.302811, 99.275841, 0.490000),
(99, 'Pontiac', 'Bonneville', 'Fuscia', 'Sheridan', 'Pending', 49.847412, 19.205750, 0.495000),
(100, 'Mitsubishi', 'GTO', 'Aquamarine', 'Kata', 'Servicing', 53.411682, 58.986004, 0.500000),
(101, 'Chevrolet', 'S10', 'Maroon', 'Sheridan', 'Pending', 14.870054, 120.762253, 0.505000),
(102, 'Lincoln', 'Navigator', 'Crimson', 'Toinette', 'Available', 48.173576, 91.767815, 0.510000),
(103, 'Porsche', '911', 'Red', 'Toinette', 'Servicing', -28.292456, -49.937588, 0.515000),
(104, 'Subaru', 'Outback', 'Crimson', 'Sheridan', 'Available', -29.028292, -53.954155, 0.520000),
(105, 'Mitsubishi', 'Eclipse', 'Purple', 'Alexei', 'In-use', 26.873650, 115.102493, 0.525000),
(106, 'Dodge', 'Ram Van 2500', 'Pink', 'Toinette', 'In-use', 37.303242, 139.375107, 0.530000),
(107, 'GMC', 'Safari', 'Green', 'Osborn', 'Pending', 58.424965, 29.367710, 0.535000),
(108, 'Audi', 'TT', 'Aquamarine', 'Kata', 'In-use', 34.272118, 108.084732, 0.540000),
(109, 'Buick', 'Regal', 'Maroon', 'Kata', 'Available', 31.630613, 118.421211, 0.545000),
(110, 'GMC', 'Yukon XL 2500', 'Orange', 'Alexei', 'Available', -30.111456, 28.678980, 0.550000),
(111, 'Mercedes-Benz', 'CLK-Class', 'Fuscia', 'Osborn', 'Broken', 32.652161, 130.675613, 0.555000),
(112, 'Acura', 'Integra', 'Khaki', 'Sheridan', 'Pending', 7.450901, 126.577263, 0.560000),
(113, 'Ford', 'E350', 'Aquamarine', 'Sheridan', 'Broken', 50.904022, 17.843092, 0.565000),
(114, 'Ford', 'Focus', 'Aquamarine', 'Kata', 'Available', 30.184908, 121.227928, 0.570000),
(115, 'Mercury', 'Tracer', 'Turquoise', 'Alexei', 'In-use', 48.735992, 24.856077, 0.575000),
(116, 'Mercedes-Benz', '400E', 'Mauv', 'Toinette', 'Available', 7.670336, 123.004395, 0.580000),
(117, 'Volvo', '850', 'Green', 'Alexei', 'Pending', 29.003994, 92.564018, 0.585000),
(118, 'Audi', 'A6', 'Orange', 'Osborn', 'Servicing', 49.892174, 2.300066, 0.590000),
(119, 'Ford', 'Thunderbird', 'Khaki', 'Sheridan', 'In-use', 5.892605, 95.323761, 0.595000),
(120, 'Lexus', 'LS', 'Green', 'Osborn', 'Broken', 17.105679, 120.455734, 0.600000),
(121, 'Toyota', 'TundraMax', 'Khaki', 'Toinette', 'Available', 43.479485, -79.655823, 0.605000),
(122, 'Buick', 'Century', 'Yellow', 'Osborn', 'In-use', 58.962929, 16.414553, 0.610000),
(123, 'Mercedes-Benz', 'CLS-Class', 'Red', 'Osborn', 'Pending', 38.580002, -121.489998, 0.615000),
(124, 'Nissan', '350Z', 'Crimson', 'Sheridan', 'Available', 32.271336, 121.293442, 0.620000),
(125, 'Lincoln', 'Continental', 'Yellow', 'Alexei', 'Pending', 55.216030, 56.139629, 0.625000),
(126, 'Nissan', 'NX', 'Purple', 'Kata', 'Available', 22.469576, 111.895241, 0.630000),
(127, 'Ford', 'Probe', 'Aquamarine', 'Kata', 'In-use', 24.466675, 112.626495, 0.635000),
(128, 'Ford', 'Aspire', 'Goldenrod', 'Osborn', 'Available', 33.420635, 72.001732, 0.640000),
(129, 'Isuzu', 'Amigo', 'Red', 'Sheridan', 'Available', 11.620901, -85.079185, 0.645000),
(130, 'Dodge', 'Dakota', 'Orange', 'Toinette', 'Servicing', -34.580219, -58.535194, 0.650000);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`name`, `email`, `complaint`) VALUES
('Trial', 'aisha1@example.com', 'fghjfdkjf'),
('guuyy', 'aisha1@example.com', 'cbcnb');

-- --------------------------------------------------------

--
-- Table structure for table `customercomplaint`
--

CREATE TABLE `customercomplaint` (
  `receiptID` int(11) NOT NULL,
  `Complaint` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customercomplaint`
--

INSERT INTO `customercomplaint` (`receiptID`, `Complaint`) VALUES
(64, 'Smithopsis crassicaudata'),
(62, 'Macropus fuliginosus'),
(69, 'Alligator mississippiensis'),
(66, 'Otocyon megalotis'),
(61, 'Connochaetus taurinus'),
(65, 'Alopochen aegyptiacus'),
(68, 'Ara chloroptera'),
(69, 'Varanus sp.'),
(64, 'Rana sp.'),
(61, 'Centrocercus urophasianus'),
(66, 'Heloderma horridum'),
(61, 'Mellivora capensis'),
(64, 'Phoenicopterus chilensis'),
(64, 'Lamprotornis nitens'),
(61, 'Macropus agilis'),
(66, 'Mazama americana'),
(63, 'Plegadis ridgwayi'),
(62, 'Cordylus giganteus'),
(70, 'Lama guanicoe'),
(64, 'Bradypus tridactylus');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customerreceipt`
-- (See below for the actual view)
--
CREATE TABLE `customerreceipt` (
`receiptID` int(11)
,`MemberId` int(11)
,`BikeID` int(11)
,`Make` varchar(40)
,`Model` varchar(20)
,`Color` text
,`PickUpTime` datetime
,`DropOffTime` datetime
,`RentalLength` bigint(21)
,`pickUpTerminal` int(11)
,`dropOffTerminal` int(11)
,`AmountPaid` decimal(20,0)
);

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
(31, 'Eloise', 'Eloise', 'jworswick0@webeden.co.uk', 2147483647, '95116 Kim Way', '$2y$10$ioiww8aww/ppB', 'normal'),
(32, 'Marta', 'Scatchard', 'jscatchard1@liveinternet.ru', 2147483647, '13141 Columbus Plaza', '$2y$10$6yQkIucpFEJln', 'normal'),
(33, 'Lai', 'Pendry', 'ISM@ISM.com', 2147483647, '3 School Parkway', '$2y$10$IUbcBfzyBOjUV', 'normal'),
(34, 'Elies', 'Rontree', 'lrontree3@buzzfeed.com', 2147483647, '0 Ryan Street', '$2y$10$E6HrwAwAT.p1z', 'normal'),
(35, 'Oceane', 'Muddcliffe', 'tmuddicliffe4@wired.com', 2147483647, '8153 Cascade Place', '$2y$10$hPl1OHka2ueWc', 'normal'),
(36, 'admin', 'admin', 'admin@gmail.com', 1456789, 'Parisianton', '$2y$10$SDblxL5yTZHxv', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receiptID` int(11) NOT NULL,
  `MemberId` int(11) NOT NULL,
  `PickUpTime` datetime NOT NULL,
  `DropOffTime` datetime NOT NULL,
  `pickUpTerminal` int(11) NOT NULL,
  `dropOffTerminal` int(11) NOT NULL,
  `AmountPaid` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receiptID`, `MemberId`, `PickUpTime`, `DropOffTime`, `pickUpTerminal`, `dropOffTerminal`, `AmountPaid`) VALUES
(61, 31, '2019-03-20 18:52:38', '2019-03-21 06:47:50', 1, 3, '38'),
(62, 32, '2019-03-21 05:38:58', '2019-03-23 07:40:18', 4, 2, '11'),
(63, 34, '2019-03-23 07:15:13', '2019-03-22 12:46:36', 1, 2, '85'),
(64, 31, '2019-03-20 08:09:48', '2019-03-22 20:34:59', 3, 1, '91'),
(65, 31, '2019-03-19 19:49:41', '2019-03-21 01:39:10', 4, 3, '87'),
(66, 33, '2019-03-22 01:06:46', '2019-03-21 05:06:54', 2, 2, '92'),
(67, 33, '2019-03-19 09:28:39', '2019-03-21 22:26:31', 5, 3, '49'),
(68, 31, '2019-03-22 07:42:59', '2019-03-20 02:03:48', 2, 5, '30'),
(69, 34, '2019-03-22 04:55:52', '2019-03-19 17:50:08', 1, 4, '28'),
(70, 34, '2019-03-20 11:02:31', '2019-03-19 08:56:50', 2, 3, '56'),
(71, 32, '2019-03-22 12:18:16', '2019-03-22 03:10:39', 2, 1, '22'),
(72, 33, '2019-03-19 14:03:36', '2019-03-20 10:25:29', 5, 5, '59'),
(73, 33, '2019-03-21 00:15:53', '2019-03-23 11:13:21', 3, 3, '34'),
(74, 31, '2019-03-19 09:24:26', '2019-03-23 09:10:04', 2, 2, '30'),
(75, 34, '2019-03-20 22:36:01', '2019-03-19 00:52:31', 4, 1, '71'),
(76, 32, '2019-03-20 19:09:28', '2019-03-21 19:36:10', 1, 4, '66'),
(77, 31, '2019-03-19 08:54:33', '2019-03-23 03:15:14', 5, 2, '29'),
(78, 35, '2019-03-22 12:09:11', '2019-03-20 20:42:03', 5, 4, '35'),
(79, 32, '2019-03-21 18:44:29', '2019-03-20 01:11:31', 5, 5, '24'),
(80, 31, '2019-03-22 03:37:58', '2019-03-21 09:23:18', 2, 1, '44'),
(81, 32, '2019-03-20 22:16:15', '2019-03-20 10:50:35', 3, 2, '71'),
(82, 33, '2019-03-19 12:35:25', '2019-03-22 22:43:55', 4, 5, '84'),
(83, 34, '2019-03-19 13:38:33', '2019-03-21 09:48:16', 2, 3, '54'),
(84, 35, '2019-03-19 22:22:45', '2019-03-19 06:49:48', 4, 3, '37'),
(85, 34, '2019-03-19 17:22:35', '2019-03-22 21:12:20', 2, 2, '54'),
(86, 35, '2019-03-22 16:00:44', '2019-03-20 23:01:16', 1, 1, '46'),
(87, 35, '2019-03-22 22:27:59', '2019-03-22 06:08:30', 3, 4, '32'),
(88, 34, '2019-03-23 01:04:41', '2019-03-22 02:16:17', 4, 2, '46'),
(89, 33, '2019-03-22 11:16:48', '2019-03-21 20:52:44', 2, 5, '47'),
(90, 34, '2019-03-20 10:26:54', '2019-03-21 04:16:09', 1, 4, '22'),
(91, 32, '2019-03-20 04:02:40', '2019-03-21 15:03:06', 5, 2, '10'),
(92, 33, '2019-03-19 20:24:21', '2019-03-19 01:45:25', 5, 2, '48'),
(93, 35, '2019-03-19 18:25:12', '2019-03-20 12:19:02', 1, 2, '28'),
(94, 34, '2019-03-22 04:51:10', '2019-03-21 17:14:19', 5, 4, '95'),
(95, 32, '2019-03-23 01:33:27', '2019-03-21 09:18:48', 3, 4, '88'),
(96, 31, '2019-03-22 22:06:16', '2019-03-22 16:25:18', 3, 5, '44'),
(97, 31, '2019-03-19 01:40:03', '2019-03-23 04:12:29', 1, 3, '50'),
(98, 31, '2019-03-22 15:17:10', '2019-03-22 12:43:59', 4, 5, '41'),
(99, 34, '2019-03-22 00:04:10', '2019-03-21 09:57:24', 3, 1, '48'),
(100, 34, '2019-03-20 09:05:17', '2019-03-23 21:37:32', 3, 4, '45'),
(101, 33, '2019-03-22 09:39:58', '2019-03-20 01:46:00', 5, 1, '55'),
(102, 32, '2019-03-20 07:20:57', '2019-03-20 15:45:43', 5, 4, '82'),
(103, 33, '2019-03-22 07:00:08', '2019-03-22 12:21:13', 1, 4, '96'),
(104, 31, '2019-03-21 21:49:35', '2019-03-20 11:08:17', 4, 1, '76'),
(105, 32, '2019-03-19 21:18:01', '2019-03-21 09:39:17', 1, 1, '91'),
(106, 34, '2019-03-23 08:13:16', '2019-03-23 19:47:33', 2, 2, '76'),
(107, 34, '2019-03-19 07:47:56', '2019-03-23 22:57:33', 3, 4, '83'),
(108, 33, '2019-03-19 08:29:44', '2019-03-20 04:04:34', 5, 5, '35'),
(109, 33, '2019-03-23 07:24:25', '2019-03-23 21:32:01', 4, 1, '32'),
(110, 34, '2019-03-19 23:47:49', '2019-03-22 10:51:04', 3, 3, '28'),
(111, 33, '2019-03-21 01:31:30', '2019-03-20 11:32:55', 4, 4, '73'),
(112, 31, '2019-03-19 07:06:33', '2019-03-21 11:11:01', 3, 2, '99'),
(113, 32, '2019-03-22 07:11:23', '2019-03-22 11:58:08', 3, 5, '66'),
(114, 33, '2019-03-21 19:47:44', '2019-03-19 09:53:17', 2, 1, '74'),
(115, 31, '2019-03-21 13:33:11', '2019-03-21 16:06:41', 5, 2, '41'),
(116, 31, '2019-03-19 03:56:49', '2019-03-19 01:53:12', 1, 3, '82'),
(117, 34, '2019-03-23 22:58:53', '2019-03-21 06:16:49', 1, 3, '65'),
(118, 33, '2019-03-22 18:56:19', '2019-03-21 04:12:41', 3, 4, '86'),
(119, 31, '2019-03-19 11:26:36', '2019-03-23 19:56:56', 1, 2, '88'),
(120, 34, '2019-03-19 12:24:41', '2019-03-21 00:26:46', 2, 2, '26'),
(121, 33, '2019-03-22 02:58:31', '2019-03-22 06:44:05', 4, 4, '25'),
(122, 31, '2019-03-20 23:23:22', '2019-03-23 00:00:28', 1, 1, '38'),
(123, 33, '2019-03-19 03:04:04', '2019-03-19 18:29:28', 2, 3, '42'),
(124, 32, '2019-03-22 09:41:40', '2019-03-21 00:18:29', 1, 3, '48'),
(125, 32, '2019-03-20 11:30:03', '2019-03-20 15:17:09', 5, 3, '89'),
(126, 34, '2019-03-23 12:43:29', '2019-03-22 15:05:18', 1, 5, '87'),
(127, 33, '2019-03-23 22:24:00', '2019-03-23 11:50:17', 2, 2, '77'),
(128, 34, '2019-03-22 08:51:31', '2019-03-21 02:26:25', 3, 5, '57'),
(129, 35, '2019-03-19 23:46:49', '2019-03-19 02:47:48', 1, 4, '88'),
(130, 35, '2019-03-22 10:48:11', '2019-03-22 00:10:33', 4, 4, '69'),
(131, 34, '2019-03-19 18:39:36', '2019-03-21 12:45:12', 4, 2, '32'),
(132, 32, '2019-03-21 21:53:35', '2019-03-23 10:55:46', 2, 4, '63'),
(133, 31, '2019-03-20 19:44:35', '2019-03-20 05:39:39', 5, 5, '59'),
(134, 33, '2019-03-21 03:52:46', '2019-03-21 20:16:41', 3, 5, '33'),
(135, 34, '2019-03-20 17:30:15', '2019-03-20 09:01:26', 5, 5, '37'),
(136, 35, '2019-03-21 18:20:16', '2019-03-22 12:24:30', 3, 4, '74'),
(137, 34, '2019-03-22 14:13:35', '2019-03-19 22:38:37', 5, 4, '72'),
(138, 34, '2019-03-21 02:39:37', '2019-03-22 06:56:01', 1, 5, '74'),
(139, 34, '2019-03-19 17:12:52', '2019-03-21 00:03:46', 1, 1, '43'),
(140, 31, '2019-03-23 11:22:56', '2019-03-19 02:04:26', 5, 4, '24'),
(141, 35, '2019-03-21 02:13:16', '2019-03-19 00:38:33', 1, 2, '31'),
(142, 35, '2019-03-22 05:57:58', '2019-03-21 13:11:35', 4, 4, '26'),
(143, 34, '2019-03-21 05:34:05', '2019-03-23 02:03:58', 4, 4, '68'),
(144, 31, '2019-03-21 10:24:18', '2019-03-21 21:18:04', 4, 4, '53'),
(145, 33, '2019-03-22 13:49:10', '2019-03-19 13:34:00', 3, 3, '12'),
(146, 32, '2019-03-21 10:26:03', '2019-03-20 15:23:46', 3, 3, '29'),
(147, 32, '2019-03-22 04:08:18', '2019-03-19 16:42:58', 3, 2, '25'),
(148, 32, '2019-03-23 06:06:23', '2019-03-23 16:54:18', 1, 2, '44'),
(149, 31, '2019-03-23 22:07:35', '2019-03-23 01:44:52', 2, 4, '31'),
(150, 32, '2019-03-19 02:18:43', '2019-03-19 03:07:02', 3, 5, '50'),
(151, 35, '2019-03-21 03:12:13', '2019-03-23 13:22:37', 1, 5, '46'),
(152, 32, '2019-03-21 05:53:23', '2019-03-22 21:25:13', 3, 2, '67'),
(153, 33, '2019-03-22 08:06:36', '2019-03-22 15:36:28', 4, 1, '22'),
(154, 33, '2019-03-19 19:59:28', '2019-03-19 22:07:44', 2, 1, '57'),
(155, 34, '2019-03-19 21:49:52', '2019-03-19 16:35:39', 4, 3, '18'),
(156, 33, '2019-03-19 14:45:20', '2019-03-20 21:30:01', 3, 3, '93'),
(157, 34, '2019-03-22 15:04:11', '2019-03-20 14:41:05', 3, 2, '23'),
(158, 34, '2019-03-19 20:17:46', '2019-03-20 02:49:02', 5, 1, '80'),
(159, 32, '2019-03-20 12:18:32', '2019-03-21 09:32:21', 4, 1, '100'),
(160, 35, '2019-03-23 15:51:18', '2019-03-22 21:50:37', 3, 1, '35');

-- --------------------------------------------------------

--
-- Table structure for table `receiptbikes`
--

CREATE TABLE `receiptbikes` (
  `BikeID` int(11) NOT NULL,
  `receiptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receiptbikes`
--

INSERT INTO `receiptbikes` (`BikeID`, `receiptID`) VALUES
(31, 80),
(31, 88),
(31, 90),
(31, 103),
(31, 107),
(31, 133),
(31, 155),
(31, 156),
(32, 61),
(32, 63),
(32, 72),
(32, 74),
(32, 83),
(32, 101),
(32, 103),
(32, 138),
(33, 78),
(33, 83),
(33, 106),
(33, 140),
(33, 146),
(33, 158),
(34, 64),
(34, 80),
(34, 82),
(34, 103),
(34, 109),
(34, 119),
(34, 120),
(34, 130),
(34, 136),
(34, 146),
(35, 61),
(35, 70),
(35, 72),
(35, 73),
(35, 76),
(35, 100),
(35, 112),
(35, 120),
(35, 128),
(35, 134),
(35, 135),
(35, 138),
(35, 144),
(35, 160),
(36, 76),
(36, 82),
(36, 86),
(36, 97),
(36, 121),
(36, 144),
(36, 146),
(36, 147),
(37, 67),
(37, 71),
(37, 73),
(37, 75),
(37, 77),
(37, 78),
(37, 80),
(37, 109),
(37, 130),
(37, 150),
(38, 68),
(38, 92),
(38, 102),
(38, 107),
(38, 128),
(38, 137),
(38, 141),
(38, 146),
(38, 152),
(38, 155),
(39, 73),
(39, 93),
(39, 96),
(39, 117),
(39, 122),
(40, 74),
(40, 75),
(40, 77),
(40, 92),
(40, 99),
(40, 102),
(40, 111),
(40, 133),
(40, 150),
(40, 153),
(40, 155),
(40, 160),
(41, 62),
(41, 63),
(41, 83),
(41, 92),
(41, 102),
(41, 116),
(41, 120),
(41, 125),
(41, 145),
(41, 150),
(41, 153),
(42, 110),
(42, 121),
(42, 130),
(42, 132),
(42, 133),
(42, 140),
(42, 145),
(43, 92),
(43, 101),
(43, 104),
(43, 106),
(43, 125),
(43, 131),
(43, 134),
(43, 145),
(43, 149),
(43, 153),
(43, 154),
(43, 158),
(44, 62),
(44, 70),
(44, 74),
(44, 92),
(44, 100),
(44, 125),
(44, 134),
(44, 136),
(44, 140),
(44, 142),
(44, 152),
(45, 69),
(45, 79),
(45, 106),
(45, 113),
(45, 114),
(45, 139),
(45, 149),
(45, 156),
(46, 75),
(46, 80),
(46, 83),
(46, 87),
(46, 91),
(46, 102),
(46, 111),
(46, 132),
(46, 138),
(46, 142),
(46, 160),
(47, 71),
(47, 78),
(47, 80),
(47, 84),
(47, 90),
(47, 92),
(47, 116),
(47, 130),
(47, 131),
(47, 140),
(47, 145),
(47, 146),
(47, 153),
(48, 68),
(48, 76),
(48, 95),
(48, 100),
(48, 118),
(48, 131),
(48, 140),
(48, 150),
(48, 153),
(49, 62),
(49, 76),
(49, 77),
(49, 90),
(49, 93),
(49, 94),
(49, 101),
(49, 103),
(49, 130),
(49, 152),
(50, 72),
(50, 84),
(50, 85),
(50, 88),
(50, 94),
(50, 100),
(50, 102),
(50, 117),
(50, 119),
(50, 132),
(50, 146),
(50, 147),
(50, 155),
(51, 80),
(51, 102),
(51, 104),
(51, 114),
(51, 124),
(51, 126),
(51, 127),
(51, 135),
(51, 139),
(51, 142),
(51, 144),
(51, 150),
(52, 63),
(52, 68),
(52, 126),
(52, 136),
(52, 139),
(52, 157),
(53, 102),
(53, 120),
(53, 154),
(53, 155),
(54, 77),
(54, 79),
(54, 80),
(54, 88),
(54, 92),
(54, 94),
(54, 99),
(54, 106),
(54, 112),
(54, 131),
(54, 132),
(54, 151),
(54, 159),
(55, 75),
(55, 101),
(55, 105),
(55, 108),
(55, 117),
(55, 137),
(55, 140),
(55, 157),
(55, 159),
(56, 62),
(56, 63),
(56, 95),
(56, 98),
(56, 99),
(56, 100),
(56, 101),
(56, 112),
(56, 132),
(57, 63),
(57, 77),
(57, 100),
(57, 113),
(57, 114),
(57, 132),
(57, 133),
(58, 63),
(58, 64),
(58, 82),
(58, 101),
(58, 105),
(58, 107),
(58, 114),
(58, 117),
(58, 128),
(58, 144),
(58, 145),
(58, 147),
(58, 150),
(58, 152),
(58, 153),
(59, 72),
(59, 73),
(59, 79),
(59, 85),
(59, 86),
(59, 91),
(59, 99),
(59, 114),
(59, 129),
(59, 139),
(59, 155),
(60, 71),
(60, 99),
(60, 114),
(60, 122),
(60, 123),
(60, 139),
(60, 155),
(60, 157),
(61, 68),
(61, 79),
(61, 84),
(61, 94),
(61, 101),
(61, 105),
(61, 109),
(61, 111),
(61, 138),
(61, 139),
(62, 72),
(62, 85),
(62, 89),
(62, 90),
(62, 98),
(62, 100),
(62, 105),
(62, 108),
(62, 122),
(62, 126),
(62, 131),
(62, 139),
(62, 142),
(62, 159),
(63, 80),
(63, 82),
(63, 88),
(63, 118),
(63, 120),
(63, 140),
(63, 151),
(63, 154),
(63, 155),
(64, 61),
(64, 70),
(64, 115),
(64, 127),
(64, 128),
(65, 61),
(65, 62),
(65, 63),
(65, 69),
(65, 80),
(65, 112),
(65, 119),
(65, 129),
(65, 152),
(65, 154),
(66, 72),
(66, 81),
(66, 84),
(66, 86),
(66, 104),
(66, 105),
(66, 123),
(66, 127),
(66, 139),
(66, 144),
(66, 147),
(67, 65),
(67, 81),
(67, 84),
(67, 92),
(67, 100),
(67, 142),
(67, 154),
(67, 155),
(67, 157),
(67, 160),
(68, 69),
(68, 76),
(68, 88),
(68, 99),
(68, 104),
(68, 113),
(68, 116),
(68, 123),
(68, 128),
(68, 138),
(68, 143),
(68, 147),
(69, 74),
(69, 77),
(69, 78),
(69, 88),
(69, 95),
(69, 104),
(69, 139),
(69, 141),
(69, 151),
(70, 61),
(70, 76),
(70, 82),
(70, 93),
(70, 104),
(70, 107),
(70, 109),
(70, 115),
(70, 128),
(70, 136),
(71, 80),
(71, 87),
(71, 90),
(71, 107),
(71, 113),
(71, 124),
(71, 142),
(71, 150),
(72, 62),
(72, 76),
(72, 97),
(72, 100),
(72, 120),
(72, 122),
(72, 125),
(72, 126),
(72, 128),
(72, 154),
(72, 156),
(73, 72),
(73, 85),
(73, 88),
(73, 91),
(73, 99),
(73, 103),
(73, 116),
(73, 139),
(73, 158),
(74, 76),
(74, 93),
(74, 97),
(74, 103),
(74, 112),
(74, 119),
(74, 125),
(74, 133),
(74, 146),
(74, 160),
(75, 67),
(75, 74),
(75, 75),
(75, 87),
(75, 115),
(75, 140),
(75, 153),
(75, 154),
(75, 160),
(76, 78),
(76, 81),
(76, 82),
(76, 83),
(76, 86),
(76, 95),
(76, 96),
(76, 112),
(76, 126),
(76, 131),
(76, 143),
(76, 153),
(76, 156),
(77, 76),
(77, 85),
(77, 94),
(77, 98),
(77, 108),
(77, 110),
(77, 113),
(77, 153),
(78, 98),
(78, 109),
(78, 111),
(78, 113),
(78, 115),
(78, 121),
(78, 124),
(78, 140),
(78, 156),
(78, 158),
(79, 66),
(79, 68),
(79, 87),
(79, 88),
(79, 89),
(79, 94),
(79, 95),
(79, 99),
(79, 103),
(79, 114),
(79, 132),
(79, 150),
(80, 64),
(80, 79),
(80, 96),
(80, 98),
(80, 101),
(80, 122),
(80, 123),
(80, 137),
(80, 145),
(80, 147),
(80, 157),
(81, 63),
(81, 80),
(81, 88),
(81, 93),
(81, 128),
(81, 145),
(82, 66),
(82, 69),
(82, 78),
(82, 99),
(82, 104),
(82, 108),
(82, 114),
(82, 138),
(82, 141),
(83, 72),
(83, 93),
(83, 125),
(83, 129),
(83, 130),
(83, 133),
(83, 144),
(83, 146),
(83, 148),
(84, 68),
(84, 75),
(84, 76),
(84, 103),
(84, 122),
(84, 127),
(84, 143),
(84, 149),
(84, 154),
(84, 155),
(85, 78),
(85, 79),
(85, 103),
(85, 106),
(85, 108),
(85, 117),
(85, 125),
(85, 153),
(86, 78),
(86, 90),
(86, 100),
(86, 101),
(86, 108),
(86, 115),
(86, 133),
(86, 154),
(87, 65),
(87, 66),
(87, 79),
(87, 87),
(87, 95),
(87, 117),
(87, 140),
(87, 157),
(88, 61),
(88, 87),
(88, 98),
(88, 126),
(88, 129),
(88, 134),
(88, 136),
(88, 149),
(89, 61),
(89, 69),
(89, 75),
(89, 78),
(89, 80),
(89, 82),
(89, 85),
(89, 94),
(89, 117),
(89, 127),
(89, 139),
(89, 141),
(89, 147),
(89, 157),
(90, 69),
(90, 70),
(90, 77),
(90, 80),
(90, 85),
(90, 99),
(90, 112),
(90, 125),
(90, 134),
(90, 153),
(90, 155),
(91, 91),
(91, 116),
(91, 140),
(91, 160),
(92, 63),
(92, 75),
(92, 78),
(92, 84),
(92, 118),
(92, 141),
(92, 144),
(93, 84),
(93, 93),
(93, 112),
(93, 116),
(93, 126),
(93, 143),
(93, 144),
(93, 157),
(94, 86),
(94, 100),
(94, 101),
(94, 103),
(94, 120),
(94, 134),
(94, 140),
(94, 147),
(94, 149),
(94, 150),
(95, 69),
(95, 92),
(95, 102),
(95, 103),
(95, 104),
(95, 123),
(95, 143),
(95, 151),
(95, 156),
(96, 62),
(96, 67),
(96, 83),
(96, 130),
(96, 135),
(96, 148),
(97, 78),
(97, 100),
(97, 108),
(97, 109),
(97, 117),
(97, 122),
(98, 79),
(98, 84),
(98, 103),
(98, 109),
(98, 117),
(98, 121),
(98, 128),
(98, 140),
(98, 142),
(98, 143),
(98, 154),
(99, 69),
(99, 71),
(99, 73),
(99, 120),
(99, 154),
(99, 155),
(99, 160),
(100, 71),
(100, 106),
(100, 108),
(100, 120),
(100, 121),
(100, 149),
(100, 156),
(100, 158),
(100, 159),
(101, 68),
(101, 76),
(101, 84),
(101, 91),
(101, 110),
(101, 115),
(101, 127),
(101, 128),
(101, 138),
(101, 152),
(101, 153),
(102, 64),
(102, 69),
(102, 77),
(102, 128),
(102, 137),
(103, 63),
(103, 66),
(103, 67),
(103, 85),
(103, 105),
(103, 108),
(103, 122),
(103, 126),
(103, 139),
(103, 145),
(103, 157),
(104, 61),
(104, 62),
(104, 68),
(104, 69),
(104, 71),
(104, 84),
(104, 88),
(104, 132),
(104, 133),
(104, 135),
(105, 65),
(105, 72),
(105, 83),
(105, 86),
(105, 90),
(105, 94),
(105, 102),
(105, 118),
(105, 120),
(105, 134),
(105, 146),
(105, 155),
(105, 160),
(106, 89),
(106, 90),
(106, 105),
(106, 106),
(106, 110),
(106, 112),
(106, 116),
(106, 124),
(106, 131),
(107, 82),
(107, 94),
(107, 112),
(107, 114),
(107, 125),
(107, 128),
(108, 64),
(108, 75),
(108, 83),
(108, 91),
(108, 96),
(108, 106),
(108, 123),
(108, 139),
(108, 151),
(108, 154),
(109, 70),
(109, 74),
(109, 87),
(109, 101),
(109, 103),
(109, 114),
(109, 119),
(109, 121),
(109, 122),
(109, 134),
(109, 138),
(109, 149),
(109, 151),
(110, 83),
(110, 84),
(110, 99),
(110, 100),
(110, 137),
(110, 155),
(110, 157),
(111, 64),
(111, 70),
(111, 71),
(111, 87),
(111, 101),
(111, 102),
(111, 117),
(111, 121),
(111, 130),
(111, 131),
(111, 150),
(111, 151),
(112, 69),
(112, 74),
(112, 79),
(112, 83),
(112, 85),
(112, 89),
(112, 92),
(112, 95),
(112, 111),
(112, 114),
(112, 125),
(112, 132),
(112, 137),
(112, 145),
(112, 147),
(112, 148),
(112, 160),
(113, 72),
(113, 77),
(113, 89),
(113, 93),
(113, 129),
(113, 140),
(113, 157),
(113, 158),
(113, 159),
(114, 86),
(114, 116),
(114, 142),
(114, 143),
(114, 157),
(115, 69),
(115, 90),
(115, 96),
(115, 113),
(115, 123),
(115, 134),
(115, 139),
(116, 66),
(116, 84),
(116, 90),
(116, 93),
(116, 97),
(116, 112),
(116, 132),
(116, 133),
(117, 61),
(117, 72),
(117, 74),
(117, 84),
(117, 103),
(117, 113),
(117, 118),
(117, 124),
(117, 130),
(117, 136),
(117, 148),
(117, 155),
(117, 156),
(118, 64),
(118, 75),
(118, 77),
(118, 80),
(118, 83),
(118, 90),
(118, 96),
(118, 98),
(118, 102),
(118, 105),
(118, 137),
(118, 160),
(119, 68),
(119, 72),
(119, 74),
(119, 89),
(119, 90),
(119, 110),
(119, 115),
(119, 131),
(119, 137),
(119, 141),
(119, 154),
(120, 63),
(120, 76),
(120, 101),
(120, 110),
(120, 119),
(120, 123),
(120, 124),
(120, 125),
(120, 138),
(120, 145),
(120, 147),
(120, 151),
(121, 69),
(121, 70),
(121, 75),
(121, 79),
(121, 87),
(121, 93),
(121, 101),
(121, 108),
(121, 114),
(121, 126),
(121, 139),
(121, 146),
(121, 148),
(121, 159),
(122, 79),
(122, 97),
(122, 102),
(122, 104),
(122, 105),
(122, 120),
(122, 139),
(123, 67),
(123, 76),
(123, 79),
(123, 88),
(123, 91),
(123, 98),
(123, 101),
(123, 107),
(123, 117),
(124, 64),
(124, 72),
(124, 73),
(124, 90),
(124, 102),
(124, 104),
(124, 107),
(124, 112),
(124, 125),
(124, 132),
(124, 141),
(124, 150),
(125, 79),
(125, 87),
(125, 101),
(125, 132),
(125, 133),
(125, 135),
(125, 139),
(125, 143),
(126, 62),
(126, 73),
(126, 74),
(126, 95),
(126, 97),
(126, 100),
(126, 102),
(126, 116),
(126, 122),
(126, 123),
(126, 130),
(126, 144),
(127, 84),
(127, 88),
(127, 102),
(127, 134),
(127, 153),
(127, 156),
(127, 157),
(128, 78),
(128, 83),
(128, 85),
(128, 100),
(128, 110),
(128, 120),
(128, 130),
(128, 139),
(128, 150),
(128, 153),
(128, 160),
(129, 69),
(129, 72),
(129, 74),
(129, 94),
(129, 116),
(129, 128),
(129, 130),
(129, 132),
(129, 135),
(129, 137),
(129, 138),
(129, 141),
(130, 66),
(130, 70),
(130, 72),
(130, 82),
(130, 95),
(130, 97),
(130, 103),
(130, 120),
(130, 134),
(130, 147),
(130, 158);

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
(1, 'Alexei', 20, 25.197418, 55.279240),
(2, 'Kata', 42, 25.129395, 55.416492),
(3, 'Toinette', 20, 25.118813, 55.200272),
(4, 'Sheridan', 30, 25.141348, 55.185352),
(5, 'Osborn', 43, 25.113110, 55.138779);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Email`, `Password`, `Type`) VALUES
(1, 'admin', '$2y$10$SDblxL5yTZHxvzYWQmqjHunySjoU1EcWLlG25TDXUAlSFnINpr79.', 'admin'),
(2, 'Eloise', '$2y$10$ioiww8aww/ppBiPF.HhzweAK1sIjnvfgqyj9g43twQ5O2V.D5F/Oa', 'normal'),
(3, 'Marta', '$2y$10$6yQkIucpFEJlnjuEsaBNkuUAtAsTX/FdmteL/C9gs6JpeL2.XoYYW', 'normal'),
(4, 'Lai', '$2y$10$IUbcBfzyBOjUVOy/eahmT.qd6RwCvPk6uXLG8LrzxqTq6Twe4fWOS', 'normal'),
(5, 'Elies', '$2y$10$E6HrwAwAT.p1z0u2SS/Kq.QcSyT9Fu.c.KCfP08FWBDJ5d5qXNQqW', 'normal'),
(6, 'Oceane', '$2y$10$hPl1OHka2ueWc5gTCmvbguQdaDMmX4bG5PC272hMvodDCelsXytzq', 'normal');

-- --------------------------------------------------------

--
-- Structure for view `customerreceipt`
--
DROP TABLE IF EXISTS `customerreceipt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customerreceipt`  AS  select `b`.`receiptID` AS `receiptID`,`b`.`MemberId` AS `MemberId`,`a`.`BikeID` AS `BikeID`,`a`.`Make` AS `Make`,`a`.`Model` AS `Model`,`a`.`Color` AS `Color`,`b`.`PickUpTime` AS `PickUpTime`,`b`.`DropOffTime` AS `DropOffTime`,timestampdiff(MINUTE,`b`.`PickUpTime`,`b`.`DropOffTime`) AS `RentalLength`,`b`.`pickUpTerminal` AS `pickUpTerminal`,`b`.`dropOffTerminal` AS `dropOffTerminal`,`b`.`AmountPaid` AS `AmountPaid` from ((`receipt` `b` join `bicycle` `a`) join `receiptbikes` `c`) where ((`b`.`receiptID` = `c`.`receiptID`) and (`a`.`BikeID` = `c`.`BikeID`)) group by `b`.`DropOffTime` desc ;

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
  ADD KEY `MemberId` (`MemberId`),
  ADD KEY `pickUpTerminal` (`pickUpTerminal`),
  ADD KEY `dropOffTerminal` (`dropOffTerminal`);

--
-- Indexes for table `receiptbikes`
--
ALTER TABLE `receiptbikes`
  ADD PRIMARY KEY (`BikeID`,`receiptID`),
  ADD KEY `receiptID` (`receiptID`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bicycle`
--
ALTER TABLE `bicycle`
  MODIFY `BikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receiptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `IdNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customercomplaint`
--
ALTER TABLE `customercomplaint`
  ADD CONSTRAINT `customercomplaint_ibfk_1` FOREIGN KEY (`receiptID`) REFERENCES `receipt` (`receiptID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
