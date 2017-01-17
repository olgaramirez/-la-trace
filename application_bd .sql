-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Décembre 2016 à 16:37
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `application_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux_tb`
--

CREATE TABLE `animaux_tb` (
  `ID_animaux` tinyint(4) NOT NULL,
  `nom_animaux` varchar(50) NOT NULL,
  `icone_animaux` varchar(60) NOT NULL,
  `description_animaux` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `animaux_tb`
--

INSERT INTO `animaux_tb` (`ID_animaux`, `nom_animaux`, `icone_animaux`, `description_animaux`) VALUES
(1, 'Renard', 'icone_renard.png', 'Le renard roux est un mammifère qui ressemble à un petit chien agile et de charpente délicate; son museau et ses oreilles sont pointus, son pelage long et lustré et sa queue, grande et touffue.\r\n'),
(2, 'Orignal', 'icone_orignal.png', 'L’orignal mâle adulte, doté de son panache complet, est l’animal le plus imposant de l’Amérique du Nord.\r\nSes épaules sont voûtées et les muscles massifs qui s’y attachent le font paraître bossu.'),
(3, 'Ours', 'icone_ours.png', 'Malgré que l’ours noir soit un mammifère trapu et massif, il est capable de ramasser, avec ses lèvres flexibles et sa longue langue agile, de minuscules aliments comme des bleuets et des fourmis.'),
(4, 'Castor', 'icone_castor.png', 'Nageur habile et très gracieux, sous l’eau comme à la surface, le castor est aussi capable d’abattre de très gros arbres. Il peut fermer ses lèvres derrière ses dents incisives et aussi ronger sous l’eau.'),
(5, 'Écureuil', 'icone_ecureuil.png', 'Célèbre pour sa longue queue touffue, celle-ci peut lui servir de gouvernail lorsque l’écureuil saute d’endroits élevés, le tenir au chaud comme couverture durant l’hiver et même lui servir de parasol en été.'),
(6, 'Cerf', 'icone_cerf.png', 'Le chevreuil est de la même famille que les cerfs. C’est un animal agile et très rapide, à la robe brunâtre et à la face plutôt grise, et qui porte des bois plutôt courts, tombant généralement à la fin de l’automne.'),
(7, 'Phoque', 'icone_phoque.png', 'Le phoque est un mammifère marin dont l’épaisse couche de graisse lui donne plutôt l’habileté protectrice pour vivre dans l’eau froide où il y est très à l’aise (mais beaucoup plus maladroit sur la terre ferme).'),
(8, 'Coyote', 'icone_coyote.png', 'Le coyote a de larges oreilles pointues et dressées, un museau effilé et le nez noir. Ses yeux jaunes, en amande avec des pupilles noires et rondes donnent au coyote cet air rusé qui le caractérise bien.'),
(9, 'Marmotte', 'icone_marmotte.png', 'Petit animal trapu à tête aplatie, la marmotte a une courte queue touffue. La couleur de la fourrure, variable d’une région ou d’un animal à l’autre, va du brun jaunâtre au brun foncé rougeâtre.'),
(10, 'Lynx', 'icone_lynx.png', 'Le lynx ressemble à un très grand chat domestique. Il a la queue courte, de grands pieds et des touffes de poils proéminentes sur les oreilles. Son pelage est long et gris en hiver; plutôt court et brun en été.'),
(11, 'Lièvre', 'icone_lievre.png', 'Timide et discret, son pelage gris brun en été passe souvent inaperçu. Sa fourrure devient d’un blanc presque immaculé et dès la première neige, il se trahit par les traces caractéristiques de ses pattes.'),
(13, 'Tortue', 'icone_tortue.png', 'Ayant une taille et un habitat très variable, la tortue se distingue des autres reptiles par sa carapace qui est constituée d''un plastron et qui lui permet de se protéger en cachant sa tête et même ses pattes.');

-- --------------------------------------------------------

--
-- Structure de la table `animaux_vus_tb`
--

CREATE TABLE `animaux_vus_tb` (
  `ID_animaux_vus` smallint(6) NOT NULL,
  `ID_animaux` tinyint(4) NOT NULL,
  `largeur_x` text NOT NULL,
  `hauteur_y` text NOT NULL,
  `data_animaux_vus` datetime NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `animaux_vus_tb`
--

INSERT INTO `animaux_vus_tb` (`ID_animaux_vus`, `ID_animaux`, `largeur_x`, `hauteur_y`, `data_animaux_vus`, `Description`) VALUES
(1, 3, '46.830394', '-71.227172', '2016-10-02 17:04:08', ''),
(2, 11, '46.84', '-71.227172', '2016-11-01 03:14:15', ''),
(3, 4, '46.820394', '-71.226', '2016-11-18 21:00:04', ''),
(4, 5, '46.831', '-71.228', '2016-11-13 10:18:04', ''),
(5, 8, '46.830494', '-33.92010', '2016-10-09 17:46:10', ''),
(6, 9, '46.830384', '151.23001', '2016-10-27 20:01:19', ''),
(7, 2, '46.829394', '-71.228172', '2016-11-15 13:17:13', ''),
(8, 2, '46.829394', '-71.226172', '2016-11-10 20:12:25', ''),
(10, 10, '46.831394', '-71.229172', '2016-12-02 00:00:00', ''),
(70, 5, '46.820394', '-71.207172', '0000-00-00 00:00:00', ''),
(74, 13, '46.835394', '-71.223172', '0000-00-00 00:00:00', ''),
(76, 7, '46.827394', '-71.222172', '0000-00-00 00:00:00', ''),
(81, 6, '46.823394', '-71.232172', '0000-00-00 00:00:00', ''),
(82, 1, '46.824394', '-71.231172', '0000-00-00 00:00:00', ''),
(120, 8, '46.92004128620963', '-71.25314642136279', '2016-12-15 13:07:47', ''),
(121, 8, '46.84078362144603', '-71.26690059460411', '2016-12-15 13:08:57', ''),
(122, 9, '46.87050282560335', '-71.22062507893948', '2016-12-15 13:09:09', ''),
(123, 9, '46.87186656716453', '-71.2305264440845', '2016-12-15 13:09:45', ''),
(124, 6, '46.86102827834061', '-71.25597003533223', '2016-12-15 13:09:53', ''),
(131, 6, '46.8446686149432', '-71.25894845717582', '2016-12-15 13:11:25', ''),
(132, 4, '46.86594695840584', '-71.26702729373987', '2016-12-15 15:13:35', ''),
(133, 3, '46.84517956002166', '-71.23408413925682', '2016-12-16 08:46:54', ''),
(134, 2, '46.86818470857868', '-71.22765379478099', '2016-12-16 10:35:40', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `animaux_tb`
--
ALTER TABLE `animaux_tb`
  ADD PRIMARY KEY (`ID_animaux`),
  ADD UNIQUE KEY `ID_animaux` (`ID_animaux`);

--
-- Index pour la table `animaux_vus_tb`
--
ALTER TABLE `animaux_vus_tb`
  ADD PRIMARY KEY (`ID_animaux_vus`),
  ADD UNIQUE KEY `ID_animaux_vus` (`ID_animaux_vus`),
  ADD KEY `ID_animaux` (`ID_animaux`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `animaux_tb`
--
ALTER TABLE `animaux_tb`
  MODIFY `ID_animaux` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `animaux_vus_tb`
--
ALTER TABLE `animaux_vus_tb`
  MODIFY `ID_animaux_vus` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animaux_vus_tb`
--
ALTER TABLE `animaux_vus_tb`
  ADD CONSTRAINT `animaux_vus_tb_ibfk_1` FOREIGN KEY (`ID_animaux`) REFERENCES `animaux_tb` (`ID_animaux`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
