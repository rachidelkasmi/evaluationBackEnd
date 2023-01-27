-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jan 27, 2023 at 01:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `city` varchar(56) NOT NULL,
  `postal_code` int(6) NOT NULL,
  `reservation_text` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`) VALUES
(1, 'Samsung S10', 'smartphone de choc', 299, 'Lille', 59000, NULL),
(2, 'pc portable', 'Ordi', 499, 'Risjel', 59000, 'Un ordi de plus'),
(3, 'trousse', 'Cuir', 17, 'Paris', 75000, NULL),
(4, 'stylo bic', 'un classique', 2, 'Dijon', 21231, NULL),
(5, 'Bouteille d\'eau', 'ça étanche la soif', 2, 'Marseille', 13000, NULL),
(6, 'règle', 'ça peut servir', 3, 'Lille', 59000, NULL),
(7, 'Saison Dupont', 'ça étanche et épanche', 4, 'Lille', 59000, NULL),
(8, 'gomme', 'ça arrive de se gourrer', 1, 'Lille', 59000, NULL),
(9, 'Thermometre', 'il caille', 3, 'Lille', 59000, NULL),
(10, 'sweat capuche', 'en mode treinquille', 40, 'Lille', 59000, NULL),
(11, 'Livre de poche', 'tchou tchou', 8, 'Avignon', 84000, NULL),
(12, 'caillou', 'why not', 0, 'lens', 62000, NULL),
(13, 'côte à l\'os', 'miam miam ptite cour', 25, 'Lille', 59000, NULL),
(14, 'patates', 'De la bonne frite', 2, 'Lille', 59000, NULL),
(15, 'Sauce poivre', 'J\'ai la dalle', 5, 'lille', 59000, NULL),
(16, 'salade', 'bonne conscience qui reste toudi dans l\'assiette', 1, 'lille', 59000, NULL),
(18, 'tisane', 'c\'est l\'hiver', 4, 'lille', 59000, 'J\'ai froid'),
(19, 'Lunettes', 'plus confortable', 80, 'Lille', 59000, NULL),
(20, 'Classeur', 'C\'est mieux de s\'organiser', 5, 'Paris', 75000, NULL),
(21, 'Dico', 'c\'est mieux sans fautes d\'orthographe', 12.95, 'Lille', 59000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
