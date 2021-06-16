-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:48 AM
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

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `contact`, `address`, `date`, `purpose`) VALUES
(13, 'ROnnie \"lodi\" Rosal', 'rons@yahoo.com', '09348489358932', 'Angono Rizal', '2021-06-06', 'I meet sk jeremy');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(15) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Health'),
(3, 'Education'),
(4, 'Sports Development'),
(5, 'Gender and Equality'),
(6, 'Drugs Abuse'),
(7, 'Youth Employment'),
(8, 'Disaster Risk'),
(9, 'Other Events');

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
(44, 'kahitano', 'kahitano@yahoo.com', 'taytay', '094658223921', 'naiisipkolangto'),
(45, 'justine cusap', 'justinecuusap@gmail.com', 'Blk:3 Lot 4 bagumbayan Antipolo City', '094658223921', 'Sample'),
(46, 'arlan camacho', 'arlan@yahoo.com', 'Pasig city', '09754444405', 'This is sample work'),
(47, 'ron', 'ron@yahoo.com', 'Romblon city', '094658223921', 'asjd;laksjdlkasd');

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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(15) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `event_user` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_image` text NOT NULL,
  `event_category` varchar(255) NOT NULL,
  `event_status` varchar(255) NOT NULL,
  `event_content` varchar(255) NOT NULL,
  `event_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `news_title`, `event_user`, `event_date`, `event_image`, `event_category`, `event_status`, `event_content`, `event_link`) VALUES
(23, 'Nasakit po ulo ko', 'Jer', '2021-06-10', 'blog2.png', '2', 'published', 'Tangalin na ba natin?', 'https://www.youtube.com/watch?v=BZsXcc_tC-o&ab_channel=WeTheKingsWeTheKingsOfficialArtistChannel');

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
(20, 'Justine Cusap', 'Software Developer Philippines', '094658223921', 'financial', 'For our company registration', '2021-05-25', 'SK office', '2021-05-25', '2021-05-25', '500', 'process');

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
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(14, 'justine cusap', 'tin', '$2y$12$U/16xDNpTrBMG4Tfs3IglOR5dvEdGEIavRwUxtNJSnLbE2EaIloyu', 'staff'),
(17, 'Jeremy Prince Andaya', 'Jer', '$2y$10$B04kKNswGmh3Tiyn.esNk.uiMm939Nbx3in8eaFM01zPMmNJw.Dg2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

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
-- Indexes for table `events`
--
ALTER TABLE `events`
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
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
