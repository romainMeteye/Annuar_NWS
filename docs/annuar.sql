-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 nov. 2022 à 22:38
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annuar`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_firstname` varchar(45) NOT NULL,
  `contact_lastname` varchar(45) DEFAULT NULL,
  `contact_age` int(11) NOT NULL,
  `contact_phone` varchar(40) NOT NULL,
  `contact_email` varchar(90) NOT NULL,
  `contact_adresse` varchar(70) NOT NULL,
  `contact_ville` varchar(40) NOT NULL,
  `alternance` bigint(20) DEFAULT NULL,
  `cycle_id` int(11) DEFAULT NULL,
  `speciality_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_firstname`, `contact_lastname`, `contact_age`, `contact_phone`, `contact_email`, `contact_adresse`, `contact_ville`, `alternance`, `cycle_id`, `speciality_id`) VALUES
(1, 'Toto', 'Test', 19, '0102030405', 'toto.test@exemple.com', '5 rue pasrelle', 'Le Havre', 0, 1, 1),
(2, 'John', 'Doe', 34, '0504030201', 'jojo.do@exemple.com', '12 bis Impasse de la vivre', 'Petit Quevilly', 1, 3, 4),
(7, 'Romain', 'Météyé', 22, '0604027598', 'rmeteye@normandiewebschool.fr', '23 bis rue de la paix', 'Vernon', 1, 2, 4),
(8, 'Thierry', 'Bartel', 24, '0708514896', 't.bartel@test.fr', '98 boulvard de la rue', 'Rouen', 1, 3, 2),
(9, 'Mathilde', 'Ultry', 19, '0748571236', 'mathilde.ultry2@test.fr', '104 avenue Charle de Gaule', 'Rouen', 1, 2, 3),
(12, 'Clara', 'Totel', 20, '0606060606', 'cla.tot@exemple.com', '6 clos des près', 'Vall de Reuil', 1, 1, 4),
(14, 'Emmanuel', 'Yrel', 27, '0748952173', 'manudu76@exemple.com', '237 quai de france ', 'Rouen', 0, 2, 3),
(16, 'Marie', 'Anniess', 24, '0798754653', 'marie-anne27@exemple.com', '81 rue de la gloire', 'Louvier', 0, 1, 1),
(18, 'Martin', 'Matin', 28, '0659471258', 'mat.mat@gmail.com', '16 rue pastel', 'Rouen', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cycle`
--

CREATE TABLE `cycle` (
  `cycle_id` int(11) NOT NULL,
  `cycle_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cycle`
--

INSERT INTO `cycle` (`cycle_id`, `cycle_name`) VALUES
(1, 'Bachelor A1'),
(2, 'Bachelor A2'),
(3, 'Bachelor A3');

-- --------------------------------------------------------

--
-- Structure de la table `speciality`
--

CREATE TABLE `speciality` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `speciality`
--

INSERT INTO `speciality` (`speciality_id`, `speciality_name`) VALUES
(1, 'Web Marketing'),
(2, 'Communication Graphique'),
(3, 'Community Management'),
(4, 'Développement Web'),
(5, 'Expert Digital');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `contacts_cycle_FK` (`cycle_id`),
  ADD KEY `contacts_speciality0_FK` (`speciality_id`);

--
-- Index pour la table `cycle`
--
ALTER TABLE `cycle`
  ADD PRIMARY KEY (`cycle_id`);

--
-- Index pour la table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`speciality_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `cycle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_cycle_FK` FOREIGN KEY (`cycle_id`) REFERENCES `cycle` (`cycle_id`),
  ADD CONSTRAINT `contacts_speciality0_FK` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`speciality_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
