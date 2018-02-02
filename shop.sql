-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2018 г., 22:49
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

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
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `categories`
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
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author_name`, `text`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Ольга Пахаренко', 'dddddddd', 6, '2018-02-01 15:16:24', NULL),
(2, 'Жека Пахаренко', 'Очень хороший телефон', 9, '2018-02-01 20:11:38', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`text`) VALUES
('    <h4>График работы:</h4>\r\n    <p>С 9-00 до 20-00</p>\r\n    <p>Без выходных</p>\r\n    <h4>Наш офис</h4>\r\n    <p>адрес: г. Харьков ул.Харьковская 33/3</p>\r\n    <p>тел: +38 (093) 777-77-77</p>\r\n\r\n    <h4>Как к нам доехать!</h4>');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_comment` text CHARACTER SET utf8 NOT NULL,
  `user_id` int(2) NOT NULL DEFAULT '0',
  `products` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `products`, `created_at`, `updated_at`) VALUES
(1, 'Ольга Пахаренко', '+380920829505', 'fhhjerer', 0, '{"9":1}', '2018-02-01 13:46:23', NULL),
(2, 'Pro-dev', '+380920829505', 'tgrfgfgf', 4, '{"6":1}', '2018-02-01 13:47:06', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(5) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mini-desc` tinytext NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `image`, `mini-desc`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Первый пост', 'Пахаренко', 'city-69.jpg', 'Короткое описание поста', 'Поное описание поста', '2018-01-24', '2018-02-01 19:57:23', NULL),
(2, 'Второй пост', 'Пахаренко', 'podderzhka-sayta.jpg', 'Короткое описание поста', 'Поное описание поста', '2018-01-25', '2018-02-01 19:57:46', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `brand` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `tiny_desc` tinytext CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_hits` int(11) NOT NULL DEFAULT '0',
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `brand`, `price`, `tiny_desc`, `description`, `is_new`, `is_hits`, `is_popular`, `created_at`, `updated_at`, `image`) VALUES
(1, 1, 'Lenovo S820', 'Lenovo', '122.44', 'Короткое описание товара', 'Полное описание товара', 1, 0, 0, '2018-02-01 11:33:41', NULL, 'ap.jpeg'),
(2, 1, 'Lenovo', 'Lenovo', '88.75', 'Короткое описание товара', 'Полное описание товара', 1, 0, 0, '2018-02-02 19:33:30', NULL, 'apple.jpg'),
(5, 5, 'Apple 5', 'Apple', '1200.00', 'Короткое описание товара', 'Полное описание товара', 1, 0, 0, '2018-01-19 08:21:03', NULL, 'ap.jpeg'),
(6, 5, 'Apple 8S', 'Apple', '300.85', 'Короткое описание товара', 'Полное описание товара', 1, 0, 0, '2018-02-02 19:33:35', NULL, 'ap.jpeg'),
(7, 2, 'Nokia 3310', 'Nokia', '12.05', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-01-19 08:27:12', NULL, 'apple.jpg'),
(8, 3, 'Samsung G320', 'Samsung', '55.99', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-02-02 19:33:53', NULL, 'ap.jpeg'),
(9, 3, 'Samsung S8', 'Samsung', '2000.00', 'Короткое описание товара', 'Полное описание товара', 0, 1, 1, '2018-02-01 12:14:23', NULL, 'apple.jpg'),
(10, 2, 'Nokia 9000', 'Nokia', '99.99', 'Короткое описание товара', 'Полное описание товара', 0, 1, 1, '2018-02-01 12:14:26', NULL, 'ap.jpeg'),
(11, 1, 'Lenovo A500', 'Lenovo', '122.44', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-01-19 08:27:12', NULL, 'apple.jpg'),
(12, 2, 'Samsung Galaxy', 'Lenovo', '300.00', 'Описание товара', 'Полное описание товара', 1, 0, 0, '2018-02-02 19:36:10', NULL, '97_1500x_1500517993.jpg'),
(13, 2, 'Nokia T1000', 'Nokia', '122.99', 'Описание товара', 'Полное описание', 0, 1, 0, '2018-02-02 19:24:01', NULL, '1580562433.jpg'),
(14, 3, 'Samsung', 'Samsung', '5000.55', 'Описание товара', 'Полное описание', 1, 0, 1, '2018-02-02 19:34:39', NULL, '30023430b.jpg'),
(15, 2, 'Samsung J3(2017)', 'Samsung', '2999.99', 'Описание товара', 'Полное описание товара', 0, 1, 1, '2018-02-02 19:30:20', NULL, 'lb-galaxy-j1-2016-j120h-sm-j120hzddmid-frontgold-thumb-61587717.jpg'),
(16, 6, 'Nomi (Китай)', 'Nomi', '3000.00', 'Короткое описание товара', 'Полное описание товара', 0, 0, 1, '2018-02-02 19:33:50', NULL, 'X500 Trace Pro Dual Sim dark grey_1-20171023031134.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribes`
--

CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` int(3) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribes`
--

INSERT INTO `subscribes` (`id`, `name`, `email`, `created_at`) VALUES
(1, 'Ольга Пахаренко', 'paharenko1985@mail.ru', '2018-02-01 18:37:24'),
(2, 'Ольга Пахаренко', 'paharenko1985@mail.ru', '2018-02-01 18:38:14'),
(3, 'Ольга Пахаренко', 'paharenko1985@mail.ru', '2018-02-01 18:38:35'),
(4, 'Pakahrenko', 'nix@mail.ru', '2018-02-01 18:38:52');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(4, 'Pro-dev', 'nix@mail.ru', '123456', 0, '2018-01-24 11:58:07', NULL),
(5, 'Pakharenko', 'proha1985@mail.ru', '123456', 0, '2018-01-24 12:28:58', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
