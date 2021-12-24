-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 03:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stepic_gume`
--
CREATE DATABASE IF NOT EXISTS `stepic_gume` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stepic_gume`;

-- --------------------------------------------------------

--
-- Table structure for table `cuvanje`
--

CREATE TABLE `cuvanje` (
  `idCuvanje` int(8) NOT NULL,
  `idKorisnik` int(11) NOT NULL,
  `idMesto` int(11) NOT NULL,
  `sirina` smallint(6) NOT NULL,
  `profil` smallint(6) NOT NULL,
  `precnik` smallint(6) NOT NULL,
  `gumeCelo` varchar(50) NOT NULL,
  `dot` varchar(30) NOT NULL,
  `dubinaSare` smallint(6) NOT NULL,
  `sezona` varchar(50) NOT NULL,
  `felna` varchar(25) NOT NULL,
  `kolicina` smallint(5) NOT NULL,
  `datum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuvanje`
--

INSERT INTO `cuvanje` (`idCuvanje`, `idKorisnik`, `idMesto`, `sirina`, `profil`, `precnik`, `gumeCelo`, `dot`, `dubinaSare`, `sezona`, `felna`, `kolicina`, `datum`) VALUES
(4, 375, 31, 195, 65, 14, '195/65 R14', '2016', 4, 'zimske', 'metalne_sa_ratkapnama', 4, '04-01-2022');

-- --------------------------------------------------------

--
-- Table structure for table `evidencija`
--

CREATE TABLE `evidencija` (
  `idEvidencija` int(11) NOT NULL,
  `musterija` varchar(150) NOT NULL,
  `gumaCelo` varchar(150) NOT NULL,
  `precnik` varchar(150) NOT NULL,
  `dot` varchar(150) NOT NULL,
  `dubinaSare` smallint(6) NOT NULL,
  `sezona` varchar(150) NOT NULL,
  `felna` varchar(150) NOT NULL,
  `kolicina` tinyint(3) NOT NULL,
  `mesto` varchar(150) NOT NULL,
  `datum` varchar(150) NOT NULL,
  `datumIzmene` varchar(150) NOT NULL,
  `datum1` date NOT NULL,
  `tipIzmene` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evidencija`
--

INSERT INTO `evidencija` (`idEvidencija`, `musterija`, `gumaCelo`, `precnik`, `dot`, `dubinaSare`, `sezona`, `felna`, `kolicina`, `mesto`, `datum`, `datumIzmene`, `datum1`, `tipIzmene`) VALUES
(1, 'Bora - Sige', '165/55 R14', 'R14', '2016', 4, 'zimske', 'metalne_sa_ratkapnama', 4, 'A2/2', '15-12-2021', '15-12-2021', '2021-12-15', 'DODATO'),
(2, 'Aca SteviÄ‡ - DuboÄka', '195/65 R15', 'R15', '2016', 5, 'zimske', 'metalne_sa_ratkapnama', 4, 'C1/1', '01-12-2021', '15-12-2021', '2021-12-01', 'DODATO'),
(3, 'Bora - Sige', '165/55 R14', 'R14', '2016', 4, 'zimske', 'metalne_sa_ratkapnama', 4, 'A2/2', '15-12-2021', '15-12-2021', '2021-12-15', 'IZMENA STARO'),
(4, 'Bora - Sige', '165/55 R14', 'R14', '2016', 5, 'zimske', 'aluminijumske', 4, 'A2/2', '15-12-2021', '15-12-2021', '2021-12-15', 'IZMENA NOVO'),
(5, 'Bora - Sige', '165/55 R14', 'R14', '2016', 5, 'zimske', 'aluminijumske', 4, 'A2/2', '15-12-2021', '15-12-2021', '2021-12-15', 'IZMENA STARO'),
(6, 'Bora - Sige', '165/55 R14', 'R14', '2016', 4, 'zimske', 'metalne_sa_ratkapnama', 4, 'A2/2', '15-12-2021', '15-12-2021', '2021-12-15', 'IZMENA NOVO'),
(7, 'Beli - Vrbnica', '195/55 R14', 'R14', '2016', 0, 'letnje', 'nema_felnu', 4, 'F7/2', '08-12-2021', '16-12-2021', '2021-12-08', 'DODATO'),
(8, 'Ratkapna Isulum - Sige', '165/55 R14', 'R14', '2016', 0, 'zimske', 'metalne_sa_ratkapnama', 4, 'A2/2', '15-12-2021', '17-12-2021', '2021-12-15', 'OBRISANO'),
(9, 'Beli - Vrbnica', '195/55 R14', 'R14', '2016', 0, 'letnje', 'nema_felnu', 4, 'F7/2', '08-12-2021', '17-12-2021', '2021-12-08', 'OBRISANO'),
(10, 'Aca SteviÄ‡ - DuboÄka', '195/65 R15', 'R15', '2016', 0, 'zimske', 'metalne_sa_ratkapnama', 4, 'C1/1', '01-12-2021', '17-12-2021', '2021-12-01', 'OBRISANO'),
(11, 'Bora DemiÄ‡ - RaÅ¡anac', '195/65 R14', 'R14', '2016', 4, 'zimske', 'metalne_sa_ratkapnama', 4, 'C1/1', '04-01-2022', '17-12-2021', '2022-01-04', 'DODATO');

-- --------------------------------------------------------

--
-- Table structure for table `felne_table`
--

CREATE TABLE `felne_table` (
  `idFelna` smallint(6) NOT NULL,
  `felna` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `felne_table`
--

INSERT INTO `felne_table` (`idFelna`, `felna`) VALUES
(1, 'aluminijumske'),
(2, 'metalne_bez_ratkapna'),
(3, 'metalne_sa_ratkapnama'),
(4, 'nema_felnu');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hotel`
--
CREATE TABLE `hotel` (
`idCuvanje` int(8)
,`idKorisnik` int(11)
,`idMesto` int(11)
,`red` varchar(5)
,`kolona` smallint(10)
,`sprat` smallint(10)
,`sirina` smallint(6)
,`profil` smallint(6)
,`precnik` smallint(6)
,`dot` varchar(30)
,`dubinaSare` smallint(6)
,`sezona` varchar(50)
,`felna` varchar(25)
,`kolicina` smallint(5)
,`mestoCelo` varchar(50)
,`datum` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `idKorisnik` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `mesto` varchar(100) NOT NULL,
  `datumUnosa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`idKorisnik`, `ime`, `mesto`, `datumUnosa`) VALUES
(125, 'Goran Stepic', 'DuboÄka', '2021-10-21'),
(155, 'Stevan VujÄiÄ‡', 'RaÅ¡anac', '2021-12-10'),
(165, 'Marko', 'Aljudovo', '2021-12-10'),
(175, 'Kepa OpÅ¡tina', 'Petrovac na Mlavi', '2021-12-10'),
(195, 'Nenad Duki', 'RaÅ¡anac', '2021-12-10'),
(205, 'Mario', 'Kula', '2021-12-10'),
(215, 'Ljuba', 'Mirijevo', '2021-12-10'),
(225, 'Å½eljko Profa', 'Aljudovo', '2021-12-10'),
(235, 'Dr Dragi', 'Drugo...', '2021-12-10'),
(245, 'DuÅ¡an Ex DuÅ¡ica', 'Petrovac na Mlavi', '2021-12-10'),
(255, 'Beli', 'Vrbnica', '2021-12-10'),
(265, 'MiloÅ¡ i Å½ivko', 'Kobilje', '2021-12-10'),
(275, 'Dobrica OpÅ¡tina', 'Petrovac na Mlavi', '2021-12-10'),
(285, 'PeÄ‘a Kompijuteri', 'Drugo...', '2021-12-10'),
(295, 'Å½ika Nastavnik', 'Petrovac na Mlavi', '2021-12-10'),
(305, 'Andra', 'Drugo...', '2021-12-10'),
(315, 'Dragan DemiÄ‡', 'RaÅ¡anac', '2021-12-10'),
(325, 'Zvonko Durljan', 'RaÅ¡anac', '2021-12-10'),
(335, 'Negica', 'DuboÄka', '2021-12-10'),
(345, 'MiloÅ¡ OpÅ¡tina', 'Petrovac na Mlavi', '2021-12-10'),
(355, 'NeÅ¡a RoÄ‘a', 'Mirijevo', '2021-12-10'),
(365, 'RadiÅ¡a Pufa', 'Aljudovo', '2021-12-10'),
(375, 'Bora DemiÄ‡', 'RaÅ¡anac', '2021-12-10'),
(385, 'Nadica', 'Mirijevo', '2021-12-10'),
(395, 'Capi Inspektor', 'Golubac', '2021-12-10'),
(405, 'Marinela ', 'RaÅ¡anac', '2021-12-10'),
(415, 'Borica', 'Mirijevo', '2021-12-10'),
(425, 'Tamara NedeniÄ‡', 'Petrovac na Mlavi', '2021-12-10'),
(435, 'Lalica', 'Orljevo', '2021-12-10'),
(445, 'SaviÄ‡ Å½ivirad Å½iva', 'TrnovÄe', '2021-12-10'),
(455, 'DraÅ¾en Å ampinjoni', 'Drugo...', '2021-12-10'),
(465, 'Aca SteviÄ‡', 'DuboÄka', '2021-12-10'),
(475, 'Duki DrakÄe', 'RaÅ¡anac', '2021-12-10'),
(485, 'Gordana Lu Caru', 'RaÅ¡anac', '2021-12-10'),
(495, 'Kristijan', 'Mirijevo', '2021-12-10'),
(505, 'Branko Bubanj', 'Manastirica', '2021-12-10'),
(515, 'DragiÅ¡a', 'Manastirica', '2021-12-10'),
(525, 'OpÅ¡tina', 'Petrovac na Mlavi', '2021-12-10'),
(535, 'Bisa', 'RaÅ¡anac', '2021-12-10'),
(545, 'Dule NedeniÄ‡', 'Petrovac na Mlavi', '2021-12-10'),
(555, 'Dobrica IliÄ‡', 'Zabrega', '2021-12-10'),
(565, 'Dobrica Zet', 'Petrovac na Mlavi', '2021-12-10'),
(575, 'Novica Donosa', 'Petrovac na Mlavi', '2021-12-10'),
(585, 'Deja', 'Mirijevo', '2021-12-10'),
(595, 'Dule', 'Stamnica', '2021-12-10'),
(605, 'Dr Danijela DemiÄ‡', 'Petrovac na Mlavi', '2021-12-10'),
(615, 'Dragi FrankuljeviÄ‡', 'Sige', '2021-12-10'),
(625, 'Vlada StoiÄko Advokat', 'Petrovac na Mlavi', '2021-12-10'),
(635, 'Å½iva', 'Veliko Selo', '2021-12-10'),
(645, 'RoÅ¡kiÄ‡ Role', 'Ranovac', '2021-12-10'),
(655, 'Roman', 'Sige', '2021-12-10'),
(665, 'Stefan RentaCar', 'RaÅ¡anac', '2021-12-10'),
(675, 'Sandu Mali Bubanj', 'Manastirica', '2021-12-10'),
(685, 'Brana', 'Sige', '2021-12-10'),
(695, 'Goga StefanoviÄ‡ OpÅ¡tina', 'Petrovac na Mlavi', '2021-12-10'),
(705, 'MiloÅ¡ DragojeviÄ‡', 'Petrovac na Mlavi', '2021-12-10'),
(715, 'Mile', 'Mirijevo', '2021-12-10'),
(725, 'Nenad Dragica BG', 'Drugo...', '2021-12-10'),
(735, 'Gosa', 'RaÅ¡anac', '2021-12-10'),
(745, 'Zoran PaunoviÄ‡', 'Orljevo', '2021-12-10'),
(755, 'Dragi NeÅ¡a Moca', 'StarÄevo', '2021-12-10'),
(765, 'Jezda Danijel', 'Mirijevo', '2021-12-10'),
(775, 'Radica Å½ivanoviÄ‡', 'Mirijevo', '2021-12-10'),
(785, 'Dr Dragana', 'Petrovac na Mlavi', '2021-12-10'),
(795, 'Dragan Golman', 'Vrbnica', '2021-12-10'),
(805, 'MiloÅ¡ Video Nadzor', 'Aljudovo', '2021-12-10'),
(815, 'SlaÄ‘an Å oniÄ‡', 'Vrbnica', '2021-12-10'),
(825, 'Deja', 'Toponica', '2021-12-10'),
(835, 'Milan PopoviÄ‡ OpÅ¡tina', 'Petrovac na Mlavi', '2021-12-10'),
(845, 'Coki', 'DuboÄka', '2021-12-10'),
(855, 'Nikola Dubi', 'RaÅ¡anac', '2021-12-10'),
(865, 'Mirko StovariÅ¡te', 'Melnica', '2021-12-10'),
(875, 'NeÅ¡a Stolarija', 'Petrovac na Mlavi', '2021-12-10'),
(885, 'SUP', 'Petrovac na Mlavi', '2021-12-10'),
(895, 'Moma Crveni Krst', 'StarÄevo', '2021-12-10'),
(905, 'Greg Mobil Shop', 'Petrovac na Mlavi', '2021-12-10'),
(925, 'Juga KnjigovoÄ‘a', 'Tabanovac', '2021-12-10'),
(935, 'Neca', 'DuboÄka', '2021-12-10'),
(945, 'Luta', 'Petrovac na Mlavi', '2021-12-10'),
(955, 'TiÄ‡a Poslanik', 'Petrovac na Mlavi', '2021-12-10'),
(965, 'Otac Marko', 'Drugo...', '2021-12-10'),
(975, 'Maja VujÄiÄ‡', 'RaÅ¡anac', '2021-12-10'),
(985, 'Ivan Jordana', 'DuboÄka', '2021-12-10'),
(995, 'SaÅ¡a PantiÄ‡', 'RaÅ¡anac', '2021-12-10'),
(1005, 'Ratkapna Isulum', 'Sige', '2021-12-10'),
(1015, 'MiloÅ¡ Pavica', 'RaÅ¡anac', '2021-12-10'),
(1025, 'Deja ElektiÄar', 'BatuÅ¡a', '2021-12-10'),
(1035, 'Danijel', 'Veliko Selo', '2021-12-10'),
(1045, 'Dragica Talijanu', 'StarÄevo', '2021-12-10'),
(1055, 'Novica', 'Veliko Selo', '2021-12-10'),
(1065, 'Novica JankoviÄ‡', 'Veliko Selo', '2021-12-10'),
(1075, 'Nikola Delta Generali', 'Kladurovo', '2021-12-10'),
(1085, 'Dobrivoje', 'Aljudovo', '2021-12-10'),
(1095, 'Marijana ModrlanoviÄ‡', 'Ranovac', '2021-12-10'),
(1105, 'Danijel Perionica', 'BoÅ¾evac', '2021-12-10'),
(1115, 'MaliÅ¡a', 'Kobilje', '2021-12-10'),
(1125, 'TasiÄ‡ TehniÄki', 'Petrovac na Mlavi', '2021-12-10'),
(1135, 'Velizar i Stanko', 'Svinjarevo', '2021-12-10'),
(1145, 'Dr MilojeviÄ‡', 'Petrovac na Mlavi', '2021-12-10'),
(1155, 'Paki Limar', 'Crljenac', '2021-12-10'),
(1156, 'Stefan', 'Petrovac', '2021-12-16'),
(1157, 'Ratkapna Isulum', 'Petrovac', '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `korisnikdel`
--

CREATE TABLE `korisnikdel` (
  `idKorisnik` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `mesto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnikdel`
--

INSERT INTO `korisnikdel` (`idKorisnik`, `ime`, `mesto`) VALUES
(14, 'Marko Mik', 'Trnovce'),
(27, 'Darko ', 'DuboÄka'),
(28, 'Ana', 'Beograd'),
(29, 'Maja Zmaj', 'KaliÅ¡te'),
(135, 'Jeca', 'Beograd'),
(145, 'Zabi', 'KneÅ¾ica'),
(185, 'Stefan Rentakar', 'RaÅ¡anac'),
(915, 'Nenad Dragica BG', 'Drugo...'),
(1158, 'TEST', 'Aljudovo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idLogin`, `email`, `password`) VALUES
(1, 'autoshopstepic@gmail.com', '5cccd42d314f915085e0aae728a7d74d');

-- --------------------------------------------------------

--
-- Table structure for table `mesto`
--

CREATE TABLE `mesto` (
  `idMesto` int(11) NOT NULL,
  `red` varchar(5) NOT NULL,
  `kolona` smallint(10) NOT NULL,
  `sprat` smallint(10) NOT NULL,
  `mestoCelo` varchar(50) NOT NULL,
  `zauzeto` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesto`
--

INSERT INTO `mesto` (`idMesto`, `red`, `kolona`, `sprat`, `mestoCelo`, `zauzeto`) VALUES
(1, 'A', 1, 1, 'A1/1', '0'),
(2, 'A', 1, 2, 'A1/2', '0'),
(3, 'A', 2, 1, 'A2/1', '0'),
(4, 'A', 2, 2, 'A2/2', '0'),
(5, 'A', 3, 1, 'A3/1', '0'),
(6, 'A', 3, 2, 'A3/2', '0'),
(7, 'A', 4, 1, 'A4/1', '0'),
(8, 'A', 4, 2, 'A4/2', '0'),
(9, 'A', 5, 1, 'A5/1', '0'),
(10, 'A', 5, 2, 'A5/2', '0'),
(11, 'A', 6, 1, 'A6/1', '0'),
(12, 'A', 6, 2, 'A6/2', '0'),
(13, 'A', 7, 1, 'A7/1', '0'),
(14, 'A', 7, 2, 'A7/2', '0'),
(15, 'B', 1, 1, 'B1/1', '0'),
(16, 'B', 1, 2, 'B1/2', '0'),
(17, 'B', 2, 1, 'B2/1', '0'),
(18, 'B', 2, 2, 'B2/2', '0'),
(19, 'B', 3, 1, 'B3/1', '0'),
(20, 'B', 3, 2, 'B3/2', '0'),
(21, 'B', 4, 1, 'B4/1', '0'),
(22, 'B', 4, 2, 'B4/2', '0'),
(23, 'B', 5, 1, 'B5/1', '0'),
(24, 'B', 5, 2, 'B5/2', '0'),
(25, 'B', 6, 1, 'B6/1', '0'),
(26, 'B', 6, 2, 'B6/2', '0'),
(27, 'B', 7, 1, 'B7/1', '0'),
(28, 'B', 7, 2, 'B7/2', '0'),
(29, 'C', 0, 1, 'C0/1', '0'),
(30, 'C', 0, 2, 'C0/2', '0'),
(31, 'C', 1, 1, 'C1/1', '4'),
(32, 'C', 1, 2, 'C1/2', '0'),
(33, 'C', 2, 1, 'C2/1', '0'),
(34, 'C', 2, 2, 'C2/2', '0'),
(35, 'C', 3, 1, 'C3/1', '0'),
(36, 'C', 3, 2, 'C3/2', '0'),
(37, 'C', 4, 1, 'C4/1', '0'),
(40, 'C', 4, 2, 'C4/2', '0'),
(45, 'C', 5, 1, 'C5/1', '0'),
(55, 'C', 5, 2, 'C5/2', '0'),
(65, 'C', 6, 1, 'C6/1', '0'),
(75, 'C', 6, 2, 'C6/2', '0'),
(85, 'C', 7, 1, 'C7/1', '0'),
(95, 'C', 7, 2, 'C7/2', '0'),
(105, 'D', 1, 1, 'D1/1', '0'),
(115, 'D', 1, 2, 'D1/2', '0'),
(120, 'D', 2, 1, 'D2/1', '0'),
(125, 'D', 2, 2, 'D2/2', '0'),
(135, 'D', 3, 1, 'D3/1', '0'),
(145, 'D', 3, 2, 'D3/2', '0'),
(155, 'D', 4, 1, 'D4/1', '0'),
(165, 'D', 4, 2, 'D4/2', '0'),
(175, 'D', 5, 1, 'D5/1', '0'),
(185, 'D', 5, 2, 'D5/2', '0'),
(195, 'D', 6, 1, 'D6/1', '0'),
(205, 'D', 6, 2, 'D6/2', '0'),
(215, 'D', 7, 1, 'D7/1', '0'),
(225, 'D', 7, 2, 'D7/2', '0'),
(229, 'E', 0, 1, 'E0/1', '0'),
(230, 'E', 0, 2, 'E0/2', '0'),
(235, 'E', 1, 1, 'E1/1', '0'),
(245, 'E', 1, 2, 'E1/2', '0'),
(255, 'E', 2, 1, 'E2/1', '0'),
(265, 'E', 2, 2, 'E2/2', '0'),
(275, 'E', 3, 1, 'E3/1', '0'),
(285, 'E', 3, 2, 'E3/2', '0'),
(295, 'E', 4, 1, 'E4/1', '0'),
(305, 'E', 4, 2, 'E4/2', '0'),
(315, 'E', 5, 1, 'E5/1', '0'),
(325, 'E', 5, 2, 'E5/2', '0'),
(335, 'E', 6, 1, 'E6/1', '0'),
(345, 'E', 6, 2, 'E6/2', '0'),
(349, 'F', 0, 1, 'F0/1', '0'),
(350, 'F', 0, 2, 'F0/2', '0'),
(355, 'F', 1, 1, 'F1/1', '0'),
(365, 'F', 1, 2, 'F1/2', '0'),
(375, 'F', 2, 1, 'F2/1', '0'),
(385, 'F', 2, 2, 'F2/2', '0'),
(395, 'F', 3, 1, 'F3/1', '0'),
(405, 'F', 3, 2, 'F3/2', '0'),
(415, 'F', 4, 1, 'F4/1', '0'),
(425, 'F', 4, 2, 'F4/2', '0'),
(435, 'F', 5, 1, 'F5/1', '0'),
(445, 'F', 5, 2, 'F5/2', '0'),
(455, 'F', 6, 1, 'F6/1', '0'),
(465, 'F', 6, 2, 'F6/2', '0'),
(475, 'F', 7, 1, 'F7/1', '0'),
(485, 'F', 7, 2, 'F7/2', '0'),
(495, 'F', 8, 1, 'F8/1', '0'),
(505, 'F', 8, 2, 'F8/2', '0'),
(515, 'G', 1, 1, 'G1/1', '0'),
(525, 'G', 1, 2, 'G1/2', '0'),
(535, 'G', 2, 1, 'G2/1', '0'),
(545, 'G', 2, 2, 'G2/2', '0'),
(555, 'G', 3, 1, 'G3/1', '0'),
(565, 'G', 3, 2, 'G3/2', '0'),
(575, 'G', 4, 1, 'G4/1', '0'),
(585, 'G', 4, 2, 'G4/2', '0'),
(595, 'G', 5, 1, 'G5/1', '0'),
(605, 'G', 5, 2, 'G5/2', '0'),
(615, 'G', 7, 1, 'G7/1', '0'),
(625, 'G', 7, 2, 'G7/2', '0'),
(635, 'G', 8, 1, 'G8/1', '0'),
(645, 'G', 8, 2, 'G8/2', '0'),
(649, 'H', 0, 1, 'H0/1', '0'),
(650, 'H', 0, 2, 'H0/2', '0'),
(655, 'H', 1, 1, 'H1/1', '0'),
(665, 'H', 1, 2, 'H1/2', '0'),
(675, 'H', 2, 1, 'H2/1', '0'),
(685, 'H', 2, 2, 'H2/2', '0'),
(695, 'H', 3, 1, 'H3/1', '0'),
(705, 'H', 3, 2, 'H3/2', '0'),
(715, 'H', 4, 1, 'H4/1', '0'),
(725, 'H', 4, 2, 'H4/2', '0'),
(735, 'H', 5, 1, 'H5/1', '0'),
(745, 'H', 5, 2, 'H5/2', '0'),
(755, 'H', 6, 1, 'H6/1', '0'),
(765, 'H', 6, 2, 'H6/2', '0'),
(775, 'H', 7, 1, 'H7/1', '0'),
(785, 'H', 7, 2, 'H7/2', '0'),
(795, 'H', 8, 1, 'H8/1', '0'),
(805, 'H', 8, 2, 'H8/2', '0'),
(809, 'I', 0, 1, 'I0/1', '0'),
(810, 'I', 0, 2, 'I0/2', '0'),
(815, 'I', 1, 1, 'I1/1', '0'),
(825, 'I', 1, 2, 'I1/2', '0'),
(835, 'I', 2, 1, 'I2/1', '0'),
(845, 'I', 2, 2, 'I2/2', '0'),
(855, 'I', 3, 1, 'I3/1', '0'),
(865, 'I', 3, 2, 'I3/2', '0'),
(875, 'I', 4, 1, 'I4/1', '0'),
(885, 'I', 4, 2, 'I4/2', '0'),
(895, 'I', 5, 1, 'I5/1', '0'),
(905, 'I', 5, 2, 'I5/2', '0'),
(915, 'I', 6, 1, 'I6/1', '0'),
(925, 'I', 6, 2, 'I6/2', '0'),
(935, 'I', 7, 1, 'I7/1', '0'),
(945, 'I', 7, 2, 'I7/2', '0'),
(955, 'I', 8, 1, 'I8/1', '0'),
(965, 'I', 8, 2, 'I8/2', '0'),
(975, 'J', 1, 1, 'J1/1', '0'),
(985, 'J', 1, 2, 'J1/2', '0'),
(995, 'J', 2, 1, 'J2/1', '0'),
(1005, 'J', 2, 2, 'J2/2', '0'),
(1015, 'J', 3, 1, 'J3/1', '0'),
(1025, 'J', 3, 2, 'J3/2', '0'),
(1035, 'J', 4, 1, 'J4/1', '0'),
(1045, 'J', 4, 2, 'J4/2', '0'),
(1055, 'J', 5, 1, 'J5/1', '0'),
(1065, 'J', 5, 2, 'J5/2', '0'),
(1075, 'J', 7, 1, 'J7/1', '0'),
(1085, 'J', 7, 2, 'J7/2', '0'),
(1095, 'J', 8, 1, 'J8/1', '0'),
(1105, 'J', 8, 2, 'J8/2', '0'),
(1115, 'K', 1, 1, 'K1/1', '0'),
(1125, 'K', 1, 2, 'K1/2', '0'),
(1135, 'K', 2, 1, 'K2/1', '0'),
(1145, 'K', 2, 2, 'K2/2', '0'),
(1155, 'K', 3, 1, 'K3/1', '0'),
(1165, 'K', 3, 2, 'K3/2', '0'),
(1175, 'K', 4, 1, 'K4/1', '0'),
(1185, 'K', 4, 2, 'K4/2', '0'),
(1195, 'K', 5, 1, 'K5/1', '0'),
(1205, 'K', 5, 2, 'K5/2', '0'),
(1215, 'K', 6, 1, 'K6/1', '0'),
(1225, 'K', 6, 2, 'K6/2', '0'),
(1235, 'K', 7, 1, 'K7/1', '0'),
(1245, 'K', 7, 2, 'K7/2', '0'),
(1255, 'K', 8, 1, 'K8/1', '0'),
(1265, 'K', 8, 2, 'K8/2', '0'),
(1275, 'L', 1, 1, 'L1/1', '0'),
(1285, 'L', 1, 2, 'L1/2', '0'),
(1295, 'L', 2, 1, 'L2/1', '0'),
(1305, 'L', 2, 2, 'L2/2', '0'),
(1315, 'L', 3, 1, 'L3/1', '0'),
(1325, 'L', 3, 2, 'L3/2', '0'),
(1335, 'L', 4, 1, 'L4/1', '0'),
(1345, 'L', 4, 2, 'L4/2', '0'),
(1355, 'L', 5, 1, 'L5/1', '0'),
(1365, 'L', 5, 2, 'L5/2', '0'),
(1375, 'L', 6, 1, 'L6/1', '0'),
(1385, 'L', 6, 2, 'L6/2', '0'),
(1395, 'L', 7, 1, 'L7/1', '0'),
(1405, 'L', 7, 2, 'L7/2', '0'),
(1415, 'L', 8, 1, 'L8/1', '0'),
(1425, 'L', 8, 2, 'L8/2', '0'),
(1435, 'L', 9, 1, 'L9/1', '0'),
(1445, 'L', 9, 2, 'L9/2', '0'),
(1455, 'L', 10, 1, 'L10/1', '0'),
(1465, 'L', 10, 2, 'L10/2', '0'),
(1475, 'M', 1, 1, 'M1/1', '0'),
(1485, 'M', 1, 2, 'M1/2', '0'),
(1495, 'M', 2, 1, 'M2/1', '0'),
(1505, 'M', 2, 2, 'M2/2', '0'),
(1515, 'M', 3, 1, 'M3/1', '0'),
(1525, 'M', 3, 2, 'M3/2', '0'),
(1535, 'M', 4, 1, 'M4/1', '0'),
(1545, 'M', 4, 2, 'M4/2', '0'),
(1555, 'M', 5, 1, 'M5/1', '0'),
(1565, 'M', 5, 2, 'M5/2', '0'),
(1575, 'M', 6, 1, 'M6/1', '0'),
(1585, 'M', 6, 2, 'M6/2', '0'),
(1595, 'M', 7, 1, 'M7/1', '0'),
(1605, 'M', 7, 2, 'M7/2', '0'),
(1615, 'M', 8, 1, 'M8/1', '0'),
(1625, 'M', 8, 2, 'M8/2', '0'),
(1635, 'M', 9, 1, 'M9/1', '0'),
(1645, 'M', 9, 2, 'M9/2', '0'),
(1655, 'M', 10, 1, 'M10/1', '0'),
(1665, 'M', 10, 2, 'M10/2', '0'),
(1675, 'N', 1, 1, 'N1/1', '0'),
(1685, 'N', 1, 2, 'N1/2', '0'),
(1695, 'N', 2, 1, 'N2/1', '0'),
(1705, 'N', 2, 2, 'N2/2', '0'),
(1715, 'N', 3, 1, 'N3/1', '0'),
(1725, 'N', 3, 2, 'N3/2', '0'),
(1735, 'N', 4, 1, 'N4/1', '0'),
(1745, 'N', 4, 2, 'N4/2', '0'),
(1755, 'N', 5, 1, 'N5/1', '0'),
(1765, 'N', 5, 2, 'N5/2', '0'),
(1775, 'O', 1, 1, 'O1/1', '0'),
(1785, 'O', 1, 2, 'O1/2', '0'),
(1795, 'O', 2, 1, 'O2/1', '0'),
(1805, 'O', 2, 2, 'O2/2', '0'),
(1815, 'O', 3, 1, 'O3/1', '0'),
(1825, 'O', 3, 2, 'O3/2', '0'),
(1835, 'O', 4, 1, 'O4/1', '0'),
(1845, 'O', 4, 2, 'O4/2', '0'),
(1855, 'O', 5, 1, 'O5/1', '0'),
(1865, 'O', 5, 2, 'O5/2', '0'),
(1866, 'A', 8, 1, 'A8/1', '0'),
(1867, 'B', 8, 1, 'B8/1', '0'),
(1868, 'C', 0, 1, 'C0/1', '0'),
(1869, 'E', 0, 1, 'E0/1', '0'),
(1870, 'F', 0, 1, 'F0/1', '0'),
(1871, 'H', 0, 1, 'H0/1', '0'),
(1872, 'I', 0, 1, 'I0/1', '0'),
(1873, 'A', 8, 2, 'A8/2', '0'),
(1874, 'B', 8, 2, 'B8/2', '0'),
(1875, 'C', 0, 2, 'C0/2', '0'),
(1876, 'E', 0, 2, 'E0/2', '0'),
(1877, 'F', 0, 2, 'F0/2', '0'),
(1878, 'H', 0, 2, 'H0/2', '0'),
(1879, 'I', 0, 2, 'I0/2', '0');

-- --------------------------------------------------------

--
-- Stand-in structure for view `precniktable`
--
CREATE TABLE `precniktable` (
`precnik` varchar(150)
);

-- --------------------------------------------------------

--
-- Structure for view `hotel`
--
DROP TABLE IF EXISTS `hotel`;

CREATE VIEW `hotel`  AS  select `cuvanje`.`idCuvanje` AS `idCuvanje`,`cuvanje`.`idKorisnik` AS `idKorisnik`,`cuvanje`.`idMesto` AS `idMesto`,`mesto`.`red` AS `red`,`mesto`.`kolona` AS `kolona`,`mesto`.`sprat` AS `sprat`,`cuvanje`.`sirina` AS `sirina`,`cuvanje`.`profil` AS `profil`,`cuvanje`.`precnik` AS `precnik`,`cuvanje`.`dot` AS `dot`,`cuvanje`.`dubinaSare` AS `dubinaSare`,`cuvanje`.`sezona` AS `sezona`,`cuvanje`.`felna` AS `felna`,`cuvanje`.`kolicina` AS `kolicina`,`mesto`.`mestoCelo` AS `mestoCelo`,`cuvanje`.`datum` AS `datum` from (`cuvanje` join `mesto` on((`cuvanje`.`idMesto` = `mesto`.`idMesto`))) where 1 ;

-- --------------------------------------------------------

--
-- Structure for view `precniktable`
--
DROP TABLE IF EXISTS `precniktable`;

CREATE VIEW `precniktable`  AS  select `evidencija`.`precnik` AS `precnik` from `evidencija` group by `evidencija`.`precnik` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuvanje`
--
ALTER TABLE `cuvanje`
  ADD PRIMARY KEY (`idCuvanje`),
  ADD KEY `idMesto` (`idMesto`),
  ADD KEY `idKorisnik` (`idKorisnik`);

--
-- Indexes for table `evidencija`
--
ALTER TABLE `evidencija`
  ADD PRIMARY KEY (`idEvidencija`);

--
-- Indexes for table `felne_table`
--
ALTER TABLE `felne_table`
  ADD PRIMARY KEY (`idFelna`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`idKorisnik`);

--
-- Indexes for table `korisnikdel`
--
ALTER TABLE `korisnikdel`
  ADD PRIMARY KEY (`idKorisnik`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indexes for table `mesto`
--
ALTER TABLE `mesto`
  ADD PRIMARY KEY (`idMesto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuvanje`
--
ALTER TABLE `cuvanje`
  MODIFY `idCuvanje` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `evidencija`
--
ALTER TABLE `evidencija`
  MODIFY `idEvidencija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `felne_table`
--
ALTER TABLE `felne_table`
  MODIFY `idFelna` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `idKorisnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1158;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mesto`
--
ALTER TABLE `mesto`
  MODIFY `idMesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1880;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuvanje`
--
ALTER TABLE `cuvanje`
  ADD CONSTRAINT `cuvanje_ibfk_1` FOREIGN KEY (`idMesto`) REFERENCES `mesto` (`idMesto`),
  ADD CONSTRAINT `cuvanje_ibfk_2` FOREIGN KEY (`idKorisnik`) REFERENCES `korisnik` (`idKorisnik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
