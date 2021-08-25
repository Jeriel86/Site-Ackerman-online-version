-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 août 2021 à 12:05
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
-- Structure de la table `mails_sent`
--

CREATE TABLE `mails_sent` (
  `id` int(11) NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `destination` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT current_timestamp(),
  `source_form` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mails_sent`
--

INSERT INTO `mails_sent` (`id`, `source`, `destination`, `subject`, `message`, `sent_at`, `source_form`) VALUES
(2, NULL, 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:Hermannno@gmil.cil\'>Hermannno@gmil.cil </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 09:02:43', 'News Letter'),
(3, NULL, 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:Hermannno@gmil.cil\'>Hermannno@gmil.cil </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 09:27:46', 'News Letter'),
(4, NULL, 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:Hermannno@gmil.cil\'>Hermannno@gmil.cil </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 09:28:26', 'News Letter'),
(5, NULL, 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:clarck@gmail.com\'>clarck@gmail.com </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 09:28:37', 'News Letter'),
(6, NULL, 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:dfvdff@dgf.dg\'>dfvdff@dgf.dg </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 09:42:24', 'News Letter'),
(7, NULL, 'info@ackermann.vkb.de', 'Neue Mail, gesendet von der Homepage', '<center><h2> Hallo ! Ein neuer Benutzer hat das Formular gesendet! Hier sind seine Informationen </h2></center> <br><br> <caption> <center>INFORMATIONEN IN DAS FORMULAR GEFÜLLT</center> </caption>    <center> \r\n                        <table border=\'1\'>\r\n                            <tr>\r\n                                <td><b>Name and Vorname :</b></td>\r\n                                <td> hermanno</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Email :</b></td>\r\n                                <td> <a href=\'mailto:Hermannno@gmil.cil\'>Hermannno@gmil.cil</a></td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Nachricht :</b></td>\r\n                                <td> <pre>sdfvsdfv sdvsdfvsdfvfsdvl,df</pre></td>\r\n                            </tr>\r\n                        </table>\r\n                    </center>\r\n                    ', '2021-08-05 09:48:52', 'Contact Us'),
(8, NULL, 'info@ackermann.vkb.de', 'Neue Mail, gesendet von der Homepage', '<center><h2> Hallo ! Ein neuer Benutzer hat das Formular gesendet! Hier sind seine Informationen </h2></center> <br><br> <caption> <center>INFORMATIONEN IN DAS FORMULAR GEFÜLLT</center> </caption>    <center> \r\n                        <table border=\'1\'>\r\n                            <tr>\r\n                                <td><b>Name and Vorname :</b></td>\r\n                                <td> hermanno</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Email :</b></td>\r\n                                <td> <a href=\'mailto:Hermannno@gmil.cil\'>Hermannno@gmil.cil</a></td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Nachricht :</b></td>\r\n                                <td> <pre>sdfvfdfvdf vdfvd</pre></td>\r\n                            </tr>\r\n                        </table>\r\n                    </center>\r\n                    ', '2021-08-05 09:50:42', 'Contact Us'),
(9, NULL, 'info@ackermann.vkb.de', 'New mail, sent from the home page', '<center><h2>Hallo ! Ein neuer Benutzer hat das Formular gesendet! Hier sind seine Informationen </h2></center> <br><br> <caption> <center>INFORMATIONEN IN DAS FORMULAR GEFÜLLT</center> </caption>    <center> \r\n                        <table border=\'1\'>\r\n                            <tr>\r\n                                <td><b>Name and Vorname :</b></td>\r\n                                <td> hermanno</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Straße :</b></td>\r\n                                <td> FGH</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>PLZ, ORT :</b></td>\r\n                                <td> dfg</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Email :</b></td>\r\n                                <td> <a href=\'mailto:dfvdf@gmail.vom\'>dfvdf@gmail.vom</a></td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Telefonnumer :</b></td>\r\n                                <td> <a href=\'mailtotel:45657676565\'>45657676565</a></td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td><b>Geburtsdatum :</b></td>\r\n                                <td> 2021-08-21</td>\r\n                            </tr>\r\n                        </table>\r\n                    </center>\r\n                    <br> <caption> <center>BENUTZERWAHL </center> </caption><center> \r\n    <table border=\'1\'>\r\n        \r\n        <tr>\r\n            <td><b>Derzeitiger Berufstatus<sup> </sup></b></td>\r\n            <td>Beamtenanwarter</td>\r\n        </tr>\r\n        \r\n        <tr>\r\n            <td><b>Famillienstand : <sup> </sup></b></td>\r\n            <td>Verwitwet</td>\r\n        </tr>\r\n        \r\n        <tr>\r\n            <td><b>Wie sind Sie derzeit versichert ?<sup> </sup></b></td>\r\n            <td>privat</td>\r\n        </tr>\r\n        \r\n        <tr>\r\n            <td><b>Beihilfeland : <sup></sup></b></td>\r\n            <td>Bundesland</td>\r\n        </tr>\r\n        \r\n        <tr>\r\n            <td><b>Anzahl der kinder : <sup></sup></b></td>\r\n            <td>1_kind</td>\r\n        </tr>\r\n        \r\n        <tr>\r\n            <td><b>Wünschen Sie sich zusatzliche Leistungen ?<sup> </sup></b></td>\r\n            <td>Zahnbehandlung; </td>\r\n        </tr>\r\n        \r\n        <tr>\r\n            <td><b>Wie mochte Sie im Krankenhaus untergebracht werden ?<sup> </sup></b></td>\r\n            <td>2_Bettzimmer</td>\r\n        </tr>\r\n            </table>\r\n            </center>', '2021-08-05 09:54:11', 'KrankenversicherungForm'),
(10, 'dfvdf@gmail.vom', 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:dfvdf@gmail.vom\'>dfvdf@gmail.vom </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 16:45:53', 'News Letter'),
(11, 'dfgdf@dfgdf', 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:dfgdf@dfgdf\'>dfgdf@dfgdf </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 16:46:21', 'News Letter');

-- --------------------------------------------------------

--
-- Structure de la table `superusers`
--

CREATE TABLE `superusers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joined_at` datetime DEFAULT current_timestamp(),
  `account_validated` tinyint(1) NOT NULL DEFAULT 0,
  `validation_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `superusers`
--

INSERT INTO `superusers` (`id`, `name`, `surname`, `mail`, `password`, `joined_at`, `account_validated`, `validation_token`) VALUES
(1, 'admin', 'SuperUser', 'superuser@gmail.com', '$2y$10$82QdFNryqwnIrsJT7Y.IeezcfZdLHDtHZJQX5p9B2y0xhofOjAxOa', '2021-08-25 09:52:04', 1, NULL),
(2, 'teste', 'teste', 'test@gmail.com', '$2y$10$vayWeb8RJi9JyID2DsYw1OOGUlcKhpJ08eyG5XdgVXll8ZAib1lrG', '2021-08-25 09:56:09', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(40) DEFAULT NULL,
  `content` text NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `testimonial`
--

INSERT INTO `testimonial` (`id`, `pseudo`, `content`, `added_at`) VALUES
(1, 'dfgdfg', 'dfgdf', '2021-08-04 00:00:00'),
(3, 'cv cv ', 'cv cv ', '2021-08-04 00:00:00'),
(5, 'xc x', 'c xc ', '2021-08-04 00:00:00'),
(21, 'cx ', ' xc cx', '2021-08-04 00:00:00'),
(22, ',hjh,j,hj', ',hj,h', '2021-08-04 00:00:00'),
(23, 'hj', 'hj', '2021-08-04 00:00:00'),
(26, 'hermanno', 'mus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntura description of an aspect of the enterprise Lorem ipsum dolorquatur totam architecto porro accusamus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntur\"mus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntura description of an aspect of the enterprise Lorem ipsum dolorquatur totam architecto porro accusamus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntur\"', '2021-08-04 00:00:00'),
(28, 'un testeur', 'un site tres top j\'adore !', '2021-08-04 00:00:00'),
(29, 'un testeur', 'un site tres top j\'adore !', '2021-08-04 00:00:00'),
(30, 'hermanno', '$Fetch_testimonials$Fetch_testimonials', '2021-08-04 00:00:00'),
(31, 'dfv', ',n ,b', '2021-08-04 00:00:00'),
(32, 'testeur', 'hefzlcs sdcs\r\ndfvdfvkdfj', '2021-08-04 00:00:00'),
(33, 'alex', 'ich möchte Lehrer für Mathe und Sport werden und bin gerade im 5 Semester. Nach der Beratung fühle ich mich sicherer auf meinen Weg zum Lehrersein. Auch telefonisch waren die Fragen einfach und verständlich erläutert.', '2021-08-04 00:00:00'),
(34, 'fgbfgbfgbfgb fgbjf gbhf gjb fgjb fjg', 'lfddffdd Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sed in perspiciatis sit, porro aut rem nemo id eligendi doloribus dignissimos enim accusantium ex tempore, vitae similique est? Reprehenderit, beatae.\r\n', '2021-08-04 00:00:00'),
(35, 'Lorem ipsum dolor sit amet consectetur a', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sed in perspiciatis sit, porro aut rem nemo id eligendi doloribus dignissimos enim accusantium ex tempore, vitae similique est? Reprehenderit, beatae.\r\n', '2021-08-04 00:00:00'),
(36, 'hermanno', 'szdvsd vsdjcv sidk cksd cksd cs', '2021-08-05 09:47:18'),
(37, 'christian', 'bah tiens !', '2021-08-05 14:49:35'),
(38, 'Fantasy Machine', 'bah ouais....!', '2021-08-05 14:50:49'),
(39, '-b+a/é', 'test\r\n', '2021-08-05 14:51:57');

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
(9, '/beamtenversicherung-vkb/Krankenversicherung.php', '::1', '2021-05-19 05:21:08', 1),
(10, '/beamtenversicherung-vkb.de/index.php', '::1', '2021-08-25 08:46:53', 7),
(11, '/beamtenversicherung-vkb.de/Wunsche.php', '::1', '2021-08-05 14:58:06', 4),
(12, '/beamtenversicherung-vkb.de/about.php', '::1', '2021-08-05 16:44:26', 3),
(13, '/beamtenversicherung-vkb.de/Krankenversicherung.php', '::1', '2021-08-05 14:52:32', 4),
(14, '/beamtenversicherung-vkb.de/Gewinnspiel.php', '::1', '2021-07-26 23:08:07', 1),
(15, '/beamtenversicherung-vkb.de/impressum.php', '::1', '2021-08-05 16:49:27', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mails_sent`
--
ALTER TABLE `mails_sent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `superusers`
--
ALTER TABLE `superusers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `mails_sent`
--
ALTER TABLE `mails_sent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `superusers`
--
ALTER TABLE `superusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
