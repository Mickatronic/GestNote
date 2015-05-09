-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 09 Mai 2015 à 13:29
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
-- Structure de la table `administrateurs`
--

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `IdAdministrateur` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `Validation` varchar(100) NOT NULL,
  `Type` int(3) NOT NULL,
  PRIMARY KEY (`IdAdministrateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`IdAdministrateur`, `Nom`, `Prenom`, `Email`, `Login`, `Mdp`, `Validation`, `Type`) VALUES
(100, 'Gombet', 'Felicite', 'mdomba@gmail.com', 'mfgd', 'mfgd', 'mfgd', 0);

-- --------------------------------------------------------

--
-- Structure de la table `applis`
--

CREATE TABLE IF NOT EXISTS `applis` (
  `IdAppli` int(200) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `Utilite` varchar(500) NOT NULL,
  `Ajouter` varchar(5000) NOT NULL,
  `IdAppliCategorie` int(11) NOT NULL,
  PRIMARY KEY (`IdAppli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `applis`
--

INSERT INTO `applis` (`IdAppli`, `Nom`, `Utilite`, `Ajouter`, `IdAppliCategorie`) VALUES
(6, 'KKKK', 'JHFGTUFD', '', 0),
(9, '''MO''', '''MOOOO''', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `appliscategories`
--

CREATE TABLE IF NOT EXISTS `appliscategories` (
  `IdAppliCategorie` int(200) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `IdAppli` int(11) NOT NULL,
  PRIMARY KEY (`IdAppliCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `appliscategories`
--

INSERT INTO `appliscategories` (`IdAppliCategorie`, `Nom`, `IdAppli`) VALUES
(9, 'Gérer son temps', 0);

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `IdClasse` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `TSTMG SIG` int(11) NOT NULL,
  `IdProfesseurMatiereClasse` int(200) NOT NULL,
  PRIMARY KEY (`IdClasse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`IdClasse`, `Nom`, `TSTMG SIG`, `IdProfesseurMatiereClasse`) VALUES
(1, 'Terminale STMG', 0, 1),
(2, 'Terminale L', 0, 1),
(3, 'Terminale ES', 0, 0),
(4, 'Terminale S', 0, 0),
(5, 'Terminale Pro', 0, 0),
(6, 'Première STMG ', 0, 0),
(7, 'Première L', 0, 0),
(8, 'Première ES', 0, 0),
(9, 'Première S', 0, 0),
(10, 'Première Pro', 0, 0),
(11, 'Seconde', 0, 0),
(12, 'Seconde Pro', 0, 1),
(20, '', 0, 0);

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
  `Validation` varchar(100) NOT NULL,
  `Date` int(6) NOT NULL,
  `Type` int(2) NOT NULL,
  PRIMARY KEY (`IdEleve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`IdEleve`, `IdClasse`, `Nom`, `Prenom`, `Login`, `Mdp`, `Email`, `Validation`, `Date`, `Type`) VALUES
(4, 2, 'DOMBA', 'Marie', 'mdomba', 'mdomba', 'mfdomba@gmail.com', 'mdomba', 5, 2);

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
  `Ajouter` varchar(200) NOT NULL,
  `IdClasse` int(11) NOT NULL,
  PRIMARY KEY (`IdFiche`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `fiches`
--

INSERT INTO `fiches` (`IdFiche`, `IdMatiere`, `IdEleve`, `Theme`, `Chapitre`, `Fiche`, `Ajouter`, `IdClasse`) VALUES
(18, 17, 4, 'Sujet d''étude ', 'Londres', 'opopopop', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE IF NOT EXISTS `matieres` (
  `IdMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `IdClasse` int(11) NOT NULL,
  `IdProfesseurMatiereClasse` int(200) NOT NULL,
  PRIMARY KEY (`IdMatiere`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `matieres`
--

INSERT INTO `matieres` (`IdMatiere`, `Nom`, `IdClasse`, `IdProfesseurMatiereClasse`) VALUES
(1, 'Mathématiques ', 1, 0),
(2, 'Anglais', 1, 0),
(3, 'Espagnol', 1, 0),
(4, 'Allemand', 1, 0),
(5, 'Philosophie', 1, 0),
(6, 'Histoire', 1, 0),
(7, 'Géographie', 1, 0),
(8, 'SIG', 1, 0),
(10, 'RH', 1, 0),
(12, 'Mathématiques ', 2, 0),
(13, 'Anglais', 2, 0),
(14, 'Espagnol', 2, 0),
(15, 'Allemand', 2, 0),
(16, 'Philosophie', 2, 0),
(17, 'Histoire', 2, 0),
(18, 'Géographie', 2, 0),
(19, 'Mathématiques ', 3, 0),
(20, 'Anglais', 3, 0),
(21, 'Espagnol', 3, 0),
(22, 'Allemand', 3, 0),
(23, 'Philosophie', 3, 0),
(24, 'Histoire', 3, 0),
(25, 'Géographie', 3, 0),
(26, 'SES', 3, 0),
(27, 'Mathématiques ', 4, 0),
(28, 'Physique', 4, 0),
(29, 'SVT', 4, 0),
(30, 'Anglais', 4, 0),
(31, 'Espagnol', 4, 0),
(32, 'Allemand', 4, 0),
(33, 'Philosophie', 4, 0);

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
  `Validation` varchar(100) NOT NULL,
  PRIMARY KEY (`IdProfesseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `professeurs`
--

INSERT INTO `professeurs` (`IdProfesseur`, `Nom`, `Prenom`, `Email`, `Login`, `Mdp`, `Validation`) VALUES
(1, 'Honvault', 'Mickaël', 'mhonvault@yopmail.com', 'mhonvault', 'mhonvault', 'mhonvault');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
