-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 05:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patel_electric`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'dev@admin', 'admin'),
(2, 'devansh@admin', 'admin'),
(15, 'pavan@gmail.com', 'pavan@0041');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_nm` varchar(255) NOT NULL,
  `product_disc` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_mrp` int(11) NOT NULL,
  `quality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_nm`, `product_disc`, `product_price`, `product_mrp`, `quality`) VALUES
(1, 2, 'Havells Fan', '29', 6788, 7888, 0),
(2, 2, 'Havells Fan', '29', 6788, 7888, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cat_products`
--

CREATE TABLE `cat_products` (
  `Id` int(11) NOT NULL,
  `Pro_image` text NOT NULL,
  `Pro_title` varchar(50) NOT NULL,
  `Pro_detail` text NOT NULL,
  `Pro_dic` float NOT NULL,
  `Pro_price` int(8) NOT NULL,
  `Pro_MRP` int(8) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_products`
--

INSERT INTO `cat_products` (`Id`, `Pro_image`, `Pro_title`, `Pro_detail`, `Pro_dic`, `Pro_price`, `Pro_MRP`, `Category`) VALUES
(2, '../images/catf1.jpg', 'Havells Fan', 'Havells 1200mm Ambrose ES Ceiling Fan|Premium Finish, Decorative Fan, Elegant Look, High Air Delivery, Energy Saving, 100% Pure Copper Motor|2 Year Warranty by Brand|(Pack of 1, Nickel Saphire) 1 Star', 29, 6788, 7888, 'Fan'),
(3, '../images/blander1.jpg', 'Philips Blender', 'PHILIPS HL1655/00 Hand Blender | Powerful 250W Motor | with Rust free steel arm |                                   Easy single trigger operation | Specially designed blades | Wall bracket...', 9, 1899, 2095, 'Blander'),
(5, '../images/m2.jpg', 'Hevals Mixar', 'Mixar 1200mm Ambrose ES Ceiling Fan | Premium Finish, Decorative Fan, Elegant                                                        Looks, High Air Delivery, Energy Saving, 100% Pure Copper Motor | 2 Year...', 20, 1198, 2675, 'Mixar'),
(10, '../images/gg1.jpg', 'PANCA Manual Chopper', 'PANCA Manual Hand Press Push Chopper with 6 Blades for Effortless Chopping Vegetables & Fruits (Assorted, 900 ml, Plastic)', 37, 7475, 9473, 'Chopar'),
(16, '../images/bulb1.webp', 'Crompton Bulb', 'Crompton 20 W Standard B22 LED Bulb (White)', 6, 800, 1200, 'Bulb'),
(18, '../images/catf2.jpg', 'atomberg Fan', 'atomberg Renesa 1200mm BLDC Ceiling Fan with Remote Control | BEE 5 star Rated Energy Efficient Ceiling Fan | High Air Delivery with LED Indicators | 2+1 Year Warranty by Atomberg (Brown & Black)', 23, 6778, 8444, 'Fan'),
(20, '../images/catf3.jpg', 'Wall Fan', 'USHA Maxx Air Ultra 400MM Wall Fan (Light Blue)', 34, 5388, 6890, 'Fan'),
(21, '../images/catf4.jpg', 'Orient Fan', 'Orient Electric 1200 mm Apex Prime| 5 years warranty by Orient | 350 RPM motor speed| Rust-proof Aluminium blades| Decorative ring & trims| White, pack of 1', 38, 7678, 8900, 'Fan'),
(22, '../images/catf5.jpg', 'Crompton Fan', 'Crompton PREMION AURA PRIME 1200 mm Ceiling Fan for Home | Premium Designer | Anti-Dust | Superior Air Delivery | 1 Star Rated Energy Efficient Fan | 2 Years Warranty | (Titanium Effect), Pack of 1', 35, 5777, 6788, 'Fan'),
(23, '../images/catf6.jpg', 'BOSS Blander', 'BOSS Stainless Steel Big Boss Portable Hand Blender | Powerful 275 W Motor | 5 Years Warranty* First In India | Variable Speed Control | Isi-Marked, Wine, 275 Watts', 21, 6777, 8848, 'Blander'),
(24, '../images/catb2.jpg', 'Maharaja Blender', 'Maharaja Whiteline Actimix Hand Blender with Ergonomic Grip || Sharp Blades for Tough Blending || 2 Year Warranty, 600W (Black & Grey)', 40, 5588, 6890, 'Blander'),
(25, '../images/cat5.jpg', 'LA\'VITE Blender', 'LA\'VITE 250 Watts Ergonomic Hand Blender: Stainless Steel Multi-Blade System, 2-Speed Control, Wall-Mount Stand', 12, 5888, 6788, 'Blander'),
(27, '../images/cat6.jpg', 'Orpat Blender', 'Orpat Hand Blender – HHB-187E – 400 W - Majestic Yellow', 36, 5879, 8464, 'Blander'),
(28, '../images/catm2.jpg', 'Kutchina Milano Mixer ', 'Kutchina Milano 750 Hygrade Motor Mixer Grinder 750 Watt with 3 Jars (Liquidizing, Wet Grinding, Chutney Jar) | Stainless Steel Blades | Mixer Grinder 750+ Watt | 2 Years on Product, 5 Years on Motor', 26, 7877, 9876, 'Mixar'),
(29, '../images/catm3.jpg', 'Prestige Mixer ', 'Prestige Iris 750 Watt Mixer Grinder with 3 Stainless Steel Jar + 1 Juicer Jar (White and Blue)', 13, 5388, 6700, 'Mixar'),
(30, '../images/catm5.jpg', 'Orien Electric Mixer ', 'Orient Electric 750W mixer grinder with Juicer | Super power 750 MGSP75B4 4 jar with 3 SS jars and 1 PC juicing jar with Seive | Longer life balanced coil motor| 5 years motor warranty', 8, 6888, 7588, 'Mixar'),
(31, '../images/catm4.jpg', 'Orient Electric Mixer ', 'Orient Electric 500W mixer grinder | Kitchen Kraft 500 MGKK50B3 with 3 SS jars | Longer life balanced coil motor | ABS body | Uniform grinding | 5 years motor warranty', 26, 8999, 9000, 'Mixar'),
(32, '../images/catm6.webp', 'USHA Mixer ', 'USHA Colt Mixer Grinder (Mg-3053) 500-Watt 3 Jars With Copper Motor (White/Blue), 500 Watt', 43, 7300, 9000, 'Mixar'),
(33, '../images/cart6.jpg', 'Multipurpose Chopper', '14 in 1 Multipurpose Chopper - Fruits & Vegetable Cutters, Grater Peeler Chipser | Unbreakable Food Grade Body, Easy Push to Clean Button | Slicer, Dicer, Chopper for Kitchen (14 in 1 Chopper)', 25, 4878, 8777, 'Chopar'),
(34, '../images/cart7.webp', 'Borosil  Chopper', 'Borosil Chef Delite 300 Watts Electric Chopper for Kitchen, Twin Blade Technology, 600 ml \'chop-n-store\' plastic bowl with lid, Vegetable Chopper, Cutter, Chop, Mince, Dice, Whisk, Blend', 14, 7388, 8000, 'Chopar'),
(35, '../images/bt1.jpg', 'Mr. Butler Italia Soda Maker', 'Mr. Butler Italia Soda Maker Blue - Single Cylinder, Create Sparkling Water In Home Kitchen, Compact, Space Saving Design, Soda Beverage Carbonator', 48, 7899, 9234, 'Soda Maker'),
(36, '../images/bt3.jpg', 'Mr. Butler Italia Soda Maker', 'Mr. Butler Italia Soda Maker Black – Jumbo Pack with 2 cylinders and 4 PET Bottles', 38, 7466, 8600, 'Soda Maker'),
(37, '../images/cart8.jpg', 'Mr.Spark  Soda Maker', 'Mr.Spark Soda Maker White Jumbo Pack Home Fizzy Drink Maker Machine in Wight and Black Color, Automatic Water Machine with CO2 Cylinder & 1 Bottle free, Safe & BPA Free Kitchen Appliances', 42, 7388, 9000, 'Soda Maker'),
(38, '../images/h1.jpg', 'Halonix Bulb', 'Halonix Rechargeable Emergency Inverter Led Bulb B22 9-Watt - White Pack Of 2(B22D)', 56, 1300, 1500, 'Bulb'),
(39, '../images/b2.jpg', 'HENONIX Bulb', 'HENONIX 365 DAYS Rechargeable Light Bulb,PP Matte Finish Body,Emergency Light,LED Bulb Light,12 Watt,Pack of 3', 46, 930, 1300, 'Bulb'),
(40, '../images/induc1.jpg', 'IBELL  Induction', 'iBELL 20 YO Induction Cooktop 2000W with Full Touch Control, Auto Shut Off and over Heat Protection', 238399, 8893, 9499, 'Induction'),
(42, '../images/in6.jpg', 'Wipro  Induction', 'Wipro 2000 watt Induction Cooktop Sensor Feather Touch (Black) with Crystal Glass Plate |Manual', 23, 8779, 9960, 'Induction');

-- --------------------------------------------------------

--
-- Table structure for table `client_login`
--

CREATE TABLE `client_login` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `cnfpassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_login`
--

INSERT INTO `client_login` (`Id`, `Firstname`, `Lastname`, `Email`, `Password`, `cnfpassword`) VALUES
(39, 'bhavikbhai', 'visania', 'bhavik@gmail.com', '123456789', '123456789'),
(40, 'Devansh', 'kapadiya', 'dev@134', '567', '890'),
(41, 'dev', 'kapadiya', 'right@123', 'dev', 'dev'),
(42, 'darshi', 'vekariya', 'bhavitapatal@gmail.com', 'darshi', 'darshi'),
(43, 'Pavan', 'Khandhar', 'pavan41@gmail.com', 'aaabbb', 'aaabbb'),
(44, 'dff', 'fdfd', 'a@gmail.com', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` int(10) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`Id`, `name`, `email`, `phone`, `comments`) VALUES
(1, 'devansh kapadiya', 'dev@784', 2147483647, 'nice products this devansh '),
(2, 'devansh kapadiya', 'dev@78467848', 2147483647, 'hello devansh'),
(4, 'devansh kapadiya', 'dev@123', 2147483647, 'nice product in here'),
(6, 'devansh kapadiya', 'dev@123', 2147483647, 'developer '),
(7, 'Dev hhh', 'devanshkapadiya304@gmail.com', 2147483647, 'good quality bro'),
(8, 'darshi vekariya', 'bhavitapatal@gmail.com', 2147483647, 'nice123');

-- --------------------------------------------------------

--
-- Table structure for table `home_nsproduct`
--

CREATE TABLE `home_nsproduct` (
  `Id` int(11) NOT NULL,
  `Pro_title` varchar(255) NOT NULL,
  `Pro_image` varchar(255) DEFAULT NULL,
  `Pro_details` text DEFAULT NULL,
  `Pro_prize` decimal(10,2) DEFAULT NULL,
  `Pro_MRP` decimal(10,2) DEFAULT NULL,
  `Pro_disc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_nsproduct`
--

INSERT INTO `home_nsproduct` (`Id`, `Pro_title`, `Pro_image`, `Pro_details`, `Pro_prize`, `Pro_MRP`, `Pro_disc`) VALUES
(1, 'Crompton Mixer', 'images/patelm2.jpg', 'Crompton Ameo 750-Watt Mixer Grinder with MaxiGrind and Motor Vent-X Technology (3 Stainless Steel Jars and 1 Juicer Jar, Black & Green) (AMEO-4JARS)', 5869.00, 8467.00, '48'),
(2, 'Philips Iron', 'images/iron2.jpg', 'Philips Steam Iron DST0820/20 (World no. 1 Ironing Brand) Powerful 15 gm/min Steam Output with Spray, Multilayer Coated Non stick Soleplate with 1250 W quick Heat up\r\n', 8364.00, 9375.00, '12'),
(3, 'Sandwich Maker ', 'images/to1.jpg', 'iBELL SM1515 Sandwich Maker with Floating Hinges, 1000Watt, Panini/Grill/Toast (Black)', 7400.00, 8500.00, '60'),
(4, 'Orpat Hand Mixer', 'images/patelhand1.jpg', 'International Ergonomic Design & Styling,200 Watts Powerful and,Durable Motor\r\n3 Dedicated Speed for Folding, Mixing & Whisking,Modern Ergonomic Design', 2400.00, 4650.00, '30'),
(5, 'Orpat Blender  ', 'images/orpat1.jpg', 'Orpat HHB-157E-EC 250-Watt Hand Blender with Chopper ', 3400.00, 4500.00, '35'),
(6, 'Atomberg Mixer', 'images/patelm3.jpg', 'Atomberg Zenova Mixer Grinder with Unique Coarse Mode | Advanced Safety Features | 4 Jars including Chopper Jar with Hands Free Operation (Red Wine)', 6999.00, 8020.00, '38'),
(7, 'Soda Maker', 'images/soda1.jpg', 'Mr. Butler Italia Soda Maker White - Single Cylinder, Create Sparkling Water In Home Kitchen, Compact, Space Saving Design, Soda Beverage Carbonator', 5800.00, 6500.00, '9'),
(8, 'BOSS Blender ', 'images/blan1.jpg', 'BOSS Stainless Steel Big Boss Portable Hand Blender | Powerful 275 W Motor | 5 Years Warranty* First In India | Variable Speed Control | Isi-Marked, Wine, 275 Watts', 7500.00, 8567.00, '14'),
(9, 'Soda Maker', 'images/soda2.jpg', 'Mr. Butler Italia Soda Maker Black – Jumbo Pack with 2 cylinders and 4 PET Bottles', 6245.00, 8464.00, '38'),
(10, 'Longway Iron', 'images/iron5.jpg', 'Longway Kwid Light Weight Non-Stick Teflon Coated Dry Iron, Electric Iron for Clothes | 1 Year Warranty| (1100 Watt, Blue)', 5300.00, 7980.00, '63'),
(11, 'Crompton  Mixer', 'images/b84.jpg', 'Crompton DS 500W Mixer Grinder with Powertron Motor & Motor Vent-X Technology (3 Stainless Steel Jars, Sky Blue)', 5838.00, 6375.00, '24'),
(12, 'Crompton Wall Fan', 'images/wall5.jpg', 'Crompton HighFlo Wave Plus 400-MM (16 inch) 60W Oscillating Wall Fan (KD White)', 3740.00, 5677.00, '34');

-- --------------------------------------------------------

--
-- Table structure for table `order_manage`
--

CREATE TABLE `order_manage` (
  `order_id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `paymode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manage`
--

INSERT INTO `order_manage` (`order_id`, `fullname`, `email`, `phone`, `address`, `paymode`) VALUES
(23, 'dev2024', 'devansh@kapadiya', 6355100160, 'joshipura ', 'Cash on Delivery '),
(24, 'devansh', 'dev@3867', 8789290494, '7bjhhhh', 'UPI'),
(25, 'Pavan Khandhar', 'pavan41@gmail.com', 9537884425, 'JND', 'UPI'),
(26, 'Pavan Khandhar', 'pavan41@gmail.com', 9537884425, 'JND', 'Cash on Delivery'),
(27, 'dev', 'dev@567', 576678889987, 'tyut76677t76t6t6', 'UPI'),
(28, 'dev', 'gghg@gg', 668778667, 'jhghghgh', 'Cash on Delivery'),
(29, 'gana', 'gghg@gg', 668778667, 'jhghghgh', 'UPI'),
(30, 'devb', 'kjhhh@ijioj', 7798, '798', 'cash'),
(31, 'devb', 'kjhhh@ijioj', 6355100160, '798', 'Cash on Delivery '),
(32, 'majnu', 'majnu@jjk', 78784899, 'f-gmskllsj', 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `order_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`order_id`, `item_name`, `item_price`, `quantity`) VALUES
(21, 'Wall Fan', 2899, 1),
(22, 'Blender ', 1899, 4),
(23, 'Bajaj Mixer', 3249, 1),
(23, 'Havells Fan', 2198, 3),
(23, 'Blender ', 1899, 5),
(24, 'Wall Fan', 2899, 2),
(25, 'Bajaj Mixer', 3249, 1),
(25, 'Havells Fan', 2198, 100),
(26, 'Blender ', 1899, 2),
(27, 'Blender ', 1899, 1),
(27, 'Wall Fan', 2899, 2),
(27, 'Bajaj Mixer', 3249, 3),
(27, '4Bajaj Mixer', 3249, 4),
(28, 'mxar of add', 5777, 2),
(28, 'Wall Fan', 2899, 3),
(28, '3Bajaj Mixer', 3249, 4),
(28, 'Blender ', 1899, 2),
(28, 'Bajaj Mixer', 2634, 4),
(29, 'Blender ', 1899, 1),
(29, 'vivoj Mixer', 3249, 2),
(29, 'Bajaj Mixer', 2634, 3),
(30, 'new', 7887, 1),
(31, 'Blender ', 1899, 3),
(31, 'Wall Fan', 3070, 2),
(32, 'Blender ', 1899, 3),
(32, 'Wall Fan', 3070, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Pro_title` varchar(50) NOT NULL,
  `Pro_image` text NOT NULL,
  `Pro_details` text NOT NULL,
  `Pro_prize` float NOT NULL,
  `Pro_MRP` float NOT NULL,
  `Pro_disc` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Pro_title`, `Pro_image`, `Pro_details`, `Pro_prize`, `Pro_MRP`, `Pro_disc`) VALUES
(1, 'Bajaj Mixer', 'images/m3.jpg', 'Bajaj Rex Mixer Grinder 750W|3 Mixer Jars|Mixie for Kitchen with Nutri-Pro Feature|Titan Motor-Heavy Duty Grinding|Adjustable Speed Control|Multifunctional...', 2800, 3400, 70),
(2, 'Toaster', 'images/patels1.jpg', 'MILTON Express 800 Watt Grill Sandwich Maker | Electric Toaster Griller Sandwich Maker | Non Stick Coating Grill Plates | Power Indicators | 1 Year Warranty | Black', 2980, 3458, 40),
(3, 'Blender ', 'images/blander1.jpg', 'PHILIPS HL1655/00 Hand Blender | Powerful 250W Motor | with Rust free steel arm |                                    Easy single trigger operation | Specially designed blades | Wall bracket...', 1899, 2095, 30),
(4, 'Wall Fan', 'images/wfan1.jpg', 'Usha Mist Air Icy 400mm Wall Fan (White) Pack of 1', 3070, 3798, 36),
(6, 'Induction', 'images/pateli1.jpg', 'Philips Viva Collection HD4928/01 2100-Watt Induction Cooktop, Soft Touch Button with Crystal Glass (Black)', 3250, 6400, 65),
(7, 'Havells Fan  ', 'images/patelf1.jpg', 'Havells 1200mm Ambrose ES Ceiling Fan|Premium Finish, Deco. Fan, Elegant Looks, High Air Delivery, Energy Saving, 100% Pure Copper Motor|2 Year Warranty by Brand | (Pack of 1, Pearl White Wood) 1 Star', 3249, 6400, 20),
(9, 'Philips Iron', 'images/pateliron1.jpg', 'Philips Steam Iron GC1905/21 (World no. 1 Ironing Brand) – Black non-stick soleplate, Powerful 17gm/min steam output & 1300 W Quick heat-up', 3890, 4900, 40),
(10, ' Mixer ', 'images/patelm1.jpg', 'Philips HL7756/01 750 Watt Mixer Grinder, 3 Stainless Steel Multipurpose Jars with 3 Speed Control and Pulse function (Black)', 7768, 8900, 10);

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `service` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`id`, `first_name`, `last_name`, `email`, `phone`, `service`, `address`, `password`) VALUES
(26, 'devansh', 'kapadiya', 'dev@134', '6355100160', 'Mixer', 'i 304 mangalam residency ', '5678974'),
(28, 'dev', 'kapadiya', 'right@123', '6355186467', 'Blander', 'joshipura', 'dev'),
(29, 'darshi', 'vekariya', 'bhavitapatal@gmail.com', '6353838644', 'Soda Maker', 'joshipura', 'darshi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cat_products`
--
ALTER TABLE `cat_products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `client_login`
--
ALTER TABLE `client_login`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `home_nsproduct`
--
ALTER TABLE `home_nsproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_manage`
--
ALTER TABLE `order_manage`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat_products`
--
ALTER TABLE `cat_products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `client_login`
--
ALTER TABLE `client_login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_nsproduct`
--
ALTER TABLE `home_nsproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_manage`
--
ALTER TABLE `order_manage`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
