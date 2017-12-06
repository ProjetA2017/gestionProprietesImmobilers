-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Décembre 2017 à 20:25
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
(27, 'ali_maison_45.4758629_-73.59198099999998', 'ali', 45.475864410400, -73.591979980469, 'ali', 'ali', '4534 Rue Saint-Antoine Ouest, MontrÃ©al, QC, Canada', 2500, 'location', 'maison', 'ali_maison_45.4758629_-73.59198099999998_imgBurRedim1.jpg', '2017-12-05 18:58:59', 'Disponible', NULL),
(26, 'ali_maison_45.53604600000001_-73.56078000000002', 'ali', 45.536045074463, -73.560783386230, 'ali', 'ali', '2500 Rue Sherbrooke Est, MontrÃ©al, QC, Canada', 255000, 'vente', 'maison', 'default.jpg', '2017-12-05 18:55:34', 'Disponible', NULL),
(3, 'dris_appartement_45.4873249_-73.57843960000002', 'dris', 45.487323760986, -73.578437805176, 'dris', 'amarray', '2398 Rue Saint-Antoine Ouest, MontrÃ©al, QC, Canada', 1500, 'location', 'appartement', 'dris_appartement_45.4873249_-73.57843960000002_test16.jpg', '2017-12-05 14:06:00', 'Disponible', NULL),
(4, 'dris_appartement_45.5933212_-73.55793069999999', 'dris', 45.593322753906, -73.557929992676, 'dris', 'amarray', '7023 Rue Beaubien Est, MontrÃ©al, QC, Canada', 250900, 'vente', 'appartement', 'dris_appartement_45.5933212_-73.55793069999999_test21.jpg', '2017-12-05 14:23:05', 'Disponible', NULL),
(6, 'dris_bureaux_45.474928_-73.603654', 'dris', 45.474929809570, -73.603652954102, 'dris', 'amarray', '5109 Boulevard de Maisonneuve Ouest, MontrÃ©al, QC, Canada', 15000, 'location', 'bureaux', 'dris_bureaux_45.474928_-73.603654_test33.jpg', '2017-12-05 14:33:21', 'Disponible', NULL),
(5, 'dris_bureaux_45.5415255_-73.64748700000001', 'dris', 45.541526794434, -73.647483825684, 'dris', 'amarray', '9012 Rue Saint-Urbain, MontrÃ©al, QC, Canada', 500500, 'vente', 'bureaux', 'dris_bureaux_45.5415255_-73.64748700000001_test31.jpg', '2017-12-05 14:25:25', 'Disponible', NULL),
(7, 'dris_maison_45.4783939_-73.62051869999999', 'dris', 45.478393554688, -73.620521545410, 'dris', 'amarray', '4587 Avenue de Monkland, MontrÃ©al, QC, Canada', 1500500, 'vente', 'maison', 'dris_maison_45.4783939_-73.62051869999999_test14.jpg', '2017-12-05 14:42:47', 'Disponible', NULL),
(1, 'dris_maison_45.5092519_-73.563175', 'dris', 45.509250640869, -73.563171386719, 'dris', 'amarray', '1212 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 120000, 'vente', 'maison', 'dris_maison_45.5092519_-73.563175_test10.jpg', '2017-12-05 13:39:37', 'Disponible', NULL),
(2, 'dris_maison_45.517229_-73.56852179999998', 'dris', 45.517227172852, -73.568519592285, 'dris', 'amarray', '3456 Rue Saint-Denis, MontrÃ©al, QC, Canada', 15000, 'location', 'maison', 'dris_maison_45.517229_-73.56852179999998_test2.jpg', '2017-12-05 13:49:58', 'Disponible', NULL),
(30, 'gilberto_appartement_45.5533261_-73.532239', 'gilberto', 45.553325653076, -73.532241821289, 'gilberto', 'ramos', '4566 Rue Sainte-Catherine Est, MontrÃ©al, QC, Canada', 4000, 'location', 'appartement', 'gilberto_appartement_45.5533261_-73.532239_test7.jpg', '2017-12-05 19:10:42', 'LouÃ©', '2017-12-05 19:55:04'),
(31, 'gilberto_bureaux_45.48071249999999_-73.59413589999997', 'gilberto', 45.480712890625, -73.594139099121, 'gilberto', 'ramos', '4509 Rue Sainte-Catherine Ouest, Westmount, QC, Canada', 230000, 'vente', 'bureaux', 'gilberto_bureaux_45.48071249999999_-73.59413589999997_test39.png', '2017-12-05 19:16:46', 'Disponible', NULL),
(29, 'gilberto_maison_45.441185_-73.47341799999998', 'gilberto', 45.441184997559, -73.473419189453, 'gilberto', 'ramos', 'Brossard Hyundai, Boulevard Taschereau, Brossard, QC, Canada', 50000, 'location', 'maison', 'gilberto_maison_45.441185_-73.47341799999998_test5.jpg', '2017-12-05 19:08:56', 'Disponible', NULL),
(28, 'gilberto_maison_45.519367_-73.56795599999998', 'gilberto', 45.519367218018, -73.567955017090, 'gilberto', 'ramos', '3456 Rue Saint-Hubert, MontrÃ©al, QC, Canada', 455000, 'vente', 'maison', 'gilberto_maison_45.519367_-73.56795599999998_test1.jpg', '2017-12-05 19:06:43', 'Disponible', NULL),
(11, 'yang_appartement_45.54014040000001_-73.670275', 'yang', 45.540142059326, -73.670272827148, 'chen', 'yang', '9845 Terrasse Fleury, MontrÃ©al, QC, Canada', 150000, 'vente', 'appartement', 'yang_appartement_45.54014040000001_-73.670275_test22.jpg', '2017-12-05 15:16:25', 'Disponible', NULL),
(10, 'yang_appartement_45.5569997_-73.56653790000001', 'yang', 45.556999206543, -73.566535949707, 'chen', 'yang', '4578 Avenue Laurier Est, MontrÃ©al, QC, Canada', 2000, 'location', 'appartement', 'yang_appartement_45.5569997_-73.56653790000001_imgAppRedim1.jpg', '2017-12-05 15:11:20', 'Disponible', NULL),
(13, 'yang_bureaux_45.4400007_-73.45376099999999', 'yang', 45.440002441406, -73.453758239746, 'chen', 'yang', '32e Rue de Lachine, Brossard, QC, Canada', 5000, 'location', 'bureaux', 'yang_bureaux_45.4400007_-73.45376099999999_imgBurRedim1.jpg', '2017-12-05 15:24:47', 'Disponible', NULL),
(12, 'yang_bureaux_45.5528992_-73.53252079999999', 'yang', 45.552898406982, -73.532524108887, 'chen', 'yang', '4512 Rue Sainte-Catherine Est, MontrÃ©al, QC, Canada', 654000, 'vente', 'bureaux', 'yang_bureaux_45.5528992_-73.53252079999999_test44.jpeg', '2017-12-05 15:19:18', 'Disponible', NULL),
(8, 'yang_maison_45.4293938_-73.5936934', 'yang', 45.429393768311, -73.593696594238, 'chen', 'yang', '7687 Boulevard LaSalle, LaSalle, QC, Canada', 800000, 'vente', 'maison', 'yang_maison_45.4293938_-73.5936934_3.jpg', '2017-12-05 14:48:06', 'Disponible', NULL),
(9, 'yang_maison_45.44063870000001_-73.45543479999998', 'yang', 45.440639495850, -73.455436706543, 'chen', 'yang', '5409 Lachine, Brossard, QC, Canada', 25000, 'location', 'maison', 'yang_maison_45.44063870000001_-73.45543479999998_imgMaisonRedim.jpg', '2017-12-05 14:57:30', 'Disponible', NULL);

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
(1, 'dris_appartement_45.4873249_-73.57843960000002', 'location', '3', 'niveau 2', 'oui', 'stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(2, 'dris_appartement_45.5933212_-73.55793069999999', 'vente', '3', 'niveau 2', 'oui', 'stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(7, 'gilberto_appartement_45.5533261_-73.532239', 'location', '2', 'niveau 2', 'oui', 'meuble stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(4, 'yang_appartement_45.54014040000001_-73.670275', 'vente', '4', 'niveau 2', 'non', 'stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(3, 'yang_appartement_45.5569997_-73.56653790000001', 'location', '6+', 'rez-de-chaussee', 'oui', 'meuble electricite chauffage stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test');

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
(2, 'dris_bureaux_45.474928_-73.603654', 'location', '200', 'service de courrier ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(1, 'dris_bureaux_45.5415255_-73.64748700000001', 'vente', '200', 'restauration ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(9, 'gilberto_bureaux_45.48071249999999_-73.59413589999997', 'vente', '200', 'restauration service de courrier ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(4, 'yang_bureaux_45.4400007_-73.45376099999999', 'location', '100', 'wifi service de courrier ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(3, 'yang_bureaux_45.5528992_-73.53252079999999', 'vente', '200', 'restauration service de courrier ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test');

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
(13, 'ali_maison_45.4758629_-73.59198099999998', 'location', '3', 'null', 'chargerMarkersCarte'),
(12, 'ali_maison_45.53604600000001_-73.56078000000002', 'vente', '4', 'Jardin ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(3, 'dris_maison_45.4783939_-73.62051869999999', 'vente', '6+', 'Jardin Piscine Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(1, 'dris_maison_45.5092519_-73.563175', 'vente', '4', 'Jardin Piscine Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(2, 'dris_maison_45.517229_-73.56852179999998', 'location', '4', 'Jardin Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(15, 'gilberto_maison_45.441185_-73.47341799999998', 'location', '4', 'Jardin Stationnement ', 'chargerMarkersCarte'),
(14, 'gilberto_maison_45.519367_-73.56795599999998', 'vente', '4', 'Jardin Stationnement ', 'chargerMarkersCarte'),
(6, 'gilberto_maison_45.5844947_-73.702788', 'vente', '5', 'Jardin Piscine Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(7, 'gilberto_maison_45.5939471_-73.7139115', 'location', '4', 'Jardin Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(4, 'yang_maison_45.4293938_-73.5936934', 'vente', '6+', 'Jardin Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test'),
(5, 'yang_maison_45.44063870000001_-73.45543479999998', 'location', '5', 'Jardin Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test');

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
(42, 'ali_maison_45.4758629_-73.59198099999998_imgBurRedim1.jpg', 'ali_maison_45.4758629_-73.59198099999998', 'imgBurRedim1.jpg', 'upload/imagesAnnonces/ali_maison_45.4758629_-73.59198099999998_imgBurRedim1.jpg'),
(43, 'ali_maison_45.4758629_-73.59198099999998_imgMaisonRedim.jpg', 'ali_maison_45.4758629_-73.59198099999998', 'imgMaisonRedim.jpg', 'upload/imagesAnnonces/ali_maison_45.4758629_-73.59198099999998_imgMaisonRedim.jpg'),
(40, 'ali_maison_45.53604600000001_-73.56078000000002', 'ali_maison_45.53604600000001_-73.56078000000002', 'default.jpg', 'upload/imagesAnnonces/default.jpg'),
(5, 'dris_appartement_45.4873249_-73.57843960000002_test16.jpg', 'dris_appartement_45.4873249_-73.57843960000002', 'test16.jpg', 'upload/imagesAnnonces/dris_appartement_45.4873249_-73.57843960000002_test16.jpg'),
(6, 'dris_appartement_45.4873249_-73.57843960000002_test17.jpg', 'dris_appartement_45.4873249_-73.57843960000002', 'test17.jpg', 'upload/imagesAnnonces/dris_appartement_45.4873249_-73.57843960000002_test17.jpg'),
(7, 'dris_appartement_45.5933212_-73.55793069999999_test21.jpg', 'dris_appartement_45.5933212_-73.55793069999999', 'test21.jpg', 'upload/imagesAnnonces/dris_appartement_45.5933212_-73.55793069999999_test21.jpg'),
(8, 'dris_appartement_45.5933212_-73.55793069999999_test22.jpg', 'dris_appartement_45.5933212_-73.55793069999999', 'test22.jpg', 'upload/imagesAnnonces/dris_appartement_45.5933212_-73.55793069999999_test22.jpg'),
(11, 'dris_bureaux_45.474928_-73.603654_test33.jpg', 'dris_bureaux_45.474928_-73.603654', 'test33.jpg', 'upload/imagesAnnonces/dris_bureaux_45.474928_-73.603654_test33.jpg'),
(12, 'dris_bureaux_45.474928_-73.603654_test34.png', 'dris_bureaux_45.474928_-73.603654', 'test34.png', 'upload/imagesAnnonces/dris_bureaux_45.474928_-73.603654_test34.png'),
(9, 'dris_bureaux_45.5415255_-73.64748700000001_test31.jpg', 'dris_bureaux_45.5415255_-73.64748700000001', 'test31.jpg', 'upload/imagesAnnonces/dris_bureaux_45.5415255_-73.64748700000001_test31.jpg'),
(10, 'dris_bureaux_45.5415255_-73.64748700000001_test32.jpg', 'dris_bureaux_45.5415255_-73.64748700000001', 'test32.jpg', 'upload/imagesAnnonces/dris_bureaux_45.5415255_-73.64748700000001_test32.jpg'),
(13, 'dris_maison_45.4783939_-73.62051869999999_test14.jpg', 'dris_maison_45.4783939_-73.62051869999999', 'test14.jpg', 'upload/imagesAnnonces/dris_maison_45.4783939_-73.62051869999999_test14.jpg'),
(14, 'dris_maison_45.4783939_-73.62051869999999_test15.jpg', 'dris_maison_45.4783939_-73.62051869999999', 'test15.jpg', 'upload/imagesAnnonces/dris_maison_45.4783939_-73.62051869999999_test15.jpg'),
(1, 'dris_maison_45.5092519_-73.563175_test10.jpg', 'dris_maison_45.5092519_-73.563175', 'test10.jpg', 'upload/imagesAnnonces/dris_maison_45.5092519_-73.563175_test10.jpg'),
(2, 'dris_maison_45.5092519_-73.563175_test11.jpg', 'dris_maison_45.5092519_-73.563175', 'test11.jpg', 'upload/imagesAnnonces/dris_maison_45.5092519_-73.563175_test11.jpg'),
(3, 'dris_maison_45.517229_-73.56852179999998_test2.jpg', 'dris_maison_45.517229_-73.56852179999998', 'test2.jpg', 'upload/imagesAnnonces/dris_maison_45.517229_-73.56852179999998_test2.jpg'),
(4, 'dris_maison_45.517229_-73.56852179999998_test3.jpg', 'dris_maison_45.517229_-73.56852179999998', 'test3.jpg', 'upload/imagesAnnonces/dris_maison_45.517229_-73.56852179999998_test3.jpg'),
(50, 'gilberto_appartement_45.5533261_-73.532239_test7.jpg', 'gilberto_appartement_45.5533261_-73.532239', 'test7.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.5533261_-73.532239_test7.jpg'),
(53, 'gilberto_bureaux_45.48071249999999_-73.59413589999997_test39.png', 'gilberto_bureaux_45.48071249999999_-73.59413589999997', 'test39.png', 'upload/imagesAnnonces/gilberto_bureaux_45.48071249999999_-73.59413589999997_test39.png'),
(54, 'gilberto_bureaux_45.48071249999999_-73.59413589999997_test40.jpg', 'gilberto_bureaux_45.48071249999999_-73.59413589999997', 'test40.jpg', 'upload/imagesAnnonces/gilberto_bureaux_45.48071249999999_-73.59413589999997_test40.jpg'),
(48, 'gilberto_maison_45.441185_-73.47341799999998_test5.jpg', 'gilberto_maison_45.441185_-73.47341799999998', 'test5.jpg', 'upload/imagesAnnonces/gilberto_maison_45.441185_-73.47341799999998_test5.jpg'),
(45, 'gilberto_maison_45.519367_-73.56795599999998_test1.jpg', 'gilberto_maison_45.519367_-73.56795599999998', 'test1.jpg', 'upload/imagesAnnonces/gilberto_maison_45.519367_-73.56795599999998_test1.jpg'),
(46, 'gilberto_maison_45.519367_-73.56795599999998_test2.jpg', 'gilberto_maison_45.519367_-73.56795599999998', 'test2.jpg', 'upload/imagesAnnonces/gilberto_maison_45.519367_-73.56795599999998_test2.jpg'),
(21, 'yang_appartement_45.54014040000001_-73.670275_test22.jpg', 'yang_appartement_45.54014040000001_-73.670275', 'test22.jpg', 'upload/imagesAnnonces/yang_appartement_45.54014040000001_-73.670275_test22.jpg'),
(22, 'yang_appartement_45.54014040000001_-73.670275_test23.jpg', 'yang_appartement_45.54014040000001_-73.670275', 'test23.jpg', 'upload/imagesAnnonces/yang_appartement_45.54014040000001_-73.670275_test23.jpg'),
(19, 'yang_appartement_45.5569997_-73.56653790000001_imgAppRedim1.jpg', 'yang_appartement_45.5569997_-73.56653790000001', 'imgAppRedim1.jpg', 'upload/imagesAnnonces/yang_appartement_45.5569997_-73.56653790000001_imgAppRedim1.jpg'),
(20, 'yang_appartement_45.5569997_-73.56653790000001_imgAppRedim2.jpg', 'yang_appartement_45.5569997_-73.56653790000001', 'imgAppRedim2.jpg', 'upload/imagesAnnonces/yang_appartement_45.5569997_-73.56653790000001_imgAppRedim2.jpg'),
(25, 'yang_bureaux_45.4400007_-73.45376099999999_imgBurRedim1.jpg', 'yang_bureaux_45.4400007_-73.45376099999999', 'imgBurRedim1.jpg', 'upload/imagesAnnonces/yang_bureaux_45.4400007_-73.45376099999999_imgBurRedim1.jpg'),
(26, 'yang_bureaux_45.4400007_-73.45376099999999_imgBurRedim2.jpg', 'yang_bureaux_45.4400007_-73.45376099999999', 'imgBurRedim2.jpg', 'upload/imagesAnnonces/yang_bureaux_45.4400007_-73.45376099999999_imgBurRedim2.jpg'),
(24, 'yang_bureaux_45.5528992_-73.53252079999999_test42.jpg', 'yang_bureaux_45.5528992_-73.53252079999999', 'test42.jpg', 'upload/imagesAnnonces/yang_bureaux_45.5528992_-73.53252079999999_test42.jpg'),
(23, 'yang_bureaux_45.5528992_-73.53252079999999_test44.jpeg', 'yang_bureaux_45.5528992_-73.53252079999999', 'test44.jpeg', 'upload/imagesAnnonces/yang_bureaux_45.5528992_-73.53252079999999_test44.jpeg'),
(15, 'yang_maison_45.4293938_-73.5936934_3.jpg', 'yang_maison_45.4293938_-73.5936934', '3.jpg', 'upload/imagesAnnonces/yang_maison_45.4293938_-73.5936934_3.jpg'),
(16, 'yang_maison_45.4293938_-73.5936934_test1.jpg', 'yang_maison_45.4293938_-73.5936934', 'test1.jpg', 'upload/imagesAnnonces/yang_maison_45.4293938_-73.5936934_test1.jpg'),
(17, 'yang_maison_45.44063870000001_-73.45543479999998_imgMaisonRedim.jpg', 'yang_maison_45.44063870000001_-73.45543479999998', 'imgMaisonRedim.jpg', 'upload/imagesAnnonces/yang_maison_45.44063870000001_-73.45543479999998_imgMaisonRedim.jpg'),
(18, 'yang_maison_45.44063870000001_-73.45543479999998_test2.jpg', 'yang_maison_45.44063870000001_-73.45543479999998', 'test2.jpg', 'upload/imagesAnnonces/yang_maison_45.44063870000001_-73.45543479999998_test2.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `annoncesapparts`
--
ALTER TABLE `annoncesapparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `annoncesbureaux`
--
ALTER TABLE `annoncesbureaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `annoncesmaison`
--
ALTER TABLE `annoncesmaison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `imgsannonces`
--
ALTER TABLE `imgsannonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
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
