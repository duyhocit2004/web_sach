-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 08:07 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ban_sach`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Spencer Johnson');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'kinh dị');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `recipient_name` varchar(255) NOT NULL,
  `recipient_email` varchar(255) NOT NULL,
  `recipient_phone` varchar(255) NOT NULL,
  `recipient_address` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `payment_method_id` int NOT NULL,
  `payment_status_id` int NOT NULL,
  `Order_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `recipient_name`, `recipient_email`, `recipient_phone`, `recipient_address`, `order_date`, `total_amount`, `note`, `payment_method_id`, `payment_status_id`, `Order_ID`) VALUES
(1, 16, 'hoàng khánh chi', 'khanhchi@gmail.com', '0331254552', 'an thượng hoài đức hà nội', '2024-09-26', '30000', 'giao hàng nhớ gọi điện tôi không muốn có 1 chút sai sót nào trong vận chuyển', 1, 6, 'TH4004'),
(2, 14, 'hoàng quốc duy', 'hoangduyoffline@gmail.com', '0337035875', 'hà nội', '2024-09-26', '3000', 'không biế nói gì hơn là tuyệt vời', 5, 2, 'TH455'),
(3, 14, 'd', 'eq', 'ưe', 'e1', '2024-09-20', '31', '312', 2, 5, '1'),
(4, 13, 'hoàng khánh chi', 'hoangchi@gmail.com', '123', '123', '2024-09-27', 'qư', 'eq', 4, 4, 'e2');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `orders_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `unit_price` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orders_id`, `product_id`, `quantity`, `unit_price`, `price`) VALUES
(1, 1, 4, '10.00', '200', '121000.00'),
(2, 1, 4, '10.00', '1222', '121000.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int NOT NULL,
  `payment_method_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `payment_method_name`) VALUES
(1, 'thanh toán khi nhận hàng'),
(2, 'Thẻ tín dụng/ghi nợ'),
(3, 'ví điện tử'),
(4, 'hệ thống thanh toán trực tuyến'),
(5, 'thẻ quà tặng');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` int NOT NULL,
  `payment_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `payment_status`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đang xử lý '),
(3, 'Đã thanh toán'),
(4, 'Thất bại'),
(5, 'Đã hoàn tiền'),
(6, 'Đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author_id` int NOT NULL,
  `genre_id` int NOT NULL,
  `published_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `book_name`, `title`, `author_id`, `genre_id`, `published_date`, `price`, `description`, `image`) VALUES
(4, 'who moved my cheese', 'Ai Lấy Miếng Pho Mát Của Tôi?', 1, 1, '2024-09-26', '122222.00', 'Ai Lấy Miếng Pho Mát Của Tôi?\" (tựa gốc: Who Moved My Cheese?) là một cuốn sách nổi tiếng của tác giả Spencer Johnson, đã mang đến cho người đọc những bài học quý giá về sự thay đổi trong cuộc sống', './uploads/products/1727184235IMG_0843.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_details`
--

CREATE TABLE `shopping_cart_details` (
  `id` int NOT NULL,
  `shopping_cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `nationality` varchar(200) DEFAULT NULL,
  `id_role` int NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_user`, `email`, `phone`, `address`, `avatar`, `nationality`, `id_role`, `password`) VALUES
(14, 'Hoang duy2', 'hoangduyoffline@gmail.com', '3337035875', 'hà nội', './uploads/procuts1727187811459039876_1203660540836806_8466509052454082988_n.jpg', 'việt nam', 1, 'hoangduy20042'),
(16, 'duy123456', 'hoangduyoffline@gmail.com', '0904454663', 'hà nọi', NULL, 'việt nam', 2, 'hoangduy2004'),
(17, 'Hoang duy2004', 'hoangduyoffline23@gmail.com', '3337035875', 'hà nội', './uploads/procuts1727187590IMG_UPLOAD_20240801_193925.jpg', 'việt nam', 1, '1233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Lien_ket` (`payment_status_id`),
  ADD KEY `Lien_ket2` (`payment_method_id`),
  ADD KEY `Lien_ket3` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `KN` (`product_id`),
  ADD KEY `Lien_ket102` (`orders_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien_ket4` (`author_id`),
  ADD KEY `lien_ket5` (`genre_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD KEY `Lien_ket8` (`user_id`);

--
-- Indexes for table `shopping_cart_details`
--
ALTER TABLE `shopping_cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Lien_ket9` (`product_id`),
  ADD KEY `Lien_ket10` (`shopping_cart_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Lien_ket6` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shopping_cart_details`
--
ALTER TABLE `shopping_cart_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Lien_ket` FOREIGN KEY (`payment_status_id`) REFERENCES `payment_status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Lien_ket2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `KN` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Lien_ket102` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lien_ket4` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lien_ket5` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `shopping_cart_details`
--
ALTER TABLE `shopping_cart_details`
  ADD CONSTRAINT `Lien_ket10` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_cart_details` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Lien_ket6` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
