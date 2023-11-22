-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 avr. 2023 à 12:56
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bonbons`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdp`) VALUES
(7, 'ibra', '6d027ca47c9ecde441ee99bc221cbf849ec84cfd'),
(3, 'ibrahim', '098f6bcd4621d373cade4e832627b4f6'),
(5, 'ibra', '154641d03566a904aec5bb2e25d32efa06876e95a47e9f749128ac422a5652ba');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
(1, 'bananes', '0.48', 'bananes.jpg'),
(2, 'chamallow', '0.48', 'chamallow.jpg'),
(3, 'coca', '0.47', 'coca.jpg'),
(4, 'colorado', '0.47', 'colorado.jpg'),
(6, 'dragolo', '0.48', 'dragolo.jpg'),
(7, 'world', '0.47', 'world.jpg'),
(8, 'happy', '0.48', 'happy.jpg'),
(9, 'melange', '5.00', 'melange.jpg'),
(10, 'miami', '0.48', 'miami.jpg'),
(11, 'nounours', '0.48', 'nounours.jpg'),
(12, 'oeufs', '0.48', 'oeufs.jpg'),
(13, 'rainbow', '0.48', 'rainbow.jpg'),
(14, 'shtroumpf', '0.48', 'shtroumpf.jpg'),
(15, 'frites', '0.45', 'frites.jpg'),
(17, 'tagada', '0.25', 'tagada.jpg'),
(20, 'pikcola', '0.65', 'pikcola.jpg'),
(22, 'fruitkipik', '0.95', 'fruikipik.jpg'),
(28, 'CarEnSac', '0.25', 'car_en_sac.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
