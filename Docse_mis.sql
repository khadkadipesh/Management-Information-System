-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2018 at 03:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Docse_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(20) NOT NULL,
  `course_title` varchar(20) NOT NULL,
  `course_credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `course_credit`) VALUES
('COMP 341', 'HCI', '3');

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll`
--

CREATE TABLE `course_enroll` (
  `course_id` varchar(20) NOT NULL,
  `semester` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educational_background_info`
--

CREATE TABLE `educational_background_info` (
  `personal_id` varchar(10) NOT NULL,
  `s_examination` varchar(20) NOT NULL,
  `s_exam_year` varchar(20) NOT NULL,
  `s_aggrigrate_marks` varchar(20) NOT NULL,
  `s_exam_roll` varchar(20) NOT NULL,
  `s_institute` varchar(40) NOT NULL,
  `h_examination` varchar(20) NOT NULL,
  `h_exam_year` year(4) NOT NULL,
  `h_aggrigrate_marks` int(20) NOT NULL,
  `h_exam_roll` varchar(20) NOT NULL,
  `h_institute` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_background_info`
--

INSERT INTO `educational_background_info` (`personal_id`, `s_examination`, `s_exam_year`, `s_aggrigrate_marks`, `s_exam_roll`, `s_institute`, `h_examination`, `h_exam_year`, `h_aggrigrate_marks`, `h_exam_roll`, `h_institute`) VALUES
('018110-15', 'slc', '2010', '64.5', '24512 c', 'Shree Brahmayani S. School', 'Diploma In IT', 2013, 71, '214562', 'Nepal Banepa Polytechnic Institute'),
('018117-15', 'Nepal Board', '2012', '80.625', '985645 T', 'Siddhartha English Higher Secondary Scho', 'HSEB', 0000, 73, '3252', 'Siddhartha English Higher Secondary Scho'),
('018132-15', 'Nepal Board', '2012', '79.75', '0321818 R', 'LMV', 'HSEB', 0000, 74, '32', 'Caribbean College');

-- --------------------------------------------------------

--
-- Table structure for table `ku_cat`
--

CREATE TABLE `ku_cat` (
  `ku_cat_id` varchar(20) NOT NULL,
  `ku_cat_score` int(4) NOT NULL,
  `ku_cat_rank` int(6) NOT NULL,
  `personal_id` varchar(15) NOT NULL,
  `physics` int(4) NOT NULL,
  `chemistry` int(4) NOT NULL,
  `math` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ku_cat`
--

INSERT INTO `ku_cat` (`ku_cat_id`, `ku_cat_score`, `ku_cat_rank`, `personal_id`, `physics`, `chemistry`, `math`) VALUES
('420M', 785, 1522, '018132-15', 70, 80, 99),
('521D', 685, 1755, '018117-15', 75, 75, 89),
('KU_CBT_14255', 670, 1500, '018110-15', 200, 170, 300);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `personal_id` varchar(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob_ad` date NOT NULL,
  `citizenship_number` varchar(15) NOT NULL,
  `permanent_address_town` varchar(20) NOT NULL,
  `permanent_address_district` varchar(20) NOT NULL,
  `permanent_address_country` varchar(20) NOT NULL,
  `permanent_address_contact` bigint(15) NOT NULL,
  `temporary_address_town` varchar(20) NOT NULL,
  `temporary_address_district` varchar(20) NOT NULL,
  `temporary_address_country` varchar(20) NOT NULL,
  `temporary_address_contact` bigint(15) NOT NULL,
  `personal_contact_email` varchar(30) NOT NULL,
  `personal_contact_phone` bigint(15) NOT NULL,
  `personal_contact_mobile` bigint(15) NOT NULL,
  `birth_town` varchar(20) NOT NULL,
  `birth_district` varchar(20) NOT NULL,
  `birth_country` varchar(20) NOT NULL,
  `photo` text NOT NULL,
  `catagories` varchar(10) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `contact_person_relation` varchar(30) NOT NULL,
  `contact_person_contact` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`personal_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob_ad`, `citizenship_number`, `permanent_address_town`, `permanent_address_district`, `permanent_address_country`, `permanent_address_contact`, `temporary_address_town`, `temporary_address_district`, `temporary_address_country`, `temporary_address_contact`, `personal_contact_email`, `personal_contact_phone`, `personal_contact_mobile`, `birth_town`, `birth_district`, `birth_country`, `photo`, `catagories`, `father_name`, `mother_name`, `contact_person`, `contact_person_relation`, `contact_person_contact`) VALUES
('0032', 'Bal', 'Krishna', 'Bal', 'Male', '1975-02-05', '025262', 'Kathmandu', 'Kathmandu', 'Nepal', 9851083570, '', '', '', 0, 'bal@ku.edu.np', 0, 9851083570, 'Kathmandu', 'Kathmandu', 'Nepal', 'images/staff/Bal_K_B.png', 'staff', 'FatherBal', 'MotherBal', 'Father  Bal', 'Parent', 98510251512),
('018110-15', 'suman', '', 'dhakal', 'Male', '1995-02-21', '30 01-067-14225', 'mandan deupur', 'kavreplanchok', 'nepal', 9849769100, 'dhulikhel', 'kavreplanchok', 'nepal', 9849750698, 'dhakalsuman07@gmail.com', 9849769100, 9849769100, 'mandan deupur', 'kavre', 'nepal', 'images/student/rsz__dsc2139_r.jpg', 'student', 'madhav prasad dhakal', 'sabtri dhakal', 'sharan dhakal', 'brother', 9851043280),
('018117-15', 'Dipesh', '', 'Khadka', 'Male', '1996-02-29', '3251212155', 'Nala', 'Kavre', 'Nepal', 9843251554, '', '', '', 0, 'dipeshkhadka9@gmail.com', 0, 9843251554, 'Nala', 'Kavre', 'Nepal', 'images/student/dipesh.JPG', 'student', 'RajuKhadka', 'SadhanaKhadka', 'Rupesh  Khadka', 'Guardian', 9849949202),
('018132-15', 'Manish', 'Raj', 'Silwal', 'Male', '1996-12-29', '03301', 'Lalitpur', 'Lalitpur', 'Nepal', 9849949202, '', '', '', 0, 'manishraj.silwal@gmail.com', 0, 9849949202, 'Lalitpur', 'Lalitpur', 'Nepal', 'images/student/n.jpg', 'student', 'MadhavRajSilwal', 'HemaRimal', 'Madhav Raj Silwal', 'Parent', 9841220020),
('025', 'Sushil', '', 'Shrestha', 'Male', '1985-02-15', '25565', 'Banepa', 'Kavre', 'Nepal', 9845112212, '', '', '', 0, 'sushil@ku,edu,np', 0, 9845112212, 'Banepa', 'Kavre', 'Nepal', 'images/staff/sushilshrestha.jpg', 'staff', 'FatherShrestha', 'MotherShrestha', 'Father  Shrestha', 'Parent', 9841212121);

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `personal_id` varchar(45) NOT NULL,
  `staff_type` tinyint(1) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`personal_id`, `staff_type`, `designation`) VALUES
('0032', 0, 'Assistant Professor'),
('025', 0, 'Assistant Professor');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `personal_id` varchar(15) NOT NULL,
  `program` varchar(25) NOT NULL,
  `enroll_year` int(4) NOT NULL,
  `batch` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`personal_id`, `program`, `enroll_year`, `batch`) VALUES
('018110-15', 'computer science', 2015, 0),
('018117-15', 'computer engineering', 2013, 0),
('018132-15', 'computer science', 2018, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` longtext NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `personal_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_type`, `personal_id`) VALUES
('manish', '59c95189ac895fcc1c6e1c38d067e244', 'hod', '000'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `educational_background_info`
--
ALTER TABLE `educational_background_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `ku_cat`
--
ALTER TABLE `ku_cat`
  ADD PRIMARY KEY (`ku_cat_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`personal_id`(10));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`personal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
