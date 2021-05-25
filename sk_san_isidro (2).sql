-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 07:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sk_san_isidro`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(33) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `address`, `contact`, `message`) VALUES
(39, 'Ralph Lawrence', 'ralph@yahoo.com', 'Angono rizal', '097544414875', 'We make a baby'),
(40, 'Jeremy Andaya', 'jer@yahoo.com', 'lt3 looban', '09784512354', 'We make a good future'),
(41, 'Arlan Camacho', 'arlancamacho03@yahoo.com.ph', 'puregold taytay ', '09754444405', 'We make a children'),
(42, 'Justine Cusap', 'justine03@yahoo.com', 'Pasig City', '09754444406', 'Justine bakbakero'),
(43, 'Jeremy Prince Andaya', 'jeremyprinceandaya07@gmail.com', 'jeremyprinceandaya07@gmail.com', '09666235316', 'Hello'),
(44, 'kahitano', 'kahitano@yahoo.com', 'taytay', '094658223921', 'naiisipkolangto');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `donation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `contact`, `address`, `email`, `donation`) VALUES
(1, 'Jeremy Prince Giron Andaya', '09666235316', '12 Sampaguita St. Gregoria Hts. Subd. Brgy. San Isidro Taytay,Rizal', 'jeremyprinceandaya07@gmail.com', 'Clothes, Shoes and Bottled Water'),
(2, 'Jeremy Prince Andaya', '09666235316', '12 Sampaguita St. Gregoria Hts. Subd. Brgy. San Isidro Taytay,Rizal', 'jeremyprinceandaya07@gmail.com', 'Bigas at ulam');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(15) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date_recieved` date NOT NULL,
  `date_claimed` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `fullname`, `organization`, `contact`, `request`, `event`, `date`, `venue`, `date_recieved`, `date_claimed`, `amount`, `status`) VALUES
(14, 'Arlan Camacho', 'Software Devs', '09754444405', 'financial', 'Meeting for sk system', '2021-05-14', 'San isidro office', '2021-05-14', '2021-05-14', 'cash', 'claimed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(9) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `fullname`, `address`, `contact`, `message`, `filename`, `created`) VALUES
(26, 'Jeremy Prince Andaya', '12 Sampaguita St. Gregoria Hts. Subd. Brgy. San Isidro Taytay,Rizal 1920', '09666235316', 'Because I\'m a true leader, Thank you!', '1-Proposal - Juan Creatives Solution.pdf', '2021-05-13 15:10:16'),
(27, 'Nico Andaya', 'Taytay', '09150235361', 'Wow', '27-12-Activty 5 - SQL Join.docx', '2021-05-13 17:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_helpdesk`
--

CREATE TABLE `tbl_helpdesk` (
  `id` int(9) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_helpdesk`
--

INSERT INTO `tbl_helpdesk` (`id`, `fullname`, `address`, `contact`, `date`, `doctor`, `message`, `filename`, `created`) VALUES
(22, 'Jeremy Prince Giron Andaya', '12 Sampaguita St. Gregoria Hts. Subd. Brgy. San Isidro Taytay,Rizal', '09666235316', '1996-10-15', 'Dr. Rommel ', 'Sakit sa puso                            \r\n                            ', '1-27-12-Activty 5 - SQL Join.docx', '2021-05-13 17:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(12, 'Jeremy', '$2y$12$RvMpb3fjgDCsy1hR6dAASe4GmTrzfQ3BAeiOn1Ygabmi1/zS1ANfu', 'admin'),
(13, 'arlan', '$2y$12$Q6dIi94GJxMl3UtTrX6lsuf3bK2GDCXS624urLsjLg1owSYw6APAi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_helpdesk`
--
ALTER TABLE `tbl_helpdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_helpdesk`
--
ALTER TABLE `tbl_helpdesk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
