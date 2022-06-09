-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 09 2022 р., 00:24
-- Версія сервера: 5.7.33
-- Версія PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mysql1`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `birthday`, `gender`, `country`, `email`, `note`) VALUES
(1, 'iLyle', 'illlllya1', 'Ілля', '2000-03-01', 'чоловік', 'Україна', 'illlyle1@gmail.com', 'студент'),
(2, 'YvUNO', 'uuunoYV2', 'Яна', '2001-06-06', 'жінка', 'Україна', 'unoYV2@gmail.com', 'студент'),
(3, 'WeNeq', 'weeeneq3', 'Іван', '1999-05-24', 'чоловік', 'Україна', 'weneQ3@gmail.com', 'студент'),
(4, 'ivUJy', 'iiiiiivju4', 'Юлія', '2000-01-13', 'жінка', 'Україна', 'ivujyy4@gmail.com', 'студент'),
(5, 'DiMoP', 'diiimoo5', 'Дмитро', '2000-03-09', 'чоловік', 'Україна', 'dimop5@gmail.com', 'студент'),
(6, 'eLezO', 'eeelez6', 'Єлизавета', '2001-04-09', 'жіноча', 'Україна', 'eleeez6@gmail.com', 'студент'),
(8, 'miroshnikk', 'miiroshnikk13', 'Наталія', '2002-02-13', 'жіноча', 'Україна', 'miroshnikk.13@gmail.com', 'студент'),
(10, 'leXoK', 'lleexxx', 'Олексій', '1999-05-28', 'чоловік', 'Україна', 'lexok@gmail.com', 'студент');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
