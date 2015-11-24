-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 08 Octobre 2015 à 16:39
-- Version du serveur :  5.5.41-0+wheezy1
-- Version de PHP :  5.4.36-0+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `jacquin-c`
--

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

CREATE TABLE IF NOT EXISTS `identification` (
  `identifiant` int(11) NOT NULL,
  `login` varchar(36) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `identification`
--

INSERT INTO `identification` (`identifiant`, `login`, `password`) VALUES
(1, 'toto', '$6$RTRffX4m9FBU$GQPzOIuRByEJMeT8r9fydj8eKfi7yurb0SQiT./3pHnG5ni2f96gboxLE4LZgCgEVMWMP6z.AxaOM8KaWJCmn0'),
(2, 'titi', '$6$VsDCW/kqInRv$/bkDT4rmkNLGo704srZE1riI4u7IUUcSuuEqrdkeBJ.3RcsnEO.ihAnWvIWJ0fSoP3hVa/OpWTbhi50xQhzEk1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `identification`
--
ALTER TABLE `identification`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
