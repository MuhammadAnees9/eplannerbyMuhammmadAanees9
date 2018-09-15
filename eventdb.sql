-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 08:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bookingDate` varchar(20) NOT NULL,
  `eventType` varchar(20) NOT NULL,
  `bstatus` varchar(20) NOT NULL,
  `fromTime` varchar(20) NOT NULL,
  `toTime` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `ccontact` varchar(15) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bid`, `uid`, `bookingDate`, `eventType`, `bstatus`, `fromTime`, `toTime`, `cname`, `ccontact`, `createdAt`) VALUES
(3, 8, 3, '26 September, 2017', 'Seminar', 'Approved', '00:05', '01:35', '', '', '2017-09-28 10:42:30'),
(4, 8, 3, '27 September, 2017', 'Party', 'Approved', '', '11:27', '', '', '2017-09-28 10:42:30'),
(5, 8, 3, '15 September, 2017', 'Sports', 'Approved', '15:28', '19:28', '', '', '2017-09-28 10:42:30'),
(6, 8, 3, '28 September, 2017', 'Sports', 'Approved', '19:50', '21:55', '', '', '2017-09-28 10:42:30'),
(7, 8, 3, '29 September, 2017', 'Seminars', 'Pending', '18:43', '21:43', '', '', '2017-09-28 10:42:30'),
(8, 1, 0, '2017-12-12', 'Merriage', 'Approved', '15:30', '23:30', 'Abdul Rehman', '03008976543', '2017-09-28 10:42:30'),
(9, 12, 8, '30 September, 2017', 'Merriage', 'Approved', '18:20', '20:45', '', '', '2017-09-29 13:18:31'),
(10, 12, 3, '30 September, 2017', 'Party', 'Approved', '10:45', '10:45', '', '', '2018-08-04 05:45:13'),
(11, 12, 11, '30 September, 2017', 'Merriage', 'Pending', '10:52', '10:52', '', '', '2018-08-04 05:53:01'),
(12, 12, 11, '14 August, 2018', 'Party', 'Approved', '09:00', '10:52', '', '', '2018-08-04 05:54:12'),
(13, 4, 3, '14 August, 2018', 'Party', 'Approved', '10:16', '', '', '', '2018-08-07 07:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `bname` varchar(25) NOT NULL,
  `bcity` varchar(25) NOT NULL,
  `barea` varchar(50) NOT NULL,
  `blocation` varchar(100) NOT NULL,
  `bcontact` varchar(15) NOT NULL,
  `bookingFee` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `bdesc` varchar(200) NOT NULL,
  `openDays` varchar(25) NOT NULL,
  `bstatus` varchar(15) NOT NULL DEFAULT 'Pending',
  `Paid` varchar(15) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `bname`, `bcity`, `barea`, `blocation`, `bcontact`, `bookingFee`, `ownerId`, `bdesc`, `openDays`, `bstatus`, `Paid`) VALUES
(1, 'Pearl Marriage Hall', 'karachi', 'korangi', 'Tehsil office Road, , Punjab, Pakistan', '046 8907654', 2000, 1, '', '', 'Approved', 'Yes'),
(3, 'Zee Party Hall', 'Faisalabad', 'jinnah colony', 'Pensra Road Gojra', '046 8908754', 1600, 1, '', '', 'Approved', 'Yes'),
(4, 'Ghazi Hall', 'Multan', 'cant area', 'Hafeez Park', '36463564335', 9000, 1, '', '', 'Approved', 'Yes'),
(7, 'Allah ka Shukar', 'Abbottabad', 'testing', 'Every Where', 'Namaz', 500, 1, '', '', 'Approved', 'Yes'),
(8, 'Memon House Parties', 'Gojra', 'Housing Colony', 'Housing Colony Gojra', '092 46 9087654', 200, 1, 'This is some type of description for testing purposes', '', 'Approved', 'Yes'),
(9, 'xyz', 'lhr', 'model', 'a432', '999', 200, 1, '', '24/7', 'Approved', 'Yes'),
(11, 'PC', 'Lahore ', 'mall Road ', 'pc mall road lahore pakistan ', '03214330859', 5000, 1, '', 'Saturday OFF', 'Approved', 'No'),
(12, 'Awari', 'Lahore ', 'Mall Road ', 'mall road lahore pakistan ', '9348059349', 5000, 7, '', 'Saturday Sunday OFF', 'Approved', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `iname`, `bid`) VALUES
(1, '12.jpg', 7),
(2, '998647_241996409299644_1568947070_n.jpg', 7),
(3, '15350470_659253494245843_7816871362865302358_n.jpg', 7),
(4, 'best2.jpg', 8),
(5, 'choochay.jpg', 8),
(6, '07-02-15Top-Leadership-Qualities-of-the-Holy-Prophet-Muhammad-PBUH.png', 9),
(7, 'download.jpg', 10),
(8, '10352821_1409482036014636_4786127074461717442_n.jpg', 11),
(9, '12.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `nid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(130) NOT NULL,
  `uid` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`nid`, `type`, `description`, `uid`, `createdAt`) VALUES
(1, 'notification', 'Your Request for Party is Approved', 3, '2017-09-28 13:29:42'),
(2, '', 'You selected monthly Plan Successfully for Busniess', 1, '2017-09-29 10:59:19'),
(3, 'admin', 'New Business for PC is Added. Waiting for Approval', 1, '2017-09-29 13:03:36'),
(4, 'admin', 'New Business for Awari is Added. Waiting for Approval', 7, '2017-09-29 13:09:30'),
(5, 'notification', 'Your Request for Merriage is Approved', 8, '2017-09-29 13:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `oid` int(11) NOT NULL,
  `oname` varchar(25) NOT NULL,
  `description` varchar(150) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `bid` int(11) NOT NULL,
  `poff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`oid`, `oname`, `description`, `sdate`, `edate`, `bid`, `poff`) VALUES
(1, 'Spring Mojan', 'A Limited offer with a lot of enjoyments', '2014-11-01', '2014-11-29', 1, 18),
(2, 'Moharram Offer', 'This is all because of Moharram for the Muslims.', '2017-08-01', '2017-11-30', 4, 12),
(3, 'Social parties ', 'its too much beutiful and gierjgioerio eigjoermgjk efrgpoergjnerk bes gikerng trej gd gmeromgmginri iorfhjoitrjho krnhidnhitr kergniernghnrd edgnirdnh', '2014-11-01', '2014-11-30', 12, 20),
(4, 'Grand Eid Offer for Evets', 'Very furstrating and emerging hall to reduce the hassels and remove the circumstances  so must get the offer of the clietns ', '2018-06-13', '2018-11-01', 1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pid` int(11) NOT NULL,
  `cardNumber` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pid`, `cardNumber`, `amount`, `method`, `uid`, `bid`) VALUES
(1, 98765343, 200, 'EasyPaisa', 3, 3),
(2, 236632356, 0, 'EasyPaisa', 3, 8),
(3, 2147483647, 200, 'EasyPaisa', 3, 3),
(4, 33, 45000, 'EasyPaisa', 1, 0),
(5, 33, 45000, 'EasyPaisa', 1, 0),
(6, 2147483647, 200, 'EasyPaisa', 3, 5),
(7, 55665656, 5000, 'EasyPaisa', 11, 12),
(8, 2147483647, 5000, 'EasyPaisa', 3, 10),
(9, 2147483647, 200, 'EasyPaisa', 3, 6),
(10, 0, 9000, 'EasyPaisa', 3, 13),
(11, 0, 9000, 'EasyPaisa', 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `charges` int(11) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`, `charges`, `bid`) VALUES
(1, 'Merriage', 0, 1),
(2, 'Political Meetig', 0, 1),
(3, 'Seminars', 0, 1),
(4, 'Merriage', 0, 2),
(5, 'Political Meetig', 0, 2),
(6, 'Seminars', 0, 2),
(7, 'Merriage', 0, 3),
(8, 'Party', 0, 3),
(9, 'Political Meetig', 0, 3),
(10, 'Merriage', 0, 4),
(11, 'Party', 0, 4),
(12, 'Political Meetig', 0, 4),
(13, 'Merriage', 0, 5),
(14, 'Party', 0, 5),
(15, 'Political Meetig', 0, 5),
(16, 'Merriage', 0, 6),
(17, 'Party', 0, 6),
(18, 'Political Meetig', 0, 6),
(19, 'Merriage', 0, 7),
(20, 'Party', 0, 7),
(21, 'Political Meetig', 0, 7),
(22, 'Seminars', 0, 7),
(23, 'Sports', 0, 7),
(24, 'Party', 0, 8),
(25, 'Seminars', 0, 8),
(26, 'Sports', 0, 8),
(27, 'Party', 0, 9),
(28, 'Party', 0, 10),
(29, 'Political Meeting', 0, 10),
(30, 'Seminars', 0, 10),
(31, 'Merriage', 0, 11),
(32, 'Party', 0, 11),
(33, 'Seminars', 0, 11),
(34, 'Merriage', 0, 12),
(35, 'Party', 0, 12),
(36, 'Seminars', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `userType` varchar(15) NOT NULL,
  `regPlan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `contact`, `userType`, `regPlan`) VALUES
(1, 'Client', 'client@gmail.com', 'client', '03361651434', 'Client', 'monthly'),
(2, 'Admin', 'admin@gmail.com', 'admin', '0428976543', 'Admin', ''),
(3, 'User', 'user@gmail.com', 'user', '03228976543', 'User', ''),
(4, 'Aftab Ahmad ', 'abc@gmail.com', '123', '349759347534', '', ''),
(5, 'New User', 'user1@gmail.com', 'user1', '3473634736', 'User', ''),
(6, 'Pc', 'pc@gmail.com', '123', '35743857893489', 'Admin', ''),
(7, 'Aftab ', 'noman@gmail.com', '123', '3432532', 'Client', 'monthly'),
(8, 'Tahseen', 'tahseen@gmail.com', '123', '783475', 'User', ''),
(9, 'assortuser', 'assortuser@gmail.com', 'assortuser', '03334544423', 'User', ''),
(10, 'client 2', 'client2@gmail.com', 'client2', '0655665566565', 'Admin', ''),
(11, 'user2', 'user2@gmail.com', 'user2', '056556565', 'User', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
