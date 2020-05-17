-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 17 mai 2020 à 20:50
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `announcement`
--

CREATE TABLE `announcement` (
  `announce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `announcement`
--

INSERT INTO `announcement` (`announce`) VALUES
('etryytreytrey'),
('zergezgrezgrzeg'),
('Ma petite annonce'),
('  Ma nouvelle annonce admin'),
('Blabla');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `password`, `email`, `age`, `status`) VALUES
(132, 'abdoul', 'akram', 'password', 'akram.abdl@outlook.fr', 20, 'admin'),
(133, 'abdoul', 'akram', 'blabla', 'akram.abdl@outlook.fr', 20, 'admin'),
(134, 'Sky', 'Surfleet', 'XzNo93NsB4gy', 'ssurfleet0@quantcast.com', 20, 'candidate'),
(135, 'Shadow', 'Penner', '3ZaYvNCKioEh', 'spenner1@vinaora.com', 33, 'company'),
(136, 'Libby', 'Langsbury', '9ZlespWVotYX', 'llangsbury2@cdbaby.com', 39, 'candidate'),
(137, 'Trenton', 'Bullant', '4Kcaf8', 'tbullant3@amazon.co.jp', 29, 'candidate'),
(138, 'Glennie', 'Fulks', 'TtEjasbmPYtW', 'gfulks4@prweb.com', 23, 'candidate'),
(139, 'Madalyn', 'Timperley', 'BOhMkE', 'mtimperley5@unblog.fr', 24, 'company'),
(140, 'Luelle', 'Antonat', 'bRQ03z5', 'lantonat6@google.es', 26, 'candidate'),
(141, 'Suzie', 'Jouannin', '3AA3UFB4Ts', 'sjouannin7@cyberchimps.com', 27, 'candidate'),
(142, 'Berry', 'Tresise', 'knfR7UmGfQ5', 'btresise8@topsy.com', 26, 'candidate'),
(143, 'Leigha', 'Elion', 'hbZN8sfkD', 'lelion9@jiathis.com', 30, 'candidate'),
(144, 'Kimberlee', 'Cinavas', 'Lr5cMTx6MzJt', 'kcinavasa@google.com.au', 31, 'company'),
(145, 'Jozef', 'Chipps', '4iLYWECwi4J1', 'jchippsb@adobe.com', 40, 'candidate'),
(146, 'Fiona', 'Cossom', '4h4645H', 'fcossomc@blogspot.com', 30, 'candidate'),
(147, 'Romy', 'Rentoul', '7CuPJ98En0S', 'rrentould@gravatar.com', 39, 'candidate'),
(148, 'Pete', 'Nelissen', '5UG7qVEYEUhf', 'pnelissene@so-net.ne.jp', 33, 'candidate'),
(149, 'Hillyer', 'Abbes', 'rVp3fLj8c3', 'habbesf@phoca.cz', 27, 'candidate'),
(150, 'Nevil', 'Filyakov', 'JPgMMqWLqkG', 'nfilyakovg@tamu.edu', 23, 'candidate'),
(151, 'Antonie', 'Gerrish', 'ib6tzmjMhc7', 'agerrishh@usda.gov', 22, 'candidate'),
(152, 'Alethea', 'Peek', 'OBSGlEo5', 'apeekj@unicef.org', 24, 'candidate'),
(153, 'Faustina', 'Ilewicz', 'CVS7Bkn2zI6D', 'filewiczk@taobao.com', 39, 'admin'),
(154, 'Letisha', 'Fossey', 'BFu9WFwYP', 'lfosseyl@wsj.com', 24, 'candidate'),
(155, 'Viviana', 'Ardley', 'eztF9tjuA9l', 'vardleym@typepad.com', 31, 'candidate'),
(156, 'Rolland', 'Bernuzzi', 'DoPRkcETfM', 'rbernuzzin@pbs.org', 36, 'candidate'),
(157, 'Austin', 'McMurtyr', 'eRlvOmyhA', 'amcmurtyro@ask.com', 27, 'candidate'),
(158, 'Lin', 'Adolphine', 'LmuqMU4ff', 'ladolphinep@google.it', 28, 'company'),
(159, 'Darya', 'Iveson', 'MQnc4pXIDE', 'divesonq@blogger.com', 33, 'company'),
(160, 'Dacy', 'Hollerin', 'n52OdjrV', 'dhollerinr@shareasale.com', 35, 'candidate'),
(161, 'Gigi', 'Stiant', 'kUjr574d5g', 'gstiants@bloglovin.com', 33, 'admin'),
(162, 'Jaimie', 'Maior', 'IPNa1FK', 'jmaiort@bigcartel.com', 31, 'candidate');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
