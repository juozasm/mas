-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 03:12 PM
-- Server version: 5.7.9
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `age` int(3) NOT NULL,
  `salary` int(10) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `email`, `password`, `age`, `salary`) VALUES
(24, 'Antanas', 'Jonaitis', 'JuozasJonaitis8', 'Juozas@Jonaitis8.lt', '7b68fbb20dc71601439883831ce7150a', 25, 100),
(23, 'Emilis', 'Petraitis', 'EmilisPetraitis7', 'Emilis@Petraitis7.lt', '167d56cb37737679167ef19dd66b6bdb', 50, 604),
(22, 'Pranas', 'Juozapaitis', 'PranasJuozapaitis6', 'Pranas@Juozapaitis6.lt', '93173d8916943c32405dc6aa6dfe9c11', 72, 2466),
(21, 'Antanas', 'Sarunavicius', 'JuozasSarunavicius5', 'Juozas@Sarunavicius5.lt', '94b9bc7e9593c48c611f36bd19e9db50', 20, 100),
(20, 'Antanas', 'Juozapaitis', 'VaidotasJuozapaitis4', 'Vaidotas@Juozapaitis4.lt', '3f9968b9421b4b277b0c059d057b9009', 24, 100),
(19, 'Emilis', 'Emilicius', 'EmilisEmilicius3', 'Emilis@Emilicius3.lt', '422a847dba5aea44efcc9cd117ea4c67', 70, 1976),
(18, 'Vaidotas', 'Juozapaitis', 'VaidotasJuozapaitis2', 'Vaidotas@Juozapaitis2.lt', 'c44a4af8e2a093f932f89f9dd5b24416', 40, 2889),
(17, 'Sarunas', 'Antanavicius', 'SarunasAntanavicius1', 'Sarunas@Antanavicius1.lt', 'cde1246349134ab18a88f60b83250051', 50, 3116),
(16, 'Antanas', 'Petraitis', 'JuozasPetraitis0', 'Juozas@Petraitis0.lt', '839a2d5a15f197aa310c9539f93b5de6', 21, 100),
(26, 'Juozas', 'Juozapaitis', 'JuozasJuozapaitis0', 'Juozas@Juozapaitis0.lt', 'a0731f06522b976adc52c778c6bc64eb', 42, 3942),
(27, 'Petras', 'Sarunavicius', 'PetrasSarunavicius1', 'Petras@Sarunavicius1.lt', '3b8c5189d9110de66faaae8507c57cb5', 40, 2396),
(28, 'Antanas', 'Vaidotauskas', 'AntanasVaidotauskas3', 'Antanas@Vaidotauskas3.lt', 'ff453920dc939b9312d525146e7e1fb8', 47, 662),
(29, 'Antanas', 'Vaidotauskas', 'EmilisVaidotauskas4', 'Emilis@Vaidotauskas4.lt', '30ffc63bfbec0fb42af81079c0a32fbc', 18, 100),
(30, 'Vaidotas', 'Petraitis', 'VaidotasPetraitis5', 'Vaidotas@Petraitis5.lt', 'b8c4a3f05215bd6775fb76e10e9e9101', 71, 1517),
(31, 'Antanas', 'Petraitis', 'AntanasPetraitis7', 'Antanas@Petraitis7.lt', '6d854a81a50fa9a525accb847cebe694', 51, 1632),
(32, 'Pranas', 'Antanavicius', 'PranasAntanavicius8', 'Pranas@Antanavicius8.lt', 'b2efe474ccf9c9eb2e293a95db0201dc', 41, 1931),
(33, 'Vaidotas', 'Juozapaitis', 'VaidotasJuozapaitis9', 'Vaidotas@Juozapaitis9.lt', 'da77fa1f58d7ffdb59c170918b177a04', 72, 2525),
(34, 'Sarunas', 'Petraitis', 'SarunasPetraitis0', 'Sarunas@Petraitis0.lt', 'be82c7e85d2b188327418bdb6f9f7462', 37, 1502),
(35, 'Pranas', 'Sarunavicius', 'PranasSarunavicius1', 'Pranas@Sarunavicius1.lt', 'c8a2742fce22c735819713578963386d', 74, 3405),
(36, 'Antanas', 'Jonaitis', 'PetrasJonaitis2', 'Petras@Jonaitis2.lt', 'e685d8b23f40993b37d1fd8e7ff3470d', 28, 100),
(37, 'Emilis', 'Sarunavicius', 'EmilisSarunavicius3', 'Emilis@Sarunavicius3.lt', 'df7e17afaa45342b0b76d88940ad7d75', 31, 1818),
(38, 'Vaidotas', 'Juozapaitis', 'VaidotasJuozapaitis5', 'Vaidotas@Juozapaitis5.lt', '3121c48252b9e2dffd0a9f4934ec085d', 44, 2850),
(39, 'Petras', 'Pranauskas', 'PetrasPranauskas6', 'Petras@Pranauskas6.lt', 'c2e791383206ea7703a54d6f0286252b', 45, 660),
(40, 'Antanas', 'Emilicius', 'EmilisEmilicius7', 'Emilis@Emilicius7.lt', 'e2f01456deae57ea529e4d2ba72eb5f9', 21, 100),
(41, 'Antanas', 'Antanavicius', 'AntanasAntanavicius9', 'Antanas@Antanavicius9.lt', '492b8779fe6751ef160a7573aee76796', 58, 1421),
(42, 'Emilis', 'Pranauskas', 'EmilisPranauskas0', 'Emilis@Pranauskas0.lt', 'ed22cb90921197b0528ba895607864f3', 47, 1174),
(43, 'Pranas', 'Vaidotauskas', 'PranasVaidotauskas2', 'Pranas@Vaidotauskas2.lt', '69aa9ea605ba96244f29c7465acf6600', 39, 2423),
(44, 'Pranas', 'Pranauskas', 'PranasPranauskas3', 'Pranas@Pranauskas3.lt', '8658ce1e5ef3303d23abcfb9afc7f726', 57, 2697),
(45, 'Juozas', 'Petraitis', 'JuozasPetraitis4', 'Juozas@Petraitis4.lt', '07d9aac7ccf85438abee14a975958cf0', 64, 1639),
(46, 'Sarunas', 'Petraitis', 'SarunasPetraitis5', 'Sarunas@Petraitis5.lt', '859b9634cac6e460d4adda9599b65e0a', 62, 1167),
(47, 'Vaidotas', 'Pranauskas', 'VaidotasPranauskas6', 'Vaidotas@Pranauskas6.lt', '9a31fa058a716abad9532b67457e279e', 72, 1068),
(48, 'Antanas', 'Emilicius', 'PetrasEmilicius7', 'Petras@Emilicius7.lt', '636e10f0fd4d5574ea81d46def9e9e86', 21, 100),
(49, 'Petras', 'Emilicius', 'PetrasEmilicius8', 'Petras@Emilicius8.lt', '00e5a5c6b598f9f97d111da3f87c65c0', 32, 3551),
(50, 'Antanas', 'Pranauskas', 'SarunasPranauskas9', 'Sarunas@Pranauskas9.lt', '2782e0dccc6658a74e6818ed844762a2', 23, 100),
(51, 'Antanas', 'Petraitis', 'AntanasPetraitis0', 'Antanas@Petraitis0.lt', '6df57b8b85e344c76f72449133bf1a17', 64, 1970),
(52, 'Pranas', 'Vaidotauskas', 'PranasVaidotauskas1', 'Pranas@Vaidotauskas1.lt', 'bf295db24883116939436a3e7aeae977', 65, 2380),
(53, 'Sarunas', 'Vaidotauskas', 'SarunasVaidotauskas2', 'Sarunas@Vaidotauskas2.lt', 'cfcc9dc953f7873e6ebeda10f7912cf4', 55, 1194),
(54, 'Emilis', 'Pranauskas', 'EmilisPranauskas4', 'Emilis@Pranauskas4.lt', '3b05e1db923c44b0b15ae3746639de41', 57, 816),
(55, 'Emilis', 'Petraitis', 'EmilisPetraitis5', 'Emilis@Petraitis5.lt', '231da3d03a52048476e1d21caa010e7d', 59, 1897),
(56, 'Antanas', 'Emilicius', 'AntanasEmilicius6', 'Antanas@Emilicius6.lt', '50c4683b3655e2c5e3f47c16c618bcf4', 71, 1246),
(57, 'Juozas', 'Sarunavicius', 'JuozasSarunavicius7', 'Juozas@Sarunavicius7.lt', '983386a9cd47806989e87d73ead391e3', 44, 594),
(58, 'Sarunas', 'Antanavicius', 'SarunasAntanavicius8', 'Sarunas@Antanavicius8.lt', 'b803c8f9a51955970587552643cc0e09', 32, 2416),
(59, 'Antanas', 'Emilicius', 'EmilisEmilicius9', 'Emilis@Emilicius9.lt', '032ea45484b2ff9ba86e6879d1a424dc', 25, 100),
(60, 'Pranas', 'Emilicius', 'PranasEmilicius1', 'Pranas@Emilicius1.lt', 'b92b21f4f40e65ced1191ea871d0f969', 36, 997),
(61, 'Pranas', 'Pranauskas', 'PranasPranauskas2', 'Pranas@Pranauskas2.lt', '34220a3b4eccf35805a8a922e248e236', 53, 462),
(62, 'Antanas', 'Petraitis', 'JonasPetraitis4', 'Jonas@Petraitis4.lt', 'd8b5a1ca022624d17cc6e48684034723', 25, 100),
(63, 'Pranas', 'Sarunavicius', 'PranasSarunavicius5', 'Pranas@Sarunavicius5.lt', 'adad96e735f26279e3f52a7e5e848b25', 30, 1037),
(64, 'Petras', 'Antanavicius', 'PetrasAntanavicius6', 'Petras@Antanavicius6.lt', '016e6adb536beb19de5ef8f2abea2ad1', 74, 1937),
(65, 'Vaidotas', 'Petraitis', 'VaidotasPetraitis7', 'Vaidotas@Petraitis7.lt', '80a922baaeb65b10679d19153f9f144a', 60, 927),
(66, 'Jonas', 'Pranauskas', 'JonasPranauskas8', 'Jonas@Pranauskas8.lt', '789987102946c7014495667f565a90af', 42, 1018),
(67, 'Antanas', 'Vaidotauskas', 'PetrasVaidotauskas9', 'Petras@Vaidotauskas9.lt', '058abb0e69fcedc35bdddef77a082092', 21, 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
