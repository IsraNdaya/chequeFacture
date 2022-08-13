-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Août 2022 à 08:03
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `facturecheque_db`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_createCheque` (IN `p_dateCheque` VARCHAR(20), IN `p_montantNum` FLOAT, IN `p_montantLettres` VARCHAR(100), IN `p_nomBeneficiaire` VARCHAR(100), IN `p_observation` VARCHAR(500))  BEGIN
	INSERT into cheque_tbl
    values (0, p_dateCheque, p_montantNum, p_montantLettres,     p_nomBeneficiaire, p_observation);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_createProduit` (IN `p_codeProduit` VARCHAR(20), IN `p_libelle` VARCHAR(100), IN `p_pa` FLOAT, IN `p_pv` FLOAT, IN `p_qteStock` INT, IN `p_etat` VARCHAR(20))  NO SQL
BEGIN

insert into produit_tbl (id, codeProduit, libelle, pa, pv, qteStock, etat) VALUES (0, p_codeProduit, p_libelle, p_pa, p_pv, p_qteStock, 'disponible');

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_creerCheque` (IN `p_dateCheque` VARCHAR(20), IN `p_montantNum` FLOAT, IN `p_montantLettres` VARCHAR(100), IN `p_nomBeneficiaire` VARCHAR(100), IN `p_observation` VARCHAR(100))  BEGIN

INSERT into cheque_tbl (id, dateCheque, montantNum, montantLettres, nomBeneficiaire, observation) VALUES (0, p_dateCheque, p_montantNum, p_montantLettres, p_nomBeneficiaire, p_observation);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_getAllCheques` ()  BEGIN
 SELECT * FROM cheque_tbl;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_getAllProduits` ()  NO SQL
BEGIN

SELECT * from produit_tbl;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `cheque_tbl`
--

CREATE TABLE `cheque_tbl` (
  `id` int(11) NOT NULL,
  `dateCheque` varchar(20) NOT NULL,
  `montantNum` float NOT NULL,
  `montantLettres` varchar(100) NOT NULL,
  `nomBeneficiaire` varchar(100) NOT NULL,
  `observation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cheque_tbl`
--

INSERT INTO `cheque_tbl` (`id`, `dateCheque`, `montantNum`, `montantLettres`, `nomBeneficiaire`, `observation`) VALUES
(1, '08/10/2022', 20000000, 'vingt millions', 'dora francisca', 'budget'),
(2, '08/11/2022', 30000000, 'trente milles', 'Isra', 'payement ');

-- --------------------------------------------------------

--
-- Structure de la table `client_tbl`
--

CREATE TABLE `client_tbl` (
  `id` int(10) NOT NULL,
  `numClient` varchar(50) NOT NULL,
  `nomClient` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture_tbl`
--

CREATE TABLE `facture_tbl` (
  `id` int(11) NOT NULL,
  `numFact` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit_tbl`
--

CREATE TABLE `produit_tbl` (
  `id` int(10) NOT NULL,
  `codeProduit` varchar(50) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `pa` float NOT NULL,
  `pv` float NOT NULL,
  `qteStock` int(11) NOT NULL,
  `etat` enum('disponible','nonDisponible') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit_tbl`
--

INSERT INTO `produit_tbl` (`id`, `codeProduit`, `libelle`, `pa`, `pv`, `qteStock`, `etat`) VALUES
(0, 'SH0045D4', 'Chemise faconnable', 12000, 35000, 130, 'disponible'),
(1, 'EFM0300', 'blouse dame', 13500, 26500, 45, 'disponible'),
(2, 'DHD0232', 'Pantalon homme Zara', 23000, 55000, 70, 'disponible');

-- --------------------------------------------------------

--
-- Structure de la table `vente_tbl`
--

CREATE TABLE `vente_tbl` (
  `id` int(11) NOT NULL,
  `idFacture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cheque_tbl`
--
ALTER TABLE `cheque_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture_tbl`
--
ALTER TABLE `facture_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_tbl`
--
ALTER TABLE `produit_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vente_tbl`
--
ALTER TABLE `vente_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cheque_tbl`
--
ALTER TABLE `cheque_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture_tbl`
--
ALTER TABLE `facture_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit_tbl`
--
ALTER TABLE `produit_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `vente_tbl`
--
ALTER TABLE `vente_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
