-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 10 Novembre 2017 à 18:10
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionproprietes`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `idannonce` varchar(150) NOT NULL,
  `idannonceur` varchar(20) NOT NULL,
  `latitude` float(10,6) DEFAULT NULL,
  `longitude` float(10,6) DEFAULT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `nfamille` varchar(60) DEFAULT NULL,
  `adresse` varchar(80) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `typeannonce` varchar(50) NOT NULL,
  `typelogement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `idannonce`, `idannonceur`, `latitude`, `longitude`, `prenom`, `nfamille`, `adresse`, `prix`, `typeannonce`, `typelogement`) VALUES
(8, 'dris--41.1257834--73.3934342', 'dris', 41.125782, -73.393433, 'rrr', 'rrr', '331 U.S. 1, Norwalk, Connecticut, Ã‰tats-Unis', 33, '', ''),
(12, 'dris-appartement-40.79876699999999--73.9672089', 'dris', 40.798767, -73.967209, 'sdfsdf', 'ssdfsdf', '888 Amsterdam Avenue, New York, Ã‰tat de New York, Ã‰tats-Unis', 888, 'location', 'appartement'),
(10, 'dris-maison-40.2954808--74.68335289999999', 'dris', 40.295483, -74.683350, 'ffff', 'fff', '3333 U.S. 1, Lawrence Township, New Jersey, Ã‰tats-Unis', 3333, 'location', 'maison'),
(9, 'dris-maison-40.853802--73.89631700000001', 'dris', 40.853802, -73.896317, 'nnnn', 'nnn', '4447 Park Avenue, Bronx, Ã‰tat de New York, Ã‰tats-Unis', 4444, 'location', 'maison'),
(11, 'yang-maison-40.90671500000001--73.89687600000002', 'yang', 40.906715, -73.896873, 'hhh', 'hhh', '6543 Broadway, Bronx, Ã‰tat de New York, Ã‰tats-Unis', 3452, 'location', 'maison');

-- --------------------------------------------------------

--
-- Structure de la table `imgsannonces`
--

CREATE TABLE `imgsannonces` (
  `id` int(11) NOT NULL,
  `idimage` varchar(100) NOT NULL,
  `idannonce` varchar(150) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `imgsannonces`
--

INSERT INTO `imgsannonces` (`id`, `idimage`, `idannonce`, `filename`, `path`) VALUES
(3, '11-test454.jpg', '11', 'test454.jpg', 'upload/imagesAnnonces/11-test454.jpg'),
(5, 'yang-maison-40.90671500000001--73.89687600000002-test2292 - Copie.jpg', 'yang-maison-40.90671500000001--73.89687600000002', 'test2292 - Copie.jpg', 'upload/imagesAnnonces/yang-maison-40.90671500000001--73.89687600000002-test2292 - Copie.jpg'),
(7, 'yang-maison-40.90671500000001--73.89687600000002-test454 - Copie.jpg', 'yang-maison-40.90671500000001--73.89687600000002', 'test454 - Copie.jpg', 'upload/imagesAnnonces/yang-maison-40.90671500000001--73.89687600000002-test454 - Copie.jpg'),
(6, 'yang-maison-40.90671500000001--73.89687600000002-test454.jpg', 'yang-maison-40.90671500000001--73.89687600000002', 'test454.jpg', 'upload/imagesAnnonces/yang-maison-40.90671500000001--73.89687600000002-test454.jpg'),
(4, 'yang-maison-40.90671500000001--73.89687600000002-test7dfgdfg667.jpg', 'yang-maison-40.90671500000001--73.89687600000002', 'test7dfgdfg667.jpg', 'upload/imagesAnnonces/yang-maison-40.90671500000001--73.89687600000002-test7dfgdfg667.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID_IDENTIFIANT` int(5) NOT NULL,
  `IDENTIFIANT` varchar(20) NOT NULL,
  `MOTDEPASSE` text NOT NULL,
  `COURRIEL` varchar(30) NOT NULL,
  `NOM` varchar(50) DEFAULT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `ADRESSE` varchar(150) DEFAULT NULL,
  `VILLE` varchar(50) DEFAULT NULL,
  `PAYS` varchar(50) DEFAULT NULL,
  `TELEPHONE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table des membres';

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`ID_IDENTIFIANT`, `IDENTIFIANT`, `MOTDEPASSE`, `COURRIEL`, `NOM`, `PRENOM`, `ADRESSE`, `VILLE`, `PAYS`, `TELEPHONE`) VALUES
(5, 'ali', '$2y$10$35xuFD0sCl21AeVuZlj.PuCWWwDH.tjklhbTp0WtKJUfFQ4pCfjqa', 'ali@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'brian', '$2y$10$mufgKTkBUQOSV6fkw6rdlOSgf48GCTsVBI5UsNlexN79Os/jww7TW', 'brian@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'dorian', '$2y$10$QavC9wLNGQok3Zavh3ZNe.h8te2/r/weItGQOis.kDNtBQlKZCb8O', 'dorian@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL),
(1, 'dris', '$2y$10$ABMmDLTOIlnRT.DNqTt/veF037gbDA/eiSqrZ9doFI3J8ojWWIeMG', 'dris@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'gilberto', '$2y$10$qKM2GxdmvMhaC4QfzoZrk..t5HcWjotEl06eUedEGlSNJDCRRP7ce', 'gilberto@yahoo.ca', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'kjhkjh', '$2y$10$3/W38Akn5J6czuPKbTXhEOecO7DMf14TevCPlf6YnWTT/NO8/jF52', 'qqwdqwd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'lucien', '$2y$10$okpR1x.9mPoYz38a1A7v6.rJAmQs62ENX3a9VACGYYEFzSi1rd0Ca', 'lucien@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'paul', '$2y$10$8NzDabfUAMizADHDY3Q/4uj5RPdeADhxLonUE6FSleCybYAd.GkMe', 'paul@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'toto', '$2y$10$z.3xGYKOaptM3l9zOywb9.tqdX02QczPNd.qW.fkCWli4XynzQS2K', 'toto@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'yang', '$2y$10$MTlZY2tcdqb.X7uuAxt.E.XhttiPe83FsERK8NgY7w/kr0qf1jZzu', 'yang@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`idannonce`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `imgsannonces`
--
ALTER TABLE `imgsannonces`
  ADD PRIMARY KEY (`idimage`),
  ADD UNIQUE KEY `AutoInc` (`id`) USING BTREE;

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`IDENTIFIANT`),
  ADD UNIQUE KEY `ID` (`ID_IDENTIFIANT`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `imgsannonces`
--
ALTER TABLE `imgsannonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_IDENTIFIANT` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
