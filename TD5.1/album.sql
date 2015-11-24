-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 08 Octobre 2015 à 16:41
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
-- Structure de la table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `identifiant` int(11) NOT NULL,
  `auteur` varchar(36) NOT NULL,
  `titre` varchar(36) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `album`
--

INSERT INTO `album` (`identifiant`, `auteur`, `titre`, `genre`, `prix`, `image`) VALUES
(1, 'Rene Jacobs', 'Mozart: La Finta Giardiniera', 'classique', 22.89, 'http://infoweb-ens/~jacquin-c/image/Mozart.jpg'),
(2, 'Roger Muraro', 'Ravel: concerto pour la main gauche', 'classique', 11.99, 'http://infoweb-ens/~jacquin-c/image/Ravel.jpg'),
(3, 'Django Reinhardt', 'Djangologie, vol 1', 'jazz', 4.49, 'http://infoweb-ens/~jacquin-c/image/Reinhardt.jpg'),
(4, 'Rabih abou Khalil', 'Hungry people', 'jazz', 8.5, 'http://infoweb-ens/~jacquin-c/image/RabihabouKhalil.jpg'),
(5, 'Dionne Warwick', 'Now', 'soul_funk_rap', 9.99, 'http://infoweb-ens/~jacquin-c/image/Warwick.jpg'),
(6, 'The Black Keys', 'El camino', 'pop_rock', 10.99, 'http://infoweb-ens/~jacquin-c/image/BlackKeys.jpg'),
(7, 'The Rolling Stones', 'GRRR!', 'pop_rock', 12.99, 'http://infoweb-ens/~jacquin-c/image/RollingStones.jpg'),
(8, 'Rone', 'Tohu Bohu', 'electro', 8.59, 'http://infoweb-ens/~jacquin-c/image/Rone.jpg'),
(9, 'The Lytics', 'They told me', 'soul_funk_rap', 11.99, 'http://infoweb-ens/~jacquin-c/image/TheLytics.jpg'),
(10, 'Vitalic', 'Rave age', 'electro', 9.99, 'http://infoweb-ens/~jacquin-c/image/Vitalic.jpg'),
(11, 'Tori Amos', 'Gold Dust', 'pop_rock', 12.49, 'http://infoweb-ens/~jacquin-c/image/ToriAmos.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
