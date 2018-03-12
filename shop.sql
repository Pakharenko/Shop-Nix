-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 12 2018 г., 12:43
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', 0, '2018-01-16 19:13:05', '2018-02-14 09:03:59'),
(2, 'Nokia', 0, '2018-01-16 19:13:05', '2018-02-14 09:04:02'),
(4, 'Xiaomi', 0, '2018-01-16 19:13:05', '2018-02-14 09:04:05'),
(5, 'Apple', 0, '2018-01-16 19:13:05', '2018-02-14 09:04:07'),
(6, 'Nomi', 0, '2018-01-16 19:13:05', '2018-02-14 09:04:04'),
(11, 'Smartfones', 2, '2018-02-13 18:52:23', '2018-02-14 08:53:52'),
(12, 'Knopka', 2, '2018-02-13 18:52:23', '2018-02-14 08:53:56'),
(13, 'Sony', 0, '2018-02-14 09:04:22', NULL),
(14, 'LG', 0, '2018-02-14 09:04:22', '2018-02-14 09:55:02');

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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author_name`, `text`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Ольга Пахаренко', 'dddddddd', 6, '2018-02-01 15:16:24', NULL),
(2, 'Жека Пахаренко', 'Очень хороший телефон', 9, '2018-02-01 20:11:38', NULL),
(3, 'Hello World', 'Самый лучший телефон', 12, '2018-02-02 20:11:08', NULL),
(4, 'Hello World', 'ddddd', 28, '2018-03-10 17:35:56', NULL);

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
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `products`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ольга Пахаренко', '+380920829505', 'fhhjerer', 0, '{"9":1}', 0, '2018-02-01 13:46:23', NULL),
(4, 'Pro-web-master', '+7(343)434-33-33-1985', 'dfdflkbdhfdkn fkldhdfkgh dfkhgfjkngvjkdfhgkdfhgkjdfnvbjkvlxdfjlkvjndfvdfbfgh', 0, '{"21":1}', 1, '2018-02-05 14:47:43', NULL),
(5, 'lg', '454657567678687', 'ggghgh', 0, '{"25":1,"24":1}', 1, '2018-02-05 18:33:17', NULL),
(17, 'Nix', '+380920829505', 'Пахаренко', 44, 'false', 0, '2018-03-12 08:44:49', NULL),
(18, 'Nix', '0930829505', 'Пахаренко Евгений', 44, '{"28":1}', 0, '2018-03-12 08:47:54', NULL),
(19, 'Nix', '+380930829505', 'fgfgfgfgf', 44, '{"28":1}', 0, '2018-03-12 08:49:13', NULL),
(20, 'Nix', '454657567678687', 'gfgrtftrtrt', 44, '{"28":1}', 1, '2018-03-12 08:55:38', '2018-03-12 08:56:05'),
(24, 'Nix', '+380920829505', 'uyuyuyuyu', 44, '{"28":1,"25":1,"24":1}', 0, '2018-03-12 09:05:43', NULL),
(25, 'Nix', '+380920829505', 'iioiioio', 44, '{"25":1}', 0, '2018-03-12 09:08:13', NULL),
(26, 'Nix', '+380920829505', 'ddfgfgf', 44, '{"28":1}', 0, '2018-03-12 09:39:20', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(5) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mini_desc` tinytext NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `image`, `mini_desc`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Первый пост', 'Пахаренко', 'city-69.jpg', 'Короткое описание поста', 'Поное описание поста', '2018-01-24', '2018-02-01 19:57:23', NULL),
(3, 'С Новым 2018 годом!', 'Admin', 'podderzhka-sayta.jpg', '', ' fgfgbfgfgfghfg', '2017-12-31', '2018-02-06 10:40:02', NULL),
(4, 'Первый пост #1', 'Евгений', 'podderzhka-sayta.jpg', 'dfdfdfd', ' dvdcvcdvcvc', '2017-12-20', '2018-02-06 10:40:58', NULL),
(5, 'Первый пост 1985', 'Евгений', 'podderzhka-sayta.jpg', 'dfdfdfd', ' dvdcvcdvcvc', '2017-12-20', '2018-02-06 11:10:55', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `brand`, `price`, `tiny_desc`, `description`, `is_new`, `is_hits`, `is_popular`, `created_at`, `updated_at`, `image`) VALUES
(8, 3, 'Samsung G320', 'Samsung', '55.99', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-02-02 19:33:53', NULL, 'ap.jpeg'),
(9, 3, 'Samsung S8', 'Samsung', '2000.00', 'Короткое описание товара', 'Полное описание товара', 0, 1, 1, '2018-02-01 12:14:23', NULL, 'apple.jpg'),
(10, 2, 'Nokia 9000', 'Nokia', '99.99', 'Короткое описание товара', 'Полное описание товара', 0, 1, 1, '2018-02-01 12:14:26', NULL, 'ap.jpeg'),
(11, 1, 'Lenovo A500', 'Lenovo', '122.44', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-01-19 08:27:12', NULL, 'apple.jpg'),
(12, 2, 'Samsung Galaxy', 'Lenovo', '300.00', 'Описание товара', 'Полное описание товара', 1, 0, 0, '2018-02-02 19:36:10', NULL, '97_1500x_1500517993.jpg'),
(13, 2, 'Nokia T1000', 'Nokia', '122.99', 'Описание товара', 'Полное описание', 0, 1, 0, '2018-02-02 19:24:01', NULL, '1580562433.jpg'),
(14, 3, 'Samsung', 'Samsung', '5000.55', 'Описание товара', 'Полное описание', 1, 0, 1, '2018-02-02 19:34:39', NULL, '30023430b.jpg'),
(15, 2, 'Samsung J3(2017)', 'Samsung', '2999.99', 'Описание товара', 'Полное описание товара', 1, 1, 1, '2018-02-04 08:51:44', NULL, 'lb-galaxy-j1-2016-j120h-sm-j120hzddmid-frontgold-thumb-61587717.jpg'),
(17, 13, 'lg', 'lg', '777.00', ' Короткое описание', ' Короткое описание', 1, 0, 1, '2018-02-04 10:21:19', '2018-02-14 10:22:56', 'gold_9_3-1428x1228.jpg'),
(18, 13, 'Sony', 'Sony', '777.00', 'lglglgl', 'lgllgllggl', 1, 0, 1, '2018-02-04 10:22:33', '2018-03-10 17:38:55', '30023430b.jpg'),
(19, 14, 'lg', 'lg', '777.00', 'lglglgl', 'lgllgllggl', 1, 0, 1, '2018-02-04 10:22:59', '2018-02-14 10:23:08', 'gold_9_3-1428x1228.jpg'),
(21, 1, 'Sony', 'Sony', '7000.99', 'Sony', 'Sony', 1, 1, 1, '2018-02-04 11:34:36', NULL, '30023430b.jpg'),
(22, 1, 'Samsung 777777777', 'Samsung', '55.99', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-02-10 05:56:36', NULL, 'noimage.jpg'),
(23, 1, 'Samsung ', 'Samsung', '55.99', 'Короткое описание товара', 'Полное описание товара', 0, 1, 0, '2018-02-10 05:56:51', NULL, 'noimage.jpg'),
(24, 3, 'Pakharenko', 'Samsung', '1985.00', 'Короткое описание товара', 'Полное описание товара', 1, 1, 0, '2018-02-04 15:03:49', NULL, 'lb-galaxy-j1-2016-j120h-sm-j120hzddmid-frontgold-thumb-61587717.jpg'),
(25, 3, 'Pro-web-master', 'Samsung', '1985.00', 'Короткое описание товара', 'Полное описание товара', 1, 1, 0, '2018-02-04 17:55:33', NULL, '1517014342-71096779-78665-0811-516350.jpg'),
(28, 1, 'Best', 'Best', '2.45', 'rrrrr', 'Полное описание', 1, 1, 1, '2018-02-06 09:37:53', NULL, '97_1500x_1500517993.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribes`
--

CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` int(3) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribes`
--

INSERT INTO `subscribes` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Ольга Пахаренко', 'paharenko1985@mail.ru', '2018-02-01 18:37:24', '0000-00-00 00:00:00'),
(2, 'Ольга Пахаренко', 'paharenko1985@mail.ru', '2018-02-01 18:38:14', '0000-00-00 00:00:00'),
(3, 'Ольга Пахаренко', 'paharenko1985@mail.ru', '2018-02-01 18:38:35', '0000-00-00 00:00:00'),
(4, 'Pakahrenko', 'nix@mail.ru', '2018-02-01 18:38:52', '0000-00-00 00:00:00'),
(5, '', '', '2018-03-10 11:33:41', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(43, 'Жека Пахаренко 1985', 'paharenko1985@mail.ru', '12111985', 0, '2018-02-13 13:32:34', '2018-02-13 13:33:42'),
(44, 'Nix', 'nix@mail.ru', '123456', 1, '2018-02-13 13:34:30', '2018-02-15 11:06:25');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
