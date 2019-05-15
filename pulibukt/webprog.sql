-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 12:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Haruki Murakami', NULL, NULL),
(2, 'Roald Dahl', NULL, NULL),
(3, 'Paulo Coelho', NULL, NULL),
(4, 'Madeleine L\'Engle', '2018-10-09 03:02:12', '2018-10-09 03:02:12'),
(5, 'Antoine de Saint-Exupery', '2018-10-09 03:20:28', '2018-10-09 03:20:28'),
(6, 'J.K. Rowling', '2018-10-10 00:56:39', '2018-10-10 00:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `publish_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `publisher`, `author_id`, `genre_id`, `publish_date`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Boy: Tales of Childhood', '9780142413814', 'Penguin Putnam Inc.', 2, 1, '2009', 'From his own life, of course! As full of excitement and the unexpected as his world-famous,', 'uploads/1539082252boy_tales_of_childhood.jpg', NULL, '2018-10-09 02:50:52'),
(2, 'Fantastic Mr. Fox', '9780142410349', 'Penguin Putnam Inc.', 2, 2, '2007', 'Someone\'s been stealing from the three meanest farmers around, and they know the identity of the thief', 'uploads/1539082265fantastic_mr_fox.jpg', NULL, '2018-10-09 02:51:05'),
(3, 'James and the Giant Peach', '9780142410363', 'Penguin Putnam Inc.', 2, 2, '2007', 'After James Henry Trotter\'s parents are tragically eaten by a rhinoceros', 'uploads/1539082276james_and_the_giant_peach.jpg', NULL, '2018-10-09 02:51:16'),
(4, 'South of the Border, West of the Sun: A Novel', '9780679767398', 'RANDOM HOUSE INC.', 1, 3, '2000', 'Born in 1951 in an affluent Tokyo suburb, Hajime—beginning', 'uploads/1539082299south_of_the_border.jpg', NULL, '2018-10-09 02:51:39'),
(5, 'The Elephant Vanishes', '9780679750536', 'Random House Inc.', 1, 4, '1994', 'A man sees his favorite elephant vanish into thin air; a newlywed couple             suffers attacks of hunger', 'uploads/1539082318the_elephant_vanishes.jpg', NULL, '2018-10-09 02:51:58'),
(6, '1Q84', '9780307476463', 'Random House Inc.', 1, 4, '2011', 'A young woman named Aomame follows a taxi driver’s enigmatic             suggestion and begins to notice puzzling discrepancies in the world around her.', 'uploads/15390823761q84.jpg', NULL, '2018-10-09 02:52:56'),
(7, 'The Alchemist', '9780062315007', 'Harper Collins Publishers', 3, 4, '2014', 'Combining magic, mysticism, wisdom and wonder into an inspiring             tale of self-discovery, The Alchemist has become a modern classic', 'uploads/1539082516the_alchemist.jpg', NULL, '2018-10-09 02:55:16'),
(8, 'A Wrinkle in Time: The Graphic Novel', '9781250056948', 'MPS', 4, 1, '2015', 'The world already knows Meg and Charles Wallace Murry, Calvin O\'Keefe, and the three Mrs―Who, Whatsit, and Which', 'uploads/1539083862wrinkle4.jpg', '2018-10-09 03:03:25', '2018-10-09 03:17:42'),
(9, 'Norwegian Wood', '9780307744661', 'Random House Inc.', 1, 1, '2011', 'This stunning and elegiac novel by the author of the internationally acclaimed Wind-Up Bird Chronicle', 'uploads/1539083447norwergian_wood.jpg', '2018-10-09 03:10:47', '2018-10-09 03:10:47'),
(10, 'The Little Prince', '9781847494238', 'ALMA BOOKS LTD.', 5, 1, '2015', 'Having crash-landed in the Sahara desert, a pilot comes across a young boy who introduces himself as the \"Little Prince\"', 'uploads/1539084151the_little_prince.jpg', '2018-10-09 03:22:31', '2018-10-09 03:22:31'),
(11, 'Harry Potter booksomething', '213123123', 'Publisher123', 6, 2, '2000', 'Harry potter booksadasdasd', 'uploads/1539161892the_elephant_vanishes.jpg', '2018-10-10 00:58:12', '2018-10-10 00:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Classics', NULL, NULL),
(2, 'Action & Adventure', NULL, NULL),
(3, 'Mystery, Thriller and Suspense', NULL, NULL),
(4, 'Literary Fiction', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_roles_table', 1),
(2, '2014_10_12_000001_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_10_03_101040_create_authors_table', 1),
(5, '2018_10_03_101041_create_genres_table', 1),
(6, '2018_10_03_101044_create_books_table', 1),
(7, '2018_10_04_095008_create_clients_table', 1),
(8, '2018_10_05_125143_create_products_table', 1),
(9, '2018_10_05_132009_create_orders_table', 1),
(10, '2018_10_05_132010_create_orderlines_table', 1),
(11, '2018_10_05_192347_create_payments_table', 1),
(12, '2018_10_07_044423_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderlines`
--

CREATE TABLE `orderlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderlines`
--

INSERT INTO `orderlines` (`id`, `product_id`, `order_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2018-10-10 00:54:16', '2018-10-10 00:54:16'),
(2, 8, 1, 2, '2018-10-10 00:54:16', '2018-10-10 00:54:16'),
(3, 6, 2, 10, '2018-10-10 01:00:53', '2018-10-10 01:00:53'),
(4, 1, 3, 2, '2018-10-17 02:09:30', '2018-10-17 02:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, '10/10/2018', '2018-10-10 00:54:16', '2018-10-10 00:54:16'),
(2, 2, '10/10/2018', '2018-10-10 01:00:53', '2018-10-10 01:00:53'),
(3, 2, '17/10/2018', '2018-10-17 02:09:30', '2018-10-17 02:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `card_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `card_num`, `address`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, '1111-2222-3333-4444', 'Panacan', 2494, '2018-10-10 00:55:10', '2018-10-10 00:55:10'),
(2, 2, '1111-2222-3333-4444', 'Panacan', 7150, '2018-10-10 01:01:12', '2018-10-10 01:01:12'),
(3, 3, '1111-2222-3333-4444', 'Panacan', 768, '2018-10-17 02:10:41', '2018-10-17 02:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `book_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 384, NULL, '2018-10-17 02:09:30'),
(2, 2, 8, 376, NULL, '2018-10-09 20:23:46'),
(3, 3, 6, 376, NULL, '2018-10-09 20:55:25'),
(4, 4, 10, 629, NULL, NULL),
(5, 5, 10, 752, NULL, NULL),
(6, 6, 0, 715, NULL, '2018-10-10 01:00:54'),
(7, 7, 10, 816, NULL, NULL),
(8, 8, 6, 863, '2018-10-09 03:03:25', '2018-10-10 00:54:16'),
(9, 9, 0, 315, '2018-10-09 03:10:47', '2018-10-09 03:11:31'),
(10, 10, 0, 299, '2018-10-09 03:22:31', '2018-10-09 21:45:07'),
(11, 11, 10, 500, '2018-10-10 00:58:12', '2018-10-10 00:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$irLHYPKqcMnQ29Hcli.TFe9fPCKvZPKawZB1tfqT0DD5BgydfNxx2', 1, 'jq5BAk8mJZiXfRzlP42rrtTGCRMbWo9JOus2Vz2qhNcmmmXEzf1eVTu38p3U', NULL, NULL),
(2, 'jigo', 'jigo@gmail.com', NULL, '$2y$10$T5H2UbmCWCv4jAr1Maswz.3QyLRsXlYzWRw3ajmYnK7hdu5q9lEKu', 2, 'seTh0rEirYadBwPlFaaRYqgzXxWmWsC4kTE3FQZYLogzjSNmemqE77IK8BCW', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlines`
--
ALTER TABLE `orderlines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderlines_product_id_foreign` (`product_id`),
  ADD KEY `orderlines_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_book_id_foreign` (`book_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderlines`
--
ALTER TABLE `orderlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orderlines`
--
ALTER TABLE `orderlines`
  ADD CONSTRAINT `orderlines_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderlines_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
