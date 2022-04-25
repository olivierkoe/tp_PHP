-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 25 avr. 2022 à 10:45
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `articles_grec`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(100) NOT NULL,
  `users_intro` longtext NOT NULL,
  `users_descri` longtext NOT NULL,
  `users_mail` varchar(100) NOT NULL,
  `users_img` varchar(100) NOT NULL,
  `users_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_users`, `users_name`, `users_intro`, `users_descri`, `users_mail`, `users_img`, `users_date`) VALUES
(1, 'Zeus', 'Zeus est le roi des dieux dans la mythologie grecque. Il est le frère de Hadès, de Poséidon, de Déméter, de Hestia et de Héra qui est également sa femme. C\'est aussi le fils de Cronos et de Rhéa. Il est l\'un des trois maîtres de l\'Univers, avec ses frères Poséidon et Hadès. Il a le pouvoir de lancer des éclairs sur les hommes qui ne se montrent pas convenables envers les dieux.', 'Zeus est le roi des dieux dans la mythologie grecque. Il est le frère de Hadès, de Poséidon, de Déméter, de Hestia et de Héra qui est également sa femme. C\'est aussi le fils de Cronos et de Rhéa. Il est l\'un des trois maîtres de l\'Univers, avec ses frères Poséidon et Hadès. Il a le pouvoir de lancer des éclairs sur les hommes qui ne se montrent pas convenables envers les dieux.  Zeus est le dieu du ciel et de la foudre. C\'est le roi des dieux, il est souvent associé à l’aigle. Ses armes les plus redoutables sont la Foudre qui lui a été offerte par les cyclopes et son bouclier, l\'égide. Il est redouté même par les autres dieux. Par contre, lui-même craint les colères de sa femme Héra.  Il a été amoureux de nombreuses femmes : Héra, Léto, Dione, Maïa, Sémélé, Thémis, Mnémosyne, Eurynomé, Alomène, Europe, Danaé, Léda.', 'olivier', 'Zeus_Zeus.png', '2022-04-22 14:14:59'),
(4, 'Arès', 'Arès est un dieu de la Grèce antique. Pour les Grecs il était le dieu de la guerre. Les Romains l\'appelèrent Mars.', 'Il eut une liaison avec Aphrodite. Après une longue période Héphaïstos se rendit compte qu\'Arès avait une liaison avec sa femme. Il confectionna un filet magique dans lequel il emprisonna les deux amants. Pendant la guerre de Troie, Arès est blessé au combat par Athéna alors qu\'il venait en aide aux Troyens. Arès ne combattait pas intelligemment, mais pour le plaisir, au contraire d\'Athéna qui combattait pour son peuple. Mars et la princesse-vestale Rhéa Silvia eurent deux jumeaux appelés Rémus et Romulus qui d\'après les légendes romaines ont fondé Rome. Arès est le fils d\'Héra, femme de Zeus et déesse du mariage.La violence d\'Arès déplaisait aux Grecs (tout comme, d\'après Homère, il déplaisait à Zeus). Les Grecs n\'ont pas créé beaucoup de représentations d\'Arès. Par contre Mars était particulièrement vénéré par les Romains qui étaient un peuple guerrier. Un soir, alors qu\'Héphaïstos était parti travailler et qu\'Aphrodite dormait paisiblement, Arès vient chez Aphrodite pendant qu\'elle dormait. Arès était accompagné par un garde chargé de surveiller l\'entrée mais celui-ci s\'était endormi. Arès faisait l\'amour avec Aphrodite sans qu\'elle le sache le matin, Héphaïstos avait découvert sa femme et son frère entrain de faire l\'amour Héphaïstos très en colère ne laissa pas sa femme parler et les jeta en prison. Poséidon avait payé une somme très haute pour délivrer Aphrodite et Arès. Il sera puni par Zeus son père le roi des dieux.', 'olivier', '8700_Arès.png', '2022-04-22 14:41:54'),
(5, 'Athèna', 'Athéna est la déesse grecque de la sagesse, de la stratégie guerrière (donc de la guerre), de la justice et du combat mais aussi la déesse protectrice des artisans et de la cité d\'Athènes.', 'Athéna est la fille de Zeus et de Métis (une Océanide). Prévenu par Gaïa que l’enfant qu\'il aurait d\'elle risquerait de le détrôner, Zeus dévore Métis qui était enceinte (comme son propre père Chronos l’avait dévoré). Il eut fort mal à la tête. Il demanda donc à Héphaïstos (dieu des forgerons et du feu) de lui fendre le crâne. De son cerveau sortit Athéna qui poussa un terrible cri de guerre. Elle était toute armée , déjà adulte et en âge de combattre, ce qui lui permit d\'aider les dieux dans leur lutte contre les Titans.  Athéna est la déesse de la guerre stratégique Athéna est aussi la déesse de la sagesse, des arts, de la science et des activités artisanales telles que la poterie ou le tissage. Dans de nombreuses villes elle était la déesse protectrice des artisans (fileurs, brodeuses, potiers) et passait pour une déesse de la paix. Dans l\'Odyssée d\'Homère elle ramena la paix dans Ithaque à l\'aide de son père Zeus, le dieu des dieux.  Elle eut un enfant de Héphaïstos mais malgré elle : Érichtonios, qui fut un des premiers rois d\'Athènes et qui installa le culte de sa mère dans la cité. Athéna est aussi la déesse protectrice de la ville d\'Athènes', 'olivier', '24022_Athèna.png', '2022-04-22 15:16:07'),
(12, 'Hera', 'Héra dans la mythologie grecque (ou Junon dans la mythologie romaine) est la déesse du mariage, de la vie ainsi que de la famille.  C\'est la fille de Cronos et Rhéa. Elle est la femme et la sœur de Zeus avec qui elle a eu comme enfants Arès, Hébé, et Ilithyie. Elle est aussi la mère d\'Héphaïstos, qu\'elle conçoit seule pour défier son mari Zeus et lui montrer qu\'elle n\'a pas besoin de lui pour avoir des enfants.', 'Héra dans la mythologie grecque (ou Junon dans la mythologie romaine) est la déesse du mariage, de la vie ainsi que de la famille.  C\'est la fille de Cronos et Rhéa. Elle est la femme et la sœur de Zeus avec qui elle a eu comme enfants Arès, Hébé, et Ilithyie. Elle est aussi la mère d\'Héphaïstos, qu\'elle conçoit seule pour défier son mari Zeus et lui montrer qu\'elle n\'a pas besoin de lui pour avoir des enfants.  Héra est le plus souvent présentée comme une épouse jalouse, qui aime maltraiter les maîtresses de Zeus et leurs enfants. Parmi ses victimes : Héraclès (Hercule), à qui elle met dans son berceau deux serpents mais aussi la nymphe Io, transformée en vache par Zeus pour la protéger, mais rendue folle par les piqûres d\'un taon envoyé par Héra.  Déesse du mariage légitime, elle n\'a pas d\'amant. Elle est quand même désirée par Ixion et par Endymion. Les attributs d\'Héra sont le diadème royal , le sceptre et la couronne de fleur assis à côté d\'un paon.', 'olivier', '15678_Hera.png', '2022-04-25 11:45:52'),
(6, 'Artémis', 'Artémis est une déesse de la religion grecque antique que les Romains identifièrent à Diane.', 'Artémis est une déesse de la religion grecque antique que les Romains identifièrent à Diane.  Artémis est la fille de Zeus et de Léto, une titanide. Sœur jumelle d\'Apollon, elle est la déesse de la nature sauvage et de la chasse : Homère l\'appelle « dame des fauves » ou « souveraine des animaux ». Symbole de la virginité féminine, Artémis n\'eut que des aventures désastreuses avec les hommes, par exemple avec le jeune Actéon. Sous le nom d\'Eileithya (ou Ilythie), elle présidait aux accouchements heureux et était vénérée par les mères de famille. Dans la religion grecque, elle personnifie la Lune. Son conjoint dans le monde des dieux est Endymion et ses enfants sont les Amazones.  Dans la mythologie romaine, Diane est la déesse secondaire du panthéon  romain. Elle est la déesse de la chasse et de la lune (son frère jumeau Apollon étant le dieu du soleil). Diane est aussi la protectrice de la femme (les vierges blanches avec Athéna). Elle est aussi la gardienne des sources et des cours d\'eau. Ses attributs sont la biche, l\'arc, le carquois, les flèches et le croissant de lune.', 'olivier', '70952_Artémis.png', '2022-04-22 17:34:44'),
(7, 'Poseidon', 'Poséidon (Ποσειδῶν en grec) est, dans la mythologie grecque, le dieu de la mer. Il est assimilé à Neptune chez les Romains. Poséidon est le fils de Cronos et de Rhéa et le frère de Zeus, Hadès, Déméter, Héra et Hestia. Son trident, forgé par les cyclopes pendant la Titanomachie (affrontement entre Cronos et ses enfants), lui permettait de soulever les eaux.', 'Poséidon (Ποσειδῶν en grec) est, dans la mythologie grecque, le dieu de la mer. Il est assimilé à Neptune chez les Romains. Poséidon est le fils de Cronos et de Rhéa et le frère de Zeus, Hadès, Déméter, Héra et Hestia. Son trident, forgé par les cyclopes pendant la Titanomachie (affrontement entre Cronos et ses enfants), lui permettait de soulever les eaux.   Poséidon est l\'un des trois maîtres de l\'Univers, avec ses frères Zeus (maître du Ciel) et Hadès (maître des Enfers, du sous-sol). Il chevauche un char attelé à des créatures mi-chevaux mi-dauphins et peut provoquer des tremblements de terre en enfonçant son trident dans la terre. Il est aussi symbolisé par le taureau et surtout le cheval. On dit souvent que Poséidon est le dieu des océans. Il a un palais d\'or situé au fond des mers, situé selon les sources, soit à Aigéai (en Achaïe), soit près du golfe de Corinthe, ou encore près de l\'île d\'Eubée. Il règne en maître absolu sur la mer, et peut aussi causer des tremblements de terre (les Grecs croyaient que c\'était Poséidon qui soulevait la terre sur ces épaules, comme le Titan Atlas soutenait le ciel).', 'olivier', '87667_Poseidon.png', '2022-04-23 16:57:01'),
(8, 'Aphrodite', 'Aphrodite est la déesse de la beauté, de l\'amour, du plaisir et de la procréation, de la séduction mais aussi de la fécondité dans la religion grecque. Elle est l\'équivalent de Vénus (mythologie Vénus dans la religion romaine). Aphrodite est un personnage très important dans la mythologie. Elle fait partie des douze dieux Olympiens qui siègent autour de Zeus sur le mont Olympe. Elle serait la mère d\'Éros selon certaines versions.', 'Elle gagna un concours de beauté puis reçut de Pâris la fameuse Pomme d\'or, elle lui a promis la main de la belle Hélène ce qui est la cause indirecte de la Guerre de Troie.  Avec Hermès, elle donna naissance à Hermaphrodite (un être qui unissait les natures masculine et féminine). Avec Arès, elle donna aussi naissance à Éros.  Mariée à Héphaïstos, elle a de nombreuses aventures extra-conjugales. La principale est celle avec Arès, d\'où naissent Harmonie (la Concorde), Déimos (la Terreur) et Phobos (la Crainte). Informé de la relation adultère par Hélios, Héphaïstos crée un filet magique qu\'il place sur le lit pour emprisonner le couple. Convoquant Zeus et les Olympiens, il leur révèle la duperie devant les amants emprisonnés.  Aphrodite eut aussi une liaison amoureuse avec Anchise, prince de Troie. De cette liaison nait Énée (l\'ancêtre de Rémus et Romulus). Dans la guerre de Troie elle est un des plus ardents soutiens des Troyens.  Aphrodite est particulièrement vénérée à Paphos dans l\'île de Chypre. Aphrodite aurait eu Éros avec Arès. Mais, Aphrodite n\'est pas parfaite : elle a de nombreux défauts comme vouloir que tous les hommes l\'aiment.  Voici un tableau avec à gauche ses amants et son époux, à droite ses enfants.', 'olivier', '46311_Aphrodite.png', '2022-04-23 17:08:05'),
(9, 'Demeter', 'Déméter dans la mythologie grecque (ou Cérès dans la mythologie romaine), est la déesse de la terre cultivée, de la terre fertile, de l\'agriculture et des moissons.  Déméter est la fille du titan Cronos (Saturne dans la mythologie Romaine) et de son épouse Rhéa, ainsi que la sœur de Zeus de Poséidon, d\'Hadès, d\'Hestia, et d\'Héra. Sa fille s\'appelle Perséphone (Proserpine en latin).', 'Déméter dans la mythologie grecque (ou Cérès dans la mythologie romaine), est la déesse de la terre cultivée, de la terre fertile, de l\'agriculture et des moissons.  Déméter est la fille du titan Cronos (Saturne dans la mythologie Romaine) et de son épouse Rhéa, ainsi que la sœur de Zeus de Poséidon, d\'Hadès, d\'Hestia, et d\'Héra. Sa fille s\'appelle Perséphone (Proserpine en latin). Mais Perséphone n\'était pas la seul enfant de Déméter. Le héros Iasion s\'unit à elle dans un champ labouré trois fois et lui donna un fils qui fut appelé « Ploutos » et devint la personnification de la richesse. Unie à Poséidon, elle conçut aussi Arion, un cheval immortel, et une déesse mystérieuse, dont il était interdit de prononcer le nom.  Déméter enseigna aux humains le travail des semis et du labour. Pendant son errance à la recherche de sa fille, elle rencontra Céléos, roi d\'Éleusis. Pour le remercier de son accueil, elle prit les fils du roi, Démophon et Triptolème. Elle tenta de rendre le premier immortel et enseigna au second l\'art de l\'agriculture.', 'olivier', '46773_Demeter.png', '2022-04-24 22:31:16'),
(10, 'Hades', 'Hadès est le troisième fils de Cronos et de Rhéa . Il est le frère de Zeus, Poséidon, Héra ,Demeter et Hestia.   Après la guerre des dieux contre les Titans, il reçut le royaume des morts.  Il a pour femme Perséphone, fille de Zeus et de Déméter, qu\'il a enlevée après en être tombé amoureux.   Pluton et sa femme Proserpine (Perséphone pour les Grecs) Hadès (ou Pluton pour les Romains) est le dieu des Enfers, c\'est-à-dire le dieu qui règne sur le séjour des morts.', 'Hadès est le troisième fils de Cronos et de Rhéa . Il est le frère de Zeus, Poséidon, Héra ,Demeter et Hestia.   Après la guerre des dieux contre les Titans, il reçut le royaume des morts.  Il a pour femme Perséphone, fille de Zeus et de Déméter, qu\'il a enlevée après en être tombé amoureux.   Pluton et sa femme Proserpine (Perséphone pour les Grecs) Hadès (ou Pluton pour les Romains) est le dieu des Enfers, c\'est-à-dire le dieu qui règne sur le séjour des morts.  Hadès (ou Pluton) est le troisième fils de Saturne-Cronos et de Rhéa. Il est le frère de Jupiter-Zeus, Neptune-Poséidon, Junon-Héra, Cérès-Déméter et Vesta-Hestia. Après la guerre des dieux contre les Titans, il eut en partage le royaume des morts. Il a pour femme Proserpine-Perséphone, fille de Jupiter-Zeus et de Cérès-Déméter. Mais la terreur qu\'inspire Hadès-Pluton est contrebalancée par Proserpine-Perséphone qui commande le cycle des saisons. Grâce à elle, les hommes savent que la mort est nécessaire à la continuité de la vie. Elle est le terreau indispensable à la fertilité des prochaines moissons. De ce fait, Hadès-Pluton est aussi invoqué par les paysans qui le représentent avec une corne d\'abondance dans une main et un araire dans l\'autre. Sans pitié, insensible aux prières et aux sacrifices, il n\'était pas un mauvais dieu. Les Romains l\'appelaient « Pluton », (signifiant le « donneur de richesses »), car ils pensaient que les récoltes et les métaux précieux venaient de son royaume souterrain.', 'olivier', '3979_Hades.png', '2022-04-24 22:32:36'),
(11, 'Hermes', 'Dans la mythologie grecque, Hermès était le messager des dieux, le protecteur des voyageurs, des commerçants, des voleurs, des troupeaux. Il était réputé pour sa rapidité et sa ruse. C\'est aussi lui qui conduit les morts vers les Enfers.', 'Dans la mythologie grecque, Hermès était le messager des dieux, le protecteur des voyageurs, des commerçants, des voleurs, des troupeaux. Il était réputé pour sa rapidité et sa ruse. C\'est aussi lui qui conduit les morts vers les Enfers.  Hermès serait le fils de Zeus et de Maïa, la fille du titan Atlas. Il serait né en Arcadie sur le mont Cyllène Dès sa naissance, il montra des dons de ruse et une disposition au vol. Il vola le troupeau de bœufs que gardait son demi-frère Apollon, pour tromper les recherches il fit marcher les bœufs à reculons et lui-même avait chaussé des sabots fixés à l\'envers. Apollon finit par retrouver la trace d\'Hermès, encore nourrisson. Par l\'intermédiaire de Zeus, leur père, il obligea Hermès à lui rendre le troupeau. Hermès lui en échangea une moitié contre une lyre qu\'il avait fabriquée à l\'aide d\'une carapace de tortue pour le cadre et de boyaux de génisse pour les cordes.  Apollon vit comme il aimait son troupeau et fit de lui le berger de son troupeau, en lui donnant un bâton de berger auquel Hermès enroula deux serpents, le caducée est né.  Hermès est représenté toujours jeune (il était vénéré par les athlètes sportifs), aux pieds et sur son chapeau (la pétase) il porte des ailes, signe de sa rapidité. Il porte également le caducée, bâton autour duquel s\'enroulent deux serpents (symboles de la ruse). Il est aussi souvent représenté avec un agneau sur les épaules, car à l\'origine il était une divinité vénérée par les bergers.  D\'après la mythologie grecque, Hermès est le père d\'Autolycos, le roi des voleurs (celui qui n\'est jamais pris en flagrant délit). De ses amours avec Aphrodite, il a un fils, Hermaphrodite. Hermès est aussi dieu des commerçants.', 'olivier', '72587_Hermes.png', '2022-04-24 22:34:19');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `commentaire` longtext NOT NULL,
  `auteur` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `titre`, `commentaire`, `auteur`) VALUES
(1, 'olivier@gmail.com', 'la vie est belle', '1'),
(2, 'Ca marche?', 'on dirait que oui', 'olivier'),
(3, 'Fonctionne?', 'NON', 'olivier'),
(11, 'test1', 'sdqg', 'oli'),
(12, 'test2', 'jqgklhgjk', 'oli'),
(10, 'nouveau', 'olivier as réussi a poster un comment', 'olivier');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `password`, `user_type`) VALUES
(4, 'olivier', 'olivier@gmail.com', '4e6e49b3d3125554eabc264d5d848089', 'admin'),
(3, 'olivier', 'olikoen@gmail.com', '4e6e49b3d3125554eabc264d5d848089', 'user'),
(5, 'faustine', 'faustine@gmail.com', 'd3ca5dde60f88db606021eeba2499c02', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
