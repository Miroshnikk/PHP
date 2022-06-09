-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 09 2022 р., 00:25
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
-- База даних: `mysql2`
--

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'Про маркетолога', 'Спеціаліст, який вивчає ринок з метою визначення його поточних особливостей та формування ринкової стратегії для цікавої для нього групи товарів. Задачі: розробка та запуск маркетингових активностей, систематизація та аналіз даних про ефективність реклами, аналіз ринку та конкурентів, створення контент-плану та стратегії просування контенту.'),
(2, 'Про фінансиста', 'Підприємець,який для провадження підприємницької діяльності є засновником підприємства, на якому здійснюється діяльність у галузі фінансів, що займається торговельною діяльністю,\r\nвисокого рівня посадова особа на фінансовому підприємстві. Обов\'язки: надавати висновки з аналізу фінансових документів, проводити операції з нерухомістю і цінними паперами, складати фінансові кошториси і звіти, займатися біржовими операціями, оподаткуванням'),
(3, 'Про дизайнера', 'Людина, яка планує, проектує, розробляє і створює графічний контент. Навики: вміння працювати в спеціальних графічних програмах, творче міркування, вміння відстоювати свої ідеї, знання психології та англійської мови.'),
(4, 'Про PR-менеджера', 'Спеціаліст, який відповідає за створення та підтримку сприятливого іміджу фірми або конкретної торгової марки, що належить цій фірмі. Обов\'язки: підготовка прес-релізів про фірму та передача їх у засоби масової інформації, відповіді запити засобів масової інформації про діяльність фірми, організація прес-конференцій щодо інтерв\'ю з керівництвом фірми, взаємодія з владними структурами та місцевим населенням.'),
(5, 'Про лікаря-стоматолога', 'Лікар, який спеціалізується на проблемах з щелепно-лицьовою зоною. Зубний лікар піклується про стан ротової порожнини в разі виникнення проблем із зубами будь-якої складності. Професійно важливі якості: добре розвинена моторика рук, координація рухів, акуратність, хороша пам\'ять, увага.');

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `date`) VALUES
(1, 1, 1, '2022-05-26'),
(2, 2, 2, '2022-05-26'),
(3, 3, 3, '2022-05-26'),
(4, 4, 4, '2022-05-26'),
(5, 5, 5, '2022-05-26');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `country`, `email`, `note`, `birthday`) VALUES
(1, 'Віталій', 'ч', 'Україна', 'vitaliy05@gmail.com', 'спеціаліст з маркетингу', '1998-05-02'),
(2, 'Олександр', 'ч', 'Україна', 'oleksandr09', 'фінансист', '2000-09-19'),
(3, 'Євгенія ', 'ж', 'Україна', 'evgeniia08@gmail.com', 'дизайнер', '1997-08-03'),
(4, 'Анастасія', 'ж', 'Україна', 'anastasiia09@gmail.com', 'PR-менеджер', '1995-09-23'),
(5, 'Олег', 'ч', 'Україна', 'oleg11@gmail.com', 'лікар-стоматолог', '1994-11-13');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
