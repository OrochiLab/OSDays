-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Décembre 2014 à 03:39
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
  `typeReg` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `key` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='dateReg' AUTO_INCREMENT=78 ;

--
-- Contenu de la table `guest`
--

INSERT INTO `guest` (`ID`, `nom`, `email`, `dateReg`, `typeReg`, `status`, `key`) VALUES
(77, 'ouasmine med amine', 'm.amine.osm@gmail.com', 'Sunday 14th of December 2014 03:37:49 AM', 'Formations', 'enable', '5499792adcf235253cb8fec677679736');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `guest`
--
ALTER TABLE `guest`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `guest`
--
ALTER TABLE `guest`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
