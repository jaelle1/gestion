-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Avril 2022 à 16:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_abonnes`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnees`
--
CREATE DATABASE IF NOT EXISTS `gestion_abonnes`; 


CREATE TABLE IF NOT EXISTS `abonnees` (
  `Num` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `date_n` date NOT NULL,
  `date_d_ab` date NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Num`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ;

--
-- Contenu de la table `abonnees`
--

INSERT INTO `abonnees` (`Num`, `nom`, `date_n`, `date_d_ab`, `telephone`, `email`) VALUES
(101, 'Brigitte Bationo', '0000-00-00', '2022-02-01', '55020254', 'kientiono1254@gmail.com'),
(102, 'Ilboudo Aphro', '0000-00-00', '0000-00-00', '55993984', 'ilboudosouleymane4@gmail.com'),
(105, 'sylvain Tagnabou', '2000-03-11', '2022-02-28', '55252525', 'sylvaintagnabou@gmail.com'),
(106, 'Cynthia Valea', '0000-00-00', '0000-00-00', '56876787', 'cynthiavalea@gmail.com'),
(107, 'Sankara Alima', '0000-00-00', '0000-00-00', '76828584', 'sankaraalimatou@gmail.com'),
(108, 'Sankara Auguste', '0000-00-00', '0000-00-00', '52658545', 'sank.auguste@gmail.com'),
(109, 'Some Nadine', '0000-00-00', '0000-00-00', '70127584', 'somenadine683@gmail.com'),
(110, 'Larissa Goumou', '0000-00-00', '0000-00-00', '67852141', 'gnoumlari@gmail.com'),
(111, 'Dienbere Berenice', '0000-00-00', '0000-00-00', '77854541', 'dienbere@gmail.com'),
(112, 'Niada Lucien', '0000-00-00', '0000-00-00', '74856521', 'epiphaneniada@gmail.com'),
(113, 'Kinda Christian', '0000-00-00', '0000-00-00', '78856545', 'kidchris960@gmail.com'),
(114, 'Elie Zoetaba', '0000-00-00', '0000-00-00', '52144568', 'zoetabaelie@gmail.com'),
(115, 'Zore Yacouba', '0000-00-00', '0000-00-00', '61141232', 'yacoubazore9@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
