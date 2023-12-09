-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 09.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastetrekker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `category_id` varchar(10) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ingredient`
--

CREATE TABLE `ingredient` (
  `ing_id` varchar(10) NOT NULL,
  `recipe_id` varchar(10) NOT NULL,
  `ing_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `menu_id` varchar(10) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `name_menu` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `method`
--

CREATE TABLE `method` (
  `method_id` varchar(10) NOT NULL,
  `recipe_id` varchar(10) NOT NULL,
  `method_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `order_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` varchar(10) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `menu_id` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` varchar(10) NOT NULL,
  `menu_id` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `serving` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_user` varchar(100) NOT NULL DEFAULT 'default.png',
  `level` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ing_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `method`
--
ALTER TABLE `method`
  ADD PRIMARY KEY (`method_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `method`
--
ALTER TABLE `method`
  ADD CONSTRAINT `method_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
