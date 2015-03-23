-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Mars 2015 à 09:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestionnotes`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `IdClasse` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  PRIMARY KEY (`IdClasse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`IdClasse`, `Nom`) VALUES
(1, 'TSTMG SIG');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
  `IdEleve` int(11) NOT NULL AUTO_INCREMENT,
  `IdClasse` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Login` varchar(200) NOT NULL,
  `Mdp` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  PRIMARY KEY (`IdEleve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`IdEleve`, `IdClasse`, `Nom`, `Prenom`, `Login`, `Mdp`, `Email`) VALUES
(1, 1, 'Bouzid', 'Maxime', 'mbouzid', 'mbouzid', 'mbouzid@yopmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `fiches`
--

CREATE TABLE IF NOT EXISTS `fiches` (
  `IdFiche` int(11) NOT NULL AUTO_INCREMENT,
  `IdMatiere` int(11) NOT NULL,
  `IdEleve` int(11) NOT NULL,
  `Theme` varchar(50) NOT NULL,
  `Chapitre` varchar(50) NOT NULL,
  `Fiche` text NOT NULL,
  PRIMARY KEY (`IdFiche`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `fiches`
--

INSERT INTO `fiches` (`IdFiche`, `IdMatiere`, `IdEleve`, `Theme`, `Chapitre`, `Fiche`) VALUES
(1, 2, 1, 'Thème : 5 ', '3. Dérivé', 'f(x) = 3x^2+2\r\nf''(x) = 6x');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE IF NOT EXISTS `matieres` (
  `IdMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `IdClasse` int(11) NOT NULL,
  PRIMARY KEY (`IdMatiere`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `matieres`
--

INSERT INTO `matieres` (`IdMatiere`, `Nom`, `IdClasse`) VALUES
(1, 'Mathématique', 1),
(2, 'Français', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `IdNote` int(11) NOT NULL AUTO_INCREMENT,
  `IdEleve` int(11) NOT NULL,
  `IdProfesseurMatiere` int(11) NOT NULL,
  `Note` int(11) NOT NULL,
  `Coefficient` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdNote`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`IdNote`, `IdEleve`, `IdProfesseurMatiere`, `Note`, `Coefficient`) VALUES
(1, 1, 1, 15, NULL),
(2, 1, 1, 18, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `professeurmatiere`
--

CREATE TABLE IF NOT EXISTS `professeurmatiere` (
  `IdProfesseurMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `IdProfesseur` int(11) NOT NULL,
  `IdMatiere` int(11) NOT NULL,
  PRIMARY KEY (`IdProfesseurMatiere`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `professeurmatiere`
--

INSERT INTO `professeurmatiere` (`IdProfesseurMatiere`, `IdProfesseur`, `IdMatiere`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `professeurmatiereclasse`
--

CREATE TABLE IF NOT EXISTS `professeurmatiereclasse` (
  `IdProfesseurMatiereClasse` int(11) NOT NULL AUTO_INCREMENT,
  `IdProfesseurMatiere` int(11) NOT NULL,
  `IdClasse` int(11) NOT NULL,
  PRIMARY KEY (`IdProfesseurMatiereClasse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `professeurmatiereclasse`
--

INSERT INTO `professeurmatiereclasse` (`IdProfesseurMatiereClasse`, `IdProfesseurMatiere`, `IdClasse`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE IF NOT EXISTS `professeurs` (
  `IdProfesseur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Login` varchar(200) NOT NULL,
  `Mdp` varchar(200) NOT NULL,
  PRIMARY KEY (`IdProfesseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `professeurs`
--

INSERT INTO `professeurs` (`IdProfesseur`, `Nom`, `Prenom`, `Email`, `Login`, `Mdp`) VALUES
(1, 'Honvault', 'Mickaël', 'mhonvault@yopmail.com', 'mhonvault', 'mhonvault');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
