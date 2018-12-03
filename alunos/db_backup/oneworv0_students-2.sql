-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2018 at 04:40 PM
-- Server version: 5.6.39-83.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneworv0_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `artesvisuais_1a`
--

CREATE TABLE `artesvisuais_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artesvisuais_1a`
--

INSERT INTO `artesvisuais_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `artesvisuais_1a`
--
DELIMITER $$
CREATE TRIGGER `media4` BEFORE UPDATE ON `artesvisuais_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal3` AFTER UPDATE ON `artesvisuais_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `artesvisuais_2a`
--

CREATE TABLE `artesvisuais_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artesvisuais_2a`
--

INSERT INTO `artesvisuais_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `artesvisuais_2a`
--
DELIMITER $$
CREATE TRIGGER `media5` BEFORE UPDATE ON `artesvisuais_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal10` AFTER UPDATE ON `artesvisuais_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `artesvisuais_3a`
--

CREATE TABLE `artesvisuais_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artesvisuais_3a`
--

INSERT INTO `artesvisuais_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `artesvisuais_3a`
--
DELIMITER $$
CREATE TRIGGER `media6` BEFORE UPDATE ON `artesvisuais_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal17` AFTER UPDATE ON `artesvisuais_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `artesvisuais_4a`
--

CREATE TABLE `artesvisuais_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artesvisuais_4a`
--

INSERT INTO `artesvisuais_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `artesvisuais_4a`
--
DELIMITER $$
CREATE TRIGGER `media7` BEFORE UPDATE ON `artesvisuais_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal25` AFTER UPDATE ON `artesvisuais_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cnaturais_3a`
--

CREATE TABLE `cnaturais_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cnaturais_3a`
--

INSERT INTO `cnaturais_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `cnaturais_3a`
--
DELIMITER $$
CREATE TRIGGER `media8` BEFORE UPDATE ON `cnaturais_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal21` AFTER UPDATE ON `cnaturais_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cnaturais_4a`
--

CREATE TABLE `cnaturais_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cnaturais_4a`
--

INSERT INTO `cnaturais_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `cnaturais_4a`
--
DELIMITER $$
CREATE TRIGGER `media9` BEFORE UPDATE ON `cnaturais_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal29` AFTER UPDATE ON `cnaturais_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `csociais_4a`
--

CREATE TABLE `csociais_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `csociais_4a`
--

INSERT INTO `csociais_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `csociais_4a`
--
DELIMITER $$
CREATE TRIGGER `media10` BEFORE UPDATE ON `csociais_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal30` AFTER UPDATE ON `csociais_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `danca_1a`
--

CREATE TABLE `danca_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danca_1a`
--

INSERT INTO `danca_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `danca_1a`
--
DELIMITER $$
CREATE TRIGGER `media11` BEFORE UPDATE ON `danca_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal6` AFTER UPDATE ON `danca_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `danca_2a`
--

CREATE TABLE `danca_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danca_2a`
--

INSERT INTO `danca_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `danca_2a`
--
DELIMITER $$
CREATE TRIGGER `media12` BEFORE UPDATE ON `danca_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal13` AFTER UPDATE ON `danca_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `danca_3a`
--

CREATE TABLE `danca_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danca_3a`
--

INSERT INTO `danca_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `danca_3a`
--
DELIMITER $$
CREATE TRIGGER `media13` BEFORE UPDATE ON `danca_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal20` AFTER UPDATE ON `danca_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `danca_4a`
--

CREATE TABLE `danca_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danca_4a`
--

INSERT INTO `danca_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `danca_4a`
--
DELIMITER $$
CREATE TRIGGER `media14` BEFORE UPDATE ON `danca_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal28` AFTER UPDATE ON `danca_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `edf_1a`
--

CREATE TABLE `edf_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edf_1a`
--

INSERT INTO `edf_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `edf_1a`
--
DELIMITER $$
CREATE TRIGGER `media15` BEFORE UPDATE ON `edf_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal5` AFTER UPDATE ON `edf_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `edf_2a`
--

CREATE TABLE `edf_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edf_2a`
--

INSERT INTO `edf_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `edf_2a`
--
DELIMITER $$
CREATE TRIGGER `media16` BEFORE UPDATE ON `edf_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal12` AFTER UPDATE ON `edf_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `edf_3a`
--

CREATE TABLE `edf_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edf_3a`
--

INSERT INTO `edf_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `edf_3a`
--
DELIMITER $$
CREATE TRIGGER `media17` BEFORE UPDATE ON `edf_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal19` AFTER UPDATE ON `edf_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `edf_4a`
--

CREATE TABLE `edf_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edf_4a`
--

INSERT INTO `edf_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `edf_4a`
--
DELIMITER $$
CREATE TRIGGER `media18` BEFORE UPDATE ON `edf_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal27` AFTER UPDATE ON `edf_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ing_1a`
--

CREATE TABLE `ing_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ing_1a`
--

INSERT INTO `ing_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `ing_1a`
--
DELIMITER $$
CREATE TRIGGER `media19` BEFORE UPDATE ON `ing_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal2` AFTER UPDATE ON `ing_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ing_2a`
--

CREATE TABLE `ing_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ing_2a`
--

INSERT INTO `ing_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `ing_2a`
--
DELIMITER $$
CREATE TRIGGER `media20` BEFORE UPDATE ON `ing_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal9` AFTER UPDATE ON `ing_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ing_3a`
--

CREATE TABLE `ing_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ing_3a`
--

INSERT INTO `ing_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `ing_3a`
--
DELIMITER $$
CREATE TRIGGER `media21` BEFORE UPDATE ON `ing_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal16` AFTER UPDATE ON `ing_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ing_4a`
--

CREATE TABLE `ing_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ing_4a`
--

INSERT INTO `ing_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `ing_4a`
--
DELIMITER $$
CREATE TRIGGER `media22` BEFORE UPDATE ON `ing_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal24` AFTER UPDATE ON `ing_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mat_1a`
--

CREATE TABLE `mat_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mat_1a`
--

INSERT INTO `mat_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `mat_1a`
--
DELIMITER $$
CREATE TRIGGER `media23` BEFORE UPDATE ON `mat_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal1` AFTER UPDATE ON `mat_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mat_2a`
--

CREATE TABLE `mat_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mat_2a`
--

INSERT INTO `mat_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `mat_2a`
--
DELIMITER $$
CREATE TRIGGER `media24` BEFORE UPDATE ON `mat_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal8` AFTER UPDATE ON `mat_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mat_3a`
--

CREATE TABLE `mat_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mat_3a`
--

INSERT INTO `mat_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `mat_3a`
--
DELIMITER $$
CREATE TRIGGER `media25` BEFORE UPDATE ON `mat_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal15` AFTER UPDATE ON `mat_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mat_4a`
--

CREATE TABLE `mat_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mat_4a`
--

INSERT INTO `mat_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `mat_4a`
--
DELIMITER $$
CREATE TRIGGER `media26` BEFORE UPDATE ON `mat_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal23` AFTER UPDATE ON `mat_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `medias_1a`
--

CREATE TABLE `medias_1a` (
  `identity` int(11) NOT NULL,
  `nome_id` int(11) DEFAULT NULL,
  `media` int(11) DEFAULT NULL,
  `classe` varchar(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `exame` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medias_1a`
--

INSERT INTO `medias_1a` (`identity`, `nome_id`, `media`, `classe`, `year`, `exame`) VALUES
(2019, 1, NULL, '1a Classe', 2018, 0),
(2020, 2, NULL, '1a Classe', 2018, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medias_2a`
--

CREATE TABLE `medias_2a` (
  `identity` int(11) NOT NULL,
  `nome_id` int(11) DEFAULT NULL,
  `media` int(11) DEFAULT NULL,
  `exame` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medias_3a`
--

CREATE TABLE `medias_3a` (
  `identity` int(11) NOT NULL,
  `nome_id` int(11) DEFAULT NULL,
  `media` int(11) DEFAULT NULL,
  `exame` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medias_4a`
--

CREATE TABLE `medias_4a` (
  `identity` int(11) NOT NULL,
  `nome_id` int(11) DEFAULT NULL,
  `media` int(11) DEFAULT NULL,
  `exame` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mensalidades`
--

CREATE TABLE `mensalidades` (
  `id` int(11) NOT NULL,
  `payment_year` year(4) DEFAULT NULL,
  `fev` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `mar` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `abr` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `mai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `jun` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `jul` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `ago` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `sete` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `outu` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `nov` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mensalidades`
--

INSERT INTO `mensalidades` (`id`, `payment_year`, `fev`, `mar`, `abr`, `mai`, `jun`, `jul`, `ago`, `sete`, `outu`, `nov`) VALUES
(1, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(2, 2018, 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(3, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(4, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(5, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(6, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(7, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(8, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(9, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(10, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(11, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(12, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(13, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(14, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(15, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(16, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(17, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(18, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(19, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não'),
(20, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(21, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(22, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(23, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(24, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(25, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(26, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(27, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(28, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(29, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(30, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(31, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(32, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(33, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(34, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(35, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(36, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(37, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(38, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(39, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(40, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(41, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(42, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(43, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(44, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(45, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(46, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não'),
(47, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(48, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(49, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(50, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(51, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(52, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(53, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(54, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(55, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(56, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(57, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(58, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(59, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(60, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(61, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(62, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(63, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(64, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(65, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(66, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(67, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não'),
(68, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(69, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(70, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(71, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(72, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(73, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(74, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(75, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não'),
(76, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(77, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(78, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(79, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(80, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(81, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(82, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(83, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(84, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(85, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(86, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(87, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(88, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(89, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(90, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(91, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(92, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(93, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(94, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(95, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(96, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(97, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(98, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(99, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não'),
(100, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(101, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(102, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(103, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(104, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(105, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(106, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(107, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(108, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(109, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(110, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(111, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(112, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(113, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(114, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(115, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(116, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(117, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(118, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(119, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(120, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(121, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(122, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(123, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(124, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(125, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(126, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(127, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(128, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(129, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(130, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(131, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(132, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(133, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(134, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(135, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(136, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(137, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(138, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(139, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(140, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(141, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(142, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(143, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(144, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(145, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(146, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(147, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(148, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(149, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(150, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(151, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(152, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(153, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(154, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(155, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(156, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não'),
(157, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(158, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(159, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(160, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(161, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(162, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(163, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(164, 2018, 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(165, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(166, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(167, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(168, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(169, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(170, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(171, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim'),
(172, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(173, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(174, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(175, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(176, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(177, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(178, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(179, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(180, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(181, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(182, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(183, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(184, 2018, 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(185, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(186, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(187, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(188, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(189, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(190, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(191, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(192, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(193, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(194, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(195, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(196, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(197, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(198, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(199, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(200, 2018, 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(201, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(202, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(203, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(204, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(205, 2018, 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(207, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(208, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(209, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não'),
(210, 2018, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não'),
(211, 2018, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não');

-- --------------------------------------------------------

--
-- Table structure for table `musica_1a`
--

CREATE TABLE `musica_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `musica_1a`
--

INSERT INTO `musica_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `musica_1a`
--
DELIMITER $$
CREATE TRIGGER `media27` BEFORE UPDATE ON `musica_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal4` AFTER UPDATE ON `musica_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `musica_2a`
--

CREATE TABLE `musica_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `musica_2a`
--

INSERT INTO `musica_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `musica_2a`
--
DELIMITER $$
CREATE TRIGGER `media28` BEFORE UPDATE ON `musica_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal11` AFTER UPDATE ON `musica_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `musica_3a`
--

CREATE TABLE `musica_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `musica_3a`
--

INSERT INTO `musica_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `musica_3a`
--
DELIMITER $$
CREATE TRIGGER `media29` BEFORE UPDATE ON `musica_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal18` AFTER UPDATE ON `musica_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `musica_4a`
--

CREATE TABLE `musica_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `musica_4a`
--

INSERT INTO `musica_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `musica_4a`
--
DELIMITER $$
CREATE TRIGGER `media30` BEFORE UPDATE ON `musica_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal26` AFTER UPDATE ON `musica_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `port_1a`
--

CREATE TABLE `port_1a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `port_1a`
--

INSERT INTO `port_1a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(1, NULL, NULL, NULL, NULL, 2018),
(2, NULL, NULL, NULL, NULL, 2018),
(3, NULL, NULL, NULL, NULL, 2018),
(4, NULL, NULL, NULL, NULL, 2018),
(5, NULL, NULL, NULL, NULL, 2018),
(6, NULL, NULL, NULL, NULL, 2018),
(7, NULL, NULL, NULL, NULL, 2018),
(8, NULL, NULL, NULL, NULL, 2018),
(9, NULL, NULL, NULL, NULL, 2018),
(10, NULL, NULL, NULL, NULL, 2018),
(11, NULL, NULL, NULL, NULL, 2018),
(12, NULL, NULL, NULL, NULL, 2018),
(13, NULL, NULL, NULL, NULL, 2018),
(14, NULL, NULL, NULL, NULL, 2018),
(15, NULL, NULL, NULL, NULL, 2018),
(16, NULL, NULL, NULL, NULL, 2018),
(17, NULL, NULL, NULL, NULL, 2018),
(18, NULL, NULL, NULL, NULL, 2018),
(19, NULL, NULL, NULL, NULL, 2018),
(20, NULL, NULL, NULL, NULL, 2018),
(21, NULL, NULL, NULL, NULL, 2018),
(22, NULL, NULL, NULL, NULL, 2018),
(23, NULL, NULL, NULL, NULL, 2018),
(24, NULL, NULL, NULL, NULL, 2018),
(25, NULL, NULL, NULL, NULL, 2018),
(26, NULL, NULL, NULL, NULL, 2018),
(27, NULL, NULL, NULL, NULL, 2018),
(28, NULL, NULL, NULL, NULL, 2018),
(29, NULL, NULL, NULL, NULL, 2018),
(30, NULL, NULL, NULL, NULL, 2018),
(31, NULL, NULL, NULL, NULL, 2018),
(32, NULL, NULL, NULL, NULL, 2018),
(33, NULL, NULL, NULL, NULL, 2018),
(34, NULL, NULL, NULL, NULL, 2018),
(35, NULL, NULL, NULL, NULL, 2018),
(36, NULL, NULL, NULL, NULL, 2018),
(37, NULL, NULL, NULL, NULL, 2018),
(38, NULL, NULL, NULL, NULL, 2018),
(39, NULL, NULL, NULL, NULL, 2018),
(40, NULL, NULL, NULL, NULL, 2018),
(41, NULL, NULL, NULL, NULL, 2018),
(42, NULL, NULL, NULL, NULL, 2018),
(43, NULL, NULL, NULL, NULL, 2018),
(44, NULL, NULL, NULL, NULL, 2018),
(45, NULL, NULL, NULL, NULL, 2018),
(46, NULL, NULL, NULL, NULL, 2018),
(209, NULL, NULL, NULL, NULL, 2018),
(211, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `port_1a`
--
DELIMITER $$
CREATE TRIGGER `media` BEFORE UPDATE ON `port_1a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal0` AFTER UPDATE ON `port_1a` FOR EACH ROW REPLACE INTO medias_1a (identity, classe, nome_id, year, media) VALUES ((NEW.nome_id+' '+NEW.year), '1a Classe', NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_1a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_1a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `port_2a`
--

CREATE TABLE `port_2a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `port_2a`
--

INSERT INTO `port_2a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(47, NULL, NULL, NULL, NULL, 2018),
(48, NULL, NULL, NULL, NULL, 2018),
(49, NULL, NULL, NULL, NULL, 2018),
(50, NULL, NULL, NULL, NULL, 2018),
(51, NULL, NULL, NULL, NULL, 2018),
(52, NULL, NULL, NULL, NULL, 2018),
(53, NULL, NULL, NULL, NULL, 2018),
(54, NULL, NULL, NULL, NULL, 2018),
(55, NULL, NULL, NULL, NULL, 2018),
(56, NULL, NULL, NULL, NULL, 2018),
(57, NULL, NULL, NULL, NULL, 2018),
(58, NULL, NULL, NULL, NULL, 2018),
(59, NULL, NULL, NULL, NULL, 2018),
(60, NULL, NULL, NULL, NULL, 2018),
(61, NULL, NULL, NULL, NULL, 2018),
(62, NULL, NULL, NULL, NULL, 2018),
(63, NULL, NULL, NULL, NULL, 2018),
(64, NULL, NULL, NULL, NULL, 2018),
(65, NULL, NULL, NULL, NULL, 2018),
(66, NULL, NULL, NULL, NULL, 2018),
(67, NULL, NULL, NULL, NULL, 2018),
(68, NULL, NULL, NULL, NULL, 2018),
(69, NULL, NULL, NULL, NULL, 2018),
(70, NULL, NULL, NULL, NULL, 2018),
(71, NULL, NULL, NULL, NULL, 2018),
(72, NULL, NULL, NULL, NULL, 2018),
(73, NULL, NULL, NULL, NULL, 2018),
(74, NULL, NULL, NULL, NULL, 2018),
(75, NULL, NULL, NULL, NULL, 2018),
(76, NULL, NULL, NULL, NULL, 2018),
(77, NULL, NULL, NULL, NULL, 2018),
(78, NULL, NULL, NULL, NULL, 2018),
(79, NULL, NULL, NULL, NULL, 2018),
(80, NULL, NULL, NULL, NULL, 2018),
(81, NULL, NULL, NULL, NULL, 2018),
(82, NULL, NULL, NULL, NULL, 2018),
(83, NULL, NULL, NULL, NULL, 2018),
(84, NULL, NULL, NULL, NULL, 2018),
(85, NULL, NULL, NULL, NULL, 2018),
(86, NULL, NULL, NULL, NULL, 2018),
(87, NULL, NULL, NULL, NULL, 2018),
(88, NULL, NULL, NULL, NULL, 2018),
(89, NULL, NULL, NULL, NULL, 2018),
(90, NULL, NULL, NULL, NULL, 2018),
(91, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `port_2a`
--
DELIMITER $$
CREATE TRIGGER `media1` BEFORE UPDATE ON `port_2a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal7` AFTER UPDATE ON `port_2a` FOR EACH ROW REPLACE INTO medias_2a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_2a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_2a WHERE nome_id=NEW.nome_id))/7)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `port_3a`
--

CREATE TABLE `port_3a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `port_3a`
--

INSERT INTO `port_3a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(2, NULL, NULL, NULL, NULL, 2018),
(92, NULL, NULL, NULL, NULL, 2018),
(93, NULL, NULL, NULL, NULL, 2018),
(94, NULL, NULL, NULL, NULL, 2018),
(95, NULL, NULL, NULL, NULL, 2018),
(96, NULL, NULL, NULL, NULL, 2018),
(97, NULL, NULL, NULL, NULL, 2018),
(98, NULL, NULL, NULL, NULL, 2018),
(99, NULL, NULL, NULL, NULL, 2018),
(100, NULL, NULL, NULL, NULL, 2018),
(101, NULL, NULL, NULL, NULL, 2018),
(102, NULL, NULL, NULL, NULL, 2018),
(103, NULL, NULL, NULL, NULL, 2018),
(104, NULL, NULL, NULL, NULL, 2018),
(105, NULL, NULL, NULL, NULL, 2018),
(106, NULL, NULL, NULL, NULL, 2018),
(107, NULL, NULL, NULL, NULL, 2018),
(108, NULL, NULL, NULL, NULL, 2018),
(109, NULL, NULL, NULL, NULL, 2018),
(110, NULL, NULL, NULL, NULL, 2018),
(111, NULL, NULL, NULL, NULL, 2018),
(112, NULL, NULL, NULL, NULL, 2018),
(113, NULL, NULL, NULL, NULL, 2018),
(114, NULL, NULL, NULL, NULL, 2018),
(115, NULL, NULL, NULL, NULL, 2018),
(116, NULL, NULL, NULL, NULL, 2018),
(117, NULL, NULL, NULL, NULL, 2018),
(118, NULL, NULL, NULL, NULL, 2018),
(119, NULL, NULL, NULL, NULL, 2018),
(120, NULL, NULL, NULL, NULL, 2018),
(121, NULL, NULL, NULL, NULL, 2018),
(122, NULL, NULL, NULL, NULL, 2018),
(123, NULL, NULL, NULL, NULL, 2018),
(124, NULL, NULL, NULL, NULL, 2018),
(125, NULL, NULL, NULL, NULL, 2018),
(126, NULL, NULL, NULL, NULL, 2018),
(127, NULL, NULL, NULL, NULL, 2018),
(128, NULL, NULL, NULL, NULL, 2018),
(129, NULL, NULL, NULL, NULL, 2018),
(130, NULL, NULL, NULL, NULL, 2018),
(131, NULL, NULL, NULL, NULL, 2018),
(210, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `port_3a`
--
DELIMITER $$
CREATE TRIGGER `media2` BEFORE UPDATE ON `port_3a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal14` AFTER UPDATE ON `port_3a` FOR EACH ROW REPLACE INTO medias_3a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM port_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_3a WHERE nome_id=NEW.nome_id))/8)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `port_4a`
--

CREATE TABLE `port_4a` (
  `nome_id` int(11) DEFAULT NULL,
  `prim_trim` int(11) DEFAULT NULL,
  `seg_trim` int(11) DEFAULT NULL,
  `ter_trim` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `port_4a`
--

INSERT INTO `port_4a` (`nome_id`, `prim_trim`, `seg_trim`, `ter_trim`, `notafinal`, `year`) VALUES
(132, NULL, NULL, NULL, NULL, 2018),
(133, NULL, NULL, NULL, NULL, 2018),
(134, NULL, NULL, NULL, NULL, 2018),
(135, NULL, NULL, NULL, NULL, 2018),
(136, NULL, NULL, NULL, NULL, 2018),
(137, NULL, NULL, NULL, NULL, 2018),
(138, NULL, NULL, NULL, NULL, 2018),
(139, NULL, NULL, NULL, NULL, 2018),
(140, NULL, NULL, NULL, NULL, 2018),
(141, NULL, NULL, NULL, NULL, 2018),
(142, NULL, NULL, NULL, NULL, 2018),
(143, NULL, NULL, NULL, NULL, 2018),
(144, NULL, NULL, NULL, NULL, 2018),
(145, NULL, NULL, NULL, NULL, 2018),
(146, NULL, NULL, NULL, NULL, 2018),
(147, NULL, NULL, NULL, NULL, 2018),
(148, NULL, NULL, NULL, NULL, 2018),
(149, NULL, NULL, NULL, NULL, 2018),
(150, NULL, NULL, NULL, NULL, 2018),
(151, NULL, NULL, NULL, NULL, 2018),
(152, NULL, NULL, NULL, NULL, 2018),
(153, NULL, NULL, NULL, NULL, 2018),
(154, NULL, NULL, NULL, NULL, 2018),
(155, NULL, NULL, NULL, NULL, 2018),
(156, NULL, NULL, NULL, NULL, 2018),
(157, NULL, NULL, NULL, NULL, 2018),
(158, NULL, NULL, NULL, NULL, 2018),
(159, NULL, NULL, NULL, NULL, 2018),
(160, NULL, NULL, NULL, NULL, 2018),
(161, NULL, NULL, NULL, NULL, 2018);

--
-- Triggers `port_4a`
--
DELIMITER $$
CREATE TRIGGER `media3` BEFORE UPDATE ON `port_4a` FOR EACH ROW SET NEW.notafinal = (NEW.prim_trim + NEW.seg_trim + NEW.ter_trim)/3
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mediafinal22` AFTER UPDATE ON `port_4a` FOR EACH ROW REPLACE INTO medias_4a (identity, nome_id, year, media)
VALUES ((NEW.nome_id+' '+NEW.year), NEW.nome_id, NEW.year, ((SELECT notafinal FROM csociais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM cnaturais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM port_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM mat_3a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM ing_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM artesvisuais_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM musica_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM edf_4a WHERE nome_id=NEW.nome_id)+(SELECT notafinal FROM danca_4a WHERE nome_id=NEW.nome_id))/9)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(15) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL DEFAULT 'no',
  `grade` varchar(256) DEFAULT '1a Classe',
  `started_year` year(4) DEFAULT '2018'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `username`, `password`, `grade`, `started_year`) VALUES
(1, 'Antónia', 'Feniasse', 'antoniaf2018', '9f198768d7863588b0b99b8c6c03d855df737c98064325254d8198ff34f773e70248eb3d10c8d06e120f3bd2f0dc1311fbe7894348a5c62f42d05bde01de06cd', '1a Classe', 2018),
(2, 'António', 'Júnior', 'antonioj2018', 'no', '1a Classe', 2018),
(3, 'Aiman', 'Timba', 'aimant2018', 'no', '1a Classe', 2018),
(4, 'Ayad', 'Yec', 'ayady2018', 'no', '1a Classe', 2018),
(5, 'Brigesh', 'Baraiya', 'brigeshb2018', '3c065bcca51930eeb244d1fc45f64421a246a26a5d69800fb3c9b088ab202affb064e2992b75b122ee855daf3807cbf870ee07a434fd4952dce34d5962fff6e3', '1a Classe', 2018),
(6, 'Calick', 'José', 'calickj2018', 'no', '1a Classe', 2018),
(7, 'Chaina', 'Almirante', 'chainaa2018', 'no', '1a Classe', 2018),
(8, 'Clara', 'Missael', 'claram2018', 'no', '1a Classe', 2018),
(9, 'Clayd', 'Muaga', 'claydm2018', 'no', '1a Classe', 2018),
(10, 'Denilvera', 'Wisin', 'denilveraw2018', 'f9fa00438358cb0071051ede2281e01493981c0c1b3cc900194057a9e474c25e66556de2d7f78e36ad2cdc4d5f98861a5cb58eae44b6cd7430db95a97865ca07', '1a Classe', 2018),
(11, 'Djenifer', 'Baptista', 'djeniferb2018', 'no', '1a Classe', 2018),
(12, 'Dherick', 'Dias', 'dherickd2018', 'no', '1a Classe', 2018),
(13, 'Eliana', 'Mário', 'elianam2018', 'no', '1a Classe', 2018),
(14, 'Eliana', 'Sara', 'elianas2018', 'no', '1a Classe', 2018),
(15, 'Eucania', 'Tingaa', 'eucaniat2018', 'no', '1a Classe', 2018),
(16, 'Farid', 'Ussene', 'faridu2018', 'no', '1a Classe', 2018),
(17, 'Harsh', 'Felix', 'harshf2018', '3a0bb6067a65d37c4421569873492f8209c0012e09888943818831a0322d8872003bfd88b3e85b2338a2669be5760b5bd8bda8bf22c2cebd552dc7e8faee6262', '1a Classe', 2018),
(18, 'Ismael', 'Ussene', 'ismaelu2018', 'no', '1a Classe', 2018),
(19, 'Issufo', 'Aly', 'issufoa2018', 'no', '1a Classe', 2018),
(20, 'Ivy', 'Bambo', 'ivyb2018', 'no', '1a Classe', 2018),
(21, 'Jaisson', 'Vilanculo', 'jaissonv2018', 'no', '1a Classe', 2018),
(22, 'Kaylen', 'Macule', 'kaylenm2018', 'no', '1a Classe', 2018),
(23, 'Kemen', 'Mourana', 'kemenm2018', 'no', '1a Classe', 2018),
(24, 'Liah', 'Manuel', 'liahm2018', 'no', '1a Classe', 2018),
(25, 'Lénio', 'Nhabangue', 'lenion2018', 'no', '1a Classe', 2018),
(26, 'Maicon', 'Américo', 'maicona2018', 'no', '1a Classe', 2018),
(27, 'Maria', 'Antonia', 'mariaa2018', 'no', '1a Classe', 2018),
(28, 'Mário', 'Chilaule', 'marioc2018', 'no', '1a Classe', 2018),
(29, 'Maslòn', 'Zandamela', 'maslònz2018', '6df783a8e1a3f300633762a54a1da85a363902b7d0dc97a3b41c5050b907d72fe2edcdbd8c050d9b3e2cee562a479bf4739eaaab7efaf52af7ab2a714b285a2d', '1a Classe', 2018),
(30, 'Melanie', 'Chivangue', 'melaniec2018', 'no', '1a Classe', 2018),
(31, 'Omar', 'Adamo', 'omara2018', 'no', '1a Classe', 2018),
(32, 'Payal', 'Thanki', 'payalt2018', 'no', '1a Classe', 2018),
(33, 'Riad', 'Samiro', 'riads2018', 'no', '1a Classe', 2018),
(34, 'Siyabonga', 'Julião', 'siyabongaj2018', 'no', '1a Classe', 2018),
(35, 'Shilon', 'Matola', 'shilonm2018', 'no', '1a Classe', 2018),
(36, 'Vilma', 'Vilanculo', 'vilmav2018', 'no', '1a Classe', 2018),
(37, 'Wesley', 'Sambo', 'wesleys2018', 'no', '1a Classe', 2018),
(38, 'Winer', 'Antonio', 'winera2018', '9f198768d7863588b0b99b8c6c03d855df737c98064325254d8198ff34f773e70248eb3d10c8d06e120f3bd2f0dc1311fbe7894348a5c62f42d05bde01de06cd', '1a Classe', 2018),
(39, 'Yana', 'Tomberli', 'yanat2018', 'b2603ffd9eca04e3aef31370daa06bca0f4625cc0c65aca385f5b13944a71c36db71ff52be528a782ef60af102365a2b05b023e056372b4ee96db45cc0f6d952', '1a Classe', 2018),
(40, 'Yashi', 'Keshil', 'yashik2018', 'no', '1a Classe', 2018),
(41, 'Yasmin', 'Paruque', 'yasminp2018', 'no', '1a Classe', 2018),
(42, 'Yarlen', 'Sindique', 'yarlens2018', 'no', '1a Classe', 2018),
(43, 'Yura', 'Naira', 'yuran2018', 'no', '1a Classe', 2018),
(44, 'Wiziny', 'Rihana', 'wizinyr2018', 'no', '1a Classe', 2018),
(45, 'Wyned', 'Mahumane', 'wynedm2018', 'no', '1a Classe', 2018),
(46, 'Wakil', 'Omar', 'wakilo2018', 'no', '1a Classe', 2018),
(47, 'Allan', 'Vilanculo', 'allanv2018', '16a168a510677b9ebb77da8c081bffa6c8f5fe008de42e149f933575ba5f80ea217afafbe9f2f43a90ccb3708eea336b48a19db38c1bf9484b20ac4a25ba5484', '2a Classe', 2018),
(48, 'Amásis', 'Macamo', 'amasism2018', 'no', '2a Classe', 2018),
(49, 'Allyne', 'Omargy', 'allyneo2018', 'ea2ece2fb6053d33c2e548fb86d62f5a525b7ee0af97267010d4f7f20011d9507078c75c8f170f7309ea1793e9ea92bc95f447d0ecae4eac9a4de607ad959c74', '2a Classe', 2018),
(50, 'Anacheid', 'Chivale', 'anacheidc2018', 'no', '2a Classe', 2018),
(51, 'Bongane', 'Bacela', 'bonganeb2018', 'no', '2a Classe', 2018),
(52, 'Cíncris', 'Macamo', 'cincrism2018', 'no', '2a Classe', 2018),
(53, 'Cleiton', 'Vasquene', 'cleitonv2018', 'no', '2a Classe', 2018),
(54, 'Cristina', 'José', 'cristinaj2018', 'no', '2a Classe', 2018),
(55, 'Dádiva', 'Mirel', 'dadivam2018', 'no', '2a Classe', 2018),
(56, 'Dircy', 'Sicotche', 'dircys2018', 'no', '2a Classe', 2018),
(57, 'Eudinalia', 'Faela', 'eudinaliaf2018', 'no', '2a Classe', 2018),
(58, 'Djena', 'Nhampossa', 'djenan2018', 'no', '2a Classe', 2018),
(59, 'Fernanda', 'Razão', 'fernandar2018', 'no', '2a Classe', 2018),
(60, 'Fernando', 'Razão', 'fernandor2018', 'no', '2a Classe', 2018),
(61, 'Fidel', 'Sousa', 'fidels2018', 'no', '2a Classe', 2018),
(62, 'Handiwe', 'Cuinhane', 'handiwec2018', 'no', '2a Classe', 2018),
(63, 'Igor', 'Bernardete', 'igorb2018', 'no', '2a Classe', 2018),
(64, 'Ilídio', 'Júnior', 'ilidioj2018', 'no', '2a Classe', 2018),
(65, 'Janels', 'Faife', 'janelsf2018', 'no', '2a Classe', 2018),
(66, 'Jeison', 'Uetimane', 'jeisonu2018', 'no', '2a Classe', 2018),
(67, 'Jefferson', 'Chimbana', 'jeffersonc2018', 'no', '2a Classe', 2018),
(68, 'Julitencio', 'Massuanganhe', 'julitenciom2018', '5ddf51b1391c2d6e4be76937afa81a9b9322438318361cc570adf93a513bfc5076c16943bbbe0a3a083dfee208468a62a5e721e71a0700d5a51cb9b1bc90386a', '2a Classe', 2018),
(69, 'Katy', 'Janisse', 'katyj2018', 'no', '2a Classe', 2018),
(70, 'Kensil', 'Zimba', 'kensilz2018', 'no', '2a Classe', 2018),
(71, 'Kiyang', 'Jorge', 'kiyangj2018', 'no', '2a Classe', 2018),
(72, 'Lalety', 'Cossa', 'laletyc2018', 'no', '2a Classe', 2018),
(73, 'Leslie', 'Fernanda', 'leslief2018', 'no', '2a Classe', 2018),
(74, 'Melanie', 'Solomone', 'melanies2018', 'no', '2a Classe', 2018),
(75, 'Oni', 'Ramondt', 'onir2018', 'no', '2a Classe', 2018),
(76, 'Osvaldo', 'Muendane', 'osvaldom2018', 'no', '2a Classe', 2018),
(77, 'Nmesoma', 'Anakebe', 'nmesomaa2018', 'no', '2a Classe', 2018),
(78, 'Rulane', 'Malauene', 'rulanem2018', '1a6a1a37644383bd122ccd09620ba92fb13b228f3ae238bd21b26cbc7f2cee854de20716538c41c47bc68b7e83fa143495c135564e9b450c6d053778eeb7f2d9', '2a Classe', 2018),
(79, 'Sakshi', 'Candracem', 'sakshic2018', 'no', '2a Classe', 2018),
(80, 'Shàrzia', 'Bapù', 'sharziab2018', 'no', '2a Classe', 2018),
(81, 'Sharline', 'Matsinhe', 'sharlinem2018', '7bdedc36089c7269c9479856e6d28b88e233a3f8c6b5ac6efcea4a82ae5d467ee4c872b9d192ecd84a26fe4f71ead3a531407d76f5e55312dff9ef157d5c0205', '2a Classe', 2018),
(82, 'Shirley', 'Chicavane', 'shirleyc2018', 'no', '2a Classe', 2018),
(83, 'Shirleny', 'Joaquim', 'shirlenyj2018', 'no', '2a Classe', 2018),
(84, 'Somaya', 'Paiva', 'somayap2018', 'no', '2a Classe', 2018),
(85, 'Teldio', 'Mavume', 'teldiom2018', 'no', '2a Classe', 2018),
(86, 'Vanessa', 'Zibia', 'vanessaz2018', 'no', '2a Classe', 2018),
(87, 'Vicente', 'Sifa', 'vicentes2018', '71ade85f9a2d6292ce6a8be0ab30bf6fc66cf535dc7736dc8fc68edaf12ef5ed94244a1da7f45a0239756625e1509cc0a3f5d401e7407b2a138e667b588f4b95', '2a Classe', 2018),
(88, 'Waminy', 'Phele', 'waminyp2018', 'no', '2a Classe', 2018),
(89, 'Warren', 'Massicame', 'warrenm2018', 'no', '2a Classe', 2018),
(90, 'Wilma', 'Ernesto', 'wilmae2018', 'no', '2a Classe', 2018),
(91, 'Yurven', 'Ranzala', 'yurvenr2018', 'no', '2a Classe', 2018),
(92, 'Áurea', 'Uache', 'aureau2018', 'no', '3a Classe', 2018),
(93, 'Ashley', 'Zunguze', 'ashleyz2018', 'no', '3a Classe', 2018),
(94, 'Ayanda', 'Sindique', 'ayandas2018', 'no', '3a Classe', 2018),
(95, 'Aylton', 'Mendes', 'ayltonm2018', 'no', '3a Classe', 2018),
(96, 'Bongane', 'Zuca', 'bonganez2018', 'no', '3a Classe', 2018),
(97, 'Bradley', 'Graça', 'bradleyg2018', '9d28da28287eaeb2ed63b261e07d628cbed6e852a6ba7306fba75e9a4d20ddac7cb9ce5b8a71ea6da89fa825149d7a63add60897995a4e2e1b284b6c06ff34cc', '3a Classe', 2018),
(98, 'Bruna', 'Joshi', 'brunaj2018', 'no', '3a Classe', 2018),
(99, 'Djako', 'Marrengule', 'djakom2018', 'no', '3a Classe', 2018),
(100, 'Dekeyla', 'Six-Pence', 'dekeylas2018', 'f59898711af4df82ebb4b0a634c9567570fba933626d1c0d83bd18fc03479d61b6bd6455ce3f10ed40195e8145b580b1f5d4251ebfcc50835dd9512449625cfa', '3a Classe', 2018),
(101, 'Duarty', 'Langa', 'duartyl2018', 'no', '3a Classe', 2018),
(102, 'Edmar', 'Zualo', 'edmarz2018', 'no', '3a Classe', 2018),
(103, 'Evelyn', 'Momad', 'evelynm2018', 'no', '3a Classe', 2018),
(104, 'Heiko', 'Langa', 'heikol2018', 'no', '3a Classe', 2018),
(105, 'Ilka', 'Tomás', 'ilkat2018', 'no', '3a Classe', 2018),
(106, 'Iris', 'Savanguane', 'iriss2018', 'no', '3a Classe', 2018),
(107, 'Joseph', 'Rungo', 'josephr2018', 'c1aa689751f057fbae8435708b6766aecf8da7e6a48ac07389955bfd06db8dcacfd56490a80a0edaf24b871c176987a2c8cc23720a72df1cd215b2467e88b06f', '3a Classe', 2018),
(108, 'Karen', 'Macuacua', 'karenm2018', 'no', '3a Classe', 2018),
(109, 'Kesley', 'Zualo', 'kesleyz2018', 'no', '3a Classe', 2018),
(110, 'Layson', 'Cumbe', 'laysonc2018', 'no', '3a Classe', 2018),
(111, 'Leticia', 'Khumay', 'leticiak2018', 'no', '3a Classe', 2018),
(112, 'Leslie', 'Mate', 'lesliem2018', 'no', '3a Classe', 2018),
(113, 'Manuel', 'Américo', 'manuela2018', 'no', '3a Classe', 2018),
(114, 'Melves', 'Barrama', 'melvesb2018', 'no', '3a Classe', 2018),
(115, 'Milan', 'Alfiado', 'milana2018', 'no', '3a Classe', 2018),
(116, 'Mirzon', 'Manuel', 'mirzonm2018', 'no', '3a Classe', 2018),
(117, 'Nathan', 'Nhamtumbo', 'nathann2018', 'no', '3a Classe', 2018),
(118, 'Priscilla', 'José', 'priscillaj2018', 'no', '3a Classe', 2018),
(119, 'Raquel', 'João', 'raquelj2018', 'no', '3a Classe', 2018),
(120, 'Riyad', 'Mussa', 'riyadm2018', 'no', '3a Classe', 2018),
(121, 'Ryan', 'Júnior', 'ryanj2018', 'no', '3a Classe', 2018),
(122, 'Solange', 'Bissett', 'solangeb2018', 'no', '3a Classe', 2018),
(123, 'Suelly', 'Almeida', 'suellya2018', 'no', '3a Classe', 2018),
(124, 'Tiffany', 'Mafunga', 'tiffanym2018', 'no', '3a Classe', 2018),
(125, 'Tulany', 'Jeremias', 'tulanyj2018', 'no', '3a Classe', 2018),
(126, 'Wendy', 'Malauene', 'wendym2018', 'no', '3a Classe', 2018),
(127, 'Witney', 'Macuàcua', 'witneym2018', 'no', '3a Classe', 2018),
(128, 'Yandissa', 'Ferrão', 'yandissaf2018', '73103cca2bf93a88ea91c6582740bda6e7b8f69400bc10ad7a649995fb0502c22725821e36ed424842e0da0e024d61fafc1e8db9ee86bb2f85454f209a5e6486', '3a Classe', 2018),
(129, 'Yunice', 'Dinis', 'yuniced2018', 'no', '3a Classe', 2018),
(130, 'Keys', 'Welissene', 'keysw2018', 'no', '3a Classe', 2018),
(131, 'Yug', 'José', 'yugj2018', 'no', '3a Classe', 2018),
(132, 'Akisha', 'Bambo', 'akishab2018', 'no', '4a Classe', 2018),
(133, 'Arushi', 'Khorova', 'arushik2018', 'no', '4a Classe', 2018),
(134, 'Ayad', 'Adamo', 'ayada2018', 'no', '4a Classe', 2018),
(135, 'Ayyan', 'Aly', 'ayyana2018', 'no', '4a Classe', 2018),
(136, 'Belarmino', 'Júnior', 'belarminoj2018', 'no', '4a Classe', 2018),
(137, 'Boris', 'Racune', 'borisr2018', 'no', '4a Classe', 2018),
(138, 'Boyle', 'Racune', 'boyler2018', 'no', '4a Classe', 2018),
(139, 'Cintya', 'Uetimane', 'cintyau2018', 'no', '4a Classe', 2018),
(140, 'Cleiton', 'Nelson', 'cleitonn2018', 'no', '4a Classe', 2018),
(141, 'Danelbe', 'Uate', 'danelbeu2018', 'no', '4a Classe', 2018),
(142, 'Daren', 'Julai', 'darenj2018', 'no', '4a Classe', 2018),
(143, 'Eliana', 'Chambe', 'elianac2018', 'no', '4a Classe', 2018),
(144, 'Ernesto', 'Junior', 'ernestoj2018', '96297e6eda6d83a5c4921c51af3daf9ffc0b17b773311389b1bdbbbbbbeef202d9c1e6c063de5efe9f7664cdacfa84c5daa7796267bad4f9cd5c94d1a2176fe8', '4a Classe', 2018),
(145, 'Humberto', 'Amaral', 'humbertoa2018', 'no', '4a Classe', 2018),
(146, 'Jardel', 'Joaquim', 'jardelj2018', 'no', '4a Classe', 2018),
(147, 'Jason', 'Faife', 'jasonf2018', 'no', '4a Classe', 2018),
(148, 'Generson', 'Uiliamo', 'genersonu2018', 'no', '4a Classe', 2018),
(149, 'Jorge', 'Júnior', 'jorgej2018', 'no', '4a Classe', 2018),
(150, 'Kayany', 'Siniquinha', 'kayanys2018', 'no', '4a Classe', 2018),
(151, 'Kelcleide', 'Bambo', 'kelcleideb2018', 'no', '4a Classe', 2018),
(152, 'Keysha', 'Swart', 'keyshas2018', 'no', '4a Classe', 2018),
(153, 'Mikel', 'Comini', 'mikelc2018', 'no', '4a Classe', 2018),
(154, 'Nancy', 'Uetimane', 'nancyu2018', 'no', '4a Classe', 2018),
(155, 'Sérgio', 'Júnior', 'sergioj2018', 'no', '4a Classe', 2018),
(156, 'Shony', 'Maduela', 'shonym2018', 'no', '4a Classe', 2018),
(157, 'Teixeira', 'Nhavene', 'teixeiran2018', 'no', '4a Classe', 2018),
(158, 'Vany', 'Pacule', 'vanyp2018', 'no', '4a Classe', 2018),
(159, 'Xailton', 'Nuvunga', 'xailtonn2018', 'no', '4a Classe', 2018),
(160, 'Yumalay', 'Mascarenhas', 'yumalaym2018', '15024763b78e8c09bccf9f4abb12348406919870cf5446ab7d64bc1293349bcfb00e9367b1b155cdc46a32240c4e30e5395aa00d158727cfa10bd5aef48b74f1', '4a Classe', 2018),
(161, 'Yuran', 'Amaral', 'yurana2018', 'no', '4a Classe', 2018),
(162, 'Akachukwu', 'Chibuike', 'akachukwuc2018', 'no', 'Pré-Escolar', 2018),
(163, 'Aisha', 'Conceição', 'aishac2018', 'no', 'Pré-Escolar', 2018),
(164, 'Akicha', 'Jacob', 'akichaj2018', 'no', 'Pré-Escolar', 2018),
(165, 'Adily', 'Bambo', 'adilyb2018', 'no', 'Pré-Escolar', 2018),
(166, 'Alben', 'A.', 'albena2018', 'no', 'Pré-Escolar', 2018),
(167, 'Ambar', 'Nercia', 'ambarn2018', 'no', 'Pré-Escolar', 2018),
(168, 'Amir', 'Omar', 'amiro2018', '13f260a3ca1ec7dd38017e16006049ff1289acdc579edbb1797fe6c5a92a018e8d3119480f3df3626543da4bca66b32913a5e562ece68a1d674b8c80964010c9', 'Pré-Escolar', 2018),
(169, 'Ariel', 'Mavume', 'arielm2018', 'no', 'Pré-Escolar', 2018),
(170, 'Aryel', 'Cardoso', 'aryelc2018', 'no', 'Pré-Escolar', 2018),
(171, 'Austin', 'Naiene', 'austinn2018', 'no', 'Pré-Escolar', 2018),
(172, 'Chàzna', 'Joaquim', 'chaznaj2018', 'no', 'Pré-Escolar', 2018),
(173, 'Cheylin', 'Cuamba', 'cheylinc2018', 'no', 'Pré-Escolar', 2018),
(174, 'Clerton', 'Covele', 'clertonc2018', 'no', 'Pré-Escolar', 2018),
(175, 'Elisio', 'Aristides', 'elisioa2018', 'no', 'Pré-Escolar', 2018),
(176, 'Ebubechukwu', 'Chibuike', 'ebubechukwuc2018', 'no', 'Pré-Escolar', 2018),
(177, 'Elicy', 'Ngovene', 'elicyn2018', 'no', 'Pré-Escolar', 2018),
(178, 'Eman', 'Cateko', 'emanc2018', 'no', 'Pré-Escolar', 2018),
(179, 'Francone', 'Covele', 'franconec2018', 'no', 'Pré-Escolar', 2018),
(180, 'Greicy', 'Mapilele', 'greicym2018', 'd7f72c88cf73937b82f87068eba341d416f7da40bd54da1eb043f0ef81952251d362ad8041213580cec2ea3e7a70245125ff5c003dbf98ed2c61237bbdf0ff54', 'Pré-Escolar', 2018),
(181, 'Heloize', 'Bande', 'heloizeb2018', 'no', 'Pré-Escolar', 2018),
(182, 'Harrison', 'Silva', 'harrisons2018', '0fb4c6cfb5ad63a7fad63489c5fab3dfc8d6214bb81cbdfcf603fd4d65c64663a7d8e38bf87f29d92a9e7ebd3541106f53ac65e3b9d504de4febd50cff46cf07', 'Pré-Escolar', 2018),
(183, 'Ildo', 'Timana', 'ildot2018', 'no', 'Pré-Escolar', 2018),
(184, 'Júlia', 'Miguel', 'juliam2018', 'no', 'Pré-Escolar', 2018),
(185, 'Jailon', 'Come', 'jailonc2018', 'no', 'Pré-Escolar', 2018),
(186, 'Jèsnaser', 'Nhavuluga', 'jesnasern2018', 'no', 'Pré-Escolar', 2018),
(187, 'Kataleya', 'Luís', 'kataleyal2018', 'no', 'Pré-Escolar', 2018),
(188, 'Kateko', 'Mangujo', 'katekom2018', 'no', 'Pré-Escolar', 2018),
(189, 'Kayane', 'Cipriano', 'kayanec2018', 'no', 'Pré-Escolar', 2018),
(190, 'Leyla', 'Cleta', 'leylac2018', 'no', 'Pré-Escolar', 2018),
(191, 'Lima', 'Constantino', 'limac2018', 'no', 'Pré-Escolar', 2018),
(192, 'Nayara', 'Cassamo', 'nayarac2018', 'no', 'Pré-Escolar', 2018),
(193, 'Martins', 'Mário', 'martinsm2018', 'no', 'Pré-Escolar', 2018),
(194, 'Melissa', 'Buleza', 'melissab2018', 'no', 'Pré-Escolar', 2018),
(195, 'Melissa', 'Cutane', 'melissac2018', 'no', 'Pré-Escolar', 2018),
(196, 'Monénia', 'Fondo', 'moneniaf2018', 'no', 'Pré-Escolar', 2018),
(197, 'Sansha', 'Benedito', 'sanshab2018', 'no', 'Pré-Escolar', 2018),
(198, 'Teotónio', 'Mocumba', 'teotoniom2018', 'no', 'Pré-Escolar', 2018),
(199, 'Úrica', 'Herculano', 'uricah2018', 'no', 'Pré-Escolar', 2018),
(200, 'Wengue', 'Amaral', 'wenguea2018', 'no', 'Pré-Escolar', 2018),
(201, 'Wizlen', 'Tobia', 'wizlent2018', 'no', 'Pré-Escolar', 2018),
(202, 'Wundson', 'Pablo', 'wundsonp2018', 'no', 'Pré-Escolar', 2018),
(203, 'Yule', 'Ferrao', 'yulef2018', '73103cca2bf93a88ea91c6582740bda6e7b8f69400bc10ad7a649995fb0502c22725821e36ed424842e0da0e024d61fafc1e8db9ee86bb2f85454f209a5e6486', 'Pré-Escolar', 2018),
(204, 'Yut', 'José', 'yutj2018', 'no', 'Pré-Escolar', 2018),
(205, 'Yuran', 'Neto', 'yurann2018', 'no', 'Pré-Escolar', 2018),
(206, 'owa', 'admin', 'owa', '8bcf69ae43904ab6e514c6787e257a34fff82fa5c988cf696f5198e477e11c68c7ca6488e4292e6d902fd9f1a565497969d9b96ae86f5545a4bc4dae0c67e09a', '-', 2018),
(209, 'Bless', 'Ricardo', 'blessr2018', 'no', '1a Classe', 2018),
(210, 'Antonio', 'Gova', 'antoniog2018', 'f7f7390ffd486481dd47663b5f1c13e0597db3632f9ae310edcaeeb44ca45c0a331e8133f318aff22d4b1b879c19f6116b5b493dcc3c1fd7de24b9eccf061da7', '3a Classe', 2018),
(212, 'Kishan', 'Jadav', 'kishanj', 'ec76e07beb6f87032b5b76bc1d59de39e357b192f7a77f8b6187c8a2bcb52c7fb161bd212b67e2340c4d732d7c29b81d7a7da9e36b6e491c1b1b5661c99d57e0', '1a Classe', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `temp_profiles`
--

CREATE TABLE `temp_profiles` (
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artesvisuais_1a`
--
ALTER TABLE `artesvisuais_1a`
  ADD KEY `nome_id` (`nome_id`);

--
-- Indexes for table `medias_1a`
--
ALTER TABLE `medias_1a`
  ADD UNIQUE KEY `identity` (`identity`);

--
-- Indexes for table `medias_2a`
--
ALTER TABLE `medias_2a`
  ADD UNIQUE KEY `identity` (`identity`);

--
-- Indexes for table `medias_3a`
--
ALTER TABLE `medias_3a`
  ADD UNIQUE KEY `identity` (`identity`);

--
-- Indexes for table `medias_4a`
--
ALTER TABLE `medias_4a`
  ADD UNIQUE KEY `identity` (`identity`);

--
-- Indexes for table `mensalidades`
--
ALTER TABLE `mensalidades`
  ADD KEY `id` (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
