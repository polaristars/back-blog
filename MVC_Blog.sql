-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2015 at 04:19 PM
-- Server version: 5.5.33-MariaDB
-- PHP Version: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MVC_Blog`
--
CREATE DATABASE IF NOT EXISTS `MVC_Blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `MVC_Blog`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created` date NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created`, `post_id`, `user_id`) VALUES
(1, 'Les loutres de mers c''est vraiment beaucoup trop mignon !!', '2015-03-26', 1, 2),
(5, 'Petit escargot porte sur son dos, sa maisonette ! ', '2015-03-26', 1, 2),
(6, 'Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche Ca maaaaaaaaaaaaaaaaaaaaaarche ', '2015-03-26', 2, 1),
(7, 'coucouuuuuuuuuuu', '2015-03-26', 2, 1),
(8, 'Bon ca marche après 48h... OH JOIE.', '2015-03-27', 1, 1),
(9, 'Re-test histoire de voir si tout est sur ...', '2015-03-27', 3, 2),
(10, 'Même que ca marche bien en faite !', '2015-03-27', 1, 1),
(19, 'sqfhuig', '2015-03-27', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created`, `updated`, `user_id`, `title`, `content`, `tags`) VALUES
(1, '2015-03-25', '2015-03-25', 1, 'Hey !', 'Voici mon 1er article !', 'OH YEAH !'),
(2, '2015-03-25', '2015-03-25', 1, 'Outlander-BBC One', 'Les aventures de Claire, une infirmière de guerre mariée qui se retrouve accidentellement propulsée en pleine campagne écossaise de 1743. Elle se retrouve alors mêlée à des histoires de propriétés et d''espionnage qui la poussent à prendre la fuite et menacent sa vie. Elle est alors forcée d''épouser Jamie, un jeune guerrier écossais passionné qui s''enflamme pour elle et la conduit à être déchirée entre fidélité et désir, étant partagée entre deux hommes dramatiquement opposés et deux vies irréconciliables. ', 'BBC outlander'),
(3, '2015-03-25', '2015-03-25', 1, 'Poldark-BBC One', 'Cornwall en Angleterre, vers la fin du 18ème siècle. Ross Poldark revient de la guerre d''Indépendance américaine pour retrouver sa bien-aimée, mais il ne trouve qu''un monde en ruine : son père est mort, la mine familiale fermée et sa compagne s''est engagée à épouser son cousin. Heureusement pour Poldark, rien n''est perdu...\r\n', 'BBC Poldark'),
(4, '2015-03-25', '2015-03-25', 1, 'Dardevil-Netflix', 'Aveugle depuis l’enfance, mais doté de sens incroyablement développés, Matt combat l’injustice le jour en tant qu’avocat et la nuit en surveillant les rue de Hell’s Kitchen, à New York, dans le costume du super-héros Daredevil.\r\n\r\nAdaptation du comic book Marvel homonyme.\r\n\r\n', 'Netflix Dardevil'),
(5, '2015-03-25', '2015-03-25', 2, 'Les Agents du S.H.I.E.L.D.', 'Les aventures mouvementées des membres de la "Strategic Homeland Intervention, Enforcement and Logistics Division, plus connu sous le nom de "S.H.I.E.L.D.".', 'Les Agents du S.H.I.E.L.D.'),
(6, '2015-03-25', '2015-03-25', 1, 'Game of Thrones-HBO', 'Il y a très longtemps, à une époque oubliée, une force a détruit l''équilibre des saisons. Dans un pays où l''été peut durer plusieurs années et l''hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d''au-delà du Mur protecteur, n''a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s''abat sur le Royaume avec la promesse d''un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s''emparer du Trône de Fer, le symbole du pouvoir absolu.', 'GoT HBO'),
(7, '2015-03-25', '2015-03-25', 1, 'The Lizzie Borden Chronicles-LifeTime', 'En 1892, après que son procès pour meurtre se soit soldé par un acquittement, le retour à la vraie vie de Lizzie Borden... ', 'the lizzie borden chronicles lifetime'),
(8, '2015-03-25', '2015-03-25', 2, 'Community-NBC', 'Jeff est avocat. Mais Jeff doit surtout retourner à l''université car son certificat a été invalidé. Entre les femmes au foyer fraîchement divorcées et ceux qui reprennent les études pour garder leur esprit actif, Jeff intègre une bande de joyeux drilles qui découvre les joies de la vie sur le campus. Ils en apprennent plus sur eux-mêmes que sur les cours qu''ils suivent...', 'community NBC'),
(9, '2015-03-25', '2015-03-25', 1, 'Reign-CTV TWO', 'La série est basée sur la vie de Marie Stuart qui arrive à 15 ans à la cour de France du roi Henri II. Elle est fiancée avec le Prince François.\r\n\r\nSon avenir ne s’annonce pas comme elle l’attendait. Son mariage est incertain, l’alliance avec la France est fragile, et de nombreux dangers la menacent : intrigue, tentative de meurtre, de viol et la guerre avec l’Angleterre…\r\n\r\nElle est accompagnée de ses servantes et amies : Kenna, Greer, Aylee et Lola.\r\n\r\nElle est aux prises avec de plus grands défis qu''elle ne le pensait et doit prendre des décisions auxquelles elle n''avait jamais pensé devoir faire face.', 'reign NBC'),
(10, '2015-03-25', '2015-03-25', 1, 'True Blood-HBO', 'Ayant trouvé un substitut pour se nourrir sans tuer (du sang synthétique), les vampires vivent désormais parmi les humains. Sookie, une serveuse capable de lire dans les esprits, tombe sous le charme de Bill, un mystérieux vampire. Une rencontre qui bouleverse la vie de la jeune femme...', 'true blood hbo'),
(11, '2015-03-25', '2015-03-25', 1, 'Agent Carter-ABC', 'Bien des années avant les exploits de l''Agent Coulson et de son équipe du SHIELD, il y avait l''Agent Carter. Personne ne devrait sous-estimer Peggy...\r\n\r\nNous sommes en 1946. La paix est désormais revenue sur la planète. Les hommes sont revenus du front et Peggy est de nouveau reléguée, obligée de s''occuper des basses oeuvres administratives du SSR (Strategic Scientific Reserve), alors qu''elle aimerait tant retourner sur le terrain et botter les fesses des criminels. Pour Peggy, la période est compliquée, d''autant plus qu''elle vient de perdre l''amour de sa vie : Steve Rogers, également connu sous le titre de "Captain America".\r\n\r\nL''ingénieur Howard Stark, une vieille connaissance, se retrouve accusé de vente d''armes illicite. Il contacte alors la seule personne en qui il ait réellement confiance : Peggy. A charge pour elle de traquer les vrais coupables : ceux qui ont effectivement vendu les armes, afin de laver l''honneur de Stark. Elle est aidée dans cette tâche par Edwin Jarvis, le majordome de Stark. Une tâche qui ne convient pas forcément à ce dernier : Jarvis n''aime pas vraiment les surprises, lui préférant la routine et le quotidien.\r\n\r\nLa double vie de Peggy est dangereuse. Et plus ses enquêtes progressent, plus elle découvre la vraie nature de l''organisation pour laquelle elle travaille. Elle en vient même à douter de l''innocence d''Howard Stark...\r\n\r\nSérie centrée sur le personnage de Peggy Carter, apparue dans le court métrage Agent Carter.', 'agent carter '),
(12, '2015-03-25', '2015-03-25', 1, 'New Girl-Fox', 'Depuis qu''elle a découvert l''infidélité de son petit ami, Jess, une jeune femme naïve et maladroite, partage un appartement avec trois garçons : Schmidt, Nick et Winston. Cette cohabitation change leur quotidien à tous. Entre leurs déboires sentimentaux respectifs, la petite bande cherche sa place dans le monde.', 'new girl fox'),
(13, '2015-03-25', '2015-03-25', 2, 'Vikings-History', 'Scandinavie, à la fin du 8ème siècle. Ragnar Lodbrok, un jeune guerrier viking, est avide d''aventures et de nouvelles conquêtes. Lassé des pillages sur les terres de l''Est, il se met en tête d''explorer l''Ouest par la mer. Malgré la réprobation de son chef, Haraldson, il se fie aux signes et à la volonté des dieux, en construisant une nouvelle génération de vaisseaux, plus légers et plus rapides..', 'vikings history');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `lastname`, `birthdate`, `email`, `password`) VALUES
(1, 'raindow', 'Roi', 'DeFrance', '2015-03-24', 'nemoo@ocean.com', 'a62e20e68c23db052fb8f0aae7b9db45c5ad93bf'),
(2, 'May', 'Maythe', '4BewithYou', '2015-05-04', 'ilusion05@yahoo.fr', 'cd35558317ea92f13676a1be0872ae1478c48cc1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
