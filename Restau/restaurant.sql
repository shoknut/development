-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 27 Décembre 2018 à 15:12
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` smallint(5) NOT NULL,
  `id_user` smallint(5) NOT NULL,
  `dateBook` date NOT NULL,
  `timeBook` time NOT NULL,
  `nbPeople` int(20) NOT NULL,
  `creationTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `dateBook`, `timeBook`, `nbPeople`, `creationTime`) VALUES
(1, 1, '2018-01-01', '15:12:00', 1, '2018-12-18 15:33:21'),
(2, 2, '2018-01-01', '11:00:00', 1, '2018-12-19 11:53:49'),
(3, 2, '2019-02-12', '19:30:00', 3, '2018-12-19 11:54:42');

-- --------------------------------------------------------

--
-- Structure de la table `Meal`
--

CREATE TABLE `Meal` (
  `id` smallint(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `QuantityInStock` int(100) NOT NULL,
  `BuyPrice` double NOT NULL,
  `SalePrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Meal`
--

INSERT INTO `Meal` (`id`, `Name`, `Photo`, `Description`, `QuantityInStock`, `BuyPrice`, `SalePrice`) VALUES
(1, 'American Burger', 'american_burger.jpg', 'Véritable classique du burger. Ce burger double cut (2 étages) est garni de 2 steaks hachés pur bœuf, de la salade croquante, des rondelles d\'oignon, des morceaux de cornichon et de sauce burger. ', 10, 2.6, 9.8),
(2, 'Chicken Wings Bucket (24 pièces)', 'bucket_chicken.jpg', 'Ailes de poulet légèrement épicées.', 10, 10.3, 28.5),
(3, 'Kid Burger', 'kid_burger.png', 'Le préféré de nos kids ! Un hamburger composé d\'un steak haché pur bœuf, de ketchup et cornichons.', 10, 3.5, 7.5),
(4, 'Onion Snacks (6 pièces)', 'oignon_rings.jpg', 'Véritable rondelles d\'oignons dans une panure croquante.', 10, 1.4, 6.2),
(9, 'French Fries', 'french_fries.png', 'Authentique et au bon goût de pommes de terre, ces frites avec peau sont simples et efficaces !', 30, 1.3, 4.2),
(10, 'Original Potatoes', 'original_potatoes.jpg', 'Quartiers de pomme de terre, légèrement épicés.', 60, 1.3, 4.2),
(11, 'Corn (2 pièces)', 'corn.png', 'Épis de maïs cuit à la vapeur à savourer avec une pincée de sel. Accompagne parfaitement les Kentucky Wings.', 35, 1.5, 3.5),
(12, 'Ben & Jerry\'s Peanut Butter 150ml', 'ben_jerry_peanut_butter.jpeg', 'Crème glacée au beurre de cacahuète avec des morceaux de pâte au beurre de cacahuète cacaotés. Contient: œufs, arachide, soja, lait', 40, 1.8, 4.2),
(13, 'Ben & Jerry\'s Wich Cookie Dough 80ml', 'ben_jerry_wich_cookie_dough.jpeg', 'Crème glacée vanille avec des morceaux de pâte à cookie aux pépites de chocolat entre deux cookies moelleux aux pépites de chocolat. Contient: œuf, arachide, soja, lait, céréales (gluten)', 40, 0.9, 3.5),
(14, 'Coca Cola 33cl', 'coca.jpg', 'Le goût original de Coca Cola', 100, 0.5, 2.2),
(15, 'Coca Cola Zero 33cl', 'coca_zero.jpg', 'Le goût de Coca Cola avec zero sucres et zero calories !', 100, 0.5, 2.2),
(16, '7 Up 33cl', '7_up.png', 'La célèbre limonade rafraichissante !', 100, 0.5, 2.2),
(17, 'Oasis Tropical 33cl', 'oasis_tropical.png', 'Le bon goût des fruits associé à de l\'eau de source !', 100, 0.5, 2.2),
(18, 'Fanta Orange 33cl', 'fanta.jpg', 'Boisson rafraîchissante au jus d\'orange. Goût fruité et savoureux !', 100, 0.5, 2.2),
(19, 'Dr Pepper 33cl', 'dr_pepper.png', 'La véritable référence américaine en terme de soda, Dr Pepper est un mélange unique de 23 saveurs. Son léger goût d\'amande si subtile est tout à fait incomparable dont la formule n\'a pas changé depuis que Charles Alderton l\'a mise au point dans une quincaillerie de Waco, Texas, en 1885.', 100, 0.5, 2.2),
(20, 'Eau 50cl', 'eau.jpg', 'de la bonne eau', 10, 1, 0.3);

-- --------------------------------------------------------

--
-- Structure de la table `orderDetail`
--

CREATE TABLE `orderDetail` (
  `id` smallint(5) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `priceEach` float NOT NULL,
  `order_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `orderDetail`
--

INSERT INTO `orderDetail` (`id`, `meal_id`, `quantityOrdered`, `priceEach`, `order_id`) VALUES
(1, 11, 3, 3.5, 1),
(2, 1, 1, 9.8, 1),
(3, 11, 3, 3.5, 2),
(4, 1, 1, 9.8, 2),
(5, 11, 3, 3.5, 3),
(6, 1, 1, 9.8, 3),
(7, 11, 3, 3.5, 4),
(8, 1, 1, 9.8, 4),
(9, 13, 1, 3.5, 5),
(10, 17, 1, 2.2, 5),
(11, 19, 1, 2.2, 5),
(12, 4, 1, 6.2, 5),
(13, 1, 1, 9.8, 6),
(14, 18, 1, 2.2, 6),
(15, 10, 3, 4.2, 7),
(16, 3, 3, 7.5, 7),
(17, 11, 3, 3.5, 8),
(18, 18, 3, 2.2, 8),
(19, 10, 3, 4.2, 9),
(20, 1, 3, 9.8, 9),
(21, 18, 3, 2.2, 9),
(22, 9, 3, 4.2, 10),
(23, 4, 3, 6.2, 10),
(24, 19, 3, 2.2, 10),
(25, 9, 3, 4.2, 11),
(26, 19, 3, 2.2, 11),
(27, 2, 3, 28.5, 11),
(28, 4, 5, 6.2, 12),
(29, 9, 5, 4.2, 12),
(30, 10, 2, 4.2, 13),
(31, 2, 2, 28.5, 13),
(32, 18, 2, 2.2, 13),
(33, 13, 6, 3.5, 14),
(34, 13, 6, 3.5, 15),
(35, 1, 1, 9.8, 15),
(36, 2, 1, 28.5, 15),
(37, 13, 6, 3.5, 16),
(38, 1, 1, 9.8, 16),
(39, 2, 1, 28.5, 16),
(40, 13, 6, 3.5, 17),
(41, 1, 1, 9.8, 17),
(42, 2, 1, 28.5, 17),
(43, 13, 6, 3.5, 18),
(44, 1, 1, 9.8, 18),
(45, 2, 1, 28.5, 18),
(46, 13, 6, 3.5, 19),
(47, 1, 1, 9.8, 19),
(48, 2, 1, 28.5, 19),
(49, 13, 6, 3.5, 20),
(50, 1, 1, 9.8, 20),
(51, 2, 1, 28.5, 20),
(52, 13, 6, 3.5, 21),
(53, 1, 1, 9.8, 21),
(54, 2, 1, 28.5, 21);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` smallint(5) NOT NULL,
  `id_user` smallint(5) NOT NULL,
  `orderDate` datetime NOT NULL,
  `totalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`order_id`, `id_user`, `orderDate`, `totalPrice`) VALUES
(1, 2, '2018-12-20 00:00:00', 20.3),
(2, 2, '2018-12-21 00:00:00', 20.3),
(3, 2, '2018-12-21 00:00:00', 20.3),
(4, 2, '2018-12-21 00:00:00', 20.3),
(5, 2, '2018-12-21 00:00:00', 14.1),
(6, 2, '2018-12-21 00:00:00', 12),
(7, 2, '2018-12-21 00:00:00', 35.1),
(8, 2, '2018-12-21 00:00:00', 17.1),
(9, 2, '2018-12-21 00:00:00', 48.6),
(10, 2, '2018-12-21 00:00:00', 37.8),
(11, 2, '2018-12-21 00:00:00', 104.7),
(12, 2, '2018-12-21 00:00:00', 52),
(13, 2, '2018-12-21 12:17:12', 69.8),
(14, 2, '2018-12-21 12:38:31', 21),
(15, 2, '2018-12-21 12:44:23', 59.3),
(16, 2, '2018-12-21 14:02:37', 59.3),
(17, 2, '2018-12-21 14:10:12', 59.3),
(18, 2, '2018-12-21 14:11:29', 59.3),
(19, 2, '2018-12-21 14:11:44', 59.3),
(20, 2, '2018-12-21 14:32:57', 59.3),
(21, 2, '2018-12-21 15:31:28', 59.3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `birthdayDate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipCode` varchar(15) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `creationTime` datetime NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `lastName`, `firstName`, `birthdayDate`, `address`, `city`, `zipCode`, `phone`, `mail`, `password`, `creationTime`, `role`) VALUES
(1, 'test', 'test1', '1940-01-01', 'gfezgezg', 'grzgzrgz', '45644565', '458487845', 'test@test.com', '$2y$10$TBDhc3iG.O93CzOKwyP33eun4ReWKm7FNZ1/7vn3TeWmwUwpfWoai', '2018-12-18 10:54:16', ''),
(2, 'caca', 'prout', '1940-01-01', 'chez caca prout', 'cacaCity', '45644565', '478774725', 'caca@prout.com', '$2y$10$1B9Rbv6VXQuQSDuqy9zyWe0t84UNAmI3zyvhp6vE0GCD6rTPSAfgm', '2018-12-19 10:14:14', ''),
(3, 'Ho', 'Estelle', '1989-04-30', 'fksjdfklj', 'fksdjfkl', '454663', '01574873312', 'estelle@ho.com', '$2y$10$jUBGmPjka5iYdsE4VzhzGOPP4ySRRyr6mMoNrBmrHPbRN6TQZCSvi', '2018-12-21 15:37:02', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Meal`
--
ALTER TABLE `Meal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orderDetail`
--
ALTER TABLE `orderDetail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Meal`
--
ALTER TABLE `Meal`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `orderDetail`
--
ALTER TABLE `orderDetail`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
