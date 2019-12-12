-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Décembre 2019 à 11:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `s_i_a_d`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte_fidelite`
--

CREATE TABLE IF NOT EXISTS `carte_fidelite` (
  `id_carte` int(11) NOT NULL AUTO_INCREMENT,
  `points` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_carte`),
  KEY `fl_id_client` (`id_client`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `carte_fidelite`
--

INSERT INTO `carte_fidelite` (`id_carte`, `points`, `id_client`) VALUES
(1, 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom`) VALUES
(85, 'c'),
(83, 'c'),
(84, 'aa'),
(86, 'New Categorie');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `mode_paiment` varchar(30) NOT NULL,
  `etat_commande` varchar(30) NOT NULL,
  `id_panier` int(11) NOT NULL,
  `total_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `fk_id_panier` (`id_panier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE IF NOT EXISTS `livraison` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `id_livreur` int(11) NOT NULL,
  `lieu_livraison` int(11) NOT NULL,
  `prix_livraison` int(11) NOT NULL,
  PRIMARY KEY (`id_livraison`),
  KEY `fk_id_livreur` (`id_livreur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_id_client` (`id_client`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id_produit`, `quantite`, `id_client`) VALUES
(1, 5, 5),
(2, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(70) NOT NULL,
  `quantite` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `fk_id_categorie` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_Id_Produit` (`fk_id_categorie`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom`, `prix`, `description`, `quantite`, `type`, `fk_id_categorie`, `image`) VALUES
(23, 'pppppp', 446, 'desc desc desc desc desc desc desc desc desc desc desc desc desc desc ', 0, '1', 85, 'images/logo.jpg'),
(22, 'prod', 123, 'descdescdescdesc', 2, '1', 83, 'images/logo.jpg'),
(24, 'nnnn', 5, 'desrt', 25, '1', 83, 'images/3.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `pourcentage` int(11) NOT NULL,
  `delai` date NOT NULL,
  `fk_id_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_promo`),
  KEY `fk_Id_Produit` (`fk_id_produit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `promotion`
--

INSERT INTO `promotion` (`id_promo`, `pourcentage`, `delai`, `fk_id_produit`) VALUES
(1, 20, '2019-12-18', 1110),
(2, 20, '2019-12-18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `produit` text NOT NULL,
  `commentaire` varchar(100) NOT NULL,
  PRIMARY KEY (`id_reclamation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
