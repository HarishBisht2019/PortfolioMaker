-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 03:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `user_id` varchar(30) NOT NULL,
  `description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`user_id`, `description`) VALUES
('disha123@gmail', ''),
('gbisht55555@gmail.com', ''),
('hb20156@gmail.com', 'I am a highly competent IT professional with a proven track record in designing websites, networking and managing databases. I have strong technical skills as well as excellent interpersonal skills, enabling me to interact with a wide range of clients. I am eager to be challenged in order to grow and further improve my IT skills. My greatest passion is in life is using my technical know-how to benefit other people and organisations.'),
('jack28@gmail.com', 'An enthusiastic fresher with highly motivated and leadership skills having bachelors degree\r\nin Computer Application.\r\nEager to learn new technologies and methodologies.\r\nAbility to produce best result in pressure situation.\r\nDisciplined & good etiquette.'),
('sam28@gmail.com', 'An enthusiastic fresher with highly motivated and leadership skills having bachelors degree\r\nin Computer Application.\r\nEager to learn new technologies and methodologies.\r\nAbility to produce best result in pressure situation.\r\nDisciplined & good etiquette.');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `cert_id` int(2) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `cert_name` varchar(20) NOT NULL,
  `ins_name` varchar(20) NOT NULL,
  `issue_date` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`cert_id`, `user_id`, `cert_name`, `ins_name`, `issue_date`) VALUES
(0, 'sam28@gmail.com', 'Cert-N-Edge', 'TCS', 2018),
(1, 'hb20156@gmail.com', 'Android Studio', 'Edunet Foundation', 2019),
(2, 'hb20156@gmail.com', 'Internet Of Things', 'AITS Haldwani', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_sn` int(2) NOT NULL,
  `user_id` varchar(30) CHARACTER SET utf8 NOT NULL,
  `program` varchar(60) NOT NULL,
  `uni_board` varchar(30) NOT NULL,
  `uniproject1` varchar(300) NOT NULL,
  `uniproject2` varchar(300) NOT NULL,
  `percentage` float NOT NULL,
  `start_year` varchar(4) NOT NULL,
  `pass_year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_sn`, `user_id`, `program`, `uni_board`, `uniproject1`, `uniproject2`, `percentage`, `start_year`, `pass_year`) VALUES
(123, 'hb20156@gmail.com', 'Bachelor of Computer Applications', 'Kumaon University', 'ONLINE BOOKSTORE You save money, energy and time when you shop for your favorite book online. These online bookstores offer discount coupons which help customers save money on their purchases. Shopping for books online is economical too because of the low shipping price.', 'NATOURS Camping has a great number of benefits for everyone old and young that you and your family can enjoy while spending time in the great outdoors: Stress reduction: Leave the overbooked scheduling at home. ... Physical fitness: Time spent camping is physical time. You set up a tent, gather fire', 75.46, '2016', '2019'),
(124, 'kabitachiral456@gmail.com', '', 'Kumaon University', '', '', 78, '0000', '2018'),
(125, 'gbisht555@gmail.com', '', 'Kumaon University', '', '', 82, '0000', '2018'),
(126, 'ashishnegi7966@gmail.com', '', 'Kumaon University', '', '', 75, '0000', '2019'),
(127, 'jiteshjoshi583@gmail.com', '', 'Kumaon University', '', '', 83, '0000', '2018'),
(131, 'sam28@gmail.com', 'BCA', 'Kumaon university', 'tic tac android app', 'hotel management system', 76, '2014', '2017'),
(133, 'jack28@gmail.com', 'BCA', 'Uttarakhand Technical Universi', 'Music android app', 'Library Management System', 79, '2014', '2017'),
(134, 'gbisht55555@gmail.com', 'BCA', 'Kumaon university', 'tic tac android app', '', 76, '2014', '2017'),
(135, 'gbisht55555@gmail.com', 'BCA', 'Kumaon university', 'tic tac android app', '', 76, '2014', '2017'),
(136, 'gbisht55555@gmail.com', 'BCA', 'Kumaon university', 'tic tac android app', '', 76, '2014', '2017'),
(137, 'gbisht55555@gmail.com', 'BCA', 'Kumaon university', 'tic tac android app', '', 76, '2014', '2017'),
(138, 'gbisht55555@gmail.com', 'BCA', 'Kumaon university', 'tic tac android app', '', 76, '2014', '2017'),
(139, 'disha123@gmail', 'BCA', 'Kumaon university', 'tic tac android app', 'hotel management system', 76, '2014', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `interest_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `interest1` varchar(20) NOT NULL,
  `interest2` varchar(20) NOT NULL,
  `interest3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`interest_id`, `user_id`, `interest1`, `interest2`, `interest3`) VALUES
(1, 'hb20156@gmail.com', 'Table-Tennis', 'ESports', 'Chess'),
(2, 'kabitachiral456@gmail.com', '', '', ''),
(3, 'gbisht555@gmail.com', '', '', ''),
(4, 'ashishnegi7966@gmail.com', '', '', ''),
(5, 'jiteshjoshi583@gmail.com', '', '', ''),
(6, 'sam28@gmail.com', 'football', 'cricket', 'Reading magzines'),
(8, 'jack28@gmail.com', 'Basketball', 'volleyball ', 'listening to music'),
(9, 'gbisht55555@gmail.com', 'cricket', 'football', ''),
(10, 'gbisht55555@gmail.com', 'cricket', 'football', ''),
(11, 'gbisht55555@gmail.com', 'cricket', 'football', ''),
(12, 'gbisht55555@gmail.com', 'cricket', 'football', ''),
(13, 'gbisht55555@gmail.com', 'cricket', 'football', ''),
(14, 'disha123@gmail', '', 'cycling', 'watching movies');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `user_id` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`user_id`, `password`, `user_name`, `contact_no`) VALUES
('ashishnegi7966@gmail.com', '$2y$10$nHW3xpREyukqbedalhtOxee3pgxLoqCv9NyyiFajRifZ8aaPSapby', 'Ashish Negi ', 7500569628),
('disha123@gmail', '$2y$10$OAU9Beb2ha8vghrk/AFJjuGPkq/8cO3xsjMC5NUJRhiHjHZj/eFOe', 'disha', 8881140462),
('gbisht555@gmail.com', '$2y$10$FZxmi81wwP2OBEiZo/8XdOhii/9Vpjb.RJW7D6b8e9BpWoauKorDa', 'Gaurav Bisht', 7017405697),
('hb20156@gmail.com', '$2y$10$k0sldq8Xb4S7vNdVIAJhduZs2RMLSzix6hQ8YP39k/s8Nrx.dv8QG', 'Harish Bisht', 8384871840),
('jack28@gmail.com', '$2y$10$tkgqVWpPGr0FbCQK/PzGg.tmmp6jA5lvyZ/uySAeqsBniSrDnzz8O', 'jack', 7500569628),
('jiteshjoshi583@gmail.com', '$2y$10$TGPesh6kXiZ/AKvcYU7Z4ebRJLc77yTRV56sp/rRzPaj.g5VDdaTS', 'Jitesh Joshi', 8077557596),
('kabitachiral456@gmail.com', '$2y$10$KiSsr7MPYPbeN8NFfrfG3urZZr1u64CYfZ4jELIxaftVAP1/L2/Mq', 'Kavita Chiral', 7895515667),
('sam28@gmail.com', '$2y$10$iWQ9Kcc1i525YW0LiVz.N./ohjDJpsMDc.96rbiUSLJd97pdViejC', 'sam', 1234567894);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `user_id` varchar(40) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `user_dob` date NOT NULL,
  `jobprofile` varchar(30) NOT NULL,
  `user_address` text CHARACTER SET utf8 NOT NULL,
  `user_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`user_id`, `user_name`, `linkedin`, `contact_no`, `user_dob`, `jobprofile`, `user_address`, `user_photo`) VALUES
('ashishnegi7966@gmail.com', 'Ashish Negi ', 'Suraj Snax', 7500569628, '1999-02-05', '0', 'Pirumadara, Ramnagar, Nainital District \r\nUttrakhand', ''),
('disha123@gmail', 'disha pandey', 'disha', 8881140462, '1997-06-24', 'Data Analyst', 'haldwani', ''),
('gbisht555@gmail.com', 'Gaurav Bisht', 'Jaswant Singh', 7017405697, '1997-06-24', '0', 'ramnagar,uttarakhand', ''),
('hb20156@gmail.com', 'Harish Bisht', 'west_wind', 8384871840, '2019-08-03', 'System Analyst', '29-A Kashipur Uttrakhand', 'hb.jpg'),
('jack28@gmail.com', 'jay singh', 'jay28singh', 8926231452, '1996-06-02', 'Web Developer', 'Dehradun', ''),
('jiteshjoshi583@gmail.com', 'Jitesh Joshi', 'L D Joshi', 9759292596, '1997-06-24', '0', 'Near Kathgodam\r\nVillage Amratpur ', ''),
('kabitachiral456@gmail.com', 'Kavita Chiral', 'Prem singh Chiral', 8126435959, '1997-07-30', '0', 'Lamachaur Haldwani', ''),
('sam28@gmail.com', 'shyam singh', 'sam28singh', 9639023047, '1997-06-02', 'Data Analyst', 'kashipur', 'rd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `professional_skill`
--

CREATE TABLE `professional_skill` (
  `user_id` varchar(30) NOT NULL,
  `pskill1` varchar(30) NOT NULL,
  `pskill2` varchar(30) NOT NULL,
  `pskill3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional_skill`
--

INSERT INTO `professional_skill` (`user_id`, `pskill1`, `pskill2`, `pskill3`) VALUES
('disha123@gmail', 'Good Leadership skills', 'Excellent conceptual and analy', 'Good Problem solving skills'),
('gbisht55555@gmail.com', 'Good Leadership skills', 'Excellent conceptual and analy', ''),
('hb20156@gmail.com', 'Effective Communication', 'Team Player', 'Strong Problem Solver'),
('jack28@gmail.com', 'Good communication skills', 'Excellent conceptual and analy', 'Good Problem solving skills'),
('sam28@gmail.com', 'Good Leadership skills', 'Excellent conceptual and analy', 'Good Problem solving skills');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `user_id` varchar(30) NOT NULL,
  `tskill1` varchar(30) NOT NULL,
  `rate1` int(10) UNSIGNED NOT NULL DEFAULT 5,
  `tskill2` varchar(30) NOT NULL,
  `rate2` int(10) UNSIGNED NOT NULL DEFAULT 5,
  `tskill3` varchar(30) NOT NULL,
  `rate3` int(10) UNSIGNED NOT NULL DEFAULT 5,
  `tskill4` varchar(30) NOT NULL,
  `rate4` int(10) UNSIGNED NOT NULL DEFAULT 5,
  `tskill5` varchar(30) NOT NULL,
  `rate5` int(10) UNSIGNED NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`user_id`, `tskill1`, `rate1`, `tskill2`, `rate2`, `tskill3`, `rate3`, `tskill4`, `rate4`, `tskill5`, `rate5`) VALUES
('disha123@gmail', 'php', 8, 'HTML', 9, 'CSS', 8, 'javascript', 8, 'datastructure', 8),
('gbisht55555@gmail.com', 'php', 7, 'HTML', 9, 'CSS', 8, 'Java(core)', 8, 'c', 9),
('hb20156@gmail.com', 'Angular', 9, 'React', 8, 'Phyton/Ruby/PHP', 7, 'HTML', 6, 'PostgreSQL/MySQL', 9),
('jack28@gmail.com', 'HTML', 8, 'PHP', 8, 'CSS', 8, 'Java(core)', 6, 'Node.js', 8),
('sam28@gmail.com', 'php', 8, 'HTML', 7, 'CSS', 8, 'Java(core)', 7, 'Node.js', 6);

-- --------------------------------------------------------

--
-- Table structure for table `work_exp`
--

CREATE TABLE `work_exp` (
  `exp_key` int(2) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `employer_name` varchar(30) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `project1` varchar(100) NOT NULL,
  `project1_desc` varchar(300) NOT NULL,
  `project2` varchar(100) NOT NULL,
  `project2_desc` varchar(300) NOT NULL,
  `from_date` year(4) NOT NULL,
  `to_date` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_exp`
--

INSERT INTO `work_exp` (`exp_key`, `user_id`, `employer_name`, `designation`, `location`, `project1`, `project1_desc`, `project2`, `project2_desc`, `from_date`, `to_date`) VALUES
(1, 'hb20156@gmail.com', 'Deloitte', 'Network Engineer', 'Pune', 'DevStudio', 'A responsive website template designed to help web developers/designers market their services. ', 'Atom', 'A comprehensive website template solution for startups/developers to market their mobile apps.', 2018, 2019),
(2, 'ash7966@gmail.com', 'Hewlett-Packard', 'Systems Analyst', 'Mysore', 'Researching new and efficient technology', '', 'The Machine, a purported way to leverage still-in-the-lab technologies, from memristors to silicon p', '', 2019, 2020),
(3, 'sam28@gmail.com', 'Wipro', 'Jr. Developer', 'Chennai', 'Bank Employee Management System', 'Managing the accounts of Bank\'s Employee', 'Bank account management system', 'Managing the accounts of account holders', 2017, 2019),
(5, 'jack28@gmail.com', 'Deliote', 'Jr. Web developer', 'Delhi', 'Canteen management system', 'Handle the canteen products and manipulate them', 'Website builder', 'GUI website builder', 2017, 2019),
(6, 'gbisht55555@gmail.com', 'Deliote', 'Jr. developer', 'Delhi', 'Bank employee management', 'Handle the information of bank employees and manipulate them', '', '', 0000, 0000),
(7, 'gbisht55555@gmail.com', 'Deliote', 'Jr. developer', 'Delhi', 'Bank employee management', 'Handle the information of bank employees and manipulate them', 'Bank customer management ', 'GUI website builder', 2017, 2019),
(8, 'gbisht55555@gmail.com', 'Deliote', 'Jr. developer', 'Delhi', 'Bank employee management', 'Handle the information of bank employees and manipulate them', 'Bank customer management ', 'GUI website builder', 2017, 2019),
(9, 'gbisht55555@gmail.com', 'Deliote', 'Jr. developer', 'Delhi', 'Bank employee management', 'Handle the information of bank employees and manipulate them', 'Bank customer management ', 'GUI website builder', 2017, 2019),
(10, 'gbisht55555@gmail.com', 'Deliote', 'Jr. developer', 'Delhi', 'Bank employee management', 'Handle the information of bank employees and manipulate them', 'Bank customer management ', 'GUI website builder', 2017, 2019),
(11, 'disha123@gmail', 'Wipro', 'Jr. developer', 'Chennai', 'Canteen management system', 'Handle the information of bank employees and manipulate them', 'Bank customer management ', 'GUI website builder', 2017, 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`cert_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_sn`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`interest_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `professional_skill`
--
ALTER TABLE `professional_skill`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `work_exp`
--
ALTER TABLE `work_exp`
  ADD PRIMARY KEY (`exp_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `interest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `work_exp`
--
ALTER TABLE `work_exp`
  MODIFY `exp_key` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
