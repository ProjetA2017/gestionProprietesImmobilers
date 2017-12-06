-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Décembre 2017 à 13:13
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
  `latitude` float(30,12) DEFAULT NULL,
  `longitude` float(30,12) DEFAULT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `nfamille` varchar(60) DEFAULT NULL,
  `adresse` varchar(80) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `typeannonce` varchar(50) NOT NULL,
  `typelogement` varchar(50) NOT NULL,
  `imgannonce` varchar(250) NOT NULL DEFAULT 'default.jpg',
  `dateannonce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'Disponible',
  `datetraitementannonce` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `idannonce`, `idannonceur`, `latitude`, `longitude`, `prenom`, `nfamille`, `adresse`, `prix`, `typeannonce`, `typelogement`, `imgannonce`, `dateannonce`, `status`, `datetraitementannonce`) VALUES
(17, 'dris_appartement_45.487564_-73.591883', 'dris', 45.487564086914, -73.591880798340, 'dris', 'amarray', '4200 Rue Sherbrooke Ouest, Westmount, QC, Canada', 4200, 'location', 'appartement', 'default.jpg', '2017-12-05 11:42:03', 'Disponible', NULL),
(9, 'dris_appartement_45.5322395_-73.61270360000003', 'dris', 45.532238006592, -73.612701416016, 'dris', 'amarray', '6745 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 3000, 'location', 'appartement', 'dris_appartement_45.5322395_-73.61270360000003_imagesRedimApp1.jpg', '2017-12-05 11:13:49', 'Disponible', NULL),
(1, 'dris_appartement_45.53892099999999_-73.60027300000002', 'dris', 45.538921356201, -73.600273132324, 'dris', 'amarray', '1234 Rue Beaubien Est, MontrÃ©al, QC, Canada', 1234, 'location', 'appartement', 'dris_appartement_45.53892099999999_-73.60027300000002_1.jpg', '2017-12-04 23:07:22', 'Disponible', NULL),
(16, 'dris_appartement_45.548267_-73.64757199999997', 'dris', 45.548267364502, -73.647575378418, 'dris', 'amarray', '9248 Rue Berri, MontrÃ©al, QC, Canada', 450000, 'vente', 'appartement', 'dris_appartement_45.548267_-73.64757199999997_test17.jpg', '2017-12-05 11:36:36', 'Disponible', NULL),
(3, 'dris_appartement_45.60475699999999_-73.51815299999998', 'dris', 45.604755401611, -73.518150329590, 'dris', 'amarray', '9009 Rue Hochelaga, MontrÃ©al, QC, Canada', 999, 'location', 'appartement', 'dris_appartement_45.60475699999999_-73.51815299999998_imageRedim1.jpg', '2017-12-04 23:17:47', 'Disponible', NULL),
(19, 'dris_bureaux_45.4464829_-73.63900690000003', 'dris', 45.446483612061, -73.639007568359, 'dris', 'amarray', '1500 Rue Notre-Dame Ouest, Lachine, QC, Canada', 15000, 'location', 'bureaux', 'dris_bureaux_45.4464829_-73.63900690000003_test41.jpg', '2017-12-05 11:47:23', 'Disponible', NULL),
(11, 'dris_bureaux_45.532058_-73.612953', 'dris', 45.532058715820, -73.612953186035, 'dris', 'amarray', '6732 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 12000, 'location', 'bureaux', 'dris_bureaux_45.532058_-73.612953_test42.jpg', '2017-12-05 11:18:45', 'Disponible', NULL),
(8, 'dris_bureaux_45.578249_-73.56616400000001', 'dris', 45.578250885010, -73.566162109375, 'dris', 'amarray', '5634 Rue Beaubien Est, MontrÃ©al, QC, Canada', 8800, 'location', 'bureaux', 'dris_bureaux_45.578249_-73.56616400000001_imagesRedim4.jpg', '2017-12-05 11:07:19', 'Disponible', NULL),
(18, 'dris_maison_45.49825999999999_-73.57498799999996', 'dris', 45.498260498047, -73.574989318848, 'dris', 'amarray', '1245 Rue Sainte-Catherine Ouest, MontrÃ©al, QC, Canada', 1200000, 'vente', 'maison', 'dris_maison_45.49825999999999_-73.57498799999996_test14.jpg', '2017-12-05 11:45:36', 'Disponible', NULL),
(2, 'dris_maison_45.54733129999999_-73.64539530000002', 'dris', 45.547332763672, -73.645393371582, 'dris', 'amarray', '9087 Rue Saint-Denis, MontrÃ©al, QC, Canada', 1000000, 'vente', 'maison', 'dris_maison_45.54733129999999_-73.64539530000002_3.jpg', '2017-12-04 23:11:55', 'Disponible', NULL),
(10, 'dris_maison_45.5473852_-73.64555410000003', 'dris', 45.547386169434, -73.645553588867, 'dris', 'amarray', '9103 Rue Saint-Denis, MontrÃ©al, QC, Canada', 500800, 'vente', 'maison', 'dris_maison_45.5473852_-73.64555410000003_test5.jpg', '2017-12-05 11:16:50', 'Disponible', NULL),
(4, 'dris_maison_45.6168443_-73.5623291', 'dris', 45.616844177246, -73.562332153320, 'dris', 'amarray', '45678 Rue Jarry Est, Anjou, QC, Canada', 456500, 'vente', 'maison', 'dris_maison_45.6168443_-73.5623291_imagesRedim3.jpg', '2017-12-04 23:28:26', 'Disponible', NULL),
(15, 'gilberto_appartement_45.501323_-73.575198', 'gilberto', 45.501323699951, -73.575195312500, 'gilberto', 'ramos', '2029 Rue Peel, MontrÃ©al, QC, Canada', 8860, 'location', 'appartement', 'gilberto_appartement_45.501323_-73.575198_test17.jpg', '2017-12-05 11:32:14', 'Disponible', NULL),
(13, 'gilberto_maison_45.48493489999999_-73.5813053', 'gilberto', 45.484935760498, -73.581306457520, 'gilberto', 'ramos', '3056 Rue Saint-Antoine Ouest, MontrÃ©al, QC, Canada', 999000, 'vente', 'maison', 'gilberto_maison_45.48493489999999_-73.5813053_test10.jpg', '2017-12-05 11:21:41', 'Disponible', NULL),
(14, 'gilberto_maison_45.510786_-73.56906900000001', 'gilberto', 45.510784149170, -73.569068908691, 'gilberto', 'ramos', '2093 Rue Saint-Urbain, MontrÃ©al, QC, Canada', 20000, 'location', 'maison', 'gilberto_maison_45.510786_-73.56906900000001_test13.jpg', '2017-12-05 11:27:41', 'Disponible', NULL),
(20, 'yang_appartement_45.468378_-73.61961099999996', 'yang', 45.468376159668, -73.619613647461, 'chen', 'yang', '6000 Rue Sherbrooke Ouest, MontrÃ©al, QC, Canada', 6000, 'location', 'appartement', 'yang_appartement_45.468378_-73.61961099999996_test18.jpg', '2017-12-05 12:06:16', 'Disponible', NULL),
(21, 'yang_appartement_45.534532_-73.59921600000001', 'yang', 45.534530639648, -73.599212646484, 'chen', 'yang', '6001 Rue Saint-Hubert, MontrÃ©al, QC, Canada', 6001, 'location', 'appartement', 'yang_appartement_45.534532_-73.59921600000001_test19.jpg', '2017-12-05 12:16:28', 'Disponible', NULL),
(6, 'yang_appartement_45.5957896_-73.53472740000001', 'yang', 45.595790863037, -73.534729003906, 'chen', 'yang', '7890 Rue Sherbrooke Est, MontrÃ©al, QC, Canada', 4000, 'location', 'appartement', 'yang_appartement_45.5957896_-73.53472740000001_test15.jpg', '2017-12-05 10:59:39', 'Disponible', NULL),
(7, 'yang_bureaux_45.5472368_-73.64272649999998', 'yang', 45.547237396240, -73.642723083496, 'chen', 'yang', '8923 Rue Berri, MontrÃ©al, QC, Canada', 5000, 'location', 'bureaux', 'yang_bureaux_45.5472368_-73.64272649999998_test31.jpg', '2017-12-05 11:02:50', 'Disponible', NULL),
(5, 'yang_maison_45.5301533_-73.59674319999999', 'yang', 45.530155181885, -73.596740722656, 'chen', 'yang', '5678 Rue Saint-Denis, MontrÃ©al, QC, Canada', 1200000, 'vente', 'maison', 'yang_maison_45.5301533_-73.59674319999999_test3.jpg', '2017-12-05 10:57:47', 'Disponible', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `annoncesapparts`
--

CREATE TABLE `annoncesapparts` (
  `id` int(11) NOT NULL,
  `idannonce` varchar(150) NOT NULL,
  `typeannonce` varchar(50) NOT NULL,
  `nbrpieces` varchar(20) DEFAULT 'non renseigné',
  `position` varchar(20) DEFAULT 'non renseigné',
  `animauxpermis` varchar(20) DEFAULT 'non renseigné',
  `inclus` varchar(50) DEFAULT 'non renseigné',
  `infosupplementaire` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annoncesapparts`
--

INSERT INTO `annoncesapparts` (`id`, `idannonce`, `typeannonce`, `nbrpieces`, `position`, `animauxpermis`, `inclus`, `infosupplementaire`) VALUES
(7, 'dris_appartement_45.487564_-73.591883', 'location', '5', 'niveau 2', 'oui', 'meuble electricite chauffage stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(4, 'dris_appartement_45.5322395_-73.61270360000003', 'location', '3', 'niveau 2', 'oui', 'meuble ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(1, 'dris_appartement_45.53892099999999_-73.60027300000002', 'location', '2', 'rez-de-chaussee', 'oui', 'meuble ', 'test test test test test test test test'),
(6, 'dris_appartement_45.548267_-73.64757199999997', 'vente', '5', 'niveau 2', 'oui', 'stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(2, 'dris_appartement_45.60475699999999_-73.51815299999998', 'location', '2', 'niveau 1', 'oui', 'chauffage ', 'test test test test test test test test'),
(5, 'gilberto_appartement_45.501323_-73.575198', 'location', '4', 'niveau 2 et Plus', 'oui', 'stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(8, 'yang_appartement_45.468378_-73.61961099999996', 'location', '5', 'niveau 2 et Plus', 'non', 'meuble electricite chauffage stationnement ', 'test tes test test tes test test tes test test tes test test tes test test tes test test tes test test tes test test tes test test tes test test tes test test tes test test tes test '),
(9, 'yang_appartement_45.534532_-73.59921600000001', 'location', '3', 'niveau 2', 'oui', 'meuble electricite chauffage stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(3, 'yang_appartement_45.5957896_-73.53472740000001', 'location', '3', 'niveau 2', 'oui', 'meuble electricite chauffage stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test');

-- --------------------------------------------------------

--
-- Structure de la table `annoncesbureaux`
--

CREATE TABLE `annoncesbureaux` (
  `id` int(11) NOT NULL,
  `idannonce` varchar(150) NOT NULL,
  `typeannonce` varchar(50) NOT NULL,
  `nbremployes` varchar(20) NOT NULL DEFAULT 'non renseigné',
  `inclus` varchar(250) DEFAULT 'non renseigné',
  `infosupplementaire` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annoncesbureaux`
--

INSERT INTO `annoncesbureaux` (`id`, `idannonce`, `typeannonce`, `nbremployes`, `inclus`, `infosupplementaire`) VALUES
(5, 'dris_bureaux_45.4464829_-73.63900690000003', 'location', '250 et plus', 'service de courrier ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(3, 'dris_bureaux_45.532058_-73.612953', 'location', '100', 'wifi service de courrier ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(2, 'dris_bureaux_45.578249_-73.56616400000001', 'location', '250 et plus', 'wifi imprimante casiers telephonie restauration service de courrier ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(1, 'yang_bureaux_45.5472368_-73.64272649999998', 'location', '150', 'wifi imprimante telephonie restauration service de courrier ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test');

-- --------------------------------------------------------

--
-- Structure de la table `annoncesmaison`
--

CREATE TABLE `annoncesmaison` (
  `id` int(11) NOT NULL,
  `idannonce` varchar(150) NOT NULL,
  `typeannonce` varchar(50) NOT NULL,
  `nbrchambres` varchar(20) DEFAULT 'non renseigné',
  `inclus` varchar(150) DEFAULT 'non renseigné',
  `infosupplementaire` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annoncesmaison`
--

INSERT INTO `annoncesmaison` (`id`, `idannonce`, `typeannonce`, `nbrchambres`, `inclus`, `infosupplementaire`) VALUES
(7, 'dris_maison_45.49825999999999_-73.57498799999996', 'vente', '5', 'Jardin Piscine Stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(1, 'dris_maison_45.54733129999999_-73.64539530000002', 'vente', '5', 'Jardin Piscine Stationnement ', 'test test test test test test test test'),
(4, 'dris_maison_45.5473852_-73.64555410000003', 'vente', '5', 'Jardin Stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(2, 'dris_maison_45.6168443_-73.5623291', 'vente', '4', 'Jardin ', 'test test test test test test test'),
(5, 'gilberto_maison_45.48493489999999_-73.5813053', 'vente', '5', 'Jardin Piscine Stationnement ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(6, 'gilberto_maison_45.510786_-73.56906900000001', 'location', '4', 'Jardin ', ' tes tes tes tes test  tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test'),
(3, 'yang_maison_45.5301533_-73.59674319999999', 'vente', '4', 'Jardin Piscine Stationnement ', 'test tes tes tes tes test test tes tes tes tes test test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test tes tes tes tes test');

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
(19, 'dris_appartement_45.5322395_-73.61270360000003_imagesRedimApp1.jpg', 'dris_appartement_45.5322395_-73.61270360000003', 'imagesRedimApp1.jpg', 'upload/imagesAnnonces/dris_appartement_45.5322395_-73.61270360000003_imagesRedimApp1.jpg'),
(20, 'dris_appartement_45.5322395_-73.61270360000003_imagesRedimApp2.jpg', 'dris_appartement_45.5322395_-73.61270360000003', 'imagesRedimApp2.jpg', 'upload/imagesAnnonces/dris_appartement_45.5322395_-73.61270360000003_imagesRedimApp2.jpg'),
(1, 'dris_appartement_45.53892099999999_-73.60027300000002_1.jpg', 'dris_appartement_45.53892099999999_-73.60027300000002', '1.jpg', 'upload/imagesAnnonces/dris_appartement_45.53892099999999_-73.60027300000002_1.jpg'),
(2, 'dris_appartement_45.53892099999999_-73.60027300000002_2.jpg', 'dris_appartement_45.53892099999999_-73.60027300000002', '2.jpg', 'upload/imagesAnnonces/dris_appartement_45.53892099999999_-73.60027300000002_2.jpg'),
(32, 'dris_appartement_45.548267_-73.64757199999997_test17.jpg', 'dris_appartement_45.548267_-73.64757199999997', 'test17.jpg', 'upload/imagesAnnonces/dris_appartement_45.548267_-73.64757199999997_test17.jpg'),
(33, 'dris_appartement_45.548267_-73.64757199999997_test18.jpg', 'dris_appartement_45.548267_-73.64757199999997', 'test18.jpg', 'upload/imagesAnnonces/dris_appartement_45.548267_-73.64757199999997_test18.jpg'),
(6, 'dris_appartement_45.60475699999999_-73.51815299999998_imageRedim1.jpg', 'dris_appartement_45.60475699999999_-73.51815299999998', 'imageRedim1.jpg', 'upload/imagesAnnonces/dris_appartement_45.60475699999999_-73.51815299999998_imageRedim1.jpg'),
(7, 'dris_appartement_45.60475699999999_-73.51815299999998_imagesRedim2.jpg', 'dris_appartement_45.60475699999999_-73.51815299999998', 'imagesRedim2.jpg', 'upload/imagesAnnonces/dris_appartement_45.60475699999999_-73.51815299999998_imagesRedim2.jpg'),
(8, 'dris_appartement_45.60475699999999_-73.51815299999998_index.jpg', 'dris_appartement_45.60475699999999_-73.51815299999998', 'index.jpg', 'upload/imagesAnnonces/dris_appartement_45.60475699999999_-73.51815299999998_index.jpg'),
(36, 'dris_bureaux_45.4464829_-73.63900690000003_test41.jpg', 'dris_bureaux_45.4464829_-73.63900690000003', 'test41.jpg', 'upload/imagesAnnonces/dris_bureaux_45.4464829_-73.63900690000003_test41.jpg'),
(37, 'dris_bureaux_45.4464829_-73.63900690000003_test42.jpg', 'dris_bureaux_45.4464829_-73.63900690000003', 'test42.jpg', 'upload/imagesAnnonces/dris_bureaux_45.4464829_-73.63900690000003_test42.jpg'),
(38, 'dris_bureaux_45.4464829_-73.63900690000003_test44.jpeg', 'dris_bureaux_45.4464829_-73.63900690000003', 'test44.jpeg', 'upload/imagesAnnonces/dris_bureaux_45.4464829_-73.63900690000003_test44.jpeg'),
(25, 'dris_bureaux_45.532058_-73.612953_test41.jpg', 'dris_bureaux_45.532058_-73.612953', 'test41.jpg', 'upload/imagesAnnonces/dris_bureaux_45.532058_-73.612953_test41.jpg'),
(24, 'dris_bureaux_45.532058_-73.612953_test42.jpg', 'dris_bureaux_45.532058_-73.612953', 'test42.jpg', 'upload/imagesAnnonces/dris_bureaux_45.532058_-73.612953_test42.jpg'),
(17, 'dris_bureaux_45.578249_-73.56616400000001_imagesRedim4.jpg', 'dris_bureaux_45.578249_-73.56616400000001', 'imagesRedim4.jpg', 'upload/imagesAnnonces/dris_bureaux_45.578249_-73.56616400000001_imagesRedim4.jpg'),
(18, 'dris_bureaux_45.578249_-73.56616400000001_ImagesRedim5.jpg', 'dris_bureaux_45.578249_-73.56616400000001', 'ImagesRedim5.jpg', 'upload/imagesAnnonces/dris_bureaux_45.578249_-73.56616400000001_ImagesRedim5.jpg'),
(34, 'dris_maison_45.49825999999999_-73.57498799999996_test14.jpg', 'dris_maison_45.49825999999999_-73.57498799999996', 'test14.jpg', 'upload/imagesAnnonces/dris_maison_45.49825999999999_-73.57498799999996_test14.jpg'),
(35, 'dris_maison_45.49825999999999_-73.57498799999996_test15.jpg', 'dris_maison_45.49825999999999_-73.57498799999996', 'test15.jpg', 'upload/imagesAnnonces/dris_maison_45.49825999999999_-73.57498799999996_test15.jpg'),
(3, 'dris_maison_45.54733129999999_-73.64539530000002_3.jpg', 'dris_maison_45.54733129999999_-73.64539530000002', '3.jpg', 'upload/imagesAnnonces/dris_maison_45.54733129999999_-73.64539530000002_3.jpg'),
(4, 'dris_maison_45.54733129999999_-73.64539530000002_4.jpg', 'dris_maison_45.54733129999999_-73.64539530000002', '4.jpg', 'upload/imagesAnnonces/dris_maison_45.54733129999999_-73.64539530000002_4.jpg'),
(5, 'dris_maison_45.54733129999999_-73.64539530000002_5.jpg', 'dris_maison_45.54733129999999_-73.64539530000002', '5.jpg', 'upload/imagesAnnonces/dris_maison_45.54733129999999_-73.64539530000002_5.jpg'),
(21, 'dris_maison_45.5473852_-73.64555410000003_test5.jpg', 'dris_maison_45.5473852_-73.64555410000003', 'test5.jpg', 'upload/imagesAnnonces/dris_maison_45.5473852_-73.64555410000003_test5.jpg'),
(22, 'dris_maison_45.5473852_-73.64555410000003_test6.jpg', 'dris_maison_45.5473852_-73.64555410000003', 'test6.jpg', 'upload/imagesAnnonces/dris_maison_45.5473852_-73.64555410000003_test6.jpg'),
(23, 'dris_maison_45.5473852_-73.64555410000003_test7.jpg', 'dris_maison_45.5473852_-73.64555410000003', 'test7.jpg', 'upload/imagesAnnonces/dris_maison_45.5473852_-73.64555410000003_test7.jpg'),
(9, 'dris_maison_45.6168443_-73.5623291_imagesRedim3.jpg', 'dris_maison_45.6168443_-73.5623291', 'imagesRedim3.jpg', 'upload/imagesAnnonces/dris_maison_45.6168443_-73.5623291_imagesRedim3.jpg'),
(10, 'dris_maison_45.6168443_-73.5623291_test1.jpg', 'dris_maison_45.6168443_-73.5623291', 'test1.jpg', 'upload/imagesAnnonces/dris_maison_45.6168443_-73.5623291_test1.jpg'),
(30, 'gilberto_appartement_45.501323_-73.575198_test17.jpg', 'gilberto_appartement_45.501323_-73.575198', 'test17.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.501323_-73.575198_test17.jpg'),
(31, 'gilberto_appartement_45.501323_-73.575198_test18.jpg', 'gilberto_appartement_45.501323_-73.575198', 'test18.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.501323_-73.575198_test18.jpg'),
(26, 'gilberto_maison_45.48493489999999_-73.5813053_test10.jpg', 'gilberto_maison_45.48493489999999_-73.5813053', 'test10.jpg', 'upload/imagesAnnonces/gilberto_maison_45.48493489999999_-73.5813053_test10.jpg'),
(27, 'gilberto_maison_45.48493489999999_-73.5813053_test11.jpg', 'gilberto_maison_45.48493489999999_-73.5813053', 'test11.jpg', 'upload/imagesAnnonces/gilberto_maison_45.48493489999999_-73.5813053_test11.jpg'),
(28, 'gilberto_maison_45.510786_-73.56906900000001_test13.jpg', 'gilberto_maison_45.510786_-73.56906900000001', 'test13.jpg', 'upload/imagesAnnonces/gilberto_maison_45.510786_-73.56906900000001_test13.jpg'),
(29, 'gilberto_maison_45.510786_-73.56906900000001_test14.jpg', 'gilberto_maison_45.510786_-73.56906900000001', 'test14.jpg', 'upload/imagesAnnonces/gilberto_maison_45.510786_-73.56906900000001_test14.jpg'),
(39, 'yang_appartement_45.468378_-73.61961099999996_test18.jpg', 'yang_appartement_45.468378_-73.61961099999996', 'test18.jpg', 'upload/imagesAnnonces/yang_appartement_45.468378_-73.61961099999996_test18.jpg'),
(40, 'yang_appartement_45.468378_-73.61961099999996_test19.jpg', 'yang_appartement_45.468378_-73.61961099999996', 'test19.jpg', 'upload/imagesAnnonces/yang_appartement_45.468378_-73.61961099999996_test19.jpg'),
(42, 'yang_appartement_45.534532_-73.59921600000001_test18.jpg', 'yang_appartement_45.534532_-73.59921600000001', 'test18.jpg', 'upload/imagesAnnonces/yang_appartement_45.534532_-73.59921600000001_test18.jpg'),
(41, 'yang_appartement_45.534532_-73.59921600000001_test19.jpg', 'yang_appartement_45.534532_-73.59921600000001', 'test19.jpg', 'upload/imagesAnnonces/yang_appartement_45.534532_-73.59921600000001_test19.jpg'),
(13, 'yang_appartement_45.5957896_-73.53472740000001_test15.jpg', 'yang_appartement_45.5957896_-73.53472740000001', 'test15.jpg', 'upload/imagesAnnonces/yang_appartement_45.5957896_-73.53472740000001_test15.jpg'),
(14, 'yang_appartement_45.5957896_-73.53472740000001_test16.jpg', 'yang_appartement_45.5957896_-73.53472740000001', 'test16.jpg', 'upload/imagesAnnonces/yang_appartement_45.5957896_-73.53472740000001_test16.jpg'),
(15, 'yang_bureaux_45.5472368_-73.64272649999998_test31.jpg', 'yang_bureaux_45.5472368_-73.64272649999998', 'test31.jpg', 'upload/imagesAnnonces/yang_bureaux_45.5472368_-73.64272649999998_test31.jpg'),
(16, 'yang_bureaux_45.5472368_-73.64272649999998_test32.jpg', 'yang_bureaux_45.5472368_-73.64272649999998', 'test32.jpg', 'upload/imagesAnnonces/yang_bureaux_45.5472368_-73.64272649999998_test32.jpg'),
(11, 'yang_maison_45.5301533_-73.59674319999999_test3.jpg', 'yang_maison_45.5301533_-73.59674319999999', 'test3.jpg', 'upload/imagesAnnonces/yang_maison_45.5301533_-73.59674319999999_test3.jpg'),
(12, 'yang_maison_45.5301533_-73.59674319999999_test4.jpg', 'yang_maison_45.5301533_-73.59674319999999', 'test4.jpg', 'upload/imagesAnnonces/yang_maison_45.5301533_-73.59674319999999_test4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID_INCREMENTE` int(5) NOT NULL,
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

INSERT INTO `membre` (`ID_INCREMENTE`, `IDENTIFIANT`, `MOTDEPASSE`, `COURRIEL`, `NOM`, `PRENOM`, `ADRESSE`, `VILLE`, `PAYS`, `TELEPHONE`) VALUES
(5, 'ali', '$2y$10$35xuFD0sCl21AeVuZlj.PuCWWwDH.tjklhbTp0WtKJUfFQ4pCfjqa', 'ali@yahoo.fr', 'ali', 'ali', NULL, NULL, NULL, NULL),
(6, 'brian', '$2y$10$mufgKTkBUQOSV6fkw6rdlOSgf48GCTsVBI5UsNlexN79Os/jww7TW', 'brian@gmail.com', 'brain', 'inthekitchen', NULL, NULL, NULL, NULL),
(1, 'dris', '$2y$10$ABMmDLTOIlnRT.DNqTt/veF037gbDA/eiSqrZ9doFI3J8ojWWIeMG', 'dris@yahoo.fr', 'amarray', 'dris', NULL, NULL, NULL, NULL),
(3, 'gilberto', '$2y$10$qKM2GxdmvMhaC4QfzoZrk..t5HcWjotEl06eUedEGlSNJDCRRP7ce', 'gilberto@yahoo.ca', 'ramos', 'gilberto', NULL, NULL, NULL, NULL),
(8, 'kjhkjh', '$2y$10$3/W38Akn5J6czuPKbTXhEOecO7DMf14TevCPlf6YnWTT/NO8/jF52', 'qqwdqwd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'lucien', '$2y$10$okpR1x.9mPoYz38a1A7v6.rJAmQs62ENX3a9VACGYYEFzSi1rd0Ca', 'lucien@yahoo.fr', 'lucien', 'lucien', NULL, NULL, NULL, NULL),
(11, 'man', '$2y$10$pGLS/Gag.LUwOuwFwXSCfOHASUhmtrTItFQ4ml4G4nh0Uk5l48Rgm', 'man@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'paul', '$2y$10$8NzDabfUAMizADHDY3Q/4uj5RPdeADhxLonUE6FSleCybYAd.GkMe', 'paul@yahoo.fr', 'paul', 'paul', NULL, NULL, NULL, NULL),
(14, 'qqqqqq', '$2y$10$LF9rY.8dy2ZW8EN63OoEs.nzIBmkRAJOVENVkNtPvJu7CzIXhbctG', 'q@q.com', 'q', 'q', NULL, NULL, NULL, NULL),
(12, 'test1', '$2y$10$jVlv7fpKr6fXlj6CYbnwX.uHhE6qVPY7v1rcvWjXGS5CaqM0NujkK', 'test1@yahoo.fr', 'test1', 'test1', NULL, NULL, NULL, NULL),
(13, 'test2', '$2y$10$9UYmzvdis3X/6gajoU1foOo.Rs4deAswmmJ5/REcj9gt88IbcCrtu', 'test2@yahoo.fr', 'test2', 'test2', NULL, NULL, NULL, NULL),
(7, 'toto', '$2y$10$z.3xGYKOaptM3l9zOywb9.tqdX02QczPNd.qW.fkCWli4XynzQS2K', 'toto@gmail.com', 'toto', 'toto', NULL, NULL, NULL, NULL),
(2, 'yang', '$2y$10$MTlZY2tcdqb.X7uuAxt.E.XhttiPe83FsERK8NgY7w/kr0qf1jZzu', 'yang@gmail.com', 'yang', 'chen', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `idmessage` varchar(250) NOT NULL,
  `idannonceur` varchar(50) NOT NULL,
  `courrielannonceur` varchar(100) NOT NULL,
  `nomcomplet` varchar(250) NOT NULL,
  `courriel` varchar(250) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Index pour la table `annoncesapparts`
--
ALTER TABLE `annoncesapparts`
  ADD PRIMARY KEY (`idannonce`),
  ADD UNIQUE KEY `id_incremental` (`id`);

--
-- Index pour la table `annoncesbureaux`
--
ALTER TABLE `annoncesbureaux`
  ADD PRIMARY KEY (`idannonce`),
  ADD UNIQUE KEY `id_incremental` (`id`);

--
-- Index pour la table `annoncesmaison`
--
ALTER TABLE `annoncesmaison`
  ADD PRIMARY KEY (`idannonce`),
  ADD UNIQUE KEY `id_incremental` (`id`);

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
  ADD UNIQUE KEY `ID` (`ID_INCREMENTE`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`idmessage`),
  ADD UNIQUE KEY `id_incremental` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `annoncesapparts`
--
ALTER TABLE `annoncesapparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `annoncesbureaux`
--
ALTER TABLE `annoncesbureaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `annoncesmaison`
--
ALTER TABLE `annoncesmaison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `imgsannonces`
--
ALTER TABLE `imgsannonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_INCREMENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
