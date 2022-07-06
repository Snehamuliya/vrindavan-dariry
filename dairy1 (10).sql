-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 07:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Address` longtext NOT NULL,
  `City` mediumtext NOT NULL,
  `District` mediumtext NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Email` mediumtext NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `m_name` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Address`, `City`, `District`, `Pincode`, `Email`, `Phone`, `user`, `pass`, `m_name`) VALUES
(1, 'sneha kamal kale', 'shahi aprtment left side to hanuman templekothrud pune', 'mahad', 'pune', 412805, 'sneha9@gmail.com', '9834567823', 'sneha', 'Sony@1234', 'nikita'),
(2, 'Suresh Anil Shram', 'archana plot no - 12hare bandar mumbai', 'chopati', 'mumbai', 412806, 'suresh@gmail.com', '7734658798', 'suresh', 'Suresh123', 'kranti');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `cus_id` bigint(20) NOT NULL,
  `prod_id` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `total` double NOT NULL,
  `cstatus` mediumtext NOT NULL,
  `ca_date` varchar(10) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cus_id`, `prod_id`, `price`, `quantity`, `total`, `cstatus`, `ca_date`, `sno`) VALUES
(1, 1, 2, 70, 1, 70, 'shipping', '2021/07/02', 1),
(2, 3, 2, 70, 1, 70, 'shipping', '2021/07/02', 1),
(3, 3, 6, 300, 1, 300, 'shipping', '2021/07/02', 1),
(4, 1, 2, 70, 1, 70, 'shipping', '2021/07/02', 1),
(5, 1, 12, 200, 1, 200, 'shipping', '2021/07/03', 2),
(7, 1, 12, 200, 2, 400, 'shipping', '2021/07/03', 2),
(9, 8, 12, 200, 4, 800, 'shipping', '2021/07/03', 2),
(10, 8, 2, 70, 1, 70, 'shipping', '2021/07/05', 1),
(11, 11, 10, 150, 1, 150, 'shipping', '2021/07/07', 2),
(12, 11, 8, 450, 2, 900, 'shipping', '2021/07/07', 2),
(14, 11, 7, 250, 1, 250, 'shipping', '2021/07/07', 1),
(15, 1, 2, 70, 1, 70, 'shipping', '2021/07/08', 1),
(16, 1, 9, 400, 1, 400, 'shipping', '2021/07/10', 2),
(17, 1, 2, 70, 1, 70, 'shipping', '2021/07/10', 1),
(18, 1, 7, 250, 1, 250, 'shipping', '2021/07/10', 1),
(24, 3, 12, 200, 1, 200, 'shipping', '2021/07/17', 2),
(25, 1, 11, 300, 1, 300, 'shipping', '2021/07/17', 2),
(26, 3, 11, 300, 1, 300, 'shipping', '2021/07/17', 2),
(27, 3, 1, 60, 1, 60, 'shipping', '2021/07/18', 1),
(28, 3, 10, 150, 1, 150, 'shipping', '2021/07/18', 2),
(29, 3, 7, 250, 1, 250, 'shipping', '2021/07/18', 1),
(30, 6, 2, 70, 1, 70, 'shipping', '2021/07/19', 1),
(31, 6, 1, 60, 1, 60, 'shipping', '2021/07/19', 1),
(33, 6, 12, 200, 2, 400, 'shipping', '2021/07/19', 2),
(34, 6, 2, 70, 1, 70, 'shipping', '2021/07/19', 1),
(35, 3, 1, 60, 1, 60, 'shipping', '2021/07/23', 1),
(36, 3, 4, 90, 2, 180, 'shipping', '2021/07/23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_bil`
--

CREATE TABLE `cart_bil` (
  `id` bigint(20) NOT NULL,
  `cus_id` bigint(20) NOT NULL,
  `prod_id` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `total` double NOT NULL,
  `cstatus` mediumtext NOT NULL,
  `ca_date` varchar(10) NOT NULL,
  `bil_no` bigint(20) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_bil`
--

INSERT INTO `cart_bil` (`id`, `cus_id`, `prod_id`, `price`, `quantity`, `total`, `cstatus`, `ca_date`, `bil_no`, `sno`) VALUES
(1, 1, 2, 70, 1, 70, 'done', '2021/07/02', 1, 1),
(2, 3, 2, 70, 1, 70, 'return', '2021/07/02', 2, 1),
(3, 3, 6, 300, 1, 300, 'return', '2021/07/02', 2, 1),
(4, 1, 2, 70, 1, 70, 'done', '2021/07/02', 3, 1),
(5, 1, 12, 200, 1, 200, 'done', '2021/07/03', 3, 2),
(7, 1, 12, 200, 2, 400, 'done', '2021/07/03', 4, 2),
(9, 8, 12, 200, 4, 800, 'done', '2021/07/03', 6, 2),
(10, 8, 2, 70, 1, 70, 'done', '2021/07/05', 7, 1),
(11, 11, 10, 150, 1, 150, 'done', '2021/07/07', 8, 2),
(12, 11, 8, 450, 2, 900, 'done', '2021/07/07', 8, 2),
(14, 11, 7, 250, 1, 250, 'done', '2021/07/07', 8, 1),
(15, 1, 2, 70, 1, 70, 'done', '2021/07/08', 9, 1),
(16, 1, 9, 400, 1, 400, 'done', '2021/07/10', 9, 2),
(17, 1, 2, 70, 1, 70, 'done', '2021/07/10', 10, 1),
(18, 1, 7, 250, 1, 250, 'done', '2021/07/10', 11, 1),
(24, 3, 12, 200, 1, 200, 'shipping', '2021/07/17', 12, 2),
(25, 1, 11, 300, 1, 300, 'shipping', '2021/07/17', 14, 2),
(26, 3, 11, 300, 1, 300, 'shipping', '2021/07/17', 15, 2),
(27, 3, 1, 60, 1, 60, 'shipping', '2021/07/18', 16, 1),
(28, 3, 10, 150, 1, 150, 'shipping', '2021/07/18', 17, 2),
(29, 3, 7, 250, 1, 250, 'shipping', '2021/07/18', 18, 1),
(30, 6, 2, 70, 1, 70, 'return', '2021/07/19', 19, 1),
(31, 6, 1, 60, 1, 60, 'shipping', '2021/07/19', 20, 1),
(33, 6, 12, 200, 2, 400, 'shipping', '2021/07/19', 22, 2),
(34, 6, 2, 70, 1, 70, 'shipping', '2021/07/19', 23, 1),
(35, 3, 1, 60, 1, 60, 'shipping', '2021/07/23', 24, 1),
(36, 3, 4, 90, 2, 180, 'shipping', '2021/07/23', 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `Category` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Category`) VALUES
(1, 'Milk'),
(2, 'Curd'),
(3, 'Paneer'),
(4, 'Ghee'),
(5, 'Others'),
(7, 'mozarella');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Address` longtext NOT NULL,
  `City` mediumtext NOT NULL,
  `District` mediumtext NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Email` mediumtext NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Pname` mediumtext NOT NULL,
  `Pmobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `Name`, `Address`, `City`, `District`, `Pincode`, `Email`, `Phone`, `Pname`, `Pmobile`) VALUES
(1, 'giri milk', 'plot ni=\"34\"Powai naka satara', 'Satara', 'Satara', 412800, 'giri@gmail.com', '9763917654', 'ganesh shankar dev', '8819917654');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Address` longtext NOT NULL,
  `City` mediumtext NOT NULL,
  `District` mediumtext NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Email` mediumtext NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `m_name` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `Address`, `City`, `District`, `Pincode`, `Email`, `Phone`, `user`, `pass`, `m_name`) VALUES
(1, 'sakshi waman muliya', 'Shubhamkar plot-no=33 jajurikar colony, wai\"  \" ', 'wai', 'satara', 412803, 'snehamuliya98@gmail.com', '7734658798', 'sneha', 'Sneha123', 'geeta'),
(2, 'Priyanka chandrakant babar', '\"kala\" left side to ambabai temple kikali', 'kikali', 'satara', 423984, 'priya23@gmail.com', '7020458734', 'priyanka', 'Priya233', 'nisha'),
(3, 'kriti anil sawant', '\"rachna\" gali no-7 phulenagar wai ', 'wai', 'satara', 412803, 'shehamuliya98@gmail.com', '9876985634', 'kriti', 'Kriti456', 'sumati'),
(4, 'rachna suresh bhope', 'rachna plot no-13 anat wadi bhuing\"', 'bhuing', 'satara', 345345, 'rachna@gmail.com', '7856905634', 'rachana', 'Rachu4567', 'kamal'),
(5, 'aprna kishor kularni', 'aparna apartment gavati chandrapur', 'masur', 'chandrapur', 410486, 'aapu@gmail.com', '9927845623', 'Aapu', 'Aprna123', 'sunita'),
(6, 'nikita anil jedheee', 'kale wadi plot no - 112  janjira, ratnagiri', 'janjir', 'ratnagiri', 416733, 'snehamuliya98@gmail.com', '7020140667', 'nikita', 'Nikita123', 'reshma'),
(7, 'piyush anil dev', 'nakoda apartment left side to ambika temple tilak', 'tilak', 'nagpur', 412734, 'piyush@gmail.com', '9921045323', 'piyush', 'Piyush123', 'sunanda'),
(8, 'kamal anant kale', 'at post bavdhan no 45', 'wai', 'satara', 412803, 'kamal@gmail.com', '7734658798', 'kamalesh', 'kamal1234', 'nikitaaa'),
(9, 'kriti anil sawant', 'phule nagar galli no =12 wai', 'wai', 'satara', 416734, 'kriti@gmail.com', '9921956934', 'kiru', 'Kriti@123', 'sunanda'),
(10, 'sadashiv aman nevase', '\"anant \" apartment third floor plot no- 14 dhagewadidhage\"', 'dhage', 'kolhapur', 412807, 'sada@gmail.com', '9876985634', 'sadashiv', 'Sadashiv1234', 'sneha'),
(11, 'Shraddha', 'Jejurikar Colony,Wai', 'Wai', 'satara', 412803, 'shraddhawm08@gmail.com', '9650883733', 'Shraddha08', 'Shraddha@08', 'Geeta');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `mail` varchar(70) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mail`, `feedback`) VALUES
(1, 'sneha waman muliya', 'snehamuliya98@gmail.com', 'hi...Thank you so much your products are very yummy and organic....'),
(2, 'suyash jedhe', 'suyash@gmail.com', 'Thanks for delivering fast...');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id` bigint(20) NOT NULL,
  `cus_id` mediumtext NOT NULL,
  `total` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` mediumtext NOT NULL,
  `fdate` varchar(10) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` double NOT NULL,
  `status` varchar(10) NOT NULL,
  `pay` varchar(15) NOT NULL,
  `bil` bigint(20) NOT NULL,
  `ship_cha` int(3) NOT NULL,
  `ship` double NOT NULL,
  `del_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`id`, `cus_id`, `total`, `address`, `district`, `fdate`, `email`, `phone`, `status`, `pay`, `bil`, `ship_cha`, `ship`, `del_date`) VALUES
(1, '1', 70, 'Shubhamkar plot-no=33 jajurikar colony, wai\"', 'Satara', '2021-03-02', 'sneha@gmail.com', 7734658798, 'done', 'cash on deliver', 1, 50, 120, '2021/07/06'),
(2, '3', 370, '\"aniket aprtment\" gali no-7 phulenagar, sarasbag', 'Pune', '2021-05-02', 'kriti@gmail.com', 9876985634, 'return', 'cash on deliver', 2, 100, 470, ''),
(3, '1', 270, 'Shubhamkar plot-no=33 jajurikar colony, wai\"', 'Satara', '2021-07-03', 'sneha@gmail.com', 7734658798, 'done', 'cash on deliver', 3, 50, 320, '2021/07/06'),
(4, '1', 400, 'kamal apartment wardha', 'Wardha', '2021/07/03', 'sneha@gmail.com', 7020140666, 'return', 'cash on deliver', 4, 510, 910, '2021/07/06'),
(6, '8', 800, 'at post bavdhan', 'Pune', '2021/07/03', 'kamal@gmail.com', 7020140666, 'done', 'cash on deliver', 6, 100, 900, '2021/07/05'),
(7, '8', 70, '\"tilak \"apartment left to ambabai temple golvni ', 'kolhapur', '2021/07/05', 'kamal@gmail.com', 8767868768, 'done', 'cash on deliver', 7, 120, 190, '12/07/2021'),
(8, '11', 1300, 'Jejurikar Colony, Wai', 'Satara', '2021/07/07', 'shraddhawm08@gmail.com', 9777308360, 'done', 'Paypal', 8, 50, 1350, '14/07/2021'),
(9, '1', 470, 'sarita apartment lakshmi road patanwadi pune', 'Pune', '2021/07/10', 'snehamuliya98@gmail.com', 8767868768, 'done', 'cash on deliver', 9, 100, 570, '18/07/2021'),
(10, '1', 70, 'shubhamkar siddhanath wadi wai', 'Satara', '2021/07/10', 'snehamuliya98@gmail.com', 8767868768, 'done', 'cash on deliver', 10, 50, 120, '18/07/2021'),
(11, '1', 250, 'giriraj infotech powai naka shop no 56 ', 'Satara', '2021/07/10', 'snehamuliya98@gmail.com', 7020140666, 'done', 'cash on deliver', 11, 50, 300, '16/07/2021'),
(12, '3', 200, 'suvarna apartment sawantwadi karu', 'Parbhani', '2021/07/17', 'kriti@gmail.com', 7020140666, 'shipping', 'cash on deliver', 12, 430, 630, ''),
(13, '1', 300, 'herug bandar west mumbai', 'Mumbai', '2021/07/17', 'snehamuliya98@gmail.com', 7020140666, 'shipping', 'cash on deliver', 14, 320, 620, ''),
(14, '1', 300, 'herug bandar west mumbai', 'Mumbai', '2021/07/17', 'snehamuliya98@gmail.com', 7020140666, 'shipping', 'cash on deliver', 14, 320, 620, ''),
(15, '3', 300, 'left to HDFC bank anantwadibhopal', 'Yavatmal', '2021/07/17', 'kriti@gmail.com', 9876985634, 'shipping', 'cash on deliver', 15, 500, 800, ''),
(16, '3', 60, 'powai naka satara', 'Satara', '2021/07/18', 'kriti@gmail.com', 7020140666, 'shipping', 'cash on deliver', 16, 50, 110, ''),
(17, '3', 150, 'satish complex dhage wadi', 'Nagpur', '2021/07/18', 'kriti@gmail.com', 8767868768, 'shipping', 'cash on deliver', 17, 540, 690, ''),
(18, '3', 250, 'sage wadi left side to SBI bank', 'Ratanagiri', '2021/07/18', 'kriti@gmail.com', 8767868768, 'shipping', 'cash on deliver', 18, 100, 350, ''),
(19, '6', 70, 'pimpari chinchwad', 'Pune', '2021/07/19', 'nikita@gmail.com', 8944861234, 'return', 'cash on deliver', 19, 100, 170, ''),
(20, '6', 60, 'powai naka', 'Satara', '2021/07/19', 'snehamuliya98@gmail.com', 8767868768, 'shipping', 'cash on deliver', 20, 50, 110, ''),
(21, '6', 400, 'songir wadi 2391', 'Thane', '2021/07/19', 'kriti@gmail.com', 9876985634, 'shipping', 'cash on deliver', 22, 320, 720, ''),
(22, '6', 400, 'songir wadi 2391', 'Thane', '2021/07/19', 'kriti@gmail.com', 9876985634, 'shipping', 'cash on deliver', 22, 320, 720, ''),
(23, '6', 70, 'lakshmi road ', 'Pune', '2021/07/19', 'kriti@gmail.com', 8767868768, 'shipping', 'cash on deliver', 23, 100, 170, ''),
(24, '3', 240, 'bavdhan', 'Satara', '2021/07/23', 'kriti@gmail.com', 8944888888, 'shipping', 'cash on deliver', 24, 50, 290, '');

-- --------------------------------------------------------

--
-- Table structure for table `gpooja`
--

CREATE TABLE `gpooja` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `vis_date` date NOT NULL,
  `count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpooja`
--

INSERT INTO `gpooja` (`id`, `name`, `email`, `mobile`, `vis_date`, `count`) VALUES
(1, 'savita ram parajpe', 'savi@gmail.com', '345345', '2021-06-03', 56565656),
(2, 'dfgdf', 'anil@gmail.com', '345', '2021-06-03', 234345345345),
(3, 'satish jedhe', 'first@gmail.com', '345345345345', '2021-06-01', 345345345345345345),
(4, '', '', '', '0000-00-00', 55),
(5, 'satish jedhe', 'first@gmail.com', '8767868768', '2021-06-01', 5),
(6, '', '', '', '0000-00-00', 0),
(7, 'DFGkjhk', 'first@gmail.com', '4535345353', '0000-00-00', 10),
(8, 'satish jedhe', 'sati@gmail.com', '8767868768', '0000-00-00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` bigint(20) NOT NULL,
  `supplier_id` bigint(10) NOT NULL,
  `name` mediumtext NOT NULL,
  `date` date NOT NULL,
  `weight` int(6) NOT NULL,
  `unit` mediumtext NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `supplier_id`, `name`, `date`, `weight`, `unit`, `price`) VALUES
(1, 2, 'Milk', '2021-04-22', 2, 'Liter', 30),
(2, 1, 'lemon', '2021-04-28', 1, 'Kilo-gram', 80),
(3, 2, 'Milk', '2021-07-01', 2, 'Liter', 30);

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
-- Table structure for table `prod1`
--

CREATE TABLE `prod1` (
  `id` bigint(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `name` mediumtext NOT NULL,
  `information` varchar(800) NOT NULL,
  `price` double NOT NULL,
  `pack` varchar(50) NOT NULL,
  `exp_date` varchar(60) NOT NULL,
  `category` mediumtext NOT NULL,
  `location` longtext NOT NULL,
  `matrial` mediumtext NOT NULL,
  `life` varchar(100) NOT NULL,
  `no` int(2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod1`
--

INSERT INTO `prod1` (`id`, `filename`, `name`, `information`, `price`, `pack`, `exp_date`, `category`, `location`, `matrial`, `life`, `no`, `stock`) VALUES
(1, 'cow milk1.jpg', 'ORGANIC COW MILK', 'Vrindavan Farms Organic Cow Milk is produced from cows that are grazed naturally. We feed cows with naturally grown green fodders such as Maize, Jowar, and Nappier Grass. We also feed dry fodder such as paddy and raagi straw. In addition to fooder, we also feed naturally formulated cattle feed along with oil cakes. Cows are maintained hygienically. ', 60, '500ML POUCH, 1000ML GLASS BOTTLE', '2021-06-18', '1', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', 'Dangi and Khillar cow', '5 DAYS, WHEN STORED UNDER 4°C', 1, 50),
(2, 'a2-milk-bg.jpg', 'A2 DESI COW MILK', 'Vrindavan Farms A2 Desi Cow Milk is produced from pure Indian breed cows that are grazed in the forest. These cows graze in the forest land the entire day. They graze natural grass, leaves, and medicinal herbs. They give us healthy and delicious milk. The hump on the back of the cow absorbs sunlight and converts it into minerals in the milk. It enhances the quality of the milk to many folds. This is essential for people of all ages, especially for growing children. It helps in brain development ', 70, ' 1000ML GLASS BOTTLE', '2021-06-18', '1', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', 'Dangi and Khillar cows', '5 DAYS, WHEN STORED UNDER 4°C', 1, 40),
(3, 'a1-curd-bg.jpg', 'NATURAL CURD', 'We follow the natural process to set curd. Milk is boiled to 80�C, cooled down to 40�C, and then culture is added to set curd. Set curd is kept in the cold room and the cold chain is maintained until it reaches the customer. Since we use full cream milk and follow the natural curd setting process, our curd is naturally thick, aromatic, and tastes awesome.', 60, '400G CUP', '2021-06-23', '2', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', 'FULL CREAME HYBRID COW MILK', '7 DAYS, WHEN STORED UNDER 4°C', 1, 30),
(4, 'a2-buttermilk-bg.jpg', 'A2 DESI COW BUTTERMILK', 'We follow the traditional buttermilk making process to make pure and authentic buttermilk. Full cream whole desi cow milk is set to curd overnight. Set curd is churned in wooden churner using vilona-bilona method to separate butter from the curd. What remains after separating butter from churned curd is the original buttermilk. This buttermilk tastes slightly sour but it is the best buttermilk among all types of buttermilk. You can add salt and other spices as per your liking.\r\n\r\nSince we follow', 90, ' 500ML BOTTLES', '2021-06-24', '2', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', 'A2 DESI COW BUTTERMILK', '7 DAYS UNDER 4°C', 1, 28),
(5, 'a2-curd-bg.jpg', 'A2 DESI COW CURD', 'Vrindavan Farms naturally set A2 Desi Cow curd is made from forest grazed A2 Desi cow milk. These cows graze in the forest land the entire day. They graze natural grass, leaves, and medicinal herbs. They give us healthy and delicious milk. The hump on the back of the cow absorbs sunlight and converts it into minerals in the milk. It enhances the quality of the milk to many folds. This is essential for people of all ages, especially for growing children. It helps in brain development and overall ', 65, '400G CUP', '2021-06-18', '2', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', ' A2 DESI COW MILK', '7 DAYS, WHEN STORED UNDER 4°C', 1, 19),
(6, 'a2-paneer-bg.jpg', 'A2 DESI COW PANEER', ' Vrindavan A2 Desi Cow Paneer is prepared in a homemade style for superior taste with natural ingredients. Unlike other paneer brands available in the market, Vrindavan Farms A2 Desi Cow Paneer tastes original with natural aroma. Our paneer is soft and delicious. Kids will simply love it.\r\n\r\nWe follow a natural process to make Paneer. Milk is boiled and either lemon or natural vinegar is added to curdle the milk. Curdled milk is strained and pressed. Once the paneer is made it\'s stored in the co', 300, ' 500G', '2021-06-26', '3', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', 'STRAINED A2 CURDLED MILK', '7 DAYS, WHEN STORED UNDER 4°C', 1, 15),
(7, 'a1-paneer-bg.jpg', 'FRESH NATURAL PANEER', 'We use natural vinegar and lemon to maintain natural flavor and aroma. Vrindavan Paneer is prepared in a homemade style for superior taste with natural ingredients. Unlike other paneer brands available in the market, Vrindavan Farms Natural Paneer tastes original with natural aroma. It is soft and delicious. Kids will simply love it.\r\n\r\nWe follow the natural process to make Paneer. Milk is boiled and either lemon or natural vinegar is added to curdle the milk. Curdled milk is strained and presse', 250, ' 400G', '2021-06-25', '3', 'Satara,Pune,Ratanagiri,kolhapur,sindhudurg,Raigad,Sangli,Osmanabad,Thane,Mumbai', 'STRAINED CURDLED MILK', '7 DAYS, WHEN STORED UNDER 4°C', 1, 25),
(8, 'a1-ghee-bg.jpg', 'PURE COW GHEE', 'We follow the traditional ghee making process to make pure and authentic ghee. Full cream whole cow milk is set to curd overnight. Set curd is churned in wooden churner using vilona-bilona method to separate butter from the curd. Separated butter is washed and melted into ghee by our experts who can make awesome tasting ghee. We also add some herbs to enhance the nutritional value of the ghee.', 450, ' 500G GLASS BOTTLES', '2021-08-31', '4', 'All over maharashtra', 'HURBS and PURE COW GHEE', '1 YEAR IN AMBIENT TEMPERATURE', 2, 0),
(9, 'buffalo-ghee-bg.jpg', 'BUFFALO GHEE', 'We follow the traditional ghee making process to make pure and authentic ghee. Full cream whole buffalo milk is set to curd overnight. Set curd is churned in wooden churner using vilona-bilona method to separate butter from the curd. Separated butter is washed and melted into ghee by our experts who can make awesome tasting ghee. In the process, we also add some herbs to enhance the nutritional value of the ghee.\r\n\r\nSince we follow the traditional process to make ghee, our ghee lasts longer and ', 400, ' 500G GLASS BOTTLES', '2021-08-31', '4', 'All over maharashtra', 'HURBS AND BUFFALO GHEE', '1 YEAR IN AMBIENT TEMPERATURE', 2, 0),
(10, 'cow-dung-manure-bg.jpg', 'ORGANIC COMPOST MANURE', 'Vrindavan Farms Compost Manure is made from pure desi cow dung. Desi cow dung manure is rich in N-P-K value and contains important micro-organisms that help in improving soil health and plant growth. This compost manure has several benefits in the plantation or farming. Compost cow dung manure adds a good amount of organic mass into the soil. By mixing cow dung manure into the soil, we can improve the moisture-holding capacity of the soil. It also improves the aeration of the soil by loosening t', 150, ' 1KG', '2021-12-31', '5', 'All over maharashtra', 'COMPOST DESI COW DUNG', '6 MONTHS', 2, 0),
(11, 'cow-dung-manure-bg.jpg', 'ORGANIC COMPOST MANURE', 'Vrindavan Farms Compost Manure is made from pure desi cow dung. Desi cow dung manure is rich in N-P-K value and contains important micro-organisms that help in improving soil health and plant growth. This compost manure has several benefits in the plantation or farming. Compost cow dung manure adds a good amount of organic mass into the soil. By mixing cow dung manure into the soil, we can improve the moisture-holding capacity of the soil. It also improves the aeration of the soil by loosening t', 300, '3 KG', '2022-01-31', '5', 'All over maharashtra', 'COMPOST DESI COW DUNG', '6 MONTHS', 2, 0),
(12, 'gomutra-bg.jpg', 'DESI GOMUTRA (COW URINE)', 'Vrindavan Farms Desi Cow Gomutra (cow urine) is collected from pure desi cows, mainly from Gir, Kangrej, and Hallikar cows. This Gomutra is sometimes referred to as liquid gold. It plays a major role in our daily life. It has gold particles, minerals, anti-bacterial and anti-cancer elements. One of the major use of Gomutra is, it is used as a medicine. People can drink it to cure various illnesses. It should be noted that to consume Gomutra, it has to be consumed within 15 minutes after collecti', 200, '500ML', '', '5', 'All over maharashtra', 'DESI COW GOMUTRA (COW URINE)', '10 DAYS', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `name` mediumtext NOT NULL,
  `information` longtext NOT NULL,
  `category` bigint(20) NOT NULL,
  `subcat` bigint(20) NOT NULL,
  `weight` int(6) NOT NULL,
  `unit` mediumtext NOT NULL,
  `expire` date NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` double NOT NULL,
  ` filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `information`, `category`, `subcat`, `weight`, `unit`, `expire`, `quantity`, `price`, ` filename`) VALUES
(1, 'hjgjh', 'hg', 2, 2, 3, 'kilo-gram', '2021-04-01', 45, 15, ''),
(2, 'vv', 'tt', 2, 2, 1, 'kilo-gram', '2021-04-05', 1, 22, ''),
(3, 'prod three', 'threeeee', 4, 4, 2, 'kilo-gram', '0000-00-00', 20, 60, ''),
(4, 'prod 4', 'fourrrr', 5, 1, 4, 'Gram', '2021-03-10', 4, 400, ''),
(5, 'prod five', 'info five', 2, 2, 5, 'Gram', '2021-02-05', 4, 555, ''),
(7, 'prod two', 'info two', 0, 3, 4, 'Gram', '2021-03-03', 4, 55, ''),
(8, 'update', 'update', 0, 0, 0, '', '0000-00-00', 0, 0, ''),
(9, 'color', 'color', 0, 0, 0, '', '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchasereturn_details`
--

CREATE TABLE `purchasereturn_details` (
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
-- Dumping data for table `purchasereturn_details`
--

INSERT INTO `purchasereturn_details` (`purchase_id`, `product_id`, `quantity`, `price`, `amount`, `tax`, `taxamt`, `discount`, `discountamt`, `gst`, `gstamt`, `cess`, `cessamt`, `finalamount`) VALUES
(0, 6, 5, 150, 750, 0, 0, 0, 0, 0, 0, 0, 0, 750),
(0, 2, 2, 30, 60, 1, 0.6, 0, 0, 1, 0.6, 0, 0, 61.2),
(0, 12, 5, 45, 225, 1, 2.25, 0, 0, 1, 2.25, 0, 0, 229.5),
(0, 4, 10, 60, 600, 2, 12, 0, 0, 1, 6, 0, 0, 618);

-- --------------------------------------------------------

--
-- Table structure for table `purchasereturn_master`
--

CREATE TABLE `purchasereturn_master` (
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
-- Dumping data for table `purchasereturn_master`
--

INSERT INTO `purchasereturn_master` (`id`, `date`, `supplier_id`, `po_id`, `taxmaster`, `taxamtmaster`, `gstmaster`, `gstamtmaster`, `discountmaster`, `discountamtmaster`, `grandtotalmaster`, `sub`, `payment`) VALUES
(1, '2021-06-16', 2, 0, 0, 0, 0, 0, 0, 0, 750, 750, 'Cash'),
(2, '2021-06-09', 1, 0, 0, 0, 0, 0, 0, 0, 61.2, 61.2, 'Cash'),
(3, '2021-07-08', 1, 0, 0, 0, 0, 0, 0, 0, 229.5, 229.5, 'Cash'),
(4, '2021-07-07', 2, 0, 0, 0, 0, 0, 0, 0, 618, 618, 'Cash');

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
(1, 9, 40, 300, 12000, 0, 0, 0, 0, 0, 0, 0, 0, 12000),
(2, 6, 60, 150, 9000, 0, 0, 0, 0, 0, 0, 0, 0, 9000),
(3, 2, 50, 30, 1500, 1, 15, 0, 0, 1, 15, 0, 0, 1530),
(4, 12, 50, 40, 2000, 0, 0, 2, 40, 0, 0, 0, 0, 1960),
(5, 4, 50, 50, 2500, 1, 25, 0, 0, 1, 25, 0, 0, 2550);

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
(1, '2021-06-09', 2, 0, 0, 0, 0, 0, 0, 0, 12000, 12000, 'Cash'),
(2, '2021-06-16', 2, 0, 0, 0, 0, 0, 0, 0, 9000, 9000, 'Cash'),
(3, '2021-06-08', 2, 0, 0, 0, 0, 0, 0, 0, 1530, 1530, 'Cash'),
(4, '2021-07-02', 1, 0, 0, 0, 0, 0, 0, 0, 1960, 1960, 'Cash'),
(5, '2021-07-01', 2, 0, 0, 0, 0, 0, 0, 0, 2550, 2550, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `p_return`
--

CREATE TABLE `p_return` (
  `id` bigint(20) NOT NULL,
  `b_id` bigint(20) NOT NULL,
  `amount` double NOT NULL,
  `rdate` date NOT NULL,
  `reason` mediumtext NOT NULL,
  `c_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_return`
--

INSERT INTO `p_return` (`id`, `b_id`, `amount`, `rdate`, `reason`, `c_id`) VALUES
(1, 4, 910, '2021-07-07', 'gomutra not in good condition', 1),
(3, 2, 470, '2021-07-17', 'not in good conditoin', 3),
(4, 19, 170, '2021-07-19', 'not in good condition', 6);

-- --------------------------------------------------------

--
-- Table structure for table `salereturn_details`
--

CREATE TABLE `salereturn_details` (
  `sale_id` bigint(20) NOT NULL,
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
-- Dumping data for table `salereturn_details`
--

INSERT INTO `salereturn_details` (`sale_id`, `product_id`, `quantity`, `price`, `amount`, `tax`, `taxamt`, `discount`, `discountamt`, `gst`, `gstamt`, `cess`, `cessamt`, `finalamount`) VALUES
(0, 9, 5, 300, 1500, 0, 0, 0, 0, 0, 0, 0, 0, 1500),
(0, 2, 2, 45, 90, 1, 0.9, 0, 0, 1, 0.9, 0, 0, 91.80000000000001),
(0, 12, 5, 45, 225, 1, 2.25, 0, 0, 1, 2.25, 0, 0, 229.5),
(0, 4, 10, 60, 600, 1, 6, 0, 0, 2, 12, 0, 0, 618);

-- --------------------------------------------------------

--
-- Table structure for table `salereturn_master`
--

CREATE TABLE `salereturn_master` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `cus_id` bigint(20) NOT NULL,
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
-- Dumping data for table `salereturn_master`
--

INSERT INTO `salereturn_master` (`id`, `date`, `cus_id`, `po_id`, `taxmaster`, `taxamtmaster`, `gstmaster`, `gstamtmaster`, `discountmaster`, `discountamtmaster`, `grandtotalmaster`, `sub`, `payment`) VALUES
(1, '2021-06-29', 1, 0, 0, 0, 0, 0, 0, 0, 1500, 1500, 'Cash'),
(2, '2021-06-08', 3, 0, 0, 0, 0, 0, 0, 0, 91.80000000000001, 91.80000000000001, 'Cash'),
(3, '2021-07-08', 3, 0, 0, 0, 0, 0, 0, 0, 229.5, 229.5, 'Cash'),
(4, '2021-07-04', 2, 0, 0, 0, 0, 0, 0, 0, 618, 618, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `sale_id` bigint(20) NOT NULL,
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
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`sale_id`, `product_id`, `quantity`, `price`, `amount`, `tax`, `taxamt`, `discount`, `discountamt`, `gst`, `gstamt`, `cess`, `cessamt`, `finalamount`) VALUES
(1, 9, 5, 350, 1750, 0, 0, 0, 0, 0, 0, 0, 0, 1750),
(2, 6, 10, 60, 600, 0, 0, 0, 0, 0, 0, 0, 0, 600),
(3, 2, 2, 45, 90, 1, 0.9, 0, 0, 1, 0.9, 0, 0, 91.80000000000001),
(4, 12, 10, 45, 450, 1, 4.5, 0, 0, 1, 4.5, 0, 0, 459),
(5, 4, 10, 60, 600, 2, 12, 0, 0, 1, 6, 0, 0, 618);

-- --------------------------------------------------------

--
-- Table structure for table `sale_master`
--

CREATE TABLE `sale_master` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `cus_id` bigint(20) NOT NULL,
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
-- Dumping data for table `sale_master`
--

INSERT INTO `sale_master` (`id`, `date`, `cus_id`, `po_id`, `taxmaster`, `taxamtmaster`, `gstmaster`, `gstamtmaster`, `discountmaster`, `discountamtmaster`, `grandtotalmaster`, `sub`, `payment`) VALUES
(1, '2021-06-16', 1, 0, 0, 0, 0, 0, 0, 0, 1750, 1750, 'Cash'),
(2, '2021-06-15', 1, 0, 0, 0, 0, 0, 0, 0, 600, 600, 'Cash'),
(3, '2021-06-09', 3, 0, 0, 0, 0, 0, 0, 0, 91.80000000000001, 91.80000000000001, 'Cash'),
(4, '2021-07-08', 3, 0, 0, 0, 0, 0, 0, 0, 459, 459, 'Cash'),
(5, '2021-07-02', 2, 0, 0, 0, 0, 0, 0, 0, 618, 618, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `sale_return`
--

CREATE TABLE `sale_return` (
  `sale_ret_id` bigint(20) NOT NULL,
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
-- Dumping data for table `sale_return`
--

INSERT INTO `sale_return` (`sale_ret_id`, `product_id`, `quantity`, `price`, `amount`, `tax`, `taxamt`, `discount`, `discountamt`, `gst`, `gstamt`, `cess`, `cessamt`, `finalamount`) VALUES
(1, 4, 2, 2, 4, 4, 0.16, 4, 0.16, 4, 0.16, 4, 0.16, 4.32),
(2, 3, 3, 33, 99, 6, 5.94, 6, 5.94, 6, 5.94, 6, 5.94, 110.88);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` bigint(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `quantity`) VALUES
(1, 'ORGANIC COW MILK', 0),
(2, 'A2 DESI COW MILK', 0),
(3, 'NATURAL CURD', 0),
(4, 'A2 DESI COW BUTTERMILK', 50),
(5, 'A2 DESI COW CURD', 0),
(6, 'A2 DESI COW PANEER', 0),
(7, 'FRESH NATURAL PANEER', 0),
(8, 'PURE COW GHEE', 0),
(9, 'BUFFALO GHEE', 0),
(10, 'ORGANIC COMPOST MANURE', 0),
(11, 'ORGANIC COMPOST MANURE', 0),
(12, 'DESI GOMUTRA (COW URINE)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_det`
--

CREATE TABLE `stock_det` (
  `id` bigint(20) NOT NULL,
  `stock` double NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `Purchase_id` bigint(20) NOT NULL,
  `PurchaseRet_id` bigint(20) NOT NULL,
  `Sale_id` bigint(20) NOT NULL,
  `SaleRet_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock_det`
--

INSERT INTO `stock_det` (`id`, `stock`, `product_id`, `Purchase_id`, `PurchaseRet_id`, `Sale_id`, `SaleRet_id`) VALUES
(1, 40, 9, 1, 0, 0, 0),
(4, -5, 9, 0, 0, 1, 0),
(5, 60, 6, 2, 0, 0, 0),
(6, -10, 6, 0, 0, 2, 0),
(7, -5, 6, 0, 1, 0, 0),
(8, 5, 9, 0, 0, 0, 1),
(9, 50, 2, 3, 0, 0, 0),
(10, -2, 2, 0, 0, 3, 0),
(11, 2, 2, 0, 0, 0, 2),
(12, -2, 2, 0, 2, 0, 0),
(13, 50, 12, 4, 0, 0, 0),
(14, -10, 12, 0, 0, 4, 0),
(15, 5, 12, 0, 0, 0, 3),
(16, -5, 12, 0, 3, 0, 0),
(17, 50, 4, 5, 0, 0, 0),
(18, -10, 4, 0, 0, 5, 0),
(19, 10, 4, 0, 0, 0, 4),
(20, -10, 4, 0, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) NOT NULL,
  `category_id` mediumtext NOT NULL,
  `subcategory` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory`) VALUES
(1, '4', 'Doodh peda'),
(2, '1', 'Cow Milk'),
(3, '1', 'Buffalo Milk'),
(4, '3', 'A2 cow milk'),
(5, '3', 'A2 Ghee'),
(6, '4', 'condenced milk');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Address` longtext NOT NULL,
  `City` mediumtext NOT NULL,
  `District` mediumtext NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Email` mediumtext NOT NULL,
  `Phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `Name`, `Address`, `City`, `District`, `Pincode`, `Email`, `Phone`) VALUES
(1, 'ganesh shankar dev', '\"vinayaka\" apartment , powai naka , near to HDFC bank , satara\"', 'Satara', 'Satara', 410078, 'ganesh@gmail.com', '7719917762'),
(2, 'kusuma anil jedhe', '\"avanti\" , plot no-12, right side to cannel ozarde\"', 'Ozarde', 'Satara', 412232, 'kusuma55@gmail.com', '9834567823');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_bil`
--
ALTER TABLE `cart_bil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpooja`
--
ALTER TABLE `gpooja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_details`
--
ALTER TABLE `organization_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod1`
--
ALTER TABLE `prod1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasereturn_master`
--
ALTER TABLE `purchasereturn_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_master`
--
ALTER TABLE `purchase_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_return`
--
ALTER TABLE `p_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salereturn_master`
--
ALTER TABLE `salereturn_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_master`
--
ALTER TABLE `sale_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_return`
--
ALTER TABLE `sale_return`
  ADD PRIMARY KEY (`sale_ret_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_det`
--
ALTER TABLE `stock_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cart_bil`
--
ALTER TABLE `cart_bil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gpooja`
--
ALTER TABLE `gpooja`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organization_details`
--
ALTER TABLE `organization_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prod1`
--
ALTER TABLE `prod1`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchasereturn_master`
--
ALTER TABLE `purchasereturn_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_master`
--
ALTER TABLE `purchase_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `p_return`
--
ALTER TABLE `p_return`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salereturn_master`
--
ALTER TABLE `salereturn_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sale_master`
--
ALTER TABLE `sale_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_return`
--
ALTER TABLE `sale_return`
  MODIFY `sale_ret_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stock_det`
--
ALTER TABLE `stock_det`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
