-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 03:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterlevel`
--

-- --------------------------------------------------------

--
-- Table structure for table `ultrasonic_data`
--

CREATE TABLE `ultrasonic_data` (
  `id` int(11) NOT NULL,
  `node1` float DEFAULT NULL,
  `node2` float DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ultrasonic_data`
--

INSERT INTO `ultrasonic_data` (`id`, `node1`, `node2`, `timestamp`) VALUES
(1, 30.12, NULL, '2024-01-08 12:46:50'),
(2, 30.12, NULL, '2024-01-08 12:47:18'),
(3, 30.14, NULL, '2024-01-08 12:47:46'),
(4, 30.12, NULL, '2024-01-08 12:48:15'),
(5, 30.12, NULL, '2024-01-08 12:48:43'),
(6, 30.11, NULL, '2024-01-08 12:49:11'),
(7, 30.12, NULL, '2024-01-08 12:49:39'),
(8, 30.12, NULL, '2024-01-08 12:50:07'),
(9, 31.42, NULL, '2024-01-08 12:50:35'),
(10, 30.12, NULL, '2024-01-08 12:51:03'),
(11, 30.12, NULL, '2024-01-08 12:51:31'),
(12, 30.11, NULL, '2024-01-08 12:51:59'),
(13, 30.12, NULL, '2024-01-08 12:52:27'),
(14, 30.12, NULL, '2024-01-08 12:52:55'),
(15, 30.12, NULL, '2024-01-08 12:53:24'),
(16, 30.12, NULL, '2024-01-08 12:53:52'),
(17, 31.4, NULL, '2024-01-08 12:54:20'),
(18, 30.14, NULL, '2024-01-08 12:54:48'),
(19, 30.12, NULL, '2024-01-08 12:55:16'),
(20, 30.12, NULL, '2024-01-08 12:55:44'),
(21, 30.12, NULL, '2024-01-08 12:56:12'),
(22, 30.12, NULL, '2024-01-08 12:56:40'),
(23, 30.11, NULL, '2024-01-08 12:57:08'),
(24, 30.12, NULL, '2024-01-08 12:57:36'),
(25, 30.11, NULL, '2024-01-08 12:58:04'),
(26, 30.12, NULL, '2024-01-08 12:58:33'),
(27, 30.12, NULL, '2024-01-08 12:59:01'),
(28, 30.12, NULL, '2024-01-08 12:59:29'),
(29, 30.12, NULL, '2024-01-08 12:59:57'),
(30, 30.12, NULL, '2024-01-08 13:00:25'),
(31, 31.4, NULL, '2024-01-08 13:00:53'),
(32, 30.12, NULL, '2024-01-08 13:01:21'),
(33, 30.12, NULL, '2024-01-08 13:01:49'),
(34, 30.12, NULL, '2024-01-08 13:02:17'),
(35, 30.12, NULL, '2024-01-08 13:02:45'),
(36, 30.12, NULL, '2024-01-08 13:03:13'),
(37, 30.12, NULL, '2024-01-08 13:03:41'),
(38, 30.12, NULL, '2024-01-08 13:04:09'),
(39, 30.11, NULL, '2024-01-08 13:04:38'),
(40, 30.12, NULL, '2024-01-08 13:05:06'),
(41, 30.12, NULL, '2024-01-08 13:05:34'),
(42, 30.12, NULL, '2024-01-08 13:06:02'),
(43, 30.11, NULL, '2024-01-08 13:06:30'),
(44, 30.12, NULL, '2024-01-08 13:06:58'),
(45, 30.12, NULL, '2024-01-08 13:07:26'),
(46, 30.12, NULL, '2024-01-08 13:07:54'),
(47, 30.12, NULL, '2024-01-08 13:08:22'),
(48, 30.12, NULL, '2024-01-08 13:08:50'),
(49, 30.12, NULL, '2024-01-08 13:09:18'),
(50, 30.11, NULL, '2024-01-08 13:09:46'),
(51, 30.12, NULL, '2024-01-08 13:10:15'),
(52, 30.12, NULL, '2024-01-08 13:10:43'),
(53, 30.12, NULL, '2024-01-08 13:11:11'),
(54, 30.12, NULL, '2024-01-08 13:11:39'),
(55, 30.12, NULL, '2024-01-08 13:12:07'),
(56, 30.12, NULL, '2024-01-08 13:12:35'),
(57, 30.12, NULL, '2024-01-08 13:13:10'),
(58, 30.12, NULL, '2024-01-08 13:13:38'),
(59, 30.11, NULL, '2024-01-08 13:14:06'),
(60, 30.12, NULL, '2024-01-08 13:14:34'),
(61, 30.12, NULL, '2024-01-08 13:15:02'),
(62, 30.12, NULL, '2024-01-08 13:15:31'),
(63, 30.12, NULL, '2024-01-08 13:15:59'),
(64, 30.12, NULL, '2024-01-08 13:16:27'),
(65, 30.12, NULL, '2024-01-08 13:16:55'),
(66, 30.14, NULL, '2024-01-08 13:17:23'),
(67, 30.12, NULL, '2024-01-08 13:17:51'),
(68, 30.12, NULL, '2024-01-08 13:18:19'),
(69, 30.12, NULL, '2024-01-08 13:18:47'),
(70, 30.11, NULL, '2024-01-08 13:19:15'),
(71, 30.12, NULL, '2024-01-08 13:19:43'),
(72, 30.11, NULL, '2024-01-08 13:20:11'),
(73, 30.12, NULL, '2024-01-08 13:20:40'),
(74, 30.12, NULL, '2024-01-08 13:21:08'),
(75, 30.12, NULL, '2024-01-08 13:21:36'),
(76, 30.11, NULL, '2024-01-08 13:22:04'),
(77, 30.11, NULL, '2024-01-08 13:22:32'),
(78, 30.12, NULL, '2024-01-08 13:23:00'),
(79, 30.12, NULL, '2024-01-08 13:23:28'),
(80, 30.14, NULL, '2024-01-08 13:23:56'),
(81, 30.12, NULL, '2024-01-08 13:24:24'),
(82, 30.12, NULL, '2024-01-08 13:24:52'),
(83, 30.14, NULL, '2024-01-08 13:25:20'),
(84, 30.12, NULL, '2024-01-08 13:25:48'),
(85, 30.11, NULL, '2024-01-08 13:26:17'),
(86, 30.12, NULL, '2024-01-08 13:26:45'),
(87, 30.12, NULL, '2024-01-08 13:27:13'),
(88, 30.11, NULL, '2024-01-08 13:27:41'),
(89, 30.11, NULL, '2024-01-08 13:28:09'),
(90, 30.11, NULL, '2024-01-08 13:28:37'),
(91, 30.12, NULL, '2024-01-08 13:29:05'),
(92, 30.11, NULL, '2024-01-08 13:29:33'),
(93, 30.11, NULL, '2024-01-08 13:30:01'),
(94, 30.12, NULL, '2024-01-08 13:30:29'),
(95, 30.11, NULL, '2024-01-08 13:30:57'),
(96, 30.12, NULL, '2024-01-08 13:31:25'),
(97, 30.12, NULL, '2024-01-08 13:31:54'),
(98, 30.11, NULL, '2024-01-08 13:32:22'),
(99, 30.11, NULL, '2024-01-08 13:32:50'),
(100, 30.12, NULL, '2024-01-08 13:33:18'),
(101, 30.12, NULL, '2024-01-08 13:33:46'),
(102, 30.12, NULL, '2024-01-08 13:34:14'),
(103, 30.12, NULL, '2024-01-08 13:34:42'),
(104, 30.12, NULL, '2024-01-08 13:35:10'),
(105, 30.12, NULL, '2024-01-08 13:35:38'),
(106, 30.12, NULL, '2024-01-08 13:36:06'),
(107, 30.12, NULL, '2024-01-08 13:36:34'),
(108, 30.12, NULL, '2024-01-08 13:37:02'),
(109, 30.12, NULL, '2024-01-08 13:37:31'),
(110, 30.11, NULL, '2024-01-08 13:37:59'),
(111, 30.12, NULL, '2024-01-08 13:38:27'),
(112, 30.12, NULL, '2024-01-08 13:38:55'),
(113, 30.12, NULL, '2024-01-08 13:39:23'),
(114, 30.12, NULL, '2024-01-08 13:39:51'),
(115, 30.12, NULL, '2024-01-08 13:40:19'),
(116, 30.11, NULL, '2024-01-08 13:40:47'),
(117, 31.64, NULL, '2024-01-08 13:41:15'),
(118, 30.12, NULL, '2024-01-08 13:41:43'),
(119, 30.12, NULL, '2024-01-08 13:42:11'),
(120, 30.12, NULL, '2024-01-08 13:42:39'),
(121, 31.42, NULL, '2024-01-08 13:43:08'),
(122, 30.12, NULL, '2024-01-08 13:43:36'),
(123, 30.12, NULL, '2024-01-08 13:44:04'),
(124, 30.11, NULL, '2024-01-08 13:44:32'),
(125, 30.11, NULL, '2024-01-08 13:45:00'),
(126, 30.12, NULL, '2024-01-08 13:45:28'),
(127, 30.12, NULL, '2024-01-08 13:45:56'),
(128, 30.11, NULL, '2024-01-08 13:46:24'),
(129, 30.12, NULL, '2024-01-08 13:46:52'),
(130, 30.11, NULL, '2024-01-08 13:47:20'),
(131, 30.12, NULL, '2024-01-08 13:47:48'),
(132, 30.11, NULL, '2024-01-08 13:48:17'),
(133, 30.12, NULL, '2024-01-08 13:48:45'),
(134, 30.12, NULL, '2024-01-08 13:49:13'),
(135, 30.12, NULL, '2024-01-08 13:49:41'),
(136, 30.11, NULL, '2024-01-08 13:50:09'),
(137, 30.11, NULL, '2024-01-08 13:50:37'),
(138, 30.11, NULL, '2024-01-08 13:51:05'),
(139, 30.12, NULL, '2024-01-08 13:51:33'),
(140, 30.12, NULL, '2024-01-08 13:52:01'),
(141, 30.12, NULL, '2024-01-08 13:52:29'),
(142, 30.11, NULL, '2024-01-08 13:52:57'),
(143, 30.11, NULL, '2024-01-08 13:53:25'),
(144, 30.12, NULL, '2024-01-08 13:53:54'),
(145, 30.11, NULL, '2024-01-08 13:54:22'),
(146, 30.11, NULL, '2024-01-08 13:54:50'),
(147, 30.12, NULL, '2024-01-08 13:55:18'),
(148, 30.12, NULL, '2024-01-08 13:55:46'),
(149, 30.12, NULL, '2024-01-08 13:56:14'),
(150, 30.11, NULL, '2024-01-08 13:56:42'),
(151, 30.11, NULL, '2024-01-08 13:57:10'),
(152, 30.11, NULL, '2024-01-08 13:57:38'),
(153, 30.12, NULL, '2024-01-08 13:58:06'),
(154, 30.12, NULL, '2024-01-08 13:58:34'),
(155, 30.11, NULL, '2024-01-08 13:59:02'),
(156, 30.11, NULL, '2024-01-08 13:59:31'),
(157, 30.12, NULL, '2024-01-08 13:59:59'),
(158, 30.12, NULL, '2024-01-08 14:00:27'),
(159, 30.12, NULL, '2024-01-08 14:00:55'),
(160, 31.42, NULL, '2024-01-08 14:01:23'),
(161, 30.12, NULL, '2024-01-08 14:01:51'),
(162, 30.63, NULL, '2024-01-08 14:02:19'),
(163, 30.12, NULL, '2024-01-08 14:02:47'),
(164, 30.12, NULL, '2024-01-08 14:03:15'),
(165, 30.12, NULL, '2024-01-08 14:03:43'),
(166, 30.12, NULL, '2024-01-08 14:04:11'),
(167, 30.12, NULL, '2024-01-08 14:04:40'),
(168, 30.12, NULL, '2024-01-08 14:05:08'),
(169, 30.12, NULL, '2024-01-08 14:05:36'),
(170, 30.12, NULL, '2024-01-08 14:06:04'),
(171, 30.12, NULL, '2024-01-08 14:06:32'),
(172, 30.11, NULL, '2024-01-08 14:07:00'),
(173, 31.4, NULL, '2024-01-08 14:07:28'),
(174, 30.11, NULL, '2024-01-08 14:07:56'),
(175, 30.11, NULL, '2024-01-08 14:08:24'),
(176, 30.11, NULL, '2024-01-08 14:08:52'),
(177, 30.12, NULL, '2024-01-08 14:09:20'),
(178, 30.12, NULL, '2024-01-08 14:09:48'),
(179, 30.12, NULL, '2024-01-08 14:10:17'),
(180, 30.12, NULL, '2024-01-08 14:10:45'),
(181, 30.12, NULL, '2024-01-08 14:11:13'),
(182, 30.11, NULL, '2024-01-08 14:11:41'),
(183, 30.12, NULL, '2024-01-08 14:12:09'),
(184, 30.11, NULL, '2024-01-08 14:12:37'),
(185, 30.12, NULL, '2024-01-08 14:13:05'),
(186, 30.12, NULL, '2024-01-08 14:13:33'),
(187, 30.12, NULL, '2024-01-08 14:14:01'),
(188, 30.12, NULL, '2024-01-08 14:14:29'),
(189, 30.11, NULL, '2024-01-08 14:14:57'),
(190, 30.12, NULL, '2024-01-08 14:15:25'),
(191, 30.12, NULL, '2024-01-08 14:15:53'),
(192, 30.11, NULL, '2024-01-08 14:16:22'),
(193, 30.11, NULL, '2024-01-08 14:16:50'),
(194, 30.12, NULL, '2024-01-08 14:17:18'),
(195, 30.12, NULL, '2024-01-08 14:17:46'),
(196, 30.11, NULL, '2024-01-08 14:18:14'),
(197, 30.12, NULL, '2024-01-08 14:18:42'),
(198, 30.11, NULL, '2024-01-08 14:19:10'),
(199, 30.12, NULL, '2024-01-08 14:19:38'),
(200, 30.11, NULL, '2024-01-08 14:20:06'),
(201, 30.12, NULL, '2024-01-08 14:20:34'),
(202, 30.12, NULL, '2024-01-08 14:21:02'),
(203, 30.11, NULL, '2024-01-08 14:21:30'),
(204, 30.12, NULL, '2024-01-08 14:21:59'),
(205, 30.11, NULL, '2024-01-08 14:22:27'),
(206, 30.12, NULL, '2024-01-08 14:22:55'),
(207, 30.11, NULL, '2024-01-08 14:23:23'),
(208, 30.12, NULL, '2024-01-08 14:23:51'),
(209, 31.42, NULL, '2024-01-08 14:24:19'),
(210, 30.14, NULL, '2024-01-08 14:24:47'),
(211, 30.12, NULL, '2024-01-08 14:25:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ultrasonic_data`
--
ALTER TABLE `ultrasonic_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ultrasonic_data`
--
ALTER TABLE `ultrasonic_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
