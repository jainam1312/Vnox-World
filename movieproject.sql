-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 09:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_seat`
--

CREATE TABLE `booked_seat` (
  `bid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `showdate` date NOT NULL,
  `time` varchar(11) NOT NULL,
  `seats` longtext NOT NULL,
  `total` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_seat`
--

INSERT INTO `booked_seat` (`bid`, `mid`, `uid`, `showdate`, `time`, `seats`, `total`, `sid`) VALUES
(45, 8, 10, '2019-04-08', '9AM', '\'1_6\',\'1_7\',\'1_8\',', 150, 1),
(46, 8, 10, '2019-04-08', '9AM', '\'1_6\',\'1_7\',\'1_8\',', 150, 1),
(47, 8, 10, '2019-04-08', '9AM', '\'1_6\',\'1_7\',\'1_8\',', 150, 1),
(48, 8, 10, '2019-04-08', '9AM', '\'1_7\',\'1_8\',', 100, 1),
(49, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(50, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(51, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(52, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(53, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(54, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(55, 8, 10, '2019-04-09', '9AM', '\'1_2\',\'1_3\',', 100, 1),
(56, 8, 10, '2019-04-09', '9AM', '\'1_6\',\'1_7\',\'1_8\',', 150, 1),
(59, 20, 10, '2019-04-10', '9AM', '\'2_7\',\'2_8\',', 100, 0),
(60, 8, 10, '2019-04-10', '9AM', '\'9_9\',\'9_10\',\'9_7\',\'9_8\',', 400, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `name`, `email`, `message`) VALUES
(5, 'harsh', 'harshhvaghasiya3110@gmail.com', 'improve\r\n'),
(6, 'harsh', 'harshhvaghasiya3110@gmail.com', 'its a suggestion'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(11) NOT NULL,
  `movietitle` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `storyline` longtext NOT NULL,
  `rating` float(4,2) NOT NULL,
  `release_date` date NOT NULL,
  `booking_open_date` date NOT NULL,
  `trailer_link` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `movietitle`, `genre`, `storyline`, `rating`, `release_date`, `booking_open_date`, `trailer_link`, `status`, `poster`, `language`) VALUES
(8, 'Badla', 'Crime', 'A young married entrepreneur finds herself in a locked hotel room next to the body of her dead lover. Hoping to find answers, she hires a prestigious lawyer to help her solve the mystery of what really happened.', 8.60, '2019-04-05', '2019-04-03', 'https://www.youtube.com/watch?v=mSlgu8AQAd4', 0, './images/Badla.jpg', 'Hindi'),
(9, 'Shazam', 'Adventure', 'It is DC comic movie.', 8.60, '2019-04-12', '2019-04-05', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 1, './images/Shazam.jpg', 'English'),
(10, 'Endgame', 'Sci-fi', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe', 9.20, '2019-04-26', '2019-04-24', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 1, './images/Endgame.jpg', 'English'),
(19, 'Kalank', 'Drama', 'Kalank, a period film, set in pre-independent India is a story about an elite family and many of its hidden truths that begin to unfold as communal tensions rise and partition nears. Caught in this situation are Dev, Satya, Roop, and Zafar who find themselves in this battlefield of love. While the whole town is bathed in the shades of red, the question is - will these four see that red in violence or love?', 8.86, '2019-04-12', '2019-04-10', 'https://www.youtube.com/watch?v=p4Z_ueeT_XQ', 1, './images/Kalank.jpg', 'Hindi'),
(20, 'Kesari', 'History', 'KESARI is based on the true story of one of the bravest battles that India ever fought â€“ the Battle of Saragarhi. The year is 1897 and the British Empire having conquered most of India, is now trying to infiltrate Afghanistan', 8.80, '2019-04-05', '2019-04-09', 'https://www.youtube.com/watch?v=JFP24D15_XM', 0, './images/Kesari.jpg', 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`sid`, `name`) VALUES
(1, 'Screen1'),
(2, 'Screen2'),
(3, 'Screen3');

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `showid` int(11) NOT NULL,
  `time` varchar(11) NOT NULL,
  `price1` int(5) NOT NULL,
  `price2` int(11) NOT NULL,
  `price3` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`showid`, `time`, `price1`, `price2`, `price3`, `sid`, `mid`) VALUES
(1, '9AM', 50, 80, 100, 1, 8),
(2, '1PM', 80, 100, 150, 1, 8),
(3, '5PM', 100, 150, 200, 1, 8),
(4, '9PM', 100, 150, 200, 1, 8),
(5, '9AM', 50, 80, 100, 2, 10),
(6, '1PM', 80, 100, 150, 2, 10),
(7, '5PM', 100, 150, 200, 2, 8),
(8, '9PM', 100, 150, 200, 2, 10),
(9, '9AM', 50, 80, 100, 3, 20),
(10, '1PM', 80, 100, 150, 3, 20),
(11, '5PM', 100, 150, 200, 3, 20),
(12, '9PM', 100, 150, 200, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `dob`, `email`) VALUES
(10, 'harsh', 'harsh12345', 'harsh', 'patel', 'male', '1999-10-31', 'harshhvaghasiya3110@gmail.com'),
(11, 'admin', 'admin12345', 'admin', 'admin', 'male', '2019-04-01', 'h@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_seat`
--
ALTER TABLE `booked_seat`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `mid` (`mid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `screencon` (`sid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`showid`),
  ADD KEY `fksid` (`sid`),
  ADD KEY `fkmovie` (`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_seat`
--
ALTER TABLE `booked_seat`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_seat`
--
ALTER TABLE `booked_seat`
  ADD CONSTRAINT `booked_seat_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookedmovie` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`) ON DELETE NO ACTION;

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `fkmovie` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `fksid` FOREIGN KEY (`sid`) REFERENCES `screen` (`sid`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
