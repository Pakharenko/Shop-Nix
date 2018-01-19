-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 19 2018 г., 13:28
-- Версия сервера: 5.7.20-0ubuntu0.16.04.1
-- Версия PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `brand` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `tiny_desc` tinytext CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_hits` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `brand`, `price`, `tiny_desc`, `description`, `image`, `is_new`, `is_hits`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lenovo S820', 'Lenovo', 122.44, 'Короткое описание товара', 'Полное описание товара', 'ap.jpeg', 1, 0, '2018-01-19 10:18:21', NULL),
(2, 1, 'Lenovo', 'Lenovo', 88.75, 'Короткое описание товара', 'Полное описание товара', 'apple.jpg', 1, 0, '2018-01-19 10:28:01', NULL),
(5, 5, 'Apple 5', 'Apple', 1200, 'Короткое описание товара', 'Полное описание товара', 'ap.jpeg', 1, 0, '2018-01-19 10:21:03', NULL),
(6, 5, 'Apple 8S', 'Apple', 300.85, 'Короткое описание товара', 'Полное описание товара', 'ap.jpeg', 1, 0, '2018-01-19 10:21:03', NULL),
(7, 2, 'Nokia 3310', 'Nokia', 12.05, 'Короткое описание товара', 'Полное описание товара', 'apple.jpg', 0, 1, '2018-01-19 10:27:12', NULL),
(8, 3, 'Samsung G320', 'Samsung', 55.99, 'Короткое описание товара', 'Полное описание товара', 'ap.jpeg', 0, 1, '2018-01-19 10:28:18', NULL),
(9, 3, 'Samsung S8', 'Samsung', 2000, 'Короткое описание товара', 'Полное описание товара', 'apple.jpg', 0, 1, '2018-01-19 10:27:12', NULL),
(10, 2, 'Nokia 9000', 'Nokia', 99.99, 'Короткое описание товара', 'Полное описание товара', 'ap.jpeg', 0, 1, '2018-01-19 10:35:55', NULL),
(11, 1, 'Lenovo A500', 'Lenovo', 122.44, 'Короткое описание товара', 'Полное описание товара', 'apple.jpg', 0, 1, '2018-01-19 10:27:12', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
