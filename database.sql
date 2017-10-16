-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 oct. 2017 à 12:01
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
-- Structure de la table `live`
--

DROP TABLE IF EXISTS `live`;
CREATE TABLE IF NOT EXISTS `live` (
  `id_vid` int(11) NOT NULL AUTO_INCREMENT,
  `lien_vid` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_vid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id_log`, `nom_log`, `mdp_log`) VALUES
(1, 'test@test', 'test'),
(2, 'coto@coto', 'coto'),
(4, 'deqd', 'fezf');

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
-- Structure de la table `retour`
--

DROP TABLE IF EXISTS `retour`;
CREATE TABLE IF NOT EXISTS `retour` (
  `id_retour` int(11) NOT NULL AUTO_INCREMENT,
  `img_retour` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lien_vid_retour` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_retour`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(32) COLLATE utf8_bin NOT NULL,
  `prenom_user` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`) VALUES
(1, 'polochon', 'coussin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
