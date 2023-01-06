SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `tform` (
  `id` int(11) NOT NULL,
  `Name` char(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Pickupp` varchar(10) NOT NULL,
  `Pickupday` varchar(110) NOT NULL,
  `timerange` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `information` varchar(10) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `order1`
  ADD PRIMARY KEY (`Sno`),
--   ADD UNIQUE KEY `email` (`email`);
COMMIT;
