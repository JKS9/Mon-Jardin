-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2018 at 03:12 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MonJardin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `id_produit` int(20) NOT NULL,
  `id_categories` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `id_produit`, `id_categories`) VALUES
(1, 3, 2),
(3, 4, 2),
(5, 5, 2),
(7, 6, 2),
(9, 7, 2),
(11, 8, 2),
(13, 9, 2),
(15, 10, 2),
(17, 11, 2),
(19, 12, 2),
(21, 13, 2),
(23, 14, 2),
(25, 15, 2),
(28, 16, 2),
(30, 17, 2),
(32, 18, 2),
(34, 19, 2),
(36, 20, 2),
(40, 22, 2),
(42, 23, 2),
(44, 24, 2),
(46, 25, 2),
(47, 26, 1),
(48, 27, 1),
(49, 28, 1),
(50, 29, 1),
(51, 30, 1),
(52, 31, 1),
(53, 32, 1),
(54, 33, 1),
(55, 34, 3),
(56, 35, 3),
(57, 36, 3),
(58, 37, 3),
(59, 38, 3),
(60, 39, 3),
(61, 40, 3),
(62, 41, 3),
(63, 42, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Commande`
--

CREATE TABLE `Commande` (
  `id` int(11) NOT NULL,
  `id_users` int(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `codePostal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Commande`
--

INSERT INTO `Commande` (`id`, `id_users`, `date`, `numero`, `rue`, `ville`, `codePostal`) VALUES
(9, 1, '2018-12-20', '28', 'Rue ernest renan', 'Eaubonne', '95600'),
(11, 1, '2018-12-22', '28', 'Rue ernest renan', 'Eaubonne', '95600');

-- --------------------------------------------------------

--
-- Table structure for table `Produits`
--

CREATE TABLE `Produits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `actif` int(1) DEFAULT NULL,
  `view` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Produits`
--

INSERT INTO `Produits` (`id`, `name`, `description`, `prix`, `actif`, `view`) VALUES
(3, 'Ajania', 'Des feuilles persisitantes de couleur vert mat et dessinées par un liserer beige soutiennent de nombreuses fleurs qui feurissent au bout de courtes tiges charnues et un peu duveteuses. Les fleurs jaune d’or restent compactes et sérées dans leur calice. Elles sont groupées par 5 ou 6 fleurs par tige. L’Ajania est de taille moyenne, 40 cm de hauteur, idem en largeur, qui aime le soleil.', 5, 1, '51'),
(4, 'Anemone', 'L’anémone sylvie et l’anémone fausse-renoncule atteignent une hauteur d’environ 10 à 20 cm et forment de grands tapis de fleurs. L’anémone de Caen peut atteindre une hauteur de 40 cm. L’anémone des forêts (A. sylvestris) pousse même dans la zone racinaire sèche de grands arbres. Elle fleurit à partir du mois de mai et dégage un délicat parfum.', 15, 1, '87'),
(5, 'Aster', 'Les fleurs, généralement assez petites, sont présentes en multitude étoilée le long de chaque tige. En outre, la période de floraison s\'avère remarquablement longue, puisque elle s\'étale de la fin du mois d\'août au mois de novembre.', 10, 1, '32'),
(6, 'Begonia', 'Bégonias de petit développement, à fleurs très doubles, offrant une floribondité exceptionnelle. Permet de constituer des massifs et bordures très fleuris.', 6, 1, '47'),
(7, 'Bougainvillier', 'Le Bougainvillier (Bougainvillea) est un arbuste de taille moyenne, cultivé pour ses fleurs entourées de 3 bractées colorées réparties sur l\'ensemble des branches.\r\n', 16, 1, ''),
(8, 'Browalia', 'browallia est un arbuste tropical appartenant à la famille des Solanacées, comme la tomate ou le tabac. Ce bel arbuste très décoratif est originaire d’Amérique du Sud, provenant des sous-bois clairs du nord des Andes, présent en Colombie, Équateur et Pérou.', 13, 1, '9'),
(9, 'Campanule', 'Une plante longtemps en fleurs, incontournable pour les bordures et les rocailles.Cette campanule tapissante et persistante donne à partir de mai de belles clochettes étoilées violet pourpré intense. C\'est une variété robuste à effet décoratif garanti. Son port tapissant est parfait pour recouvrir les bords de murets.', 11, 1, '8'),
(10, 'Celosie', 'A l\'extrémité des tiges des célosies, une multitude de petites fleurs aux couleurs chatoyantes, jaune pâle, jaune d\'or, orange, rose, rouge etc....sont regroupées en épis plumeux, feuillage de couleur vert clair', 8, 1, ''),
(12, 'Clivia', 'Le Clivia est une belle plante d’intérieur originaire d’Afrique du Sud. Assez semblable à sa cousine, le Clivia porte des fleurs groupées en grappes de février à avril présentant des teintes variables suivant les hybrides. Les fleurs orange sont cependant les plus fréquentes.', 14, 1, '2'),
(13, 'Columnéa', 'Cultivé comme plante d\'intérieur, le columnéa est prisé pour son beau feuillage au port souple et retombant, et sa floraison généreuse et colorée. Certaines espèces fleurissent toute l\'année si elles bénéficient de chaleur, d\'humidité et de lumière.', 30, 1, '16'),
(14, 'Crocus', 'Le crocus est une plante facile à vivre qui fleurit en toute saison, selon l’espèce, et même sous la neige. Qui plus est, le crocus se prête très bien au forçage, technique qui vous permet de profiter de ses belles fleurs avant l’heure.', 16, 1, ''),
(15, 'Curcuma', 'Cette belle vivace aux racines tubéreuses et charnues appartient à la famille des Zingibéracées', 60, 1, ''),
(16, 'Cylclamen', 'Cyclamen à grandes fleurs violet foncé, aux pétales léger, au toucher de velours et délicatement nervurés.', 12, 1, ''),
(19, 'Dipladenia', ' Plante grimpante saisonnière à tiges ligneuses, de croissance rapide, feuillage vernissé vert foncé brillant, très florifère, fleur en forme d\'entonnoir, rouge, blanc ou rose, à gorge jaune, se referme la nuit.', 15, 1, '2'),
(20, 'Euphorbe', 'L’euphorbe mellifère monte à près de 2m50 de hauteur et autant en largeur avec un port arrondi très ornemental. Son feuillage persistant est lui aussi très décoratif. Il présente des feuilles lancéolées, vert foncé avec une nervure claire centrale. Elles sont disposées en rosette, ce qui lui donne un aspect graphique intéressant.', 25, 1, ''),
(22, 'Gardenia', 'Ce gardénia aux très belles fleurs doubles, blanches et parfumées, a la particularité d\'être très résistant au gel (rusticité -10°C). Il présente un beau feuillage brillant, vert foncé. Ce petit arbuste ne dépassera pas 1m de hauteur une fois adulte, pour seulement 60cm à 1m de largeur.', 22, 1, ''),
(26, 'Aloe Vera', 'L’aloe vera forme une touffe graphique composée de feuilles succulentes gris-vert légèrement tachetées. Il peut lui arriver de fleurir en été quand il bénéficie de suffisamment de lumière. Il apprécie les situations chaudes en été et accepte en hiver des températures plus fraîches (autour de 10°C).', 14, 1, '95'),
(27, 'Calathea', 'La Ctenanthe setosa est une plante tropicale originaire des forêts humides du Sud-est du Brésil. Elle fait partie de la famille des Marantacées, qui comprend de nombreux sujets très appréciés pour la beauté de leur feuillage.', 30, 1, '0'),
(28, 'cupressus', ' Ce Cupressus macrocarpa est un conifère de taille moyenne, aux rameaux de section ronde et aux gros fruits en cônes sphériques.', 45, 1, '0'),
(29, 'Cycas', ' Les Cycas sont des plantes arbustives à mi-chemin entre les palmiers et les fougères. Ces plantes, également appelées fougère-palmier, présentent des feuilles pennées, épaisses, réparties en rosettes autour du pied central, formant une dépression sur le dessus. ', 32, 1, '0'),
(30, 'Theca', ' Plante d\'intérieur arbustive très appréciée pour ses grandes feuilles persistantes très fines et très découpées.', 5, 1, '1'),
(31, 'Eichhornia', 'Eichhornia est un genre de plantes herbacées aquatiques de la famille des Pontederiaceae.', 45, 1, '0'),
(32, 'Ficus', 'Le genre Ficus regroupe environ 800 espèces originaires d’Amérique, d’Afrique et d’Asie. Le Ficus ginseng, ou Ficus microcarp, est une plante cultivée pour son feuillage très décoratif, qui apportera une touche de luminosité à votre intérieur. Cette espèce est idéale à conduire en bonsaï. ', 46, 1, '0'),
(33, 'hydrocotyles', 'Les hydrocotyles forment un genre de plantes aquatiques ou semi-aquatiques autrefois classées parmi les Apiaceae et maintenant dans la famille des Araliaceae. Dans leur aire naturelle de répartition, les hydrocotyles sont des plantes très communes.', 30, 1, '0'),
(34, 'Abelia', '  Avec son beau feuillage panaché qui tranche sur les fleurs blanches à calice rose, l\'Abélia \'Magic Daydream\' est un arbuste nain parfait en petit jardin et balcon.', 30, 1, '0'),
(35, 'Agave', '  Symbole des jardins du Sud de la France et du pourtour méditerranéen, l\'Agave est une plante graphique au feuillage argenté. Sa floraison est spectaculaire et peut atteindre 10m de haut.', 20, 1, '0'),
(36, 'Orchidees', 'L\'Arbre aux Orchidées possède ce nom grâce à ses fleurs qui y ressemblent beaucoup. Parfumées, elles prennent des teintes de rose et de pourpre.', 30, 1, '2'),
(37, 'Decaisnea', 'Le Decaisnea produit des gousses bleues consommées en Chine. Les feuilles caduques peuvent mesurer de 60 à 90cm de long.', 80, 1, '0'),
(38, 'Astelias', 'Le plus beau des Astélias avec son feuillage aux reflets métalliques. Il sublime les massifs d\'agapanthes bleues.', 12, 1, '0'),
(39, 'Abyssinie', 'Nouveau dans notre gamme, le Bananier d\'Abyssinie est,très décoratif par ses feuilles vertes nervurées de rouge. La pousse du Bananier Maurelli est rapide. Cultivé dehors en plein soleil, il reste bien compact.', 180, 1, '0'),
(40, 'Lotus Or', 'Le Lotus d\'Or est un bananier nain au large feuillage bleuté. Il se cultive aussi bien au jardin qu\'en pot dans la maison.', 120, 1, '0'),
(41, 'Bulbine', 'Les tiges et feuilles épaisses de la Bulbine jaune-orange \'Hallmark\' renferment ses réserves d\'eau. On aperçoit la floraison orangée et jaune de Juin à Septembre.', 56, 1, '0'),
(42, 'Echium', 'On plante l\'Echium candicans dans un endroit très ensoleillé. Les belles fleurs bleues en épis s\'ouvrent au printemps.', 41, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `Produits_commande`
--

CREATE TABLE `Produits_commande` (
  `id` int(11) NOT NULL,
  `id_commande` int(20) NOT NULL DEFAULT '0',
  `id_produit` int(20) NOT NULL,
  `nb_produit` int(20) NOT NULL,
  `id_users` int(11) NOT NULL,
  `etat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Produits_commande`
--

INSERT INTO `Produits_commande` (`id`, `id_commande`, `id_produit`, `nb_produit`, `id_users`, `etat`) VALUES
(19, 9, 4, 1, 1, 1),
(20, 9, 3, 1, 1, 1),
(26, 11, 3, 1, 1, 1),
(27, 11, 8, 1, 1, 1),
(38, 0, 8, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `actif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `name`, `firstName`, `Login`, `password`, `email`, `actif`) VALUES
(1, 'juzans', 'Etienne', 'etiennePro', 'totote123', 'juzans@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Commande`
--
ALTER TABLE `Commande`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Produits_commande`
--
ALTER TABLE `Produits_commande`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `Commande`
--
ALTER TABLE `Commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `Produits_commande`
--
ALTER TABLE `Produits_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
