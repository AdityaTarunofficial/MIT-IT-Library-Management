-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 01:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `ledger_table`
--

CREATE TABLE `ledger_table` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(100) NOT NULL,
  `Staff_id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `returned_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `Section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledger_table`
--

INSERT INTO `ledger_table` (`Book_id`, `Book_name`, `Staff_id`, `borrow_date`, `return_date`, `returned_date`, `status`, `Section`) VALUES
(3002, 'Professional Red Hat Enterprise Linux -3', 60746, '2022-01-29', '2022-02-08', '2022-01-29', 1, 'section_3_row_1'),
(3002, 'Professional Red Hat Enterprise Linux -3', 60746, '2022-01-29', '2022-02-08', '2022-01-29', 1, 'section_3_row_1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
