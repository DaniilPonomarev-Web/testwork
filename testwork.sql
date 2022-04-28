-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 28 2022 г., 08:42
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testwork`
--

-- --------------------------------------------------------

--
-- Структура таблицы `directorynumbers`
--

CREATE TABLE `directorynumbers` (
  `id` int(255) NOT NULL COMMENT 'id',
  `FIO` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `who` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `directorynumbers`
--

INSERT INTO `directorynumbers` (`id`, `FIO`, `telephone`, `who`) VALUES
(378, 'test', '+7 (992) 4209008', 'test'),
(379, 'test', '+7 (992) 4209008', 'test'),
(392, 'tewst', '+7 (992) 429-02-08', 'testest'),
(404, '123', '+7 (992) 429-02-20', 'test');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `directorynumbers`
--
ALTER TABLE `directorynumbers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `directorynumbers`
--
ALTER TABLE `directorynumbers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=405;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
