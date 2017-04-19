-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 13, 2017 at 08:27 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(4) UNSIGNED NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `image`, `type`, `name`, `price`, `description`) VALUES
(1, './img/cake_1.png', 'cupcake', 'MM Castle', '2.85', 'Hmmmm, crunchy feast!'),
(2, './img/cake_2.png', 'cupcake', 'Princess Afternoon', '3.85', 'Cutest afternoon tea dessert.'),
(3, './img/cake_3.png', 'cupcake', 'Magical World', '3.15', 'Let\'s create magic!'),
(4, './img/cake_4.png', 'cupcake', 'Chocolate Zoo', '3.00', 'Enjoy chocolate with your favorate animals.'),
(5, './img/cake_5.png', 'cupcake', 'Floral Summer', '3.50', 'It is time to bloom!'),
(6, './img/cake_6.png', 'cupcake', 'Fairy Strawberry', '4.00', 'Fresh and creamy, better than a fairy tale.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;