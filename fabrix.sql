-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 08:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `everything`
--

DROP DATABASE IF EXIST fabrix
CREATE DATABASE fabrix
USE fabrix

CREATE TABLE `everything` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `everything`
--

INSERT INTO `everything` (`id`, `name`, `stock`, `img`, `price`, `category`) VALUES
(24, 'White T-Shirt', 50, 'https://5.imimg.com/data5/IZ/IZ/WY/SELLER-85713121/white-girls-t-shirts-500x500.jpg', 15.99, 'women'),
(25, 'Pink T-Shirt', 30, 'https://assets.ajio.com/medias/sys_master/root/20240130/HKLm/65b8f96016fd2c6e6ac9350a/-473Wx593H-466949241-pink-MODEL.jpg', 19.99, 'women'),
(26, 'Magenta T-Shirt', 25, 'https://assets.ajio.com/medias/sys_master/root/20231220/y5qG/6582cde8afa4cf41f5dd4601/-473Wx593H-465682514-magenta-MODEL.jpg', 18.99, 'women'),
(27, 'Creation Top', 40, 'https://rukminim2.flixcart.com/image/828/994/xif0q/top/w/4/y/l-top-01-dharmanandan-creation-original-imagrzqywhncfhgn.jpeg?q=60&crop=false', 29.99, 'women'),
(28, 'Crew Neck Top', 35, 'https://dynamic-cdn.zenegal.store/fit-in/700x1050/products/42419/womens-crew-neck-top-16771392119521.jpeg', 24.99, 'women'),
(29, 'Crew Neck T-Shirt', 30, 'https://dynamic-cdn.zenegal.store/fit-in/700x1050/products/49272/womens-crew-neck-t-shirt-16697987676045.jpg', 22.99, 'women'),
(30, 'Blue Denim Pant', 20, 'https://oldnavy.gap.com/webcontent/0053/668/026/cn53668026.jpg', 39.99, 'women'),
(31, 'white Denim Pant', 15, 'https://oldnavy.gap.com/webcontent/0055/136/793/cn55136793.jpg', 42.99, 'women'),
(32, 'light pink top', 25, 'https://nilsonline.lk/image/cache/catalog/nils/product/005001002/34-612x875.jpg', 34.99, 'women'),
(33, 'Long Sleeve Blouse', 30, 'https://m.media-amazon.com/images/I/71Eul5xft8L._AC_UY1100_.jpg', 28.99, 'women'),
(34, 'Virtual Model Top', 20, 'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/945dec250906a5e2473b66fccdb09622.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp', 32.99, 'women'),
(35, 'Light green kit', 25, 'https://gflock.lk/cdn/shop/files/09_337080f3-67de-4df1-8ba1-48f73a581261_2048x@2x.jpg?v=1695922944', 26.99, 'women'),
(36, 'Green blowse', 20, 'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/6/2/627da2eSK075SGRN_1.jpg?rnd=20200526195200&tr=w-900', 29.99, 'women'),
(37, 'Denim blouse', 25, 'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/a/2/a29728828422701_1.jpg?rnd=20200526195200&tr=w-900', 27.99, 'women'),
(38, 'Light orange blouse', 30, 'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/d/8/d89b766SK010095_1.jpg?rnd=20200526195200&tr=w-900', 24.99, 'women'),
(39, 'blue blouse', 25, 'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/4/1/41538f4NK_UPT0038_1.jpg?rnd=20200526195200&tr=w-1536', 26.99, 'women'),
(40, 'Blue Denim Skirt', 20, 'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/5/4/543e6b8CD20230531322342DK-Denim_1.jpg?rnd=20200526195200&tr=w-1536', 36.99, 'women'),
(41, 'White Skirt', 25, 'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/b/9/b9ffc2528539601_1.jpg?rnd=20200526195200&tr=w-900', 32.99, 'women'),
(42, 'Maroon Crop Top', 30, 'https://www.jiomart.com/images/product/original/rvmivbp8zc/buynewtrend-maroon-cotton-rib-crop-top-for-women-product-images-rvmivbp8zc-0-202202281928.jpg?im=Resize=(500,630)', 18.99, 'women'),
(43, 'Tunic Top', 25, 'https://romans-cdn.rlab.net/images/original/84e6c7d3-d786-4886-b0b1-1d5307723322.jpg', 21.99, 'women'),
(44, 'Peach T-Shirt', 30, 'https://assets.ajio.com/medias/sys_master/root/20231116/FeF2/655572f7afa4cf41f58bb88f/-473Wx593H-466802967-peach-MODEL.jpg', 19.99, 'women'),
(45, 'Gold T-Shirt', 25, 'https://assets.ajio.com/medias/sys_master/root/20240118/Hhe7/65a854b48cdf1e0df5bda58f/-473Wx593H-466990092-gold-MODEL.jpg', 22.99, 'women'),
(46, 'Multicolor T-Shirt', 30, 'https://assets.ajio.com/medias/sys_master/root/20230619/fpuh/6490449bd55b7d0c63742edb/-473Wx593H-466286195-multi-MODEL.jpg', 20.99, 'women'),
(50, 'Grey Trouser', 40, 'https://getketchadmin.getketch.com/product/8905404304490/660/HLTR004611_1.jpg', 39.99, 'men'),
(51, 'Green Trouser', 35, 'https://getketchadmin.getketch.com/product/8907787085577/660/HLTR003897_1.JPG', 42.99, 'men'),
(52, 'Green trouser', 30, 'https://getketchadmin.getketch.com/product/8905404317612/660/HLTR004631_0.jpg', 36.99, 'men'),
(53, 'Trousers', 20, 'https://getketchadmin.getketch.com/product/8905404211583/660/KHTR000129_1.jpg', 49.99, 'men'),
(54, 'Brown top for men', 25, 'https://getketchadmin.getketch.com/product/8907787933823/660/HLTR004103_2.JPG', 44.99, 'men'),
(55, 'Blue denim', 35, 'https://liccstore.com/cdn/shop/files/53_960x1200_crop_center.jpg?v=1700206245', 42.99, 'men'),
(56, 'Light blue denim', 30, 'https://liccstore.com/cdn/shop/files/35_960x1200_crop_center.jpg?v=1699964146', 36.99, 'men'),
(57, 'Light blue denim', 40, 'https://liccstore.com/cdn/shop/files/M0536MSM_2_b0373e57-476d-49ab-8075-809d8e509741_960x1200_crop_center.jpg?v=1693549139', 39.99, 'men'),
(58, 'Black denim', 30, 'https://liccstore.com/cdn/shop/files/34_960x1200_crop_center.jpg?v=1699934079', 34.99, 'men'),
(59, 'Green t shirt', 20, 'https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/186264476--1--1663749538.jpeg', 54.99, 'men'),
(60, 'Black T shirt', 25, 'https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/193664152--1--1672131753.jpeg', 59.99, 'men'),
(61, 'White t shirt', 30, 'https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/214823310--1--1707890487.jpeg', 64.99, 'men'),
(62, 'Blue trouser', 50, 'https://canoetrends.com/cdn/shop/files/CLQ_8025_900x.jpg?v=1686984959', 49.99, 'men'),
(63, 'Black trouser', 30, 'https://canoetrends.com/cdn/shop/files/CLQ_8629_900x.jpg?v=1686982686', 54.99, 'men'),
(64, 'Navy blue trouser', 25, 'https://canoetrends.com/cdn/shop/files/CLQ_9748_900x.jpg?v=1686984260', 59.99, 'men'),
(65, 'White trouser', 40, 'https://canoetrends.com/cdn/shop/products/IMG_4629_1_900x.jpg?v=1639655214', 39.99, 'men'),
(66, 'Black denim', 35, 'https://canoetrends.com/cdn/shop/files/30-06-202335149_900x.jpg?v=1693823217', 42.99, 'men');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(4, 'roshanasuper@gmail.com'),
(5, 'roshanasuper@gmail.com'),
(6, 'roshanaisuran2002@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Useremail` varchar(50) NOT NULL,
  `Useruid` varchar(30) NOT NULL,
  `Userpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Useremail`, `Useruid`, `Userpassword`) VALUES
(6, 'Roshana Isuranga', 'roshanaisuran2002@gmail.com', 'ex4mp1e', '$2y$10$6Vt40Px5UzgeTL/xKa51YOFmc7VDpnT.j2sqiMLWXqFCyo34rHQcG'),
(7, 'Ashini', 'ashinidananjana8@gmail.com', 'AshiR', '$2y$10$5/m2MhnEVuQIjYQMrJegAuaQK18DHRvysb8ytWhNIjTF05lu6J.ua');

-- --------------------------------------------------------

--
-- Table structure for table `usercart`
--

CREATE TABLE `usercart` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `everything`
--
ALTER TABLE `everything`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `usercart`
--
ALTER TABLE `usercart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`),
  ADD KEY `item` (`item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `everything`
--
ALTER TABLE `everything`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usercart`
--
ALTER TABLE `usercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usercart`
--
ALTER TABLE `usercart`
  ADD CONSTRAINT `usercart_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user` (`Userid`),
  ADD CONSTRAINT `usercart_ibfk_2` FOREIGN KEY (`item`) REFERENCES `everything` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
