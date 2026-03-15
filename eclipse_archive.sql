-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0:3306
-- Время создания: Мар 15 2026 г., 14:43
-- Версия сервера: 8.0.44
-- Версия PHP: 8.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eclipse_archive`
--

-- --------------------------------------------------------

--
-- Структура таблицы `facts`
--

CREATE TABLE `facts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `facts`
--

INSERT INTO `facts` (`id`, `image`, `alt`, `title`, `text`) VALUES
(1, 'images/blackhole.jpg', 'Стрелец A', 'Центр галактики', 'В центре Млечного Пути находится сверхмассивная чёрная дыра Стрелец A массой ~4 миллиона солнечных масс.'),
(2, 'images/diamondplanet.jpg', '55 Cancri e', 'Алмазная планета', '55 Cancri e предположительно на 1/3 состоит из алмаза — давление и температура превратили углерод в огромные кристаллы.'),
(3, 'images/glassplanet.jpg', 'HD 189733b', 'Планета стеклянных дождей', 'На одной из экзопланет (HD 189733b) идут дожди из расплавленного стекла, причём горизонтально из-за бешеного ветра 8700 км/ч.'),
(4, 'images/hotplanet.jpg', 'KELT-9b', 'Самая горячая планета', 'Самая горячая известная планета — KELT-9b, где температура на дневной стороне достигает ~4300 °C — горячее, чем поверхность некоторых звёзд.'),
(5, 'images/star.webp', 'Stephenson 2-18', 'Самая большая звезда', 'Самая большая известная звезда — Stephenson 2-18. Её диаметр примерно в 2150 раз больше солнечного — если поставить её вместо Солнца, она достала бы до Сатурна.');

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint UNSIGNED NOT NULL,
  `hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `hash`, `first_name`, `last_name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, '8062c811cf41f2ee0b20d8e6999892c6', 'test', 'test', 'test@mail.ru', 'test test test', '2026-02-15 08:46:56', '2026-02-15 08:46:56');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2026_02_12_150453_create_facts_table', 1),
(8, '2026_02_13_171309_create_feedbacks_table', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedbacks_hash_unique` (`hash`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `facts`
--
ALTER TABLE `facts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
