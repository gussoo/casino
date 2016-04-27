-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2016 at 09:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `casino`
--

-- --------------------------------------------------------

--
-- Table structure for table `casino_producto`
--

CREATE TABLE IF NOT EXISTS `casino_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `location` text NOT NULL,
  `openingt` varchar(255) NOT NULL,
  `is_activo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `casino_producto`
--

INSERT INTO `casino_producto` (`id`, `nome`, `location`, `openingt`, `is_activo`) VALUES
(75, 'Genting Casino Newcastle', 'Forth St, Newcastle upon Tyne NE1 3NZ', '12pm–6am', 0),
(76, 'Aspers Casino Newcastle', 'The Gate, Newgate St, Newcastle upon Tyne NE1 5TG', 'Open 24 hours', 0),
(77, 'Grosvenor Casino Newcastle', '100 St James Blvd, Newcastle upon Tyne NE1 4BN', 'Open 24 hours', 0),
(80, 'Genting Casino Chinatown London', '93 - 107 Shaftesbury Ave, London W1D 5DY', 'Open 24 hours', 0),
(79, 'Freyas Restaurant at Aspers Casino', 'Newgate Street, Newcastle upon Tyne NE1 5TG', '5pm–1:30am', 0),
(81, 'Grosvenor Casino Manchester', '2 Bury New Rd, Manchester, M8 9SG', 'Open 24 hours', 0);

-- --------------------------------------------------------

--
-- Table structure for table `casino_user`
--

CREATE TABLE IF NOT EXISTS `casino_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuari` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `casino_user`
--

INSERT INTO `casino_user` (`id`, `usuari`, `pass`, `activo`, `nivel`) VALUES
(6, 'casinoAdmin', 'ed2b1f468c5f915f3f1cf75d7068baae', 1, 1),
(7, 'casinoUser', 'ed2b1f468c5f915f3f1cf75d7068baae', 1, 2);
