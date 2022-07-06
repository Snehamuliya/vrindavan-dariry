-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 03:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aasthamangooss`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` bigint(20) NOT NULL,
  `category` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `category`) VALUES
(1, 'Alphonso Mangoes'),
(2, 'Raw Mango'),
(3, 'Kesar Mango'),
(4, 'Totapuri Mango'),
(5, 'Amrapali Mango'),
(6, 'Badaami  Mango'),
(7, 'Yellow Kesar Mango'),
(8, 'Rajapuri Mango'),
(9, 'Aamrakhand'),
(10, 'Pickles'),
(11, 'Aam Panna'),
(12, 'Mango Barfi'),
(13, 'Amba Wadi'),
(14, 'Candy'),
(15, 'Kairi Juice'),
(16, 'Mango Syrup'),
(17, 'Mango Beverage'),
(18, 'Mango Jam'),
(19, 'Muramba'),
(20, 'Dried Mango');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `address` longtext NOT NULL,
  `city` mediumtext NOT NULL,
  `district` mediumtext NOT NULL,
  `pincode` int(6) NOT NULL,
  `email` mediumtext NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `name`, `address`, `city`, `district`, `pincode`, `email`, `mobileno`) VALUES
(1, 'Chitale Manufacturers', 'At-Post Nagar', 'Pune main', 'Pune', 416003, 'chitalemanufactures@gmail.com', '9201875425'),
(2, 'Mapro', 'Mahabaleshwar\r\n', 'Satara', 'Satara', 415490, 'mapromanufactures@gmail.com', '7743128954'),
(3, 'Jalani', 'Karad', 'Satara', 'Satara', 415428, 'jalanifoods@gmail.com', '8854329021'),
(4, 'Kissaan', 'Chandivali,AndherEast', 'Mumbai', 'Mumbai', 400072, 'kisaangroup25@gmail.com', '7860453291'),
(5, 'Katadare Foods', 'MIDC,j2/17,Additional,Satara', 'Satara', 'Satara', 415002, 'katarefoods@gmail.com', '8654302145'),
(6, 'Amul Manufacturers', 'Chandiwali', 'Mumbai', 'Mumbai', 412009, 'amulmanufacturers@gmail.com', '9590432781'),
(7, 'Gokul', 'Nandani', 'Kolhapur', 'Kolhapur', 414008, 'gokulmanufacturers@gmail.com', '9309543729'),
(8, 'Sakas Food Products', 'Koregaon', 'Satara', 'Satara', 415489, 'sakasfoods45@gmail.com', '9659453028'),
(9, 'Warana Mnufacturers', '  Nashik', 'Nashik', 'Nashik', 417305, 'waranafoodproducts@gmail.com', '8765490329'),
(10, 'Juicy Products', 'At Post Ahmednagar', 'Ahmednagar', 'Ahmednagar', 417980, 'juicyproducts@gmail.com', '8076543927'),
(11, 'Paperboat', 'Bengaluru India.', 'Bengaluru', 'Bengaluru', 319008, 'paperboatmanufactures@gmail.com', '7902807876');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `address` longtext NOT NULL,
  `city` mediumtext NOT NULL,
  `district` mediumtext NOT NULL,
  `pincode` int(6) NOT NULL,
  `email` mediumtext NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `name`, `address`, `city`, `district`, `pincode`, `email`, `mobileno`) VALUES
(1, 'Aarti Jadhav', 'At Post:Ninam', 'Satara', 'Satara', 415515, 'aartijadhav123@gmail.com', '9065328760'),
(2, 'Nikita Mhatre', 'At-Post:Valase', 'Satara', 'Satara', 415517, 'nikitamhatre17@gmail.com', '8865342190'),
(4, 'Priyanka Jadhav', '  At-Post Kashil', 'Satara', 'satara', 415517, 'priyankajadhav98@gmail.com', '9654321098');

-- --------------------------------------------------------

--
-- Table structure for table `organization_details`
--

CREATE TABLE `organization_details` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `address` longtext NOT NULL,
  `city` mediumtext NOT NULL,
  `district` mediumtext NOT NULL,
  `pincode` int(6) NOT NULL,
  `email` mediumtext NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization_details`
--

INSERT INTO `organization_details` (`id`, `name`, `address`, `city`, `district`, `pincode`, `email`, `mobileno`) VALUES
(1, 'Aastha Mangoes', 'At-Post Majgaon', 'Satara', 'Satara', 415502, 'AasthaMangoes55@gmail.com', '8443910876');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) NOT NULL,
  `product_name` longtext NOT NULL,
  `product_desc` mediumtext NOT NULL,
  `company` mediumtext NOT NULL,
  `category` mediumtext NOT NULL,
  `product_quantity` int(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_weight` varchar(200) NOT NULL,
  `file` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `product_desc`, `company`, `category`, `product_quantity`, `product_price`, `product_weight`, `file`) VALUES
(1, 'Fresh Devghad Hapoos Mango', 'It has a good taste and real color and fragrance of fresh devghad hapoos.', '6', '1', 2, 560, 'KIlogram', 'Array'),
(5, 'Fresh Chitale Aamrakhand', 'It is a very delicious product from the chitale products.', '7', '9', 0, 200, 'KIlogram', 'KISSAN-MANGO-JAM-1451309072-10022776.jpg'),
(6, ' Spicy Pickle', 'this product is spicy and has a mouth-watering taste.', '5', '10', 0, 130, 'Gram', ''),
(7, 'Mango Syrup', 'This syrup has a good taste and it looks good with its better consistency.', '7', '7', 0, 170, 'Liters', '0019945_mapro-mango-crush_1280.jpeg'),
(8, 'Sakas Aamrakhand', 'this is the delicious product from sakas foods.', '8', '9', 0, 120, 'KIlogram', 'unnamed.jpg'),
(9, 'Kissaan Fresh Mango Jam', 'This Jam is fresh and delicious.the taste is good and childeren will specially going to love it.', '9', '9', 0, 200, 'KIlogram', 'KISSAN-MANGO-JAM-1451309072-10022776.jpg'),
(10, 'Katadare Spicy Pickle', 'This is the good and super tasty pickle . The mouth watery item by the Katadare Products.', '5', '10', 0, 150, 'KIlogram', '8906011851742-1000x1000.jpg'),
(11, 'Chitale Mango Barfi ', 'This mango barfi product is very delicious in taste. And it has a good texture at room temperature also.', '1', '11', 0, 180, 'KIlogram', '71l5Qj4co5L._SY550_.jpg'),
(12, 'Our Fresh Kairi Juice', 'This product is ultimate happiness for the kairi juice lovers', '3', '15', 0, 100, 'KIlogram', '71FIuh604+L._SX522_.jpg'),
(13, ' Mango Barfi', 'These mango barfi have a delicious taste and their favour is too good.', 'Chitale Manufacturers', '12', 1, 400, 'KIlogram', '71l5Qj4co5L._SY550_.jpg'),
(14, 'Fresh and Tasty muramba', 'This is  good in taste and has good texture while keeping it into room temperature.', '3', '14', 0, 677, 'KIlogram', 'Hapus-Muramba-500x500.jpg'),
(15, 'Fresh and juicy Mango Juice', 'the juice is preserved under high observance and its very very juicy.', '2', '15', 0, 150, 'KIlogram', 'mapro-mango-crush-1-l-4-20201026.jpg'),
(16, 'Fresh Amul Lassi', 'this lassi has loved by children as well as elder people. ', '6', '16', 0, 240, 'KIlogram', '61uD+9bqR3L._SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `purchase_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `amount` float NOT NULL,
  `tax` float NOT NULL,
  `taxamt` float NOT NULL,
  `discount` float NOT NULL,
  `discountamt` double NOT NULL,
  `gst` double NOT NULL,
  `gstamt` double NOT NULL,
  `cess` double NOT NULL,
  `cessamt` double NOT NULL,
  `finalamount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`purchase_id`, `product_id`, `quantity`, `price`, `amount`, `tax`, `taxamt`, `discount`, `discountamt`, `gst`, `gstamt`, `cess`, `cessamt`, `finalamount`) VALUES
(5, 1, 1, 200, 200, 2, 4, 1, 2, 5, 10, 4, 8, 200),
(6, 3, 1, 250, 200, 200, 4, 1, 2, 5, 10, 4, 8, 200),
(14, 3, 1, 150, 150, 150, 4.5, 2, 3, 5, 7.5, 2, 3, 150),
(13, 3, 1, 150, 150, 150, 4.5, 2, 3, 5, 7.5, 2, 3, 150),
(12, 6, 1, 200, 200, 200, 4, 2, 4, 10, 20, 7, 14, 200),
(15, 3, 2, 150, 150, 150, 4.5, 2.5, 3.75, 5, 7.5, 4.2, 6.3, 150),
(11, 5, 1, 200, 200, 200, 4, 1, 2, 5, 10, 4, 8, 200),
(10, 5, 1, 200, 200, 200, 4, 1, 2, 5, 10, 4, 8, 200),
(7, 5, 1, 100, 200, 200, 4, 1, 2, 5, 10, 4, 8, 200),
(8, 5, 1, 200, 200, 200, 4, 1, 2, 5, 10, 4, 8, 200),
(9, 5, 1, 200, 200, 200, 4, 1, 2, 5, 10, 4, 8, 200),
(16, 1, 2, 200, 200, 200, 4, 2, 4, 5, 10, 5, 10, 200);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_master`
--

CREATE TABLE `purchase_master` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `po_id` bigint(20) NOT NULL,
  `taxmaster` float NOT NULL,
  `taxamtmaster` float NOT NULL,
  `gstmaster` float NOT NULL,
  `gstamtmaster` float NOT NULL,
  `discountmaster` double NOT NULL,
  `discountamtmaster` double NOT NULL,
  `grandtotalmaster` double NOT NULL,
  `sub` double NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_master`
--

INSERT INTO `purchase_master` (`id`, `date`, `supplier_id`, `po_id`, `taxmaster`, `taxamtmaster`, `gstmaster`, `gstamtmaster`, `discountmaster`, `discountamtmaster`, `grandtotalmaster`, `sub`, `payment`) VALUES
(1, '2021-03-23', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(2, '0000-00-00', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(3, '0000-00-00', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(4, '0000-00-00', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(5, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(6, '0000-00-00', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(7, '2021-03-28', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(8, '2021-03-22', 4, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(9, '2021-03-22', 5, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(10, '2021-03-26', 2, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(11, '2021-04-04', 1, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(12, '2021-03-19', 5, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash'),
(13, '2021-03-23', 6, 0, 0, 0, 0, 0, 0, 0, 150, 150, 'Cash'),
(14, '2021-03-23', 2, 0, 0, 0, 0, 0, 0, 0, 150, 150, 'Cash'),
(15, '2021-03-22', 3, 0, 0, 0, 0, 0, 0, 0, 150, 150, 'Card'),
(16, '2021-04-03', 9, 0, 0, 0, 0, 0, 0, 0, 200, 200, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `supplier_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` double NOT NULL,
  `total_amt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `address` longtext NOT NULL,
  `city` mediumtext NOT NULL,
  `district` mediumtext NOT NULL,
  `pincode` int(6) NOT NULL,
  `email` mediumtext NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `name`, `address`, `city`, `district`, `pincode`, `email`, `mobileno`) VALUES
(1, 'PritiJadhav', ' At:Post Majgaon tal-Dist:satara', 'Satara', 'Satara', 415518, 'priti123@gmail.com', '8765243350'),
(2, 'SaraswatiMangoSuppliers', 'Nagthane', 'Satara', 'Satara', 415519, 'saraswatimango@gmail.co', '8976543355'),
(3, 'DiptiSuppliers', 'At-Post-Wai', 'Satara', 'Satara', 415507, 'dipti@gmail.com', '9086554212'),
(4, 'PrajaktaMangoSuppliers', 'At-Post:Khandala', 'Satara', 'Satara', 416003, 'prajaktasupp@gmail.com', '9983256719'),
(5, 'PratikSuppliers', 'At post:Karad', 'Karad', 'Satara', 415008, 'pratik@gmail.com', '9086554212'),
(6, 'NilimaSuppliers', 'At-Post:Kolhapur', 'Kolhapur', 'Kolhapur', 415007, 'nilima23@gmail.com', '9983256719'),
(9, 'Neha Dhane', 'At Post:Apshinge', 'Karad', 'Satara', 415507, 'nehadhane@gmail.com', '9086554288'),
(10, '234', 'dfd', 'aa', 'fgh', 435345, 'df@gmail.com', '3453453453');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_details`
--
ALTER TABLE `organization_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_master`
--
ALTER TABLE `purchase_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organization_details`
--
ALTER TABLE `organization_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `purchase_master`
--
ALTER TABLE `purchase_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
