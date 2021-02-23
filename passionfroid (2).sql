-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 fév. 2021 à 11:54
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
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id_imag` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_imag` varchar(50) NOT NULL,
  `Type_imag` varchar(255) NOT NULL,
  `PhotoProd` varchar(50) NOT NULL,
  `Photohum` varchar(50) NOT NULL,
  `Photoinstitu` varchar(50) NOT NULL,
  `Format` varchar(50) NOT NULL,
  `Droits` varchar(50) NOT NULL,
  `Copyright` varchar(50) NOT NULL,
  `Date_fin` varchar(50) DEFAULT NULL,
  `Tags` varchar(50) NOT NULL,
  `Credits_pho` varchar(50) NOT NULL,
  `catego` varchar(50) NOT NULL,
  `Lien_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id_imag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_file`
--

DROP TABLE IF EXISTS `tbl_file`;
CREATE TABLE IF NOT EXISTS `tbl_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `photoprod` varchar(255) NOT NULL,
  `photohum` varchar(255) NOT NULL,
  `photoinsti` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
