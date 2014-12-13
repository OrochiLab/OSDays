-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 13 Décembre 2014 à 19:20
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `osdbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
`ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateReg` varchar(255) NOT NULL,
  `typeReg` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='dateReg' AUTO_INCREMENT=35 ;

--
-- Contenu de la table `guest`
--

INSERT INTO `guest` (`ID`, `nom`, `email`, `dateReg`, `typeReg`) VALUES
(11, 'OUASMINE Mohammed Amine', 'm.amine.osm@gmail.com', 'Saturday 13th of December 2014 06:06:31 PM', 'Conferences'),
(12, 'ouasmine', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:10:15 PM', 'Formations'),
(13, 'aaaa', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:20:41 PM', 'Conferences'),
(14, 'aaaa', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:23:21 PM', 'Conferences'),
(15, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:24:08 PM', 'Formations'),
(16, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:28:44 PM', 'Formations'),
(17, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:29:05 PM', 'Formations'),
(18, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:29:30 PM', 'Formations'),
(19, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:30:10 PM', 'Formations'),
(20, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:30:12 PM', 'Formations'),
(21, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:34:49 PM', 'Formations'),
(22, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:35:02 PM', 'Formations'),
(23, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:36:00 PM', 'Formations'),
(24, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:36:02 PM', 'Formations'),
(25, 'mouad', 'm.amine@gmail.com', 'Saturday 13th of December 2014 06:36:15 PM', 'Formations'),
(26, 'amine', 'm@mail.com', 'Saturday 13th of December 2014 06:39:35 PM', 'Formations'),
(27, 'amine', 'm@mail.com', 'Saturday 13th of December 2014 06:40:30 PM', 'Formations'),
(28, 'amine', 'm@mail.com', 'Saturday 13th of December 2014 06:40:32 PM', 'Formations'),
(29, 'amine', 'a@gmail.com', 'Saturday 13th of December 2014 06:45:11 PM', 'Formations'),
(30, 'amine', 'a@gmail.com', 'Saturday 13th of December 2014 06:45:14 PM', 'Formations'),
(31, 'amine', 'a@gmail.com', 'Saturday 13th of December 2014 06:45:15 PM', 'Formations'),
(32, 'amine', 'a@gmail.com', 'Saturday 13th of December 2014 06:45:44 PM', 'Formations'),
(33, 'amine', 'a@gmail.com', 'Saturday 13th of December 2014 06:45:45 PM', 'Formations'),
(34, 'aaaa', 'a@gmail.com', 'Saturday 13th of December 2014 06:46:25 PM', 'Formations');

-- --------------------------------------------------------

--
-- Structure de la table `newletter`
--

CREATE TABLE IF NOT EXISTS `newletter` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `guest`
--
ALTER TABLE `guest`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `newletter`
--
ALTER TABLE `newletter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `guest`
--
ALTER TABLE `guest`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `newletter`
--
ALTER TABLE `newletter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
