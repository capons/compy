-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 08 2015 г., 19:33
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `photobnb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(18) NOT NULL,
  `surname` varchar(18) NOT NULL,
  `type` int(1) NOT NULL,
  `idea` text NOT NULL,
  `patronymic` varchar(18) NOT NULL,
  `website` varchar(50) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `social_network` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `surname`, `type`, `idea`, `patronymic`, `website`, `skype`, `phone_number`, `social_network`) VALUES
(84, 'm@mail.ru', '1234567', '', '', 0, '', '', '', '', '', ''),
(87, 'mail@mail.ru', '1234567', '', '', 0, '', '', '', '', '', ''),
(88, 'nikich_gl95@mail.ru', 'test123456', 'Nick', 'Glushchenko', 1, 'лыводлыавождло', 'Alexandrovich', 'www.vk.com', 'scipionus13', '+79184499126', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
