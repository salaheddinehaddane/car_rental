-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 02:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loc26`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(30) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `motPass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`, `nom`, `prenom`, `email`, `motPass`) VALUES
('abdassamad', 'EL MOUJTAHID', 'Abdassamad', '@gmail.com', 'pfe'),
('salaheddine', 'HADDANE', 'Salah Eddine', 'salahhaddane@gmail.com', 'pfe');

-- --------------------------------------------------------

--
-- Table structure for table `cin`
--

CREATE TABLE `cin` (
  `No_Cin` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_Cin_Del` date NOT NULL,
  `Date_Cin_Exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cin`
--

INSERT INTO `cin` (`No_Cin`, `Date_Cin_Del`, `Date_Cin_Exp`) VALUES
('AE787646', '2016-12-12', '2026-12-12'),
('E52R4646', '2020-12-12', '2021-12-12'),
('EE732146', '2019-12-12', '2029-12-12'),
('EE754612', '2014-12-12', '2024-12-12'),
('EE784646', '2012-12-12', '2022-12-12'),
('EE792676', '2011-12-12', '2023-12-12'),
('EE974646', '2013-12-12', '2023-12-12'),
('EN785646', '2014-12-12', '2024-12-12'),
('EZ124646', '2014-12-12', '2024-12-12'),
('ME784646', '2015-12-12', '2025-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Id_Client` int(11) NOT NULL,
  `Nom` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D_Naiss` date NOT NULL,
  `Pays` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ville` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `N_Tel` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(3) NOT NULL,
  `No_Permis` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_Cin` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id_Client`, `Nom`, `Prenom`, `D_Naiss`, `Pays`, `Ville`, `N_Tel`, `Age`, `No_Permis`, `No_Cin`) VALUES
(1, 'ANSSARI', 'Mohamed', '1997-10-03', 'Maroc', 'Marrakech', '+212627540456', 24, 'AE787646', 'EE754612'),
(2, 'EL IDRISSI', 'Mustapha', '1994-04-15', 'Maroc', 'Marrakech', '+2126245852', 26, 'E5704646', 'EE974646'),
(3, 'ALAOUI', 'Khalid', '1996-08-14', 'Maroc', 'Tanger', '+212662294691', 25, 'EE702670', 'ME784646'),
(4, 'NASSIR', 'Aymane', '1994-05-12', 'Maroc', 'Safi', '+2126244545', 28, 'EE757012', 'AE787646'),
(5, 'BASIL', 'Nour', '2000-08-01', 'France', 'Paris', '+33141414', 21, 'ME784706', 'EN785646'),
(6, 'ZINOUF', 'Mounya', '1992-08-12', 'France', 'Bordeaux', '+3314141515', 28, 'EE770146', 'EE792676'),
(7, 'BISSA', 'Hamid', '1994-04-12', 'France', 'Lyon', '+331452521', 26, 'EE784706', 'EE732146'),
(8, 'NAIM', 'Ismail', '1993-08-01', 'Italie', 'Venis', '+39114214', 27, 'EE974646', 'E52R4646'),
(9, 'BIRCH', 'Kamal', '1994-04-01', 'Italie', 'Milan', '+391156414', 26, 'EN785670', 'EZ124646'),
(10, 'BENNANI', 'Soukaina', '1996-08-11', 'Allemagne', 'Hannover', '+491569414', 25, 'EZ127046', 'EE784646');

-- --------------------------------------------------------

--
-- Table structure for table `clients_inscrits`
--

CREATE TABLE `clients_inscrits` (
  `Id_Client` int(11) NOT NULL,
  `login` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motPass` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients_inscrits`
--

INSERT INTO `clients_inscrits` (`Id_Client`, `login`, `motPass`) VALUES
(3, 'khalid', '1234'),
(1, 'mohamed', '1234'),
(2, 'mustapha', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE `contrat` (
  `No_Contrat` int(11) NOT NULL,
  `Date_Contrat` date NOT NULL,
  `Date_Depart` date NOT NULL,
  `Lieu_Depart` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_Retour` date NOT NULL,
  `Lieu_Retour` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `No_Imm` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contrat`
--

INSERT INTO `contrat` (`No_Contrat`, `Date_Contrat`, `Date_Depart`, `Lieu_Depart`, `Date_Retour`, `Lieu_Retour`, `Id_Client`, `No_Imm`) VALUES
(5, '2021-06-12', '2021-06-14', 'Guelize', '2021-06-17', 'Guelize', 5, '7254-A-57');

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `No_Fact` int(11) NOT NULL,
  `Date_Fact` date NOT NULL,
  `Mont_Total` float NOT NULL,
  `Id_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `No_Park` int(11) NOT NULL,
  `Capacite` int(11) NOT NULL,
  `Adresse` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`No_Park`, `Capacite`, `Adresse`) VALUES
(1, 10, 'N°87 , Avenue M5 El Mhamid'),
(2, 10, 'rue 102, Gueliz');

-- --------------------------------------------------------

--
-- Table structure for table `permis`
--

CREATE TABLE `permis` (
  `No_Permis` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_Permis_Del` date NOT NULL,
  `Date_Permis_Exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permis`
--

INSERT INTO `permis` (`No_Permis`, `Date_Permis_Del`, `Date_Permis_Exp`) VALUES
('AE787646', '2016-08-12', '2026-10-01'),
('E5704646', '2011-12-12', '2021-10-01'),
('EE702670', '2011-08-12', '2023-10-01'),
('EE757012', '2014-08-12', '2024-10-01'),
('EE770146', '2019-08-12', '2029-10-01'),
('EE784706', '2012-08-12', '2022-10-01'),
('EE974646', '2013-07-12', '2023-10-01'),
('EN785670', '2014-07-12', '2024-10-01'),
('EZ127046', '2014-08-12', '2024-10-01'),
('ME784706', '2015-07-12', '2025-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `No_Imm` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marque` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Categorie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carburant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` int(11) NOT NULL,
  `Img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prix_Jour` double NOT NULL,
  `Prix_Semaine` float NOT NULL,
  `etat` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `No_Park` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`No_Imm`, `Marque`, `Categorie`, `Carburant`, `Place`, `Img`, `Prix_Jour`, `Prix_Semaine`, `etat`, `Id_Client`, `No_Park`) VALUES
('11345-A-22', 'PEUGEOT 5008', 'familliale', 'diesel', 5, 'assets/img/voiture/5008.jpg', 450, 2362.5, 0, 8, 1),
('12690-A-75', 'Renault Koleos', 'Familliale', 'diesel', 5, 'assets/img/voiture/koleos.jpg', 450, 2362.5, 1, 9, 2),
('13412-B-26', 'DACIA SANDERO', 'sedan', 'diesel', 5, 'assets/img/voiture/sandero.jpg', 190, 997.5, 1, 4, 1),
('14105-A-20', 'HYUNDAI ACCORD', 'sedan', 'diesel', 5, 'assets/img/voiture/accord.jpg', 290, 1522.5, 1, 1, 2),
('14992-A-37', 'PEUGEOT 3008', 'familliale', 'diesel', 5, 'assets/img/voiture/3008.jpg', 380, 1995, 1, 10, 2),
('15169-A-31', 'Seat Ibiza', 'Citadine', 'essence', 5, 'assets/img/voiture/ibiza.jpg', 220, 1155, 1, 2, 2),
('1562-C-6', 'SEAT CUPRA FR', 'Coupe', 'diesel', 4, 'assets/img/voiture/cupra.jpg', 460, 2415, 0, 3, 2),
('1839-A-26', 'DACIA DUSTER', 'suv ', 'diesel', 5, 'assets/img/voiture/duster.jpg', 280, 1470, 1, 3, 1),
('18521-A-2', 'HYUNDAI I20', 'sedan', 'hybride', 5, 'assets/img/voiture/i20.jpg', 345, 1811.25, 1, 5, 1),
('2323-B-59', 'Porsche Panamera S ', 'Sportive', 'diesel', 4, 'assets/img/voiture/panamera.jpg', 990, 5197.5, 1, 4, 2),
('23414-A-33', 'Renault Clio 4', 'CITADINE', 'diesel', 4, 'assets/img/voiture/clio.jpg', 250, 1312.5, 1, 2, 1),
('2359-A-27', 'PORSCHE MACAN', 'suv', 'diesel', 5, 'assets/img/voiture/macan.jpg', 700, 3675, 1, 5, 2),
('23911-C-1', 'MERCEDES GLE S3', 'suv', 'diesel', 5, 'assets/img/voiture/gle.jpg', 650, 3412, 1, 1, 1),
('2499-B-26', 'LAMBORGHINI URUS', 'suv', 'diesel', 5, 'assets/img/voiture/urus.jpg', 1000, 5250, 0, 6, 2),
('3341-B-26', 'FIAT PANDA', 'MINI', 'essence', 4, 'assets/img/voiture/panda.jpg', 180, 945, 1, 7, 1),
('34582-A-45', 'Hyundai Elantra', 'sedan', 'hybride', 5, 'assets/img/voiture/elantra.jpg', 400, 2100, 1, 10, 1),
('53729-A-23', 'GOLF 7R ', 'citadine', 'diesel', 5, 'assets/img/voiture/7r.jpg', 500, 2625, 1, 8, 2),
('56021-D-1', 'Mercedes S500 Maybach', 'sedan', 'diesel', 4, 'assets/img/voiture/mayb.jpg', 1400, 7350, 1, 7, 2),
('7254-A-57', 'Dacia Duster', 'Familliale', 'essence', 6, 'assets/img/voiture/duster.jpg', 250, 1312.5, 1, 5, 2),
('7538-B-26', 'RANGE ROVER EVOQUE', 'suv', 'diesel', 5, 'assets/img/voiture/evoque.jpg', 600, 3150, 0, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `cin`
--
ALTER TABLE `cin`
  ADD PRIMARY KEY (`No_Cin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_Client`),
  ADD KEY `No_Cin` (`No_Cin`),
  ADD KEY `No_Permis` (`No_Permis`);

--
-- Indexes for table `clients_inscrits`
--
ALTER TABLE `clients_inscrits`
  ADD PRIMARY KEY (`login`),
  ADD KEY `Id_Client` (`Id_Client`);

--
-- Indexes for table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`No_Contrat`),
  ADD KEY `Id_Client` (`Id_Client`),
  ADD KEY `No_Imm` (`No_Imm`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`No_Fact`),
  ADD KEY `Id_Client` (`Id_Client`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`No_Park`);

--
-- Indexes for table `permis`
--
ALTER TABLE `permis`
  ADD PRIMARY KEY (`No_Permis`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`No_Imm`),
  ADD KEY `Id_Client` (`Id_Client`),
  ADD KEY `No_Park` (`No_Park`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Id_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `No_Contrat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `No_Fact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `No_Park` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`No_Cin`) REFERENCES `cin` (`No_Cin`),
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`No_Permis`) REFERENCES `permis` (`No_Permis`);

--
-- Constraints for table `clients_inscrits`
--
ALTER TABLE `clients_inscrits`
  ADD CONSTRAINT `clients_inscrits_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`);

--
-- Constraints for table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`),
  ADD CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`No_Imm`) REFERENCES `voiture` (`No_Imm`);

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`);

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`),
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`No_Park`) REFERENCES `parking` (`No_Park`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
