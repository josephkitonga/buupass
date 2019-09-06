-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2019 at 07:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buupass`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(225) NOT NULL,
  `bus_id` varchar(225) NOT NULL,
  `seat_id` varchar(225) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `id_no` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `nationality` varchar(225) NOT NULL,
  `payee_name` varchar(225) NOT NULL,
  `payee_mail` varchar(225) NOT NULL,
  `payee_mobile` varchar(225) NOT NULL,
  `system_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `booking_id`, `bus_id`, `seat_id`, `first_name`, `last_name`, `id_no`, `phone`, `nationality`, `payee_name`, `payee_mail`, `payee_mobile`, `system_date`, `departure_date`, `price`, `time_stamp`) VALUES
(18, '5d72772cb302f', 'iahD6bml6w', '1', 'Joseph', 'Kitonga', '444444', '0723940479', '764520317', 'Joseph', 'josephkitonga90@gmail.com', '0723940479', '2019-09-06', '2019-09-07', 1300, '2019-09-06 15:11:40'),
(20, '5d72889d5ffd5', 'iahD6bml6w', '1', 'Joseph', 'Kitonga', '88999', '711432437', '764520317', 'Joseph', 'josephkitonga90@gmail.com', '0723940479', '2019-09-06', '2019-09-06', 1300, '2019-09-06 16:26:05'),
(21, '5d728dfbe2c16', 'iahD6bml6w', '7', 'Joseph', 'Kitonga', '666', '711432437', '764520317', 'Joseph', 'josephkitonga90@gmail.com', '0723940479', '2019-09-06', '2019-09-07', 1300, '2019-09-06 16:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_id` varchar(225) NOT NULL,
  `client_id` varchar(225) NOT NULL,
  `no_of_seats` varchar(225) NOT NULL,
  `plate_no` varchar(225) NOT NULL,
  `map_id` varchar(225) NOT NULL,
  `form_id` varchar(225) NOT NULL,
  `to_id` varchar(2225) NOT NULL,
  `departure` date NOT NULL,
  `departure_time` time NOT NULL,
  `boarding_point` varchar(225) NOT NULL,
  `vip` int(11) NOT NULL,
  `fclass` int(11) NOT NULL,
  `business` int(11) NOT NULL,
  `normal` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_id`, `client_id`, `no_of_seats`, `plate_no`, `map_id`, `form_id`, `to_id`, `departure`, `departure_time`, `boarding_point`, `vip`, `fclass`, `business`, `normal`, `time_stamp`) VALUES
(1, 'iahD6bml6w', 'ZNwpZP3Zid', '50', 'KBZ 12356', '8tdyqqwhGs', 'mrN4jqFR3R', 'guh8eYLwcy', '2019-09-06', '16:00:00', 'Total Mombasa Road', 1700, 1500, 1300, 0, '2019-09-05 19:18:03'),
(2, 'iao6bml6w', 'GhFNHW8yEu', '50', 'KBZ 12356', '8tdyqqwhGs', 'mrN4jqFR3R', 'guh8eYLwcy', '2019-09-06', '16:00:00', 'Total Mombasa Road', 1700, 1500, 1300, 0, '2019-09-05 19:18:03'),
(3, 'io6bml6w', 'zQJRa7MTIk', '50', 'KBZ 12356', '8tdyqqwhGs', 'mrN4jqFR3R', 'guh8eYLwcy', '2019-09-06', '16:00:00', 'Total Mombasa Road', 1700, 1500, 1300, 0, '2019-09-05 19:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `bus_map`
--

CREATE TABLE `bus_map` (
  `id` int(11) NOT NULL,
  `map_id` varchar(225) NOT NULL,
  `rows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_map`
--

INSERT INTO `bus_map` (`id`, `map_id`, `rows`) VALUES
(1, '8tdyqqwhGs', 16);

-- --------------------------------------------------------

--
-- Table structure for table `chair_map`
--

CREATE TABLE `chair_map` (
  `id` int(11) NOT NULL,
  `map_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chair_map`
--

INSERT INTO `chair_map` (`id`, `map_id`, `name`, `active`, `row`) VALUES
(1, '8tdyqqwhGs', 'passenger', 1, 1),
(2, '8tdyqqwhGs', 'passenger', 1, 1),
(3, '8tdyqqwhGs', 'passenger', 1, 1),
(4, '8tdyqqwhGs', 'Driver', 1, 1),
(6, '8tdyqqwhGs', 'Passanger', 1, 2),
(7, '8tdyqqwhGs', 'Passanger', 1, 2),
(8, '8tdyqqwhGs', 'Passanger', 1, 2),
(9, '8tdyqqwhGs', 'Passanger', 1, 2),
(10, '8tdyqqwhGs', 'Passanger', 1, 3),
(11, '8tdyqqwhGs', 'Passanger', 1, 3),
(12, '8tdyqqwhGs', 'Passanger', 1, 3),
(13, '8tdyqqwhGs', 'Passanger', 1, 3),
(14, '8tdyqqwhGs', 'Passanger', 1, 4),
(15, '8tdyqqwhGs', 'Passanger', 1, 4),
(16, '8tdyqqwhGs', 'Passanger', 1, 4),
(17, '8tdyqqwhGs', 'Passanger', 1, 4),
(18, '8tdyqqwhGs', 'Passanger', 1, 5),
(19, '8tdyqqwhGs', 'Passanger', 1, 5),
(20, '8tdyqqwhGs', 'Passanger', 1, 5),
(21, '8tdyqqwhGs', 'Passanger', 1, 5),
(22, '8tdyqqwhGs', 'Passanger', 1, 6),
(23, '8tdyqqwhGs', 'Passanger', 1, 6),
(24, '8tdyqqwhGs', 'Passanger', 1, 6),
(25, '8tdyqqwhGs', 'Passanger', 1, 6),
(26, '8tdyqqwhGs', 'Passanger', 1, 7),
(27, '8tdyqqwhGs', 'Passanger', 1, 7),
(28, '8tdyqqwhGs', 'Passanger', 1, 7),
(29, '8tdyqqwhGs', 'Passanger', 1, 7),
(30, '8tdyqqwhGs', 'Passanger', 1, 7),
(31, '8tdyqqwhGs', 'Passanger', 1, 8),
(32, '8tdyqqwhGs', 'Passanger', 1, 8),
(33, '8tdyqqwhGs', 'Passanger', 1, 8),
(34, '8tdyqqwhGs', 'Passanger', 1, 8),
(35, '8tdyqqwhGs', 'Passanger', 1, 9),
(36, '8tdyqqwhGs', 'Passanger', 1, 9),
(37, '8tdyqqwhGs', 'Passanger', 1, 9),
(38, '8tdyqqwhGs', 'Passanger', 1, 9),
(39, '8tdyqqwhGs', 'Passanger', 1, 10),
(40, '8tdyqqwhGs', 'Passanger', 1, 10),
(41, '8tdyqqwhGs', 'Passanger', 1, 10),
(42, '8tdyqqwhGs', 'Passanger', 1, 10),
(43, '8tdyqqwhGs', 'Passanger', 1, 11),
(44, '8tdyqqwhGs', 'Passanger', 1, 11),
(45, '8tdyqqwhGs', 'Passanger', 1, 11),
(46, '8tdyqqwhGs', 'Passanger', 1, 11),
(47, '8tdyqqwhGs', 'Passanger', 1, 12),
(48, '8tdyqqwhGs', 'Passanger', 1, 12),
(49, '8tdyqqwhGs', 'Passanger', 1, 12),
(50, '8tdyqqwhGs', 'Passanger', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `client_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `logo_url` varchar(225) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_id`, `name`, `contact`, `logo_url`, `date_registered`) VALUES
(1, 'ZNwpZP3Zid', 'Easy Coach', '', 'https://buupass.com/app/themes/bus/assets/operators-logo/easycoach.png', '2019-09-05 14:34:00'),
(2, 'GhFNHW8yEu', 'Modern Coast', '', 'https://buupass.com/app/themes/bus/assets/operators-logo/moderncoast.png', '2019-09-05 14:34:00'),
(3, 'zQJRa7MTIk', 'Green Line', '', 'https://buupass.com/app/themes/bus/assets/operators-logo/greenline.png', '2019-09-05 14:36:23'),
(4, 'iahD6bml6w', 'Eashuttles', '', 'https://buupass.com/app/themes/bus/assets/operators-logo/eashuttles.png', '2019-09-05 14:36:23'),
(5, '9c3YxtaywZ', 'comming soon', '', 'https://buupass.com/app/themes/bus/assets/operators-logo/more.png', '2019-09-05 17:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_id`, `name`, `description`) VALUES
(1, 'guh8eYLwcy', 'Mombasa', ''),
(2, 'mrN4jqFR3R', 'Nairobi', ''),
(3, 'fsDLMfCyyN', 'Nakuru', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_country`
--

CREATE TABLE `m_country` (
  `id` int(11) NOT NULL,
  `country_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `iso` varchar(255) NOT NULL,
  `country_iso_two` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `state` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_country`
--

INSERT INTO `m_country` (`id`, `country_id`, `name`, `code`, `iso`, `country_iso_two`, `full_name`, `active`, `state`, `created_at`, `update_at`) VALUES
(1, '738357424', 'Afghanistan', '93', 'AF', 'AFG', 'AFGHANISTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(2, '938926964', 'Albania', '355', 'AL', 'ALB', 'ALBANIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(3, '280621020', 'Algeria', '213', 'DZ', 'DZA', 'ALGERIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(4, '340710973', 'American Samoa', '1684', 'AS', 'ASM', 'AMERICAN SAMOA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(5, '724533502', 'Andorra', '376', 'AD', 'AND', 'ANDORRA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(6, '221745825', 'Angola', '244', 'AO', 'AGO', 'ANGOLA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(7, '144973751', 'Anguilla', '1264', 'AI', 'AIA', 'ANGUILLA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(8, '191764979', 'Antarctica', '0', 'AQ', NULL, 'ANTARCTICA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(9, '580530440', 'Antigua and Barbuda', '1268', 'AG', 'ATG', 'ANTIGUA AND BARBUDA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(10, '184778278', 'Argentina', '54', 'AR', 'ARG', 'ARGENTINA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(11, '426979957', 'Armenia', '374', 'AM', 'ARM', 'ARMENIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(12, '952886439', 'Aruba', '297', 'AW', 'ABW', 'ARUBA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(13, '413081835', 'Australia', '61', 'AU', 'AUS', 'AUSTRALIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(14, '385385492', 'Austria', '43', 'AT', 'AUT', 'AUSTRIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(15, '770166816', 'Azerbaijan', '994', 'AZ', 'AZE', 'AZERBAIJAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(16, '534462894', 'Bahamas', '1242', 'BS', 'BHS', 'BAHAMAS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(17, '754093203', 'Bahrain', '973', 'BH', 'BHR', 'BAHRAIN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(18, '939805259', 'Bangladesh', '880', 'BD', 'BGD', 'BANGLADESH', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(19, '489916867', 'Barbados', '1246', 'BB', 'BRB', 'BARBADOS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(20, '785480518', 'Belarus', '375', 'BY', 'BLR', 'BELARUS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(21, '523334799', 'Belgium', '32', 'BE', 'BEL', 'BELGIUM', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(22, '598658822', 'Belize', '501', 'BZ', 'BLZ', 'BELIZE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(23, '453173015', 'Benin', '229', 'BJ', 'BEN', 'BENIN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(24, '248401809', 'Bermuda', '1441', 'BM', 'BMU', 'BERMUDA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(25, '593438907', 'Bhutan', '975', 'BT', 'BTN', 'BHUTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(26, '628001903', 'Bolivia', '591', 'BO', 'BOL', 'BOLIVIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(27, '871373416', 'Bosnia and Herzegovina', '387', 'BA', 'BIH', 'BOSNIA AND HERZEGOVINA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(28, '308332517', 'Botswana', '267', 'BW', 'BWA', 'BOTSWANA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(29, '938050122', 'Bouvet Island', '0', 'BV', NULL, 'BOUVET ISLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(30, '181357180', 'Brazil', '55', 'BR', 'BRA', 'BRAZIL', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(31, '451077317', 'British Indian Ocean Territory', '246', 'IO', NULL, 'BRITISH INDIAN OCEAN TERRITORY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(32, '389885427', 'Brunei Darussalam', '673', 'BN', 'BRN', 'BRUNEI DARUSSALAM', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(33, '811734274', 'Bulgaria', '359', 'BG', 'BGR', 'BULGARIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(34, '491880291', 'Burkina Faso', '226', 'BF', 'BFA', 'BURKINA FASO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(35, '828813270', 'Burundi', '257', 'BI', 'BDI', 'BURUNDI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(36, '530314748', 'Cambodia', '855', 'KH', 'KHM', 'CAMBODIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(37, '998344945', 'Cameroon', '237', 'CM', 'CMR', 'CAMEROON', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(38, '706793751', 'Canada', '1', 'CA', 'CAN', 'CANADA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(39, '733101519', 'Cape Verde', '238', 'CV', 'CPV', 'CAPE VERDE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(40, '124233072', 'Cayman Islands', '1345', 'KY', 'CYM', 'CAYMAN ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(41, '361688427', 'Central African Republic', '236', 'CF', 'CAF', 'CENTRAL AFRICAN REPUBLIC', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(42, '965899793', 'Chad', '235', 'TD', 'TCD', 'CHAD', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(43, '713145397', 'Chile', '56', 'CL', 'CHL', 'CHILE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(44, '720502053', 'China', '86', 'CN', 'CHN', 'CHINA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(45, '287214066', 'Christmas Island', '61', 'CX', NULL, 'CHRISTMAS ISLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(46, '835924187', 'Cocos (Keeling) Islands', '672', 'CC', NULL, 'COCOS (KEELING) ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(47, '934244494', 'Colombia', '57', 'CO', 'COL', 'COLOMBIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(48, '900096139', 'Comoros', '269', 'KM', 'COM', 'COMOROS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(49, '828835892', 'Congo', '242', 'CG', 'COG', 'CONGO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(50, '222710084', 'Congo, the Democratic Republic of the', '242', 'CD', 'COD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(51, '685291937', 'Cook Islands', '682', 'CK', 'COK', 'COOK ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(52, '645756664', 'Costa Rica', '506', 'CR', 'CRI', 'COSTA RICA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(53, '483182351', 'Cote D\'Ivoire', '225', 'CI', 'CIV', 'COTE D\'IVOIRE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(54, '182866413', 'Croatia', '385', 'HR', 'HRV', 'CROATIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(55, '573741435', 'Cuba', '53', 'CU', 'CUB', 'CUBA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(56, '458643880', 'Cyprus', '357', 'CY', 'CYP', 'CYPRUS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(57, '747671990', 'Czech Republic', '420', 'CZ', 'CZE', 'CZECH REPUBLIC', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(58, '632836152', 'Denmark', '45', 'DK', 'DNK', 'DENMARK', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(59, '882774483', 'Djibouti', '253', 'DJ', 'DJI', 'DJIBOUTI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(60, '941358704', 'Dominica', '1767', 'DM', 'DMA', 'DOMINICA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(61, '477128981', 'Dominican Republic', '1809', 'DO', 'DOM', 'DOMINICAN REPUBLIC', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(62, '533117986', 'Ecuador', '593', 'EC', 'ECU', 'ECUADOR', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(63, '139788669', 'Egypt', '20', 'EG', 'EGY', 'EGYPT', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(64, '192087435', 'El Salvador', '503', 'SV', 'SLV', 'EL SALVADOR', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(65, '489338210', 'Equatorial Guinea', '240', 'GQ', 'GNQ', 'EQUATORIAL GUINEA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(66, '873539482', 'Eritrea', '291', 'ER', 'ERI', 'ERITREA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(67, '764015197', 'Estonia', '372', 'EE', 'EST', 'ESTONIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(68, '185373241', 'Ethiopia', '251', 'ET', 'ETH', 'ETHIOPIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(69, '324862272', 'Falkland Islands (Malvinas)', '500', 'FK', 'FLK', 'FALKLAND ISLANDS (MALVINAS)', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(70, '639809723', 'Faroe Islands', '298', 'FO', 'FRO', 'FAROE ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(71, '271243863', 'Fiji', '679', 'FJ', 'FJI', 'FIJI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(72, '238787379', 'Finland', '358', 'FI', 'FIN', 'FINLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(73, '546743219', 'France', '33', 'FR', 'FRA', 'FRANCE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(74, '858217960', 'French Guiana', '594', 'GF', 'GUF', 'FRENCH GUIANA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(75, '262658322', 'French Polynesia', '689', 'PF', 'PYF', 'FRENCH POLYNESIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(76, '680343143', 'French Southern Territories', '0', 'TF', NULL, 'FRENCH SOUTHERN TERRITORIES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(77, '475256814', 'Gabon', '241', 'GA', 'GAB', 'GABON', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(78, '379798920', 'Gambia', '220', 'GM', 'GMB', 'GAMBIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(79, '288785979', 'Georgia', '995', 'GE', 'GEO', 'GEORGIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(80, '951087736', 'Germany', '49', 'DE', 'DEU', 'GERMANY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(81, '262587983', 'Ghana', '233', 'GH', 'GHA', 'GHANA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(82, '167293179', 'Gibraltar', '350', 'GI', 'GIB', 'GIBRALTAR', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(83, '959834231', 'Greece', '30', 'GR', 'GRC', 'GREECE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(84, '728770861', 'Greenland', '299', 'GL', 'GRL', 'GREENLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(85, '990627835', 'Grenada', '1473', 'GD', 'GRD', 'GRENADA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(86, '381901157', 'Guadeloupe', '590', 'GP', 'GLP', 'GUADELOUPE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(87, '972949904', 'Guam', '1671', 'GU', 'GUM', 'GUAM', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(88, '856498080', 'Guatemala', '502', 'GT', 'GTM', 'GUATEMALA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(89, '423312483', 'Guinea', '224', 'GN', 'GIN', 'GUINEA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(90, '910070215', 'Guinea-Bissau', '245', 'GW', 'GNB', 'GUINEA-BISSAU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(91, '497995808', 'Guyana', '592', 'GY', 'GUY', 'GUYANA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(92, '772930526', 'Haiti', '509', 'HT', 'HTI', 'HAITI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(93, '771325711', 'Heard Island and Mcdonald Islands', '0', 'HM', NULL, 'HEARD ISLAND AND MCDONALD ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(94, '166462320', 'Holy See (Vatican City State)', '39', 'VA', 'VAT', 'HOLY SEE (VATICAN CITY STATE)', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(95, '738267284', 'Honduras', '504', 'HN', 'HND', 'HONDURAS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(96, '761436854', 'Hong Kong', '852', 'HK', 'HKG', 'HONG KONG', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(97, '789138258', 'Hungary', '36', 'HU', 'HUN', 'HUNGARY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(98, '937817917', 'Iceland', '354', 'IS', 'ISL', 'ICELAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(99, '117879213', 'India', '91', 'IN', 'IND', 'INDIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(100, '769971954', 'Indonesia', '62', 'ID', 'IDN', 'INDONESIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(101, '846326172', 'Iran, Islamic Republic of', '98', 'IR', 'IRN', 'IRAN, ISLAMIC REPUBLIC OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(102, '611205962', 'Iraq', '964', 'IQ', 'IRQ', 'IRAQ', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(103, '676048893', 'Ireland', '353', 'IE', 'IRL', 'IRELAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(104, '576107913', 'Israel', '972', 'IL', 'ISR', 'ISRAEL', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(105, '403491130', 'Italy', '39', 'IT', 'ITA', 'ITALY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(106, '808684400', 'Jamaica', '1876', 'JM', 'JAM', 'JAMAICA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(107, '975543472', 'Japan', '81', 'JP', 'JPN', 'JAPAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(108, '139007239', 'Jordan', '962', 'JO', 'JOR', 'JORDAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(109, '799185408', 'Kazakhstan', '7', 'KZ', 'KAZ', 'KAZAKHSTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(110, '764520317', 'Kenya', '254', 'KE', 'KEN', 'KENYA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(111, '903146328', 'Kiribati', '686', 'KI', 'KIR', 'KIRIBATI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(112, '953166800', 'Korea, Democratic People\'s Republic of', '850', 'KP', 'PRK', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(113, '104770852', 'Korea, Republic of', '82', 'KR', 'KOR', 'KOREA, REPUBLIC OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(114, '983799559', 'Kuwait', '965', 'KW', 'KWT', 'KUWAIT', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(115, '966320506', 'Kyrgyzstan', '996', 'KG', 'KGZ', 'KYRGYZSTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(116, '155640224', 'Lao People\'s Democratic Republic', '856', 'LA', 'LAO', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(117, '922384507', 'Latvia', '371', 'LV', 'LVA', 'LATVIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(118, '516864721', 'Lebanon', '961', 'LB', 'LBN', 'LEBANON', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(119, '496487004', 'Lesotho', '266', 'LS', 'LSO', 'LESOTHO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(120, '225730198', 'Liberia', '231', 'LR', 'LBR', 'LIBERIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(121, '813006305', 'Libyan Arab Jamahiriya', '218', 'LY', 'LBY', 'LIBYAN ARAB JAMAHIRIYA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(122, '570437056', 'Liechtenstein', '423', 'LI', 'LIE', 'LIECHTENSTEIN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(123, '488753116', 'Lithuania', '370', 'LT', 'LTU', 'LITHUANIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(124, '132903342', 'Luxembourg', '352', 'LU', 'LUX', 'LUXEMBOURG', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(125, '754815290', 'Macao', '853', 'MO', 'MAC', 'MACAO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(126, '615122033', 'Macedonia, the Former Yugoslav Republic of', '389', 'MK', 'MKD', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(127, '476828417', 'Madagascar', '261', 'MG', 'MDG', 'MADAGASCAR', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(128, '509896130', 'Malawi', '265', 'MW', 'MWI', 'MALAWI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(129, '418472211', 'Malaysia', '60', 'MY', 'MYS', 'MALAYSIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(130, '787902164', 'Maldives', '960', 'MV', 'MDV', 'MALDIVES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(131, '765111208', 'Mali', '223', 'ML', 'MLI', 'MALI', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(132, '876619999', 'Malta', '356', 'MT', 'MLT', 'MALTA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(133, '922921342', 'Marshall Islands', '692', 'MH', 'MHL', 'MARSHALL ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(134, '706488115', 'Martinique', '596', 'MQ', 'MTQ', 'MARTINIQUE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(135, '463657676', 'Mauritania', '222', 'MR', 'MRT', 'MAURITANIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(136, '139171562', 'Mauritius', '230', 'MU', 'MUS', 'MAURITIUS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(137, '328598176', 'Mayotte', '269', 'YT', NULL, 'MAYOTTE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(138, '536251697', 'Mexico', '52', 'MX', 'MEX', 'MEXICO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(139, '517556146', 'Micronesia, Federated States of', '691', 'FM', 'FSM', 'MICRONESIA, FEDERATED STATES OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(140, '919809536', 'Moldova, Republic of', '373', 'MD', 'MDA', 'MOLDOVA, REPUBLIC OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(141, '666674860', 'Monaco', '377', 'MC', 'MCO', 'MONACO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(142, '975161738', 'Mongolia', '976', 'MN', 'MNG', 'MONGOLIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(143, '492683447', 'Montserrat', '1664', 'MS', 'MSR', 'MONTSERRAT', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(144, '554115631', 'Morocco', '212', 'MA', 'MAR', 'MOROCCO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(145, '441152184', 'Mozambique', '258', 'MZ', 'MOZ', 'MOZAMBIQUE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(146, '171717816', 'Myanmar', '95', 'MM', 'MMR', 'MYANMAR', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(147, '935378888', 'Namibia', '264', 'NA', 'NAM', 'NAMIBIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(148, '215960669', 'Nauru', '674', 'NR', 'NRU', 'NAURU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(149, '324653265', 'Nepal', '977', 'NP', 'NPL', 'NEPAL', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(150, '704647317', 'Netherlands', '31', 'NL', 'NLD', 'NETHERLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(151, '643067942', 'Netherlands Antilles', '599', 'AN', 'ANT', 'NETHERLANDS ANTILLES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(152, '804013810', 'New Caledonia', '687', 'NC', 'NCL', 'NEW CALEDONIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(153, '534719071', 'New Zealand', '64', 'NZ', 'NZL', 'NEW ZEALAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(154, '237126755', 'Nicaragua', '505', 'NI', 'NIC', 'NICARAGUA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(155, '398795826', 'Niger', '227', 'NE', 'NER', 'NIGER', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(156, '144029382', 'Nigeria', '234', 'NG', 'NGA', 'NIGERIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(157, '744356319', 'Niue', '683', 'NU', 'NIU', 'NIUE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(158, '124784572', 'Norfolk Island', '672', 'NF', 'NFK', 'NORFOLK ISLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(159, '148148176', 'Northern Mariana Islands', '1670', 'MP', 'MNP', 'NORTHERN MARIANA ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(160, '875104162', 'Norway', '47', 'NO', 'NOR', 'NORWAY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(161, '659282210', 'Oman', '968', 'OM', 'OMN', 'OMAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(162, '856985182', 'Pakistan', '92', 'PK', 'PAK', 'PAKISTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(163, '654251894', 'Palau', '680', 'PW', 'PLW', 'PALAU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(164, '870136891', 'Palestinian Territory, Occupied', '970', 'PS', NULL, 'PALESTINIAN TERRITORY, OCCUPIED', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(165, '492998502', 'Panama', '507', 'PA', 'PAN', 'PANAMA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(166, '548927133', 'Papua New Guinea', '675', 'PG', 'PNG', 'PAPUA NEW GUINEA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(167, '472157833', 'Paraguay', '595', 'PY', 'PRY', 'PARAGUAY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(168, '850986280', 'Peru', '51', 'PE', 'PER', 'PERU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(169, '862833527', 'Philippines', '63', 'PH', 'PHL', 'PHILIPPINES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(170, '714521930', 'Pitcairn', '0', 'PN', 'PCN', 'PITCAIRN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(171, '668417766', 'Poland', '48', 'PL', 'POL', 'POLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(172, '848283697', 'Portugal', '351', 'PT', 'PRT', 'PORTUGAL', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(173, '896589375', 'Puerto Rico', '1787', 'PR', 'PRI', 'PUERTO RICO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(174, '589194199', 'Qatar', '974', 'QA', 'QAT', 'QATAR', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(175, '779506286', 'Reunion', '262', 'RE', 'REU', 'REUNION', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(176, '466468270', 'Romania', '40', 'RO', 'ROM', 'ROMANIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(177, '848431784', 'Russian Federation', '70', 'RU', 'RUS', 'RUSSIAN FEDERATION', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(178, '109981261', 'Rwanda', '250', 'RW', 'RWA', 'RWANDA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(179, '456005992', 'Saint Helena', '290', 'SH', 'SHN', 'SAINT HELENA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(180, '936599853', 'Saint Kitts and Nevis', '1869', 'KN', 'KNA', 'SAINT KITTS AND NEVIS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(181, '240713313', 'Saint Lucia', '1758', 'LC', 'LCA', 'SAINT LUCIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(182, '780725732', 'Saint Pierre and Miquelon', '508', 'PM', 'SPM', 'SAINT PIERRE AND MIQUELON', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(183, '514246941', 'Saint Vincent and the Grenadines', '1784', 'VC', 'VCT', 'SAINT VINCENT AND THE GRENADINES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(184, '262370528', 'Samoa', '684', 'WS', 'WSM', 'SAMOA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(185, '617954899', 'San Marino', '378', 'SM', 'SMR', 'SAN MARINO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(186, '605755726', 'Sao Tome and Principe', '239', 'ST', 'STP', 'SAO TOME AND PRINCIPE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(187, '205451970', 'Saudi Arabia', '966', 'SA', 'SAU', 'SAUDI ARABIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(188, '546687439', 'Senegal', '221', 'SN', 'SEN', 'SENEGAL', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(189, '156521184', 'Serbia and Montenegro', '381', 'CS', NULL, 'SERBIA AND MONTENEGRO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(190, '844308144', 'Seychelles', '248', 'SC', 'SYC', 'SEYCHELLES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(191, '369359659', 'Sierra Leone', '232', 'SL', 'SLE', 'SIERRA LEONE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(192, '300036767', 'Singapore', '65', 'SG', 'SGP', 'SINGAPORE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(193, '874233078', 'Slovakia', '421', 'SK', 'SVK', 'SLOVAKIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(194, '374512139', 'Slovenia', '386', 'SI', 'SVN', 'SLOVENIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(195, '836319651', 'Solomon Islands', '677', 'SB', 'SLB', 'SOLOMON ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(196, '234475059', 'Somalia', '252', 'SO', 'SOM', 'SOMALIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(197, '467086705', 'South Africa', '27', 'ZA', 'ZAF', 'SOUTH AFRICA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(198, '169790509', 'South Georgia and the South Sandwich Islands', '0', 'GS', NULL, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(199, '391140070', 'Spain', '34', 'ES', 'ESP', 'SPAIN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(200, '617782934', 'Sri Lanka', '94', 'LK', 'LKA', 'SRI LANKA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(201, '922018203', 'Sudan', '249', 'SD', 'SDN', 'SUDAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(202, '644095190', 'Suriname', '597', 'SR', 'SUR', 'SURINAME', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(203, '697925753', 'Svalbard and Jan Mayen', '47', 'SJ', 'SJM', 'SVALBARD AND JAN MAYEN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(204, '289364423', 'Swaziland', '268', 'SZ', 'SWZ', 'SWAZILAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(205, '790385238', 'Sweden', '46', 'SE', 'SWE', 'SWEDEN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(206, '832943340', 'Switzerland', '41', 'CH', 'CHE', 'SWITZERLAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(207, '607400155', 'Syrian Arab Republic', '963', 'SY', 'SYR', 'SYRIAN ARAB REPUBLIC', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(208, '574419118', 'Taiwan, Province of China', '886', 'TW', 'TWN', 'TAIWAN, PROVINCE OF CHINA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(209, '476673474', 'Tajikistan', '992', 'TJ', 'TJK', 'TAJIKISTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(210, '272515314', 'Tanzania, United Republic of', '255', 'TZ', 'TZA', 'TANZANIA, UNITED REPUBLIC OF', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(211, '729778838', 'Thailand', '66', 'TH', 'THA', 'THAILAND', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(212, '331678478', 'Timor-Leste', '670', 'TL', NULL, 'TIMOR-LESTE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(213, '987551542', 'Togo', '228', 'TG', 'TGO', 'TOGO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(214, '388593418', 'Tokelau', '690', 'TK', 'TKL', 'TOKELAU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(215, '436211501', 'Tonga', '676', 'TO', 'TON', 'TONGA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(216, '625536277', 'Trinidad and Tobago', '1868', 'TT', 'TTO', 'TRINIDAD AND TOBAGO', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(217, '666557159', 'Tunisia', '216', 'TN', 'TUN', 'TUNISIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(218, '947295899', 'Turkey', '90', 'TR', 'TUR', 'TURKEY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(219, '744288200', 'Turkmenistan', '7370', 'TM', 'TKM', 'TURKMENISTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(220, '560962825', 'Turks and Caicos Islands', '1649', 'TC', 'TCA', 'TURKS AND CAICOS ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(221, '503663895', 'Tuvalu', '688', 'TV', 'TUV', 'TUVALU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(222, '892542640', 'Uganda', '256', 'UG', 'UGA', 'UGANDA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(223, '385686783', 'Ukraine', '380', 'UA', 'UKR', 'UKRAINE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(224, '869117137', 'United Arab Emirates', '971', 'AE', 'ARE', 'UNITED ARAB EMIRATES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(225, '291639554', 'United Kingdom', '44', 'GB', 'GBR', 'UNITED KINGDOM', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(226, '595894158', 'United States', '1', 'US', 'USA', 'UNITED STATES', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(227, '858571599', 'United States Minor Outlying Islands', '1', 'UM', NULL, 'UNITED STATES MINOR OUTLYING ISLANDS', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(228, '517103606', 'Uruguay', '598', 'UY', 'URY', 'URUGUAY', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(229, '465833923', 'Uzbekistan', '998', 'UZ', 'UZB', 'UZBEKISTAN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(230, '495284041', 'Vanuatu', '678', 'VU', 'VUT', 'VANUATU', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(231, '559065563', 'Venezuela', '58', 'VE', 'VEN', 'VENEZUELA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(232, '779161510', 'Viet Nam', '84', 'VN', 'VNM', 'VIET NAM', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(233, '713462305', 'Virgin Islands, British', '1284', 'VG', 'VGB', 'VIRGIN ISLANDS, BRITISH', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(234, '783056535', 'Virgin Islands, U.s.', '1340', 'VI', 'VIR', 'VIRGIN ISLANDS, U.S.', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(235, '812749853', 'Wallis and Futuna', '681', 'WF', 'WLF', 'WALLIS AND FUTUNA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(236, '170823002', 'Western Sahara', '212', 'EH', 'ESH', 'WESTERN SAHARA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(237, '450996608', 'Yemen', '967', 'YE', 'YEM', 'YEMEN', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(238, '456065232', 'Zambia', '260', 'ZM', 'ZMB', 'ZAMBIA', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39'),
(239, '324261593', 'Zimbabwe', '263', 'ZW', 'ZWE', 'ZIMBABWE', 0, 0, '2017-09-27 03:20:39', '2017-09-27 03:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `full_name` text NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `user_type_id` varchar(255) NOT NULL,
  `user_account_id` varchar(225) NOT NULL,
  `nssf_pin` varchar(255) NOT NULL,
  `nhif_pin` varchar(255) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `employee_code` varchar(225) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  `reset` int(11) NOT NULL DEFAULT '1',
  `status_id` int(11) NOT NULL DEFAULT '1',
  `referrals_id` varchar(225) NOT NULL,
  `branch_id` varchar(225) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `full_name`, `phone_no`, `email`, `password`, `national_id`, `user_type_id`, `user_account_id`, `nssf_pin`, `nhif_pin`, `department_id`, `employee_code`, `updated_at`, `created_at`, `active`, `reset`, `status_id`, `referrals_id`, `branch_id`, `admin`, `time_stamp`) VALUES
(1, '8iiuy65', 'Joseph Kitonga', '00', 'josephkitonga90@gmail.com', '4090', '', '48414324554', '234fty6', '', '', '5c90b0247cd5a', '', '2019-08-14 15:52:57', '2019-04-24 20:58:51', 1, 1, 1, 'kfc0IubbA0', '5cc44bb5c811a', 1, '2019-08-19 07:11:14'),
(3, 'iiu89066', 'Alphones', '', 'alphones@gmail.com', '4090', '', '', '', '', '', '', '', '2019-08-21 22:43:55', '2019-08-21 22:39:18', 1, 1, 1, '8iiuy65', '', 0, '2019-08-21 22:39:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_map`
--
ALTER TABLE `bus_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chair_map`
--
ALTER TABLE `chair_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_country`
--
ALTER TABLE `m_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bus_map`
--
ALTER TABLE `bus_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chair_map`
--
ALTER TABLE `chair_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_country`
--
ALTER TABLE `m_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
