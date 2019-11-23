-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 08:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_attilatakacs_travelmatic`
--
CREATE DATABASE IF NOT EXISTS `cr11_attilatakacs_travelmatic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_attilatakacs_travelmatic`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country`, `name`) VALUES
(1, 'Hungary', 'Budapest'),
(2, 'Austria', 'Vienna'),
(3, 'Austria', 'Salzburg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `web` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(55) NOT NULL,
  `fk_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `image`, `name`, `date`, `time`, `web`, `price`, `address`, `fk_city`) VALUES
(1, 'https://budapestbylocals.b-cdn.net/wp-content/uploads/2015/01/mangalica_festival_budapest_red_pig.jpg', 'Mangalica Festival', '2020-02-11', '00:00:00', 'https://www.budapestbylocals.com/event/mangalica-festival/', 15, 'Szabadság tér', 1),
(2, 'https://bbj.hu/images2/201911/15744254118047rtEym25iyFu_L.jpg', 'Foreign and Security Policy Conference Budapest 2019', '2019-11-26', '09:00:00', 'https://www.eventbrite.com/e/foreign-and-security-policy-conference-budapest-2019-tickets-77117062209?aff=ebdssbcitybrowse', 25, 'Petőfi Irodalmi Múzeum  16 Károlyi utca', 1),
(3, 'https://www.wipo.int/export/sites/www/wipo_magazine/images/2019_04_art_5_1_845.jpg', 'Teqball World Championships 2019 (December 6-8) with Ro', '2019-12-07', '12:00:00', 'https://www.eventbrite.com/e/teqball-world-championships-2019-tickets-82943354807?aff=ebdssbcitybrowse', 19, 'Hungexpo  Albertirsai út 10  Pavilon G', 1),
(4, 'https://images.salzburgcb.com/scb/focus/50/50/448/280/user_upload/Images/Dienstleister/Kongress_Gastronomie_Salzburg/1-Wir_stemmen_Grossevents.jpg', 'Der Salzburger Event-Service-Anbieter für das leibliche', '2020-02-11', '09:00:00', 'http://www.kongressgastro.com/2019/', 49, 'Seilerstraße 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `address` varchar(55) NOT NULL,
  `fk_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `image`, `name`, `phone`, `type`, `description`, `web`, `address`, `fk_city`) VALUES
(1, 'https://images.ctfassets.net/314o13npeir2/3EzJ6RnASpAbAjJM5o3vAx/0672cfdda40eb7919d050c5ec3686a2d/mazel-tov-budapest-51.jpg?w=450&h=270&q=80&fm=webp&fit=fill&f=center', 'Mazel Tov ', '+3670626561', 'hungarian', 'Head to Mazel Tov if you like the ruin bar concept in theory, but prefer things more upscale. This Middle Eastern restaurant inside Budapest\'s buzzing Jewish Quarter does have a disintegrating facade like other ruin bars, but the inside is a different sto', 'https://www.facebook.com/mazeltovbp/', 'Akácfa u. 47, 1072', 1),
(2, 'https://images.ctfassets.net/314o13npeir2/10TVpNMWj9vDedWTxnf3jM/439c91515f0cf3cb4ff823b08a5d10de/kiosk-restaurant-budapest-19.jpg?w=1920&q=80', 'Kiosk', '+3670311123', 'tapas bar', 'Kiosk is a buzzing restaurant and cocktail bar in the heart of Budapest, favored by trendy locals and plenty of tourists. Kiosk has at least two things going for it: a stunning view of the Danube and the Elisabeth Bridge from its outdoor patio, and a dram', 'https://www.facebook.com/kiosk.budapest/?fref=ts', 'Március 15. tér 4, 1056', 1),
(3, 'https://media-cdn.tripadvisor.com/media/photo-s/0d/ac/34/a1/erich.jpg', 'Erich', '+43 1 89061', 'viennese', 'What is it? A subterranean bar-slash-restaurant in the cool 7th district. Erich is tucked away down the side of Sankt-Ulrichsplatz, and it’s easy to walk past it – but you’ll be glad you didn’t. From breakfast tacos to salmon poke bowls and dairy-free sun', 'https://erichwien.at/', 'NEUSTIFTGASSE 27 1070', 2),
(4, 'https://www.kekinwien.at/wp-content/uploads/images/2016/09/mamaliu-5-kekinwien.jpg', 'Mama Liu & Sons', '+4301 58636', 'chinese', 'Great value dim sum, hot pot and noodles in a loft-style dining room – it’s easy on the wallet, but a night at Mama Liu & Sons still feels like a treat.', 'http://www.mamaliuandsons.at/', 'Gumpendorfer Str. 29, 1060', 2),
(5, 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fcdn-image.travelandleisure.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fmedium_2x%2Fpublic%2F1458936199%2Fphil-vienna-vie0316.jpg%3Fitok%3DGPxp_2P9&c=sc&poi=face&q=85', 'phil', '01 5810489', 'bar', 'A bookshop that’s also a bar, which also does a banging breakfast? It can only be Cafe Phil. Vienna’s quirkiest hangout shouldn’t work, but it does – crash on the comfy leather sofas with a plate of falafel and an arty zine, and watch the world go by thro', 'https://phil.business.site/#summary', 'Gumpendorfer Straße 10 - 12 1060', 2),
(6, 'http://thevoyageur.net/wp-content/uploads/2014/08/mochi_vienna_austria_thevoyageur_07-1500x1000.jpg?x10692', 'Mochi', '01 – 925 13', 'japanese', 'Vienna’s best-loved Japanese-fusion restaurant specialises in sensational sushi and sashimi. From dragon rolls to thinly sliced Iberico pork with truffle teriyaki glaze and dreamy donburi bowls, this is the kind of place where you’ll want to order the ent', 'https://www.mochi.at/mochi/', 'Praterstraße 15 1020', 2),
(7, 'https://www.mmfb.at/wp-content/uploads/2017/11/PizzeriaRandaleHeader-1320x768.jpg', 'Pizza Randale', ' 0650 855 0', 'italian', 'Formerly a grungy bar, Randale has livened up Kettenbrueckengasse with its ‘gram-friendly decor and creative pizzas: you can pick from the likes of fennel-infused boar sausage, walnuts and truffle oil, or rocket, tagliata and tomatoes.', 'https://www.facebook.com/pizzarandale', 'Kettenbrückengasse 1, 1050', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(9, 'attila', 'attila@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(10, 'lilla', 'lilla@gmail.com', '481f6cc0511143ccdd7e2d1b1b94faf0a700a8b49cd13922a70b5ae28acaa8c5', 'user'),
(11, 'admin', 'admin@gmail.com', 'b6c5f112b3116200978a4bff32d683e907aadd6b80899e89908970bfb26b16bd', 'admin'),
(12, 'lillattila', 'lillattila@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(13, 'szabi', 'szabi@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(14, 'Mate', 'mate@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(15, 'francisco', 'francisco@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city` (`fk_city`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city` (`fk_city`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`fk_city`) REFERENCES `city` (`id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`fk_city`) REFERENCES `city` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
