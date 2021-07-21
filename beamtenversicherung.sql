-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mai 2021 à 07:21
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `beamtenversicherung`
--

-- --------------------------------------------------------

--
-- Structure de la table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(40) DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `testimonial`
--

INSERT INTO `testimonial` (`id`, `pseudo`, `content`) VALUES
(1, 'dfgdfg', 'dfgdf'),
(3, 'cv cv ', 'cv cv '),
(5, 'xc x', 'c xc '),
(21, 'cx ', ' xc cx'),
(22, ',hjh,j,hj', ',hj,h'),
(23, 'hj', 'hj'),
(26, 'hermanno', 'mus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntura description of an aspect of the enterprise Lorem ipsum dolorquatur totam architecto porro accusamus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntur\"mus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntura description of an aspect of the enterprise Lorem ipsum dolorquatur totam architecto porro accusamus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntur\"'),
(28, 'un testeur', 'un site tres top j\'adore !'),
(29, 'un testeur', 'un site tres top j\'adore !'),
(30, 'hermanno', '$Fetch_testimonials$Fetch_testimonials');

-- --------------------------------------------------------

--
-- Structure de la table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `pageName` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nb` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visits`
--

INSERT INTO `visits` (`id`, `pageName`, `ip`, `date`, `nb`) VALUES
(1, 'dfv', '::1', '2021-05-19 03:16:26', 1),
(3, '/beamtenversicherung-vkb/index.php', '198::1', '2021-05-19 03:50:51', 10),
(4, '/beamtenversicherung-vkb/index.php', ':0:1', '2021-05-19 04:34:43', 1),
(5, '/beamtenversicherung-vkb/index.php', '::1', '2021-05-19 06:20:57', 1),
(6, '/beamtenversicherung-vkb/Wunsche.php', '::1', '2021-05-19 04:40:50', 1),
(7, '/beamtenversicherung-vkb/about.php', '::1', '2021-05-19 04:43:09', 2),
(8, '/beamtenversicherung-vkb/datenschutz.php', '::1', '2021-05-19 04:44:26', 1),
(9, '/beamtenversicherung-vkb/Krankenversicherung.php', '::1', '2021-05-19 05:21:08', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
