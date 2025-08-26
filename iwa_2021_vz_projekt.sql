-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 11:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwa_2021_vz_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL,
  `tip_korisnika_id` int(11) NOT NULL,
  `medijska_kuca_id` int(11) DEFAULT NULL,
  `korime` varchar(50) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lozinka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnik_id`, `tip_korisnika_id`, `medijska_kuca_id`, `korime`, `ime`, `prezime`, `email`, `lozinka`) VALUES
(1, 0, 4, 'admin', 'Administrator', 'Admin', 'admin@foi.hr', 'foi'),
(2, 1, 2, 'voditelj', 'voditeljich', 'Vodi', 'voditelj@foi.hr', '1234567'),
(3, 1, 2, 'pkos', 'Pero', 'Kos', 'pkos@fff.hr', '123456'),
(4, 2, 2, 'vzec', 'Vladimir', 'Zec', 'vzec@fff.hr', '123456'),
(5, 2, NULL, 'qtarantino', 'Quentin', 'Tarantino', 'qtarantino@foi.hr', '123456'),
(6, 2, NULL, 'mbellucci', 'Monica', 'Bellucci', 'mbellucci@foi.hr', '123456'),
(7, 2, NULL, 'vmortensen', 'Viggo', 'Mortensen', 'vmortensen@foi.hr', '123456'),
(8, 2, NULL, 'jgarner', 'Jennifer', 'Garner', 'jgarner@foi.hr', '123456'),
(9, 2, NULL, 'nportman', 'Natalie', 'Portman', 'nportman@foi.hr', '123456'),
(10, 2, NULL, 'dradcliffe', 'Daniel', 'Radcliffe', 'dradcliffe@foi.hr', '123456'),
(11, 2, NULL, 'hberry', 'Halle', 'Berry', 'hberry@foi.hr', '123456'),
(12, 1, 5, 'vdiesel', 'Vin', 'Diesel', 'vdiesel@foi.hr', '123456'),
(13, 2, NULL, 'ecuthbert', 'Elisha', 'Cuthbert', 'ecuthbert@foi.hr', '123456'),
(14, 1, 1, 'janiston', 'Jennifer', 'Aniston', 'janiston@foi.hr', '123456'),
(15, 2, NULL, 'ctheron', 'Charlize', 'Theron', 'ctheron@foi.hr', '123456'),
(16, 1, 3, 'nkidman', 'Nicole', 'Kidman', 'nkidman@foi.hr', '123456'),
(17, 1, 1, 'ewatson', 'Emma', 'Watson', 'ewatson@foi.hr', '123456'),
(18, 2, NULL, 'kdunst', 'Kirsten', 'Dunst', 'kdunst@foi.hr', '123456'),
(19, 2, NULL, 'sjohansson', 'Scarlett', 'Johansson', 'sjohansson@foi.hr', '123456'),
(20, 2, NULL, 'philton', 'Paris', 'Hilton', 'philton@foi.hr', '123456'),
(21, 2, NULL, 'kbeckinsale', 'Kate', 'Beckinsale', 'kbeckinsale@foi.hr', '123456'),
(22, 2, NULL, 'tcruise', 'Tom', 'Cruise', 'tcruise@foi.hr', '123456'),
(23, 2, NULL, 'hduff', 'Hilary', 'Duff', 'hduff@foi.hr', '123456'),
(24, 2, NULL, 'ajolie', 'Angelina', 'Jolie', 'ajolie@foi.hr', '123456'),
(25, 2, NULL, 'kknightley', 'Keira', 'Knightley', 'kknightley@foi.hr', '123456'),
(26, 2, NULL, 'obloom', 'Orlando', 'Bloom', 'obloom@foi.hr', '123456'),
(27, 2, NULL, 'llohan', 'Lindsay', 'Lohan', 'llohan@foi.hr', '123456'),
(28, 2, NULL, 'jdepp', 'Johnny', 'Depp', 'jdepp@foi.hr', '123456'),
(29, 2, NULL, 'kreeves', 'Keanu', 'Reeves', 'kreeves@foi.hr', '123456'),
(30, 2, NULL, 'thanks', 'Tom', 'Hanks', 'thanks@foi.hr', '123456'),
(31, 2, NULL, 'elongoria', 'Eva', 'Longoria', 'elongoria@foi.hr', '123456'),
(32, 2, NULL, 'rde', 'Robert', 'De', 'rde@foi.hr', '123456'),
(33, 2, NULL, 'jheder', 'Jon', 'Heder', 'jheder@foi.hr', '123456'),
(34, 2, NULL, 'rmcadams', 'Rachel', 'McAdams', 'rmcadams@foi.hr', '123456'),
(35, 2, NULL, 'cbale', 'Christian', 'Bale', 'cbale@foi.hr', '123456'),
(36, 2, NULL, 'jalba', 'Jessica', 'Alba', 'jalba@foi.hr', '123456'),
(37, 2, NULL, 'bpitt', 'Brad', 'Pitt', 'bpitt@foi.hr', '123456'),
(43, 2, NULL, 'apacino', 'Al', 'Pacino', 'apacino@foi.hr', '123456'),
(44, 2, NULL, 'wsmith', 'Will', 'Smith', 'wsmith@foi.hr', '123456'),
(45, 2, NULL, 'ncage', 'Nicolas', 'Cage', 'ncage@foi.hr', '123456'),
(46, 2, NULL, 'vanne', 'Vanessa', 'Anne', 'vanne@foi.hr', '123456'),
(47, 2, NULL, 'kheigl', 'Katherine', 'Heigl', 'kheigl@foi.hr', '123456'),
(48, 2, NULL, 'gbutler', 'Gerard', 'Butler', 'gbutler@foi.hr', '123456'),
(49, 2, NULL, 'jbiel', 'Jessica', 'Biel', 'jbiel@foi.hr', '123456'),
(50, 2, NULL, 'ldicaprio', 'Leonardo', 'DiCaprio', 'ldicaprio@foi.hr', '123456'),
(51, 2, NULL, 'mdamon', 'Matt', 'Damon', 'mdamon@foi.hr', '123456'),
(52, 2, NULL, 'hpanettiere', 'Hayden', 'Panettiere', 'hpanettiere@foi.hr', '123456'),
(53, 2, NULL, 'rreynolds', 'Ryan', 'Reynolds', 'rreynolds@foi.hr', '123456'),
(54, 2, NULL, 'jstatham', 'Jason', 'Statham', 'jstatham@foi.hr', '123456'),
(55, 2, NULL, 'enorton', 'Edward', 'Norton', 'enorton@foi.hr', '123456'),
(56, 2, NULL, 'mwahlberg', 'Mark', 'Wahlberg', 'mwahlberg@foi.hr', '123456'),
(57, 2, NULL, 'jmcavoy', 'James', 'McAvoy', 'jmcavoy@foi.hr', '123456'),
(58, 2, NULL, 'epage', 'Ellen', 'Page', 'epage@foi.hr', '123456'),
(59, 2, NULL, 'mcyrus', 'Miley', 'Cyrus', 'mcyrus@foi.hr', '123456'),
(60, 2, NULL, 'kstewart', 'Kristen', 'Stewart', 'kstewart@foi.hr', '123456'),
(61, 2, NULL, 'mfox', 'Megan', 'Fox', 'mfox@foi.hr', '123456'),
(62, 2, NULL, 'slabeouf', 'Shia', 'LaBeouf', 'slabeouf@foi.hr', '123456'),
(63, 2, NULL, 'ceastwood', 'Clint', 'Eastwood', 'ceastwood@foi.hr', '123456'),
(64, 2, NULL, 'srogen', 'Seth', 'Rogen', 'srogen@foi.hr', '123456'),
(65, 2, NULL, 'nreed', 'Nikki', 'Reed', 'nreed@foi.hr', '123456'),
(66, 2, NULL, 'agreene', 'Ashley', 'Greene', 'agreene@foi.hr', '123456'),
(67, 2, NULL, 'zdeschanel', 'Zooey', 'Deschanel', 'zdeschanel@foi.hr', '123456'),
(68, 2, NULL, 'dfanning', 'Dakota', 'Fanning', 'dfanning@foi.hr', '123456'),
(69, 2, NULL, 'tlautner', 'Taylor', 'Lautner', 'tlautner@foi.hr', '123456'),
(70, 2, NULL, 'rpattinson', 'Robert', 'Pattinson', 'rpattinson@foi.hr', '123456'),
(71, 1, NULL, 'modus', 'modi', 'modddd', 'mod@mood.hr', '123');

-- --------------------------------------------------------

--
-- Table structure for table `kupnja`
--

CREATE TABLE `kupnja` (
  `medijska_kuca_id` int(11) NOT NULL,
  `datum_vrijeme_kupnje` datetime DEFAULT NULL,
  `ponuda_eur` float NOT NULL,
  `odbijena` tinyint(4) NOT NULL DEFAULT 0,
  `pjesma_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `kupnja`
--

INSERT INTO `kupnja` (`medijska_kuca_id`, `datum_vrijeme_kupnje`, `ponuda_eur`, `odbijena`, `pjesma_id`) VALUES
(1, NULL, 3.44, 1, 3),
(2, '2024-08-18 15:57:19', 0, 0, 14),
(3, '2024-08-18 15:58:04', 0, 0, 12),
(3, '2024-08-18 15:58:26', 13, 0, 14),
(4, '2024-08-19 18:14:57', 5.66, 0, 3),
(4, NULL, 7.6, 0, 4),
(4, NULL, 4.56, 0, 5),
(4, '2024-08-19 17:58:13', 4.67, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `medijska_kuca`
--

CREATE TABLE `medijska_kuca` (
  `medijska_kuca_id` int(11) NOT NULL,
  `naziv_kuce` varchar(45) NOT NULL,
  `opis_kuce` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `medijska_kuca`
--

INSERT INTO `medijska_kuca` (`medijska_kuca_id`, `naziv_kuce`, `opis_kuce`) VALUES
(1, 'Novi pokret', ''),
(2, 'Klasika', 'Klasična glazba je sve što nas zanima.'),
(3, 'Rokaši Studio', ''),
(4, 'Mild One', ''),
(5, 'Folklor', 'Volimo tambure i folklorne pjesme.'),
(6, 'Moja nova kuća', 'Najbolja medijska kuća jer je moja'),
(7, 'iva', '');

-- --------------------------------------------------------

--
-- Table structure for table `pjesma`
--

CREATE TABLE `pjesma` (
  `pjesma_id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `medijska_kuca_id` int(11) DEFAULT NULL,
  `naziv` varchar(45) NOT NULL,
  `poveznica` varchar(150) NOT NULL,
  `opis` text NOT NULL,
  `datum_vrijeme_kreiranja` timestamp NOT NULL DEFAULT current_timestamp(),
  `datum_vrijeme_kupnje` timestamp NULL DEFAULT NULL,
  `broj_svidanja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `pjesma`
--

INSERT INTO `pjesma` (`pjesma_id`, `korisnik_id`, `medijska_kuca_id`, `naziv`, `poveznica`, `opis`, `datum_vrijeme_kreiranja`, `datum_vrijeme_kupnje`, `broj_svidanja`) VALUES
(1, 3, 1, 'Namcor', 'https://pl.meln.top/mr/3be43f7c60e76d1db08c5a22c36994c5.mp3?session_key=5909fa02c57a57a535614d9d6456bf53', 'Ne volem ništa, al tebe volem.', '2021-10-22 13:29:00', '2021-11-05 09:22:00', 200),
(2, 3, 2, 'Kiša poslje tuge', 'https://pl.meln.top/mr/a8b5488c70bd60bccd3f6fd66be37da3.mp3?session_key=233523b7faa91570e1ff0c7e2cc01597', 'Ovo je moja interpretacija unutarnjeg doživljaja tuge.', '2021-10-23 09:00:00', '2021-12-21 11:29:00', 100),
(3, 13, 4, 'We Will Rock You', 'https://pl.meln.top/mr/581dd34ce98c6ab8776b7953b2628f26.mp3?session_key=e80e165db60b922d3fd0516848fe2a67', 'We really will rock you.', '2020-09-10 09:21:00', '2024-08-19 16:14:57', 321),
(4, 3, 3, 'I Can\'t Go on Without You', 'https://pl.meln.top/mr/af9e48b76d942400e8c8b3d6e00c8397.mp3?session_key=f7ccfe392176b2f79586b9be3880ba5f', 'S ovom pjesmom pokušavamo doprijeti do mladih, živio Rock.', '2024-08-18 19:07:47', '2021-01-12 20:21:00', 1546),
(5, 19, 2, 'Mezimica', 'https://pl.meln.top/mr/349b1f5973a71aefe7f124e7b6eb98b5.mp3?session_key=8c18b3ef34f55f838777e8f7bb403afa', 'Ovo je pjesma o mojoj mački Mazi.', '2021-08-12 10:29:00', '2021-09-12 10:12:00', 5233),
(6, 5, 1, 'Ringišpil', 'https://pl.meln.top/mr/4a996906a6b5ba32e56a2c1827aeec85.mp3?session_key=2b3a7c11af4919e2ef43e4c1c74e35af', 'Pa daj okreni taj ringišpil u mojoj glavi. To niko ne zna, samo ti. Bez tebe, drveni konjići tužno stoje.', '2021-10-22 13:29:00', '2021-10-22 15:29:00', 86),
(7, 5, 1, 'Olivera', 'https://cdnm.meln.top/ml/?audio=0_33818195653023&title=Djordje%20Balasevic%20-%20Olivera&hash=cFiuwHHM15FgKfltB5zoKmxS5i8=', 'Ti si bila još devojčica. Leteo je kao leptir tvoj čuperak. ', '2021-10-10 11:29:00', NULL, 254),
(8, 18, 5, 'Zaljuljali smo svijet', 'https://pl.meln.top/mr/3d6bb4639ada46ad7cda4e9e975ba55c.mp3?session_key=389b9863c19efdb46c673cc639b06443', 'Ovo je pjesma o ljubavi koja je najbolji osječaj na svijetu.', '2021-09-28 10:11:00', NULL, 603),
(9, 21, 5, 'Zajdi, zajdi', 'https://pl.meln.top/mr/5987cf0a902c1d7be8d797c13acccb60.mp3?session_key=1ec6a45b803e939da17028d1e5ea6832', 'Moja verzija makedonske pjesme Zajdi zajdi sonce.', '2021-12-29 10:03:00', NULL, 326),
(10, 21, 4, 'Everything I Wanted', 'https://pl.meln.top/mr/50e5795710b72022c698b2e4d56854ee.mp3?session_key=3052dcf6e7556da4e187a38fa068e06b', 'I wanted nothing.', '2021-05-03 19:29:00', NULL, 23),
(11, 25, 4, 'Dogs of War', 'https://pl.meln.top/mr/a51602324fad5eef3116e0a90ef38f19.mp3?session_key=ba40560321c36f4c4d4e3feec88c21c3', 'Blues Saraceno!', '2024-08-19 08:11:02', '2024-08-19 15:58:13', 7546),
(12, 5, 3, 'Industry Baby', 'https://pl.meln.top/mr/c3366c8002be2e35ef0d194d444e98b0.mp3?session_key=70dd0afd0a34297f498eea5121a7154b', 'Pjesma je snimana sa naglaskom na industriju.', '2024-08-18 15:58:04', NULL, 321),
(13, 3, NULL, 'Bad Habits', 'https://pl.meln.top/mr/d03dd7709a537096e685ec668c438ea9.mp3?session_key=9b1674af73a3e3152826750a21c683d9', 'Pjesma je napravljena u suradnji Ed Sheeranom', '2020-03-10 11:12:00', NULL, 54),
(14, 5, 3, 'Levitating', 'https://pl.meln.top/mr/65d7913e1ffe205c082ad4e5b9478d80.mp3?session_key=7d47327be416695d88ad5d462b93d868', 'If you wanna run away with me, I know a galaxy and I can take you for a RIDE!', '2024-08-18 15:58:26', '0000-00-00 00:00:00', 532),
(15, 19, NULL, 'Don\'t go yet', 'https://pl.meln.top/mr/98a6ac59bc5d180eb4ca4f1167ccc545.mp3?session_key=5f3f944b4ae2acb8919745b30d00dcfe', 'Dongoye, dongoye', '2021-11-11 10:11:00', NULL, 12),
(16, 5, NULL, 'Beggin', 'https://pl.meln.top/mr/52f8aaf4b2ca0bb7fb269aa0bcd07360.mp3?session_key=7692ee09bd24c3c38480dc8eaf0cae23', 'Ovo je cover poznate pjesme u našoj novoj izvedbi.', '2021-02-20 10:11:00', NULL, 53),
(17, 5, NULL, 'My Universe', 'https://pl.meln.top/mr/b86285eee3d7cb1c7617b6a6bf6b0ace.mp3?session_key=71f03f01c2a1b6b3fbf1955a1cd76b18', 'Pjesma u suradnji s BTS-om. Cookiee monsenieur je najbolji.', '2024-08-18 20:39:31', NULL, 24),
(18, 20, NULL, 'Montero', 'https://pl.meln.top/mr/94839be3cbd4a7505c260408ca91dbda.mp3?session_key=e9d99c78afa3b56992c6201fe249ec12', 'Call me by your name!', '2021-10-10 09:22:00', NULL, 56),
(19, 5, NULL, 'Moja prva pjesma', 'http://pjesma.com', 'Mojjaaa pjesmaaa', '2024-08-18 17:25:49', NULL, 0),
(20, 5, NULL, 'Moja prva pjesma', 'http://pjesma.com', 'Mojjaaa pjesmaaa', '2024-08-18 17:26:39', NULL, 0),
(21, 1, NULL, 'Admin pjeva', 'http://pjesma.com/admin_pjeva', 'Admin je odlucio da pusti glas', '2024-08-19 16:37:59', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

CREATE TABLE `tip_korisnika` (
  `tip_korisnika_id` int(11) NOT NULL,
  `naziv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`tip_korisnika_id`, `naziv`) VALUES
(0, 'administrator'),
(1, 'moderator'),
(2, 'korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnik_id`),
  ADD KEY `tip_korisnika_id_fk_idx` (`tip_korisnika_id`),
  ADD KEY `medijska_kuca_id_fk_idx` (`medijska_kuca_id`);

--
-- Indexes for table `kupnja`
--
ALTER TABLE `kupnja`
  ADD PRIMARY KEY (`medijska_kuca_id`,`pjesma_id`);

--
-- Indexes for table `medijska_kuca`
--
ALTER TABLE `medijska_kuca`
  ADD PRIMARY KEY (`medijska_kuca_id`);

--
-- Indexes for table `pjesma`
--
ALTER TABLE `pjesma`
  ADD PRIMARY KEY (`pjesma_id`),
  ADD KEY `medijska_kuca_id_fk_idx` (`medijska_kuca_id`),
  ADD KEY `korisnik_id_fk_idx` (`korisnik_id`);

--
-- Indexes for table `tip_korisnika`
--
ALTER TABLE `tip_korisnika`
  ADD PRIMARY KEY (`tip_korisnika_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `medijska_kuca`
--
ALTER TABLE `medijska_kuca`
  MODIFY `medijska_kuca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pjesma`
--
ALTER TABLE `pjesma`
  MODIFY `pjesma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tip_korisnika`
--
ALTER TABLE `tip_korisnika`
  MODIFY `tip_korisnika_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `medijska_kuca_id_fk` FOREIGN KEY (`medijska_kuca_id`) REFERENCES `medijska_kuca` (`medijska_kuca_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tip_korisnika_id_fk` FOREIGN KEY (`tip_korisnika_id`) REFERENCES `tip_korisnika` (`tip_korisnika_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pjesma`
--
ALTER TABLE `pjesma`
  ADD CONSTRAINT `korisnik_id_fk` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `medijska_kuca_id_fk1` FOREIGN KEY (`medijska_kuca_id`) REFERENCES `medijska_kuca` (`medijska_kuca_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
