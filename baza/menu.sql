-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 04:27 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE IF NOT EXISTS `sheet1` (
  `Ime` varchar(20) DEFAULT NULL,
  `Ime2` varchar(19) DEFAULT NULL,
  `Opis` varchar(48) DEFAULT NULL,
  `Opis2` varchar(41) DEFAULT NULL,
  `Sastojci` varchar(62) DEFAULT NULL,
  `Sastojci2` varchar(57) DEFAULT NULL,
  `Cijena` int(2) DEFAULT NULL,
  `Tag` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`Ime`, `Ime2`, `Opis`, `Opis2`, `Sastojci`, `Sastojci2`, `Cijena`, `Tag`) VALUES
('Pileći odrezak', 'Chicken fillet', 'Pileći odrezak na žaru s umakom od gljiva', 'Grilled chicken fillet in mushroom sauce', 'piletina, vrhnje, mix gljive, riža', 'chicken, sour cream, mix mushrooms, rice', 50, 'pileci'),
('Piazziaola', 'Piazziaola', 'Pileći odrezak na žaru Piazziaola', 'Grilled chicken fillet Pizziaola', 'piletina, rajčica, kapari, mozzarella, prilog', 'chicken, tomatoes, capers, mozzarella, side dish', 50, 'piazziaola'),
('Pureći odrezak', 'Turkey fillet', 'Pureći odrezak na žaru s umakom od gorgonzole', 'Grilled turkey fillet in gorgonzola sauce', 'puretina, gorgonzola, krumpir', 'turkey, gorgonzola, potatoes', 60, 'pureci1'),
('Pureći medaljoni', 'Turkey medallions', 'Pureći medaljoni zapečeni s mozzarellom', 'Turkey medallions baked with mozzarella', 'puretina, mozzarella, tamni umak, prilog', 'turkey, mozzarela, dark souce, side dish', 70, 'pureci2'),
('Bruschetta Italia', 'Bruschetta Italia', 'Predjelo', 'Small dish', 'domaći kruh, masl.ulje, češnjak, svježa rajčica, parmezan', 'homemade bread, olive oil, garlic, fresh tomatoes, cheese', 10, 'brushetta'),
('Margarita', 'Margarita', 'Pizza sa rajčicom i sirom', 'Pizza with tomato sauce and cheese', 'rajčica, sir', 'tomato sauce, cheese', 25, 'margarita'),
('Capricciosa', 'Capricciosa', 'Miješana pizza sa šunkom sirom i šampinjonima', 'Pizza with cheese,ham and mushrooms', 'rajčica, sir, šunka, šampinjoni', 'tomato sauce, cheese, ham, mushrooms', 30, 'capricciosa'),
('Špageti Carbonara', 'Spaghetti Carbonara', 'Špageti sa umakom', 'Spaghetti with sauce', 'špek, jaje, bijeli umak, parmezan', 'bacon, egg, white sauce, parmesan', 30, 'spageti'),
('Medaljoni od lososa', 'Salmon medallions', 'Medaljoni od lososa u umaku od kopra', 'Salmon medallions in dill sauce', 'losos, kopar, bijeli umak, zeleni i bijeli rezanci', 'salmon, dill, white sauce, green and white noodles', 55, 'losos'),
('Zapečene palačinke', 'Browned pancakes', 'Desert', 'Desert', 'orasi, grožđice, vanilija šećer, slatko vrhnje', 'walnuts, raisins, vanilla sugar, cream', 30, 'palacinke');

-- --------------------------------------------------------

--
-- Table structure for table `sheet2`
--

CREATE TABLE IF NOT EXISTS `sheet2` (
  `Ime` varchar(17) DEFAULT NULL,
  `Ime2` varchar(10) DEFAULT NULL,
  `Opis` varchar(10) DEFAULT NULL,
  `Opis2` varchar(10) DEFAULT NULL,
  `Sastojci` varchar(10) DEFAULT NULL,
  `Sastojci2` varchar(10) DEFAULT NULL,
  `Cijena` int(2) DEFAULT NULL,
  `Tag` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet2`
--

INSERT INTO `sheet2` (`Ime`, `Ime2`, `Opis`, `Opis2`, `Sastojci`, `Sastojci2`, `Cijena`, `Tag`) VALUES
('Coca-cola', NULL, NULL, NULL, NULL, NULL, 12, NULL),
('Sprite', NULL, NULL, NULL, NULL, NULL, 12, NULL),
('Fanta', NULL, NULL, NULL, NULL, NULL, 12, NULL),
('Juice', NULL, NULL, NULL, NULL, NULL, 14, NULL),
('Ožujsko', NULL, NULL, NULL, NULL, NULL, 10, NULL),
('Karlovačko', NULL, NULL, NULL, NULL, NULL, 10, NULL),
('Pan', NULL, NULL, NULL, NULL, NULL, 10, NULL),
('Staro Pramen', NULL, NULL, NULL, NULL, NULL, 12, NULL),
('Jamnica', NULL, NULL, NULL, NULL, NULL, 8, NULL),
('Jamnica Sensation', NULL, NULL, NULL, NULL, NULL, 10, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
