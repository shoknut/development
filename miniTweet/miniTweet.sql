-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Décembre 2018 à 17:09
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miniTweet`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `id` smallint(5) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tweet`
--

INSERT INTO `tweet` (`id`, `pseudo`, `content`, `dateTime`) VALUES
(1, 'Blablabla', 'fsfs<<d', '2018-12-14 00:00:00'),
(2, 'testEZEZEZEZ', 'fere', '2018-12-14 12:35:43'),
(3, 'shoknut', 'ezezez', '2018-12-14 12:36:23'),
(4, 'fqsfqs', 'fqfsq', '2018-12-14 12:55:42');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
