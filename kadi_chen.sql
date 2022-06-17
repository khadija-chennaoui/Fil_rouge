-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 juin 2022 à 10:12
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kadi_chen`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `tele` int(30) NOT NULL,
  `email` text NOT NULL,
  `adrs` text NOT NULL,
  `password` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `tele`, `email`, `adrs`, `password`, `pass`) VALUES
(1, 'KHADIJA CHENNAOUI', 616825633, 'HGSD@HS;com', 'Manar ghgt', '123123', '123123');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `tele` int(20) NOT NULL,
  `email` text NOT NULL,
  `adrs` text NOT NULL,
  `PasswordC` text NOT NULL,
  `pass` text NOT NULL,
  `Role_Con` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `nom`, `tele`, `email`, `adrs`, `PasswordC`, `pass`, `Role_Con`) VALUES
(1, 'Khadija Chennaoui', 616825633, 'Khadijach896@gmail.com', 'QU MANAR RUE 07 NR 04 YOUSSOUFIA', 'azerty', 'azerty', '0'),
(2, 'Khadija Chennaoui', 616825633, 'Khadijach896@gmail.com', 'QU MANAR RUE 07 NR 04 YOUSSOUFIA', 'azerty', 'azerty', '0'),
(3, 'admin', 616825633, 'kadichen@gamil.com', '12 RUE 34N SAFI', 'azerty', 'azerty', 'Admin'),
(4, 'noha', 616825633, 'Khadijach896@gmail.com', 'QU MANAR RUE 07 NR 04 YOUSSOUFIA', 'qsdfgh', 'qsdfgh', 'Client'),
(5, 'soumia', 12345678, 'soma@gmail.com', 'SAFI 243 RUE N6', '12345', '12345', 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` text NOT NULL,
  `prix` int(40) NOT NULL,
  `quanti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `quanti`) VALUES
(3, 'R1.png', 'Bague', 2000, 1),
(5, 'AdobeStock_256671837_Preview.jpeg', 'Boucle', 399, 20),
(18, 'p3.png', 'KIKO', 8998, 54),
(20, 'fil.jpg', 'Bijou', 2000, 24),
(21, 'p3.png', 'Oumai abolhaytam', 76767, 45454),
(23, 'AdobeStock_256671837_Preview.jpeg', 'AZERTY', 2345, 87),
(25, 'po.png', 'sara', 765, 45),
(26, 'sss.png', 'Niama', 234, 11),
(28, 'p2.png', 'nohaila', 123456, 23);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
