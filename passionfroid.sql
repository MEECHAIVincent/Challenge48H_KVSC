-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 fév. 2021 à 13:35
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
-- Base de données : `passionfroid`
--

-- --------------------------------------------------------

--
-- Structure de la table `photosambience`
--

DROP TABLE IF EXISTS `photosambience`;
CREATE TABLE IF NOT EXISTS `photosambience` (
  `id_pho` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Type_img` varchar(50) NOT NULL,
  `PhotoP` varchar(50) NOT NULL,
  `Photoh` varchar(50) NOT NULL,
  `Photoinst` varchar(50) NOT NULL,
  `Fromat` varchar(50) NOT NULL,
  `Droits` varchar(50) NOT NULL,
  `Copyright` varchar(50) NOT NULL,
  `Date_fin` date NOT NULL,
  `Tagd` varchar(50) NOT NULL,
  `Credits_pho` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pho`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photosproduits`
--

DROP TABLE IF EXISTS `photosproduits`;
CREATE TABLE IF NOT EXISTS `photosproduits` (
  `id_pho` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Type_img` varchar(50) NOT NULL,
  `PhotoP` varchar(50) NOT NULL,
  `Photoh` varchar(50) NOT NULL,
  `Photoinst` varchar(50) NOT NULL,
  `Fromat` varchar(50) NOT NULL,
  `Droits` varchar(50) NOT NULL,
  `Copyright` varchar(50) NOT NULL,
  `Date_fin` date NOT NULL,
  `Tagd` varchar(50) NOT NULL,
  `Credits_pho` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pho`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
