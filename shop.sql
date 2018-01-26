-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2018 at 01:34 PM
-- Server version: 5.7.11-0ubuntu6
-- PHP Version: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', NULL, '2018-01-16 19:13:05', NULL),
(2, 'Nokia', NULL, '2018-01-16 19:13:05', NULL),
(3, 'Samsung', NULL, '2018-01-16 19:13:05', NULL),
(4, 'Xiaomi', NULL, '2018-01-16 19:13:05', NULL),
(5, 'Apple', NULL, '2018-01-16 19:13:05', NULL),
(6, 'Nomi', NULL, '2018-01-16 19:13:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`text`) VALUES
('    <h4>График работы:</h4>\r\n    <p>С 9-00 до 20-00</p>\r\n    <p>Без выходных</p>\r\n    <h4>Наш офис</h4>\r\n    <p>адрес: г. Харьков ул.Харьковская 33/3</p>\r\n    <p>тел: +38 (093) 777-77-77</p>\r\n\r\n    <h4>Как к нам доехать!</h4>');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_comment` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mini-desc` tinytext NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `image`, `mini-desc`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Первый пост', 'Пахаренко', '', 'Короткое описание поста', 'Поное описание поста', '2018-01-24', '2018-01-26 09:05:46', NULL),
(2, 'Второй пост', 'Пахаренко', '', 'Короткое описание поста', 'Поное описание поста', '2018-01-25', '2018-01-26 09:05:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `brand` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `tiny_desc` tinytext CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_hits` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `brand`, `price`, `tiny_desc`, `description`, `is_new`, `is_hits`, `created_at`, `updated_at`, `image`) VALUES
(1, 1, 'Lenovo S820', 'Lenovo', 122.44, 'Короткое описание товара', 'Полное описание товара', 1, 0, '2018-01-19 08:18:21', NULL, 'ap.jpeg'),
(2, 1, 'Lenovo', 'Lenovo', 88.75, 'Короткое описание товара', 'Полное описание товара', 1, 0, '2018-01-19 08:28:01', NULL, 'apple.jpg'),
(5, 5, 'Apple 5', 'Apple', 1200, 'Короткое описание товара', 'Полное описание товара', 1, 0, '2018-01-19 08:21:03', NULL, 'ap.jpeg'),
(6, 5, 'Apple 8S', 'Apple', 300.85, 'Короткое описание товара', 'Полное описание товара', 1, 0, '2018-01-19 08:21:03', NULL, 'ap.jpeg'),
(7, 2, 'Nokia 3310', 'Nokia', 12.05, 'Короткое описание товара', 'Полное описание товара', 0, 1, '2018-01-19 08:27:12', NULL, 'apple.jpg'),
(8, 3, 'Samsung G320', 'Samsung', 55.99, 'Короткое описание товара', 'Полное описание товара', 0, 1, '2018-01-19 08:28:18', NULL, 'ap.jpeg'),
(9, 3, 'Samsung S8', 'Samsung', 2000, 'Короткое описание товара', 'Полное описание товара', 0, 1, '2018-01-19 08:27:12', NULL, 'apple.jpg'),
(10, 2, 'Nokia 9000', 'Nokia', 99.99, 'Короткое описание товара', 'Полное описание товара', 0, 1, '2018-01-19 08:35:55', NULL, 'ap.jpeg'),
(11, 1, 'Lenovo A500', 'Lenovo', 122.44, 'Короткое описание товара', 'Полное описание товара', 0, 1, '2018-01-19 08:27:12', NULL, 'apple.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(4, 'Pro-dev', 'nix@mail.ru', '123456', 0, '2018-01-24 11:58:07', NULL),
(5, 'Pakharenko', 'proha1985@mail.ru', '123456', 0, '2018-01-24 12:28:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
