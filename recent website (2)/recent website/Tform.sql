SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `tform` (
  `id` int(11) NOT NULL,
  `Name` char(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Address` varchar(10) NOT NULL,
  `suggestion` varchar(110) NOT NULL,
  `session` varchar(10) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `tform`
  ADD PRIMARY KEY (`Sno`),
--   ADD UNIQUE KEY `email` (`email`);
COMMIT;
