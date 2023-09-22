-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 03:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `obrazac.dz4__`
--

CREATE TABLE `obrazac.dz4__` (
  `ID_Obrazac` int(11) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Kategorija` varchar(45) NOT NULL,
  `Opis` varchar(45) NOT NULL,
  `Vrijeme i datum` varchar(45) NOT NULL,
  `Broj telefona` varchar(45) NOT NULL,
  `URL` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registirani korisnik.dz4__`
--

CREATE TABLE `registirani korisnik.dz4__` (
  `ID_Korisnika` int(11) NOT NULL,
  `Ime_i_prezime` varchar(45) NOT NULL,
  `Godina_rodenja` date NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Korisnicko_ime` varchar(45) NOT NULL,
  `Lozinka` varchar(45) NOT NULL,
  `Potvrda_lozinkeSH` char(64) NOT NULL,
  `Uloga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registirani korisnik.dz4__`
--

INSERT INTO `registirani korisnik.dz4__` (`ID_Korisnika`, `Ime_i_prezime`, `Godina_rodenja`, `Email`, `Korisnicko_ime`, `Lozinka`, `Potvrda_lozinkeSH`, `Uloga`) VALUES
(2, 'Ivan Gadzic', '2023-06-14', 'igadzic@foi.hr', 'igadzic', 'N7uCFd11dbV8p9nKzR', '2d75bdf8912a37e078ec8b9052bf476a7895f4c6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uloga.dz4__`
--

CREATE TABLE `uloga.dz4__` (
  `IDUloge` int(11) NOT NULL,
  `Uloga` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uloga.dz4__`
--

INSERT INTO `uloga.dz4__` (`IDUloge`, `Uloga`) VALUES
(1, 'Administrator'),
(2, 'Moderator'),
(3, 'Reg korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obrazac.dz4__`
--
ALTER TABLE `obrazac.dz4__`
  ADD PRIMARY KEY (`ID_Obrazac`);

--
-- Indexes for table `registirani korisnik.dz4__`
--
ALTER TABLE `registirani korisnik.dz4__`
  ADD PRIMARY KEY (`ID_Korisnika`),
  ADD KEY `fk_Registirani korisnik.DZ4___Uloga.DZ4___idx` (`Uloga`);

--
-- Indexes for table `uloga.dz4__`
--
ALTER TABLE `uloga.dz4__`
  ADD PRIMARY KEY (`IDUloge`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obrazac.dz4__`
--
ALTER TABLE `obrazac.dz4__`
  MODIFY `ID_Obrazac` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registirani korisnik.dz4__`
--
ALTER TABLE `registirani korisnik.dz4__`
  MODIFY `ID_Korisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uloga.dz4__`
--
ALTER TABLE `uloga.dz4__`
  MODIFY `IDUloge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registirani korisnik.dz4__`
--
ALTER TABLE `registirani korisnik.dz4__`
  ADD CONSTRAINT `fk_Registirani korisnik.DZ4___Uloga.DZ4__` FOREIGN KEY (`Uloga`) REFERENCES `uloga.dz4__` (`IDUloge`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
