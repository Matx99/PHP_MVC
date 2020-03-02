-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 13 Décembre 2019 à 11:02
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `UsersManager`
--

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `postalCode`, `city`, `admin`) VALUES
(1, '', '', '', '', '', '', '', 0),
(2, 'a@gmail', 'b', 'd', 'c', 'e', '77', 'jou', 0),
(3, '', '', '', '', '', '', '', 0),
(4, 'a@m', 'a@m', 'a@m', 'a@m', 'a@m', 'a@m', 'a@m', 0),
(5, 'c@mail', 'c', 'c', 'c', 'c', 'c', ' 777', 0),
(6, 'c@mail', 'c', 'c', 'c', 'c', 'c', ' 777', 0),
(7, 'c@mail', 'c', 'c', 'c', 'c', 'c', ' 777', 0),
(8, 'hello@g', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 0),
(9, 'bjr@gmail', 'jessay', 'et', 'qqch', 'toi', '58777', 'ca va?', 0),
(10, 'bjr@gmail', 'jessay', 'et', 'qqch', 'toi', '58777', 'ca va?', 0),
(11, 'a@m', 'bxe', 'bvfr', 'bce', ' fedn', 'vfrn', 'vf n', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
