-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `paying_for` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `Payed_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `paying_for`, `amount`, `reason`, `Payed_At`) VALUES
(1, 'amandazii', 300, 'eating', '2024-03-02'),
(2, 'imbadha', 270, 'eating', '2024-03-02'),
(3, 'cake', 200, 'eating', '2024-03-02'),
(4, 'ticket', 320, 'travelling to mumujyi', '2024-03-02'),
(5, 'ticket', 600, 'travelling to nyamirambo(ridamputa)', '2024-03-02'),
(6, 'breakfast', 600, 'morning breakfast', '2024-03-03'),
(7, 'car std', 1000, 'improve my knowledge', '2024-03-03'),
(8, 'ibishyimbo', 220, 'cooking', '2024-03-03'),
(9, 'avoca', 100, 'protein increase', '2024-03-03'),
(10, 'cashing out', 350, 'cashing out 20k', '2024-03-03'),
(17, 'TP', 250, 'hygiene and sanitation', '2024-03-04'),
(18, 'Ibishyimbo', 200, 'cooking', '2024-03-04'),
(19, 'Tayari', 100, 'food color', '2024-03-04'),
(20, 'milk', 800, 'eating', '2024-03-06'),
(22, 'farin products', 500, 'eating', '2024-03-06'),
(23, 'soap', 500, 'cleanliness', '2024-03-07'),
(24, 'table salt', 200, 'eating', '2024-03-07'),
(25, 'isombe', 300, 'eating', '2024-03-07'),
(26, 'ticket', 200, 'travelling from school', '2024-03-06'),
(27, 'farin products', 600, 'eating', '2024-03-08'),
(28, 'speaker', 9500, 'music listening', '2024-03-09'),
(29, 'alimentation', 1400, 'me and ridamputer', '2024-03-09'),
(30, 'ticket', 600, 'me and ridampu travelling to kimirinko', '2024-03-09'),
(31, 'ticket', 500, 'adding money to tap&amp;go card', '2024-03-11'),
(32, 'superglue', 250, 'phone handling', '2024-03-11'),
(33, 'injugu', 500, 'buying them for  joel', '2024-03-09'),
(34, 'milk', 800, 'home facilitatoin', '2024-03-11'),
(35, 'farin products', 300, 'eating', '2024-03-11');

--
-- Triggers `expense`
--
DELIMITER $$
CREATE TRIGGER `migrate_expenses` AFTER INSERT ON `expense` FOR EACH ROW BEGIN
    DECLARE Payed_At Date;

    
    SET Payed_At = MONTH(CURRENT_DATE());

    
    IF  !Payed_At THEN
        INSERT INTO non_current_month  SELECT * FROM expense;
        DELETE FROM expense;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `paying_for` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `Payed_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `paying_for`, `amount`, `reason`, `Payed_At`) VALUES
(1, 'amandazi', 300, 'eating', '2024-03-02'),
(2, 'imbadha', 270, 'eating', '2024-03-02'),
(3, 'cake', 200, 'eating', '2024-03-02'),
(4, 'ticket', 320, 'travelling to mumujyi', '2024-03-02'),
(5, 'ticket', 600, 'travelling to nyamirambo(ridamputa)', '2024-03-02'),
(6, 'breakfast', 600, 'morning breakfast', '2024-03-03'),
(7, 'car std', 1000, 'improve my knowledge', '2024-03-03'),
(8, 'ibishyimbo', 220, 'cooking', '2024-03-03'),
(9, 'avoca', 100, 'protein increase', '2024-03-03'),
(10, 'cashing out', 350, 'cashing out 20k', '2024-03-03'),
(17, 'TP', 250, 'hygiene and sanitation', '2024-03-04'),
(18, 'Ibishyimbo', 200, 'cooking', '2024-03-04'),
(19, 'Tayari', 100, 'food color', '2024-03-04'),
(20, 'milk', 800, 'eating', '2024-03-06'),
(22, 'farin products', 500, 'eating', '2024-03-06'),
(23, 'soap', 500, 'cleanliness', '2024-03-07'),
(24, 'table salt', 200, 'eating', '2024-03-07'),
(25, 'isombe', 300, 'eating', '2024-03-07'),
(26, 'ticket', 200, 'travelling from school', '2024-03-06'),
(27, 'farin products', 600, 'eating', '2024-03-08'),
(28, 'speaker', 9500, 'music listening', '2024-03-09'),
(29, 'alimentation', 1400, 'me and ridamputer', '2024-03-09'),
(30, 'ticket', 600, 'me and ridampu travelling to kimirinko', '2024-03-09'),
(31, 'ticket', 500, 'adding money to tap&amp;go card', '2024-03-11'),
(32, 'superglue', 250, 'phone handling', '2024-03-11'),
(33, 'injugu', 500, 'buying them for  joel', '2024-03-09'),
(34, 'milk', 800, 'home facilitatoin', '2024-03-11'),
(35, 'farin products', 300, 'eating', '2024-03-11'),
(36, 'phone cover (nokia)&amp; anti-brook', 3000, 'phone cleanliness', '2024-03-12'),
(37, 'phone cover(smsung)', 2000, 'phone protection', '2024-03-11'),
(38, 'morning ticket', 500, 'reaching at school very earlier', '2024-03-14'),
(39, 'farin products', 1000, 'guest hosting', '2024-03-16'),
(40, 'transport (nyamirambo)', 1000, 'travelling', '2024-03-16'),
(41, 'isombe', 300, 'home facilitation', '2024-03-12'),
(42, 'ibishyimbo', 300, 'morning food', '2024-03-17'),
(43, 'ibishyimbo', 200, 'home facltation', '2024-03-14'),
(44, 'ticket', 216, 'tiredness avoidance', '2024-03-15'),
(45, 'ibishyimbo', 200, 'home facilitation', '2024-03-13'),
(46, 'paint repairing', 300, 'uniform cleanliness', '2024-03-10'),
(47, 'tayali&amp;asante', 100, 'home facilitation', '2024-03-17'),
(48, 'internet', 3000, 'studies facilitation', '2024-03-17'),
(49, 'ticket for komando', 1300, 'friend assistance', '2024-03-16'),
(50, 'amata', 800, 'hungry', '2024-03-23'),
(51, 'ticket(igare)', 300, 'meeting with daddy', '2024-03-21'),
(53, 'debt', 3600, 'paying back the money rent to kabosi', '2024-05-01'),
(54, 'unknown', 1024, 'idont remember what the mone has used for', '2024-05-01'),
(55, 'airtime', 700, 'iwanted to call friends', '2024-05-01'),
(56, 'superghet', 2000, 'home facilitation', '2024-05-01'),
(57, 'juice', 2000, 'home facilitation', '2024-05-01'),
(58, 'ticket', 0, '', '1970-01-01'),
(59, 'ticket', 500, 'travelling to school', '2024-05-02'),
(60, 'withdrawing', 100, 'getting the ticket to go to school\r\n', '2024-05-02'),
(61, 'amata', 800, 'night eating\r\n', '2024-05-03'),
(62, 'amata', 800, 'night eating\r\n', '2024-05-02'),
(63, 'farin products', 500, 'night food\r\n', '2024-05-02'),
(64, 'ticket', 500, 'travelling to school', '2024-05-03'),
(65, '', 0, '', '0000-00-00'),
(66, '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `Earning_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `source`, `amount`, `reason`, `Earning_Date`) VALUES
(1, 'my mom', 15000, 'home assistance', '2024-03-01'),
(3, 'daddy', 10000, 'internet fees', '2024-03-02'),
(4, 'School band', 5000, 'Saving', '2024-03-09'),
(5, 'Aunti', 2000, 'Saving', '2024-03-10'),
(6, 'Uncle', 5000, 'Saving', '2024-03-11'),
(7, 'Mother', 20000, 'home assistance', '2024-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `non_current_month`
--

CREATE TABLE `non_current_month` (
  `id` int(11) NOT NULL,
  `paying_for` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `Payed_At` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `task`, `Created_At`) VALUES
(1, 'kurya Grace', '2024-04-14 16:01:06'),
(2, 'learning python django this week', '2024-05-01 09:20:37'),
(3, 'getting the basics about MERN', '2024-05-01 09:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_path`, `user_id`, `Created_At`) VALUES
(3, 'uploads/frank.jpg', 1, '2024-05-20 19:11:08'),
(5, 'uploads/frank.jpg', 4, '2024-05-20 19:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `gender`, `email`, `password`, `Created_At`) VALUES
(1, 'eddy', 'male', 'frank@gmail.com', '1234', '2024-04-16 18:58:37'),
(2, 'murisa', 'female', 'murisa@gmail.com', '12345', '2024-04-16 19:13:29'),
(4, 'bahirwa frank', 'male', 'frankbahirwa@gmail.com', '1234', '2024-04-16 19:34:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_current_month`
--
ALTER TABLE `non_current_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `non_current_month`
--
ALTER TABLE `non_current_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
