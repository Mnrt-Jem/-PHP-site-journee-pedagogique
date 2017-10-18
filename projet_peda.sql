-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 oct. 2017 à 13:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_peda`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id_accueil` int(11) NOT NULL AUTO_INCREMENT,
  `text_accueil` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_accueil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `message` varchar(180) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `lien_youtube`
--

DROP TABLE IF EXISTS `lien_youtube`;
CREATE TABLE IF NOT EXISTS `lien_youtube` (
  `id_ly` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom_lien` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_ly`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `lien_youtube`
--

INSERT INTO `lien_youtube` (`id_ly`, `lien`, `nom_lien`) VALUES
(3, 'https://www.youtube.com/embed/oAiseNw9M18', 'vidéo saint vincent ');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `nom_log` varchar(32) COLLATE utf8_bin NOT NULL,
  `mdp_log` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id_log`, `nom_log`, `mdp_log`) VALUES
(5, 'test@test', 'test'),
(2, 'admin', 'passwordadmin');

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

DROP TABLE IF EXISTS `programme`;
CREATE TABLE IF NOT EXISTS `programme` (
  `id_prog` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prog` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_prog` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `text_prog` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id_prog`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `programme`
--

INSERT INTO `programme` (`id_prog`, `nom_prog`, `img_prog`, `text_prog`) VALUES
(1, 'pilo', NULL, 'pilo2										bite'),
(4, 'Jm le plus beau', NULL, 'jm est beau');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoignage` int(11) NOT NULL AUTO_INCREMENT,
  `img_temoignage` varchar(255) NOT NULL,
  PRIMARY KEY (`id_temoignage`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoignage`, `img_temoignage`) VALUES
(1, 'test1.png'),
(2, 'test2.png'),
(3, 'test3.png'),
(4, 'test4.png'),
(5, 'test5.png'),
(6, 'test6.png'),
(7, 'test7.png'),
(8, 'test8.png'),
(9, 'test9.png'),
(10, 'test10.png'),
(11, 'test11.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
