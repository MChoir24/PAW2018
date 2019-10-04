
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE puppies;

CREATE TABLE `breeds` (
  `Breed` int(11) NOT NULL,
  `BreedName` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Temperament` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `breeds` (`Breed`, `BreedName`, `Temperament`) VALUES
(1, 'Doberman', 'Aggressive'),
(2, 'Poodle', 'Nervous'),
(3, 'Pitt Bull', 'Nasty'),
(4, 'Cattle Dog', 'Friendly'),
(5, 'Alsatian', 'Faithful'),
(6, 'Beagle', 'Smooches'),
(7, 'Schnauzer', 'Fluffy'),
(8, 'Jack Russell', 'Psychopathic'),
(9, 'Rat Terrier', 'Less aggressive than Jack Russell');

CREATE TABLE `animals` (
  `ID` int(11) NOT NULL,
  `PuppyName` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `BreedID` int(11) DEFAULT NULL,
  `Description` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Picture` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `animals` (`ID`, `PuppyName`, `BreedID`, `Description`, `Price`, `Picture`) VALUES
(1, 'Johnny', 4, 'Good for a farm', '100.00', 'Johnny.jpg'),
(2, 'Bully', 3, 'A fighter, excellent watchdog', '599.00', 'Bully.jpg'),
(3, 'Bo-Bo', 2, 'Suit sweet old lady', '150.00', 'Bo-Bo.jpg'),
(4, 'Albert', 6, 'Family dog', '20.00', 'Albert.jpg'),
(5, 'Fritz', 1, 'Watchdog', '129.00', 'Fritz.jpg'),
(6, 'Sam', 7, 'Good for nothing', '10.00', 'Sam.jpg'),
(7, 'Teddy', 8, 'Cuddyly', '150.00', 'Teddy.jpg');

ALTER TABLE `animals`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `breeds` (`BreedID`);

ALTER TABLE `breeds`
  ADD PRIMARY KEY (`Breed`);

ALTER TABLE `animals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `breeds`
  MODIFY `Breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `animals`
  ADD CONSTRAINT `breeds` FOREIGN KEY (`BreedID`) REFERENCES `breeds` (`Breed`);
COMMIT;
