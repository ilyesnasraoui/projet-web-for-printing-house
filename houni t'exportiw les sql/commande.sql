-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2019 at 06:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s.i.a.d`
--

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `Id_cmd` int(11) NOT NULL AUTO_INCREMENT,
  `date_Cmd` date NOT NULL,
  `montant_Cmd` float NOT NULL,
  `etat_Cmd` varchar(30) NOT NULL,
  `Lieu_livraison` varchar(30) NOT NULL,
  `prix_livraison` int(11) NOT NULL,
  `delai_livraison` varchar(30) NOT NULL,
  `Id_livreur` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `Id_Produit` int(11) NOT NULL,
  `mode_payment` varchar(30) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`Id_cmd`),
  KEY `fk_Id_livreur` (`Id_livreur`),
  KEY `fk_Id_Client` (`Id_Client`),
  KEY `fk_Id_Produit` (`Id_Produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
