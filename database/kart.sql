-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 07:00 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kart`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmen`
--

CREATE TABLE `bmen` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmen`
--

INSERT INTO `bmen` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'The New Fashion Men\'s Pant', 'TNF', 'images\\home\\product1.jpeg', '788'),
(2, 'Skinny Stretch Elastic Jeans', 'SSE', 'images\\home\\\\product2.jpeg', '700'),
(3, 'Cargo Jogger Pants', 'CJP', 'images\\home\\product3.jpeg', '800'),
(4, 'Casual Pants Korean Slim Trousers', 'KKh', 'images\\home\\product4.jpeg', '976'),
(5, 'casual pant', 'CP', 'images\\home\\product5.jpeg', '800');

-- --------------------------------------------------------

--
-- Table structure for table `boy`
--

CREATE TABLE `boy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boy`
--

INSERT INTO `boy` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Formal wedding suit', 'FMS', 'images\\home\\product1.jpeg', 700),
(2, 'Kids Boys Warm Hooded Coat', 'KBWHC', 'images\\home\\product2.jpeg', 783),
(3, 'Boy\'s Short Sleeved Suit\r\n', 'DFBG', 'images\\home\\product3.jpeg', 800);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`user_id`, `firstname`, `lastname`, `email`, `message`) VALUES
(1, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'aaaa'),
(2, 'Mickey', 'Mouse', 'mickymouse@gmail.com', 'bbbb'),
(3, 'Rahul', 'Koundal', 'rahulkoundal1996@gmail.com', 'cccc'),
(4, 'Mohit', 'Dhiman', 'mohitdhiman721@gmail.com', 'ccc'),
(5, 'Gaurav', 'Sharma', 'gauravsharma@gmail.com', 'AA'),
(6, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'hi'),
(7, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'hi'),
(8, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'hi'),
(9, 'Mohit', 'Dhiman', 'mohitdhiman721@gmail.com', 'jaiho'),
(10, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'hello'),
(11, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'hello'),
(12, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'bello'),
(13, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'bello'),
(14, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'bello'),
(15, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'bello');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `firstname`, `lastname`, `email`, `feedback`) VALUES
(1, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'nn'),
(4, 'Rahul', 'Koundal', 'rahulkoundal1996@gmail.com', 'aaaa'),
(5, 'Rahul', 'Koundal', 'rahulkoundal1996@gmail.com', 'aaaa'),
(6, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'hello'),
(7, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'jjjjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `girl`
--

CREATE TABLE `girl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `girl`
--

INSERT INTO `girl` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Kids Pompon Yarn Dress', 'KPYD', 'images\\home\\product1.jpeg', '700'),
(2, 'Kids Formal Special Occasion Dress', 'KFSOD', 'images\\home\\product2.jpeg', '800'),
(3, 'Kids Embroidery Flower Dress', 'KEFD', 'images\\home\\product3.jpeg', '900'),
(4, 'Kids Birthday Princess Dresses', 'KBPD', 'images\\home\\product4.jpeg', '700'),
(5, 'Kids Girls Bridesmaid Tutu Dress', 'KGBDTD', 'images\\home\\product5.jpeg', '789'),
(6, 'Kids Girl Bubble Bow Dress', 'KGBBD', 'images\\home\\product6.jpeg', '875'),
(7, 'Kids Long Sleeve Princess Dresses', 'KLSPD', 'images\\home\\product7.jpeg', '900'),
(8, ' Kids Lace Stitching Cotton T-Shirt Suit', 'KLS', 'images\\home\\product8.jpeg', '760');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Flowers Pattern Frilly Ruffles Bedspread', 'FPS3', 'images\\home\\product1.jpeg', '700'),
(2, 'Hometextile Bedclothes Bedspread', 'HBB', 'images\\home\\product2.jpeg', '600'),
(3, 'Princess Lace Four Pieces', 'PLFP', 'images\\home\\product3.jpeg', '900'),
(4, 'Bedclothes Bed Cover Set', 'BBCS', 'images\\home\\product4.jpeg', '600');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Stand collar jacket', 'SCJ', 'images1\\home\\product1.jpeg', '800'),
(2, 'zipper men jacket', 'ZMJ', 'images1\\home\\product2.jpeg', '700'),
(3, 'Afs Jeep Men\'S Clothing Tops', 'AFS', 'images1\\home\\product3.jpeg', '860'),
(4, 'Men\'s Stand Collar Long-Sleeves Shirts', 'MSC', 'images1\\home\\product4.jpeg', '900'),
(5, 'Casual Hooded Slim Jacket', 'CHS', 'images1\\home\\product5.jpeg', '500'),
(6, 'Fashion Men Slim Stand Collar Jackets', 'FMSSCJ', 'images1\\home\\product6.jpeg', '600'),
(7, 'Male Chinese T-Shirts', 'MCT', 'images1\\home\\product7.jpeg', '700'),
(8, 'Fashion Pu Baseball Jacket', 'FPBJ', 'images1\\home\\product8.jpeg', '900');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `firstname`, `lastname`, `email`, `pass`, `number`, `gender`) VALUES
(1, 'Rahul', 'Koundal', 'rahulkoundal1996@gmail.com', 'rahul', '8679417591', 'male'),
(2, 'Sakshi', 'Verma', 'sakshiverma2203@gmail.com', 'sakshi', '8679417592', 'female'),
(3, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'asha', '8679417593', 'female'),
(4, 'Raveena', 'ruby', 'raveena359@gmail.com', 'raveena', '8679417594', 'female'),
(5, 'Mohit', 'Dhiman', 'mohitdhiman721@gmail.com', 'mohit', '8679417595', 'male'),
(6, 'Gaurav', 'Sharma', 'gauravsharma@gmail.com', 'gaurav', '8679417594', 'male'),
(12, 'Mickey', 'Mouse', 'micky@gmail.com', 'mouse', '123456789987', 'male'),
(13, 'shibu', 'Thakur', 'shibu@gmail.com', 'shibu', '12345667788888', 'male'),
(14, 'Asha', 'Thakur', 'ashathakur366@gmail.com', 'asha', '8679417593', 'female'),
(15, 'aisj', 'jkhdjhj', 'ahsgh@gkjh.cb', 'sdfdv', '123232353467', 'female'),
(16, 'Asha', 'Thakur', 'asdjhsajd@gmaikjhjk', 'jhgjhgjhgjhgjhgjhgjg', '8786875757656', 'male'),
(17, 'jyuu', 'ewmjrhje', 'rahulkoundal199@gmail.com', 'dgaflkkjgolkjgoikjgk', '248324237583578435', 'male'),
(18, 'uyujhgjh', 'jugjhgh', 'asdjhsajd@gmaikjhjk', 'ashaA12@', '7798098098090', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Tie knot Small Shawl Denim Shirt', 'TKS', 'images\\home\\product1.jpeg', '900'),
(2, 'Eyelash Lips White Cotton T-Shirt\r\n', 'ELWCT', 'images\\home\\product2.jpeg', '800'),
(3, 'Cute Cartoon Printed T-Shirt', 'CCPT', 'images\\home\\product3.jpeg', '600'),
(4, 'T-Shirt Cotton Tops Tee Shirts', 'TCTTS', 'images\\home\\product4.jpeg', '800'),
(5, 'Summer New Korean Top', 'SNKVHC', 'images\\home\\product5.jpeg', '700'),
(6, 'Stylish Stripe  Short Sleeve Shirt', 'SSSSS', 'images\\home\\product6.jpeg', '900'),
(7, 'Crepe Shirt Floral Embroidered', 'CSF', 'images\\home\\product7.jpeg', '850'),
(8, 'Floral Embroidered Hollow', 'FEH', 'images\\home\\product8.jpeg', '600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmen`
--
ALTER TABLE `bmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boy`
--
ALTER TABLE `boy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `girl`
--
ALTER TABLE `girl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`,`email`,`number`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmen`
--
ALTER TABLE `bmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `boy`
--
ALTER TABLE `boy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `girl`
--
ALTER TABLE `girl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
