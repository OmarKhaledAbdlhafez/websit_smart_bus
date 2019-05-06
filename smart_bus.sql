-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 02:02 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Bus_id` int(11) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Driver_id` int(11) DEFAULT NULL,
  `Co_driver_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Bus_id`, `State`, `Driver_id`, `Co_driver_id`) VALUES
(17, 'working', 1, 9),
(18, 'Working', 7, 10),
(19, 'Working', 8, 11),
(20, 'Under Maintenance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `charging_code`
--

CREATE TABLE `charging_code` (
  `Code_id` int(11) NOT NULL,
  `Code_num` varchar(15) NOT NULL,
  `Expiry_date` date NOT NULL,
  `Charge_Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `User_id` int(11) DEFAULT NULL,
  `Value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charging_code`
--

INSERT INTO `charging_code` (`Code_id`, `Code_num`, `Expiry_date`, `Charge_Date`, `User_id`, `Value`) VALUES
(1, '2147483648', '2020-03-10', '0000-00-00 00:00:00', 7, 30),
(2, '2147483649', '2020-02-12', '0000-00-00 00:00:00', 9, 200),
(3, '2147483650', '2020-07-08', NULL, NULL, 40),
(5, '2147483651', '2020-08-10', NULL, NULL, 200),
(6, '2147483652', '2020-01-29', NULL, NULL, 30),
(7, '2147483653', '2020-12-27', NULL, NULL, 200);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(11) NOT NULL,
  `Employee_name` varchar(20) NOT NULL DEFAULT 'Ahmed',
  `Birth_date` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phone_num` varchar(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Job_title` varchar(20) NOT NULL,
  `Hiring_date` date NOT NULL,
  `Salary` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `Employee_name`, `Birth_date`, `Address`, `Phone_num`, `Department`, `Job_title`, `Hiring_date`, `Salary`) VALUES
(1, 'Ahmed Hossam', '1995-06-21', 'Cairo', '01015559621', 'Driving ', 'Driver', '2018-10-01', 8000),
(2, 'Hussien Ahmed', '1980-06-22', 'Haram', '01510201030', 'Management', 'General Manager', '2010-03-01', 10000),
(3, 'Zyiad Hamdy', '1992-12-22', 'Cairo', '01190603011', 'Co-driver', 'Manager', '2005-05-20', 4000),
(4, 'Ali Hassan', '1981-05-03', 'Mansora', '01258956320', 'Accounting', 'Manager', '2009-12-01', 4000),
(5, 'Ahmed Khalil', '1985-02-05', 'October', '01000200805', 'IT', 'Engineer', '2008-11-11', 3000),
(6, 'Mohamed Wagih', '1996-08-06', 'Cairo', '01212121212', 'IT', 'Engineer', '2017-01-01', 6000),
(7, 'Ahmed Walid', '1995-06-21', 'Alex', '01015559921', 'Driving', 'Driver', '2005-10-01', 2000),
(8, 'Mohamed Salah', '1980-06-22', 'Giza', '01155622030', 'Driving', 'Driver', '2010-03-01', 2000),
(9, 'Abdalla Hassan', '1990-11-25', 'Minia', '01120003050', 'Driving', 'Co-driver', '2010-01-01', 1500),
(10, 'Karim Mohamed', '1995-06-21', 'Cairo', '01015559991', 'Driving', 'Co-driver', '2009-10-01', 1500),
(11, 'Diaa Ahmed', '1980-06-22', 'Assiut', '01510201030', 'Driving', 'Co-driver', '2011-03-01', 1500),
(12, 'Walid Dahy', '1990-11-25', 'Minia', '01120003099', 'Management', 'Office boy', '2012-01-01', 1000),
(13, 'Hoda Ahmed', '1995-06-21', 'Cairo', '01088559621', 'IT', 'Engineer', '2018-10-01', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Response` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_id`, `Employee_id`, `Date`, `Response`) VALUES
(1, 6, '2019-05-04 23:03:17', 'thank u'),
(2, 6, '2019-05-05 13:17:34', 'thank');

-- --------------------------------------------------------

--
-- Table structure for table `journey`
--

CREATE TABLE `journey` (
  `Journey_id` int(11) NOT NULL,
  `Bus_id` int(11) NOT NULL,
  `Station_id` int(11) NOT NULL,
  `Route_id` int(11) NOT NULL,
  `Arrival_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journey`
--

INSERT INTO `journey` (`Journey_id`, `Bus_id`, `Station_id`, `Route_id`, `Arrival_time`) VALUES
(1, 17, 1, 1, '07:20:13'),
(2, 18, 3, 3, '21:27:35'),
(3, 19, 10, 2, '06:10:15'),
(4, 18, 2, 3, '21:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE `ride` (
  `Ride_id` int(11) NOT NULL,
  `Bus_id` int(11) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  `Departure_station_id` int(11) NOT NULL,
  `Arrival_station_id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`Ride_id`, `Bus_id`, `User_id`, `Departure_station_id`, `Arrival_station_id`, `Date`, `Cost`) VALUES
(3, NULL, NULL, 0, 0, '2019-05-02 14:06:59', 10),
(4, 19, 8, 7, 8, '2019-05-02 15:15:47', 1),
(5, 17, 4, 7, 5, '2019-05-02 15:16:29', 10),
(6, 19, 3, 1, 5, '2019-05-04 01:08:24', 5),
(7, 19, 3, 10, 20, '2019-05-04 01:09:16', 8),
(8, 17, 5, 5, 7, '2019-05-04 01:15:50', 5),
(11, NULL, 7, 0, 6, '2019-05-04 01:33:48', 8),
(13, NULL, 7, 5, 8, '2019-05-04 01:44:58', 5),
(14, 17, 7, 10, 15, '2019-05-04 02:45:01', 8),
(15, 17, 7, 5, 6, '2019-05-04 21:17:05', 5),
(16, 18, 9, 0, 8, '2019-05-04 21:39:22', 8),
(17, 20, 9, 0, 8, '2019-05-05 13:14:44', 8);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Route_id` int(11) NOT NULL,
  `Route_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Route_id`, `Route_name`) VALUES
(1, 'Shoubra-Attaba'),
(2, 'Opera-Monib'),
(3, 'Attaba-Shobra'),
(4, 'Monib-Opera');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `Station_id` int(11) NOT NULL,
  `Station_name` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Station_id`, `Station_name`, `State`) VALUES
(1, 'Mezallat', 'Working'),
(2, 'Massara', 'Working'),
(3, 'Ramses', 'Under construction'),
(4, 'Naguib', 'Under Maintenance '),
(5, 'Attaba', 'Working'),
(6, 'Opera', 'working'),
(7, 'Sadat', 'Working'),
(8, 'Dokii', 'Working'),
(9, 'Cairo Uni', 'Working'),
(10, 'Monib', 'Under construction'),
(11, 'fysel', 'work'),
(12, 'giza', 'work'),
(13, 'fysel', 'work'),
(14, 'giza', 'work');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `Submission_id` int(11) NOT NULL,
  `Ride_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Feedback_id` int(11) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Describtion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`Submission_id`, `Ride_id`, `User_id`, `Feedback_id`, `Date`, `Describtion`) VALUES
(7, 3, 6, 2, '2019-05-02 21:47:21', 'good jkjhfhfjn,bhjhbkjnbmhfhbkbj'),
(8, 3, 6, NULL, '2019-05-02 21:47:44', 'good jkjhfhfjn,bhjhbkjnbmhfhbkbj'),
(9, 6, 6, NULL, '2019-05-04 01:10:00', 'very good'),
(10, 6, 3, NULL, '2019-05-04 01:14:00', 'iam happy'),
(11, 7, 3, NULL, '2019-05-04 01:14:16', 'bad'),
(12, 14, 7, NULL, '2019-05-04 02:47:21', 'iam sad'),
(14, 6, 3, NULL, '2019-05-04 02:50:39', 'very good'),
(15, 6, 3, NULL, '2019-05-04 02:50:55', 'very good'),
(16, 14, 7, NULL, '2019-05-04 02:51:32', 'iam happy'),
(17, 7, 3, NULL, '2019-05-04 02:51:45', 'very good'),
(18, 7, 3, NULL, '2019-05-04 02:52:02', 'very good'),
(19, 7, 3, NULL, '2019-05-04 02:52:39', 'very good'),
(20, 7, 3, NULL, '2019-05-04 02:53:35', 'very good'),
(21, 14, 7, NULL, '2019-05-04 02:53:53', 'very good'),
(22, 16, 9, NULL, '2019-05-04 21:42:05', 'very good'),
(23, 16, 9, NULL, '2019-05-05 13:15:40', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone_num` varchar(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Credit` int(6) DEFAULT '0',
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Email`, `Name`, `Phone_num`, `Password`, `Credit`, `Gender`) VALUES
(3, 'omar@yahoo.com', 'oamr', '012596', 'ojkhkn88', 230, 'f'),
(4, 'omar@yahoo.com', 'omat', '0552', 'mnbjhk', 0, 'm'),
(5, 'omarkhald02@gmail.com', 'omar', '0156323', ',knknjk', 10, 'female'),
(6, 'omarkhald02@gmail.com', 'omar', '01008563354', 'omar123', 10, 'male'),
(7, 'omarkhald02@gmail.com', 'ahmed', '0100254', '123', 70, 'male'),
(8, 'omrkhald14@yahoo.com', 'omar', '01150256497', 'omar12', 10, 'male'),
(9, 'omrkhald14@yahoo.com', 'omar', '01220888932', 'omar123', 184, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Bus_id`),
  ADD UNIQUE KEY `Driver_id` (`Driver_id`),
  ADD UNIQUE KEY `Co_driver_id` (`Co_driver_id`);

--
-- Indexes for table `charging_code`
--
ALTER TABLE `charging_code`
  ADD PRIMARY KEY (`Code_id`),
  ADD KEY `User_FK` (`User_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_id`),
  ADD KEY `Employee_FK1` (`Employee_id`);

--
-- Indexes for table `journey`
--
ALTER TABLE `journey`
  ADD PRIMARY KEY (`Journey_id`),
  ADD KEY `Bus_FK` (`Bus_id`),
  ADD KEY `Station_FK` (`Station_id`),
  ADD KEY `Route_FK` (`Route_id`);

--
-- Indexes for table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`Ride_id`),
  ADD KEY `Bus_FK2` (`Bus_id`),
  ADD KEY `User_FK3` (`User_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Route_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`Station_id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`Submission_id`),
  ADD KEY `Ride_FK` (`Ride_id`),
  ADD KEY `Feedback_FK` (`Feedback_id`),
  ADD KEY `User_FK2` (`User_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `Bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `charging_code`
--
ALTER TABLE `charging_code`
  MODIFY `Code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `journey`
--
ALTER TABLE `journey`
  MODIFY `Journey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ride`
--
ALTER TABLE `ride`
  MODIFY `Ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `Route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `Station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `Submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `Co_driver_FK` FOREIGN KEY (`Co_driver_id`) REFERENCES `employee` (`Employee_id`),
  ADD CONSTRAINT `Driver_FK` FOREIGN KEY (`Driver_id`) REFERENCES `employee` (`Employee_id`);

--
-- Constraints for table `charging_code`
--
ALTER TABLE `charging_code`
  ADD CONSTRAINT `User_FK` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Employee_FK1` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`Employee_id`);

--
-- Constraints for table `journey`
--
ALTER TABLE `journey`
  ADD CONSTRAINT `Bus_FK` FOREIGN KEY (`Bus_id`) REFERENCES `bus` (`Bus_id`),
  ADD CONSTRAINT `Route_FK` FOREIGN KEY (`Route_id`) REFERENCES `route` (`Route_id`),
  ADD CONSTRAINT `Station_FK` FOREIGN KEY (`Station_id`) REFERENCES `station` (`Station_id`);

--
-- Constraints for table `ride`
--
ALTER TABLE `ride`
  ADD CONSTRAINT `Bus_FK2` FOREIGN KEY (`Bus_id`) REFERENCES `bus` (`Bus_id`),
  ADD CONSTRAINT `User_FK3` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `Feedback_FK` FOREIGN KEY (`Feedback_id`) REFERENCES `feedback` (`Feedback_id`),
  ADD CONSTRAINT `Ride_FK` FOREIGN KEY (`Ride_id`) REFERENCES `ride` (`Ride_id`),
  ADD CONSTRAINT `User_FK2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
