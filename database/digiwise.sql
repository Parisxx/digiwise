-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 apr 2023 om 11:09
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiwise`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `challenges`
--

CREATE TABLE `challenges` (
  `category` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `challenges`
--

INSERT INTO `challenges` (`category`, `number`, `content`) VALUES
('HTML', 1, 'Dit is een voorbeeld'),
('PHP', 1, 'Dit is een voorbeeld'),
('HTML', 2, 'Dit is een voorbeeld'),
('Python', 1, 'Dit is een voorbeeld');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gallery`
--

CREATE TABLE `gallery` (
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gallery`
--

INSERT INTO `gallery` (`photo`) VALUES
('digiwise_11.png'),
('digiwise_10.png'),
('digiwise_9.png'),
('digiwise_8.png'),
('digiwise_7.png'),
('digiwise_6.png'),
('digiwise_4.png'),
('digiwise_3.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`title`, `date`, `text`) VALUES
('Digiwise', '2022-06-08', 'Het VISTA college heeft samen met Gilde Opleidingen het DigiWise event georganiseerd dat woensdag 8 juni plaatsvindt op de Brightlands Smart Services Campus in Heerlen. De ICT-opleidingen van Gilde en VISTA werken samen om de digitale vaardigheid en weerb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
