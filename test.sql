-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 10:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_1_row_1`
--

CREATE TABLE `section_1_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` varchar(30) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_1_row_2`
--

CREATE TABLE `section_1_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(64) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(46) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_1_row_3`
--

CREATE TABLE `section_1_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(54) NOT NULL,
  `Edition` varchar(3) NOT NULL,
  `Publisher` varchar(46) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_1_row_4`
--

CREATE TABLE `section_1_row_4` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(64) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(46) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_2_row_1`
--

CREATE TABLE `section_2_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(64) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_2_row_2`
--

CREATE TABLE `section_2_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(64) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_2_row_3`
--

CREATE TABLE `section_2_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(64) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_2_row_4`
--

CREATE TABLE `section_2_row_4` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(64) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(23) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_3_row_1`
--

CREATE TABLE `section_3_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(44) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(35) NOT NULL,
  `Author1` varchar(22) NOT NULL,
  `Author2` varchar(22) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_3_row_1`
--

INSERT INTO `section_3_row_1` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(3001, 'UNIX Network Programming Volume 1', '2nd', 'Pearson Education', 'W.Richard Stevens', NULL, 1),
(3002, 'Professional Red Hat Enterprise Linux -3', NULL, 'Wiley Publishing', 'Kapil Sharma', 'Mohammed J. Kabir', 1),
(3003, 'Distributed Operating Systems', NULL, 'Prentice-Hall of India', 'Pradeep K. Sinha', NULL, 1),
(3004, 'Operating Systems', NULL, 'Tata McGraw-Hill Publishing Company', 'Achyut S Godbole', NULL, 1),
(3005, 'Operating Systems', '2nd', 'Addison-Wesley', 'H. M. Deitel', NULL, 1),
(3006, 'Operating Systems', NULL, 'Scitech Publications', 'P. Balakrishnan Prasad', NULL, 1),
(3007, 'Operating System Concepts', '8th', 'Wiley India', 'Abraham Silberschatz', 'Peter B. Galvin', 1),
(3008, 'Operating System Concepts', '9th', 'Wiley India', 'Abraham Silberschatz', 'Peter B. Galvin', 1),
(3009, 'Modern Operating Systems', '3rd', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', NULL, 1),
(3010, 'Modern Operating Systems', '3rd', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', NULL, 1),
(3011, 'Operating Systems Design and Implementation', '2nd', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', 'Albert S. Woodhull', 1),
(3012, 'Modern Operating Systems', '2nd', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', NULL, 1),
(3013, 'Modern Operating Systems', '3rd', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', NULL, 1),
(3014, 'The Design of the UNIX Operating System', NULL, 'Prentice-Hall of India', 'Maurice J. Bach', NULL, 1),
(3015, 'The Design of the UNIX Operating System', NULL, 'Prentice-Hall of India', 'Maurice J. Bach', NULL, 1),
(3016, 'The Design of the UNIX Operating System', NULL, 'Prentice-Hall of India', 'Maurice J. Bach', NULL, 1),
(3017, 'UNIX: Concepts & Applications', '2nd', 'Tata McGraw-Hill Publishing Company', 'Sumitabha Das', NULL, 1),
(3018, 'UNIX Network Programming Volume 2', '2nd', 'Pearson Education', 'W. Richard Stevens', NULL, 1),
(3019, 'Operating Systems', '1st', 'Technical Publications', 'I. A. Dhotre', NULL, 1),
(3020, 'Advanced Concepts in Operating Systems', NULL, 'Tata McGraw-Hill Publishing Company', 'Mukesh Singhal', 'Niranjan G. Shivaratri', 1),
(3021, 'Advanced Concepts in Operating Systems', NULL, 'Tata McGraw-Hill Publishing Company', 'Mukesh Singhal', 'Niranjan G. Shivaratri', 1),
(3022, 'Advanced Concepts in Operating Systems', NULL, 'Tata McGraw-Hill Publishing Company', 'Mukesh Singhal', 'Niranjan G. Shivaratri', 1),
(3023, 'The UNIX Programming Environment', NULL, 'Prentice-Hall of India', 'Brian W. Kernighan', 'Rob Pike', 1),
(3024, 'The Design of the UNIX Operating System', '7th', 'Pearson Education', 'Maurice J. Bach', NULL, 1),
(3025, 'Distributed Operating Systems and Algorithms', NULL, 'Addison-Wesley', 'Randy Chow', 'Theodore Johnson', 1),
(3026, 'Modern Operating Systems', '1st', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', NULL, 1),
(3027, 'Modern Operating Systems', '1st', 'Prentice-Hall of India', 'Andrew S. Tanenbaum', NULL, 1),
(3028, 'Advanced Concepts in Operating Systems', NULL, 'McGraw Hill Education', 'Mukesh Singhal', 'Niranjan G. Shivaratri', 1),
(3029, 'Advanced Concepts in Operating Systems', NULL, 'McGraw Hill Education', 'Mukesh Singhal', 'Niranjan G. Shivaratri', 1),
(3030, 'Advanced Concepts in Operating Systems', NULL, 'McGraw Hill Education', 'Mukesh Singhal', 'Niranjan G. Shivaratri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_3_row_2`
--

CREATE TABLE `section_3_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(83) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(35) NOT NULL,
  `Author1` varchar(18) DEFAULT NULL,
  `Author2` varchar(17) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_3_row_2`
--

INSERT INTO `section_3_row_2` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(3031, 'Professional Android 4 Application Development', NULL, 'Wiley India', 'Reto Meier', NULL, 1),
(3032, 'Professional Android 4 Application Development', NULL, 'Wiley India', 'Reto Meier', NULL, 1),
(3033, 'Professional Android 4 Application Development', NULL, 'Wiley India', 'Reto Meier', NULL, 1),
(3034, 'Professional Android 4 Application Development', NULL, 'Wiley India', 'Reto Meier', NULL, 1),
(3035, 'Pro Android Flash', NULL, 'Springer', 'Stephen Chin', 'Dean Iverson', 1),
(3036, 'Beginning Android Application Development', NULL, 'Wiley India', 'Wei-Meng Lee', NULL, 1),
(3037, 'Solaris Performance and Tools', '1st', 'Pearson Education', 'Richard McDougall', 'Jim Mauro', 1),
(3038, 'Programming Windows with MFC', '2nd', 'Microsoft Press', 'Jeff Prosise', NULL, 1),
(3039, 'iOS 7 Programming Fundamentals', '1st', 'Shroff Publishers & Distributors', 'Matt Neuburg', NULL, 1),
(3040, 'Real-Time Systems', NULL, 'Tata McGraw-Hill Publishing Company', 'C. M. Krishna', 'Kang G. Shin', 1),
(3041, 'Android Wireless Application Development Volume 1: Android Essentials', '3rd', 'Pearson Education', 'Lauren Darcey', 'Shane Conder', 1),
(3042, 'Compilers Principles, Techniques and Tools', '2nd', 'Pearson Education', 'Alfred V. Aho', 'Monica S. Lam', 1),
(3043, 'Compilers Principles, Techniques and Tools', '2nd', 'Pearson Education', 'Alfred V. Aho', 'Monica S. Lam', 1),
(3044, 'Operating Systems', NULL, 'Cognizant Technology Solutions', NULL, NULL, 1),
(3045, 'Solaris 7 System Administration I (SA-237 / Volume 1 of 2)', NULL, 'Sun microsystems', NULL, NULL, 1),
(3046, 'Fundamentals of Solaris 8 Operating Enivironment for System Administrators (SA-118)', NULL, 'Sun microsystems', NULL, NULL, 1),
(3047, 'Solaris 7 System Administration I (SA-237 / Volume 2 of 2)', NULL, 'Sun microsystems', NULL, NULL, 1),
(3048, 'Introduction to the Theory of Computation', '2nd', 'Cengage Learning', 'Michael Sipser', NULL, 1),
(3049, 'Compiler Design', NULL, 'Oxford Higher Education', 'K. Muneeswaran', NULL, 1),
(3050, 'Languages and Machines An Introduction to the Theory of Computer Science', '3rd', 'Pearson Education', 'Thomas A. Sudkamp', NULL, 1),
(3051, 'Introduction to Languages and Theory of Computation', '3rd', 'McGraw Hill Education', 'John C Martin', NULL, 1),
(3052, 'Introduction to Automata Theory, Languages, and Computation', '3rd', 'Pearson Education', 'John E. Hopcroft', 'Rajeev Motwani', 1),
(3053, 'Introduction to Automata Theory, Languages, and Computation', '3rd', 'Pearson Education', 'John E. Hopcroft', 'Rajeev Motwani', 1),
(3054, 'Introduction to Automata Theory, Languages, and Computation', '3rd', 'Pearson Education', 'John E. Hopcroft', 'Rajeev Motwani', 1),
(3055, 'Compilers Principles, Techniques and Tools', '2nd', 'Pearson Education', 'Alfred V. Aho', 'Monica S. Lam', 1),
(3056, 'Theory of Computer Science (Automata, Languages and Computation)', '2nd', 'Prentice-Hall of India', 'K. L. P. Mishra', 'N. Chandrasekaran', 1),
(3057, 'Compilers Principles, Techniques and Tools', '2nd', 'Pearson Education', 'Alfred V. Aho', 'Monica S. Lam', 1),
(3058, 'Compilers Principles, Techniques and Tools', '2nd', 'Pearson Education', 'Alfred V. Aho', 'Monica S. Lam', 1),
(3059, 'Introduction to Languages and Theory of Computation', '3rd', 'Tata McGraw-Hill Publishing Company', 'John C Martin', NULL, 1),
(3060, 'Introduction to Languages and Theory of Computation', '3rd', 'Tata McGraw-Hill Publishing Company', 'John C Martin', NULL, 1),
(3061, 'Introduction to languages and Theory of Computation', '3rd', 'Tata McGraw-Hill Publishing Company', 'John C Martin', NULL, 1),
(3062, 'Formal Languages and Automata Theory', NULL, 'Oxford Higher Education', 'C. K. Nagpal', NULL, 1),
(3063, 'Advanced Compiler Design and Implementation', NULL, 'Morgan Kaufmann', 'Steven S. Muchnick', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_3_row_3`
--

CREATE TABLE `section_3_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(107) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(35) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_3_row_3`
--

INSERT INTO `section_3_row_3` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(3064, 'Object-Oriented Software Engineering', NULL, 'Tata McGraw-Hill Publishing Company', 'Timothy C. Lethbridge', 'Robert Laganiere', 1),
(3065, 'Object-Oriented Analysis, Design and Implementation', NULL, 'Universities Press', 'Brahma Dathan', 'Sarnath Ramnath', 1),
(3066, 'UML and C++ A Practical Guide to Object Oriented Development', NULL, 'Prentice-Hall of India', 'Richard C. Lee', 'William M. Tepfenhart', 1),
(3067, 'Applying UML and Patterns', '2nd', 'Pearson Education', 'Craig Larman', NULL, 1),
(3068, 'Information Systems Analysis and Design A Modern Approach to Systems Development', NULL, 'New Age International Publishers', 'Ram Bansal Vigyacharya', NULL, 1),
(3069, 'Object-Oriented Systems Analysis and Design using UML', '2nd', 'McGraw Hill Education', 'Simon Bennett', 'Steve McRobb', 1),
(3070, 'Object-Oriented Modelling and design', NULL, 'Prentice-Hall of India', 'James Rumbaugh', 'Michael Blaha', 1),
(3071, 'Object-Oriented Modelling and design', NULL, 'Prentice-Hall of India', 'James Rumbaugh', 'Michael Blaha', 1),
(3072, 'Component-Based Technology', '1st', 'Wiley India', 'G. Sudha Sadasivam', NULL, 1),
(3073, 'Object-Oriented Design and Patterns', NULL, 'John Wiley & Sons', 'Cay Horstmann', NULL, 1),
(3074, 'Object-Oriented Database Design', NULL, 'Morgan Kaufmann', 'Jan L. Harrington', NULL, 1),
(3075, 'Elements of Systems Analysis', '4th', 'Galgotia Booksource', 'Marvin Gore', 'John W. Stubbe', 1),
(3076, 'Object-Oriented Methods A Foundation', NULL, 'Prentice-Hall International', 'James Martin', 'James J. Odell', 1),
(3077, 'Object-oriented Systems Development', NULL, 'McGraw Hill Education', 'Ali Bahrami', NULL, 1),
(3078, 'Automated Software Testing Introduction, Management, and Performance', NULL, 'Addison-Wesley', 'Elfriede Dustin', 'Jeff Raska', 1),
(3079, 'Managing the Testing Process', NULL, 'Microsoft Press', 'Rex Black', NULL, 1),
(3080, 'VLSI Design Techniques for Analog and Digital Circuits', NULL, 'McGraw Hill Education', 'Randall L. Geiger', 'Phillip E. Allen', 1),
(3081, 'An Introduction to Digital Computer Design', '3rd', 'Prentice-Hall of India', 'V. Rajaraman', 'T. Radhakrishnan', 1),
(3082, 'Object Models Strategies, Patterns and Applications', NULL, 'Prentice-Hall International', 'Peter Coad', NULL, 1),
(3083, 'Object-Oriented Systems Development', NULL, 'Tata McGraw-Hill Publishing Company', 'Ali Bahrami', NULL, 1),
(3084, 'Applying UML and Patterns An Introduction to Object-Oriented Analysis and Design and Interative Development', '5th', 'Pearson Education', 'Craig Larman', NULL, 1),
(3085, 'Object-Oriented Systems Development', NULL, 'McGraw Hill Education', 'Ali Bahrami', NULL, 1),
(3086, 'Object-Oriented Systems Development', NULL, 'Tata McGraw-Hill Publishing Company', 'Ali Bahrami', NULL, 1),
(3087, 'The Internet of Things Key Applications and Protocols', NULL, 'Wiley India', 'Olivier Hersent', 'David Boswarthick', 1),
(3088, 'The Internet of Things Key Applications and Protocols', NULL, 'Wiley India', 'Olivier Hersent', 'David Boswarthick', 1),
(3089, 'Internet of Things A Hands-On Approach', NULL, 'Universities Press', 'Arshdeep Bahga', 'Vijay Madisetti', 1),
(3090, 'Building Internet of Things with the Arduino', NULL, 'Charalampos Doukas', 'Charalampos Doukas', NULL, 1),
(3091, 'Component Software Beyond Object-Oriented Programming', '2nd', 'Pearson Education', 'Clemens Szyperski', 'Dominik Gruntz', 1),
(3092, 'Object-Oriented Systems Analysis and Design using UML', NULL, 'McGraw Hill Education', 'Simon Bennett', 'Steve McRobb', 1),
(3093, 'Systems Analysis and Design Methods', '5th', 'Tata McGraw-Hill Publishing Company', 'Jeffrey L. Whitten', 'Lonnie D. Bentley', 1),
(3094, 'Electronic Devices and Circuits', '4th', 'Prentice-Hall International', 'Theodore F. Bogart, Jr.', NULL, 1),
(3095, 'Digital Principles and Applications', '4th', 'Tata McGraw-Hill Publishing Company', 'Albert Paul Malvino', 'Donald P. Leach', 1),
(3096, 'Fundamentals of Logic Design', '4th', 'Jaico Publishing House', 'Charles H. Roth, Jr.', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_3_upper_cupboard`
--

CREATE TABLE `section_3_upper_cupboard` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(41) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(35) NOT NULL,
  `Author1` varchar(20) NOT NULL,
  `Author2` varchar(17) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_3_upper_cupboard`
--

INSERT INTO `section_3_upper_cupboard` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(3097, 'SHELL Programming in 14 Days', NULL, 'Tech Media', 'Kamran Hussain', NULL, 1),
(3098, 'UNIX User\'s Guide', NULL, 'Osborne McGraw-Hill', 'Rebecca Thomas', 'Jean Yates', 1),
(3099, 'Beginning Linux Programming', '3rd', 'Wiley India', 'Neil Mathew', 'Richard Stones', 1),
(3100, 'Real-Time Systems Theory and Practice', NULL, 'Pearson Education', 'Rajib Mall', NULL, 1),
(3101, 'Real-Time Systems', NULL, 'McGraw Hill International', 'C. M. Krishna', 'Kang G. Shin', 1),
(3102, 'Principles of Compiler Design', NULL, 'Narosa Publishning House', 'Alfred V. Aho', 'Jeffrey D. Ullman', 1),
(3103, 'Operating System Concepts', '6th', 'Wiley India', 'Abraham Silberschatz', 'Peter Baer Galvin', 1),
(3104, 'Systems Programming and Operating Systems', '2nd', 'Tata McGraw-Hill Publishing Company', 'D M Dhamdhere', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_4_row_1`
--

CREATE TABLE `section_4_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `FIELD7` varchar(30) DEFAULT NULL,
  `FIELD8` varchar(30) DEFAULT NULL,
  `FIELD9` varchar(30) DEFAULT NULL,
  `FIELD10` varchar(30) DEFAULT NULL,
  `FIELD11` varchar(30) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_4_row_1`
--

INSERT INTO `section_4_row_1` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `FIELD7`, `FIELD8`, `FIELD9`, `FIELD10`, `FIELD11`, `Available`) VALUES
(4001, 'Fundamentals of Software Engineering', '3rd', 'PHI Learning', 'Rajib Mall', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4002, 'Software Engineering Concepts and Applications', NULL, 'Oxford University Press', 'Subhajith Datta', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4003, 'Software Engineering Concepts and Practices', NULL, 'Cengage Learning', 'Ugrasen Suman', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4004, 'Professional Ethics', NULL, 'Anuradha Agencies', 'Dr. K. R. Govindan', 'S. Senthilkumar', NULL, NULL, NULL, NULL, NULL, 1),
(4005, 'The Six Sigma Way', NULL, 'McGraw-Hill', 'Peter S. Pande', 'Robert P. Neuman', NULL, NULL, NULL, NULL, NULL, 1),
(4006, 'Management Information Systems Conceptual Foundations, Structure and Development', '2nd', 'Tata McGraw-Hill', 'Gordon B. Davis', 'Margrethe H. Olson', NULL, NULL, NULL, NULL, NULL, 1),
(4007, 'Software Engineering Concepts', NULL, 'Tata McGraw-Hill', 'Richard E. Fairley', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4008, 'Software Requirements Objects, Functions and States', NULL, 'Prentice-Hall International', 'Alan M. Davis', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4009, 'Managing Software Requirements', '2nd', 'Pearson Education', 'Dean Leffingwell', 'Don Widrig', NULL, NULL, NULL, NULL, NULL, 1),
(4010, 'Information Technology in Business', '2nd', 'Prentice-Hall International', 'James A. Senn', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4011, 'Managing Global Software Projects', NULL, 'Tata McGraw-Hill', 'Gopalaswamy Ramesh', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4012, 'Managing with Information', '4th', 'Prentice-Hall India', 'Jerome Kanter', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4013, 'ERP Demystified', '2nd', 'Tata McGraw-Hill', 'Alexis Leon', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4014, 'Software Engineering 3 Domains, Requirements and Software Design', NULL, 'Springer', 'Dines Bjørner', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4015, 'Introduction to Management', '10th', 'Wiley-India', 'John R. Schermerhorn', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4016, 'Enterprise Resource Planning Concepts and Practice', NULL, 'Prentice-Hall India', 'Vinod Kumar Garg', 'N. K. Venkitakrishnan', NULL, NULL, NULL, NULL, NULL, 1),
(4017, 'Managing Software Development Projects', '2nd', 'John Wiley & Sons', 'Neal Whitten', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4018, 'Enterprise Resource Planning Concepts and Practice', '2nd', 'Prentice-Hall India', 'Vinod Kumar Garg', 'N. K. Venkitakrishnan', NULL, NULL, NULL, NULL, NULL, 1),
(4019, 'Essentials of Management', '5th', 'Tata McGraw-Hill', 'Harold Koontz', 'Heinz Weihrich', NULL, NULL, NULL, NULL, NULL, 1),
(4020, 'Software Engineering Theory and Practice', NULL, 'Prentice-Hall International', 'Shari Lawrence Pfleeger', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4021, 'Software Engineering Concepts', NULL, 'Tata McGraw-Hill', 'Richard E. Fairley', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4022, 'CMM in Practice Processes for Executing Software Projects at Infosys', NULL, 'Addison-Wesley', 'Pankaj Jalote', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4023, 'Ethics in Information Technology', '4th', 'Cengage Learning', 'George W. Reynolds', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4024, 'ERPWARE ERP Implementation Framework', NULL, 'Prentice-Hall India', 'Vinod Kumar Garg', 'N. K. Venkitakrishnan', NULL, NULL, NULL, NULL, NULL, 1),
(4025, 'Applied Software Project Management', NULL, 'Shroff Publishers & Distributors', 'Andrew Stellman', 'Jennifer Greene', NULL, NULL, NULL, NULL, NULL, 1),
(4026, 'Software Requirements and Estimation', NULL, 'Tata McGraw-Hill', 'Swapna Kishore', 'Rajesh Naik', NULL, NULL, NULL, NULL, NULL, 1),
(4027, 'IBM PC Assembly Language and Programming', '5th', 'Pearson Education', 'Peter Abel', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4028, 'Principles of Management', NULL, 'Tata McGraw-Hill', 'Harold Koontz', 'Heinz Weihrich', NULL, NULL, NULL, NULL, NULL, 1),
(4029, 'Software Project Management', '5th', 'McGraw-Hill', 'Bob Hughes', 'Mike Cotterell', NULL, NULL, NULL, NULL, NULL, 1),
(4030, 'Effective Methods for Software Testing', '2nd', 'John Wiley & Sons', 'William E. Perry', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4031, 'Software Reuse Architecture, Process and Organization for Business Success', NULL, 'Pearson Education Asia', 'Ivar Jacobson', 'Martin Griss', NULL, NULL, NULL, NULL, NULL, 1),
(4032, 'Software Engineering A Practicioner\'s Approach', '5th', 'McGraw-Hill International', 'Roger S. Pressman', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4033, 'Embedded Realtime Systems Programming', NULL, 'McGraw-Hill', 'Sriram V Iyer', 'Pankaj Gupta', NULL, NULL, NULL, NULL, NULL, 1),
(4034, 'Principles of Management', NULL, 'Tata McGraw-Hill', 'Harold Koontz', 'Heinz Weihrich', NULL, NULL, NULL, NULL, NULL, 1),
(4035, 'Managing the Software Process', NULL, 'Pearson Education Asia', 'Watts S. Humphrey', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4036, 'An Integrated Approach to Software Engineering', '3rd', 'Narosa Publishing House', 'Pankaj Jalote', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4037, 'Software Engineering Concepts', NULL, 'Tata McGraw-Hill', 'Richard E. Fairley', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_4_row_2`
--

CREATE TABLE `section_4_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `FIELD7` varchar(30) DEFAULT NULL,
  `FIELD8` varchar(30) DEFAULT NULL,
  `FIELD9` varchar(30) DEFAULT NULL,
  `FIELD10` varchar(30) DEFAULT NULL,
  `FIELD11` varchar(30) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_4_row_2`
--

INSERT INTO `section_4_row_2` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `FIELD7`, `FIELD8`, `FIELD9`, `FIELD10`, `FIELD11`, `Available`) VALUES
(4038, 'The Intel Microprocessors', '6th', 'Pearson Education', 'Barry B.Brey', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4039, 'Microprocessors and Interfacing Programming and Hardware', '2nd', 'Tata-McGraw Hill', 'Douglas V.Hall', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4040, 'Microprocessors and Interfacing Programming and Hardware', '2nd', 'Tata-McGraw Hill', 'Douglas V.Hall', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4041, 'Microprocessors and Interfacing Programming and Hardware', '2nd', 'Tata-McGraw Hill', 'Douglas V.Hall', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4042, 'Professional Multicore Programming', NULL, 'Wiley-India', 'Cameron Hughes', 'Tracey Hughes', NULL, NULL, NULL, NULL, NULL, 1),
(4043, 'Computer Organization and Architecture Designing for Performance', '9th', 'Pearson', 'William Stallings', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4044, 'Protocols and Architectures for Wireless Sensor Networks', NULL, 'Wiley', 'Holger Karl', 'Andreas Willig', NULL, NULL, NULL, NULL, NULL, 1),
(4045, 'Microprocessors and its Applications', '1st', 'RBA Publications', 'A.Nagoor Kani', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4046, 'The 8051 Microcontroller and Embedded Systems', NULL, 'Pearson Education Asia', 'Muhammad Ali Mazidi', 'Janice Gillispie Mazi', NULL, NULL, NULL, NULL, NULL, 1),
(4047, 'Embedded Systems', NULL, 'Charulatha Publications', 'A.Jameer Basha', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4048, 'CUDA Programming A Developers guide to Parallel Computing with GPUs', NULL, 'Morgan Kaufmann', 'Shane Cook', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4049, 'Low Power CMOS VLSI Circuit Design', NULL, 'Wiley-India', 'Kaushik Roy', 'Sharat C.Prasad', NULL, NULL, NULL, NULL, NULL, 1),
(4050, 'Intoduction to VLSI Design', NULL, 'McGraw-Hill', 'Eugene D.Fabricius', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4051, 'Computer System Architecture', '2nd', 'Prentice-Hall Of India', 'M.Morris Mano', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4052, 'Computer Architecture and Parallel Processing', NULL, 'McGraw-Hill', 'Kai Hwang', 'Faye A.Briggs', NULL, NULL, NULL, NULL, NULL, 1),
(4053, 'The 8051 Microcontroller and Embedded Systems', '2nd', 'Pearson Education Asia', 'Muhammad Ali Mazidi', 'Janice Gillispie Mazi', NULL, NULL, NULL, NULL, NULL, 1),
(4054, 'Computer Systems Design and Architecture', NULL, 'Pearson Education Asia', 'Vincent P.Heuring', 'Harry F.Jordan', NULL, NULL, NULL, NULL, NULL, 1),
(4055, 'Computer Organization and Deisgn', NULL, 'Morgan Kaufmann', 'David A.Patterson', 'John L.Hennessy', NULL, NULL, NULL, NULL, NULL, 1),
(4056, 'Computer Architecture A Quantitative Approach', '5th', 'Morgan Kaufmann', 'David A.Patterson', 'John L.Hennessy', NULL, NULL, NULL, NULL, NULL, 1),
(4057, 'Computer Architecture A Quantitative Approach', '5th', 'Morgan Kaufmann', 'David A.Patterson', 'John L.Hennessy', NULL, NULL, NULL, NULL, NULL, 1),
(4058, 'Computer Architecture and Organization', '3rd', 'Tata-McGraw Hill', 'John P.Hayes', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4059, 'Distributed Component Architecture', NULL, 'Wiley-India', 'G.Sudha Sadasivam', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4060, 'Programming Massively Parallel Processors A Hands-On Approach', '2nd', 'Morgan Kaufmann', 'David B. Kirk', 'Wen-mei W.Hwu', NULL, NULL, NULL, NULL, NULL, 1),
(4061, 'Computer Fundamentals Architecture and Organization', '3rd', 'New Age International', 'B.Ram', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4062, 'Digital Electronics and Microprocessors Problems and Solutions', NULL, 'Tata-McGraw Hill', 'R P Jain', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4063, 'Advanced Microprocessors and Peripherels Architecture,Programming and Interface', NULL, 'Tata-McGraw Hill', 'Ajoy Kumar Roy', 'Kishore M Bhurchandi', NULL, NULL, NULL, NULL, NULL, 1),
(4064, 'Embedded Microcontrollers and Processor Design', NULL, 'Pearson', 'Greg Osborn', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4065, 'Embedded Systems Architecture,Programming and Design', NULL, 'Tata-McGraw Hill', 'Raj Kamal', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4066, 'The 8086 Microprocessors Programming & Interfacing the PC', NULL, 'Penram International', 'Kenneth J.Ayala', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4067, 'Semiconductor Optoelectronic Devices', NULL, 'Prentice-Hall Of India', 'Pallab Bhattacharya', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4068, 'Advanced Microprocessors and Microcontrollers', NULL, 'New Age International', 'B.P Singh', 'Renu Singh', NULL, NULL, NULL, NULL, NULL, 1),
(4069, 'Programming and Customizing the 8051 Microcontroller', NULL, 'Tata-McGraw Hill', 'Myke Predko', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_4_row_3`
--

CREATE TABLE `section_4_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `FIELD7` varchar(30) DEFAULT NULL,
  `FIELD8` varchar(30) DEFAULT NULL,
  `FIELD9` varchar(30) DEFAULT NULL,
  `FIELD10` varchar(30) DEFAULT NULL,
  `FIELD11` varchar(30) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_4_row_3`
--

INSERT INTO `section_4_row_3` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `FIELD7`, `FIELD8`, `FIELD9`, `FIELD10`, `FIELD11`, `Available`) VALUES
(4070, 'Verilog HDL A Guide to Digital Design and Synthesis', '2nd', 'Pearson', 'Samir Palnitkar', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4071, 'Verilog HDL A Guide to Digital Design and Synthesis', '2nd', 'Pearson', 'Samir Palnitkar', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4072, 'Verilog HDL A Guide to Digital Design and Synthesis', '2nd', 'Pearson', 'Samir Palnitkar', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4073, 'Embedded Realtime Systems Programming', NULL, 'Tata McGraw-Hill', 'Sriram V Iyer', 'Pankaj Gupta', NULL, NULL, NULL, NULL, NULL, 1),
(4074, 'VHDL Primer', '3rd', 'Pearson Education Asia', 'J. Bhasker', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4075, 'CMOS VLSI Design A Circuits and Systems Perspective', '3rd', 'Pearson', 'Neil H. E. Weste', 'David Harris', NULL, NULL, NULL, NULL, NULL, 1),
(4076, 'Electro Magnetic Theory and Applications', NULL, 'Tech India Publications', 'Umesh Sinha', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4077, 'Digital Logic and Computer Design', NULL, 'Pearson', 'M. Morris Mano', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4078, 'VLSI Technology', '2nd', 'Tata McGraw-Hill', 'S. M. Sze', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4079, 'Digital Communication', NULL, 'Anuradha Publications', 'K. S. Srinivasan', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4080, 'Electronic Devices and Circuits', NULL, 'John Wiley & Sons', 'Amil K.  Maini', 'Varsha Agrawal', NULL, NULL, NULL, NULL, NULL, 1),
(4081, 'Electronic Communications Systems Fundamentals through Advanced', '4th', 'Pearson Education Asia', 'Wayne Tomasi', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4082, 'An Engineering Approach to Digital Design', NULL, 'Prentice-Hall of India', 'William I. Fletcher', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4083, 'Digital VLSI Design', NULL, 'PHI Learning', 'Ajay Kumar Singh', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4084, 'Electronic Displays Technology, Design and Applications', NULL, 'Tata McGraw-Hill', 'Jerry Whitaker', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4085, 'Electronic Commerce', '2nd', 'Jaico Publishing House', 'Pete Loshin', 'Paul A. Murphy', NULL, NULL, NULL, NULL, NULL, 1),
(4086, 'Electronic Devices and Circuits An Introduction', NULL, 'Prentice-Hall of India', 'Allen Mottershead', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4087, 'Engineering Circuit Analysis', '6th', 'Tata McGraw-Hill', 'W H Hayt', 'J E Kemmerly', NULL, NULL, NULL, NULL, NULL, 1),
(4088, 'Electric Machines', NULL, 'McGraw-Hill', 'D P Kothari', 'I J Nagrath', NULL, NULL, NULL, NULL, NULL, 1),
(4089, 'Electronic Principles', '7th', 'Tata McGraw-Hill', 'Albert Malvino', 'David J Bates', NULL, NULL, NULL, NULL, NULL, 1),
(4090, 'Electronic Devices', '6th', 'Pearson Education', 'Thomas L. Floyd', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4091, 'Electronic Communications', '4th', 'Prentice-Hall of India', 'Dennis Roddy', 'John Coolen', NULL, NULL, NULL, NULL, NULL, 1),
(4092, 'Electronic Displays Technology, Design and Applications', NULL, 'Tata McGraw-Hill', 'Jerry Whitaker', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4093, 'Basic Electrical Engineering', '3rd', 'McGraw-Hill', 'D P Kothari', 'I J Nagrath', NULL, NULL, NULL, NULL, NULL, 1),
(4094, 'Digital Technology Principles and Practice', NULL, 'New Age International', 'Virendr Kumar', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4095, 'Power Electronics Circuits, Devices and Applications', '2nd', 'Prentice-Hall of India', 'Muhammad H. Rashid', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4096, 'Digital Integrated Circuits A Design Perspective', '2nd', 'Prentice-Hall of India', 'Jan M. Rabaey', 'Anantha Chandrakasan', NULL, NULL, NULL, NULL, NULL, 1),
(4097, 'Digital Computer and Fundamentals', '6th', 'Tata McGraw-Hill', 'Thomas C. Bartee', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4098, 'Modern Digital and Analog Communication Systems', '3rd', 'Oxford University Press', 'B. P . Lathi', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4099, 'Digital Communication', NULL, 'Technical Publications', 'Dr. J. S. Chitode', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_5_row_1`
--

CREATE TABLE `section_5_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(64) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(46) NOT NULL,
  `Author1` varchar(21) NOT NULL,
  `Author2` varchar(20) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_5_row_1`
--

INSERT INTO `section_5_row_1` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(5001, 'Cloud Applications Architectures', NULL, 'Shroff Publishers And Distributors', 'George Reese', NULL, 1),
(5002, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5003, 'Grid Computing', NULL, 'Dorling Kindersley', 'Joshy Joseph', 'Craig Fellenstein', 1),
(5004, 'Grid Computing', NULL, 'Dorling Kindersley', 'Joshy Joseph', 'Craig Fellenstein', 1),
(5005, 'Grid Computing: A Practical Guide To Technology And Applications', NULL, 'Firewall Media', 'Ahmar Abbas', NULL, 1),
(5006, 'Grid Computing: A Practical Guide To Technology And Applications', NULL, 'Firewall Media', 'Ahmar Abbas', NULL, 1),
(5007, 'Grid Computing A Research Monograph', NULL, 'Tata McGraw-Hill Education', 'D Janakiram', NULL, 1),
(5008, 'Grid Computing A Research Monograph', NULL, 'Tata McGraw-Hill Education', 'D Janakiram', NULL, 1),
(5009, 'Grid Computing', NULL, 'Dorling Kindersley', 'Joshy Joseph', 'Craig Fellenstein', 1),
(5010, 'Cloud Security A Comprehensive Guide To Secure Cloud Computing', NULL, 'Wiley India', 'Ronald L. Krutz', 'Russell Dean Vines', 1),
(5011, 'Cloud Security And Privacy', NULL, 'Shroff Publishers And Distributors', 'Tim Mather', 'Shahed Latif', 1),
(5012, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5013, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5014, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5015, 'Cloud Computing Technologies And Strategies', NULL, 'CRC Press', 'Brain J.S. Chee', 'Curtis Franklin, Jr.', 1),
(5016, 'A Network Approach To Grid Computing', NULL, 'Wiley India', 'Daniel Minoli', NULL, 1),
(5017, 'Parellel Scientific Comp[uting In C++ And MPI', NULL, 'Press Syndicate Of The University Of Cambridge', 'George Em Karniadakis', 'Robert M. Kirby II', 1),
(5018, 'Distributive Computing Principles And Applications', NULL, 'Pearson Education', 'M. L. Liu', NULL, 1),
(5019, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5020, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5021, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5022, 'Cloud computing and Practical approach', NULL, 'Mcgraw Hill Education', 'Antony T.Velte', 'Toby J.Velte', 1),
(5023, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5024, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5025, 'Cloud Computing Principles, System and Applications', NULL, 'Springer', 'Nick Antonopoulos', 'Lee Gillam', 1),
(5026, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5027, 'Distributed Computing Principles and Applications', NULL, 'Dorling Kindersley', 'M. L. Liu', NULL, 1),
(5028, 'Distributed Systems Principles and Paradigms', '2nd', 'Pearson Education', 'Andrew S.Tanenbaum', 'Maarten Van Steen', 1),
(5029, 'Distributed Algorithms', NULL, 'Elsevier', 'Nancy A.Lynch', NULL, 1),
(5030, 'Practical Distributed processing', NULL, 'Springer', 'Phillip J.Brooke', 'Richard F.Paige', 1),
(5031, 'An introduction to distributed and parallel computing', '2nd', 'Prentice Hall of India', 'Joel M.Crichlow', NULL, 1),
(5032, 'Grid Computing', NULL, 'Dorling Kindersley', 'Joshy Joseph', 'Craig Fellenstein', 1),
(5033, 'Distributed Computing Principles and Applications', NULL, 'Dorling Kindersley', 'M. L. Liu', NULL, 1),
(5034, 'Distributed Computing Principles and Applications', NULL, 'Dorling Kindersley', 'M. L. Liu', NULL, 1),
(5035, 'Grid Computing: A Practical Guide To Technology And Applications', NULL, 'Firewall Media', 'Ahmar Abbas', NULL, 1),
(5036, 'Grid Computing', NULL, 'Dorling Kindersley', 'Joshy Joseph', 'Craig Fellenstein', 1),
(5037, 'Grid Computing', NULL, 'Dorling Kindersley', 'Joshy Joseph', 'Craig Fellenstein', 1),
(5038, 'Grid Computing for developers', NULL, 'Charles River Media', 'Vlamdimir Silva', NULL, 1),
(5039, 'The grid 2', '2nd', 'Elsevier', 'Ian Foster', 'Carl  Kesselman', 1),
(5040, 'Cloud Security A Comprehensive Guide To Secure Cloud Computing', NULL, 'Wiley India', 'Ronald L. Krutz', 'Russell Dean Vines', 1),
(5041, 'Building Applications In The Cloud', NULL, 'Dorling Kindersley', 'Christopher M. Moyer', NULL, 1),
(5042, 'To The Cloud Cloud Powering An Enterprise', NULL, 'Tata McGraw-Hill Education', 'Pankaj Arora', 'Raj Biyani', 1),
(5043, 'Cloud Computing', NULL, 'Pearson India Education', 'Michael Miller', NULL, 1),
(5044, 'Cloud computing and Practical approach', NULL, 'Tata McGraw-Hill Education', 'Antony T.Velte', 'Toby J.Velte', 1),
(5045, 'Cloud Computing With The Windows Azure Platform', NULL, 'Wiley India', 'Roger Jennings', NULL, 1),
(5046, 'Grid And Cluster Computing', NULL, 'PHI Learning', 'C.S.R Prabhu', NULL, 1),
(5047, 'Semantic Grid Model, Methodology and Applications', NULL, 'Springer', 'Zhaohui Wu', 'Huajun Chen', 1),
(5048, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5049, 'Cloud computing and Practical approach', NULL, 'Tata McGraw-Hill Education', 'Antony T.Velte', 'Toby J.Velte', 1),
(5050, 'Cloud Computing', NULL, 'Dorling Kindersley', 'Michael Miller', NULL, 1),
(5051, 'Cloud Computing Implementation, Management, And Security', NULL, 'CRC Press', 'John W. Rittinghouse', 'James F. Ransome', 1),
(5052, 'Cloud Computing Technologies And Strategies', NULL, 'CRC Press', 'Brain J.S. Chee', 'Curtis Franklin, Jr.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_5_row_2`
--

CREATE TABLE `section_5_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(61) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(25) NOT NULL,
  `Author1` varchar(21) NOT NULL,
  `Author2` varchar(14) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_5_row_2`
--

INSERT INTO `section_5_row_2` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(5053, 'Fuzzy Logic with engineering Applications', '2nd', 'Wiley India', 'Timothy J.Ross', NULL, 1),
(5054, 'Fuzzy Logic with engineering Applications', NULL, 'McGraw Hill International', 'Timothy J.Ross', NULL, 1),
(5055, 'Genetic Algorithms in search,Optimization and Machine leaning', NULL, 'Dorling Kindersley', 'David E.Goldberg', NULL, 1),
(5056, 'Decision Support Systems and Intelligent Systems', '6th', 'Pearon Education', 'Efraim Turban', 'Jay E.Aronson', 1),
(5057, 'Introduction to fuzzy logic using matlab', NULL, 'Springer', 'S.Sumathi', 'S.N.Deepa', 1),
(5058, 'Artificial Intelligence a modern approach', '2nd', 'Dorling Kindersley', 'Staurt Russel', 'Peter Norvig', 1),
(5059, 'Artificial Intelligence a modern approach', '2nd', 'Dorling Kindersley', 'Staurt Russel', 'Peter Norvig', 1),
(5060, 'Neural networks and Learning Machines', '3rd', 'PHI learning', 'Simon Haykin', NULL, 1),
(5061, 'Artificial Intelligence a modern approach', '3rd', 'Dorling Kindersley', 'Staurt Russel', 'Peter Norvig', 1),
(5062, 'Artificial Intelligence a modern approach', '2nd', 'Dorling Kindersley', 'Staurt Russel', 'Peter Norvig', 1),
(5063, 'Artificial Intelligence a modern approach', '2nd', 'Dorling Kindersley', 'Staurt Russel', 'Peter Norvig', 1),
(5064, 'Intelligent Control and Innovative Computing', NULL, 'Springer', 'Sio long Ao.', 'Castillo', 1),
(5065, 'Artificial Intelligence a modern approach', '3rd', 'Dorling Kindersley', 'Staurt Russel', 'Peter Norvig', 1),
(5066, 'Fuzzy Logic Intelligence,Control and Information', NULL, 'Dorling Kindersley', 'John Yen', 'Reza Langari', 1),
(5067, 'Fuzzy Logic Intelligence,Control and Information', NULL, 'Dorling Kindersley', 'John Yen', 'Reza Langari', 1),
(5068, 'Programming Collective Intelligence', NULL, 'O\'Reily', 'Toby Segaran', NULL, 1),
(5069, 'Decision Support Systems and business Intelligence Systems', '9th', 'Dorling Kindersley', 'Efraim Turban', 'Ramesh Sharda', 1),
(5070, 'Learning Geospatial Analysis with Python', NULL, 'Packt Publishing', 'Joel Lawhead', NULL, 1),
(5071, 'Artificial Intelligence', NULL, 'Charulatha Publications', 'Sudha sridhar', NULL, 1),
(5072, 'Artificial intelligence a new synthesis', NULL, 'Elsevier', 'Nils J.Nilsson', NULL, 1),
(5073, 'Introduction to Artificial Intelligence', NULL, 'Pearson Education', 'Eugene Charniak', 'Drew McDermott', 1),
(5074, 'Introduction to Artificial Intelligence', NULL, 'Dorling Kindersley', 'Eugene Charniak', 'Drew McDermott', 1),
(5075, 'Artificial Intelligence', '3rd', 'Pearson Education', 'Patrick Henry Winston', NULL, 1),
(5076, 'Decision Support And Expert Systems', NULL, 'Prentice Hall', 'Efraim Turban', NULL, 1),
(5077, 'Arificial Intelligence A New Synthesis', NULL, 'Harcourt', 'Nils J.Nilsson', NULL, 1),
(5078, 'Introduction To Machine Learning', NULL, 'Prentice Hall', 'Ethem Alpaydin', NULL, 1),
(5079, 'Natural Language Processing', NULL, 'Prentice Hall', 'Akshar Bharathi', 'Rajeev Sangal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_5_row_3`
--

CREATE TABLE `section_5_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(79) NOT NULL,
  `Edition` varchar(3) DEFAULT NULL,
  `Publisher` varchar(27) NOT NULL,
  `Author1` varchar(26) NOT NULL,
  `Author2` varchar(19) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_5_row_3`
--

INSERT INTO `section_5_row_3` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(5080, 'Ubiquitous Computing', NULL, 'Wiley India', 'Stefan Posland', NULL, 1),
(5081, 'Priciples Of Mobile Computing', NULL, 'Springer', 'Uwe Hansmann', 'Lothar Merk', 1),
(5082, 'Pervasive Computing Technology And Architecture Of Mobile Internet Applications', NULL, 'Dorley kindersley', 'Horst Henn', 'Stefan Hepper', 1),
(5083, 'Pervasive Computing Technology And Architecture Of Mobile Internet Applications', NULL, 'Dorley kindersley', 'Horst Henn', 'Stefan Hepper', 1),
(5084, 'Pervasive Computing Technology And Architecture Of Mobile Internet Applications', NULL, 'Dorley kindersley', 'Horst Henn', 'Stefan Hepper', 1),
(5085, 'Pervasive Computing Technology And Architecture Of Mobile Internet Applications', NULL, 'Dorley kindersley', 'Horst Henn', 'Stefan Hepper', 1),
(5086, 'Pervasive Computing Technology And Architecture Of Mobile Internet Applications', NULL, 'Dorley kindersley', 'Horst Henn', 'Stefan Hepper', 1),
(5087, 'Neural Network Design', NULL, 'Cengage Learning', 'Hagan Demuth Baele', NULL, 1),
(5088, 'Neural Engineering', NULL, 'Prentice Hall India', 'Chris Eliasmith', 'Charles H. Anderson', 1),
(5089, 'Neuro-Fuzzy And Soft Computing', NULL, 'Pearson Education', 'E. Mizutani', 'J.S.R Jang', 1),
(5090, 'Inroduction To Artificial Neural Networks', NULL, 'Vikas', 'SN Sivanandam', 'M Paulraj', 1),
(5091, 'Neural Network Design', NULL, 'Cengage Learning', 'Hagan Demuth Baele', NULL, 1),
(5092, 'Information Storage and Management', '2nd', 'Wiley India', 'Somasundaram Gnanasundaram', 'Alok Shrivastava', 1),
(5093, 'Mobile commerce', NULL, 'PHI learning', 'Karabi Bandyopadhyay', NULL, 1),
(5094, 'Mobile commerce', NULL, 'PHI learning', 'Karabi Bandyopadhyay', NULL, 1),
(5095, 'Pervasive Computing Technology And Architecture Of Mobile Internet Applications', NULL, 'Dorley kindersley', 'Horst Henn', 'Stefan Hepper', 1),
(5096, 'Mobile Computing Theory and practice', NULL, 'Dorley kindersley', 'Kumkum garg', NULL, 1),
(5097, 'Management Information Systems', '7th', 'Prentice Hall India', 'Kenneth C.Laudon', 'Jane P.Laudon', 1),
(5098, 'Information Systems a management perspective', '3rd', 'Pearson Education', 'Steven alter', NULL, 1),
(5099, 'Information technology the breaking wave', NULL, 'Tata Mcgraw hill publishing', 'Kim Foley', 'Kunal Sen', 1),
(5100, 'Neural Networks a classroom approach', '2nd', 'Tata Mcgraw hill education', 'Sathish Kumar', NULL, 1),
(5101, 'System Software an introduction to systems programming', '3rd', 'Addison wesley', 'Leland L.Beck', NULL, 1),
(5102, 'System Software an introduction to systems programming', '3rd', 'Addison wesley', 'Leland L.Beck', NULL, 1),
(5103, 'Real time systems', NULL, 'Mcgraw hill', 'C.M.Krishna', 'Kang G.Shin', 1),
(5104, 'System Software an introduction to systems programming', '3rd', 'Addison wesley', 'Leland L.Beck', NULL, 1),
(5105, 'System Software an introduction to systems programming', '3rd', 'Addison wesley', 'Leland L.Beck', 'D.Manjula', 1),
(5106, 'Principles of Mobile Computing', '2nd', 'Springer', 'Uwe Hansmann', 'Lothar Merk', 1),
(5107, 'Ubiquitous Computing', NULL, 'Wiley India', 'Stefan Posland', NULL, 1),
(5108, 'Handbook of wireless networks', NULL, 'Wiley', 'Ivan Stojmenovic', NULL, 1),
(5109, 'Mobile computing technology ,applications and service creations', '2nd', 'Tata Mcgraw hill publishing', 'Asoke K Talukder', 'Hasan Ahmed', 1),
(5110, 'Mobility processes,computers and agents', NULL, 'Addison Wesley', 'Frederick Douglis', 'Richard Wheeler', 1),
(5111, 'Management Information Systems', '2nd', 'Mcgraw hill', 'Gordon B.Davis', 'Margrethe H.Olson', 1),
(5112, 'Information Systems Architecture', NULL, 'Cengage Learning', 'Stepher D.Burd', NULL, 1),
(5113, 'Information sources,services and systems', NULL, 'PHI learning', 'Gurdev singh', NULL, 1),
(5114, 'Neural networks and Learning Machines', '3rd', 'PHI learning', 'Simon Haykin', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_5_row_4`
--

CREATE TABLE `section_5_row_4` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(63) NOT NULL,
  `Edition` varchar(30) DEFAULT NULL,
  `Publisher` varchar(34) NOT NULL,
  `Author1` varchar(17) NOT NULL,
  `Author2` varchar(17) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_5_row_4`
--

INSERT INTO `section_5_row_4` (`Book_id`, `Book_name`, `Edition`, `Publisher`, `Author1`, `Author2`, `Available`) VALUES
(5115, 'Cloud Security And Privacy', NULL, 'Shroff Publishers And Distributors', 'Tim Mather', 'Shahed Latif', 1),
(5116, 'Grid Computing A Practical Guide To Technology And Applications', NULL, 'Firewall Media', 'Ahmar Abbas', NULL, 1),
(5117, 'The Grid Core Technologies', NULL, 'Wiley India', 'Maozhen Li', 'Mark Baker', 1),
(5118, 'Grid Computing A Practical Guide To Technology And Applications', NULL, 'Tata Mcgraw Hill', 'D Janakiram', NULL, 1),
(5119, 'Grid Computing A Practical Guide To Technology And Applications', NULL, 'Dorling Kindersley', 'Joshly Joseph', 'Craig Fellenstein', 1),
(5120, 'Genetics Algorithms In Search Optimization And Machine Learning', NULL, 'Addiison Wesley', 'David E. Goldberg', NULL, 1),
(5121, 'Neuro-Fuzzy And Soft Computing', NULL, 'PHI learning', 'J.-S.R. Jang', 'E. Mizutani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_6_row_1`
--

CREATE TABLE `section_6_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` tinyint(30) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_6_row_2`
--

CREATE TABLE `section_6_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` varchar(30) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_6_row_3`
--

CREATE TABLE `section_6_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` varchar(30) DEFAULT NULL,
  `Available` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_6_row_4`
--

CREATE TABLE `section_6_row_4` (
  `Book_id` int(11) DEFAULT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(28) NOT NULL,
  `Author1` varchar(21) NOT NULL,
  `Author2` varchar(30) DEFAULT NULL,
  `Author3` varchar(23) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_7_row_1`
--

CREATE TABLE `section_7_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(28) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` varchar(24) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_7_row_2`
--

CREATE TABLE `section_7_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(28) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` varchar(24) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_7_row_3`
--

CREATE TABLE `section_7_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(21) DEFAULT NULL,
  `Author3` varchar(28) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_8_row_1`
--

CREATE TABLE `section_8_row_1` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(23) NOT NULL,
  `Author2` varchar(28) DEFAULT NULL,
  `Author3` varchar(21) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_8_row_2`
--

CREATE TABLE `section_8_row_2` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(32) NOT NULL,
  `Author1` varchar(28) NOT NULL,
  `Author2` varchar(24) DEFAULT NULL,
  `Author3` varchar(21) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_8_row_3`
--

CREATE TABLE `section_8_row_3` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(80) NOT NULL,
  `Edition` varchar(4) DEFAULT NULL,
  `Publisher` varchar(28) NOT NULL,
  `Author1` varchar(32) NOT NULL,
  `Author2` varchar(24) DEFAULT NULL,
  `Author3` varchar(21) DEFAULT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int(6) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `passcode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `staff_name`, `email`, `position`, `passcode`) VALUES
(60746, 'Dr. Dhananjay Kumar', 'dhananjay@annauniv.edu', 'Professor', '60746'),
(60781, 'Dr. Radha Senthilkumar', 'radhasenthilkumar@gmail.com', 'Assistant Professor', '60781'),
(63121, 'Dr. P.Kola Sujatha', 'pkolasujatha@annauniv.edu', 'Assistant Professor', '63121'),
(66493, 'Dr. M.R.Sumalatha', 'sumalatha@annauniv.edu', 'Professor', '66493'),
(67035, 'Dr. B.Lydia Elizabeth', 'lydiajohn@annauniv.edu', 'Assistant Professor', '67035'),
(67046, 'Dr. G.Rajesh', 'gr@annauniv.edu', 'Assistant Professor', '67046'),
(67057, 'Dr. J.Dhalia Sweetlin', 'jdsweetlin@annauniv.edu', 'Assistant Professor', '67057'),
(67417, 'Dr. S.Umamaheswari', 'uma_sai@annauniv.edu', 'Associate Professor', '67417'),
(67584, 'Dr. D.Sangeetha', 'dsangeethabaskaran@gmail.com', 'Assistant Professor', '67584'),
(69531, 'Mrs. M.Hemalatha', 'hemam@annauniv.edu', 'Assistant Professor', '69531'),
(123456, 'pradeesh', 'pradeshgv@gmail.com', 'Student', 'abcdef'),
(700139, 'Dr. C.Sunil Retmin Raj', 'retmin@mitindia.edu', 'Teaching Fellow', '700139'),
(701039, 'Dr. E.Pugazhendhi', 'pugazh.cse@gmail.com', 'Teaching Fellow', '701039'),
(701424, 'Dr. D.Vivekanandan', 'vivek.acm@mitindia.edu', 'Teaching Fellow', '701424'),
(701482, 'Dr. P.Lakshmi Harika', 'lakshmi.harika558@gmail.com', 'Teaching Fellow', '701482'),
(701699, 'Ms. S.Eliza Femi Sherley', 'selizafemisherley@mitindia.edu', 'Teaching Fellow', '701699'),
(701866, 'Ms. P.Jayanthi', 'mail2jayanthi.p@gmail.com', 'Teaching Fellow', '701866'),
(702190, 'Mr. V.Premanand', 'premanandmit@gmail.com', 'Teaching Fellow', '702190'),
(702307, 'Ms. Natheztha Thangaraj', 'nathezhta31@gmail.com', 'Teaching Fellow', '702307'),
(702647, 'Ms. D.Bala Gayathri', 'gayathribalansvg@gmail.com', 'Teaching Fellow', '702647'),
(702648, 'Ms. R.Shanmuga Priya', 'shanmugarajendran2@gmail.com', 'Teaching Fellow', '702648'),
(702814, 'Mr. V.Arulalan', 'arulalanveerappan@gmail.com', 'Teaching Fellow', '702814'),
(702815, 'Ms. T.Manju', 'tvmanju27@gmail.com', 'Teaching Fellow', '702815'),
(702816, 'Ms. P.Seethalakshmi', 'seethalaxmiperumal@gmail.com', 'Teaching Fellow', '702816');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section_3_row_1`
--
ALTER TABLE `section_3_row_1`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_3_row_2`
--
ALTER TABLE `section_3_row_2`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_3_row_3`
--
ALTER TABLE `section_3_row_3`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_3_upper_cupboard`
--
ALTER TABLE `section_3_upper_cupboard`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_4_row_1`
--
ALTER TABLE `section_4_row_1`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_4_row_2`
--
ALTER TABLE `section_4_row_2`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_4_row_3`
--
ALTER TABLE `section_4_row_3`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_5_row_1`
--
ALTER TABLE `section_5_row_1`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_5_row_2`
--
ALTER TABLE `section_5_row_2`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_5_row_3`
--
ALTER TABLE `section_5_row_3`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `section_5_row_4`
--
ALTER TABLE `section_5_row_4`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
