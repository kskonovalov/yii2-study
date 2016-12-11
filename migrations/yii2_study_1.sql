-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 11 2016 г., 13:12
-- Версия сервера: 5.6.33-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii2_study`
--

-- --------------------------------------------------------

--
-- Структура таблицы `std_user`
--

CREATE TABLE IF NOT EXISTS `std_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `access_token_UNIQUE` (`access_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `std_user`
--

INSERT INTO `std_user` (`id`, `username`, `name`, `surname`, `password`, `salt`, `access_token`, `create_date`) VALUES
(1, 'admin@gmail.com', 'Константин', 'К', 'e9982829075aa07e0190cba24f871e8a57112bc3e34198bc4966dbfbcbd30864a42d072a33ac70415f0aad4299ff3f31519daa281339517fd6aad280910d445d', 'd42adec2de6f491dbc5322729f8d0cb8656c754338042b5ed41d556209b9747c0cb07623526dcd661435d3d0cc28c113decbb877e25b05abcd7be67efb3b4c34', NULL, '2016-01-22 09:45:46'),
(3, 'test@test.ru', 'test', 'test', '14ed3858629b4b36a063cf162fc85972b3131ee124b516df6ba412e4664a62d5b63ae83a6c37e566ae4f754354a6ce51633bf11ecae8a64d4454fd373a507641', '29f660bf208f1ba30d9dad9a47b7915c0d85f831f3f6c8c9ab47c0ae3f177d2ba500ac788977d2364854b8af1051d70aebc1a9113c68a6796ce1b7920d3957a1', NULL, '2016-01-22 11:13:55'),
(4, 'asd@asd.ru', 'asd@asd.ru', 'asd@asd.ru', 'b5454dacef3a47a01abd5c9f039e03338de8dd8fb3cbd19ed010616c1ea63dddef02435c6f5dd7cdfa5fe10da28797fcef1fbad7d9523b67f95b16184cbe1211', '95b70d4ebf209b14cdaee2b1ccb7f33c3a513585f9ffec618f0b7b7cd2e4c4726649b78793f553aa61ac1298f140a08c08f8bac67128badf78171a4d5e791aae', NULL, '2016-01-22 11:19:12'),
(5, 'dasda@asd.ru', 'dasda@asd.ru', 'dasda@asd.ru', 'e1a20fbc859286de945dcb327bcc45622f5d7ed6b8cd3d1660f7e96b2ed3c9d6683f70c4eefc8a337cc108febc80e4da1f3e602c3fde8d18422947e084ae36f1', '84f998825c07da07cdcfe44694dc9491667fa0b8dcd270584664cb1a7c905d0c9fd8a95808cf230a0c1258d342ba4bfab4fec461d22bec70c880edaaf586bb68', NULL, '2016-01-22 11:22:38'),
(6, 'test2@test.ru', 'test2@test.ru', 'test2@test.ru', '14e6d9a0d230bf5d94ac64282e293f74215f11404b3845633956f4efb812287b3739e0f834213c9b25a4d9622e6f5a4923d9a4ce58fbbf4bc589167a39b39fa0', '104c120d5b30006d12c83d8e26c8d4725bd07512b89f9293c44e55a6a342f13f74a0b312b6c210d6cb54f5aa040971c4ac60beaf66627619bed7b92dbdf6844b', NULL, '2016-02-04 10:40:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
