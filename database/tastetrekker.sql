-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2024 pada 15.06
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
  `name_category` varchar(50) NOT NULL,
  `desc_category` varchar(200) NOT NULL,
  `image_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `name_category`, `desc_category`, `image_category`) VALUES
('7d5469f1-9', 'Masakan Indonesia', 'Masakan Indonesia adalah perpaduan yang kaya dan beraneka ragam dari berbagai bahan makanan lokal, rempah-rempah, dan teknik memasak tradisional.', 'masakan-indonesia.jpeg'),
('7d54c594-9', 'Masakan Italia', 'Makanan Italia adalah kombinasi yang sempurna antara cita rasa yang otentik, bahan-bahan segar, dan warisan budaya yang kaya. ', 'masakan-italia.jpg'),
('7d54c971-9', 'Masakan Jepang', 'Masakan Jepang adalah harmoni antara cita rasa yang halus, presentasi yang indah, serta penggunaan bahan-bahan segar dan berkualitas tinggi.', 'masakan-jepang.jpg'),
('7d558219-9', 'Masakan Korea', 'Masakan Korea adalah perpaduan unik dari rasa, tekstur, dan presentasi menjadikan masakan Korea sangat disukai oleh banyak orang di seluruh dunia.', 'masakan-korea.jpg'),
('7d5586ee-9', 'Masakan Tiongkok', 'Masakan Tiongkok adalah perpaduan yang kaya dari cita rasa beragam, tekstur berbeda, dan teknik memasak yang unik menjadikannya populer di dunia.', 'masakan-tiongkok.jpg'),
('7d568793-9', 'Masakan Turki', 'Masakan Turki adalah perpaduan kaya cita rasa yang kuat, kekayaan rempah-rempah, serta pengaruh budaya seperti Yunani, Timur Tengah, dan Balkan. ', 'masakan-turki.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ingredient`
--

CREATE TABLE `ingredient` (
  `ing_id` varchar(10) NOT NULL,
  `recipe_id` varchar(10) NOT NULL,
  `ing_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ingredient`
--

INSERT INTO `ingredient` (`ing_id`, `recipe_id`, `ing_name`) VALUES
('b50d4c41-a', 'e5f3dd38-a', '1 kg daging ayam'),
('b50db595-a', 'e5f3dd38-a', '10 sdm bumbu sate'),
('b50db7f2-a', 'e5f3dd38-a', '2 siung bawang merah'),
('b50db8fe-a', 'e5f3dd38-a', '3 siung bawang putih'),
('b50dba0f-a', 'e5f3dd38-a', '1 sachet kecap manis'),
('b50dbb0b-a', 'e5f3dd38-a', '100 ml minyak goreng');

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

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menu_id`, `category_id`, `name_menu`, `price`, `image_menu`) VALUES
('8b1f2589-9', '7d5586ee-9', 'Dimsum', 10000, 'dimsum.jpg'),
('8b1f64c5-9', '7d568793-9', 'Kebab', 50000, 'kebab.jpg'),
('8b1f67cf-9', '7d558219-9', 'Kimchi', 16000, 'kimchi.jpg'),
('8b1f690b-9', '7d54c594-9', 'Pasta', 40000, 'pasta.jpg'),
('8b1f6a51-9', '7d54c971-9', 'Sushi', 20000, 'sushi.jpg'),
('8b1f6ec4-9', '7d5469f1-9', 'Sate', 13000, 'sate.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `method`
--

CREATE TABLE `method` (
  `method_id` varchar(10) NOT NULL,
  `recipe_id` varchar(10) NOT NULL,
  `name_method` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `method`
--

INSERT INTO `method` (`method_id`, `recipe_id`, `name_method`) VALUES
('c2da195d-a', 'e5f3dd38-a', 'Siapkan daging ayam yang sudah dipotong kotak-kotak.'),
('c2da3471-a', 'e5f3dd38-a', 'Campurkan daging ayam dengan bumbu sate.'),
('c2da3699-a', 'e5f3dd38-a', 'Diamkan selama 1 jam agar bumbu meresap.'),
('c2da3796-a', 'e5f3dd38-a', 'Tusukkan daging ayam yang telah dibumbui ke tusuk sate.'),
('c2da3899-a', 'e5f3dd38-a', 'Panggang sate di atas bara api hingga matang.'),
('c2dbb602-a', 'e5f3dd38-a', 'Sajikan sate dengan bawang merah, bawang putih, dan kecap manis.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `order_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `subtotal`, `payment`, `delivery`, `date`) VALUES
('62d53b73-a', '239d5c3ea5', 26000, 'BCA', 'Grab', '2023-12-29 06:36:55');

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

--
-- Dumping data untuk tabel `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `menu_id`, `quantity`, `subharga`) VALUES
('1e5f362f-a', '62d53b73-a', '8b1f67cf-9', 1, 16000),
('3777d806-a', '62d53b73-a', '8b1f2589-9', 1, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` varchar(10) NOT NULL,
  `menu_id` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc_recipe` varchar(255) NOT NULL,
  `serving` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `image_recipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `menu_id`, `title`, `desc_recipe`, `serving`, `timing`, `image_recipe`) VALUES
('e5f3dd38-a', '8b1f6ec4-9', 'Cara Membuat Sate', 'Sate adalah makanan kesukaan banyak orang.', '5 orang', '10 menit', 'sate.jpg');

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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `mobile`, `password`, `image_user`, `level`) VALUES
('239d5c3ea5', 'user', 'user@gmail.com', '', '$2y$10$ZrYrPc38/wg9LQGELqY2jeYOMvXznlF4lylhhGNsTwbEQ0/Nowh6G', 'default.png', 0),
('c6a37cc99e', 'admin', 'admin@gmail.com', '', '$2y$10$ATlsr3N3dpZ3n5M9twN3Vuocu1NpR2dP1xwVb0hdqXiZ93oHFogk2', 'default.png', 1);

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
