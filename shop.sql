-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2017 г., 21:58
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Pfannerstill', 'Ad nam ex ea. Iure similique quia tempora velit. Ad nam ex ea. Iure similique quia tempora velit.', NULL, '2017-12-17 12:17:01'),
(6, 'Green, Ward and Senger', 'Nobis id ad voluptas ut reiciendis. Autem aut necessitatibus dolor assumenda et voluptatem sunt. Ab eaque dolore earum et.', NULL, NULL),
(7, 'Yost, Cole and Lind', 'Neque ducimus consequatur enim. Voluptatem sunt ut sed illum. Voluptates possimus consequatur ea enim. Quibusdam velit enim reiciendis. Ut asperiores animi veniam nihil qui est fugit.', NULL, NULL),
(8, 'Pagac-Lockman', 'Repudiandae sed omnis voluptates labore explicabo. Voluptate est nulla culpa corrupti nulla sequi. Praesentium doloribus facilis et placeat. Corporis enim dolore sed.', NULL, NULL),
(9, 'Dibbert LLC', 'Exercitationem dolores quae dolorem rem laudantium suscipit. Omnis magnam neque maxime aperiam modi id quaerat. Maiores ut et quia voluptas repellendus.', NULL, NULL),
(10, 'Kozey Group', 'Molestiae eaque modi quam. Nihil tempore odit quae saepe. Magni dolorem ut laborum. Rerum impedit qui vel cumque.', NULL, NULL),
(11, 'O\'Conner Group', 'Optio temporibus temporibus hic quos qui. Non et iste voluptatem numquam iusto id fugiat inventore. Aut omnis aut deleniti consequatur debitis.', NULL, NULL),
(12, 'Ernser-Macejkovic', 'Porro fuga error et impedit autem voluptas inventore. In voluptatem voluptatum error quia. Sint molestiae eveniet repellendus quam beatae odit et.', NULL, NULL),
(13, 'Kozey, Goldner and Lockman', 'Veniam beatae odit facilis adipisci. Praesentium quae facilis optio quod suscipit voluptate est. Nihil aut at quidem dolorem rerum adipisci iusto at. Vel esse vel officia qui nihil culpa.', NULL, NULL),
(14, 'Daugherty, Donnelly and Ullrich', 'Amet dicta corrupti quos suscipit minima. Qui nulla doloribus iure autem ipsa ut pariatur. Ipsum deserunt fugiat ea consequatur laboriosam. Aliquid perspiciatis quas nisi modi.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@loftschool-laravel', NULL, '2017-12-17 12:13:19');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `category_id`, `name`, `price`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 9, 'Streich', 30.00, 'img/game-1.jpg', 'Aut et asperiores rerum eveniet est. Officia asperiores cumque facilis a nesciunt occaecati.', NULL, '2017-12-17 15:44:49'),
(2, 5, 'Heathcote-Hessel', 36.00, 'img\\a8cde955109462501a4a36736a833034.jpg', 'Qui et perspiciatis voluptas ab totam aut. Veniam aut dignissimos ratione distinctio ducimus beatae maiores. Distinctio eius veritatis est aut nihil eum.', NULL, NULL),
(3, 6, 'Tromp Inc', 52.00, 'img\\5d156eb5ddcd29b8e8d078049f6e4107.jpg', 'Cumque sit accusantium cupiditate doloribus ratione. Non eum quidem eius voluptatibus.', NULL, NULL),
(4, 9, 'Sporer, Bradtke and Reinger', 62.00, 'img\\cd01dc42a3ebc2a052c3876779e8b92e.jpg', 'Autem minus possimus tempore nemo dolor non. Libero ut quia velit et incidunt eos quod. Aperiam nulla dignissimos sint asperiores nihil quod.', NULL, NULL),
(5, 10, 'McKenzie, Leuschke and Zboncak', 25.00, 'img\\b6ffa319232a64b957716495e74e88c4.jpg', 'Repellat nostrum dolorem dolor ut atque rerum vel. Sit fugit officia aut asperiores cumque amet amet qui. Corporis ratione consequuntur impedit numquam et.', NULL, NULL),
(6, 11, 'Williamson, Halvorson and Weimann', 23.00, 'img\\4abe7001cd1c0f605336389a47505163.jpg', 'Velit omnis totam est nulla repellendus. Quaerat earum commodi provident quis aut excepturi est labore. Est sequi non sunt recusandae occaecati ipsa sint.', NULL, NULL),
(7, 10, 'Moore, Walker and Ortiz', 95.00, 'img\\dd491e808cc565de247c59dc2dba2167.jpg', 'Consequatur accusamus cum corporis tempora. Deleniti maxime sit eos nemo ut optio. Voluptatem commodi consequuntur repellat odit sed non quaerat. Vitae asperiores eligendi optio et.', NULL, NULL),
(8, 11, 'Adams and Sons', 48.00, 'img\\0830035345f13a8771834ba9593a54d1.jpg', 'Quibusdam harum et ab voluptate. Ratione possimus maxime necessitatibus ut. Sint quas qui voluptatem omnis rerum. Voluptatem officia perspiciatis quibusdam cum a magni sit dolorem.', NULL, NULL),
(9, 12, 'Goldner and Sons', 43.00, 'img\\5d873da6f778fb8f030d842bf6e69428.jpg', 'Et quo cumque quo rerum libero architecto nisi. Ut vel ut expedita autem sunt. Est nam dicta voluptatem. At iste dolor harum quisquam ut. Repellat sequi magnam soluta nemo consequuntur.', NULL, NULL),
(10, 13, 'Steuber-Ortiz', 11.00, 'img\\4e1ac432891000fee4b73ccc0cb8442a.jpg', 'Dolorem pariatur vel velit officia cumque. Consequatur eaque fugit doloribus non. Nihil vel exercitationem nostrum molestiae est nisi. In aliquid qui qui enim animi quis sed.', NULL, NULL),
(11, 14, 'Ruecker, Breitenberg and Brekke', 51.00, 'img\\60e6f0ad60263f2fa6b67d98ceace3d1.jpg', 'Labore similique blanditiis quibusdam consectetur repudiandae et iure. Aut in quo rerum minus et. Itaque vel aperiam vel necessitatibus quos.', NULL, NULL),
(12, 6, 'Gleichner Group', 47.00, 'img\\e7785085a4a440f457c4a3a99538d2a9.jpg', 'Aspernatur quaerat vero nesciunt quas voluptas soluta animi reprehenderit. Et praesentium enim qui distinctio aut minus non. Dolores numquam qui eos corporis quibusdam laudantium.', NULL, NULL),
(13, 8, 'Fadel, Willms and Borer', 89.00, 'img\\5ed17acd5cc5593e921da4344c3af11f.jpg', 'Corporis animi qui rerum cum ut non alias. Architecto repellat autem voluptates qui. Aut aut harum dignissimos voluptatem vitae.', NULL, NULL),
(14, 7, 'Swaniawski and Sons', 97.00, 'img\\f61a1c2b8bdf9dd5c6f74685e1497173.jpg', 'Delectus asperiores mollitia animi. Voluptatem nobis aspernatur et pariatur ipsum sed quos. Ut voluptates soluta aperiam error quia dolorem laborum.', NULL, NULL),
(15, 9, 'Renner-Champlin', 57.00, 'img\\badfbae2b10e6490c2a2c0cb1db29b6e.jpg', 'Hic id molestiae cupiditate. Dignissimos doloribus qui magni et maxime iure pariatur harum. Incidunt voluptas temporibus consequatur magnam quia enim. Voluptas incidunt itaque accusamus officia.', NULL, NULL),
(16, 10, 'Turcotte-Krajcik', 75.00, 'img\\3beb59bbecfdd86275c1d39c4630968d.jpg', 'Consequatur est aut aut in. Nobis numquam labore iure impedit labore magni voluptatem. Excepturi nam dolores laboriosam veritatis quibusdam libero fugiat. Cumque enim temporibus quo eos.', NULL, NULL),
(17, 11, 'Hansen-Shields', 36.00, 'img\\5a2f08f7117dafe663adcf091efd6b9b.jpg', 'Sit et harum ex nemo totam aperiam culpa. Quia ut autem enim aut id quaerat. Ea est itaque maiores optio qui beatae et.', NULL, NULL),
(18, 12, 'Lubowitz Group', 26.00, 'img\\e58b0438cf9a78f982b4c26edffb1dac.jpg', 'Rerum quibusdam fuga nesciunt. Fugit facilis eos consequuntur harum. Quos nesciunt et hic voluptatem. Sint non sapiente libero.', NULL, NULL),
(19, 13, 'Nolan-Bogisich', 45.00, 'img\\e96360e3bba833a46518f81dd7ded245.jpg', 'Quisquam ut nihil molestiae. Quia nisi dolores veniam quis. Debitis voluptatem magni consequatur cumque dicta. Eaque laboriosam omnis soluta rerum.', NULL, NULL),
(20, 14, 'Ortiz Ltd', 92.00, 'img\\5b641539824da15ef2e51e92e9dc374f.jpg', 'Rerum soluta rem ipsa quia. Rem similique distinctio omnis qui harum. Est rem ratione ipsum quia.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_12_14_152739_create_categories_table', 1),
(10, '2017_12_14_152816_create_goods_table', 1),
(11, '2017_12_15_165023_create_orders_table', 1),
(12, '2017_12_15_174729_create_roles_table', 1),
(15, '2017_12_17_132345_create_emails_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `good_id` smallint(5) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `good_id`, `user_id`, `user_name`, `email`, `price`, `created_at`, `updated_at`) VALUES
(24, 3, 11, 'Дональд Трамп', 'testmail@testmail.ru', 52.00, '2017-12-17 10:46:22', '2017-12-17 10:46:22'),
(25, 3, 11, 'Дональд Трамп', 'testmail@testmail.ru', 52.00, '2017-12-17 10:54:37', '2017-12-17 10:54:37'),
(26, 3, 11, 'Дональд Трамп', 'testmail@testmail.ru', 52.00, '2017-12-17 11:02:27', '2017-12-17 11:02:27'),
(27, 3, 11, 'Дональд Трамп', 'testmail@testmail.ru', 52.00, '2017-12-17 11:04:33', '2017-12-17 11:04:33'),
(28, 3, 11, 'Дональд Трамп', 'testmail@testmail.ru', 52.00, '2017-12-17 11:05:29', '2017-12-17 11:05:29'),
(29, 1, 10, 'admin', 'ya@ya.ru', 30.00, '2017-12-17 13:37:00', '2017-12-17 13:37:00'),
(30, 2, 10, 'admin', 'ya@ya.ru', 36.00, '2017-12-17 13:49:59', '2017-12-17 13:49:59'),
(31, 3, 10, 'admin', 'ya@ya.ru', 52.00, '2017-12-17 13:50:10', '2017-12-17 13:50:10'),
(32, 4, 10, 'admin', 'ya@ya.ru', 62.00, '2017-12-17 13:50:22', '2017-12-17 13:50:22'),
(33, 5, 10, 'admin', 'ya@ya.ru', 25.00, '2017-12-17 13:50:42', '2017-12-17 13:50:42'),
(34, 6, 10, 'admin', 'ya@ya.ru', 23.00, '2017-12-17 13:50:55', '2017-12-17 13:50:55'),
(35, 7, 10, 'admin', 'ya@ya.ru', 95.00, '2017-12-17 13:51:43', '2017-12-17 13:51:43'),
(36, 13, 12, 'Тест', 'gmail@gmail.com', 89.00, '2017-12-17 15:48:26', '2017-12-17 15:48:26'),
(37, 2, 0, 'Барак Обама', 'gmagvvgbarl@gmail.com', 36.00, '2017-12-17 15:48:55', '2017-12-17 15:48:55'),
(38, 17, 10, 'admin', 'ya@ya.ru', 36.00, '2017-12-17 15:56:24', '2017-12-17 15:56:24');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'User', 1, '2017-12-14 21:00:00', '2017-12-14 21:00:00'),
(2, 'Admin', 2, '2017-12-14 21:00:00', '2017-12-14 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 2, 'admin', 'ya@ya.ru', '$2y$10$DCggpj8mXVRp7UO.stGS1OlKl4R8La8crEFjUOSu8IXsw1cuKMheu', 'ZgiHzT7Fb90RgrKkd3foUOIC5JzKfhYG8pWHbXc678xngGNbkx1tlZOLil02', '2017-12-15 15:40:30', '2017-12-15 15:40:30'),
(11, 1, 'Дональд Трамп', 'testmail@testmail.ru', '$2y$10$KCdCkHFMVSBD5VnmDMzXAeGxC2QFZzW8XXaeHbW7pQ1jxXRPRbQVi', '8ULmIV4eDBwl1XDq67iiJE6jSQKAvjzq6loNJJrFlOX62keJykXxVBdlXfnZ', '2017-12-17 08:11:12', '2017-12-17 08:11:12'),
(12, 1, 'Тест', 'gmail@gmail.com', '$2y$10$WpHpI9t750IqkNJ.FO3Qj.jtzr8kt6iXQFBwkF1b9bo5Qk2UMfH6S', 'To68QPFO6kvDXTNBZOD4kVmaYy6jv2eAq19YmX8DLTEvs1p9aGIFj19pT1ow', '2017-12-17 15:48:10', '2017-12-17 15:48:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
