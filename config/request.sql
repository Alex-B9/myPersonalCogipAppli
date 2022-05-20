-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 20 mai 2022 à 09:43
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
                                           `CompaniesId` int(11) NOT NULL AUTO_INCREMENT,
                                           `Id_Type` int(11) NOT NULL,
                                           `company_name` varchar(70) NOT NULL,
                                           `country` varchar(25) NOT NULL,
                                           `vat_number` int(11) NOT NULL,
                                           PRIMARY KEY (`CompaniesId`),
                                           KEY `Id_Type` (`Id_Type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
                                          `Id_Invoice` int(11) NOT NULL AUTO_INCREMENT,
                                          `Id_Company` int(11) NOT NULL,
                                          `Id_People` int(11) NOT NULL,
                                          `number_invoice` int(11) NOT NULL,
                                          `lastname` varchar(20) NOT NULL,
                                          `email` varchar(50) NOT NULL,
                                          PRIMARY KEY (`Id_Invoice`),
                                          KEY `Id_Company` (`Id_Company`),
                                          KEY `Id_People` (`Id_People`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
                                        `Id_People` int(11) NOT NULL AUTO_INCREMENT,
                                        `Id_Company` int(11) NOT NULL,
                                        `firstname` varchar(20) NOT NULL,
                                        `lastname` varchar(20) NOT NULL,
                                        `email` varchar(50) NOT NULL,
                                        `Phone` int(10) NOT NULL,
                                        PRIMARY KEY (`Id_People`),
                                        KEY `Id_Company` (`Id_Company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_company`
--

DROP TABLE IF EXISTS `type_company`;
CREATE TABLE IF NOT EXISTS `type_company` (
                                              `Id_Type` int(11) NOT NULL AUTO_INCREMENT,
                                              `Type` varchar(15) NOT NULL,
                                              PRIMARY KEY (`Id_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_company`
--

INSERT INTO `type_company` (`Id_Type`, `Type`) VALUES
                                                   (1, 'Client'),
                                                   (2, 'Provider');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
    ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`Id_Type`) REFERENCES `type_company` (`Id_Type`) ON DELETE CASCADE;

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
    ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`Id_Company`) REFERENCES `companies` (`CompaniesId`) ON DELETE CASCADE,
    ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`Id_People`) REFERENCES `people` (`Id_People`) ON DELETE CASCADE;

--
-- Contraintes pour la table `people`
--
ALTER TABLE `people`
    ADD CONSTRAINT `people_ibfk_1` FOREIGN KEY (`Id_Company`) REFERENCES `companies` (`CompaniesId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
