-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2019 at 07:17 PM
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
-- Database: `s_i_a_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `carte_fidelite`
--

DROP TABLE IF EXISTS `carte_fidelite`;
CREATE TABLE IF NOT EXISTS `carte_fidelite` (
  `id_carte` int(11) NOT NULL AUTO_INCREMENT,
  `points` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_carte`),
  KEY `fl_id_client` (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `mode_paiment` varchar(30) NOT NULL,
  `etat_commande` varchar(30) NOT NULL,
  `id_panier` int(11) NOT NULL,
  `total_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `fk_id_panier` (`id_panier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `id_livreur` int(11) NOT NULL,
  `lieu_livraison` int(11) NOT NULL,
  `prix_livraison` int(11) NOT NULL,
  PRIMARY KEY (`id_livraison`),
  KEY `fk_id_livreur` (`id_livreur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `confirmkey` varchar(255) NOT NULL,
  `confirme` int(1) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_produit`, `quantite`, `id_client`) VALUES
(1, 5, 5),
(2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(70) NOT NULL,
  `quantite` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `fk_id_categorie` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_Id_Produit` (`fk_id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `pourcentage` int(11) NOT NULL,
  `delai` date NOT NULL,
  `fk_id_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_promo`),
  KEY `fk_Id_Produit` (`fk_id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `produit` text NOT NULL,
  `commentaire` varchar(100) NOT NULL,
  PRIMARY KEY (`id_reclamation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
