-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Sep 2024 um 11:51
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `yinli_projekt_0930`
--
CREATE DATABASE IF NOT EXISTS `yinli_projekt_0930` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `yinli_projekt_0930`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `titel` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `punkte` decimal(2,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `titel`, `comment`, `punkte`, `created_at`, `updated_at`) VALUES
(1, 5, 'Stufen hinabgehen, wo unten.', 'Überschuß wöchentlich aus der Reihe, denen ihre Gartenhäuschen, Tulpenbeete und Krautfelder zugrunde gehen würde! Daß ich mich gern in Aktivität haben, sagst du, das hat alles so heilig, so wert! Ich hätte in dem verfallenen Kabinettchen geweint, das.', '3.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(2, 1, 'Zeit über mit offenen Augen.', 'Lieber! Ist nicht vielleicht das Sehnen in mir ruhen, die alle deine Kräfte verzehren muß.—Bester! Das ist wohl gesagt, und—bald gesagt. Und kannst du von dem ich unzertrennlich war, und froh zu sein! Ich weiß, Ihre Seele hängt sehr nach diesen Ideen.', '2.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(3, 1, 'Mein Tagebuch, das ich je.', 'Kind doch immer unser Glück, wenn wir teil an einer Naturerscheinung nehmen sollen? Wenn du auf diesen Eingang viel Hohes und Vornehmes erwartest, so bist du wieder übel betrogen; es ist in der Wut der Beleidigung es mit aller Zärtlichkeit, die dem.', '1.0', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(4, 4, 'Hand auf die Zettelchen, die.', 'Arbeit herangewachsen war, das weiter keine Aussicht von Vergnügen kannte, als etwa Sonntags in so ein Eckchen setzen und mit der Bitte, sie selbigen Tags noch sehen zu dürfen; sie gestand mir\'s zu, und mit tausend Küssen. Ach, wenn ich an seiner Nase.', '1.0', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(5, 5, 'Grab. Am 3. September Ich.', 'Tagen untergraben hast, und sie überwältig, sind die schwach zu nennen? Und, mein Guter, wenn Anstrengung Stärke ist, warum soll die Überspannung das Gegenteil sein?\"—Albert sah mich nicht! Ich lese in ihren mannigfaltigen Krümmungen von den.', '4.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(6, 5, 'Alte sein Gehör anstrengte.', 'Vater die Treue und den Gehorsam einer Frau. Du wirst mir also nicht übelnehmen, wenn ich mich Sonntags in so wenig Augenblicken so wert geworden war, gedacht hatte. Genug, ich verwirrte mich, vergaß mich und kramte viel Wissens aus, von Batteux bis zu.', '3.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(7, 3, 'Seiten des Ufers, denen ihre.', 'Wald einen Pfad durchzuarbeiten, durch die Dornen, die mich verletzen, durch die Dornen, die mich verletzen, durch die Augen fallen mir zu einem quälenden Geist, der mich auf der Welt bin!—Wilhelm, es ist eine muntere, heftige Frau von dem besten.', '3.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(8, 5, 'Last getragen hast, mich vom.', 'Munterkeit, womit er aus seinen schwarzen Augen weidete—wie die lebendigen Lippen und die Bedingungen, unter welchen sie bereit wäre, so wär\'s unerträglich, ihn vor meinem Angesicht im Besitz so vieler Vollkommenheit zu sehen.—Besitz!—genug, Wilhelm.', '2.0', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(9, 2, 'Sachen abhandeln und baute.', 'Bette standen, und wie um mich, wenn ich ihm die einfachen Freuden zu rauben, die aus ihm selbst hervorkeimen. Alle Geschenke, alle Gefälligkeiten der Freundschaft auf, die tausendmal werter sind als jene blendenden Geschenke, wodurch uns die Arbeit.', '3.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(10, 3, 'Felsen zerschmettert wird?.', 'Geschöpfe einen Tropfen Linderung zu verschaffen, und dann sein Nachfolger geworden. Die Geschichte war nicht lange sitzen; ich stand auf, trat näher hin und pflücke Blumen am Wege, füge sie sehr sorgfältig in einen Husten verfiel, der unsern Diskurs.', '1.5', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(11, 3, 'Bank vor der Haustür, und da.', 'Gesundheit zu erhalten\".—ich bemerkte, daß der gelassene, vernünftige Mensch den Zustand Unglücklichen übersieht, vergebens, daß er ihm zuredet! Ebenso wie ein Sohn, von den Kindern machen wie Gott mit uns, der uns am Schlage, bemächtigten sich ihrer.', '5.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(12, 5, 'Füßen sitzendes Kind mit dem.', 'Vergangene soll mir vergangen sein. Gewiß, du hast Sinn für so etwas—wie ich mich wieder vorwärts—mir wird\'s so schwindelig vor allen Sinnen.—O! Und ihre Unschuld, ihre unbefangene Seele fühlt nicht, wie sehr er wünschte, daß sie alle Mittel aufsuchen.', '1.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(13, 4, 'Gewerbe größer, warst du.', 'Gedanke erregt mir Widerwillen\". \"Daß ihr Menschen\", rief ich lächelnd aus. \"Leidenschaft! Trunkenheit! Wahnsinn! Ihr steht so gelassen, so ohne Teilnehmung da, ihr sittlichen Menschen, scheltet den Trinker, verabscheut den Unsinnigen, geht vorbei wie.', '2.5', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(14, 9, 'Paradiese schuf, wird mir.', 'Rotznäschens, herzlich zu küssen. \"Vetter?\" sagte ich, indem ich mich herzhaft stellte, um den zweiten Contretanz; sie sagte mir ihre Gründe, Ursachen und die Ruhe der Seele bei dem Eintritte, daß nicht ein Zerstörer bist, sein mußt; der harmloseste.', '2.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(15, 2, 'Bange des Zustandes doppelt.', 'Pfarrhof traten, saß der gute alte Mann auf einer Bank vor der Haustür, und da tut mir\'s weh, wenn unser Weg nur eine kleine Welt in ein Kollegium zu setzen; nur mit seiner Kunst. O meine Freunde! Warum der Strom des Genies so selten an ein Buch komme.', '1.5', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(16, 4, 'Grase am fallenden Bache.', 'Sie ist wieder Wahlheim, und wenn ich mich wohl befinde, und zwar—kurz und gut, ich habe mit mehr Respekt nie einer Taufhandlung beigewohnt; und als Lotte beschäftigt war, einen Kreis von Stühlen zu stellen und, als sich die Wände, zwischen denen man.', '4.5', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(17, 2, 'Sinn und ihre Verwirrung nur.', 'Terrasse hervor und sah der Sonne mutig tanzten, und ihr Tänzer inzwischen meine Tänzerin unterhalten sollte. Nun ging\'s an, und wie er erst sein Vikar und dann sein Nachfolger geworden. Die Geschichte war nicht lange sitzen; ich stand auf, trat näher.', '1.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(18, 1, 'Anschlag, wenn Leidenschaft.', 'Lotten an und sagte: \"nimm mir\'s nicht übel, die Beispiele, die du gibst, scheinen hieher gar nicht zu helfen wissen würde, und du vor dem Mädchen hat, muß ich leben! Am 6. Julius Sie ist eine muntere, heftige Frau von dem Unglücklichen, dessen Leben.', '2.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(19, 1, 'Welt machen als List und.', 'Stunde sich in den Hof kam\".—Lotte fragte nach seiner Tochter; es hieß, sie sei mit Herrn Schmidt durch den Hof nach dem Orte ein Brunnen, ein Brunnen, ein Brunnen, ein Brunnen, an den Morgen aufgehalten hätte. Was auf unserer Hereinfahrt vom Balle.', '2.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(20, 10, 'Mich vergnügte der Anblick.', 'Kragen am Surtout geruht hatten, machte mir das schöne Bild verderben? Am 16. Julius Ach wie mir Ossian gefiele! Am 11. Julius Frau M. ist sehr weitläufig, und es wurde ausgemacht, daß ich meine Empfindung mit nichts ausdrücken konnte, als ich sie je.', '1.0', '2024-09-30 07:37:18', '2024-09-30 07:37:18');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sorte` varchar(255) NOT NULL,
  `volume` decimal(2,1) NOT NULL,
  `special` varchar(255) DEFAULT NULL,
  `preis` decimal(3,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `menus`
--

INSERT INTO `menus` (`id`, `name`, `sorte`, `volume`, `special`, `preis`, `created_at`, `updated_at`) VALUES
(1, 'Brown Sugar', 'Brown-Sugar', '0.5', 'mit Tapioka', '6.50', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(2, 'Yakult Maracuja', 'Brown-Sugar', '0.7', 'mit mit Basilikumsamen und Tapioka', '7.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(3, 'Taro Brown Sugar', 'Brown-Sugar', '0.5', 'mit Tapioka', '6.80', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(4, 'Lychee Butterfly Tea', 'Brown-Sugar', '0.5', 'mit Basilikumsamen und Lychee Jelly', '7.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(5, 'Caramel Oolong Milk Tea', 'Milky-Tee', '0.5', 'mit Tapioka', '5.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(6, 'Matcha Milk Tea', 'Milky-Tee', '0.5', 'mit Tapioka', '6.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(7, 'Lychee Butterfly Tea', 'Milky-Tee', '0.7', 'mit Tapioka', '7.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(8, 'Blueberry Yoghurt', 'Yoghurt', '0.5', 'mit Tapioka', '6.60', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(9, 'Strawberry Yoghurt', 'Yoghurt', '0.5', '', '6.50', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(10, 'Mango Yoghurt', 'Yoghurt', '0.5', '', '7.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(11, 'Kissy Mango', 'Fruity-Tee', '0.5', 'mit Tapioka', '6.00', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(12, 'Passionfruit Daddy', 'Fruity-Tee', '0.7', 'mit Tapioka', '6.50', '2024-09-30 07:37:18', '2024-09-30 07:37:18');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_25_125202_create_comments_table', 1),
(6, '2024_09_26_205128_user_id_in_comments_table', 1),
(7, '2024_09_30_090210_create_menus_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `city`, `info`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Herr Prof. Dr. Metin Runge', '(09230) 860 4645', 'Emmerich am Rhein', 'Träne gen Himmel sieht, der Todesschweiß auf der Wiese mit ein paar Terzerolen ungeladen und schlief ruhig. Einmal an einem schönen Nachmittage unter die Linden kam, fand ich das Lamentieren, und.', 'karlheinz84@example.org', '2024-09-30 07:36:29', '$2y$12$vAnWRGeyNDn9yZ7b6UWqz.MTIIrVplFj1GpIOP5y.XB1lxP8lqIVK', 'TkhoCkPDkxYMgi0aPWFN3AOuM2kXZUOcampzWbzqr4PDoiCPai0etxv4NDLx', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(2, 'Frau Prof. Dr. Emmy Reimer', '(0961) 480 3217', 'Schwetzingen', 'Atem ihres Mundes meine Lippen erreichen kann:—ich glaube zu versinken, wie vom Wetter gerührt.—und, Wilhelm! Wenn ich mich herzhaft stellte, um den Hals und küßte es lebhaft, das sogleich zu.', 'okrauss@example.net', '2024-09-30 07:36:29', '$2y$12$vAnWRGeyNDn9yZ7b6UWqz.MTIIrVplFj1GpIOP5y.XB1lxP8lqIVK', 'miR92ED7Dq', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(3, 'Detlef Günther-Linke', '(02257) 183 5470', 'Weil am Rhein', 'Fluß zwischen den Kastanienbäumen die weite Gegend überschauen!—die in einander geketteten Hügel und vertraulichen Täler!—o könnte ich mich oft in meinem Vorsatze, mich künftig allein an die anderen.', 'ria.kunz@example.net', '2024-09-30 07:36:29', '$2y$12$vAnWRGeyNDn9yZ7b6UWqz.MTIIrVplFj1GpIOP5y.XB1lxP8lqIVK', 'nZFFjfrzvn', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(4, 'Diethard Rausch MBA.', '07777 5745970', 'Achim', 'Becher des Unendlichen jene schwellende Lebenswonne zu trinken und nur Lottens Stimme, die mir alles rings umher verging, und—Wilhelm, um ehrlich zu sein, als ich durch einen unwegsamen Wald einen.', 'nkunze@example.net', '2024-09-30 07:36:29', '$2y$12$vAnWRGeyNDn9yZ7b6UWqz.MTIIrVplFj1GpIOP5y.XB1lxP8lqIVK', 'dLTaBxl9C7', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(5, 'Hartmut Haupt', '(06135) 9834176', 'Karben', 'Kreise häuslicher Beschäftigungen, wöchentlicher bestimmter Arbeit herangewachsen war, das weiter keine Aussicht von Vergnügen kannte, als etwa Sonntags in so ein Eckchen setzen und mit einer.', 'liselotte72@example.org', '2024-09-30 07:36:29', '$2y$12$vAnWRGeyNDn9yZ7b6UWqz.MTIIrVplFj1GpIOP5y.XB1lxP8lqIVK', 'rTI43qeTFZ', '2024-09-30 07:36:29', '2024-09-30 07:36:29'),
(6, 'Hilda Niemann B.Sc.', '05667 9075845', 'Ahrensburg', 'Mamsell Lottchen würde gleich kommen. Ich ging durch den weiten, ausgehauenen Wald nach dem Zweck, sie will die Seinige werden, sie will in ewiger Verbindung all das Glück antreffen, das ihr die.', 'hanspeter15@example.net', '2024-09-30 07:37:17', '$2y$12$Pu1gc3pOysa8BMQmIcPOV.lYGdZdwg6RalS9UQA.2cPtnd6Sy/2Si', 'a3C1GEg7in', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(7, 'Hans-Martin Winter', '0345 981 2922', 'Weimar', 'Welt machen als List und Bosheit. Wenigstens sind die Weiber fein und haben recht; wenn sie nicht—Gott weiß, warum sie wollen, darin sind alle hochgelahrten Schul—und Hofmeister einig; daß aber auch.', 'wilhelm.annette@example.org', '2024-09-30 07:37:18', '$2y$12$Pu1gc3pOysa8BMQmIcPOV.lYGdZdwg6RalS9UQA.2cPtnd6Sy/2Si', 'JF6iiuXMsb', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(8, 'Karl-Heinrich Werner MBA.', '(0271) 802 1005', 'Karlsruhe', 'Sinn für so etwas—wie ich mich nicht an den Morgen aufgehalten hätte. Was auf unserer Hereinfahrt vom Balle geschehen ist, habe ich nur wüßte wohin, ich ginge wohl. Abends Mein Tagebuch, das ich.', 'berg.tim@example.net', '2024-09-30 07:37:18', '$2y$12$Pu1gc3pOysa8BMQmIcPOV.lYGdZdwg6RalS9UQA.2cPtnd6Sy/2Si', 'kacaGyzjjz', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(9, 'Hans-Werner Thiele', '034458 4269752', 'Unterhaching', 'Tränen kamen mir in allen Nerven umkehrte.—sie hat eine Melodie, die sie zerschlagen hatten. Auch ging er darauf in der Stube auf und ab, setzte mich wieder: es war gewiß nicht auf zu limitieren, zu.', 'nico.rudolph@example.com', '2024-09-30 07:37:18', '$2y$12$Pu1gc3pOysa8BMQmIcPOV.lYGdZdwg6RalS9UQA.2cPtnd6Sy/2Si', '9RrFhNYvAL', '2024-09-30 07:37:18', '2024-09-30 07:37:18'),
(10, 'Anette Rupp', '+4977630102136', 'Lüdenscheid', 'Mann war ganz zerrissen. Albert, du warst im Zimmer. Sie hörte jemand gehn und fragte sie, ob sie Mutter von den Kleinen wie ein Gesunder, der am Bette des Kranken steht, ihm von seinen Kräften.', 'mike03@example.net', '2024-09-30 07:37:18', '$2y$12$Pu1gc3pOysa8BMQmIcPOV.lYGdZdwg6RalS9UQA.2cPtnd6Sy/2Si', 'BZwiZXjeWd', '2024-09-30 07:37:18', '2024-09-30 07:37:18');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indizes für die Tabelle `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indizes für die Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
