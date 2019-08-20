-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 20 2019 г., 22:07
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nname` text NOT NULL,
  `Surname` text NOT NULL,
  `Birthdate` date NOT NULL,
  `Mobile` text NOT NULL,
  `EMail` text NOT NULL,
  `Image` text NOT NULL,
  `Check` tinyint(1) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Nname`, `Surname`, `Birthdate`, `Mobile`, `EMail`, `Image`, `Check`) VALUES
(1, 'Павел', 'Полоцкий', '1996-02-28', '+79058871379', 'polotskii-p@mail.ru', 'image0.jpg', 1),
(2, 'Владислав', 'Кузнецов', '1968-03-23', '+79369745418', 'kuznecov@gmail.ru', 'image2.jpg', 0),
(4, 'Брандо', 'Дио', '1965-02-25', '896304521', 'zawarudo@mail.ru', 'image4.jpg', 0),
(5, 'Безфамильный', 'Безымянный', '0001-01-01', '1111111111111', '1@gmail.com', '1', 1),
(6, 'Джованна', 'Джорно', '1989-09-17', '+39861385246', 'jojo@yandex.ru', 'jorno.jpg', 1),
(16, 'Подольский', 'Виктор', '1969-12-05', '89058434241', 'podovic@mail.ru', 'ToddHoward2010sm.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
