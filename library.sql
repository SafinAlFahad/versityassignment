-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 09:49 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `description`, `column_status`) VALUES
(1, 'Humayun Ahmed', 'Humayun Ahmed was a Bangladeshi novelist, dramatist, screenwriter, filmmaker, songwriter, scholar.', 'ACTIVE'),
(2, 'Kazi Nazrul Islam', 'Kazi Nazrul Islam was a Bengali poet, writer, musician and the national poet of Bangladesh. ', 'ACTIVE'),
(3, 'Rabindranath Thakur', 'Rabindranath Thakur was an Indian polymath – poet, writer, playwright, composer and philosopher.', 'ACTIVE'),
(4, 'Arif Azad', 'Arif azad was a good writer.', 'ACTIVE'),
(5, 'Zahir Raihan', 'Zahir Raihan was a Bangladeshi novelist, writer and filmmaker. ', 'ACTIVE'),
(6, ' Mohammed Zafar Iqbal', 'Muhammed Zafar Iqbal is a Bangladeshi science fiction author, physicist, academic and activist.', 'ACTIVE'),
(7, 'Sadat Hossain', 'Sadat Hossain is a Bangladeshi author, poet, screenwriter, film-maker and novelist.', 'ACTIVE'),
(8, 'E. Balaguruswamy', '', 'ACTIVE'),
(9, 'Forouzan', '', 'ACTIVE'),
(10, 'Dr. Mohammad Kaykobad', '', 'ACTIVE'),
(11, 'Brian W. Kernigham', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `publisher_id` int(15) NOT NULL,
  `language` varchar(20) NOT NULL,
  `number_of_page` varchar(20) NOT NULL,
  `author_id` int(20) NOT NULL,
  `publish_date` date NOT NULL,
  `version` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `category_id` int(20) NOT NULL,
  `description` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `book_type_id` int(20) NOT NULL,
  `buying_price` float NOT NULL,
  `selling_price` double NOT NULL,
  `rent_price` double NOT NULL,
  `location` varchar(20) NOT NULL,
  `fine` varchar(24) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `quantity`, `publisher_id`, `language`, `number_of_page`, `author_id`, `publish_date`, `version`, `date_time`, `category_id`, `description`, `status`, `book_type_id`, `buying_price`, `selling_price`, `rent_price`, `location`, `fine`, `column_status`) VALUES
(1, 'Maa, Maa,Maa Abong Baba', '1234', 0, 1, 'Bengali', '200', 4, '2021-03-15', '1', '2021-03-01 19:48:06', 1, '', 'Available', 1, 250, 250, 260, 'Cumilla', '20', 'ACTIVE'),
(2, 'Jibon Jekhane Jemon', '12367', 0, 1, 'Bengali', '235', 4, '2020-11-01', '2', '2020-10-24 19:52:17', 1, '', 'Available', 1, 240, 240, 250, 'dhaka', '20', 'ACTIVE'),
(3, 'Deyal', '8765', 0, 3, 'Bengali', '300', 1, '2020-03-18', '3', '2021-03-09 19:54:39', 3, '', 'Available', 2, 260, 260, 270, 'chittagong', '10', 'ACTIVE'),
(4, 'Oppekha', '233', 0, 4, 'Bengali', '150', 1, '2021-05-29', '5', '2021-04-25 13:32:39', 1, '', 'Available', 1, 300, 300, 320, 'Chittagong', '30', 'ACTIVE'),
(5, 'Ognibina', '2339', 0, 2, 'Bengali', '400', 2, '2021-05-14', '5', '2021-04-25 13:35:14', 3, '', 'Available', 2, 350, 360, 370, 'Cumilla', '15', 'ACTIVE'),
(6, 'Ordhobritto', '7889', 0, 5, 'Bengali', '200', 7, '2021-04-25', '1', '2021-04-25 13:37:30', 4, '', 'Available', 1, 280, 280, 290, 'Cumila', '20', 'ACTIVE'),
(7, 'Dipu Number Two', '9870', 0, 4, 'Bengali', '320', 6, '2021-03-28', '1', '2021-04-28 13:20:41', 1, '', 'Available', 1, 345, 345, 365, 'cumilla', '20', 'ACTIVE'),
(8, 'Ami Topu', '2030', 0, 2, 'Bengali', '240', 6, '2005-04-10', '1', '2021-06-20 13:37:21', 1, '', 'Available', 1, 200, 200, 220, 'Cumila', '20', 'ACTIVE'),
(9, 'Numerical Methods', '9080', 0, 7, 'English', '600', 8, '2020-10-01', '4th', '2021-06-26 21:52:23', 9, '', 'Available', 6, 1098, 1098, 1120, 'Dhaka', '20', 'ACTIVE'),
(10, 'Data Communication & Networkin', '7080', 0, 7, 'English', '750', 9, '2020-04-13', '6th', '2021-06-26 21:56:45', 9, '', 'Available', 6, 1000, 1000, 1020, 'Cumilla', '35', 'ACTIVE'),
(11, 'Data Communication & Networkin', '7080', 0, 7, 'English', '750', 9, '2020-04-13', '6th', '2021-06-26 21:56:45', 9, '', 'Available', 6, 1000, 1000, 1020, 'Cumilla', '35', 'ACTIVE'),
(12, 'C Programming Language', '4050', 0, 7, 'English', '800', 11, '2019-09-06', '5th', '2021-06-26 21:59:12', 9, '', 'Available', 6, 600, 600, 630, 'Dhaka', '25', 'ACTIVE'),
(13, 'C Plus Plus', '3050', 5, 6, 'English', '580', 10, '2019-02-06', '4th', '2021-06-26 22:01:16', 9, '', 'Available', 6, 400, 400, 430, 'Cumilla', '30', 'ACTIVE'),
(2043, 'Java Script', '5060', 5, 7, 'English', '400', 11, '2021-06-02', '4th', '2021-06-27 13:16:29', 9, '', 'AVAILABLE', 6, 400, 400, 420, 'Cumilla', '25', 'ACTIVE'),
(2044, 'shbd', '123', 9, 1, 'English', '100', 1, '2021-09-06', '10', '2021-09-06 00:49:10', 1, 'abc', 'AVAILABLE', 3, 100, 100, 10, 'location', '10', 'ACTIVE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `book_details`
-- (See below for the actual view)
--
CREATE TABLE `book_details` (
`id` int(20)
,`title` varchar(30)
,`isbn` varchar(20)
,`publisher_id` int(15)
,`language` varchar(20)
,`number_of_page` varchar(20)
,`author_id` int(20)
,`publish_date` date
,`version` varchar(25)
,`date_time` datetime
,`category_id` int(20)
,`description` varchar(25)
,`status` varchar(25)
,`book_type_id` int(20)
,`buying_price` float
,`selling_price` double
,`rent_price` double
,`location` varchar(20)
,`fine` varchar(24)
,`publisher_name` varchar(30)
,`author_name` varchar(50)
,`category_name` varchar(30)
,`book_type_name` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `book_types`
--

CREATE TABLE `book_types` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_types`
--

INSERT INTO `book_types` (`id`, `name`, `column_status`) VALUES
(1, 'E-Book', 'ACTIVE'),
(2, 'Journel', 'ACTIVE'),
(3, 'News paper', 'ACTIVE'),
(4, 'News portal', 'ACTIVE'),
(6, 'Engineering', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_books`
-- (See below for the actual view)
--
CREATE TABLE `cart_books` (
`id` int(11)
,`book_id` int(11)
,`book_isbn` varchar(20)
,`buying_price` float
,`selling_price` double
,`quantity` int(11)
,`emp_id` int(11)
,`book_title` varchar(30)
,`emp_name` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `column_status`) VALUES
(1, 'Drama', 'ACTIVE'),
(2, 'History', 'ACTIVE'),
(3, 'Novel', 'ACTIVE'),
(4, 'Story', 'ACTIVE'),
(5, 'Science Fication', 'ACTIVE'),
(6, 'Political', 'ACTIVE'),
(7, 'Magazine', 'ACTIVE'),
(8, 'Islamic Books', 'ACTIVE'),
(9, 'Engineering', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `join_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `join_date`, `status`, `column_status`) VALUES
(1, 'Takbir', 1797394837, 'takbirbd07@gmail.com', '2021-03-01', 'Borrowed', 'ACTIVE'),
(2, 'Richi', 1956742939, 'richi3949@gmail.com', '2021-01-19', 'Returned', 'ACTIVE'),
(3, 'Jerin', 1797394840, 'jerintasnim40@gmail.com', '2021-03-02', 'Borrowed', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(35) NOT NULL,
  `join_date` date NOT NULL DEFAULT current_timestamp(),
  `salary` double NOT NULL,
  `type` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `address`, `join_date`, `salary`, `type`, `username`, `password`, `column_status`) VALUES
(1, 'Takbir', 1797794837, 'cumilla', '2021-03-08', 10000, 'admin', 'Mahmud', '6000', 'ACTIVE'),
(2, 'Mahmud', 1797394837, 'Dhaka', '2021-03-10', 10000, 'salesman', 'Takbir', '8999', 'ACTIVE'),
(3, 'Rimi', 197554433, 'cumilla', '2020-10-21', 15000, 'admin', 'Richi', '6778', 'ACTIVE'),
(4, 'Tasnim', 196887765, 'Chittagong', '2021-04-12', 12000, 'salesman', 'Jerin', '5678', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(20) NOT NULL,
  `amount` float NOT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp(),
  `employee_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `amount`, `date_time`, `employee_id`, `customer_id`, `column_status`) VALUES
(9, 2218, '2021-06-26', 1, 2, 'ACTIVE'),
(10, 1260, '2021-06-27', 1, 3, 'ACTIVE'),
(11, 1120, '2021-06-27', 1, 3, 'ACTIVE'),
(12, 1320, '2021-06-27', 1, 1, 'ACTIVE'),
(13, 240, '2021-06-27', 1, 2, 'ACTIVE'),
(14, 490, '2021-06-27', 1, 2, 'ACTIVE'),
(15, 860, '2021-09-05', 1, 1, 'ACTIVE'),
(16, 560, '2021-09-06', 1, 2, 'ACTIVE'),
(17, 990, '2021-09-06', 1, 1, 'ACTIVE'),
(18, 2678, '2021-09-06', 1, 1, 'ACTIVE'),
(19, 1000, '2021-09-06', 1, 3, 'ACTIVE'),
(20, 100, '2021-09-06', 1, 3, 'ACTIVE'),
(21, 2000, '2021-09-06', 1, 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_books`
--

CREATE TABLE `invoice_books` (
  `id` int(20) NOT NULL,
  `book_id` int(20) NOT NULL,
  `price` float NOT NULL,
  `quantity` float NOT NULL,
  `total_price` float NOT NULL,
  `buying_price` float NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_books`
--

INSERT INTO `invoice_books` (`id`, `book_id`, `price`, `quantity`, `total_price`, `buying_price`, `invoice_id`, `column_status`) VALUES
(14, 9, 1098, 1, 1098, 1098, 9, 'ACTIVE'),
(15, 3, 260, 2, 520, 260, 9, 'ACTIVE'),
(16, 4, 300, 2, 600, 300, 9, 'ACTIVE'),
(17, 3, 260, 1, 260, 260, 10, 'ACTIVE'),
(18, 11, 1000, 1, 1000, 1000, 10, 'ACTIVE'),
(19, 3, 260, 2, 520, 260, 11, 'ACTIVE'),
(20, 12, 600, 1, 600, 600, 11, 'ACTIVE'),
(21, 4, 300, 2, 600, 300, 12, 'ACTIVE'),
(22, 5, 360, 2, 720, 350, 12, 'ACTIVE'),
(23, 2, 240, 1, 240, 240, 13, 'ACTIVE'),
(24, 1, 250, 1, 250, 250, 14, 'ACTIVE'),
(25, 2, 240, 1, 240, 240, 14, 'ACTIVE'),
(26, 3, 260, 1, 260, 260, 15, 'ACTIVE'),
(27, 12, 600, 1, 600, 600, 15, 'ACTIVE'),
(28, 6, 280, 2, 560, 280, 16, 'ACTIVE'),
(29, 1, 250, 0, 0, 250, 16, 'ACTIVE'),
(30, 1, 250, 3, 750, 250, 17, 'ACTIVE'),
(31, 2, 240, 1, 240, 240, 17, 'ACTIVE'),
(32, 6, 280, 1, 280, 280, 18, 'ACTIVE'),
(33, 4, 300, 1, 300, 300, 18, 'ACTIVE'),
(34, 9, 1098, 1, 1098, 1098, 18, 'ACTIVE'),
(35, 11, 1000, 1, 1000, 1000, 18, 'ACTIVE'),
(36, 2044, 100, 2, 200, 100, 19, 'ACTIVE'),
(37, 2043, 400, 2, 800, 400, 19, 'ACTIVE'),
(38, 2044, 100, 1, 100, 100, 20, 'ACTIVE'),
(39, 2043, 400, 5, 2000, 400, 21, 'ACTIVE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_book_details`
-- (See below for the actual view)
--
CREATE TABLE `invoice_book_details` (
`id` int(20)
,`book_id` int(20)
,`price` float
,`quantity` float
,`total_price` float
,`buying_price` float
,`invoice_id` int(11)
,`book_title` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_details`
-- (See below for the actual view)
--
CREATE TABLE `invoice_details` (
`id` int(20)
,`amount` float
,`date_time` date
,`employee_id` int(20)
,`customer_id` int(20)
,`customer_name` varchar(30)
,`employee_name` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_report_details`
-- (See below for the actual view)
--
CREATE TABLE `invoice_report_details` (
`id` int(20)
,`amount` float
,`date_time` date
,`employee_id` int(20)
,`customer_id` int(20)
,`column_status` varchar(20)
,`book_id` int(20)
,`quantity` float
,`price` float
,`total_price` float
,`buying_price` float
);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(20) NOT NULL,
  `card_number` int(20) NOT NULL,
  `issue_date` date NOT NULL DEFAULT current_timestamp(),
  `expire_date` date NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `card_number`, `issue_date`, `expire_date`, `customer_id`, `status`) VALUES
(1, 1, '2021-03-02', '2021-03-27', 1, 'current'),
(2, 2, '2021-03-03', '2021-03-24', 2, 'expired'),
(3, 3, '2021-03-07', '2021-03-31', 3, 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `old_price_histories`
--

CREATE TABLE `old_price_histories` (
  `id` int(20) NOT NULL,
  `buying_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `quantity` float NOT NULL,
  `book_id` int(20) NOT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp(),
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_price_histories`
--

INSERT INTO `old_price_histories` (`id`, `buying_price`, `selling_price`, `quantity`, `book_id`, `date_time`, `column_status`) VALUES
(1, 2234, 1223, 5, 1, '2021-03-09', 'ACTIVE'),
(2, 9878, 2233, 3, 2, '2021-03-02', 'ACTIVE'),
(3, 8766, 3949, 8, 3, '2021-03-09', 'ACTIVE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `old_price_histories_details`
-- (See below for the actual view)
--
CREATE TABLE `old_price_histories_details` (
`id` int(20)
,`buying_price` float
,`selling_price` float
,`quantity` float
,`book_id` int(20)
,`date_time` date
,`book_title` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `description`, `column_status`) VALUES
(1, 'Joykoli Prakashoni', 'It is good publication in bang', 'ACTIVE'),
(2, 'Akkhor Potra', 'Akkhor potra was a good public', 'ACTIVE'),
(3, 'Bangla Academy', 'Its publication under to the b', 'ACTIVE'),
(4, 'Bhati Ghor', 'It is new publication ,its cur', 'ACTIVE'),
(5, 'Ittadi Prokashoni', 'It is  varitype publisher.', 'ACTIVE'),
(6, 'Voicer Publication', '', 'ACTIVE'),
(7, 'Tata Mc Gronw_Hill', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` int(20) NOT NULL,
  `book_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `employee_id` int(20) NOT NULL,
  `rent_date` date NOT NULL DEFAULT current_timestamp(),
  `exp_return_date` date NOT NULL,
  `return_date` date NOT NULL DEFAULT current_timestamp(),
  `fine` float NOT NULL,
  `status` varchar(20) NOT NULL,
  `column_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `book_id`, `customer_id`, `employee_id`, `rent_date`, `exp_return_date`, `return_date`, `fine`, `status`, `column_status`) VALUES
(17, 1, 1, 1, '2021-06-26', '2021-06-25', '2021-06-27', 40, 'BORROWED', 'ACTIVE'),
(18, 1, 1, 1, '2021-09-06', '2021-06-25', '2021-09-06', 40, 'BORROWED', 'ACTIVE'),
(19, 4, 3, 1, '2021-06-27', '2021-06-23', '2021-06-27', 120, 'RETURNED', 'ACTIVE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `rent_details`
-- (See below for the actual view)
--
CREATE TABLE `rent_details` (
`id` int(20)
,`book_id` int(20)
,`customer_id` int(20)
,`employee_id` int(20)
,`rent_date` date
,`exp_return_date` date
,`return_date` date
,`fine` float
,`status` varchar(20)
,`book_title` varchar(30)
,`book_fine` varchar(24)
,`customer_name` varchar(30)
,`employee_name` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `book_details`
--
DROP TABLE IF EXISTS `book_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `book_details`  AS SELECT `b`.`id` AS `id`, `b`.`title` AS `title`, `b`.`isbn` AS `isbn`, `b`.`publisher_id` AS `publisher_id`, `b`.`language` AS `language`, `b`.`number_of_page` AS `number_of_page`, `b`.`author_id` AS `author_id`, `b`.`publish_date` AS `publish_date`, `b`.`version` AS `version`, `b`.`date_time` AS `date_time`, `b`.`category_id` AS `category_id`, `b`.`description` AS `description`, `b`.`status` AS `status`, `b`.`book_type_id` AS `book_type_id`, `b`.`buying_price` AS `buying_price`, `b`.`selling_price` AS `selling_price`, `b`.`rent_price` AS `rent_price`, `b`.`location` AS `location`, `b`.`fine` AS `fine`, `p`.`name` AS `publisher_name`, `a`.`name` AS `author_name`, `c`.`name` AS `category_name`, `bt`.`name` AS `book_type_name` FROM ((((`books` `b` join `publishers` `p`) join `authors` `a`) join `book_types` `bt`) join `categories` `c`) WHERE `b`.`publisher_id` = `p`.`id` AND `b`.`author_id` = `a`.`id` AND `b`.`category_id` = `c`.`id` AND `b`.`book_type_id` = `bt`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `cart_books`
--
DROP TABLE IF EXISTS `cart_books`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_books`  AS SELECT `c`.`id` AS `id`, `c`.`book_id` AS `book_id`, `b`.`isbn` AS `book_isbn`, `b`.`buying_price` AS `buying_price`, `b`.`selling_price` AS `selling_price`, `c`.`quantity` AS `quantity`, `c`.`emp_id` AS `emp_id`, `b`.`title` AS `book_title`, `e`.`name` AS `emp_name` FROM ((`cart` `c` join `books` `b`) join `employees` `e`) WHERE `c`.`book_id` = `b`.`id` AND `c`.`emp_id` = `e`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `invoice_book_details`
--
DROP TABLE IF EXISTS `invoice_book_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_book_details`  AS SELECT `i`.`id` AS `id`, `i`.`book_id` AS `book_id`, `i`.`price` AS `price`, `i`.`quantity` AS `quantity`, `i`.`total_price` AS `total_price`, `i`.`buying_price` AS `buying_price`, `i`.`invoice_id` AS `invoice_id`, `b`.`title` AS `book_title` FROM (`invoice_books` `i` join `books` `b`) WHERE `i`.`book_id` = `b`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `invoice_details`
--
DROP TABLE IF EXISTS `invoice_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_details`  AS SELECT `i`.`id` AS `id`, `i`.`amount` AS `amount`, `i`.`date_time` AS `date_time`, `i`.`employee_id` AS `employee_id`, `i`.`customer_id` AS `customer_id`, `c`.`name` AS `customer_name`, `e`.`name` AS `employee_name` FROM ((`invoices` `i` join `customers` `c`) join `employees` `e`) WHERE `i`.`customer_id` = `c`.`id` AND `i`.`employee_id` = `e`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `invoice_report_details`
--
DROP TABLE IF EXISTS `invoice_report_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_report_details`  AS SELECT `i`.`id` AS `id`, `i`.`amount` AS `amount`, `i`.`date_time` AS `date_time`, `i`.`employee_id` AS `employee_id`, `i`.`customer_id` AS `customer_id`, `i`.`column_status` AS `column_status`, `ib`.`book_id` AS `book_id`, `ib`.`quantity` AS `quantity`, `ib`.`price` AS `price`, `ib`.`total_price` AS `total_price`, `ib`.`buying_price` AS `buying_price` FROM (`invoices` `i` join `invoice_books` `ib`) WHERE `i`.`id` = `ib`.`invoice_id` ;

-- --------------------------------------------------------

--
-- Structure for view `old_price_histories_details`
--
DROP TABLE IF EXISTS `old_price_histories_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `old_price_histories_details`  AS SELECT `o`.`id` AS `id`, `o`.`buying_price` AS `buying_price`, `o`.`selling_price` AS `selling_price`, `o`.`quantity` AS `quantity`, `o`.`book_id` AS `book_id`, `o`.`date_time` AS `date_time`, `b`.`title` AS `book_title` FROM (`old_price_histories` `o` join `books` `b`) WHERE `o`.`book_id` = `b`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `rent_details`
--
DROP TABLE IF EXISTS `rent_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rent_details`  AS SELECT `r`.`id` AS `id`, `r`.`book_id` AS `book_id`, `r`.`customer_id` AS `customer_id`, `r`.`employee_id` AS `employee_id`, `r`.`rent_date` AS `rent_date`, `r`.`exp_return_date` AS `exp_return_date`, `r`.`return_date` AS `return_date`, `r`.`fine` AS `fine`, `r`.`status` AS `status`, `b`.`title` AS `book_title`, `b`.`fine` AS `book_fine`, `c`.`name` AS `customer_name`, `e`.`name` AS `employee_name` FROM (((`rents` `r` join `books` `b`) join `customers` `c`) join `employees` `e`) WHERE `r`.`book_id` = `b`.`id` AND `r`.`customer_id` = `c`.`id` AND `r`.`employee_id` = `e`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `book_type_id` (`book_type_id`);

--
-- Indexes for table `book_types`
--
ALTER TABLE `book_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `invoice_books`
--
ALTER TABLE `invoice_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `old_price_histories`
--
ALTER TABLE `old_price_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2045;

--
-- AUTO_INCREMENT for table `book_types`
--
ALTER TABLE `book_types`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `invoice_books`
--
ALTER TABLE `invoice_books`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `old_price_histories`
--
ALTER TABLE `old_price_histories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`book_type_id`) REFERENCES `book_types` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `invoice_books`
--
ALTER TABLE `invoice_books`
  ADD CONSTRAINT `invoice_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `invoice_books_ibfk_2` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `old_price_histories`
--
ALTER TABLE `old_price_histories`
  ADD CONSTRAINT `old_price_histories_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rents_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `rents_ibfk_3` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
