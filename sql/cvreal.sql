-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 18:21
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvreal`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id_about` int(3) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numero` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_about`, `nom`, `prenom`, `adresse`, `numero`, `email`, `info`) VALUES
(2, 'Croisic', 'Franck', 'Rue ako,naokok', '2556451456', 'franck.ramassamy971@gmail.com', 'Je suis un chorizo qui se balade dans la nature ');

-- --------------------------------------------------------

--
-- Structure de la table `awards`
--

CREATE TABLE `awards` (
  `nom_awards` varchar(75) DEFAULT NULL,
  `id_awards` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `awards`
--

INSERT INTO `awards` (`nom_awards`, `id_awards`) VALUES
('CHAMPION DU MONDE 2020', 2);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `nom` varchar(25) NOT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `id_experience` int(3) NOT NULL,
  `dates` varchar(25) NOT NULL,
  `organisation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`nom`, `descriptions`, `id_experience`, `dates`, `organisation`) VALUES
('aaaaaaa', 'aaaaaaa', 47, 'aaaaaaaa', 'aaaaaaaa'),
('ZZZZZZZZZ', 'ZZZZZZ', 51, 'ZZZZZZ', 'ZZZZZZZZ'),
('a', 'a', 52, 'a', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `interests`
--

CREATE TABLE `interests` (
  `descriptions` varchar(500) DEFAULT NULL,
  `id_interests` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `nomEcole` varchar(50) NOT NULL,
  `nomFormation` varchar(50) NOT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `id_parcours` int(3) NOT NULL,
  `dates_parcours` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`nomEcole`, `nomFormation`, `descriptions`, `id_parcours`, `dates_parcours`) VALUES
('A', 'A', 'A', 3, 'A'),
('AAA', 'AAA', 'AAA', 4, 'AAAA'),
('ynov', 'a', 'a', 5, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_image` int(3) NOT NULL,
  `url_image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id_image`, `url_image`) VALUES
(1, 'https://www.myteam-foot.fr/2202-large_default/ballon-nike-pitch-team.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `maitrises` varchar(25) DEFAULT NULL,
  `workflow` varchar(50) DEFAULT NULL,
  `id_skills` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Index pour la table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id_awards`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id_interests`);

--
-- Index pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD PRIMARY KEY (`id_parcours`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skills`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `awards`
--
ALTER TABLE `awards`
  MODIFY `id_awards` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `interests`
--
ALTER TABLE `interests`
  MODIFY `id_interests` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `parcours`
--
ALTER TABLE `parcours`
  MODIFY `id_parcours` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skills` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
