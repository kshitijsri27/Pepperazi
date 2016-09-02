-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 03:32 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pepperazi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, ''),
(2, ''),
(4, 'Chinese Platter');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `text`) VALUES
(1, 'anubhav', 'annu123456789@gmail.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `loginandregistration`
--

CREATE TABLE IF NOT EXISTS `loginandregistration` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(30) NOT NULL,
  `Last Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `Mobile` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginandregistration`
--

INSERT INTO `loginandregistration` (`ID`, `First Name`, `Last Name`, `Email`, `password`, `Mobile`) VALUES
(1, 'ANUBHAV', 'MISHRA', 'annu123456789@gmail.com', '1380ff91dd6baa002b0a3d23e9a8d263', '9990431502'),
(2, 'kshitij', 'srivastava', 'jijaji@jiji.com', '3510b37323087d9c127d127a5728305f', '9891091913');

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE IF NOT EXISTS `menu1` (
  `id` int(10) NOT NULL,
  `items` varchar(30) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`id`, `items`, `price`) VALUES
(1, 'Karara Hara Bhara Kabab', 295),
(1, '', 0),
(1, 'Dahi Ke kabab', 295),
(1, 'Hariyali Paneer Tikka', 325),
(1, 'Shakahari Kabab Platter', 425),
(1, 'Bharawan Tandoori Tangri', 325),
(1, 'Kalmi Kabab', 395),
(1, 'Till ka Tukra', 395),
(1, 'Burra Kebab', 395),
(1, 'Mutton Gelafi', 395),
(1, 'Channa Masala', 285),
(1, 'Rajma', 285),
(6, 'Chicken Tikka', 420),
(6, 'Chicken Burra', 430),
(6, 'Karahi Chicken', 350),
(6, 'Aloo Gosht', 230),
(6, 'Shahi Paneer', 245),
(6, 'Dal Makhani', 210),
(12, 'potato wedges', 250),
(12, 'onion rings', 250),
(12, 'cauliflower bites', 300),
(12, 'bbq mushroom ', 320),
(12, 'loaded nachos', 350),
(13, 'minestrone', 150),
(13, 'chicken mint', 180),
(13, 'sweet corn', 150),
(13, 'hot n sour', 150),
(13, 'lemon coriander', 150),
(18, 'fish pakora', 100),
(18, 'fried fish', 100),
(18, 'pepper fish', 100),
(18, 'drums of heaven', 100),
(18, 'chilli chicken', 100),
(18, 'fried prawn', 100),
(18, 'prawn pakoda', 120),
(18, 'veg thupka', 75),
(18, 'egg thupka', 80),
(18, 'chicken thupka', 90),
(18, 'chilli paneer dry', 80),
(18, 'paneer pakoda', 50),
(18, 'egg gravy noodles', 60),
(18, 'chicken gravy noodles', 80),
(18, 'chilli mushroom', 110),
(18, 'chilli babycorn', 95),
(18, 'veg manchurian', 85),
(18, 'chilli chicken', 90),
(18, 'lemon chiicken', 90),
(18, 'garlic chicken', 90),
(8, 'paneer tiikka pudeena', 335),
(8, 'paneer tikka ajawaini', 335),
(8, 'veg seekh kabab', 335),
(8, 'tandoori khumb', 335),
(8, 'tandoori phool', 335),
(8, 'tandoori aaloo dilnaaz', 305),
(8, 'broccoli tandoori', 305),
(8, 'palak seekh kabab', 335),
(8, 'tandoori dawat', 665),
(8, 'tandoori pomfret', 1295),
(23, 'margherita pizza', 0),
(23, 'piri piri pizza', 0),
(23, 'four season pizza', 0),
(23, 'pepper chicken', 0),
(23, 'cheese streaks', 0),
(23, 'diet bowl', 0),
(23, 'fruit smoothie', 150),
(23, 'choco shoko', 150),
(23, 'oreo shake', 180),
(23, 'mars attack', 180),
(23, 'snickers shake', 180),
(23, 'banana caramel smoothie', 150),
(23, 'toblerone trouble', 150),
(10, 'masaala chhach', 0),
(10, 'sweet lassi', 145),
(10, 'mojito', 165),
(10, 'tandoori rolled paneer', 325),
(10, 'vegetable galouti', 325),
(10, 'bhutte ki tikki', 295),
(10, 'hara bhara kabab', 295),
(10, 'dahi ke kabab', 295),
(10, 'bharwaan mushroom', 295),
(10, 'makai malai seekh', 295),
(10, 'masaala chhach', 145),
(10, 'sweet lassi', 145),
(10, 'mojito', 165),
(10, 'tandoori rolled paneer', 325),
(10, 'vegetable galouti', 325),
(10, 'bhutte ki tikki', 295),
(10, 'hara bhara kabab', 295),
(10, 'dahi ke kabab', 295),
(10, 'bharwaan mushroom', 295),
(10, 'makai malai seekh', 295),
(16, 'greek salad', 295),
(16, 'ceasar salad', 295),
(16, 'vegeterian burger', 195),
(16, 'chicken sandwich', 185),
(16, 'hara bhara kabab', 250),
(16, 'chicken masala tikka', 250),
(16, 'paneer tikka', 150),
(16, 'chicken seekh wrap', 250),
(16, 'mutton seekh wrap', 250),
(16, 'veg seekh kabab', 150),
(26, 'daal makhni', 80),
(26, 'handi ka rara paneer', 125),
(26, 'steamed rice', 70),
(26, 'sabz miloni', 90),
(26, 'murg do pyaza', 220),
(27, 'tandoori paneer tikka', 200),
(27, 'dingri masala', 300),
(27, 'falafel', 100),
(27, 'cajun potatoes', 100),
(27, 'punjabi tangdi', 150),
(27, 'lebanese prawns', 150),
(27, 'chicken teriyaki', 200),
(27, 'chicken dum biryani', 200),
(27, 'bhuna gosht', 250),
(27, 'black dal', 100),
(28, 'plane jane', 80),
(28, 'bombay veg sandwich', 100),
(28, 'cheesy veg sandwich', 120),
(28, 'road runner', 70),
(28, 'gobbler', 80),
(28, 'old school', 90),
(28, 'new school', 140),
(28, 'the bogart', 150),
(28, 'desi tadka fries', 80),
(28, 'cheesy baked fries', 100),
(29, 'tandoorii phool', 450),
(29, 'tandoori aaloo', 450),
(29, 'veg seekh kabab', 350),
(29, 'dahi ke kabab', 350),
(29, 'kastoori kabab', 445),
(29, 'peshawari kabab', 495),
(29, 'pindi chhole', 435),
(29, 'palak paneer', 435),
(29, 'paneer makhani', 435),
(29, 'dal makhani', 435),
(30, 'egg roll single', 37),
(30, 'egg roll double', 42),
(30, 'chicken roll single', 76),
(30, 'chicken roll double', 96),
(30, 'chicken egg roll', 85),
(30, 'mutton roll single', 110),
(30, 'mutton roll double', 170),
(30, 'shami kaba roll', 100),
(30, 'shami kabab  double roll', 170),
(30, 'mutton seekh kabab single', 101),
(31, 'creamy mushroom', 170),
(31, 'cottage cheese steak', 170),
(31, 'virgin mojito', 140),
(31, 'winter sunshine', 140),
(31, 'ice tea', 140),
(31, 'gingerale', 130),
(31, 'kuchnayi', 130),
(31, 'vegetable lasagne', 210),
(31, 'chicken lasagne', 250),
(31, 'lamb lasagne', 270),
(32, 'kalmi kebab', 190),
(33, 'lehsuni tangdi', 200),
(33, 'kalmi kabab', 200),
(32, 'lehsuni tangdi', 190),
(32, 'paneer makhni', 260),
(32, 'kadai paneer', 260),
(33, 'paneer makhni', 270),
(33, 'kadai paneer', 270),
(32, 'murg kadai', 400),
(32, 'murg makhni', 400),
(32, 'murg rara', 400),
(33, 'murg kadai', 425),
(33, 'murg makhni', 425),
(33, 'murg rara', 425),
(32, 'dahi de kabab', 225),
(32, 'makki de kabab', 210),
(33, 'dahi de kabab', 250),
(33, 'makki de kabab', 220),
(32, 'tilla kulfi', 50),
(33, 'tilla kulfi', 55);

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE IF NOT EXISTS `menu2` (
  `Id` int(10) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `items` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `shipping` int(11) NOT NULL DEFAULT '50',
  `quantity` int(11) NOT NULL DEFAULT '1000'
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`Id`, `menu_id`, `items`, `price`, `shipping`, `quantity`) VALUES
(1, 1, 'Bharawan Tandoori Tangri', 325, 50, 1000),
(1, 2, 'Burra Kebab', 395, 50, 1000),
(1, 3, 'Channa Masala', 285, 50, 1000),
(1, 4, 'Dahi Ke kabab', 295, 50, 1000),
(1, 5, 'Hariyali Paneer Tikka', 325, 50, 1000),
(1, 6, 'Kalmi Kabab', 395, 50, 1000),
(1, 7, 'Karara Hara Bhara Kabab', 295, 50, 1000),
(1, 8, 'Mutton Gelafi', 395, 50, 1000),
(1, 9, 'Rajma', 285, 50, 1000),
(1, 10, 'Shakahari Kabab Platter', 425, 50, 1000),
(1, 11, 'Till ka Tukra', 395, 50, 1000),
(6, 12, 'Aloo Gosht', 230, 50, 1000),
(6, 13, 'Chicken Burra', 430, 50, 1000),
(6, 14, 'Chicken Tikka', 420, 50, 1000),
(6, 15, 'Dal Makhani', 210, 50, 1000),
(6, 16, 'Karahi Chicken', 350, 50, 1000),
(6, 17, 'Shahi Paneer', 245, 50, 1000),
(8, 18, 'broccoli tandoori', 305, 50, 1000),
(8, 19, 'palak seekh kabab', 335, 50, 1000),
(8, 20, 'paneer tiikka pudeena', 335, 50, 1000),
(8, 21, 'paneer tikka ajawaini', 335, 50, 1000),
(8, 22, 'tandoori aaloo dilnaaz', 305, 50, 1000),
(8, 23, 'tandoori dawat', 665, 50, 1000),
(8, 24, 'tandoori khumb', 335, 50, 1000),
(8, 25, 'tandoori phool', 335, 50, 1000),
(8, 26, 'tandoori pomfret', 1295, 50, 1000),
(8, 27, 'veg seekh kabab', 335, 50, 1000),
(12, 28, 'bbq mushroom ', 320, 50, 1000),
(12, 29, 'cauliflower bites', 300, 50, 1000),
(12, 30, 'loaded nachos', 350, 50, 1000),
(12, 31, 'onion rings', 250, 50, 1000),
(12, 32, 'potato wedges', 250, 50, 1000),
(13, 33, 'chicken mint', 180, 50, 1000),
(13, 34, 'hot n sour', 150, 50, 1000),
(13, 35, 'lemon coriander', 150, 50, 1000),
(13, 36, 'minestrone', 150, 50, 1000),
(13, 37, 'sweet corn', 150, 50, 1000),
(16, 38, 'ceasar salad', 295, 50, 1000),
(16, 39, 'chicken masala tikka', 250, 50, 1000),
(16, 40, 'chicken sandwich', 185, 50, 1000),
(16, 41, 'chicken seekh wrap', 250, 50, 1000),
(16, 42, 'greek salad', 295, 50, 1000),
(16, 43, 'hara bhara kabab', 250, 50, 1000),
(16, 44, 'mutton seekh wrap', 250, 50, 1000),
(16, 45, 'paneer tikka', 150, 50, 1000),
(16, 46, 'veg seekh kabab', 150, 50, 1000),
(16, 47, 'vegeterian burger', 195, 50, 1000),
(18, 48, 'chicken gravy noodles', 80, 50, 1000),
(18, 49, 'chicken thupka', 90, 50, 1000),
(18, 50, 'chilli babycorn', 95, 50, 1000),
(18, 51, 'chilli mushroom', 110, 50, 1000),
(18, 52, 'chilli paneer dry', 80, 50, 1000),
(18, 53, 'drums of heaven', 100, 50, 1000),
(18, 54, 'egg gravy noodles', 60, 50, 1000),
(18, 55, 'egg thupka', 80, 50, 1000),
(18, 56, 'fish pakora', 100, 50, 1000),
(18, 57, 'fried fish', 100, 50, 1000),
(18, 58, 'fried prawn', 100, 50, 1000),
(18, 59, 'garlic chicken', 90, 50, 1000),
(18, 60, 'lemon chicken', 90, 50, 1000),
(18, 61, 'paneer pakoda', 50, 50, 1000),
(18, 62, 'pepper fish', 100, 50, 1000),
(18, 63, 'prawn pakoda', 120, 50, 1000),
(18, 64, 'veg manchurian', 85, 50, 1000),
(18, 65, 'veg thupka', 75, 50, 1000),
(23, 66, 'banana caramel smoothie', 150, 50, 1000),
(23, 67, 'choco shoko', 150, 50, 1000),
(23, 68, 'fruit smoothie', 150, 50, 1000),
(23, 69, 'mars attack', 180, 50, 1000),
(23, 70, 'oreo shake', 180, 50, 1000),
(23, 71, 'snickers shake', 180, 50, 1000),
(23, 72, 'toblerone trouble', 150, 50, 1000),
(26, 73, 'daal makhni', 80, 50, 1000),
(26, 74, 'handi ka rara paneer', 125, 50, 1000),
(26, 75, 'murg do pyaza', 220, 50, 1000),
(26, 76, 'sabz miloni', 90, 50, 1000),
(26, 77, 'steamed rice', 70, 50, 1000),
(27, 78, 'bhuna gosht', 250, 50, 1000),
(27, 79, 'black dal', 100, 50, 1000),
(27, 80, 'cajun potatoes', 100, 50, 1000),
(27, 81, 'chicken dum biryani', 200, 50, 1000),
(27, 82, 'chicken teriyaki', 200, 50, 1000),
(27, 83, 'dingri masala', 300, 50, 1000),
(27, 84, 'falafel', 100, 50, 1000),
(27, 85, 'lebanese prawns', 150, 50, 1000),
(27, 86, 'punjabi tangdi', 150, 50, 1000),
(27, 87, 'tandoori paneer tikka', 200, 50, 1000),
(28, 88, 'bombay veg sandwich', 100, 50, 1000),
(28, 89, 'cheesy baked fries', 100, 50, 1000),
(28, 90, 'cheesy veg sandwich', 120, 50, 1000),
(28, 91, 'desi tadka fries', 80, 50, 1000),
(28, 92, 'gobbler', 80, 50, 1000),
(28, 93, 'new school', 140, 50, 1000),
(28, 94, 'old school', 90, 50, 1000),
(28, 95, 'plane jane', 80, 50, 1000),
(28, 96, 'road runner', 70, 50, 1000),
(28, 97, 'the bogart', 150, 50, 1000),
(29, 98, 'dahi ke kabab', 350, 50, 1000),
(29, 99, 'dal makhani', 435, 50, 1000),
(29, 100, 'kastoori kabab', 445, 50, 1000),
(29, 101, 'palak paneer', 435, 50, 1000),
(29, 102, 'paneer makhani', 435, 50, 1000),
(29, 103, 'peshawari kabab', 495, 50, 1000),
(29, 104, 'pindi chhole', 435, 50, 1000),
(29, 105, 'tandoori aaloo', 450, 50, 1000),
(29, 106, 'tandoori phool', 450, 50, 1000),
(29, 107, 'veg seekh kabab', 350, 50, 1000),
(30, 108, 'chicken egg roll', 85, 50, 1000),
(30, 109, 'chicken roll double', 96, 50, 1000),
(30, 110, 'chicken roll single', 76, 50, 1000),
(30, 111, 'egg roll double', 42, 50, 1000),
(30, 112, 'egg roll single', 37, 50, 1000),
(30, 113, 'mutton roll double', 170, 50, 1000),
(30, 114, 'mutton roll single', 110, 50, 1000),
(30, 115, 'mutton seekh kabab single', 101, 50, 1000),
(30, 116, 'shami kaba roll', 100, 50, 1000),
(30, 117, 'shami kabab  double roll', 170, 50, 1000),
(31, 118, 'chicken lasagne', 250, 50, 1000),
(31, 119, 'cottage cheese steak', 170, 50, 1000),
(31, 120, 'creamy mushroom', 170, 50, 1000),
(31, 121, 'gingerale', 130, 50, 1000),
(31, 122, 'ice tea', 140, 50, 1000),
(31, 123, 'kuchnayi', 130, 50, 1000),
(31, 124, 'lamb lasagne', 270, 50, 1000),
(31, 125, 'vegetable lasagne', 210, 50, 1000),
(31, 126, 'virgin mojito', 140, 50, 1000),
(31, 127, 'winter sunshine', 140, 50, 1000),
(32, 128, 'dahi de kabab', 225, 50, 1000),
(32, 129, 'kadai paneer', 260, 50, 1000),
(32, 130, 'kalmi kebab', 190, 50, 1000),
(32, 131, 'lehsuni tangdi', 190, 50, 1000),
(32, 132, 'makki de kabab', 210, 50, 1000),
(32, 133, 'murg kadai', 400, 50, 1000),
(32, 134, 'murg makhni', 400, 50, 1000),
(32, 135, 'murg rara', 400, 50, 1000),
(32, 136, 'paneer makhni', 260, 50, 1000),
(32, 137, 'tilla kulfi', 50, 50, 1000),
(33, 138, 'dahi de kabab', 250, 50, 1000),
(33, 139, 'kadai paneer', 270, 50, 1000),
(33, 140, 'kalmi kabab', 200, 50, 1000),
(33, 141, 'lehsuni tangdi', 200, 50, 1000),
(33, 142, 'makki de kabab', 220, 50, 1000),
(33, 143, 'murg kadai', 425, 50, 1000),
(33, 144, 'murg makhni', 425, 50, 1000),
(33, 145, 'murg rara', 425, 50, 1000),
(33, 146, 'paneer makhni', 270, 50, 1000),
(33, 147, 'tilla kulfi', 55, 50, 1000),
(34, 148, 'chicken dim sum', 230, 50, 1000),
(34, 149, 'chicken tempura', 200, 50, 1000),
(34, 150, 'chilli fish', 360, 50, 1000),
(34, 151, 'chilli paneer', 250, 50, 1000),
(34, 152, 'hara bhhara kabab', 230, 50, 1000),
(34, 153, 'lemon chicken', 290, 50, 1000),
(34, 154, 'malayi soya tikka', 230, 50, 1000),
(34, 155, 'soya achari tikka', 250, 50, 1000),
(34, 156, 'tandoor ke phool', 180, 50, 1000),
(34, 157, 'tandoori aaloo', 230, 50, 1000),
(35, 158, 'butter dosa', 65, 50, 1000),
(35, 159, 'butter masala dosa', 80, 50, 1000),
(35, 160, 'daal vada', 50, 50, 1000),
(35, 161, 'dahi vada', 78, 50, 1000),
(35, 162, 'idli sambhar', 52, 50, 1000),
(35, 163, 'masala dosa', 70, 50, 1000),
(35, 164, 'mini idli', 48, 50, 1000),
(35, 165, 'onion dosa', 80, 50, 1000),
(35, 166, 'plain dosa', 55, 50, 1000),
(35, 167, 'rawa dosa ', 80, 50, 1000),
(36, 168, 'chicken achari tikka', 270, 50, 1000),
(36, 169, 'chicken afghani', 350, 50, 1000),
(36, 170, 'chicken afghani tikka', 270, 50, 1000),
(36, 171, 'chicken french fries', 310, 50, 1000),
(36, 172, 'chicken kurkure', 170, 50, 1000),
(36, 173, 'chicken lollipop', 210, 50, 1000),
(36, 174, 'mutton burra', 330, 50, 1000),
(36, 175, 'mutton raan', 1100, 50, 1000),
(36, 176, 'tandoori chicken', 330, 50, 1000),
(36, 177, 'tikka roti boti', 220, 50, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Area` varchar(30) DEFAULT NULL,
  `Ratings` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`Id`, `Name`, `Address`, `Area`, `Ratings`) VALUES
(1, 'Desi Vibes', 'G-50,First Floor, Sector 18,Noida', 'Sector 18', 4),
(2, 'Al Nazeer Foods', 'C11, Behind Shipra hotel, Sector 18, Noida', 'Sector 18', 3.7),
(3, 'KFC', 'P-21,Near Vodafone Store, Sector 18, Noida', 'Sector 18', 2.7),
(4, 'Dominos Pizza', 'C2/22,Sector 18, Noida', 'Sector 18', 3.3),
(5, 'Geoffreys', '16-A,Centre Stage Mall,Sector 18,Noida', 'Sector 18', 3.1),
(6, 'Karims', 'G 40, Mughal Place, Sector18,Noida', 'Sector 18', 3),
(7, 'Bamboo Shoots', 'F 2/F 3,Sector 18, Noida', 'Sector 18', 3.7),
(8, 'Swagath', 'J 57,Near Centrestage Mall, Sector 18, Noida', 'Sector 18', 3.7),
(9, 'The Great Kabab Fact', 'Ansals Fortune Arcade,Sector 18, Noida', 'Sector 18', 3.5),
(10, 'Tawak', 'H 224/H, 1st floor, Near Indian Oil Petrol Pump,No', 'Sector 63', 4.1),
(11, 'TGI Friday''s', '319-320, 3rd Floor, The Great India Place Mall', 'Sector 18', 3.3),
(12, 'Cheenos', 'P 11,Above Sony Centre, Sector 18, Noida', 'Sector 18', 2.6),
(13, 'Basil Tree', 'G 43 & 44,near Radisson Hotel, Sector 18, Noida', 'Sector 18', 3.3),
(14, 'Angels in my Kitchen', 'C 19,Atta Market, Sector 18, Noida', 'Sector 18', 3.9),
(15, 'Smoked Biryani House', '1st & 2nd Floor,G 35, Sector 18, Noida', 'Sector 18', 4.1),
(16, 'Mumbai Matinee', '1st Floor, J 19, sector 18,Noida', 'Sector 18', 3.8),
(17, 'Pikipuu', 'A block, Sector 53,Noida', 'Sector 53', 4.5),
(18, 'Haochi', 'Gurukripa Bhawan,Sector 53, Noida', 'Sector 53', 3.6),
(19, 'Lite N Bite', 'Shop 21, Kanchanjunga Market,Sector 53, Noida', 'Sector 53', 3.5),
(20, 'Lahori Restaurant', 'B/1/28,Central Market, Sector 50, Noida', 'Sector 50', 3.7),
(21, 'The Caspian', 'B-1/14,Central Market,Sector 50,Noida', 'Sector 50', 3.6),
(22, 'The Great Kabab Fact', 'Ansals Fortune Arcade,Sector 18, Noida', 'Sector 18', 3.5),
(23, 'Kaffiiaa', 'J 14, 1st and 2nd Floor, Sector 18, Noida', 'Sector 18', 3.7),
(24, 'Berco''s', 'O-1, Sector 12, Noida', 'Sector 12', 3.7),
(25, 'The Creme Castle', 'Near Croma Store, Ansal Plaza, Greater Noida', 'Greater Noida', 3.9),
(26, 'The Ancient Barbeque', 'H-27/1A, Sector 63, Noida', 'Sector 63', 3.9),
(27, 'Barbeque Nation', 'A79A, Ground Floor, Hotel Savoy Suites, Sector 16,', 'Sector 16', 4.2),
(28, 'Bistro 37', 'Shop 11, Godawari Complex, Sector 37, Noida', 'Sector 37', 4.5),
(29, 'Punjabi By Nature', 'P-19, Sector 18, Noida', 'Sector 18', 3.6),
(30, 'RollsKing', 'Sector 18, Noida', 'Sector 18', 4.2),
(31, 'Burbee''s Cafe', 'G-56, 1st & 2nd Floor,, Sector 18, Noida', 'Sector 18', 3.7),
(32, 'Pind Balluchi', 'The Great India Place Mall, Sector 38 A, Noida', 'Sector 38A', 3.3),
(33, 'Pind Balluchi', '2nd Floor, Ansal Plaza Mall, Greater Noida', 'Greater Noida', 2.6),
(34, 'Aureo Dine & Bake Ho', 'Shop 9, Block A3, Sector 110, Noida', 'Sector 110', 3.7),
(35, 'Lakshmi Coffee House', 'Brahamaputra Shopping Complex, Sector 29, Noida', 'Sector 29', 4),
(36, 'Al Nazeer Foods', '304, 3rd Floor, The Great India Place Mall, Noida', 'Sector 38', 3.9),
(37, 'Mainland China', 'Ground Floor, Plot K-1, Dharam Palace, Noida', 'Sector 18', 3.8),
(38, 'Legends Barbeques', '311, 2nd Floor, Spice World Mall, Sector 25, Noida', 'Sector 25', 3.6),
(39, 'Crazy Noodles', '3rd Floor, The Great India Place,Sector 38 A,Noida', 'Sector 38A', 4),
(40, 'Khidmat', 'B-1, 58/59, Central Market, Sector 50, Noida', 'Sector 50', 3.4),
(41, 'Mandarin Trail', '3rd Floor,The Great India Place Mall,Sector 38A,No', 'Sector 38A', 3.8),
(42, 'Yo! China', 'B1/29, Sector 50, Noida', 'Sector 50', 2.5),
(43, 'Dunkin'' Donuts', '327 A,3rd Floor,The Great India Place Mall,Noida', 'Sector 38', 3.9),
(44, 'London Cafe', 'H 224, Opposite Ginger Hotel, Sector 63, Noida', 'Sector 63', 4),
(45, 'Happy Hakka', '149, Jaipuria Plaza, Sector 26, Noida', 'Sector 26', 3.8),
(46, 'Binge Restaurant', 'C-25, Stellar IT Park, Sector 62, Noida', 'Sector 62', 3.2),
(47, 'The Yellow Chilli', 'H-1A/31, Commercial Market, Sector-63, Noida', 'Sector 63', 3.3),
(48, 'The Yellow Chilli', 'Second Floor,Dharam Palace,K Block,Sector-18,Noida', 'Sector 18', 3.6),
(49, 'Fill Up', 'Elddeco Arcadia, Sector Pi 1, Greater Noida, Noida', 'Greater Noida', 3.6),
(50, 'Goli Vada Pav No. 1', '144, Ground Floor, Jaipuria Plaza, Sector 26, Noid', 'Sector 26', 3.9);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'annu123456789@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginandregistration`
--
ALTER TABLE `loginandregistration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `Id` (`Id`,`items`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loginandregistration`
--
ALTER TABLE `loginandregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu2`
--
ALTER TABLE `menu2`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu2`
--
ALTER TABLE `menu2`
  ADD CONSTRAINT `menu2_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `restaurants` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
