-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 16 2018 г., 13:49
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myShop1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `id_good` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id_basket`, `customer`, `id_good`, `quantity`, `datetime`) VALUES
(15, 'd68lq10es77svqjgig122cd8h582n78r', 8, 1, 1539325772),
(16, 'd68lq10es77svqjgig122cd8h582n78r', 12, 1, 1539325776),
(17, 'd68lq10es77svqjgig122cd8h582n78r', 14, 1, 1539325777);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(5) NOT NULL,
  `name_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_cat`, `name_cat`) VALUES
(1, 'Категория 1'),
(2, 'Категория 2'),
(3, ''),
(4, 'Категория 4'),
(5, 'Категория 5');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_good` int(5) NOT NULL,
  `id_cat` int(5) NOT NULL,
  `name_good` varchar(255) NOT NULL,
  `price_good` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_good`, `id_cat`, `name_good`, `price_good`) VALUES
(3, 1, 'Товар 567 Категория 1', 77.77),
(4, 1, 'Товар 2 Категория 1', 99),
(5, 2, 'Товар 1 Категория 2', 456),
(6, 2, 'Товар 2 Категория 2', 555.09),
(7, 4, 'Товар 1 Категория 4', 99.45),
(8, 4, 'Товар 1 Категория 4', 222.22),
(9, 5, 'Товар 1 Категория 5', 555),
(10, 5, 'Товар 2 Категория 5', 77.77),
(11, 1, 'Рыба Мороженная', 100),
(12, 1, 'Рыба соленая', 77.77),
(13, 1, 'Мясо свежее', 222.22),
(14, 1, 'Мясо замороженное', 555),
(15, 1, 'Креветки королевские', 159.8),
(16, 1, 'Креветки Тигровые', 99),
(17, 1, 'Креветки Аргентинские', 159.8),
(18, 1, 'Мидии Гигант-Киви', 77.77);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `name_order` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `id_good` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `name_order`, `email`, `phone`, `address`, `customer`, `id_good`, `quantity`, `tetime`) VALUES
(1, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538664021),
(2, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664158),
(3, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1538664517),
(4, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 8, 1, 1538664528),
(5, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664611),
(6, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 12, 1, 1538664612),
(7, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 13, 1, 1538664613),
(8, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538743342),
(9, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539097420),
(10, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539172964),
(11, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538664021),
(12, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664158),
(13, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1538664517),
(14, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 8, 1, 1538664528),
(15, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664611),
(16, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 12, 1, 1538664612),
(17, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 13, 1, 1538664613),
(18, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538743342),
(19, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539097420),
(20, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539172964),
(21, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538664021),
(22, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664158),
(23, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1538664517),
(24, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 8, 1, 1538664528),
(25, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664611),
(26, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 12, 1, 1538664612),
(27, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 13, 1, 1538664613),
(28, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538743342),
(29, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539097420),
(30, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539172964),
(31, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538664021),
(32, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664158),
(33, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1538664517),
(34, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 8, 1, 1538664528),
(35, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1538664611),
(36, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 12, 1, 1538664612),
(37, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 13, 1, 1538664613),
(38, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 6, 1, 1538743342),
(39, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539097420),
(40, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'sasd', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 4, 1, 1539172964),
(41, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'купчино', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1539325721),
(42, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'купчино', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 10, 1, 1539325724),
(43, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'купчино', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1539325721),
(44, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'купчино', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 10, 1, 1539325724),
(45, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'купчино', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 11, 1, 1539325721),
(46, 'денис', 'fedot79@mail.ru', '+7(921) 387-46-77', 'купчино', 'ua7gf6al22ni82skllfdu05b3kmfgs37', 10, 1, 1539325724);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `users_login` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `users_login`, `user_password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_good`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_good` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
