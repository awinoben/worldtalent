-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2018 at 02:30 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldtalent`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_theme_scales`
--

DROP TABLE IF EXISTS `academic_theme_scales`;
CREATE TABLE IF NOT EXISTS `academic_theme_scales` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_theme_scales`
--

INSERT INTO `academic_theme_scales` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '701', 'A', 'academic themes a');

-- --------------------------------------------------------

--
-- Table structure for table `anthropometric_candidates`
--

DROP TABLE IF EXISTS `anthropometric_candidates`;
CREATE TABLE IF NOT EXISTS `anthropometric_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `anthropometricAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anthropometric_candidates`
--

INSERT INTO `anthropometric_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `anthropometricAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'Stunted blood pressure', 'Low', 'at least', NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'very well', 'impossible', NULL, NULL, NULL, NULL, NULL, 'Anthropometric Observation for Saline', 25, 25, 100, 0, 100, 100, 175, 175, 87.5);

-- --------------------------------------------------------

--
-- Table structure for table `anthropometric_descp_prec`
--

DROP TABLE IF EXISTS `anthropometric_descp_prec`;
CREATE TABLE IF NOT EXISTS `anthropometric_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anthropometric_descp_prec`
--

INSERT INTO `anthropometric_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP_Anthropometric', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anthropometric_domicile_setup`
--

DROP TABLE IF EXISTS `anthropometric_domicile_setup`;
CREATE TABLE IF NOT EXISTS `anthropometric_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anthropometric_domicile_setup`
--

INSERT INTO `anthropometric_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', ' Anthropometric Stratification a'),
(2, 'B', ' Anthropometric Stratification b'),
(3, 'C', ' Anthropometric Stratification c'),
(4, 'D', ' Anthropometric Stratification d'),
(5, 'E', ' Anthropometric Stratification e'),
(6, 'F', ' Anthropometric Stratification f'),
(7, 'G', ' Anthropometric Stratification g'),
(8, 'H', ' Anthropometric Stratification h');

-- --------------------------------------------------------

--
-- Table structure for table `birthscale_candidates`
--

DROP TABLE IF EXISTS `birthscale_candidates`;
CREATE TABLE IF NOT EXISTS `birthscale_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `birthscaleAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthscale_candidates`
--

INSERT INTO `birthscale_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `birthscaleAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'Normal Blood pressure', 'Medium', 'at least', NULL, NULL, NULL, NULL, NULL, 'Urgentlly needs to see doctor for HBP', 'well', 'impossible', NULL, NULL, NULL, NULL, NULL, 'observed for Saline', 100, 100, 100, 100, 100, 100, 100, 25, 90.625);

-- --------------------------------------------------------

--
-- Table structure for table `birthscale_descp_prec`
--

DROP TABLE IF EXISTS `birthscale_descp_prec`;
CREATE TABLE IF NOT EXISTS `birthscale_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthscale_descp_prec`
--

INSERT INTO `birthscale_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'Very High Blood Pressure', 'Birth Scale_HBP'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `birthscale_domicile_setup`
--

DROP TABLE IF EXISTS `birthscale_domicile_setup`;
CREATE TABLE IF NOT EXISTS `birthscale_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthscale_domicile_setup`
--

INSERT INTO `birthscale_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Blood Pressure'),
(2, 'B', 'Urine Test'),
(3, 'C', 'Digestion'),
(4, 'D', 'Nutrition'),
(5, 'E', 'Diet'),
(6, 'F', 'Infection Rate'),
(7, 'G', 'General Health'),
(8, 'H', 'Malaria');

-- --------------------------------------------------------

--
-- Table structure for table `bptevaluation_candidates`
--

DROP TABLE IF EXISTS `bptevaluation_candidates`;
CREATE TABLE IF NOT EXISTS `bptevaluation_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `bptevaluationAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bptevaluation_candidates`
--

INSERT INTO `bptevaluation_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `bptevaluationAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bptevaluation_descp_prec`
--

DROP TABLE IF EXISTS `bptevaluation_descp_prec`;
CREATE TABLE IF NOT EXISTS `bptevaluation_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bptevaluation_descp_prec`
--

INSERT INTO `bptevaluation_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'BPT', 'BPT_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bptevaluation_domicile_setup`
--

DROP TABLE IF EXISTS `bptevaluation_domicile_setup`;
CREATE TABLE IF NOT EXISTS `bptevaluation_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bptevaluation_domicile_setup`
--

INSERT INTO `bptevaluation_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'BPT Evaluation a'),
(2, 'B', 'BPT Evaluation b'),
(3, 'C', 'BPT Evaluation c'),
(4, 'D', 'BPT Evaluation d'),
(5, 'E', 'BPT Evaluation e'),
(6, 'F', 'BPT Evaluation f'),
(7, 'G', 'BPT Evaluation g'),
(8, 'H', 'BPT Evaluation h');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `candidateID` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `dob` timestamp NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  `clinicManager` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `quantumDomicile` bit(1) NOT NULL DEFAULT b'0',
  `registeredOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedBy` varchar(100) DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidateID`, `firstName`, `middleName`, `lastName`, `username`, `dob`, `gender`, `email`, `country`, `phone`, `password`, `clinicManager`, `region`, `quantumDomicile`, `registeredOn`, `modifiedBy`, `modifiedOn`) VALUES
(1, 'Ben', 'Okoth', 'Awino', 'Gnt792', '1994-10-22 21:00:00', 'M', 'papasofts@gmail.com', 'Kenya', '0706877851', '$2y$12$qqwgwI5eWD2p4sXBc2PHZuEwAJOPC/n/VBp28LS597Ad.r/io3REi', 'Jonh Doe', 'Nairobi', b'0', '2018-09-08 11:58:19', NULL, NULL),
(2, 'Mary', 'Saline', 'Aliko', 'Gnt792', '1990-10-22 21:00:00', 'F', 'aliko@gmail.com', 'Kenya', '0706978234', '$2y$12$vyY9tnEX7Q6Sco6c7odI5OoYH7oURMXTqFrvJjDumOYACFYAzJiKu', 'Mark Winstone', 'Mombasa', b'0', '2018-09-08 11:58:19', NULL, NULL),
(3, 'Johnstone', 'M', 'Mwakazi', 'Gnt792', '1973-10-26 21:00:00', 'M', 'johnstone@mwakazi.com', 'Kenya', '0782761543', '$2y$12$PqbvaCcZCEMLQieKGax6y.eqh.i4Du.3Bw2wtLVlzrc1Z2B4JPxpu', 'Mwanzia James', 'Mombasa', b'0', '2018-09-08 11:58:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_quantum`
--

DROP TABLE IF EXISTS `candidate_quantum`;
CREATE TABLE IF NOT EXISTS `candidate_quantum` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `quantumAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_quantum`
--

INSERT INTO `candidate_quantum` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `quantumAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'Stunted blood pressure', 'High', 'Very well', NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'Not well', 'dependant', NULL, NULL, NULL, NULL, NULL, 'observed for Saline', 25, 0, 25, 0, 100, 100, 25, 175, 56.25);

-- --------------------------------------------------------

--
-- Table structure for table `conclusions`
--

DROP TABLE IF EXISTS `conclusions`;
CREATE TABLE IF NOT EXISTS `conclusions` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(20) NOT NULL,
  `expert` varchar(100) NOT NULL,
  `talent_genre_dev` varchar(500) NOT NULL,
  `modifiers` varchar(500) NOT NULL,
  `academic_theme_scale` varchar(500) NOT NULL,
  `occupation_theme` varchar(500) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conclusions`
--

INSERT INTO `conclusions` (`Id`, `candidateID`, `expert`, `talent_genre_dev`, `modifiers`, `academic_theme_scale`, `occupation_theme`, `createdOn`, `updatedOn`) VALUES
(1, 1, 'Humphrey  Oborah', 'talent genre a', 'modifier a', 'academic themes a', 'potential occupation theme a', '2018-10-06 05:15:12', '2018-10-06 05:15:12'),
(2, 2, 'Humphrey  Oborah', 'talent genre a', 'modifier a', 'academic themes a', 'potential occupation theme a', '2018-10-06 05:15:49', '2018-10-06 05:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `deposition_candidates`
--

DROP TABLE IF EXISTS `deposition_candidates`;
CREATE TABLE IF NOT EXISTS `deposition_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `depositionAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposition_candidates`
--

INSERT INTO `deposition_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `depositionAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deposition_descp_prec`
--

DROP TABLE IF EXISTS `deposition_descp_prec`;
CREATE TABLE IF NOT EXISTS `deposition_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposition_descp_prec`
--

INSERT INTO `deposition_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'Deposition_HBP', 'Depostion-HBP-PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deposition_domicile_setup`
--

DROP TABLE IF EXISTS `deposition_domicile_setup`;
CREATE TABLE IF NOT EXISTS `deposition_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposition_domicile_setup`
--

INSERT INTO `deposition_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'deposition & endowment a'),
(2, 'B', 'deposition & endowment b'),
(3, 'C', 'deposition & endowment c'),
(4, 'D', 'deposition & endowment d'),
(5, 'E', 'deposition & endowment e'),
(6, 'F', 'deposition & endowment f'),
(7, 'G', 'deposition & endowment g'),
(8, 'H', 'deposition & endowment h');

-- --------------------------------------------------------

--
-- Table structure for table `descp_prec`
--

DROP TABLE IF EXISTS `descp_prec`;
CREATE TABLE IF NOT EXISTS `descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descp_prec`
--

INSERT INTO `descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `domicile_setup`
--

DROP TABLE IF EXISTS `domicile_setup`;
CREATE TABLE IF NOT EXISTS `domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domicile_setup`
--

INSERT INTO `domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Blood Pressure'),
(2, 'B', 'Urine Test'),
(3, 'C', 'Digestion'),
(4, 'D', 'Nutrition'),
(5, 'E', 'Diet'),
(6, 'F', 'Infection Rate'),
(7, 'G', 'General Health'),
(8, 'H', 'Malaria');

-- --------------------------------------------------------

--
-- Table structure for table `earlydt_candidates`
--

DROP TABLE IF EXISTS `earlydt_candidates`;
CREATE TABLE IF NOT EXISTS `earlydt_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `earlydtAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earlydt_candidates`
--

INSERT INTO `earlydt_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `earlydtAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `earlydt_descp_prec`
--

DROP TABLE IF EXISTS `earlydt_descp_prec`;
CREATE TABLE IF NOT EXISTS `earlydt_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earlydt_descp_prec`
--

INSERT INTO `earlydt_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `earlydt_domicile_setup`
--

DROP TABLE IF EXISTS `earlydt_domicile_setup`;
CREATE TABLE IF NOT EXISTS `earlydt_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earlydt_domicile_setup`
--

INSERT INTO `earlydt_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Early Depository Talent a'),
(2, 'B', 'Early Depository Talent b'),
(3, 'C', 'Early Depository Talent c'),
(4, 'D', 'Early Depository Talent d'),
(5, 'E', 'Early Depository Talent e'),
(6, 'F', 'Early Depository Talent f'),
(7, 'G', 'Early Depository Talent g'),
(8, 'H', 'Early Depository Talent h');

-- --------------------------------------------------------

--
-- Table structure for table `earlytr_candidates`
--

DROP TABLE IF EXISTS `earlytr_candidates`;
CREATE TABLE IF NOT EXISTS `earlytr_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `earlytrAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earlytr_candidates`
--

INSERT INTO `earlytr_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `earlytrAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `earlytr_descp_prec`
--

DROP TABLE IF EXISTS `earlytr_descp_prec`;
CREATE TABLE IF NOT EXISTS `earlytr_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earlytr_descp_prec`
--

INSERT INTO `earlytr_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `earlytr_domicile_setup`
--

DROP TABLE IF EXISTS `earlytr_domicile_setup`;
CREATE TABLE IF NOT EXISTS `earlytr_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earlytr_domicile_setup`
--

INSERT INTO `earlytr_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Early Talent Rigow a'),
(2, 'B', 'Early Talent Rigow b'),
(3, 'C', 'Early Talent Rigow c'),
(4, 'D', 'Early Talent Rigow d'),
(5, 'E', 'Early Talent Rigow e'),
(6, 'F', 'Early Talent Rigow f'),
(7, 'G', 'Early Talent Rigow g'),
(8, 'H', 'Early Talent Rigow h');

-- --------------------------------------------------------

--
-- Table structure for table `expert_statements`
--

DROP TABLE IF EXISTS `expert_statements`;
CREATE TABLE IF NOT EXISTS `expert_statements` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(20) NOT NULL,
  `expert` varchar(100) NOT NULL,
  `general_observation` varchar(500) NOT NULL,
  `personality_rubric` varchar(500) NOT NULL,
  `learning_style` varchar(500) NOT NULL,
  `talent_domain` varchar(500) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert_statements`
--

INSERT INTO `expert_statements` (`Id`, `candidateID`, `expert`, `general_observation`, `personality_rubric`, `learning_style`, `talent_domain`, `createdOn`, `updatedOn`) VALUES
(1, 1, 'Humphrey  Oborah', 'Highly Proactive', 'Personality Rubric', 'Talent Based', 'talent domain observation c', '2018-10-05 17:31:08', NULL),
(2, 2, 'Humphrey  Oborah', 'Very Active', 'Personality Rubric B', 'Talent Based', 'talent domain descp a', '2018-10-05 18:13:20', '2018-10-05 18:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `general_observation`
--

DROP TABLE IF EXISTS `general_observation`;
CREATE TABLE IF NOT EXISTS `general_observation` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_observation`
--

INSERT INTO `general_observation` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '101', 'A', 'Highly Proactive'),
(2, '102', 'B', 'Very Active'),
(3, '103', 'C', 'Dormant');

-- --------------------------------------------------------

--
-- Table structure for table `hbdiametric_candidates`
--

DROP TABLE IF EXISTS `hbdiametric_candidates`;
CREATE TABLE IF NOT EXISTS `hbdiametric_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `hbdiametric` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hbdiametric_candidates`
--

INSERT INTO `hbdiametric_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `hbdiametric`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'Stunted blood pressure', 'Low', 'at least', NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'very well', 'impossible', NULL, NULL, NULL, NULL, NULL, 'well', 25, 25, 100, 175, 100, 100, 175, 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hbdiametric_descp_prec`
--

DROP TABLE IF EXISTS `hbdiametric_descp_prec`;
CREATE TABLE IF NOT EXISTS `hbdiametric_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hbdiametric_descp_prec`
--

INSERT INTO `hbdiametric_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'H&B', 'H&B_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hbdiametric_domicile_setup`
--

DROP TABLE IF EXISTS `hbdiametric_domicile_setup`;
CREATE TABLE IF NOT EXISTS `hbdiametric_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hbdiametric_domicile_setup`
--

INSERT INTO `hbdiametric_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', ' Head & Brain Diametric a'),
(2, 'B', 'Head & Brain Diametric b'),
(3, 'C', 'Head & Brain Diametric c'),
(4, 'D', 'Head & Brain Diametric d'),
(5, 'E', 'Head & Brain Diametric e'),
(6, 'F', 'Head & Brain Diametric f'),
(7, 'G', 'Head & Brain Diametric g'),
(8, 'H', 'Head & Brain Diametric h');

-- --------------------------------------------------------

--
-- Table structure for table `infant_candidates`
--

DROP TABLE IF EXISTS `infant_candidates`;
CREATE TABLE IF NOT EXISTS `infant_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `infantAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infant_candidates`
--

INSERT INTO `infant_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `infantAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infant_descp_prec`
--

DROP TABLE IF EXISTS `infant_descp_prec`;
CREATE TABLE IF NOT EXISTS `infant_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infant_descp_prec`
--

INSERT INTO `infant_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infant_domicile_setup`
--

DROP TABLE IF EXISTS `infant_domicile_setup`;
CREATE TABLE IF NOT EXISTS `infant_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infant_domicile_setup`
--

INSERT INTO `infant_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Infant Milestone a'),
(2, 'B', 'Infant Milestone b'),
(3, 'C', 'Infant Milestone c'),
(4, 'D', 'Infant Milestone d'),
(5, 'E', 'Infant Milestone e'),
(6, 'F', 'Infant Milestone f'),
(7, 'G', 'Infant Milestone g'),
(8, 'H', 'Infant Milestone h');

-- --------------------------------------------------------

--
-- Table structure for table `labour_candidates`
--

DROP TABLE IF EXISTS `labour_candidates`;
CREATE TABLE IF NOT EXISTS `labour_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `labourAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour_candidates`
--

INSERT INTO `labour_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `labourAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labour_descp_prec`
--

DROP TABLE IF EXISTS `labour_descp_prec`;
CREATE TABLE IF NOT EXISTS `labour_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour_descp_prec`
--

INSERT INTO `labour_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labour_domicile_setup`
--

DROP TABLE IF EXISTS `labour_domicile_setup`;
CREATE TABLE IF NOT EXISTS `labour_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour_domicile_setup`
--

INSERT INTO `labour_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Labour Rubric a'),
(2, 'B', 'Labour Rubric b'),
(3, 'C', 'Labour Rubric c'),
(4, 'D', 'Labour Rubric d'),
(5, 'E', 'Labour Rubric e'),
(6, 'F', 'Labour Rubric f'),
(7, 'G', 'Labour Rubric g'),
(8, 'H', 'Labour Rubric h');

-- --------------------------------------------------------

--
-- Table structure for table `lblstratification_candidates`
--

DROP TABLE IF EXISTS `lblstratification_candidates`;
CREATE TABLE IF NOT EXISTS `lblstratification_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `lblstratificationAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lblstratification_candidates`
--

INSERT INTO `lblstratification_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `lblstratificationAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lblstratification_descp_prec`
--

DROP TABLE IF EXISTS `lblstratification_descp_prec`;
CREATE TABLE IF NOT EXISTS `lblstratification_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lblstratification_descp_prec`
--

INSERT INTO `lblstratification_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP_LBL', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lblstratification_domicile_setup`
--

DROP TABLE IF EXISTS `lblstratification_domicile_setup`;
CREATE TABLE IF NOT EXISTS `lblstratification_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lblstratification_domicile_setup`
--

INSERT INTO `lblstratification_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'LBL & Signal Stratification a'),
(2, 'B', 'LBL & Signal Stratification b'),
(3, 'C', 'LBL & Signal Stratification c'),
(4, 'D', 'LBL & Signal Stratification d'),
(5, 'E', 'LBL & Signal Stratification e'),
(6, 'F', 'LBL & Signal Stratification f'),
(7, 'G', 'LBL & Signal Stratification g'),
(8, 'H', 'LBL & Signal Stratification h');

-- --------------------------------------------------------

--
-- Table structure for table `learning_candidates`
--

DROP TABLE IF EXISTS `learning_candidates`;
CREATE TABLE IF NOT EXISTS `learning_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `learningAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning_candidates`
--

INSERT INTO `learning_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `learningAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `learning_descp_prec`
--

DROP TABLE IF EXISTS `learning_descp_prec`;
CREATE TABLE IF NOT EXISTS `learning_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning_descp_prec`
--

INSERT INTO `learning_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `learning_domicile_setup`
--

DROP TABLE IF EXISTS `learning_domicile_setup`;
CREATE TABLE IF NOT EXISTS `learning_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning_domicile_setup`
--

INSERT INTO `learning_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Learning Product a'),
(2, 'B', 'Learning Product b'),
(3, 'C', 'Learning Product c'),
(4, 'D', 'Learning Product d'),
(5, 'E', 'Learning Product e'),
(6, 'F', 'Learning Product f'),
(7, 'G', 'Learning Product g'),
(8, 'H', 'Learning Product h');

-- --------------------------------------------------------

--
-- Table structure for table `learning_styles`
--

DROP TABLE IF EXISTS `learning_styles`;
CREATE TABLE IF NOT EXISTS `learning_styles` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning_styles`
--

INSERT INTO `learning_styles` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '301', 'A', 'Talent Based'),
(2, '302', 'B', 'Gift Based');

-- --------------------------------------------------------

--
-- Table structure for table `mblstratification_candidates`
--

DROP TABLE IF EXISTS `mblstratification_candidates`;
CREATE TABLE IF NOT EXISTS `mblstratification_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `mblstratificationAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mblstratification_candidates`
--

INSERT INTO `mblstratification_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `mblstratificationAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mblstratification_descp_prec`
--

DROP TABLE IF EXISTS `mblstratification_descp_prec`;
CREATE TABLE IF NOT EXISTS `mblstratification_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mblstratification_descp_prec`
--

INSERT INTO `mblstratification_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP_MBL', 'MBL_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mblstratification_domicile_setup`
--

DROP TABLE IF EXISTS `mblstratification_domicile_setup`;
CREATE TABLE IF NOT EXISTS `mblstratification_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mblstratification_domicile_setup`
--

INSERT INTO `mblstratification_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'MBL & Signal Stratification a'),
(2, 'B', 'MBL & Signal Stratification b'),
(3, 'C', 'MBL & Signal Stratification c'),
(4, 'D', 'MBL & Signal Stratification d'),
(5, 'E', 'MBL & Signal Stratification e'),
(6, 'F', 'MBL & Signal Stratification f'),
(7, 'G', 'MBL & Signal Stratification g'),
(8, 'H', 'MBL & Signal Stratification h');

-- --------------------------------------------------------

--
-- Table structure for table `modifiers`
--

DROP TABLE IF EXISTS `modifiers`;
CREATE TABLE IF NOT EXISTS `modifiers` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modifiers`
--

INSERT INTO `modifiers` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '601', 'A', 'modifier a');

-- --------------------------------------------------------

--
-- Table structure for table `personality_rubric`
--

DROP TABLE IF EXISTS `personality_rubric`;
CREATE TABLE IF NOT EXISTS `personality_rubric` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality_rubric`
--

INSERT INTO `personality_rubric` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '201', 'A', 'Personality Rubric'),
(2, '202', 'B', 'Personality Rubric B');

-- --------------------------------------------------------

--
-- Table structure for table `potential_occupation_themes`
--

DROP TABLE IF EXISTS `potential_occupation_themes`;
CREATE TABLE IF NOT EXISTS `potential_occupation_themes` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potential_occupation_themes`
--

INSERT INTO `potential_occupation_themes` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '801', 'A', 'potential occupation theme a'),
(2, '802', 'B', 'potential occupation theme b');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_candidates`
--

DROP TABLE IF EXISTS `pregnancy_candidates`;
CREATE TABLE IF NOT EXISTS `pregnancy_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `pregnancyAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy_candidates`
--

INSERT INTO `pregnancy_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `pregnancyAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'Stunted blood pressure', 'Medium', 'Okay', NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed for the lady', 25, 100, 0, 100, 175, 25, 25, 25, 59.375);

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_descp_prec`
--

DROP TABLE IF EXISTS `pregnancy_descp_prec`;
CREATE TABLE IF NOT EXISTS `pregnancy_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy_descp_prec`
--

INSERT INTO `pregnancy_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_domicile_setup`
--

DROP TABLE IF EXISTS `pregnancy_domicile_setup`;
CREATE TABLE IF NOT EXISTS `pregnancy_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy_domicile_setup`
--

INSERT INTO `pregnancy_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Pregnancy Screen A'),
(2, 'B', 'Pregnancy Screen B'),
(3, 'C', 'Pregnancy Screen C'),
(4, 'D', 'Pregnancy Screen D'),
(5, 'E', 'Pregnancy Screen E'),
(6, 'F', 'Pregnancy Screen F'),
(7, 'G', 'Pregnancy Screen G'),
(8, 'H', 'Pregnancy Screen H');

-- --------------------------------------------------------

--
-- Table structure for table `rblstratification_candidates`
--

DROP TABLE IF EXISTS `rblstratification_candidates`;
CREATE TABLE IF NOT EXISTS `rblstratification_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `rblstratification` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rblstratification_candidates`
--

INSERT INTO `rblstratification_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `rblstratification`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'Stunted blood pressure', 'Low', 'at least', NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'very well', 'impossible', NULL, NULL, NULL, NULL, NULL, 'noted', 25, 25, 100, 100, 100, 100, 25, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rblstratification_descp_prec`
--

DROP TABLE IF EXISTS `rblstratification_descp_prec`;
CREATE TABLE IF NOT EXISTS `rblstratification_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rblstratification_descp_prec`
--

INSERT INTO `rblstratification_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP_RBL', 'RBL_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rblstratification_domicile_setup`
--

DROP TABLE IF EXISTS `rblstratification_domicile_setup`;
CREATE TABLE IF NOT EXISTS `rblstratification_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rblstratification_domicile_setup`
--

INSERT INTO `rblstratification_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'RBL & Signal Stratification a'),
(2, 'B', 'RBL & Signal Stratification b'),
(3, 'C', 'RBL & Signal Stratification c'),
(4, 'D', 'RBL & Signal Stratification d'),
(5, 'E', 'RBL & Signal Stratification e'),
(6, 'F', 'RBL & Signal Stratification f'),
(7, 'G', 'RBL & Signal Stratification g'),
(8, 'H', 'RBL & Signal Stratification h');

-- --------------------------------------------------------

--
-- Table structure for table `rsgpscale_candidates`
--

DROP TABLE IF EXISTS `rsgpscale_candidates`;
CREATE TABLE IF NOT EXISTS `rsgpscale_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `rsgpscaleAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsgpscale_candidates`
--

INSERT INTO `rsgpscale_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `rsgpscaleAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rsgpscale_descp_prec`
--

DROP TABLE IF EXISTS `rsgpscale_descp_prec`;
CREATE TABLE IF NOT EXISTS `rsgpscale_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsgpscale_descp_prec`
--

INSERT INTO `rsgpscale_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rsgpscale_domicile_setup`
--

DROP TABLE IF EXISTS `rsgpscale_domicile_setup`;
CREATE TABLE IF NOT EXISTS `rsgpscale_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsgpscale_domicile_setup`
--

INSERT INTO `rsgpscale_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Generic Personality a'),
(2, 'B', 'Generic Personality b'),
(3, 'C', 'Generic Personality c'),
(4, 'D', 'Generic Personality d'),
(5, 'E', 'Generic Personality e'),
(6, 'F', 'Generic Personality f'),
(7, 'G', 'Generic Personality g'),
(8, 'H', 'Generic Personality h');

-- --------------------------------------------------------

--
-- Table structure for table `rsnaptitudes_candidates`
--

DROP TABLE IF EXISTS `rsnaptitudes_candidates`;
CREATE TABLE IF NOT EXISTS `rsnaptitudes_candidates` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `candidateID` bigint(100) NOT NULL,
  `quantumADescp` varchar(100) DEFAULT NULL,
  `quantumBDescp` varchar(100) DEFAULT NULL,
  `quantumCDescp` varchar(100) DEFAULT NULL,
  `quantumDDescp` varchar(100) DEFAULT NULL,
  `quantumEDescp` varchar(100) DEFAULT NULL,
  `quantumFDescp` varchar(100) DEFAULT NULL,
  `quantumGDescp` varchar(100) DEFAULT NULL,
  `quantumHDescp` varchar(100) DEFAULT NULL,
  `quantumAPrec` varchar(100) DEFAULT NULL,
  `quantumBPrec` varchar(100) DEFAULT NULL,
  `quantumCPrec` varchar(100) DEFAULT NULL,
  `quantumDPrec` varchar(100) DEFAULT NULL,
  `quantumEPrec` varchar(100) DEFAULT NULL,
  `quantumFPrec` varchar(100) DEFAULT NULL,
  `quantumGPrec` varchar(100) DEFAULT NULL,
  `quantumHPrec` varchar(100) DEFAULT NULL,
  `observation` varchar(500) DEFAULT NULL,
  `avgA` float DEFAULT NULL,
  `avgB` float DEFAULT NULL,
  `avgC` float DEFAULT NULL,
  `avgD` float DEFAULT NULL,
  `avgE` float DEFAULT NULL,
  `avgF` float DEFAULT NULL,
  `avgG` float DEFAULT NULL,
  `avgH` float DEFAULT NULL,
  `rsnaptitudesAvg` float DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsnaptitudes_candidates`
--

INSERT INTO `rsnaptitudes_candidates` (`quantumID`, `candidateID`, `quantumADescp`, `quantumBDescp`, `quantumCDescp`, `quantumDDescp`, `quantumEDescp`, `quantumFDescp`, `quantumGDescp`, `quantumHDescp`, `quantumAPrec`, `quantumBPrec`, `quantumCPrec`, `quantumDPrec`, `quantumEPrec`, `quantumFPrec`, `quantumGPrec`, `quantumHPrec`, `observation`, `avgA`, `avgB`, `avgC`, `avgD`, `avgE`, `avgF`, `avgG`, `avgH`, `rsnaptitudesAvg`) VALUES
(1, 1, 'Stunted blood pressure', 'Medium', NULL, NULL, NULL, NULL, NULL, NULL, 'Clinical system perfect', 'well', NULL, NULL, NULL, NULL, NULL, NULL, 'normal', 25, 100, 175, 100, 175, 0, 25, 100, NULL),
(2, 2, 'HBP', 'Low', 'Okay', NULL, NULL, NULL, NULL, NULL, 'HBP_PRESCRIPTOR', 'very well', 'correct', NULL, NULL, NULL, NULL, NULL, 'observed', 175, 25, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rsnaptitudes_descp_prec`
--

DROP TABLE IF EXISTS `rsnaptitudes_descp_prec`;
CREATE TABLE IF NOT EXISTS `rsnaptitudes_descp_prec` (
  `descpPrecID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumDomicile` varchar(20) NOT NULL,
  `Descriptor` varchar(100) DEFAULT NULL,
  `Prescriptor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`descpPrecID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsnaptitudes_descp_prec`
--

INSERT INTO `rsnaptitudes_descp_prec` (`descpPrecID`, `quantumDomicile`, `Descriptor`, `Prescriptor`) VALUES
(1, 'Ai', 'Low blood pressure', 'Needs to see doctor for LBP'),
(2, 'Aii', 'Stunted blood pressure', 'Clinical system perfect'),
(3, 'Aiii', 'Normal Blood pressure', 'Urgentlly needs to see doctor for HBP'),
(4, 'Bi', 'High', 'Not well'),
(5, 'Bii', 'Low', 'very well'),
(6, 'Biii', 'Medium', 'well'),
(7, 'Ci', 'Okay', 'correct'),
(8, 'Cii', 'Very well', 'dependant'),
(9, 'Ciii', 'at least', 'impossible'),
(10, 'Di', NULL, NULL),
(11, 'Dii', NULL, NULL),
(12, 'Diii', NULL, NULL),
(13, 'Ei', NULL, NULL),
(14, 'Eii', NULL, NULL),
(15, 'Eiii', NULL, NULL),
(16, 'Fi', NULL, NULL),
(17, 'Fii', NULL, NULL),
(18, 'Fiii', NULL, NULL),
(19, 'Gi', NULL, NULL),
(20, 'Gii', NULL, NULL),
(21, 'Giii', NULL, NULL),
(22, 'Hi', NULL, NULL),
(23, 'Hii', NULL, NULL),
(24, 'Hiii', NULL, NULL),
(25, 'Aiv', 'Natural Aptitude HBP', 'HBP_PRESCRIPTOR'),
(26, 'Biv', 'Quite low', 'not sure'),
(27, 'Civ', NULL, NULL),
(28, 'Div', NULL, NULL),
(29, 'Eiv', NULL, NULL),
(30, 'Fiv', NULL, NULL),
(31, 'Giv', NULL, NULL),
(32, 'Hiv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rsnaptitudes_domicile_setup`
--

DROP TABLE IF EXISTS `rsnaptitudes_domicile_setup`;
CREATE TABLE IF NOT EXISTS `rsnaptitudes_domicile_setup` (
  `quantumID` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantumCode` char(2) NOT NULL,
  `quantumDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`quantumID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsnaptitudes_domicile_setup`
--

INSERT INTO `rsnaptitudes_domicile_setup` (`quantumID`, `quantumCode`, `quantumDescription`) VALUES
(1, 'A', 'Natural Aptitude a'),
(2, 'B', 'Natural Aptitude b'),
(3, 'C', 'Natural Aptitude c'),
(4, 'D', 'Natural Aptitude d'),
(5, 'E', 'Natural Aptitude e'),
(6, 'F', 'Natural Aptitude f'),
(7, 'G', 'Natural Aptitude g'),
(8, 'H', 'Natural Aptitude h');

-- --------------------------------------------------------

--
-- Table structure for table `summarytype`
--

DROP TABLE IF EXISTS `summarytype`;
CREATE TABLE IF NOT EXISTS `summarytype` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstType` varchar(100) NOT NULL,
  `secondType` varchar(100) NOT NULL,
  `thirdType` varchar(100) NOT NULL,
  `fourthType` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summarytype`
--

INSERT INTO `summarytype` (`id`, `firstType`, `secondType`, `thirdType`, `fourthType`) VALUES
(1, 'Best', 'Better', 'Good', 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `talent_domains`
--

DROP TABLE IF EXISTS `talent_domains`;
CREATE TABLE IF NOT EXISTS `talent_domains` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent_domains`
--

INSERT INTO `talent_domains` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '401', 'A', 'talent domain descp a'),
(2, '402', 'C', 'talent domain observation c');

-- --------------------------------------------------------

--
-- Table structure for table `talent_genre_development`
--

DROP TABLE IF EXISTS `talent_genre_development`;
CREATE TABLE IF NOT EXISTS `talent_genre_development` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` varchar(6) NOT NULL,
  `Grp` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent_genre_development`
--

INSERT INTO `talent_genre_development` (`Id`, `Code`, `Grp`, `Description`) VALUES
(1, '501', 'A', 'talent genre a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `dob` datetime DEFAULT NULL,
  `gender` varchar(4) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `userTitle` varchar(50) NOT NULL,
  `expert_level` varchar(100) DEFAULT NULL,
  `license_number` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `middleName`, `lastName`, `username`, `dob`, `gender`, `email`, `phone`, `password`, `country`, `region`, `role`, `age`, `userTitle`, `expert_level`, `license_number`) VALUES
(1, 'Ken', 'Wambora', 'KW', 'Gnt792', '1979-02-27 00:00:00', 'M', 'ken@gmail.com', '0723456789', '98efdd3bef2c11a68922ea5162704d99', 'Kenya', 'Nairobi', 'Manager', NULL, 'Mr.', NULL, NULL),
(2, 'Jones', 'Omollo', 'Khalligraph', 'Gnt792', '1990-06-23 00:00:00', 'M', 'papajones@mailaerver.com', '0723456789', '98efdd3bef2c11a68922ea5162704d99', 'Kenya', 'Mombasa', 'Manager', NULL, 'Mr.', NULL, NULL),
(3, 'Humphrey', NULL, 'Oborah', 'Administrator', '1974-09-17 00:00:00', 'M', 'komborah2015@gmail.com', NULL, '98efdd3bef2c11a68922ea5162704d99', 'Kenya', 'Nirobi', 'superAdmin', NULL, 'Prof.', NULL, NULL),
(4, 'Jane', '', 'Mwihaki', 'Gnt792', '1990-06-20 00:00:00', 'F', 'janemwihaki@gmail.com', '0706877851', '98efdd3bef2c11a68922ea5162704d99', 'Kenya', 'Nairobi', 'OralScreener', NULL, 'Ms.', NULL, NULL),
(5, 'John', 'Waweru', 'Doe', 'Gnt792', '1974-10-16 00:00:00', 'M', 'doe@yahoo.com', '0789876643', '98efdd3bef2c11a68922ea5162704d99', 'Kenya', 'Mombasa', 'Psycho', NULL, 'Mr.', NULL, NULL),
(6, 'John', 'Mwai', 'Waweru', 'Administrator', NULL, NULL, 'mwai@gmail.com', '0790345970', '98efdd3bef2c11a68922ea5162704d99', NULL, NULL, 'superAdmin', NULL, 'Mr.', NULL, NULL),
(7, 'Emmanuel', 'M', 'Mohol', 'Gnt792', '1968-10-22 00:00:00', 'M', 'mohol@gmail.com', '0706877851', '98efdd3bef2c11a68922ea5162704d99', 'Kenya', 'Mombasa', 'Expert', NULL, 'Dr.', 'Africa Talent Expert', '123344444444445');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
