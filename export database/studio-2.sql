-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 23, 2021 alle 11:49
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `corsiId` int(2) NOT NULL,
  `nomeCorso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`corsiId`, `nomeCorso`) VALUES
(1, 'Fotografia'),
(2, 'Videomaking'),
(3, 'Fotografia subacquea'),
(4, 'Video aerei');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `corsoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `corsoId`) VALUES
(7, '$2y$10$piokPZcrkIPxoQbDHGiWtejC8ufVN/tihFowiEHKn8zjlZeexeMmm', 'giovannicat', 2),
(8, '$2y$10$QEIVvZ6P1bt/HjREziUQqOSU9qDG3XHsj1ASEp2K89yxrDpFW8Kku', 'lucigno99', 1),
(9, '$2y$10$viIstNWWwIIWmswalTAzK.Ggc2frmvyhv5b32zA9zzFvv.iRtruyW', 'lucianocar', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`corsiId`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `corsoId` (`corsoId`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `corsiId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`corsoId`) REFERENCES `corsi` (`corsiId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
