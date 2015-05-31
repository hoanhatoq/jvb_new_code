-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 12:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jvbsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_tbl`
--

CREATE TABLE IF NOT EXISTS `about_us_tbl` (
  `about_id` int(11) NOT NULL,
  `title_about_id` varchar(15) DEFAULT NULL,
  `content_about_id` varchar(15) DEFAULT NULL,
  `title_alias` varchar(55) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us_tbl`
--

INSERT INTO `about_us_tbl` (`about_id`, `title_about_id`, `content_about_id`, `title_alias`, `create_time`, `update_time`) VALUES
(1, 'at1', 'ac1', 'gioi-thieu', '2015-02-19 10:41:10', '2015-02-19 10:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `expresion_tbl`
--

CREATE TABLE IF NOT EXISTS `expresion_tbl` (
  `expresion_id` int(11) NOT NULL,
  `title_content_id` varchar(15) DEFAULT NULL,
  `lang_code` varchar(15) DEFAULT NULL,
  `value` text,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expresion_tbl`
--

INSERT INTO `expresion_tbl` (`expresion_id`, `title_content_id`, `lang_code`, `value`, `create_time`, `update_time`) VALUES
(1, 'ac1', 'vi', 'noi dung cua about vn 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(2, 'ac1', 'jp', 'noi dung cua about jp 1', '2015-02-10 10:49:54', '2015-02-26 10:49:58'),
(3, 'ac1', 'en', 'noi dung cua about en 1', '2015-02-16 10:50:55', '2015-02-27 10:51:01'),
(4, 'nc1', 'vi', 'noi dung cua news vn 1', '2015-02-03 13:59:04', '2015-02-09 13:59:17'),
(6, 'nc1', 'jp', 'noi dung cua news jp 1', '2015-02-23 13:59:12', '2015-02-28 13:59:24'),
(7, 'nc1', 'en', 'noi dung cua news en 1', '2015-02-17 14:01:23', '2015-02-15 14:01:37'),
(8, 'sc1', 'vi', 'noi dung cua service vn 1', '2015-02-24 14:01:28', '2015-02-24 14:01:40'),
(9, 'sc1', 'jp', 'noi dung cua service jp  1', '2015-02-16 14:01:32', '2015-02-02 14:01:45'),
(11, 'at1', 'vn', 'title cua about vn 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(12, 'at1', 'jp', 'title cua about jp 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(13, 'at1', 'en', 'title cua about en 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(14, 'nt1', 'vi', 'title cua news vn 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(15, 'nt1', 'jp', 'title cua news jp 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(16, 'nt1', 'en', 'title cua news en 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(17, 'st1', 'vi', 'title cua services vn 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(18, 'st1', 'jp', 'title cua service  jp 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(19, 'st1', 'en', 'title cua service  en 1', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(20, 'st2', 'en', 'title cua service  en 2', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(21, 'st2', 'vi', 'title cua service  vn 2', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(22, 'st2', 'jp', 'title cua service  jp 2', '2015-02-17 10:46:06', '2015-02-19 10:46:13'),
(23, 'sc2', 'jp', 'noi dung cua service jp 2', '2015-02-16 14:01:32', '2015-02-02 14:01:45'),
(24, 'sc2', 'vi', 'noi dung cua service vn 2', '2015-02-24 14:01:28', '2015-02-24 14:01:40'),
(25, 'sc2', 'en', 'noi dung cua service en 2', '2015-02-24 14:01:28', '2015-02-24 14:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE IF NOT EXISTS `news_tbl` (
  `news_id` int(11) NOT NULL,
  `title_news_id` varchar(15) DEFAULT NULL,
  `content_news_id` varchar(15) DEFAULT NULL,
  `title_alias` varchar(55) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `title_news_id`, `content_news_id`, `title_alias`, `create_time`, `update_time`) VALUES
(1, 'nt1', 'nc1', 'tuyen-phien-dich-vien-tieng-nhat', '2015-02-20 13:51:07', '2015-02-09 13:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE IF NOT EXISTS `service_tbl` (
  `services_id` int(11) NOT NULL,
  `title_services_id` varchar(15) DEFAULT NULL,
  `content_services_id` varchar(15) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `title_alias` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`services_id`, `title_services_id`, `content_services_id`, `create_time`, `update_time`, `title_alias`) VALUES
(1, 'st1', 'sc1', '2015-02-16 14:10:56', '2015-02-16 14:11:00', 'phat-trien-ung-dung-mobile'),
(2, 'st2', 'sc2', '2015-02-17 14:10:56', '2015-02-17 14:11:00', 'phat-trien-ung-dung-so'),
(3, 'st3', 'sc3', '2015-02-18 14:10:56', '2015-02-18 14:11:00', 'phat-trien-ung-dung-web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_tbl`
--
ALTER TABLE `about_us_tbl`
 ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `expresion_tbl`
--
ALTER TABLE `expresion_tbl`
 ADD PRIMARY KEY (`expresion_id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
 ADD PRIMARY KEY (`services_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
