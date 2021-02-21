-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2021 г., 16:51
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `website_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `news_name`, `short_description`, `full_description`, `date`) VALUES
(5, 'Котики', 'Статья про котиков', 'В работе 1871 года \"Происхождение человека\" Чарльз Дарвин писал, что разум животных похож на наш во многих аспектах. \"Разница между разумом человека и высших животных - только количественная, а не качественная\", - писал ученый.\r\n\r\nЕсли это правда, то, безусловно, кошка - как и любое другое животное - может соответствовать определению \"эгоизма\", которое дает Оксфордский словарь: \"Обеспокоенность преимущественно собственной личной выгодой или удовольствием\".', '2021-02-21'),
(6, 'Собачки', 'Статья про собачек', 'Многие мелкие и карликовые породы были выведены как сторожевые или охотничьи. Именно поэтому они обладают не только физическими особенностями (например, короткие ноги и длинное тело у таксы), но и генетически заложенными привычками и чертами характера.\r\n\r\nЗнания о происхождении породы, щенка которой вы хотите завести, помогут вам понять, какой образ жизни ведут представители этой породы. Скажем, предназначением терьеров изначально была ловля кроликов и крыс, поэтому они обожают рыть землю. Так что, заводя терьера, хорошо подумайте: сможет ли он хотя бы иногда заниматься своим любимым делом у вас во дворе или в саду?', '2021-02-21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
