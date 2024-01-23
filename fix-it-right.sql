-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 11:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fix-it-right`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(64) NOT NULL,
  `hour` int(64) NOT NULL,
  `rate` int(64) NOT NULL,
  `encoder` varchar(255) NOT NULL,
  `chance` varchar(255) NOT NULL,
  `car_id_labor` int(64) NOT NULL,
  `transaction_id` int(64) NOT NULL,
  `transaction_user_id` int(64) NOT NULL,
  `transact_category` varchar(255) NOT NULL,
  `booking_status` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`id`, `name`, `price`, `hour`, `rate`, `encoder`, `chance`, `car_id_labor`, `transaction_id`, `transaction_user_id`, `transact_category`, `booking_status`, `timestamp`) VALUES
(212, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 1, 90, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(214, 'CHICKEN DINNER', 2, 2, 2, '', '1', 1, 90, 55, 'CHASSIS100', '', '2023-11-14 13:45:23'),
(215, 'FULL SCANNING', 2, 2, 2, '', '1', 1, 90, 55, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(216, 'Replace Rack End', 2, 2, 2, '', '1', 1, 91, 55, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(217, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 1, 91, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(218, 'Replace Stabilizer Link', 2, 2, 2, '', '1', 1, 91, 55, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(219, 'Replace Radiator', 2, 2, 2, '', '1', 1, 91, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(220, 'Radiator Cleaning', 2, 2, 2, '', '1', 1, 91, 55, 'COOLING SYSTEM RESTORATION', '', '2023-11-14 13:45:23'),
(221, 'Replace Ball Joint', 2, 2, 2, '', '1', 1, 91, 55, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(222, 'Inspect/Replace Radiator Hose', 2, 2, 2, '', '1', 1, 92, 55, 'COOLING SYSTEM RESTORATION', '', '2023-11-14 13:45:23'),
(226, 'Replace Ball Joint', 2, 2, 2, '', '1', 4, 92, 58, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(235, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 4, 93, 58, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(236, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 1, 94, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(239, 'Aircon Cleaning', 2, 2, 2, '', '1', 1, 95, 55, 'AIRCON SERVICES', '', '2023-11-14 13:45:23'),
(240, 'Replace Valve Cover Gasket', 2, 2, 2, '', '1', 1, 95, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(241, 'Check Engine Light On', 2, 2, 2, '', '1', 1, 96, 55, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(244, 'FULL SCANNING', 2, 2, 2, '', '1', 1, 97, 55, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(245, 'Aircon Cleaning', 2, 2, 2, '', '1', 1, 97, 55, 'AIRCON SERVICES', '', '2023-11-14 13:45:23'),
(247, 'FULL SCANNING', 2, 2, 2, '', '1', 1, 98, 55, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(248, 'Replace Ball Joint', 2, 2, 2, '', '1', 1, 98, 55, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(249, 'Replace Wheel Bearing', 2, 2, 2, '', '1', 1, 99, 55, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(250, 'Replace CV joint', 2, 2, 2, '', '1', 2, 100, 56, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(251, 'Radiator Cleaning', 2, 2, 2, '', '1', 4, 101, 58, 'COOLING SYSTEM RESTORATION', '', '2023-11-14 13:45:23'),
(252, 'Radiator Cleaning', 2, 2, 2, '', '1', 4, 102, 58, 'COOLING SYSTEM RESTORATION', '', '2023-11-14 13:45:23'),
(253, 'Check Engine Light On', 2, 2, 2, '', '1', 2, 103, 56, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(254, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 1, 104, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(255, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 1, 105, 55, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(256, 'Replace Ball Joint', 2, 2, 2, '', '1', 5, 106, 59, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(257, 'Inspect and clean brake pads and disk', 2, 2, 2, '', '1', 6, 107, 72, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-14 13:45:23'),
(258, 'Abs, airbag, electrical power steering etc.', 2, 2, 2, '', '1', 6, 108, 72, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(259, 'Replace Wheel Bearing', 2, 2, 2, '', '1', 6, 108, 72, 'UNDERCHASSIS WORK', '', '2023-11-14 13:45:23'),
(260, 'Inspect Front and Rear suspension', 2, 2, 2, '', '1', 8, 92, 79, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-14 13:45:23'),
(261, 'Repacked Wheel Bearing', 2, 2, 2, '', '1', 8, 110, 79, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(262, 'Check Engine Light On', 2, 2, 2, '', '1', 8, 111, 79, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(263, 'Check Engine Light On', 2, 2, 2, '', '1', 9, 112, 80, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(264, 'Aircon Cleaning', 2, 2, 2, '', '1', 8, 113, 79, 'AIRCON SERVICES', '', '2023-11-14 13:45:23'),
(265, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 9, 114, 80, 'MAJOR WORK', '', '2023-11-14 13:45:23'),
(266, 'Check Engine Light On', 2, 2, 2, '', '1', 9, 115, 80, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(267, 'Check Engine Light On', 2, 2, 2, '', '1', 9, 116, 80, 'ELECTRICAL SERVICES', '', '2023-11-14 13:45:23'),
(268, 'Aircon Cleaning', 2, 2, 2, '', '1', 9, 117, 80, 'AIRCON SERVICES', '', '2023-11-14 13:45:23'),
(269, 'Replace transmission fluid/gear oil', 2, 2, 2, '', '1', 9, 118, 80, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-14 13:45:23'),
(270, 'Aircon Cleaning', 2, 2, 2, '', '1', 10, 118, 81, 'AIRCON SERVICES', '', '2023-11-14 13:45:23'),
(271, 'CHICKEN DINNER', 2, 2, 2, '', '1', 10, 119, 81, 'CHASSIS100', '', '2023-11-14 13:45:23'),
(272, 'Radiator Cleaning', 2, 2, 2, '', '1', 11, 120, 82, 'COOLING SYSTEM RESTORATION', '', '2023-11-14 13:45:23'),
(273, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 12, 121, 84, 'MAJOR WORK', '', '2023-11-14 13:58:00'),
(274, 'Aircon Cleaning', 2, 2, 2, '', '1', 12, 122, 84, 'AIRCON SERVICES', '', '2023-11-14 15:18:28'),
(275, 'Replace Ball Joint', 2, 2, 2, '', '1', 13, 123, 85, 'UNDERCHASSIS WORK', '', '2023-11-14 15:29:24'),
(276, 'Aircon Cleaning', 2, 2, 2, '', '1', 13, 125, 85, 'AIRCON SERVICES', '', '2023-11-14 15:56:55'),
(277, 'Replace transmission fluid/gear oil', 2, 2, 2, '', '1', 13, 122, 85, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-14 16:00:36'),
(278, 'Radiator Cleaning', 2, 2, 2, '', '1', 13, 122, 85, 'COOLING SYSTEM RESTORATION', '', '2023-11-14 16:05:08'),
(279, 'Replace transmission fluid/gear oil', 2, 2, 2, '', '1', 13, 128, 85, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-14 16:09:14'),
(280, 'Aircon Cleaning', 2, 2, 2, '', '1', 13, 130, 85, 'AIRCON SERVICES', '', '2023-11-14 16:23:30'),
(281, 'Aircon Cleaning', 2, 2, 2, '', '1', 13, 132, 85, 'AIRCON SERVICES', '', '2023-11-14 16:36:52'),
(282, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 12, 122, 84, 'MAJOR WORK', '', '2023-11-15 21:34:59'),
(283, 'Replace transmission fluid/gear oil', 2, 2, 2, '', '1', 14, 135, 86, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-15 21:39:29'),
(284, 'Aircon Cleaning', 2, 2, 2, '', '1', 14, 135, 86, 'AIRCON SERVICES', '', '2023-11-15 21:40:06'),
(285, 'Check Engine Light On', 2, 2, 2, '', '1', 14, 122, 86, 'ELECTRICAL SERVICES', '', '2023-11-15 21:57:10'),
(286, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 14, 137, 86, 'MAJOR WORK', '', '2023-11-15 22:07:10'),
(287, 'Aircon Cleaning', 2, 2, 2, '', '1', 14, 138, 86, 'AIRCON SERVICES', '', '2023-11-15 22:13:55'),
(288, 'Aircon Cleaning', 2, 2, 2, '', '1', 8, 139, 79, 'AIRCON SERVICES', '', '2023-11-26 13:08:49'),
(289, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 8, 140, 79, 'MAJOR WORK', '', '2023-12-28 14:10:03'),
(290, 'Replace transmission fluid/gear oil', 2, 2, 2, '', '1', 8, 140, 79, 'PREVENTIVE MAINTENANCE SERVICE', '', '2024-01-18 13:48:42'),
(291, 'Aircon Cleaning', 2, 2, 2, '', '1', 15, 142, 88, 'AIRCON SERVICES', '', '2024-01-18 14:03:44'),
(292, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 15, 142, 88, 'MAJOR WORK', '', '2024-01-18 14:03:49'),
(293, 'Inspect and clean brake pads and disk', 2, 2, 2, '', '1', 8, 143, 79, 'PREVENTIVE MAINTENANCE SERVICE', '', '2024-01-18 14:50:12'),
(294, 'Replace Rack End', 2, 2, 2, '', '1', 8, 144, 79, 'UNDERCHASSIS WORK', '', '2024-01-18 16:38:35'),
(295, 'Replace High Pressure Switch', 2, 2, 2, '', '1', 8, 144, 79, 'AIRCON SERVICES', '', '2024-01-18 16:38:41'),
(296, 'EGR and Intake Manifold cleaning', 2, 2, 2, '', '1', 16, 145, 90, 'MAJOR WORK', '', '2024-01-23 22:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `buyandsale`
--

CREATE TABLE `buyandsale` (
  `buyid` int(64) NOT NULL,
  `buyname` varchar(255) NOT NULL,
  `buyprice` int(64) NOT NULL,
  `buyamount` int(64) NOT NULL,
  `buytotal` int(64) NOT NULL,
  `buycategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardata`
--

CREATE TABLE `cardata` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `useremail` varchar(128) NOT NULL,
  `userphone` varchar(24) NOT NULL,
  `plateid` int(64) NOT NULL,
  `carbrand` varchar(255) NOT NULL,
  `carmodel` varchar(255) NOT NULL,
  `carmanufacturer` varchar(255) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `cartype` varchar(255) NOT NULL,
  `carserialnumber` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cardata`
--

INSERT INTO `cardata` (`id`, `username`, `useremail`, `userphone`, `plateid`, `carbrand`, `carmodel`, `carmanufacturer`, `dt`, `cartype`, `carserialnumber`) VALUES
(1, '', '', '8700', 55, 'TOYOTA', 'VIOS 2023', 'Car Philippines Club', '2023-05-13 00:53:08', 'Sedan', '3232'),
(2, '', '', 'MK1900', 56, 'Toyoto', 'Vios', 'Car PH', '2023-05-13 23:23:53', 'Sedan', '20071'),
(3, '', '', 'MV-8022', 57, 'Honda', 'KB-200', 'Car PH', '2023-05-14 00:19:41', 'Truck', '200941'),
(4, '', '', 'MV-1004', 58, 'Lamborghini', 'Aventador', 'Exotic Cars PH', '2023-05-14 00:21:43', 'Sports Car', '890992'),
(5, '', '', 'HVB-232', 59, 'Honda', 'Vigo', 'Car PH', '2023-05-14 08:54:22', 'Truck', '323280'),
(6, '', '', 'HT115', 72, 'SAMSUNGSSSS', '3153', 'SAMSUNG', '2023-09-04 02:46:57', 'SUV', '12345'),
(7, '', '', 'AB546', 75, 'TOYOTA', 'COROLA ALTIS 2023', 'TOYOTA', '2023-09-08 00:35:47', 'SEDAN', '92911818181'),
(8, '', '', 'HT113', 79, 'SAMSUNG', '3153', 'SAMSUNG', '2023-11-06 12:48:32', 'SUV', '12345'),
(9, '', '', 'HG332', 80, 'APPLE', '3153', 'APPLE', '2023-11-06 13:11:16', 'SUV', '12345'),
(10, '', '', 'hh4444', 81, 'APPLE11111', '3153', 'APPLE11111', '2023-11-07 16:37:22', 'SUV', '12345'),
(11, '', '', 'AH1N1', 82, 'Lenovo', 'Me', 'Lenovo', '2023-11-08 04:25:08', 'Sedan', '19991'),
(12, '', '', 'AH1N1', 84, 'Lenovo', 'Me', 'Lenovo', '2023-11-14 13:57:35', 'Sedan', '19991'),
(13, '', '', 'haha22', 85, 'SAMSUNG', '1212', 'Honda', '2023-11-14 15:29:08', 'SUV', '2121212'),
(14, '', '', 'HA13', 86, 'TOYOTA', 'VIOS', 'TOYOTA', '2023-11-15 21:38:43', 'Sedan', '11122231'),
(15, '', '', '65tthy', 88, 'Apple', '13 Pro', 'Apple', '2024-01-18 14:03:29', 'SUV', '123456'),
(16, '', '', 'ee443', 90, 'apple', '12', 'APPLE11111', '2024-01-23 22:26:36', 'ememe', '12121213');

-- --------------------------------------------------------

--
-- Table structure for table `car_brand`
--

CREATE TABLE `car_brand` (
  `car_brand_id` int(64) NOT NULL,
  `car_brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `car_brand`
--

INSERT INTO `car_brand` (`car_brand_id`, `car_brand_name`) VALUES
(1, 'TOYOTA1'),
(2, 'motolite'),
(3, 'motorite'),
(4, 'vios'),
(5, 'masera'),
(6, 'battery');

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `car_model_id` int(64) NOT NULL,
  `car_model_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `car_model`
--

INSERT INTO `car_model` (`car_model_id`, `car_model_name`) VALUES
(1, 'lamborghinis'),
(2, 'lambor'),
(3, 'Sedan');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `car_type_id` int(64) NOT NULL,
  `car_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`car_type_id`, `car_type_name`) VALUES
(1, 'Sedan'),
(2, 'Limo'),
(3, 'limos'),
(4, 'asd'),
(5, 'asda'),
(6, 'asd1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Oil'),
(2, 'Filter'),
(3, 'Parts');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(64) NOT NULL,
  `employee_fname` varchar(255) NOT NULL,
  `employee_lname` varchar(255) NOT NULL,
  `employee_gender` varchar(255) NOT NULL,
  `employee_phone` varchar(255) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_hired_date` date NOT NULL,
  `employee_job` varchar(255) NOT NULL,
  `employee_province` varchar(255) NOT NULL,
  `employee_city` varchar(255) NOT NULL,
  `employee_user_id` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_fname`, `employee_lname`, `employee_gender`, `employee_phone`, `employee_email`, `employee_hired_date`, `employee_job`, `employee_province`, `employee_city`, `employee_user_id`) VALUES
(23, 'Remedios', 'Gatos', 'Female', '0932324', 'remig@yahoo.com', '2023-04-18', 'Mechanic', 'Basilan', 'Lamitan', 0),
(33, 'Dominic', 'Rulida', 'Male', '09120914372', 'domincrulida@gmail.com', '2023-05-22', 'Cashier', 'Basilan', 'Isabela City', 63),
(35, 'Jhenicalyn', 'Sarabia', 'Male', '09123451252', 'jhensarabia@gmail.com', '2023-05-30', 'Cashier', 'Benguet', 'Kibungan', 64),
(36, 'Carla', 'Estrada', 'Female', '09773239260', 'carla@gmail.com', '2023-08-16', 'Cahsheesh', 'Leyte', 'Tunga', 67),
(37, 'Garry', 'Bee', 'Female', '09018665433', 'junnix@gmail.com', '2023-08-09', 'Casher', 'Bukidnon', 'Pangantucan', 68),
(38, 'Nice', 'nice', 'Female', '12345678909', 'rod@jaja.com', '2023-08-01', 'Casher', 'Cagayan', 'Lal-lo', 69),
(39, 'sampol', 'efefe', 'Female', '12345678909', 'lfo@gmail.com', '2023-08-16', 'Cashier', 'Bulacan', 'Plaridel', 70),
(40, 'DIONESIA', 'Estrada', 'Female', '09773239000', 'dionesia@gmail.com', '2023-04-03', 'Cashier', 'Leyte', 'Tunga', 77),
(41, 'casy', 'ntahan', 'Female', '12345678909', 'casy@gmail.com', '2023-11-06', 'Cashier', 'Batangas', 'Lobo', 78),
(42, 'Admin', 'Admin', 'Male', '09337686534', 'admin1@gmail.com', '2022-03-03', 'admin', 'Camarines Norte', 'Jose Panganiban', 87),
(43, 'cashier', 'cash', 'Female', '12222222222', 'cash@gmail.com', '2024-01-10', 'Cashier', 'Biliran', 'Caibiran', 89);

-- --------------------------------------------------------

--
-- Table structure for table `expense_table`
--

CREATE TABLE `expense_table` (
  `expense_id` int(64) NOT NULL,
  `expense_name` varchar(255) NOT NULL,
  `expense_price` int(64) NOT NULL,
  `expense_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parts_table`
--

CREATE TABLE `parts_table` (
  `item_id` int(64) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_price` int(64) NOT NULL,
  `item_amount` int(64) NOT NULL,
  `item_total` int(64) NOT NULL,
  `item_total_pending` int(64) NOT NULL,
  `item_status` varchar(254) NOT NULL,
  `item_buyer` varchar(255) NOT NULL,
  `item_car_id` int(64) NOT NULL,
  `item_transaction_id` int(64) NOT NULL,
  `item_user_id` int(64) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp(),
  `item_transaction_sched` date DEFAULT NULL,
  `item_product_id` varchar(255) NOT NULL,
  `pendingtotal` int(64) NOT NULL,
  `pendingamount` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parts_table`
--

INSERT INTO `parts_table` (`item_id`, `item_name`, `item_category`, `item_price`, `item_amount`, `item_total`, `item_total_pending`, `item_status`, `item_buyer`, `item_car_id`, `item_transaction_id`, `item_user_id`, `dt`, `item_transaction_sched`, `item_product_id`, `pendingtotal`, `pendingamount`) VALUES
(69, 'Sparkplug', 'Parts', 2599, 2, 5198, 0, '', '', 1, 90, 55, '2023-05-15', '2023-05-17', 'MK-447', 0, 0),
(70, 'Sparkplug', 'Parts', 2599, 2, 5198, 0, '', '', 1, 91, 55, '2023-05-15', '2023-05-17', 'MK-447', 0, 0),
(71, 'Sparkplug', 'Parts', 2599, 2, 5198, 0, '', '', 1, 91, 55, '2023-05-15', '2023-05-17', 'MK-447', 0, 0),
(72, 'shell oil', 'Oil', 3000, 1, 3000, 3000, 'Approved', 'Rengie Tado', 0, 0, 55, '2023-05-15', NULL, '', 0, 0),
(73, 'turbo', 'Parts', 4000, 3, 12000, 0, '', '', 1, 96, 55, '2023-05-15', '2023-05-16', '4451', 0, 0),
(74, 'turbo', 'Parts', 2500, 2, 5000, 0, '', '', 1, 96, 55, '2023-05-15', '2023-05-16', '1800821', 0, 0),
(75, 'turbo', 'Parts', 4000, 1, 4000, 0, '', '', 1, 97, 55, '2023-05-16', '2023-05-18', '4451', 0, 0),
(76, 'shell oil', 'Oil', 3000, 20, 0, 60000, 'Pending', 'Rengie Tado', 0, 0, 55, '2023-05-16', NULL, '', 0, 0),
(77, 'turbo', 'Parts', 2500, 1, 2500, 0, '', '', 4, 93, 58, '2023-05-17', '2023-05-16', '1800821', 0, 0),
(78, 'Sparkplug', 'Parts', 2599, 1, 2599, 0, '', '', 1, 90, 55, '2023-05-17', '2023-05-16', 'MK-447', 0, 0),
(79, 'turbo', 'Parts', 2500, 1, 2500, 0, '', '', 2, 103, 56, '2023-05-17', '2023-05-30', '1800821', 0, 0),
(80, 'turbo', 'Parts', 2500, 3, 7500, 0, '', '', 2, 103, 56, '2023-05-17', '2023-05-30', '1800821', 0, 0),
(81, 'Air Filter', 'Filter', 1000, 2, 2000, 2000, 'Approved', 'kkent', 0, 0, 1, '2023-05-17', '2023-05-17', '', 0, 0),
(82, 'turbo', 'Parts', 2500, 2, 1, 0, '', '', 1, 90, 55, '2023-05-18', '2023-05-30', '1800821', 0, 0),
(83, 'turbo', 'Parts', 2500, 2, 1, 0, '', '', 1, 90, 55, '2023-05-18', '2023-05-30', '1800821', 0, 0),
(84, 'turbo', 'Parts', 2500, 5, 1, 0, '', '', 1, 90, 55, '2023-05-18', '2023-05-30', '1800821', 0, 0),
(85, 'turbo', 'Parts', 4000, 1, 4000, 0, '', '', 4, 102, 58, '2023-05-18', '2023-05-30', '4451', 0, 0),
(86, 'turbo', 'Parts', 4000, 1, 4000, 0, '', '', 4, 102, 58, '2023-05-18', '2023-05-30', '4451', 0, 0),
(87, 'turbo', 'Parts', 2500, 1, 2500, 0, '', '', 14, 136, 86, '2023-11-16', '2023-11-29', '1800821', 0, 0),
(88, 'turbo', 'Parts', 2500, 1, 2500, 0, '', '', 14, 137, 86, '2023-11-16', '2023-11-29', '1800821', 0, 0),
(89, 'turbo', 'Parts', 2500, 1, 2500, 0, '', '', 14, 138, 86, '2023-11-16', '2023-11-29', '1800821', 0, 0),
(90, 'turbo', 'Parts', 2500, 2, 88, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', '1800821', 0, 0),
(91, 'turbo', 'Parts', 2500, 2, 5000, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', '1800821', 0, 0),
(92, 'shell oil', 'Oil', 3000, 1, 3000, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', '8700', 0, 0),
(93, 'Air Filter', 'Filter', 1000, 1, 1000, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', 'AKB-4723', 0, 0),
(94, 'Air Filter', 'Filter', 1000, 1, 1000, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', 'AKB-4723', 0, 0),
(95, 'Air Filter', 'Filter', 1000, 1, 1000, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', 'AKB-4723', 0, 0),
(96, 'Sparkplug', 'Parts', 2599, 2, 5198, 0, '', '', 8, 144, 79, '2024-01-19', '2024-01-24', 'MK-447', 0, 0),
(97, 'shell oil', 'Oil', 3000, 1, 3000, 0, '', '', 16, 145, 90, '2024-01-24', '2024-01-25', '8700', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `p_id` int(64) NOT NULL,
  `p_product_code` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_qty_stock` int(64) NOT NULL,
  `p_on_hand` int(64) NOT NULL,
  `p_price` int(64) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_supplier` varchar(255) NOT NULL,
  `p_date_stock` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_inventory`
--

INSERT INTO `product_inventory` (`p_id`, `p_product_code`, `p_name`, `p_description`, `p_qty_stock`, `p_on_hand`, `p_price`, `p_category`, `p_supplier`, `p_date_stock`) VALUES
(1, '1800823', 'Motora Oil', 'cheaper', 255, 0, 3000, 'Oil', 'Petron', '2023-04-28'),
(3, '1800821', 'turbo', 'turbo 390x', 22, 70, 2500, 'Parts', 'Shell', '2023-05-17'),
(4, '4451', 'turbo', 'turbo w9', 22, 0, 4000, 'Parts', 'Petron', '2023-05-18'),
(6, '8700', 'shell oil', 'shell', 243, 22, 3000, 'Oil', 'Shell', '2023-05-17'),
(7, 'MK-447', 'Sparkplug', 'color red', 23, 94, 2599, 'Parts', 'Petron', '2023-05-18'),
(8, 'AKB-4723', 'Air Filter', 'floral scent', 250, 73, 1000, 'Filter', 'Petron', '2023-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `recommendid` int(64) NOT NULL,
  `recommendmsg` varchar(254) NOT NULL,
  `recommendcarid` int(64) NOT NULL,
  `recommenduserid` int(64) NOT NULL,
  `recoomendtransid` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`recommendid`, `recommendmsg`, `recommendcarid`, `recommenduserid`, `recoomendtransid`) VALUES
(8, 'check left UI', 1, 55, 90),
(9, 'check the windshield', 1, 55, 91),
(10, 'check the left UI', 1, 55, 97),
(11, 'check the windshield', 4, 58, 98),
(12, 'check wind shield', 2, 56, 104),
(13, 'check side ', 2, 56, 104),
(14, 'hakdog', 15, 88, 143),
(15, 'Nice', 8, 79, 144);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_jd` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_price` int(64) NOT NULL,
  `service_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_jd`, `service_name`, `service_price`, `service_category`) VALUES
(7, 'Replace transmission fluid/gear oil', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(10, 'Inspect and clean brake lining and drum', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(11, 'Inspect and clean brake pads and disk', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(12, 'Inspect steering wheel, linkage and gear box', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(13, 'Inspect Front and Rear suspension', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(14, 'Inspect and test battery health', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(15, 'Inspect clutch system', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(16, 'Inspect Front and Rear suspension', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(17, 'Inspect air conditioning system', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(18, 'Inspect/Replace Drive Belt', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(19, 'Engine Detailing', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(20, 'Fluid flushing', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(21, 'FULL ENGINE SCANNING', 100, 'PREVENTIVE MAINTENANCE SERVICE'),
(22, 'Aircon Cleaning', 100, 'AIRCON SERVICES'),
(23, 'Replace Compressor', 100, 'AIRCON SERVICES'),
(24, 'Replace Evaporator Front', 100, 'AIRCON SERVICES'),
(25, 'Replace Evaporator Rear', 100, 'AIRCON SERVICES'),
(26, 'Replace Condenser', 100, 'AIRCON SERVICES'),
(27, 'Replace Auxiliary fan', 100, 'AIRCON SERVICES'),
(28, 'Replace Expansion Valve Front', 100, 'AIRCON SERVICES'),
(29, 'Replace Expansion Valve Back', 100, 'AIRCON SERVICES'),
(30, 'Replace Filter Drier', 100, 'AIRCON SERVICES'),
(31, 'Replace High Pressure Switch', 100, 'AIRCON SERVICES'),
(32, 'Flushing AC system', 100, 'AIRCON SERVICES'),
(34, 'Check Engine Light On', 100, 'ELECTRICAL SERVICES'),
(35, 'FULL SCANNING', 100, 'ELECTRICAL SERVICES'),
(36, 'Abs, airbag, electrical power steering etc.', 100, 'ELECTRICAL SERVICES'),
(37, 'EGR and Intake Manifold cleaning', 100, 'MAJOR WORK'),
(38, 'Intake Manifold cleaning', 100, 'MAJOR WORK'),
(39, 'Replace Timing Belt', 100, 'MAJOR WORK'),
(40, 'Turbo Cleaning', 100, 'MAJOR WORK'),
(41, 'Replace Turbo Actuator', 100, 'MAJOR WORK'),
(42, 'Replace Tensioner Bearing', 100, 'MAJOR WORK'),
(43, 'Replace Clutch Kit', 100, 'MAJOR WORK'),
(44, 'Valve Clearance Setting', 100, 'MAJOR WORK'),
(45, 'Replace Valve Cover Gasket', 100, 'MAJOR WORK'),
(46, 'Top Overhaul', 100, 'MAJOR WORK'),
(47, 'General Overhaul', 100, 'MAJOR WORK'),
(48, 'Replace Transmission', 100, 'MAJOR WORK'),
(49, 'Replace Radiator', 100, 'MAJOR WORK'),
(50, 'Repacked Wheel Bearing', 100, 'MAJOR WORK'),
(51, 'Repacked CV joint Bearing', 100, 'MAJOR WORK'),
(52, 'Replace Ball Joint', 100, 'UNDERCHASSIS WORK'),
(53, 'Replace Stabilizer Link', 100, 'UNDERCHASSIS WORK'),
(54, 'Replace Shock Absorber', 100, 'UNDERCHASSIS WORK'),
(55, 'Replace Tie Rod', 100, 'UNDERCHASSIS WORK'),
(56, 'Replace Rack End', 100, 'UNDERCHASSIS WORK'),
(57, 'Replace Rack and pinion', 100, 'UNDERCHASSIS WORK'),
(58, 'Replace Wheel Bearing', 100, 'UNDERCHASSIS WORK'),
(59, 'Replace CV joint', 100, 'UNDERCHASSIS WORK'),
(60, 'Replace Engine Support', 100, 'UNDERCHASSIS WORK'),
(61, 'Replace Transmission Support', 100, 'UNDERCHASSIS WORK'),
(62, 'Radiator Cleanings', 100, 'COOLING SYSTEM RESTORATION'),
(63, 'Coolant Flushing', 100, 'COOLING SYSTEM RESTORATION'),
(64, 'Inspect/Replace Water Pump', 100, 'COOLING SYSTEM RESTORATION'),
(65, 'Inspect/Replace Thermostat', 100, 'COOLING SYSTEM RESTORATION'),
(66, 'Inspect/Replace Radiator Hose', 100, 'COOLING SYSTEM RESTORATION'),
(67, 'Inspect/Replace Auxiliary Fan', 100, 'COOLING SYSTEM RESTORATION'),
(68, 'Silicon oil Refill', 100, 'COOLING SYSTEM RESTORATION'),
(76, 'Replace Evaporator Rear', 0, 'AIRCON SERVICES'),
(78, 'Repacked CV joint Bearing', 200, 'MAJOR WORK'),
(79, '', 300, 'MAJOR WORK'),
(80, 'CHICKEN DINNER', 200, 'CHASSIS100'),
(81, 'Diagnose', 500, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `service_id` int(64) NOT NULL,
  `service_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`service_id`, `service_name`) VALUES
(1, 'PREVENTIVE MAINTENANCE SERVICE'),
(2, 'AIRCON SERVICES'),
(3, 'ELECTRICAL SERVICES'),
(4, 'MAJOR WORK'),
(5, 'UNDERCHASSIS WORK'),
(6, 'COOLING SYSTEM RESTORATION'),
(207, 'CHASSIS WORK'),
(210, 'CHASSIS100'),
(212, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `service_job`
--

CREATE TABLE `service_job` (
  `job_id` int(64) NOT NULL,
  `job_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_job`
--

INSERT INTO `service_job` (`job_id`, `job_role`) VALUES
(29, 'Managers'),
(41, 'Mechanics'),
(47, 'utility');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `s_id` int(64) NOT NULL,
  `s_city` varchar(255) NOT NULL,
  `s_company_name` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`s_id`, `s_city`, `s_company_name`, `s_phone`, `s_province`) VALUES
(18, '', 'Petrons', '0912312334', ''),
(34, 'Buenavista', 'Shell', '09120914372', 'Agusan del Norte'),
(35, 'Carigara', 'Hubs', '0988762627', 'Leyte');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `id` int(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(64) NOT NULL,
  `hour` int(64) NOT NULL,
  `rate` int(64) NOT NULL,
  `encoder` varchar(255) NOT NULL,
  `chance` varchar(255) NOT NULL,
  `car_id_labor` int(64) NOT NULL,
  `transaction_id` int(64) NOT NULL,
  `transaction_user_id` int(64) NOT NULL,
  `transact_category` varchar(255) NOT NULL,
  `worker` varchar(255) NOT NULL,
  `transact_dt` date NOT NULL DEFAULT current_timestamp(),
  `transaction_sched` date DEFAULT NULL,
  `transact_total` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction_table`
--

INSERT INTO `transaction_table` (`id`, `name`, `price`, `hour`, `rate`, `encoder`, `chance`, `car_id_labor`, `transaction_id`, `transaction_user_id`, `transact_category`, `worker`, `transact_dt`, `transaction_sched`, `transact_total`) VALUES
(142, 'Inspect and clean brake lining and drum', 100, 2, 5, 'Remedios Gato', '2', 1, 90, 55, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-15', '2023-05-17', '2000'),
(144, 'Replace Ball Joint', 100, 3, 2, 'Remedios Gato', '2', 1, 91, 55, 'UNDERCHASSIS WORK', '', '2023-05-15', '2023-05-17', '600'),
(145, 'Replace transmission fluid/gear oil', 100, 2, 1, 'Remedios Gato', '2', 1, 97, 55, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-16', '2023-05-18', '200'),
(146, 'Inspect steering wheel, linkage and gear box', 100, 2, 2, 'Remedios Gato', '2', 1, 97, 55, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-16', '2023-05-18', '400'),
(148, 'Replace transmission fluid/gear oil', 100, 11, 5, 'Remedios Gato', '2', 4, 93, 58, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-17', '2023-05-16', '5500'),
(149, 'Inspect and clean brake lining and drum', 100, 5, 21, 'Remedios Gato', '2', 4, 93, 58, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-17', '2023-05-16', '10500'),
(151, 'Check Engine Light On', 100, 2, 1, 'Remedios Gato', '2', 2, 103, 56, 'ELECTRICAL SERVICES', '', '2023-05-17', '2023-05-30', '200'),
(152, 'Inspect Front and Rear suspension', 50000, 3, 2, 'Remedios Gato', '2', 2, 103, 56, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-17', '2023-05-30', '300000'),
(153, 'Replace transmission fluid/gear oil', 100, 6, 4, 'Remedios Gato', '2', 4, 102, 58, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-18', '2023-05-30', '2400'),
(154, 'Inspect steering wheel, linkage and gear box', 100, 3, 3, 'Remedios Gato', '2', 4, 102, 58, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-18', '2023-05-30', '900'),
(155, 'Inspect Front and Rear suspension', 102, 6, 4, 'Remedios Gato', '2', 4, 102, 58, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-05-18', '2023-05-30', '2448'),
(156, 'Abs, airbag, electrical power steering etc.', 100, 1, 24, 'Remedios Gatos', '2', 9, 116, 80, 'ELECTRICAL SERVICES', '', '2023-11-07', '2023-11-16', '47976'),
(157, 'FULL ENGINE SCANNING', 131, 1, 4, 'Remedios Gatos', '2', 9, 117, 80, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-07', '2023-11-17', '524'),
(158, 'Replace transmission fluid/gear oil', 100, 1, 1, 'Remedios Gatos', '2', 9, 117, 80, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-07', '2023-11-17', '100'),
(159, 'Inspect Front and Rear suspension', 100, 2, 1, 'Remedios Gatos', '2', 9, 117, 80, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-07', '2023-11-17', '200'),
(162, 'Inspect and clean brake pads and disk', 100, 1, 3, 'Remedios Gatos', '2', 9, 117, 80, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-07', '2023-11-17', '300'),
(163, 'FULL SCANNING', 100, 2, 8, 'Remedios Gatos', '2', 9, 117, 80, 'ELECTRICAL SERVICES', '', '2023-11-07', '2023-11-17', '1600'),
(164, 'Aircon Cleaning', 100, 3, 2, 'Remedios Gatos', '2', 9, 117, 80, 'AIRCON SERVICES', '', '2023-11-07', '2023-11-17', '600'),
(165, 'Replace Compressor', 102, 1, 1, 'Remedios Gatos', '2', 9, 117, 80, 'AIRCON SERVICES', '', '2023-11-07', '2023-11-17', '103'),
(166, 'Aircon Cleaning', 100, 1, 1, 'Remedios Gatos', '2', 10, 118, 81, 'AIRCON SERVICES', '', '2023-11-08', '2023-11-21', '100'),
(167, 'Replace transmission fluid/gear oil', 100, 1, 1, 'Remedios Gatos', '2', 10, 119, 81, 'PREVENTIVE MAINTENANCE SERVICE', '', '2023-11-08', '2023-11-27', '100'),
(168, 'Aircon Cleaning', 100, 1, 16, 'Remedios Gatos', '2', 8, 113, 79, 'AIRCON SERVICES', '', '2023-11-08', '2023-11-27', '1600'),
(169, 'Radiator Cleaning', 100, 9, 5, 'Remedios Gatos', '2', 11, 120, 82, 'COOLING SYSTEM RESTORATION', '', '2023-11-08', '2023-11-23', '4500'),
(170, 'EGR and Intake Manifold cleaning', 100, 1, 2, 'Remedios Gatos', '2', 12, 121, 84, 'MAJOR WORK', '', '2023-11-14', '2023-11-28', '200'),
(172, 'EGR and Intake Manifold cleaning', 100, 1, 10, 'Remedios Gatos', '2', 14, 137, 86, 'MAJOR WORK', '', '2023-11-16', '2023-11-29', '1000'),
(173, 'Aircon Cleaning', 100, 3, 3, 'Remedios Gatos', '2', 14, 138, 86, 'AIRCON SERVICES', '', '2023-11-16', '2023-11-29', '900'),
(176, 'AIRCON SERVICES', 122, 1, 2, 'Remedios Gatos', '2', 15, 142, 88, '', '', '2024-01-18', '2024-01-20', '244'),
(181, 'Inspect and test battery health', 13, 1, 113, 'Remedios Gatos', '2', 8, 143, 79, 'PREVENTIVE MAINTENANCE SERVICE', '', '2024-01-19', '2024-01-20', '1469'),
(182, 'Inspect and clean brake lining and drum', 12, 12, 2, 'Remedios Gatos', '2', 8, 143, 79, 'PREVENTIVE MAINTENANCE SERVICE', '', '2024-01-19', '2024-01-20', '288'),
(183, 'Inspect steering wheel, linkage and gear box', 1, 1, 3, 'Remedios Gatos', '2', 8, 144, 79, 'PREVENTIVE MAINTENANCE SERVICE', '', '2024-01-19', '2024-01-24', '3'),
(184, 'EGR and Intake Manifold cleaning', 500, 1, 1, 'Remedios Gatos', '2', 16, 145, 90, 'MAJOR WORK', '', '2024-01-24', '2024-01-25', '500');

-- --------------------------------------------------------

--
-- Table structure for table `transacttable`
--

CREATE TABLE `transacttable` (
  `transid` int(64) NOT NULL,
  `custid` int(64) NOT NULL,
  `carid` int(64) NOT NULL,
  `numofitem` int(64) NOT NULL,
  `cashtotal` int(64) NOT NULL,
  `transactidid` int(64) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_no` int(10) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `transact_sched` date DEFAULT NULL,
  `transact_schedinfo` varchar(255) NOT NULL,
  `transdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `moneytotal` int(64) NOT NULL,
  `numofmaterials` int(64) NOT NULL,
  `transact1` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `prioritynumber` int(64) NOT NULL,
  `encoder` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transacttable`
--

INSERT INTO `transacttable` (`transid`, `custid`, `carid`, `numofitem`, `cashtotal`, `transactidid`, `status`, `status_no`, `payment`, `payment_type`, `transact_sched`, `transact_schedinfo`, `transdate`, `moneytotal`, `numofmaterials`, `transact1`, `request`, `ptype`, `prioritynumber`, `encoder`) VALUES
(90, 55, 1, 1, 8000, 0, 'Completed', 0, '', 'Gcash', '2023-05-17', 'ill be late', '2023-05-15 03:31:24', 0, 0, '7198', '', '', 1, ''),
(91, 55, 1, 0, 11000, 0, 'Completed', 0, '', 'Gcash', '2023-05-17', 'will be late', '2023-05-15 05:55:34', 0, 0, '10996', '', '', 1, 'Cashier'),
(109, 79, 8, 0, 0, 0, 'Cancelled', 0, '', 'Over the Counter', '2023-11-15', 'Upaya', '2023-11-06 13:00:03', 0, 0, '', '', '', 1, ''),
(110, 79, 8, 0, 0, 0, 'Cancelled', 0, '', 'Over the Counter', '2023-11-16', '', '2023-11-06 13:02:49', 0, 0, '', '', '', 1, ''),
(111, 79, 8, 0, 0, 0, 'Cancelled', 0, '', 'Over the Counter', '2023-11-16', '', '2023-11-06 13:08:18', 0, 0, '', '', '', 1, ''),
(112, 80, 9, 0, 0, 0, '', 0, '', '', '2023-11-15', '', '2023-11-06 13:11:44', 0, 0, '', '', '', 1, ''),
(113, 79, 8, 1, 10000, 0, 'Completed', 4, '', '', '2023-11-16', '', '2023-11-06 14:02:43', 0, 0, '1600', '', '', 1, 'Cashier'),
(114, 80, 9, 0, 0, 0, '', 0, '', '', '2023-11-16', '', '2023-11-07 13:04:12', 0, 0, '', '', '', 2, ''),
(115, 80, 9, 0, 0, 0, '', 0, '', '', '2023-11-15', '', '2023-11-07 13:37:15', 0, 0, '', '', '', 1, ''),
(116, 80, 9, 1, 50000, 0, 'Completed', 0, '', '', '2023-11-16', '', '2023-11-07 13:48:44', 0, 0, '47976', '', '', 1, 'Cashier'),
(117, 80, 9, 7, 0, 0, 'Completed', 4, '', 'Over the Counter', '2023-11-17', '', '2023-11-07 13:54:28', 0, 0, '3427', '', '', 1, 'Cashier'),
(118, 81, 10, 1, 0, 0, 'Completed', 4, '', '', '2023-11-21', '', '2023-11-07 16:37:58', 0, 0, '100', '', '', 1, 'Cashier'),
(119, 81, 10, 0, 0, 0, 'Completed', 4, '', '', '2023-11-27', '', '2023-11-07 17:01:09', 0, 0, '100', '', '', 1, 'Cashier'),
(120, 82, 11, 1, 5000, 0, 'Completed', 4, '', 'Over the Counter', '2023-11-23', '', '2023-11-08 04:25:44', 0, 0, '4500', '', '', 1, 'Cashier'),
(121, 84, 12, 1, 200, 0, 'Completed', 4, '', 'Over the Counter', '2023-11-28', '', '2023-11-14 13:58:34', 0, 0, '200', '', '', 1, 'Cashier'),
(136, 86, 14, 1, 50000, 0, 'Completed', 4, '', 'Over the Counter', '2023-11-29', '', '2023-11-15 21:57:27', 0, 0, '3400', '', '', 1, 'Cashier'),
(137, 86, 14, 1, 0, 0, 'Completed', 4, '', 'Over the Counter', '2023-11-29', '', '2023-11-15 22:07:30', 0, 0, '3500', '', '', 1, 'Cashier'),
(138, 86, 14, 1, 4000, 0, 'Completed', 4, '', 'Over the Counter', '2023-11-29', '', '2023-11-15 22:14:48', 0, 0, '3400', '', '', 1, 'Cashier'),
(139, 79, 8, 0, 0, 0, 'Cancelled', 0, '', 'Over the Counter', '2023-11-30', 'Hakdog', '2023-11-26 13:09:43', 0, 0, '', '', '', 1, ''),
(142, 88, 15, 0, 300, 0, 'Completed', 4, '', 'Over the Counter', '2024-01-19', 'Hekhuk', '2024-01-18 14:04:05', 0, 0, '244', '', '', 1, 'Cashier'),
(143, 79, 8, 2, 2000, 0, 'Completed', 4, '', 'Over the Counter', '2024-01-20', 'try', '2024-01-18 14:50:33', 0, 0, '1757', '', '', 1, 'Cashier'),
(144, 79, 8, 1, 17000, 0, 'Completed', 4, '', 'Over the Counter', '2024-01-24', 'pls po', '2024-01-18 16:38:55', 0, 0, '16289', '', '', 1, 'Cashier'),
(145, 90, 16, 1, 0, 0, 'Completed', 4, '', 'Over the Counter', '2024-01-25', 'huhu', '2024-01-23 22:31:47', 0, 0, '3500', '', '', 1, 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userage` int(64) NOT NULL,
  `usergender` varchar(255) NOT NULL,
  `userbirthdate` date DEFAULT NULL,
  `userprovince` varchar(255) NOT NULL,
  `usercity` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `phone`, `email`, `useremail`, `password`, `userage`, `usergender`, `userbirthdate`, `userprovince`, `usercity`, `user_type`) VALUES
(55, 'rengie123', 'Rengie', 'Tado', '09120914372', 'rengietado@gmail.com', '', '$2y$10$B58JDK1TBI2/VWQHUtrdnuXIIzu7NxdOkQuVf6PVdUIz5OKTSHpM.', 0, '', NULL, '', '', 'user'),
(63, 'domz123', '', '', '', '', '', '$2y$10$mM/dhrB8gAE3mPY3wxEu2O60tYHX3Y0gfhkFeylUAC4zCAFUnYnaS', 0, '', NULL, '', '', 'Cashier'),
(65, 'jhen123', 'Jhenicalyn', 'Sarabia', '09123451252', 'jhensarabia@gmail.com', '', '$2y$10$qW9mRwuqpWDnIFsFmGXlTOCuTo0L0/H5vOjQtqp9wF3d3CvDnNEey', 0, '', NULL, '', '', 'Cashier'),
(66, 'test', 'Sample', 'sam', '09063981654', 'rodpuyat00@gmail.com', '', '$2y$10$KkcCwZp/KOkrJ.wKwrazW.GRXTRcSwJ/aOl3iKbTIqAqMcKdUds6e', 0, '', NULL, '', '', ''),
(67, 'carla', 'Carla', 'Estrada', '09773239260', 'carla@gmail.com', '', '$2y$10$QwHmdbawZu52FKqCD1s1AuE95R6wbPDIMUN82nUHQQ0b7faD7uoXa', 0, '', NULL, '', '', 'Cahsheesh'),
(68, 'junni', 'Garry', 'Bee', '09018665433', 'junnix@gmail.com', '', '$2y$10$QMFtWrInWPXeJuxm3JqDi.xVpLVkAaZimXZZSNvtbRjOdNI25OwGW', 0, '', NULL, '', '', 'Casher'),
(69, 'nice', 'Nice', 'nice', '12345678909', 'rod@jaja.com', '', '$2y$10$vtTsYG61tobixEtCexsGOuRukY9rHuWplPHAhcSn.NwqYpa0k/Qcm', 0, '', NULL, '', '', 'Casher'),
(70, 'haha', 'sampol', 'efefe', '12345678909', 'lfo@gmail.com', '', '$2y$10$CsfLEg4R1s4pyoMfo6nktOP7.K3i3dLXZPpS8mNS8Fgmk.Rnar3ze', 0, '', NULL, '', '', 'admin'),
(73, 'admin', 'ad', 'min', '09117865432', 'admin@admin.com', 'admin', 'admin123', 45, 'Male', '2013-09-11', 'Leyte', 'Tacloban', 'admin'),
(74, 'admin1', 'admin', 'min', '09773239260', 'junjun@gmail.com', '', '$2y$10$EJNFYK6pSQl6K.yB5te1o.CWNgc7moTEhq3LjzkiVtgFwCBNxbjje', 0, '', NULL, '', '', 'admin'),
(75, 'user1', 'user', 'user', '09773239260', 'user@gmail.com', '', '$2y$10$SDbMY9S9mYLMc6ZK1EvsLejB97ZcYYjJOULq4eu5GxWzW0DpwpMuq', 0, '', NULL, '', '', ''),
(76, 'john', 'Jun', 'wew', '09773239260', 'john@gmail.com', '', '$2y$10$gl1GDkICZLIt5UPro1F6jOj86ZWDaOCGbim7XWuLWUtMFjUHRBU7m', 0, '', NULL, '', '', ''),
(77, 'diony', 'DIONESIA', 'Estrada', '09773239000', 'dionesia@gmail.com', '', '$2y$10$tYMsrRcX8zCR8E13AfD1hOSdL1S1EhpE5WjXGmFOlKEYOPZ2uKZPW', 0, '', NULL, '', '', 'Cashier'),
(78, 'cashier', 'casy', 'ntahan', '12345678909', 'casy@gmail.com', '', '$2y$10$URS5n9QAHhh0hSJ935RyRuSKRcCtopXnX50Vu2HsTIeaDZr7IdFjO', 0, '', NULL, '', '', 'Cashier'),
(79, 'customer', 'customer', 'customer', '12345678919', 'cust@gmail.com', '', '$2y$10$.DXZojRY8ZRTzbXZKzZMc.1XrvNdeJkGymNUSBVUHObXgeKpru3xe', 0, '', NULL, '', '', ''),
(80, 'customer2', 'customer', 'cust', '12121212121', 'admin@test.com', '', '$2y$10$MheQISivfFcKxdEmVU2g.OeWgi6ApWaBKteFpbGL8DooVTq0m4kxu', 0, '', NULL, '', '', ''),
(81, 'new', 'new', 'new', '12345678912', 'new@gmail.com', '', '$2y$10$xR4ZrJ3l8NrUoktNbWj45u.V9F0tWDZMDo3r5tVq91tRCzC.VeNqW', 0, '', NULL, '', '', ''),
(82, 'customer3', 'customer', 'customer', '11111111112', 'test@test.test', '', '$2y$10$.EI6kCsGExJyaVPpiLYg8eCWzMW5ykCHU8H0JMv9PBgIfR4zuph7u', 0, '', NULL, '', '', ''),
(83, 'user', 'customer', 'cust', '22222222222', 'user1', '', '$2y$10$jVIl1I7.P0a4FWNFp7rE.um4N59W.Be2tCp8ehtkhZHniISJozl3q', 0, '', NULL, '', '', ''),
(86, 'jun', 'Jun', 'jun', '09233444569', 'jun@gmail.com', '', '$2y$10$e9JruTtXC7K6rkAiklai/e.zknfsffXIDhN5ZYUno6kKq3EFJBfe.', 0, '', NULL, '', '', ''),
(87, 'admin12', 'Admin', 'Admin', '09337686534', 'admin1@gmail.com', '', '$2y$10$Rc32EyaHCZtCq0hlnPYNAeUOMKypt5NANqUcbhXp2itpbaw770K1q', 0, '', NULL, '', '', 'admin'),
(88, 'rod', 'rod', 'rod', '12345678912', 'rod@huhu.com', '', '$2y$10$juqlAyp672EkVsraCAQv0.BeCl8LnWgEVCNU0m0ciFrKWVk5kKETu', 0, '', NULL, '', '', ''),
(89, 'cashier3', 'cashier', 'cash', '12222222222', 'cash@gmail.com', '', '$2y$10$duIehmOQ55OrG/l5vbauJeMujBAtSwZLBBkVgrI8hFxPwwqhThQ1.', 0, '', NULL, '', '', 'Cashier'),
(90, 'newme', 'newme', 'newyou', '11111111111', 'newme@gmail.com', '', '$2y$10$XJygRswvHByZYYXSyt/1R.UC/v21Doy1Kqv65ZRx5otkZ4REaoutK', 0, '', NULL, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_timestamp` (`timestamp`);

--
-- Indexes for table `buyandsale`
--
ALTER TABLE `buyandsale`
  ADD PRIMARY KEY (`buyid`);

--
-- Indexes for table `cardata`
--
ALTER TABLE `cardata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brand`
--
ALTER TABLE `car_brand`
  ADD PRIMARY KEY (`car_brand_id`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`car_model_id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`car_type_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `expense_table`
--
ALTER TABLE `expense_table`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `parts_table`
--
ALTER TABLE `parts_table`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`recommendid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_jd`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_job`
--
ALTER TABLE `service_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transacttable`
--
ALTER TABLE `transacttable`
  ADD PRIMARY KEY (`transid`),
  ADD KEY `transdate` (`transdate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `buyandsale`
--
ALTER TABLE `buyandsale`
  MODIFY `buyid` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cardata`
--
ALTER TABLE `cardata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `car_brand`
--
ALTER TABLE `car_brand`
  MODIFY `car_brand_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `car_model_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `car_type_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `expense_table`
--
ALTER TABLE `expense_table`
  MODIFY `expense_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parts_table`
--
ALTER TABLE `parts_table`
  MODIFY `item_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `p_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `recommendid` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_jd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `service_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `service_job`
--
ALTER TABLE `service_job`
  MODIFY `job_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `s_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `transaction_table`
--
ALTER TABLE `transaction_table`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `transacttable`
--
ALTER TABLE `transacttable`
  MODIFY `transid` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
