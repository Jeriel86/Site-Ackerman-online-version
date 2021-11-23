-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 23 nov. 2021 à 18:38
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

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
-- Structure de la table `editable_page`
--

CREATE TABLE `editable_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `editable_page`
--

INSERT INTO `editable_page` (`id`, `title`, `description`) VALUES
(1, 'Home', ' the home page of the website'),
(2, 'Krankenversicherung', 'the page managing the forms for Krankenversicherung'),
(3, 'Wunche\r\n', 'The page managing the forms for Wunche\r\n'),
(4, 'Über Uns', 'page about the site and his owner');

-- --------------------------------------------------------

--
-- Structure de la table `editable_section`
--

CREATE TABLE `editable_section` (
  `id` int(11) NOT NULL,
  `source_code` longtext NOT NULL,
  `old_source_code` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `edited_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `rank_in_page` int(11) NOT NULL,
  `id_editable_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `editable_section`
--

INSERT INTO `editable_section` (`id`, `source_code`, `old_source_code`, `name`, `edited_at`, `rank_in_page`, `id_editable_page`) VALUES
(1, '    <section>\r\n      <div class=\"container\">\r\n        <h2 class=\"mt-5 text-center fw-bold\">Generalagentur Sascha Ackermann</h2>\r\n        <div class=\" p-3 mt-5 float-end\">\r\n          <img width=\"400px\" height=\"auto\" class=\"img-fluid img-thumbnail\" src=\"assets/bilder/Team.jpg\">\r\n        </div>\r\n        <div class=\"container mt-5 float-sart\">\r\n          <p> Wir sind das Team der Generalagentur Sascha Ackermann und sind seit Jahren der Ansprechpartner vieler Kunden, wenn es um den Versicherungsbereich geht.</p>\r\n          <p>Die Versicherungskammer Bayern Versicherungsanstalt des öffentlichen Rechts ist ein Personen- und\r\n              Sachversicherer. Wir betreuen Privatkunden, Landwirte, Firmen, kommunale Gebietskörperschaften sowie\r\n              öffentlich-rechtliche Institutionen und bieten ein umfangreiches Angebot an unseren Dienstleistungen und\r\n              Versicherungsprodukten, z.B. Lebensversicherung, private Kranken- und Pflegeversicherung sowie Unfall- und\r\n              Schadenversicherung.</p>\r\n          <p> Wir sind auf unterschiedliche Berufsbranchen spezialisiert. Auch für nicht berufsspezifische Versicherung, wie\r\n              Kraftfahrtversicherung, Rechtsschutz und Wohngebäudeversicherung sind wir ein professioneller\r\n              Ansprechpartner.</p>\r\n          <p>Auch in schwierigen Zeiten unserer Kunden sind wir für sie da. Wir begleiten unsere Kunden bei ihrer\r\n              persönlichen sowie beruflichen Entwicklung und beraten unsere Kunden in jeder Lebensphase und passen die\r\n              Produkte dem Wunsch und der Lebensphase des Kunden an.</p>\r\n          <p>Wir freuen uns Sie kennenzulernen. Bei uns sind Sie keine Kundennummer, wir lernen unsere Kunden und ihre kennen. Lassen Sie sich davon überzeugen! Wir freuen uns auf Sie!</p>\r\n        </div>\r\n      </div>\r\n    </section>\r\n    ', '    <section>\r\n      <div class=\"container\">\r\n        <h2 class=\"mt-5 text-center fw-bold\">Generalagentur Sascha Ackermann</h2>\r\n        <div class=\" p-3 mt-5 float-end\">\r\n          <img width=\"400px\" height=\"auto\" class=\"img-fluid img-thumbnail\" src=\"assets/bilder/Team.jpg\">\r\n        </div>\r\n        <div class=\"container mt-5 float-sart\">\r\n          <p> Wir sind das Team der Generalagentur Sascha Ackermann und sind seit Jahren der Ansprechpartner vieler Kunden, wenn es um den Versicherungsbereich geht.</p>\r\n          <p>Die Versicherungskammer Bayern Versicherungsanstalt des öffentlichen Rechts ist ein Personen- und\r\n              Sachversicherer. Wir betreuen Privatkunden, Landwirte, Firmen, kommunale Gebietskörperschaften sowie\r\n              öffentlich-rechtliche Institutionen und bieten ein umfangreiches Angebot an unseren Dienstleistungen und\r\n              Versicherungsprodukten, z.B. Lebensversicherung, private Kranken- und Pflegeversicherung sowie Unfall- und\r\n              Schadenversicherung.</p>\r\n          <p> Wir sind auf unterschiedliche Berufsbranchen spezialisiert. Auch für nicht berufsspezifische Versicherung, wie\r\n              Kraftfahrtversicherung, Rechtsschutz und Wohngebäudeversicherung sind wir ein professioneller\r\n              Ansprechpartner.</p>\r\n          <p>Auch in schwierigen Zeiten unserer Kunden sind wir für sie da. Wir begleiten unsere Kunden bei ihrer\r\n              persönlichen sowie beruflichen Entwicklung und beraten unsere Kunden in jeder Lebensphase und passen die\r\n              Produkte dem Wunsch und der Lebensphase des Kunden an.</p>\r\n          <p>Wir freuen uns Sie kennenzulernen. Bei uns sind Sie keine Kundennummer, wir lernen unsere Kunden und ihre kennen. Lassen Sie sich davon überzeugen! Wir freuen uns auf Sie!</p>\r\n        </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n      </div>\r\n    </section>\r\n    ', 'text_about_us', '2021-11-22 10:26:00', 1, 4),
(2, '  <section class=\"bg-light\">\r\n    <div id=\"carouselExampleCaptions\" class=\"carousel slide \" data-bs-ride=\"carousel\">\r\n      <div class=\"carousel-indicators\">\r\n        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\"\r\n          aria-current=\"true\" aria-label=\"Slide 1\"></button>\r\n        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\"\r\n          aria-label=\"Slide 2\"></button>\r\n        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\"\r\n          aria-label=\"Slide 3\"></button>\r\n        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"3\"\r\n          aria-label=\"Slide 4\"></button>\r\n      </div>\r\n      <div class=\"carousel-inner slider justify-content-center\">\r\n        <div style=\"position: absolute;height:92px;top:0px;\" class=\"m-carousel bg-light\">\r\n        </div>\r\n        <div class=\"carousel-item active\">\r\n          <div class=\"responsive-bg w-100 h-100\"\r\n            style=\"background: url(\'assets/bilder/image1.jpg\') no-repeat; background-size: cover; background-position:center center ;\">\r\n          </div>\r\n          <div class=\"overlay\"></div>\r\n          <div class=\"carousel-item-description justify-content-center carou w-100 p-0 m-0\">\r\n            <div class=\"mt-4 p-0\">\r\n              <ul class=\"txt  p-0  w-75 m-auto\">\r\n              <h4 class=\"\">Willkommen bei der Generalagentur Sascha Ackermann</h4>\r\n                <li>Wir möchten Sie als <span class=\"fst-italic fw-bold\">Menschen kennenlernen.</span></li>\r\n                <li>Wir <span class=\"fst-italic fw-bold\">helfen</span> Ihnen bei den\r\n                  ersten Schritten als Beamter.</li>\r\n                <li>Wir <span class=\"fst-italic fw-bold\">betreuen</span></betreuen> Sie <span\r\n                    class=\"fst-italic fw-bold\">deutschlandweit</span> und während Ihrer ganzen Laufbahn.</li>\r\n                <li>In jedem <span class=\"fst-italic fw-bold\">Versicherungsaspekt</span> sind wir für Sie da !</li>\r\n              </ul>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n        <div class=\"carousel-item\">\r\n          <div class=\"responsive-bg w-100 h-100\"\r\n            style=\"background-image: url(\'assets/bilder/image2.jpg\'); background-size: cover; background-position:center center;\">\r\n          </div>\r\n          <div class=\"overlay\"></div>\r\n          <div class=\"carousel-item-description justify-content-center w-100 p-0 m-0\">\r\n            <div class=\"mt-4 p-0\">\r\n              <ul class=\"txt p-0 w-75 m-auto\">\r\n                <h4 class=\"fw-bold\"> Ihr Online-Versicherungsbüro</h4>\r\n                <li>mit Erfahrung und Kompetenz</li>\r\n                <li>Versicherungsexperten für Beamte</li>\r\n                <li>in jeder Lebensphase und für jede Lebenslage</li>\r\n              </ul>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div class=\"carousel-item\">\r\n          <div class=\"responsive-bg w-100 h-100 img-fluid\"\r\n            style=\"background-image: url(\'assets/bilder/image3.jpg\'); background-size: cover; background-position:center center;\">\r\n          </div>\r\n          <div class=\"overlay\"></div>\r\n          <div class=\"carousel-item-description justify-content-center p-0 m-0 w-100 \">\r\n            <div class=\"mt-4 p-0 \">\r\n              <ul class=\"txt p-0 w-75 m-auto\"style=\"\">\r\n                <h4>Die ersten Schritte in die Zukunft als Student, Lehrer oder Beamter</h4>\r\n                <li class=\"mt-2\">Wählen Sie Ihren Berufsstatus und </li>\r\n                <li>erhalten Sie alle notwendigen Informationen.</li>\r\n                <li>Vereinbaren Sie jetzt einen Termin mit uns.</li>\r\n                <li>Wir sind persönlich, digital oder telefonisch für Sie da !</li>\r\n\r\n              </ul>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n        <div class=\"carousel-item\">\r\n          <div class=\"responsive-bg w-100 h-100\"\r\n            style=\"background-image: url(\'assets/bilder/image4.jpg\'); background-size: cover; background-position:center center;\">\r\n          </div>\r\n          <div class=\"overlay\"></div>\r\n          <div class=\"carousel-item-description justify-content-center p-0 m-0 w-100\">\r\n            <div class=\"mt-4 p-0\">\r\n              <ul class=\"txt p-0 w-75 m-auto\">\r\n                <h4>Sie sind noch ein/e Student/in?</h4>\r\n                <span>Dann informieren Sie sich jetzt schon über die notwendige Absicherung für heute und morgen</span>\r\n              </ul>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n      </div>\r\n      <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\"\r\n        data-bs-slide=\"prev\">\r\n        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n        <span class=\"visually-hidden\">Previous</span>\r\n      </button>\r\n      <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\"\r\n        data-bs-slide=\"next\">\r\n        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n        <span class=\"visually-hidden\">Next</span>\r\n      </button>\r\n    </div>\r\n  </section>\r\n', 'dfgdf', 'home section for carousel', '2021-11-02 01:14:18', 1, 1),
(3, '        <!------------------------------------------------------------------ Section 1: Leistungen -------------------------------------------------------->\r\n    <section class=\"leistung\">\r\n      <p>\r\n        <h5 class=\"text-center mt-5\">Unsere Leistungen für Sie</h5>\r\n      </p>\r\n      <div class=\"container contain\">\r\n        <div class=\"ligne\">\r\n          <div class=\"colone\">\r\n              <div class=\"col-md-4 mb-2  align-self-start text-center\">\r\n                  <button type=\"button\" class=\"button text-light\">\r\n                      Gesundheit und <br> Freizeit\r\n                  </button>\r\n              </div>\r\n              <div class=\"col-md-4 mb-2 mt-2 align-self-start  text-center\">\r\n                  <button type=\"button\" class=\"bt text-light bt1 p-4\">\r\n                      Wir bieten <span class=\"text-warning\"> Sonderkonditionen </span> für Beamte und öffentlichen\r\n                      Dienst-Mitarbeiter in allen privaten Absicherungsformen\r\n\r\n                  </button>\r\n              </div> \r\n          </div>\r\n          <div class=\"colone\">\r\n              <div class=\"col-md-4 mb-2  align-self-center text-center\">\r\n                  <button type=\"button\" class=\"button text-light\">\r\n                      Vorsorge und<br> Vermögen\r\n                  </button>\r\n              </div>\r\n              <div class=\"col-md-4 mb-2 mt-2  align-self-center text-center\">\r\n                  <button type=\"button\" class=\"bt text-light bt2 p-3\">\r\n                      Wir begleiten Sie <span class=\"text-warning\"> langfristig</span> und erstellen ein Angebot für Ihre\r\n                      Dienstunfähigkeitsversicherung, Diensthaftpflichtversicherung, sowie Ihre Altersvorsorge\r\n                  </button>\r\n              </div>\r\n          </div>\r\n          <div class=\"colone\">\r\n              <div class=\"col-md-4 mb-2 align-self-end text-center\">\r\n                  <button type=\"button\" class=\"button text-light\">\r\n                      KFZ, Haftpflicht<br> und Recht\r\n                  </button>\r\n              </div>\r\n              <div class=\"col-md-4 mb-2 mt-2 align-self-end text-center\">\r\n                  <button type=\"button\" class=\"bt text-light bt3 p-3\">\r\n                      Wir erstellen für Sie ein <span class=\"text-Warning\">individuelles</span> und auf Sie zugeschnittenes <span\r\n                              class=\"text-Warning\">Angebot </span> für die private Krankenversicherung und private Unfallversicherung\r\n                  </button>\r\n              </div>\r\n          </div>\r\n          </div>\r\n          <p class=\"text-center\">\r\n              Individuelle Beratung<span class=\"text-secondary\"> ●</span> auf Ihre Bedürfnisse angepasst <span\r\n                      class=\"text-secondary\"> ●</span>für Beamtenanwärter und Beamte\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </section>', 'dfgdf', 'Unsere Leistungen für Sie', '2021-11-02 01:15:49', 2, 1);

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
(10, 'dfvdf@gmail.vom', 'info@ackermann.vkb.de', 'Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!', '<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br><p> Hier ist seine E-Mail-Adresse: <a href=\'mailto:dfvdf@gmail.vom\'>dfvdf@gmail.vom </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> ', '2021-08-05 16:45:53', 'News Letter');

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
  `validation_token` varchar(255) DEFAULT NULL,
  `role` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_bin NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `superusers`
--

INSERT INTO `superusers` (`id`, `name`, `surname`, `mail`, `password`, `joined_at`, `account_validated`, `validation_token`, `role`) VALUES
(1, 'admin', 'SuperUser', 'superuser@gmail.com', '$2y$10$82QdFNryqwnIrsJT7Y.IeezcfZdLHDtHZJQX5p9B2y0xhofOjAxOa', '2021-08-25 09:52:04', 1, NULL, 'root'),
(2, 'teste', 'teste', 'test@gmail.com', '$2y$10$vayWeb8RJi9JyID2DsYw1OOGUlcKhpJ08eyG5XdgVXll8ZAib1lrG', '2021-08-25 09:56:09', 1, NULL, 'default');

-- --------------------------------------------------------

--
-- Structure de la table `superuser_edit_section`
--

CREATE TABLE `superuser_edit_section` (
  `id` int(11) NOT NULL,
  `edited_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `superuser_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(40) DEFAULT NULL,
  `content` text NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp(),
  `approved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `testimonial`
--

INSERT INTO `testimonial` (`id`, `pseudo`, `content`, `added_at`, `approved`) VALUES
(26, 'hermanno', 'mus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntura description of an aspect of the enterprise Lorem ipsum dolorquatur totam architecto porro accusamus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntur\"mus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntura description of an aspect of the enterprise Lorem ipsum dolorquatur totam architecto porro accusamus molestias autem nobis quasi quae, recusandae non eligendi. Facilis eius labore eaque consequuntur\"', '2021-08-04 00:00:00', 1),
(28, 'un testeur', 'un site tres top j\'adore !', '2021-08-04 00:00:00', 1),
(30, 'hermanno', '$Fetch_testimonials$Fetch_testimonials', '2021-08-04 00:00:00', 0),
(32, 'testeur', 'hefzlcs sdcs\r\ndfvdfvkdfj', '2021-08-04 00:00:00', 1),
(33, 'alex', 'ich möchte Lehrer für Mathe und Sport werden und bin gerade im 5 Semester. Nach der Beratung fühle ich mich sicherer auf meinen Weg zum Lehrersein. Auch telefonisch waren die Fragen einfach und verständlich erläutert.', '2021-08-04 00:00:00', 0),
(34, 'fgbfgbfgbfgb fgbjf gbhf gjb fgjb fjg', 'lfddffdd Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sed in perspiciatis sit, porro aut rem nemo id eligendi doloribus dignissimos enim accusantium ex tempore, vitae similique est? Reprehenderit, beatae.\r\n', '2021-08-04 00:00:00', 1),
(35, 'Lorem ipsum dolor sit amet consectetur a', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sed in perspiciatis sit, porro aut rem nemo id eligendi doloribus dignissimos enim accusantium ex tempore, vitae similique est? Reprehenderit, beatae.\r\n', '2021-08-04 00:00:00', 1),
(36, 'hermanno', 'szdvsd vsdjcv sidk cksd cksd cs', '2021-08-05 09:47:18', 0),
(37, 'christian', 'bah tiens !', '2021-08-05 14:49:35', 0),
(38, 'Fantasy Machine', 'bah ouais....!', '2021-08-05 14:50:49', 0),
(39, '-b+a/é', 'test\r\n', '2021-08-05 14:51:57', 0),
(40, '1', 'teste', '2021-10-30 18:49:40', 0),
(41, '1', 'teste', '2021-10-30 18:51:36', 0);

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
(10, '/beamtenversicherung-vkb.de/index.php', '::1', '2021-10-22 21:40:51', 8),
(11, '/beamtenversicherung-vkb.de/Wunsche.php', '::1', '2021-10-22 20:41:15', 5),
(12, '/beamtenversicherung-vkb.de/about.php', '::1', '2021-08-05 16:44:26', 3),
(13, '/beamtenversicherung-vkb.de/Krankenversicherung.php', '::1', '2021-08-05 14:52:32', 4),
(14, '/beamtenversicherung-vkb.de/Gewinnspiel.php', '::1', '2021-07-26 23:08:07', 1),
(15, '/beamtenversicherung-vkb.de/impressum.php', '::1', '2021-08-05 16:49:27', 1),
(16, '/WorkSpace/beamtenversicherung-vkb.de/index.php', '::1', '2021-11-23 06:16:57', 9),
(17, '/WorkSpace/beamtenversicherung-vkb.de/about.php', '::1', '2021-11-23 05:03:27', 7),
(18, '/WorkSpace/beamtenversicherung-vkb.de/_tests.php', '::1', '2021-10-25 20:38:04', 1),
(19, '/WorkSpace/beamtenversicherung-vkb.de/Wunsche.php', '::1', '2021-11-23 04:52:20', 1),
(20, '/WorkSpace/beamtenversicherung-vkb.de/Krankenversicherung.php', '::1', '2021-11-23 04:53:41', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `editable_page`
--
ALTER TABLE `editable_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `editable_section`
--
ALTER TABLE `editable_section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `fk_id_editable_page` (`id_editable_page`);

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
-- Index pour la table `superuser_edit_section`
--
ALTER TABLE `superuser_edit_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_superuser_id` (`superuser_id`),
  ADD KEY `fk_section_id` (`section_id`);

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
-- AUTO_INCREMENT pour la table `editable_page`
--
ALTER TABLE `editable_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `editable_section`
--
ALTER TABLE `editable_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT pour la table `superuser_edit_section`
--
ALTER TABLE `superuser_edit_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `editable_section`
--
ALTER TABLE `editable_section`
  ADD CONSTRAINT `fk_id_editable_page` FOREIGN KEY (`id_editable_page`) REFERENCES `editable_page` (`id`);

--
-- Contraintes pour la table `superuser_edit_section`
--
ALTER TABLE `superuser_edit_section`
  ADD CONSTRAINT `fk_section_id` FOREIGN KEY (`section_id`) REFERENCES `editable_section` (`id`),
  ADD CONSTRAINT `fk_superuser_id` FOREIGN KEY (`superuser_id`) REFERENCES `superusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
