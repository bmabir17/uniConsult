-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2015 at 04:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anik007_uniconsult`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer bank`
--

CREATE TABLE IF NOT EXISTS `answer bank` (
  `Aid` int(11) NOT NULL AUTO_INCREMENT,
  `Qid` int(11) NOT NULL,
  `ans` varchar(150) NOT NULL,
  `point` int(11) NOT NULL,
  PRIMARY KEY (`Aid`),
  KEY `Qid` (`Qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `answer bank`
--

INSERT INTO `answer bank` (`Aid`, `Qid`, `ans`, `point`) VALUES
(1, 1, 'It is a language with which computer runs', 1),
(2, 1, 'It is a set of instructions that a computer executes while running a program or process.', 2),
(3, 2, 'Resists flow of current.', 1),
(4, 2, 'It stores current.', 0),
(5, 3, 'Update Processor', 4),
(6, 3, 'Upgrade RAM', 3),
(7, 3, 'Upgrade OS', 2),
(8, 3, 'Upgrade Graphics and Display', 1),
(9, 4, 'By providing customer care', 3),
(10, 4, 'Resource management and business planning', 4),
(11, 4, 'Employee satisfaction', 1),
(12, 4, 'Access to resouces', 2),
(13, 5, 'Quality of the raw materials', 3),
(14, 5, 'Soil test and location in depth analysis', 4),
(15, 5, 'Architectural design and planning', 2),
(16, 5, 'Labour skills', 1),
(17, 6, 'Something that occupies space', 3),
(18, 6, 'Composed of atomic particles', 4),
(19, 6, 'Emits radiation', 2),
(20, 6, 'Opposite of antimatter', 1),
(21, 7, 'Resistor', 2),
(22, 7, 'Diodes', 3),
(23, 7, 'Transistors', 4),
(24, 7, 'Capacitors', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `Dname` char(20) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Did`, `Dname`) VALUES
(0, 'PA'),
(1, 'CSE'),
(2, 'EEE'),
(3, 'Pharmacy'),
(4, 'BBS'),
(5, 'Architecture'),
(6, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `personal answer bank`
--

CREATE TABLE IF NOT EXISTS `personal answer bank` (
  `Aid_p` int(11) NOT NULL AUTO_INCREMENT,
  `Did` int(11) NOT NULL,
  `Qid` int(11) NOT NULL,
  `ans` varchar(150) NOT NULL,
  `point` int(11) NOT NULL,
  PRIMARY KEY (`Aid_p`),
  KEY `Did` (`Did`,`Qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `personal answer bank`
--

INSERT INTO `personal answer bank` (`Aid_p`, `Did`, `Qid`, `ans`, `point`) VALUES
(1, 2, 8, 'Make a system which will automatically closes/opens your room’s door.', 1),
(2, 1, 8, 'Design and create your personal website', 1),
(3, 4, 8, 'Make an advertisement about a product and marketing planning  ', 1),
(4, 5, 8, 'Make a cardboard model of your future home', 1),
(5, 6, 8, 'Make an experiment to verify that Newton’s laws of Motion and Gravitation', 1),
(6, 3, 8, 'Carry out DNA isolation, study the structure DNA and Genetic Engineering', 1),
(7, 2, 9, 'A lab with Electronic gadgets', 1),
(8, 6, 9, 'A Science Lab, with Equipments and Chemicals ', 1),
(9, 4, 9, 'Personal Office or Cubicle, with colleagues', 1),
(10, 1, 9, 'My room and space', 1),
(11, 5, 9, 'Outdoors, Sites', 1),
(12, 3, 9, 'Extremely Authorized and Hygenic Environment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal user answer storage`
--

CREATE TABLE IF NOT EXISTS `personal user answer storage` (
  `Qid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Aid_p` int(11) NOT NULL,
  `Sid_p` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Sid_p`),
  KEY `Qid` (`Qid`,`Uid`,`Aid_p`),
  KEY `Qid_2` (`Qid`),
  KEY `Uid` (`Uid`),
  KEY `Aid_p` (`Aid_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `personal user answer storage`
--

INSERT INTO `personal user answer storage` (`Qid`, `Uid`, `Aid_p`, `Sid_p`) VALUES
(8, 12, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `points table`
--

CREATE TABLE IF NOT EXISTS `points table` (
  `Sid` int(11) NOT NULL,
  `Did` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `point_id` int(11) NOT NULL AUTO_INCREMENT,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`point_id`),
  KEY `Sid` (`Sid`),
  KEY `Did` (`Did`),
  KEY `Uid` (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Table structure for table `question bank`
--

CREATE TABLE IF NOT EXISTS `question bank` (
  `Qid` int(11) NOT NULL AUTO_INCREMENT,
  `Did` int(11) NOT NULL,
  `question level` int(11) NOT NULL,
  `question` char(150) NOT NULL,
  PRIMARY KEY (`Qid`),
  KEY `Did` (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `question bank`
--

INSERT INTO `question bank` (`Qid`, `Did`, `question level`, `question`) VALUES
(1, 1, 1, 'What is programming language?'),
(2, 2, 1, 'What is resistor?'),
(3, 1, 1, 'How would you improve the performance of a PC?'),
(4, 4, 1, 'How to make a business more profitable?'),
(5, 5, 2, 'What is the most important structural and design factors that need to be considered while making a building?'),
(6, 6, 1, 'What is a matter?'),
(7, 2, 2, 'Which device is more important fot the construction of logic gates?'),
(8, 0, 0, 'If you had the resources and also free time, which experiment or activity would you do ?\r\n'),
(9, 0, 0, 'What would be an ideal workplace for you?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user answer storage`
--

CREATE TABLE IF NOT EXISTS `user answer storage` (
  `Qid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Aid` int(11) NOT NULL,
  `Sid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Sid`),
  UNIQUE KEY `Sid` (`Sid`),
  KEY `Qid` (`Qid`),
  KEY `Uid` (`Uid`),
  KEY `Aid` (`Aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

-- --------------------------------------------------------

--
-- Table structure for table `user information`
--

CREATE TABLE IF NOT EXISTS `user information` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `user level` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user information`
--

INSERT INTO `user information` (`userid`, `user level`, `username`, `password`, `email`) VALUES
(1, 0, 'shakib', '0', 'shakib@gmail.com'),
(2, 0, 'Shobuj', '202', 'shobuj@yahoo.com'),
(3, 0, 'Sanjana Hossain', '32250170', 'sanjana_hossain@yahoo.com'),
(4, 0, 'Sohel Rahman', '32250170a0dca92d53ec9624f336ca24', 'sohel_12@gmail.com'),
(5, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com'),
(7, 1, 'omarHaque', '32250170a0dca92d53ec9624f336ca24', 'omarhaque@yahoo.com'),
(8, 1, 'shakibHossain', '32250170a0dca92d53ec9624f336ca24', 'shakibhossain2756@live.com'),
(9, 1, 'shakibHossain', '32250170a0dca92d53ec9624f336ca24', 'shakibhossain2756@live.com'),
(10, 1, 'tausif01', '32250170a0dca92d53ec9624f336ca24', 'tausif@yahoo.com'),
(11, 2, 'Harem Ali', '32250170a0dca92d53ec9624f336ca24', 'harem@gmail.com'),
(12, 1, 'hasan raja', '32250170a0dca92d53ec9624f336ca24', 'hasan@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer bank`
--
ALTER TABLE `answer bank`
  ADD CONSTRAINT `question_id` FOREIGN KEY (`Qid`) REFERENCES `question bank` (`Qid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal user answer storage`
--
ALTER TABLE `personal user answer storage`
  ADD CONSTRAINT `ans_id2` FOREIGN KEY (`Aid_p`) REFERENCES `personal answer bank` (`Aid_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_id2` FOREIGN KEY (`Qid`) REFERENCES `question bank` (`Qid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_info2` FOREIGN KEY (`Uid`) REFERENCES `user information` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `points table`
--
ALTER TABLE `points table`
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`Sid`) REFERENCES `user answer storage` (`Sid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `department_id2` FOREIGN KEY (`Did`) REFERENCES `department` (`Did`),
  ADD CONSTRAINT `user_id4` FOREIGN KEY (`Uid`) REFERENCES `user information` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question bank`
--
ALTER TABLE `question bank`
  ADD CONSTRAINT `department_id` FOREIGN KEY (`Did`) REFERENCES `department` (`Did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user answer storage`
--
ALTER TABLE `user answer storage`
  ADD CONSTRAINT `answer_id` FOREIGN KEY (`Aid`) REFERENCES `answer bank` (`Aid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `question_id1` FOREIGN KEY (`Qid`) REFERENCES `question bank` (`Qid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`Uid`) REFERENCES `user information` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
