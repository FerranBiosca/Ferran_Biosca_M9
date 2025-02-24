CREATE TABLE ferran_biosca_iticdesk;
-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Temps de generació: 10-02-2025 a les 19:09:45
-- Versió del servidor: 8.0.40-0ubuntu0.24.04.1
-- Versió de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `ferran_biosca_iticdesk`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE USER anna7 IDENTIFIED BY 'anna7';
GRANT ALL PRIVILEGES ON *.* to anna7;
FLUSH PRIVILEGES;

CREATE DATABASE anna_lea_iticdesk_1;

USE anna_lea_iticdesk_1;

CREATE TABLE `usuaris` (
  `DNI` int NOT NULL,
  `nom` text NOT NULL,
  `cognom` text NOT NULL,
  `correu` text NOT NULL,
  `contrasenya` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Bolcament de dades per a la taula `usuaris`
--

INSERT INTO `usuaris` (`DNI`, `nom`, `cognom`, `correu`, `contrasenya`, `rol`) VALUES
(123453234, 'Ferran', 'Biosca', 'ferran@email.com', '1234', 'administrador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
