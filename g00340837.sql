-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2015 at 04:42 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g00340837`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `FlightNumber` char(4) NOT NULL,
  `FlightDate` date NOT NULL,
  `DepartureTime` time DEFAULT NULL,
  `ArrivalTime` time DEFAULT NULL,
  `DepartureCity` varchar(30) DEFAULT NULL,
  `Destination` varchar(30) DEFAULT NULL,
  `TotalSeats` int(3) DEFAULT NULL,
  `SeatsAllocated` int(3) DEFAULT NULL,
  `SeatPrice` decimal(5,2) DEFAULT NULL,
  `Cancelled` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FlightNumber`, `FlightDate`, `DepartureTime`, `ArrivalTime`, `DepartureCity`, `Destination`, `TotalSeats`, `SeatsAllocated`, `SeatPrice`, `Cancelled`) VALUES
('D100', '2015-12-01', '10:00:00', '12:00:00', 'Dublin', 'London', 100, 4, '75.00', 0),
('D100', '2015-12-02', '10:00:00', '12:00:00', 'Dublin', 'London', 100, 1, '75.00', 0),
('D200', '2015-12-01', '13:00:00', '15:00:00', 'Dublin', 'London', 100, 0, '100.00', 0),
('D200', '2015-12-02', '13:00:00', '15:00:00', 'Dublin', 'London', 100, 0, '75.00', 0),
('L100', '2015-12-01', '14:00:00', '16:00:00', 'London', 'Dublin', 100, 0, '80.00', 0),
('L100', '2015-12-02', '14:00:00', '16:00:00', 'London', 'Dublin', 100, 0, '80.00', 0),
('L200', '2015-12-01', '16:00:00', '18:00:00', 'London', 'Dublin', 100, 0, '60.00', 0),
('L200', '2015-12-02', '16:00:00', '18:00:00', 'London', 'Dublin', 100, 0, '60.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logged_calls`
--

CREATE TABLE IF NOT EXISTS `logged_calls` (
  `BookingSteward` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Comment` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logged_calls`
--

INSERT INTO `logged_calls` (`BookingSteward`, `Date`, `Time`, `Comment`) VALUES
('john', '2015-12-01', '02:01:00', '	hello		'),
('Mary', '2015-12-01', '23:01:00', '	testing		');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `PassengerID` int(3) NOT NULL,
  `PassportNumber` varchar(20) DEFAULT NULL,
  `Title` varchar(3) DEFAULT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `Surname` varchar(30) DEFAULT NULL,
  `Address1` varchar(30) DEFAULT NULL,
  `Address2` varchar(30) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`PassengerID`, `PassportNumber`, `Title`, `FirstName`, `Surname`, `Address1`, `Address2`, `Country`, `Dob`, `PhoneNumber`, `Email`) VALUES
(1, 'a123', 'Mrs', 'Laura', 'White', '1 Park road', 'Waterloo', 'England', '1999-08-30', '2345678', 'waterloo@hi.com'),
(2, 'b123', 'Mr', 'Blaise', 'Devaney', '24 Marian crescent', 'Ballina', 'Ireland', '1991-08-31', '32143523532', 'hello@hi.com'),
(5, 'c123', 'Mr', 'John', 'Keane', '1 shop Street', 'Galway', 'Ireland', '1980-11-10', '98324735', 'yellow@red.ie'),
(8, 'd123', 'mr', 'Blaise', 'Devaney', '1 shoe street', '', 'Ireland', '2015-12-01', '089-9928377', 'blaisedevaney@gmail.com'),
(11, 'e123', 'Mrs', 'John', 'Foley', '23 gmit', 'dublin road', 'Ireland', '1991-12-03', '086-352523', 'yellow@blue.ie'),
(19, 'f123', 'Mrs', 'Aoife', 'Daly', '23 long street', 'crossmolina', 'Ireland', '1990-03-12', '098-8371283', 'yellow@blues.ie');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentReference` int(3) NOT NULL,
  `PassangerID` int(3) DEFAULT NULL,
  `ReservationNumber` int(3) DEFAULT NULL,
  `AmountPaid` decimal(5,2) DEFAULT NULL,
  `Type` varchar(8) DEFAULT NULL,
  `ReceiptGenerated` tinyint(1) DEFAULT NULL,
  `RefundDue` tinyint(1) DEFAULT NULL,
  `RebookFlight` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentReference`, `PassangerID`, `ReservationNumber`, `AmountPaid`, `Type`, `ReceiptGenerated`, `RefundDue`, `RebookFlight`) VALUES
(1, 1, 1, '75.00', 'Cash', 1, 0, 0),
(2, 2, 2, '75.00', 'Cheque', 1, 0, 0),
(3, 5, 3, '100.00', 'Card', 0, 0, 0),
(14, 8, 4, '75.00', 'Card', 1, 0, 0),
(15, 11, 5, '75.00', 'Card', 0, 0, 0),
(16, 19, 6, '75.00', 'Cheque', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `ReservationNumber` int(3) NOT NULL,
  `PassengerID` int(3) NOT NULL,
  `FlightNumber` char(4) NOT NULL,
  `FlightDate` date NOT NULL,
  `ReservationDate` date NOT NULL,
  `ReceiptGenerated` tinyint(1) NOT NULL,
  `BoardingPass` tinyint(1) NOT NULL,
  `Cancelled` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationNumber`, `PassengerID`, `FlightNumber`, `FlightDate`, `ReservationDate`, `ReceiptGenerated`, `BoardingPass`, `Cancelled`) VALUES
(1, 1, 'D100', '2015-12-01', '2015-11-21', 1, 0, 0),
(2, 2, 'D100', '2015-12-02', '2015-11-18', 1, 0, 0),
(3, 5, 'D200', '2015-12-01', '2015-11-01', 0, 0, 0),
(4, 8, 'D100', '2015-12-01', '2015-11-18', 1, 0, 0),
(5, 11, 'D100', '2015-12-01', '2015-11-18', 0, 0, 0),
(6, 19, 'D100', '2015-12-01', '2015-11-01', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FlightNumber`,`FlightDate`);

--
-- Indexes for table `logged_calls`
--
ALTER TABLE `logged_calls`
  ADD PRIMARY KEY (`BookingSteward`,`Time`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`PassengerID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentReference`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `PassengerID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentReference` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationNumber` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
