-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 27 Novembre 2018 à 16:46
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` tinyint(3) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `author`
--

INSERT INTO `author` (`id`, `firstName`, `lastName`) VALUES
(1, 'Estelle', 'Ho');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` tinyint(3) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'divers');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` mediumint(8) NOT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `content` text NOT NULL,
  `creationTime` datetime NOT NULL,
  `post_id` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `nickname`, `content`, `creationTime`, `post_id`) VALUES
(1, 'test', 'test 1', '2018-11-26 16:06:57', 1),
(2, 'shoknut', 'super blog !', '2018-11-26 16:29:36', 1),
(4, 'test 2', 'je teste', '2018-11-26 16:34:38', 1),
(5, 'test', 'teste', '2018-11-26 16:36:05', 2);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` smallint(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `creationTime` datetime NOT NULL,
  `author_id` tinyint(3) NOT NULL,
  `categoryId` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `creationTime`, `author_id`, `categoryId`) VALUES
(2, 'TP blog - 2e article', 'Lorem ipsum', '2018-11-26 16:32:31', 1, 1),
(7, 'TP Blog - Le super article n°4 !', 'Enfin le delete marche ! maintenant il faut passer à l\'update !', '2018-11-27 15:10:46', 1, 1),
(8, 'TP Blog - Le super article n°5 !', 'Aller au boulot ! il faut arrêter de rêvasser !', '2018-11-27 15:12:40', 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
