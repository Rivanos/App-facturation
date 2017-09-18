-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2017 at 10:29 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facturation`
--

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

CREATE TABLE `factures` (
  `id_facture` int(11) NOT NULL,
  `numero_facture` int(11) NOT NULL,
  `date_facture` date NOT NULL,
  `id_societe` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `date_echeance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factures`
--

INSERT INTO `factures` (`id_facture`, `numero_facture`, `date_facture`, `id_societe`, `id_personne`, `date_echeance`) VALUES
(1, 1252563, '2017-08-17', 1, 3, '2017-09-28'),
(2, 1258963, '2017-09-20', 2, 2, '2017-10-25'),
(3, 896545238, '2017-12-20', 1, 3, '2017-11-15'),
(4, 6987485, '2017-10-13', 1, 3, '2017-09-28'),
(5, 78451296, '2017-11-18', 5, 5, '2017-10-25'),
(6, 7485936, '2017-12-20', 3, 1, '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE `personnes` (
  `id_personne` int(11) NOT NULL,
  `nom_personne` varchar(125) CHARACTER SET utf8 NOT NULL,
  `prenom_personne` varchar(125) CHARACTER SET utf8 NOT NULL,
  `tel_personne` int(11) NOT NULL,
  `email_personne` varchar(125) CHARACTER SET utf8 NOT NULL,
  `id_societe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`id_personne`, `nom_personne`, `prenom_personne`, `tel_personne`, `email_personne`, `id_societe`) VALUES
(1, 'Thomas', 'Tonneau', 25488963, 'thomas@tonneau.be', 2),
(2, 'Emiy', 'Mae', 25896431, 'emily@mae.be', 1),
(3, 'Nadia', 'Benazzouz', 8745963, 'Nadia@Benazzouz.be', 3),
(4, 'Gary', 'Lyupaert', 74853654, 'Gary@mlyupaert.be', 1),
(5, 'U2', 'Gilles', 587496325, 'Gilles@u2.be', 3);

-- --------------------------------------------------------

--
-- Table structure for table `societes`
--

CREATE TABLE `societes` (
  `id_societe` int(11) NOT NULL,
  `nom_societe` varchar(125) CHARACTER SET utf8mb4 NOT NULL,
  `adresse_societe` varchar(125) CHARACTER SET utf8 NOT NULL,
  `tel_societe` int(11) NOT NULL,
  `tva_societe` varchar(125) CHARACTER SET utf8 NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `societes`
--

INSERT INTO `societes` (`id_societe`, `nom_societe`, `adresse_societe`, `tel_societe`, `tva_societe`, `id_type`) VALUES
(1, 'La Becode Academy', 'L\'avenue de l\'informatique 007 Bruxelles', 48596325, 'BE021458799693993686214896321486', 1),
(2, 'Les Andyscret', 'rue des Goujoux 152 1090 Bruxelles', 74185963, 'Be89745685214789625874258', 2),
(3, 'La Social sociality', 'rue de l\'avenue au bout de l\'arc-en-ciel', 15248965, 'FR05409865247896526874', 2),
(4, 'Le lapin-Malin', 'rue des champs n°4 Valley', 4523369, 'BE6502652521452156', 2),
(5, 'British Hairways', 'La voie de l\'aéroport', 5485478, 'GB148962147852147862148621486', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(125) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `type`) VALUES
(1, 'fourniseur'),
(2, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id_facture`) USING BTREE,
  ADD KEY `id_societe` (`id_societe`),
  ADD KEY `id_personne` (`id_personne`);

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id_personne`),
  ADD KEY `id_societe` (`id_societe`);

--
-- Indexes for table `societes`
--
ALTER TABLE `societes`
  ADD PRIMARY KEY (`id_societe`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `societes`
--
ALTER TABLE `societes`
  MODIFY `id_societe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
