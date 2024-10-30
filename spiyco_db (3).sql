-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 10:31 AM
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
-- Database: `spiyco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'gourav', 'gourav@gmail', '1234@', 'gourav@gmail.com'),
(2, 'akash', 'gourav7546', 'gourav7545', 'gourav.wix@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `order_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `order_number`) VALUES
(3, '798757491_B2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `call_back_request`
--

CREATE TABLE `call_back_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `message` varchar(600) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `call_back_request`
--

INSERT INTO `call_back_request` (`id`, `name`, `email`, `number`, `message`, `added_on`) VALUES
(14, 'sagar kumar', 'kumar646@gmail.com', '2147483647', 'not', '2023-06-14 05:57:50'),
(15, 'gufran ali', 'gufran@gmail.com', '940767543', 'jktrdfytr67r6', '2023-06-14 07:03:39'),
(22, 'AMAN GUPTA', 'aman@gmail.com', '9439849385', 'Test 1213', '2023-11-05 07:16:45'),
(23, 'my', 'my@gmail.com', '9876574563', 'hjghfgcv', '2023-11-05 07:29:54'),
(24, 'deva swarnkar', 'devaswarnkar7545@gmail.com', '9693354885', 'hii this is testing message ', '2023-12-04 02:03:24'),
(25, 'gourav kumar swarnkar', 'gouravswarnakar7545@gmail.com ', '9546328811', 'call back request ', '2023-12-13 02:24:25'),
(26, 'Goueargva', 'hsghfdtg@gmail.com', '7432467234', '  i want to cancel m ch xhgfdsgf', '2024-01-07 03:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(70) NOT NULL,
  `order_number` int(10) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`, `order_number`, `status`, `added_on`) VALUES
(32, 'Biryani', '511083205_briyani.jpg', 1, 1, '0000-00-00 00:00:00'),
(33, 'Chowmein', '395268822_chowmein.jpg', 3, 1, '0000-00-00 00:00:00'),
(34, '   Dosa', '408780778_dosa.jpg', 5, 1, '0000-00-00 00:00:00'),
(35, ' Paneer', '179679445_paneer.jpg', 4, 1, '0000-00-00 00:00:00'),
(36, '   Pizza', '772080120_pizza.jpg', 2, 1, '0000-00-00 00:00:00'),
(38, 'Burger ', '368492207_burger.jpg', 6, 1, '0000-00-00 00:00:00'),
(39, '   Thali', '977141041_thali.jpg', 7, 1, '0000-00-00 00:00:00'),
(40, '   Cake', '193190372_cake.jpg', 8, 1, '0000-00-00 00:00:00'),
(43, 'sandwich ', '751853281_sandwich.jpg', 10, 1, '0000-00-00 00:00:00'),
(44, 'Chicken', '678841451_Chicken.png', 11, 1, '0000-00-00 00:00:00'),
(45, 'Rolls', '621130821_rolls.jpg', 12, 1, '0000-00-00 00:00:00'),
(46, 'Fried Rice', '153858693_Fried Rice.png', 13, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`id`, `name`, `mobile`, `password`, `status`, `added_on`) VALUES
(11, 'Gourav Sr', '9546328811', 'dshjgfhsdg', 1, '2024-01-06 05:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `dish` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` float NOT NULL,
  `dish_detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `category_id`, `dish`, `price`, `dish_detail`, `image`, `status`, `added_on`) VALUES
(16, 31, 'Chicken Briyani', 180, 'nothing ', '355180505_9c3229120bb81932dab55d83a142ea3b_o2_featured_v2.jpg', 1, '2023-11-01 04:56:43'),
(17, 32, 'Chicken Biryani.              ', 140, 'Full', '223126214_briyani 4.jpg', 1, '2023-12-05 04:26:18'),
(18, 38, 'Chili burger', 149, 'Regular ', '541948024_br1.png', 0, '2023-12-05 04:38:06'),
(19, 32, 'Mutton Biryani', 250, 'Full', '762312320_242d60ee9d6d78b71dfe586c9d398664_featured_v2.jpg', 1, '2023-12-06 07:01:43'),
(20, 32, 'Kolkata Biryani', 300, 'Full', '629968775_gourmet-chicken-biryani-with-steamed-basmati-rice-generated-by-ai.jpg', 1, '2023-12-06 07:12:58'),
(21, 32, 'Sindhi Biryani', 280, 'Full\r\n', '756994960_briyani 8.jpg', 1, '2023-12-06 07:14:30'),
(22, 36, 'Neapolitan Pizza', 360, 'Regular ', '687760046_pizza_2.png', 1, '2023-12-06 04:17:09'),
(23, 36, 'Chicago Pizza.', 239, 'Regular ', '208677431_pizza_4.png', 1, '2023-12-06 04:18:04'),
(24, 36, 'Sicilian Pizza', 230, 'Regular ', '852202950_pizza_2.png', 1, '2023-12-06 04:18:42'),
(25, 36, 'Detroit Pizza', 149, 'Regular ', '159787382_pizza_5.png', 1, '2023-12-06 04:19:22'),
(26, 38, 'Cheeseburger', 199, 'Regular ', '166028992_br5.png', 1, '2023-12-06 04:25:13'),
(27, 38, 'The Bun Jovi', 299, 'Regular ', '695551160_br4.png', 1, '2023-12-06 05:18:06'),
(28, 38, 'Burger Buzz', 999, 'Combo pack', '847967974_br7.png', 1, '2023-12-06 05:20:00'),
(29, 34, 'Dosa Normal ', 49, 'Regular ', '761700966_dosa2.png', 1, '2023-12-06 05:30:00'),
(30, 34, 'Dosa Fire', 149, 'Regular ', '281458363_dosa3.png', 1, '2023-12-06 05:30:32'),
(31, 34, 'Dosa ', 199, 'Combo pack ', '989676462_dosa4.png', 1, '2023-12-06 05:31:16'),
(32, 34, 'Dosa.', 99, 'Normal Combo', '461262622_dosa1.png', 1, '2023-12-06 05:31:57'),
(33, 33, 'Egg Noodles', 89, 'Full', '777644471_ch2.png', 1, '2023-12-07 06:59:17'),
(34, 33, 'Chicken Noodle', 129, 'Full', '921272848_ch3.png', 1, '2023-12-07 07:00:30'),
(35, 33, 'Soba Noodles', 99, 'Full', '633024948_ch7.png', 1, '2023-12-07 07:01:23'),
(36, 33, 'Zoom Noodle', 149, 'Full', '834997041_ch5.png', 1, '2023-12-07 07:02:34'),
(37, 35, 'Paneer Masala', 130, 'Full', '759448644_p4.png', 1, '2023-12-07 07:14:09'),
(38, 35, 'Paneer Butter Masala ', 149, 'Full', '699680768_p3.png', 1, '2023-12-07 07:15:16'),
(39, 35, 'Paneer Tikka', 189, 'Full', '171458286_p1.png', 1, '2023-12-07 07:16:04'),
(40, 35, 'Matar Paneer ', 199, 'Full', '172700478_p2.png', 1, '2023-12-07 07:16:44'),
(41, 39, 'Chicken Thali', 149, 'Pack of all item show in image', '536521875_t1.png', 1, '2023-12-07 07:22:40'),
(42, 39, 'Egg and Chicken Thali', 249, 'Full', '844726286_t2.png', 1, '2023-12-07 07:24:04'),
(43, 39, 'Punjabi Thali', 299, 'Pack of all items shown in the image', '758083940_t3.png', 1, '2023-12-07 07:25:32'),
(44, 39, 'Puri Thali', 49, 'Full', '536599942_t4.png', 1, '2023-12-07 07:27:05'),
(45, 40, 'Marble Cake', 249, 'Regular Size', '194407960_cake_7.png', 1, '2023-12-07 07:34:21'),
(46, 40, 'Chocolate Cake', 799, 'Large size ', '930756156_c4.png', 1, '2023-12-07 07:37:27'),
(47, 40, 'Vanilla Cake', 699, 'Mid Size', '506358290_c3.png', 1, '2023-12-07 07:38:21'),
(48, 40, 'Angel Food Cake', 749, 'Mid Size', '630523075_c2.png', 1, '2023-12-07 07:39:19'),
(49, 40, 'Funfetti Cake', 449, 'Mid-Size', '648810958_cake_5.png', 1, '2023-12-07 07:42:00'),
(50, 40, 'Oreo Cake', 449, 'Mid-Size', '393443485_cc4.png', 1, '2023-12-07 07:43:14'),
(51, 40, 'Jar Cake', 300, 'Regular Jar', '836150095_jr2.png', 1, '2023-12-07 07:43:59'),
(52, 40, 'Chocolate cake Fire', 0, 'Mid-Size', '685521709_c7.png', 1, '2023-12-07 07:45:48'),
(53, 43, 'Bombay Sandwich', 119, '4pic only', '311715832_Bombay Sandwich.png', 1, '2023-12-07 07:52:35'),
(54, 43, 'Egg Sandwich', 79, '2 pic', '176148217_s2.png', 1, '2023-12-07 07:54:47'),
(55, 43, 'Normal Sandwich ', 29, '1 pic', '193986278_s3.png', 1, '2023-12-07 07:55:16'),
(56, 43, 'Grilled Chicken Sandwich', 130, '2 Pic', '297712955_s4.png', 1, '2023-12-07 07:57:41'),
(57, 44, 'Chicken Chili ', 129, 'Full ', '493661979_ck1.png', 1, '2023-12-07 08:12:35'),
(58, 44, 'Chicken butter masala', 220, 'Full', '430502898_ck2.png', 1, '2023-12-07 08:13:24'),
(59, 44, 'Chicken pakora lollipop', 170, '6 Pic', '670454524_ck3.jpg', 1, '2023-12-07 08:13:54'),
(60, 44, 'Chicken Combo Pack', 299, 'Pack Of all times shown in the image', '601159053_ck4.png', 1, '2023-12-07 08:15:29'),
(61, 44, 'Chicken masala', 160, 'Full\r\n', '369698696_ck5.png', 1, '2023-12-07 08:16:14'),
(62, 44, 'Combo Pack', 499, 'Pack of all items shown in the image', '842844023_ck6.png', 1, '2023-12-07 08:17:04'),
(63, 44, 'Chicken roasted', 799, '1 Pic Full Chicken', '305608402_ck7.jpg', 1, '2023-12-07 08:17:46'),
(64, 44, 'Bihari Chicken Masala', 599, '4 Pic', '883604362_ck9.jpg', 1, '2023-12-07 08:18:38'),
(65, 44, 'Kolkata chicken', 679, '2 Pic', '888909521_ck8.jpg', 1, '2023-12-07 08:20:04'),
(66, 44, 'Spicy chicken pakora', 249, '4 Pic', '129889175_ck100.jpg', 1, '2023-12-07 08:21:27'),
(67, 44, 'Roasted chicken', 249, '1/2 ', '444699904_ck99.jpg', 1, '2023-12-07 08:23:14'),
(68, 44, 'Spicy roasted chicken', 899, 'Full ', '991868041_ck77.jpg', 1, '2023-12-07 08:23:53'),
(69, 45, 'Egg Roll', 70, 'Full', '152448595_r3.png', 1, '2023-12-07 03:46:18'),
(70, 45, 'Chicken Roll', 99, '1 Pic', '133802446_r1.png', 1, '2023-12-07 03:46:52'),
(71, 45, 'Paneer Roll', 65, '1Pic', '431697130_r5.png', 1, '2023-12-07 03:49:03'),
(72, 45, 'Indian Roll', 49, '1 Pic', '582551080_r4.png', 1, '2023-12-07 03:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(11) NOT NULL,
  `Full_Name` varchar(40) NOT NULL,
  `Phone_No` bigint(15) NOT NULL,
  `reg_email` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Phone_No`, `reg_email`, `Address`, `Pay_Mode`) VALUES
(1, 'dev raj', 9693354855, '', 'VILLAGE - UDHWA SOMWARI HAAT PARA POST- UDHWA PS-RADHANAGAR', 'COD'),
(2, 'gourav', 988676565, '', 'udhwa sbtf tydrbfyt', 'COD'),
(3, 'Gourav kumar swarnkar', 9546328811, '', 'udhwa sarkar para near by water tank', 'COD'),
(4, 'Akash Swarnkar', 6220547543, '', 'udhwa sarkar para nearby bajaj showroom ', 'COD'),
(5, 'Anjali kumari', 9546328811, '', 'rajmahal n23', 'COD'),
(6, 'Deva Swarnkar', 8434656466, 'COD', 'devaswarnkar7545@gmail.com', 'udhwa sarkar para rode no 3 nearby_bajaj'),
(7, 'Deva Swarnkar', 8434656466, 'devaswarnkar7545@gmail.com', 'udhwa sarkar para rode no 3 nearby_bajaj showroom ', 'COD'),
(8, 'Gufran ali', 9546327711, 'gufranali2656@gmail.com', 'Barharwa main rode nearby railway station \r\n', 'COD'),
(9, 'Deva swarnkar', 9693354885, 'Mahi7545@gmail.com', 'udhwa sarkar para nearby mango tree', 'COD'),
(10, 'देवराज राय', 85964757356, 'klsdfjgydfsdfs@gmail.com', 'VILLAGE - UDHWA SOMWARI HAAT PARA POST- UDHWA PS-RADHANAGAR', 'COD'),
(11, 'gourav kumare swarnkar', 954632881, 'g@gmail.com', 'villn ndmsbchjgfwgedfjvsdugncdnsdgf sdajhggwe', 'COD'),
(12, 'gff8', 75547, 'rffygh', 'hfyjfyj', 'COD'),
(13, 'Gourav', 834019454, 'gouravs@gmail.com', 'shdfbchfyudt', 'COD'),
(14, 'KLKHJH', 0, 'Gouravswarnakar7545@gmail.com', ';LHGF', 'COD'),
(15, 'gouurav ', 8340102009, 'gouravswarnakar7545@gmail.com', 'block canmpus', 'COD'),
(16, 'Bharat kumar saha', 7321019860, 'bharat@gmail.com', 'bhw', 'COD'),
(17, 'gourav', 897654324, 'gouravswarnakar7545@gmail.com', 'ljkhghgdgfdf', 'COD'),
(18, 'kumar ak', 9909564434, 'kumarajk@gmil.com', 'udhwa somwari \r\n', 'COD'),
(19, 'my test 5.0', 954632881, 'ggg@gmail.com', 'udhwa sarkar para', 'COD'),
(20, 'ljhgud', 879685763, 'lkjhgf@gmail.com', ';puoyiytddfc', 'COD'),
(21, 'ljhgud', 879685763, 'lkjhgf@gmail.com', ';puoyiytddfc', 'COD'),
(22, 'ljhgud', 879685763, 'lkjhgf@gmail.com', ';puoyiytddfc', 'COD'),
(23, 'ljhgud', 879685763, 'lkjhgf@gmail.com', ';puoyiytddfc', 'COD'),
(24, 'ljhgud', 879685763, 'lkjhgf@gmail.com', ';puoyiytddfc', 'COD'),
(25, 'ljhgud', 879685763, 'lkjhgf@gmail.com', ';puoyiytddfc', 'COD'),
(26, 'jdhsgfhdsvh', 9278946725, 'gouravswarnakar7545@gmail.com', 'kkjhgfdzszfghjkl;kjhcxvbnm', 'COD'),
(27, 'jdhsgfhdsvh', 9278946725, 'gouravswarnakar7545@gmail.com', 'kkjhgfdzszfghjkl;kjhcxvbnm', 'COD'),
(28, 'jdhsgfhdsvh', 9278946725, 'gouravswarnakar7545@gmail.com', 'kkjhgfdzszfghjkl;kjhcxvbnm', 'COD'),
(29, 'jdhsgfhdsvh', 9278946725, 'gouravswarnakar7545@gmail.com', 'kkjhgfdzszfghjkl;kjhcxvbnm', 'COD'),
(30, 'jdhsgfhdsvh', 9278946725, 'gouravswarnakar7545@gmail.com', 'kkjhgfdzszfghjkl;kjhcxvbnm', 'COD'),
(31, 'jdhsgfhdsvh', 9278946725, 'gouravswarnakar7545@gmail.com', 'kkjhgfdzszfghjkl;kjhcxvbnm', 'COD'),
(32, 'sagar', 8907685746, 'sagar@gmail.com', 'lkhjghfgdfgsddfghhjk', 'COD'),
(33, 'hgsadhfj', 9867435243, 'shjfgjhs@gmail.com', 'lkjhgfdsrew456tyu', 'COD'),
(34, 'hgsadhfj', 9867435243, 'shjfgjhs@gmail.com', 'lkjhgfdsrew456tyu', 'COD'),
(35, 'jwqbdhjfhj', 8975653467, 'hdsfghfggouravswarnakar7545@gmail.com', 'hggffxghjbnkm,.', 'COD'),
(36, 'sagar', 9778437895, 'sagar@gmail.com', 'udhwa', 'COD'),
(37, 'my test 64367', 8736749925, 'g@gmail.com', 'kajshfjsdghjfghjsdfg', 'COD'),
(38, 'gourav', 9876546787, 'g@gmail.com', 'kjhdhghdgf', 'COD'),
(39, 'gourav', 7654435689, 'g@gmail.com', 'hjgsftdsathfhas', 'COD'),
(40, 'sagar', 8434656466, 'g@gmail.com', 'udhwa sarkar para', 'COD'),
(41, 'sagar', 8434656466, 'g@gmail.com', 'udhwa sarkar para', 'COD'),
(42, 'sagar', 8434656466, 'g@gmail.com', 'udhwa sarkar para', 'COD'),
(43, 'sagar', 8434656466, 'g@gmail.com', 'udhwa sarkar para', 'COD'),
(44, 'huiguftyrr', 9809867564, 'g@gmail.com', 'kjhgbnm,.,;lmknjnbhgf', 'COD'),
(45, 'gouravreyugd', 9382492635, 'g@gmail.com', 'jkdfhjhvuidf sugfbguicf', 'COD'),
(46, 'lkjhgfd', 987435213, 'g@gmail.com', 'ojihugyftdrsesdfxcghbjkn', 'COD'),
(47, 'bhjadsfg', 3456786543, 'g@gmail.com', 'bsajFHGADFTYDSAUYJH', 'COD'),
(48, 'kjdkshfj', 7236847672, 'g@gmail.com', 'kdhsgdghsa', 'COD'),
(49, 'kjdkshfj', 7236847672, 'g@gmail.com', 'kdhsgdghsa', 'COD'),
(50, 'lnjbhgfdghjkkjh', 986756457, 'g@gmail.com', 'lkmnjbhvgfdghjkl', 'COD'),
(51, 'lnjbhgfdghjkkjh', 986756457, 'g@gmail.com', 'lkmnjbhvgfdghjkl', 'COD'),
(52, 'lnjbhgfdghjkkjh', 986756457, 'g@gmail.com', 'lkmnjbhvgfdghjkl', 'COD'),
(53, 'lnjbhgfdghjkkjh', 986756457, 'g@gmail.com', 'lkmnjbhvgfdghjkl', 'COD'),
(54, 'gourav kumar swrankar', 9546327711, 'g@gmail.com', 'udhwa', 'COD'),
(55, 'gourav', 821013048, 'g@gmail.com', 'jkhjghh', 'COD'),
(56, 'gourav', 821013048, 'g@gmail.com', 'jkhjghh', 'COD'),
(57, 'test 57', 9838724683, 'g@gmail.com', 'test57\r\n', 'COD'),
(58, 'test 58', 8978356348, 'g@gmail.com', 'fdsjghsdgyu\r\n', 'COD'),
(59, 'test60', 3466862847, 'g@gmail.com', ' ksbhjvhfdsbhvfhshav', 'COD'),
(60, 'bhsjhvh', 2389834748, 'g@gmail.com', 'jsdhjbfjhdsb', 'COD'),
(61, 'deva ', 938826472, 'g@gmail.com', 'kumar', 'COD'),
(62, 'gourav', 987657890, 'g@gmail.com', 'mlkjhghgdtyfugiop[\r\n', 'COD'),
(63, 'deva', 8432846836, 'g@gmail.com', 'rajmahal', 'COD'),
(64, 'test', 976765436, 'g@gmail.com', 'test add\r\n', 'COD'),
(65, 'test', 976765436, 'g@gmail.com', 'test add\r\n', 'COD'),
(66, 'iii', 9398717612, 'g@gmail.com', 'dhjsh', 'COD'),
(67, 'rrr', 9876543456, 'g@gmail.com', 'dachjsgfhs', 'COD'),
(68, 'ertrtt', 9895478934, 'g@gmail.com', 'hfdjgifd', 'COD'),
(69, 'test', 8743985983, 'g@gmail.com', 'test', 'COD'),
(70, 'Gourav kumar swarnakar', 9546328811, 'g@gmail.com', 'udhwa sarkar para', 'COD'),
(71, 'test', 3287265346, 'g@gmail.com', 'test', 'COD'),
(72, 'final test', 7364863745, 'g@gmail.com', 'test', 'COD'),
(73, 'test', 8782789347, 'g@gmail.com', 'test', 'COD'),
(74, 'test', 8458666666, 'g@gmail.com', 'test', 'COD'),
(75, 'test', 2734675245, 'g@gmail.com', 'test', 'COD'),
(76, 'test', 2734675245, 'g@gmail.com', 'test', 'COD'),
(77, 'test', 2734675245, 'g@gmail.com', 'test', 'COD'),
(78, 'test', 3828462362, 'g@gmail.com', 'test', 'COD'),
(79, 'test', 7348924798, 'g@gmail.com', 'test', 'COD'),
(80, 'test', 8945684589, 'g@gmail.com', 'test gt', 'COD'),
(81, 'test', 4838653465, 'g@gmail.com', 'test', 'COD'),
(82, 'test', 3465743657, 'g@gmail.com', 'test', 'COD'),
(83, 'test', 3465743657, 'g@gmail.com', 'test', 'COD'),
(84, 'test', 7637846624, 'g@gmail.com', 'test', 'COD'),
(85, 'test8724', 8246832647, 'g@gmail.com', 'etts', 'COD'),
(86, 'test', 8736874626, 'g@gmail.com', 'ett', 'COD'),
(87, 'test', 8324823849, 'g@gmail.com', 'jsahjdgh', 'COD'),
(88, 'test', 3826864723, 'g@gmail.com', 'test', 'COD'),
(89, 'Mahi Sr', 7243874938, 'mahi7545@gmail.com', 'udhwa sarkar para', 'COD'),
(90, 'Mahi Kumari', 8459476897, 'mahi7545@gmail.com', 'Udhwa', 'COD'),
(91, 'gu', 9878768767, 'mahi7545@gmail.com', 'kjhghn', 'COD'),
(92, 'Tanmay singh', 8578438957, 'tanmay@gmail.com', 'Barharwa More', 'COD'),
(93, 'Anuj Gupta', 9546328811, 'anuj23@gmail.com', 'udhwa sarkar para', 'COD'),
(94, 'Anuj Kumar', 7645327832, 'anuj23@gmail.com', 'udhwa', 'COD'),
(95, 'kumar', 3486738746, 'anuj23@gmail.com', 'udhwa', 'COD'),
(96, 'kumar', 8978678565, 'anuj23@gmail.com', 'udhwa', 'COD'),
(97, 'like ', 8782823672, 'tanmay@gmail.com', 'mjhgf', 'COD'),
(98, 'देवराज राय', 8765467890, 'mahi7545@gmail.com', 'VILLAGE - UDHWA SOMWARI HAAT PARA POST- UDHWA PS-RADHANAGAR', 'COD'),
(99, 'Gourav Kumar Swarnkar', 9546328811, 'Gourav.wix@gmail.com', 'udhwa sarkar para near by bajaj showroom\r\n\r\n', 'COD'),
(100, 'Gourav kumar swarnkar', 9546328811, 'Gourav.wix@gmail.com', 'udhwa \r\n', 'COD'),
(101, 'Gourav kumar', 8943686573, 'g@gmail.com', 'gdshgfhgsdhgfuysa f dsagyufg', 'COD'),
(102, 'bhjddjhdghugdysaghdfasf88', 4378465734, 'Gourav.wix@gmail.com', 'csjdahfjdhjs', 'COD'),
(103, 'kalu kumar', 9954325734, 'Gufran@gmail.com', 'Udhwa sarkar para', 'COD'),
(104, 'kalu kumar', 9954325734, 'Gufran@gmail.com', 'Udhwa sarkar para', 'COD'),
(105, 'jksdhhjfhjsdg', 2346826386, 'Gufran@gmail.com', 'kjsdghfghjdsghj', 'COD'),
(106, 'kljghcf', 977654356, 'Gufran@gmail.com', '.kljghfgf', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `status`, `added_on`) VALUES
(2, 'KUMAR@GMAIL.COM', 'KUMAR@GMAIL.COM', '9546328818', '8765E45', 1, '2023-05-25 08:54:34'),
(4, 'SAGAR KUMAR SWARNKAR', 'sagar@gmail.com', '96933542889', 'Sagar5545', 1, '2023-05-25 17:45:36'),
(5, 'gourav', 'g@gmail.com', '0898676453432', 'g@gmail.com', 1, '2023-06-13 07:21:23'),
(6, 'Mahi', 'mahi7545@gmail.com', '9546323887', '@Mahi@#2', 1, '2023-07-06 06:32:07'),
(7, 'Gufran ali', 'GUFRAN765@GMAIL.COM', '7656342112', 'GUFRAN@23', 1, '2023-07-07 04:40:02'),
(8, 'Akash Kumar ', 'Akash64@gmail.com', '6227432412', '@shgas@', 1, '2023-07-08 08:13:44'),
(9, 'देवराज राय', 'Akash64@gmail.com', '9755654678', '@shgas@', 1, '2023-09-27 06:39:56'),
(10, 'Surya Sekhar', 'suryasekharsingh00@gmail.com', '8825238173', 'Surya', 1, '2023-10-27 07:48:41'),
(11, 'bharat', 'bharat@gmail.com', '732101986089', 'bharat', 1, '2023-11-04 06:57:15'),
(12, 'tanmay', 'tanmay@gmail.com', '984764382', '1234@', 1, '2023-11-04 07:31:02'),
(13, 'gourav', 'gourav@gmail.com', '8246346678', 'gourav65', 1, '2023-11-04 07:38:13'),
(15, 'Gourav kumar swarnkar', 'gourav75@gmail.com', '9546328811', '1234@uuhh', 1, '2023-11-04 06:08:47'),
(17, 'kljhhgfdghjkl', 'khkjgfdsdfghjk@Gmail.com', '9767653432', 'khjgfxzcvhjbklkjhgfd', 1, '2023-11-04 06:11:41'),
(18, 'kjlhuyuyrtsersfghj', 'jhgfdfsxcvhk@gmail.com', '9867654342', 'gourav65', 1, '2023-11-04 06:12:35'),
(19, 'klkgftsdfghjkl', 'gourav75@gmail.com', '0896543234', 'gourav65', 1, '2023-11-04 06:18:16'),
(20, 'Anuj kumar swarnkar', 'anuj23@gmail.com', '9546328811', 'anuj123', 1, '2023-12-10 01:46:41'),
(21, 'Gouav kumar Swarnakr', 'Gourav.wix@gmail.com', '9546328811', 'Gourav123', 1, '2023-12-14 06:39:56'),
(22, 'Bharat kumar saha', 'bharat@gmail.com', '7321019860', 'bh@1234', 1, '2024-01-07 03:55:22'),
(23, 'Kriti Anand', 'kritianand.bhw@gmail.com', '8271998003', 'Kriti12', 1, '2024-01-07 03:56:02'),
(24, 'Gufran Ali', 'Gufran@gmail.com', '8943658576', 'Gufran@gmail.com', 1, '2024-01-07 04:00:41'),
(25, 'Bharat kumar saha', 'bharat1@gmail.com', '7321019860', '12345678', 1, '2024-01-07 04:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `added_on` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`, `pass`, `added_on`, `status`) VALUES
(2, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(3, 'Matka chicken biryani', 150, 4, '', '0000-00-00', 0),
(3, 'Cheese pizza', 249, 4, '', '0000-00-00', 0),
(3, 'Chicken momo', 199, 2, '', '0000-00-00', 0),
(3, 'Fried rice', 199, 4, '', '0000-00-00', 0),
(3, 'Chicken pizza', 299, 2, '', '0000-00-00', 0),
(3, 'Chicken noodels', 139, 2, '', '0000-00-00', 0),
(3, 'Chilli paneer', 149, 2, '', '0000-00-00', 0),
(3, 'Kadai paneer', 189, 2, '', '0000-00-00', 0),
(4, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(5, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(6, 'Cheese pizza', 249, 10, '', '0000-00-00', 0),
(6, 'Chilli paneer', 149, 10, '', '0000-00-00', 0),
(8, 'Chilli paneer', 149, 1, '', '0000-00-00', 0),
(8, 'Kadai paneer', 189, 1, '', '0000-00-00', 0),
(9, 'Matka chicken biryani', 150, 2, '', '0000-00-00', 0),
(9, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(11, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(12, 'Kadai paneer', 189, 1, '', '0000-00-00', 0),
(13, 'Kadai paneer', 189, 1, '', '0000-00-00', 0),
(14, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(16, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(16, 'Cheese pizza', 249, 2, '', '0000-00-00', 0),
(18, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(19, 'Chicken momo', 199, 1, '', '0000-00-00', 0),
(25, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(31, 'Chilli paneer', 149, 1, '', '0000-00-00', 0),
(32, 'Chicken momo', 199, 1, '', '0000-00-00', 0),
(32, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(34, 'Fried rice', 199, 1, '', '0000-00-00', 0),
(35, 'Chilli paneer', 149, 1, '', '0000-00-00', 0),
(36, 'Fried rice', 199, 1, '', '0000-00-00', 0),
(37, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(38, 'g@gmail.com', 150, 1, '', '0000-00-00', 0),
(39, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(45, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(45, 'g@gmail.com', 150, 1, '', '0000-00-00', 0),
(46, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(47, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(49, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(53, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(54, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(56, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(57, 'g@gmail.com', 150, 1, '', '0000-00-00', 0),
(58, 'Matka chicken biryani', 0, 1, '', '0000-00-00', 0),
(59, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(0, 'hghfggfhjkl', 987665, 9, 'ljkhgjfhdgfhjk@gmail.com', '0000-00-00', 0),
(6, 'hghfggfhjkl', 987665, 9, 'ljkhgjfhdgfhjk@gmail.com', '0000-00-00', 0),
(20, 'chicken', 374, 1, 'gouravswarnakar7545@gmail.com ', '0000-00-00', 0),
(60, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(61, 'g@gmail.com', 150, 1, '0', '0000-00-00', 0),
(62, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(63, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(64, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(66, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(67, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(68, 'Matka chicken biryani', 150, 1, '0', '0000-00-00', 0),
(69, 'Matka chicken biryani', 150, 1, 'g@gmail.com', '0000-00-00', 0),
(70, 'Matka chicken biryani', 150, 1, 'g@gmail.com', '0000-00-00', 0),
(71, 'Matka chicken biryani', 150, 1, 'g@gmail.com', '0000-00-00', 0),
(72, 'Mutton Biryani', 250, 1, '', '0000-00-00', 0),
(72, 'Kadai paneer', 189, 1, '', '0000-00-00', 0),
(73, 'Chicken Biryani.              ', 140, 1, '', '0000-00-00', 0),
(74, 'Puri Thali', 49, 1, '', '0000-00-00', 0),
(75, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(78, 'Cheese pizza', 249, 1, 'g@gmail.com', '0000-00-00', 0),
(79, 'Chicken momo', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(80, 'Fried rice', 199, 1, '', '0000-00-00', 0),
(80, 'Chicken pizza', 299, 1, 'g@gmail.com', '0000-00-00', 0),
(81, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(81, 'Chicken momo', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(81, 'Matka chicken biryani', 150, 1, 'g@gmail.com', '0000-00-00', 0),
(81, 'Chicken noodels', 139, 1, 'g@gmail.com', '0000-00-00', 0),
(82, 'Matka chicken biryani', 150, 1, '', '0000-00-00', 0),
(82, 'Chicken momo', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(82, 'Chicken noodels', 139, 1, 'g@gmail.com', '0000-00-00', 0),
(82, 'Chilli paneer', 149, 1, 'g@gmail.com', '0000-00-00', 0),
(82, 'Kadai paneer', 189, 1, 'g@gmail.com', '0000-00-00', 0),
(82, 'Chicken pizza', 299, 1, 'g@gmail.com', '0000-00-00', 0),
(84, 'Matka chicken biryani', 150, 1, 'g@gmail.com', '0000-00-00', 0),
(84, 'Cheese pizza', 249, 1, 'g@gmail.com', '0000-00-00', 0),
(84, 'Chicken momo', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(84, 'Fried rice', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(84, 'Chicken pizza', 299, 1, 'g@gmail.com', '0000-00-00', 0),
(85, 'Cheese pizza', 249, 1, 'g@gmail.com', '0000-00-00', 0),
(86, 'Cheese pizza', 249, 1, '', '0000-00-00', 0),
(86, 'Chicken momo', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(86, 'Fried rice', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(87, 'Chicken momo', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(87, 'Fried rice', 199, 1, 'g@gmail.com', '0000-00-00', 0),
(87, 'Cheese pizza', 249, 1, 'g@gmail.com', '0000-00-00', 0),
(87, 'Matka chicken biryani', 150, 1, 'g@gmail.com', '0000-00-00', 0),
(88, 'Paneer Butter Masala ', 149, 1, 'g@gmail.com', '0000-00-00', 0),
(88, 'Chicken roasted', 799, 1, 'g@gmail.com', '0000-00-00', 0),
(89, 'Chicken Biryani.              ', 140, 1, 'mahi7545@gmail.com', '0000-00-00', 0),
(89, 'Kolkata Biryani', 300, 1, 'mahi7545@gmail.com', '0000-00-00', 0),
(89, 'Mutton Biryani', 250, 1, 'mahi7545@gmail.com', '0000-00-00', 0),
(90, 'Egg Sandwich', 79, 1, 'mahi7545@gmail.com', '0000-00-00', 0),
(90, 'Paneer Roll', 65, 1, 'mahi7545@gmail.com', '0000-00-00', 0),
(91, 'Cheese pizza', 249, 1, 'mahi7545@gmail.com', '2023-12-09', 0),
(92, 'Angel Food Cake', 749, 1, 'tanmay@gmail.com', '2023-12-09', 0),
(0, 'nothing', 120, 1, 'g@gmail.com', '2023-12-10', 1),
(92, 'nothing', 1876, 1, 'g@gmail.com', '2023-12-10', 1),
(93, 'The Bun Jovi', 299, 1, 'anuj23@gmail.com', '2023-12-10', 0),
(94, 'Cheese pizza', 249, 1, 'anuj23@gmail.com', '2023-12-10', 0),
(95, 'Chicken momo', 199, 1, 'anuj23@gmail.com', '2023-12-10', 0),
(96, 'Fried rice', 199, 1, 'anuj23@gmail.com', '2023-12-10', 0),
(97, 'Egg Sandwich', 79, 1, 'tanmay@gmail.com', '2023-12-11', 0),
(98, 'Cheese pizza', 249, 1, 'mahi7545@gmail.com', '2023-12-12', 0),
(99, 'Mutton Biryani', 250, 1, 'Gourav.wix@gmail.com', '2023-12-31', 0),
(100, 'Chicken momo', 199, 1, 'Gourav.wix@gmail.com', '2023-12-31', 0),
(101, 'Fried rice', 199, 1, 'g@gmail.com', '2024-01-06', 0),
(102, 'Chicken momo', 199, 1, 'Gourav.wix@gmail.com', '2024-01-06', 0),
(103, 'Matka chicken biryani', 150, 10, 'Gufran@gmail.com', '2024-01-07', 0),
(103, 'Fried rice', 199, 1, 'Gufran@gmail.com', '2024-01-07', 0),
(103, 'Cheese pizza', 249, 1, 'Gufran@gmail.com', '2024-01-07', 0),
(103, 'Chilli paneer', 149, 1, 'Gufran@gmail.com', '2024-01-07', 0),
(105, 'Chicken momo', 199, 1, 'Gufran@gmail.com', '2024-01-07', 0),
(106, 'Fried rice', 199, 1, 'Gufran@gmail.com', '2024-01-07', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_back_request`
--
ALTER TABLE `call_back_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `call_back_request`
--
ALTER TABLE `call_back_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
