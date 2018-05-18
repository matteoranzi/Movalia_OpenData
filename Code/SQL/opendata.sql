-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 18, 2018 alle 10:01
-- Versione del server: 10.1.30-MariaDB
-- Versione PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opendata`
--
CREATE DATABASE IF NOT EXISTS `opendata` DEFAULT CHARACTER SET ascii COLLATE ascii_bin;
USE `opendata`;

-- --------------------------------------------------------

--
-- Struttura della tabella `bikesharingtrento`
--

CREATE TABLE `bikesharingtrento` (
  `pk` int(11) NOT NULL,
  `name` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `address` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `id` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `bikes` int(11) DEFAULT NULL,
  `free` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `carparkingtorino`
--

CREATE TABLE `carparkingtorino` (
  `pk` int(11) NOT NULL,
  `name` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `id` int(50) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `free` int(11) DEFAULT NULL,
  `tendence` int(11) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bikesharingtrento`
--
ALTER TABLE `bikesharingtrento`
  ADD PRIMARY KEY (`pk`);

--
-- Indici per le tabelle `carparkingtorino`
--
ALTER TABLE `carparkingtorino`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `bikesharingtrento`
--
ALTER TABLE `bikesharingtrento`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `carparkingtorino`
--
ALTER TABLE `carparkingtorino`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
