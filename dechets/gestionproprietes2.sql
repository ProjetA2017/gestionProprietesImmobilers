-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 30 Novembre 2017 à 11:03
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
(19, 'dris_appartement_45.4709142_-73.6147765', 'dris', 45.536182403564, -73.609306335449, 'dris', 'amarray', '6767 Rue Saint-Denis, MontrÃ©al, QC, Canada', 300000, 'vente', 'appartement', 'default.jpg', '2017-11-30 09:04:41', 'Disponible', '2017-11-30 09:30:54'),
(2, 'dris_appartement_45.48642899999999_-73.57467099999997', 'dris', 45.486427307129, -73.574668884277, 'dris', 'amarray', '2234 Rue Saint-Jacques, MontrÃ©al, QC, Canada', 800, 'location', 'appartement', 'dris_appartement_45.48642899999999_-73.57467099999997-test15.jpg', '2017-11-30 08:23:08', 'Disponible', NULL),
(3, 'dris_appartement_45.526408_-73.58229030000001', 'dris', 45.526409149170, -73.582290649414, 'dris', 'amarray', '4544 Rue Saint-Hubert, MontrÃ©al, QC, Canada', 654654, 'vente', 'appartement', 'dris_appartement_45.526408_-73.58229030000001-test17.jpg', '2017-11-30 08:29:31', 'Disponible', NULL),
(7, 'dris_bureaux_45.472382_-73.61238530000003', 'dris', 45.472381591797, -73.612388610840, 'dris', 'amarray', '5533 Rue Sherbrooke Ouest, MontrÃ©al, QC, Canada', 800500, 'vente', 'bureaux', 'dris_bureaux_45.472382_-73.61238530000003-test42.jpg', '2017-11-30 08:35:11', 'Disponible', NULL),
(6, 'dris_bureaux_45.521576_-73.73987319999998', 'dris', 45.521575927734, -73.739875793457, 'dris', 'amarray', '9023 Boulevard Gouin Ouest, MontrÃ©al, QC, Canada', 5001, 'location', 'bureaux', 'dris_bureaux_45.521576_-73.73987319999998-test40.jpg', '2017-11-30 08:34:05', 'Disponible', '2017-11-30 09:52:59'),
(5, 'dris_maison_45.4892936_-73.58453910000003', 'dris', 45.489292144775, -73.584541320801, 'dris', 'amarray', '3298 Rue Sainte-Catherine Ouest, Westmount, QC, Canada', 900002, 'vente', 'maison', 'dris_maison_45.4892936_-73.58453910000003-test3.jpg', '2017-11-30 08:32:38', 'Disponible', '2017-11-30 09:44:44'),
(4, 'dris_maison_45.5380827_-73.62748590000001', 'dris', 45.538082122803, -73.627487182617, 'dris', 'amarray', '7865 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 780000, 'vente', 'maison', 'dris_maison_45.5380827_-73.62748590000001-test1.jpg', '2017-11-30 08:30:59', 'Disponible', NULL),
(14, 'gilberto_appartement_45.4620902_-73.63243690000002', 'gilberto', 45.462089538574, -73.632438659668, 'gilberto', 'ramos', '6709 Rue Sherbrooke Ouest, MontrÃ©al, QC, Canada', 400000, 'vente', 'appartement', 'gilberto_appartement_45.4620902_-73.63243690000002-test18.jpg', '2017-11-30 08:50:20', 'Disponible', NULL),
(13, 'gilberto_appartement_45.5097166_-73.56306089999998', 'gilberto', 45.509716033936, -73.563064575195, 'gilberto', 'ramos', '1209 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 2500, 'location', 'appartement', 'gilberto_appartement_45.5097166_-73.56306089999998-test21.jpg', '2017-11-30 08:49:28', 'Disponible', NULL),
(17, 'gilberto_bureaux_45.53179780000001_-73.61155380000002', 'gilberto', 45.531799316406, -73.611557006836, 'gilberto', 'ramos', '6655 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 15000, 'location', 'bureaux', 'gilberto_bureaux_45.53179780000001_-73.61155380000002-test37.jpg', '2017-11-30 08:53:12', 'Disponible', NULL),
(18, 'gilberto_bureaux_45.5414547_-73.62578710000003', 'gilberto', 45.541454315186, -73.625785827637, 'gilberto', 'ramos', '7878 Rue Saint-Denis, MontrÃ©al, QC, Canada', 200200, 'vente', 'bureaux', 'gilberto_bureaux_45.5414547_-73.62578710000003-test33.jpg', '2017-11-30 08:53:55', 'Disponible', NULL),
(16, 'gilberto_maison_45.4829108_-73.59926889999997', 'gilberto', 45.482910156250, -73.599266052246, 'gilberto', 'ramos', '4545 Rue Sherbrooke Ouest, Westmount, QC, Canada', 10000, 'location', 'maison', 'gilberto_maison_45.4829108_-73.59926889999997-test40.jpg', '2017-11-30 08:51:47', 'Disponible', NULL),
(15, 'gilberto_maison_45.5414134_-73.53965779999999', 'gilberto', 45.541412353516, -73.539657592773, 'gilberto', 'ramos', '3412 Rue Sainte-Catherine Est, MontrÃ©al, QC, Canada', 705000, 'vente', 'maison', 'gilberto_maison_45.5414134_-73.53965779999999-test8.jpg', '2017-11-30 08:51:02', 'Disponible', NULL),
(9, 'yang_appartement_45.5510201_-73.61367519999999', 'yang', 45.551021575928, -73.613677978516, 'chen', 'yang', '7665 Avenue Papineau, MontrÃ©al, QC, Canada', 500500, 'vente', 'appartement', 'yang_appartement_45.5510201_-73.61367519999999-test17.jpg', '2017-11-30 08:37:31', 'Disponible', NULL),
(8, 'yang_appartement_45.6028657_-73.51243549999998', 'yang', 45.602867126465, -73.512435913086, 'chen', 'yang', '8976 Rue Notre-Dame Est, MontrÃ©al, QC, Canada', 700, 'location', 'appartement', 'yang_appartement_45.6028657_-73.51243549999998-test22.jpg', '2017-11-30 08:36:38', 'Disponible', NULL),
(11, 'yang_bureaux_45.5030514_-73.56350609999998', 'yang', 45.503051757812, -73.563507080078, 'chen', 'yang', '456 Rue de la GauchetiÃ¨re Ouest, MontrÃ©al, QC, Canada', 6000, 'location', 'bureaux', 'yang_bureaux_45.5030514_-73.56350609999998-test37.jpg', '2017-11-30 08:39:51', 'Disponible', NULL),
(12, 'yang_bureaux_45.515417_-73.51013710000001', 'yang', 45.515415191650, -73.510139465332, 'chen', 'yang', '876 Boulevard Taschereau, Longueuil, QC, Canada', 500900, 'vente', 'bureaux', 'yang_bureaux_45.515417_-73.51013710000001-test44.jpeg', '2017-11-30 08:40:50', 'Disponible', NULL),
(10, 'yang_maison_45.5320245_-73.61221419999998', 'yang', 45.532024383545, -73.612213134766, 'chen', 'yang', '6709 Boulevard Saint-Laurent, MontrÃ©al, QC, Canada', 900900, 'vente', 'maison', 'yang_maison_45.5320245_-73.61221419999998-3.jpg', '2017-11-30 08:38:43', 'Disponible', NULL);

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
(8, 'dris_appartement_45.4709142_-73.6147765', 'vente', '6 et plus', 'rez-de-chaussee', 'oui', 'meuble electricite chauffage stationnement ', 'test modif reussi entier'),
(2, 'dris_appartement_45.48642899999999_-73.57467099999997', 'location', '2', 'demi-sous-sol', 'oui', 'meuble electricite ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(3, 'dris_appartement_45.526408_-73.58229030000001', 'vente', '2', 'niveau 2', 'oui', 'meuble electricite ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(7, 'gilberto_appartement_45.4620902_-73.63243690000002', 'vente', '4', 'niveau 2 et Plus', 'null', 'stationnement ', 'test test test test test test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test'),
(6, 'gilberto_appartement_45.5097166_-73.56306089999998', 'location', '3', 'niveau 1', 'oui', 'stationnement ', 'test test test test test test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test'),
(5, 'yang_appartement_45.5510201_-73.61367519999999', 'vente', '5', 'niveau 2 et Plus', 'null', 'meuble electricite ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(4, 'yang_appartement_45.6028657_-73.51243549999998', 'location', '2', 'niveau 1', 'null', 'meuble electricite chauffage stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ');

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
(2, 'dris_bureaux_45.472382_-73.61238530000003', 'vente', '250 et plus', 'restauration service de courrier ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(1, 'dris_bureaux_45.521576_-73.73987319999998', 'location', '200', 'wifi imprimante ', 'test reussi'),
(5, 'gilberto_bureaux_45.53179780000001_-73.61155380000002', 'location', '250 et plus', 'service de courrier ', 'test test test test test test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test'),
(6, 'gilberto_bureaux_45.5414547_-73.62578710000003', 'vente', '250 et plus', 'restauration service de courrier ', 'test test test test test test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test'),
(3, 'yang_bureaux_45.5030514_-73.56350609999998', 'location', '150', 'wifi imprimante service de courrier ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(4, 'yang_bureaux_45.515417_-73.51013710000001', 'vente', '100', 'restauration ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ');

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
(2, 'dris_maison_45.4892936_-73.58453910000003', 'vente', '5', 'Jardin Stationnement ', 'test reussi'),
(1, 'dris_maison_45.5380827_-73.62748590000001', 'vente', '6 et plus', 'Jardin Piscine Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test '),
(5, 'gilberto_maison_45.4829108_-73.59926889999997', 'location', '5', 'Stationnement ', 'test test test test test test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test'),
(4, 'gilberto_maison_45.5414134_-73.53965779999999', 'vente', '5', 'Jardin Stationnement ', 'test test test test test test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test'),
(3, 'yang_maison_45.5320245_-73.61221419999998', 'vente', '6 et plus', 'Jardin Piscine Stationnement ', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ');

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
(1, 'dris_appartement_45.48642899999999_-73.57467099999997-test15.jpg', 'dris_appartement_45.48642899999999_-73.57467099999997', 'test15.jpg', 'upload/imagesAnnonces/dris_appartement_45.48642899999999_-73.57467099999997-test15.jpg'),
(2, 'dris_appartement_45.48642899999999_-73.57467099999997-test16.jpg', 'dris_appartement_45.48642899999999_-73.57467099999997', 'test16.jpg', 'upload/imagesAnnonces/dris_appartement_45.48642899999999_-73.57467099999997-test16.jpg'),
(3, 'dris_appartement_45.526408_-73.58229030000001-test17.jpg', 'dris_appartement_45.526408_-73.58229030000001', 'test17.jpg', 'upload/imagesAnnonces/dris_appartement_45.526408_-73.58229030000001-test17.jpg'),
(4, 'dris_appartement_45.526408_-73.58229030000001-test18.jpg', 'dris_appartement_45.526408_-73.58229030000001', 'test18.jpg', 'upload/imagesAnnonces/dris_appartement_45.526408_-73.58229030000001-test18.jpg'),
(11, 'dris_bureaux_45.472382_-73.61238530000003-test42.jpg', 'dris_bureaux_45.472382_-73.61238530000003', 'test42.jpg', 'upload/imagesAnnonces/dris_bureaux_45.472382_-73.61238530000003-test42.jpg'),
(12, 'dris_bureaux_45.472382_-73.61238530000003-test44.jpeg', 'dris_bureaux_45.472382_-73.61238530000003', 'test44.jpeg', 'upload/imagesAnnonces/dris_bureaux_45.472382_-73.61238530000003-test44.jpeg'),
(9, 'dris_bureaux_45.521576_-73.73987319999998-test40.jpg', 'dris_bureaux_45.521576_-73.73987319999998', 'test40.jpg', 'upload/imagesAnnonces/dris_bureaux_45.521576_-73.73987319999998-test40.jpg'),
(10, 'dris_bureaux_45.521576_-73.73987319999998-test41.jpg', 'dris_bureaux_45.521576_-73.73987319999998', 'test41.jpg', 'upload/imagesAnnonces/dris_bureaux_45.521576_-73.73987319999998-test41.jpg'),
(7, 'dris_maison_45.4892936_-73.58453910000003-test3.jpg', 'dris_maison_45.4892936_-73.58453910000003', 'test3.jpg', 'upload/imagesAnnonces/dris_maison_45.4892936_-73.58453910000003-test3.jpg'),
(8, 'dris_maison_45.4892936_-73.58453910000003-test4.jpg', 'dris_maison_45.4892936_-73.58453910000003', 'test4.jpg', 'upload/imagesAnnonces/dris_maison_45.4892936_-73.58453910000003-test4.jpg'),
(5, 'dris_maison_45.5380827_-73.62748590000001-test1.jpg', 'dris_maison_45.5380827_-73.62748590000001', 'test1.jpg', 'upload/imagesAnnonces/dris_maison_45.5380827_-73.62748590000001-test1.jpg'),
(6, 'dris_maison_45.5380827_-73.62748590000001-test2.jpg', 'dris_maison_45.5380827_-73.62748590000001', 'test2.jpg', 'upload/imagesAnnonces/dris_maison_45.5380827_-73.62748590000001-test2.jpg'),
(25, 'gilberto_appartement_45.4620902_-73.63243690000002-test18.jpg', 'gilberto_appartement_45.4620902_-73.63243690000002', 'test18.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.4620902_-73.63243690000002-test18.jpg'),
(26, 'gilberto_appartement_45.4620902_-73.63243690000002-test19.jpg', 'gilberto_appartement_45.4620902_-73.63243690000002', 'test19.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.4620902_-73.63243690000002-test19.jpg'),
(23, 'gilberto_appartement_45.5097166_-73.56306089999998-test21.jpg', 'gilberto_appartement_45.5097166_-73.56306089999998', 'test21.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.5097166_-73.56306089999998-test21.jpg'),
(24, 'gilberto_appartement_45.5097166_-73.56306089999998-test22.jpg', 'gilberto_appartement_45.5097166_-73.56306089999998', 'test22.jpg', 'upload/imagesAnnonces/gilberto_appartement_45.5097166_-73.56306089999998-test22.jpg'),
(32, 'gilberto_bureaux_45.53179780000001_-73.61155380000002-test36.jpg', 'gilberto_bureaux_45.53179780000001_-73.61155380000002', 'test36.jpg', 'upload/imagesAnnonces/gilberto_bureaux_45.53179780000001_-73.61155380000002-test36.jpg'),
(31, 'gilberto_bureaux_45.53179780000001_-73.61155380000002-test37.jpg', 'gilberto_bureaux_45.53179780000001_-73.61155380000002', 'test37.jpg', 'upload/imagesAnnonces/gilberto_bureaux_45.53179780000001_-73.61155380000002-test37.jpg'),
(34, 'gilberto_bureaux_45.5414547_-73.62578710000003-test32.jpg', 'gilberto_bureaux_45.5414547_-73.62578710000003', 'test32.jpg', 'upload/imagesAnnonces/gilberto_bureaux_45.5414547_-73.62578710000003-test32.jpg'),
(33, 'gilberto_bureaux_45.5414547_-73.62578710000003-test33.jpg', 'gilberto_bureaux_45.5414547_-73.62578710000003', 'test33.jpg', 'upload/imagesAnnonces/gilberto_bureaux_45.5414547_-73.62578710000003-test33.jpg'),
(30, 'gilberto_maison_45.4829108_-73.59926889999997-test39.png', 'gilberto_maison_45.4829108_-73.59926889999997', 'test39.png', 'upload/imagesAnnonces/gilberto_maison_45.4829108_-73.59926889999997-test39.png'),
(29, 'gilberto_maison_45.4829108_-73.59926889999997-test40.jpg', 'gilberto_maison_45.4829108_-73.59926889999997', 'test40.jpg', 'upload/imagesAnnonces/gilberto_maison_45.4829108_-73.59926889999997-test40.jpg'),
(28, 'gilberto_maison_45.5414134_-73.53965779999999-test7.jpg', 'gilberto_maison_45.5414134_-73.53965779999999', 'test7.jpg', 'upload/imagesAnnonces/gilberto_maison_45.5414134_-73.53965779999999-test7.jpg'),
(27, 'gilberto_maison_45.5414134_-73.53965779999999-test8.jpg', 'gilberto_maison_45.5414134_-73.53965779999999', 'test8.jpg', 'upload/imagesAnnonces/gilberto_maison_45.5414134_-73.53965779999999-test8.jpg'),
(15, 'yang_appartement_45.5510201_-73.61367519999999-test17.jpg', 'yang_appartement_45.5510201_-73.61367519999999', 'test17.jpg', 'upload/imagesAnnonces/yang_appartement_45.5510201_-73.61367519999999-test17.jpg'),
(16, 'yang_appartement_45.5510201_-73.61367519999999-test18.jpg', 'yang_appartement_45.5510201_-73.61367519999999', 'test18.jpg', 'upload/imagesAnnonces/yang_appartement_45.5510201_-73.61367519999999-test18.jpg'),
(13, 'yang_appartement_45.6028657_-73.51243549999998-test22.jpg', 'yang_appartement_45.6028657_-73.51243549999998', 'test22.jpg', 'upload/imagesAnnonces/yang_appartement_45.6028657_-73.51243549999998-test22.jpg'),
(14, 'yang_appartement_45.6028657_-73.51243549999998-test23.jpg', 'yang_appartement_45.6028657_-73.51243549999998', 'test23.jpg', 'upload/imagesAnnonces/yang_appartement_45.6028657_-73.51243549999998-test23.jpg'),
(19, 'yang_bureaux_45.5030514_-73.56350609999998-test37.jpg', 'yang_bureaux_45.5030514_-73.56350609999998', 'test37.jpg', 'upload/imagesAnnonces/yang_bureaux_45.5030514_-73.56350609999998-test37.jpg'),
(20, 'yang_bureaux_45.5030514_-73.56350609999998-test38.jpg', 'yang_bureaux_45.5030514_-73.56350609999998', 'test38.jpg', 'upload/imagesAnnonces/yang_bureaux_45.5030514_-73.56350609999998-test38.jpg'),
(22, 'yang_bureaux_45.515417_-73.51013710000001-test42.jpg', 'yang_bureaux_45.515417_-73.51013710000001', 'test42.jpg', 'upload/imagesAnnonces/yang_bureaux_45.515417_-73.51013710000001-test42.jpg'),
(21, 'yang_bureaux_45.515417_-73.51013710000001-test44.jpeg', 'yang_bureaux_45.515417_-73.51013710000001', 'test44.jpeg', 'upload/imagesAnnonces/yang_bureaux_45.515417_-73.51013710000001-test44.jpeg'),
(18, 'yang_maison_45.5320245_-73.61221419999998-1.jpg', 'yang_maison_45.5320245_-73.61221419999998', '1.jpg', 'upload/imagesAnnonces/yang_maison_45.5320245_-73.61221419999998-1.jpg'),
(17, 'yang_maison_45.5320245_-73.61221419999998-3.jpg', 'yang_maison_45.5320245_-73.61221419999998', '3.jpg', 'upload/imagesAnnonces/yang_maison_45.5320245_-73.61221419999998-3.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `annoncesapparts`
--
ALTER TABLE `annoncesapparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `annoncesbureaux`
--
ALTER TABLE `annoncesbureaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `annoncesmaison`
--
ALTER TABLE `annoncesmaison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `imgsannonces`
--
ALTER TABLE `imgsannonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_INCREMENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
