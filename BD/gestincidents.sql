-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2019 at 11:58 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestincidents`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipements`
--

DROP TABLE IF EXISTS `equipements`;
CREATE TABLE IF NOT EXISTS `equipements` (
  `Equip_Id` varchar(17) NOT NULL,
  `Equip_Type` varchar(20) NOT NULL,
  `Utilisateur_Id` int(11) NOT NULL,
  `Fourniseur_Id` int(2) NOT NULL,
  PRIMARY KEY (`Equip_Id`) USING BTREE,
  KEY `Utilisateur_Id` (`Utilisateur_Id`),
  KEY `Fourniseur_Id` (`Fourniseur_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipements`
--

INSERT INTO `equipements` (`Equip_Id`, `Equip_Type`, `Utilisateur_Id`, `Fourniseur_Id`) VALUES
('1', 'Ordinateur', 1, 1),
('2', 'Imprimante HP LaserJ', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `Etabl_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etabl_Denomination` varchar(50) NOT NULL,
  `Adr_Etabl` varchar(50) NOT NULL,
  `Nr_Tel_Etabl` int(11) NOT NULL,
  PRIMARY KEY (`Etabl_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etablissement`
--

INSERT INTO `etablissement` (`Etabl_Id`, `Etabl_Denomination`, `Adr_Etabl`, `Nr_Tel_Etabl`) VALUES
(1, 'Centre Scolaire des Eperonniers Mercelis', 'Rue Mercelis 36, 1050 Bruxelles', 25126098),
(2, 'CEFA Ixelles Schaerbeek', 'Rue Mercelis 38, 1050 Bruxelles', 25112316),
(3, 'Jardin des écoliers', 'Rue de la croix 37, 1050 Bruxelles', 25112459),
(4, 'Etoile du Berger', 'Rue de la croix 39, 1050 Bruxelles', 25126329);

-- --------------------------------------------------------

--
-- Table structure for table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `Fournisseur_Id` int(2) NOT NULL AUTO_INCREMENT,
  `Fournisseur_Denom` varchar(50) NOT NULL,
  `Adr_Fournisseur` varchar(50) NOT NULL,
  `Tel_Fournisseur` int(9) NOT NULL,
  `Mail_Fournisseur` varchar(50) NOT NULL,
  PRIMARY KEY (`Fournisseur_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`Fournisseur_Id`, `Fournisseur_Denom`, `Adr_Fournisseur`, `Tel_Fournisseur`, `Mail_Fournisseur`) VALUES
(1, 'Elak Electronics', ' Rue des Fabriques 27-31, 1000 Bruxelles', 25122332, 'sales@elak.com'),
(2, 'ESI-Informatique', 'Chaussée de Heusy 225, 4800 Verviers', 87226060, 'info@esi-informatique.com '),
(3, 'Cotubex', 'Avenue des saisons 100, 1000 Bruxelles', 26433666, 'sales@cotubex.be'),
(4, 'Goldtronics', 'Chaussée de Wavfre 276, 1050 Bruxelles', 26462394, 'info@goldtronics.com ');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

DROP TABLE IF EXISTS `incidents`;
CREATE TABLE IF NOT EXISTS `incidents` (
  `Incident_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Panne_Id` int(11) NOT NULL,
  `Equip_Id` varchar(17) NOT NULL,
  `DateHeure_Deb` date NOT NULL,
  `DateHeure_Fin` date NOT NULL,
  `Commentaires` varchar(500) NOT NULL,
  PRIMARY KEY (`Incident_Id`),
  KEY `Equip_Id` (`Equip_Id`),
  KEY `Panne_Id` (`Incident_Id`,`Equip_Id`) USING BTREE,
  KEY `Panne_Id_2` (`Panne_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`Incident_Id`, `Panne_Id`, `Equip_Id`, `DateHeure_Deb`, `DateHeure_Fin`, `Commentaires`) VALUES
(1, 1, '1', '2019-12-29', '2019-12-30', 'Disque dur défecteux');

-- --------------------------------------------------------

--
-- Table structure for table `pannes`
--

DROP TABLE IF EXISTS `pannes`;
CREATE TABLE IF NOT EXISTS `pannes` (
  `Panne_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Panne_Type` varchar(40) NOT NULL,
  PRIMARY KEY (`Panne_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pannes`
--

INSERT INTO `pannes` (`Panne_Id`, `Panne_Type`) VALUES
(1, 'Hardware'),
(2, 'Système exploitation'),
(3, 'Office'),
(4, 'ComptEco'),
(5, 'ProEco'),
(6, 'Bob'),
(7, 'Messagerie');

-- --------------------------------------------------------

--
-- Table structure for table `reletablsite`
--

DROP TABLE IF EXISTS `reletablsite`;
CREATE TABLE IF NOT EXISTS `reletablsite` (
  `Etabl_Id` int(11) NOT NULL,
  `Site_Id` int(11) NOT NULL,
  KEY `Site_Id` (`Site_Id`),
  KEY `Etabl_Id` (`Etabl_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reletablsite`
--

INSERT INTO `reletablsite` (`Etabl_Id`, `Site_Id`) VALUES
(1, 4),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `Site_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Adr_Site` varchar(50) NOT NULL,
  PRIMARY KEY (`Site_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`Site_Id`, `Adr_Site`) VALUES
(1, 'Rue Mercelis 36 1050 Bruxelles'),
(2, 'Rue l\'Olivier 82 1030 Bruxelles'),
(3, 'Rue Mercelis 38, 1050 Bruxelles'),
(4, 'Rue de l\'Etuve 56, 1000 Bruxelles'),
(5, 'Rue de la croix, 37, 1050 Bruxelles'),
(6, 'Rue de la croix, 39, 1050 Bruxelles');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Utilisateur_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_utilisateur` varchar(20) NOT NULL,
  `Prenom_Utilisateur` varchar(30) NOT NULL,
  `Etabl_Id` int(11) NOT NULL,
  `Mail_Utilisateur` varchar(80) NOT NULL,
  `Tel_Utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`Utilisateur_Id`),
  KEY `Etabl_Id` (`Etabl_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Utilisateur_Id`, `Nom_utilisateur`, `Prenom_Utilisateur`, `Etabl_Id`, `Mail_Utilisateur`, `Tel_Utilisateur`) VALUES
(1, 'Iraguha', 'Emmanuel', 1, 'emmanuel.iraguha@cs-em.be', 476248589),
(2, 'Jadoul', 'Laurence', 2, 'ljadoul@hotmail.be', 25112316);

-- --------------------------------------------------------

--
-- Table structure for table `utilsite`
--

DROP TABLE IF EXISTS `utilsite`;
CREATE TABLE IF NOT EXISTS `utilsite` (
  `Utilisateur_Id` int(11) NOT NULL,
  `Site_Id` int(11) NOT NULL,
  KEY `Utilisateur_Id` (`Utilisateur_Id`,`Site_Id`),
  KEY `Site_Id` (`Site_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilsite`
--

INSERT INTO `utilsite` (`Utilisateur_Id`, `Site_Id`) VALUES
(1, 1),
(1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipements`
--
ALTER TABLE `equipements`
  ADD CONSTRAINT `equipements_ibfk_1` FOREIGN KEY (`Utilisateur_Id`) REFERENCES `utilisateurs` (`Utilisateur_Id`),
  ADD CONSTRAINT `equipements_ibfk_2` FOREIGN KEY (`Fourniseur_Id`) REFERENCES `fournisseurs` (`Fournisseur_Id`);

--
-- Constraints for table `incidents`
--
ALTER TABLE `incidents`
  ADD CONSTRAINT `incidents_ibfk_3` FOREIGN KEY (`Panne_Id`) REFERENCES `pannes` (`Panne_Id`),
  ADD CONSTRAINT `incidents_ibfk_4` FOREIGN KEY (`Equip_Id`) REFERENCES `equipements` (`Equip_Id`);

--
-- Constraints for table `reletablsite`
--
ALTER TABLE `reletablsite`
  ADD CONSTRAINT `reletablsite_ibfk_1` FOREIGN KEY (`Site_Id`) REFERENCES `sites` (`Site_Id`),
  ADD CONSTRAINT `reletablsite_ibfk_2` FOREIGN KEY (`Etabl_Id`) REFERENCES `etablissement` (`Etabl_Id`);

--
-- Constraints for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`Etabl_Id`) REFERENCES `etablissement` (`Etabl_Id`);

--
-- Constraints for table `utilsite`
--
ALTER TABLE `utilsite`
  ADD CONSTRAINT `utilsite_ibfk_1` FOREIGN KEY (`Utilisateur_Id`) REFERENCES `utilisateurs` (`Utilisateur_Id`),
  ADD CONSTRAINT `utilsite_ibfk_2` FOREIGN KEY (`Site_Id`) REFERENCES `sites` (`Site_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
