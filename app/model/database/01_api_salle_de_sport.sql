-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 31 oct. 2022 à 11:01
-- Version du serveur : 8.0.28
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `01_api_salle_de_sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220927134948', '2022-09-27 13:50:04', 5301),
('DoctrineMigrations\\Version20220927141114', '2022-09-27 14:11:27', 22593);

-- --------------------------------------------------------

--
-- Structure de la table `mdp`
--

CREATE TABLE `mdp` (
  `id` int NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `RePassword` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `id` int NOT NULL,
  `structure_id` int DEFAULT NULL,
  `vendre_boissons` tinyint(1) NOT NULL,
  `vendre_equipements` tinyint(1) NOT NULL,
  `gerer_planning` tinyint(1) NOT NULL,
  `envoyer_newsletter` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

CREATE TABLE `partner` (
  `id` int NOT NULL,
  `partner_id` int NOT NULL,
  `partner_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `partner_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partner`
--

INSERT INTO `partner` (`id`, `partner_id`, `partner_name`, `partner_email`, `partner_password`, `partner_active`) VALUES
(1, 18, 'elite_fitness_paris', 'elite_fitness_paris@gmail.com', 'EliteFitnessParis67874522@*', '1'),
(2, 15, 'elite_fitness_ablis', 'elite.fitness.ablis@gmail.com', 'eliteFitnessAblis@2058*', '0'),
(3, 2, 'elite_fitness_st_tropez', 'elite.fitness.st.tropez@gmail.com', 'EliteFitnessStTropez89821à@*', '1'),
(4, 8, 'elite_fitness_cachy', 'elite.fitness.cachy@gmail.com', 'EliteFitnessCachy5975@*', '0'),
(5, 22, 'elite_fitness_chalais', 'elite.fitness.chalais@gmail.com', 'EliteFitnessChalais54516@*', '0'),
(6, 12, 'elite_fitness_dienne', 'elite.fitness.dienne@gmail.com', 'EliteFitnessDienne214887@*', '1'),
(7, 5, 'elite_fitness_sablet', 'elite.fitness.sablet@gmail.com  ', 'Elite.Fitness.Sablet7165804*@', '1'),
(8, 10, 'elite_fitness_upie', 'elite.fitness.upie@gmail.com', 'EliteFitnessUpie568421@*', '0');

-- --------------------------------------------------------

--
-- Structure de la table `recherche_partners`
--

CREATE TABLE `recherche_partners` (
  `id` int NOT NULL,
  `r_partners` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `actif` varchar(50) NOT NULL,
  `inactif` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recherche_partners`
--

INSERT INTO `recherche_partners` (`id`, `r_partners`, `actif`, `inactif`) VALUES
(1, 'ELITE FITNESS PARIS ', '0', ''),
(2, 'ELITE FITNESS ABLIS ', '0', ''),
(3, 'ELITE FITNESS SAINT TROPEZ ', '0', ''),
(4, 'ELITE FITNESS CACHY', '0', ''),
(5, 'ELITE FITNESS CHALAIS ', '0', ''),
(6, 'ELITE FITNESS DIENNE ', '0', ''),
(7, 'ELITE FITNESS SABLET ', '0', ''),
(8, 'ELITE FITNESS UPIE ', '0', ''),
(9, '', 'ELITE FITNESS PARIS', 'ELITE FITNESS ABLIS '),
(10, '', 'ELITE FITNESS SAINT TROPEZ ', 'ELITE FITNESS CACHY '),
(11, '', 'ELITE FITNESS DIENNE ', 'ELITE FITNESS CHALAIS'),
(12, '', 'ELITE FITNESS SABLET ', 'ELITE FITNESS UPIE');

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE `structure` (
  `id` int NOT NULL,
  `partner_id` int DEFAULT NULL,
  `structure_id` int NOT NULL,
  `structure_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_adress` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_zipcode` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `structure`
--

INSERT INTO `structure` (`id`, `partner_id`, `structure_id`, `structure_name`, `structure_adress`, `structure_zipcode`, `structure_city`, `structure_email`, `structure_password`, `structure_active`) VALUES
(1, NULL, 18, 'ELITE FITNESS PARIS ', '50 allée Galilée ', '75010', 'PARIS', 'structure_paris@gmail.com', 'StructureEliteParis500892@*', 1),
(2, NULL, 15, 'ELITE FITNESS ABLIS ', '43 allée de jardin ', '78660', 'ABLIS', 'structure_ablis@gmail.com', 'StructureAblisElite20898*@', 0),
(3, NULL, 2, 'ELITE FITNESS SAINT TROPEZ ', '12 allée du bureau ', '83990', 'SAINT TROPEZ', 'structure_st_tropez@gmail.com', 'StructureEliteSt5002@*34', 1),
(4, NULL, 8, 'ELITE FITNESS CACHY ', '24 rue du bac ', '80800', 'CACHY', 'structure_cachy@gmail.com', 'StructureCachyElite56489*@', 0),
(5, NULL, 22, 'ELITE FITNESS CHALAIS', '82 rue de Rivoli ', '16210', 'CHALAIS', 'structure_chalais@gmail.com', 'StuctureChalais558901@*', 0),
(6, NULL, 12, 'ELITE FITNESS DIENNE ', '11 allée de garage', '86410', 'DIENNE', 'structure_dienne@gmail.com', 'StructureDienne58940@*', 1),
(7, NULL, 5, 'ELITE FITNESS SABLET ', '68 rue du commerce ', '84110', 'SABLET', 'structure_sablet@gmail.com', 'StuructureSabletElite6874*@', 1),
(8, NULL, 10, 'ELITE FITNESS UPIE', '7 allée maison ', '26120', 'UPIE', 'structure_upie@gmail.com', 'StructureUpieElite54792@*', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `structure_id` int DEFAULT NULL,
  `partner_id` int DEFAULT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D035FA872534008B` (`structure_id`);

--
-- Index pour la table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recherche_partners`
--
ALTER TABLE `recherche_partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6F0137EA9393F8FE` (`partner_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8D93D6492534008B` (`structure_id`),
  ADD KEY `IDX_8D93D6499393F8FE` (`partner_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `options`
--
ALTER TABLE `options`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `recherche_partners`
--
ALTER TABLE `recherche_partners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `FK_D035FA872534008B` FOREIGN KEY (`structure_id`) REFERENCES `structure` (`id`);

--
-- Contraintes pour la table `structure`
--
ALTER TABLE `structure`
  ADD CONSTRAINT `FK_6F0137EA9393F8FE` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6492534008B` FOREIGN KEY (`structure_id`) REFERENCES `structure` (`id`),
  ADD CONSTRAINT `FK_8D93D6499393F8FE` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
