-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 fév. 2026 à 18:58
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `daeu`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `article_description` varchar(191) NOT NULL,
  `article_prix` int NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_description`, `article_prix`) VALUES
(1, 'Stylo bille bleu', 2),
(2, 'Stylo bille noir', 2),
(3, 'Stylo bille rouge', 2),
(4, 'Cahier A4 96 pages', 4),
(5, 'Cahier A4 192 pages', 6),
(6, 'Cahier A5 96 pages', 3),
(7, 'Classeur A4', 5),
(8, 'Intercalaires carton', 3),
(9, 'Intercalaires plastique', 4),
(10, 'Ramette papier A4', 7),
(11, 'Surligneur jaune', 2),
(12, 'Surligneur vert', 2),
(13, 'Surligneur rose', 2),
(14, 'Crayon papier HB', 1),
(15, 'Crayon papier 2B', 1),
(16, 'Gomme blanche', 1),
(17, 'Taille-crayon', 1),
(18, 'Règle 30cm', 2),
(19, 'Règle 20cm', 1),
(20, 'Compas scolaire', 4),
(21, 'Rapporteur', 2),
(22, 'Équerre', 2),
(23, 'Agenda scolaire', 8),
(24, 'Bloc notes A4', 4),
(25, 'Bloc notes A5', 3),
(26, 'Feutres couleurs x12', 6),
(27, 'Feutres couleurs x24', 10),
(28, 'Crayons couleur x12', 5),
(29, 'Crayons couleur x24', 9),
(30, 'Correcteur blanc', 2),
(31, 'Colle en stick', 1),
(32, 'Colle liquide', 2),
(33, 'Ciseaux scolaires', 3),
(34, 'Ciseaux bureau', 5),
(35, 'Chemise cartonnée', 1),
(36, 'Chemise plastique', 1),
(37, 'Pochette perforée', 1),
(38, 'Lot pochettes x100', 6),
(39, 'Calculatrice simple', 8),
(40, 'Calculatrice scientifique', 18),
(41, 'Tableau blanc effaçable', 12),
(42, 'Marqueur tableau noir', 2),
(43, 'Marqueur tableau bleu', 2),
(44, 'Marqueur tableau rouge', 2),
(45, 'Effaceur tableau', 3),
(46, 'Clé USB 8Go', 6),
(47, 'Clé USB 16Go', 9),
(48, 'Clé USB 32Go', 14),
(49, 'Disque dur externe 1To', 55),
(50, 'Souris USB', 10),
(51, 'Souris sans fil', 15),
(52, 'Clavier USB', 18),
(53, 'Casque audio filaire', 20),
(54, 'Casque audio Bluetooth', 35),
(55, 'Webcam HD', 30),
(56, 'Tapis de souris', 5),
(57, 'Support ordinateur portable', 25),
(58, 'Sac à dos étudiant', 40),
(59, 'Sacoche ordinateur', 35),
(60, 'Chargeur USB', 12),
(61, 'Multiprise', 10),
(62, 'Lampe de bureau', 22),
(63, 'Batterie externe', 28),
(64, 'Stylo plume', 12),
(65, 'Encre stylo plume', 5),
(66, 'Carnet de notes', 4),
(67, 'Carnet spirale', 5),
(68, 'Agenda semainier', 7),
(69, 'Agenda journalier', 10),
(70, 'Bloc dessin A4', 6),
(71, 'Bloc dessin A3', 9),
(72, 'Feuilles blanches x200', 4),
(73, 'Feuilles à carreaux x200', 4),
(74, 'Porte-vues 40 vues', 6),
(75, 'Porte-vues 80 vues', 9),
(76, 'Classeur levier', 7),
(77, 'Boîte d’archives', 6),
(78, 'Post-it jaunes', 2),
(79, 'Post-it couleurs', 3),
(80, 'Ruban adhésif', 1),
(81, 'Dévidoir scotch', 4),
(82, 'Enveloppes C4 x25', 5),
(83, 'Enveloppes DL x25', 3),
(84, 'Imprimante jet d’encre', 60),
(85, 'Cartouche encre noire', 25),
(86, 'Cartouche encre couleur', 30),
(87, 'Papier photo', 10),
(88, 'Stylet tactile', 8),
(89, 'Tablette graphique', 70),
(90, 'Casier de rangement', 15),
(91, 'Boîte à crayons', 4),
(92, 'Chronomètre', 9),
(93, 'Montre digitale', 18),
(94, 'Montre connectée', 75),
(95, 'Support téléphone', 6),
(96, 'Anneaux de reliure', 3),
(97, 'Reliure spirale', 5),
(98, 'Plastifieuse', 45),
(99, 'Pochettes plastification', 8),
(100, 'Destructeur papier', 55),
(101, 'Scanner portable', 80),
(102, 'Imprimante laser', 120),
(103, 'Toner noir', 60),
(104, 'Toner couleur', 90),
(105, 'Étiquette autocollante', 4),
(106, 'Badge plastique', 2),
(107, 'Pointeur laser', 12),
(108, 'Micro USB', 25),
(109, 'Trépied smartphone', 20),
(110, 'Caméra sport', 95),
(111, 'Carte mémoire 64Go', 18),
(112, 'Carte mémoire 128Go', 32),
(113, 'Lecteur carte USB', 10),
(114, 'Hub USB', 14),
(115, 'Câble HDMI', 9),
(116, 'Adaptateur USB-C', 12),
(117, 'Écran 24 pouces', 140),
(118, 'Écran 27 pouces', 190),
(119, 'Support écran', 35),
(120, 'Chaise de bureau', 85),
(121, 'Bureau étudiant', 120),
(122, 'piunceiio', 15);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `commande_id` int NOT NULL AUTO_INCREMENT,
  `etudiant_id` int UNSIGNED NOT NULL,
  `commande_date` datetime NOT NULL,
  `commande_montant` int NOT NULL,
  PRIMARY KEY (`commande_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`commande_id`, `etudiant_id`, `commande_date`, `commande_montant`) VALUES
(1, 1, '2026-02-10 18:08:13', 64);

-- --------------------------------------------------------

--
-- Structure de la table `commandes_details`
--

DROP TABLE IF EXISTS `commandes_details`;
CREATE TABLE IF NOT EXISTS `commandes_details` (
  `commande_detail_id` int NOT NULL AUTO_INCREMENT,
  `commande_id` int UNSIGNED NOT NULL,
  `article_id` int UNSIGNED NOT NULL,
  `article_quantite` int NOT NULL,
  PRIMARY KEY (`commande_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commandes_details`
--

INSERT INTO `commandes_details` (`commande_detail_id`, `commande_id`, `article_id`, `article_quantite`) VALUES
(1, 1, 1, 2),
(2, 1, 4, 3),
(3, 1, 23, 1),
(4, 1, 40, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `etudiant_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `groupe_id` int NOT NULL,
  PRIMARY KEY (`etudiant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`etudiant_id`, `nom`, `prenom`, `age`, `email`, `groupe_id`) VALUES
(4, 'Bernard', 'Sophie', 22, 'sophie.bernard@email.com', 1),
(6, 'Morel', 'Camille', 19, 'camille.morel@email.com', 1),
(8, 'Fournier', 'Emma', 20, 'emma.fournier@email.com', 1),
(9, 'Girard', 'Hugo', 25, 'hugo.girard@email.com', 1),
(10, 'Lefevre', 'Alice', 23, 'alice.lefevre@email.com', 1),
(11, 'Mercier', 'Julien', 22, 'julien.mercier@email.com', 2),
(12, 'Robin', 'Laura', 21, 'laura.robin@email.com', 2),
(13, 'Moreau', 'Nathan', 24, 'nathan.moreau@email.com', 2),
(14, 'Garnier', 'Elodie', 19, 'elodie.garnier@email.com', 2),
(15, 'Lambert', 'Thomas', 23, 'thomas.lambert@email.com', 2),
(1, 'Durand', 'Alex', 22, 'alex.durand@email.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `groupe_id` int NOT NULL AUTO_INCREMENT,
  `groupe_name` varchar(191) NOT NULL,
  PRIMARY KEY (`groupe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`groupe_id`, `groupe_name`) VALUES
(1, 'GROUPE_1'),
(2, 'GROUPE_2');

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `panier_id` int NOT NULL AUTO_INCREMENT,
  `etudiant_id` int UNSIGNED NOT NULL,
  `commande_id` int UNSIGNED NOT NULL,
  `panier_statut` int NOT NULL,
  PRIMARY KEY (`panier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `paniers`
--

INSERT INTO `paniers` (`panier_id`, `etudiant_id`, `commande_id`, `panier_statut`) VALUES
(1, 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
