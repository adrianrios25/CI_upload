-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 05:42 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upload_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_images`
--

CREATE TABLE IF NOT EXISTS `uploaded_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_dir` varchar(120) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uploaded_images`
--

INSERT INTO `uploaded_images` (`id`, `file_dir`, `date_uploaded`) VALUES
(1, '66686718d621b51464a829b1328da007.jpg', '2015-10-17 05:33:31'),
(2, 'bfb919b6f9b5e7506d21f4e691a50a22.png', '2015-10-17 05:36:07'),
(3, '4d6b5573c7c37f4a43421866dcea6bcc.jpg', '2015-10-17 11:37:01'),
(4, 'f8cecb7df51708660610fb8fa965a166.jpg', '2015-10-17 11:37:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
